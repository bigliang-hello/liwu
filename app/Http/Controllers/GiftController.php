<?php

namespace App\Http\Controllers;

use App\Gift;
use App\RequestApi\RequestApi;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function show(Request $request, $id)
    {
        $requestApi = new RequestApi();
        //获取礼物详情
        $gift = $requestApi->getGiftDetail($id);
        //请求推广链接
        $res = $requestApi->getCouponById($id);
        if (array_key_exists('coupon_info', $res)){
            $click_url = $res['coupon_click_url'];
        }else{
            $click_url = $res['item_url'];
        }
        //获取推荐礼物列表
        $gifts = $requestApi->getAllGift('礼物', 12);
        return view('gifts.show', compact('gift', 'gifts', 'click_url'));
    }
}
