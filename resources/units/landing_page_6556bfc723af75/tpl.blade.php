
<style>
    .banner {
        padding: 100px 0;
        color: #f8f8f8;
        background: url({!! $_this->img('images/banner-bg.jpg') !!}) no-repeat center center;
        background-size: cover;
    }
    .intro-header {
        padding-top: 50px;
        padding-bottom: 50px;
        text-align: center;
        color: #f8f8f8;
        background: url({!! $_this->img('images/intro-bg.jpg') !!}) no-repeat center center;
        background-size: cover;
    }
</style>
<header class="intro-header">
    <div class="container">
        <div class="intro-message">
            <h1>Landing Page</h1>
            <h3>A Template by Start Bootstrap</h3>
            <hr class="intro-divider">
            <ul class="list-inline intro-social-buttons">
                <li class="list-inline-item">
                    <a href="#" class="btn btn-secondary btn-lg">
                        <i class="fa fa-twitter fa-fw"></i>
                        <span class="network-name">Twitter</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-secondary btn-lg">
                        <i class="fa fa-github fa-fw"></i>
                        <span class="network-name">Github</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-secondary btn-lg">
                        <i class="fa fa-linkedin fa-fw"></i>
                        <span class="network-name">Linkedin</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

<!-- Page Content -->
<section class="content-section-a">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 ml-auto">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Death to the Stock Photo:<br>Special Thanks</h2>
                <p class="lead">A special thanks to
                    <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>
                    for providing the photographs that you see in this template. Visit their website to become a member.</p>
            </div>
            <div class="col-lg-5 mr-auto">
                <img class="img-fluid" src="{!! $_this->img('images/ipad.png') !!}" alt="">
            </div>
        </div>

    </div>
    <!-- /.container -->
</section>

<section class="content-section-b">

    <div class="container">

        <div class="row">
            <div class="col-lg-5 mr-auto order-lg-2">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">3D Device Mockups<br>by PSDCovers</h2>
                <p class="lead">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by
                    <a target="_blank" href="http://www.psdcovers.com/">PSDCovers</a>! Visit their website to download some of their awesome, free photoshop actions!</p>
            </div>
            <div class="col-lg-5 ml-auto order-lg-1">
                <img class="img-fluid" src="{!! $_this->img('images/dog.png') !!}" alt="">
            </div>
        </div>

    </div>
    <!-- /.container -->

</section>
<!-- /.content-section-b -->

<section class="content-section-a">

    <div class="container">

        <div class="row">
            <div class="col-lg-5 ml-auto">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Google Web Fonts and<br>Font Awesome Icons</h2>
                <p class="lead">This template features the 'Lato' font, part of the
                    <a target="_blank" href="http://www.google.com/fonts">Google Web Font library</a>, as well as
                    <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.</p>
            </div>
            <div class="col-lg-5 mr-auto ">
                <img class="img-fluid" src="{!! $_this->img('images/phones.png') !!}" alt="">
            </div>
        </div>

    </div>
    <!-- /.container -->

</section>
<!-- /.content-section-a -->

<aside class="banner">

    <div class="container">

        <div class="row">
            <div class="col-lg-6 my-auto">
                <h2>Connect to Start Bootstrap:</h2>
            </div>
            <div class="col-lg-6 my-auto">
                <ul class="list-inline banner-social-buttons">
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-secondary btn-lg">
                            <i class="fa fa-twitter fa-fw"></i>
                            <span class="network-name">Twitter</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-secondary btn-lg">
                            <i class="fa fa-github fa-fw"></i>
                            <span class="network-name">Github</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="btn btn-secondary btn-lg">
                            <i class="fa fa-linkedin fa-fw"></i>
                            <span class="network-name">Linkedin</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- /.container -->

</aside>

{!! $_this->style('css/styles.css') !!}
{!! $_this->script('js/popper/popper.min.js') !!}