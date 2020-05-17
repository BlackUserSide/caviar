<?php


class SearchModel extends Model{
    public function getDataOrder($numberOrder){
        $sql = "SELECT * FROM orders WHERE orderNumber = :numberOrder";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('numberOrder', $numberOrder, PDO::PARAM_STR);
        $stmt->execute();
        $result= array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $result[] = $row;
        }
        return $result;
    }
}