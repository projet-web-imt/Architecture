<?php
    class UserController extends Controller {
        protected $user;
        
        
        public function __construct($request) {
            parent::__construct($request);
            session_start();
            $userId = NULL;
            
            $userId = $request->read('user');
            if(!is_null($userId))
            $this->user = User::getWithId($userId);
            
        }


        public function defaultAction($currentRequest){
            //if (is_null($this->user)){
              //  echo('user is null');}
            $view = new UserView($this,'user');
            $view ->setUser($this->user);
            
            $view->render();
        }


        public function profile($args) {
            $v = new UserView($this->user);
            $v->render();
        }

        public function disconnect($args) {
            if(isset($_SESSION))
                session_destroy();
            //echo  "URL = " . __BA::SE_URL;
            header("Location: /~vincent.belotti");
        }
    }

?>