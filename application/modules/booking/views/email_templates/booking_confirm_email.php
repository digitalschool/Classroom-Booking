<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
	<p>Hey there, <?php echo $this->session->userdata('logged_in');?></p>
	
	<p>Just a quick email to confirm your booking, that you just made;</p>
	
	<p>Room: <?php echo $room->name;?></p>
	
	<p>Period: <?php echo $period->period_name;?> <i><?php echo $period->start_time .'-'.$period->end_time ;?></i> Week:<?php echo $week;?></p>
	
	<p>Date: <?php echo $date;?></p>
	<p>The Friendly ClassroomBooking Email Bot</p>

</body>
</html>