<?php
include("backend/appelbdd.php");
include("frontend/header.php");


$reponse = $bdd->query ("SELECT * FROM articles ORDER BY `date` LIMIT 5");

?>
<section class= titre>
	<h1> Bienvenue sur le blog des actualités LEGO </h1>
<img src="https://i.gifer.com/origin/d2/d278bd808bc521d69177c8c27efd9af0.gif">
</section>
<div class="container">
    <div class="row">

<?php

while ($donnees = $reponse->fetch()){
?>
			<div class="card col mb-3" style="width: 18rem;" id="carte">
			  <img src="<?php echo $donnees['image'];?>" class="card-img-top" alt="...">
			  <div class="card-body">
				<h5 class="card-title"><?php echo $donnees['titre'];?></h5>
				<p class="card-text"><?php echo substr($donnees['contenu'],0,30);?>.</p>
				 <button action="frontend/article.php" class="btn btn-outline-info" type="button" name="valide"><a href="frontend/article.php?id=<?php echo $donnees['id'];?>"> Lire la suite</a></button>
			  </div>
			</div>
			<?php
} 
?>
</div>
</div>
<?php
include("frontend/footer.php");
?>
<?php //ici notre page principale qui regroupe les 5 dernier articles -->

/*lié le header et le footer avec un includ
 créer le body avec les cards
 afficher les 5 derniers articles 
*/?>


