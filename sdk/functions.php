<?php


function ordinal($day){
	if($day == 1 || $day == 21 || $day == 31){
		return "<sup>"."st"."</sup>";
	}elseif($day == 2 || $day == 22){
		return "<sup>"."nd"."</sup>";
	}elseif($day == 3 || $day == 23){
		return "<sup>"."rd"."</sup>";
	}else{
		return "<sup>"."th"."</sup>";
	}
}

function month($month){
	switch($month){

		case 1: return "January";
		break;
		case 2: return "February";
		break;
		case 3: return "March";
		break;
		case 4: return "April";
		break;
		case 5: return "May";
		break;
		case 6: return "June";
		break;
		case 7: return "July";
		break;
		case 8: return "August";
		break;
		case 9: return "September";
		break;
		case 10: return "October";
		break;
		case 11: return "November";
		break;
		case 12: return "December";
		break;

	}
}
	
			
function per($gender){
	if($gender == "male"){
		echo "His";
	}else{
		echo "Her";
	}
}

function pers($gender){
	if($gender == "male"){
		echo "He";
	}else{
		echo "She";
	}
}

function inputName($task){
	switch($task){
		case "dp": echo "profilepic";
		break;
		case "cover": echo "cover";
		break;
		case "nickname": echo "nickname";
		break;
		case "profession": echo "profession";
		break;
		case "country": echo "country";
		break;
	}
}

function inputType($task){
	if($task == "dp" || $task == "cover"){
		echo "file";
	}else{
		echo "text";
	}
}

function enctype($task){
	if($task == "dp" || $task == "cover"){
		echo "multipart/form-data";
	}else{
		echo "";
	}
}

function vowels($string){
	$vowels = array("a","e","i","o","u","A","E","I","O","U");
	$str = str_split($string);
	
	if(substr($string,0) !== $vowels){
		return "a";
	}else{
		return "an";
	}
}

/*function niceTime($datetime, $full = false) {
	$now = new DateTime;
	$ago = new DateTime($datetime);
	$diff = $now->diff($ago);

	$diff->w = floor($diff->d / 7);
	$diff->d -= $diff->w * 7;

	$string = array(
		'y' => 'year',
		'm' => 'month',
		'w' => 'week',
		'd' => 'day',
		'h' => 'hour',
		'i' => 'minute',
		's' => 'second'
	);
	foreach ($string as $k => &$v) {
		if ($diff->$k) {
			$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
		} else {
			unset($string[$k]);
		}
	}

	if (!$full) $string = array_slice($string, 0, 1);
	return $string ? implode(', ', $string) . ' ago' : 'just now';
}*/
function niceTime($timestamp){
  
  date_default_timezone_set("Asia/Kolkata");         
  $time_ago        = strtotime($timestamp);
  $current_time    = time();
  $time_difference = $current_time - $time_ago;
  $seconds         = $time_difference;
  
  $minutes = round($seconds / 60); //60 is seconds  
  $hours   = round($seconds / 3600); //3600 is 60 minutes * 60 sec  
  $days    = round($seconds / 86400); //86400 = 24 * 60 * 60;  
  $weeks   = round($seconds / 604800); // 7*24*60*60;  
  $months  = round($seconds / 2629440); //((365+365+365+365+366)/5/12)*24*60*60  
  $years   = round($seconds / 31553280); //(365+365+365+365+366)/5 * 24 * 60 * 60
                
  if ($seconds <= 60){

    return "Just Now";

  } else if ($minutes <= 60){

    if ($minutes == 1){

      return "one minute ago";

    } else {

      return $minutes." minutes ago";

    }

  } else if ($hours <= 24){

    if ($hours == 1){

      return "an hour ago";

    } else {

      return $hours." hrs ago";

    }

  } else if ($days <= 7){

    if ($days == 1){

      return "yesterday";

    } else {

      return $days." days ago";

    }

  } else if ($weeks <= 4.3){

    if ($weeks == 1){

      return "a week ago";

    } else {

      return $weeks." weeks ago";

    }

  } else if ($months <= 12){

    if ($months == 1){

      return "a month ago";

    } else {

      return $months." months ago";

    }

  } else {
    
    if ($years == 1){

      return "one year ago";

    } else {

      return $years." years ago";

    }
  }
}

function hashtag($string){
	$htag = "#";
	$txt = explode(" ", $string);
	$txtc = count($txt);
	$i = 0;
	while($i < $txtc){
		if(substr($txt[$i], 0, 1) === $htag){
			$txt[$i] = "<a class='hashtags' href='../search.php?q=".$txt[$i]."'>"."<strong>".$txt[$i]."</strong></a>";
		}
		$i++;
	}
	$string = implode(" ", $txt);
	return $string;
}

function countryCode($country){
	$liner = array();
	$c = strtolower($country[0].$country[1]);
	return $c;
}

function slangReplace($text){
	$text = str_replace("Fuck","F***",$text);
	$text = str_replace("fuck","f***",$text);
	$text = str_replace("Bitch","B***h",$text);
	$text = str_replace("BITCH","B***H",$text);
	$text = str_replace("bitch","b***h",$text);
	$text = str_replace("Fucking","F***ing",$text);
	$text = str_replace("FUCKING","F***ING",$text);
	$text = str_replace("fucking","f***ing",$text);
	return $text;
}
	
?>