	<?php $form->input_mail("Votre email", "origin_mail") ?>
	<?php $form->input_mail("Email de destination", "destination_mail") ?>
	<?php $form->textarea("Votre message", "message") ?>
	<?php $form->input_file("Votre fichier", "file") ?>
	<?php $form->submit() ?>
