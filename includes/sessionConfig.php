<?php
ini_set("session.use_strict_mode", 1);
ini_set("session.use_only_cookies", 1);

session_set_cookie_params([
    "lifetime" => 1800,
    "domain" => "localhost",
    "path" => "/",
    "secure" => true,
    "httponly" => true

]);

session_start();

if (!isset($_SESSION['lastRegeneration'])) {
    regenerate_session(); 
}
else{
    $intervalo = 60*30;
    if ($_SESSION['lastRegeneration'] - time() >= $intervalo) {
        regenerate_session();
    }
}
function regenerate_session(){
    session_regenerate_id(true);
    $_SESSION['lastRegeneration'] = time();
};

