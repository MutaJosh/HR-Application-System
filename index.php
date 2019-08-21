<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="./main.css">
    <title>Job Request Tracking System</title>
</head>
<body>
    
<div class="container register">
                <!-- Left Pane (Admin-Login) -->
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="./moh_logo.jpg" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are only required to fill all these fields and submit your application!</p>
                        <i>If you're an administrator, press the button below!</i> <br> <br><br>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#loginModal"> Login </button> <br/>
                    </div>
                    <div class="col-md-9 register-right">

                        <!-- Employee -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Employee - Create an account!</h3>

                                <form action="./config.php" method="POST">

                                    <div class="row register-form">                                  
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Names</label>
                                                <input type="text" class="form-control" name="applicant" placeholder="Full Name ... *" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Telephone</label>
                                                <input type="number" maxlength="10" name="telephone" class="form-control" placeholder="Telephone ... *" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email ... *" required/>
                                            </div>
                                        
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Telephone</label>
                                                <input type="number" maxlength="10" name="telephone" class="form-control" placeholder="Telephone ... *" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" class="form-control" name="applicant" placeholder="Full Name ... *" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Confirm Password</label>
                                                <input type="text" class="form-control" name="applicant" placeholder="Full Name ... *" required/>
                                            </div>

                                            <input type="submit" class="btnRegister" value="Submit"/>
                                        </div>               
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
