<!DOCTYPE html>
<html>
    <head>
        <title>Smart Logic Pro</title>
	
		<link rel="stylesheet" href="{{ asset('packages/uikit/css/uikit.almost-flat.min.css')}}" />
		<link rel="stylesheet" href="{{ asset('css/app.css')}}" />
		
		<script src="{{ asset('components/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('packages/uikit/js/uikit.min.js')}}"></script>
        <script src="{{ asset('packages/uikit/js/addons/datepicker.min.js')}}"></script>
		
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('packages/uikit/css/addons/uikit.addons.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('foto/favicon.ico') }}" rel="shortcut icon" />


		<!-- JavaScript -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/script.js') }}"></script>
	
        @yield('asset')
		
    </head>
    <body>
	
	    @include('includes.navbarowner')
	
		
      
                 
    <!-- .container -->
    <div class="container-fluid">

	
	
      <!-- .row -->
      <div class="row">

        <!-- #menu -->
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="menu">
          @include('includes.menu')
        </div>
        <!-- /#menu -->

        <!-- #konten -->
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" id="konten">
           @yield('content') 
        </div>
        <!-- /#konten -->

      </div>
      <!-- /.row -->

    </div>
    <!-- .container -->
		
		
    <!-- modal -->
    @include('includes.modal')


<!-- start footer-->
	@include('includes.footer')
<!-- end footer-->

            
       

		
	
	

    </body>
</html>
