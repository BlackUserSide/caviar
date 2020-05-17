<?php


class ClassicController extends Controller{
    private $pageTpl = '/views/classic.tpl.php';


    public function __construct()
    {
        $this->model = new ClassicModel();
        $this->view = new View();
    }

    public function index() {
        $this->pageData['title'] = 'Classic';

        $this->view->render($this->pageTpl, $this->pageData);
    }
}