<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Admin</li>

                <li>
                    <a href="{{URL::to('/admin')}}">
                        <i class="la la-edit"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                
                <li>
                    <a href="{{URL::to('/admin/list-teacher')}}">
                        <i class="la la-edit"></i>
                        <span> Kelola Walikelas </span>
                    </a>
                </li>

                 <li>
                    <a href="{{URL::to('/admin/list-class')}}">
                        <i class="la la-edit"></i>
                        <span> Kelola Kelas </span>
                    </a>
                </li>

                 <li>
                    <a href="{{URL::to('/admin/list-student')}}">
                        <i class="la la-edit"></i>
                        <span> Kelola Siswa </span>
                    </a>
                </li>
                

				<li>
					 <a href="{{ route('logout') }}" class="dropdown-item notify-item" 
               			 onclick="event.preventDefault();
               			 document.getElementById('logout-form').submit();">
                    		<i class="fe-log-out"></i>
                    		<span>Logout</span>
               		 </a>

                		 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                		    @csrf
                		</form>
				</li>                

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
