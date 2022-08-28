<?php require_once '../src/burger/burger.php'; ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная страница
    </title>
    <link rel="stylesheet" href="./css/vendors.min.css">
    <link rel="stylesheet" href="../css/main.min.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="maincontent">
        <section class="section hero">
          <div class="container">
            <header class="header">
              <div class="header__logo"><a class="logo" href="#"><img class="logo__icon" src="./img/icons/logo.svg"></a></div>
              <div class="header__menu">
                <nav class="nav">
                  <ul class="nav__list">
                    <li class="nav__item"><a class="nav__link" href="1">о нас</a>
                    </li>
                    <li class="nav__item"><a class="nav__link" href="2">бургеры</a>
                    </li>
                    <li class="nav__item"><a class="nav__link" href="3">команда</a>
                    </li>
                    <li class="nav__item"><a class="nav__link" href="4">меню</a>
                    </li>
                    <li class="nav__item"><a class="nav__link" href="5">отзывы</a>
                    </li>
                    <li class="nav__item"><a class="nav__link" href="7">контакты</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="header__links"><a class="order-link btn" href="6">Заказать</a><a class="hamburger-menu-link" href="">
                  <div class="hamburger-menu-link__bars"></div></a></div>
            </header>
            <div class="hero__container">
              <div class="hero__content">
                <div class="hero__left"><img class="hero__img" src="../img/content/burger.png" alt=""></div>
                <div class="hero__right">
                  <div class="section__title">Мы делаем</div>
                  <div class="hero__desc">Натуральные бургеры</div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section best">
          <div class="container">
            <div class="section__title section__title_black">Мы лучшие</div>
            <ul class="best__list">
              <li class="best__item">
                <div class="best__icon">
                  <svg class="best__icon-pic" style="fill: #e25028;">
                    <use xlink:href="./img/sprite/sprite.svg#meat"></use>
                  </svg>
                </div>
                <div class="best__desc">
                  <div class="best__title">100% свежее мясо</div>
                  <div class="best__text text-block">
                    <p>Драма представляет собой деструктивный цикл. Анапест представляет собой анапест. Ямб неравномерен.</p>
                  </div>
                </div>
              </li>
              <li class="best__item">
                <div class="best__icon">
                  <svg class="best__icon-pic" style="fill: #f8b43a;">
                    <use xlink:href="./img/sprite/sprite.svg#hand"></use>
                  </svg>
                </div>
                <div class="best__desc">
                  <div class="best__title">Ручная сборка</div>
                  <div class="best__text text-block">
                    <p>Драма представляет собой деструктивный цикл. Анапест представляет собой анапест. Ямб неравномерен.</p>
                  </div>
                </div>
              </li>
              <li class="best__item">
                <div class="best__icon">
                  <svg class="best__icon-pic" style="fill: #8ac03e;">
                    <use xlink:href="./img/sprite/sprite.svg#natural"></use>
                  </svg>
                </div>
                <div class="best__desc">
                  <div class="best__title">Натуральные ингредиенты</div>
                  <div class="best__text text-block">
                    <p>Драма представляет собой деструктивный цикл. Анапест представляет собой анапест. Ямб неравномерен.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section class="section burgers">
          <div class="container">
            <div class="burger-slider-wrap">
              <div class="burger-slider__controls"><a class="burger-slider__btn burger-slider__btn_next" href="#">
                  <svg class="burger-slider__arrow">
                    <use xlink:href="./img/sprite/sprite.svg#arrow-scroll"></use>
                  </svg></a><a class="burger-slider__btn burger-slider__btn_prev" href="#">
                  <svg class="burger-slider__arrow">
                    <use xlink:href="./img/sprite/sprite.svg#arrow-scroll"></use>
                  </svg></a></div>
              <ul class="burgers-slider owl-carousel">
                <li class="burgers-slider__item">
                  <div class="burger-weight">
                    <div class="burger-weight__measure">
                      <div class="burger-weight__amount">1200</div>
                    </div>
                    <div class="burger-weight__title">ккал</div>
                  </div>
                  <div class="burgers-slider__left"><img class="burgers-slider__pic" src="../img/content/burgers/1.png" alt=""></div>
                  <div class="burgers-slider__right">
                    <div class="section__title section__title_white">Dark Beef Burger</div>
                    <div class="burgers-slider__text text-block">
                      <p>Ваш старый добрый знакомый, с рубленым бифштексом из 100% говядины, тремя кусочками нежнейшего сыра эмменталь, двумя помидорами, луком, салатом и соусом гриль теперь с добавлением экзотического соуса чураско.</p>
                    </div>
                    <div class="burgers-slider__options">
                      <div class="burgers-slider__price">
                        <div class="burgers-slider__price-amount">500</div>
                        <div class="burgers-slider__price-measure">рублей</div>
                      </div><a class="burgers-slider__buy btn" href="6">Заказать</a>
                    </div>
                  </div>
                </li>
                <li class="burgers-slider__item">
                  <div class="burger-weight">
                    <div class="burger-weight__measure">
                      <div class="burger-weight__amount">1200</div>
                    </div>
                    <div class="burger-weight__title">ккал</div>
                  </div>
                  <div class="burgers-slider__left"><img class="burgers-slider__pic" src="../img/content/burgers/2.png" alt=""></div>
                  <div class="burgers-slider__right">
                    <div class="section__title section__title_white">Dark Beef Burger</div>
                    <div class="burgers-slider__text text-block">
                      <p>Ваш старый добрый знакомый, с рубленым бифштексом из 100% говядины, тремя кусочками нежнейшего сыра эмменталь, двумя помидорами, луком, салатом и соусом гриль теперь с добавлением экзотического соуса чураско.</p>
                    </div>
                    <div class="burgers-slider__options">
                      <div class="burgers-slider__price">
                        <div class="burgers-slider__price-amount">500</div>
                        <div class="burgers-slider__price-measure">рублей</div>
                      </div><a class="burgers-slider__buy btn" href="6">Заказать</a>
                    </div>
                  </div>
                </li>
                <li class="burgers-slider__item">
                  <div class="burger-weight">
                    <div class="burger-weight__measure">
                      <div class="burger-weight__amount">1200</div>
                    </div>
                    <div class="burger-weight__title">ккал</div>
                  </div>
                  <div class="burgers-slider__left"><img class="burgers-slider__pic" src="../img/content/burgers/3.png" alt=""></div>
                  <div class="burgers-slider__right">
                    <div class="section__title section__title_white">Dark Beef Burger</div>
                    <div class="burgers-slider__text text-block">
                      <p>Ваш старый добрый знакомый, с рубленым бифштексом из 100% говядины, тремя кусочками нежнейшего сыра эмменталь, двумя помидорами, луком, салатом и соусом гриль теперь с добавлением экзотического соуса чураско.</p>
                    </div>
                    <div class="burgers-slider__options">
                      <div class="burgers-slider__price">
                        <div class="burgers-slider__price-amount">500</div>
                        <div class="burgers-slider__price-measure">рублей</div>
                      </div><a class="burgers-slider__buy btn" href="6">Заказать</a>
                    </div>
                  </div>
                </li>
                <li class="burgers-slider__item">
                  <div class="burger-weight">
                    <div class="burger-weight__measure">
                      <div class="burger-weight__amount">1200</div>
                    </div>
                    <div class="burger-weight__title">ккал</div>
                  </div>
                  <div class="burgers-slider__left"><img class="burgers-slider__pic" src="../img/content/burgers/4.png" alt=""></div>
                  <div class="burgers-slider__right">
                    <div class="section__title section__title_white">Dark Beef Burger</div>
                    <div class="burgers-slider__text text-block">
                      <p>Ваш старый добрый знакомый, с рубленым бифштексом из 100% говядины, тремя кусочками нежнейшего сыра эмменталь, двумя помидорами, луком, салатом и соусом гриль теперь с добавлением экзотического соуса чураско.</p>
                    </div>
                    <div class="burgers-slider__options">
                      <div class="burgers-slider__price">
                        <div class="burgers-slider__price-amount">500</div>
                        <div class="burgers-slider__price-measure">рублей</div>
                      </div><a class="burgers-slider__buy btn" href="6">Заказать</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section class="section team">
          <div class="team__section">
            <div class="section__title">Команда</div>
            <ul class="team-acco">
              <li class="team-acco__item"><a class="team-acco__trigger" href="#">дэниэл редклифф</a>
                <div class="team-acco__content">
                  <div class="team-acco__pic">
                    <div class="team-acco__img" style="background-image: url('../img/content/teammate.jpg');"></div>
                  </div>
                  <div class="team-acco__text">
                    <div class="team-acco__title">Шеф-повар</div>
                    <div class="team-acco__text-content">С радостью поможет подобрать идеальный бургер и оформить заказ.</div>
                  </div>
                </div>
              </li>
              <li class="team-acco__item"><a class="team-acco__trigger" href="#">ричард джеймс</a>
                <div class="team-acco__content">
                  <div class="team-acco__pic">
                    <div class="team-acco__img" style="background-image: url('../img/content/teammate.jpg');"></div>
                  </div>
                  <div class="team-acco__text">
                    <div class="team-acco__title">Оператор</div>
                    <div class="team-acco__text-content">С радостью поможет подобрать идеальный бургер и оформить заказ.</div>
                  </div>
                </div>
              </li>
              <li class="team-acco__item"><a class="team-acco__trigger" href="#">Джейк Финн</a>
                <div class="team-acco__content">
                  <div class="team-acco__pic">
                    <div class="team-acco__img" style="background-image: url('../img/content/teammate.jpg');"></div>
                  </div>
                  <div class="team-acco__text">
                    <div class="team-acco__title">Менеджер</div>
                    <div class="team-acco__text-content">С радостью поможет подобрать идеальный бургер и оформить заказ.</div>
                  </div>
                </div>
              </li>
              <li class="team-acco__item"><a class="team-acco__trigger" href="#">Николай Иванов</a>
                <div class="team-acco__content">
                  <div class="team-acco__pic">
                    <div class="team-acco__img" style="background-image: url('../img/content/teammate.jpg');"></div>
                  </div>
                  <div class="team-acco__text">
                    <div class="team-acco__title">Шоколатье</div>
                    <div class="team-acco__text-content">С радостью поможет подобрать идеальный бургер и оформить заказ.</div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section class="section menu">
          <div class="section__title section__title_white menu__title">Меню</div>
          <ul class="menu-acco">
            <li class="menu-acco__item"><a class="menu-acco__trigger" href="#" style="background-image: url('../img/bg/menu/meats.jpg');">
                <div class="menu-acco__trigger-text">Для мясоедов</div></a>
              <div class="menu-acco__content">
                <div class="menu-acco__text">
                  Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко относиться к слову, однако механизм сочленений неустойчив. Модальность высказывания, как справедливо считает И.Гальперин, пространственно выбирает метр.
                  Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко относиться к слову.
                </div>
              </div>
            </li>
            <li class="menu-acco__item"><a class="menu-acco__trigger" href="#" style="background-image: url('../img/bg/menu/vegans.jpg');">
                <div class="menu-acco__trigger-text">Вегетарианское</div></a>
              <div class="menu-acco__content">
                <div class="menu-acco__text">
                  Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко относиться к слову, однако механизм сочленений неустойчив. Модальность высказывания, как справедливо считает И.Гальперин, пространственно выбирает метр.
                  Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко относиться к слову.
                </div>
              </div>
            </li>
            <li class="menu-acco__item"><a class="menu-acco__trigger" href="#" style="background-image: url('../img/bg/menu/diets.jpg');">
                <div class="menu-acco__trigger-text">Диетическое</div></a>
              <div class="menu-acco__content">
                <div class="menu-acco__text">
                  Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко относиться к слову, однако механизм сочленений неустойчив. Модальность высказывания, как справедливо считает И.Гальперин, пространственно выбирает метр.
                  Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко относиться к слову.
                </div>
              </div>
            </li>
          </ul>
        </section>
        <section class="section reviews">
          <ul class="reviews__list">
            <li class="reviews__item">
              <div class="review">
                <div class="review__photo" style="background-image: url('../img/content/reviews/1.jpg');"></div>
                <div class="review__hover">
                  <div class="review__title">Константин Спилберг</div>
                  <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                  <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                </div>
              </div>
            </li>
            <li class="reviews__item">
              <div class="review">
                <div class="review__photo" style="background-image: url('../img/content/reviews/2.jpg');"></div>
                <div class="review__hover">
                  <div class="review__title">Константин Спилберг</div>
                  <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                  <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                </div>
              </div>
            </li>
            <li class="reviews__item">
              <div class="review">
                <div class="review__photo" style="background-image: url('../img/content/reviews/3.jpg');"></div>
                <div class="review__hover">
                  <div class="review__title">Константин Спилберг</div>
                  <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                  <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                </div>
              </div>
            </li>
            <li class="reviews__item">
              <div class="review">
                <div class="review__photo" style="background-image: url('../img/content/reviews/4.jpg');"></div>
                <div class="review__hover">
                  <div class="review__title">Константин Спилберг</div>
                  <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                  <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                </div>
              </div>
            </li>
            <li class="reviews__item">
              <div class="review">
                <div class="review__photo" style="background-image: url('../img/content/reviews/5.jpg');"></div>
                <div class="review__hover">
                  <div class="review__title">Константин Спилберг</div>
                  <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                  <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                </div>
              </div>
            </li>
            <li class="reviews__item">
              <div class="review">
                <div class="review__photo" style="background-image: url('../img/content/reviews/6.jpg');"></div>
                <div class="review__hover">
                  <div class="review__title">Константин Спилберг</div>
                  <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                  <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                </div>
              </div>
            </li>
            <li class="reviews__item">
              <div class="review">
                <div class="review__photo" style="background-image: url('../img/content/reviews/7.jpg');"></div>
                <div class="review__hover">
                  <div class="review__title">Константин Спилберг</div>
                  <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                  <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                </div>
              </div>
            </li>
            <li class="reviews__item">
              <div class="review">
                <div class="review__photo" style="background-image: url('../img/content/reviews/8.jpg');"></div>
                <div class="review__hover">
                  <div class="review__title">Константин Спилберг</div>
                  <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                  <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
                </div>
              </div>
            </li>
          </ul>
        </section>
        <section class="section order">
          <div class="container">
            <div class="section__title">Закажите доставку</div>
            <div class="order__form">
              <form class="order__form-tag" id="order-form" method="POST" action="/order/">
                <div class="order__form-col">
                  <div class="order__form-row order__form-row_double">
                    <label class="order__form-block">
                      <div class="order__form-label">Имя</div>
                      <input class="order__form-input" name="name" type="text" placeholder="">
                    </label>
                    <label class="order__form-block">
                      <div class="order__form-label">Телефон</div>
                      <input class="order__form-input phone-mask" name="phone" type="text" placeholder="">
                    </label>
                  </div>
                  <div class="order__form-row order__form-row_double">
                    <label class="order__form-block">
                      <div class="order__form-label">email</div>
                      <input class="order__form-input" name="email" type="email" placeholder="">
                    </label>
                    <label class="order__form-block">
                      <div class="order__form-label">Улица</div>
                      <input class="order__form-input" name="street" type="text" placeholder="">
                    </label>
                  </div>
                  <div class="order__form-row order__form-row_quatro">
                    <label class="order__form-block">
                      <div class="order__form-label">Дом</div>
                      <input class="order__form-input" name="home" type="text" placeholder="">
                    </label>
                    <label class="order__form-block">
                      <div class="order__form-label">Корпус</div>
                      <input class="order__form-input" name="part" type="text" placeholder="">
                    </label>
                    <label class="order__form-block">
                      <div class="order__form-label">Квартира</div>
                      <input class="order__form-input" name="appt" type="text" placeholder="">
                    </label>
                    <label class="order__form-block">
                      <div class="order__form-label">Этаж</div>
                      <input class="order__form-input" name="floor" type="text" placeholder="">
                    </label>
                  </div>
                </div>
                <div class="order__form-col">
                  <div class="order__form-row">
                    <label class="order__form-block">
                      <div class="order__form-label">Комментарий</div>
                      <textarea class="order__form-input order__form-input_textarea" name="comment"></textarea>
                    </label>
                  </div>
                  <div class="order__form-buttons">
                    <div class="order__form-row">
                      <label class="order__radio">
                        <input class="order__radio-elem" name="payment" type="radio">
                        <div class="order__radio-fake"></div>
                        <div class="order__radio-title">Потребуется сдача</div>
                      </label>
                      <label class="order__radio">
                        <input class="order__radio-elem" name="payment" type="radio">
                        <div class="order__radio-fake"></div>
                        <div class="order__radio-title">Оплата по карте</div>
                      </label>
                    </div>
                    <div class="order__form-row">
                      <label class="order__radio order__radio_checkbox">
                        <input class="order__radio-elem" name="callback" type="checkbox">
                        <div class="order__radio-fake"></div>
                        <div class="order__radio-title">Не перезванивать</div>
                      </label>
                    </div>
                    <div class="order__form-row">
                      <input class="order__form-button" name="" type="submit" value="Заказать">
                      <input class="order__form-button order__form-button_reset" name="" type="reset" value="Очистить">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>
        <section class="section map">
          <div class="yandex-map" id="map"></div>
          <footer class="footer">
            <div class="container">
              <div class="footer__address">Санкт-Петербург, ул.Бабушкина, д.12/1, 15</div><a class="footer__phone" href="tel:+78123771377">+7 (812) 377-13-77</a>
            </div>
          </footer>
        </section>
      </div>
    </div>
    <div class="hamburger-menu" id="hamburger-menu">
      <div class="hamburger-menu__logo"><a class="logo" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="98.265" height="74.317" viewBox="0 0 98.265 74.317"><path fill="#E55028" d="M70.098 32.877c-.951 1.28-2.524 2.065-4.392 2.152-2.689.125-3.996-2.211-4.227-7.18-.195-4.222.7-12.311.555-15.448l-.104-2.241c-.896.041-5.063 17.529-7.315 20.628-.664 1.004-1.783 1.918-3.164 1.981-3.176.147-5.363-3.42-5.619-8.948-.168-3.625.494-10.318.141-17.937-.038-.824-.203-1.152-.352-1.146-2.989.139-9.656 20.25-9.976 30.298-.044 1.463.219 3.921.578 5.215-3.605-.244-7.463-.29-7.631-3.914-.154-3.324 1.577-10.404 3.644-16.679C33.68 15.287 39.273.278 45.175.005c6.537-.304 5.774 11.524 6.294 22.693.083 1.791.144 3.101.375 4.063C57.981 8.958 59.122 3.7 62.783 3.531c2.093-.098 3.717 2.635 3.887 6.296.099 2.129.073 6.435.195 9.05.546 11.768 1.761 11.337 3.233 14zm20-17.187c-.048 2.364-6.179 11.961-12.003 11.842-3.201-.066-4.799-2.139-4.742-4.866.049-2.365 1.189-4.745 2.058-6.295-5.588-.951-6.262-3.551-6.231-5.006.059-2.911 2.857-4.384 4.64-4.348 1.419.029 1.832 1.202 1.816 1.968-.019.872-.402 1.921-1.013 3.181 2.754.678 7.269.732 7.225 2.882-.04 1.964-3.348 5.211-3.402 7.868-.02.981.404 1.536 1.17 1.552 3.057.063 6.985-6.848 8.766-10.234 1.267.245 1.73.73 1.716 1.456z"/><path fill="#F9B43B" d="M94.032 41.441c-.035 1.723-4.502 8.716-8.745 8.629-2.334-.048-3.497-1.558-3.456-3.546.035-1.725.867-3.457 1.5-4.587-4.072-.693-4.563-2.588-4.541-3.647.043-2.121 2.082-3.194 3.381-3.168 1.033.021 1.334.876 1.322 1.434-.013.636-.293 1.399-.736 2.318 2.006.494 5.295.533 5.263 2.099-.029 1.433-2.438 3.797-2.478 5.733-.016.716.295 1.12.852 1.132 2.228.046 5.09-4.99 6.387-7.458.925.179 1.263.532 1.251 1.061zm.683 17.468c-.028 1.357-3.547 6.866-6.89 6.798-1.838-.038-2.756-1.228-2.723-2.794.027-1.356.683-2.724 1.181-3.613-3.207-.545-3.595-2.038-3.577-2.873.035-1.671 1.641-2.516 2.664-2.495.814.017 1.052.689 1.043 1.13-.011.499-.231 1.103-.582 1.825 1.58.39 4.173.42 4.147 1.655-.023 1.127-1.923 2.989-1.954 4.517-.011.562.232.881.673.89 1.754.036 4.01-3.932 5.031-5.876.73.142.996.419.987.836z"/><path fill="#8BC334" d="M88.913 25.685c.041-1.983 2.199-3.441 4.765-3.389 2.612.053 4.619 1.308 4.587 2.902-.053 2.565-2.671 5.125-5.283 5.072-2.614-.053-4.1-3.085-4.069-4.585z"/><path fill="#F9B43B" d="M50.903 68.48c.025-1.241 1.375-2.152 2.979-2.119 1.633.033 2.889.817 2.867 1.814-.032 1.604-1.669 3.204-3.303 3.171-1.634-.033-2.562-1.928-2.543-2.866z"/><path fill="#E55028" d="M30.218 46.802c.025-1.241 1.375-2.152 2.979-2.119 1.633.033 2.888.817 2.868 1.815-.033 1.603-1.669 3.203-3.303 3.17-1.635-.033-2.564-1.929-2.544-2.866z"/><path fill="#F9B43B" d="M60.528 55.991c-.062 2.992-2.562 6.684-8.605 6.56-3.441-.07-5.892-1.707-5.856-3.444.011-.508.35-.98.894-1.297.917.556 2.042 1.148 4.197 1.192 3.381.069 4.955-2.262 5.003-4.596.046-2.273-1.325-3.92-3.36-4.021-1.734-.036-3.321-.037-4.502.626-.981-.349-1.446-1.047-1.432-1.705.026-1.257 1.053-1.744 2.37-1.718a7.344 7.344 0 0 1 1.759.275c2.111-.735 5.241-3.005 5.307-6.237.057-2.751-2.271-4.477-6.131-4.556-.809-.017-1.648.057-2.519.158.202.334.315.666.309.994-3.89 7.224-4.585 22.177-1.9 26.931-.398.441-2.318.642-3.185.624-2.154-.044-3.536-1.33-3.762-3.43-.854-6.542 1.331-16.736 3.201-21.785.256-.804.539-1.456.85-2.049-1.419.599-2.662 1.383-3.578 2.23-.982-.288-1.657-.932-1.645-1.56.004-.209.068-.388.191-.596.683-1.152 5.832-4.1 12.624-3.961 8.826.182 11.26 4.183 11.205 6.815-.078 3.799-4.174 6.471-7.244 7.335 3.901.981 5.872 4.194 5.809 7.215zm23.741-14.067c-.025 1.235-4.68 9.245-9.137 9.153-1.82-.037-2.973-1.038-3.353-3.129-1.301 1.568-3.056 3.028-5.007 2.988-2.277-.047-3.387-1.501-3.33-4.234.022-1.104.296-3.312.342-5.557.03-1.461-.02-2.214-.226-3.291.946-.143 1.86-.287 2.771-.269 1.593.032 2.261.827 2.224 2.648-.021 1.074-.368 3.67-.404 5.46-.025 1.236.191 1.727.549 1.734.488.01 1.775-.809 3.018-2.703.126-1.397.319-2.857.345-4.094.024-1.171-.056-2.052-.241-2.574.557-.088 1.207-.172 1.794-.159 2.082.042 3.003 1.134 2.95 3.704-.018.846-.453 3.083-.485 4.645-.03 1.496.149 2.216.735 2.228 1.105.022 4.277-3.882 5.82-7.722.785-.213 1.656.163 1.635 1.172zm-7.067 18.971c-2.256.077-4.504.913-6.465 2.147l-.014.711c-.08 3.894-1.665 10.649-5.854 10.563-1.74-.035-2.698-1.084-2.661-2.897.058-2.818 2.301-5.81 5.189-8.077.003-.172.007-.319-.016-.444-.851.867-1.79 1.288-2.795 1.268-1.666-.034-2.599-1.181-2.559-3.115.06-2.941 3.23-5.743 6.269-5.681 1.004.021 1.999.435 1.982 1.243-.012.612-.657.99-1.986 1.305-.164-.418-.381-.595-.601-.599-1.054-.021-2.375 2.279-2.407 3.847-.014.687.176.959.471.965.637.014 1.696-1.46 1.355-2.789 1.193-.761 1.511-.754 1.976-.745 1.03.021 1.481.717 1.613 2.632 1.906-.965 3.879-1.538 5.545-1.504.614.011 1.146.389.958 1.17zm-9.982 5.163c-1.606 1.877-2.631 4.014-2.671 5.999-.011.515.104.858.399.864 1.126.023 1.966-3.881 2.272-6.863z"/><path fill="#F9B43B" d="M87.722 60.522c-.023 1.176-4.121 7.342-8.676 7.248-3.455-.07-5.904-2.522-5.836-5.879.066-3.234 2.178-5.763 4.822-5.709 1.887.039 2.989 1.262 2.948 3.271-.044 2.156-1.718 3.715-3.185 4.688.475.794 1.151 1.25 1.984 1.267 1.886.039 4.408-2.263 6.316-5.679.988-.298 1.644-.016 1.627.793zm-10.666.321c-.01.467.005.907.07 1.301.775-.794 1.383-1.712 1.406-2.839.011-.539-.177-.91-.398-.915-.465-.01-1.053 1.204-1.078 2.453z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#E55028" d="M.004 29.345H.002L0 29.35z"/><g fill-rule="evenodd" clip-rule="evenodd"><path fill="#E55028" d="M16.591 51.478l1.104-1.103c.116.836-.023 1.49-.405 2.104-.055.118-.111.234-.164.351-.107.34-.333.576-.631.754l-.205.141c-.119.075-.241.148-.361.222-.079.021-.158.038-.237.057l.023.359c1.227.24 2.442.3 3.628-.206 1.134-.483 1.828-1.463 2.63-2.317.106-.254.296-.423.524-.562a1.62 1.62 0 0 1 .646-.646c.177-.271.427-.451.722-.569.478-.575 1.177-.62 1.832-.776-.083-.703-.898-.643-1.186-1.135-1.96-1.289-3.993-2.394-6.42-2.469-.127.037-.252.076-.38.114-.26.09-.516.183-.776.264-2.304.732-4.358 2.038-6.617 2.875a12.306 12.306 0 0 1-5.247.731c-.536-.04-1.04-.441-1.604-.149.951 1.728 2.491 2.779 4.218 3.572 1.992.916 4.024.583 6.045.054l1.496-.706c.455-.321.91-.642 1.365-.96z"/><path fill="#F9B43B" d="M32.426 58.221c-1.174-.394-2.376-.705-3.583-.242-1.696.652-3.396 1.288-5.128 1.84-1.39.442-2.796.794-4.283.647-.32-.032-.71-.216-1.011.236 2.812 1.149 5.504 2.677 8.71 1.845l2.711-1.091c.066-.042.133-.082.199-.122 1.264-.631 2.45-1.41 3.77-1.928-.087-.833-.893-.829-1.385-1.185zM22.016 35.08c-.822-.457-1.882-.436-2.76-.384-1.202.067-2.362.073-3.533-.165a32.958 32.958 0 0 0-.273-.132c.328.908.994 1.563 1.633 2.256.411.444.821.54 1.39.581 1.492.108 2.934-.383 4.417-.295.226.058.453.114.678.173-.319-.834-.798-1.616-1.552-2.034z"/><path fill="#E55028" d="M38.82 70.154c-1.171-.494-2.296-.518-3.313.302-.573.464-1.194.786-1.997 1.032 1.17.57 2.313.802 3.478.628.804-.116 1.623-.376 2.042-1.234.163-.338.24-.539-.21-.728z"/></g></svg></a></div>
      <div class="hamburger-menu__items">
        <nav class="nav nav_hamburger">
          <ul class="nav__list">
            <li class="nav__item"><a class="nav__link" href="1">о нас</a>
            </li>
            <li class="nav__item"><a class="nav__link" href="2">бургеры</a>
            </li>
            <li class="nav__item"><a class="nav__link" href="3">команда</a>
            </li>
            <li class="nav__item"><a class="nav__link" href="4">меню</a>
            </li>
            <li class="nav__item"><a class="nav__link" href="5">отзывы</a>
            </li>
            <li class="nav__item"><a class="nav__link" href="7">контакты</a>
            </li>
          </ul>
        </nav>
      </div><a class="hamburger-menu__close" href="#">
        <svg class="hamburger-menu__close-icon">
          <use xlink:href="./img/sprite/sprite.svg#close"></use>
        </svg></a>
    </div>
    <div class="full-review popup" id="full-review"><a class="full-review__close" href="#"><svg id="icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
	<path fill-rule="evenodd" clip-rule="evenodd" fill="#E45028"
	      d="M9.831 7.494l4.673-4.673A1.651 1.651 0 1 0 12.167.484L7.494 5.157 2.82.483A1.653 1.653 0 0 0 .483 2.82l4.673 4.673-4.673 4.673a1.653 1.653 0 0 0 2.337 2.337L7.493 9.83l4.673 4.673c.646.646 1.691.646 2.337 0s.646-1.691 0-2.337L9.831 7.494z"/>
</svg></a>
      <div class="full-review__inner">
        <div class="full-review__title">Констнтин Спилберг</div>
        <div class="full-review__content">
          Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным. Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.
          
        </div>
      </div>
    </div>
    <div class="status-popup popup" id="success">
      <div class="status-popup__inner">
        <div class="status-popup__message">Сообщение отправлено</div><a class="status-popup__close btn" href="#">Закрыть</a>
      </div>
    </div>
    <div class="status-popup popup" id="error">
      <div class="status-popup__inner">
        <div class="status-popup__message error-message">Произошла ошибка</div><a class="status-popup__close btn" href="#">Закрыть</a>
      </div>
    </div>
    <script src="./js/vendors.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="./js/main.min.js"></script>
  </body>
</html>
