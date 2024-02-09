<?php 
session_start();
include '../config/config.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = mq("SELECT * FROM tb_admin WHERE email = '$email' && password = '$password' ");
    
    $dataUser = mfa($query);

    if(mnr($query) > 0){
        header("Location:../");

        if($dataUser['level'] == 'admin'){
            $_SESSION['status'] = 'logins';
            $_SESSION['id_admin'] = $dataUser['id_admin'];
            header("Location:../");
        }else{
            header("Location:?status=loginLaDiak");
        }

    }else{
        header("Location:?status=loginLaDiak");
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">

                                        <?php 

                                        if(isset($_GET['status'])){
                                            if($_GET['status'] == 'loginLaDiak'){
                                                echo "<div class='alert alert-success text-center text-danger'>Username ou Password lalos</div>";
                                            }elseif($_GET['status'] == 'loginlai'){
                                                echo "<div class='alert alert-success text-center text-warning'>Login Hodi Assesu Sistema</div>";
                                            }
                                        }

                                        ?>

                                        <h1 class="h4 text-gray-900 mb-4">LOGIN ADMINISTRATOR!</h1>
                                    </div><hr>
                                    <form class="user" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                                        <div class="form-group">
                                            <label class="font-weight-bold">Email :</label>
                                            <input type="text" class="form-control form-control-user"
                                            id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold">Password : </label>
                                            <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" name="password" placeholder="Password">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" type="submit" name="login">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>