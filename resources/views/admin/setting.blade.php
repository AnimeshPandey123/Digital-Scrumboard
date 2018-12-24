@extends('layouts.admin')

@section('content')
	<div class="dsb_card dsb_card20" style="margin-top:20px;">
		<!-- Nav pills -->
		<ul class="nav nav-pills" style="color:#005792">
		  <li class="nav-item">
		    <a class="nav-link active" data-toggle="pill" href="#general">
		    	<i class="fas fa-cog"></i>&nbsp;
		    	General
		    </a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="pill" href="#profile">
		    	<i class="fas fa-user"></i>&nbsp;
		    	Profile
		    </a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="pill" href="#notifications">
		    	<i class="fas fa-bell"></i>&nbsp;
		    	Notifications
		    </a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="pill" href="#custom">
		    	<i class="fas fa-brush"></i>&nbsp;
		    	Customization
		    </a>
		  </li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content" style="margin-top:50px;">
		  <div class="tab-pane container active" id="general">
		  	<table class="table table-borderless">
		  		<tr>

		  			<td>
		  				<i class="fas fa-user"></i>&nbsp;
		  				Change Username
		  			</td>
		  			<td>
		  				<input type="text" class="form-control boxee" placeholder="Username" >
		  			</td>
		  		</tr>
		  		<tr>
		  			<td><hr></td>
		  			<td><hr></td>
		  		</tr>
		  		<tr>
		  			<td>
		  				<i class="fas fa-lock"></i>&nbsp;
		  				Chage Password
		  			</td>
		  			<td>
		  				<input type="password" class="form-control boxee" placeholder="Current Password" ><br>
		  				<input type="password" class="form-control boxee" placeholder="New Password" ><br>
		  				<input type="password" class="form-control boxee" placeholder="Confirm Password"><br>
		  			</td>
		  		</tr>
		  		<tr>
		  			<td><hr></td>
		  			<td><hr></td>
		  		</tr>
		  		<tr>
		  			<td>
		  				<i class="fas fa-user-circle"></i>&nbsp;
		  				Linked Profiles
		  			</td>
		  			<td>
		  				<button class="btn btn-danger redbutton">
		  					<i class="fab fa-google"></i>&nbsp;
		  					Disconnect <span style="font-size:0.8em;">"akashrajdahal@gmail.com"</span>
		  				</button><br><br>
		  				<button class="btn btn-info bluebutton">
		  					<i class="fab fa-facebook"></i>&nbsp;
		  					Disconnect <span style="font-size:0.8em;">"Aakash Raj Dahal"</span>
		  				</button>
		  			</td>
		  		</tr>
		  	</table>
		  </div> 
		  <div class="tab-pane container fade" id="profile">...</div>
		  <div class="tab-pane container fade" id="notifications">...</div>
		  <div class="tab-pane container fade" id="custom">...</div>
		</div>
	</div>
@endsection