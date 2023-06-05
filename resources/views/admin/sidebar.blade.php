<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active"> <a href="index.html"><i class="fas fa-tachometer-alt"></i> <span>Admin Home Page</span></a> </li>
                <li class="list-divider"></li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ url('/admin/users') }}"> All customers</a></li>
                        <li><a href="{{ url('/admin/users/create') }}"> Add Customer </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ url('/admin/rooms') }}">All Rooms </a></li>
                        <li><a href="edit-room.html"> Edit Rooms </a></li>
                        <li><a href="add-room.html"> Add Rooms </a></li>
                    </ul>
                </li>
                <li><a href="chat.html"><i class="fas fa-comments"></i><span> Chat </span></a></li>
                <li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Announcement </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="blog.html">Announcement </a></li>
                        <li><a href="edit-blog.html">Edit Announcement </a></li>
                        <li><a href="add-blog.html">Add Announcement </a></li>
                    </ul>
                </li>
                <li> <a href="calendar.html"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a> </li>
            </ul>
        </div>
    </div>
</div>
