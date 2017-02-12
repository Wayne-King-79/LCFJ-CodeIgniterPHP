<!DOCTYPE html>

<html lang="en-US">

<head>
    <title>
        <? echo $title ?>
    </title>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!--[if lt IE 10]>
    <meta http-equiv="refresh" content="0;URL=<?php echo base_url() ?>index.php/pages/view/unsupported">
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="/assets/css/main-styles.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,200,400,300,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon">

</head>

<body>
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#jobs">Jobs</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="https://www.facebook.com/groups/676874252353916/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/lcfjobs" class="tweeter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid home" id="home">
        <div class="row content">
            <div class="col-xs-1 col-sm-2">
            </div>
            <div class="col-xs-10 col-sm-8">
                <div class="main-content">
                    <noscript>
                        <p>You must enable JavaScript in order to view this site. Please go to your browser settings and enabled Javascript to continue.</p>
                    </noscript>
                    <h1>Looking for a job?&nbsp;&nbsp;We've got you covered!</h1>
                    <p>Want to be notified of new job posts?
                        <a href="https://twitter.com/lcfjobs" class="twitter-follow-button" data-show-count="false" target="_blank">&nbsp;&nbsp;Follow Us on Twitter!</a>
                    </p>
                </div>
            </div>
            <div class="col-xs-1 col-sm-2">
            </div>
        </div>
    </div>

    <div class="container-fluid data-section">
        <div class="row" id="jobs">
            <div class="col-xs-1">
            </div>
            <div class="col-xs-10 job-section">
                <div class="jobs-headings text-center">
                    <h2>New jobs are added weekly!</h2>
                    <h2>All jobs are in the vicinity of Lake County.</h2>
                </div>
                <?php echo $map[ 'js']; ?>
                <?php echo $map[ 'html']; ?>
            </div>
            <div class="col-xs-1">
            </div>
        </div>
    </div>
    <div class="container-fluid text-center about-section">
        <div class="row" id="about">
            <h2>Who We Are</h2>
            <div class="col-xs-1 col-lg-3">
            </div>
            <div class="col-xs-10 col-lg-6 bio">
                <div class="row">
                    <div class="col-xs-12 bio-image">
                        <img src="/assets/img/wayne.jpg" class="img-responsive img-circle" alt="Wayne">
                    </div>
                    <div class="col-xs-12 bio-text">
                        <h3>Wayne</h3>
                        <p>LCFJobs website creator, resident of Lake County for 8 years. I test software for a living and develop software in my spare time. When I'm not working I enjoy spending as much time as I can with my little family and volunteering to help others in any way I can.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-1 col-lg-3">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-1 col-lg-3">
            </div>
            <div class="col-xs-10 col-lg-6 bio">
                <div class="row">
                    <div class="col-xs-12 bio-image">
                        <img src="/assets/img/Duane.jpg" class="img-responsive img-circle" alt="Duane">
                    </div>
                    <div class="col-xs-12 bio-text">
                        <h3>Duane</h3>
                        <p>Creator of the <a href="https://www.facebook.com/groups/676874252353916/" target="_blank">Lake County Fl. Jobs</a> group on Facebook, I have been a resident of Lake County for 13 years. My grandmother ran the Leesburg food bank for a much longer time, which is where my love for volunteering and helping others originated from.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-1 col-lg-3">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-1 col-lg-3">
            </div>
            <div class="col-xs-10 col-lg-6 bio">
                <div class="row">
                    <div class="col-xs-12 bio-image">
                        <img src="/assets/img/Sarah.jpg" class="img-responsive img-circle" alt="Sarah">
                    </div>
                    <div class="col-xs-12 bio-text">
                        <h3>Sarah</h3>
                        <p>I have lived in Lake County for 6 years and am currently an online student at SNHU. I am married and enjoy spending time with my family and helping my community through volunteering.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-1 col-lg-3">
            </div>
        </div>
    </div>
    <div class="container-fluid contact-section">
        <div class="row" id="contact">
            <div class="col-xs-0 contact-sub-section">
            </div>
            <div class="col-xs-12 contact-sub-section">
                <div class="contact-icon text-center">
                    <i class="fa fa-envelope fa-4x" aria-hidden="true"></i>
                    <h3>Have a suggestion?&nbsp;&nbsp;Contact us!</h3>
                </div>
                <form class="form-horizontal" role="form" method="post" action="MAILTO:info@lcfjobs.com" enctype="text/plain">
                    <div class="form-group">
                        <label for="firstName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@gmail.com" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="4" name="message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xs-0 contact-sub-section">
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid footer-section">
            <div class="row footer-copyright">
                <div class="row">
                    <div class="col-xs-0">
                    </div>
                    <div class="col-xs-12 text-center">
                        <p>
                            &copy;
                            <?php echo date( "Y"); ?> LCFJobs All rights reserved.
                        </p>
                    </div>
                    <div class="col-xs-0">
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>