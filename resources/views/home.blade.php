@extends('layouts.master')
@section('title') Home @endsection

@section('content')

<body data-spy="scroll" data-target="#navbar" data-offset="50" >

<section id="home" class="main-nav">
  <div class="heading dark-bg">
    <div class="row">
      <div class="col-sm-12 head">
        <div class="logo">
          <img src="https://i.ibb.co/XynTSFb/craftlogo.jpg" alt="Craft Logo" style="border-radius: 10px; width: 100px; height: 100px;" />
        </div>
        <h1 class="stm-font">Creativity and Innovation</h1>
      </div>
    </div>
    <div class="row">
      <nav>
        <ul class="list-inline links ">
          <li><a class="btn btn-default btn-lg" href="https://github.com/dianajoan" title="Diana Joanita on GitHub" target="_blank"><i class="fa fa-github"></i></a></li>
          <li><a class="btn btn-default btn-lg" href="http://codepen.io/anitanad/" title="Diana Joanita on Codepen" target="_blank"><i class="fa fa-codepen"></i></a></li>
          <li><a class="btn btn-default btn-lg" href="http://facebook.com/anitanad256/"  title="Diana Joanita on facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a class="btn btn-default btn-lg" href="https://twitter.com/anitanad256/"  title="Diana Joanita on Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
        </ul>       
      </nav>
    </div>
  </div>
  <div class="container">
    <div class="row showcase stm-font">
      <div class="col-sm-4 hidden-xs">
        <div class="well shadow up-hover color-hover">
          <h1><i class="fa fa-lightbulb-o"></i></h1>
          <h2 >Concept</h2>
        </div>  
      </div>
      <div class="col-sm-4 hidden-xs">
        <div class="well shadow up-hover color-hover">
          <h1 ><i class="fa fa-pencil-square-o"></i></h1>
          <h2 >Design</h2>
        </div>  
      </div>
      <div class="col-sm-4 hidden-xs">
        <div class="well shadow up-hover color-hover">
          <h1 ><i class="fa fa-angellist"></i></h1>
          <h2 >Development</h2>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <section id="about" class="main-nav">
  <h1><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>  About</h1>
  <div class="row">
    <div class="col-sm-4 ">
      <img src="{!! asset('img/craft.jpg') !!}" alt="description" title="tool tip" class="img-circle shadow up-hover avatar">
    </div>
    <div class="col-sm-8 ">
      <h2 class="text-primary stm-font">Skills</h2>
      <p>Stitches, Crochet, Blankets, Sweaters, Scarfts</p>
      <h2 class="text-primary stm-font">Tools</h2>
      <p>Niddles, Sewing machines, Threads, Paper and Fabrics, Clay</p>
    </div>
  </div>
  </section>
  <section id="portfolio" class="main-nav"><!--start portfolio-->
  <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Blog</h1>
  <div class="row"><!---start row-->

    <div class="col-sm-6 col-md-4"><!--start element 1-->
      <div  class="thumbnail shadow up-hover">
        <img src="https://i.ibb.co/8sxNwDp/sweater.jpg"/> 
        <div class="cust-caption">
          <a href="#"><h3 class="stm-font">Sweater</h3></a>
          <p>This is made of unique threads. </p>
        </div>
      </div>
    </div><!--end element 1-->

    <div class="col-sm-6 col-md-4"><!--start element 2-->
      <div  class="thumbnail shadow up-hover">
        <img src="https://i.ibb.co/9NGKHTw/scarf.jpg"/> 
        <div class="cust-caption">
          <a href="#"><h3 class="stm-font">Scarf</h3></a>
          <p>This is made of unique threads. </p>
        </div>
      </div>
    </div><!--end element 2-->

    <div class="col-sm-6 col-md-4"><!--start element 3-->
      <div class="thumbnail shadow up-hover">
        <img src="https://i.ibb.co/SmfjPmW/paint.jpg"/> 
        <div class="cust-caption">
          <a href="#"><h3 class="stm-font">Painting</h3></a>
          <p>This is made of unique threads. </p>
        </div>
      </div>
    </div><!--end element 3-->

    <div class="col-sm-6 col-md-4"><!--start element 4-->
      <div  class="thumbnail shadow up-hover">
        <img src="https://i.ibb.co/J3Z7Wgh/sewing.jpg"/> 
        <div class="cust-caption">
          <a href="#"><h3 class="stm-font">Sewing machine</h3></a>
          <p>This makes alot of crafty things</p>
        </div>
      </div>
    </div><!--end element 4-->

    <div class="col-sm-6 col-md-4"><!--start element 5-->
      <div class="thumbnail shadow up-hover">
        <img src="https://i.ibb.co/10WB4X8/paper.jpg"/> 
        <div class="cust-caption">
          <a href="#"><h3 class="stm-font">Paper</h3></a>
          <p>This makes alot of crafty things</p>
        </div>
      </div>
    </div><!--end element 5-->

    <div class="col-sm-6 col-md-4"><!--start element 6-->
      <div  class="thumbnail shadow up-hover">
        <img src="https://i.ibb.co/xLcRsJQ/fabric.jpg"/> 
        <div class="cust-caption">
          <a href="#"><h3 class="stm-font">Fabric</h3></a>
          <p>This makes alot of crafty things</p>
        </div>
      </div>
    </div><!--end element 6-->

  </div><!---end row-->
  </section> <!--end portfolio-->
    </div><!--end container-->
</body>
@endsection

