<?

namespace application\core;

class View{

    public $path;
    public $route;
    public $layout="default";

    public function __construct($route)
    {
       $this->route = $route['controller']."/".$route['action'];
       $this->path =$route['controller']."/".$route['action'];
    }

    public function render($title,$vars=[]){
        extract($vars);
        $path="application/views/".$this->path.".php";
        if(file_exists($path)){
            ob_start();
            require $path;
            $content=ob_get_clean();
            require 'application/views/layouts/'.$this->layout.".php";
        }else{
            echo "Ошибка, создай фал вида.";
        }
    }
    public static function errorCode($code){
        http_response_code($code);
        require 'application/views/errors/'.$code.".php";
        exit();
    }
    public function redirect($url){
        header('location: '.$url);
        exit();
    }
}
?>