<?php

/**
 * Description of TimeFunctions
 *
 * @author Fernando
 */
class TimeFunctions {

    public static function timeToSeconds($time) {
        sscanf($time, "%d:%d:%d", $hours, $minutes, $seconds);
        if(isset($seconds)){
            $time_seconds = $hours * 3600 + $minutes * 60 + $seconds;
        }else{
            $time_seconds = $hours * 60 + $minutes;
        }
        
        return $time_seconds;
    }

    public static function convertToMinutes($time) {
        $timeArray = explode(':', $time);
        $seconds = ($timeArray[0] * 60) + ($timeArray[1]) + (floor($timeArray[2] / 60));
        return $seconds;
    }

    public static function secondsToTime($seconds) {
        return gmdate("H:i:s", $seconds);
    }

}
