<?php
session_start();
include "config.php";

$contact_list = search_contact($conn);


include "index.php";
