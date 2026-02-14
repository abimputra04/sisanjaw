<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h5">Admin</h1>
                <p>Kelompok 1</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
            <li class="{{Request::is('home') ? 'active' : ''}}"><a href="/home"> <i class="icon-home"></i>Home </a></li>
            <li class="{{Request::is('add_food','view_food') ? 'active' : ''}}"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
                        class="icon-windows"></i>Food/Drink</a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="/add_food">Add Food/Drink</a></li>
                    <li><a href="/view_food">View Food/Drink</a></li>
                </ul>
            </li>
            <li class="{{Request::is('orders') ? 'active' : ''}}"><a href="/orders"> <i class="icon-list"></i>Orders</a></li>
            <li class="{{Request::is('reservations') ? 'active' : ''}}"><a href="/reservations"> <i class="icon-new-file"></i>Reservations</a></li>
        
    </nav>
