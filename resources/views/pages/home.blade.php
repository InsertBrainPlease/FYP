@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><strong><center>Home</center></strong></div>

  <h2><strong><center>Inspirational quotes</center></strong></h2>
  <div id="home" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#home" data-slide-to="0" class="active"></li>
      <li data-target="#home" data-slide-to="1"></li>
      <li data-target="#home" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img\home.jpg" style="width:100%;">
        <div class="carousel-caption">
          <h3>The most powerful thing we own is our vote.</h3>
          <p>Bev Perdue</p>
        </div>
      </div>

      <div class="item">
        <img src="img\home2.jpg" style="width:100%;">
        <div class="carousel-caption">
          <h3>Vote for the man who promises least; he'll be the least disappointing.</h3>
          <p>Bernard Baruch</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img\home3.jpg" style="width:100%;">
        <div class="carousel-caption">
          <h3>The greatest threat to the constitutional right to vote is voter fraud.</h3>
          <p>Lynn Westmoreland</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#home" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#home" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
            </div>
        </div>
    </div>


@endsection
