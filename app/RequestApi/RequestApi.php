<?php

/**
 * Created by PhpStorm.
 * User: jc-mac
 * Date: 2019/4/1
 * Time: 上午9:25
 */

namespace App\RequestApi;

use GuzzleHttp\Client;

class RequestApi
{
    private $tbk_appkey = 'a9f4be65f3e44868a8d387be114e5830';
    private $sid = '42';
    private $pid = 'mm_284610164_279000054_77090200177';

    //搜礼物接口
    private $api_all = 'https://api.zhetaoke.com:10001/api/api_all.ashx';
    //礼物详情
    private $api_detail = 'http://api.zhetaoke.com:10000/api/open_item_info.ashx';

    //全网搜礼物
    public function getAllGift($keyword, $num)
    {

        $headers = ['appkey' => $this->tbk_appkey,
            'page' => 1,
            'page_size' => $num,
            'sort' => 'sale_num',
            'q' => $keyword,
        ];
        $json = $this->requestData($this->api_all, $headers);
        if (isset($json) && array_key_exists('content', $json)){
            return $json['content'];
        }
        return null;
    }

    public function getGiftDetail($id)
    {
        $headers = ['appkey' => $this->tbk_appkey,
            'sid' => $this->sid,
            'num_iids' => $id,
        ];
        $json = $this->requestData($this->api_detail, $headers);
        if (isset($json) && array_key_exists('tbk_item_info_get_response', $json)){
            return $json['tbk_item_info_get_response']['results']['n_tbk_item'][0];
        }
        return null;
    }


    private function requestData($url, $headers)
    {
        $client = new Client();

        $response = $client->request('GET', $url, ['query' => $headers]);
        if ($response->getStatusCode() == 200) {
            return json_decode($response->getBody()->getContents(), true);
        }
        return null;
    }

}