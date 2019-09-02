<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Williams Funeral Home, Inc. | Welcome</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
<link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
<!-- slider css-->
<link href="css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<!-- Font CSS -->
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- Font awesome icon -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>
<body>

  <!-- search open -->


<!-- <div class="search-open">
  <div class="container">
    <div class="col-md-offset-2 col-md-8">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Here">
        <span class="input-group-btn">
        <button class="btn btn-default" type="button">Search</button>
        </span> </div>

    </div>
  </div>
</div> -->


<div class="header-top">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p class="welcome-msg">Welcome to Williams Funeral Home</p>
      </div>
      <div class="col-md-6">
        <p class="navbar-text navbar-right"> <a href="{{route('location')}}" class="location-link"><i class="fa fa-map-marker"></i>View Location</a> <span class="call-number"><i class="fa fa-phone"></i>803-773-6422 </span></p>
      </div>
    </div>
  </div>
</div>

<div class="navigation">
  <div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="{{route('home')}}"><h2>Established 1945</h2></a> </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-navigation">
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="{{route('home')}}" title="Homepage">Home</a></li>

            <li> <a href="#">About us <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{route('about')}}" title="About us">About Funeral</a></li>
                <li><a href="{{route('staffHistory')}}" title="Staff history">Staff History</a></li>
                <li><a href="{{route('history')}}" title="Family history">Family History</a></li>
              </ul>
            </li>

            <li> <a href="{{route('services')}}">Services <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{route('traditionalFuneral')}}" title="Traditional Funeral">Traditional Funeral</a></li>
                <li><a href="{{route('directBurial')}}" title="Direct Burials">Direct Burials</a></li>
                <li><a href="{{route('directCermation')}}" title="Direct Cremation">Direct Cremation</a></li>
              </ul>
            </li>

            <li> <a href="{{route('faqs')}}" title="Frequently Asked Questions">FAQS</a></li>

            <li> <a href="{{route('links')}}">Links <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{route('prePlan')}}l" title="About Pre Planning">About Pre Planning</a></li>
                <li><a href="{{route('griefResources')}}" title="Grief Resources">Grief Resources</a></li>
                <li><a href="{{route('error')}}" title="Local Information">Local Information</a></li>
                <li><a href="{{route('socialSecurity')}}" title="Social Security Benefits">Social Security Benefits</a></li>
                <li><a href="{{route('veterans')}}" title="Veterans Benefits">Veterans Benefits</a></li>
              </ul>
            </li>

            <li> <a href="#">Online <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{route('albums')}}" title="Online Albums">Online Albums</a></li>
                <li><a href="{{route('merch')}}" title="Merchandise">Merchandise</a></li>
                <li><a href="{{route('prePlaning')}}" title="Pre Planning Form">Pre Planning Form</a></li>
              </ul>
            </li>

            <li> <a href="{{route('obituaries-list')}}" title="Obituaries">Obituaries </a></li>

            <li> <a href="{{route('florist-list')}}" title="Send Flowers">Send Flowers </a></li>

            <!-- <li> <a href="location.html" title="Directions">Directions</a></li> -->

            <li><a href="#" title="Contact">Contact <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{route('contact')}}" title="Contact Us">Contact Us</a></li>
                <li><a href="{{route('location')}}" title="Directions">Directions</a></li>
              </ul>
            </li>


          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </div>
</div>

<div style="margin-bottom:50px;"></div>
<div class="col-12">
  <div class="container">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <div class="slider" id="slider">
          <div class="item"><img src="images/header.jpg" alt>
            <div class="slider-caption">
              <h1 class="slider-title">Williams Funeral Home, Inc.</h1>
              <p class="slider-text"> We explain some of the feelings you may have and suggest ways of dealing with them.</p>
              <!-- <a href="service-list-image.html" class="btn btn-default">Get Advice</a> -->
            </div>
          </div>
          <div class="item"><img src="images/sampleimages2.jpg" alt>
            <div class="slider-caption">
              <h1 class="slider-title">Williams Funeral Home, Inc.</h1>
              <p class="slider-text">We are here to help you arrange the funeral you want for your loved one – every step of the way.</p>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-1"></div>
    </div>
  </div>
</div>


<div class="section-space">
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title">
        <h1>Williams Funeral Home, Inc</h1>
        <p>We want you to feel comfortable and at home. Our goal is to make our guests, and your guests, feel at home, or at ease. We understand the importance of our role in the celebration of the life of your beloved family member. We continue to pledge our service and support to the community of Sumter and the surrounding areas. We owe these communities a debt of gratitude for their years of trust and support.</p>
        <p>We provide this website to you as a way to answer some of your questions about Williams Funeral Home, Inc. and its services. While we view our website as a service to you, we do not consider it a substitute for personal contact and service. So if you have questions you would like to discuss, or there is a way we may assist you, please do not hesitate to contact us.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="section-space2 section-color">
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title">
        <h1>Merchandise Section</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 feature-block">
        <div class="feature-img zoom-pic"><img src="images/casket1.jpg" alt="" class="img-responsive"></div>
        <div class="feature-caption">
          <h2>Heading</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
      </div>
      <div class="col-md-4 feature-block">
        <div class="feature-img zoom-pic"><img src="images/casket2.jpg" alt="" class="img-responsive"></div>
        <div class="feature-caption">
          <h2>Heading</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
      </div>
      <div class="col-md-4 feature-block">
        <div class="feature-img zoom-pic"><img src="images/casket3.jpg" alt="" class="img-responsive"></div>
        <div class="feature-caption">
          <h2>Heading</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <a class="btn btn-grey" href="{{route('merch')}}">View More</a>
    </div>
    <div class="col-md-4">
    </div>
  </div>
</div>

<div class="parallax-cta parallax parallax-2"><!-- parallax cta -->
  <div class="container">
    <div class="col-md-offset-2 col-md-8">
      <h1>What's A Funeral Plan?</h1>
      <p>Donec cursus orcivitae felis venenatis sitamet efficitur tellus ultrices aquismetus consequat accumsan egestas viverra.</p>
      <a href="{{route('services')}}" class="btn btn-secondary">view funeral plan</a> </div>
  </div>
</div>
<div class="section-space section-color">
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title">
        <h1>Recent Funeral Obituaries</h1>
        <p>Etiam varius elementum condimentum usce dictum quam duinec pharetra orci venenatis sit amet. </p>
      </div>
    </div>
    <div class="row">
      @foreach ($obis as $o)
        <div class="col-md-6 obituaries-block">
          <div class="row">
            <div class="col-md-4">
              <div class="obituaries-block-img zoom-pic"> <a href="{{route('obituaries-details',['id'=>$o->id])}}"><img src="images/icon.jpg" alt="" class="img-responsive"></a> </div>
            </div>
            <div class="col-md-8 obituaries-block-text">
              @php
                $dod = Carbon\Carbon::parse($o->dod);
                $dob = Carbon\Carbon::parse($o->dob);
                $diff = $dod->diffInYears($dob);
              @endphp
              <h3 class=" obituaries-title"><a href="{{route('obituaries-details',['id'=>$o->id])}}">{{$o->name}}</a><small>(Age {{$diff}})</small></h3>
              <p class="obituaries-meta">{{$dob->toFormattedDateString()}} - {{$dod->toFormattedDateString()}}</p>
              <p>{{$o->description}}</p>
              <div class="just-border"></div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
<!-- <div class="section-space">
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title">
        <h1>Funeral Latest News</h1>
        <p>Etiam varius elementum condimentum usce dictum quam duinec pharetra orci venenatis sit amet. </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 post-block">
        <div class="post-block-img zoom-pic"><a href="blog-detail.html"><img src="images/service-3.jpg" alt="" class="img-responsive"></a>
          <div class="meta"><span class="meta-date"><i class="fa fa-calendar"></i>January 12,2016</span> <span class="meta-comments"> <i class="fa fa-commenting-o"></i>(22) <a href="#">Comments</a></span> </div>
        </div>
        <h2><a href="blog-detail.html">Heading Title of News </a></h2>
        <p>Phasellus faucibus utpurus a condimentum. Sed id risus egetsem molestie sodalesm quis diam eleifen purus utlore tincid.</p>
        <a href="blog-detail.html" class="btn btn-default">Read More</a> </div>
      <div class="col-md-4 post-block">
        <div class="post-block-img zoom-pic"><a href="blog-detail.html"><img src="images/service-5.jpg" alt="" class="img-responsive"></a>
          <div class="meta"><span class="meta-date"><i class="fa fa-calendar"></i>January 12,2016</span> <span class="meta-comments"> <i class="fa fa-commenting-o"></i>(22) <a href="#">Comments</a></span> </div>
        </div>
        <h2><a href="blog-detail.html">Heading Title of News </a></h2>
        <p>Phasellus faucibus utpurus a condimentum. Sed id risus egetsem molestie sodalesm quis diam eleifen purus utlore tincid.</p>
        <a href="blog-detail.html" class="btn btn-default">Read More</a> </div>
      <div class="col-md-4 post-block">
        <div class="post-block-img zoom-pic"><a href="blog-detail.html"><img src="images/service-6.jpg" alt="" class="img-responsive"></a>
          <div class="meta"><span class="meta-date"><i class="fa fa-calendar"></i>January 12,2016</span> <span class="meta-comments"> <i class="fa fa-commenting-o"></i>(22) <a href="#">Comments</a></span> </div>
        </div>
        <h2><a href="blog-detail.html">Heading Title of News </a></h2>
        <p>Phasellus faucibus utpurus a condimentum. Sed id risus egetsem molestie sodalesm quis diam eleifen purus utlore tincid.</p>
        <a href="blog-detail.html" class="btn btn-default">Read More</a> </div>
    </div>
  </div>
</div> -->



<div class="section-space footer"><!-- footer -->
  <div class="container">
    <div class="row">
      <div class="col-md-3 footer-block">
        <div class="ft-logo"><h2>Established 1945</h2></div>
        <!-- <p>Phasellus faucibus ut purus a condimentued id risus eget sem  quis lorem lorem ipsum doloe ipsum condimentued id risus dolor sit diam eleioeincid.</p> -->
      </div>
      <div class="col-md-2 footer-block">
        <h3>Useful links</h3>
        <ul class="listnone">
          <li><a href="{{route('obituaries-list')}}">Obituaries </a></li>
          <li><a href="{{route('history')}}">Family History </a></li>
          <li><a href="{{route('staffHistory')}}">Staff History </a></li>
          <li><a href="{{route('about')}}">About Us</a></li>
        </ul>
      </div>
      <div class="col-md-2 footer-block">
        <h3>Services</h3>
        <ul class="listnone">
          <li><a href="{{route('traditionalFuneral')}}">Full Length Funeral </a></li>
          <li><a href="{{route('directBurial')}}">Direct Burials </a></li>
          <li><a href="{{route('directCermation')}}">Direct Cremation </a></li>
        </ul>
      </div>
      <div class="col-md-2 footer-block">
        <h3>Links</h3>
        <ul class="listnone">
          <li><a href="{{route('prePlan')}}">Pre Planning </a></li>
          <li><a href="{{route('griefResources')}}">Grief Resources </a></li>
          <li><a href="{{route('socialSecurity')}}">Social Security </a></li>
          <li><a href="{{route('veterans')}}"> Veterans </a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-block footer-contact">
        <h3>Contact info</h3>
        <ul class="listnone">
          <li><i class="fa fa-map-marker"></i>Williams Funeral Home, Inc.
            821 N Main St
            Sumter, SC 29150</li>
          <li><i class="fa fa-phone"></i>803-773-6422</li>
          <li><i class="fa fa-envelope"></i>williamsfuneralhome@sc.rr.com</li>
        </ul>
      </div>
    </div>

  </div>
</div>
<!-- /.footer -->
<div class="tiny-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p class="copy-text">2019 Williams Funeral Home, Inc. All Rights Reserved</p>
      </div>
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/search.js" type="text/javascript"></script>
<script type="text/javascript" src="js/sticky-header.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>

<!-- jQuery -->
<script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>

<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
</body>
</html>
