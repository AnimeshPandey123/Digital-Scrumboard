@extends('layouts.admin')

@section('content')
	<div class="container">
		<!--The Modal Box for Creating Project-->
	    <div id="create_project" class="modal fade" role="dialog">
	        <div class="modal-dialog modal-lg">

		        <!-- Modal content-->
		        <div class="modal-content" style="border-radius:0px;">
		        	<form id="formCreate" action="#">
		            <div class="modal-header" style="height:256px;background:#27ae60;color:#fff;background-image:url('https://images.pexels.com/photos/267569/pexels-photo-267569.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');background-size:cover;background-repeat:no-repeat;">
		                <h3 class="modal-title"  style="color:#fff;margin-top:180px;">
		                    <i class="fas fa-plus"></i>&nbsp;&nbsp;
		                    Create a new Project
		                </h3>
		                <button type="button" class="close" data-dismiss="modal">&times;</button>
		            </div>

		            <div class="modal-body" style="color:#444;margin-top:40px;">

						<div class="text-center">
							<input type="text" id="name" class="boxee" placeholder="Project Name" required><br><br>
							<input id='tags' type="email" class='boxee makeTagify' placeholder='Add user by email' autofocus><br><br>
							<textarea name="" id="description" id="" cols="30" rows="5" class="boxee_text" placeholder="Description(optional)"></textarea><br><br>
							<span style="font-size:0.9em;">Choose Icon</span><br>
							<div style="font-size:1.5em;">
								<a href="#" class="text-lightgrey selectIcon">
									<i id="as" class="fas fa-graduation-cap"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-brain"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-palette"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-ambulance"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-anchor"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-users"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-archive"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-archway"></i>
								</a><br>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-book"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-grin"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-briefcase"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-bullhorn"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-chart-pie"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-bomb"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-carrot"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-feather-alt"></i>
								</a><br>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-fire"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-futbol"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-gift"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-gamepad"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-heart"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-lightbulb"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-paw"></i>
								</a>
								<a href="#" class="text-lightgrey selectIcon">
									<i class="fas fa-shopping-cart"></i>
								</a>	
							</div>
						</div>
		            </div>
		            <div class="modal-footer">
		            	<button onclick="getAllinput()" type="submit" class="btn dsb_button dsb_button_green" >
		                	<i class="fas fa-check"></i>&nbsp;
		                	Done
		                </button>
		                <button type="button" id="cancel" class="btn dsb_button dsb_button_pink" data-dismiss="modal">
		                	Cancel
		                </button>
		            </div>
		            </form>
		           </div>
	        </div>
	    </div>
		<h6 class="text-lightgrey">
			Dashboard
		</h6>
		<div class="row" style="font-size:0.9em;">
			<div class="col-md-8">
				<div class="dsb_card dsb_card20 desh" id="taskUpper">
					<div class="row">
						<div class="col-md-6">
							<h6 class="text-white">
								Tasks
							</h6>
							{{--<div class="dsb_cardz">
																						<div class="row">
																							<div class="col-md-2">
																								<div class="text-center">
																									<h2>
																										<i class="fas fa-palette ico_gre"></i>
																									</h2>
																								</div>
																							</div>
																							<div class="col-md-10">
																								<span style="float:right;font-size:0.8em;">
																									<i>15th Dec 2018</i>
																								</span><br>
																								<label>Complete the design for the frontend part of the Web App</label> <br>
																								<span style="float:right;">
																									<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_yellow peeps_dashboard">
																								</span>
																							</div>
																						</div>
																					</div><br>
																					<div class="dsb_cardz">
																						<div class="row">
																							<div class="col-md-2">
																								<div class="text-center">
																									<h2>
																										<i class="fas fa-palette ico_gre"></i>
																									</h2>
																								</div>
																							</div>
																							<div class="col-md-10">
																								<span style="float:right;font-size:0.8em;">
																									<i>15th Dec 2018</i>
																								</span><br>
																								<label>Complete the design for the frontend part of the Web App</label> <br>
																								<span style="float:right;">
																									<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_yellow peeps_dashboard">
																								</span>
																							</div>
																						</div>
																					</div><br>
																					<div class="dsb_cardz">
																						<div class="row">
																							<div class="col-md-2">
																								<div class="text-center">
																									<h2>
																										<i class="fas fa-palette ico_gre"></i>
																									</h2>
																								</div>
																							</div>
																							<div class="col-md-10">
																								<span style="float:right;font-size:0.8em;">
																									<i>15th Dec 2018</i>
																								</span><br>
																								<label>Complete the design for the frontend part of the Web App</label> <br>
																								<span style="float:right;">
																									<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_yellow peeps_dashboard">
																								</span>
																							</div>
																						</div>
																					</div>--}}
						</div>
						<div class="col-md-6">
							<h6 class="text-white">
								&nbsp;
							</h6>
							{{--<div class="dsb_cardz">
																							<div class="row">
																								<div class="col-md-2">
																									<div class="text-center">
																										<h2>
																											<i class="fas fa-palette ico_gre"></i>
																										</h2>
																									</div>
																								</div>
																								<div class="col-md-10">
																									<span style="float:right;font-size:0.8em;">
																										<i>15th Dec 2018</i>
																									</span><br>
																									<label>Complete the design for the frontend part of the Web App</label> <br>
																									<span style="float:right;">
																										<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_yellow peeps_dashboard">
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
																									<div class="col-md-10">
																										<span style="float:right;font-size:0.8em;">
																											<i>15th Dec 2018</i>
																										</span><br>
																										<label>Complete the design for the frontend part of the Web App</label> <br>
																										<span style="float:right;">
																											<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_yellow peeps_dashboard">
																										</span>
																									</div>
																								</div>
																							</div><br>
																							<div class="dsb_cardz">
																									<div class="row">
																										<div class="col-md-2">
																											<div class="text-center">
																												<h2>
																													<i class="fas fa-palette ico_gre"></i>
																												</h2>
																											</div>
																										</div>
																										<div class="col-md-10">
																											<span style="float:right;font-size:0.8em;">
																												<i>15th Dec 2018</i>
																											</span><br>
																											<label>Complete the design for the frontend part of the Web App</label> <br>
																											<span style="float:right;">
																												<img src="{{asset('images/picture.jpg')}}" alt="" class="task_peeps peeps_yellow peeps_dashboard">
																											</span>
																										</div>
																									</div>
																							</div>--}}
						</div>
					</div>
				</div>	
				<br>
				<h6 class="text-lightgrey">
					Your Projects
				</h6>	
				<div class="row" id="recentProjects">
					@foreach($projects as $project)
					<a href="{{route('project.main',['project_id' => $project->id])}}" class="col-md-4">
						<div class="dsb_card">
						  <div class="card-body {{$project->color}}">
						  	<div class="text-center centerpox"> 
						  		<i class="fas fa-graduation-cap bigicon align-middle"></i>
						  	</div>
						  </div> 
						  <div class="card-footer">{{$project->name}}</div>
						</div>
						<br>
					</a>
					<br>
					@endforeach
					<div class="col-md-4" id="createProject" >
						<div class="dsb_card" data-toggle="modal" data-target="#create_project">
						  <div class="card-body dsb_grey_card">
						  	<div class="text-center centerpox">
						  		<i class="fas fa-plus bigicon"></i>
						  	</div>
						  </div> 
						  <div class="card-footer">Create New</div>
						</div>
					</div>
				</div>	
				<br>
				<div class="row">
					
				</div>	
			</div>
			<div class="col-md-4">
					<div class="dsb_card dsb_card20 dsb_primary_card">
						<span class="text-white" style="font-size:1.1em;">Recents</span>
						<div class="cardz" style="font-size:1em;" id="recents">
							<div class="dsb_cardz">
								<i>
									<span style="float:right;">
										15th Dec
									</span>
								</i>
								<table class="table table-sm table-borderless">
									<tr>
										<td>
											<img src="{{asset('images/picture.jpg')}}" alt="" class="rec_pic">
										</td>
										<td>
											<b class="text-theme">Melissa Willaims</b><br> completed 2 tasks in <b class="text-theme">College Project</b>
										</td>
									</tr>
								</table>
							</div>
							<br>
							<div class="dsb_cardz">
								<i>
									<span style="float:right;">
										15th Dec
									</span>
								</i>
								<table class="table table-sm table-borderless">
									<tr>
										<td>
											<img src="{{asset('images/picture.jpg')}}" alt="" class="rec_pic">
										</td>
										<td>
											<b class="text-theme">Melissa Willaims</b><br> completed 5 tasks in <b class="text-theme">Mind Map</b>
										</td>
									</tr>
								</table>
							</div>
							<br>
							<div class="dsb_cardz">
								<i>
									<span style="float:right;">
										15th Dec
									</span>
								</i>
								<table class="table table-sm table-borderless">
									<tr>
										<td>
											<img src="{{asset('images/picture.jpg')}}" alt="" class="rec_pic">
										</td>
										<td>
											<b class="text-theme">Melissa Willaims</b><br> created a new project <b class="text-theme">DotA Team</b> and added 17 memebers
										</td>
									</tr>
								</table>
							</div>
							<br>
							<div class="dsb_cardz">
								<i>
									<span style="float:right;">
										15th Dec
									</span>
								</i>
								<table class="table table-sm table-borderless">
									<tr>
										<td>
											<img src="{{asset('images/picture.jpg')}}" alt="" class="rec_pic">
										</td>
										<td>
											<b class="text-theme">Melissa Willaims</b><br> created a new project <b class="text-theme">Reddit Nepal Mod</b> and added 3 memebers
										</td>
									</tr>
								</table>
							</div>
							<br>
							<div class="dsb_cardz">
								<i>
									<span style="float:right;">
										15th Dec
									</span>
								</i>
								<table class="table table-sm table-borderless">
									<tr>
										<td>
											<img src="{{asset('images/picture.jpg')}}" alt="" class="rec_pic">
										</td>
										<td>
											<b class="text-theme">Melissa Willaims</b><br> archived 25 tasks in <b class="text-theme">College Project</b>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>

@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/themes/prism.min.css">

<link rel="stylesheet" type="text/css" href="{{asset('css/tagify.css')}}">
<style type="text/css">
	.makeTagify{
		text-align: left !important;
		margin-left: 27%;
		height: auto;
	}
	.modal { overflow: auto !important; }
</style>
@endsection
@section('scripts')

<script src='https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/prism.min.js'></script>
<script type="text/javascript" src="{{asset('js/tagify.min.js')}}" defer></script>
 <script src="{{asset('js/jQuery.tagify.min.js')}}" defer></script>
<script type="text/javascript">
	var colorCodeClass = {
		'ongoing': 'peeps_blue',
		'todo': 'peeps_yellow',
		'testing': 'peeps_pink',
		'completed': 'peeps_green'
	};
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

	$(window).on('load', function(){
		getTasks();
	});

	function getTasks(){
		console.log($('#taskUpper').children('.row').not('h6').children());
		$('#taskUpper').children('.row').children().empty();
		$($('#taskUpper').children('.row').children()[0]).append(`<h6 class="text-white">
								Tasks
							</h6>`);
		$($('#taskUpper').children('.row').children()[1]).append(`<h6 class="text-white">
								&nbsp;
							</h6>`);
		$.ajax({
			type: "get",
			url: "{{ route('user.tasks.recent') }}",
			headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			 },
			   
			 success: function (s){
			 	let task = $('#taskUpper').children('.row');

			 	$.each(s, function(i, v){

			 		if (i%2 == 0) {
			 			$(task.children()[0]).append(`<div class="dsb_cardz" id="${v.id}">
								<div class="row">
									<div class="col-md-2">
										<div class="text-center">
											<h2>
												<i class="fas ${iconObj[v.title]} ico_gre"></i>
											</h2>
										</div>
									</div>
									<div class="col-md-10">
										<span style="float:right;font-size:0.8em;">
											<i>${v.deadline}</i>
										</span><br>
										<label>${v.description}</label> <br>
										<span class="image" style="float:right;">
											
										</span>
									</div>
								</div>
							</div><br>`);
			 			for (var i = 0; i < v.users.length; i++) {
	    					$('#'+v.id).find('.image').append('<img src="'+v.users[i].image+'" alt="asd" class="task_peeps peeps_yellow peeps_dashboard">');
	    				}
			 		}else{
						$(task.children()[1]).append(`<div class="dsb_cardz" id="${v.id}">
								<div class="row">
									<div class="col-md-2">
										<div class="text-center">
											<h2>
												<i class="fas ${iconObj[v.title]} ico_gre"></i>
											</h2>
										</div>
									</div>
									<div class="col-md-10">
										<span style="float:right;font-size:0.8em;">
											<i>${v.deadline}</i>
										</span><br>
										<label>${v.description}</label> <br>
										<span class="image" style="float:right;">
											
										</span>
									</div>
								</div>
							</div><br>`);
			 			for (var i = 0; i < v.users.length; i++) {
	    					$('#'+v.id).find('.image').append('<img src="'+v.users[i].image+'" alt="asd" class="task_peeps peeps_yellow peeps_dashboard">');
	    				}
	    			}
			 	});
			 	console.log(s);
			 },
			 error: function(e){
			 	getProjectDetails();
			    toastr.error("Something went wrong!!");
			     // console.log(e);

			    }
			            // $('#'+id).text();
			   });
	}
	getRecent();
	function getRecent(){
		let recent = $('#recents');
		recent.empty(' ');
		$.ajax({
			type: "get",
			url: "{{ route('user.recent.recent') }}",
			headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			 },
			 success: function (s){ 	
			 	console.log(s);
			 	console.log(s.created_project);
			 	$.each(s['created_project'], function(i, v){
			 		if (v) {
			 			// console.log(v);
			 			if (v.userCount > 0) {
							str = 'and added ' +v.userCount+ ' memebers';
			 			}else{
			 				 str = '';
			 			}
			 			
			 			recent.append(` <div class="dsb_cardz">
								<i>
									<span style="float:right;">
										${v.created_at}
									</span>
								</i>
								<table class="table table-sm table-borderless">
									<tr>
										<td>
											<img src="{{auth()->user()->image}}" alt="" class="rec_pic">
										</td>
										<td>
											<b class="text-theme">{{auth()->user()->name}}</b><br> created a new project <b class="text-theme">${v.name}</b> ${str}
										</td>
									</tr>
								</table>
							</div><br>`);
			 		}
			 		
			 	});
			 	$.each(s['task_completed'], function(i, v){
			 		if (v) {
			 			console.log(v);
			 			if (v.userCount > 0) {
							str = 'and added ' +v.userCount+ ' memebers';
			 			}else{
			 				 str = '';
			 			}

			 			if (i != 'date') {
			 				recent.append(` <div class="dsb_cardz">
								<i>
									<span style="float:right;">
										${s['task_completed']['date']}
									</span>
								</i>
								<table class="table table-sm table-borderless">
									<tr>
										<td>
											<img src="{{auth()->user()->image}}" alt="" class="rec_pic">
										</td>
										<td>
											 <b class="text-theme">{{auth()->user()->name}}s</b><br> completed ${v.length} tasks in <b class="text-theme">${i}</b>
										</td>
									</tr>
								</table>
							</div><br>`);

			 			}
			 		}
			 		
			 	});
			 	// console.log(s);
			 },
			 error: function(e){
			    toastr.error("Something went wrong!!");
			     // console.log(e);

			    }
			            // $('#'+id).text();
			   });
	}
</script>
<script type="text/javascript">
	var newProjectUsers = [];
		$(document).ready(function() {
		 	// $('#allProjects').tablesorter();
            //option A
            $("#formCreate").submit(function(e){
               
                e.preventDefault(e);
            });
        });

		 var icon = "";
		 var i;
		 var prev;
		
		 var k = 0;
		 $(document).on('click', '.selectIcon', function(){
		 	k++;
		 	if (k > 1) {
		 		prev = i;
		 		prev.css('color', '');
		 		k = 1;
		 	}
		 	// console.log(prev);
		    i = $(this).find("i");
		    // console.log(i.className);
		 	icon = i[0].classList[1].split(/^.*?-/)[1] ;
		 	// console.log(icon);
		 	i.css('color', '#00204a');
		 	
		 });
		 
		function getAllinput(){
			let name = $('#name').val();
			let description = $('#description').val();

			// console.log(description);
			if (name && icon) {
				$.ajax({
            		type: "get",
		            url: "{{ route('project.store') }}",
		            headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		            },
		            data: { _token : $('meta[name="csrf-token"]').attr('content'),
		            name : name, description: description, icon: icon, emails: newProjectUsers 
		            },
		            success: function (s){
		            	removeModal();
		            	clearInput();
		            	getRecentProjects();
		                console.log(s);
		                toastr.success("Project Created");

		            },
		            error: function(e){
		                toastr.error("Something went wrong!!");
		                console.log(e);

		        }
		            // $('#'+id).text();
		        });
				
				
			}
		}
		function clearInput(){
			$('#name').val(' ');
			$('#description').val(' ');
			icon = '';
			i.css('color', '');
			console.log(tagify);
			tagify.removeAllTags();
			newProjectUsers.length = 0;
		}
		

		function removeModal(){
			$('#cancel').click();
			$("#create_project").modal("hide");
			$(".modal").modal("hide");
			$('body').removeClass('modal-open');
			$(".modal-backdrop").remove();
		}

		function getRecentProjects(){
				let createNew = $('#createProject')[0].outerHTML;
				$.ajax({
            		type: "get",
		            url: "{{ route('project.recent.get') }}",
		            headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		            },
		            data: { _token : $('meta[name="csrf-token"]').attr('content'),
		            	limit : 5
		            },
		            success: function (s){
		            	// console.log(createNew[0].outerHTML);
		            	$('#recentProjects').find('*').remove();
		            	$.each(s, function(i, v){
		            		$('#recentProjects').append(`
		            			<a href="/admin/project/main/${v.id}" class="col-md-4">
						<div class="dsb_card">
						  <div class="card-body ${v.color}">
						  	<div class="text-center centerpox"> 
						  		<i class="fas fa-graduation-cap bigicon align-middle"></i>
						  	</div>
						  </div> 
						  <div class="card-footer">${v.name}</div>
						</div>
						<br>
					</a>
		            			`);
		            	});
		            	// console.log(createNew[0].outerHTML);
		            	$('#recentProjects').append(createNew)
		            },
		            error: function(e){
		                toastr.error("Something went wrong!!");
		                console.log(e);

		        }
		            // $('#'+id).text();
		      });
				
				
		}
		
</script>
	<script type="text/javascript" defer>
		var tagify;
		var input;
		setTimeout(getTagify, 1000);
		$(document).on('ready', function(){
			
		});
		function getTagify(){
		 input = document.querySelector('input[id=tags]'),
	    // init Tagify script on the above inputs
	    tagify = new Tagify(input, {
	        whitelist : [],
	        blacklist : [],
	        keepInvalidTags     : false,
	        dropdown : false,
	        enforceWhitelist: false
	    });

		// // "remove all tags" button event listener
		// document.querySelector('.tags--removeAllBtn')
		//     .addEventListener('click', tagify.removeAllTags.bind(tagify))
		// console.log(tagify);
		// Chainable event listeners
		tagify.on('add', onAddTag)
		      .on('remove', onRemoveTag)
		      .on('input', onInput)
		      .on('invalid', onInvalidTag)
		      .on('click', onTagClick);

		}
			

		// tag added callback
		function onAddTag(e){
		    // console.log(e.detail.tag);
		    // tagify.removeTag(e.detail.tag);
		    // console.log("original input value: ", input.value);
		    // console.log(JSON.parse(input.value));
		    let inp = JSON.parse(input.value);
		    checkEmail(inp[inp.length-1].value, e.detail.tag);
		    // tagify.off('add', onAddTag) // exmaple of removing a custom Tagify event
		}

		// tag remvoed callback
		function onRemoveTag(e){
		    console.log(e.detail);
		    console.log("tagify instance value:", tagify.value);
		    newProjectUsers.pop(e.detail.data.value);
		    
		}

		// on character(s) added/removed (user is typing/deleting)
		function onInput(e){
		    // console.log(e.detail);
		}

		// invalid tag added callback
		function onInvalidTag(e){
		    console.log(e.detail);
		    
		}

		// invalid tag added callback
		function onTagClick(e){
		    console.log(e.detail);
		}

		function checkEmail(inp, target){
			// console.log(inp);
			$.ajax({
	        		type: "get",
		            url: "{{ route('check.email') }}",
		            headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		            },
		            data: { _token : $('meta[name="csrf-token"]').attr('content'),
		            email: inp
		            },
		            
		            success: function (s){
		            	newProjectUsers.push(inp);
		            },
		            error: function(e){
		            	// console.log(target.data);
		            	tagify.removeTag(target);

		                // toastr.error("Something went wrong!!");
	                	

		        	}
			            // $('#'+id).text();
			    });
		}
	</script>
@endsection