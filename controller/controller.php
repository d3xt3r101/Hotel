<?php
include 'C:\xampp\htdocs\Hotel\model\user.php';
class Cntr extends User{
    public function createRes($name,$phone,$email,$approval){
        $this->setRes($name,$phone,$email,$approval);
    }
    public function createLogin($myusername,$mypassword){
        $count=$this->setLogin($myusername,$mypassword);
        return $count;
    }
    public function viewroom($id){
        $row=$this->getViewRoom($id);
        return $row;
    }
    public function viewPayment($pid){
        $prow=$this->getViewPayment($pid);
        return $prow;
    }

}
?>