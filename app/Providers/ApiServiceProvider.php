<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    const TOKEN = "aabbcc";

    const API_ERROR = 0;
    const API_ACCEPT = 1;

    private $apiHost;

    public function __construct()
    {
        $this->apiHost = env("API_URL", null);
    }

    public function run($input)
    {
        $params = null;
        switch ($input['method']) {
            case 'GET':
                if (!empty($input['data'])) {
                    $params = '&' . http_build_query($input['data']);
                }
                break;
        }
        $curl = curl_init($this->apiHost . $input['url'] . '?hash=' . self::TOKEN . $params);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $input['method']);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($input['data']));

        try {
            $response = curl_exec($curl);
            $output = json_decode($response);
            if (isset($output)) {
                if (isset($output->code)) {
                    switch ($output->code) {
                        case self::API_ACCEPT:
                            return true;
                            break;
                        case self::API_ERROR:
                            return false;
                            break;
                    }
                }
                return $output;
            }
        } catch (Exception $e) {
            return false;
        }
    }
}
