<?php
declare(strict_types=1);
function errorOutput(){
    if (isset($_SESSION['errors'])){
        
        $errors = $_SESSION['errors'];
    
        foreach($errors as $error){
            echo $error . '<br>';
        }
        unset($_SESSION['errors']);
    }
}

function taskOutput(){
    
}