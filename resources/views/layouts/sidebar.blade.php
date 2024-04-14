<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            @if(Auth::user()->role === 'admin')
            <a href="{{ route('home') }}"> <div class="badge badge-success">Admin</div></a>
            @else
            <a href="{{ route('home') }}"> <div class="badge badge-primary">Spectator</div></a>
            @endif
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="{{ route('home') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Components</li>
            @if(Auth::user()->role == 'admin')
              <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#editProfileModal{{Auth::user()->id}}"><i data-feather="grid"></i><span>Profile</span></a></li>
            @endif
              <li><a class="nav-link" href="{{ route('admin.index') }}"><i data-feather="grid"></i><span>User</span></a></li>
              <li><a class="nav-link" href="{{ route('skills.index') }}"><i data-feather="grid"></i><span>Skills</span></a></li>
              <li><a class="nav-link" href="{{ route('works.index') }}"><i data-feather="grid"></i><span>Works</span></a></li>
              <li><a class="nav-link" href="{{ route('educationals.index') }}"><i data-feather="grid"></i><span>Educational</span></a></li>
              <li><a class="nav-link" href="{{ route('experiences.index') }}"><i data-feather="grid"></i><span>Experience</span></a></li>
              <li><a class="nav-link" href="{{ route('blogs.index') }}"><i data-feather="grid"></i><span>Blogs</span></a></li>
              <li><a class="nav-link" href="{{ route('webinars.index') }}"><i data-feather="grid"></i><span>Webinar</span></a></li>
          </ul>
        </aside>
</div>