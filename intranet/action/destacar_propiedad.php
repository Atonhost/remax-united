<?php
	include "../../cn/cn.php";

		$id=$_POST['ide_per'];
		$sql = "update propiedades set destacado='1' where idpropiedade='$id'";
if ($conn->query($sql) === TRUE) {
    echo "yes";
} else {
    echo "Error updating record: " . $conn->error;
}
?>