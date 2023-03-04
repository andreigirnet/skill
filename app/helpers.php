<?php
function setFlag($route){
    $newStr = explode("/",$route);
    return $newStr[0];
}
function getUri(){
    $newStr = explode("/",request()->route()->uri());
    return $newStr[0];
}
