<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{ url('dashboard') }}">
                        <!-- <img src="images/logo.png" alt="" /> --><span>Staff Monitor</span>
                    </a></div>
                <li class="label">Main</li>
                <li><a href="{{ url('dashboard') }}"><i class="ti-home"></i> Dashboard</a></li>

                <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i> Reception <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ url('all-patients') }}">All Patients</a></li>
                        <li><a href="{{ url('add-patients') }}">Add Patients</a></li>
                        <li><a href="{{ url('today-patient-cards') }}">Today Patient Cards</a></li>
                        <li><a href="{{ url('all-cards') }}">All Cards</a>
                    </ul>
                </li>
                <li><a href="{{ url('patient-card-records') }}"><i class="ti-bar-chart-alt"></i> Patients Records</a></li>

            </ul>
        </div>
    </div>
</div>
