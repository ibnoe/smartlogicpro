<!-- navbar  -->
<nav class="navbar navbar-php-id" role="navigation">

  <!-- .container-fluid -->
  <div class="container-fluid">

    <div class="navbar-header">      
      <span class="navbar-brand">
        <a href="#"><img src="{{ asset('foto/Logo SB Plan.png') }}" align="absmiddle" width=100 height=30></a> <small> </small>
      </span>
    </div>


	<span class="logout">
		<a href="{{ URL::to('login') }}" class="logoutmenu"> Login</a>
	</span>
	
	<span class="logout">
		<a href="{{ URL::to('signup') }}" class="logoutmenu"> Signup</a>
	</span>
	
	

  </div>
  <!-- /.container-fluid -->

</nav>
<!-- /.navbar  -->