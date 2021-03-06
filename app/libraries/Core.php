<?php
    class Core {
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
            $url = $this->getUrl();

            //look in controllers for values
            if(@file_exists('../app/controllers/'. ucwords($url[0]) . '.php')){
                //set a new controller, ucwords for format the first letter
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            }

            require_once '../app/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController;


            //getting the other part of url
            if (isset($url[1])) {
                if (method_exists($this->currentController, $url[1])) {
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }

            //get parameters 
            $this->params = $url ? array_values($url) : [];

            //callback with array of params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

        }

        public function getUrl(){
            if (isset($_GET['url'])) {
                $url = rtrim($_GET['url'],'/');
                //Filter string/number
                $url = filter_var($url, FILTER_SANITIZE_URL);
                //Breaking it into an array
                $url = explode('/', $url);
                return $url;
            }
        }

    }