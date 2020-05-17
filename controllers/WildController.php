<?php



class WildController extends Controller {
    private $pageTpl = '/views/wild.tpl.php';

    public function __construct()
    {
        $this->model = new WildModel();
        $this->view = new View();
    }

    public function index(){
        $this->pageData['title'] = "Wild Ossetra";
        if(!$this->login()){
            $this->pageData['error'] = 'Incorrect login or password';
        }
        if(isset($_SESSION['user'])){
            header('Location: /mainadmin');
        }
        $this->view->render($this->pageTpl, $this->pageData);
    }
    
    public function login(){
        if(!empty($_POST)){
            $login = $_POST['email'];
            $pass = $_POST['pass'];
            if(!$this->model->loginAdmin($login, $pass)){
                return false;
            } else{
                return true;
            }
        }
    }
}