<?php

    require_once('../cloudflare-api.php');

    $CloudFlare = new CloudFlare("{X-Auth-Key}", "{X-Auth-Email}");

    echo $CloudFlare->Delete_DNS_Record(array('zone_id' => '{zone_id}', 'dns_record_id' => '{record_id}'));

?>