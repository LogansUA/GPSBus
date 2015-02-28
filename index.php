<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <link rel="icon" href="/web/images/icon.png">

        <!-- Bootstrap theme -->
        <link href="/web/css/bootstrap.css" rel="stylesheet">
        <link href="/web/css/bootstrap.min.css" rel="stylesheet">
        <link href="/web/css/bootstrap-theme.css" rel="stylesheet">

        <!-- Custom theme -->
        <link href="/web/css/jumbotron.css" rel="stylesheet">
        <link href="/web/css/carousel.css" rel="stylesheet">
        <link href="/web/css/style.css" rel="stylesheet">

        <style type="text/css" id="holderjs-style"></style>

        <title>GPSBus</title>
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/index.php">GPS Bus</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/views/index.php">Головна</a></li>
                        <li><a href="#">Про нас</a></li>
                        <li><a href="#">Контакти</a></li>
                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </div>

        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img class="slide" src="web/images/GPSBus_logo.png" alt="slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="white">GPS Bus</h1>
                            <p class="white">
                                GPS Bus - це простий додаток, який дозволяє відслідковувати рух маршрутного таксі, вашого міста.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.carousel -->

        <div class="container marketing">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Що це взагалі таке?</h2>
                    <p class="lead">
                        Траплялися з вами випадки, коли ви запізнювались на роботу, навчання, побачення,
                        чи на будь-яку іншу важливо зустріч?
                    </p>

                    <p class="lead">
                        Напевно так, ну з ким не буває? Ось для того саме, щоб запобігти цьому, створений додаток GPS Bus.
                    </p>

                    <p class="lead">
                        GPS Bus - безкоштовний додаток, який відслідковує дійсні маршрутні таксі та
                        обраховує час прибуття на поточну зупинку.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="web/images/question_mark_logo_01.png" class="featurette-image img-responsive" alt="500x500">
                </div>
            </div>
            <!--
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-5">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjI1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjMxcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NTAweDUwMDwvdGV4dD48L3N2Zz4=" class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500">
                </div>
                <div class="col-md-7">
                    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor
                        fringilla. Vestibulum id ligula porta felis euismod semper. Praesent
                        commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                        tellus ac cursus commodo.</p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor
                        fringilla. Vestibulum id ligula porta felis euismod semper. Praesent
                        commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                        tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjI1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjMxcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NTAweDUwMDwvdGV4dD48L3N2Zz4=" class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500">
                </div>
            </div>
            -->
            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

            <div class="row">
                <div class="col-lg-4">
                    <img src="web/images/github_logo.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h2>GitHub</h2>
                    <p>GPS Bus є повністю відкритим програмним забезпеченням з відкритим сирцевим кодом.</p>
                    <p><a class="btn btn-default" href="https://github.com/LogansUA/GPSBus" role="button">View details »</a></p>
                </div>
                <div class="col-lg-4">
                    <img src="web/images/google_play_logo.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h2>Google Play</h2>
                    <p>Завантажуйте GPS Bus безкоштовно в найбільшому магазині додатків, Google Play.</p>
                    <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
                </div>
                <div class="col-lg-4">
                    <img src="web/images/fb_logo.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h2>Facebook</h2>
                    <p>Переглядайте новини на нашій сторінці в соціальній мережі Facebook.</p>
                    <p><a class="btn btn-default" href="" role="button">View details »</a></p>
                </div>
            </div>


            <hr class="featurette-divider">

            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>© 2014 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
            </footer>

        </div><!-- /.container -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="web/js/jquery.js"></script>
        <script src="web/js/bootstrap.js"></script>
        <script src="web/js/docs.js"></script>

    </body>
</html>
