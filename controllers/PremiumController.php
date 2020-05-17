<?php


class PremiumController extends Controller{
    private $pageTpl = '/views/premium.tpl.php';

    public function __construct()
    {
        $this->model = new PremiumModel();
        $this->view = new View();
    }

    public function index(){
        $this->pageData['title'] = 'Premium';

        $this->view->render($this->pageTpl, $this->pageData);
    }
}