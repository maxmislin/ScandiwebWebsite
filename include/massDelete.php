<?php
/*
require_once 'classes/dbActions.php';

/*if (isset($_POST['id'])) {

  foreach($_POST['id'] as $id){
    $query = "DELETE FROM product WHERE id = '$id'";

    $result = mysqli_query($link, $query);
  }

  if ($result) {
    $delete_result = 'deleted';
  }
  else{
    $delete_result = 'fail';
  }

}
else{
  $delete_result = 'exit';
}
$dbAct = new dbActions();
$delete_result = $dbAct->massDelete();
$header = 'Location: /?massDelete=';
$header .= $delete_result;
header($header);
*/
?>