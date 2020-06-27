<?php 

$db_host = 'localhost';
        $db_uname = 'root';
        $db_pass = 'yhwL<nzD';
        $db_name = 'sma329';
        
        $connect_db = mysqli_connect(
        $db_host,$db_uname,$db_pass,$db_name
        );
        $database_q = 'SELECT * FROM sma_warehouses';
        
         $res_database = mysqli_query($connect_db,$database_q);
		$res_check = mysqli_num_rows($res_database);
		
		if ($res_check > 0) {
			
			while ($row = mysqli_fetch_assoc($res_database)) {
				
				echo $row['id'];
			}
		}
		echo '<option value="1">' . $query->num_rows() . '</option>';