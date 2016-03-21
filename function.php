<?php

/*
 *  SANERGY STAGE 1 TECHNICAL SCREENING
 *  Developer : Mary Gichohi
 *  MyFuctions
 */

class MyFunctions {

//Passes sms and returns data as json
public function getMessage($message) {
        $explode = explode(",", $message);
        $reg = $this->checkString($explode[0]);
        $PE = $this->checkString($explode[1]);
        $date = $this->checkString($explode[2]);
        $myarray = [];
        array_push($myarray, $reg, $PE, $date);
        echo json_encode($myarray);
    }

//Checks if the  string ':' is a substring of $string
public function checkString($string) {
        if (strpos($string, ':') !== false) {
            $string = explode(":", $string);
            return $string[1];
        } else {
            return $string;
        }
    }

}
