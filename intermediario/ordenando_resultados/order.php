<?php

require_once "connection.php";

function orderBy($order = "", $connection)
{
  if ($order) {
    $sql = "SELECT * FROM usuarios ORDER BY {$order}";
  } else {
    $sql = "SELECT * FROM usuarios";
  }

  $query = $connection->query($sql);

  if ($query->rowCount() > 0) {
    return $query->fetchAll();
  } else {
    return false;
  }
}
