<!--slider menu-->
    <div class="sidebar-menu">		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="{{ url('admin') }}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		         <li><a href="#"><i class="fa fa-user-plus"></i><span>System Roles</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	<ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="{{ route('roles.index') }}">All Roles</a></li>
			            <li id="menu-academico-boletim" ><a href="{{ route('roles.create') }}">Add Role</a></li>
		             </ul>
		         </li>
		         <li><a href="#"><i class="fa fa-users"></i><span>System Users</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	<ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="{{ route('users.index') }}">All Users</a></li>
			            <li id="menu-academico-boletim" ><a href="{{ route('users.create') }}">Add User</a></li>
		             </ul>
		         </li>
		         <li><a href="maps.html"><i class="fa fa-gear"></i><span>Settings</span></a></li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->