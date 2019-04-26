@extends('layouts.app', ['class' => 'post-template-default single single-post postid-1941 single-format-standard post-style03 black-top grid-hover grid-radius grid-border'])

@section('content')
    <section class="nice-post-topbar my-4 my-md-5">
        <div class="white-gradient"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <!-- 指示符 -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- 轮播图片 -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://img.alicdn.com/i4/2598292358/O1CN011TI0NVUloPLe2Nk_!!2598292358.jpg">
                            </div>
                            <div class="carousel-item">
                                <img src="https://img.alicdn.com/i4/2598292358/O1CN011TI0NVUloPLe2Nk_!!2598292358.jpg">
                            </div>
                            <div class="carousel-item">
                                <img src="https://img.alicdn.com/i4/2598292358/O1CN011TI0NVUloPLe2Nk_!!2598292358.jpg">
                            </div>
                        </div>

                        <!-- 左右切换按钮 -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="">
                        <div class="mt-2">
                            <h2 class="pro_title">法式马卡龙甜点12粒礼盒</h2>
                        </div>
                        <div class="mt-2">五彩缤纷的视觉享受，多层次的丰富口感，每一种颜色代表一种口味，外壳一咬即破，这才是正宗的马卡龙，马卡龙甜点代表着法式的浪漫。</div>
                        <div class="price">
                            <span class="price"><em>¥</em>24.80</span>
                            <div class="h-buy">
                                <a id="ClickMe" href="javascript:void(0);" class="ico gray9">如何购买</a>
                            </div>
                        </div>
                        <div class="buy_sub clearfix">
                            <a class="gotaobao" href="https://s.click.taobao.com/t?e=m%3D2%26s%3DMnzEpTjoJFscQipKwQzePOeEDrYVVa64K7Vc7tFgwiHjf2vlNIV67tQUArYVFCZe2yqscP0DbOL7UON0JiGex5yZkqnVT2CjHciNkeN9YquM63l4S6V%2Fvswu2VzLkwnd79XRuvsZ9D11%2FQyR5g0TG0woNM2zHvcxDJbuZDCrHt4%3D&amp;pvid=10_223.81.140.92_102541_1545959771163" rel="nofollow" target="_blank">去天猫购买</a>
                            <a class="likebut2" rel="3563" href="javascript:" onclick="likeGood('916')" id="like_916" title="加入喜欢">
                                <span class="num"><strong>3563</strong>人已喜欢</span>
                            </a>
                        </div>
                        <div class="baidushare">
                            <div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1556270113841">
                                <span class="share-icon">分享：</span>
                                <a data-cmd="sqq" class="bds_sqq" title="分享到QQ好友"></a>
                                <a data-cmd="qzone" class="bds_qzone" title="分享到QQ空间"></a>
                                <a data-cmd="tsina" class="bds_tsina" title="分享到新浪微博"></a>
                                <a data-cmd="weixin" class="bds_weixin" title="分享到微信"></a>
                                <a class="bds_more" href="#" data-cmd="more"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('styles')
    <style>
        .price{
            border-top: 1px solid #f1f1f1;
            border-bottom: 1px solid #f1f1f1;
            padding: 10px 0 15px 0;
            margin-bottom: 65px;
        }
    </style>
@endsection