<?php

require_once "../config/database/connectDB.php";
require_once('../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

// Google login
$clientID = $_ENV['CLIENT_ID'];
$secret = $_ENV['CLIENT_SECRET'];
$redirectUri = "http://localhost/portfolio/profile";

$gclient = new Google_Client();
$gclient->setClientId($clientID);
$gclient->setClientSecret($secret);
$gclient->setRedirectUri($redirectUri);
$gclient->addScope('email');
$gclient->addScope('profile');
 
if(isset($_GET['code'])) {

    $token = $gclient->fetchAccessTokenWithAuthCode($_GET['code']);
    $gclient->setAccessToken($token);

    session_start();
    $_SESSION["loggedin"] = true;
    $_SESSION['ucode'] = $_GET['code'];

    exit;
}

// Regular login
$username = $password = "";
$login_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;

        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            
            if(mysqli_stmt_num_rows($stmt) == 1) {                    
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);

                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)) {
                        session_start();
                        $_SESSION["loggedin"] = true;                         
                        header("Location: ../profile");
                    } else {
                        $login_err = "Неправильне ім'я користувача або пароль.";
                    }
                }
            } else {
                $login_err = "Неправильне ім'я користувача або пароль.";
            }
        } else {
            echo "Щось пішло не так, спробуйте знову.";
        }

        mysqli_stmt_close($stmt);
    }
    
    mysqli_close($conn);
}

?>
 
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід</title>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
</head>
<body>
    <div class="wrapper">
      <header class="header">
        <div class="header__container container">
          <a href="/portfolio">
            <img src="../assets/img/cat.svg" alt="Cat" width="40" height="40">
          </a>

          <nav>
            <ul class="navigation">
              <li>
                <a href="/portfolio">Головна</a>
              </li>
              <li>
                <a href="/portfolio/about">Про мене</a>
              </li>
              <li>
                <a href="/portfolio/contact">Контакти</a>
              </li>
            </ul>
          </nav>

        <div class="header__account">
          <a href="/portfolio/login" class="header__btn">Увійти</a>
          <a href="/portfolio/register" class="header__btn">Реєстрація</a>
        </div>
        </div>
      </header>

      <main class="page">
        <h2 class="page__title form__title title">Увійдіть до свого акаунта</h2>

        <?php 
          if(!empty($login_err)){
              echo '<div class="alert">' . $login_err . '</div>';
          }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">
            <label for="username">Ім'я користувача:</label>
            <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" value="<?php echo $password; ?>" required>

            <button type="submit" class="button">Увійти</button>
            
            <p class="center"><a href="<?= $gclient->createAuthUrl() ?>">Увійдіть за допомогою Google</a> </p>

            <p class="prompt">Ще не зареєстровані? <a href="/portfolio/register">Створіть акаунт</a>.</p>
        </form>
      </main>
    </div>    
</body>
</html>