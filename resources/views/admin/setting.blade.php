@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="dsb_card dsb_card20" style="margin-top:20px;">
			<!-- Nav pills -->
			<ul class="nav nav-pills" style="color:#005792">
			  <li class="nav-item">
			    <a class="nav-link active" data-toggle="pill" href="#general">
			    	<i class="fas fa-cog"></i>&nbsp;
			    	General
			    </a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="pill" href="#profile">
			    	<i class="fas fa-user"></i>&nbsp;
			    	Profile
			    </a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="pill" href="#notifications">
			    	<i class="fas fa-bell"></i>&nbsp;
			    	Notifications
			    </a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="pill" href="#custom">
			    	<i class="fas fa-brush"></i>&nbsp;
			    	Customization
			    </a>
			  </li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content" style="margin-top:50px;">
			  <div class="tab-pane container active" id="general">
			  	<table class="table table-borderless">
			  		<tr>

			  			<td>
			  				<i class="fas fa-user"></i>&nbsp;
			  				Change Username
			  			</td>
			  			<td>
			  				<input id="userName" onfocusin="getName()" onfocusout="changeUsername(this)" type="text" name="Username" class="boxee" value="{{auth()->user()->name}}" >
			  			</td>
			  		</tr>
			  		<tr>
			  			<td><hr></td>
			  			<td><hr></td>
			  		</tr>
			  		<tr>
			  			<td>
			  				<i class="fas fa-lock"></i>&nbsp;
			  				Chage Password
			  			</td>
			  			<td>
			  				<input id="currPassword" type="password" class="boxee" placeholder="Current Password" ><br><br>
			  				<input id="newPassword" type="password" class="boxee" placeholder="New Password" ><br><br>
			  				<input id="confirmPassword" onfocusout="changePassword()" type="password" class="boxee" placeholder="Confirm Password"><br>
			  			</td>
			  		</tr>
			  		<tr>
			  			<td><hr></td>
			  			<td><hr></td>
			  		</tr>
			  		<tr>
			  			<td>
			  				<i class="fas fa-user-circle"></i>&nbsp;
			  				Linked Profiles
			  			</td>
			  			<td>
			  				<button class="btn dsb_button dsb_button_pink">
			  					<i class="fab fa-google"></i>&nbsp;
			  					Disconnect <span style="font-size:0.8em;">"{{auth()->user()->email}}"</span>
			  				</button><br>
			  			</td>
			  		</tr>
			  	</table>
			  </div> 
			  <div class="tab-pane container fade" id="profile">
			  	<div class="text-center">
			  		<img id="settingImage" src="{{asset(auth()->user()->image)}}" alt="" class="pro_settings"><br>
			  		<form id="profileForm" method="post" enctype='multipart/form-data'>
			  			<label>Change Picture</label><br>
					  <input id="profilePicture" type="file" name="profilePicture" accept=".jpeg, .jpg, .png">
					</form>
					  <hr>
					  <h6 class="text-lightgrey">Previous pictures</h6>
					  <div id="imagesPrev">
					  	  
					  </div>
					  
			  	</div>
			  </div>
			  <div class="tab-pane container fade" id="notifications">
					<table class="table table-borderless">
						<tr>
							<td>
								<i class="fas fa-asterisk"></i>&nbsp;
								Receive Notifications?</td>
							<td>
								<input type="radio" name="getNotifications" checked>&nbsp;Yes
							</td>
							<td>
								<input type="radio" name="getNotifications">&nbsp;No
							</td>
						</tr>
					</table>
			  </div>
			  <div class="tab-pane container fade" id="custom">
			  	<div class="text-center">
			  		<div class="row">
			  			<div class="col-md-6" onclick="setLight()">
			  				<div class="light">
			  					<div class="purp"></div>
			  					<div class="row">
			  						<div class="col-md-6">
			  							<div class="purp"></div>
			  							<div class="purp"></div>
			  							<div class="purp"></div>
			  							<div class="purp"></div>
			  						</div>
			  						<div class="col-md-6">
			  							<div class="purp" style="height:85px;"></div>
			  						</div>
			  					</div>
			  					<div class="purp"></div>
			  				</div>
			  			</div>
			  			<div class="col-md-6" onclick="setDark()">
			  				<div class="dark">
			  					<div class="purpa"></div>
			  					<div class="row">
			  						<div class="col-md-6">
			  							<div class="purpa"></div>
			  							<div class="purpa"></div>
			  							<div class="purpa"></div>
			  							<div class="purpa"></div>
			  						</div>
			  						<div class="col-md-6">
			  							<div class="purpa" style="height:85px;"></div>
			  						</div>
			  					</div>
			  					<div class="purpa"></div>
			  				</div>
			  			</div>
			  		</div>
			  		<br>
			  		<div class="row">
			  			<div class="col-md-6">
			  				Light Theme (Current)
			  			</div>
			  			<div class="col-md-6">
			  				Dark Theme 
			  				<button class="btn btn-sm btn-info bluebutton" style="margin-left:40px;">
			  					<i class="fas fa-check"></i>&nbsp;
			  					Apply
			  				</button>
			  			</div>
			  		</div>
			  	</div>
			  </div>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
<script type="text/javascript">
	 $(document).on('submit','#profileForm',function (event) {
	        //PREVENTING DEFAULT EVENT
	        event.preventDefault();
      });

	 $(document).on('change','#profilePicture',function (event) {

        //SENDING THE REQUEST TO SERVER TO SAVE THE IMAGE
        $.ajax({
             type: "POST",
             url: "{{ route('profile.picture.change') }}",
             headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: new FormData($('#profileForm')[0]),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function (s){
                console.log(s);
                //ADDING THE IMAGE TO THE CURRENT SECTION
                // addImage(s.image_url);
                console.log($('#settingImage'));
                let url = s.image_url;
                url = url.replace("public", "storage");
            	url = '/'+url;
                $('#settingImage').attr('src', url);
                //REMOVING THE VALUE OF THE INPUT
                $("#profilePicture").val('');
                $('#navProfilePicture').attr('src', url);
                setTimeout(function(){
	            		// console.log(100);
						getImages();
					}, 1500);

            },
            error: function(e){
                toastr.error("Something went wrong!!");
                console.log(e);

            },complete: function(){

            }
        });
      });
	function getName(){

	}
	function changeUsername(inp){
		// console.log(inp.value);
		$.ajax({
        		type: "post",
	            url: "{{ route('change.user.name') }}",
	            headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	            },
	            data: { _token : $('meta[name="csrf-token"]').attr('content'),
	            name: inp.value
	            },
	            
	            success: function (s){
	            	console.log(s);
	            	console.log(s.user.name);
	            	$('#userName').val(s.user.name);
	            },
	            error: function(e){
	            	console.log(e);
	            	toastr.error('Something went wrong');

	        	}
	        });
	}

	function changePassword(inp){
		// console.log(inp.value);
		let currPassword = $('#currPassword').val();
		let newPassword = $('#newPassword').val();
		let confirmPassword = $('#confirmPassword').val();
		
		if (newPassword === confirmPassword) {
			$.ajax({
        		type: "post",
	            url: "{{ route('change.user.name') }}",
	            headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	            },
	            data: { _token : $('meta[name="csrf-token"]').attr('content'),
	            currPassword: currPassword, newPassword:newPassword, confirmPassword: confirmPassword
	            },
	            
	            success: function (s){
	            	console.log(s);
	            	console.log(s.user.name);
	            	$('#userName').val(s.user.name);

	            },
	            error: function(e){
	            	console.log(e);
	            	toastr.error('Something went wrong');

	        	}
	        });
		}else{
			toastr.error('Password doesnot match');
		}
		
	}

	$(window).on('load', function(){
		setTimeout(function(){
			getImages();
		}, 3000);
	})
	function getImages(){
		$('#imagesPrev').empty();
		$.ajax({
    		type: "get",
            url: "{{ route('get.images.prev') }}",
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            
            
            success: function (s){
            	$.each(s, function(i, v){
            		let url = v;
	                url = url.replace("public", "storage");
	            	url = '/'+url;
            		$('#imagesPrev').append(`<img src="${url}" alt="" class="pro_settings_prev">&nbsp;&nbsp;`);
            	});
            	
            },
            error: function(e){
            	console.log(e);
            	toastr.error('Something went wrong');

        	}
	    });
	}
</script>
@endsection