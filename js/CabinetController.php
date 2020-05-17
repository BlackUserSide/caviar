<?php

class CabinetController extends Controller
{
    private $pageTpl = "./views/cabinet.tpl.php";

    public function __construct()
    {
        $this->model = new CabinetModel();
        $this->view = new View();
    }
    public function index()
    {
        if (empty($_SESSION)) {
            header("Location: /login");
        }
        $roleIdUser = $this->model->getRoleUser();
        if ($roleIdUser == 1) {
            header('Location: /admin');
        }
       if($_SESSION['statusDreamer'] == 1){
           header('Location: /dreamer');
       }else{
           header('Location: /philanthropist');
       }
        
        
        // if($_FILES){
        //     if($_FILES['avatar']['type'] != 'image/png' && $_FILES['avatar']['type'] != 'image/jpeg' && $_FILES['avatar']['type'] != 'image/gif'){
        //         $this->pageData['errorAvatar'] = 'Неверный фармат файла';
        //     }else{
        //         $fileName = $_SESSION['idUser'].'.'.$_FILES['avatar']['name'];
                
        //         move_uploaded_file($_FILES['avatar']['tmp_name'], UPLOADAVATAR_DIR. $fileName);
                
                
        //         $checkUserAvatar = $this->model->checkUserAvatar();
                
        //         $this->model->addUserAvatar($fileName, $checkUserAvatar);
        //         header('Location: /cabinet');
        //         if(!empty($checkUserAvatar)){
                    
        //             unlink(UPLOADAVATAR_DIR. $checkUserAvatar);
        //             header('Location: /cabinet');
        //         }
                
                
        //     }
        // }
        
        $this->pageData['title'] = "Личный кабинет";
       
        
       
        
        
        $this->view->render($this->pageTpl, $this->pageData);
    }
    public function logout()
    {
        session_destroy();
        header('Location: /');
    }
    
    
    
    
   
       
}
