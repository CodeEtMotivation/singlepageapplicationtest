<?php 

include("../views/layouts/EnteteBlade.php");

?>


<div class="wrapper">
   	<section class="form login">
   		<header>
   			CONNEXION 
   		</header>
   		<form method="post" action="">
   			<div class="error-txt">
   				
   			</div>
   			<div class="name-details">
   				<div class="field input">
   					<label>email address</label>
   					<input type="text" name="email" placeholder="email address">
   				</div>
   				<div class="field input">
   					<label>password</label>
   					<input type="password" name="password" placeholder="password">
                  	<i class="fas fa-eye"></i>
   				</div>
   				<div class="field button">
   					<input type="submit" value="Se Connecter">
   				</div>
   				<div class="link">
   					Avez Vous un Compte ? <a href="">Creer Maintenant</a>
   				</div>	
   			</div>
   		</form>
   	</section>
   </div>





<?php

include ("../views/layouts/FooterBlade.php");

 ?>