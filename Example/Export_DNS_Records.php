<?php

    require_once('../cloudflare-api.php');

    $CloudFlare = new CloudFlare("{X-Auth-Key}", "{X-Auth-Email}");

    echo $CloudFlare->Export_DNS_Records(array('zone_id' => '{zone_id}'));

    /* You can export your BIND config through this endpoint. */

?>