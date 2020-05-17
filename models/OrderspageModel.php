<?php




class OrderspageModel extends Model{
    
    public function getOrderInfo($id){
        $sql = "SELECT * FROM orders WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('id', $id, PDO::PARAM_STR);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    
    public function getProductInfo($numberOrder){
        $sql = "SELECT * FROM orderItems WHERE numberOrder = :numberOrder";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('numberOrder', $numberOrder, PDO::PARAM_STR);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['idProduct']] = $row;
        }
        return $result;
    }
    public function getProdctData($productinfo){
        $sql = "SELECT * FROM product WHERE id IN(";
        foreach ($productinfo as $key => $val) {
            $sql .= $val['idProduct'] . ',';
        }
        $sql = substr($sql, 0, -1) . ")";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function changeStatus($newStaus, $id){
        $sql = "UPDATE orders SET status = :status WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('status', $newStaus, PDO::PARAM_STR);
        $stmt->bindValue('id', $id, PDO::PARAM_STR);
        $stmt->execute();
    }

}