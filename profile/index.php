<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Мій профіль</title>
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
          <a href="/portfolio/logout" class="header__btn">Вийти</a>
        </div>
      </div>
    </header>

    <main class="page">
      <div class="page__container profile">
        <section class="page__greeting">
          <h1 class="page__title title profile__title">Привіт, це ваш профіль!</h1>
          <img src="../assets/img/profile.jpg" alt="Profile picture">
      </div>
    </main>
  </div>
</body>
</html>