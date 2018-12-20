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
					      <a class="nav-link" href="#depend">Dependencies</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link" href="#rules">Rules to follow</a>
					    </li>
					    <hr>
					    <li class="nav-item">
					    	<a class="nav-link" href="#ui">UI Elements</a>
					    </li>
					    <ul>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#colors">Colors</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#cards">Cards</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#buttons">Buttons</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#inputs">Input Boxes</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#check">Checkbox/Radio</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#text">Text Area</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#progress">Progress Bars</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#typo">Typography</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#modal">Modals</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#tooltip">Tooltip</a>
					    	</li>
					    	<li class="nav-link">
					    		<a class="nav-item" href="#animation">Animations</a>
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
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection