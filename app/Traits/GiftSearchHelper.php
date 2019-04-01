<?php
namespace App\Traits;

use App\RequestApi\RequestApi;
/**
 * Created by PhpStorm.
 * User: jc-mac
 * Date: 2019/4/1
 * Time: 下午4:29
 */
trait GiftSearchHelper
{
    public function searchGift()
    {
        $requestApi = new RequestApi();
        $giftArray = $requestApi->getAllGift('礼物', 600);
        self::insert($giftArray);
    }
}