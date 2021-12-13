
<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area"> 
      <li class="name"> 
        <h1> <a href="">TP web</a></h1> 
      </li> 
      <li class="toggle-topbar menu-icon">
        <a href="#"><span>Menu</span></a>
      </li> 
    </ul> 
    <section class="top-bar-section"> 
      <ul class="left">
        <li class="divider"></li> 
        <li class="active"><a href="">stock</a></li> 
        <li class="divider"></li> 
        <li class="has-dropdown"><a href="">produit</a> 
        <ul class="dropdown"> 
          <li><a href="<?php echo BASE_URL?>app.php/Produit/creerProduit"> créer un produit </a></li> 
          <li><a href="<?php echo BASE_URL?>app.php/Produit/afficherProduits">afficher/editer/supprimer les produits</a></li> 
        </ul> 
        </li> 
      </ul> 
      <ul class="right"> 
        <?php if(isset($_SESSION['roles']) and isset($_SESSION['username'])): ?>
          <li><span  style="color:yellow;"> Bonjour <?= $_SESSION['username'];?> &nbsp;</span>
          </li> 
          <li>
         <a href="<?php echo BASE_URL?>app.php/User/deconnexionUser">se deconnecter</a></li> 
        <?php else: ?>
          <li><a href="<?php echo BASE_URL?>app.php/User/index">se connecter</a></li> 
        <?php endif; ?>
      </ul> 
    </section> 
</nav>

