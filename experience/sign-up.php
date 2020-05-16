<?php
require_once '../translate.php';
require_once '../classes/mail.php';
$mail = new Mail();
$name = $_POST['first_name'] . ' ' . $_POST['last_name'];
$text = _('Dag ') . $_POST['first_name'];
$text .= '<br>' . _('Bedankt voor het inschrijven!') . '<br>'  . _('Meer informatie volgt nog over de activiteit op 14 september.');
$text .= '<br>' . _('Tot dan!') . '<br>' . _('Met vriendelijke groeten') . '<br>' . 'Arthur Benbassat';
$mail->sendMail($_POST['email'], $text, _('Inschrijven voor workshop koeken'), $name);
header('Location: ../workshop.php');