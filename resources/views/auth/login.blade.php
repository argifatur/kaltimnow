@if (Auth::guest())
@extends('layouts.admin')
@section('content')
<!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset ('public/admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/assets/plugins/bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/assets/plugins/font-awesome/css/fontawesome.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/assets/plugins/font-awesome/css/fontawesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/sbadmin/vendor/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/sbadmin/css/sb-admin-2.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/sbadmin/css/sb-admin-2.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/admin/assets/css/style.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <!-- JS -->
  <script src="{{asset('public/admin/assets/plugins/jquery/jquery-3.3.1.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="{{asset('public/admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/admin/plugins/fontawesome/js/all.js')}}"></script>


<!--  -->
<body class="bg-cadet">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center1">
      <div class="col-lg-11">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">LOG IN </h1>
                  </div>
                  <form class="user" role="form" method="POST" action="{{ url('/login') }}">
                       {{ csrf_field() }}
                    <div class="form-group">
                         <input id="email" class="form-control form-control-user" type="email" placeholder="email" name="email" value="{{ old('email') }}" required autofocus>
                          @if($errors->has('email'))
                                    <div class="salah">{{ $errors->first('email') }}</div>
                                @endif
                    </div>
                    <div class="form-group">
                            <input id="password" class="form-control form-control-user" placeholder="password" type="password" name="password" required>
                            @if ($errors->has('password'))
                                    <div class="salah">{{ $errors->first('password') }}</div>
                            @endif
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                      <button type="submit" class="btn text-white bg-cadet btn-user btn-block">Login</button>
                    </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</body>

  @endsection
@else <?php header("Location: /home") ?>
@endif

<!--  -->
