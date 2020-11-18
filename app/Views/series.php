<div class="container mt-5">
    <h1>SERIES</h1>
    <?php 

if(count($this->series)>0){


    foreach($this->series as $serie)
    {
        ?>
        <div class="card" style="width: 18rem;">
      
    <div class="card-body">
     <h5 class="card-title"><?php echo$serie->titulo;?></h5>
        <p class="card-text"><?php
        for ($i=0; $i < $serie->nota; $i++) { 
               echo"⭐";
        }?></p>
        <p class="card-text">Classificação: <?php echo$serie->classificacao;?></p>
        <a href="#" class="btn btn-primary">Assista</a>
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