
<?php
    class Core {
        protected $currentController = 'login';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct()
        {
            $url = $this->getUrl();

            // var_dump(ucwords($url[0]));

            if (file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
                $this->currentController = ucwords($url[0]);

                unset($url[0]);

                // LLama al controlador
                require_once '../app/controllers/'.$this->currentController.'.php';

                // Instancia el controlador
                $this->currentController = new $this->currentController;

                if (isset($url[1])) {
                    if (method_exists($this->currentController, $url[1])) {
                         $this->currentMethod = $url[1];

                         unset($url[1]);
                    }
                }

                // call_user...
            }
        }

        public function getUrl()
        {
            if (isset($_GET['url'])) {
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);

                return $url;
            }
        }
    }
?>