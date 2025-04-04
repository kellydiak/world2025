<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php  require_once 'header.php'; ?>
<?php
require_once 'inc/manager-db.php';
if (isset($_GET['name']) && !empty($_GET['name']) ){
  $continent = ($_GET['name']);
  $desPays = getCountriesByContinent($continent);
} else {
  $continent = "Monde";
  $desPays = getAllCountries();
}
//$continent = 'Asia';
//$desPays = getCountriesByContinent($continent);
?>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap4.css">
</head>

<body>
  
<main role="main" class="flex-shrink-0">

  <div class="container">
    <h1>Pays en <?php echo $continent ; ?> </h1>
    <div>
     <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
         <tr>
           <th>Nom</th>
           <th>Population</th>
           <th>Capitale</th>
         </tr>
      </thead>
      <tbody>
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
          foreach ($desPays as $lePays): ?>
          <tr>
            <td> <?php echo $lePays->Name ?></td> <!--faut il mettre un href sur les noms  -->
            <td> <?php echo $lePays->Population ?></td>
            <td> <?php echo getCapitale($lePays->Capital)->Name ?></td>
          </tr>
          <?php endforeach ; ?>
        </tbody>
     </table>
    </div> 
  </div>
</main>
</body>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
