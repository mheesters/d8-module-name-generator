<?php

$aFirst = array('better','menu','path','auto','views','services','rich','advanced','simple','responsive');
$aSecond = array('exposed','media','token','node','feed','menu','views','image','style','core'		);
$aThird = array('filters','features','fields','context','feeds','nodes','style');

echo $aFirst[array_rand($aFirst)].' '.$aSecond[array_rand($aSecond)].' '.$aThird[array_rand($aThird)];
