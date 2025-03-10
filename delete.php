<?php 

include "config.php";

delete_contact($conn, $_GET['id'] );

header("Location: contatos.php");
