<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Олександр Буркуш | Контакти</title>
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
            <a href="/portfolio/contact" class="active">Контакти</a>
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
    <h2 class="page__title form__title title">Зв'яжіться зі мною</h2>

    <form class="form" action="message.php" method="post">
      <label for="name">Ім'я:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Емейл:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Повідомлення:</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit" class="button">Відправити</button>
    </form>
  </main>
  </div>
</body>
</html>