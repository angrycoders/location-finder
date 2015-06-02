@extends('app')

@section('content')
<div class="container-fluid" >
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

				<div class="col-md-8 column" id="about">
					<div>
						<h2>Want to know more about us? You are well on your way!</h2>
						<p>
							Jomo Kenyatta University of Agriculture and Technology (JKUAT) is a public university near Nairobi, Kenya. It is situated in Juja, 36 kilometres northeast of Nairobi, along the Nairobi-Thika SuperHighway. It offers courses in Technology, Engineering, Science, Architecture and Building sciences. The university has a strong research interest in the areas of biotechnology and engineering.

					The university was started in 1981 as Jomo Kenyatta College of Agriculture and Technology (JKCAT), a middle-level college by the government of Kenya with the assistance from the Japanese government. Plans for the establishment of JKCAT started in 1977. In early 1978, the Kenyan president, Jomo Kenyatta, donated 200 hectares of farmland for the establishment of the college. The first group of students were admitted on 4 May 1981. The new president Daniel Arap Moi formally opened JKUAT on 17 March 1982.

					The first graduation ceremony was held in April 1984 with diploma certificates presented to graduates in agricultural engineering, food technology and horticulture. On 1 September 1988, Moi, declared JKUAT a constituent College of Kenyatta University through a legal notice, under the Kenyatta University Act (CAP 210C). The name of JKUAT officially changed to Jomo Kenyatta University College of Agriculture and Technology (JKUCAT). It was finally established as a university through the JKUAT Act, 1994 and inaugurated on 7 December 1994.
						</p>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection