<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> 
		  		<a href="{{ url('/') }}" class="sidebar-icon"> 
		  			<span class="fa fa-bars"></span> 
		  		</a> 
		  		<a href="#"> 
		  			<span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  	</a> 
			</div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="index.html"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li><a href="#"><i class="fa fa-cogs"></i><span>Manage Users</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="{{ route('users.index') }}">All</a></li>
		            <li><a href="{{ route('users.create') }}">Create User</a></li>		            
		          </ul>
		        </li>
		        <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Manage Roles</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-comunicacao-sub" >
		            <li id="menu-mensagens" style="width: 120px" ><a href="{{ route('roles.index') }}">All</a>		              
		            </li>
		            <li id="menu-arquivos" ><a href="{{ route('roles.create') }}">Create Role</a></li>
		          </ul>
		        </li>
		        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Manage Products</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="login.html">All</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="signup.html">Create a Product</a></li>		           
		          </ul>
		        </li>
		         <li><a href="#"><i class="fa fa-shopping-cart"></i><span>Order Management</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	<ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="product.html">Todays order</a></li>
			            <li id="menu-academico-boletim" ><a href="price.html">Pending order</a></li>
			            <li id="menu-academico-boletim" ><a href="price.html">Delivery order</a></li>
		             </ul>
		         </li>
		         <li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Setings</span></a></li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->