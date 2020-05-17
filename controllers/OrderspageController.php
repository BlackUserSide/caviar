<?php 





class OrderspageController extends Controller{
    private $pageTpl = '/views/orderspage.tpl.php';
    
    public function __construct()
    {
        $this->model = new OrderspageModel();
        $this->view = new View();

    }

    public function index(){
        if(empty($_GET)){
            if(isset($_SESSION['user'])){
                header('Location: /mainadmin');
            }else{
                header('Location: /');
            }
        }
        $id = $_GET['id'];
        $this->pageData['orderInfo'] = $this->model->getOrderInfo($id);
     
        foreach($this->pageData['orderInfo'] as $key => $val){
            $numberOrder = $val['orderNumber'];
        }
        
        $this->pageData['productInfo'] = $this->model->getProductInfo($numberOrder);
        $productinfo = $this->pageData['productInfo'];
       
        $this->pageData['productData'] = $this->model->getProdctData($productinfo);
        
        $this->pageData['title'] = $numberOrder.'&nbsp'.'№'.'||'.'&nbsp'.'Order';

        $this->view->render($this->pageTpl, $this->pageData);
    }
    public function changeStatus(){
        echo 1;
        if(!empty($_POST)){
            $newStaus = $_POST['val'];
            $id = $_GET['id'];
            $this->model->changeStatus($newStaus, $id);
        }
        
    }
}