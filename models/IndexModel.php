<?php


class IndexModel extends Model{
    public function getDataClassic(){
        $sql = "SELECT * FROM product WHERE class = 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function getDataPremium(){
        $sql = "SELECT * FROM product WHERE class = 2";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function getDataBeluga(){
        $sql = "SELECT * FROM product WHERE class = 4";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function getDataWild(){
        $sql = "SELECT * FROM product WHERE class = 3";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function getDataPressed(){
        $sql = "SELECT * FROM product WHERE class = 5";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function getDiscountProduct(){
        $sql = 'SELECT * FROM product WHERE discount > 0';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function getbSellersData(){
        $sql = 'SELECT * FROM product WHERE hitStatus > 0';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function getRewiew(){
        $sql = 'SELECT * FROM rewiews';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
    public function setRewiew($name, $profession, $rewiew){
        $sql = "INSERT INTO rewiews (nameUser, rewiew, position)
        VALUES(:name, :rewiew, :position)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue('name', $name, PDO::PARAM_STR);
        $stmt->bindValue('rewiew', $rewiew, PDO::PARAM_STR);
        $stmt->bindValue('position', $profession, PDO::PARAM_STR);
        $stmt->execute();
    }
}