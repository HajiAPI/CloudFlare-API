<?php

    require_once('../cloudflare-api.php');

    $CloudFlare = new CloudFlare("{X-Auth-Key}", "{X-Auth-Email}");

    echo $CloudFlare->List_DNS_Records(array('zone_id' => '{zone_id}'));

    /* List, search, sort, and filter a zones' DNS records. */

?>