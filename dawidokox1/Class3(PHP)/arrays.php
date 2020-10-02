<?php
    $arr[]=NULL;
    $arr[]="!NULL";
    $arr[]=0;
    $arr[]="NULL";
    echo $arr[3];

    $arr1 = array(NULL,"!NULL",0,"NULL");
    $mix = [NULL,"NULL",0,1.25,TRUE,["test","array"]];
    array_push($arr1,"Test");
    // beautifyArray($mix);
    echo json_encode($mix);
?>