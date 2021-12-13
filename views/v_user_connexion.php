<?php if(isset($_SESSION['roles']) and isset($_SESSION['username'])): ?>
<div id="login_boite" style="color:blue">
Bonjour <?= $_SESSION['username'];?> &nbsp;
<a href="<?php echo BASE_URL;?>app.php/User/deconnexionUser">deconnexion</a>
</div>

<?php else: ?>
<div id="login_boite" style="color:green">
<form method="post" action="<?php echo BASE_URL;?>app.php/User/connexionUser"><fieldset>
Identifiant
<input name="login_utilisateur"  type="text"  size="18" />
Mot de passe
<input name="password_utilisateur" type="passwd" size="18" />
<input type="submit" name="users_connexion" value="connexion" />
</fieldset>
<p id="erreur" style="color:red"><?php if(isset($_SESSION['erreur'])) echo $_SESSION['erreur'];?></p>
</form>
</div>
<?php endif; ?>

<?php //https://docs.djangoproject.com/fr/1.6/intro/tutorial04/ ?>
