@extends('app')

@section('content')
<div id="wrap" style="margin-top: 4em;">

<div class="container-fluid">
	<div class="row clearfix">
		
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-4 column side_bar">
					<ul class="nav nav-pills">
						<li class="active">
							<a href="#"> <span class="badge pull-right"></span> Profile</a>
						</li>
						<li>
							<a href="#"> <span class="badge pull-right">0</span> Services</a>
						</li>
						<li>
							<a href="#"> <span class="badge pull-right">0</span> Blog</a>
						</li>
					</ul>
					<img alt="140x140" src="./img/profile_pic.jpg" class="img-thumbnail" id="profile_pic" />
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<a class="panel-title collapsed" id="notifications" data-toggle="collapse" data-parent="#panel-55795" href="#">Notifications</a>
								<p><div id="inner_notifications"></div></p>									
							</div>									
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<a class="panel-title collapsed" id="messages" data-toggle="collapse" data-parent="#panel-55795" href="#">Messages</a>
								<p><div id="inner_messages"></div></p>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<a class="panel-title" data-toggle="collapse" id="settings" data-parent="#panel-55795" href="#">Account Settings</a>
								<div id="inner_settings"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 column">
					<div class="alert alert-info">
						 <button type="button" class="close" data-dismiss="alert">&times;</button>
						<p>Good News! You can now search for locations within the institution at the touch of a button!</p>
					</div>
					<div class="alert alert-info" style="margin-top: -10px;">
						 <button type="button" class="close" data-dismiss="alert">&times;</button>
						<p>Toggle between satellite view and map view at the right corner of the map frame</p>
					</div>
					<div class="form-group has-success has-feedback location-search" style="width: 100px;">
						<div class="form-group">
							<input id="pac-input" class="controls form-control" type="text" placeholder="Search Location">
						</div>

						<div id="type-selector" class="controls">
							<input type="radio" name="type" id="changetype-all" checked="checked">
							<label for="changetype-all">All</label>
							<input type="radio" name="type" id="changetype-establishment">
							<label for="changetype-establishment">Establishments</label>

							<input type="radio" name="type" id="changetype-address">
							<label for="changetype-address">Addresses</label>
						</div>

					</div>
					<div id="map-canvas" class="column">
						
					</div>
					<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>

				</div>

				<!-- <div class="col-md-2 column">
				</div> -->
			</div>
			
		</div>
	</div>
</div>

@endsection
