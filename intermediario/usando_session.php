<?php

session_start();

$_SESSION["user"] = "Admin Logado";

echo $_SESSION["user"];
