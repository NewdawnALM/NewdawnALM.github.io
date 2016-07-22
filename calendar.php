<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8">
	<title>年历</title>
</head>
<body>
<form action="" method="post">
<?php
	echo 'Year:&nbsp;&nbsp;<select name="year">';
	$year = 2005;
	while($year <= 2016) {
		echo "<option value=\"$year\">$year</option>\n";
		$year++;
	}
	echo "</select><br><br>\n";

	echo 'Month:&nbsp;&nbsp;<select name="month">';
	$month = 1;
	do {
		echo "<option value=\"$month\">$month</option>\n";
		++$month;
	} while($month <= 12);
	echo "</select><br><br>\n";

	echo "day:&nbsp;&nbsp;<select name='day'>";
	for($day = 1; $day <= 31; ++$day) {
		echo "<option value=\"$day\">$day</option>\n";
	}
	echo "</select><br><br>\n";

	$weekday = array(1=>'星期一','星期二','星期三','星期四','星期五','星期六','星期天');
	echo 'weekdays:&nbsp;&nbsp;<select name="weekday">';
	foreach ($weekday as $key => $value) {
		echo "<option value=\"$key\">$value</option>\n";
	}
	echo "</select><br><br>\n";
?>
</form>
</body>
</html>