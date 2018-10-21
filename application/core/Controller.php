<?
namespace application\core;

use application\core\View;

abstract class Controller{

    public $routs;
    public $view;
    public function __construct($routs)
    {
        $this->routs = $routs;
        $this->view  = new View($routs);
        $this->model = $this->loadModel($routs['controller']);
    }

    public function loadModel($name){
        $path="application\models\\".ucfirst($name);
        if(class_exists($path)){
            return new $path;
        }
    }
}
?>