<?php
include('Net/SSH2.php');

$ssh = new Net_SSH2('YOUR_IP_ADDRESS'); 
if (!$ssh->login('root', 'YOUR_PASSWORD')) { 
    exit('Login Failed');
}