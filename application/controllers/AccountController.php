<?

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

    public  function loginAction(){
        echo "страница входа";
        var_dump($this->routs);
    }
    public  function registerAction(){
        echo "страница регистрации";
    }
}
?>