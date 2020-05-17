<?php 


class MainadminController extends Controller {
    private $pageTpl = '/views/mainadmin.tpl.php';


    public function __construct()
    {
        $this->model = new MainadminModel();
        $this->view = new View();
    }

    public function index(){

        $this->pageData['title'] = 'Admin Panel';
        if(!isset($_SESSION['user'])){
            header('Location: /');
        }
        if(!empty($this->model->getOrdersDataClose())){
            $this->pageData['ordersCountClose'] = count($this->model->getOrdersDataClose());
        }else{
            $this->pageData['ordersCountClose'] = '0';
        }
        $this->pageData['ordersCount'] = count($this->model->getOrdersData());
        $this->pageData['ordersInStat'] = $this->model->getOrdersDataStat();
        $this->view->render($this->pageTpl, $this->pageData);
    }
    public function logOut(){
        session_destroy();
        header('Location: /wild');
    }
    public function checkOrder(){
        if(!empty($this->model->getOrdersDataStat())){
            $result = count($this->model->getOrdersDataStat());
            echo json_encode($result);
        }else{
            $result = 0;
            echo json_encode($result);
        }
    }
    
    




}