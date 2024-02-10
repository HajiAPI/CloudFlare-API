<?php

    require_once('../cloudflare-api.php');

    $CloudFlare = new CloudFlare("{X-Auth-Key}", "{X-Auth-Email}");

    echo $CloudFlare->Create_DNS_Record(array('zone_id' => '{zone_id}', 'data' => array('content' => '198.51.100.4', 'name' => 'example.com', 'proxied' => true, 'type' => 'A', 'comment' => 'Domain verification record', 'ttl' => '1')));

    /* 
    Create a new DNS record for a zone.

    Notes:
    - A/AAAA records cannot exist on the same name as CNAME records.
    - NS records cannot exist on the same name as any other record type.
    - Domain names are always represented in Punycode, even if Unicode characters were used when creating the record.
    */

?>