<?php
require 'classes/etudiant.class.php';
$deltudiant=new Etudiant;
 $deltudiant->deleteEtudiant();
header('location:index.php');