<?php
/* 
Channel: @HajiApi
در صورت نیاز به پشتیبانی یا راهنمایی بیشتر، می‌توانید با نویسنده این کتابخونه از طریق https://hajiapi.ir/contact-us/ و t.me/HttpAdmin ارتباط برقرار کنید.
*/

if (in_array(__FILE__,get_included_files()) && count(get_included_files()) == '1'){
    die("You can't run this library with out include it. CloudFlare API - Writer: t.me/HttpAdmin");
}

if(PHP_MAJOR_VERSION === 5){
    $newline = PHP_SAPI !== 'cli' ? '<br>' . PHP_EOL : PHP_EOL;
    die("You can't run this library on php version lower then 7.0$newline supported versions: php 7.0+$newline.  CloudFlare API - Writer: t.me/HttpAdmin");
}

class CloudFlare {
    public $api_key;
    public $email;

    public function __construct($api_key, $email) {
        $this->headers   = array("Content-Type: application/json", "X-Auth-Email: {$email}", "X-Auth-Key: {$api_key}");
    }

    private function CurlAction($url, $data, $method){
    $ch =       curl_init($url);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
                curl_close($ch);
    return $response;
    }

    public function List_DNS_Records($datas) {
        return $this->CurlAction("https://api.cloudflare.com/client/v4/zones/{$datas['zone_id']}/dns_records", NULL, "GET");
    }

    public function Create_DNS_Record($datas) {
        return $this->CurlAction("https://api.cloudflare.com/client/v4/zones/{$datas['zone_id']}/dns_records/", $datas['data'], "POST");
    }

    public function Delete_DNS_Record($datas) {
        return $this->CurlAction("https://api.cloudflare.com/client/v4/zones/{$datas['zone_id']}/dns_records/{$datas['dns_record_id']}", NULL, "DELETE");
    }

    public function DNS_Record_Details($datas) {
        return $this->CurlAction("https://api.cloudflare.com/client/v4/zones/{$datas['zone_id']}/dns_records/{$datas['dns_record_id']}", NULL, "GET");
    }

    public function Update_DNS_Record($datas) {
        return $this->CurlAction("https://api.cloudflare.com/client/v4/zones/{$datas['zone_id']}/dns_records/{$datas['dns_record_id']}", $datas['data'], "PATCH");
    }

    public function Overwrite_DNS_Record($datas) {
        return $this->CurlAction("https://api.cloudflare.com/client/v4/zones/{$datas['zone_id']}/dns_records/{$datas['dns_record_id']}", $datas['data'], "PUT");
    }

    public function Export_DNS_Records($datas) {
        return $this->CurlAction("https://api.cloudflare.com/client/v4/zones/{$datas['zone_id']}/dns_records/export", NULL, "GET");
    }

    public function Scan_DNS_Records($datas) {
        return $this->CurlAction("https://api.cloudflare.com/client/v4/zones/{$datas['zone_id']}/dns_records/scan", NULL, "POST");
    }

    public function Get_Security_Level($datas) {
        return $this->CurlAction("https://api.cloudflare.com/client/v4/zones/{$datas['zone_id']}/settings/security_level", NULL, "GET");
    }

    public function Change_Security_Level($datas) {
        return $this->CurlAction("https://api.cloudflare.com/client/v4/zones/{$datas['zone_id']}/settings/security_level", $datas['data'], "PATCH");
    }

    public function List_Zones() {
        return $this->CurlAction("https://api.cloudflare.com/client/v4/zones", NULL, "GET");
    }
}

/* 
Channel: @HajiApi
در صورت نیاز به پشتیبانی یا راهنمایی بیشتر، می‌توانید با نویسنده این کتابخونه از طریق https://hajiapi.ir/contact-us/ و t.me/HttpAdmin ارتباط برقرار کنید.
*/
?>