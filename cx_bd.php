<?php
function getConexion(){
    return new PDO('mysql:host=localhost;dbname=pw_database','root','');
}
?>