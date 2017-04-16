@extends('layouts.bloglayout')

@section('content')
<!-- technology -->
<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
		<div class="tech-no">

@foreach($blog as $blog)
			<!-- technology-top -->
			<div class="soci">
				<ul>
					<li><a href="#" class="facebook-1"> </a></li>
					<li><a href="#" class="facebook-1 twitter"> </a></li>
					<li><a href="#" class="facebook-1 chrome"> </a></li>
					<li><a href="#"><i class="glyphicon glyphicon-envelope"> </i></a></li>
					<li><a href="#"><i class="glyphicon glyphicon-print"> </i></a></li>
					<li><a href="#"><i class="glyphicon glyphicon-plus"> </i></a></li>
				</ul>
			</div>
			 <div class="tc-ch">

					<div class="tch-img">
						<a href="{{url('show/'.$blog->slug)}}"><img src="{{asset('upload/'.$blog->image)}}" class="img-responsive" alt=""/></a>
					</div>
					<a class="blog blue" href="{{url('show/'.$blog->slug)}}">tekno</a>
					<h3><a href="{{url('show/'.$blog->slug)}}">{{$blog->title}}</a></h3>
						<p>{!!$blog->body!!}</p>

						<div class="blog-poast-info">
							<ul>
								<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="{{url('show/'.$blog->slug)}}"> {{$blog->author->name}} </a></li>
								<li><i class="glyphicon glyphicon-calendar"> </i>{{$blog->date}}</li>
								<li><i class="glyphicon glyphicon-calendar"> </i>{{$blog->modif}}</li>
								<li><i class="glyphicon glyphicon-comment"> </i><a class="p-blog" href="{{url('show/'.$blog->slug)}}">3 Comments </a></li>
								<!-- <li><i class="glyphicon glyphicon-heart"> </i><a class="admin" href="#">5 favourites </a></li> -->
								<li><i class="glyphicon glyphicon-eye-open"> </i>{{$blog->views}} views</li>
							</ul>
						</div>
			</div>
			<div class="clearfix"></div>
			@endforeach
			<!-- technology-top -->


			</div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
				<div class="blo-top">
					<div class="tech-btm">
					<img src="images/banner1.jpg" class="img-responsive" alt=""/>
					</div>
				</div>
				<div class="blo-top">
					<div class="tech-btm">
					<h4>Sign up to our newsletter</h4>
					<!-- <p></p> -->
						<div class="name">
							<form>
								<input type="text" placeholder="Email" required="">
							</form>
						</div>
						<div class="button">
							<form>
								<input type="submit" value="Subscribe">
							</form>
						</div>
							<div class="clearfix"> </div>
					</div>
				</div>
				<div class="blo-top1">
					<div class="tech-btm">
					<h4>Top stories of the week </h4>

					@foreach($side as $side)
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="{{url('show/'.$side->slug)}}"><img src="{{asset('upload/'.$side->image)}}" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">

								<h5><a href="{{url('show/'.$side->slug)}}">{{$side->title}}</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						@endforeach

					</div>
				</div>

		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<!-- technology -->
@endsection
