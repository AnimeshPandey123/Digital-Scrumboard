@extends('layouts.admin')

@section('title')
	Main Projects
@endsection

@section('styles')
<div rel="stylesheet" type="text/css" href="{{asset('css/tagify.css')}}">
<style type="text/css">
ul {
  list-style-type: none;
  margin: 0; padding: 0;
}
.dsb_card{
	list-style-type: none;
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
				
				<li class="sort notSortable" id="dontSort">
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
								<td>58</td>
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
							<input type="text" id="emaiut" class="boxee" onfocusout="checkEmail(this)" placeholder="Add Members"><br><br>
							<input type="text" class="boxee" placeholder="Remove Members"><br><br>
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
					<textarea id="taskDescription" name="" id="" cols="30" rows="5" class="boxee_text" placeholder="Task Description" required></textarea><br><br>
					<input type="text" class="boxee" placeholder="Assign Members"><br><br>
					<input type="text" id="taskDeadline" class="boxee" placeholder="Deadline" onfocus="(this.type='date')" required>
				</div>
            </div>
            <div class="modal-footer">
            	<button type="submit" class="btn dsb_button dsb_button_green" onclick="createTask()">
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
<br><br>

@endsection

@section('scripts')

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" defer></script>


<script type="text/javascript">
	function checkEmail(inp){
		console.log(inp);
	}	
	// var child = $('#iconContainer').children();
	var icon;
	var k = 0;
	var prev;
	var iconName;
	var project;
	const iconObj = {
		'Prototyping': 'fa-th',
		'Designing': 'fa-palette',
		'Coding': 'fa-code',
		'Testing': 'fa-check-double',
		'Meeting': 'fa-comments',
		'Researching': 'fa-vial',
		'Learning': 'fa-book'
	};

	$(document).on('shown.bs.modal','#settings_project', function () {
 		 $('.fa-'+icon).css('color', 'red');
	});

	 $(document).on('click', '.iconSelect', function(e){
	 	if (k == 0) {
			$('.fa-'+icon).css('color', '');	
	 	}

	 	k++;
		 if (k > 1) {
		 	prev = i;
		 	prev.css('color', '');
		 	k = 1;
		 }
		 	// console.log(prev);
		i = $(this).find("i");
		    // console.log(i.className);
		iconName = i[0].classList[1].split(/^.*?-/)[1] ;
		 	// console.log(icon);
		 i.css('color', 'red');
		 	
	});

 $(document).ready(function() {
 	$("#settings").submit(function(e){
               
        e.preventDefault(e);
    });
    getProjectDetails();

	});

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
		     $('#projectName').val(s.name);
		     $('#projectDesc').val(s.description);	
		     $('.projectName').html(s.name);
		     $('#ownerName').text(s.creator.name);
		     $('#memberCount').text(s.userCount);
		     $('.projectDesc').text(s.description);
		     console.log($('#ownerName'));
		     loadAllTasks(s.id);
		 },
		 error: function(e){
		    toastr.error("Something went wrong!!");
		     console.log(e);

		    }
		            // $('#'+id).text();
		   });
 }
 
				

			function settingSubmit(){
			let name = $('#projectName').val();
			let description = $('#projectDesc').val();

			console.log(iconName);
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
		                console.log(s);

		            },
		            error: function(e){
		                toastr.error("Something went wrong!!");
		                console.log(e);

		        }
		            // $('#'+id).text();
		        });
				
				
			}else{
				toastr.error('Please select icon and input name');
			}
		}
				
		function removeModal(){
			$('#settingCancel').click();
			// $("#settings_project").modal("hide");
			$('.modal').css('overflow-y', 'auto');
			// $('body').removeClass('modal-open');
			$(".modal-backdrop").hide();
		}
		
			
  	

		$(document).on('click', '#addNewCard', function(){
			$('#edit_task').modal();
			addNewCard();
		});
		var taskIcon;
		var k = 0;
		var taskPrevIcon;
		var taskNowIcon;
		var taskTitle;

		function addNewCard(){
			$('#taskDescription').val('');
			$('#taskDeadline').val('');
			taskTitle = '';
			k++;
			if (k > 1) {
				taskPrevIcon = taskNowIcon;
				taskPrevIcon.css('color', '');
				k = 1;
			}

			$('.task_type').on('click', function(){
			 	taskNowIcon = $(this).find("i");
				taskTitle =taskNowIcon.parent().attr('title');
				taskIcon = taskNowIcon[0].classList[1].split(/^.*?-/)[1] ;
					 	// console.log(icon);
				taskNowIcon.css('color', 'red');
			});
			
			
		}

		function createTask(){
			descriptionTask = $('#taskDescription').val();
			deadlineTask = $('#taskDeadline').val();
			created_by = {{auth()->user()->id}};
			positionTask = $('#todo').children().length;
			console.log(positionTask);
			if (descriptionTask && taskTitle && deadlineTask) {
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
		            	taskModelClose();
		            	toastr.success("Created!!");
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

		$(document).on('click', '.dsb_cardz', function(){
			
			console.log($(this).parent().index());		
		}
		);

		var input = $('#checkTest')[0];
    // init Tagify script on the above inputs
    $(document).ready(function(){
    	var sortedIDs = $( ".sortable" ).sortable({items:"li:not(.notSortable)" ,connectWith: ".sortable",
    		 
        stop: function(){
        	console.log('stop');
        },receive: function(event, ui) {
	            // console.log(ui);
	            // console.log(event);
	            // console.log(this.id);
	            console.log('receive');
        },
        update: function(){
        	console.log('update');
        }
    },"serialize", { key: "sort" }).disableSelection();
    	console.log(sortedIDs);
    	
	});

    function taskModelClose(){
    	$('#taskCancel').click();
    	$('.modal').css('overflow-y', 'auto');
		// $('body').removeClass('modal-open');
		$(".modal-backdrop").hide();
    }
	
	$(document).on('click', '.dsb_cardz', function(){
		$('#edit_task').modal();
		editTask(this);
		console.log(this);
	});
	const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
	function editTask(elem){
		// console.log($(elem).find('span').find('i').html());
		let selectedIcon = $(elem).find('.fas');
		console.log(elem);
		$('#edit_task').find('.fas').css('color','');
		taskNowIcon = $('#edit_task').find('.'+ selectedIcon[0].classList[1]);
		taskNowIcon.css('color','red');
		var date = $(elem).find('span').find('i').html();
		d = getDate(date);
		// console.log(d);
		$('#taskDescription').val($(elem).find('label').html());
		$('#taskDeadline')[0].type='date';
		$('#taskDeadline')[0].value = d;
		// console.log($('#taskDeadline'));
		taskTitle = taskNowIcon.parent().attr('title');
		console.log(elem.id);
		id = elem.id;
		$('.task_type').on('click', function(){
			if (taskNowIcon) {
				taskNowIcon.css('color', '');
			}
			taskNowIcon = $(this).find("i");
			taskTitle =taskNowIcon.parent().attr('title');
			taskIcon = taskNowIcon[0].classList[1].split(/^.*?-/)[1] ;
			console.log(taskTitle);
			taskNowIcon.css('color', 'red');
		});
	}

	function getDate(date){
		date = date.split(' ');
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
		            	$.each(s, function(k, v){
		            		if (v.state == 'todo') {
		            			// console.log(v.position);
		            			insertAtIndex('todo', v.position, v);
		            		}
		            		if (v.state == 'ongoing') {
		            			// console.log(v.position);
		            			insertAtIndex('ongoing', v.position, v);
		            		}
		            	});

		            },
		            error: function(e){
		                toastr.error("Something went wrong!!");
		                console.log(e);

		        }
		            // $('#'+id).text();
		        });
	}

	function insertAtIndex(id, i, v) {
		let date = v.deadline.split('-');
		// console.log(date);
		let th = nth(date[2]);
	    $("#"+id+" > :nth-child(" + (i) + ")").after(`<li class="sort">
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

	function nth(d) {
	  	if (d > 3 && d < 21) return 'th'; 
			  switch (d % 10) {
			    case 1:  return "st";
			    case 2:  return "nd";
			    case 3:  return "rd";
			    default: return "th";
			  }
		}
</script>
@endsection