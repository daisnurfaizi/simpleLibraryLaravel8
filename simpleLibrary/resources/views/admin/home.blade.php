<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <input type="checkbox" id="check"/>
    {{-- header --}}
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar-btn"></i>
        </label>
        <div class="left-area">
            <h3>Library <span>Simple</span></h3>
        </div>
        <div class="right-class">
            <a href="#" class="logout-btn">Logout</a>
        </div>
    </header>
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
    </body>
</html>