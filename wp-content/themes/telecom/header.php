<!DOCTYPE html>
<html lang="ru">
<?php wp_head(  )?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

  <title>К-Телеком</title>
</head>

<body>
  <header class="header">
    <div class="container header-container">

      <a href="#"> <img src="<?php echo(get_template_directory_uri());?>/img/logo.svg" alt="" class=" header-logo"></a>
      <button class="header-menu-button"><span class="header-menu-button__line"></span></button>

      <ul class="header-menu-mobile-list">
        <li class="header-menu-mobile-list-item"><a href="" class="header-menu-mobile-list-item__link">Главная</a>
        </li>
        <li class="header-menu-mobile-list-item"><a href="" class="header-menu-mobile-list-item__link">Интернет</a>
        </li>
        <li class="header-menu-mobile-list-item"><a href="" class="header-menu-mobile-list-item__link">Телефония</a>
        </li>
        <li class="header-menu-mobile-list-item"><a href="" class="header-menu-mobile-list-item__link">Акции</a></li>
      </ul>

    </div>
    <!-- /.container -->
  </header>
  <!-- /.header -->