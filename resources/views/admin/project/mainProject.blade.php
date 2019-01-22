@extends('layouts.admin')

@section('title')
	Main Projects
@endsection

@section('styles')



<link rel="stylesheet" type="text/css" href="{{asset('css/tagify.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/themes/prism.min.css">

<style type="text/css">
ul {
  list-style-type: none;
  margin: 0; padding: 0;
}
.dsb_card{
	list-style-type: none;
}
.makeTagify{
	text-align: left !important;
	margin-left: 27%;
	height: auto;
}
</style>
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
		<b>Project: </b> <label class="projectName"></label>
	</h6>
	<div class="row" style="margin-top:20px;">
		<div class="col-md-3">
			
			<ul class="dsb_card sortable dsb_card20 dsb_yellow_card" id="todo">
				<h2 class="text-white bolder">TODO</h2>
				
				<li class="sort">
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
								<label>Complete the design for the frontend part of the Web App</label> <br>
								<span style="float:right;">
									<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_yellow">
								</span>
							</div>
						</div>
					</div>
				</li>
				
				<li class="sort notSortable" id="dontSort" position-list="100">
					<br>
				<div class="dsb_cardz" style="opacity:0.8; position: relative;">
					<div class="row">
						<div class="col-md-2">
							<div class="text-center">
								<h2>
									<i class="fas fa-edit ico_gre"></i>
								</h2>
							</div>
						</div>
						<div class="col-md-10" style="border-left:2px solid #cbcbcb;" id="addNewCard">
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
			</li>
			</ul>
			
		</div>
		<div class="col-md-3">
			<ul class="sortContainer">
			<ul class="dsb_card sortable dsb_card20 dsb_blue_card" id="ongoing">
				<h2 class="text-white bolder">ONGOING</h2>
				<li class="sort">
					<br>
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
				</li>
				<br>
				<li class="sort">
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
				</li>
				
				<br>
				<li class="sort">
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
				</li>
				
			</ul>
			</ul>
		</div>
		<div class="col-md-3">
			<ul class="dsb_card sortable dsb_card20 dsb_pink_card" id="testing">
				<h2 class="text-white bolder">TESTING</h2>
				<li class="sort">
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
				</li>
				
			</ul>
		</div>
		<div class="col-md-3">
			<ul class="dsb_card sortable dsb_card20 dsb_green_card" id="completed">
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
			</ul>
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
								<td><label id="ownerName"></label></td>
							</tr>
							<tr>
								<td>Member Count</td>
								<td><label id="memberCount"></label></td>
							</tr>
							<tr>
								<td>Total Cards</td>
								<td><label id="taskCount"></label></td>
							</tr>
							<tr>
								<td width="300px;">Description of the project</td>
								<td style="text-align:left;" class="projectDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore aperiam fugit consequuntur voluptatibus ex, sint iure in, distinctio sed dolorem aspernatur veritatis repellendus dolorum voluptate, animi libero, officiis eveniet accusamus!</td>
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
		        	<form id="settings" action="#">
		            <div class="modal-header" style="height:256px;background:#27ae60;color:#fff;background-image:url('https://images.pexels.com/photos/190574/pexels-photo-190574.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');background-size:cover;background-repeat:no-repeat;">
		                <h3 class="modal-title"  style="color:#fff;margin-top:180px;">
		                    <i class="fas fa-cog"></i>&nbsp;&nbsp;
		                    Project Settings
		                </h3>
		                <button type="button" class="close" data-dismiss="modal">&times;</button>
		            </div>

		            <div class="modal-body" style="color:#444;margin-top:40px;">
						<div class="text-center">
							<input type="text" class="boxee" id="projectName" value="{{$project->name}}" placeholder="Project Name" required><br><br>
							<input name='tags' class='boxee makeTagify' placeholder='write some tags' value='css, html, javascript, css' autofocus><br><br>
							<textarea name="" id="projectDesc" cols="30" rows="5" class="boxee_text" placeholder="Description">{{$project->description}}</textarea><br><br>
							<span style="font-size:0.9em;">Choose Icon</span><br>
							<div id="iconContainer" style="font-size:1.5em;">
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-graduation-cap"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-brain"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-palette"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-ambulance"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-anchor"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-users"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-archive"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-archway"></i>
								</a><br>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-book"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-grin"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-briefcase"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-bullhorn"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-chart-pie"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-bomb"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-carrot"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-feather-alt"></i>
								</a><br>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-fire"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-futbol"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-gift"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-gamepad"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-heart"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-lightbulb"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-paw"></i>
								</a>
								<a href="#" class="iconSelect text-lightgrey">
									<i class="fas fa-shopping-cart"></i>
								</a>	
							</div>
						</div>
		            </div>
		            <div class="modal-footer">
		            	<button type="submit" onclick="settingSubmit()" class="btn dsb_button dsb_button_green">
		                	<i class="fas fa-check"></i>&nbsp;
		                	Done
		                </button>
		                <button type="button" class="btn dsb_button dsb_button_pink" id="settingCancel" data-dismiss="modal">
		                	Cancel
		                </button>
		            </div>
		        </form>
		           </div>
	        </div>
	    </div>

<!--The Modal Box for Edit Task-->
<div id="edit_task" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content" style="border-radius:0px;">
        	<form action="#">
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
						<a href="#" class="text-lightgrey task_type" title="Prototyping">
							<i class="fas fa-th"></i>
						</a>
						<a href="#" class="text-lightgrey task_type" title="Designing">
							<i class="fas fa-palette"></i>
						</a>
						<a href="#" class="text-lightgrey task_type" title="Coding">
							<i class="fas fa-code"></i>
						</a>
						<a href="#" class="text-lightgrey task_type" title="Testing">
							<i class="fas fa-check-double"></i>
						</a>
						<a href="#" class="text-lightgrey task_type" title="Meeting">
							<i class="fas fa-comments"></i>
						</a>
						<a href="#" class="text-lightgrey task_type" title="Researching">
							<i class="fas fa-vial"></i>
						</a>
						<a href="#" class="text-lightgrey task_type" title="Learning">
							<i class="fas fa-book"></i>
						</a>
					</div>
					<br>
					<input type="text" id="taskID" name="id" style="display: none;">
					<textarea id="taskDescription" name="" id="" cols="30" rows="5" class="boxee_text" placeholder="Task Description" required></textarea><br><br>
					<input type="text" class="boxee" placeholder="Assign Members"><br><br>
					<input type="text" id="taskDeadline" class="boxee" placeholder="Deadline" onfocus="(this.type='date')" required>
				</div>
            </div>
            <div class="modal-footer">
            	<button type="button" class="btn dsb_button dsb_button_green" onclick="storeEditedTask()">
                	<i class="fas fa-save"></i>&nbsp;
                	Save
                </button>
                <button type="button" id="taskCancel" class="btn dsb_button dsb_button_pink" data-dismiss="modal">
                	Cancel
                </button>
            </div>
            </form>
           </div>
    </div>
</div>
<div id="create_task" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content" style="border-radius:0px;">
        	<form action="#">
            <div class="modal-header" style="height:256px;background:#27ae60;color:#fff;background-image:url('https://images.pexels.com/photos/34199/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');background-size:cover;background-repeat:no-repeat;">
                <h3 class="modal-title"  style="color:#fff;margin-top:180px;">
                    <i class="fas fa-edit"></i>&nbsp;&nbsp;
                    Create Task
                </h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body" style="color:#444;margin-top:40px;">
				<div class="text-center">
					<span style="font-size:0.9em;">Task Type</span><br>
					<div style="font-size:1.5em;">
						<a href="#" class="text-lightgrey task_type" title="Prototyping">
							<i class="fas fa-th"></i>
						</a>
						<a href="#" class="text-lightgrey task_type" title="Designing">
							<i class="fas fa-palette"></i>
						</a>
						<a href="#" class="text-lightgrey task_type" title="Coding">
							<i class="fas fa-code"></i>
						</a>
						<a href="#" class="text-lightgrey task_type" title="Testing">
							<i class="fas fa-check-double"></i>
						</a>
						<a href="#" class="text-lightgrey task_type" title="Meeting">
							<i class="fas fa-comments"></i>
						</a>
						<a href="#" class="text-lightgrey task_type" title="Researching">
							<i class="fas fa-vial"></i>
						</a>
						<a href="#" class="text-lightgrey task_type" title="Learning">
							<i class="fas fa-book"></i>
						</a>
					</div>
					<br>
					<textarea id="taskDescriptionCreate" name="" id="" cols="30" rows="5" class="boxee_text" placeholder="Task Description" required></textarea><br><br>
					<input type="text" class="boxee" placeholder="Assign Members"><br><br>
					<input type="text" id="taskDeadlineCreate" class="boxee" placeholder="Deadline" onfocus="(this.type='date')" required>
				</div>
            </div>
            <div class="modal-footer">
            	<button type="submit" class="btn dsb_button dsb_button_green" onclick="createTask()">
                	<i class="fas fa-save"></i>&nbsp;
                	Save
                </button>
                <button type="button" id="taskCancelCreate" class="btn dsb_button dsb_button_pink" data-dismiss="modal">
                	Cancel
                </button>
            </div>
            </form>
           </div>
    </div>
</div>
<br><br>

@endsection

@section('scripts')

<script src='https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/prism.min.js'></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" defer></script>
<script type="text/javascript" src="{{asset('js/tagify.min.js')}}" defer></script>
 <script src="{{asset('js/jQuery.tagify.min.js')}}" defer></script>


<script type="text/javascript">
	function checkEmail(inp){
		console.log(inp);
	}	
	// var child = $('#iconContainer').children();
	// INITIALIZING GLOBAL VARIABLES
	var icon;
	var k = 0;
	var prev;
	var iconName;
	var project;
	var taskState;
	var editFlag = 0;
	var iconColor = 'blue';
	var taskPrevIcon;
	var taskNowIcon;
	var taskTitle;
	var taskIcon;
	const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
	var selectElm;

	//creating const object for icons
	const iconObj = {
		'Prototyping': 'fa-th',
		'Designing': 'fa-palette',
		'Coding': 'fa-code',
		'Testing': 'fa-check-double',
		'Meeting': 'fa-comments',
		'Researching': 'fa-vial',
		'Learning': 'fa-book'
	};

	//TO COLOR THE SELECTED ICON OF PROJECT WHEN SETTING MODAL IS OPEN
	$(document).on('shown.bs.modal','#settings_project', function () {
 		 $('.fa-'+icon).css('color', iconColor);
	});

	//HANDLING CLICK EVENT OF ICONS
	 $(document).on('click', '.iconSelect', function(e){

	 	//FOR FIRST TIME
	 	if (k == 0) {
			$('.fa-'+icon).css('color', '');	
	 	}

	 	k++;
	 	//FOR OTHER TIMES
		 if (k > 1) {
		 	prev = i;
		 	//REMOVING COLOR OF PREV ICONS
		 	prev.css('color', '');
		 	k = 1;
		 }
		
		//SELCTING ICON OF THIS ELEMENT
		i = $(this).find("i");
		 
		//GETTING THE ICON CLASS OF THE SELECTED ICON
		iconName = i[0].classList[1].split(/^.*?-/)[1] ;
		 
		 //CHANGING THE COLOR OF SELECTED ICON
		 i.css('color', iconColor);
		 	
	});

 	$(document).ready(function() {
	 	$("#settings").submit(function(e){
	        //PREVENTING THE FORM FROM SUBMITTING 
	        e.preventDefault(e);
	    });

    	//GETTING PROJECT DETAILS
    	getProjectDetails();

	});

 	//GETTING PROJECT DETAILS
 	function getProjectDetails(){
	 	$.ajax({
			type: "get",
			url: "{{ route('project.specific') }}",
			headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			 },
			data: {
			     project_id: {{$project->id}}
			     },    
			 success: function (s){
			 	project = s;
			    console.log(s);
			     icon =  s.icon;
			     iconName = s.icon;
			     //PUTTING THE VALUES IN TO PROJECT DETAILS
			     $('#projectName').val(s.name);
			     $('#projectDesc').val(s.description);	
			     $('.projectName').html(s.name);
			     $('#ownerName').text(s.creator.name);
			     $('#memberCount').text(s.userCount);
			     $('.projectDesc').text(s.description);
			     $('#taskCount').text(s.taskCount);
			     // console.log($('#ownerName'));
			     loadAllTasks(s.id);
			 },
			 error: function(e){
			 	getProjectDetails();
			    toastr.error("Something went wrong!!");
			     // console.log(e);

			    }
			            // $('#'+id).text();
			   });
	}
 
				
	//SUBMITTING THE PROJECT DETAILS TO DB
	function settingSubmit(){
		//GETTING THE VALUES
		let name = $('#projectName').val();
		let description = $('#projectDesc').val();

		//CHECKING IF THERE ARE VALUES
		if (name && iconName) {
			$.ajax({
        		type: "get",
	            url: "{{ route('project.update') }}",
	            headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	            },
	            data: { _token : $('meta[name="csrf-token"]').attr('content'),
	            project_id:project.id, name : name, description: description, icon: iconName 
	            },
	            success: function (s){
	            	removeModal();
	            	getProjectDetails();
	            	toastr.success("Updated!!");
	                // console.log(s);

	            },
	            error: function(e){
	                toastr.error("Something went wrong!!");
	                // console.log(e);

	        }
	            // $('#'+id).text();
	        });
			
			
		}else{
			toastr.error('Please select icon and input name');
		}
	}
	
	//REMOVING THE SETTING MODAL		
	function removeModal(){
		$('#settingCancel').click();
		// $("#settings_project").modal("hide");
		$('.modal').css('overflow-y', 'auto');
		// $('body').removeClass('modal-open');
		$(".modal-backdrop").hide();
	}
		
			
  	
	//SHOWING A MODAL WHEN ADD NEW CARD IS CLICKED
	$(document).on('click', '#addNewCard', function(){
		$('#create_task').modal();
		addNewCard();
	});

	
	var k = 0;

	//FOR ADDING NEW CARD OR TASK
	function addNewCard(){
		//GETTING VALUES OF THE INPUT VALUE
		$('#taskDescriptionCreate').val('');
		$('#taskDeadlineCreate').val('');

		//PREV TASK TITLE IS REMOVED
		taskTitle = '';
		k++;
		//FOR MORE THAN ONE TIME
		if (k > 1) {
			taskPrevIcon = taskNowIcon;
			taskPrevIcon.css('color', '');
			k = 1;
		}

		//WHEN ICON IS CLICKED
		$('.task_type').on('click', function(){
			if (taskNowIcon) {
				taskNowIcon.css('color', '');	
			}
		 	taskNowIcon = $(this).find("i");

		 	//GETTING TITLE OF THE ICON
			taskTitle =taskNowIcon.parent().attr('title');
			taskIcon = taskNowIcon[0].classList[1].split(/^.*?-/)[1] ;
				 	// console.log(icon);
			taskNowIcon.css('color', iconColor);
		});
		
	}

	function createTask(){
		//GETTING INPUT VALUES
		descriptionTask = $('#taskDescriptionCreate').val();
		deadlineTask = $('#taskDeadlineCreate').val();
		created_by = {{auth()->user()->id}};
		positionTask = $('#todo').children().length;
		
		//CHECKING IF THESE INPUTS HAS VALUES
		if (descriptionTask && taskTitle && deadlineTask) {
			//SUBMITTING THE NEWLY CREATED TASK TO SERVER
			$.ajax({
        		type: "get",
	            url: "{{ route('task.store') }}",
	            headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	            },
	            data: { _token : $('meta[name="csrf-token"]').attr('content'),
	            project_id:project.id, title : taskTitle, description: descriptionTask, icon: taskIcon, created_by: created_by, position: positionTask, deadline: deadlineTask
	            },
	            success: function (s){
	            	taskModelClose('Create');
	            	toastr.success("Created!!");
	            	loadSpecificTask(project.id, 'todo');
	                console.log(s);

	            },
	            error: function(e){
	                toastr.error("Something went wrong!!");
	                console.log(e);

	        }
            // $('#'+id).text();
        });
			
		}else{
			toastr.error("Something went wrong!!");
			console.log(taskTitle);
			console.log(positionTask);
			console.log(descriptionTask);
			console.log(deadlineTask);
			console.log(created_by);
		}
	}
			
	// $(document).on('click', '.dsb_cardz', function(){
			
	// 		console.log($(this).parent().index());		
	// 	}
	// );

    // FOR MAKING THE DIVS SORTABLE
    $(document).ready(function(){
    	var sortedIDs = $( ".sortable" ).sortable({
    		items:"li:not(.notSortable)" ,connectWith: ".sortable",
    		 
	        stop: function(){
	        	console.log('stop');
	        },receive: function(event, ui) {
		            // console.log(ui);
		            // console.log(event);
		            // console.log(this.id);
		            console.log('receive');
	        },
	        update: function(event, ui){
	        	console.log(this.id);
	        	updatePosition(this.id);
	        	console.log('update');
	        }
    	},
	    "serialize", { key: "sort" }).disableSelection();
	    	console.log(sortedIDs);
	    	
	});

    //FOR CLOSING MODALS
    function taskModelClose(t=''){
    	$('#taskCancel'+t).click();
    	// console.log($('#taskCancel'+t));
    	$('.modal').css('overflow-y', 'auto');
		// $('body').removeClass('modal-open');
		$(".modal-backdrop").hide();
    }
	
	//FOR OPENING EDIT MODAL
	$(document).on('click', '.sort:not(#dontSort)', function(){
		$('#edit_task').modal();
		editTask(this);
		// console.log(this);
	});

	//FOR TASK EDITING
	function editTask(elem){

		//STORING THE SELECTED ELEMENT
		selectElm = elem;
		taskState = '';

		//GETTING THE PARENT OF SELECTED ELEM TO GET STATE
		taskState = $(elem).parent().attr('id');
		
		//GETTING SELECTED ICON
		let selectedIcon = $(elem).find('.fas');
		// console.log(selectedIcon);

		//GET FAS CLAS AND REMOVING THE COLOR
		$('#edit_task').find('.fas').css('color','');

		//REMOVING THE ALREADY PRESENT VALUE
		$('#taskID').val(' ');

		//STORING THE ID OF THE VAL OF TASK TO THIS INPUT
		$('#taskID').val($(elem).find('.dsb_cardz').attr('id'));
		
		//GETTING THE ICON
		taskNowIcon = $('#edit_task').find('.'+ selectedIcon[0].classList[1]);

		//COLORING IT
		taskNowIcon.css('color',iconColor);

		//GETTING THE DATE
		var date = $(elem).find('span').find('i').html();

		//GETTING THE DATE IN CORRECT FORMAT
		d = getDate(date);

		// PUTTING THE VALUE IN INPUT
		$('#taskDescription').val($(elem).find('label').html());
		$('#taskDeadline')[0].type='date';
		$('#taskDeadline')[0].value = d;
		// console.log($('#taskDeadline'));
		taskTitle = taskNowIcon.parent().attr('title');
		// console.log(elem.id);
		let id = elem.id;

		//HANDLING THE CLICK EVENT OF THE ICONS
		$('.task_type').on('click', function(){
			$('#edit_task').find('.fas').css('color','');
			if (taskNowIcon) {
				// console.log(taskIcon);
				taskNowIcon.css('color', '');
			}
			taskNowIcon = $(this).find("i");
			taskTitle =taskNowIcon.parent().attr('title');
			taskIcon = taskNowIcon[0].classList[1].split(/^.*?-/)[1] ;
			// console.log(taskTitle);
			taskNowIcon.css('color', iconColor);
		});
	}

	//GETTING THE DATE IN CORRECT FORMAT
	function getDate(date){
		//STRING TO ARRAY
		date = date.split(' ');

		//LOOPING THROUGH THE DATE ARRAY
		for (var i = 0; i < date.length; i++) {
			if (i  == 1) {
				let temp = monthNames.indexOf(date[i]) + 1;
				date[i] =  temp < 10 ? '0' + temp: temp;
			}else{

			 date[i] = parseInt(date[i]) < 10? '0' + parseInt(date[i]).toString():  parseInt(date[i]);
			}
		}
		// console.log(date);
		d = date[2] + '-' + date[1] + '-' + date[0];
		return d;
	}

	//LOADING ALL THE TASK IN THE PROJECT
	function loadAllTasks(id){
		$.ajax({
    		type: "get",
            url: "{{ route('task.all') }}",
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { _token : $('meta[name="csrf-token"]').attr('content'),
            		project_id:id
            },
            success: function (s){
            	// console.log(s);
            	//LOOPING THROUGH THE TASKS
            	$.each(s, function(k, v){
            		//PUTTING THE TASKS IN THEIR STATE
            		insertAtIndex(v.state, v.position, v);
            		// if (v.state == 'todo') {
            		// 	// console.log(v.position);
            		// 	insertAtIndex('todo', v.position, v);
            		// }
            		// if (v.state == 'ongoing') {
            		// 	// console.log(v.position);
            		// 	insertAtIndex('ongoing', v.position, v);
            		// }
            	});
            	//SORTING THE DIV
            	checkSort();

            },
            error: function(e){
                toastr.error("Something went wrong!!");
                console.log(e);

        }
            // $('#'+id).text();
        });
	}

	//SORTING THE DIVS ACCORDING TO THEIR POSITION
	function checkSort(){
		let items = $('#todo li');
		items.sort(function(a, b){
		    return +$(a).attr('position-list') - +$(b).attr('position-list');
		});
		    
		items.appendTo('#todo');
		console.log(items);

	}

	//UPDATE THE POSITION AFTER SORTING
	function updatePosition(parentId){
		//SELECTING EACH OF THE LI
		$('#'+parentId + ' li').each(function(i, v){
			let selectedItem = $(v);
			//UPDATING THEIR ATTRIBUTE
			selectedItem.attr('position-list', selectedItem.index());
			// console.log();
			//UPDATING THE POSITION IN DB
			$.ajax({
            		type: "get",
		            url: "{{ route('task.update.position') }}",
		            headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		            },
		            data: { _token : $('meta[name="csrf-token"]').attr('content'),
		            task_id:selectedItem.find('.dsb_cardz').attr('id'), position: selectedItem.index(), state: parentId
		            },
		            success: function (s){
		                console.log(s);

		            },
		            error: function(e){
		                console.log(e);

		        }
		            // $('#'+id).text();
		        });
				
			// console.log(v);
		});
	}

	//INSERTING THE DIVS IN THEIR POSITION
	function insertAtIndex(id, i, v) {
		//GETTING THE DATE
		let date = v.deadline.split('-');

		// console.log(id);
		let th = nth(date[2]);

		//APPENDING IN THE UL
	    $("#"+id).append(`<li position-list="${v.position}" class="sort">
					<br>
				
					<div class="dsb_cardz" id="${v.id}">
						<div class="row">
							<div class="col-md-2">
								<div class="text-center">
									<h2>
										<i class="fas ${iconObj[v.title]} ico_gre"></i>
									</h2>
								</div>
							</div>
							<div class="col-md-10" style="border-left:2px solid #cbcbcb;">
								<span style="float:right;font-size:0.8em;">
									<i>${date[2]}${th} ${date[1]} ${date[0]}</i>
								</span><br>
								<label>${v.description}</label> <br>
								<span style="float:right;">
									<img src="{{asset('images/picture.jpg')}}" alt="asd" class="task_peeps peeps_yellow">
								</span>
							</div>
						</div>
					</div>
				</li>`);
	    // console.log($('#todo').children());
	     // console.log($("#"+id+" > :nth-child(" + (i) + ")"));
	}

	// GETTING THE NTH FOR DATES
	function nth(d) {
	  	if (d > 3 && d < 21) 
	  		return 'th';  
	  	switch (d % 10) 
		{
		    case 1:  return "st";
		    case 2:  return "nd";
		    case 3:  return "rd";
		    default: return "th";
		}
	}


	//LOAD SPECIFIC TASK FROM SPECIFIC STATE
	function loadSpecificTask(id, state){
		//REQUESTING FROM SERVER
		$.ajax({
        		type: "get",
	            url: "{{ route('project.specific.task') }}",
	            headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	            },
	            data: { _token : $('meta[name="csrf-token"]').attr('content'),
	            		project_id:id, state:state
	            },
	            success: function (s){
	            	// console.log(s);
	            	// $("#"+state).empty();
	            	//REMOVING ALL THE LI IN UL
					$("#"+state).find('li').not('#dontSort').remove();
	            	// console.log($("#"+state).find('*').not('h2', '#dontSort'));
					let addNewCard = $('#dontSort');
					// $("#"+state).append('<h2 class="text-white bolder">TODO</h2>');
	            	$.each(s, function(k, v){
	            		//LOOPING THROUGH THE LISTS AND UPDATING IT
	            		insertAtIndex(state, v.position, v);
	            		
	            	});

	            	//SORT DIV
	            	checkSort();

	            	//CHECKING IF STATE IS TODO
	            	if (state == 'todo') {
	            		$("#"+state).append(addNewCard);
	            	}
	            },
	            error: function(e){
	                toastr.error("Something went wrong!!");
	                console.log(e);

	        }
	          
	        });
	}

	function storeEditedTask(){
		//GETTING THE INPUT VALUES
		descriptionTask = $('#taskDescription').val();
		deadlineTask = $('#taskDeadline').val();
		created_by = {{auth()->user()->id}};
		
		let id = $('#taskID').val();
		// console.log(id);
		//CHECKING IF THE INPUT HAVE VALUES
		if (id && descriptionTask && taskTitle && deadlineTask) {
				$.ajax({
            		type: "get",
		            url: "{{ route('task.update') }}",
		            headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		            },
		            data: { _token : $('meta[name="csrf-token"]').attr('content'),
		            project_id:project.id, task_id:id, title : taskTitle, description: descriptionTask, icon: taskIcon, created_by: created_by, deadline: deadlineTask, state: taskState
		            },
		            success: function (s){
		            	taskModelClose();
		            	toastr.success("Created!!");
		            	loadSpecificTask(project.id, taskState);
		                console.log(s);

		            },
		            error: function(e){
		                toastr.error("Something went wrong!!");
		                console.log(e);

		        }
	            // $('#'+id).text();
	        });
			
			
		}else{
			toastr.error("Something went wrong!!");
			console.log(taskTitle);
			console.log(positionTask);
			console.log(descriptionTask);
			console.log(deadlineTask);
			console.log(created_by);
		}		
			
	}


		// console.log(project);
		// setTimeout(function(){ loadSpecificTask('asda', 'todo');}, 3000);

		// loadSpecificTask(project.id, 'todo');
</script>
<script>
    setTimeout(function(){
        Prism.highlightAll();
    }, 500)
</script>


<script type="text/javascript" defer>
	var tagify;
	var input;
	setTimeout(getTagify, 1000);
	$(document).on('ready', function(){
		
	});
	function getTagify(){
	 input = document.querySelector('input[name=tags]'),
    // init Tagify script on the above inputs
    tagify = new Tagify(input, {
        whitelist : ["ani.mesh13578@gmail.com"],
        blacklist : ["/.*/" ],
        keepInvalidTags     : false,
        dropdown : false,
        enforceWhitelist: false
    });

	// // "remove all tags" button event listener
	// document.querySelector('.tags--removeAllBtn')
	//     .addEventListener('click', tagify.removeAllTags.bind(tagify))
	    console.log(tagify);
	// Chainable event listeners
	tagify.on('add', onAddTag)
	      .on('remove', onRemoveTag)
	      .on('input', onInput)
	      .on('invalid', onInvalidTag)
	      .on('click', onTagClick);

}
		

	// tag added callback
	function onAddTag(e){
	    console.log(e.detail.tag);
	    // tagify.removeTag(e.detail.tag);
	    console.log("original input value: ", input.value)
	    // tagify.off('add', onAddTag) // exmaple of removing a custom Tagify event
	}

	// tag remvoed callback
	function onRemoveTag(e){
	    console.log(e.detail);
	    console.log("tagify instance value:", tagify.value);
	}

	// on character(s) added/removed (user is typing/deleting)
	function onInput(e){
	    console.log(e.detail);
	}

	// invalid tag added callback
	function onInvalidTag(e){
	    console.log(e.detail);
	    
	}

	// invalid tag added callback
	function onTagClick(e){
	    console.log(e.detail);
	}
</script>
@endsection