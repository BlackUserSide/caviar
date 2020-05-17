<?php


class WildModel extends Model{
    public function loginAdmin($login, $pass){
        $pass = md5($pass);
        $sql = "SELECT * FROM users WHERE email = :login AND password = :pass";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('login', $login, PDO::PARAM_STR);
        $stmt->bindValue('pass', $pass, PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!empty($res)){
            $_SESSION['user']['login'] = $login;
            header('Location: /mainadmin');
        }else{
            return false;
        }
    }
}