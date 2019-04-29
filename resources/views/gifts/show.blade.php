@extends('layouts.app', ['class' => 'post-template-default single single-post postid-1941 single-format-standard post-style03 black-top grid-hover grid-radius grid-border my-back'])

@section('content')
    <section class="nice-post-topbar my-4 my-md-5">
        <div class="container">
            <div class="gift-detail p-5">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <!-- 指示符 -->
                            <ul class="carousel-indicators">
                                @foreach($gift['small_images']['string'] as $index => $image)
                                    @if($index == 0)
                                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                                    @else
                                        <li data-target="#demo" data-slide-to="$index"></li>
                                    @endif
                                @endforeach
                            </ul>
                            <!-- 轮播图片 -->
                            <div class="carousel-inner">
                                @foreach($gift['small_images']['string'] as $index => $image)

                                    @if($index == 0)
                                        <div class="carousel-item active">
                                            <img src="{{$image}}">
                                        </div>
                                    @else
                                        <div class="carousel-item">
                                            <img src="{{$image}}">
                                        </div>
                                    @endif
                                @endforeach
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
                        <div class="mt-2">
                            <div class="mt-4">
                                <h2 class="gift-title">{{$gift['title']}}</h2>
                            </div>
                            <div class="gift-desc mt-2">{{$gift['title']}}</div>
                            <div class="price-back">
                                <span class="price"><em>¥</em>24.80</span>
                                <div class="h-buy">
                                    <a id="ClickMe" href="javascript:void(0);" class="ico gray9">如何购买</a>
                                </div>
                            </div>
                            <div class="buy_sub clearfix">
                                <a class="gotaobao"
                                   href="{{$click_url}}"
                                   rel="nofollow" target="_blank">去天猫购买</a>
                                <a class="likebut2" rel="3563" href="javascript:" onclick="likeGood('916')"
                                   id="like_916" title="加入喜欢">
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
        </div>
    </section>
    <section class="nice-cms-push position-relative pt-lg-5 pb-4 pb-md-4 pb-lg-5">
        <div class="container">
            <div class="cms-push-liststyle02">
                @include('common.more', ['title' => '推荐礼物', 'href' => '#'])
                <div class="row row-10 row-xs-15">
                    @each('components.gift.gift', $gifts, 'gift')
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        window._bd_share_config = {
            "common": {
                "bdSnsKey": {},
                "bdText": "",
                "bdMini": "2",
                "bdPic": "",
                "bdStyle": "0",
                "bdSize": "16"
            },
            "share": {},
            "image": {
                "viewList": ["qzone", "tsina", "tqq", "weixin"],
                "viewText": "分享到：",
                "viewSize": "16"
            },
            "selectShare": {
                "bdContainerClass": null,
                "bdSelectMiniList": ["qzone", "tsina", "tqq", "weixin"]
            }
        };
        with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
@endsection

@section('styles')
    <style>
        .gift-title {
            font-size: 24px;
            color: #333;
            display: inline-block;
            zoom: 1;
            vertical-align: middle;
            margin-right: 10px;
            font-weight: normal;
        }

        .gift-desc {
            line-height: 26px;
            min-height: 40px;
            height: auto !important;
            overflow: visible;
            font-size: 14px;
            margin-bottom: 20px;
            color: #666;
        }

        .price-back {
            border-top: 1px solid #f1f1f1;
            border-bottom: 1px solid #f1f1f1;
            padding: 10px 0 15px 0;
            margin-bottom: 65px;
            margin-top: 20px;
        }

        .price {
            font-size: 30px;
            font-family: Georgia, "Times New Roman", Times, serif;
            color: #fb5e5e;
        }

        .h-buy {
            color: #999;
            height: 20px;
            line-height: 20px;
            float: right;
            padding-top: 15px;
        }

        .ico {
            padding-left: 20px;
            background: url(/images/icon_all.png) no-repeat -682px -998px;
            float: left;
            height: 22px;
            line-height: 22px;
            color: #999;
        }

        .gift-detail {
            background-color: white;
        }

        .gotaobao {
            background: url(/images/icon_all.png) no-repeat 0 -710px;
            display: block;
            float: left;
            height: 50px;
            width: 230px;
            line-height: 50px;
            overflow: hidden;
            margin-right: 40px;
            color: #FFF;
            font-size: 18px;
            text-align: center;
        }

        .likebut2 {
            background: url(/images/icon_all.png) no-repeat -400px -1100px;
            float: left;
            height: 50px;
            line-height: 50px;
            overflow: hidden;
            padding-left: 40px;
            font-size: 16px;
        }

        .buy_sub {
            margin-bottom: 95px;
        }

        .clearfix {
            display: block;
        }

        .baidushare {
            height: 30px;
        }

        .baidushare .share-icon {
            float: left;
            height: 30px;
            line-height: 30px;
            color: #999;
            font-size: 14px;
            overflow: hidden;
        }

        .num {
            background: url(/images/icon_all.png) no-repeat right -1100px;
            float: left;
            height: 50px;
            line-height: 50px;
            padding-right: 40px;
            color: #c2c2c2;
        }

        .bds_sqq {
            background-position: -200px -800px !important;
        }

        .bds_qzone {
            background-position: -232px -800px !important;
        }

        .bds_tsina {
            background-position: -264px -800px !important;
        }

        .bds_weixin {
            background-position: -296px -800px !important;
        }

        .bds_more {
            background-position: -329px -800px !important;
        }

        .baidushare .bdsharebuttonbox .bds_weixin,
        .baidushare .bdsharebuttonbox .bds_sqq,
        .baidushare .bdsharebuttonbox .bds_qzone,
        .baidushare .bdsharebuttonbox .bds_tsina,
        .baidushare .bdsharebuttonbox .bds_more {
            display: block;
            float: left;
            width: 30px;
            height: 30px;
            text-align: center;
            background: #FFF url(/images/icon_all.png) no-repeat;
            padding: 0;
            margin: 0;
            margin-right: 8px;
        }

        .baidushare .bdsharebuttonbox .bds_sqq {
            background-position: -200px -800px !important;
        }

        .baidushare .bdsharebuttonbox .bds_qzone {
            background-position: -232px -800px !important;
        }

        .baidushare .bdsharebuttonbox .bds_tsina {
            background-position: -264px -800px !important;
        }

        .baidushare .bdsharebuttonbox .bds_weixin {
            background-position: -296px -800px !important;
        }

        .baidushare .bdsharebuttonbox .bds_more {
            background-position: -329px -800px !important;
        }
        .my-back{
            background-color: #ebedee;
        }
    </style>
@endsection