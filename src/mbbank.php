<?php

namespace GaDev\MBBank;


class MBBank {


    private string $username;

    private string $password;

    private $config = array();

    private array $msgTypes = [
        'LOGIN_MSG' => 'https://mobile.mbbank.com.vn/retail_lite/common/doLogin',
    ];

    public function __construct(string $username, string $password) {
        $this->username = $username;
        $this->password = $password;
    }

    private $header = array(
        'User-Agent: Mozilla/5.0 (Linux; Android 7.1.2; A5010 Build/N2G48H; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/83.0.4103.120 Mobile Safari/537.36',
        'Cache-Control: no-cache',
        'Authorization: Basic QURNSU46QURNSU4=',
        'Content-Type: application/json; charset=utf-8',
        'Host: mobile.mbbank.com.vn'
    );

    public function doLogin() {
        $Data = json_encode(array(
            'refNo' => $this->config['refNo'],
        ));
        return $this->CURL($this->msgTypes['LOGIN_MSG'], $this->header, $Data);
    }

    private function CURL($Action, $header, $data = '')
    {
        $Data = is_array($data) ? json_encode($data) : $data;
        $curl = curl_init();
        $opt = array(
            CURLOPT_URL => $Action,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_POST => empty($data) ? FALSE : TRUE,
            CURLOPT_POSTFIELDS => $Data,
            CURLOPT_CUSTOMREQUEST => empty($data) ? 'GET' : 'POST',
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_ENCODING => "",
            CURLOPT_HEADER => FALSE,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2,
            CURLOPT_TIMEOUT => 20,
        );
        curl_setopt_array($curl, $opt);
        $body = curl_exec($curl);
        if (is_object(json_decode($body))) {
            return json_decode($body, true);
        }
        return $body;
    }

    private function get_TOKEN() :string
    {
        return  $this->generateRandom(22) . ':' . $this->generateRandom(9) . '-' . $this->generateRandom(20) . '-' . $this->generateRandom(12) . '-' . $this->generateRandom(7) . '-' . $this->generateRandom(7) . '-' . $this->generateRandom(53) . '-' . $this->generateRandom(9) . '_' . $this->generateRandom(11) . '-' . $this->generateRandom(4);
    }

    private function generateRandom($length = 20)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
    }
}

