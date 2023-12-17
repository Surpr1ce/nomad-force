<?php
session_start();
const USERNAME = "admin";
const PASSWORD = "admin";

if (isset($_POST['login'])) {
    if ($_POST['username'] == USERNAME && $_POST['password'] == PASSWORD) {
        $_SESSION['login'] = true;
        header("Location: dashboard.php");
    } else {
        header("Location: login.php?error=1");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nomad Force HTML Template - Login Page</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap"
          rel="stylesheet">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link href="../css/aos.css" rel="stylesheet">

    <link href="../css/templatemo-nomad-force.css" rel="stylesheet">
    <!--

    TemplateMo 567 Nomad Force

    https://templatemo.com/tm-567-nomad-force

    -->
    <!-- Additional CSS -->
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .login-container #alert {
            margin-bottom: 15px;
            text-align: center;
        }

    </style>
</head>

<body>

<div class="container">
    <div class="row mb-5">
        <div class="col-md-6 mx-auto">
            <div class="login-container">
                <?php
                if (isset($_GET['error'])) {
                    echo "<div id='alert' class='alert alert-danger'>Wrong password or username!</div>";
                }
                ?>
                <h2 class="mb-4">Login</h2>

                <form method="post" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once "../parts/footer.php"; ?>

<!-- JAVASCRIPT FILES -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery.sticky.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>
<script src="../js/scrollspy.min.js"></script>
<script src="../js/custom.js"></script>

</html>