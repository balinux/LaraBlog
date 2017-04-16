
<!DOCTYPE HTML>
<html>
<head>
<title>Business_Blog a Blogging Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Business_Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
	<!--start-main-->
           <div class="header">
		        <div class="header-top">
			        <div class="container">
						<div class="logo">
							<a href="{{url('/')}}"><h1>DEKTE</h1></a>
						</div>
						<div class="search">
							<form>
								<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
								<input type="submit" value="">
							</form>
						</div>
						<div class="social">
							<ul>
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook in"> </a></li>
								<li><a href="#" class="facebook beh"> </a></li>
								<li><a href="#" class="facebook vem"> </a></li>
								<li><a href="#" class="facebook yout"> </a></li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

<!--head-bottom-->
<div class="head-bottom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('/')}}">Home</a></li>
            <!-- <li><a href="videos.html">Videos</a></li>
            <li><a href="reviews.html">Reviews</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tech <span class="caret"></span></a>
              <ul class="dropdown-menu">
                    <li><a href="tech.html">Action</a></li>
  				          <li><a href="tech.html">Action</a></li>
				            <li><a href="tech.html">Action</a></li>
              </ul>
            </li>
			      <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Culture <span class="caret"></span></a>
             <ul class="dropdown-menu">
                  <li><a href="singlepage.html">Action</a></li>
        				  <li><a href="singlepage.html">Action</a></li>
        				  <li><a href="singlepage.html">Action</a></li>
              </ul>
            </li>
			      <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Science <span class="caret"></span></a>
              <ul class="dropdown-menu">
                    <li><a href="singlepage.html">Action</a></li>
				            <li><a href="singlepage.html">Action</a></li>
				            <li><a href="singlepage.html">Action</a></li>
              </ul>
            </li>
    			  <li><a href="design.html">Design</a></li>
    			  <li><a href="business.html">Business</a></li>
    				<li><a href="world.html">World</a></li>
    				<li><a href="forum.html">Forum</a></li>
    				<li><a href="contact.html">Contact</a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>
<!--head-bottom-->
</div>
<!-- banner -->
<div class="banner">
	<div class="container">
		<h2>{{$banner->title}}</h2>
		<p>{{$banner->excerpt}}</p>
		<a href="{{url('show/'.$banner->slug)}}">READ MORE</a>
	</div>
</div>

@yield('content')

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-left">
				<h6>THIS LOOKS GREAT</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt consectetur adipisicing elit,</p>
			</div>
			<div class="col-md-4 footer-middle">
			<h4>Twitter Feed</h4>
			<div class="mid-btm">
				<p>Consectetur adipisicing</p>
				<p>Sed do eiusmod tempor</p>
				<a href="https://w3layouts.com/">https://w3layouts.com/</a>
			</div>

				<p>Consectetur adipisicing</p>
				<p>Sed do eiusmod tempor</p>
				<a href="https://w3layouts.com/">https://w3layouts.com/</a>

			</div>
			<div class="col-md-4 footer-right">
				<h4>Quick Links</h4>
				<li><a href="#">Eiusmod tempor</a></li>
				<li><a href="#">Consectetur </a></li>
				<li><a href="#">Adipisicing elit</a></li>
				<li><a href="#">Eiusmod tempor</a></li>
				<li><a href="#">Consectetur </a></li>
				<li><a href="#">Adipisicing elit</a></li>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- footer -->
<!-- footer-bottom -->
	<div class="foot-nav">
	<div class="container">
		<ul>
			<!-- <li><a href="index.html">Home</a></li>
			<li><a href="videos.html">Videos</a></li>
			<li><a href="reviews.html">Reviews</a></li>
			<li><a href="tech.html">Tech</a></li>
			<li><a href="singlepage.html">Culture</a></li>
			<li><a href="singlepage.html">Science</a></li>
			<li><a href="design.html">Design</a></li>
			<li><a href="business.html">Business</a></li>
			<li><a href="world.html">World</a></li>
			<li><a href="forum.html">Forum</a></li>
			<li><a href="contact.html">Contact</a></li> -->
			<div class="clearfix"></div>
		</ul>
		</div>
				</div>



</body>
</html>
