<?php 


	while ($row = mysqli_fetch_assoc($sql)) {

		$sql2 = "SELECT * FROM message WHERE (incoming_id = {$row['unique_id']} 
			     OR outgoing_id = {$row['unique_id']})
		         AND (outgoing_id = {$outgoing_id} 
			     OR incoming_id = {$outgoing_id}) ORDER BY message_id DESC LIMIT 1";

	    $query2 = mysqli_query($conn, $sql2);

	    $row2 = mysqli_fetch_assoc($query2);

	    if (mysqli_num_rows($query2) > 0) {
	    	
	    	$result = $row2['message'];

	    }else{
	    	$result = "No available message yet";
	    }


	    // trimming the lenght of message to  30

	    (strlen($result) > 28) ? $msg = substr($result,0, 20).'...' : $msg = $result;

	    // Adding you when message is sent

	    ($outgoing_id == $row2['outgoing_id']) ? $you = "You:" : $you = "";


	    // Checking if a user is offline

	    ($row['status'] == "Offline Now")? $offline = "offline" : $offline = "";
	    

		$output  .= '<a href="chat.php?user_id='.$row['unique_id'].' ">
					
					<div class="content">

						<img  src="php/images/'.$row['image'].'"  alt="">

						<div class="details">

						   <span> '.$row['firstname'] . " ". $row['lastname'].' </span>

						   <p>'. $you . $msg.'</p>
						
					    </div>
						
					</div>

					<div class="status-dot '.$offline .' "><i class="fas fa-circle"></i></div>
				</a>';
		
	}



 ?>