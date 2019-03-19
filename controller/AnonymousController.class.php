<?php
    class AnonymousController extends Controller {
        public function __construct($currentRequest) {
            parent::__construct($currentRequest);
           if(! $currentRequest->nbrArg()== 0 ){

            if($currentRequest->nbrArg()== 5)
                $this -> validateInscription($currentRequest);
            else if ($currentRequest->nbrArg()== 2)
                $this -> Connect($currentRequest);
           }
        }

        public function Connect($currentRequest){
            $user = User::tryLogin($currentRequest->read('inscLogin'),$currentRequest->read('inscPassword'));

            if(is_object($user)) {
                $newRequest = new Request();
                $newRequest->changeController('user');
                $newRequest->write('user',$user->id());
                //print_r($_POST);
                //echo($user->id());
                $controller = Dispatcher::dispatch($newRequest);
                $controller -> execute();
            }
            else {
                $view = new View($this,'signIn');
                $view->setArg('inscErrorText','This login is already used');
                $view->render();
                echo("<script>alert('mauvais mot de passe ou login');</script>");
            }

        }

        public function defaultAction($currentRequest){
          $view1 = new AnonymousView($this,'head');
          //$view2 = new AnonymousView($this,'content');
          $view1->render();
          //$view2->render();
        }
        public function inscription($currentRequest){
            $view = new AnonymousView($this,'inscription');
            $view->render();
        }
        public function signIn($currentRequest){
            $view = new AnonymousView($this,'signIn');
            $view->render();
        }

        public function validateInscription($request) {
            $login = $request->read('inscLogin');
            $mail =$request ->read('mail');
            $password = $request -> read('inscPassword');

         if ($login =='' || $password ==''){
                $view = new View($this,'inscription');
                $view->setArg('inscErrorText','This login is already used');
                $view->render();
                echo("");
                echo("<script>alert('Veuillez renseigner un login et un mot de passe');</script>");
            }
             else if(User::isLoginUsed($login)) {
                $view = new View($this,'inscription');
                $view->setArg('inscErrorText','This login is already used');
                $view->render();
                echo("<script>alert('Ce login existe déjà');</script>");


            }


            else if(User::isMailUsed($mail)) {
                $view = new View($this,'inscription');
                $view->setArg('inscErrorText','This login is already used');
                $view->render();
                echo("");
                echo("<script>alert('cette adresse mail existe déjà');</script>");


            }
            else {
            $password = $request->read('inscPassword');
            $nom = $request->read('nom');
            $prenom = $request->read('prenom');
            $mail = $request->read('mail');
            $user = User::create($login, $password,$mail,$nom,$prenom);
            if(!isset($user)) {

                $view = new View($this,'inscription');
                $view->setArg('inscErrorText', 'Cannot complete inscription');
                $view->render();
            }
            else {


                $newRequest = new Request();
                $newRequest->changeController('user');
                $newRequest->write('user',$user->id());
                //print_r($_POST);
                //echo($user->id());
                $controller = Dispatcher::dispatch($newRequest);
                $controller -> execute();

            }
            }
        }
    }

    ?>
