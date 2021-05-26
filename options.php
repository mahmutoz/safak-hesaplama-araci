<?php

function form_filter($get){
    return is_array($get) ? array_map('form_filter', $get) : htmlspecialchars(trim($get));
}
$_GET = array_map('form_filter', $_GET);

function get($name){
    if(isset($_GET[$name]))
        return $_GET[$name];
}

if(get('submit')){
    $militaryServiceTime = get('military-service-time');
    $shipDate = get('ship-date');
    $permissionUsed = get('permission-used');
    $roadPermission = get('road-permission');
    $tmi = get('tmi-road-permission');
    $sickLeave = get('sick-leave');
    $escape = get('escape');
    $penalty = get('penalty');
    $earlyLeave = get('early-leave');

    function leave_time($time, $day, $permissionUsed, $escape, $penalty){
        $temp = explode('-', $time);
        $t = (($day / 30) == 6 || ($day / 30) == 12) ? 6 : 1;
        $d = ((int)$permissionUsed - $t > 0 ) ? (int)$permissionUsed - $t : 0;
        $m = ($temp[1] + ($day / 30));
        $month = ($m / 12 > 1) ? ($m % 12) : $m;
        $days = $d + (int)$escape + (int)$penalty;
        echo 'days: ' . $days . '<br>';
        return date('Y-m-d', strtotime("".$temp[0]."-".$month."-".$temp[2]." +".$days." day"));
    }
    $leaveTimeResult = leave_time($shipDate, $militaryServiceTime, $sickLeave, $escape, $penalty);

    function military_service_time($leaveTimeResult){
        $datediff = (strtotime($leaveTimeResult) - time() );
        return round($datediff / (60 * 60 * 24));
    }
    $militaryServiceTimeResult = military_service_time($leaveTimeResult);
    echo $militaryServiceTimeResult . ' x <br>';
    echo $leaveTimeResult . ' a <br>';
}

print_r($_GET);