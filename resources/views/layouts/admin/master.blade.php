<!DOCTYPE html>
<html>
    
    @include('layouts.admin.partials.html-header')
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			
			@include('layouts.admin.partials.app-header')

			@include('layouts.admin.partials.side-menu-bar')


			@yield('main-content')


			@include('layouts.admin.partials.footer')

			@include('layouts.admin.partials.app-scripts')

		</div>
	</body>
</html>