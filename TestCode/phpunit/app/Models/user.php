<?php
namespace App\Models;
class User{
    public function setRes($name,$phone,$email,$approval){
        $sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
        $con=mysqli_connect("localhost","root","","hotel") or die(mysql_error());
					
        if(mysqli_query($con,$sql)){
            
        }
    }
    public function setLogin($myusername,$mypassword){
        $sql = "SELECT id FROM login WHERE usname = '$myusername' and pass = '$mypassword'";
        $con=mysqli_connect("localhost","root","","hotel") or die(mysql_error());
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result);
        return $count;
    }
    public function getViewRoom($id){
        $sql ="Select * from roombook where id = '$id'";
        $con=mysqli_connect("localhost","root","","hotel") or die(mysql_error());
        $re = mysqli_query($con,$sql);
        $row=mysqli_fetch_array($re);
        return $row;
    }
    public function getViewPayment($pid){
        $sql ="select * from payment where id = '$pid' ";
        $con=mysqli_connect("localhost","root","","hotel") or die(mysql_error());
        $re = mysqli_query($con,$sql);
        $prow=mysqli_fetch_array($re);
        return $prow;
    }
}
?>