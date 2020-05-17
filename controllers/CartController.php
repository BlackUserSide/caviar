<?php


class CartController extends Controller
{
    private $pageTpl = '/views/cart.tpl.php';

    public function __construct()
    {
        $this->model = new CartModel();
        $this->view = new View();
    }

    public function index()
    {
        $this->pageData['title'] = 'Cart' . '&nbsp' . '||' . '&nbsp' . 'Black Caviar';
        if (!isset($_SESSION['cart'])) {
            if ($this->getDataCart()) {
                $this->pageData['errorCart'] = 'true';
            } else {
                $this->pageData['errorCart'] = 'false';
            }
        }
        
        if (!empty($_SESSION['cart'])) {
            $this->pageData['test'] = $this->model->test();
        }

        $this->view->render($this->pageTpl, $this->pageData);
    }

    public function addCart()
    {
        if (!empty($_POST)) {
            $id = $_POST['id_tov'];
            if (!isset($_SESSION['cart'])) {
                $temp[$id] = 1;
            } else {
                $temp = $_SESSION['cart'];
                if (!array_key_exists($id, $temp)) {
                    $temp[$id] = 1;
                } else {
                    $temp[$id] = $temp[$id] + 1;
                }
            }

            $_SESSION['cart'] = $temp;
        }
    }
    public function getDataCart()
    {
        if (!empty($_SESSION)) {
            $count = count($_SESSION['cart']);

            foreach ($_SESSION['cart'] as $key => $val) {
                $id = $key;
            }


            // $this->pageData['cartDataProduct'];

            return true;
        } else {
            return false;
        }
    }
    public function changeCol()
    {
        if (!empty($_POST)) {
            $id = $_POST['id'];
            $col = $_POST['col'];
            $temp = $_SESSION['cart'];
            $temp[$id] = $col;
            $_SESSION['cart'] = $temp;
        }
    }
    public function delectProduct()
    {
        if (!empty($_POST)) {
            $id = $_POST['idDel'];
            $temp = $_SESSION['cart'];
            if ($temp) {
                unset($temp[$id]);
            }
            $_SESSION['cart'] = $temp;
        }
    }
    public function startOrder()
    {
        
        if (!empty($_POST)) {
            
            $email = $_POST['email'];
            $fullNmae = $_POST['fullNmae'];
            $country = $_POST['country'];
            $postalCode = $_POST['postalCode'];
            $adress = $_POST['adress'];
            $apartment = $_POST['apartment'];
            $city = $_POST['city'];
            $phone = $_POST['number'];
            $discontPrice = $_POST['discontPrice'];
            $allPrice = $_POST['allPrice'];
            
            $date = date("d.m.y");
            do{
                $orderNumber = mt_rand(0, 999999999);
                
                
                
                
                if($this->model->checkNumberOrder($orderNumber)){
                    
                    break;
                }
                
            }while(0);
            $this->model->startOrderModel($email, $fullNmae, $country, $postalCode, $adress, $apartment, $city, $phone, $discontPrice, $allPrice, $date, $orderNumber);
            unset($_SESSION['cart']);
            header('Location: /');
            
            
            return true;

        } else {
            return false;
        }
    }
}
