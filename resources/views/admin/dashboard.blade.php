@extends('layouts.admin')

@section('content')
	<h6 class="text-lightgrey">
		Dashboard
	</h6>
	<div class="row" style="font-size:0.9em;">
		<div class="col-md-8">
			<div class="dsb_card dsb_card20">
				<div class="row">
					<div class="col-md-6">
						<div>
							
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
			<br>
			<div class="row">
				<div class="col-md-4">
					<div class="dsb_card" style="border-style:dashed;border-color:#7f8c8d">
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
				<div class="cardz">
					<div class="dsb_cardz">
						yolo
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection