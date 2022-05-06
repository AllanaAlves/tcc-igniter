<?php
function display_error($validation, $field){
    if($validation->getError($field)){
        return $validation->getError($field);
    }
    else
    {
        return false;
    }
}