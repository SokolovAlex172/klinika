<?php
    require_once 'connect.php';
    $goods = mysqli_query($connect, "SELECT * FROM `klinika`");
    $goods = mysqli_fetch_all($goods);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pages/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">

    <title>Klinika</title>
</head>

<body class="page">
    <header class="header">
        <div class="container header__wrapper">
            <div class="header__col header__col_left">
                <div class="menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <img class="header__logo" src="./image/icons/logo.svg" alt="Лого">
                <div class="header__location">
                    <p class="header__location-city">Ростов-на-Дону</p>
                    <p class="header__location-street">ул. Ленина, 2Б</p>
                </div>
            </div>
            <div class="header__col_right">
                <div class="header__callback">
                    <a href="tel:+7(863)-000-00-00" class="header__callback-number">+7(863) 000 00 00</a>
                    <p class="header__location-city">Ростов-на-Дону</p>
                    <botton class="btn-entry button-green header__button" type="button">Записаться на прием</botton>
                </div>
            </div>
        </div>
        <div class="header__nav">
            <div class="container">
                <ul class="nav-content ">
                    <li><a href="#" class="nav-link">О клинике</a></li>
                    <li><a href="#" class="nav-link">Услуги</a></li>
                    <li><a href="#" class="nav-link">Специалисты</a></li>
                    <li><a href="#" class="nav-link">Цены</a></li>
                    <li><a href="#" class="nav-link">Контакты</a></li>
                </ul>
                <botton class="button-white header__menu-btn" type="button">Записаться на прием</botton>
            </div>
        </div>
    </header>
    <main>
        <section class="promo">
             <img class="promo__image" src="./image/header-image.png" alt="Промо">
            <div class="promo__info container">
                <h1 class="promo__info-title">Многопрофильная клиника для детей <br>и взрослых</h1>
                <p class="promo__info-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
           
        </section>
        <section class="slider">
            <div class="mySwiper slider__inner">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($goods as $item) {
                    ?>
                    <div class="swiper-slide">
                        <div class="slider__container container">
                            <div class="slider__container-info">
                                <div class="slider__info">
                                    <h2 class="slider__info-title"><?php echo $item[1] ?></h2>
                                    <h3 class="slider__info-subtitle"><?php echo $item[2] ?></h3>
                                    <ul class="slider__list">
                                        <li class="slider_list-item"><?php echo $item[3] ?></li>
                                        <li class="slider_list-item"><?php echo $item[4] ?></li>
                                        <li class="slider_list-item"><?php echo $item[5] ?></li>
                                        <li class="slider_list-item"><?php echo $item[6] ?></li>
                                    </ul>
                                    <div class="slider__price">
                                        <div class="slider__price-all"><?php echo $item[7] ?> <span><?php echo $item[8] ?></sanp><?php echo $item[9]?></div>
                                        <div class="slider__price-old"><sanp><?php echo $item[10] ?> </sanp><?php echo $item[11] ?> </div>
                                    </div>
                                </div>
                                <div class="slider__buttons">
                                    <botton class="button-green slider__button" type="button">Записаться</botton>
                                    <button class="button-transparent slider__button" type="button">Подробнее</button>
                                </div>
                            </div>
                            <img class="slider__image" src="./image/doctor-working.jpg" alt="картинка слайдера">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider__container container">
                            <div class="slider__container-info">
                                <div class="slider__info">
                                    <h2 class="slider__info-title"><?php echo $item[1] ?></h2>
                                    <h3 class="slider__info-subtitle"><?php echo $item[2] ?></h3>
                                    <ul class="slider__list">
                                        <li class="slider_list-item"><?php echo $item[3] ?></li>
                                        <li class="slider_list-item"><?php echo $item[4] ?></li>
                                        <li class="slider_list-item"><?php echo $item[5] ?></li>
                                        <li class="slider_list-item"><?php echo $item[6] ?></li>
                                    </ul>
                                    <div class="slider__price">
                                        <div class="slider__price-all"><?php echo $item[7] ?> <span><?php echo $item[8] ?></sanp><?php echo $item[9]?></div>
                                        <div class="slider__price-old"><sanp><?php echo $item[10] ?> </sanp><?php echo $item[11] ?> </div>
                                    </div>
                                </div>
                                <div class="slider__buttons">
                                    <botton class="button-green slider__button" type="button">Записаться</botton>
                                    <button class="button-transparent slider__button" type="button">Подробнее</button>
                                </div>
                            </div>
                            <img class="slider__image" src="./image/doctor-working.jpg" alt="картинка слайдера">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider__container container">
                            <div class="slider__container-info">
                                <div class="slider__info">
                                    <h2 class="slider__info-title"><?php echo $item[1] ?></h2>
                                    <h3 class="slider__info-subtitle"><?php echo $item[2] ?></h3>
                                    <ul class="slider__list">
                                        <li class="slider_list-item"><?php echo $item[3] ?></li>
                                        <li class="slider_list-item"><?php echo $item[4] ?></li>
                                        <li class="slider_list-item"><?php echo $item[5] ?></li>
                                        <li class="slider_list-item"><?php echo $item[6] ?></li>
                                    </ul>
                                    <div class="slider__price">
                                        <div class="slider__price-all"><?php echo $item[7] ?> <span><?php echo $item[8] ?></sanp><?php echo $item[9]?></div>
                                        <div class="slider__price-old"><sanp><?php echo $item[10] ?> </sanp><?php echo $item[11] ?> </div>
                                    </div>
                                </div>
                                <div class="slider__buttons">
                                    <botton class="button-green slider__button" type="button">Записаться</botton>
                                    <button class="button-transparent slider__button" type="button">Подробнее</button>
                                </div>
                            </div>
                            <img class="slider__image" src="./image/doctor-working.jpg" alt="картинка слайдера">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider__container container">
                            <div class="slider__container-info">
                                <div class="slider__info">
                                    <h2 class="slider__info-title"><?php echo $item[1] ?></h2>
                                    <h3 class="slider__info-subtitle"><?php echo $item[2] ?></h3>
                                    <ul class="slider__list">
                                        <li class="slider_list-item"><?php echo $item[3] ?></li>
                                        <li class="slider_list-item"><?php echo $item[4] ?></li>
                                        <li class="slider_list-item"><?php echo $item[5] ?></li>
                                        <li class="slider_list-item"><?php echo $item[6] ?></li>
                                    </ul>
                                    <div class="slider__price">
                                        <div class="slider__price-all"><?php echo $item[7] ?> <span><?php echo $item[8] ?></sanp><?php echo $item[9]?></div>
                                        <div class="slider__price-old"><sanp><?php echo $item[10] ?> </sanp><?php echo $item[11] ?> </div>
                                    </div>
                                </div>
                                <div class="slider__buttons">
                                    <botton class="button-green slider__button" type="button">Записаться</botton>
                                    <button class="button-transparent slider__button" type="button">Подробнее</button>
                                </div>
                            </div>
                            <img class="slider__image" src="./image/doctor-working.jpg" alt="картинка слайдера">
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="slider__nav">
                <div class="swiper-button-next">
                    <img class="image-next" src="./image/icons/right-arrow.svg" alt="">
                </div>
                <div class="swiper-button-prev">
                    <img class="image-prev" src="./image/icons/left-arrow.svg" alt="">
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__container container">
            <img class="footer__logo" src="./image/icons/logo-white.svg" alt="лого">
            <div class="footer__nav">
                <ul class="nav-content ">
                    <li><a href="#" class="nav-link">О клинике</a></li>
                    <li><a href="#" class="nav-link">Услуги</a></li>
                    <li><a href="#" class="nav-link">Специалисты</a></li>
                    <li><a href="#" class="nav-link">Цены</a></li>
                    <li><a href="#" class="nav-link">Контакты</a></li>
                </ul>
            </div>
            <div class="footer__social">
                <a href="#" class="footer__social-link">
                    <img class="footer__social-img" src="./image/icons/instagram.svg" alt="Инстаграм" >
                </a>
                <a href="#" class="footer__social-link">
                    <img class="footer__social-img" src="./image/icons/whatsapp.svg" alt="Вотсап" >
                </a>
                <a href="#" class="footer__social-link">
                    <img  class="footer__social-img" src="./image/icons/telegram.svg" alt="Телеграм">
                </a>
            </div>
        </div>
    </footer>
    <div class="popup">
        <div class="popup__container">
          <button class="popup__close" type="button">
            <img class="popup__close-image" src="./image/icons/close.svg" alt="Закарыть">
          </button>
          <h3 class="popup__title">Записаться на прием</h3>
          <form class="form"  id="form-place" name="form-popup" action="mailto:rbru-metrika@yandex.ru" method="post" enctype="text/plain"> 
            <div class="form__section">
            <input type="text" class="form__input" placeholder="Ваше Имя" minlength="2" maxlength="30" required>
            </div>
            <div class="form__section">
            <input type="email" class="form__input"placeholder="Ваша почта"  minlength="2" maxlength="30" required>
          </div>
            <button class="form__submit" type="submit">Создать</button>
          </form>
        </div>
      </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src='./scripts/index.js'></script>
</body>

</html>