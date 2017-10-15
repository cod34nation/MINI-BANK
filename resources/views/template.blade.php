<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MINI-BANK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="{{asset('css/bootstrap-responsive.css')}}" rel="stylesheet">

    
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('ico/apple-touch-icon-114-precomposed..png')}}">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('ico/apple-touch-icon-72-precomposed.p.png')}}ng">
                    <link rel="apple-touch-icon-precomposed" href="{{asset('ico/apple-touch-icon-57-precomposed.pn.png')}}g">
                                   <link rel="shortcut icon" href="{{asset('ico/favicon.pn.png')}}g">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
    
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">MiniBank</a>
          <div class="nav-stacked">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="{{url('nasabah')}}" class="glyphicon glyphicon-th">Nasabah</a></li>
              <li><a href="#contact">Transaksi</a></li>
              <li><a href="#contact">Laporan</a></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">My Profile</a></li>
                  <li><a href="#">Logout</a></li>
                  
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->

      
        </div>
      </div>
    </div>

    <div class="container">

    @yield('content')

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap-transition.js')}}"></script>
    <script src="{{asset('js/bootstrap-alert.js')}}"></script>
    <script src="{{asset('js/bootstrap-modal.js')}}"></script>
    <script src="{{asset('js/bootstrap-dropdown.js')}}"></script>
    <script src="{{asset('js/bootstrap-scrollspy.js')}}"></script>
    <script src="{{asset('js/bootstrap-tab.js')}}"></script>
    <script src="{{asset('js/bootstrap-tooltip.js')}}"></script>
    <script src="{{asset('js/bootstrap-popover.js')}}"></script>
    <script src="{{asset('js/bootstrap-button.js')}}"></script>
    <script src="{{asset('js/bootstrap-collapse.js')}}"></script>
    <script src="{{asset('js/bootstrap-carousel.js')}}"></script>
    <script src="{{asset('js/bootstrap-typeahead.js')}}"></script>

  </body>
</html>
