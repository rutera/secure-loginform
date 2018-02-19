<?php
include 'header.php';
include './function.php';


if ($_POST) {
    $name = Login($sql, $_POST['name']);
    $email = Login($sql, $_POST['email']);
    $password = Login($sql, $_POST['password']);
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    
    $query = mysqli_query($sql, "SELECT * FROM users WHERE email='$email'");
    if(mysqli_num_rows($query)>0){
        if(strlen($name) < 3){
            $err2 = '<i class="fa fa-close"> Username is too short!</i>';
        }
        if(strlen($password) < 5){
            $err3 = '<i class="fa fa-close"> Passowrd is too short!</i>';
        }
        //header('Location: register.php');
        $err1 = '<i class="fa fa-close"> Username is exist</i>';
    } else {
        mysqli_query($sql, "INSERT INTO users (username, password, email)VALUES('$name', '$pass_hash', '$email')");
        header('Location: index.php');
        exit;
    }
            
}
?>
<body>
    <div class="container">
        <form class="form-horizontal" role="form" method="POST">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Register New User</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="name">Name</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="text" name="name" class="form-control" id="name"
                                   placeholder="Name" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <?php echo $err2;?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="email">E-Mail Address</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="text" name="email" class="form-control" id="email" placeholder="you@example.com" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <?php echo $err1;?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="password">Password</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
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
                            <?php echo $err3;?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Register</button>
                </div>
            </div>
        </form>
        
    </div>
</body>

