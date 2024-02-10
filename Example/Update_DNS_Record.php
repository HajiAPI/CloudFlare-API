<?php

    require_once('../cloudflare-api.php');

    $CloudFlare = new CloudFlare("{X-Auth-Key}", "{X-Auth-Email}");

    echo $CloudFlare->Update_DNS_Record(array('zone_id' => '{zone_id}', 'dns_record_id' => '{record_id}', 'data' => array('content' => '198.51.180.5', 'name' => 'example.com', 'proxied' => true, 'type' => 'A', 'comment' => 'Domain verification record', 'ttl' => '1')));

    /*
    Update an existing DNS record. Notes:

    - A/AAAA records cannot exist on the same name as CNAME records.
    - NS records cannot exist on the same name as any other record type.
    - Domain names are always represented in Punycode, even if Unicode characters were used when creating the record.
    */

?>