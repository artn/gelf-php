<?php

require('gelf.php');

$gelf = new GELFMessage('localhost', 12201);

$gelf->setShortMessage('something is broken.');
$gelf->setFullMessage('stacktrace here');
$gelf->setHost('somehost');
$gelf->setLevel(2);
$gelf->setFile('/var/www/example.php');
$gelf->setLine(1337);
$gelf->send();