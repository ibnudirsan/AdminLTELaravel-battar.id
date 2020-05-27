<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Abu Ahsan</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Admin Panel</li>
        <li class="treeview">
          <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('home') }}"><i class="fa fa-circle-o"></i> Home</a></li>
            <li class="active"><a href="{{ route('register') }}"><i class="fa fa-circle-o"></i> Register</a></li>
            <li class="active"><a href="{{ route('student') }}"><i class="fa fa-circle-o"></i> Register Siswa</a></li>
            <li class="active"><a href="{{ route('teacher') }}"><i class="fa fa-circle-o"></i> Register Guru</a></li>
          </ul>
        </li>
        
        {{-- Menu Keluar Aplikasi --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Keluar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                            <i class="fa fa-share"></i>{{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
          </ul>
        </li>
        {{-- Batas Menu Keluar Aplikasi --}}


      </ul>
    </section>
  </aside>