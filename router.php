<?php

class Router
{
    static public function parse($url, $request)
    {
        $url = trim($url);
        if ($url == "/demo/index.php")
        {
            $request->controller = "Home";
            $request->action = "index";
            $request->params = [];
        }
        else
        {   
            $explode_url = explode('/', $url);
           // var_dump($explode_url);
            $explode_url = array_slice($explode_url, 3);
            $request->controller = $explode_url[0];
            //var_dump($request->controller);
            //echo "<br/>";
            $request->action = $explode_url[1];
            //var_dump($request->action);
            $request->params = array_slice($explode_url, 2);
        }
    }
}
?>