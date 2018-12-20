@extends('layouts.admin')

@section('content')
	<nav class="navbar navbar-expand-sm bg-info fixed-top" style="color:#fff;box-shadow:0px 1px 3px #b5b5b5;">
		<div class="container">
			<a class="navbar-brand float-left">
				dsb CSS Documentation
			</a>
			<h6 class="justify-content-end">
				<i class="fa fa-user-circle-o"></i>&nbsp;
				Author: Prashant Raj Dahal	
			</h6>
		</div>
	</nav>

	<div class="container" style="margin-top:50px;">
		<div class="row">
			<div class="col-md-4">
				<div style="background:#fff;padding:40px;box-shadow:0px 1px 3px #b5b5b5;position:fixed;width:350px;">
					<nav class="navbar">
					  <!-- Links -->
					  <ul class="navbar-nav">
					    <li class="nav-item">
					      <a class="nav-link" href="#intro" style="color:#3498db;">Introduction</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link" href="#depend" style="color:#3498db;">Dependencies</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link" href="#rules" style="color:#3498db;">Rules to follow</a>
					    </li>
					    <hr>
					    <li class="nav-item">
					    	<a class="nav-link" href="#ui" style="color:#3498db;">UI Elements</a>
					    </li>
					    <ul>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#colors" style="color:#3498db;">Colors</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#cards" style="color:#3498db;">Cards</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#buttons" style="color:#3498db;">Buttons</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#inputs" style="color:#3498db;">Inputs</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#progress" style="color:#3498db;">Progress Bars</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#modal" style="color:#3498db;">Modals</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#tooltip" style="color:#3498db;">Tooltip</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#animation" style="color:#3498db;">Animations</a>
					    	</li>
					    </ul>
					  </ul>
					</nav>
				</div>
			</div>
			<div class="col-md-8">
				<div style="padding:40px;">
					<div id="intro">
						<h3 class="text-info">
							Introduction
						</h3>
						<p>
							Hey, <br>
							This CSS documentation consists of guidelines to help the Frontend Engineer to develop UI components for Digital SCRUM Board. This page consists of all the required UI components that you will ever use during the course of this project. <br>
							However, if certain UI components are missing, you can always add the CSS in the <code>main.css</code> CSS file. You'll also need to document the newly added component in this documentation so that other frontend developers can use that component with ease.
						</p>
						<p>
							The CSS file is <code>main.css</code>
						</p>
					</div>
					<div id="depend" style="margin-top:40px;">
						<h3 class="text-info">
							Dependencies
						</h3>
						<p>
							There are various dependencies for this project. The dependencies that are used are listed below.
						</p>
						<ul>
							<li>Bootstrap 4.1.3 CSS and JS</li>
							<li>jQuery 3.3.1</li>
							<li>PopperJS 1.14.3</li>
							<li>Animate CSS</li>
							<li>Chart JS</li>
							<li>FontAwesome 5.6.1 Icons </li>
						</ul>
					</div>
					<div id="rules" style="margin-top:40px;">
						<h3 class="text-info">
							Rules to Follow
						</h3>
						<p>Please follow the rules below so that the code is clean and the project runs efficiently.</p>
						<ul>
							<li>Use the main.css which is the CSS file that we will be using</li>
							<li>Don't use inline CSS if the number of properties exceeds more than 2</li>
							<li>Do not change or alter the primary and secondary colors.</li>
							<li>Don't set the font size to less than 0.6em. Anywhere smaller than this size too damn small.</li>
							<li>Try to use FontAwesome Icons instead of Image files.</li>
							<li>Avoid adding too many libraries or fonts to the CSS file.</li>
							<li>use percentage value instead of <code>px</code> wherever possible.</li>
						</ul>
					</div>

					<div id="ui" style="margin-top:80px;">
						<h3 class="text-info">UI Elements</h3>
					</div>

					<div id="colors" style="margin-top:40px;">
						<h5 class="text-info">Colors</h5>
						<p>
							There are 4 main colors for Digital SCRUM Board. We are using 4 different colors that represent different colored sticky notes
						</p>
						<div class="row">
							<div class="col-md-6" style="background:#FFEAA7;padding:10px;color:#444;">
								#FFEAA7
							</div>
							<div class="col-md-6" style="background:#55EFC4;padding:10px;color:#fff;">
								#55EFC4
							</div>
							<div class="col-md-6" style="background:#FD79A8;padding:10px;color:#fff;">
								#FD79A8
							</div>
							<div class="col-md-6" style="background:#74B9FF;padding:10px;color:#fff;">
								#74B9FF
							</div>
						</div>
						<div style="margin-top:20px;">
							<p class="text-theme">This is the theme text.</p>
							<p class="text-pink">This text is pink</p>
							<p class="text-green">This text is green</p>
							<p class="text-blue">This text is blue</p>
							<p class="text-yellow">You can hardly see this in this background</p>
							<p class="text-grey">This is the default font color</p>
							<p class="text-lightgrey">This can be used as secondary text color</p>
						</div>
					</div>

					<div id="cards" style="margin-top:40px;">
						<h5 class="text-info">Cards</h5>
						<div class="dsb_card dsb_card20">
							The padding is 20px
						</div>
						<br>
						<div class="dsb_card dsb_card40">
							The padding is 40px
						</div>
						<br>
						<div class="dsb_card dsb_green_card dsb_card20 text-white">
							A green card
						</div>
						<br>
						<div class="dsb_card dsb_yellow_card dsb_card20 text-grey">
							A yellow card
						</div>
						<br>
						<div class="dsb_card dsb_blue_card dsb_card20 text-white">
							A blue card
						</div>
						<br>
						<div class="dsb_card dsb_pink_card dsb_card20 text-white">
							A pink card
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection