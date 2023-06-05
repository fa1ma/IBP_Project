<div class="header">
    <div class="header-left">
        <a href="index.html" class="logo"> <img src="dashbaord_hotel/assets/img/hotel_logo.jpeg" width="50" height="70" alt="logo">  </a>
        <a href="index.html" class="logo logo-small"> <img src="dashbaord_hotel/assets/img/hotel_logo.png" alt="Logo" width="30" height="30"> </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
    <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
    <ul class="nav user-menu">

        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><h8>User A</h8></a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="user-text">
                        <h6>User A</h6>
                        <p class="text-muted mb-0">User</p>
                    </div>
                </div> <a class="dropdown-item" href="profile.html">My Profile</a>  <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a> </div>
        </li>
    </ul>
    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>
