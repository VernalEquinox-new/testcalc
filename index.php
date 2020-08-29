<?php
  ini_set('display_errors','On');
  error_reporting('E_ALL');
 ?>
<!DOCTYPE html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta charset="utf-8">
  <title>Calculator</title>

  <link href="dist\components\main.css">
</head>

<body>
  <header class="site__header">
      <div class="header__top row">
        <img src="img\bank2.png" alt="bank-logo">
        <div class="top__phone">
          <p class="top__phone__number" x-ms-format-detection="none">8-800-100-5005 +7(3452)522-000</p>
        </div>
      </div>
      <div class="menu__wrap">
        <div class="top__menu row">
          <a href="#" class="top__menu__item" id="item1">Кредитные карты</a>
          <a href="#" class="top__menu__item top__menu__item--chosen" id="item2">Вклады</a>
          <a href="#" class="top__menu__item" id="item3">Дебетовая карта</a>
          <a href="#" class="top__menu__item" id="item4">Страхование</a>
          <a href="#" class="top__menu__item" id="item5">Друзья</a>
          <a href="#" class="top__menu__item" id="item6">Интернет-банк</a>
        </div>
      </div>
  </header>

  <article class="calc">
    <div class="container">
      <div class="breadcrumb__wrap">
        <ul class="breadcrumb">
          <li><a href="#" class="breadcrumb__item">Главная</a></li>
          <li><a href="#" class="breadcrumb__item">Вклады</a></li>
          <li><a href="#" class="breadcrumb__item--active">Калькулятор</a></li>
        </ul>
      </div>
      <div class="calc__form__wrap">
        <form class="calc__form" id="form">
          <h1 class="calc__form__name">Калькулятор</h1>

          <div class="calc__form__date">
            <label for="date" class="calc__form__label-text">Дата оформления вклада</label>
            <input type="text" name="date" value="" class="calc__form__input" placeholder="дд.мм.гггг" id="calendar" required>
          </div>
          <div class="calc__form__sum row">
            <label for="sum" class="calc__form__label-text">Сумма вклада</label>
            <input type="text" name="sum" value="" pattern="\d+(\.\d{2})?" class="calc__form__input" id="sum" required>
            <div class="range__wrap">
              <div id="sum-range"></div>
              <div class="row range__size">
                <p>1 тыс. руб.</p>
                <p>3 000 000</p>
              </div>
            </div>
          </div>
          <div class="calc__form__period">
            <label for="period" class="calc__form__label-text">Срок вклада</label>
            <select class="years calc__form__input" name="period" required>
              <option value="1">1 год</option>
              <option value="2">2 года</option>
              <option value="3">3 года</option>
              <option value="4">4 года</option>
              <option value="5">5 лет</option>
            </select>
          </div>
          <div class="calc__form__enlarge row">
            <label for="enlarge" class="calc__form__label-text">Пополнение вклада</label>
            <div class="row calc__form__radios calc__form__input">
              <p><input type="radio" name="enlarge" value="no" checked>Нет</p>
              <p><input type="radio" name="enlarge" value="yes">Да</p>
            </div>
          </div>
          <div class="calc__form__enlarge-sum row">
            <label for="enlarge_sum" class="calc__form__label-text">Сумма пополнения вклада</label>
            <input type="text" name="enlarge_sum" value="" pattern="\d+(\.\d{2})?" class="calc__form__input" id="enlarge-sum" required>
            <div class="range__wrap">
              <div id="enlarge-sum-range"></div>
              <div class="row range__size">
                <p>1 тыс. руб.</p>
                <p>3 000 000</p>
              </div>
            </div>
          </div>
          <div class="calc__form__finish row">
            <button type="submit" name="calculate" class="calc__form__total">Рассчитать</button>
            <div class="calc__form__result row">
              <p>Результат: </p>
              <div class="result__number" id=result></div>
            </div>
          </div>


        </form>
      </div>
    </div>


  </article>

  <footer class="site__footer">
    <div class="footer__paddings">
      <div class="menu__wrap">
        <div class="bottom__menu row">
          <a href="#">Кредитные карты</a>
          <a href="#">Вклады</a>
          <a href="#">Дебетовая карта</a>
          <a href="#">Страхование</a>
          <a href="#">Друзья</a>
          <a href="#">Интернет-банк</a>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="dist/bundle.js"></script>
</body>
