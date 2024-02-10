<?php

    require_once('../cloudflare-api.php');

    $CloudFlare = new CloudFlare("{X-Auth-Key}", "{X-Auth-Email}");

    echo $CloudFlare->Get_Security_Level(array('zone_id' => '{zone_id}'));

    /*
    Choose the appropriate security profile for your website, which will automatically adjust each of the security settings.
    If you choose to customize an individual security setting, the profile will become Custom.
    (https://support.cloudflare.com/hc/en-us/articles/200170056).
    */

?>