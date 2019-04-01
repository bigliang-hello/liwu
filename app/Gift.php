<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GiftSearchHelper;

class Gift extends Model
{
    use GiftSearchHelper;

    protected $fillable = [
        'code', 'type_one_id', 'tao_id', 'title', 'jianjie', 'pict_url', 'user_type', 'seller_id', 'shop_dsr', 'volume', 'size', 'quanhou_jiage', 'date_time_yongjin',
        'tkrate3', 'yongjin_type', 'coupon_id', 'coupon_start_time', 'coupon_end_time', 'coupon_info_money', 'coupon_total_count', 'coupon_remain_count', 'coupon_info',
        'juhuasuan', 'taoqianggou', 'haitao', 'jiyoujia', 'jinpaimaijia', 'pinpai', 'pinpai_name', 'yunfeixian', 'nick', 'small_images', 'white_image', 'tao_title'
    ];
}
