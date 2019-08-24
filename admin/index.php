<?php
require_once ('../inc/conn.php');

$sql = "SELECT u.id, u.names, u.email, u.telephone, u.NID, h.created_date
        FROM users AS u, health_professional AS h
        WHERE u.id = h.user AND user_type = 'Applicant' 
        ORDER BY h.created_date DESC ";

$res = mysqli_query($conn, $sql);


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

    <link rel="stylesheet" href="../css/main.css">
    <title>Job Application Tracking System</title>
</head>
<body>
    
<div class="container">
                <!-- Left Pane (Admin-Login) -->
                <div class="row">
                    <div class="col-md-2 navdiv">
                        <img src="../img/moh_logo.jpg" alt="" class="logo_moh"/>
                        <h3>Menu</h3>
                        <a href="./" class="active"> Applicants </a>
                        <a href="./opp.php"> Opportunities </a>
                        <a href="./post_opp.php"> Post an opportunity </a>
                        <a href="../"> Logout </a>
                    </div>

                    <div class="col-md-10 menu">
                        <!-- Employee -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <h3 class="register-heading">Administrator Dashboard!</h3>

                                    </div>
                               
                                <div class="row">
                                    <div class="col-md-12 display">
                                        
                                        <table id="applicants" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Telephone</th>
                                                <th>Application Date</th>
                                                <th>Documents</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                         <?php
                                            $counter = 1;
                                            while($users = mysqli_fetch_assoc($res)){   
                                                $file1 = 'https://about.me/josuem';                                             
                                               echo "<tr>";
                                                    echo "<td>" . $counter . "</td>";
                                                    echo "<td>" . $users['names']. "</td>";
                                                    echo "<td>" . $users['email'] . "</td>";
                                                    echo "<td>" . $users['telephone'] . "</td>";
                                                    echo "<td>" . $users['created_date'] . "</td>";
                                                    echo "<td>" ?> 
                                                        <a href="http://about.me/josuem">CV</a>
                                                        <a href="http://about.me/josuem">Letter</a>
                                                        <a href="http://about.me/josuem">Degree</a>
                                                    <?php
                                                     "</td>";
                                                echo "</tr>";

                                                $counter++;
                                            }
                                        ?>
                                            </tbody>
                                        </table>
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

<script>
    $(document).ready(function() {
        $('#applicants').DataTable();
    } );
</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


</body>
</html>
