<?php
require_once ('../inc/conn.php');


$sql = "SELECT o.id, o.created_by, o.tor, o.start_date, o.created_date, q.name, oq.qualification, oq.opening_posting FROM opening_posting AS o, qualification AS q, opening_posting_qualification AS oq
WHERE oq.opening_posting=o.id";

$results = mysqli_query($conn, $sql);

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
    <title>Job Application Tracking System - Opportunities</title>
</head>
<body>
    
<div class="container">
                <!-- Left Pane (Admin-Login) -->
                <div class="row">
                    <div class="col-md-2 navdiv">
                        <img src="../img/moh_logo.jpg" alt="" class="logo_moh"/>
                        <h3>Menu</h3>
                        <a href="./"> Applicants </a>
                        <a href="./opp.php"> Opportunities </a>
                        <a href="./post_opp.php"> Post an opportunity </a>
                        <a href="../"> Logout </a>
                    </div>

                    <div class="col-md-10 menu">
                        <!-- Employee -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <h3 class="register-heading">Available Opportunities - Job Application Tracking System!</h3>

                                    </div>
                               
                                <div class="row">
                                    <div class="col-md-12 display">                                      
                                    
                                        <table id="applicants" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Opportunity</th>
                                                    <th>Health Facility</th>
                                                    <th>Start Date</th>
                                                    <th> <abbr title="Terms of Reference">TOR</abbr></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            <?php
                                                $counter = 1;
                                                while($row = mysqli_fetch_assoc($results)) {   
                                                
                                                    echo "<tr>";
                                                        echo "<td>" . $counter . "</td>";
                                                        echo "<td>" . $row['name']. "</td>";
                                                        echo "<td>" . $row['created_by'] . "</td>";
                                                        echo "<td>" . $row['start_date'] . "</td>";
                                                        echo "<td>" ?> 
                                                            <a href="../TOR/<?php echo $row['created_by']. '__'. $row['tor'] ?>" target="_blank">Document</a> 
                                                        <?php
                                                        "</td>";
                                                    echo "</tr>";
                                                    
                                                    /* Counter for all the applicants! */
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
