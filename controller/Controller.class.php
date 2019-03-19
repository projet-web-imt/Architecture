<?php
abstract class Controller extends MyObject {
    private $request;
    private $action;
    public function __construct($currentRequest) {
        $this->request = $currentRequest;
    }
    
    Abstract function defaultAction($currentRequest);

    public function execute(){
        if(is_null($this->request->getAction())){
            $this->defaultAction($this->request);
        }
        else {
            $action = $this->request->getAction();
            $this-> $action($this->request);
        }
    }
}
?>