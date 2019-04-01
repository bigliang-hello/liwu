<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gifts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('type_one_id');
            $table->string('tao_id')->unique();
            $table->string('title');
            $table->string('jianjie');
            $table->string('pict_url');
            $table->boolean('user_type');
            $table->string('seller_id');
            $table->string('shop_dsr');
            $table->string('volume');
            $table->string('size');
            $table->string('quanhou_jiage');
            $table->string('date_time_yongjin');
            $table->string('tkrate3');
            $table->string('yongjin_type');
            $table->string('coupon_id');
            $table->string('coupon_start_time');
            $table->string('coupon_end_time');
            $table->string('coupon_info_money');
            $table->string('coupon_total_count');
            $table->string('coupon_remain_count');
            $table->string('coupon_info');
            $table->boolean('juhuasuan');
            $table->boolean('taoqianggou');
            $table->boolean('haitao');
            $table->boolean('jiyoujia');
            $table->boolean('jinpaimaijia');
            $table->boolean('pinpai');
            $table->string('pinpai_name')->nullable();
            $table->boolean('yunfeixian');
            $table->string('nick');
            $table->text('small_images')->nullable();
            $table->string('white_image');
            $table->string('tao_title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gifts');
    }
}
