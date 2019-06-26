<?php
$server = "localhost";
$dbusername = "root";
$dbpassword = "slimeSage@7797";
$table = "register";
$conn = new mysqli($server,$dbusername,$dbpassword,"math");
if($conn){
    echo "connected";
   $name1 = $_POST["n"];
                $designation1 = "test1";
                $affi1 = "test1";
                $sex1 = "male";
                $address1 = "test";
                $mob_num1 = "12345";
                $mail1 = "tset@test.com";
                $trans1 = "tset2";
                $choice1 = "ysy";
                $title1 = "ysey";
                $date1 = "2000-12-12";
                $sign1 = "testr";
                foreach($_POST as $s=>$value){
                    echo $value."<br>";
                }
                $sql_query = "INSERT INTO register(name,designation,affiliation,sex,address,number,trans_id) VALUES ($name1,$designation1,$affi1,$sex1,$address1,$mob_num1,$trans1)";
                if($conn->query($sql_query)){
                    echo "<br>DONE";
                }else{
                    echo "<br>".$conn->error;
                }
}else{
    echo $conn->mysql_error;
}
?>