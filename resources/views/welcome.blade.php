<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="wap-font-scale" content="no">
        <meta http-equiv="X-UA-Compatible" content="IE=9, IE=8;IE=7, IE=EDGE, chrome=1">
        <link  rel='stylesheet' href="{{ mix('css/app.css') }}"/>
        <link  rel='stylesheet' href="{{ mix('css/all.css') }}"/>
        <title>Laravel</title>
    </head>
    <body class="home blog black-top grid-hover grid-radius grid-border" id="app">
    <section class="nice-mobile-overlay " id="nice-mobile-overlay">
        <div class="mobile-action">
            <button id="mobile-close-icon" class="btn btn-transparent btn-sm navbar-close color-white font-22 light-10">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="mobile-usernav">
            <div class="cosy-user-info position-relative py-5">
                <div class="black-gradient"></div>
                <div class="cosy-user-cover" style="background-image: url('wp-content/uploads/sites/11/2018/08/2018081117570241.jpg')"></div>
                <div class="overlay"></div>
                <div class="position-relative text-center w-100 mt-3">
                    <a href="wp-login.php.html" class="btn btn-primary btn-sm btn-overlay">登录</a>
                    <p class="font-12 color-white mt-2">立即登录/注册，享受更多福利</p>
                </div>
            </div>
        </div>
        <nav class="mobile-navigation">
            <ul id="mobile-menu-id" class="mobile-menu">
                <li id="menu-item-3626" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-3626"><a>首页参考</a>
                    <ul class="sub-menu">
                        <li id="menu-item-3628" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-3628"><a href="index.html"><i class="icon icon-book-open"></i>CMS杂志</a></li>
                        <li id="menu-item-3627" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3627"><a href="../cosy-style2/index.html"><i class="icon icon-picture"></i>杂志模式</a></li>
                        <li id="menu-item-3629" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3629"><a href="../cosy-style3/index.html"><i class="icon icon-screen-tablet"></i>简约单栏</a></li>
                    </ul>
                </li>
                <li id="menu-item-3619" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3619"><a>目录参考</a>
                    <ul class="sub-menu">
                        <li id="menu-item-3622" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3622"><a href="category/duan-pian.html"><i class="icon icon-film"></i>短片</a></li>
                        <li id="menu-item-3621" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3621"><a href="category/shishang.html"><i class="icon icon-game-controller"></i>生活着</a></li>
                        <li id="menu-item-3623" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3623"><a href="category/sheji.html"><i class="icon icon-cup"></i>随笔集</a></li>
                        <li id="menu-item-3620" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3620"><a href="category/shangye.html"><i class="icon icon-map"></i>在路上</a></li>
                        <li id="menu-item-3625" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3625"><a href="category/shangye.html"><i class="icon icon-globe"></i>旅行</a></li>
                        <li id="menu-item-3624" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3624"><a href="topics.html"><i class="icon icon-puzzle"></i>专题</a></li>
                    </ul>
                </li>
                <li id="menu-item-3634" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3634"><a href="http://#">文章</a>
                    <ul class="sub-menu">
                        <li id="menu-item-3642" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3642"><a href="1944.html"><i class="icon icon-note"></i>样式·壹</a></li>
                        <li id="menu-item-3638" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3638"><a href="3546.html"><i class="icon icon-note"></i>样式·贰</a></li>
                        <li id="menu-item-3643" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3643"><a href="1941.html"><i class="icon icon-note"></i>样式·叁</a></li>
                        <li id="menu-item-3644" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3644"><a href="1817.html"><i class="icon icon-note"></i>样式·肆</a></li>
                        <li id="menu-item-3645" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3645"><a href="1849.html"><i class="icon icon-note"></i>样式·伍</a></li>
                        <li id="menu-item-3639" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3639"><a href="2607.html"><i class="icon icon-film"></i>样式·视频</a></li>
                    </ul>
                </li>
                <li id="menu-item-3633" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3633"><a href="http://#">页面模块</a>
                    <ul class="sub-menu">
                        <li id="menu-item-3630" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3630"><a href="myfriends.html"><i class="icon icon-share"></i>友链</a></li>
                        <li id="menu-item-3631" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3631"><a href="sample-page-2.html"><i class="icon icon-speech"></i>留言</a></li>
                        <li id="menu-item-3751" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3751"><a href="typography.html"><i class="icon icon-list"></i>文字排版文字排版</a></li>
                    </ul>
                </li>
            </ul>
            <div class="mobile-search">
                <form role="search" method="get" class="mobile-search-form" action="index.html">
                    <div class="input-group mb-3">
                        <input type="search"  name="s" id="s" class="form-control" placeholder="输入搜索关键词">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-light form-search-submit text-secondary px-3" type="button"><i class="fal fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>


        </nav>

    </section>
    <section class="nice-search-inner nice-search-inner-up">
        <div class="container">
            <div class="top_searchform_wrapper">

                <form method="get" action="index.html">
                    <div class="input-group">
                        <input type="text" name="s" class="form-control font-16 font-xs-14" placeholder="输入搜索关键词" required="">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-16 font-xs-14" type="submit">搜索</button>
                        </div>
                    </div>
                </form>
                <div class="search_inner_close">
                    <div class="btn-search-close"><i class="icon icon-close"></i></div>
                </div>
            </div>
        </div>
    </section>
    <section class="nice-search-inner nice-search-inner-down d-none d-md-flex align-items-center justify-content-center align-content-center">
        <div class="container">
            <div class="featured-search-title mb-md-4"><h4 class="font-16"><span class="font-18  text-muted mr-2"><i class="fal fa-star"></i></span>推荐阅读</h4></div>
            <div class="featured-search d-flex flex-column pb-md-5">
                <div class="row row-10 row-xs-15 flex-nowrap flex-lg-wrap">

                    <div class="item col-12 col-sm-12 col-md-12 col-lg-3">
                        <article>
                            <a class="custom-hover d-block" href="1913.html" target="_blank">
                                <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2018/08/2018081115120392.jpg');"></div>
                                <div class="content p-3 p-md-4">
                                    <div class="title"><h2 class="font-18 font-weight-normal text-l2 color-white">60 年代英国嬉皮士们的精神食粮，端看这些“地下杂志”</h2></div>
                                    <div class="data nodots d-flex align-items-center flex-row font-12 text-light mt-3">
                                        <div class="flex-fill">
                                            <span class="u-cat">随笔集</span>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="u-time">2017-09-28</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </div>

                    <div class="item col-12 col-sm-12 col-md-12 col-lg-3">
                        <article>
                            <a class="custom-hover d-block" href="1722.html" target="_blank">
                                <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2017/09/2018092517114518.jpeg');"></div>
                                <div class="content p-3 p-md-4">
                                    <div class="title"><h2 class="font-18 font-weight-normal text-l2 color-white">突然想活成一束光——拆拆手机摄影小妙招</h2></div>
                                    <div class="data nodots d-flex align-items-center flex-row font-12 text-light mt-3">
                                        <div class="flex-fill">
                                            <span class="u-cat">生活着</span>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="u-time">2017-09-26</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </div>

                    <div class="item col-12 col-sm-12 col-md-12 col-lg-3">
                        <article>
                            <a class="custom-hover d-block" href="1851.html" target="_blank">
                                <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2017/09/2018092216545247.jpeg');"></div>
                                <div class="content p-3 p-md-4">
                                    <div class="title"><h2 class="font-18 font-weight-normal text-l2 color-white">让我依依不舍的，是锦城的那抹炽红色</h2></div>
                                    <div class="data nodots d-flex align-items-center flex-row font-12 text-light mt-3">
                                        <div class="flex-fill">
                                            <span class="u-cat">生活着</span>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="u-time">2017-09-27</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </div>

                    <div class="item col-12 col-sm-12 col-md-12 col-lg-3">
                        <article>
                            <a class="custom-hover d-block" href="1547.html" target="_blank">
                                <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2018/08/2018081117551562-e1533981327486.jpg');"></div>
                                <div class="content p-3 p-md-4">
                                    <div class="title"><h2 class="font-18 font-weight-normal text-l2 color-white">蓝水色似蓝，日夜长潺潺——摩洛哥</h2></div>
                                    <div class="data nodots d-flex align-items-center flex-row font-12 text-light mt-3">
                                        <div class="flex-fill">
                                            <span class="u-cat">生活着</span>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="u-time">2017-09-25</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <header class="nice-header mobile-style02">
        <div class="container m-header">
            <div class="navbar navbar-expand-lg d-none d-lg-flex">
                <div class="navbar-header d-inline-block">
                    <a class="navbar-brand" href="index.html" title="Cosy主题-CMS杂志样式" style="background-image: url('wp-content/uploads/sites/11/2018/09/2018092518065583.png');">Cosy主题-CMS杂志样式</a>

                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav navbar-site align-items-center flex-fill flex-nowrap">
                        <li id="menu-item-3490" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-3490"><a>首页样式</a>
                            <ul class="sub-menu">
                                <li id="menu-item-3650" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-3650"><a href="index.html">CMS杂志</a></li>
                                <li id="menu-item-3648" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3648"><a href="../cosy-style2/index.html">杂志样式</a></li>
                                <li id="menu-item-3647" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3647"><a href="../cosy-style3/index.html">简约单栏</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17"><a>文章样式</a>
                            <ul class="sub-menu">
                                <li id="menu-item-3074" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3074"><a href="1944.html">文章样式1</a></li>
                                <li id="menu-item-3075" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3075"><a href="1594.html">文章样式2</a></li>
                                <li id="menu-item-3076" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3076"><a href="1941.html">文章样式3</a></li>
                                <li id="menu-item-3077" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3077"><a href="1817.html">文章样式4</a></li>
                                <li id="menu-item-3073" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3073"><a href="1849.html">相册文章</a></li>
                                <li id="menu-item-3072" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3072"><a href="2607.html">视频文章</a></li>
                                <li id="menu-item-3471" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3471"><a href="1938.html">视频样式2</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-34" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-34"><a href="#">列表样式</a>
                            <ul class="sub-menu">
                                <li id="menu-item-8" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-8"><a href="category/sheji.html">列表样式1</a></li>
                                <li id="menu-item-7" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7"><a href="category/shishang.html">列表样式2</a></li>
                                <li id="menu-item-6" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6"><a href="category/shangye.html">列表样式3</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-3499" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3499"><a href="topics.html">专题</a></li>
                        <li id="menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-33"><a>页面模版</a>
                            <ul class="sub-menu">
                                <li id="menu-item-3080" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3080"><a href="myfriends.html">友军</a></li>
                                <li id="menu-item-3079" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3079"><a href="sample-page-2.html">留言</a></li>
                                <li id="menu-item-3752" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3752"><a href="typography.html">文字排版</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16"><a href="https://www.nicetheme.cn/store/cosy">购买主题</a></li>
                    </ul>
                    <ul class="navbar-nav navbar-sign align-items-center">
                        <li>
                            <button class="btn btn-link btn-sm btn-search font-16 text-secondary px-2 py-0"><i class="fal fa-search"></i></button>
                        </li>
                        <li><a class="font-16 text-secondary d-block px-2" href="wp-login.php-redirect_to=https---demo.nicetheme.xyz-cosy-style1-wp-admin-post-new.php&amp;reauth=1.html"><i class="fal fa-edit"></i></a></li>
                        <li><a href="wp-login.php.html" class="btn btn-outline-primary btn-sm btn-signin ml-2">登录</a></li>
                    </ul>
                </div>
            </div>
            <div class="navbar mobile-navbar flex-row flex-nowrap d-flex d-lg-none">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html" title="Cosy主题-CMS杂志样式" style="background-image: url('wp-content/uploads/sites/11/2018/09/2018092518065583.png');">Cosy主题-CMS杂志样式</a>
                    <a class="navbar-brand mobile-navbar-brand d-none d-lg-none" href="index.html" title="Cosy主题-CMS杂志样式" style="background-image: url('wp-content/themes/Cosy-2.1.0/static/images/logo-mobile.png');">Cosy主题-CMS杂志样式</a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav flex-row">
                        <li id="menu-item-3663" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-3663"><a href="index.html">首页</a></li>
                        <li id="menu-item-18" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-18"><a href="category/shangye.html">在路上</a></li>
                        <li id="menu-item-19" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-19"><a href="category/shishang.html">生活着</a></li>
                        <li id="menu-item-20" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-20"><a href="category/duan-pian.html">短片</a></li>
                        <li id="menu-item-22" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22"><a href="category/sheji.html">随笔集</a></li>
                        <li id="menu-item-3078" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3078"><a href="topics.html">专题</a></li>
                        <li id="menu-item-3651" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3651"><a href="sample-page-2.html">留言</a></li>
                        <li id="menu-item-3081" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3081"><a href="myfriends.html">友情链接</a></li>
                        <li id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23"><a href="https://www.nicetheme.cn/store/cosy">购买主题</a></li>
                    </ul>
                </div>
                <button class="navbar-toggle mobile-navbar-toggle" id="mobile-menu-icon" type="button">
                    <i class="icon icon-menu"></i>
                </button>
            </div>
        </div>
    </header>
    <section class="nice-featured nice-featured-style02 mt-0 mt-md-4 mt-lg-4-2" style="background-image:url('wp-content/uploads/sites/11/2018/09/2018092212075911.jpeg');"><div class="container"><div class="row no-gutters">
                <div class="items items-left col-12 col-md-6">
                    <div class="item">
                        <a class="custom-hover d-block" href="1941.html" target="_blank" title="二十岁的年纪，内心身怀雄心壮志，却又不得不脚踏实地，做八十岁想起来都会嘴角上扬的事">
                            <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2017/09/2018092212382148-e1537591114942.jpeg');"></div>
                            <div class="content p-3 p-lg-4">
                                <div class="title text-l2"><h2 class="font-24 font-md-20 font-xs-20 color-white light-14 font-weight-normal">二十岁的年纪，内心身怀雄心壮志，却又不得不脚踏实地，做八十岁想起来都会嘴角上扬的事</h2></div>
                                <div class="data nodots d-none d-md-flex align-items-center flex-row font-14 font-md-12 text-light mt-3">
                                    <div class="flex-fill d-flex">
                                        <span class="u-cat mr-2 mr-md-3">旅行·在路上</span>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="u-time">2017-09-28</span>
                                        <span class="u-comment"><i class="fal fa-comment-alt-lines"></i>  34</span>
                                        <span class="u-like"><i class="fal fa-heart"></i>  108</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="items items-right col-12 col-md-6 mt-2 mt-md-0"><div class="row no-gutters flex-nowrap flex-md-wrap"><div class="item d-flex col-6 col-md-6 mr-2 mr-md-0">
                            <div class="d-flex flex-fill flex-column align-self-stretch bg-white">
                                <a class="custom-hover d-flex flex-fill flex-column" href="1873.html"  target="_blank" title="2014，我是一名大一新生；2018，我是一名旅行摄影师">
                                    <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2017/09/2018092216535846-e1537606449598.jpeg');"></div>
                                    <div class="content p-2 p-sm-3 p-lg-4"><div class="title text-l2 mb-1 mb-sm-0 mb-md-0"><h2 class="font-18 font-md-16 font-sm-16 font-xs-14 light-14 font-weight-normal color-white">2014，我是一名大一新生；2018，我是一名旅行摄影师</h2></div>
                                        <div class="data nodots d-none d-md-flex align-items-center flex-row font-12 text-light mt-2 mt-md-3">
                                            <div class="flex-fill d-flex"><span class="u-cat">旅行·在路上</span></div>
                                            <div class="text-nowrap"><span class="u-time d-none d-lg-inline-block"> 2017-09-28</span><span class="u-like"><i class="fal fa-heart"></i>  37</span></div>
                                        </div></div>
                                </a>
                            </div>
                        </div><div class="item d-flex col-6 col-md-6 mr-2 mr-md-0">
                            <div class="d-flex flex-fill flex-column align-self-stretch bg-white">
                                <a class="custom-hover d-flex flex-fill flex-column" href="1885.html"  target="_blank" title="80天环游地球 Day 34 泰国曼谷-边境小镇Aranyaprathet 泰国神油功效，峰回路转再出发">
                                    <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2017/09/2018092219324187-e1537615973186.jpeg');"></div>
                                    <div class="content p-2 p-sm-3 p-lg-4"><div class="title text-l2 mb-1 mb-sm-0 mb-md-0"><h2 class="font-18 font-md-16 font-sm-16 font-xs-14 light-14 font-weight-normal color-white">80天环游地球 Day 34 泰国曼谷-边境小镇Aranyaprathet 泰国神油功效，峰回路转再出发</h2></div>
                                        <div class="data nodots d-none d-md-flex align-items-center flex-row font-12 text-light mt-2 mt-md-3">
                                            <div class="flex-fill d-flex"><span class="u-cat">旅行·在路上</span></div>
                                            <div class="text-nowrap"><span class="u-time d-none d-lg-inline-block"> 2017-09-28</span><span class="u-like"><i class="fal fa-heart"></i>  27</span></div>
                                        </div></div>
                                </a>
                            </div>
                        </div><div class="item d-flex col-6 col-md-6 mr-2 mr-md-0">
                            <div class="d-flex flex-fill flex-column align-self-stretch bg-white">
                                <a class="custom-hover d-flex flex-fill flex-column" href="1760.html"  target="_blank" title="2018，如果你想学摄影，我想给你这十点建议">
                                    <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2017/09/2018092517125821-e1537866786592.jpeg');"></div>
                                    <div class="content p-2 p-sm-3 p-lg-4"><div class="title text-l2 mb-1 mb-sm-0 mb-md-0"><h2 class="font-18 font-md-16 font-sm-16 font-xs-14 light-14 font-weight-normal color-white">2018，如果你想学摄影，我想给你这十点建议</h2></div>
                                        <div class="data nodots d-none d-md-flex align-items-center flex-row font-12 text-light mt-2 mt-md-3">
                                            <div class="flex-fill d-flex"><span class="u-cat">生活着</span></div>
                                            <div class="text-nowrap"><span class="u-time d-none d-lg-inline-block"> 2017-09-27</span><span class="u-like"><i class="fal fa-heart"></i>  16</span></div>
                                        </div></div>
                                </a>
                            </div>
                        </div><div class="item d-flex col-6 col-md-6 mr-2 mr-md-0">
                            <div class="d-flex flex-fill flex-column align-self-stretch bg-white">
                                <a class="custom-hover d-flex flex-fill flex-column" href="1727.html"  target="_blank" title="带着一家老小游海南——漫步北纬18º会唱歌的沙滩">
                                    <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2017/09/2018092219371173.jpeg');"></div>
                                    <div class="content p-2 p-sm-3 p-lg-4"><div class="title text-l2 mb-1 mb-sm-0 mb-md-0"><h2 class="font-18 font-md-16 font-sm-16 font-xs-14 light-14 font-weight-normal color-white">带着一家老小游海南——漫步北纬18º会唱歌的沙滩</h2></div>
                                        <div class="data nodots d-none d-md-flex align-items-center flex-row font-12 text-light mt-2 mt-md-3">
                                            <div class="flex-fill d-flex"><span class="u-cat">短片</span></div>
                                            <div class="text-nowrap"><span class="u-time d-none d-lg-inline-block"> 2017-09-27</span><span class="u-like"><i class="fal fa-heart"></i>  7</span></div>
                                        </div></div>
                                </a>
                            </div>
                        </div></div></div></div></div></section><section class="nice-cms-list my-0 my-md-4 py-3 py-md-0"><div class="container"><div class="row row-10 row-xs-15 flex-nowrap flex-md-wrap"><div class="item col-12 col-sm-6 col-md-3 mt-0 mt-md-4">
                    <div class="position-relative">
                        <a href="#" target="_blank" title="故事" class="custom-hover d-block">
                            <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2018/08/2018081117551562-e1533981327486.jpg');"></div>
                            <div class="content d-flex align-items-center justify-content-center align-content-center">
                                <h3 class="title font-18 font-md-16 font-xs-20 color-white">故事</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item col-12 col-sm-6 col-md-3 mt-0 mt-md-4">
                    <div class="position-relative">
                        <a href="#" target="_blank" title="摄影技巧" class="custom-hover d-block">
                            <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2018/08/2018081116435976.png');"></div>
                            <div class="content d-flex align-items-center justify-content-center align-content-center">
                                <h3 class="title font-18 font-md-16 font-xs-20 color-white">摄影技巧</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item col-12 col-sm-6 col-md-3 mt-0 mt-md-4">
                    <div class="position-relative">
                        <a href="" target="_blank" title="旅行·在路上" class="custom-hover d-block">
                            <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2017/09/2018081116584475-e1533977962599.jpeg');"></div>
                            <div class="content d-flex align-items-center justify-content-center align-content-center">
                                <h3 class="title font-18 font-md-16 font-xs-20 color-white">旅行·在路上</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item col-12 col-sm-6 col-md-3 mt-0 mt-md-4">
                    <div class="position-relative">
                        <a href="" target="_blank" title="摄影" class="custom-hover d-block">
                            <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2018/08/2018081116414713.jpg');"></div>
                            <div class="content d-flex align-items-center justify-content-center align-content-center">
                                <h3 class="title font-18 font-md-16 font-xs-20 color-white">摄影</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item col-12 col-sm-6 col-md-3 mt-0 mt-md-4">
                    <div class="position-relative">
                        <a href="" target="_blank" title="上班这点事儿" class="custom-hover d-block">
                            <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2018/08/2018081116413168.jpg');"></div>
                            <div class="content d-flex align-items-center justify-content-center align-content-center">
                                <h3 class="title font-18 font-md-16 font-xs-20 color-white">上班这点事儿</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item col-12 col-sm-6 col-md-3 mt-0 mt-md-4">
                    <div class="position-relative">
                        <a href="" target="_blank" title="生活家" class="custom-hover d-block">
                            <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2018/08/2018081116415321.jpg');"></div>
                            <div class="content d-flex align-items-center justify-content-center align-content-center">
                                <h3 class="title font-18 font-md-16 font-xs-20 color-white">生活家</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item col-12 col-sm-6 col-md-3 mt-0 mt-md-4">
                    <div class="position-relative">
                        <a href="#" target="_blank" title="随笔集" class="custom-hover d-block">
                            <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2018/08/2018081116403443.jpg');"></div>
                            <div class="content d-flex align-items-center justify-content-center align-content-center">
                                <h3 class="title font-18 font-md-16 font-xs-20 color-white">随笔集</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item col-12 col-sm-6 col-md-3 mt-0 mt-md-4">
                    <div class="position-relative">
                        <a href="#" target="_blank" title="生活着" class="custom-hover d-block">
                            <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2018/08/2018081116411590.jpg');"></div>
                            <div class="content d-flex align-items-center justify-content-center align-content-center">
                                <h3 class="title font-18 font-md-16 font-xs-20 color-white">生活着</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div></div></section>
    <section class="nice-warp nice-warp-single my-4 my-md-5">
        <div class="container">
            <div class="filter-menu text-md-center mb-3 mb-lg-4-2">
                <ul class="d-flex flex-nowrap flex-md-wrap justify-content-md-center">
                    <li class="flex-shrink-0"><button class="btn btn-link btn-sm active" data-cid="-2.1">最新</button></li>
                    <li class="flex-shrink-0"><button class="btn btn-link btn-sm" data-cid="3">在路上</button></li><li class="flex-shrink-0"><button class="btn btn-link btn-sm" data-cid="4">生活着</button></li><li class="flex-shrink-0"><button class="btn btn-link btn-sm" data-cid="6">随笔集</button></li><li class="flex-shrink-0"><button class="btn btn-link btn-sm" data-cid="5">短片</button></li>                  </ul>
            </div>

            <main class="nice-main">
                <div class="posts-list">
                    <div class="list-inner home-list row list-xs-6 row-10 row-xs-15 ">
                        <div class="item-card d-flex col-12 col-sm-6 col-md-3 col-lg-3">
                            <article class="card flex-fill mb-4 mb-sm-4-2 mb-md-4 mb-lg-4-2">
                                <div class="image">
                                    <a class="" href="3546.html" title="17天女生独行，如何用4000元横跨南北三省四个城市？" >
                                        <div class="custom-hover d-block">
                                            <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092214591613-e1537980861650.jpeg&amp;h=270&amp;w=360&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" title="17天女生独行，如何用4000元横跨南北三省四个城市？" alt="17天女生独行，如何用4000元横跨南北三省四个城市？">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body d-flex flex-column content mt-1 mt-md-2">

                                    <div class="meta mt-2 light-12 ">
                                        <span class="u-cat-name font-12 d-block u-cat-dot u-color-red"><a class="text-primary" href="category/shangye.html">旅行·在路上</a></span>
                                    </div>
                                    <div class="title flex-grow-1 mt-2"><h2 class="font-16 font-md-14 font-xs-16 text-l2 font-weight-normal light-14"><a href="3546.html" title="17天女生独行，如何用4000元横跨南北三省四个城市？">17天女生独行，如何用4000元横跨南北三省四个城市？</a></h2></div>
                                    <div class="desc mt-2 d-none d-md-none"><p class="text-l2 font-md-12 text-secondary">女生爱花，包括我，所以早就想去有着“亚洲最大”之称的斗南花市瞧瞧
                                            ...</p></div>

                                    <div class="data nodots d-flex align-items-center flex-row font-12 font-md-10 text-muted mt-2 mt-lg-3 light-12 d-flex d-lg-flex">
                                        <div class="flex-fill d-flex ">
                                            <span class="u-time">2018-09-22</span>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="u-view d-none d-lg-none"><i class="icon icon-eye"></i> 2,042</span>

                                            <span class="u-comment d-none d-lg-inline-block"><i class="fal fa-comment-alt-lines"></i>  11</span>

                                            <span class="u-like d-inline-block d-lg-none d-lg-inline-block"><i class="fal fa-heart"></i> 65</span>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>
                        <div class="item-card d-flex col-12 col-sm-6 col-md-3 col-lg-3">
                            <article class="card flex-fill mb-4 mb-sm-4-2 mb-md-4 mb-lg-4-2">
                                <div class="image">
                                    <a class="" href="2607.html" title="五星推荐超强科幻佳片《怀旧者》" >
                                        <div class="custom-hover d-block">
                                            <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2018-08-2018081116391818-e1533978162780.jpg&amp;h=270&amp;w=360&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" title="五星推荐超强科幻佳片《怀旧者》" alt="五星推荐超强科幻佳片《怀旧者》">
                                        </div>
                                        <div class="post-format-icon"><i class="fas fa-play"></i></div>            </a>
                                </div>
                                <div class="card-body d-flex flex-column content mt-1 mt-md-2">

                                    <div class="meta mt-2 light-12 ">
                                        <span class="u-cat-name font-12 d-block u-cat-dot u-color-orange"><a class="text-primary" href="category/duan-pian.html">短片</a></span>
                                    </div>
                                    <div class="title flex-grow-1 mt-2"><h2 class="font-16 font-md-14 font-xs-16 text-l2 font-weight-normal light-14"><a href="2607.html" title="五星推荐超强科幻佳片《怀旧者》">五星推荐超强科幻佳片《怀旧者》</a></h2></div>
                                    <div class="desc mt-2 d-none d-md-none"><p class="text-l2 font-md-12 text-secondary">在未来社会，一位父亲依靠一款视听科技眼镜，使得现存的残酷世界变成
                                            ...</p></div>

                                    <div class="data nodots d-flex align-items-center flex-row font-12 font-md-10 text-muted mt-2 mt-lg-3 light-12 d-flex d-lg-flex">
                                        <div class="flex-fill d-flex ">
                                            <span class="u-time">2017-10-03</span>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="u-view d-none d-lg-none"><i class="icon icon-eye"></i> 7,767</span>

                                            <span class="u-comment d-none d-lg-inline-block"><i class="fal fa-comment-alt-lines"></i>  14</span>

                                            <span class="u-like d-inline-block d-lg-none d-lg-inline-block"><i class="fal fa-heart"></i> 84</span>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>
                        <div class="item-card item-topic d-flex col-12 col-sm-6 col-md-3 col-lg-3">
                            <article class="card flex-fill mb-4 mb-lg-4-2">
                                <a href="special/%E5%93%81%E7%89%8C%E9%82%A3%E4%BA%9B%E4%BA%8B.html" target="_blank" title="品牌那些事"  class="custom-hover d-flex flex-fill">
                                    <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2017/09/2018081117273119.jpeg');"></div>
                                    <div class="position-relative d-flex flex-fill flex-column content-topic p-4 p-md-3">
                                        <div class="content-body d-flex flex-grow-1 flex-column  mb-5 mb-lg-0 pb-5 pb-md-0">
                                            <div class="data font-12 text-light mb-1 mb-md-1"><span>推荐专题</span><span>1篇文章</span></div>
                                            <div class="title">
                                                <h2 class="font-24 font-md-22 font-xs-20 weight-600 color-white">品牌那些事</h2>
                                            </div>
                                        </div>
                                        <div class="content-footer">
                                            <p class="font-16 font-xs-14 weight-600 light-14 color-white"></p>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>

                        <div class="item-card d-flex col-12 col-sm-6 col-md-3 col-lg-3">
                            <article class="card flex-fill mb-4 mb-sm-4-2 mb-md-4 mb-lg-4-2">
                                <div class="image">
                                    <a class="" href="1849.html" title="纪梵希在四个城市贴海报，“你见过这只猫吗？”" >
                                        <div class="custom-hover d-block">
                                            <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2018-08-2018081116385576.jpg&amp;h=270&amp;w=360&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" title="纪梵希在四个城市贴海报，“你见过这只猫吗？”" alt="纪梵希在四个城市贴海报，“你见过这只猫吗？”">
                                        </div>
                                        <div class="post-format-icon"><i class="fas fa-camera"></i></div>            </a>
                                </div>
                                <div class="card-body d-flex flex-column content mt-1 mt-md-2">

                                    <div class="meta mt-2 light-12 ">
                                        <span class="u-cat-name font-12 d-block u-cat-dot u-color-blue"><a class="text-primary" href="category/shishang.html">生活着</a></span>
                                    </div>
                                    <div class="title flex-grow-1 mt-2"><h2 class="font-16 font-md-14 font-xs-16 text-l2 font-weight-normal light-14"><a href="1849.html" title="纪梵希在四个城市贴海报，“你见过这只猫吗？”">纪梵希在四个城市贴海报，“你见过这只猫吗？”</a></h2></div>
                                    <div class="desc mt-2 d-none d-md-none"><p class="text-l2 font-md-12 text-secondary">九月正是四大时装周举办的时候，纪梵希在米兰、纽约、巴黎、伦敦的街
                                            ...</p></div>

                                    <div class="data nodots d-flex align-items-center flex-row font-12 font-md-10 text-muted mt-2 mt-lg-3 light-12 d-flex d-lg-flex">
                                        <div class="flex-fill d-flex ">
                                            <span class="u-time">2017-10-01</span>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="u-view d-none d-lg-none"><i class="icon icon-eye"></i> 7,276</span>

                                            <span class="u-comment d-none d-lg-inline-block"><i class="fal fa-comment-alt-lines"></i>  10</span>

                                            <span class="u-like d-inline-block d-lg-none d-lg-inline-block"><i class="fal fa-heart"></i> 51</span>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>
                        <div class="item-card d-flex col-12 col-sm-6 col-md-3 col-lg-3">
                            <article class="card flex-fill mb-4 mb-sm-4-2 mb-md-4 mb-lg-4-2">
                                <div class="image">
                                    <a class="" href="1944.html" title="在别人看不到的角落努力，在看得见的原野绽放光芒" >
                                        <div class="custom-hover d-block">
                                            <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092212393345.jpeg&amp;h=270&amp;w=360&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" title="在别人看不到的角落努力，在看得见的原野绽放光芒" alt="在别人看不到的角落努力，在看得见的原野绽放光芒">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body d-flex flex-column content mt-1 mt-md-2">

                                    <div class="meta mt-2 light-12 ">
                                        <span class="u-cat-name font-12 d-block u-cat-dot u-color-red"><a class="text-primary" href="category/shangye.html">旅行·在路上</a></span>
                                    </div>
                                    <div class="title flex-grow-1 mt-2"><h2 class="font-16 font-md-14 font-xs-16 text-l2 font-weight-normal light-14"><a href="1944.html" title="在别人看不到的角落努力，在看得见的原野绽放光芒">在别人看不到的角落努力，在看得见的原野绽放光芒</a></h2></div>
                                    <div class="desc mt-2 d-none d-md-none"><p class="text-l2 font-md-12 text-secondary">不要被别人表现出来的毫不费力所迷惑，你要知道，那些信手拈来的东
                                            ...</p></div>

                                    <div class="data nodots d-flex align-items-center flex-row font-12 font-md-10 text-muted mt-2 mt-lg-3 light-12 d-flex d-lg-flex">
                                        <div class="flex-fill d-flex ">
                                            <span class="u-time">2017-09-29</span>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="u-view d-none d-lg-none"><i class="icon icon-eye"></i> 10,852</span>

                                            <span class="u-comment d-none d-lg-inline-block"><i class="fal fa-comment-alt-lines"></i>  22</span>

                                            <span class="u-like d-inline-block d-lg-none d-lg-inline-block"><i class="fal fa-heart"></i> 74</span>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>
                        <div class="item-card item-topic d-flex col-12 col-sm-6 col-md-3 col-lg-3">
                            <article class="card flex-fill mb-4 mb-lg-4-2">
                                <a href="special/lv-xing-zu-ji.html" target="_blank" title="旅行足迹"  class="custom-hover d-flex flex-fill">
                                    <div class="custom-hover-img image" style="background-image: url('wp-content/uploads/sites/11/2018/08/2018081115123799.jpg');"></div>
                                    <div class="position-relative d-flex flex-fill flex-column content-topic p-4 p-md-3">
                                        <div class="content-body d-flex flex-grow-1 flex-column  mb-5 mb-lg-0 pb-5 pb-md-0">
                                            <div class="data font-12 text-light mb-1 mb-md-1"><span>推荐专题</span><span>1篇文章</span></div>
                                            <div class="title">
                                                <h2 class="font-24 font-md-22 font-xs-20 weight-600 color-white">旅行足迹</h2>
                                            </div>
                                        </div>
                                        <div class="content-footer">
                                            <p class="font-16 font-xs-14 weight-600 light-14 color-white">美好的景色或是美好的事物总是需要记录下来的

                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>

                        <div class="item-card d-flex col-12 col-sm-6 col-md-3 col-lg-3">
                            <article class="card flex-fill mb-4 mb-sm-4-2 mb-md-4 mb-lg-4-2">
                                <div class="image">
                                    <a class="" href="1594.html" title="耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏" >
                                        <div class="custom-hover d-block">
                                            <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-bigger-5b927f1b65d4a.jpg&amp;h=270&amp;w=360&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" title="耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏" alt="耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body d-flex flex-column content mt-1 mt-md-2">

                                    <div class="meta mt-2 light-12 ">
                                        <span class="u-cat-name font-12 d-block u-cat-dot u-color-red"><a class="text-primary" href="category/shangye.html">旅行·在路上</a></span>
                                    </div>
                                    <div class="title flex-grow-1 mt-2"><h2 class="font-16 font-md-14 font-xs-16 text-l2 font-weight-normal light-14"><a href="1594.html" title="耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏">耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏</a></h2></div>
                                    <div class="desc mt-2 d-none d-md-none"><p class="text-l2 font-md-12 text-secondary">回想你去过的演奏会，是不是都会被要求把手机调至静音状态或者关闭
                                            ...</p></div>

                                    <div class="data nodots d-flex align-items-center flex-row font-12 font-md-10 text-muted mt-2 mt-lg-3 light-12 d-flex d-lg-flex">
                                        <div class="flex-fill d-flex ">
                                            <span class="u-time">2017-09-29</span>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="u-view d-none d-lg-none"><i class="icon icon-eye"></i> 7,396</span>

                                            <span class="u-comment d-none d-lg-inline-block"><i class="fal fa-comment-alt-lines"></i>  6</span>

                                            <span class="u-like d-inline-block d-lg-none d-lg-inline-block"><i class="fal fa-heart"></i> 63</span>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>
                        <div class="item-card d-flex col-12 col-sm-6 col-md-3 col-lg-3">
                            <article class="card flex-fill mb-4 mb-sm-4-2 mb-md-4 mb-lg-4-2">
                                <div class="image">
                                    <a class="" href="1941.html" title="二十岁的年纪，内心身怀雄心壮志，却又不得不脚踏实地，做八十岁想起来都会嘴角上扬的事" >
                                        <div class="custom-hover d-block">
                                            <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092212382148-e1537591114942.jpeg&amp;h=270&amp;w=360&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" title="二十岁的年纪，内心身怀雄心壮志，却又不得不脚踏实地，做八十岁想起来都会嘴角上扬的事" alt="二十岁的年纪，内心身怀雄心壮志，却又不得不脚踏实地，做八十岁想起来都会嘴角上扬的事">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body d-flex flex-column content mt-1 mt-md-2">

                                    <div class="meta mt-2 light-12 ">
                                        <span class="u-cat-name font-12 d-block u-cat-dot u-color-red"><a class="text-primary" href="category/shangye.html">旅行·在路上</a></span>
                                    </div>
                                    <div class="title flex-grow-1 mt-2"><h2 class="font-16 font-md-14 font-xs-16 text-l2 font-weight-normal light-14"><a href="1941.html" title="二十岁的年纪，内心身怀雄心壮志，却又不得不脚踏实地，做八十岁想起来都会嘴角上扬的事">二十岁的年纪，内心身怀雄心壮志，却又不得不脚踏实地，做八十岁想起来都会嘴角上扬的事</a></h2></div>
                                    <div class="desc mt-2 d-none d-md-none"><p class="text-l2 font-md-12 text-secondary">二十岁出头，正好处在一个尴尬的年纪。
                                            ...</p></div>

                                    <div class="data nodots d-flex align-items-center flex-row font-12 font-md-10 text-muted mt-2 mt-lg-3 light-12 d-flex d-lg-flex">
                                        <div class="flex-fill d-flex ">
                                            <span class="u-time">2017-09-28</span>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="u-view d-none d-lg-none"><i class="icon icon-eye"></i> 10,204</span>

                                            <span class="u-comment d-none d-lg-inline-block"><i class="fal fa-comment-alt-lines"></i>  34</span>

                                            <span class="u-like d-inline-block d-lg-none d-lg-inline-block"><i class="fal fa-heart"></i> 108</span>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>
                        <div class="item-card d-flex col-12 col-sm-6 col-md-3 col-lg-3">
                            <article class="card flex-fill mb-4 mb-sm-4-2 mb-md-4 mb-lg-4-2">
                                <div class="image">
                                    <a class="" href="1817.html" title="如果你是 V&amp;A 博物馆的会员，下次去千万别忘了去这个休息室" >
                                        <div class="custom-hover d-block">
                                            <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2018-08-2018081115213092.jpg&amp;h=270&amp;w=360&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" title="如果你是 V&amp;A 博物馆的会员，下次去千万别忘了去这个休息室" alt="如果你是 V&amp;A 博物馆的会员，下次去千万别忘了去这个休息室">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body d-flex flex-column content mt-1 mt-md-2">

                                    <div class="meta mt-2 light-12 ">
                                        <span class="u-cat-name font-12 d-block u-cat-dot u-color-green"><a class="text-primary" href="category/sheji.html">随笔集</a></span>
                                    </div>
                                    <div class="title flex-grow-1 mt-2"><h2 class="font-16 font-md-14 font-xs-16 text-l2 font-weight-normal light-14"><a href="1817.html" title="如果你是 V&amp;A 博物馆的会员，下次去千万别忘了去这个休息室">如果你是 V&amp;A 博物馆的会员，下次去千万别忘了去这个休息室</a></h2></div>
                                    <div class="desc mt-2 d-none d-md-none"><p class="text-l2 font-md-12 text-secondary">我们不久前报道过，V&amp;A 博物馆完成了百年来的最大规模升
                                            ...</p></div>

                                    <div class="data nodots d-flex align-items-center flex-row font-12 font-md-10 text-muted mt-2 mt-lg-3 light-12 d-flex d-lg-flex">
                                        <div class="flex-fill d-flex ">
                                            <span class="u-time">2017-09-28</span>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="u-view d-none d-lg-none"><i class="icon icon-eye"></i> 5,058</span>

                                            <span class="u-comment d-none d-lg-inline-block"><i class="fal fa-comment-alt-lines"></i>  4</span>

                                            <span class="u-like d-inline-block d-lg-none d-lg-inline-block"><i class="fal fa-heart"></i> 35</span>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>
                        <div class="item-card d-flex col-12 col-sm-6 col-md-3 col-lg-3">
                            <article class="card flex-fill mb-4 mb-sm-4-2 mb-md-4 mb-lg-4-2">
                                <div class="image">
                                    <a class="" href="1913.html" title="60 年代英国嬉皮士们的精神食粮，端看这些“地下杂志”" >
                                        <div class="custom-hover d-block">
                                            <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2018-08-2018081115120392.jpg&amp;h=270&amp;w=360&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" title="60 年代英国嬉皮士们的精神食粮，端看这些“地下杂志”" alt="60 年代英国嬉皮士们的精神食粮，端看这些“地下杂志”">
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body d-flex flex-column content mt-1 mt-md-2">

                                    <div class="meta mt-2 light-12 ">
                                        <span class="u-cat-name font-12 d-block u-cat-dot u-color-green"><a class="text-primary" href="category/sheji.html">随笔集</a></span>
                                    </div>
                                    <div class="title flex-grow-1 mt-2"><h2 class="font-16 font-md-14 font-xs-16 text-l2 font-weight-normal light-14"><a href="1913.html" title="60 年代英国嬉皮士们的精神食粮，端看这些“地下杂志”">60 年代英国嬉皮士们的精神食粮，端看这些“地下杂志”</a></h2></div>
                                    <div class="desc mt-2 d-none d-md-none"><p class="text-l2 font-md-12 text-secondary">整个 1960 年代后半期，正处在“摇摆伦敦”（Swinging
                                            ...</p></div>

                                    <div class="data nodots d-flex align-items-center flex-row font-12 font-md-10 text-muted mt-2 mt-lg-3 light-12 d-flex d-lg-flex">
                                        <div class="flex-fill d-flex ">
                                            <span class="u-time">2017-09-28</span>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="u-view d-none d-lg-none"><i class="icon icon-eye"></i> 1,929</span>

                                            <span class="u-comment d-none d-lg-inline-block"><i class="fal fa-comment-alt-lines"></i>  4</span>

                                            <span class="u-like d-inline-block d-lg-none d-lg-inline-block"><i class="fal fa-heart"></i> 22</span>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>
                        <div class="item-card d-flex col-12 col-sm-6 col-md-3 col-lg-3">
                            <article class="card flex-fill mb-4 mb-sm-4-2 mb-md-4 mb-lg-4-2">
                                <div class="image">
                                    <a class="" href="1938.html" title="荷兰公园里修了个儿童游乐场，是隐藏童趣的科幻风格" >
                                        <div class="custom-hover d-block">
                                            <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2018-08-2018081115212238.jpg&amp;h=270&amp;w=360&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" title="荷兰公园里修了个儿童游乐场，是隐藏童趣的科幻风格" alt="荷兰公园里修了个儿童游乐场，是隐藏童趣的科幻风格">
                                        </div>
                                        <div class="post-format-icon"><i class="fas fa-play"></i></div>            </a>
                                </div>
                                <div class="card-body d-flex flex-column content mt-1 mt-md-2">

                                    <div class="meta mt-2 light-12 ">
                                        <span class="u-cat-name font-12 d-block u-cat-dot u-color-green"><a class="text-primary" href="category/sheji.html">随笔集</a></span>
                                    </div>
                                    <div class="title flex-grow-1 mt-2"><h2 class="font-16 font-md-14 font-xs-16 text-l2 font-weight-normal light-14"><a href="1938.html" title="荷兰公园里修了个儿童游乐场，是隐藏童趣的科幻风格">荷兰公园里修了个儿童游乐场，是隐藏童趣的科幻风格</a></h2></div>
                                    <div class="desc mt-2 d-none d-md-none"><p class="text-l2 font-md-12 text-secondary">位于阿姆斯特丹南阿克西斯区的 Beatrix 公园，是这座城市最
                                            ...</p></div>

                                    <div class="data nodots d-flex align-items-center flex-row font-12 font-md-10 text-muted mt-2 mt-lg-3 light-12 d-flex d-lg-flex">
                                        <div class="flex-fill d-flex ">
                                            <span class="u-time">2017-09-28</span>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="u-view d-none d-lg-none"><i class="icon icon-eye"></i> 2,838</span>

                                            <span class="u-comment d-none d-lg-inline-block"><i class="fal fa-comment-alt-lines"></i>  3</span>

                                            <span class="u-like d-inline-block d-lg-none d-lg-inline-block"><i class="fal fa-heart"></i> 17</span>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>
                        <div class="item-card d-flex col-12 col-sm-6 col-md-3 col-lg-3">
                            <article class="card flex-fill mb-4 mb-sm-4-2 mb-md-4 mb-lg-4-2">
                                <div class="image">
                                    <a class="" href="2613.html" title="2016年奥斯卡最佳真人短片《口吃》" >
                                        <div class="custom-hover d-block">
                                            <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2018-08-2018081115111362.jpg&amp;h=270&amp;w=360&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" title="2016年奥斯卡最佳真人短片《口吃》" alt="2016年奥斯卡最佳真人短片《口吃》">
                                        </div>
                                        <div class="post-format-icon"><i class="fas fa-play"></i></div>            </a>
                                </div>
                                <div class="card-body d-flex flex-column content mt-1 mt-md-2">

                                    <div class="meta mt-2 light-12 ">
                                        <span class="u-cat-name font-12 d-block u-cat-dot u-color-orange"><a class="text-primary" href="category/duan-pian.html">短片</a></span>
                                    </div>
                                    <div class="title flex-grow-1 mt-2"><h2 class="font-16 font-md-14 font-xs-16 text-l2 font-weight-normal light-14"><a href="2613.html" title="2016年奥斯卡最佳真人短片《口吃》">2016年奥斯卡最佳真人短片《口吃》</a></h2></div>
                                    <div class="desc mt-2 d-none d-md-none"><p class="text-l2 font-md-12 text-secondary">第88届奥斯卡颁奖尘埃落定，在漫天刷屏小李子终夺影帝的众声喧哗中
                                            ...</p></div>

                                    <div class="data nodots d-flex align-items-center flex-row font-12 font-md-10 text-muted mt-2 mt-lg-3 light-12 d-flex d-lg-flex">
                                        <div class="flex-fill d-flex ">
                                            <span class="u-time">2017-09-28</span>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="u-view d-none d-lg-none"><i class="icon icon-eye"></i> 1,597</span>

                                            <span class="u-comment d-none d-lg-inline-block"><i class="fal fa-comment-alt-lines"></i>  1</span>

                                            <span class="u-like d-inline-block d-lg-none d-lg-inline-block"><i class="fal fa-heart"></i> 17</span>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <div class="posts-ajax-load">
                        <div class="post-loading"><span></span><span></span><span></span><span></span><span></span></div>
                        <button type="button" data-page="home" data-action="ajax_load_posts" data-paged="2" data-append="home-list" class="btn btn-secondary dposts-ajax-load">加载更多</button>
                    </div>
                </div>
            </main>
        </div>
    </section>
    <section class="nice-cms-push position-relative pt-4 pt-lg-5 pb-4 pb-lg-5">
        <div class="black-gradient"></div>
        <div class="overlay cms-cover"
             style="background-image: url('wp-content/uploads/sites/11/2018/09/2018092517163620.jpeg')"
        >
        </div>
        <div class="container">
            <div class="cms-push-liststyle01">
                <div class="cms-title position-relative d-flex align-items-center flex-row mb-0 mb-md-4">
                    <div class="flex-fill d-flex">
                        <h3 class="font-20 font-xs-16 font-weight-normal text-white">旅行在路上</h3>
                    </div>
                    <div class="text-nowrap light-10">
                        <a href="category/shangye.html" target="_blank" class="font-14 font-xs-12 text-light d-block color-white-hover">查看更多<i class="icon icon-plus ml-2"></i></a>
                    </div>
                </div>
                <div class="row row-10 row-xs-15">
                    <div class="d-flex col-6 col-md-3 col-lg-3 col-xl-3 mt-4 mt-sm-4-2 mt-md-0 item">
                        <article class="card flex-fill">
                            <div class="image">
                                <a href="1554.html" title="一隅芳华旧厦门，文艺彻骨华新路" target="_blank" class="custom-hover d-block">
                                    <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092517215762.jpg&amp;h=300&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" title="一隅芳华旧厦门，文艺彻骨华新路" alt="一隅芳华旧厦门，文艺彻骨华新路">
                                </a>
                            </div>
                            <div class="card-body d-flex flex-column content p-md-3">
                                <div class="title flex-grow-1">
                                    <h2 class="font-16 font-md-14 font-xs-14 text-l2 font-weight-normal light-14">
                                        <a href="1554.html" title="一隅芳华旧厦门，文艺彻骨华新路">一隅芳华旧厦门，文艺彻骨华新路</a>
                                    </h2>
                                </div>
                                <div class="desc mt-2 d-none d-md-block text-l2">
                                    <p class="font-md-12 text-secondary">厦门华新路别墅区，始建于1957年，伴随着鹰厦铁路的通车，也
                                        ...</p></div>

                                <div class="data nodots d-flex align-items-center flex-row font-12 font-md-10 text-muted mt-2 mt-lg-3 light-12 d-flex">
                                    <div class="flex-fill d-flex">
                                        <span class="u-time">2017-09-28</span>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="u-like"><i class="fal fa-heart"></i>  6</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="d-flex col-6 col-md-3 col-lg-3 col-xl-3 mt-4 mt-sm-4-2 mt-md-0 item">
                        <article class="card flex-fill">
                            <div class="image">
                                <a href="1779.html" title="骑行记|我走过五湖四海，唯一的行李就是你们" target="_blank" class="custom-hover d-block">
                                    <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092215081559-e1537600106211.jpeg&amp;h=300&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" title="骑行记|我走过五湖四海，唯一的行李就是你们" alt="骑行记|我走过五湖四海，唯一的行李就是你们">
                                </a>
                            </div>
                            <div class="card-body d-flex flex-column content p-md-3">
                                <div class="title flex-grow-1">
                                    <h2 class="font-16 font-md-14 font-xs-14 text-l2 font-weight-normal light-14">
                                        <a href="1779.html" title="骑行记|我走过五湖四海，唯一的行李就是你们">骑行记|我走过五湖四海，唯一的行李就是你们</a>
                                    </h2>
                                </div>
                                <div class="desc mt-2 d-none d-md-block text-l2">
                                    <p class="font-md-12 text-secondary">iPhone 8/8 Plus 重新又用上了跟 iPhone
                                        ...</p></div>

                                <div class="data nodots d-flex align-items-center flex-row font-12 font-md-10 text-muted mt-2 mt-lg-3 light-12 d-flex">
                                    <div class="flex-fill d-flex">
                                        <span class="u-time">2017-09-28</span>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="u-like"><i class="fal fa-heart"></i>  3</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="d-flex col-6 col-md-3 col-lg-3 col-xl-3 mt-4 mt-sm-4-2 mt-md-0 item">
                        <article class="card flex-fill">
                            <div class="image">
                                <a href="1669.html" title="江南事 | 游埠佛堂，如水流过旧时光" target="_blank" class="custom-hover d-block">
                                    <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092519023072-e1537873361636.jpeg&amp;h=300&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" title="江南事 | 游埠佛堂，如水流过旧时光" alt="江南事 | 游埠佛堂，如水流过旧时光">
                                </a>
                            </div>
                            <div class="card-body d-flex flex-column content p-md-3">
                                <div class="title flex-grow-1">
                                    <h2 class="font-16 font-md-14 font-xs-14 text-l2 font-weight-normal light-14">
                                        <a href="1669.html" title="江南事 | 游埠佛堂，如水流过旧时光">江南事 | 游埠佛堂，如水流过旧时光</a>
                                    </h2>
                                </div>
                                <div class="desc mt-2 d-none d-md-block text-l2">
                                    <p class="font-md-12 text-secondary">我近来对古镇着迷，只要有休息的时间，就去周边走走瞧瞧。
                                        ...</p></div>

                                <div class="data nodots d-flex align-items-center flex-row font-12 font-md-10 text-muted mt-2 mt-lg-3 light-12 d-flex">
                                    <div class="flex-fill d-flex">
                                        <span class="u-time">2017-09-26</span>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="u-like"><i class="fal fa-heart"></i>  4</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="d-flex col-6 col-md-3 col-lg-3 col-xl-3 mt-4 mt-sm-4-2 mt-md-0 item">
                        <article class="card flex-fill">
                            <div class="image">
                                <a href="1562.html" title="龙观禅那｜ 过一日山中的岁月如何？" target="_blank" class="custom-hover d-block">
                                    <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092212411087-e1537591280504.jpeg&amp;h=300&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" title="龙观禅那｜ 过一日山中的岁月如何？" alt="龙观禅那｜ 过一日山中的岁月如何？">
                                </a>
                            </div>
                            <div class="card-body d-flex flex-column content p-md-3">
                                <div class="title flex-grow-1">
                                    <h2 class="font-16 font-md-14 font-xs-14 text-l2 font-weight-normal light-14">
                                        <a href="1562.html" title="龙观禅那｜ 过一日山中的岁月如何？">龙观禅那｜ 过一日山中的岁月如何？</a>
                                    </h2>
                                </div>
                                <div class="desc mt-2 d-none d-md-block text-l2">
                                    <p class="font-md-12 text-secondary">车子开了许久终于来到了传说中一家非常别致的民宿&#8212;
                                        ...</p></div>

                                <div class="data nodots d-flex align-items-center flex-row font-12 font-md-10 text-muted mt-2 mt-lg-3 light-12 d-flex">
                                    <div class="flex-fill d-flex">
                                        <span class="u-time">2017-09-26</span>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="u-like"><i class="fal fa-heart"></i>  2</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nice-cms-push position-relative pt-4 pt-lg-5 pb-4 pb-md-4 pb-lg-5">
        <div class="white-gradient"></div>
        <div class="container">
            <div class="cms-push-liststyle02">
                <div class="cms-title position-relative d-flex align-items-center flex-row mb-4">
                    <div class="flex-fill d-flex">
                        <h3 class="font-20 font-xs-16 font-weight-normal">生活着</h3>
                    </div>
                    <div class="text-nowrap light-10">
                        <a href="category/shishang.html" target="_blank" class="font-14 font-xs-12 text-secondary  d-block">查看更多<i class="icon icon-plus ml-2"></i></a>
                    </div>
                </div>
                <div class="row row-10 row-xs-15">
                    <div class="item col-6 col-md-3 col-lg-2 mb-4 mb-sm-4-2 mb-md-4">
                        <div class="card flex-fill text-white">
                            <a href="1849.html" class="custom-hover d-block" target="_blank">
                                <div class="image"><img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2018-08-2018081116385576.jpg&amp;h=400&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" alt="纪梵希在四个城市贴海报，“你见过这只猫吗？”"></div>
                                <div class="card-img-overlay d-flex flex-fill flex-column p-3">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-6 col-md-3 col-lg-2 mb-4 mb-sm-4-2 mb-md-4">
                        <div class="card flex-fill text-white">
                            <a href="1875.html" class="custom-hover d-block" target="_blank">
                                <div class="image"><img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2018-09-2018092517500414-e1537869119115.jpeg&amp;h=400&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" alt="八达岭长城看人海，金山岭长城手机出大片！"></div>
                                <div class="card-img-overlay d-flex flex-fill flex-column p-3">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-6 col-md-3 col-lg-2 mb-4 mb-sm-4-2 mb-md-4">
                        <div class="card flex-fill text-white">
                            <a href="1851.html" class="custom-hover d-block" target="_blank">
                                <div class="image"><img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092216545247.jpeg&amp;h=400&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" alt="让我依依不舍的，是锦城的那抹炽红色"></div>
                                <div class="card-img-overlay d-flex flex-fill flex-column p-3">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-6 col-md-3 col-lg-2 mb-4 mb-sm-4-2 mb-md-4">
                        <div class="card flex-fill text-white">
                            <a href="1716.html" class="custom-hover d-block" target="_blank">
                                <div class="image"><img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2018-08-2018081116414713.jpg&amp;h=400&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" alt="UFC 现场第一次落户中国大陆，它都做了什么功课？"></div>
                                <div class="card-img-overlay d-flex flex-fill flex-column p-3">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-6 col-md-3 col-lg-2 mb-4 mb-sm-4-2 mb-md-4">
                        <div class="card flex-fill text-white">
                            <a href="1757.html" class="custom-hover d-block" target="_blank">
                                <div class="image"><img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092212411087-e1537591280504.jpeg&amp;h=400&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" alt="你青春期做过的梦，在镰仓都能一一实现"></div>
                                <div class="card-img-overlay d-flex flex-fill flex-column p-3">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-6 col-md-3 col-lg-2 mb-4 mb-sm-4-2 mb-md-4">
                        <div class="card flex-fill text-white">
                            <a href="1760.html" class="custom-hover d-block" target="_blank">
                                <div class="image"><img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092517125821-e1537866786592.jpeg&amp;h=400&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" alt="2018，如果你想学摄影，我想给你这十点建议"></div>
                                <div class="card-img-overlay d-flex flex-fill flex-column p-3">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-6 col-md-3 col-lg-2 mb-4 mb-sm-4-2 mb-md-4">
                        <div class="card flex-fill text-white">
                            <a href="1741.html" class="custom-hover d-block" target="_blank">
                                <div class="image"><img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-bigger-5be3fbe5b99e5.jpg&amp;h=400&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" alt="上了时报广场广告牌的25张动物照片，背后有什么故事？｜纽约广告周"></div>
                                <div class="card-img-overlay d-flex flex-fill flex-column p-3">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-6 col-md-3 col-lg-2 mb-4 mb-sm-4-2 mb-md-4">
                        <div class="card flex-fill text-white">
                            <a href="1689.html" class="custom-hover d-block" target="_blank">
                                <div class="image"><img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2018-08-2018081115213372.jpg&amp;h=400&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" alt="东方梦工厂发布新片，《功夫熊猫》后它经历了什么"></div>
                                <div class="card-img-overlay d-flex flex-fill flex-column p-3">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-6 col-md-3 col-lg-2 mb-4 mb-sm-4-2 mb-md-4">
                        <div class="card flex-fill text-white">
                            <a href="1722.html" class="custom-hover d-block" target="_blank">
                                <div class="image"><img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092517114518.jpeg&amp;h=400&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" alt="突然想活成一束光——拆拆手机摄影小妙招"></div>
                                <div class="card-img-overlay d-flex flex-fill flex-column p-3">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-6 col-md-3 col-lg-2 mb-4 mb-sm-4-2 mb-md-4">
                        <div class="card flex-fill text-white">
                            <a href="1333.html" class="custom-hover d-block" target="_blank">
                                <div class="image"><img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092217012233.jpeg&amp;h=400&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" alt="一袭红裙，是我对这个夏天最好的告别"></div>
                                <div class="card-img-overlay d-flex flex-fill flex-column p-3">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-6 col-md-3 col-lg-2 mb-4 mb-sm-4-2 mb-md-4">
                        <div class="card flex-fill text-white">
                            <a href="1644.html" class="custom-hover d-block" target="_blank">
                                <div class="image"><img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092216574674-e1537606675359.jpeg&amp;h=400&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" alt="为什么摄影师拍来拍去，最后却独爱微距？"></div>
                                <div class="card-img-overlay d-flex flex-fill flex-column p-3">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item col-6 col-md-3 col-lg-2 mb-4 mb-sm-4-2 mb-md-4">
                        <div class="card flex-fill text-white">
                            <a href="1547.html" class="custom-hover d-block" target="_blank">
                                <div class="image"><img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png" class="lazyload custom-hover-img timthumb_php" data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2018-08-2018081117551562-e1533981327486.jpg&amp;h=400&amp;w=400&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg" alt="蓝水色似蓝，日夜长潺潺——摩洛哥"></div>
                                <div class="card-img-overlay d-flex flex-fill flex-column p-3">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer class="nice-footer footer-style-2 footer-black">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-12 col-lg-5 mb-5 mb-lg-0">
                        <aside class="footer-widget footer-widget-text">
                            <h3 class="widget-title">关于我们</h3>
                            <div class="text-widget">
                                <p>nicetheme奈斯坚持原创和保持创新的用户体验设计，提供专业与创新的网站解决方案，6年网站设计开发经验，专注界面设计、WordPress主题开发、网站设计开发、小程序开发，并提供有保障的维护及售后。</p>
                            </div>

                        </aside>
                        <aside class="footer-widget footer-widget-social mt-3">
                            <ul>


                                <li  data-toggle="tooltip" title="微信">
                                    <a data-selector="#footer_qrcode-1" data-module="miPopup" href="javascript:void(0);" class="link btn-social-weixin"><i class="fab fa-weixin"></i></a>
                                    <div id="footer_qrcode-1" class="dialog-suxing">
                                        <div class="dialog-content dialog-wechat-content">
                                            <p class="text-secondary">微信</p>
                                            <img src="wp-content/uploads/sites/11/2018/08/2018081117580091.jpg" alt="微信">
                                            <div class="btn-close">
                                                <i class="icon icon-close"></i>
                                            </div>
                                        </div>
                                    </div></li>
                                <li><a data-toggle="tooltip" href="#" class="link" title="微博" target="_blank">
                                        <i class="fab fa-weibo"></i>
                                    </a></li>                            </ul>
                        </aside>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 offset-lg-1 mb-4 mb-lg-0">
                        <aside class="footer-widget footer-widget-categories">
                            <h3 class="widget-title">目录</h3>
                            <ul><li id="menu-item-3609" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3609"><a href="../6666-cosy-v2-demo-2/index.html">首页</a></li>
                                <li id="menu-item-31" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-31"><a href="category/shangye.html">旅行·在路上</a></li>
                                <li id="menu-item-32" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-32"><a href="category/shishang.html">生活着</a></li>
                            </ul>                        </aside>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <aside class="footer-widget footer-widget-links">
                            <h3 class="widget-title">朋友</h3>
                            <ul><li><a href="https://www.nicetheme.cn/" title="奈斯坚持原创和保持创新的用户体验设计，提供专业与创新的网站解决方案" target="_blank">nicetheme</a></li>
                                <li><a href="https://www.2zzt.com" title="2主题网" target="_blank">2zzt</a></li>
                                <li><a href="https://www.mywpku.com" title="wp小生" target="_blank">WP酷</a></li>
                            </ul>                        </aside>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <!-- Bottom Footer -->
                    <div class="col-12 col-md-12 footer-copyright">
                        <p class="text-secondary">Copyright © 2016-2019 <a href="index.html" title="Cosy主题-CMS杂志样式" rel="home">Cosy主题-CMS杂志样式</a>.  <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">粤123456789</a> Designed by <a href="https://www.nicetheme.cn" title="Nicetheme-坚持有品位且光芒四射的用户体验设计" target="_blank">Nicetheme</a>.</p>                    </div><!-- Bottom Footer /- -->
                </div>
            </div>
        </div>
    </footer>
    <div class="scroll-to-top floating-button d-sm-none d-none d-sm-block"><a href="#"><i class="fal fa-angle-up"></i></a></div>
    <script src="{{ mix('js/all.js') }}"></script>
    </body>
</html>
