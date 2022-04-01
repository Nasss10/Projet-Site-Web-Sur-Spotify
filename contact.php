<?php require 'debut_html.inc.php';?>
<?php require 'header_html.inc.php';?>
<main>
   <center>
   <h1>Nous contacter</h1>
 
 


<form method="POST" action="envoyer_mail.php">
   <div id="en-tete">

       <div>
<label for="prenom">Votre prénom :</label>
<input type="text" name="prenom" id="prenom"/>
       </div>

  



       <div>
<label for="nom">Votre nom :</label>
<input type="text" name="nom" id="nom" />
       </div>
  </div>


<label for="email" class="emsg">Votre e-mail :</label>
<input type="text" name="email" id="email" class="emsg"/>
<label for="message" class="emsg">Votre message :</label>
<textarea name="message" id="message" class="emsg"></textarea>
<input type="submit" value="Envoyer" id="bouton"/>
<center>
</form>
</main>

<?php
    require 'footer_html.inc.php';
    require 'fin_html.inc.php';?>