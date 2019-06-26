<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>REGISTRATION FORM NCAMMA-2019</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <style>
        .column {
            float: left;
            width: 50%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }

        .sticky {
            position: -webkit-sticky;
            /* Safari */
            position: relative;
            top: 0;
        }

    </style>
</head>

<body>
    <?php
    $server = 'localhost';
    $username = 'root';
    $password = 'slimeSage@7797';
    $db = 'math1';
    $table = 'register';
    if(isset($_POST['sub'])){
        $conn = new mysqli($server,$username,$password,$db);
        if($conn){
            $name = $_POST['first_name']." ".$_POST['last_name'];
            $affi = $_POST['affi'];
            $desig = $_POST['desig'];
            $gender = $_POST['gender'];
            if($gender=='male'){
                $gender='male';
            }else{
                $gender='female';
            }
            $trans = $_POST['trans'];
            $email = $_POST['email'];
            $addr = $_POST['addr'];
            $number = $_POST['phone'];
            $choice = $_POST['deli'];
            if($choice=='yes'){
                $choice='yes';
            }else{
                $choice='no';
            }
            $title = $_POST['titl'];
            $date = $_POST['dat'];
            $d = explode('/',$date);
            $date1 = $d[2]."-".$d[1]."-".$d[0];
            
            $sign = $_POST['sig'];
            
            $sql_check = "SELECT * FROM $table WHERE number='$number' OR trans_id='$trans'";
            if($conn->query($sql_check)->num_rows==0){
            $sql_insert = "INSERT INTO $table(name,desg,affi,gender,address,number,email,choice,title,trans_id,date_) VALUES ('$name','$desig','$affi','$gender','$addr','$number','$email','$choice','$title','$trans','$date1')";
            //echo $sql_insert;
            if($conn->query($sql_insert)){
                //echo "DONE";
            }else{
                echo "<br>".$conn->error;
                echo "<br>".$sql_insert;
            }
            }else{
                echo "Exists";
            }
        }
    }
    ?>
    <div class="column">

        <div class="page wrapper p-t-130 p-b-100 font-poppins">
            <div class="sticky">
                <div class="wrapper wrapper--w680">
                    <div class="card card-4">
                        <div class="card-body">
                            <p><b>Registration Fees</b><br />
                                <ul>
                                    <div class="container">
                                        <li>Rs. 1500/- (till 10 October, 2019)</li>
                                        <li>Rs. 2000/- (after 10 October 2019)</li>
                                    </div>
                                </ul><br />
                                The registration fees is inclusive of the conference kit and meals
                                that would be provided during the conference.
                                <br /><br />

                                <b>The payment is to be made in the following account:</b><br />
                                Name of account holder : Academic Activities PGDAV College(Day)<br />
                                Bank Name : Central bank of India<br />
                                Account Number : 3755903740<br />
                                IFSC code : CBIN0283940<br />
                                MICR code : 110016069<br />
                                <br />
                                <b>Accommodation:</b><br />
                                Limited accommodation will be available for outstation participants at
                                nominal charges and based on first-come-first-serve basis.
                                <br /><br />
                                <b>How to apply:</b><br />
                                Those interested in participating must send the duly filled-in registration
                                form along with a copy of fee receipt generated after online payment on
                                the email id …………. Those presenting a paper must send the abstract of
                                the presentation on the aforementioned email address latest by 20 October,
                                2019.
                                <br />
                                Selected full length papers may be considered for publication in the
                                proceedings of the conference.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="page-wrapper p-t-130 p-b-100 font-poppins">
            <div class="wrapper wrapper--w680">
                <div class="card card-4">
                    <div class="card-body">
                        <h2 class="title"><b>Registration Form</b></h2>
                        <form method="POST">
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">first name</label>
                                        <input class="input--style-4" type="text" name="first_name" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">last name</label>
                                        <input class="input--style-4" type="text" name="last_name" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Affilation</label>
                                        <input class="input--style-4" type="text" name="affi" placeholder="Affiliation" required>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Designation</label>
                                        <input type="text" class="input--style-4" name='desig' placeholder="Designation" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Gender</label>
                                        <div class="p-t-10">
                                            <label class="radio-container m-r-45">Male
                                                <input type="radio" name="gender" value="male" checked required>
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Female
                                                <input type="radio" name="gender" value="female" required>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Transaction ID</label>
                                        <input class="input--style-4" type="text" name="trans" placeholder="Transaction ID" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Email</label>
                                        <input class="input--style-4" type="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Phone Number</label>
                                        <input class="input--style-4" type="tel" pattern="\d{10}" name="phone" placeholder="Phone Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <label class="label">Address</label>
                                <input type="text" class="input--style-4" name="addr" placeholder="Address" required>
                            </div>
                            <div class="row row-space">
                                <div class="input-group">
                                    <label class="label">Will you deliver a talk or present a paper?</label>
                                    <label class="radio-container m-r-45">Yes
                                        <input type="radio" name="deli" value="yes" onclick="myGeeks()">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">No
                                        <input type="radio" name="deli" value="no" onclick="myGeeks1()" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="input-group">
                                <label class="label">If yes, title of the talk or paper</label>
                                <input type="text" class="input--style-4" name="titl" placeholder="Title" required>
                            </div>

                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Date</label>
                                        <div class="input-group-icon">
                                            <input class="input--style-4 js-datepicker" type="text" name="dat" required>
                                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Signature</label>
                                        <input class="input--style-4" type="text" name="sig" placeholder="Sign" required>
                                    </div>
                                </div>
                            </div>

                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit" name="sub">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
<!--
    <script>
        function myGeeks1(){
            document.getElementById("titl").disable = true;
        }
        function myGeeks(){
            document.getElementById("titl").disable = false;
        }
    </script>
-->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
