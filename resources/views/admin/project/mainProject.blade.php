@extends('layouts.admin')

@section('content')

<div class="project_wrapper">
	<div class="dsb_card dsb_card20">
		<button class="btn btn-success btn">
			<i class="fas fa-plus"></i>&nbsp;
			Add a new task
		</button>
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
									  <div class="progress-bar" style="width:40%;height:5px"></div>
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
									  <div class="progress-bar" style="width:10%;height:5px"></div>
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
									  <div class="progress-bar" style="width:90%;height:5px"></div>
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
			</div>
		</div>
		<div class="col-md-3">
			<div class="dsb_card dsb_card20 dsb_green_card">
				<h2 class="text-white bolder">COMPLETED</h2>
			</div>
		</div>
	</div>
</div>

@endsection