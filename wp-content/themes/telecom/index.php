<?php get_header();?>
<main>
  <section class="hero">
    <div class="container hero-container">
      <div class="hero-description">
        <h1 class="hero-description__title">Экономия нервов и денег — интернет К-Телеком
        </h1>
        <ul class="hero-description-list">
          <li class="hero-description-list__item">5 тарифов для многоквартирных и 4 для частных домов
          </li>
          <li class="hero-description-list__item">безлимит подключенных устройств
          </li>
          <li class="hero-description-list__item">комфортная поддержка 24/7
          </li>
        </ul>
        <!-- /.hero-description-list -->
        <a href="#" class="button hero-description__button">Подробнее</a>
      </div>
      <!-- /.hero-description -->
      <img src="<?php echo(get_template_directory_uri());?> /img/hero-img.png" alt="" class=" hero__img">
    </div>
    <!-- /.container -->
  </section>
  <!-- /.hero -->
  <section class="prices">
    <div class="container prices-container">
      <h2 class="prices__title">Тарифные планы</h2>
      <div class="owl-carousel">
        <div class="prices-card">
          <h3 class="prices-card__title">Мой клик</h3>
          <span class="prices-card__subtitle">Скорость интернета</span>
          <span class="prices-card__speed">до 40 Мбит/с</span>
          <p class="prices-card__description">Отличный вариант для пенсионеров, выполнения определенных задач и работе
            с файлами различных размеров.</p>
          <div class="prices-card-checkbox"><input type="checkbox" checked class="prices-card-checkbox__checkbox"
              name="tv" id="tv"><label for="tv">ТВ + 100 ₽ (пакет
              “Базовый”)</label></div>
          <div class="prices-card-prices"> <span class="prices-card__price">399 ₽ </span>
            <span class="prices-card__period">в месяц</span>
          </div>
          <span class="prices-card__star">*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости
          </span>
          <button class="button prices-card__button">Выбрать тариф</button>
        </div>
        <!-- /.prices-card -->
        <div class="prices-card">
          <h3 class="prices-card__title">Резвый клик</h3>
          <span class="prices-card__subtitle">Скорость интернета</span>
          <span class="prices-card__speed">80-100 Мбит/с</span>
          <p class="prices-card__description">Отличный вариант для всей семьи. Общайтесь в соцсетях и смотрите любимые
            фильмы и сериалы!
          </p>
          <div class="prices-card-checkbox"><input type="checkbox" class="prices-card-checkbox__checkbox" name="tv1"
              id="tv1"><label for="tv1">ТВ + 100 ₽ (пакет
              “Базовый”)</label></div>
          <div class="prices-card-prices"><span class="prices-card__price">449 ₽ </span>
            <span class="prices-card__period">в месяц</span>
          </div>
          <span class="prices-card__star">*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости
          </span>
          <button class="button-blue prices-card__button">Тариф выбран</button>
        </div>
        <!-- /.prices-card -->
        <div class="prices-card">
          <h3 class="prices-card__title">Турбо клик</h3>
          <span class="prices-card__subtitle">Скорость интернета</span>
          <span class="prices-card__speed">до 100 Мбит/с</span>
          <p class="prices-card__description">Отличный вариант для пенсионеров, выполнения определенных задач и работе
            с файлами различных размеров.</p>
          <div class="prices-card-checkbox"><input type="checkbox" class="prices-card-checkbox__checkbox" name="tv2"
              id="tv2"><label for="tv2">ТВ + 100 ₽ (пакет
              “Базовый”)</label></div>
          <div class="prices-card-prices"><span class="prices-card__price">549 ₽ </span>
            <span class="prices-card__period">в месяц</span>
          </div>
          <span class="prices-card__star">*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости
          </span>
          <button class="button prices-card__button">Выбрать тариф</button>
        </div>
        <!-- /.prices-card -->

      </div>
      <!-- /.owl-carousel -->
    </div>
    <!-- /.container prices-container -->
  </section>
  <!-- /.prices -->
  <section class="connect">
    <div class="container connect-container">

      <h2 class="connect__title">Подключиться просто!</h2>
      <div action="" class="connect-form">
        <div class="connect-form-wrapper">
          <span class="connect-form__choice">Интернет</span>
          <span class="connect-form__choice">Интернет + ТВ</span>
          <span class="connect-form__choice">Телефония</span>
          <span class="connect-form__choice">Видеонаблюдение</span>
        </div>

        <div class="connect-form-wrapper">
          <?php echo do_shortcode( '[contact-form-7 id="14" title="форма связи"]' ); ?>

        </div>

      </div>
    </div>
    <!-- /.container connect-container -->
  </section>
  <!-- /.connect -->
</main>
<?php get_footer( ); ?>