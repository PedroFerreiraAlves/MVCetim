<div class="container mt-5">
    <h1>FILMES</h1>
    <?php 

if(count($this->filmes)>0){


    foreach($this->filmes as $filme)
    {
        ?>
        <div class="card" style="width: 18rem;">
      
    <div class="card-body">
     <h5 class="card-title"><?php echo$filme->titulo;?></h5>
        <p class="card-text"><?php
        for ($i=0; $i < $filme->nota; $i++) { 
               echo"⭐";
        }?></p>
        <p class="card-text">Classificação: <?php echo$filme->classificacao;?></p>
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