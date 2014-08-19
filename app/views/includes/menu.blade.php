<!-- .nav-parent -->
<ul class="nav nav-pills nav-stacked nav-parent">



<!-- ****************************** PERMISSION EMPLOYE ****************************** -->

 @if (Sentry::getUser()->hasPermission('employer'))
  <!-- master -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#master" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'dashboard' || Request::segment(1) == 'administrator.agamas.index' || Request::segment(1) == 'karyawan.penjualanfakturlengkaps.index') ? 'down' : 'right' }} arrow-menu"></span>
      <img src="{{ asset('foto/master.png') }}" align="absmiddle" width=20 height=20>  HOME
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'dashboard' || Request::segment(1) == 'administrator.agamas.index' || Request::segment(1) == 'karyawan.penjualanfakturlengkaps.index') ? 'in' : '' }}" id="master">

      <!-- pengguna super user -->
      <li class="#">
        <a href="{{ route('dashboard') }}">
          <img src="{{ asset('foto/karyawan.png') }}" align="absmiddle" width=20 height=20> Dashboard
        </a>
      </li>
      <!-- /pengguna super user-->	  
	  
	  
	  
    </ul>
    <!-- /.nav-child -->
  <!-- /master -->


  
  <!-- Transaction -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#transaction" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'editpassword' || Request::segment(1) == 'profil' || Request::segment(1) == 'perusahaan') ? 'down' : 'right' }} arrow-menu"></span>
      <img src="{{ asset('foto/pengaturanblu.png') }}" align="absmiddle" width=20 height=20> Transaction
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'editpassword' || Request::segment(1) == 'profil' || Request::segment(1) == 'perusahaan') ? 'in' : '' }}" id="transaction">

	
	  <li class="#">
        <a href="{{ route('karyawan.interfacepenjualan.index') }}">
          <span class="glyphicon glyphicon-cog"></span> Penjualan
        </a>
      </li>
	
      <li class="#">
        <a href="{{ route('karyawan.interfacepembelian.index') }}">
          <span class="glyphicon glyphicon-cog"></span> Pembelian
        </a>
      </li>

    </ul>
    <!-- /.nav-child -->
  <!-- /Transaction -->  
  

  
  <!-- Module -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#module" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'editpassword' || Request::segment(1) == 'profil' || Request::segment(1) == 'perusahaan') ? 'down' : 'right' }} arrow-menu"></span>
      <img src="{{ asset('foto/pengaturanblu.png') }}" align="absmiddle" width=20 height=20> Module
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'editpassword' || Request::segment(1) == 'profil' || Request::segment(1) == 'perusahaan') ? 'in' : '' }}" id="module">

	
	  <li class="#">
        <a href="{{ route('karyawan.interfacepenjualan.index') }}">
          <span class="glyphicon glyphicon-cog"></span> PPN
        </a>
      </li>
	


    </ul>
    <!-- /.nav-child -->
  <!-- /Module -->   
  


  <!-- Laporan -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#laporan" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'editpassword' || Request::segment(1) == 'profil' || Request::segment(1) == 'perusahaan') ? 'down' : 'right' }} arrow-menu"></span>
      <img src="{{ asset('foto/pengaturanblu.png') }}" align="absmiddle" width=20 height=20> Laporan
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'editpassword' || Request::segment(1) == 'profil' || Request::segment(1) == 'perusahaan') ? 'in' : '' }}" id="laporan">

	
	  <li class="#">
        <a href="{{ route('pdf_laporan1111b3') }}">
          <span class="glyphicon glyphicon-cog"></span> 1111B3
        </a>
      </li>
	
      <li class="#">
        <a href="{{ route('pdf_laporan1111b2') }}">
          <span class="glyphicon glyphicon-cog"></span> 1111B2
        </a>
      </li>
	  
      <li class="#">
        <a href="{{ route('pdf_laporan1111b1') }}">
          <span class="glyphicon glyphicon-cog"></span> 1111B1
        </a>
      </li>
	  
      <li class="#">
        <a href="{{ route('pdf_laporan1111a1') }}">
          <span class="glyphicon glyphicon-cog"></span> 1111A1
        </a>
      </li>	  
	  
      <li class="#">
        <a href="{{ route('pdf_laporan1111a2') }}">
          <span class="glyphicon glyphicon-cog"></span> 1111A2
        </a>
      </li>

      <li class="#">
        <a href="#">
          <span class="glyphicon glyphicon-cog"></span> 1111AB
        </a>
      </li>	  

	  
	  <li class="#">
        <a href="#">
          <span class="glyphicon glyphicon-cog"></span> 1111Induk
        </a>
      </li>
	  
	  
    </ul>
    <!-- /.nav-child -->
  <!-- /Laporan -->    
  

  

  <!-- pengaturan -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#pengaturan" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'editpassword' || Request::segment(1) == 'profil' || Request::segment(1) == 'perusahaan') ? 'down' : 'right' }} arrow-menu"></span>
      <img src="{{ asset('foto/pengaturanblu.png') }}" align="absmiddle" width=20 height=20> Pengaturan
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'editpassword' || Request::segment(1) == 'profil' || Request::segment(1) == 'perusahaan') ? 'in' : '' }}" id="pengaturan">

	
	  <li class="#">
        <a href="{{ route('home.editpassword') }}">
          <span class="glyphicon glyphicon-cog"></span> Ubah Password
        </a>
      </li>
	
      <li class="#">
        <a href="{{ route('member.profile') }}">
          <span class="glyphicon glyphicon-cog"></span> Profil
        </a>
      </li>

    </ul>
    <!-- /.nav-child -->
  <!-- /pengaturan -->


  
  
  
  <!-- akun -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#akun" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'akun') ? 'down' : 'right' }} arrow-menu"></span>
      <span class="glyphicon glyphicon-tower"></span> Akun
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'akun') ? 'in' : '' }}" id="akun">

      <li class="#">
        <a href="#">
          <span class="glyphicon glyphicon-off"></span> Logout
        </a>
      </li>

    </ul>
    <!-- /.nav-child -->
  <!-- /akun -->
 @endif
 
<!-- ****************************** END PERMISSION EMPLOYE ****************************** -->
 
 
 
 
 
 
 
 
 
  <!-- ****************************** PERMISSION ADMIN ****************************** -->
 
  @if (Sentry::getUser()->hasPermission('admin'))
  <!-- master -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#master" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'dashboard' || Request::segment(1) == 'agamas' || Request::segment(1) == 'departements') ? 'down' : 'right' }} arrow-menu"></span>
      <img src="{{ asset('foto/master.png') }}" align="absmiddle" width=20 height=20>  Master
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'dashboard' || Request::segment(1) == 'agamas' || Request::segment(1) == 'departements') ? 'in' : '' }}" id="master">

      <!-- pengguna super user -->
      <li class="#">
        <a href="{{ route('dashboard') }}">
          <img src="{{ asset('foto/karyawan.png') }}" align="absmiddle" width=20 height=20> Dashboard
        </a>
      </li>
      <!-- /pengguna super user-->	  

      <!-- agama -->
      <li class="#">
        <a href="{{ route('administrator.agamas.index') }}">
          <img src="{{ asset('foto/agama.png') }}" align="absmiddle" width=20 height=20> Agama
        </a>
      </li>
      <!-- /agama-->	  

	  
      <!--departemen -->
      <li class="#">
        <a href="{{ route('administrator.departements.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Departement
        </a>
      </li>
      <!-- /departemen-->		  

	  
	  
      <!--jabatan -->
      <li class="#">
        <a href="{{ route('administrator.jabatans.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Jabatan
        </a>
      </li>
      <!-- /jabatan-->	
	  
	  
      <!--golongan -->
      <li class="#">
        <a href="{{ route('administrator.golongans.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Golongan
        </a>
      </li>
      <!-- /golongan-->		  
	  
	  
	  
      <!--ptkp -->
      <li class="#">
        <a href="{{ route('administrator.ptkps.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Ptkp
        </a>
      </li>
      <!-- /ptkp-->		  
	  
	  
	  
      <!--perusahaan -->
      <li class="#">
        <a href="{{ route('administrator.perusahaans.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Perusahaaan
        </a>
      </li>
      <!-- /perusahaan-->		  
	  
	  
      <!--marketing -->
      <li class="#">
        <a href="{{ route('administrator.marketings.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Marketing
        </a>
      </li>
      <!-- /marketing-->


      <!--karyawan -->
      <li class="#">
        <a href="{{ route('administrator.karyawans.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Karyawans
        </a>
      </li>
      <!-- /karyawan-->
	  
	  
	  
      <!--owners -->
      <li class="#">
        <a href="{{ route('administrator.owners.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Owners
        </a>
      </li>
      <!-- /owners-->
	

      <!--harga -->
      <li class="#">
        <a href="{{ route('administrator.hargas.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Harga
        </a>
      </li>
      <!-- /harga-->
	

      <!--Potongan -->
      <li class="#">
        <a href="{{ route('administrator.potongans.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Potongan
        </a>
      </li>
      <!-- /Potongan-->


      <!--Pkps -->
      <li class="#">
        <a href="{{ route('administrator.pkps.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Pkps
        </a>
      </li>
      <!-- /Pkps-->



      <!--Absensis -->
      <li class="#">
        <a href="{{ route('administrator.absensis.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Absensi
        </a>
      </li>
      <!-- /Absensi-->



      <!--Tunjangan -->
      <li class="#">
        <a href="{{ route('administrator.tunjangans.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Tunjangan
        </a>
      </li>
      <!-- /Tunjangan-->
	  
	  
      <!--Detail Gajis -->
      <li class="#">
        <a href="{{ route('administrator.detailgajis.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Detail Gaji
        </a>
      </li>
      <!-- /Detail gaji-->	  
	  
	  
      <!--lembur -->
      <li class="#">
        <a href="{{ route('administrator.lemburs.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Lembur
        </a>
      </li>
      <!-- /lembur-->	 
	  

      <!--pphs -->
      <li class="#">
        <a href="{{ route('administrator.pphs.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Pph
        </a>
      </li>
      <!-- /pphs-->	 



      <!--penilaians -->
      <li class="#">
        <a href="{{ route('administrator.penilaians.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Penilaian
        </a>
      </li>
      <!-- /penilaian-->	 


      <!--pph42a -->
      <li class="#">
        <a href="{{ route('administrator.pph42s.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Pph42
        </a>
      </li>
      <!-- /pph42-->	

	  
	  
      <!--gajis -->
      <li class="#">
        <a href="{{ route('administrator.gajis.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Gaji
        </a>
      </li>
      <!-- /gaji-->	


      <!--ppns -->
      <li class="#">
        <a href="{{ route('administrator.ppns.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> PPN
        </a>
      </li>
      <!-- /ppns-->	
	  


      <!--statuses -->
      <li class="#">
        <a href="{{ route('administrator.statuses.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Status
        </a>
      </li>
      <!-- /statusses-->	

	  
      <!--departemens -->
      <li class="#">
        <a href="{{ route('administrator.departements.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Departemen
        </a>
      </li>
      <!-- /departemens-->

	  
	  
      <!--owners -->
      <li class="#">
        <a href="{{ route('administrator.owners.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Owner
        </a>
      </li>
      <!-- /owners-->	  
	  

      <!--tickets supports -->
      <li class="#">
        <a href="{{ route('administrator.ticket_supports.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Ticket Support
        </a>
      </li>
      <!-- /ticket supports-->	  

	  
	  
      <!--agenda -->
      <li class="#">
        <a href="{{ route('administrator.agendas.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Agenda
        </a>
      </li>
      <!-- /agenda-->	


	  
	  <!--module groups -->
      <li class="#">
        <a href="{{ route('administrator.modulegroups.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Module Groups
        </a>
      </li>
      <!-- /module groups-->	
	  
	  
	  <!--modules -->
      <li class="#">
        <a href="{{ route('administrator.modules.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> Modules
        </a>
      </li>
      <!-- /modules-->


	  <!--user modules -->
      <li class="#">
        <a href="{{ route('administrator.usermodules.index') }}">
          <img src="{{ asset('foto/department.png') }}" align="absmiddle" width=20 height=20> User Modules
        </a>
      </li>
      <!-- /user modules-->




	  
    </ul>
    <!-- /.nav-child -->
  <!-- /master -->



  <!-- pengaturan -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#pengaturan" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'editpassword' || Request::segment(1) == 'profile' || Request::segment(1) == 'perusahaan') ? 'down' : 'right' }} arrow-menu"></span>
      <img src="{{ asset('foto/pengaturanblu.png') }}" align="absmiddle" width=20 height=20> Pengaturan
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'editpassword' || Request::segment(1) == 'profile' || Request::segment(1) == 'perusahaan') ? 'in' : '' }}" id="pengaturan">

	
	  <li class="#">
        <a href="{{ route('home.editpassword') }}">
          <span class="glyphicon glyphicon-cog"></span> Ubah Password
        </a>
      </li>
	
      <li class="#">
        <a href="{{ route('member.profile') }}">
          <span class="glyphicon glyphicon-cog"></span> Profile
        </a>
      </li>

	  


    </ul>
    <!-- /.nav-child -->
  <!-- /pengaturan -->

  <!-- akun -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#akun" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'akun') ? 'down' : 'right' }} arrow-menu"></span>
      <span class="glyphicon glyphicon-tower"></span> Akun
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'akun') ? 'in' : '' }}" id="akun">

      <li class="#">
        <a href="#">
          <span class="glyphicon glyphicon-off"></span> Logout
        </a>
      </li>

    </ul>
    <!-- /.nav-child -->
  <!-- /akun -->
 @endif
 
 
<!-- ****************************** END PERMISSION ADMIN ****************************** -->
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
   <!-- ****************************** PERMISSION Administrator owner ****************************** -->
 
  @if (Sentry::getUser()->hasPermission('administrator-owner'))
  <!-- master -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#master" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'dashboard' || Request::segment(1) == 'agamas' || Request::segment(1) == 'departements') ? 'down' : 'right' }} arrow-menu"></span>
      <img src="{{ asset('foto/master.png') }}" align="absmiddle" width=20 height=20>  Master
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'dashboard' || Request::segment(1) == 'agamas' || Request::segment(1) == 'departements') ? 'in' : '' }}" id="master">

      <!-- pengguna super user -->
      <li class="#">
        <a href="{{ route('dashboard') }}">
          <img src="{{ asset('foto/karyawan.png') }}" align="absmiddle" width=20 height=20> Dashboard
        </a>
      </li>
      <!-- /pengguna super user-->	  

      <!-- agama -->
      <li class="#">
        <a href="{{ route('administrator.agamas.index') }}">
          <img src="{{ asset('foto/agama.png') }}" align="absmiddle" width=20 height=20>Karyawan
        </a>
      </li>
      <!-- /agama-->	  

	  

 
	  
	  
	  
	  
    </ul>
    <!-- /.nav-child -->
  <!-- /master -->



  <!-- pengaturan -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#pengaturan" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'editpassword' || Request::segment(1) == 'profile' || Request::segment(1) == 'perusahaan') ? 'down' : 'right' }} arrow-menu"></span>
      <img src="{{ asset('foto/pengaturanblu.png') }}" align="absmiddle" width=20 height=20> Pengaturan
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'editpassword' || Request::segment(1) == 'profile' || Request::segment(1) == 'perusahaan') ? 'in' : '' }}" id="pengaturan">

	
	  <li class="#">
        <a href="{{ route('home.editpassword') }}">
          <span class="glyphicon glyphicon-cog"></span> Ubah Password
        </a>
      </li>
	
      <li class="#">
        <a href="{{ route('member.profile') }}">
          <span class="glyphicon glyphicon-cog"></span> Profile
        </a>
      </li>

	  


    </ul>
    <!-- /.nav-child -->
  <!-- /pengaturan -->

  <!-- akun -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#akun" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'akun') ? 'down' : 'right' }} arrow-menu"></span>
      <span class="glyphicon glyphicon-tower"></span> Akun
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'akun') ? 'in' : '' }}" id="akun">

      <li class="#">
        <a href="#">
          <span class="glyphicon glyphicon-off"></span> Logout
        </a>
      </li>

    </ul>
    <!-- /.nav-child -->
  <!-- /akun -->
 @endif
 
 
<!-- ****************************** END PERMISSION OWNER ****************************** -->
 
 
 
 
 
 
 
 

    <!-- ****************************** PERMISSION Administrator Marketing ****************************** -->
 
  @if (Sentry::getUser()->hasPermission('marketing'))
  <!-- master -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#master" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'dashboard' || Request::segment(1) == 'agamas' || Request::segment(1) == 'departements') ? 'down' : 'right' }} arrow-menu"></span>
      <img src="{{ asset('foto/master.png') }}" align="absmiddle" width=20 height=20>  Master
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'dashboard' || Request::segment(1) == 'agamas' || Request::segment(1) == 'departements') ? 'in' : '' }}" id="master">

      <!-- pengguna super user -->
      <li class="#">
        <a href="{{ route('dashboard') }}">
          <img src="{{ asset('foto/karyawan.png') }}" align="absmiddle" width=20 height=20> Dashboard
        </a>
      </li>
      <!-- /pengguna super user-->	  

	  
	  
      <!-- Data Owner -->
      <li class="#">
        <a href="#">
          <img src="{{ asset('foto/agama.png') }}" align="absmiddle" width=20 height=20> Data owner
        </a>
      </li>
      <!-- /Data Owner-->	  
	  
	  
      <!-- Expired Client-->
      <li class="#">
        <a href="#">
          <img src="{{ asset('foto/agama.png') }}" align="absmiddle" width=20 height=20> Expired Client
        </a>
      </li>
      <!-- /Expired Client-->	 


      <!-- Waiting List-->
      <li class="#">
        <a href="#">
          <img src="{{ asset('foto/agama.png') }}" align="absmiddle" width=20 height=20> Waiting List
        </a>
      </li>
      <!-- /Waiting List-->		  
	  
	  
      <!-- My Client Data-->
      <li class="#">
        <a href="#">
          <img src="{{ asset('foto/agama.png') }}" align="absmiddle" width=20 height=20> My Client Data
        </a>
      </li>
      <!-- /My Client Data-->	
	  
	  
      <!-- Agenda -->
      <li class="#">
        <a href="{{ route('marketing.agendas.index') }}">
          <img src="{{ asset('foto/agama.png') }}" align="absmiddle" width=20 height=20> Agenda
        </a>
      </li>
      <!-- /agenda-->	  

	  
      <!-- Support Ticket -->
      <li class="#">
        <a href="{{ route('marketing.ticket_supports.index') }}">
          <img src="{{ asset('foto/agama.png') }}" align="absmiddle" width=20 height=20> Support Ticket
        </a>
      </li>
      <!-- /Support Ticket-->	 
 
	  
	  
	  
	  
    </ul>
    <!-- /.nav-child -->
  <!-- /master -->



  <!-- pengaturan -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#pengaturan" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'editpassword' || Request::segment(1) == 'profile' || Request::segment(1) == 'perusahaan') ? 'down' : 'right' }} arrow-menu"></span>
      <img src="{{ asset('foto/pengaturanblu.png') }}" align="absmiddle" width=20 height=20> Pengaturan
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'editpassword' || Request::segment(1) == 'profile' || Request::segment(1) == 'perusahaan') ? 'in' : '' }}" id="pengaturan">

	
	  <li class="#">
        <a href="{{ route('home.editpassword') }}">
          <span class="glyphicon glyphicon-cog"></span> Ubah Password
        </a>
      </li>
	
      <li class="#">
        <a href="{{ route('member.profile') }}">
          <span class="glyphicon glyphicon-cog"></span> Profile
        </a>
      </li>

	  


    </ul>
    <!-- /.nav-child -->
  <!-- /pengaturan -->

  <!-- akun -->
  <li>
    <a data-toggle="collapse" data-parent="#menu" href="#akun" class="menu">
      <span class="pull-right glyphicon glyphicon-chevron-{{ (Request::segment(1) == 'akun') ? 'down' : 'right' }} arrow-menu"></span>
      <span class="glyphicon glyphicon-tower"></span> Akun
    </a>
  </li>

    <!-- .nav-child -->
    <ul class="nav nav-stacked nav-child collapse {{ (Request::segment(1) == 'akun') ? 'in' : '' }}" id="akun">

      <li class="#">
        <a href="#">
          <span class="glyphicon glyphicon-off"></span> Logout
        </a>
      </li>

    </ul>
    <!-- /.nav-child -->
  <!-- /akun -->
 @endif
 
 
<!-- ****************************** END PERMISSION Administrator Marketing ****************************** -->
 
 
 
 
</ul>
<!-- /.nav-parent -->