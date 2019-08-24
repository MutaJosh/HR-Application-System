<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="./css/main.css">
    <title>Job Request Tracking System - Home</title>
</head>
<body>
    
<div class="container register">
                <!-- Left Pane (Admin-Login) -->
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="./img/moh_logo.jpg" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are only required to fill all these fields and submit your application!</p>
                        <i>If you're an administrator, press one of the buttons below!</i> <br> <br><br>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#registerModal"> Register </button> 
                            or
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#loginModal"> Login </button> 

                    </div>
                    <div class="col-md-9 register-right">

                        <!-- Employee -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Fill out to start your application!</h3>

                                <form action="./submit_apply.php" method="POST" enctype="multipart/form-data">

                                    <div class="row register-form">                                  
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Personal Details</label>
                                                <input type="text" class="form-control" name="applicant" placeholder="Full Name ..." required/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" maxlength="10" name="telephone" class="form-control" placeholder="Telephone ..." required/>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Email ... " required/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" maxlength="16" class="form-control" name="nid" placeholder="National ID ..." required/>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="professional">
                                                    <option value="">Select Professional</option>
                                                    <option value="1">Nurse</option>
                                                    <option value="2">Medical Doctor</option>
                                                    <option value="3">Pharmacist</option>
                                                </select>
                                            </div>
                                        
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Your Request Letter</label>
                                                <input type="File" class="form-control" name="req_letter" placeholder="Request Letter *" data-toggle="tooltip" data-placement="top" title="Request Letter" accept="application/pdf" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Your CV</label>
                                                <input type="File" class="form-control" name="cv" placeholder="Your CV *" data-toggle="tooltip" data-placement="top" title="Your CV" accept="application/pdf" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Your Degree</label>
                                                <input type="File" class="form-control" name="degree" placeholder="Your Degree *" data-toggle="tooltip" data-placement="top" title="Your Degree" accept="application/pdf" required/>
                                            </div>

                                            <input type="submit" class="btnRegister" name="submit" value="Submit"/>
                                        </div>               
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <footer style="text-align: center;">
                 <p>© 2019 | <a href="http://www.moh.gov.rw/index.php?id=188" target="_blank">Ministry of Health</a> - Rwanda</p>
            </footer>


 <!-- Admin Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Only Administrators!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./admin/login.php" method="post">
        <div class="modal-body">         
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="uname" placeholder="Username ... *" required/>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="passwrd" placeholder="Password ... *" required/>
            </div>         
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>

      </form>
      
    </div>
  </div>
</div>


<!-- Registering an administrator Modal-->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Create Admin Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./signup.php" method="post">
        <div class="modal-body"> 
            <div class="form-group">
                <label for="">Health Facility *</label>
                <input type="text" class="form-control" name="facility" placeholder="Which health facility do you belong to? *" required/>
            </div>        
            <div class="form-group">
                <label for="">Email *</label>
                <input type="email" class="form-control" name="fac_email" placeholder="User email ... *" required/>
            </div>
            <div class="form-group">
                <label for="">Telephone *</label>
                <input type="text" maxlength="10" class="form-control" name="fac_tel" placeholder="Your facility phone or yours! *" required/>
            </div> 
            <div class="form-group">
                <label for="">Password *</label>
                <input type="password" class="form-control" name="passwrd" placeholder="Password ... *" required/>
            </div>  
       
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Register</button>
        </div>

      </form>
      
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
