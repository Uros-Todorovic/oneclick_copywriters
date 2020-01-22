<?php

require_once('init.php');

$session->logout();
Helper::redirect("login.php");