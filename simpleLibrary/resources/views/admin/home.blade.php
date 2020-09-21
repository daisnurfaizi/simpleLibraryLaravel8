<!DOCTYPE html>
<html lang="en">
    @include('admin.templates.partials.head')
<body>
    <input type="checkbox" id="check"/>
    {{-- header --}}
    @include('admin.templates.partials.header')
    {{-- end Header --}}
    {{-- sidebar --}}
    <div class="sidebar">
        <div class="profil-info">
            <img src="#" class="profil-image" alt=""/>
            <h4>Admin</h4>
        </div>
        <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href=" #"><i class="far fa-user-circle"></i><span>Profile</span></a>
        <a href="#"><i class="fas fa-bell"></i><span>Notification</span></a>
        <a href="#"><i class="far fa-envelope"></i><span>Messages</span></a>
        <a href="#"><i class="fas fa-tasks"></i><span>Settings</span></a>
    </div>
    {{-- end sidebar --}}
    {{-- content --}}
    <div class="content">
        @yield('content')
    </div>
    {{-- end content --}}
    </body>
</html>