<?php




class PressedController extends Controller{
    private $pageTpl = '/views/pressed.tpl.php';

    public function __construct()
    {
        $this->model = new PressedModel();
        $this->view = new View();
    }

    public function index(){
        $this->pageData['title'] = 'Pressed';
        $this->view->render($this->pageTpl, $this->pageData);
    }
}