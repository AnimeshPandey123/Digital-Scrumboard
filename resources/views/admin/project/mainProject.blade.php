@extends('layouts.admin')

@section('title')
	Main Projects
@endsection
@section('content')

<div class="project_wrapper">
	<div class="dsb_card dsb_card20">
		<button class="btn dsb_button dsb_button_green">
			Some random button
		</button>
		<span style="float:right;">
			<button class="nobox_button" data-toggle="modal" data-target="#settings_project">
				<i class="fas fa-cog" style="color:#3498db;"></i>
			</button>
			<button class="nobox_button" data-toggle="modal" data-target="#about_project">
				<i class="fas fa-info-circle" style="color:#3498db;"></i>
			</button>
		</span>
	</div>
	<br>
	<h6 class="text-lightgrey">
		<i class="fas fa-chevron-left"></i>&nbsp;
		<b>Project: </b> College Project
	</h6>
	<div class="row" style="margin-top:20px;">
		<div class="col-md-3">
			<div class="dsb_card dsb_card20 dsb_yellow_card">
				<h2 class="text-white bolder">TODO</h2>
				<div class="dsb_cardz" data-target="#edit_task" data-toggle="modal">
					<div class="row">
						<div class="col-md-2">
							<div class="text-center">
								<h2>
									<i class="fas fa-palette ico_gre"></i>
								</h2>
							</div>
						</div>
						<div class="col-md-10" style="border-left:2px solid #cbcbcb;">
							<span style="float:right;font-size:0.8em;">
								<i>15th Dec 2018</i>
							</span><br>
							Complete the design for the frontend part of the Web App <br>
							<span style="float:right;">
								<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_yellow">
							</span>
						</div>
					</div>
				</div>
				<br>
				<div class="dsb_cardz">
					<div class="row">
						<div class="col-md-2">
							<div class="text-center">
								<h2>
									<i class="fas fa-code ico_gre"></i>
								</h2>
							</div>
						</div>
						<div class="col-md-10" style="border-left:2px solid #cbcbcb;">
							<span style="float:right;font-size:0.8em;">
								<i>15th Dec 2018</i>
							</span><br>
							Use HTML CSS along with Bootstrap and complete the frontend part <br>
							<span style="float:right;">
								<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_yellow">
							</span>
						</div>
					</div>
				</div>
				<br>
				<div class="dsb_cardz" style="opacity:0.8;">
					<div class="row">
						<div class="col-md-2">
							<div class="text-center">
								<h2>
									<i class="fas fa-edit ico_gre"></i>
								</h2>
							</div>
						</div>
						<div class="col-md-10" style="border-left:2px solid #cbcbcb;">
							<span style="float:right;font-size:0.8em;">
								<i>show today's date</i>
							</span><br>
							Add a new task<br>
							<span style="float:right;">
								<img src="{{asset('images/plus.jpg')}}" alt="" class="task_peeps peeps_yellow">
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="dsb_card dsb_card20 dsb_blue_card">
				<h2 class="text-white bolder">ONGOING</h2>
				<div class="dsb_cardz">
					<div class="row">
						<div class="col-md-2">
							<div class="text-center">
								<h2>
									<i class="fas fa-comments ico_gre"></i>
								</h2>
							</div>
						</div>
						<div class="col-md-10" style="border-left:2px solid #cbcbcb;">
							<div class="row">
								<div class="col-md-6">
									<div class="progress" style="height:5px;margin-top:5px;">
									  <div class="progress-bar" style="width:40%;height:5px;background-color:#74b9ff;"></div>
									</div>
								</div>
								<div class="col-md-6">
									<span style="float:right;font-size:0.8em;">
										<i>15th Dec 2018</i>
									</span><br>
								</div>
							</div>
							Have a meeting with the Leadership Team regarding salary <br>
							<span style="float:right;">
								<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_blue">
							</span>
						</div>
					</div>
				</div>
				<br>
				<div class="dsb_cardz">
					<div class="row">
						<div class="col-md-2">
							<div class="text-center">
								<h2>
									<i class="fas fa-palette ico_gre"></i>
								</h2>
							</div>
						</div>
						<div class="col-md-10" style="border-left:2px solid #cbcbcb;">
							<div class="row">
								<div class="col-md-6">
									<div class="progress" style="height:5px;margin-top:5px;">
									  <div class="progress-bar" style="width:10%;height:5px;background-color:#74b9ff;"></div>
									</div>
								</div>
								<div class="col-md-6">
									<span style="float:right;font-size:0.8em;">
										<i>15th Dec 2018</i>
									</span><br>
								</div>
							</div>
							Complete the design for the dashboard ASAP <br>
							<span style="float:right;">
								<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_blue">
							</span>
						</div>
					</div>
				</div>
				<br>
				<div class="dsb_cardz">
					<div class="row">
						<div class="col-md-2">
							<div class="text-center">
								<h2>
									<i class="fas fa-vial ico_gre"></i>
								</h2>
							</div>
						</div>
						<div class="col-md-10" style="border-left:2px solid #cbcbcb;">
							<div class="row">
								<div class="col-md-6">
									<div class="progress" style="height:5px;margin-top:5px;">
									  <div class="progress-bar" style="width:90%;height:5px;background-color:#74b9ff;"></div>
									</div>
								</div>
								<div class="col-md-6">
									<span style="float:right;font-size:0.8em;">
										<i>15th Dec 2018</i>
									</span><br>
								</div>
							</div>
							Learn VueJS<br>
							<span style="float:right;">
								<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_blue">
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="dsb_card dsb_card20 dsb_pink_card">
				<h2 class="text-white bolder">TESTING</h2>
				<div class="dsb_cardz">
					<div class="row">
						<div class="col-md-2">
							<div class="text-center">
								<h2>
									<i class="fas fa-check-double ico_gre"></i>
								</h2>
							</div>
						</div>
						<div class="col-md-10" style="border-left:2px solid #cbcbcb;">
							<div class="row">
								<div class="col-md-6">
									<div class="progress" style="height:5px;margin-top:5px;">
									  <div class="progress-bar" style="width:90%;height:5px;background-color:#fd79a8;"></div>
									</div>
								</div>
								<div class="col-md-6">
									<span style="float:right;font-size:0.8em;">
										<i>15th Dec 2018</i>
									</span><br>
								</div>
							</div>
							Finds bugs in the database<br>
							<span style="float:right;">
								<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_pink">
								<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_pink">
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="dsb_card dsb_card20 dsb_green_card">
				<h2 class="text-white bolder">COMPLETED</h2>
				<div class="dsb_cardz">
					<div class="row">
						<div class="col-md-2">
							<div class="text-center">
								<h2>
									<i class="fas fa-palette ico_gre"></i>
								</h2>
							</div>
						</div>
						<div class="col-md-10" style="border-left:2px solid #cbcbcb;">
							<span style="float:right;font-size:0.8em;">
								<i>15th Dec 2018</i>
							</span><br>
							Make the logo for the app <br>
							<span style="float:right;">
								<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_green">
							</span>
						</div>
					</div>
				</div>
				<br>
				<div class="dsb_cardz">
					<div class="row">
						<div class="col-md-2">
							<div class="text-center">
								<h2>
									<i class="fas fa-palette ico_gre"></i>
								</h2>
							</div>
						</div>
						<div class="col-md-10" style="border-left:2px solid #cbcbcb;">
							<span style="float:right;font-size:0.8em;">
								<i>15th Dec 2018</i>
							</span><br>
							Make the low fedility wireframes for the project <br>
							<span style="float:right;">
								<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_green">
							</span>
						</div>
					</div>
				</div>
				<br>
				<div class="dsb_cardz">
					<div class="row">
						<div class="col-md-2">
							<div class="text-center">
								<h2>
									<i class="fas fa-code ico_gre"></i>
								</h2>
							</div>
						</div>
						<div class="col-md-10" style="border-left:2px solid #cbcbcb;">
							<span style="float:right;font-size:0.8em;">
								<i>15th Dec 2018</i>
							</span><br>
							Set up the Laravel Project and upload to Github <br>
							<span style="float:right;">
								<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_green">
							</span>
						</div>
					</div>
				</div>
				<br>
				<div class="dsb_cardz">
					<div class="row">
						<div class="col-md-2">
							<div class="text-center">
								<h2>
									<i class="fas fa-vial ico_gre"></i>
								</h2>
							</div>
						</div>
						<div class="col-md-10" style="border-left:2px solid #cbcbcb;">
							<span style="float:right;font-size:0.8em;">
								<i>15th Dec 2018</i>
							</span><br>
							Learn basic git commands <br>
							<span style="float:right;">
								<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_green">
								<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_green">
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--The Modal Box for About Project-->
    <div id="about_project" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

	        <!-- Modal content-->
	        <div class="modal-content" style="border-radius:0px;">
	            <div class="modal-header" style="height:256px;background:#27ae60;color:#fff;background-image:url('https://images.pexels.com/photos/159657/paint-notebook-brush-pencil-159657.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');background-size:cover;background-repeat:no-repeat;">
	                <h3 class="modal-title"  style="color:#fff;margin-top:180px;">
	                    <i class="fas fa-project-diagram"></i>&nbsp;&nbsp;
	                    About the Project
	                </h3>
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
	            </div>

	            <div class="modal-body" style="color:#444;">
					<div class="text-center">
						<table class="table">
							<tr>
								<td>Owner</td>
								<td>Aakash Raj Dahal</td>
							</tr>
							<tr>
								<td>Member Count</td>
								<td>18</td>
							</tr>
							<tr>
								<td>Total Cards</td>
								<td>58</td>
							</tr>
							<tr>
								<td width="300px;">Description of the project</td>
								<td style="text-align:left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore aperiam fugit consequuntur voluptatibus ex, sint iure in, distinctio sed dolorem aspernatur veritatis repellendus dolorum voluptate, animi libero, officiis eveniet accusamus!</td>
							</tr>
						</table>
					</div>
	            </div>
	            <div class="modal-footer">
	                <button type="button" id="ediScheduleCloseModal" class="btn dsb_button dsb_button_pink" data-dismiss="modal">
	                	<i class="fas fa-times"></i>&nbsp;
	                	Close
	                </button>
	            </div>
	           </div>
        </div>
    </div>

<!--The Modal Box for Creating Project-->
	    <div id="settings_project" class="modal fade" role="dialog">
	        <div class="modal-dialog modal-lg">

		        <!-- Modal content-->
		        <div class="modal-content" style="border-radius:0px;">
		            <div class="modal-header" style="height:256px;background:#27ae60;color:#fff;background-image:url('https://images.pexels.com/photos/190574/pexels-photo-190574.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');background-size:cover;background-repeat:no-repeat;">
		                <h3 class="modal-title"  style="color:#fff;margin-top:180px;">
		                    <i class="fas fa-cog"></i>&nbsp;&nbsp;
		                    Project Settings
		                </h3>
		                <button type="button" class="close" data-dismiss="modal">&times;</button>
		            </div>

		            <div class="modal-body" style="color:#444;margin-top:40px;">
						<div class="text-center">
							<input type="text" class="boxee" placeholder="Project Name"><br><br>
							<input type="text" class="boxee" placeholder="Add Members"><br><br>
							<input type="text" class="boxee" placeholder="Remove Members"><br><br>
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

<!--The Modal Box for Edit Task-->
<div id="edit_task" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content" style="border-radius:0px;">
            <div class="modal-header" style="height:256px;background:#27ae60;color:#fff;background-image:url('https://images.pexels.com/photos/34199/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');background-size:cover;background-repeat:no-repeat;">
                <h3 class="modal-title"  style="color:#fff;margin-top:180px;">
                    <i class="fas fa-edit"></i>&nbsp;&nbsp;
                    Edit Task
                </h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body" style="color:#444;margin-top:40px;">
				<div class="text-center">
					<span style="font-size:0.9em;">Task Type</span><br>
					<div style="font-size:1.5em;">
						<a href="" class="text-lightgrey task_type" data-toggle="tooltip" title="Prototyping">
							<i class="fas fa-th"></i>
						</a>
						<a href="" class="text-lightgrey task_type" data-toggle="tooltip" title="Designing">
							<i class="fas fa-palette"></i>
						</a>
						<a href="" class="text-lightgrey task_type" data-toggle="tooltip" title="Coding">
							<i class="fas fa-code"></i>
						</a>
						<a href="" class="text-lightgrey task_type" data-toggle="tooltip" title="Testing">
							<i class="fas fa-check-double"></i>
						</a>
						<a href="" class="text-lightgrey task_type" data-toggle="tooltip" title="Meeting">
							<i class="fas fa-comments"></i>
						</a>
						<a href="" class="text-lightgrey task_type" data-toggle="tooltip" title="Researching">
							<i class="fas fa-vial"></i>
						</a>
						<a href="" class="text-lightgrey task_type" data-toggle="tooltip" title="Learning">
							<i class="fas fa-book"></i>
						</a>
					</div>
					<br>
					<textarea name="" id="" cols="30" rows="5" class="boxee_text" placeholder="Task Description"></textarea><br><br>
					<input type="text" class="boxee" placeholder="Assign Members"><br><br>
					<input type="text" class="boxee" placeholder="Deadline" onfocus="(this.type='date')">
				</div>
            </div>
            <div class="modal-footer">
            	<button type="button" class="btn dsb_button dsb_button_green" data-dismiss="modal">
                	<i class="fas fa-save"></i>&nbsp;
                	Save
                </button>
                <button type="button" class="btn dsb_button dsb_button_pink" data-dismiss="modal">
                	Cancel
                </button>
            </div>
           </div>
    </div>
</div>

@endsection