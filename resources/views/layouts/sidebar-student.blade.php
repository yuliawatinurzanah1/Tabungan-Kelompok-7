<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">{{ Auth()->user()->usr_name }}</li>

                <li>
                    <a href="{{URL::to('/student')}}">
                        <i class="la la-edit"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                
                <li>
                	<?php

						use App\Saving;

						$saving = Saving::join('students','savings.sav_stu_id','=','students.stu_id')
										  ->join('users','students.stu_usr_id','=','users.usr_id')
										  ->where('students.stu_usr_id',Auth::user()->usr_id);

					?>
                    <a href="{{ URL::to('student/detail/'.$saving->sav_id) }}">
                        <i class="la la-edit"></i>
                        <span> Tabungan Siswa </span>
                    </a>
                </li>

                 <li>
                 	<?php

						use App\Saving_usage;

						$saving_usage = Saving_usage::join('students','saving_usages.usa_stu_id','=','students.stu_id')
										  ->join('users','students.stu_usr_id','=','users.usr_id')
										  ->where('students.stu_usr_id',Auth()->user()->usr_id)->first();

					?>
                    <a href="{{URL::to('student/detail/'.$saving_usage->usa_id)}}">
                        <i class="la la-edit"></i>
                        <span> Pengambilan Tabungan </span>
                    </a>
                </li>


                 <li>
                    <a href="{{URL::to('/student/create-pengambilan')}}">
                        <i class="la la-edit"></i>
                        <span> Ambil Tabungan </span>
                    </a>
                </li>

                <li>
                    <a href="{{URL::to('/student/saldo')}}">
                        <i class="la la-edit"></i>
                        <span> Saldo Tabungan </span>
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
