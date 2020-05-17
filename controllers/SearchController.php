<?php



class SearchController extends Controller{
    private $pageTpl = '/views/search.tpl.php';
    public function __construct()
    {
        $this->model = new SearchModel();
        $this->view = new View();
    }
    public function index(){
        $this->pageData['title'] = 'Search Order';
        $this->view->render($this->pageTpl, $this->pageData);
    }
    public function getDataOrder(){
        if(!empty($_POST)){
            $numberOrder = $_POST['numberOreder'];
            $result = $this->model->getDataOrder($numberOrder);
            if(!empty($result)){
                
               
                echo json_encode($result);
                
            }else{
                echo json_encode(array('status' => 1));
            }
        }else{
            echo json_encode(array('status' => 0));
        }
    }
}