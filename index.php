<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Олександр Буркуш | Головна</title>
  <link rel="stylesheet" href="./assets/styles/main.css">
  <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico">
</head>
<body>
  <div class="wrapper">

    <header class="header">
      <div class="header__container container">
        <a href="/portfolio">
          <img src="./assets/img/cat.svg" alt="Cat" width="40" height="40">
        </a>

        <nav>
          <ul class="navigation">
            <li>
              <a href="/portfolio" class="active">Головна</a>
            </li>
            <li>
              <a href="/portfolio/about">Про мене</a>
            </li>
            <li>
              <a href="/portfolio/contact">Контакти</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main class="page">
      <div class="page__container">
        <section class="page__greeting">
          <h1 class="page__title title">Вітаю на своєму веб-сайті!</h1>
          <p class="page__text">
            Даний веб-сайт створений в якості завдання на лабораторну роботу №2 із дисципліни "Технології веб-програмування".
            <br>
            Також він буде використаний для виконання лабораторної роботи №3 і №4.
          </p>

          <h2 class="subtitle title">Коротка інформація</h2>

          <table class="page__table">
            <tbody>
              <tr>
                <td>Студент</td>
                <td>Буркуш О. В.</td>
              </tr>
              <tr>
                <td>Група</td>
                <td>КІ-48</td>
              </tr>
              <tr>
                <td>Варіант</td>
                <td>4</td>
              </tr>
              <tr>
                <td>Кафедра</td>
                <td>СКС</td>
              </tr>
              <tr>
                <td>Технології</td>
                <td>HTML, CSS, JavaScript, PHP</td>
              </tr>
            </tbody>
          </table>

          <p class="page__text">
            Для навігації використовуйте меню зверху. Навігація відбувається згідно із умовами завдання, тобто за допомогою методу GET. 
            <br>
            Також на інших сторінках продемонстровано роботу AJAX (на сторінці "Про мене") і методу POST (на сторінці "Контакти" при відправці форми на сервер).
          </p>
        </section>

        <img src="./assets/img/gotham-city.jpg" alt="Main picture Lviv" width="400" height="550" class="page__picture">
      </div>
    </main>
  </div>
</body>
</html>