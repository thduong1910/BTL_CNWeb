<?php
	require('connect.php'); 							
	$query = "SELECT first_name, email ,registration_date FROM users";		
	$result = mysqli_query ($conn, $query);
	if ($result) { 
		echo '<div class="row" style="border:1px solid">
				<div class="col -md-4"><h5>Tên</h5></div>
				<div class="col -md-4"><h5>Email</h5></div>
				<div class="col -md-4"><h5>Ngày đăng ký</h5></div>
			</div>';						
		while ($row=mysqli_fetch_row($result)) {
        echo '<div class="row"style="border:1px solid"><div class="col -md-4" >'.$row[0].'</div>'.'<div class="col -md-4">'.$row[1].'</div>'.'<div class="col -md-4">'.$row[2].'</div></div>';
    	echo '</table>'; 
    }
}
    mysqli_free_result($result);
	
?>