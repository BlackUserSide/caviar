<?php




class CartModel extends Model
{
    public function getDataProduct($id)
    {
        $sql = "SELECT * FROM product WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('id', $id, PDO::PARAM_STR);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function test()
    {
        $sql = "SELECT * FROM product WHERE id IN(";
        foreach ($_SESSION['cart'] as $key => $val) {
            $sql .= $key . ',';
        }
        $sql = substr($sql, 0, -1) . ")";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function startOrderModel($email, $fullNmae, $country, $postalCode, $adress, $apartment, $city, $phone, $discontPrice, $allPrice, $date, $orderNumber)
    {
        // $sql = "INSERT INTO orders(fullName, mailUser, country, postal, address, appartment, city, phone, discount, total, status, date, orderNumber) VALUES( 
        // :fullName, :mailUser, :country, :postal, :address, :appartment, :city, :phone, :discount, :total, 0, :date, :orderNumber";
        // $stmt = $this->db->prepare($sql);
        // $stmt->bindValue('fullName', $fullNmae, PDO::PARAM_STR);
        // $stmt->bindValue('mailUser', $email, PDO::PARAM_STR);
        // $stmt->bindValue('country', $country, PDO::PARAM_STR);
        // $stmt->bindValue('postal', $postalCode, PDO::PARAM_STR);
        // $stmt->bindValue('adress', $adress, PDO::PARAM_STR);
        // $stmt->bindValue('appartment', $apartment, PDO::PARAM_STR);
        // $stmt->bindValue('city', $city, PDO::PARAM_STR);
        // $stmt->bindValue('phone', $phone, PDO::PARAM_STR);
        // $stmt->bindValue('discount', $discontPrice, PDO::PARAM_STR);
        // $stmt->bindValue('total', $allPrice, PDO::PARAM_STR);
        // $stmt->bindValue('date', $date, PDO::PARAM_STR);
        // $stmt->bindValue('orderNumber', $orderNumber, PDO::PARAM_STR);
        // $stmt->execute();
        $sql = "INSERT INTO orders(fullName, mailUser, country, postal, address, appartment, city, phone, discount, total, status, date, orderNumber)
            VALUES(:fullName, :mailUser, :country, :postal, :addres, :appartment, :city, :phone, :discount, :total, 0, :date, :orderNumber)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('fullName', $fullNmae, PDO::PARAM_STR);
        $stmt->bindValue('mailUser', $email, PDO::PARAM_STR);
        $stmt->bindValue('country', $country, PDO::PARAM_STR);
        $stmt->bindValue('postal', $postalCode, PDO::PARAM_STR);
        $stmt->bindValue('addres', $adress, PDO::PARAM_STR);
        $stmt->bindValue('appartment', $apartment, PDO::PARAM_STR);
        $stmt->bindValue('city', $city, PDO::PARAM_STR);
        $stmt->bindValue('phone', $phone, PDO::PARAM_STR);
        $stmt->bindValue('discount', $discontPrice, PDO::PARAM_STR);
        $stmt->bindValue('total', $allPrice, PDO::PARAM_STR);
        $stmt->bindValue('date', $date, PDO::PARAM_STR);
        $stmt->bindValue('orderNumber', $orderNumber, PDO::PARAM_STR);
        $stmt->execute();
        $this->insertProduct($orderNumber);
    }
    public function checkNumberOrder($orderNumber)
    {
        $sql = "SELECT id FROM order WHERE numberOrder = :numberOrder";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('numberOrder', $orderNumber, PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetchColumn();

        if (!empty($res)) {
            return true;
        } else {

            return false;
        }
    }
    public function insertProduct($orderNumber)
    {
        foreach ($_SESSION['cart'] as $keu => $val) {
            $sql = "INSERT INTO orderItems(idProduct, colProduct, numberOrder) VALUES(
                :idProduct, :colProduct, :numberOrder)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue('idProduct', $keu, PDO::PARAM_STR);
            $stmt->bindValue('colProduct', $val, PDO::PARAM_STR);
            $stmt->bindValue('numberOrder', $orderNumber, PDO::PARAM_STR);
            $stmt->execute();
        }
    }
}
