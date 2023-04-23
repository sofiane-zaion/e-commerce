<!doctype html>
<html lang="en">
<head>
    <?php include '../include/head.php' ?>
    <title>Connexion</title>
</head>
<body style="background-image:url(images/perfume-with-shirt-and-wristwatch-free-photo.jpg);">
<?php include '../include/nav_front.php' ?>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container py-5" >
    <div class="d-flex justify-content-center">
        <div class="col-md-6 col-lg-5 ">
            <div class="card shadow-lg">
                <div class="card-body" style="background: linear-gradient(to bottom, #00FF00, #0000FF);" >
                    <h4 class="card-title mb-4" style="text-align: center;">Connexion</h4>
                    <?php


if(isset($_SESSION['utilisateur'])){
    if($_SESSION['utilisateur']['admin'] == 'admin'){
        header('location: ../index2.php');
    }else{
        header('location: Connexion2.php');
    }
}

if(isset($_POST['connexion'])){
    $login = $_POST['login'];
    $pwd   = $_POST['password'];

    if(!empty($login) && !empty($pwd)){
        require_once '../include/database.php';
        $sqlState = $pdo->prepare('SELECT * FROM utilisateur WHERE login=?');
        $sqlState->execute([$login]);

        if($sqlState->rowCount()>=1){
            $user = $sqlState->fetch();
            if(password_verify($pwd, $user['password'])){
                $_SESSION['utilisateur'] = $user;
                if($user['login'] == 'admin'){
                    header('location: ../index2.php');
                }else{
                    header('location: pageproduit.php');
                }
            }else{
                ?>
                <div class="alert alert-danger" role="alert">
                    Login ou password incorrectes.
                </div>
                <?php
            }
        }else{
            ?>
            <div class="alert alert-danger" role="alert">
                Login ou password incorrectes.
            </div>
            <?php
        }
    }else{
        ?>
        <div class="alert alert-danger" role="alert">
            Login , password sont obligatoires
        </div>
        <?php
    }
}
?>
                    <form method="post" autocomplete="off">
                        <div class="form-group">
                            <label class="form-label">Login</label>
                            <input type="text" class="form-control" name="login">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Vous avez pas de compte ?</label>
                            <a href="ajouter_utilisateur2.php" class="card-link">Crée un compte </a>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block my-3" name="connexion">Connexion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
