<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }

    </style>
   
</head>

<body>
        <?php
        $server = "localhost";
        $dbusername = "root";
        $dbpassword = "slimeSage@7797";
        $table = "register";
        $in = false;
        
        if(isset($_POST["sub"])){
        $conn = new mysqli($server,$dbusername,$dbpassword,"math");
            if($conn){
                $name1 = $_POST["n"];
                $designation1 = $_POST['desig'];
                $affi1 = $_POST['affi'];
                $sex1 = $_POST['sex'];
                $address1 = $_POST['addre'];
                $mob_num1 = $_POST['mob'];
                $mail1 = $_POST['mail'];
                $trans1 = $_POST['trans'];
                $choice1 = $_POST['choice'];
                $title1 = $_POST['title'];
                $date1 = $_POST['date'];
                $sign1 = $_POST['sig'];
                foreach($_POST as $s=>$value){
                    echo $value."<br>";
                }
                $sql_query = "INSERT INTO register(name,designation,affiliation,sex,address,number,trans_id,tar_) VALUES ('$name1','$designation1','$affi1','$sex1','$address1','$mob_num1','$trans1','$date1')";
                if($conn->query($sql_query)){
                    echo "<br>DONE";
                }else{
                    echo "<br>".$conn->error;
                }
            }
            function checkNumber($n){
                if(preg_match("/^")){
                    
                }
            }
        }
        ?>
    <div class="wrapper">

        <form method="post" class="needs-validation">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="n" required>
            </div>
            <div class="form-group">
                <label for="des">Designation</label>
                <input type="text" class="form-control" name="desig" id="des" required>
            </div>
            <div class="form-group">
                <label for="aff">Affiliation:</label>
                <input type="text" class="form-control" name="affi" id="aff" required>
            </div>
            <div class="form-group">
                <label for="sex">Sex:</label>
                <select name="sex" id="sex" class="form-control">
                    <option value="--SELECT--" hidden>--SELECT--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="addr">Address for Correspondence:</label>
                <input type="text" name="addre" id="addr" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="mon">Mobile number:</label>
                <input type="tel" class="form-control" id="mon" name="mob" pattern="\d" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="mail">Email ID:</label>
                <input type="email" class="form-control" name="mail" id="mail" required>
            </div>
            <div class="form-group">
                <label for="trans">Transaction ID of fee paid:</label>
                <input type="text" name="trans" class="form-control" id="trans">
            </div>
            <div class="form-group">
                <label for="pres">Are you gona present something?</label>
                <div class="form-check form-check-inline" id="pres">
                    <input type="radio" name="choice" id="yes">
                    <label for="yes">YES</label>
                </div>
                <div class="form-check form-check-inline" id="no">
                    <input type="radio" name="choice" id="no">
                    <label for="no">NO</label>
                </div>
            </div>
            <div class="form-group">
            </div>
            <div class="form-group">
                <label for="titl">If yes, Title of the talk/paper:</label>
                <input type="text" class="form-control" name="title" id="titl">
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" name="date" id="date" required>
            </div>
            <div class="form-group">
                <label for="sig">Signature:</label>
                <input type="text" class="form-control" name="sig" id="sig" required>
            </div>
            <div class="form-group">
                <button type="submit" name="sub" value="Submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
