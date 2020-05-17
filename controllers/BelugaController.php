<?php


class BelugaController extends Controller {
    private $pageTpl = '/views/beluga.tpl.php';


    public function __construct()
    {
        $this->model = new BelugaModel();

        $this->view = new View();
    }

    public function index(){
        $this->pageData['title'] = 'Beluga';
        $this->view->render($this->pageTpl, $this->pageData);
    }
}