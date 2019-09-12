<?
include 'change.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>W-ALCO</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" type="text/css" href="slick/slick.css">
       <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.dropdownPlain.js"></script>
    <script type="text/javascript" src="js/scripts2.js"></script>
  <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/scripts.js" type="text/javascript" charset="utf-8"></script>
  </head>
  <body>


    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter51423046 = new Ya.Metrika2({
                    id:51423046,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/51423046" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<div class="menu_pay" style="display:none;">
      <ul class="tabs">
      <div class="allert_menu">Товар заказан</div>
      
        <div style="color:white; font-family: helvetica;" class="tab_pay">
          <h1 style="padding-top:5px;">Информация о заказе</h1>
           <div> <h3 class="total_price"> количество товаров : <div id="kol"></div></h3> </div>
           <div>  <h3>сумма заказа: <div id="sum_goods"></div></h3> </div>            
            <button type="submit" class="pay-button" onClick="output()">Заказать</button>
        </div>
       </ul>
       <button class="btn_close_pay"></button>
</div>




     <div class="menu_authorization" style="display:none;">
    <ul class="tabs">
      <li class="tab_button tab_button_active">Вход</li><li class="tab_button">Регистрация</li>
        <div class="tab_content">
            <form>
              <input type="hidden" name="mode" value="login">
              <div style="border:none">
                <input data-name="username" class="b-input" type="text" id="username" autocomplete="username" maxlength="255" name="username" placeholder="логин">
                <input data-name="password" class="b-input" type="password" id="password" autocomplete="password" maxlength="255" name="password" placeholder="пароль">
              </div>
              <div style="border:none">
                <button type="submit" class="a-button">Вход</button>
              </div>
            </form>
        </div>
        <div class="tab_content tab_hide">
          <form>
              <input type="hidden" name="mode" value="login">
              <div style="border:none">
                <input data-name="username" class="b-input" type="text" id="username" autocomplete="username" maxlength="255" name="username" placeholder="логин">
                <input data-name="password" class="b-input" type="password" id="password" autocomplete="password" maxlength="255" name="password" placeholder="пароль">
                  <input data-name="password" class="b-input" type="password" id="password" autocomplete="password" maxlength="255" name="password" placeholder="почта">
              </div>
              <div style="border:none">
                <button type="submit" class="a-button">Регистрация</button>
              </div>
            </form>
        </div>

    </ul>

    <button class="btn_close"></button>

  </div>   

     

  <div class="undercont">
     <div class="search">
       <input type="search" value="Поиск">
       <button type="button" name="button" style="background: white; color: black;">
          <img style="height:20px; width:20px;" src="pic/magnifying-glass.png" alt="" />
          </button>
      </div>  
    </div>

  
    <nav class="navbar navbar-inverse"> 
        <div class="container"> 
        <div class="navbar-header"> 
        <a class="navbar-brand" href="#">W-ALCO</a> 
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> 
        <span class="sr-only">Toggle navigation</span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        </button> 
        </div> 
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false"> 
        <ul class="nav navbar-nav navbar-left"> 
        <li <?= false !== strpos($_SERVER['REQUEST_URI'], 'index.php?id=content') ? 'class="active"' : '' ?>><a href="index.php?id=content">Главная</a></li> 
        <li <?= false !== strpos($_SERVER['REQUEST_URI'], 'index.php?id=shop') ? 'class="active"' : '' ?>><a href="index.php?id=shop">Каталог</a></li> 
        <li <?= false !== strpos($_SERVER['REQUEST_URI'], 'index.php?id=about') ? 'class="active"' : '' ?>><a href="index.php?id=about">О компании</a></li> 
        <li <?= false !== strpos($_SERVER['REQUEST_URI'], 'index.php?id=komment') ? 'class="active"' : '' ?>><a href="index.php?id=komment">Контакты</a></li> 
        </ul> 
        <ul class="nav navbar-nav navbar-right"><li><div id="m3"><button id="authorization">Авторизация</button></div></li></ul> 
        </div> 
        </div> 
    </nav>


    <div class="container">

      <?php
      include 'routcont.inc.php';
      ?>  

    
  </div>
    
      </div>
     
   <footer>
 
              <div style="display:inline-block;  height:100px; width:600px; margin-top: 20px;">
                  <div style="float:left; padding-right: 40px;">
                  <h1>Контакты</h1>
                     <ul>
                  <li>
                  Телефон: +7 (999) 999-99-99 - Офис
                </li>
                <li>
                  Телефон: +7 (999) 999-99-99 - Name
                </li>
                <li>
                  e-mail: index@mail.ru
                    </li>
                    </ul>
                  </div>
                  <div style="float:left; padding-top:70px; ">W-ALCO</div>
                  <div style="float:rigth; padding-top:70px;">Сopyright © W-ALCO</div>
              </div>

   </footer>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>