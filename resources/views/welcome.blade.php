<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link href="https://fonts.googleapis.com/css?family=Asap:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section>
            <div class="section-first-header">
                <img src="img/header-baner.png" alt="header image" class="card-img-header">
            </div>
            <div class="section-second-header">
                <h1 class="header-h1">Luis Oenrique</h1>
                <p class="header-p">User Experience / User Interface Expert</p>
                <span>
                    <button class="header-btn-left btn">KNOW MORE</button>
                    <button class="header-btn-right btn">HIRE ME</button>
                </span>
            </div>
        </section>
    </div>
</header>
<section class="container about">
    <div class="about-img">
        <img src="img/about-banner.png" alt="image man">
    </div>
    <article>
        <div class="about-line"></div>
        <h2 class="about-h2">KNOW MORE ABOUT ME</h2>
        <p class="about-p">Lorem ipsum dolor sit amet,
            consectetur adipisicing elit.
            Aliquam error esse, excepturi exercitationem in
            incidunt pariatur quisquam recusandae reiciendis
            voluptas. Ab delectus distinctio excepturi fugiat
            ipsa neque quaerat totam voluptate.</p>

        <button class="btn btn-dowload">DOWNLOAD MY CV</button>

    </article>
</section>
<section class="container service">
    <div class="service-first-section">
        <div class="service-line"></div>
        <h2 class="service-h2">Service</h2>
    </div>

    <div class="service-second-section">
        <div class="flex-item">
            <img src="img/search.png" alt="">
            <p class="sercice-second-p">User Research</p>
        </div>
        <div class="flex-item">
            <img src="img/all.png" alt="">
            <p class="sercice-second-p">IA And Wireframes</p>
        </div>
        <div class="flex-item">
            <img src="img/user.png" alt="">
            <p class="sercice-second-p">User Testing</p>
        </div>
        <div class="flex-item">
            <img src="img/look.png" alt="">
            <p class="sercice-second-p">Looks and Feel Design (UI)</p>
        </div>
        <div class="flex-item">
            <img src="img/delivery.png" alt="">
            <p class="sercice-second-p">Delivery</p>
        </div>
        <div class="flex-item">
            <img src="img/integ.png" alt="">
            <p class="sercice-second-p">Integration Support</p>
        </div>
    </div>
</section>
<section class="container skills">
    <div class="skills-line"></div>
    <div class="skills-h2">My Skills</div>
    <img src="img/skills.png" alt="" class="skills-img">
</section>
<section class="container portfolio">
    <div class="portfolio-first-section">
        <div class="portfolio-line"></div>
        <h2 class="portfolio-h2">Portfolio</h2>
    </div>

    <div class="portfolio-second-section">
        <div class="flex-item">
            <img src="img/prt-1.png" alt="" class="portfolio-img">
        </div>
        <div class="flex-item">
            <img src="img/prt-2.png" alt="" class="portfolio-img">
        </div>
        <div class="flex-item">
            <img src="img/prt-3.png" alt="" class="portfolio-img">
        </div>
        <div class="flex-item">
            <img src="img/prt-4.png" alt="" class="portfolio-img">
        </div>
        <div class="flex-item">
            <img src="img/prt-5.png" alt="" class="portfolio-img">
        </div>
        <div class="flex-item">
            <img src="img/prt-6.png" alt="" class="portfolio-img">
        </div>
    </div>
</section>
<section class="container testimonials">
    <div class="testimonials-line"></div>
    <div class="testimonials-h2">
        TESTIMONIALS
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="section-carousel">
                    <img src="img/lima.png" alt="...">
                    <span class="carousel-span">
                        <h2>Header text</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                         consequuntur culpa doloremque exercitationem natus nisi, omnis
                         voluptates voluptatibus! Alias atque aut cum esse explicabo in
                         maxime nam pariatur praesentium saepe.
                        </p>
                    </span>
                </div>
            </div>
            <div class="carousel-item">
                <div class="section-carousel">
                    <img src="img/dima.png" alt="...">
                    <span class="carousel-span">
                        <h2>Header text</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                         consequuntur culpa doloremque exercitationem natus nisi, omnis
                         voluptates voluptatibus! Alias atque aut cum esse explicabo in
                         maxime nam pariatur praesentium saepe.
                        </p>
                    </span>
                </div>
            </div>
            <div class="carousel-item">
                <div class="section-carousel">
                    <img src="img/vera.png" class="d-block" alt="...">
                    <span class="carousel-span">
                        <h2>Header text</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                         consequuntur culpa doloremque exercitationem natus nisi, omnis
                         voluptates voluptatibus! Alias atque aut cum esse explicabo in
                         maxime nam pariatur praesentium saepe.
                        </p>
                    </span>
                </div>
            </div>
        </div>
        {{--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
        {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
        {{--<span class="sr-only">Previous</span>--}}
        {{--</a>--}}
        {{--<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
        {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
        {{--<span class="sr-only">Next</span>--}}
        {{--</a>--}}
    </div>
    <div class="testimonials-part-2">
        <div class="flex-item-part-2">
            <img src="img/lamp.png" alt="">
            <h2>120</h2>br/
            <p> Hands to Work</p>
        </div>
        <div class="flex-item-part-2">
            <img src="img/smile.png" alt="">
            <h2>310</h2>br/
            <p> Happy Client</p>
        </div>
        <div class="flex-item-part-2">
            <img src="img/blanc.png" alt="">
            <h2>510</h2>br/
            <p> Finished Project</p>
        </div>
        <div class="flex-item-part-2">
            <img src="img/cofe.png" alt="">
            <h2>720</h2>br/
            <p> Cups of Coffe</p>
        </div>
    </div>
</section>
<footer>
    <div class="container footer-section">
        <div class="footer-first-section">
            <div class="footer-line"></div>
            <h2 class="footer-h2">SAY HELLO</h2>
        </div>
        <div class="footer-second-section">
            <form>
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Name">
                    </div>
                    <div class="col-auto">
                            <input type="text" class="form-control  mb-2" id="inlineFormInputGroup" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Message">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">SEND <img src="img/arrow.png" alt=""></button>
                </div>
            </form>
        </div>
        <div class="footer-third-section">
            <div class="footer-bottom-line"></div>
            <div class="social">
                <ul>
                    <li><a href=""><img src="img/fb.png" alt=""></a></li>
                    <li><a href=""><img src="img/tw.png" alt=""></a></li>
                    <li><a href=""><img src="img/link.png" alt=""></a></li>
                    <li><a href=""><img src="img/google.png" alt=""></a></li>
                    <li><a href=""><img src="img/be.png" alt=""></a></li>
                    <li><a href=""><img src="img/icon.png" alt=""></a></li>
                </ul>
                <p>2017. All Right Reserved</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
