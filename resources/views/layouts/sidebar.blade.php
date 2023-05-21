<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="{{ asset('assets/img/logo/logo.png') }}" alt="" /></a>
            <strong><a href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/logo/logosn.png') }}" alt="" />
                </a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="has-arrow" href="index.html">
                            <span class="educate-icon educate-home icon-wrap"></span>
                            <span class="mini-click-non">Reception</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a href="{{ url('add_patient') }}"><span class="mini-sub-pro">Add Patient</span></a>
                            </li>
                            <li><a href="##"><span class="mini-sub-pro">Patient Card</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span
                                class="educate-icon educate-course icon-wrap"></span> <span
                                class="mini-click-non">Cards</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="{{ url('all-cards') }}"><span class="mini-sub-pro">All
                                        Cards</span></a></li>
                        </ul>
                    </li>
                    {{-- <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span
                                class="educate-icon educate-data-table icon-wrap"></span> <span
                                class="mini-click-non">Data Tables</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Peity Charts" href="static-table.html"><span class="mini-sub-pro">Static
                                        Table</span></a></li>
                            <li><a title="Data Table" href="data-table.html"><span class="mini-sub-pro">Data
                                        Table</span></a></li>
                        </ul>
                    </li> --}}
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><span
                                class="educate-icon educate-pages icon-wrap"></span> <span
                                class="mini-click-non">Patient records</span></a>
                        <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                            <li><a title="Login" href="login.html"><span class="mini-sub-pro">Patients Trends
                                    </span></a></li>
                            <li><a title="Register" href="register.html"><span class="mini-sub-pro">Register</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
