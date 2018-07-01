<?php

// Functions

function pomodoro() {
		$numberHour=date('H');
		$numberMinute=date('i');

		$nextPomodoroType="short";

		if ($numberHour==3 OR $numberHour==7 OR $numberHour==11 OR $numberHour==15 OR $numberHour==19 OR $numberHour==23) {

			if ($numberMinute >= 0 && $numberMinute <= 15) {
				$pomodoro=0;
			}else{
				$minutesLeftForBreak=60-$numberMinute;
				$pomodoro=1;
			}
		}else{
			if ($numberMinute >= 0 && $numberMinute <= 5) {
				$pomodoro=0;
				if ($numberHour==2 OR $numberHour==6 OR $numberHour==10 OR $numberHour==14 OR $numberHour==18 OR $numberHour==22){
					$nextPomodoroType="long";
				}
			}else{
				$minutesLeftForBreak=60-$numberMinute;
				$pomodoro=1;
			}
		}

		if ($pomodoro==1) {
			$response = array(
			'status' => true,
			'current' => 'pomodoro',
			'nextPomodoroType' => $nextPomodoroType,
			'minutesLeftForBreak' => $minutesLeftForBreak
			);
			echo json_encode($response);
		}
		else {
			$response = array(
			'status' => true,
			'data' => 'break'
			);
			echo json_encode($response);
		}
}


?>
