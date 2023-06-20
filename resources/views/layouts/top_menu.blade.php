<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-left">
                    <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="float-right">
                    <div class="dropdown">
                        <span class="user-avatar p-5" style="font-size: 16px;">{{ auth()->user()->first_name }} <i
                                class="ti-angle-down f-s-10"></i></span>
                        <div class="dropdown-content">
                            <a href="#">
                                <i class="ti-user"></i>
                                <span>Profile</span>
                            </a>
                            <a href="{{ route('logout') }}">
                                <i class="ti-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
