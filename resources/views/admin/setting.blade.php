@extends('layouts.admin')

@section('content')
	<div class="container">
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
			  				<input type="text" class="boxee" placeholder="Username" >
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
			  				<input type="password" class="boxee" placeholder="Current Password" ><br><br>
			  				<input type="password" class="boxee" placeholder="New Password" ><br><br>
			  				<input type="password" class="boxee" placeholder="Confirm Password"><br>
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
			  				<button class="btn dsb_button dsb_button_pink">
			  					<i class="fab fa-google"></i>&nbsp;
			  					Disconnect <span style="font-size:0.8em;">"akashrajdahal@gmail.com"</span>
			  				</button><br>
			  			</td>
			  		</tr>
			  	</table>
			  </div> 
			  <div class="tab-pane container fade" id="profile">
			  	<div class="text-center">
			  		<img src="{{asset('images/picture.jpg')}}" alt="" class="pro_settings"><br>
					  <a href="#" style="color:#005792;font-size:0.8em;">Change Picture</a><br>
					  <hr>
					  <h6 class="text-lightgrey">Previous pictures</h6>
					  <img src="{{asset('images/picture2.jpg')}}" alt="" class="pro_settings_prev">&nbsp;&nbsp;
					  <img src="{{asset('images/picture3.jpg')}}" alt="" class="pro_settings_prev">&nbsp;&nbsp;
					  <img src="{{asset('images/picture4.jpg')}}" alt="" class="pro_settings_prev">&nbsp;&nbsp;
					  <img src="{{asset('images/picture5.jpg')}}" alt="" class="pro_settings_prev">
			  	</div>
			  </div>
			  <div class="tab-pane container fade" id="notifications">
					<table class="table table-borderless">
						<tr>
							<td>
								<i class="fas fa-asterisk"></i>&nbsp;
								Receive Notifications?</td>
							<td>
								<input type="radio" name="getNotifications" checked>&nbsp;Yes
							</td>
							<td>
								<input type="radio" name="getNotifications">&nbsp;No
							</td>
						</tr>
					</table>
			  </div>
			  <div class="tab-pane container fade" id="custom">
			  	<div class="text-center">
			  		<div class="row">
			  			<div class="col-md-6">
			  				<div class="light">
			  					<div class="purp"></div>
			  					<div class="row">
			  						<div class="col-md-6">
			  							<div class="purp"></div>
			  							<div class="purp"></div>
			  							<div class="purp"></div>
			  							<div class="purp"></div>
			  						</div>
			  						<div class="col-md-6">
			  							<div class="purp" style="height:85px;"></div>
			  						</div>
			  					</div>
			  					<div class="purp"></div>
			  				</div>
			  			</div>
			  			<div class="col-md-6">
			  				<div class="dark">
			  					<div class="purpa"></div>
			  					<div class="row">
			  						<div class="col-md-6">
			  							<div class="purpa"></div>
			  							<div class="purpa"></div>
			  							<div class="purpa"></div>
			  							<div class="purpa"></div>
			  						</div>
			  						<div class="col-md-6">
			  							<div class="purpa" style="height:85px;"></div>
			  						</div>
			  					</div>
			  					<div class="purpa"></div>
			  				</div>
			  			</div>
			  		</div>
			  		<br>
			  		<div class="row">
			  			<div class="col-md-6">
			  				Light Theme (Current)
			  			</div>
			  			<div class="col-md-6">
			  				Dark Theme 
			  				<button class="btn btn-sm btn-info bluebutton" style="margin-left:40px;">
			  					<i class="fas fa-check"></i>&nbsp;
			  					Apply
			  				</button>
			  			</div>
			  		</div>
			  	</div>
			  </div>
			</div>
		</div>
	</div>
@endsection