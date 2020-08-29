<?php

    $data = [
        ["a", "d", "b", "z" ,"d", "n"],
        ['c', 'd', 'b']
    ];
    function sort_array($data){
    sort($data);
    $data = array_map(function($x){
    sort($x); 
    return $x;
  }, $data);
    return $data;
}
var_dump(sort_array($data));
?>