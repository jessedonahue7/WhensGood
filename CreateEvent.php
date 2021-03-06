<!--  https://cis444.cs.csusm.edu/group4/WhensGood/ScheduleEvent.php -->
<!-- T.V. PASS! -->
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<!--<meta charset = "UTF-8"/> not necessary according to Total Validator-->
	<title>Create Event</title> 
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
<?php 
	include ("functions.php");
	printNavigation();
	?>

	<main id="main">
		<h1>
			Create New Event!!
		</h1>

		<form action="ScheduleEvent.php" onsubmit="return ValidateForm()">

			<div class="grid_container">
				<div>
					<ul>
						<li>
							<label aria-label="Give your event a name for people to know what the event is for.">
								Event Name<br />
								<input class="text_input full" type="text" id="event_name" />
							</label>
						</li>
						<li>
							<label aria-label="Set the date range of when you would like your event to take place.">Event Date Range<br /></label>
							<input id="event_date_range_start" class="text_input half calendar" type="date" aria-label="event_date_range_start" placeholder="mm/dd/yyy"/>
							<input id="event_date_range_end" class="text_input half calendar" type="date" aria-label="event_date_range_end" placeholder="mm/dd/yyy"/>
						</li>
						<li>
							<label aria-label="Let your guest know by what date they need to respond by.">RSVP Deadline<br /></label>
							<input id="rsvp_deadline" class="text_input threeQuarters calendar" type="date" aria-label="rsvp_deadline" placeholder="mm/dd/yyy"/>
						</li>
						<li>
							<label aria-label="Set the minimum amount of time you need for your event to take place.">Event Duration<br /></label>
							<div class="text_input full">
								<input type="number" class="durration_time" id="hr" min="0" max="12" value="0" aria-label="Hours" />HR
								<input type="number" class="durration_time" id="min" min="0" max="59" step="15" value="0" aria-label="Minutes"/>MIN
							</div>
						</li>
						<li>
							<label aria-label="Enter your contact info.">
								Organizer's Email<br />
								<input class="text_input full" type="email" id="organizers_email" />
							</label>
						</li>
						<li>
							<label aria-label="Set a password so you can access the scheduler later">Event Password<br /></label>
							<input class="text_input full" type="password" id="event_password" aria-label="password" />
						</li>
						<li>
							<label aria-label="Upload your own calendar so it can be acounted for just like the participents">Organizer's Calendar<br /></label>

							<label class="custom_file_upload"  for="cal_upload">
								<span class="file_upload_button_text">Browse</span>
							</label>
							<input type="text" class="text_input full" readonly="readonly" id="choose_file" aria-label="Browse" />
							<input id="cal_upload" class="create" type="file" aria-label="Browse" />
						</li>
					</ul>

				</div>

				<div>
					<label> Select Event Windows</label>
					<div id="hour_table" class="hour_table white">
						<ol class="times">
							<li class="day"></li>
							<li class="time">00:00 AM</li>
							<li class="time">01:00 AM</li>
							<li class="time">02:00 AM</li>
							<li class="time">03:00 AM</li>
							<li class="time">04:00 AM</li>
							<li class="time">05:00 AM</li>
							<li class="time">06:00 AM</li>
							<li class="time">07:00 AM</li>
							<li class="time">08:00 AM</li>
							<li class="time">09:00 AM</li>
							<li class="time">10:00 AM</li>
							<li class="time">11:00 AM</li>
							<li class="time">12:00 PM</li>
							<li class="time">01:00 PM</li>
							<li class="time">02:00 PM</li>
							<li class="time">03:00 PM</li>
							<li class="time">04:00 PM</li>
							<li class="time">05:00 PM</li>
							<li class="time">06:00 PM</li>
							<li class="time">07:00 PM</li>
							<li class="time">08:00 PM</li>
							<li class="time">09:00 PM</li>
							<li class="time">10:00 PM</li>
							<li class="time">11:00 PM</li>
						</ol>
						<ol class="selectable_list" id="selectable-SUN">
							<li class="day">SUN</li>
							<li class="segment ui-widget-content" id="SUN-0000">SUN-0000</li>
							<li class="segment ui-widget-content" id="SUN-0015">SUN-0015</li>
							<li class="segment ui-widget-content" id="SUN-0030">SUN-0030</li>
							<li class="segment ui-widget-content" id="SUN-0045">SUN-0045</li>
							<li class="segment ui-widget-content" id="SUN-0100">SUN-0100</li>
							<li class="segment ui-widget-content" id="SUN-0115">SUN-0115</li>
							<li class="segment ui-widget-content" id="SUN-0130">SUN-0130</li>
							<li class="segment ui-widget-content" id="SUN-0145">SUN-0145</li>
							<li class="segment ui-widget-content" id="SUN-0200">SUN-0200</li>
							<li class="segment ui-widget-content" id="SUN-0215">SUN-0215</li>
							<li class="segment ui-widget-content" id="SUN-0230">SUN-0230</li>
							<li class="segment ui-widget-content" id="SUN-0245">SUN-0245</li>
							<li class="segment ui-widget-content" id="SUN-0300">SUN-0300</li>
							<li class="segment ui-widget-content" id="SUN-0315">SUN-0315</li>
							<li class="segment ui-widget-content" id="SUN-0330">SUN-0330</li>
							<li class="segment ui-widget-content" id="SUN-0345">SUN-0345</li>
							<li class="segment ui-widget-content" id="SUN-0400">SUN-0400</li>
							<li class="segment ui-widget-content" id="SUN-0415">SUN-0415</li>
							<li class="segment ui-widget-content" id="SUN-0430">SUN-0430</li>
							<li class="segment ui-widget-content" id="SUN-0445">SUN-0445</li>
							<li class="segment ui-widget-content" id="SUN-0500">SUN-0500</li>
							<li class="segment ui-widget-content" id="SUN-0515">SUN-0515</li>
							<li class="segment ui-widget-content" id="SUN-0530">SUN-0530</li>
							<li class="segment ui-widget-content" id="SUN-0545">SUN-0545</li>
							<li class="segment ui-widget-content" id="SUN-0600">SUN-0600</li>
							<li class="segment ui-widget-content" id="SUN-0615">SUN-0615</li>
							<li class="segment ui-widget-content" id="SUN-0630">SUN-0630</li>
							<li class="segment ui-widget-content" id="SUN-0645">SUN-0645</li>
							<li class="segment ui-widget-content" id="SUN-0700">SUN-0700</li>
							<li class="segment ui-widget-content" id="SUN-0715">SUN-0715</li>
							<li class="segment ui-widget-content" id="SUN-0730">SUN-0730</li>
							<li class="segment ui-widget-content" id="SUN-0745">SUN-0745</li>
							<li class="segment ui-widget-content" id="SUN-0800">SUN-0800</li>
							<li class="segment ui-widget-content" id="SUN-0815">SUN-0815</li>
							<li class="segment ui-widget-content" id="SUN-0830">SUN-0830</li>
							<li class="segment ui-widget-content" id="SUN-0845">SUN-0845</li>
							<li class="segment ui-widget-content" id="SUN-0900">SUN-0900</li>
							<li class="segment ui-widget-content" id="SUN-0915">SUN-0915</li>
							<li class="segment ui-widget-content" id="SUN-0930">SUN-0930</li>
							<li class="segment ui-widget-content" id="SUN-0945">SUN-0945</li>
							<li class="segment ui-widget-content" id="SUN-1000">SUN-1000</li>
							<li class="segment ui-widget-content" id="SUN-1015">SUN-1015</li>
							<li class="segment ui-widget-content" id="SUN-1030">SUN-1030</li>
							<li class="segment ui-widget-content" id="SUN-1045">SUN-1045</li>
							<li class="segment ui-widget-content" id="SUN-1100">SUN-1100</li>
							<li class="segment ui-widget-content" id="SUN-1115">SUN-1115</li>
							<li class="segment ui-widget-content" id="SUN-1130">SUN-1130</li>
							<li class="segment ui-widget-content" id="SUN-1145">SUN-1145</li>
							<li class="segment ui-widget-content" id="SUN-1200">SUN-1200</li>
							<li class="segment ui-widget-content" id="SUN-1215">SUN-1215</li>
							<li class="segment ui-widget-content" id="SUN-1230">SUN-1230</li>
							<li class="segment ui-widget-content" id="SUN-1245">SUN-1245</li>
							<li class="segment ui-widget-content" id="SUN-1300">SUN-1300</li>
							<li class="segment ui-widget-content" id="SUN-1315">SUN-1315</li>
							<li class="segment ui-widget-content" id="SUN-1330">SUN-1330</li>
							<li class="segment ui-widget-content" id="SUN-1345">SUN-1345</li>
							<li class="segment ui-widget-content" id="SUN-1400">SUN-1400</li>
							<li class="segment ui-widget-content" id="SUN-1415">SUN-1415</li>
							<li class="segment ui-widget-content" id="SUN-1430">SUN-1430</li>
							<li class="segment ui-widget-content" id="SUN-1445">SUN-1445</li>
							<li class="segment ui-widget-content" id="SUN-1500">SUN-1500</li>
							<li class="segment ui-widget-content" id="SUN-1515">SUN-1515</li>
							<li class="segment ui-widget-content" id="SUN-1530">SUN-1530</li>
							<li class="segment ui-widget-content" id="SUN-1545">SUN-1545</li>
							<li class="segment ui-widget-content" id="SUN-1600">SUN-1600</li>
							<li class="segment ui-widget-content" id="SUN-1615">SUN-1615</li>
							<li class="segment ui-widget-content" id="SUN-1630">SUN-1630</li>
							<li class="segment ui-widget-content" id="SUN-1645">SUN-1645</li>
							<li class="segment ui-widget-content" id="SUN-1700">SUN-1700</li>
							<li class="segment ui-widget-content" id="SUN-1715">SUN-1715</li>
							<li class="segment ui-widget-content" id="SUN-1730">SUN-1730</li>
							<li class="segment ui-widget-content" id="SUN-1745">SUN-1745</li>
							<li class="segment ui-widget-content" id="SUN-1800">SUN-1800</li>
							<li class="segment ui-widget-content" id="SUN-1815">SUN-1815</li>
							<li class="segment ui-widget-content" id="SUN-1830">SUN-1830</li>
							<li class="segment ui-widget-content" id="SUN-1845">SUN-1845</li>
							<li class="segment ui-widget-content" id="SUN-1900">SUN-1900</li>
							<li class="segment ui-widget-content" id="SUN-1915">SUN-1915</li>
							<li class="segment ui-widget-content" id="SUN-1930">SUN-1930</li>
							<li class="segment ui-widget-content" id="SUN-1945">SUN-1945</li>
							<li class="segment ui-widget-content" id="SUN-2000">SUN-2000</li>
							<li class="segment ui-widget-content" id="SUN-2015">SUN-2015</li>
							<li class="segment ui-widget-content" id="SUN-2030">SUN-2030</li>
							<li class="segment ui-widget-content" id="SUN-2045">SUN-2045</li>
							<li class="segment ui-widget-content" id="SUN-2100">SUN-2100</li>
							<li class="segment ui-widget-content" id="SUN-2115">SUN-2115</li>
							<li class="segment ui-widget-content" id="SUN-2130">SUN-2130</li>
							<li class="segment ui-widget-content" id="SUN-2145">SUN-2145</li>
							<li class="segment ui-widget-content" id="SUN-2200">SUN-2200</li>
							<li class="segment ui-widget-content" id="SUN-2215">SUN-2215</li>
							<li class="segment ui-widget-content" id="SUN-2230">SUN-2230</li>
							<li class="segment ui-widget-content" id="SUN-2245">SUN-2245</li>
							<li class="segment ui-widget-content" id="SUN-2300">SUN-2300</li>
							<li class="segment ui-widget-content" id="SUN-2315">SUN-2315</li>
							<li class="segment ui-widget-content" id="SUN-2330">SUN-2330</li>
							<li class="segment ui-widget-content" id="SUN-2345">SUN-2345</li>
						</ol>
						<ol class="selectable_list" id="selectable-MON">
							<li class="day">MON</li>
							<li class="segment ui-widget-content" id="MON-0000">MON-0000</li>
							<li class="segment ui-widget-content" id="MON-0015">MON-0015</li>
							<li class="segment ui-widget-content" id="MON-0030">MON-0030</li>
							<li class="segment ui-widget-content" id="MON-0045">MON-0045</li>
							<li class="segment ui-widget-content" id="MON-0100">MON-0100</li>
							<li class="segment ui-widget-content" id="MON-0115">MON-0115</li>
							<li class="segment ui-widget-content" id="MON-0130">MON-0130</li>
							<li class="segment ui-widget-content" id="MON-0145">MON-0145</li>
							<li class="segment ui-widget-content" id="MON-0200">MON-0200</li>
							<li class="segment ui-widget-content" id="MON-0215">MON-0215</li>
							<li class="segment ui-widget-content" id="MON-0230">MON-0230</li>
							<li class="segment ui-widget-content" id="MON-0245">MON-0245</li>
							<li class="segment ui-widget-content" id="MON-0300">MON-0300</li>
							<li class="segment ui-widget-content" id="MON-0315">MON-0315</li>
							<li class="segment ui-widget-content" id="MON-0330">MON-0330</li>
							<li class="segment ui-widget-content" id="MON-0345">MON-0345</li>
							<li class="segment ui-widget-content" id="MON-0400">MON-0400</li>
							<li class="segment ui-widget-content" id="MON-0415">MON-0415</li>
							<li class="segment ui-widget-content" id="MON-0430">MON-0430</li>
							<li class="segment ui-widget-content" id="MON-0445">MON-0445</li>
							<li class="segment ui-widget-content" id="MON-0500">MON-0500</li>
							<li class="segment ui-widget-content" id="MON-0515">MON-0515</li>
							<li class="segment ui-widget-content" id="MON-0530">MON-0530</li>
							<li class="segment ui-widget-content" id="MON-0545">MON-0545</li>
							<li class="segment ui-widget-content" id="MON-0600">MON-0600</li>
							<li class="segment ui-widget-content" id="MON-0615">MON-0615</li>
							<li class="segment ui-widget-content" id="MON-0630">MON-0630</li>
							<li class="segment ui-widget-content" id="MON-0645">MON-0645</li>
							<li class="segment ui-widget-content" id="MON-0700">MON-0700</li>
							<li class="segment ui-widget-content" id="MON-0715">MON-0715</li>
							<li class="segment ui-widget-content" id="MON-0730">MON-0730</li>
							<li class="segment ui-widget-content" id="MON-0745">MON-0745</li>
							<li class="segment ui-widget-content" id="MON-0800">MON-0800</li>
							<li class="segment ui-widget-content" id="MON-0815">MON-0815</li>
							<li class="segment ui-widget-content" id="MON-0830">MON-0830</li>
							<li class="segment ui-widget-content" id="MON-0845">MON-0845</li>
							<li class="segment ui-widget-content" id="MON-0900">MON-0900</li>
							<li class="segment ui-widget-content" id="MON-0915">MON-0915</li>
							<li class="segment ui-widget-content" id="MON-0930">MON-0930</li>
							<li class="segment ui-widget-content" id="MON-0945">MON-0945</li>
							<li class="segment ui-widget-content" id="MON-1000">MON-1000</li>
							<li class="segment ui-widget-content" id="MON-1015">MON-1015</li>
							<li class="segment ui-widget-content" id="MON-1030">MON-1030</li>
							<li class="segment ui-widget-content" id="MON-1045">MON-1045</li>
							<li class="segment ui-widget-content" id="MON-1100">MON-1100</li>
							<li class="segment ui-widget-content" id="MON-1115">MON-1115</li>
							<li class="segment ui-widget-content" id="MON-1130">MON-1130</li>
							<li class="segment ui-widget-content" id="MON-1145">MON-1145</li>
							<li class="segment ui-widget-content" id="MON-1200">MON-1200</li>
							<li class="segment ui-widget-content" id="MON-1215">MON-1215</li>
							<li class="segment ui-widget-content" id="MON-1230">MON-1230</li>
							<li class="segment ui-widget-content" id="MON-1245">MON-1245</li>
							<li class="segment ui-widget-content" id="MON-1300">MON-1300</li>
							<li class="segment ui-widget-content" id="MON-1315">MON-1315</li>
							<li class="segment ui-widget-content" id="MON-1330">MON-1330</li>
							<li class="segment ui-widget-content" id="MON-1345">MON-1345</li>
							<li class="segment ui-widget-content" id="MON-1400">MON-1400</li>
							<li class="segment ui-widget-content" id="MON-1415">MON-1415</li>
							<li class="segment ui-widget-content" id="MON-1430">MON-1430</li>
							<li class="segment ui-widget-content" id="MON-1445">MON-1445</li>
							<li class="segment ui-widget-content" id="MON-1500">MON-1500</li>
							<li class="segment ui-widget-content" id="MON-1515">MON-1515</li>
							<li class="segment ui-widget-content" id="MON-1530">MON-1530</li>
							<li class="segment ui-widget-content" id="MON-1545">MON-1545</li>
							<li class="segment ui-widget-content" id="MON-1600">MON-1600</li>
							<li class="segment ui-widget-content" id="MON-1615">MON-1615</li>
							<li class="segment ui-widget-content" id="MON-1630">MON-1630</li>
							<li class="segment ui-widget-content" id="MON-1645">MON-1645</li>
							<li class="segment ui-widget-content" id="MON-1700">MON-1700</li>
							<li class="segment ui-widget-content" id="MON-1715">MON-1715</li>
							<li class="segment ui-widget-content" id="MON-1730">MON-1730</li>
							<li class="segment ui-widget-content" id="MON-1745">MON-1745</li>
							<li class="segment ui-widget-content" id="MON-1800">MON-1800</li>
							<li class="segment ui-widget-content" id="MON-1815">MON-1815</li>
							<li class="segment ui-widget-content" id="MON-1830">MON-1830</li>
							<li class="segment ui-widget-content" id="MON-1845">MON-1845</li>
							<li class="segment ui-widget-content" id="MON-1900">MON-1900</li>
							<li class="segment ui-widget-content" id="MON-1915">MON-1915</li>
							<li class="segment ui-widget-content" id="MON-1930">MON-1930</li>
							<li class="segment ui-widget-content" id="MON-1945">MON-1945</li>
							<li class="segment ui-widget-content" id="MON-2000">MON-2000</li>
							<li class="segment ui-widget-content" id="MON-2015">MON-2015</li>
							<li class="segment ui-widget-content" id="MON-2030">MON-2030</li>
							<li class="segment ui-widget-content" id="MON-2045">MON-2045</li>
							<li class="segment ui-widget-content" id="MON-2100">MON-2100</li>
							<li class="segment ui-widget-content" id="MON-2115">MON-2115</li>
							<li class="segment ui-widget-content" id="MON-2130">MON-2130</li>
							<li class="segment ui-widget-content" id="MON-2145">MON-2145</li>
							<li class="segment ui-widget-content" id="MON-2200">MON-2200</li>
							<li class="segment ui-widget-content" id="MON-2215">MON-2215</li>
							<li class="segment ui-widget-content" id="MON-2230">MON-2230</li>
							<li class="segment ui-widget-content" id="MON-2245">MON-2245</li>
							<li class="segment ui-widget-content" id="MON-2300">MON-2300</li>
							<li class="segment ui-widget-content" id="MON-2315">MON-2315</li>
							<li class="segment ui-widget-content" id="MON-2330">MON-2330</li>
							<li class="segment ui-widget-content" id="MON-2345">MON-2345</li>
						</ol>
						<ol class="selectable_list" id="selectable-TUE">
							<li class="day">TUE</li>
							<li class="segment ui-widget-content" id="TUE-0000">TUE-0000</li>
							<li class="segment ui-widget-content" id="TUE-0015">TUE-0015</li>
							<li class="segment ui-widget-content" id="TUE-0030">TUE-0030</li>
							<li class="segment ui-widget-content" id="TUE-0045">TUE-0045</li>
							<li class="segment ui-widget-content" id="TUE-0100">TUE-0100</li>
							<li class="segment ui-widget-content" id="TUE-0115">TUE-0115</li>
							<li class="segment ui-widget-content" id="TUE-0130">TUE-0130</li>
							<li class="segment ui-widget-content" id="TUE-0145">TUE-0145</li>
							<li class="segment ui-widget-content" id="TUE-0200">TUE-0200</li>
							<li class="segment ui-widget-content" id="TUE-0215">TUE-0215</li>
							<li class="segment ui-widget-content" id="TUE-0230">TUE-0230</li>
							<li class="segment ui-widget-content" id="TUE-0245">TUE-0245</li>
							<li class="segment ui-widget-content" id="TUE-0300">TUE-0300</li>
							<li class="segment ui-widget-content" id="TUE-0315">TUE-0315</li>
							<li class="segment ui-widget-content" id="TUE-0330">TUE-0330</li>
							<li class="segment ui-widget-content" id="TUE-0345">TUE-0345</li>
							<li class="segment ui-widget-content" id="TUE-0400">TUE-0400</li>
							<li class="segment ui-widget-content" id="TUE-0415">TUE-0415</li>
							<li class="segment ui-widget-content" id="TUE-0430">TUE-0430</li>
							<li class="segment ui-widget-content" id="TUE-0445">TUE-0445</li>
							<li class="segment ui-widget-content" id="TUE-0500">TUE-0500</li>
							<li class="segment ui-widget-content" id="TUE-0515">TUE-0515</li>
							<li class="segment ui-widget-content" id="TUE-0530">TUE-0530</li>
							<li class="segment ui-widget-content" id="TUE-0545">TUE-0545</li>
							<li class="segment ui-widget-content" id="TUE-0600">TUE-0600</li>
							<li class="segment ui-widget-content" id="TUE-0615">TUE-0615</li>
							<li class="segment ui-widget-content" id="TUE-0630">TUE-0630</li>
							<li class="segment ui-widget-content" id="TUE-0645">TUE-0645</li>
							<li class="segment ui-widget-content" id="TUE-0700">TUE-0700</li>
							<li class="segment ui-widget-content" id="TUE-0715">TUE-0715</li>
							<li class="segment ui-widget-content" id="TUE-0730">TUE-0730</li>
							<li class="segment ui-widget-content" id="TUE-0745">TUE-0745</li>
							<li class="segment ui-widget-content" id="TUE-0800">TUE-0800</li>
							<li class="segment ui-widget-content" id="TUE-0815">TUE-0815</li>
							<li class="segment ui-widget-content" id="TUE-0830">TUE-0830</li>
							<li class="segment ui-widget-content" id="TUE-0845">TUE-0845</li>
							<li class="segment ui-widget-content" id="TUE-0900">TUE-0900</li>
							<li class="segment ui-widget-content" id="TUE-0915">TUE-0915</li>
							<li class="segment ui-widget-content" id="TUE-0930">TUE-0930</li>
							<li class="segment ui-widget-content" id="TUE-0945">TUE-0945</li>
							<li class="segment ui-widget-content" id="TUE-1000">TUE-1000</li>
							<li class="segment ui-widget-content" id="TUE-1015">TUE-1015</li>
							<li class="segment ui-widget-content" id="TUE-1030">TUE-1030</li>
							<li class="segment ui-widget-content" id="TUE-1045">TUE-1045</li>
							<li class="segment ui-widget-content" id="TUE-1100">TUE-1100</li>
							<li class="segment ui-widget-content" id="TUE-1115">TUE-1115</li>
							<li class="segment ui-widget-content" id="TUE-1130">TUE-1130</li>
							<li class="segment ui-widget-content" id="TUE-1145">TUE-1145</li>
							<li class="segment ui-widget-content" id="TUE-1200">TUE-1200</li>
							<li class="segment ui-widget-content" id="TUE-1215">TUE-1215</li>
							<li class="segment ui-widget-content" id="TUE-1230">TUE-1230</li>
							<li class="segment ui-widget-content" id="TUE-1245">TUE-1245</li>
							<li class="segment ui-widget-content" id="TUE-1300">TUE-1300</li>
							<li class="segment ui-widget-content" id="TUE-1315">TUE-1315</li>
							<li class="segment ui-widget-content" id="TUE-1330">TUE-1330</li>
							<li class="segment ui-widget-content" id="TUE-1345">TUE-1345</li>
							<li class="segment ui-widget-content" id="TUE-1400">TUE-1400</li>
							<li class="segment ui-widget-content" id="TUE-1415">TUE-1415</li>
							<li class="segment ui-widget-content" id="TUE-1430">TUE-1430</li>
							<li class="segment ui-widget-content" id="TUE-1445">TUE-1445</li>
							<li class="segment ui-widget-content" id="TUE-1500">TUE-1500</li>
							<li class="segment ui-widget-content" id="TUE-1515">TUE-1515</li>
							<li class="segment ui-widget-content" id="TUE-1530">TUE-1530</li>
							<li class="segment ui-widget-content" id="TUE-1545">TUE-1545</li>
							<li class="segment ui-widget-content" id="TUE-1600">TUE-1600</li>
							<li class="segment ui-widget-content" id="TUE-1615">TUE-1615</li>
							<li class="segment ui-widget-content" id="TUE-1630">TUE-1630</li>
							<li class="segment ui-widget-content" id="TUE-1645">TUE-1645</li>
							<li class="segment ui-widget-content" id="TUE-1700">TUE-1700</li>
							<li class="segment ui-widget-content" id="TUE-1715">TUE-1715</li>
							<li class="segment ui-widget-content" id="TUE-1730">TUE-1730</li>
							<li class="segment ui-widget-content" id="TUE-1745">TUE-1745</li>
							<li class="segment ui-widget-content" id="TUE-1800">TUE-1800</li>
							<li class="segment ui-widget-content" id="TUE-1815">TUE-1815</li>
							<li class="segment ui-widget-content" id="TUE-1830">TUE-1830</li>
							<li class="segment ui-widget-content" id="TUE-1845">TUE-1845</li>
							<li class="segment ui-widget-content" id="TUE-1900">TUE-1900</li>
							<li class="segment ui-widget-content" id="TUE-1915">TUE-1915</li>
							<li class="segment ui-widget-content" id="TUE-1930">TUE-1930</li>
							<li class="segment ui-widget-content" id="TUE-1945">TUE-1945</li>
							<li class="segment ui-widget-content" id="TUE-2000">TUE-2000</li>
							<li class="segment ui-widget-content" id="TUE-2015">TUE-2015</li>
							<li class="segment ui-widget-content" id="TUE-2030">TUE-2030</li>
							<li class="segment ui-widget-content" id="TUE-2045">TUE-2045</li>
							<li class="segment ui-widget-content" id="TUE-2100">TUE-2100</li>
							<li class="segment ui-widget-content" id="TUE-2115">TUE-2115</li>
							<li class="segment ui-widget-content" id="TUE-2130">TUE-2130</li>
							<li class="segment ui-widget-content" id="TUE-2145">TUE-2145</li>
							<li class="segment ui-widget-content" id="TUE-2200">TUE-2200</li>
							<li class="segment ui-widget-content" id="TUE-2215">TUE-2215</li>
							<li class="segment ui-widget-content" id="TUE-2230">TUE-2230</li>
							<li class="segment ui-widget-content" id="TUE-2245">TUE-2245</li>
							<li class="segment ui-widget-content" id="TUE-2300">TUE-2300</li>
							<li class="segment ui-widget-content" id="TUE-2315">TUE-2315</li>
							<li class="segment ui-widget-content" id="TUE-2330">TUE-2330</li>
							<li class="segment ui-widget-content" id="TUE-2345">TUE-2345</li>
						</ol>
						<ol class="selectable_list" id="selectable-WED">
							<li class="day">WED</li>
							<li class="segment ui-widget-content" id="WED-0000">WED-0000</li>
							<li class="segment ui-widget-content" id="WED-0015">WED-0015</li>
							<li class="segment ui-widget-content" id="WED-0030">WED-0030</li>
							<li class="segment ui-widget-content" id="WED-0045">WED-0045</li>
							<li class="segment ui-widget-content" id="WED-0100">WED-0100</li>
							<li class="segment ui-widget-content" id="WED-0115">WED-0115</li>
							<li class="segment ui-widget-content" id="WED-0130">WED-0130</li>
							<li class="segment ui-widget-content" id="WED-0145">WED-0145</li>
							<li class="segment ui-widget-content" id="WED-0200">WED-0200</li>
							<li class="segment ui-widget-content" id="WED-0215">WED-0215</li>
							<li class="segment ui-widget-content" id="WED-0230">WED-0230</li>
							<li class="segment ui-widget-content" id="WED-0245">WED-0245</li>
							<li class="segment ui-widget-content" id="WED-0300">WED-0300</li>
							<li class="segment ui-widget-content" id="WED-0315">WED-0315</li>
							<li class="segment ui-widget-content" id="WED-0330">WED-0330</li>
							<li class="segment ui-widget-content" id="WED-0345">WED-0345</li>
							<li class="segment ui-widget-content" id="WED-0400">WED-0400</li>
							<li class="segment ui-widget-content" id="WED-0415">WED-0415</li>
							<li class="segment ui-widget-content" id="WED-0430">WED-0430</li>
							<li class="segment ui-widget-content" id="WED-0445">WED-0445</li>
							<li class="segment ui-widget-content" id="WED-0500">WED-0500</li>
							<li class="segment ui-widget-content" id="WED-0515">WED-0515</li>
							<li class="segment ui-widget-content" id="WED-0530">WED-0530</li>
							<li class="segment ui-widget-content" id="WED-0545">WED-0545</li>
							<li class="segment ui-widget-content" id="WED-0600">WED-0600</li>
							<li class="segment ui-widget-content" id="WED-0615">WED-0615</li>
							<li class="segment ui-widget-content" id="WED-0630">WED-0630</li>
							<li class="segment ui-widget-content" id="WED-0645">WED-0645</li>
							<li class="segment ui-widget-content" id="WED-0700">WED-0700</li>
							<li class="segment ui-widget-content" id="WED-0715">WED-0715</li>
							<li class="segment ui-widget-content" id="WED-0730">WED-0730</li>
							<li class="segment ui-widget-content" id="WED-0745">WED-0745</li>
							<li class="segment ui-widget-content" id="WED-0800">WED-0800</li>
							<li class="segment ui-widget-content" id="WED-0815">WED-0815</li>
							<li class="segment ui-widget-content" id="WED-0830">WED-0830</li>
							<li class="segment ui-widget-content" id="WED-0845">WED-0845</li>
							<li class="segment ui-widget-content" id="WED-0900">WED-0900</li>
							<li class="segment ui-widget-content" id="WED-0915">WED-0915</li>
							<li class="segment ui-widget-content" id="WED-0930">WED-0930</li>
							<li class="segment ui-widget-content" id="WED-0945">WED-0945</li>
							<li class="segment ui-widget-content" id="WED-1000">WED-1000</li>
							<li class="segment ui-widget-content" id="WED-1015">WED-1015</li>
							<li class="segment ui-widget-content" id="WED-1030">WED-1030</li>
							<li class="segment ui-widget-content" id="WED-1045">WED-1045</li>
							<li class="segment ui-widget-content" id="WED-1100">WED-1100</li>
							<li class="segment ui-widget-content" id="WED-1115">WED-1115</li>
							<li class="segment ui-widget-content" id="WED-1130">WED-1130</li>
							<li class="segment ui-widget-content" id="WED-1145">WED-1145</li>
							<li class="segment ui-widget-content" id="WED-1200">WED-1200</li>
							<li class="segment ui-widget-content" id="WED-1215">WED-1215</li>
							<li class="segment ui-widget-content" id="WED-1230">WED-1230</li>
							<li class="segment ui-widget-content" id="WED-1245">WED-1245</li>
							<li class="segment ui-widget-content" id="WED-1300">WED-1300</li>
							<li class="segment ui-widget-content" id="WED-1315">WED-1315</li>
							<li class="segment ui-widget-content" id="WED-1330">WED-1330</li>
							<li class="segment ui-widget-content" id="WED-1345">WED-1345</li>
							<li class="segment ui-widget-content" id="WED-1400">WED-1400</li>
							<li class="segment ui-widget-content" id="WED-1415">WED-1415</li>
							<li class="segment ui-widget-content" id="WED-1430">WED-1430</li>
							<li class="segment ui-widget-content" id="WED-1445">WED-1445</li>
							<li class="segment ui-widget-content" id="WED-1500">WED-1500</li>
							<li class="segment ui-widget-content" id="WED-1515">WED-1515</li>
							<li class="segment ui-widget-content" id="WED-1530">WED-1530</li>
							<li class="segment ui-widget-content" id="WED-1545">WED-1545</li>
							<li class="segment ui-widget-content" id="WED-1600">WED-1600</li>
							<li class="segment ui-widget-content" id="WED-1615">WED-1615</li>
							<li class="segment ui-widget-content" id="WED-1630">WED-1630</li>
							<li class="segment ui-widget-content" id="WED-1645">WED-1645</li>
							<li class="segment ui-widget-content" id="WED-1700">WED-1700</li>
							<li class="segment ui-widget-content" id="WED-1715">WED-1715</li>
							<li class="segment ui-widget-content" id="WED-1730">WED-1730</li>
							<li class="segment ui-widget-content" id="WED-1745">WED-1745</li>
							<li class="segment ui-widget-content" id="WED-1800">WED-1800</li>
							<li class="segment ui-widget-content" id="WED-1815">WED-1815</li>
							<li class="segment ui-widget-content" id="WED-1830">WED-1830</li>
							<li class="segment ui-widget-content" id="WED-1845">WED-1845</li>
							<li class="segment ui-widget-content" id="WED-1900">WED-1900</li>
							<li class="segment ui-widget-content" id="WED-1915">WED-1915</li>
							<li class="segment ui-widget-content" id="WED-1930">WED-1930</li>
							<li class="segment ui-widget-content" id="WED-1945">WED-1945</li>
							<li class="segment ui-widget-content" id="WED-2000">WED-2000</li>
							<li class="segment ui-widget-content" id="WED-2015">WED-2015</li>
							<li class="segment ui-widget-content" id="WED-2030">WED-2030</li>
							<li class="segment ui-widget-content" id="WED-2045">WED-2045</li>
							<li class="segment ui-widget-content" id="WED-2100">WED-2100</li>
							<li class="segment ui-widget-content" id="WED-2115">WED-2115</li>
							<li class="segment ui-widget-content" id="WED-2130">WED-2130</li>
							<li class="segment ui-widget-content" id="WED-2145">WED-2145</li>
							<li class="segment ui-widget-content" id="WED-2200">WED-2200</li>
							<li class="segment ui-widget-content" id="WED-2215">WED-2215</li>
							<li class="segment ui-widget-content" id="WED-2230">WED-2230</li>
							<li class="segment ui-widget-content" id="WED-2245">WED-2245</li>
							<li class="segment ui-widget-content" id="WED-2300">WED-2300</li>
							<li class="segment ui-widget-content" id="WED-2315">WED-2315</li>
							<li class="segment ui-widget-content" id="WED-2330">WED-2330</li>
							<li class="segment ui-widget-content" id="WED-2345">WED-2345</li>
						</ol>
						<ol class="selectable_list" id="selectable-THR">
							<li class="day">THR</li>
							<li class="segment ui-widget-content" id="THR-0000">THR-0000</li>
							<li class="segment ui-widget-content" id="THR-0015">THR-0015</li>
							<li class="segment ui-widget-content" id="THR-0030">THR-0030</li>
							<li class="segment ui-widget-content" id="THR-0045">THR-0045</li>
							<li class="segment ui-widget-content" id="THR-0100">THR-0100</li>
							<li class="segment ui-widget-content" id="THR-0115">THR-0115</li>
							<li class="segment ui-widget-content" id="THR-0130">THR-0130</li>
							<li class="segment ui-widget-content" id="THR-0145">THR-0145</li>
							<li class="segment ui-widget-content" id="THR-0200">THR-0200</li>
							<li class="segment ui-widget-content" id="THR-0215">THR-0215</li>
							<li class="segment ui-widget-content" id="THR-0230">THR-0230</li>
							<li class="segment ui-widget-content" id="THR-0245">THR-0245</li>
							<li class="segment ui-widget-content" id="THR-0300">THR-0300</li>
							<li class="segment ui-widget-content" id="THR-0315">THR-0315</li>
							<li class="segment ui-widget-content" id="THR-0330">THR-0330</li>
							<li class="segment ui-widget-content" id="THR-0345">THR-0345</li>
							<li class="segment ui-widget-content" id="THR-0400">THR-0400</li>
							<li class="segment ui-widget-content" id="THR-0415">THR-0415</li>
							<li class="segment ui-widget-content" id="THR-0430">THR-0430</li>
							<li class="segment ui-widget-content" id="THR-0445">THR-0445</li>
							<li class="segment ui-widget-content" id="THR-0500">THR-0500</li>
							<li class="segment ui-widget-content" id="THR-0515">THR-0515</li>
							<li class="segment ui-widget-content" id="THR-0530">THR-0530</li>
							<li class="segment ui-widget-content" id="THR-0545">THR-0545</li>
							<li class="segment ui-widget-content" id="THR-0600">THR-0600</li>
							<li class="segment ui-widget-content" id="THR-0615">THR-0615</li>
							<li class="segment ui-widget-content" id="THR-0630">THR-0630</li>
							<li class="segment ui-widget-content" id="THR-0645">THR-0645</li>
							<li class="segment ui-widget-content" id="THR-0700">THR-0700</li>
							<li class="segment ui-widget-content" id="THR-0715">THR-0715</li>
							<li class="segment ui-widget-content" id="THR-0730">THR-0730</li>
							<li class="segment ui-widget-content" id="THR-0745">THR-0745</li>
							<li class="segment ui-widget-content" id="THR-0800">THR-0800</li>
							<li class="segment ui-widget-content" id="THR-0815">THR-0815</li>
							<li class="segment ui-widget-content" id="THR-0830">THR-0830</li>
							<li class="segment ui-widget-content" id="THR-0845">THR-0845</li>
							<li class="segment ui-widget-content" id="THR-0900">THR-0900</li>
							<li class="segment ui-widget-content" id="THR-0915">THR-0915</li>
							<li class="segment ui-widget-content" id="THR-0930">THR-0930</li>
							<li class="segment ui-widget-content" id="THR-0945">THR-0945</li>
							<li class="segment ui-widget-content" id="THR-1000">THR-1000</li>
							<li class="segment ui-widget-content" id="THR-1015">THR-1015</li>
							<li class="segment ui-widget-content" id="THR-1030">THR-1030</li>
							<li class="segment ui-widget-content" id="THR-1045">THR-1045</li>
							<li class="segment ui-widget-content" id="THR-1100">THR-1100</li>
							<li class="segment ui-widget-content" id="THR-1115">THR-1115</li>
							<li class="segment ui-widget-content" id="THR-1130">THR-1130</li>
							<li class="segment ui-widget-content" id="THR-1145">THR-1145</li>
							<li class="segment ui-widget-content" id="THR-1200">THR-1200</li>
							<li class="segment ui-widget-content" id="THR-1215">THR-1215</li>
							<li class="segment ui-widget-content" id="THR-1230">THR-1230</li>
							<li class="segment ui-widget-content" id="THR-1245">THR-1245</li>
							<li class="segment ui-widget-content" id="THR-1300">THR-1300</li>
							<li class="segment ui-widget-content" id="THR-1315">THR-1315</li>
							<li class="segment ui-widget-content" id="THR-1330">THR-1330</li>
							<li class="segment ui-widget-content" id="THR-1345">THR-1345</li>
							<li class="segment ui-widget-content" id="THR-1400">THR-1400</li>
							<li class="segment ui-widget-content" id="THR-1415">THR-1415</li>
							<li class="segment ui-widget-content" id="THR-1430">THR-1430</li>
							<li class="segment ui-widget-content" id="THR-1445">THR-1445</li>
							<li class="segment ui-widget-content" id="THR-1500">THR-1500</li>
							<li class="segment ui-widget-content" id="THR-1515">THR-1515</li>
							<li class="segment ui-widget-content" id="THR-1530">THR-1530</li>
							<li class="segment ui-widget-content" id="THR-1545">THR-1545</li>
							<li class="segment ui-widget-content" id="THR-1600">THR-1600</li>
							<li class="segment ui-widget-content" id="THR-1615">THR-1615</li>
							<li class="segment ui-widget-content" id="THR-1630">THR-1630</li>
							<li class="segment ui-widget-content" id="THR-1645">THR-1645</li>
							<li class="segment ui-widget-content" id="THR-1700">THR-1700</li>
							<li class="segment ui-widget-content" id="THR-1715">THR-1715</li>
							<li class="segment ui-widget-content" id="THR-1730">THR-1730</li>
							<li class="segment ui-widget-content" id="THR-1745">THR-1745</li>
							<li class="segment ui-widget-content" id="THR-1800">THR-1800</li>
							<li class="segment ui-widget-content" id="THR-1815">THR-1815</li>
							<li class="segment ui-widget-content" id="THR-1830">THR-1830</li>
							<li class="segment ui-widget-content" id="THR-1845">THR-1845</li>
							<li class="segment ui-widget-content" id="THR-1900">THR-1900</li>
							<li class="segment ui-widget-content" id="THR-1915">THR-1915</li>
							<li class="segment ui-widget-content" id="THR-1930">THR-1930</li>
							<li class="segment ui-widget-content" id="THR-1945">THR-1945</li>
							<li class="segment ui-widget-content" id="THR-2000">THR-2000</li>
							<li class="segment ui-widget-content" id="THR-2015">THR-2015</li>
							<li class="segment ui-widget-content" id="THR-2030">THR-2030</li>
							<li class="segment ui-widget-content" id="THR-2045">THR-2045</li>
							<li class="segment ui-widget-content" id="THR-2100">THR-2100</li>
							<li class="segment ui-widget-content" id="THR-2115">THR-2115</li>
							<li class="segment ui-widget-content" id="THR-2130">THR-2130</li>
							<li class="segment ui-widget-content" id="THR-2145">THR-2145</li>
							<li class="segment ui-widget-content" id="THR-2200">THR-2200</li>
							<li class="segment ui-widget-content" id="THR-2215">THR-2215</li>
							<li class="segment ui-widget-content" id="THR-2230">THR-2230</li>
							<li class="segment ui-widget-content" id="THR-2245">THR-2245</li>
							<li class="segment ui-widget-content" id="THR-2300">THR-2300</li>
							<li class="segment ui-widget-content" id="THR-2315">THR-2315</li>
							<li class="segment ui-widget-content" id="THR-2330">THR-2330</li>
							<li class="segment ui-widget-content" id="THR-2345">THR-2345</li>
						</ol>
						<ol class="selectable_list" id="selectable-FRI">
							<li class="day">FRI</li>
							<li class="segment ui-widget-content" id="FRI-0000">FRI-0000</li>
							<li class="segment ui-widget-content" id="FRI-0015">FRI-0015</li>
							<li class="segment ui-widget-content" id="FRI-0030">FRI-0030</li>
							<li class="segment ui-widget-content" id="FRI-0045">FRI-0045</li>
							<li class="segment ui-widget-content" id="FRI-0100">FRI-0100</li>
							<li class="segment ui-widget-content" id="FRI-0115">FRI-0115</li>
							<li class="segment ui-widget-content" id="FRI-0130">FRI-0130</li>
							<li class="segment ui-widget-content" id="FRI-0145">FRI-0145</li>
							<li class="segment ui-widget-content" id="FRI-0200">FRI-0200</li>
							<li class="segment ui-widget-content" id="FRI-0215">FRI-0215</li>
							<li class="segment ui-widget-content" id="FRI-0230">FRI-0230</li>
							<li class="segment ui-widget-content" id="FRI-0245">FRI-0245</li>
							<li class="segment ui-widget-content" id="FRI-0300">FRI-0300</li>
							<li class="segment ui-widget-content" id="FRI-0315">FRI-0315</li>
							<li class="segment ui-widget-content" id="FRI-0330">FRI-0330</li>
							<li class="segment ui-widget-content" id="FRI-0345">FRI-0345</li>
							<li class="segment ui-widget-content" id="FRI-0400">FRI-0400</li>
							<li class="segment ui-widget-content" id="FRI-0415">FRI-0415</li>
							<li class="segment ui-widget-content" id="FRI-0430">FRI-0430</li>
							<li class="segment ui-widget-content" id="FRI-0445">FRI-0445</li>
							<li class="segment ui-widget-content" id="FRI-0500">FRI-0500</li>
							<li class="segment ui-widget-content" id="FRI-0515">FRI-0515</li>
							<li class="segment ui-widget-content" id="FRI-0530">FRI-0530</li>
							<li class="segment ui-widget-content" id="FRI-0545">FRI-0545</li>
							<li class="segment ui-widget-content" id="FRI-0600">FRI-0600</li>
							<li class="segment ui-widget-content" id="FRI-0615">FRI-0615</li>
							<li class="segment ui-widget-content" id="FRI-0630">FRI-0630</li>
							<li class="segment ui-widget-content" id="FRI-0645">FRI-0645</li>
							<li class="segment ui-widget-content" id="FRI-0700">FRI-0700</li>
							<li class="segment ui-widget-content" id="FRI-0715">FRI-0715</li>
							<li class="segment ui-widget-content" id="FRI-0730">FRI-0730</li>
							<li class="segment ui-widget-content" id="FRI-0745">FRI-0745</li>
							<li class="segment ui-widget-content" id="FRI-0800">FRI-0800</li>
							<li class="segment ui-widget-content" id="FRI-0815">FRI-0815</li>
							<li class="segment ui-widget-content" id="FRI-0830">FRI-0830</li>
							<li class="segment ui-widget-content" id="FRI-0845">FRI-0845</li>
							<li class="segment ui-widget-content" id="FRI-0900">FRI-0900</li>
							<li class="segment ui-widget-content" id="FRI-0915">FRI-0915</li>
							<li class="segment ui-widget-content" id="FRI-0930">FRI-0930</li>
							<li class="segment ui-widget-content" id="FRI-0945">FRI-0945</li>
							<li class="segment ui-widget-content" id="FRI-1000">FRI-1000</li>
							<li class="segment ui-widget-content" id="FRI-1015">FRI-1015</li>
							<li class="segment ui-widget-content" id="FRI-1030">FRI-1030</li>
							<li class="segment ui-widget-content" id="FRI-1045">FRI-1045</li>
							<li class="segment ui-widget-content" id="FRI-1100">FRI-1100</li>
							<li class="segment ui-widget-content" id="FRI-1115">FRI-1115</li>
							<li class="segment ui-widget-content" id="FRI-1130">FRI-1130</li>
							<li class="segment ui-widget-content" id="FRI-1145">FRI-1145</li>
							<li class="segment ui-widget-content" id="FRI-1200">FRI-1200</li>
							<li class="segment ui-widget-content" id="FRI-1215">FRI-1215</li>
							<li class="segment ui-widget-content" id="FRI-1230">FRI-1230</li>
							<li class="segment ui-widget-content" id="FRI-1245">FRI-1245</li>
							<li class="segment ui-widget-content" id="FRI-1300">FRI-1300</li>
							<li class="segment ui-widget-content" id="FRI-1315">FRI-1315</li>
							<li class="segment ui-widget-content" id="FRI-1330">FRI-1330</li>
							<li class="segment ui-widget-content" id="FRI-1345">FRI-1345</li>
							<li class="segment ui-widget-content" id="FRI-1400">FRI-1400</li>
							<li class="segment ui-widget-content" id="FRI-1415">FRI-1415</li>
							<li class="segment ui-widget-content" id="FRI-1430">FRI-1430</li>
							<li class="segment ui-widget-content" id="FRI-1445">FRI-1445</li>
							<li class="segment ui-widget-content" id="FRI-1500">FRI-1500</li>
							<li class="segment ui-widget-content" id="FRI-1515">FRI-1515</li>
							<li class="segment ui-widget-content" id="FRI-1530">FRI-1530</li>
							<li class="segment ui-widget-content" id="FRI-1545">FRI-1545</li>
							<li class="segment ui-widget-content" id="FRI-1600">FRI-1600</li>
							<li class="segment ui-widget-content" id="FRI-1615">FRI-1615</li>
							<li class="segment ui-widget-content" id="FRI-1630">FRI-1630</li>
							<li class="segment ui-widget-content" id="FRI-1645">FRI-1645</li>
							<li class="segment ui-widget-content" id="FRI-1700">FRI-1700</li>
							<li class="segment ui-widget-content" id="FRI-1715">FRI-1715</li>
							<li class="segment ui-widget-content" id="FRI-1730">FRI-1730</li>
							<li class="segment ui-widget-content" id="FRI-1745">FRI-1745</li>
							<li class="segment ui-widget-content" id="FRI-1800">FRI-1800</li>
							<li class="segment ui-widget-content" id="FRI-1815">FRI-1815</li>
							<li class="segment ui-widget-content" id="FRI-1830">FRI-1830</li>
							<li class="segment ui-widget-content" id="FRI-1845">FRI-1845</li>
							<li class="segment ui-widget-content" id="FRI-1900">FRI-1900</li>
							<li class="segment ui-widget-content" id="FRI-1915">FRI-1915</li>
							<li class="segment ui-widget-content" id="FRI-1930">FRI-1930</li>
							<li class="segment ui-widget-content" id="FRI-1945">FRI-1945</li>
							<li class="segment ui-widget-content" id="FRI-2000">FRI-2000</li>
							<li class="segment ui-widget-content" id="FRI-2015">FRI-2015</li>
							<li class="segment ui-widget-content" id="FRI-2030">FRI-2030</li>
							<li class="segment ui-widget-content" id="FRI-2045">FRI-2045</li>
							<li class="segment ui-widget-content" id="FRI-2100">FRI-2100</li>
							<li class="segment ui-widget-content" id="FRI-2115">FRI-2115</li>
							<li class="segment ui-widget-content" id="FRI-2130">FRI-2130</li>
							<li class="segment ui-widget-content" id="FRI-2145">FRI-2145</li>
							<li class="segment ui-widget-content" id="FRI-2200">FRI-2200</li>
							<li class="segment ui-widget-content" id="FRI-2215">FRI-2215</li>
							<li class="segment ui-widget-content" id="FRI-2230">FRI-2230</li>
							<li class="segment ui-widget-content" id="FRI-2245">FRI-2245</li>
							<li class="segment ui-widget-content" id="FRI-2300">FRI-2300</li>
							<li class="segment ui-widget-content" id="FRI-2315">FRI-2315</li>
							<li class="segment ui-widget-content" id="FRI-2330">FRI-2330</li>
							<li class="segment ui-widget-content" id="FRI-2345">FRI-2345</li>
						</ol>
						<ol class="selectable_list" id="selectable-SAT">
							<li class="day">SAT</li>
							<li class="segment ui-widget-content" id="SAT-0000">SAT-0000</li>
							<li class="segment ui-widget-content" id="SAT-0015">SAT-0015</li>
							<li class="segment ui-widget-content" id="SAT-0030">SAT-0030</li>
							<li class="segment ui-widget-content" id="SAT-0045">SAT-0045</li>
							<li class="segment ui-widget-content" id="SAT-0100">SAT-0100</li>
							<li class="segment ui-widget-content" id="SAT-0115">SAT-0115</li>
							<li class="segment ui-widget-content" id="SAT-0130">SAT-0130</li>
							<li class="segment ui-widget-content" id="SAT-0145">SAT-0145</li>
							<li class="segment ui-widget-content" id="SAT-0200">SAT-0200</li>
							<li class="segment ui-widget-content" id="SAT-0215">SAT-0215</li>
							<li class="segment ui-widget-content" id="SAT-0230">SAT-0230</li>
							<li class="segment ui-widget-content" id="SAT-0245">SAT-0245</li>
							<li class="segment ui-widget-content" id="SAT-0300">SAT-0300</li>
							<li class="segment ui-widget-content" id="SAT-0315">SAT-0315</li>
							<li class="segment ui-widget-content" id="SAT-0330">SAT-0330</li>
							<li class="segment ui-widget-content" id="SAT-0345">SAT-0345</li>
							<li class="segment ui-widget-content" id="SAT-0400">SAT-0400</li>
							<li class="segment ui-widget-content" id="SAT-0415">SAT-0415</li>
							<li class="segment ui-widget-content" id="SAT-0430">SAT-0430</li>
							<li class="segment ui-widget-content" id="SAT-0445">SAT-0445</li>
							<li class="segment ui-widget-content" id="SAT-0500">SAT-0500</li>
							<li class="segment ui-widget-content" id="SAT-0515">SAT-0515</li>
							<li class="segment ui-widget-content" id="SAT-0530">SAT-0530</li>
							<li class="segment ui-widget-content" id="SAT-0545">SAT-0545</li>
							<li class="segment ui-widget-content" id="SAT-0600">SAT-0600</li>
							<li class="segment ui-widget-content" id="SAT-0615">SAT-0615</li>
							<li class="segment ui-widget-content" id="SAT-0630">SAT-0630</li>
							<li class="segment ui-widget-content" id="SAT-0645">SAT-0645</li>
							<li class="segment ui-widget-content" id="SAT-0700">SAT-0700</li>
							<li class="segment ui-widget-content" id="SAT-0715">SAT-0715</li>
							<li class="segment ui-widget-content" id="SAT-0730">SAT-0730</li>
							<li class="segment ui-widget-content" id="SAT-0745">SAT-0745</li>
							<li class="segment ui-widget-content" id="SAT-0800">SAT-0800</li>
							<li class="segment ui-widget-content" id="SAT-0815">SAT-0815</li>
							<li class="segment ui-widget-content" id="SAT-0830">SAT-0830</li>
							<li class="segment ui-widget-content" id="SAT-0845">SAT-0845</li>
							<li class="segment ui-widget-content" id="SAT-0900">SAT-0900</li>
							<li class="segment ui-widget-content" id="SAT-0915">SAT-0915</li>
							<li class="segment ui-widget-content" id="SAT-0930">SAT-0930</li>
							<li class="segment ui-widget-content" id="SAT-0945">SAT-0945</li>
							<li class="segment ui-widget-content" id="SAT-1000">SAT-1000</li>
							<li class="segment ui-widget-content" id="SAT-1015">SAT-1015</li>
							<li class="segment ui-widget-content" id="SAT-1030">SAT-1030</li>
							<li class="segment ui-widget-content" id="SAT-1045">SAT-1045</li>
							<li class="segment ui-widget-content" id="SAT-1100">SAT-1100</li>
							<li class="segment ui-widget-content" id="SAT-1115">SAT-1115</li>
							<li class="segment ui-widget-content" id="SAT-1130">SAT-1130</li>
							<li class="segment ui-widget-content" id="SAT-1145">SAT-1145</li>
							<li class="segment ui-widget-content" id="SAT-1200">SAT-1200</li>
							<li class="segment ui-widget-content" id="SAT-1215">SAT-1215</li>
							<li class="segment ui-widget-content" id="SAT-1230">SAT-1230</li>
							<li class="segment ui-widget-content" id="SAT-1245">SAT-1245</li>
							<li class="segment ui-widget-content" id="SAT-1300">SAT-1300</li>
							<li class="segment ui-widget-content" id="SAT-1315">SAT-1315</li>
							<li class="segment ui-widget-content" id="SAT-1330">SAT-1330</li>
							<li class="segment ui-widget-content" id="SAT-1345">SAT-1345</li>
							<li class="segment ui-widget-content" id="SAT-1400">SAT-1400</li>
							<li class="segment ui-widget-content" id="SAT-1415">SAT-1415</li>
							<li class="segment ui-widget-content" id="SAT-1430">SAT-1430</li>
							<li class="segment ui-widget-content" id="SAT-1445">SAT-1445</li>
							<li class="segment ui-widget-content" id="SAT-1500">SAT-1500</li>
							<li class="segment ui-widget-content" id="SAT-1515">SAT-1515</li>
							<li class="segment ui-widget-content" id="SAT-1530">SAT-1530</li>
							<li class="segment ui-widget-content" id="SAT-1545">SAT-1545</li>
							<li class="segment ui-widget-content" id="SAT-1600">SAT-1600</li>
							<li class="segment ui-widget-content" id="SAT-1615">SAT-1615</li>
							<li class="segment ui-widget-content" id="SAT-1630">SAT-1630</li>
							<li class="segment ui-widget-content" id="SAT-1645">SAT-1645</li>
							<li class="segment ui-widget-content" id="SAT-1700">SAT-1700</li>
							<li class="segment ui-widget-content" id="SAT-1715">SAT-1715</li>
							<li class="segment ui-widget-content" id="SAT-1730">SAT-1730</li>
							<li class="segment ui-widget-content" id="SAT-1745">SAT-1745</li>
							<li class="segment ui-widget-content" id="SAT-1800">SAT-1800</li>
							<li class="segment ui-widget-content" id="SAT-1815">SAT-1815</li>
							<li class="segment ui-widget-content" id="SAT-1830">SAT-1830</li>
							<li class="segment ui-widget-content" id="SAT-1845">SAT-1845</li>
							<li class="segment ui-widget-content" id="SAT-1900">SAT-1900</li>
							<li class="segment ui-widget-content" id="SAT-1915">SAT-1915</li>
							<li class="segment ui-widget-content" id="SAT-1930">SAT-1930</li>
							<li class="segment ui-widget-content" id="SAT-1945">SAT-1945</li>
							<li class="segment ui-widget-content" id="SAT-2000">SAT-2000</li>
							<li class="segment ui-widget-content" id="SAT-2015">SAT-2015</li>
							<li class="segment ui-widget-content" id="SAT-2030">SAT-2030</li>
							<li class="segment ui-widget-content" id="SAT-2045">SAT-2045</li>
							<li class="segment ui-widget-content" id="SAT-2100">SAT-2100</li>
							<li class="segment ui-widget-content" id="SAT-2115">SAT-2115</li>
							<li class="segment ui-widget-content" id="SAT-2130">SAT-2130</li>
							<li class="segment ui-widget-content" id="SAT-2145">SAT-2145</li>
							<li class="segment ui-widget-content" id="SAT-2200">SAT-2200</li>
							<li class="segment ui-widget-content" id="SAT-2215">SAT-2215</li>
							<li class="segment ui-widget-content" id="SAT-2230">SAT-2230</li>
							<li class="segment ui-widget-content" id="SAT-2245">SAT-2245</li>
							<li class="segment ui-widget-content" id="SAT-2300">SAT-2300</li>
							<li class="segment ui-widget-content" id="SAT-2315">SAT-2315</li>
							<li class="segment ui-widget-content" id="SAT-2330">SAT-2330</li>
							<li class="segment ui-widget-content" id="SAT-2345">SAT-2345</li>
						</ol>

					</div>
					<p class="note">
						* hold CTRL / CMD key to select multiple event windows on the same day <br />
						* click on the Day title to clear all event windows on that day
					</p>
				</div>
			</div>
			<button class="button span red" id="button">Schedule Event</button>
		</form>

	</main>
	<p id="feedback" class="feedback">
		<span>Time Slots:</span> <span id="select-result"></span>
	</p>
	<script type="text/javascript" src="script/Validation.js"></script>
	<script type="text/javascript" src="script/create_event.js"></script>
</body>
</html>
