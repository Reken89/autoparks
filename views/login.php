<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Авторизация</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
  <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">

  <!-- Plugin css -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
        <!-- Start login section  -->
        <div class="login__section section--padding">
            <div class="container">
                <form action="/autoparks/authentication" method="POST">
                    <div class="login__section--inner">
                        <div class="row row-cols-md-2 row-cols-1">
                            <div class="col">
                                <div class="account__login">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title mb-10">Авторизация</h2>
                                        <p class="account__login--header__desc">Введите логин и пароль</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <label>
                                            <input class="account__login--input" name="login" placeholder="Логин" type="text">
                                        </label>
                                        <label>
                                            <input class="account__login--input" name="password" placeholder="Пароль" type="password">
                                        </label>
                                        <button class="account__login--btn primary__btn" type="submit">Войти</button>
                                    </div>
                                </div>
                            </div>                          
                        </div>
                    </div>
                </form>
            </div>     
        </div>   
        <!-- End login section  -->

   <!-- All Script JS Plugins here  -->
   <script src="assets/js/vendor/popper.js" defer="defer"></script>
   <script src="assets/js/vendor/bootstrap.min.js" defer="defer"></script>
   <script src="assets/js/plugins/swiper-bundle.min.js"></script>
   <script src="assets/js/plugins/glightbox.min.js"></script>
 
  <!-- Customscript js -->
  <script src="assets/js/script.js"></script>
  
</body>
</html>
