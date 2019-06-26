<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/main1.css">
    <style>
        .parallax {
            background: url("board.jpg");
            background-attachment: fixed;
            padding: 50px 0px;
            color: white;
            text-shadow: 1.5px 1.5px darkgray;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
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
    $value = false;
    $success = false;
    $fail = false;
    $message = '';
    if(isset($_POST['sub'])){
        $conn = new mysqli($server,$username,$password,$db);
        if($conn){
            $name = $_POST['first_name']." ".$_POST['mid_name']." ".$_POST['last_name'];
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
            
            $sign = $_POST['sig'];
            
            $sql_check = "SELECT * FROM $table WHERE number='$number' OR trans_id='$trans'";
            if($conn->query($sql_check)->num_rows==0){
                $sql_insert = "INSERT INTO $table(name,desg,affi,gender,address,number,email,choice,title,trans_id,date_) VALUES ('$name','$desig','$affi','$gender','$addr','$number','$email','$choice','$title','$trans','$date')";
                if($conn->query($sql_insert)){
                    $success = true;
                    $message = 'Sucessfully registered';
                }else{
                    $fail = true;
                    $message = 'Some Error Occured';
                }
            }else{
                $fail = true;
                $message = 'Entry Exists';
            }
        }
    }
    ?>
    <div class="text-center" style="margin-bottom:0;">
        <div class="parallax">
            <div class="container text-center">
                <div class="text-right" style="">
                    <h2>NCAMAA 2019</h2>
                </div>
                <br />
                <div class="text-right" style="">
                    <h4 class="text-uppercase">National conference on <br /> Advances in mathematical analysis and it's applications</h4>
                </div>
                <br />
                <div class="text-right" style="">
                    <h5>November 8-10, 2019</h5>
                </div><br />
                <div class="text-right" style="">
            <h5><a href="http://pgdavcollege.edu.in/" style="text-decoration: none;">P.G.D.A.V. College</a> <br /> New Delhi</h5>
                </div>

            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" style="margin-bottom:30px;">
        <a class="navbar-brand" href="index.html">NCAMAA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="commitee.html">Commitees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="speakers.html">Speakers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="program.html">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="participants.html">Participants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="register2.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.html">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container wrapper--w680" style="float:10" <?php if(!$success) echo 'hidden'?>>
        <div class="alert alert-success alert-dismisible"><?php if($success) echo $message;?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <div class="container wrapper--w680" style="float:10" <?php if(!$fail) echo 'hidden'?>>
        <div class="alert alert-danger alert-dismisible"><?php if($fail) echo $message;?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <div class="container wrapper--w680" style="margin-top:30px; margin-bottom:30px;">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Instructions:</h2>
                <p><b>Registration Fees</b><br />
                    <ul>
                        <div class="container">
                            <li>Rs. 1500/- (till 10 October, 2019)</li>
                            <li>Rs. 2000/- (after 10 October 2019)</li>
                        </div>
                    </ul>
                    The registration fees is inclusive of the conference kit and meals
                    that would be provided during the conference.
                    <br /><br />

                    <b>The payment is to be made through the NEFT/RTGS/Intrabank/UPI Transfer in the following account:<br />
                        Name of account holder : Academic Activities PGDAV College(Day)<br />
                        Bank Name : Central bank of India<br />
                        Account Number : 3755903740<br />
                        IFSC code : CBIN0283940<br />
                        MICR code : 110016069<br /></b>
                    <br />
                    <b>Accommodation:</b><br />
                    Limited accommodation will be available for outstation participants at
                    nominal charges and based on first-come-first-serve basis.
                    <br /><br />
                    <b>How to apply:</b><br />
                    Those interested in participating must submit the online registration
                    form and forward a copy of fee receipt generated after online payment at
                    the email id <b>ncamaa2019@gmail.com</b>. Those presenting a paper must send the abstract of
                    the presentation on the aforementioned email address latest by 20 October,
                    2019.
                    <br />
                    Selected full length papers may be considered for publication in the
                    proceedings of the conference.
                </p>

            </div>
        </div>
    </div>

    
    <div class="container wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title"><b>Registration Form</b></h2>
                <form method="POST">
                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label class="label">First name</label>
                            <input class="form-control" type="text" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="label">Middle name</label>
                            <input class="form-control" type="text" name="mid_name" placeholder="Middle Name">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="label">Last name</label>
                            <input class="form-control" type="text" name="last_name" placeholder="Last Name">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="label">Affilation</label>
                            <input class="form-control" type="text" name="affi" placeholder="Affiliation" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="label">Designation</label>
                            <select class="form-control" name="desig">
                                <option hidden>--SELECT--</option>
                                <option value="Student">Student</option>
                                <option value="Faculty">Faculty</option>
                                <option value="Research Scholar">Research Scholar</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="label">Gender</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="gender" id="male" value="male" checked>
                                <label class="custom-control-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="gender" id="female" value="female">
                                <label class="custom-control-label" for="female">
                                    Female
                                </label>
                            </div>

                        </div>

                        <div class="form-group col-md-6">
                            <label class="label">Transaction ID</label>
                            <input class="form-control" type="text" name="trans" placeholder="Transaction ID" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="label">Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Email" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="label">Phone Number</label>
                            <input class="form-control" type="tel" pattern="\d{10}" name="phone" placeholder="Phone Number" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="label">Address</label>
                        <input type="text" class="form-control" name="addr" placeholder="Address" required>
                    </div>

                    <div class="form-group">
                        <label class="label">Will you deliver a talk or present a paper?</label>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="deli" id="yes" value="yes" onclick="myFun()">
                            <label class="custom-control-label" for="yes">
                                Yes
                            </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="deli" id="no" value="no" checked onclick="myFun1()">
                            <label class="custom-control-label" for="no">
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="t_div" hidden>
                        <label class="label">If yes, title of the talk or paper</label>
                        <input type="text" class="form-control" name="titl" id="titl" placeholder="Title">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="label">Date</label>
                            <div class="form-group">
                                <input class="form-control" type="date" name="dat" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="label">Signature</label>
                            <input class="form-control" type="text" name="sig" placeholder="Sign" required>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit" name="sub">Submit</button>

                </form>
            </div>
        </div>
    </div>


    <div class="jumbotron text-center" style="margin-bottom:0; margin-top:30px;">
        <div class="row">
            <div class="col-md-4 text-center">
                <h4 class="head">PATRON</h4>
                <h4>Dr. Mukesh Aggarwal</h4>
            </div>
            <div class="col-md-4 text-center">
                <h4 class="head">CONVENER</h4>
                <h4>Dr. Gopal Datt</h4>
            </div>
            <div class="col-md-4 text-center">
                <h4 class="head">CO-CONVENER</h4>
                <h4>Dr. Geeta Kalucha</h4>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-6">
                <h4 class="head">PROGRAM SECRETARY</h4>
                <h4>Ms. Savitri Rawat</h4>
            </div>
            <div class="col-md-6">
                <h4 class="head text-uppercase">Program Coordinator</h4>
                <h4>Ms. Anu Kapoor</h4>
            </div>
        </div>

    </div>
    <div class="container text-center">
        &copy; NCAMAA-2019<br/>
        Developed by Rajbir &amp; Kartikeya
    </div>
    <script>
        function myFun() {
            var x = document.getElementById("t_div");
            x.hidden = false;
        }

        function myFun1() {
            document.getElementById("t_div").hidden = true;
        }

    </script>

</body>

</html>
