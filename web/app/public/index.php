<?php
  require '../vendor/autoload.php';

  $client = new MongoDB\Client("mongodb://mongo:27017");
  $collection = $client->diplomski->movies;

  $result = $collection->find()->toArray();

  echo json_encode($result);
?>
