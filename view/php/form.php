	<?php $form->input_mail("E-mail d\'origine", "origin_mail") ?>
	<?php $form->input_mail("E-mail de déstination", "destination_mail") ?>
	<?php $form->textarea("Message", "message") ?>
	<?php $form->input_file("mon_fichier", "file") ?>
	<?php $form->submit() ?>
