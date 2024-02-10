<?php

    require_once('../cloudflare-api.php');

    $CloudFlare = new CloudFlare("{X-Auth-Key}", "{X-Auth-Email}");

    echo $CloudFlare->DNS_Record_Details(array('zone_id' => '{zone_id}', 'dns_record_id' => '{record_id}'));

?>