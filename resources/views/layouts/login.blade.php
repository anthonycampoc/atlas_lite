<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ATLAS | LITE</title>
  
  <link rel="stylesheet" href="{{asset('melody/vendors/iconfonts/font-awesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('melody/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('melody/vendors/css/vendor.bundle.addons.css')}}">

  <link rel="stylesheet" href="{{asset('melody/css/style.css')}}">
  <link rel="shortcut icon" href="{{asset('images/logo.ico')}}" />
</head>

<body>
  <div id="particles-js"></div>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo text-center">
                <img src="{{asset('images/empresa.png')}}" alt="atlaslite">
               
              </div>
              <h1 class="text-center"></h1>
             
                @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </div>
 
  <script src="{{asset('melody/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('melody/vendors/js/vendor.bundle.addons.js')}}"></script>
  

  <script src="{{asset('melody/js/off-canvas.js')}}"></script>
  <script src="{{asset('melody/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('melody/js/misc.js')}}"></script>
  <script src="{{asset('melody/js/settings.js')}}"></script>
  <script src="{{asset('melody/js/todolist.js')}}"></script>
  <script src="{{asset('melody/js/particles.min.js')}}"></script>
  <script src="{{asset('melody/js/app.js')}}"></script>

</body>
</html>