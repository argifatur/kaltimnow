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

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-cadet sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand justify-content-center bg-white" href="#">
				<div class="sidebar-brand-icon big">
					<!-- <i class="fas fa-laugh-wink"></i> -->
					<!-- <img class="img-profile" src="{{asset('public/sbadmin/img/logo-uw.png')}}"> -->
					<img class="img-profile" src="{{asset('public/img/logo.png')}}" style="height: 45px;">

				</div>

				<div class="sidebar-brand-text mx-3 text-gray-900"></div>
			</a>

			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link collapsed" href="{{route('dasbor')}}">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
				</li>
				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						<i class="fas fa-fw fa-tasks text-white"></i>
						<span class="text-white">Kategori</span>
					</a>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item" href="{{route('daftar_kat')}}">Semua Kategori</a>
							<a class="collapse-item" href="{{route('tambah_kat')}}">Tambah Baru</a>
						</div>
					</div>
				</li>

				<!-- Nav Item - Utilities Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
						<i class="fas fa-fw fa-book text-white"></i>
						<span class="text-white">Artikel</span>
					</a>
					<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item" href="{{route('daftar')}}">Semua Post</a>
							<a class="collapse-item" href="{{route('tambah_artik')}}">Tambah Baru</a>
						</div>
					</div>
				</li>
				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
						<i class="fas fa-fw fa-tags text-white"></i>
						<span class="text-white">Tag</span>
					</a>
					<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item" href="{{route('daftar_tag')}}">Semua Tag</a>
							<a class="collapse-item" href="{{route('tambah_tag')}}">Tambah Baru</a>
						</div>
					</div>
				</li>
				<!-- Divider -->
				<hr class="sidebar-divider d-none d-md-block">

				<!-- Sidebar Toggler (Sidebar) -->
<!--   <div class="text-center d-none d-md-inline">
<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div> -->

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<!-- Topbar -->
		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

			<!-- Sidebar Toggle (Topbar) -->
			<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
				<i class="fa fa-bars"></i>
			</button>

			<!-- Topbar Navbar -->
			<ul class="navbar-nav ml-auto">

				<!-- Nav Item - Search Dropdown (Visible Only XS) -->
<!-- 	<li class="nav-item dropdown no-arrow d-sm-none">
<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-search fa-fw"></i>
</a> -->

<!-- Nav Item - User Information -->
<li class="nav-item dropdown arrow">
	<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<i class="text-gray-900 fas fa-user fa-fw"></i>
		<span class="mr-2 d-none d-lg-inline text-gray-900 medium">&nbsp;Developer</span>
		<!-- <img class="img-profile rounded-circle" src="sbadmin/img/smk7.png"> -->
	</a>
	<!-- Dropdown - User Information -->
	<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

		<a class="dropdown-item" href="{{route('/') }}" target="_blank">
			<i class="fas fa-globe fa-sm fa-fw mr-2 text-gray-400"></i>
			Lihat Website
		</a>
		<a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
			<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
			Logout
		</a>
	</div>
</li>

</ul>

</nav>


</div>

<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Tekan Tombol Logout Untuk Keluar</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal" >Cancel</button>
				<a class="btn btn-primary"  href="{{url('/logout')}}">Logout</a>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('public/sbadmin/vendor/jquery/jquery.min.js')}}"></script>
<!-- 		<script src="{{asset('public/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
-->
<!-- Core plugin JavaScript-->
<script src="{{asset('public/sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('public/sbadmin/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('public/sbadmin/vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('public/sbadmin/js/demo/chart-area-demo.js')}}"></script>
<script src="{{URL::asset('js/demo/chart-pie-demo.js')}}"></script>

</body>
<!-- 	<header class="row">
<div class="col-12 logo-admin left">ADMINISTRATOR</div>
<div id="log-menu" style="top: 9%">
<div class="col-12">
<div class="col-2 col-lg-10"><img src="public/img/{{ Auth::user()->profile }}"></div>
<div class="col-10 dlog">
@if(strlen(Auth::user()->name) > 20){{ substr(Auth::user()->name, 0, 20)."..." }}
@else {{ Auth::user()->name }}
@endif
</div>
</div>
<a href="/home" class="col-6 col-lg-10">Profile</a>
<a href="/logout" class="col-6 col-lg-10" onclick="event.preventDefault();document.getElementById('logout').submit();">Logout</a>
</div>
<form id="logout" action="{{ url('/logout') }}" method="POST">{{ csrf_field() }}</form>
</header> -->