<?
namespace application\core;

abstract class Controller{

    public $routs;

    public function __construct($routs)
    {
        $this->routs=$routs;
    }

}
?>