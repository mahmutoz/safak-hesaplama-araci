<?php

function form_filter($post)
{
    return is_array($post) ? array_map('form_filter', $post) : htmlspecialchars(trim($post));
}

$_POST = array_map('form_filter', $_POST);

function post($name)
{
    if ( isset($_POST[$name]) )
        return $_POST[$name];
}

$errorMsg = '';

if ( post('submit') && null == $errorMsg ) {
    $militaryServiceTime = post('military-service-time');
    $shipDate = post('ship-date');
    $permissionUsed = post('permission-used');
    $roadPermission = post('road-permission');
    $tmi = post('tmi-road-permission');
    $sickLeave = post('sick-leave');
    $escape = post('escape');
    $penalty = post('penalty');
    $earlyLeave = post('early-leave');

    function errors($mt, $pu, $mst, $sd)
    {
        $temp = (int)$pu;
        $result = (int)$mt / 30;
        if ( $result == 1 && $temp > 1 ) {
            return 'Kullanılan izin alanı 1\'den fazla olamaz. Lütfen tekrar kontrol ediniz.';
        } elseif ( $result == 6 && $temp > 6 ) {
            return 'Kullanılan izin alanı 6\'dan fazla olamaz. Lütfen tekrar kontrol ediniz.';
        } elseif ( $mst == 0 ) {
            return 'Lütfen askerlik süresini giriniz.';
        } elseif ( $sd == null ) {
            return 'Lütfen sevk tarihini giriniz.';
        } else {
            return null;
        }
    }

    $errorMsg = errors($militaryServiceTime, $permissionUsed, $militaryServiceTime, $shipDate);

    function leave_time($time, $day, $permissionUsed, $escape, $penalty)
    {
        $temp = explode('-', $time);
        $t = (($day / 30) == 6 || ($day / 30) == 12) ? 6 : 1;
        $d = ((int)$permissionUsed - $t > 0) ? (int)$permissionUsed - $t : 0;
        $m = ($temp[1] + ($day / 30));

        if ( ($m / 12 > 1) ) {
            $month = ($m % 12);
            $temp[0]++;
        } else {
            $month = $m;
        }
        $days = $d + (int)$escape + (int)$penalty;
        return date('Y-m-d', strtotime("" . $temp[0] . "-" . $month . "-" . $temp[2] . " +" . $days . " day"));
    }

    $leaveTimeResult = leave_time($shipDate, $militaryServiceTime, $sickLeave, $escape, $penalty);

    function military_service_time($leaveTimeResult)
    {
        $datediff = (strtotime($leaveTimeResult) - time());
        return round($datediff / (60 * 60 * 24));
    }

    $militaryServiceTimeResult = military_service_time($leaveTimeResult);

    function remainLeave($mt, $pu)
    {
        $temp = (int)$pu;
        $result = (int)$mt / 30;
        if ( $result == 1 && $temp <= 1 ) {
            return 1 - $temp;
        } elseif ( $result == 6 && $temp <= 6 ) {
            return 6 - $pu;
        } elseif ( $result == 12 && $temp <= 24 ) {
            return 24 - $temp;
        }
    }

    $remainLeaveResult = remainLeave($militaryServiceTime, $permissionUsed);

    function TMI($leaveTimeResult, $tmi, $earlyLeave, $remainLeaveResult)
    {
        $dayDiff = (int)$earlyLeave + (int)$tmi + (int)$remainLeaveResult;
        return date('Y-m-d', strtotime("$leaveTimeResult -" . $dayDiff . " day"));
    }

    $tmiResult = TMI($leaveTimeResult, $tmi, $earlyLeave, $remainLeaveResult);

    function remainTMI($tmiResult)
    {
        $datediff = (strtotime($tmiResult) - time());
        return round($datediff / (60 * 60 * 24));
    }

    $remainTMIResult = remainTMI($tmiResult);

    function dateFormat($format)
    {
        $temp = explode('-', $format);
        return implode('/', array_reverse($temp));
    }

    $tmiFormatResult = dateFormat($tmiResult);
    $leaveFormatTimeResult = dateFormat($leaveTimeResult);
}












