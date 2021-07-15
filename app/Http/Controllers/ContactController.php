<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function refresh()
    {
        $post = [
            'code' => '1000.8f5708593c902fdf5dd67d0d7027eaff.6f24d1b98ad49e0121fcd62e7da113d8',
            'redirect_uri' => 'http://example.com/callbackurl',
            'client_id' => '1000.W8E9A85U745IDGHZYN23SBB1SEJ7KS',
            'client_secret' => '55d9735520cc79bf6044545b9fb4b3623b4f3742f6',
            'grant_type' => 'authorization_code'
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://accounts.zoho.com/oauth/v2/token");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

        $response = curl_exec($ch);
        $response = json_encode($response);

//       print_r($response);
        var_dump($response);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accessToken()
    {
        $post = [
            'refresh_token'=>'1000.c7a10881c0b850b79c70c6d48c6070a0.ce5cd9a93661f56805c6f966347ccbdf',
            'client_id'=>'1000.W8E9A85U745IDGHZYN23SBB1SEJ7KS',
            'client_secret'=>'55d9735520cc79bf6044545b9fb4b3623b4f3742f6',
            'grant_type'=>'refresh_token'
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://accounts.zoho.com/oauth/v2/token");
        curl_setopt($ch, CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch, CURLOPT_HTTPHEADER,  array('Content-Type: application/x-www-form-urlencoded'));

        $response = curl_exec($ch);
        $response = json_decode($response);

//                if(curl_exec($ch) === false)
//        {
//            echo 'Ошибка curl: ' . curl_error($ch);
//        }
//        else
//        {
//            echo 'Операция завершена без каких-либо ошибок';
//        }

        var_dump($response);
//        print_r($response);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function get_token($refresh_token)
    {
        $post = [
            'refresh_token'=>$refresh_token,
            'client_id'=>'1000.W8E9A85U745IDGHZYN23SBB1SEJ7KS',
            'client_secret'=>'55d9735520cc79bf6044545b9fb4b3623b4f3742f6',
            'grant_type'=>'refresh_token'
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://accounts.zoho.com/oauth/v2/token");
        curl_setopt($ch, CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch, CURLOPT_HTTPHEADER,  array('Content-Type: application/x-www-form-urlencoded'));

        $response = curl_exec($ch);
        $response = json_encode($response);
        $json = json_decode($response);
        //print_r($json);
        //var_dump(json_decode($json));
            return json_decode($json)->{'access_token'};
    }

    public function insert()
    {
        $access_token = $this->get_token('1000.ea974e441f315a96803a7d2bed7121d3.919afa733e303c600529a226fd837306');

        $post_data = [
            'data' => [
                [
                    "Owner" => [
                        "name" => "alekcei.kozyr",
                        "id" => "4925011000000320001",
                        "email" => "alekcei.kozyr@gmail.com"
                    ],
                    "Description" => null,
                    "Closing_Date" => "2021-07-04",
                    "Deal_Name" => "first fake",
                    "Stage" => "Qualification",
                    "Account_Name" => [
                        "name" => "first fake",
                        "id" => "4925011000000347003"
                    ]
                ]
            ]
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.zohoapis.com/crm/v2/Deals");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Zoho-oauthtoken ' . $access_token,
            'Content-Type: application/x-www-form-urlencoded'
        ));

        $response = curl_exec($ch);
        $response = json_decode($response);

//        print_r($response);
        var_dump($response);
    }

    public function get()
    {
        $access_token = '1000.169e02e52e2315d60aa8402d07cbc351.db40782c124f641b0a19e3934e168e9f';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.zohoapis.com/crm/v2/Deals");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch, CURLOPT_HTTPHEADER,  array(
            'Authorization: Zoho-oauthtoken ' . $access_token,
            'Content-Type: application/x-www-form-urlencoded'
        ));

        $response = curl_exec($ch);
//        $response = json_encode($response);

//        print_r($response);
        var_dump($response);

    }

}
