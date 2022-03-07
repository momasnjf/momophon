<?php
class App{
    protected $controller = "Home";
    protected $action = "Index";
    protected $params = [];

    function __construct()
    {
        $arr = $this->urlProcess();
        // var_dump($arr);

        //Map controller
        if(file_exists("../mvc/controllers/$arr[0].php"))
        {
            $this->controller = $arr[0];
            unset($arr[0]); 
        }
        require_once "./mvc/controllers/$this->controller.php";
        $this->controller = new $this->controller;

        //Map Action
        if(isset($arr[1]))
        {
            if(method_exists($this->controller, $arr[1]))
            {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
            

        // unset($arr[0]); unset($arr[1]);

        //Map Params
        $this->params = $arr ? array_values($arr) : [];

        // var_dump($this->params);

        call_user_func_array([$this->controller, $this->action], $this->params);

    }

    function urlProcess(){
        if(isset($_GET['url']))
        {
            return explode("/",$_GET['url']);
        }
    }
}
?>
