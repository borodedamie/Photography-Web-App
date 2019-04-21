<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendors/jqvmap/dist/jqvmap.min.css') }}">


    <link rel="stylesheet" href="{{ URL::asset('css/adminStyle.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{ URL::asset('img/adminLogo.png') }}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{ URL::asset('img/logo2.png') }}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        {{-- <li class="active">
                            <a href="index.html"> <i class="menu-icon fa fa-laptop"></i>Banner </a>
                        </li> --}}
                        <h3 class="menu-title">PHOTOGRAPHY</h3> <!-- /.menu-title -->
                        <li class="active">
                                <a href="{!! route('admin.index') !!}"> <i class="menu-icon fa fa-home"></i>Frontpage </a>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Feedback</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="{{ route('admin.feedback') }}">Feedback</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Events</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-th"></i><a href="{{ route('admin.event') }}">Event</a></li>
                                <li><i class="menu-icon fa fa-th"></i><a href="{{ route('admin.newEvent') }}">New Event</a></li>
                            </ul>
                        </li>    
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Services</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-th"></i><a href="{{ route('admin.services') }}">Services</a></li>
                                <li><i class="menu-icon fa fa-th"></i><a href="#">New Services</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Gallery</a>
                            {{-- <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-th"></i><a href="{{ route('admin.services') }}"></a></li>
                                <li><i class="menu-icon fa fa-th"></i><a href="#">New Services</a></li> --}}
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{ URL::asset('img/avatar/1.jpg') }}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{ URL::asset('img/avatar/2.jpg') }}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{ URL::asset('img/avatar/3.jpg') }}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{ URL::asset('img/avatar/4.jpg') }}"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ URL::asset('img/admin.jpg') }}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        {{-- session --}}
        @if ($errors->any())
        <div class="alert alert-danger" style = "padding: 50px; width:30%; display:block; padding: 0; margin-right:auto; margin-left:auto;">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
    
    
        @if(Session::has('success'))
          <div id = "success-div" class="alert alert-success" style = "padding: 50px; width:30%; display:block; padding: 0; margin-right:auto; margin-left:auto;">
              <div class = "text-center" >{{Session::get('success')}}

                <button style = "" type="button" class="close" onclick = "document.getElementById('success-div').style.display = 'none';" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button> 
              </div>              
        
          </div>
        @endif

        <div class="col-lg-12">
                <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{{ $service->service_title }}</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="{{ route('admin.updateService', [$service->id]) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
                                <div class="row form-group">
                                    <div class="col col-md-3" style="">
                                        <label for="text-input" class=" form-control-label">Service Title</label>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" id="text-input" name="service_title" placeholder="" class="form-control" value="{{ $service->service_title }}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3" style="">
                                            <label for="" class="form-control-label">Service Image</label>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <img name = "" class ="img-responsive" alt=" No image" width="400px" src ="/img/service/{{ $service->service_image}}">
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3" >
                                        <label for="file-input" class=" form-control-label"></label>
                                    </div>
                                    <div class="col-12 col-lg-6" style="">
                                        <input type="file" id="file-input" name="service_image" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3" style="">
                                            <label for="textarea-input" class=" form-control-label">Service Description</label>
                                        </div>
                                        <div class="col-12 col-lg-6"><textarea name="service_description" id="textarea-input" rows="9" placeholder="Write a brief description about your service..." class="form-control">{{ $service->service_description }}</textarea></div>
                                </div>
                                <div class="card-footer" style="text-align: center;">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                    <a class="btn btn-success btn-sm" href="{{ route('admin.services')}}" role="button">
                                        <i class="fa fa-minus-square-o"></i> Back 
                                    </a>   
                               </div>
                            </form>
                        </div>
                </div>
            </div>




        <script src="{{ URL::asset('vendors/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/main.js') }}"></script>
    

        <script src="{{ URL::asset('vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
        <script src="{{ URL::asset('js/dashboard.js') }}"></script>
        <script src="{{ URL::asset('js/widgets.js') }}"></script>
        <script src="{{ URL::asset('vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>
        <script src="{{ URL::asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
        <script src="{{ URL::asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    
    
</body>
    
</html>
    