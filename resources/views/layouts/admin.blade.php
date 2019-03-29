
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin KaltimNow</title>
 <link rel="shortcut icon" href="{{asset('public/img/ikon.png') }}"> 
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/css/rewidify.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/assets/plugins/bootstrap/css/bootstrap.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/css/style.css') }}">
<link href="{{asset('public/admin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('public/sbadmin/css/sb-admin-2.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('public/sbadmin/css/sb-admin-2.min.css') }}">

<!-- //Insert this on your head section
 --><!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
 <script src="{{ asset('public/tinymce/tinymce.min.js') }}"></script>
 <script src="{{ asset('public/admin/assets/plugins/bootstrap/js/bootstrap.js') }}"></script>
 <script src="{{ asset('public/js/jquery3.min.js') }}"></script>
 <script src="{{ asset('public/js/script.js') }}"></script>

</head>

 @if (!Auth::guest())
 @include('layouts.header')
<div class="col-12">
      @if(Auth::user()->email == "admin@admin.com") @include('layouts.adminT')
   @else @include('layouts.userT')
   @endif

   @yield('content')
  </div>



  <script>
   tinymce.init({
     selector: 'textarea#addPost',
     plugins: [
       'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
       'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
       'save table contextmenu directionality emoticons template paste textcolor'
     ],
     height : '350'
   });
   </script>
   @else @yield('content')
   @endif

   <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

asdadadadadasda
fjgjhjgjgj
</body>
</html>