@extends('layouts.admin')

@section('content')
	<div class="container">
		<h6 class="text-lightgrey">
			Dashboard
		</h6>
		<div class="row" style="font-size:0.9em;">
			<div class="col-md-8">
				<div class="dsb_card dsb_card20">
					<div class="row">
						<div class="col-md-6">
							<div>
								<canvas id="pie-chart" width="100" height="100"></canvas>
								<!-- Pie Chart -->
								<script>
									 new Chart(document.getElementById("pie-chart"), {
									    type: 'pie',
									    data: {
									      labels: ["College Project", "Mind Map", "Designer's Club"],
									      datasets: [{
									        label: "Tasks",
									        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
									        data: [2478,5267,734]
									      }]
									    },
									    options: {
									      title: {
									        display: true,
									        text: 'Tasks Division'
									      }
									    }
									});
								</script>
							</div>
						</div>
						<div class="col-md-6">
							<div>
								<h6 class="text-lightgrey">
									Deadlines
								</h6>
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
						  <div class="card-body dsb_blue_card">
						  	<div class="text-center centerpox"> 
						  		<i class="fas fa-graduation-cap bigicon align-middle"></i>
						  	</div>
						  </div> 
						  <div class="card-footer">{{$project->name}}</div>
						</div>
					</div>
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
						<span style="float:right;">
							<a href="#" class="whitenigga">
								<i class="fas fa-sync"></i>&nbsp;
								update
							</a>
						</span><br>
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