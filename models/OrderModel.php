<?php




class OrderModel extends Model{
    public function getOrder(){
        $sql = "SELECT * FROM orders";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $reslut[$row['id']] = $row;

        }
        return $reslut;
    }
}