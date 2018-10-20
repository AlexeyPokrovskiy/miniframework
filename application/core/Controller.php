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
    }

}
?>