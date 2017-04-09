<?php

    // Get language by domain
    $domain = str_replace('www.', '', $_SERVER['SERVER_NAME']);
    $language = $domain === 'jurgentreep.nl' ? 'dutch' : 'english';

    // Get language by $_GET
    // $_GET will override domain laguage
    $possible_languages = ['dutch', 'english'];
    
    if(in_array($_GET['lang'], $possible_languages)) {
        $lang = $_GET['lang'];
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if ($language === 'english') { ?>
        <meta name="description" content="Chinese speaking contest">
    <?php } else { ?>
        <meta name="description" content="Chinese spreekwedstrijd">
    <?php } ?>

    <meta name="author" content="Mike Vink">

    <?php if ($language === 'english') { ?>
        <title>Chinese speaking contest</title>
    <?php } else { ?>
        <title>Chinese spreekwedstrijd</title>
    <?php } ?>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <?php echo $language === 'english' ? 'Chinese speaking contest' : 'Chinese spreekwedstrijd'; ?>
                </a>

                <a href="?language=dutch">
                    <img class="flag-dutch" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAAAvCAYAAABe1bwWAAABq0lEQVRoQ+2bz0oCURTGvyMkhdAmoZWr6B18AlOhRaG1STIi3beoVzAXtbZFCLoJKyEo6g18B40WbZKapUkFnnBCkNDizPL23dXAzB34fvM7Z/5wRzA2vGwxKRgUFRoHZBGAjO93cFsB7QqkpQhVFhqVu1FGP/hjPj873wtXAd10MLwhkpy/IbITa5z0fTCvmUJNRLcMZ3D2UFWpRy9Oc+JlCgmI3jubNEgwlRXxsoVLQNeDzHd4TlO87N4LgKjDIQNE0+chGA0w0/UpA4KZcokJhmBs1U9jaAyNsRGgMTZe7DE0xmhMr//BJ98JzIRgJptEMNN6DI2hMabuy1JiKZmEAY2hMTTGRoDG2Hixx9AYGmMjQGNsvCR91OFnh0mfHQhmykskwRCMqcmwx0y7K7GUWEosJRMBlpINF5vvL8ZwDd4POAp4kip1rkSwZhPN7aNV0ZRUuZ0QFa7zHbvWopr0V4anyw81KFeG+2xE6rcHSzkfTPb4aa73+V4FsOF2kfyVThqRmfB2Yz/2/S/BaKRK7VUJyS4UcQDDv0/+w+hC0BLVs5vD5etR4C8GJsaas6p5/AAAAABJRU5ErkJggg==">
                </a>

                <a href="?language=english">
                    <img class="flag-english" src="data:image/png;base64,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">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#aanmelden">
                            <?php echo $language === 'english' ? 'Sign up' : 'Aanmelden'; ?>
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">
                            Websites
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">
                    <?php echo $language === 'english' ? 'Speaking contest' : 'Spreekwedstrijd'; ?>                    
                </div>
                <div class="intro-heading">
                    <?php echo $language === 'english' ? 'Chinese at Zuyd' : 'Chinees op Zuyd'; ?>
                </div>
                <a href="#aanmelden" class="page-scroll btn btn-xl">
                    <?php echo $language === 'english' ? 'Sign up' : 'Aanmelden' ?>
                </a>
            </div>
        </div>
    </header>

    <!-- Sign up Section -->
    <section id="aanmelden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
                        <?php echo $language === 'english' ? 'Sign up' : 'Aanmelden' ?>
                    </h2>
                    <h3 class="section-subheading text-muted">
                        <?php echo $language === 'english' ? 'Speaking contest 2017 Chinese at Zuyd' : 'Spreekwedstrijd  2017 Chinees op Zuyd'; ?>
                    </h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-book fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">
                        <?php echo $language === 'english' ? 'The contest' : 'De wedstrijd'; ?>
                    </h4>
                    <?php if ($language === 'english') { ?>
                        <p class="text-muted text-justify">
                            This year on the 30th of May (4th block of week 4) we are organizing the very first speaking contest for the Chinese students of Zuyd university.
                        </p>
                        <p class="text-muted text-justify">
                            The candidates will be grouped based on their skill level in the Chinese language.
                        </p>
                        <p class="text-muted text-justify">
                            The winners will be awarded a free HSK test and will be granted the opportunity to contribute at the opening of the Confucius institute at Zuyd.
                        </p>
                    <?php } else { ?>
                        <p class="text-muted text-justify">
                            Dit jaar op dinsdag 30 mei ( 4de week van blok 4) organiseren wij de allereerste spreekwedstrijd onder de OTC studenten van de hogeschool Zuyd.
                        </p>
                        <p class="text-muted text-justify">
                            Hierbij worden de kandidaten ingedeeld op niveau.
                        </p>
                        <p class="text-muted text-justify">
                            De winnaars krijgen een gratis HSK toets en mogen iets bijdragen bij de opening van het Confucius instituut op Zuyd.
                        </p>
                    <?php } ?>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-gavel fa-stack-1x fa-inverse"></i>
                    </span>
                    <?php if ($language === 'english') { ?>
                        <h4 class="service-heading">Requirements</h4>
                        <p class="text-muted text-justify">Are you interested and do you meet the following requirements?</p>
                        <ul class="text-muted text-justify">
                            <li>You have not lived  in China for more than 6 months</li>
                            <li>You do not have Chinese parents</li>
                            <li>You are a student from OTC or IB</li>
                        </ul>
                    <?php } else { ?>
                        <h4 class="service-heading">Eisen</h4>
                        <p class="text-muted text-justify">Heb je interesse en voldoe je aan de volgende eisen?</p>
                        <ul class="text-muted text-justify">
                            <li>Je hebt niet langer dan 6 maanden in China gewoond</li>
                            <li>Je hebt geen Chinese ouders</li>
                            <li>Je bent een student van OTC of IB</li>
                        </ul>
                    <?php } ?>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-graduation-cap fa-stack-1x fa-inverse"></i>
                    </span>
                    <?php if ($language === 'english') { ?>
                        <h4 class="service-heading">Contest activities</h4>
                        <p class="text-muted text-justify">The contest is composed of one round where the candidate will perform a speech of 4 to 5 minutes for a jury. You are allowed to choose from the following 2 themes:</p>
                        <ul class="text-muted text-justify">
                            <li>What are your plans for after the study?</li>
                            <li>Why did you choose to study Chinese?</li>
                        </ul>
                    <?php } else { ?>
                        <h4 class="service-heading">Verloop wedstrijd</h4>
                        <p class="text-muted text-justify">De wedstrijd bestaat uit één spreek ronde van 4 tot 5 minuten waarbij de kandidaat een zelf voorbereid stuk voordraagt aan de jury. Er zijn 2 thema's waaruit gekozen kan worden:</p>
                        <ul class="text-muted text-justify">
                            <li>Wat zijn je plannen na de opleiding?</li>
                            <li>Waarom heb je gekozen om Chinees te studeren?</li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-md-offset-2">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                    <?php if ($language === 'english') { ?>
                        <h4 class="service-heading">About us</h4>
                        <p class="text-muted text-justify">We are two students Chinese, Mike Vink (3e jaars) and Cristina Wu (2e jaars), who are organizing this competition. In order to motivate students to use their Chinese more.</p>
                    <?php } else { ?>
                        <h4 class="service-heading">Over ons</h4>
                        <p class="text-muted text-justify">Wij zijn twee studenten Chinees, Mike Vink (3e jaars) en Cristina Wu (2e jaars), die deze wedstrijd organizeren. Dit doen we om studenten te motiveren meer Chinees te laten spreken.</p>
                    <?php } ?>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                    <?php if ($language === 'english') { ?>
                        <h4 class="service-heading">Signing up</h4>
                        <p class="text-muted text-justify">Send an email to <a href="mailto:1528378wu@zuyd.nl" style="color: #337ab7;" target="_blank">1528378wu@zuyd.nl</a> in order to register yourself or to ask questions.</p>
                        <p class="text-muted text-justify">Be aware! Signing up is only possible till the 19th of May.</p>
                    <?php } else { ?>
                        <h4 class="service-heading">Inschrijven</h4>
                        <p class="text-muted text-justify">Stuur een e-mail naar <a href="mailto:1528378wu@zuyd.nl" style="color: #337ab7;" target="_blank">1528378wu@zuyd.nl</a> om je in te schrijven of voor vragen.</p>
                        <p class="text-muted text-justify">Let op! Uiterlijke inschrijfdatum is vrijdag 19 mei.</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Websites</h2>
                    <?php if ($language === 'english') { ?>
                        <h3 class="section-subheading text-muted">Here's a couple of interesting websites to take a look at</h3>
                    <?php } else { ?>
                        <h3 class="section-subheading text-muted">Hier zijn een aantal interresante websites om te bekijken</h3>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://confuciusinstituut.nl/dutch/" class="portfolio-link" target="_blank">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-link fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/confucius.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <?php if ($language === 'english') { ?>
                            <h4>Confucius Instituut</h4>
                            <p class="text-muted">University Leiden</p>
                        <?php } else { ?>
                            <h4>Confucius Instituut</h4>
                            <p class="text-muted">Universiteit Leiden</p>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="https://www.zuyd.nl/" class="portfolio-link" target="_blank">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-link fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/zuyd.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <?php if ($language === 'english') { ?>
                            <h4>Zuyd</h4>
                            <p class="text-muted">Studies</p>
                        <?php } else { ?>
                            <h4>Zuyd</h4>
                            <p class="text-muted">Opleidingen</p>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.volkskrant.nl/opinie/hoe-word-je-een-goede-spreker-8-tips-voor-een-goede-speech~a3355769/" class="portfolio-link" target="_blank">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-link fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/goed_spreken.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <?php if ($language === 'english') { ?>
                            <h4>Speaking well</h4>
                            <p class="text-muted">8 Useful tips</p>
                        <?php } else { ?>
                            <h4>Goed spreken</h4>
                            <p class="text-muted">8 Handige tips</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Chinees OTC</span>
                </div>
                <?php if ($language === 'english') { ?>
                    <div class="col-md-4">
                        <span class="copyright">Initiative Mike Vink</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li>Created by <a href="https://jurgentreep.nl" style="color: #337ab7;">Jurgen Treep</a>
                            </li>
                        </ul>
                    </div>
                <?php } else { ?>
                    <div class="col-md-4">
                        <span class="copyright">Op initiatief van Mike Vink</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li>Gemaakt door <a href="https://jurgentreep.nl" style="color: #337ab7;">Jurgen Treep</a>
                            </li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
