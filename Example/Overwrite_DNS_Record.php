<?php

    require_once('../cloudflare-api.php');

    $CloudFlare = new CloudFlare("{X-Auth-Key}", "{X-Auth-Email}");

    echo $CloudFlare->Overwrite_DNS_Record(array('zone_id' => '{zone_id}', 'dns_record_id' => '{record_id}', 'data' => array('content' => '192.168.1.1', 'name' => 'example.com', 'proxied' => false, 'type' => 'A', 'comment' => 'Domain verification record', 'ttl' => '1')));

    /*
    Overwrite an existing DNS record. Notes:

    - A/AAAA records cannot exist on the same name as CNAME records.
    - NS records cannot exist on the same name as any other record type.
    - Domain names are always represented in Punycode, even if Unicode characters were used when creating the record.
    */

?>