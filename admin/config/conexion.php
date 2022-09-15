<?php
$conn = new mysqli("localhost", "root", "", "base1");
  
  if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
  } 
?>