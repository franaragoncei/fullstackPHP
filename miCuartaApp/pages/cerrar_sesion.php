<?php
include '../db/pdoconfig.php';
session_destroy();
header('Location: ../index.php');
