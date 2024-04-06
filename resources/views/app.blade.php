<!------Header-------------->
@include('layouts.header')
<!------Navbar Content------->
@include('layouts.navbar')
<!------End of Navbar Content------->

@include('layouts.modal._logoutModal')

<!------Sidebar Content------->
@include('layouts.sidebar')
<!------End of Sidebar Content------->

@include('profile.edit')

@yield('content')

@include('layouts.footer')

