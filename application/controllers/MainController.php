<?

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

    public  function indexAction(){
      $this->view->render("Главная",array(
          'name'=>"Alex"
      ));
    }
    public  function createAction(){
        $this->view->render("Создать задачу",array(

        ));
    }
    public  function saveAction(){
      if(!empty($_POST)){
          $message=$this->model->createTask($_POST);
          exit(json_encode(['message'=>$message]));
      }


    }

}
?>