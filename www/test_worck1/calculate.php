<?php 
	$time =$_POST[time];

	$green = false;
	$red = false;
	$yellow = false;

	$counter = 1;


	while( $counter <= $time )
	{
		if ($counter <=$time)
		{
			$green = true;
			$red = false;
			$yellow = false;
			$counter = $counter + 3;
			if ($counter <=$time)
			{
				$green = false;
				$red = false;
				$yellow = true;

				$counter = $counter + 1;
				if ($counter <=$time)
				{
					$green = false;
					$red = true;
					$yellow = false;
					$counter = $counter + 2;
				}
			}
		}
		
	}
	if ($green == true)
	{
		$result = "green";
	}
	else if ($yellow == true)
	{
		$result = "yellow";
	}
	else if ($red == true)
	{
		$result = "red";
	}
	echo json_encode(array('success' => true,'color'=> $result));

?>