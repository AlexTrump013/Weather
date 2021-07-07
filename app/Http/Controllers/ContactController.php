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
           'code'=>'1000.da9e57ad08abf79c55c65a7185e330c0.3f03576e7b99f5ce8f0d5e7a7fded3e0',
           'redirect_uri'=>'http://example.com/callbackurl',
           'client_id'=>'1000.W8E9A85U745IDGHZYN23SBB1SEJ7KS',
           'client_secret'=>'55d9735520cc79bf6044545b9fb4b3623b4f3742f6',
           'grant_type'=>'authorization_code'
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

       print_r($response);
//       var_dump($response);
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
    public function insert()
    {
        $access_token = '1000.ae3d15a038312d6ece5e89bc0c0d58d3.b76cf5c6d37195550306f78275efa224';

        $post_data = [
            'data' =>[
                [
                "Company" => "enather one",
                "Last_Name"=>"Trump",
                "First_Name"=>"Alex",
                "Email"=>"alTr@gmail.com",
                "State"=>"LA",
                "Phone"=>"9379992",
                "Description"=>"some text",
                ]
        ],
        'trigger' => [
            "approval",
            "workflow",
            "blueprint"
            ]
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.zohoapis.com/crm/v2/Leads");
        curl_setopt($ch, CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($post_data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch, CURLOPT_HTTPHEADER,  array(
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
        $access_token = '1000.ae3d15a038312d6ece5e89bc0c0d58d3.b76cf5c6d37195550306f78275efa224';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.zohoapis.com/crm/v2/Leads");
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
