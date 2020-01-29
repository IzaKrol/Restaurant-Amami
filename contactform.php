<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $time = $_POST['time'];
  $persons = $_POST['persons'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];


  $mailTo = "info@restaurant-amami.nl";
  $headers = "From: ".$mailFrom;
  $txt = "Je hebt een reservering van ".$name. " met telefoonnummer " .$phone. " voor " .$subject. " met " .$persons. " personen om " .$time. " uur.\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}
