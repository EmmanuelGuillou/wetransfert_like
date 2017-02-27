	<?php $form->input_mail("E-mail d'origine", "origin_mail") ?>
	<?php $form->input_mail("E-mail de destination", "destination_mail") ?>
	<?php $form->textarea("Votre message", "message") ?>
	<?php $form->input_file("Votre fichier", "file") ?>
	<?php $form->submit() ?>
