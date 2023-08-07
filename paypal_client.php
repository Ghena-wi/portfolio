<?php
namespace Sample;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\ProductionEnvironment;

// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');

class PayPalClient
{
    public static function client()
    {
        return new PayPalHttpClient(self::environment());
    }

    public static function environment()
    {
        $clientId = "AY6W-w19WfCrEeXTi_9NqqX-iZsmySkZ36VPeqwxRed0KaueflvDj4Fa4c-gaNqqMZymxd9fTVXB0oNx";
        $clientSecret = "EG7IJHDqXZdcf6ANXJWtvYrkel54EyI36R_xGbxnxDN5hFzxd2kAb2B8Cl5IxaQuCVJ-3JQ1ZVG8bJ8T";
        return new ProductionEnvironment($clientId, $clientSecret);
    }
}
// ProductionEnvironment
// SandboxEnvironment
?>