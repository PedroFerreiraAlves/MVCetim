<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container mt-5">

<hr>
<br>
<!--FILMES-->
<h1>FILMES</h1>
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      

      
<?php
if(count($this->filmes)>0){
    


    foreach($this->filmes as $filme)
    {
        ?>
     
     <div class="col-md-3" style="float:left">
       <div class="card mb-2">
            <div class="card-body">
            <h4 class="card-title"><?php echo$filme->titulo;?></h4>
            <p class="card-text">Classificação: <?php echo$filme->classificacao;?></p>
            <p class="card-text"><?php
        for ($i=0; $i < $filme->nota; $i++) { 
               echo"⭐";
        }?></p>
            <a class="btn btn-primary">Acessar</a>
          </div>
        </div>
      </div>
        <?php
       
    }
}
else{
echo"<h1>Nenhum Filme encontrado</h1>";
}

?>
    </div>
  </div>
</div>
<!--SERIES-->
<h1>SERIES</h1>
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      

      
<?php
if(count($this->series)>0){
    


    foreach($this->series as $serie)
    {
        ?>
     
     <div class="col-md-3" style="float:left">
       <div class="card mb-2">
            <div class="card-body">
            <h4 class="card-title"><?php echo$serie->titulo;?></h4>
            <p class="card-text">Classificação: <?php echo$serie->classificacao;?></p>
            <p class="card-text"><?php
        for ($i=0; $i < $serie->nota; $i++) { 
               echo"⭐";
        }?></p>
            <a class="btn btn-primary">Acessar</a>
          </div>
        </div>
      </div>
        <?php
       
    }
}
else{
echo"<h1>Nenhuma Serie encontrado</h1>";
}

?>
    </div>
  </div>
</div>



