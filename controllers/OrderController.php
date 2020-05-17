<?php



class OrderController extends Controller
{
    private $pageTpl = '/views/order.tpl.php';
    public function __construct()
    {
        $this->model = new OrderModel();
        $this->view = new View();
    }
    public function index()
    {
        $this->pageData['title'] = 'Order List';
        $this->pageData['ordersInStat'] = array_reverse($this->model->getOrder());;
       
        
       
        $this->view->render($this->pageTpl, $this->pageData);
    }
    
}
