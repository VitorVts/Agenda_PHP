<?php
session_start();
include "config.php";


create_contact($conn);
$contact_list = search_contact($conn);

include "index.php";
