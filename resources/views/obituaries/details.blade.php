<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Obituaries - {{$ob->name}}</title>

<!-- Bootstrap -->
<link href="../../css/bootstrap.min.css" rel="stylesheet">
<link href="../../css/index.css" rel="stylesheet">
<link href="../../css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
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


  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="welcome-msg">Welcome to Williams Funeral Home</p>
        </div>
        <div class="col-md-6">
          <p class="navbar-text navbar-right"> <a href="location.html" class="location-link"><i class="fa fa-map-marker"></i>View Location</a> <span class="call-number"><i class="fa fa-phone"></i>803-773-6422 </span></p>
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
            <a class="navbar-brand" href="index.html"><h2>Established 1945</h2></a> </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="nav navbar-nav navbar-right">
              <li> <a href="index.html" title="Homepage">Home</a></li>

              <li> <a href="about.html">About us <span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="about.html" title="About us">About Funeral</a></li>
                  <li><a href="staffhistory.html" title="Staff history">Staff History</a></li>
                  <li><a href="history.html" title="Family history">Family History</a></li>
                </ul>
              </li>

              <li> <a href="service.html">Services <span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="traditionalfuneral.html" title="Traditional Funeral">Traditional Funeral</a></li>
                  <li><a href="directBurials.html" title="Direct Burials">Direct Burials</a></li>
                  <li><a href="directCremation.html" title="Direct Cremation">Direct Cremation</a></li>
                </ul>
              </li>

              <li> <a href="faqs.html" title="Frequently Asked Questions">FAQS</a></li>

              <li> <a href="links.html">Links <span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="prePlanning.html" title="About Pre Planning">About Pre Planning</a></li>
                  <li><a href="griefResources.html" title="Grief Resources">Grief Resources</a></li>
                  <li><a href="error.html" title="Local Information">Local Information</a></li>
                  <li><a href="socialSecurity.html" title="Social Security Benefits">Social Security Benefits</a></li>
                  <li><a href="veterans.html" title="Veterans Benefits">Veterans Benefits</a></li>
                </ul>
              </li>

              <li> <a href="#">Online <span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="createAlbum.html" title="Online Albums">Online Albums</a></li>
                  <li><a href="merch.html" title="Merchandise">Merchandise</a></li>
                  <li><a href="preForm.html" title="Pre Planning Form">Pre Planning Form</a></li>
                </ul>
              </li>

              <li> <a href="obituaries-listing.html" title="Obituaries">Obituaries </a></li>

              <li> <a href="sendFlowers.html" title="Send Flowers">Send Flowers </a></li>

              <!-- <li> <a href="location.html" title="Directions">Directions</a></li> -->

              <li><a href="#" title="Contact">Contact <span class="fa fa-angle-down"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="contact-us.html" title="Contact Us">Contact Us</a></li>
                  <li><a href="location.html" title="Directions">Directions</a></li>
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



<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-title">Elishabeth Rowe</h1>
      </div>
    </div>
  </div>
</div>



<div class="page-breadcrumb" style="background-color:white;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="{{route('home')}}" title="Home">Home</a></li>
          <li><a href="{{route('obituaries-list')}}" title="Obituaries">Obituaries</a></li>
          <li class="active">{{$ob->name}}</li>
        </ol>
      </div>
    </div>
  </div>
</div>



<!-- main container -->

<div class="main-container" style="background-color:white;">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="obituaries-img"><img src="../images/icon.jpg" style="border:1px solid #1a4b5d;" class="img-responsive img-rounded" alt=""></div>
        <div class="row">
          <div class="col-md-12"> <a href="sendFlowers.html" class="btn btn-block btn-send"><img src="../images/flower-icon-white.png" alt=""> Send flowers</a> </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="obituaries-block">
          <div class="row">
            <div class="col-md-12">
              <p>{{$ob->description}}</p>
            </div>
            <div class="col-md-12">
              <h2 style="color:#1a4b5d;">Condolence Messages</h2>
              @foreach ($ob->Condolences as $c)
                <div class="well-default">
                  <h3>{{$c->name}}</h3>
                  <span class="comment-date">{{$c->created_at->toDayDateTimeString()}}</span>
                  <p>Cras hendrerit, eros id iaculis aliquam, erat nulla convallis justo, ut lobortis orci urna ac diam. Aenean felis leo, feugiat ac eff lalum vitae diam in ualeimentum ut vitaeuam rutrum non nunc non consequat. </p>
                </div>
              @endforeach
              <h2 style="color:#1a4b5d;">Leave Your Condolence</h2>
              <p>Please share your message of condolence with the family, It will be visible to the public but your email address will not be published.</p>
              <div class="row">
                <form class="form" method="post" action="{{route('createCondolence')}}">
                  @csrf
                  <!-- Textarea -->
                  <input type="hidden" name="id" value="{{$ob->id}}">
                  <div class="form-group col-md-12">
                    <label class="control-label" for="textarea">Condolence</label>
                    <textarea class="form-control" id="textarea" name="textarea"></textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="control-label" for="name">Name</label>
                    <span class="required">*</span>
                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required>
                  </div>
                  <!-- Text input-->
                  <div class="form-group col-md-6"><span class="required pull-right">*Required Field</span>
                    <label class="control-label" for="e-mail">E-mail</label>
                    <span class="required">*</span>
                    <input id="e-mail" name="email" type="text" placeholder="" class="form-control input-md" required>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-default">submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.obituaries block -->
      </div>
    </div>
  </div>
</div>


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
          <li><a href="obituaries-listing.html">Obituaries </a></li>
          <li><a href="history.html">Family History </a></li>
          <li><a href="staffhistory.html">Staff History </a></li>
          <li><a href="about.html">About Us</a></li>
        </ul>
      </div>
      <div class="col-md-2 footer-block">
        <h3>Services</h3>
        <ul class="listnone">
          <li><a href="traditionalfuneral.html">Full Length Funeral </a></li>
          <li><a href="directBurials.html">Direct Burials </a></li>
          <li><a href="directCremation.html">Direct Cremation </a></li>
        </ul>
      </div>
      <div class="col-md-2 footer-block">
        <h3>Links</h3>
        <ul class="listnone">
          <li><a href="prePlanning.html">Pre Planning </a></li>
          <li><a href="griefResources.html">Grief Resources </a></li>
          <li><a href="error.html">Local Security </a></li>
          <li><a href="socialSecurity.html">Social Security </a></li>
          <li><a href="veterans.html"> Veterans </a></li>
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
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.sticky.js"></script>
<script src="../js/search.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/sticky-header.js"></script>
<!-- jQuery -->
<script type="text/javascript" src="../js/jquery.smartmenus.min.js"></script>

<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="../js/jquery.smartmenus.bootstrap.min.js"></script>
</body>
</html>
