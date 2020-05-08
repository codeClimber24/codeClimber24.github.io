<?php
  define('IAMACAT', TRUE);
	# Script 1 - index.php
	# Created 19 August 2018
	# Created by Katherine Wharton
	# Content for Homepage

	$page_title = 'Welcome | Amethyst Beauty by Sophy';
	include('includes/header.php');
?>

<h3>Home</h3>
<div class="hello">
	<p>
		Welcome to my website!! My name is Sophy and I am a mobile beauty therapist based in Lichfield.
	</p>
	<p>
	<?php
		# Script 2 - index.php
		# Created 19 August 2018
		# Created by Katherine Wharton
		# script for deciding Homepage content
		$date = date('w');
		$time = date('H');
		switch ($date) {
			case '0':
				echo 'Sorry I am not working today. I am next working on Tuesday.';
        break;
			case '1':
				echo 'Sorry I am not working today. I am next working on Tuesday.';
				break;
			case '2':
				if ($time < 11) {
					echo 'Sorry I am not working at the moment, I start at 11am today.';
				} elseif ($time > 20) {
					echo 'Sorry I have finished for the day today, I am next working on Wednesday.';
				} else {
					echo 'I am working at the moment, if you would like to find out what appointments I have available please get in touch.';
				};
				break;
			case '3':
				if ($time < 10) {
					echo 'Sorry I am not working at the moment, I start at 10am today.';
				} elseif ($time > 20) {
					echo 'Sorry I have finished for the day today, I am next working on Thursday.';
				} else {
					echo 'I am working at the moment, if you would like to find out what appointments I have available please get in touch.';
				};
				break;
			case '4':
				if ($time < 10) {
					echo 'Sorry I am not working at the moment, I start at 10am today.';
				} elseif ($time > 20) {
					echo 'Sorry I have finished for the day today, I am next working on Friday.';
				} else {
					echo 'I am working at the moment, if you would like to find out what appointments I have available please get in touch.';
				};
				break;
			case '5':
				if ($time < 10) {
					echo 'Sorry I am not working at the moment, I start at 10am today.';
				} elseif ($time > 20) {
					echo 'Sorry I have finished for the day today, I am next working on Saturday.';
				} else {
					echo 'I am working at the moment, if you would like to find out what appointments I have available please get in touch.';
				};
				break;
			case '6':
				if ($time < 10) {
					echo 'Sorry I am not working at the moment, I start at 10am today.';
				} elseif ($time > 18) {
					echo 'Sorry I have finished for the day today, I am next working on Tuesday.';
				} else {
					echo 'I am working at the moment, if you would like to find out what appointments I have available please get in touch.';
				};
				break;
		}
	?>
	</p>
	<p>
		Please get in contact to find out when my next available appointment is!
	</p>
</div>

<?php
	include('includes/footer.php');
?>
