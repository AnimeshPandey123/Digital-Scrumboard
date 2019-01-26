@extends('layouts.admin')

@section('content')
	<div class="container">
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
							</div>
						</div>
						<div class="col-md-6">
							<h6 class="text-white">
								&nbsp;
							</h6>
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
									</div>
						</div>
					</div>
				</div>	
				<br>
				<h6 class="text-lightgrey">
					Your Projects
				</h6>	
				<div class="row">
					@foreach($projects as $project)
					<div class="col-md-4">
						<div class="dsb_card">
						  <div class="card-body {{$project->color}}">
						  	<div class="text-center centerpox"> 
						  		<i class="fas fa-graduation-cap bigicon align-middle"></i>
						  	</div>
						  </div> 
						  <div class="card-footer">{{$project->name}}</div>
						</div>
						<br>
					</div>
					<br>
					@endforeach
				
				</div>	
				<br>
				<div class="row">
					<div class="col-md-4">
						<div class="dsb_card">
						  <div class="card-body dsb_grey_card">
						  	<div class="text-center centerpox">
						  		<i class="fas fa-plus bigicon"></i>
						  	</div>
						  </div> 
						  <div class="card-footer">Create New</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-md-4">
					<div class="dsb_card dsb_card20 dsb_primary_card">
						<span class="text-white" style="font-size:1.1em;">Recents</span>
						<div class="cardz" style="font-size:1em;">
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

@section('scripts')
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
	getTasks();
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
	    					$('#'+v.id).find('.image').append('<img src="'+v.users[i].image+'" alt="asd" class="task_peeps '+colorCodeClass[v.state]+'">');
	    				}
			 		}else{
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
	    					$('#'+v.id).find('.image').append('<img src="'+v.users[i].image+'" alt="asd" class="task_peeps '+colorCodeClass[v.state]+'">');
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
</script>
@endsection