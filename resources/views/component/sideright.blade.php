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
