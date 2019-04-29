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
    private $api_all = 'http://api.zhetaoke.com:10000/api/api_all.ashx';
    //礼物详情
    private $api_detail = 'http://api.zhetaoke.com:10000/api/open_item_info.ashx';
    //
    private $api_click_url = 'http://api.zhetaoke.com:10000/api/open_gaoyongzhuanlian.ashx';

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

    //获取优惠商品信息(id)
    public function getCouponById($id)
    {
        $headers = ['appkey' => $this->tbk_appkey,
            'sid' => $this->sid,
            'pid' => $this->pid,
            'num_iid' => $id,
            'signurl' => '1',
        ];

        $json = $this->requestTwoData($this->api_click_url,  $headers);
        if (isset($json) && array_key_exists('tbk_privilege_get_response', $json) && array_key_exists('result', $json['tbk_privilege_get_response']) && array_key_exists('data', $json['tbk_privilege_get_response']['result']))
        {
            return $json['tbk_privilege_get_response']['result']['data'];
        }
        return null;
    }

    //2次网络请求
    private function requestTwoData($url, $headers)
    {
        $client = new Client();
        $response = $client->get($url,  ['query' => $headers]);
        if ($response->getStatusCode() == 200) {
            $json = json_decode($response->getBody()->getContents(), true);
            $response2 = $client->request('GET', $json['url']);
            if ($response2->getStatusCode() == 200) {
                return json_decode($response2->getBody()->getContents(), true);
            }
        }

        return null;
    }

}