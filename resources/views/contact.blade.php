@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row clearfix">
		
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-4 column side_bar">
					<ul class="nav nav-pills">
						<li class="active" >
							<a href="#"> <span class="badge pull-right" >42</span>Profile</a>
						</li>
						<li>
							<a href="#"> <span class="badge pull-right">16</span> More</a>
						</li>
					</ul><img alt="140x140" src="./img/profile_pic.jpg" class="img-thumbnail" id="profile_pic" />
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
							Panel title
							</h3>
						</div>
						<div class="panel-body">
							Panel content
						</div>
						<div class="panel-footer">
							Panel footer
						</div>
					</div>
				</div>

				<div class="col-md-8 column">
					<form id='contact-form'>
					  <div class="form-group">
					    <label for="email">Email address</label>
					    <input type="email" class="form-control" id="email" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label for="subject">Subject</label>
					    <input type="text" class="form-control" id="subject" placeholder="Subject">
					  </div>
					  <div class='form-group'>
					  	<label for="message">Message</label>
					  	<textarea class="form-control" id='message' rows="3"></textarea>
					  </div>
					  <div class='form-group'>
					  	<button type="button" class="btn btn-info" style="border-radius: 0px; width: 100%; text-align: center;">Send Message</button>
					  </div>
					 </form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection