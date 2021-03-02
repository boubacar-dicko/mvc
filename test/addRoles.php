<?php
  require_once '../bootstrap.php';
  
  
  $role = new Roles();
  //$role->setId(1);
  $role->setNom("ROLE_USE");

  $entityManager->persist($role);
  $entityManager->flush();

  echo $role->getId(1);
?>