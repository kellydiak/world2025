<?php require_once 'header.php'; ?>
<?php require_once 'inc/manager-db.php';?>

<h2>Le Monde</h2>

<style>
    
    .boite {
      display: flex;
      justify-content: center; /* pour centrer horizontalement */
      align-items: center;     /* pour centrer verticalement */
      height: 100vh;           /* Prend toute la hauteur de la fenêtre */
    }

    
    .image {
      max-width: 100%; /* pour que l'image ne dépasse pas la largeur du conteneur */
      height: auto; 
    }
</style>

<body>
  <div class="boite">
    <img src="https://img-31.ccm2.net/L--4_8X81y9MxAt3TXVr3w2qvJo=/1080x/smart/21fc152056fb47e3bfc8e2c92c26c0a5/ccmcms-hugo/26253753.jpg" alt="Carte du monde" class="image">
  </div>
</body>



<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
