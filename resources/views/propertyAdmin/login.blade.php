<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('propertyAssets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset('propertyAssets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard PRO by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, material design, material dashboard bootstrap 4 dashboard">
  <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
  <meta itemprop="name" content="Material Dashboard PRO by Creative Tim">
  <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
  <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim">
  <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Dashboard PRO by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="../dashboard.html" />
  <meta property="og:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg" />
  <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design." />
  <meta property="og:site_name" content="Creative Tim" />

  <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="../../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="{{ asset('propertyAssets/css/material-dashboard.min1c51.css?v=2.1.2') }}" rel="stylesheet" />
  <link href="{{ asset('propertyAssets/demo/demo.css') }}" rel="stylesheet" />
    <style type="text/css">
        .red{
            color: red
        }
        .center{
            text-align: center
        }
    </style>
</head>

<body class="off-canvas-sidebar">
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @if( Session::has('error') )
        <div class="alert alert-error" style="background: red;color: white;position: absolute;z-index: 999;right: 15px;width: 220px;top: 15px;">
            {{ session::get('error') }}
        </div>
    @endif
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url({{ asset('propertyAssets/img/login.jpg')}}); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
            
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" method="POST" action="{{ route('property.submit.login') }}">
                @csrf
              <div class="card card-login card-hidden">
                <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">Login</h4>
                </div>
                <div class="card-body ">
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="email" name="email" class="form-control" placeholder="Email...">
                    </div>
                    @if( $errors->has('email') )   
                        <p class="red center">{{ $errors->first('email') }}</p>
                    @endif

                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons">lock_outline</i>
                            </span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Password...">
                    </div>
                        @if( $errors->has('password') )   
                            <p class="red center">{{ $errors->first('password') }}</p>
                        @endif
                  </span>
                </div>
                <div class="card-footer justify-content-center">

                  <button type="submit" class="btn btn-rose btn-link btn-lg">Lets Go</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <script src="{{ asset('propertyAssets/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('propertyAssets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('propertyAssets/js/core/bootstrap-material-design.min.js') }}"></script>
  <script src="{{ asset('propertyAssets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  {{-- <script async defer src="{{ asset('propertyAssets/buttons.github.io/buttons.js') }}"></script> --}}
  <script src="{{ asset('propertyAssets/js/plugins/chartist.min.js') }}"></script>
  <script src="{{ asset('propertyAssets/js/plugins/bootstrap-notify.js') }}"></script>
  <script src="{{ asset('propertyAssets/js/material-dashboard.min1c51.js?v=2.1.2') }}" type="text/javascript"></script>
  <script src="{{ asset('propertyAssets/demo/demo.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>

  <!-- Sharrre libray -->
  <script src="{{ asset('propertyAssets/demo/jquery.sharrre.js') }}"></script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
  <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
      setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 700);
    });
  </script>
</body>
</html>