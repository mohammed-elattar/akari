<?php
function getsetting($namesetting = "sitename"){
    return \App\SiteSetting::where('namesetting',$namesetting)->get()[0]->value;
} 

function bu_type(){
    $array = [
        'شقة','فيلا','شاليه'
    ];
    return $array;
}


function bu_rent(){
    $array = [
        'تمليك','ايجار'
    ];
    return $array;
}
