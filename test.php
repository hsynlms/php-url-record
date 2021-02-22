<?php

require __DIR__ . '/vendor/autoload.php';

use hsynlms\UrlRecord;

$slugGenerator = new UrlRecord();
echo $slugGenerator->GetSeoFriendlyName('nobodY d0es_it better');
