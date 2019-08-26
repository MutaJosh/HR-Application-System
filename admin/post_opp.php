<?php

SESSION_START();

require_once ('../inc/conn.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="../css/main.css">
    <title>Job Application Tracking System - Post An Opportunity</title>
</head>
<body>
    
<div class="container">
                <div class="row">
                    <div class="col-md-2 navdiv">
                        <img src="../img/moh_logo.jpg" alt="" class="logo_moh"/>
                        <h3>Menu</h3>
                        <a href="./" class="active"> Applicants </a>
                        <a href="#"> Opportunities </a>
                        <a href="#"> Post an opportunity </a>
                        <a href="../"> Logout </a>
                    </div>

                    <div class="col-md-10 menu">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <h3 class="register-heading">You're about to record a new available post in <?php echo $_SESSION['user']; ?>!</h3>
                                    </div>
                               
                                <div class="row">
                                    <div class="col-md-12 display">
                                       
                                    <form action="./post.php" method="POST" enctype="multipart/form-data">

                                        <div class="row register-form">                                  
                                            <div class="col-md-10"> <br>
                                                <div class="form-group">
                                                    <label for="">Which post is available in <?php echo $_SESSION['user']; ?>?</label>
                                                    <select class="form-control" name="professional">
                                                        <option value="">Select Professional</option>
                                                        <option value="1">Nurse</option>
                                                        <option value="2">Pharmacist</option>
                                                        <option value="3">Medical Doctor</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Start Date</label>
                                                    <input type="datetime-local" class="form-control" name="start_date" id=""> <br>
                                                <div class="form-group">
                                                    <label for="">Terms of Reference</label>
                                                    <input type="File" class="form-control" name="tor" required/>
                                                </div>
                                            </div>
                                                <input type="submit" class="btnRegister" name="submit" value="Submit"/>                  
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <footer style="text-align: center;">
                 <p>© 2019 | <a href="http://www.moh.gov.rw/index.php?id=188" target="_blank">Ministry of Health</a> - Rwanda</p>
            </footer>

<script type="text/javascript">
    $(document).ready(function() {
        $('#applicants').DataTable();
    } );

/*     $(function () {
        $('#datetimepicker').datetimepicker('show');
    }); */

</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


</body>
</html>
