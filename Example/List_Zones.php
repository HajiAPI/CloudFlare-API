<?php

    require_once('../cloudflare-api.php');

    $CloudFlare = new CloudFlare("{X-Auth-Key}", "{X-Auth-Email}");

    echo $CloudFlare->List_Zones();

    /* Lists, searches, sorts, and filters your zones. */

?>