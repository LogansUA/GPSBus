<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="icon" href="images/icon.png">

    <!-- Bootstrap theme -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">

    <!-- Custom theme -->
    <link href="css/jumbotron.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <title>GPSBus</title>

    <style type="text/css" id="holderjs-style"></style>
</head>
<body>

    <?php
        if ($_POST['signup']) {
            header("Location: assets/Signin/index.php");
        }
    ?>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">GPS Bus</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="navbar-form navbar-right" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <button type="submit" class="btn btn-success" name="signin">Sign in</button>
                    <button type="submit" class="btn btn-success" name="signup">Sign up</button>
                </form>
            </div><!--/.navbar-collapse -->
        </div>
    </div>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <!--<li class="" data-target="#myCarousel" data-slide-to="1"></li>-->
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/github_main_logo.png" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Example headline.</h1>
                        <p>Note: If you're viewing this page via a <code>file://</code>
                            URL, the "next" and "previous" Glyphicon buttons on the left and right
                            might not load/display properly due to web browser security rules.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img src="images/github_logo.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2>GitHub</h2>
                <p>GPS Bus є повністю відкритим програмним забезпеченням з відкритим сирцевим кодом.</p>
                <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="images/google_play_logo.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2>Google Play</h2>
                <p>Завантажуйте GPS Bus безкоштовно в найбільшому магазині додатків, Google Play.</p>
                <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="images/fb_logo.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                <h2>Facebook</h2>
                <p>Переглядайте новини на нашій сторінці в соціальній мережі Facebook.</p>
                <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor
                    fringilla. Vestibulum id ligula porta felis euismod semper. Praesent
                    commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjI1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjMxcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NTAweDUwMDwvdGV4dD48L3N2Zz4=" class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500">
            </div>
        </div>

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

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->


        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>© 2014 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>

</body>
</html>