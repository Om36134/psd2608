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
        <h2 class="about-h2" >KNOW MORE  ABOUT ME</h2>
        <p class="about-p">Lorem ipsum dolor sit amet,
            consectetur adipisicing elit.
            Aliquam error esse, excepturi exercitationem in
            incidunt pariatur quisquam recusandae reiciendis
            voluptas. Ab delectus distinctio excepturi fugiat
            ipsa neque quaerat totam voluptate.</p>

        <button class="btn btn-dowload">DOWNLOAD MY CV</button>

    </article>
</section>
</body>
</html>
