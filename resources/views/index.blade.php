<!DOCTYPE html>
<html lang="en">

<head>
    <!--Isinya CV atau Resume-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Home</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Viki Fernando</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>

    <main>
        <div>
            <img src="/images/brandimage.png" width="100%" height="500px">
        </div>

        <div class="container md-3">
            <br>
            <h1>About Me</h1>
            <hr />
            <p class="intro">
                Halo... perkenalkan, nama saya Viki Fernando. Saat ini saya masih kuliah di STMIK LIKMI, jurusan
                Teknologi Informatika. Saya tertarik untuk belajar banyak hal terutama yang berkaitan dengan perancangan
                sebuah web dan juga pembuatan game. Saat ini saya masih belajar dan masih perlu belajar banyak hal...
            </p>
        </div>
        <br />
        <br>

        <!--Education-->
        <div class="container">
            <h1>Education</h1>
            <hr>
            <h2>STMIK LIKMI</h2>
            <p class="text-style">IPK : 3,58</p>

            <h2>SMAK GAMALIEL (2016 - 2019)</h2>
            <p class="text-style">Jurusan Ips</p>
            <br>
        </div>

        <!--Languanges-->
        <div class="container">
            <h1>Languages</h1>
            <hr>

            <p class="text-style">English</p>
            <div class="center">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>

            <p class="text-style">Indonesia</p>
            <div class="center">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            <br>

            <!--Skill-->
            <div class="container mb-5">
                <h1>Skills</h1>
                <hr />

                <div class="row">

                    <div class="col-md-4 my-2">
                        <img src="images/php logo.png" class="skillslogo">
                        <div class="progress">
                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                                role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"
                                style="width: 30%">30%</div>
                        </div>
                        <h3 class="programtext">PHP</h3>
                    </div>

                    <div class="col-md-4 my-2">
                        <img src="images/javascript Logo.png" class="skillslogo">
                        <div class="progress">
                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                                role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="80"
                                style="width: 30%">30%</div>
                        </div>
                        <h3 class="programtext">Javascript</h3>
                    </div>

                    <div class="col-md-4 my-2">
                        <img src="images/blender logo.png" class="skillslogo">
                        <div class="progress">
                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                                role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"
                                style="width: 35%">35%</div>
                        </div>
                        <h3 class="programtext">Blender</h3>
                    </div>

                    <div class="col-md-4 my-2">
                        <img src="images/HTML 5 Logo.png" class="skillslogo">
                        <div class="progress">
                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                                role="progressbar" aria-valuenow="51" aria-valuemin="0" aria-valuemax="100"
                                style="width: 51%">51%</div>
                        </div>
                        <h3 class="programtext">HTML</h3>
                    </div>

                    <div class="col-md-4 my-2">
                        <img src="images/CSS Logo.png" class="skillslogo">
                        <div class="progress">
                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                                role="progressbar" aria-valuenow="51" aria-valuemin="0" aria-valuemax="100"
                                style="width: 51%">51%</div>
                        </div>
                        <h3 class="programtext">CSS</h3>
                    </div>

                    <div class="col-md-4 my-2">
                        <img src="images/Ps logo.png" class="skillslogo">
                        <div class="progress">
                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                                role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                style="width: 60%">60%</div>
                        </div>
                        <h3 class="programtext">Adobe Photoshop</h3>
                    </div>

                    <div class="col-md-4 my-2">
                        <img src="images/Java Logo.png" class="skillslogo">
                        <div class="progress">
                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                                role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                style="width: 60%">60%</div>
                        </div>
                        <h3 class="programtext">Java</h3>
                    </div>

                    <div class="col-md-4 my-2">
                        <img src="images/C sharp Logo.png" class="skillslogo">
                        <div>
                            <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                                    role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 67%">67%</div>
                            </div>
                            <h3 class="programtext">C#</h3>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <img src="images/Microsoft office Logo.png" class="skillslogo">
                        <div class="progress">
                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                                role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80"
                                style="width: 80%">80%</div>
                        </div>
                        <h3 class="programtext">Microsoft office</h3>
                    </div>
                </div>
            </div>
            <br />
    </main>

    <footer>
        <blockquote class="blockquote text-center">
            <p class="mb-0">Learning is the only thing the mind never exhausts,
                never fears, and never regrets.</p>
            <footer class="blockquote-footer"><cite title="Source Title"> Leonardo da
                    Vinci</cite></footer>
        </blockquote>
        <div>
            <center>
                <a href="https://www.google.com/intl/id/gmail/about/" target="_blank"><img
                        src="images/Email logo.png" class="socialmedialogo"></a>
                <a href="https://id-id.facebook.com/" target="_blank"><img src="images/Facebook logo.png"
                        class="socialmedialogo"></a>
                <a href="https://www.youtube.com/" target="_blank"><img src="images/Youtube logo.png"
                        class="socialmedialogo"></a>
            </center>
        </div>
    </footer>

    <div class="container-fluid py-4 bg-dark text-white text-center">
        <h6>Copyright © 2022 Viki Fernando</h6>
    </div>

    <script src="/js/app.js"></script>
</body>

</html>
