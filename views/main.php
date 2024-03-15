<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Главная страница</title>
    
    <div>    
        <?php include("views/style.html") ?>
    </div>

</head>

<body>

    <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title mb-25">Выбирите раздел</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start blog section -->
        <section class="blog__section section--padding">
            <div class="container">
                <div class="blog__section--inner">
                    <div class="row mb--n30">
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                            <div class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href="blog-details.html"><img class="blog__card--thumbnail__img" src="assets/img/blog/blog1.webp" alt="blog-img"></a>
                                    <span class="blog__card--meta__date">15 <br> Марта</span>  
                                </div>
                                <div class="blog__card--content">
                                    <span class="blog__card--meta">Содержание</span>
                                    <h3 class="blog__card--title"><a href="blog-details.html">Автопарковки</a></h3>
                                    <p class="blog__card--desc">Количество автопарков</p>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                            <div class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href="blog-details.html"><img class="blog__card--thumbnail__img" src="assets/img/blog/blog1.webp" alt="blog-img"></a>
                                    <span class="blog__card--meta__date">15 <br> Марта</span>  
                                </div>
                                <div class="blog__card--content">
                                    <span class="blog__card--meta">Содержание</span>
                                    <h3 class="blog__card--title"><a href="blog-details.html">Автомобили</a></h3>
                                    <p class="blog__card--desc">Количество автомобилей</p>                                    
                                </div>
                            </div>
                        </div>                                                                      
                    </div>
                </div>
            </div>
        </section>
        <!-- End blog section -->
    </main>

    <div>    
        <?php include("views/scripts.html") ?>
    </div>
  
</body>
</html>
