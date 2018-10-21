<?

namespace application\controllers;

use application\core\Controller;
use application\models\Main;

class AccountController extends Controller {

    public function __construct($routs)
    {
        parent::__construct($routs);

        if(empty($_SESSION['log']) and $this->routs['action']!="login" and empty($_POST)){
            $this->view->redirect("/account/login");
        }

    }

    public  function loginAction(){

        $this->view->render("Логин");

    }
    public  function logoutAction(){

      unset($_SESSION['log']);
      $this->view->redirect("/");
      exit();
    }
    public  function authAction(){
      if($_POST['name']=="admin" and $_POST['password']=="123"){
          $_SESSION['log']='admin';
          exit(json_encode(['url'=>"/account/dashboard/"]));

      }else{
          exit(json_encode(['message'=>"Не верный логин или пароль"]));
      }
    }
    public  function dashboardAction(){
        $mainmodel=new Main();
        $this->view->render("Админка",array(
            "tasks"=>$mainmodel->showAllTask()
        ));
    }
    public function editAction(){
        $mainmodel=new Main();
        $this->view->render("Редактирование задания",array(
            "task"=>$mainmodel->getTask($this->routs['id'])[0]
        ));
    }
    public function updateAction(){
        $mainModel=new Main();
        if(!empty($_POST)){
            $message=$mainModel->updateTask($_POST);
            exit(json_encode(['message'=>$message]));
        }

    }
}
?>