<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">	
		body{
			background-color: #fff;
		}
		.centered-form{
			margin-top: 50px;
		}

		.centered-form .panel{
			background: rgba(255, 255, 255, 0.8);
			box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
		}
	</style>
	
  </head>
  
  <body>
  
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ URL::to('') }}"><h1>Smart Business Plan</h1></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					
					<li>
                        <a href="{{ URL::to('') }}"><h2>Back To Home</h2></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
  
    <div class="container">
	<br><br>
	
	<div class="row">
        <div class="col-md-2">
			<br><br>
			<div class="container">
				<img class="img" src="img/Clipboard.png" alt="Generic placeholder image">
			</div>
		</div>
			
            <!-- /.col-md-8 -->
        <div class="col-md-10">
	
        <div class="row centered-form">
			<div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-1 col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
			    		<h3 class="panel-title">Please sign</h3>
					</div>
					<div class="panel-body">
					@include('layouts.partials.validation')
			    		{{ Form::open(array('url' => route('guest.register'), 'class' => 'uk-form uk-form-horizontal')) }}
							{{ Form::hidden('uid', Str::random(20, 'numeric')) }}
							<input type="hidden" name="pid" value="PR00<?php echo date('y')?>-<?php echo date('m-d')?>-<?php echo date('i')?>">		
							<div class="text-left">
								<h2>User Profile</h2>
								<hr>
							</div>

							<div class="form-group">
								{{ Form::text('first_name', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan nama depan...',
									'id'          => 'first_name',
									'maxlength'   => '50'
									)) 
								}}				
							</div>
			    		    				
			    			<div class="form-group">
			    				
								{{ Form::text('last_name', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan nama belakang...',
									'id'          => 'last_name',
									'maxlength'   => '50'
									)) 
								}}								
			    			</div>
			    			
			    			<div class="form-group">		    				
								{{ Form::text('username', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan username...',
									'id'          => 'username',
									'maxlength'   => '50'
									)) 
								}}									
			    			</div>

			  				<div class="form-group">
								{{ Form::text('password', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => '***********',
									'id'          => 'password',
									'maxlength'   => '50'
									)) 
								}}								
			  				</div>
			  
			  				<div class="form-group">
								{{ Form::text('password_confirmation', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => '***********',
									'id'          => 'password_confirmation',
									'maxlength'   => '50'
									)) 
								}}								
			    			</div>
							
							<div class="form-group">
								{{ Form::text('email', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan email...',
									'id'          => 'email',
									'maxlength'   => '50'
									)) 
								}}								
			    			</div>
									
							<div class="form-group">
								{{ Form::text('handphone', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan handphone...',
									'id'          => 'handphone',
									'maxlength'   => '50'
									)) 
								}}								
			    			</div>
							
							<div class="form-group">
								{{ Form::text('npwp', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan npwp...',
									'id'          => 'npwp',
									'maxlength'   => '50'
									)) 
								}}								
			    			</div>
							
							<div class="form-group">
								{{ Form::text('alamat', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan alamat...',
									'id'          => 'alamat',
									'maxlength'   => '50'
									)) 
								}}									
			    			</div>
							
							<div class="form-group">
								{{ Form::text('kota', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan kota...',
									'id'          => 'kota',
									'maxlength'   => '50'
									)) 
								}}								
			    			</div>
							
							<div class="form-group">
								{{ Form::text('propinsi', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan propinsi...',
									'id'          => 'propinsi',
									'maxlength'   => '50'
									)) 
								}}									
			    			</div>
							
							<div class="form-group">
								{{ Form::text('kodepos', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan kodepos...',
									'id'          => 'kodepos',
									'maxlength'   => '50'
									)) 
								}}								
			    			</div>
							
							<div class="text-left">
								<h2>Company Profile</h2>
								<hr>
							</div>
							
							<div class="form-group">
								{{ Form::text('namaperusahaan', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan nama perusahaan...',
									'id'          => 'namaperusahaan',
									'maxlength'   => '50'
									)) 
								}}	
			    			</div>
							
							<div class="form-group">
								{{ Form::text('alamat', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan nama alamat...',
									'id'          => 'alamat',
									'maxlength'   => '50'
									)) 
								}}									
			    			</div>
							
							<div class="form-group">
								{{ Form::text('kota2', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan nama kota...',
									'id'          => 'kota2',
									'maxlength'   => '50'
									)) 
								}}									
			    			</div>
							
							<div class="form-group">
								{{ Form::text('propinsi2', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan nama propinsi...',
									'id'          => 'propinsi2',
									'maxlength'   => '50'
									)) 
								}}								
			    			</div>
							
							<div class="form-group">
								{{ Form::text('kode_pos2', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan nomer kode pos...',
									'id'          => 'kode_pos2',
									'maxlength'   => '50'
									)) 
								}}								
			    			</div>
							
							<div class="form-group">
								{{ Form::text('handphone2', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan nomer handphone...',
									'id'          => 'handphone2',
									'maxlength'   => '50'
									)) 
								}}								
			    			</div>
							
							<div class="form-group">
								{{ Form::text('telephone2', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan nomer telephone...',
									'id'          => 'telephone2',
									'maxlength'   => '50'
									)) 
								}}								
			    			</div>
							
							<div class="form-group">
								{{ Form::text('fax', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan nomer fax...',
									'id'          => 'fax',
									'maxlength'   => '50'
									)) 
								}}								
			    			</div>

							<div class="form-group">
								{{ Form::text('email_perusahaan', null, array(
									'class'       => 'form-control input-sm',
									'placeholder' => 'Masukkan email perusahaan...',
									'id'          => 'email_perusahaan',
									'maxlength'   => '50'
									)) 
								}}									
			    			</div>
							
							{{ Form::hidden('status', 'pending') }}
							{{ Form::hidden('tanggal_daftar', date('Y-m-d')) }}
							
							<div class="form-group">
								<center>{{ Form::captcha() }}</center>
							</div>							
			    			
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		
			    		{{ Form::close() }}
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>