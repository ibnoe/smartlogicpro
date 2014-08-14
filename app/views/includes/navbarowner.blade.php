<!-- navbar  -->
<nav class="navbar navbar-php-id" role="navigation">

  <!-- .container-fluid -->
  <div class="container-fluid">

    <div class="navbar-header">      
      <span class="navbar-brand">
        <a href="#"><img src="{{ asset('foto/Logo SB Plan putih.png') }}" align="absmiddle" style="margin-top:-9px;" width=320 height=10></a> <small> </small>
      </span>
    </div>

	
	<span class="logout">
		<a href="{{ URL::to('logout') }}" class="logoutmenu"> Logout</a>
	</span>


            <div class="uk-navbar-nav uk-navbar-flip">
                <li class="uk-parent" data-uk-dropdown>
                    <a href="">
					
<img src="{{ asset('foto/adminblu.png') }}" width=30 height=30 align="absmiddle" class="gbruser"> &nbsp;user : {{ Sentry::getUser()->first_name . ' ' . Sentry::getUser()->last_name . ' (' . Sentry::getUser()->kd_karyawan. ')' }}

						</a>
                    <div class="uk-dropdown uk-dropdown-navbar">
                        <ul class="uk-nav uk-nav-navbar">
                            <li>{{ link_to_route('home.editpassword', 'Ubah Password')}}</li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                        </ul>
                    </div>
                </li>
            </div>
	


  </div>
  <!-- /.container-fluid -->

</nav>
<!-- /.navbar  -->