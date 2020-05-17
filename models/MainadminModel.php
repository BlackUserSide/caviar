<?php



class MainadminModel extends Model{
    public function getOrdersData(){
        $sql = "SELECT * FROM orders";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;


    }
    public function getOrdersDataClose(){
        $sql = "SELECT * FROM orders WHERE status = 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        if(!empty($result)){
            return $result;
        }else{
            $result = false;
            return $result;
        }
        
    }
    public function getOrdersDataStat(){
        $sql = "SELECT * FROM orders WHERE status = 0";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        if(!empty($result)){
            return $result;
        }else{
            $result = false;
            return $result;
        }
    }
}