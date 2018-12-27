@extends('layouts.admin')

@section('content')
	<div class="container">
		<h6 class="text-lightgrey">
			Recent Projects
		</h6>
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-4">
						<div class="dsb_card">
						  <div class="card-body dsb_blue_card">
						  	<div class="text-center centerpox"> 
						  		<i class="fas fa-graduation-cap bigicon align-middle"></i>
						  	</div>
						  </div> 
						  <div class="card-footer">College Project</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="dsb_card">
						  <div class="card-body dsb_green_card">
						  	<div class="text-center centerpox"> 
						  		<i class="fas fa-brain bigicon align-middle"></i>
						  	</div>
						  </div> 
						  <div class="card-footer">Mind Map</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="dsb_card">
						  <div class="card-body dsb_pink_card">
						  	<div class="text-center centerpox"> 
						  		<i class="fas fa-palette bigicon align-middle"></i>
						  	</div>
						  </div> 
						  <div class="card-footer">Designer's Club</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dsb_card dsb_card20 dsb_primary_card">
					<div class="text-center">
						<button class="btn" style="background:none;color:#fff;border:2px solid #ecf0f1;border-radius:100px;padding:5px 25px;" data-toggle="modal" data-target="#create_project">
							<i class="fas fa-plus"></i>&nbsp;
							Create New
						</button>
					</div>
				</div>
			</div>
		</div>
		
		<br><br>
		<h6 class="text-lightgrey" style="margin-top: 20px;">
			All Projects
		</h6>
		<div class="dsb_card dsb_card40">
			<table class="table" style="font-size:0.9em;">
				<thead>
					<tr style="font-weight:600;color:#005792;">
						<td>Project Name</td>
						<td>Members</td>
						<td>Your Tasks</td>
						<td>Progress</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<a href="#">
								<i class="fas fa-graduation-cap"></i>&nbsp;College Project
							</a>
						</td>
						<td>17</td>
						<td>58</td>
						<td>
							<div class="progress" style="height:5px;margin-top:3px;">
							  <div class="progress-bar" style="width:40%;height:5px;background:#005792;"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<a href="#">
								<i class="fas fa-brain"></i>&nbsp;Mind Map
							</a>
						</td>
						<td>7</td>
						<td>5</td>
						<td>
							<div class="progress" style="height:5px;margin-top:3px;">
							  <div class="progress-bar" style="width:10%;height:5px;background:#005792;"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<a href="#">
								<i class="fas fa-palette"></i>&nbsp;Designer's Club
							</a>
						</td>
						<td>170</td>
						<td>72</td>
						<td>
							<div class="progress" style="height:5px;margin-top:3px;">
							  <div class="progress-bar" style="width:85%;height:5px;background:#005792;"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<a href="#">
								<i class="fas fa-book"></i>&nbsp;Book Club
							</a>
						</td>
						<td>8</td>
						<td>1</td>
						<td>
							<div class="progress" style="height:5px;margin-top:3px;">
							  <div class="progress-bar" style="width:85%;height:5px;background:#005792;"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<a href="#">
								<i class="fas fa-book"></i>&nbsp;Library Mangment Project
							</a>
						</td>
						<td>8</td>
						<td>1</td>
						<td>
							<div class="progress" style="height:5px;margin-top:3px;">
							  <div class="progress-bar" style="width:55%;height:5px;background:#005792;"></div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<hr>
		</div>
	</div>



	<!--The Modal Box for Creating Project-->
	    <div id="create_project" class="modal fade" role="dialog">
	        <div class="modal-dialog modal-lg">

		        <!-- Modal content-->
		        <div class="modal-content" style="border-radius:0px;">
		            <div class="modal-header" style="height:256px;background:#27ae60;color:#fff;background-image:url('https://images.pexels.com/photos/267569/pexels-photo-267569.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');background-size:cover;background-repeat:no-repeat;">
		                <h3 class="modal-title"  style="color:#fff;margin-top:180px;">
		                    <i class="fas fa-plus"></i>&nbsp;&nbsp;
		                    Create a new Project
		                </h3>
		                <button type="button" class="close" data-dismiss="modal">&times;</button>
		            </div>

		            <div class="modal-body" style="color:#444;margin-top:40px;">
						<div class="text-center">
							<input type="text" class="boxee" placeholder="Project Name"><br><br>
							<input type="text" class="boxee" placeholder="Add Members"><br><br>
							<textarea name="" id="" cols="30" rows="5" class="boxee_text" placeholder="Description"></textarea><br><br>
							<span style="font-size:0.9em;">Choose Icon</span><br>
							<div style="font-size:1.5em;">
								<a href="" class="text-lightgrey">
									<i class="fas fa-graduation-cap"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-brain"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-palette"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-ambulance"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-anchor"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-users"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-archive"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-archway"></i>
								</a><br>
								<a href="" class="text-lightgrey">
									<i class="fas fa-book"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-grin"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-briefcase"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-bullhorn"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-chart-pie"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-bomb"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-carrot"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-feather-alt"></i>
								</a><br>
								<a href="" class="text-lightgrey">
									<i class="fas fa-fire"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-futbol"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-gift"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-gamepad"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-heart"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-lightbulb"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-paw"></i>
								</a>
								<a href="" class="text-lightgrey">
									<i class="fas fa-shopping-cart"></i>
								</a>	
							</div>
						</div>
		            </div>
		            <div class="modal-footer">
		            	<button type="button" class="btn dsb_button dsb_button_green" data-dismiss="modal">
		                	<i class="fas fa-check"></i>&nbsp;
		                	Done
		                </button>
		                <button type="button" class="btn dsb_button dsb_button_pink" data-dismiss="modal">
		                	Cancel
		                </button>
		            </div>
		           </div>
	        </div>
	    </div>

	
@endsection