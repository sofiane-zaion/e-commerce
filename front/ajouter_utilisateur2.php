<!doctype html>
<html lang="en">
<head>
    <?php include '../include/head.php' ?>
    <title>Crée un compte</title>
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
                    <h4 class="card-title mb-4" style="text-align: center; color: white;">Crée un compte</h4>
                    <?php
                    if (isset($_POST['ajouter'])) {
                        $login = $_POST['login'];
                        $raw_pwd = $_POST['password'];
                        $hashed_pwd = password_hash($raw_pwd, PASSWORD_DEFAULT);

                        require_once '../include/database.php';

                        // Vérification si le login existe déjà dans la base de données
                        $sqlCheck = $pdo->prepare('SELECT COUNT(*) FROM utilisateur WHERE login = ?');
                        $sqlCheck->execute([$login]);
                        $count = $sqlCheck->fetchColumn();

                        if ($count > 0) {
                            ?>
                            <div class="alert alert-danger" role="alert">
                                Login existe déjà dans la base de données
                            </div>
                            <?php
                        } else {
                            $date = date('Y-m-d');
                            $sqlState = $pdo->prepare('INSERT INTO utilisateur VALUES(null,?,?,?)');
                            $sqlState->execute([$login, $hashed_pwd, $date]);
                            // Redirection
                            header('location: Connexion2.php');
                        }
                    }
                    ?>
                    <form method="post" autocomplete="off">
                        <div class="form-group">
                            <label class="form-label" style="color: white;">Login</label>
                            <input type="text" class="form-control" name="login" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" style="color: white;">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" style="color: white;">Vous avez déjà un compte ?</label>
                            <a href="Connexion2.php" class="card-link" style="color: white;">Se connecter</a>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block my-3" name="ajouter">Suivant</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
