<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Williams Funeral Home, Inc. | Obituaries</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
<link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
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


<div class="page-header2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-title">Williams Funeral Home, Inc.</h1>
        <h6 style="font-size:28px;margin-top:10px;color:#1a4b5d;">Obituaries</h6>
      </div>
    </div>
  </div>
</div>


<div class="page-breadcrumb" style="background-color:#fff;"><!-- page breadcrumb -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="index.html" title="Home">Home</a></li>
          <li class="active">Obituaries</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- /.page breadcrumb -->
<div class="main-container" style="background-color:#fff;"><!-- main container -->
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="well-default">
          <div class="row">
            <div class="col-md-12">
              <h2>Search Obitiuaries</h2>
              <form class="obituaries-form row">
                <div class="col-md-9">
                  <input type="text" class="form-control" placeholder="Search Obituaries">
                </div>
                <div class="col-md-3">
                  <button type="submit" class="btn btn-primary btn-block">Search</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        @foreach ($obi as $o)
          <div class="obituaries-block"><!-- obituaries block -->
            <div class="well-default">
              <div class="row">
                <div class="col-md-3 obituaries-img"> <a href="obituaries-detail.html" title="Obituaries Image"><img src="images/icon.jpg" style="border:1px solid #1a4b5d;" class="img-responsive img-rounded" alt></a> </div>
                <div class="col-md-9">
                  @php
                    $dob = Carbon\Carbon::parse($o->dob);
                    $dod = Carbon\Carbon::parse($o->dod);
                    $diff = $dod->diffInYears($dob);
                  @endphp
                  <h2><a href="{{route('obituaries-details',['id'=>$o->id])}}" title="Obituaries Title">{{$o->name}}</a><small class="obituaries-age">(Age {{$diff}})</small> <span class="obituaries-meta">( {{$dob->toFormattedDateString()}} - {{$dod->toFormattedDateString()}} )</span></h2>
                  <p>Phasellus faucibus ut purus a condimentum. Sed id risus eget sem Phasellus faucibus ut condim tumsodalesm quis. Faucibus ut purus a condimentucibus ut purus a condimentum. </p>
                  <a href="{{route('obituaries-details',['id'=>$o->id])}}" class="btn btn-secondary">Send Condolences</a> </div>
                </div>
              </div>
            </div>
        @endforeach
        {{-- <!-- /.obituaries block -->
        <div class="row">
          <div class="col-md-12 st-pagination"><!-- st pagination -->
            <ul class="pagination">
              <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">Previous</span> </a> </li>
              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li> <a href="#" aria-label="Next"> <span aria-hidden="true">Next</span> </a> </li>
            </ul>
          </div>
          <!-- /.st pagination -->
        </div> --}}
      </div>
      <div class="col-md-4">

        <div class="row">
          <div class="col-md-12 widget-recent-posts"><!-- widget recent posts -->
            <div class="widget" style="background-color:#f3fcfe;"><!-- widget -->
              <h3 class="widget-title">Recent Obituaries</h3>
              @php
                $rbi = \App\obituary::orderBy('created_at', 'desc')->limit(3)->get();
              @endphp
              @foreach ($rbi as $r)
                <div class="row obituaries-post-block">
                  <div class="col-md-3 obituaries-post-img"><!-- recent post img -->
                    <a href="obituaries-detail.html"><img src="images/icon.jpg" class="img-responsive img-rounded" alt=""></a> </div>
                    <!-- /.recent post img -->
                    @php
                      $dob = Carbon\Carbon::parse($r->dob);
                      $dod = Carbon\Carbon::parse($r->dod);
                    @endphp
                    <div class="col-md-9">
                      <div class="obituaries-post-desc"><!-- recent post desc -->
                        <h3 class="obituaries-post-title"><a href="{{route('obituaries-details',['id'=>$r->id])}}">{{$r->name}}</a></h3>
                        <span class="obituaries-years">( {{$dob->toFormattedDateString()}} - {{$dod->toFormattedDateString()}} )</span> </div>
                        <!-- /.recent post desc -->
                      </div>
                      <!-- /.recent post block -->
                    </div>
              @endforeach
            </div>
          </div>
        </div>
        <!-- /.widget -->
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


<!-- jQuery -->
<script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>

<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
</body>
</html>
