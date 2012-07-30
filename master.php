<?php
include('Net/SSH2.php');

$ssh = new Net_SSH2('127.0.0.1'); 
if (!$ssh->login('root', 'SECRET PASSOWORD!!!')) { 
    exit('Login Failed');
}