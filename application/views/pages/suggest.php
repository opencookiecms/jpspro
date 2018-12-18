<?php 
	$this->load->database();

	$kontraktor = $_GET['kontraktor'];

	$sql = "SELECT konName FROM kontraktor WHERE konName like '$kontraktor%' ORDER BY konName";

	$res = $db->query($sql);

	if(!res)
		echo mysqli_error($db);
	else
		while($row = $res->fetch_object())
			echo "<option value='".$row->name."'>";
 ?>