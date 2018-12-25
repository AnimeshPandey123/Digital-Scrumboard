@extends('layouts.admin')

@section('content')
	<div class="container">
		<h6 class="text-lightgrey">
			Recent Projects
		</h6>
		<div class="dsb_card dsb_card20" >
				<div id="car_control" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner ">
						@if($chunks)
						@foreach($chunks as $single)
						<div class="carousel-item  @if($loop->index == 0) active @endif ">
							
						<div class="row marz">
							@foreach($single as $pro)
								<div class="col-md-4">
									<div class="dsb_card">
									  <div class="card-body dsb_blue_card">
									  	<div class="text-center centerpox"> 
									  		<i class="fas fa-graduation-cap bigicon align-middle"></i>
									  	</div>
									  </div> 
									  <div class="card-footer"> {{$pro['name']}}</div>
									</div>
								</div>
							
							@endforeach
						</div>
						
						</div>
						@endforeach
						@else
						<div class="carousel-item  active">
							<div class="row marz">
								<div class="col-md-4">
									<div class="dsb_card">
									  <div class="card-body dsb_grey_card">
									  	<div class="text-center centerpox"> 
									  		<i class="fas fa-plus bigicon"></i>
									  	</div>
									  </div> 
									  <div class="card-footer">Create Project</div>
									</div>
								</div>
							</div>
						</div>
						@endif
					
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
			@if($projects)
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
				
				@foreach($projects as $project)
				<tr>
					<td>
						<div class="dsb_cardproject dsb_blue_card text-center">
							<i class="fas fa-bomb centerpoxv2"></i>
						</div>
						<span>{{$project->name}}</span>
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
				@endforeach
				
				
			</table>
			@else
				
			@endif
		</div>
	</div>
	
@endsection