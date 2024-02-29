<?php

require_once "../config/database/connectDB.php";
 
$username = $password = "";
$username_err = $password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if(strlen(trim($_POST["username"])) < 2){
        $username_err = "Ім'я користувача має мати принаймні 2 букви.";
    } else {
        $username = trim($_POST["username"]);
    }
    
    // Validate password
    if(strlen(trim($_POST["password"])) < 6){
        $password_err = "Пароль має складатися принаймні з 6 символів";
    } else {
        $password = trim($_POST["password"]);
    }
    
    // Check for errors
    if(empty($username_err) && empty($password_err)){
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            
            if(mysqli_stmt_execute($stmt)){
                session_start();
                $_SESSION["loggedin"] = true;                         
                header("Location: ../profile");
            } else {
                echo "Щось пішло не так. Спробуйте ще раз.";
            }
            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
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
        <h2 class="page__title form__title title">Створіть свій акаунт</h2>

        <?php 
          if(!empty($username_err)){
              echo '<div class="alert">' . $username_err . '</div>';
          }
          if(!empty($password_err)){
              echo '<div class="alert">' . $password_err . '</div>';
          }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">
            <label for="username">Ім'я користувача:</label>
            <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" value="<?php echo $password; ?>" required>

            <button type="submit" class="button">Зареєструвати</button>

            <p class="prompt">Уже зареєстровані? <a href="/portfolio/login">Увійдіть</a>.</p>
        </form>
      </main>
    </div>    
</body>
</html>