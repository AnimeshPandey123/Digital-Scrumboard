@extends('layouts.admin')

@section('content')
	<h6 class="text-lightgrey">
		Recent Projects
	</h6>
	<div class="dsb_card dsb_card20" >
			<div id="car_control" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner ">
					<div class="carousel-item  active">
					<div class="row marz">
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
							<div class="dsb_card" >
							  <div class="card-body dsb_green_card">
							  	<div class="text-center centerpox">
							  		<i class="fas fa-brain bigicon"></i>
							  	</div>
							  </div> 
							  <div class="card-footer">Mind Map</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="dsb_card" >
							  <div class="card-body dsb_pink_card">
							  	<div class="text-center centerpox">
							  		<i class="fas fa-palette bigicon"></i>
							  	</div>
							  </div> 
							  <div class="card-footer">Designer's Club</div>
							</div>
						</div>
					</div>
					</div>
					<div class="carousel-item ">
					<div class="row marz">
						<div class="col-md-4">
							<div class="dsb_card">
							  <div class="card-body dsb_yellow_card">
							  	<div class="text-center centerpox"> 
							  		<i class="fas fa-graduation-cap bigicon align-middle"></i>
							  	</div>
							  </div> 
							  <div class="card-footer">College Project</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="dsb_card" >
							  <div class="card-body dsb_blue_card">
							  	<div class="text-center centerpox">
							  		<i class="fas fa-brain bigicon"></i>
							  	</div>
							  </div> 
							  <div class="card-footer">Mind Map</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="dsb_card" >
							  <div class="card-body dsb_pink_card">
							  	<div class="text-center centerpox">
							  		<i class="fas fa-palette bigicon"></i>
							  	</div>
							  </div> 
							  <div class="card-footer">Designer's Club</div>
							</div>
						</div>
					</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#car_control" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#car_control" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
			</a>
			</div>		
	</div>

	<h6 class="text-lightgrey" style="margin-top: 20px;">
		All Projects
	</h6>
	<div class="dsb_card dsb_card20">
		<div class="row">
			<div class="col-md-10"></div>
			<div class="col-md-2">
				<div class="sort text-lightgrey">
					<i class="fas fa-sort"></i>
					<span>Sort</span>
				</div>
			</div>			
		</div>

		<table class="table table-borderless Project_tab">
			<tr>
				<th style="width: 30vw"> Project </th>
				<th style="width: 50vw"> Details </th>
				<th style="width: 20vw"> Members </th>
			</tr>

			<tr>
				<td>
					<div class="dsb_cardproject dsb_blue_card text-center">
						<i class="fas fa-bomb centerpoxv2"></i>
					</div>
					<span>Everest Bomb</span>
				</td>
				<td>
					<div>
						<span>Total Tasks: 45 </span>
						<span>Comleted Tasks: 15 </span>
					</div>
					<div>Your Tasks : 3</div>
					<div style="font-size: 0.7rem">Completion</div>
					<div class="prg_bar">
						<div class="prg"></div>
					</div>
				</td>
				<td>
					<img src="{{asset('images/picture.jpg')}}" alt="" class="pro_mem">
					<img src="{{asset('images/picture.jpg')}}" alt="" class="pro_mem">
					<img src="{{asset('images/picture.jpg')}}" alt="" class="pro_mem">
					<img src="{{asset('images/picture.jpg')}}" alt="" class="pro_mem">
					<img src="{{asset('images/picture.jpg')}}" alt="" class="pro_mem">
				</td>
			</tr>

			<tr>
				<td>
					<div class="dsb_cardproject dsb_blue_card text-center">
						<i class="fas fa-bomb centerpoxv2"></i>
					</div>
					<span>Everest Bomb</span>
				</td>
				<td>
					<div>
						<span>Total Tasks: 45 </span>
						<span>Comleted Tasks: 15 </span>
					</div>
					<div>Your Tasks : 3</div>
					<div style="font-size: 0.7rem">Completion</div>
					<div class="prg_bar">
						<div class="prg"></div>
					</div>
				</td>
			</tr>
		</table>
	</div>
	
@endsection