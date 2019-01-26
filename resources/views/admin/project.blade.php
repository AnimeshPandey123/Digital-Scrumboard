@extends('layouts.admin')

@section('content')
	<div class="container">
		<h6 class="text-lightgrey">
			Recent Projects
		</h6>
		<div class="row">
			<div class="col-md-8">
				<div id="mainProjects" class="row">
			
				</div>
			</div>
			<div class="col-md-4">
				<div class="dsb_card dsb_card20 dsb_primary_card">
					<div class="text-center">
						<button class="btn" style="background:none;color:#fff;border:2px solid #ecf0f1;border-radius:100px;padding:5px 25px;" data-toggle="modal" data-target="#create_project">
							<i class="fas fa-plus"></i>&nbsp;
							Create New
						</button>
					</div>
				</div>
			</div>
		</div>
		
		<br><br>
		<h6 class="text-lightgrey" style="margin-top: 20px;">
			All Projects
		</h6>
		<div class="dsb_card dsb_card40">
			<table id="allProjects" class="table" style="font-size:0.9em;">
				<thead>
					<tr style="font-weight:600;color:#005792;">
						<td>Project Name</td>
						<td>Members</td>
						<td>Your Tasks</td>
						<td>Progress</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<a href="##">
								<i class="fas fa-graduation-cap"></i>&nbsp;College Project
							</a>
						</td>
						<td>17</td>
						<td>58</td>
						<td>
							<div class="progress" style="height:5px;margin-top:3px;">
							  <div class="progress-bar" style="width:40%;height:5px;background:#005792;"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<a href="##">
								<i class="fas fa-brain"></i>&nbsp;Mind Map
							</a>
						</td>
						<td>7</td>
						<td>5</td>
						<td>
							<div class="progress" style="height:5px;margin-top:3px;">
							  <div class="progress-bar" style="width:10%;height:5px;background:#005792;"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<a href="##">
								<i class="fas fa-palette"></i>&nbsp;Designer's Club
							</a>
						</td>
						<td>170</td>
						<td>72</td>
						<td>
							<div class="progress" style="height:5px;margin-top:3px;">
							  <div class="progress-bar" style="width:85%;height:5px;background:#005792;"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<a href="##">
								<i class="fas fa-book"></i>&nbsp;Book Club
							</a>
						</td>
						<td>8</td>
						<td>1</td>
						<td>
							<div class="progress" style="height:5px;margin-top:3px;">
							  <div class="progress-bar" style="width:85%;height:5px;background:#005792;"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<a href="##">
								<i class="fas fa-book"></i>&nbsp;Library Mangment Project
							</a>
						</td>
						<td>8</td>
						<td>1</td>
						<td>
							<div class="progress" style="height:5px;margin-top:3px;">
							  <div class="progress-bar" style="width:55%;height:5px;background:#005792;"></div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<hr>
		</div>
	</div>



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
    <script type="text/javascript" src="{{asset('js/sortTable.js')}}" defer></script>
	<script type="text/javascript">

		var newProjectUsers = [];
		$(document).ready(function() {
		 	getProjects();
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
		            	getProjects();
		            	clearInput();
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

		function removeModal(){
			$('#cancel').click();
			$("#create_project").modal("hide");
			$(".modal").modal("hide");
			$('body').removeClass('modal-open');
			$(".modal-backdrop").remove();
		}

		function getProjects(){
			$.ajax({
            		type: "get",
		            url: "{{ route('project.get') }}",
		            headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		            },
		            
		            
		            success: function (s){
		            	// $('#allProjects tbody').empty('');
		            	$.each(s, function(k, v) {
		            		appendToLatest(k, v);
		            		appendToallProjects(k, v);
		                // clearInput();
		            });
		                

		            },
		            error: function(e){
		                toastr.error("Something went wrong!!");
		                console.log(e);

		        	}
		            // $('#'+id).text();
		        });
		
	}
	

		function appendToLatest(k, v){
			let col;
			if (k > 2) {
		    	return false;
		     }
    		if (k == 0) {

    			$('#mainProjects').empty();
    		}
    		if (!v.color) {
    			col = 'dsb_green_card';
    		}else{
    			col = v.color;
    		}

    		$('#mainProjects').append(` <a href="/admin/project/main/${v.id}" class="col-md-4">
						<div class="dsb_card">
						  <div class="card-body ${col}">
						  	<div class="text-center centerpox"> 
						  		<i class="fas fa-${v.icon} bigicon align-middle"></i>
						  	</div>
						  </div> 
						 <div class="card-footer">${v.name}</div>
					</div>
				</a>`);
		}

		function appendToallProjects(k, v){
			// console.log(v);
			if (k == 0) {
				$('#allProjects tbody').empty('');
			}
			$('#allProjects tbody').append(`<tr>
						<td>
							<a href="/admin/project/main/${v.id}">
								<i class="fas fa-${v.icon}"></i>&nbsp;${v.name}
							</a>
						</td>
						<td>${v.userCount}</td>
						<td>${v.taskCount}</td>
						<td>
							<div class="progress" style="height:5px;margin-top:3px;">
							  <div class="progress-bar" style="width:40%;height:5px;background:#005792;"></div>
							</div>
						</td>
					</tr>`);
			// $("#allProjects").tablesorter();
			
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