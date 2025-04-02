<?php  require_once 'header.php'; ?>
<?php require_once 'inc/manager-db.php';?>
<?php
if (isset($_GET['id']) && !empty($_GET['id']) ){
  $id = ($_GET['id']);
  $lePays= getPaysDetails($id); 
}?>

<main role="main" class="flex-shrink-0">

  <div class="container">
    <h1><?php echo $lePays->Name ?></h1>
    <!--<h1>Pays en : <?php// echo 'name' ; ?> </h1> Faire en sorte de récup le nom du pays + afficher drapeau-->
    <div>
  
     <table class="table">
         <tr>
           <th>Code</th> 
           <th>Continent </th>
           <th>Capitale</th>
           <th>Population</th>
           <th>Superficie</th>
         </tr>
          <!-- faire le bouton -->
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
       //enlever les foreach
       ?>
          <tr>
            <td> <?php echo $lePays->Code ?></td> 
            <td> <?php echo $lePays->Continent ?></td>
            <td> <?php echo getCapitale($lePays->Capital)->Name ?></td>
            <td> <?php echo $lePays->Population ?></td>
            <td> <?php echo $lePays->SurfaceArea ?></td>
          </tr>
         
     </table>
    </div>
    <p>
        <code>
      <?php
        var_dump($id);
        ?>
        </code>
    </p>
    
  </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
