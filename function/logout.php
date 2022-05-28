<?php
include './session.php';
session_destroy();
  $_SESSION['level'] == 'notperm';

header("location:../login.php");
