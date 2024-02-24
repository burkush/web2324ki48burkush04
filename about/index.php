<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Олександр Буркуш | Про мене</title>
  <link rel="stylesheet" href="../assets/styles/main.css">
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
</head>
<body>
  <div class="wrapper">

  <header class="header">
    <div class="header__container container">
      <a href="/">
        <img src="../assets/img/cat.svg" alt="Cat" width="40" height="40">
      </a>

      <nav>
        <ul class="navigation">
          <li>
            <a href="/portfolio">Головна</a>
          </li>
          <li>
            <a href="/portfolio/about" class="active">Про мене</a>
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
    <div class="page__container">
      <section class="page__greeting">
        <h1 class="page__title title">Про мене</h1>
        <p class="page__text">
          Еней був парубок моторний<br>
          І хлопець хоть куди козак,<br>
          Удавсь на всеє зле проворний,<br>
          Завзятіший од всіх бурлак.<br><br>
          Но греки, як спаливши Трою,<br>
          Зробили з неї скирту гною,<br>
          Він, взявши торбу, тягу дав;<br>
          Забравши деяких троянців,<br>
          Осмалених, як гиря, ланців,<br>
          П'ятами з Трої накивав.
        </p>
      </section>

      <section class="page__greeting">
        <h2 class="subtitle title">Демонстрація AJAX запиту</h2>
        <p class="page__text_description">
          Натисніть на кнопку, щоб відправити запит.<br>
          Інформація з'явиться без перезавантаження сторінки.
        </p>

        <button type="button" class="button">Відправити</button>

        <ul id="data"></ul>
      </section>

      <img src="../assets/img/main-picture.jpg" alt="Main picture Lviv" width="400" height="550" class="page__picture">
    </div>
  </main>
  </div>

  <script src="../assets/js/ajax.js"></script>
</body>
</html>