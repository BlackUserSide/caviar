<?php


class IndexController extends Controller{
    private $pageTpl = '/views/main.tpl.php';

    public function __construct()
    {
        $this->model = new IndexModel();
        $this->view = new View();
    }

    public function index(){
        $this->pageData['title'] = 'Black Caviar';
        $this->pageData['discountProduct'] = $this->model->getDiscountProduct();
        $this->pageData['sortDiscount'] = array_slice($this->pageData['discountProduct'], 0, 6);
        $this->pageData['classicDataProduct'] = $this->model->getDataClassic();
        $this->pageData['premiumDataProduct'] = $this->model->getDataPremium();
        $this->pageData['belugaDataProduct'] = $this->model->getDataBeluga();
        $this->pageData['wildDataProduct'] = $this->model->getDataWild();
        $this->pageData['pressedDataProduct'] = $this->model->getDataPressed();
        $this->pageData['bSellersData'] = array_slice($this->model->getbSellersData(), 0, 1);
        $this->pageData['bSellersData2'] = array_slice($this->model->getbSellersData(), 1, 1);
        $this->pageData['bSellersData3'] = array_slice($this->model->getbSellersData(), 2, 3);
        $this->pageData['rewiewData'] = array_reverse($this->model->getRewiew());
        $this->view->render($this->pageTpl, $this->pageData);
    }
    public function letCallback(){
        if(!empty($_POST)){
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            echo json_encode(array('name' => $name, 'phone' => $phone));
        }else{
            echo json_encode(array('status' => 'empty'));
        }
    }
    public function setRewiew(){
        if(!empty($_POST)){
            $name = $_POST['name'];
            $profession = $_POST['profession'];
            $rewiew = $_POST['rewiew'];
            $this->model->setRewiew($name, $profession, $rewiew);
            echo json_encode(array('status' => 'success'));
        } else{
            echo json_encode(array('status' => 'wrong'));
        }
    }

}