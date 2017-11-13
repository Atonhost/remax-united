<?php
	include "../../cn/cn.php";
	$id=$_POST['ide_per'];
	$sql = "DELETE FROM post_agente WHERE id='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

?>