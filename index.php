<?php
include './header.php';
include './conn.php';
include './function.php';

error_reporting(E_ALL); 
ini_set('display_errors', 'On'); 
if($_POST){
    $row_pass = '';
    $email = Login($sql, $_POST['email']);
    $password = Login($sql, $_POST['password']);
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    $query = mysqli_query($sql, "SELECT * FROM users WHERE email='$email'");
    while ($row = mysqli_fetch_assoc($query)) {
        $row_pass = $row['password'];
    }
    if(password_verify($password, $row_pass)){
        header('Location: ./userpanel.php');
        exit;
    } else {
        echo 'Not ok';
    }
    
   
    
}
?>
<body>
    <div class="container">
        <form class="form-horizontal" role="form" method="POST">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Please Login</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">E-Mail Address</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="text" name="email" class="form-control" id="email"
                                   placeholder="you@example.com" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                          <!--  <i class="fa fa-close"></i> -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Password" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put password error message here -->    
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
            </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
                    <a href="register.php" class="btn btn-success"><i class="fa fa-user-plus"></i> Register</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>


