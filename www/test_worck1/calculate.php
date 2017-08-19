<?php 

	$time = $_POST[time];
	$green = false;
	$red = false;
	$yellow = false;
	$counter = 1;
	$message = "messageBox";

	if ($time <= 60){

		while( $counter <= $time )
		{
			if ($counter <=$time)
			{
				$message = "green";
				$counter = $counter + 3;
				if ($counter <=$time)
				{
					$message = "yellow";

					$counter = $counter + 1;
					if ($counter <=$time)
					{
						$message = "red";
						$counter = $counter + 2;
					}
				}
			}
		}
	}
	else
	{
		$message = "you input wrong time";
	}
	
	echo json_encode(array('success' => true,'messageBox'=> $message));
?>