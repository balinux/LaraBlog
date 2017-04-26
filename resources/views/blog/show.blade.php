@extends('layouts.bloglayout')

@section('content')
<!-- technology -->
<div class="technology-1">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="business">
				<div class=" blog-grid2">
					<img src="{{asset('upload/'.$show->image)}}" class="img-responsive" alt="">
					<div class="blog-text">
						<h5>{{$show->title}}</h5>
						<p>{!!$show->body!!} </p>
						<!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p> -->
					</div>
				</div>

        <div class="blog-poast-info">
          <ul>
            <li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="{{url('show/'.$show->slug)}}"> {{$show->author->name}} </a></li>
            <li><i class="glyphicon glyphicon-calendar"> </i>{{$show->date}}</li>
            <li><i class="glyphicon glyphicon-calendar"> </i>{{$show->modif}}</li>
            @if(empty($show->tags))
            <li><i class="glyphicon glyphicon-pencil"> </i>{{$show->tagku}}</li>
            @else
            <li><i class="glyphicon glyphicon-pencil"> </i>no</li>
            @endif
            <!-- <li><i class="glyphicon glyphicon-comment"> </i><a class="p-blog" href="{{url('show/'.$show->slug)}}">3 Comments </a></li> -->
            <!-- <li><i class="glyphicon glyphicon-heart"> </i><a class="admin" href="#">5 favourites </a></li> -->
            <!-- <li><i class="glyphicon glyphicon-eye-open"> </i>{{$show->views}} views</li> -->
          </ul>
        </div>

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
					<h4>Recent </h4>

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

		<div id="disqus_thread"></div>
			<script>

			/**
			*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
			/*
			var disqus_config = function () {
			this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			*/
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://larablog-dev.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<!-- technology -->

@endsection
