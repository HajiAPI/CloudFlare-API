<?php

    require_once('../cloudflare-api.php');

    $CloudFlare = new CloudFlare("{X-Auth-Key}", "{X-Auth-Email}");

    echo $CloudFlare->Scan_DNS_Records(array('zone_id' => '{zone_id}'));

    /*
     Scan for common DNS records on your domain and automatically add them to your zone.
     Useful if you haven't updated your nameservers yet.
    */

?>