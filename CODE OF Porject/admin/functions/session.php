<?php
session_start();

function message(){
    if(isset($_SESSION['message'])){
    $output = "<div class = \"alert alert-success\">";
    $output .= '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    $output .= '<strong>'."Success!".'</strong>'." ";
    $output .= htmlentities($_SESSION['message']);
    $output .= "</div>";
        
    $_SESSION['message'] = NULL;
    return $output;
}
}

function errors(){
    if(isset($_SESSION['errors'])){
    $errors = '<div class="alert alert-danger" id="err">';
    $errors .= '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    $errors .= '<strong>'."Error!".'</strong>'." ";
    $errors .= htmlentities($_SESSION['errors']);
    $errors .= "</div>";
        
    $_SESSION['errors'] = NULL;
    return $errors;
    }
}
?>