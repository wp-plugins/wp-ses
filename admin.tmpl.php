 <div class="wrap">
 <div id="icon-options-general" class="icon32"><br /></div>
  <h2><?php _e('Options WP SES','wpses') ?></h2>
   <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
  <?php wp_nonce_field('wpses'); ?>


  <h3><?php _e('Etat du plugin','wpses') ?>&nbsp;<input type="submit" name="refresh" value="<?php _e('Actualiser','wpses') ?>" /></h3>
   </form>  
   <div style="border:1px solid#ccc; padding:10px; float:right; ">
   Don't forget to check online FAQs on <a href="http://wp-ses.com/" target="_blank">WP-SES</a> website.<br />
   We also provide usefull tips on email delivrability<br />and successfull list building.
   </div>
  <ul>
  <?php
  	if ($wpses_options['from_email']!='') {
  		echo('<li style="color:#0f0;">');
  		_e("L'adresse exp&eacute;diteur est d&eacute;finie ",'wpses');
  	} else {
  		echo('<li style="color:#f00;">');
  		_e("L'adresse exp&eacute;diteur n'est pas d&eacute;finie ",'wpses');  		
  	}?></li>
  <?php
  	if ($wpses_options['credentials_ok']==1) {
  		echo('<li style="color:#0f0;">');
  		_e("Les cl&eacute;s Amazon sont valides",'wpses');
  	} else {
  		echo('<li style="color:#f00;">');
  		_e("Les cl&eacute;s Amazon sont invalides, ou vous n'avez pas finalis&eacute; votre inscription &agrave; SES",'wpses');  		
  	}?></li>
 <?php
  	if (($wpses_options['from_email']!='') and ($senders[$wpses_options['from_email']][1])) {
  		echo('<li style="color:#0f0;">');
  		_e("L'adresse exp&eacute;diteur a &eacute;t&eacute; valid&eacute;e",'wpses');
  	} else {
  		echo('<li style="color:#f00;">');
  		_e("L'adresse exp&eacute;diteur n'a pas &eacute;t&eacute; valid&eacute;e",'wpses');  		
  	}?></li>  	

   <?php
  	if ($wpses_options['active']==1) {
  		echo('<li style="color:#0f0;">');
  		_e("Le plugin est actif",'wpses');
  	} else {
  		echo('<li style="color:#f00;">');
  		_e("Le plugin n'est pas actif",'wpses');
  		?>
  		 <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
  <?php wp_nonce_field('wpses'); ?>
 <p class="submit">
  <input type="submit" name="activate" value="<?php _e('Activer le plugin','wpses') ?>" />
  </p>
   </form>  		
<?php  	}?></li>




  </ul>
  <h3><?php _e('Adresse Exp&eacute;diteur','wpses') ?></h3>
  <?php _e('Ces deux r&eacute;glages remplacent l\'email par d&eacute;faut utilis&eacute;e comme adresse d\'exp&eacute;diteur de votre blog.','wpses') ?>
  <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
  <?php wp_nonce_field('wpses'); ?>
  <table class="form-table">
  <tr><th scope="row"><?php _e('Adresse expediteur','wpses') ?></th>
  <td><input type="text" name="from_email" value="<?php echo $wpses_options['from_email']; ?>" />&nbsp;<?php _e('(Doit etre un email valide)','wpses') ?></td></tr>
  <tr><th scope="row"><?php _e('Nom associe','wpses') ?></th>
  <td><input type="text" name="from_name" value="<?php echo $wpses_options['from_name']; ?>" /></td></tr>
  </table>

   <h3><?php _e("Cl&eacute;s d'API Amazon",'wpses') ?></h3>
	<div style="border:1px solid#ccc; padding:10px; float:right; ">
  If you already use an Amazon Webservice like S3,<br />
  you can use the very same keys here.
   </div>
  <?php _e('Indiquez ici les cl&eacute;s API fournies par Amazon Web service','wpses') ?>
  <table class="form-table" style="width:450px; float:left;" width="450">
  <tr><th scope="row"><?php _e('access_key','wpses') ?></th>
  <td><input type="text" name="access_key" value="<?php echo $wpses_options['access_key']; ?>" /></td></tr>
  <tr><th scope="row"><?php _e('secret_key','wpses') ?></th>
  <td><input type="text" name="secret_key" value="<?php echo $wpses_options['secret_key']; ?>" /></td></tr>
  </table>

  <input type="hidden" name="action" value="update" />
  <!-- input type="hidden" name="page_options" value="wpses_options" / -->
  <p class="submit" style="clear:both">
  <input type="submit" name="save" value="<?php _e('Save Changes') ?>" />
  </p>
  </form>
  <br />&nbsp;


  <h3><?php _e("Exp&eacute;diteurs v&eacute;rifi&eacute;s",'wpses') ?></h3>
  <?php _e('Les exp&eacute;diteurs suivants sont connus','wpses') ?>
  <br />
  <?php 
  //print_r($autorized); 
  //$senders
  ?>
  <div style="width:70%">
  <table class="form-table">
  <tr style="background-color:#ccc; font-weight:bold;"><td><?php _e('Email','wpses') ?></td><td><?php _e('Id Demande','wpses') ?></td><td><?php _e('Valid&eacute;','wpses') ?></td></tr>
  <? 
  $i=0;
  foreach ($senders as $email=>$props) {
  	if ($i % 2 ==0) {
  		$color=' style="background-color:#ddd"';
  	} else {
  		$color='';
  	}
  	echo("<tr $color>");
  	echo("<td>$email</td>");
  	echo("<td>");
  	print_r($props[0]);
  	echo("</td>");
  	if ($props[1]) {
  		$valide=__('Oui','wpses');
  	} else {
  		$valide=__('Non','wpses');
  	}
  	echo("<td>".$valide."</td>");
  	echo("</tr>");
  	$i++;

  }
  ?>
  </table>
  </div>
  <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
  <?php wp_nonce_field('wpses'); ?>
  <!-- todo : que si email defini. -->
  <br />
<?php _e('Demander l\'ajout de ','wpses') ?><?php echo $wpses_options['from_email']; ?><?php _e(' aux exp&eacute;diteurs.','wpses') ?>

 <p class="submit">
  <input type="submit" name="addemail" value="<?php _e('Ajouter cet Email','wpses') ?>" />
  </p>
   </form>
  <br />&nbsp;

   <h3><?php _e('Email de test','wpses') ?></h3>
  <?php _e('Cliquer sur le bouton ci-dessous pour envoyer &agrave; l\'adresse exp&eacute;diteur un email de test via Amazon SES.','wpses') ?>
  <br />
 <!-- todo: que si email expediteur validé -->
   <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
  <?php wp_nonce_field('wpses'); ?>
 <p class="submit">
  <input type="submit" name="testemail" value="<?php _e("Envoyer l'Email de test",'wpses') ?>" />
  </p>
   </form>
  <br />&nbsp;

  <?php _e('WP SES est un plugin de','wpses') ?> <a href="http://www.blog-expert.fr/" target="_blank">http://www.blog-expert.fr/</a>
   <br />&nbsp;
   <div style="width:80%">
  <?php
  if (function_exists('sd_rss_widget')) {
  	//	sd_rss_widget(array('num'=>3));
  }
  ?>
  </div>
  </div>