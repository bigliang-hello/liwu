@extends('layouts.app', ['class' => 'post-template-default single single-post postid-1941 single-format-standard post-style03 black-top grid-hover grid-radius grid-border'])

@section('content')
    <section class="nice-post-topbar">
        <div class="container-fluid pl-0 pr-0">
            <div class="post-cover custom-hover overlay-hover">
                <div class="image custom-hover-img" style="background-image: url('{{asset($article->cover) }}');"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="content pt-4 pt-md-0 pb-3 pb-md-0 mb-0 mb-sm-3 mb-md-5 text-left">
                        <h1 class="title font-30 font-md-24 font-xs-20 font-weight-normal mb-3">{{$article->title}}</h1>

                        <div class="data d-flex justify-content-start align-items-center  flex-wrap text-left mt-3">
                            <span class="u-avatar mr-1 mr-md-2"><a href="author/suxing.html" target="_blank"><img alt=''
                                                                                                                  src='{{$article->user->avatar}}'
                                                                                                                  class='avatar avatar-33 photo'
                                                                                                                  height='33'
                                                                                                                  width='33'/></a></span>
                            <span class="u-name"><a class="d-block font-14 font-xs-12" href="author/suxing.html"
                                                    rel="category tag" target="_blank">{{$article->user->nickname}}</a></span>
                            <span class="u-cat"><a class="d-block font-14 font-xs-12" href="category/shangye.html"
                                                   rel="category tag"
                                                   target="_blank">{{$article->category->name}}</a></span>
                            <span class="u-time font-14 font-xs-12">{{$article->created_at->format('Y-m-d')}}</span>
                            <span class="u-view font-14 font-xs-12 d-none d-md-inline-block"><i
                                        class="icon icon-eye"></i> {{$article->view_count}}</span> <span
                                    class="u-comment font-14 font-xs-12 d-none d-md-inline-block"><a href="#comments"
                                                                                                     class="d-block"><i
                                            class="fal fa-comment-alt-lines"></i>  {{$article->reply_count}}</a></span></div>
                    </div>
                </div>
            </div>
    </section>
    <section class="nice-warp mt-3 mt-md-5 mb-3 mb-md-5">
        <div class="container">
            <div class="inner-row row">
                <main class="nice-main col-12 col-md-8">
                    <div class="nice-post">
                        <article class="post-content suxing-popup-gallery">
                            {{$article->content}}
                        </article>
                        <div class="post-tags mt-3 mt-md-4">
                        </div>
                        <div class="nice-sales post-sales mt-3 mt-md-4">
                            <div class="d-block d-md-none">
                                <a href="https://www.nicetheme.cn">
                                    <img src="wp-content/uploads/sites/11/2018/08/2018081118023771.png">
                                </a>
                                <span>广告</span></div>
                            <div class="d-none d-md-block">
                                <a href="https://www.nicetheme.cn">
                                    <img src="wp-content/uploads/sites/11/2018/08/2018081118024250.png">
                                </a>
                                <span>广告</span></div>
                        </div>

                        <div class="hr-short"></div>
                        <div class="post-declare  mt-3 mt-md-4-2"><p>本文系作者 @<a href="author/suxing.html"
                                                                               title="由nicetheme发布" rel="author">nicetheme</a>
                                原创发布在 Cosy主题-CMS杂志样式。未经许可，禁止转载。</p></div>

                        <div class="post-footer d-flex flex-column flex-md-row align-items-center my-5">
                            <div class="post-action mb-4 mb-md-0">
                                <a class="btn-action btn-like post-like font-theme   d-none d-md-inline-block"
                                   href="javascript:;" data-action="ding" data-id="1941"><i
                                            class="icon icon-heart font-22"></i>
                                    <span class="count font-14 font-xs-12 mt-2 mt-md-0">108</span>
                                </a>
                                <a class="btn-action btn-bigger-cover d-none d-md-inline-block" data-module="miPopup"
                                   data-selector="#bigger-cover" href="javascript:;"><i
                                            class="icon icon-paper-plane font-22"></i> <span
                                            class="font-14 font-xs-12 mt-2 mt-md-0">分享海报</span></a>
                                <div class="dialog-suxing" id="bigger-cover">
                                    <div class="dialog-content dialog-bigger-cover">
                                        <div class="row no-gutters position-relative">
                                            <div class="bigger-image col-12 col-sm-3 col-md-6">
                                                <div class="p-0 p-md-4">
                                                    <img class="load_bigger_img" data-nonce="3b2a7e8af5" data-id="1941"
                                                         data-action="create-bigger-image"
                                                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                         alt="二十岁的年纪，内心身怀雄心壮志，却又不得不脚踏实地，做八十岁想起来都会嘴角上扬的事 的海报">
                                                    <div class="image-loading"><i></i></div>
                                                </div>
                                            </div>
                                            <div class="bigger-share col-12 col-sm-9 col-md-6 d-flex">
                                                <div class="share-btns p-4 p-sm-0 p-md-4 d-flex flex-column flex-fill">
                                                    <div class="d-flex flex-column flex-fill justify-content-center align-content-center pr-0 pr-md-4">
                                                        <h3 class="font-14 font-xs-16 text-secondary weight-700 text-center text-sm-left text-md-center mb-4 mb-sm-3 mb-md-4">
                                                            分享本文海报</h3>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6 col-md-12 mb-3"><a
                                                                        href="https://service.weibo.com/share/share.php?url=https%3A%2F%2Fdemo.nicetheme.xyz%2Fcosy-style1%2F1941.html&amp;type=button&amp;language=zh_cn&amp;searchPic=true&amp;pic=https%3A%2F%2Fdemo.nicetheme.xyz%2Fcosy-style1%2Fwp-content%2Fuploads%2Fsites%2F11%2F2017%2F09%2Fbigger-5c92f10050e16.jpg&amp;title=%E3%80%90%E4%BA%8C%E5%8D%81%E5%B2%81%E7%9A%84%E5%B9%B4%E7%BA%AA%EF%BC%8C%E5%86%85%E5%BF%83%E8%BA%AB%E6%80%80%E9%9B%84%E5%BF%83%E5%A3%AE%E5%BF%97%EF%BC%8C%E5%8D%B4%E5%8F%88%E4%B8%8D%E5%BE%97%E4%B8%8D%E8%84%9A%E8%B8%8F%E5%AE%9E%E5%9C%B0%EF%BC%8C%E5%81%9A%E5%85%AB%E5%8D%81%E5%B2%81%E6%83%B3%E8%B5%B7%E6%9D%A5%E9%83%BD%E4%BC%9A%E5%98%B4%E8%A7%92%E4%B8%8A%E6%89%AC%E7%9A%84%E4%BA%8B%E3%80%91%E4%BA%8C%E5%8D%81%E5%B2%81%E5%87%BA%E5%A4%B4%EF%BC%8C%E6%AD%A3%E5%A5%BD%E5%A4%84%E5%9C%A8%E4%B8%80%E4%B8%AA%E5%B0%B4%E5%B0%AC%E7%9A%84%E5%B9%B4%E7%BA%AA%E3%80%82%E4%BC%BC%E4%B9%8E%E7%9C%8B%E9%80%8F%E4%BA%86%E7%94%9F%E6%B4%BB%EF%BC%8C%E5%AE%9E%E8%B4%A8%E5%8D%B4%E4%BE%9D%E6%97%A7%E5%8D%95%E7%BA%AF%EF%BC%9B%E4%BC%BC%E4%B9%8E%E5%BA%94%E6%9C%89%E5%B0%BD%E6%9C%89%EF%BC%8C%E5%AE%9E%E8%B4%A8%E5%8D%B4%E4%B8%80%E6%97%A0%E6%89%80%E6%9C%89%EF%BC%9B%E5%86%85%E5%BF%83%E8%BA%AB%E6%80%80%E9%9B%84%E5%BF%83%E5%A3%AE%E5%BF%97%EF%BC%8C%E5%8D%B4%E5%8F%88%E4%B8%8D%E5%BE%97%E4%B8%8D%E8%84%9A%E8%B8%8F%E5%AE%9E%E5%9C%B0%E3%80%82%E8%BA%AB%E5%A4%84%E4%BA%8C%E5%8D%81%E5%B2%81%E8%BF%99%E4%B8%AA%E5%B0%B4%E5%B0%AC%E7%9A%84%E5%B9%B4%E9%BE%84"
                                                                        target="_blank"
                                                                        class="btn btn-primary btn-block font-14 bigger_share weibo"
                                                                        role="button"><i class="fab fa-weibo"></i> 新浪微博</a>
                                                            </div>
                                                            <div class="col-12 col-sm-6 col-md-12 mb-3"><a
                                                                        href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fdemo.nicetheme.xyz%2Fcosy-style1%2F1941.html"
                                                                        target="_blank"
                                                                        class="btn btn-primary btn-block font-14 bigger_share facebook"
                                                                        role="button"><i class="fab fa-facebook-f"></i>
                                                                    Facebook</a></div>
                                                            <div class="col-12 col-sm-6 col-md-12 mb-3"><a
                                                                        href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fdemo.nicetheme.xyz%2Fcosy-style1%2F1941.html"
                                                                        target="_blank"
                                                                        class="btn btn-primary btn-block font-14 bigger_share twitter"
                                                                        role="button"><i class="fab fa-twitter"></i>
                                                                    Twitter</a></div>
                                                            <div class="col-12 col-sm-6 col-md-12 mb-3"><a href=""
                                                                                                           download="二十岁的年纪，内心身怀雄心壮志，却又不得不脚踏实地，做八十岁想起来都会嘴角上扬的事-Bigger-cover.png"
                                                                                                           class="btn btn-dark btn-block font-14 bigger_down"
                                                                                                           role="button"><i
                                                                            class="fas fa-arrow-alt-circle-down"></i>
                                                                    下载海报</a></div>
                                                            <div class="col-12 mt-3"><p
                                                                        class="font-12 text-center text-sm-left text-md-center text-muted">
                                                                    (分享到微信或朋友圈请下载海报)</p></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action-share d-sm-none">
                                            <button class="btn-open-share"><i class="icon icon-share-alt"></i></button>
                                            <button class="btn-close-share"><i class="icon icon-close"></i></button>
                                        </div>
                                        <div class="btn-close">
                                            <i class="icon icon-close"></i>
                                        </div>
                                        <div class="text-weixin d-md-none">
                                            <p>长按图片转发给朋友</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-fill">
                            </div>
                            <div class="text-nowrap">
                                <ul class="social bdsharebuttonbox">
                                    <li data-toggle="tooltip" data-placement="top" title="分享至微博"><a class="weibo"
                                                                                                    rel="nofollow"
                                                                                                    target="_blank"
                                                                                                    href="https://service.weibo.com/share/share.php?url=https%3A%2F%2Fdemo.nicetheme.xyz%2Fcosy-style1%2F1941.html&amp;type=button&amp;language=zh_cn&amp;title=%E3%80%90%E4%BA%8C%E5%8D%81%E5%B2%81%E7%9A%84%E5%B9%B4%E7%BA%AA%EF%BC%8C%E5%86%85%E5%BF%83%E8%BA%AB%E6%80%80%E9%9B%84%E5%BF%83%E5%A3%AE%E5%BF%97%EF%BC%8C%E5%8D%B4%E5%8F%88%E4%B8%8D%E5%BE%97%E4%B8%8D%E8%84%9A%E8%B8%8F%E5%AE%9E%E5%9C%B0%EF%BC%8C%E5%81%9A%E5%85%AB%E5%8D%81%E5%B2%81%E6%83%B3%E8%B5%B7%E6%9D%A5%E9%83%BD%E4%BC%9A%E5%98%B4%E8%A7%92%E4%B8%8A%E6%89%AC%E7%9A%84%E4%BA%8B%E3%80%91%E4%BA%8C%E5%8D%81%E5%B2%81%E5%87%BA%E5%A4%B4%EF%BC%8C%E6%AD%A3%E5%A5%BD%E5%A4%84%E5%9C%A8%E4%B8%80%E4%B8%AA%E5%B0%B4%E5%B0%AC%E7%9A%84%E5%B9%B4%E7%BA%AA%E3%80%82%E4%BC%BC%E4%B9%8E%E7%9C%8B%E9%80%8F%E4%BA%86%E7%94%9F%E6%B4%BB%EF%BC%8C%E5%AE%9E%E8%B4%A8%E5%8D%B4%E4%BE%9D%E6%97%A7%E5%8D%95%E7%BA%AF%EF%BC%9B%E4%BC%BC%E4%B9%8E%E5%BA%94%E6%9C%89%E5%B0%BD%E6%9C%89%EF%BC%8C%E5%AE%9E%E8%B4%A8%E5%8D%B4%E4%B8%80%E6%97%A0%E6%89%80%E6%9C%89%EF%BC%9B%E5%86%85%E5%BF%83%E8%BA%AB%E6%80%80%E9%9B%84%E5%BF%83%E5%A3%AE%E5%BF%97%EF%BC%8C%E5%8D%B4%E5%8F%88%E4%B8%8D%E5%BE%97%E4%B8%8D%E8%84%9A%E8%B8%8F%E5%AE%9E%E5%9C%B0%E3%80%82+%E8%BA%AB%E5%A4%84%E4%BA%8C%E5%8D%81%E5%B2%81%E8%BF%99%E4%B8%AA%E5%B0%B4%E5%B0%AC%E7%9A%84%E5%B9%B4%E9%BE%84%EF%BC%8C%E7%A1%AE%E5%AE%9E%E4%BC%9A%E6%9C%89%E4%BA%9B%E8%BF%B7%E8%8C%AB%EF%BC%8C%E4%B9%9F%E4%BC%9A%E6%9C%89%E4%BA%9B%E6%97%A0%E5%A5%88%E3%80%82%E4%BD%86%E6%98%AF%E6%AF%8F%E5%BD%93%E8%83%8C%E8%B5%B7%E8%A1%8C%E5%9B%8A%E7%9A%84%E9%82%A3%E4%B8%80%E5%88%BB%EF%BC%8C%E6%88%91%E5%B0%B1%E6%98%8E%E7%99%BD%E6%9C%89%E4%BA%9B%E4%BA%8B%E6%83%85%E7%8E%B0%E5%9C%A8%E4%B8%8D%E5%8E%BB%E5%81%9A%EF%BC%8C%E5%86%8D%E4%B9%9F%E4%B8%8D%E4%BC%9A%E5%8E%BB%E5%81%9A%E4%BA%86%E3%80%82+%E6%9C%89%E4%BA%BA%E7%BB%8F%E5%B8%B8%E4%BC%9A%E9%97%AE%E6%88%91%EF%BC%8C%E4%BD%A0%E8%AE%A4%E4%B8%BA%E6%97%85%E8%A1%8C%E7%9A%84%E6%84%8F%E4%B9%89%E6%98%AF%E4%BB%80%E4%B9%88%EF%BC%9F%E4%BD%A0%E5%9C%A8%E8%B7%AF%E4%B8%8A%E9%83%BD%E5%81%9A%E4%BB%80%E4%B9%88%EF%BC%9F+%E6%88%91%E4%B8%8D%E8%83%BD%E5%91%8A%E8%AF%89%E4%BD%A0%E6%97%85%E8%A1%8C%E7%9A%84%E6%84%8F%E4%B9%89%E6%98%AF%E4%BB%80%E4%B9%88%EF%BC%8C%E6%88%96%E8%AE%B8%E6%97%85%E8%A1%8C%E6%9C%AC%E8%BA%AB%E5%B0%B1%E6%B2%A1%E6%9C%89%E6%84%8F%E4%B9%89%E3%80%82%E4%B8%8D%E8%BF%87%E6%97%A2%E7%84%B6%E6%9C%89%E4%BA%BA%E9%97%AE%E5%90%8E%E9%9D%A2%E4%B8%80%E4%B8%AA%E9%97%AE%E9%A2%98%EF%BC%8C%E9%82%A3%E6%88%91%E5%80%9F%E6%AD%A4%E6%9C%BA%E4%BC%9A%E6%9D%A5%E5%88%86%E4%BA%AB%E4%B8%8B%E6%88%91%E5%9C%A8%E6%97%85%E9%80%94%E4%B8%AD%E7%BB%8F%E5%B8%B8%E4%BC%9A%E5%81%9A%E7%9A%84%E5%8D%81%E4%BB%B6%E4%BA%8B%E3%80%82+%E5%9B%A0%E4%B8%BA%EF%BC%8C%E6%88%91%E8%A7%89%E5%BE%97%E8%BF%99%E4%BA%9B%E9%83%BD%E6%98%AF%E5%88%B0%E5%85%AB%E5%8D%81%E5%B2%81%E4%B9%8B%E5%90%8E%E6%83%B3%E8%B5%B7%E6%9D%A5%E9%83%BD%E4%BC%9A%E7%AC%91%E7%9A%84%E4%BA%8B%E6%83%85%E3%80%82+%E9%92%88%E5%AF%B9%E8%BF%99%E6%AC%A1%E4%B8%8D%E6%88%90%E5%8A%9F%E7%9A%84%E6%8B%8D%E5%8D%96%EF%BC%8C%E3%80%8A%E7%A6%8F%E5%B8%83%E6%96%AF%E3%80%8B%E5%92%8C%E3%80%8A%E7%BB%8F%E6%B5%8E%E5%AD%A6%E4%BA%BA%E3%80%8B%E9%83%BD%E6%8F%90%E5%87%BA%E4%BA%86%E5%8D%83%E7%A6%A7%E4%B8%80%E4%BB%A3%E5%9B%A0%E4%B8%BA%E7%BB%8F%E6%B5%8E%E7%8A%B6%E5%86%B5%E4%B8%8D%E4%B9%90%E8%A7%82%E8%B6%8A%E6%9D%A5%E8%B6%8A%E4%B8%8D+%5B%26hellip%3B%5D&amp;pic=https%3A%2F%2Fdemo.nicetheme.xyz%2Fcosy-style1%2Fwp-content%2Fuploads%2Fsites%2F11%2F2017%2F09%2F2018092212382148-e1537591114942.jpeg&amp;searchPic=true"><i
                                                    class="fab fa-weibo"></i></a></li>
                                    <li data-toggle="tooltip" data-placement="top" title="分享至微信"><a
                                                class="weixin single-weixin"
                                                data-img="https://demo.nicetheme.xyz/cosy-style1/wp-content/themes/Cosy-2.1.0/core/functions/share/qrcode.php?data=https%3A%2F%2Fdemo.nicetheme.xyz%2Fcosy-style1%2F1941.html"
                                                rel="nofollow" href="javascript:;"><i class="fab fa-weixin"></i></a>
                                    </li>
                                    <li data-toggle="tooltip" data-placement="top" title="分享至QQ"><a class="qq"
                                                                                                    rel="nofollow"
                                                                                                    target="_blank"
                                                                                                    href="https://connect.qq.com/widget/shareqq/index.html?url=https%3A%2F%2Fdemo.nicetheme.xyz%2Fcosy-style1%2F1941.html&amp;title=%E4%BA%8C%E5%8D%81%E5%B2%81%E7%9A%84%E5%B9%B4%E7%BA%AA%EF%BC%8C%E5%86%85%E5%BF%83%E8%BA%AB%E6%80%80%E9%9B%84%E5%BF%83%E5%A3%AE%E5%BF%97%EF%BC%8C%E5%8D%B4%E5%8F%88%E4%B8%8D%E5%BE%97%E4%B8%8D%E8%84%9A%E8%B8%8F%E5%AE%9E%E5%9C%B0%EF%BC%8C%E5%81%9A%E5%85%AB%E5%8D%81%E5%B2%81%E6%83%B3%E8%B5%B7%E6%9D%A5%E9%83%BD%E4%BC%9A%E5%98%B4%E8%A7%92%E4%B8%8A%E6%89%AC%E7%9A%84%E4%BA%8B&amp;pics=https%3A%2F%2Fdemo.nicetheme.xyz%2Fcosy-style1%2Fwp-content%2Fuploads%2Fsites%2F11%2F2017%2F09%2F2018092212382148-e1537591114942.jpeg&amp;summary=%E4%BA%8C%E5%8D%81%E5%B2%81%E5%87%BA%E5%A4%B4%EF%BC%8C%E6%AD%A3%E5%A5%BD%E5%A4%84%E5%9C%A8%E4%B8%80%E4%B8%AA%E5%B0%B4%E5%B0%AC%E7%9A%84%E5%B9%B4%E7%BA%AA%E3%80%82%E4%BC%BC%E4%B9%8E%E7%9C%8B%E9%80%8F%E4%BA%86%E7%94%9F%E6%B4%BB%EF%BC%8C%E5%AE%9E%E8%B4%A8%E5%8D%B4%E4%BE%9D%E6%97%A7%E5%8D%95%E7%BA%AF%EF%BC%9B%E4%BC%BC%E4%B9%8E%E5%BA%94%E6%9C%89%E5%B0%BD%E6%9C%89%EF%BC%8C%E5%AE%9E%E8%B4%A8%E5%8D%B4%E4%B8%80%E6%97%A0%E6%89%80%E6%9C%89%EF%BC%9B%E5%86%85%E5%BF%83%E8%BA%AB%E6%80%80%E9%9B%84%E5%BF%83%E5%A3%AE%E5%BF%97%EF%BC%8C%E5%8D%B4%E5%8F%88%E4%B8%8D%E5%BE%97%E4%B8%8D%E8%84%9A%E8%B8%8F%E5%AE%9E%E5%9C%B0%E3%80%82+%E8%BA%AB%E5%A4%84%E4%BA%8C%E5%8D%81%E5%B2%81%E8%BF%99%E4%B8%AA%E5%B0%B4%E5%B0%AC%E7%9A%84%E5%B9%B4%E9%BE%84%EF%BC%8C%E7%A1%AE%E5%AE%9E%E4%BC%9A%E6%9C%89%E4%BA%9B%E8%BF%B7%E8%8C%AB%EF%BC%8C%E4%B9%9F%E4%BC%9A%E6%9C%89%E4%BA%9B%E6%97%A0%E5%A5%88%E3%80%82%E4%BD%86%E6%98%AF%E6%AF%8F%E5%BD%93%E8%83%8C%E8%B5%B7%E8%A1%8C%E5%9B%8A%E7%9A%84%E9%82%A3%E4%B8%80%E5%88%BB%EF%BC%8C%E6%88%91%E5%B0%B1%E6%98%8E%E7%99%BD%E6%9C%89%E4%BA%9B%E4%BA%8B%E6%83%85%E7%8E%B0%E5%9C%A8%E4%B8%8D%E5%8E%BB%E5%81%9A%EF%BC%8C%E5%86%8D%E4%B9%9F%E4%B8%8D%E4%BC%9A%E5%8E%BB%E5%81%9A%E4%BA%86%E3%80%82+%E6%9C%89%E4%BA%BA%E7%BB%8F%E5%B8%B8%E4%BC%9A%E9%97%AE%E6%88%91%EF%BC%8C%E4%BD%A0%E8%AE%A4%E4%B8%BA%E6%97%85%E8%A1%8C%E7%9A%84%E6%84%8F%E4%B9%89%E6%98%AF%E4%BB%80%E4%B9%88%EF%BC%9F%E4%BD%A0%E5%9C%A8%E8%B7%AF%E4%B8%8A%E9%83%BD%E5%81%9A%E4%BB%80%E4%B9%88%EF%BC%9F+%E6%88%91%E4%B8%8D%E8%83%BD%E5%91%8A%E8%AF%89%E4%BD%A0%E6%97%85%E8%A1%8C%E7%9A%84%E6%84%8F%E4%B9%89%E6%98%AF%E4%BB%80%E4%B9%88%EF%BC%8C%E6%88%96%E8%AE%B8%E6%97%85%E8%A1%8C%E6%9C%AC%E8%BA%AB%E5%B0%B1%E6%B2%A1%E6%9C%89%E6%84%8F%E4%B9%89%E3%80%82%E4%B8%8D%E8%BF%87%E6%97%A2%E7%84%B6%E6%9C%89%E4%BA%BA%E9%97%AE%E5%90%8E%E9%9D%A2%E4%B8%80%E4%B8%AA%E9%97%AE%E9%A2%98%EF%BC%8C%E9%82%A3%E6%88%91%E5%80%9F%E6%AD%A4%E6%9C%BA%E4%BC%9A%E6%9D%A5%E5%88%86%E4%BA%AB%E4%B8%8B%E6%88%91%E5%9C%A8%E6%97%85%E9%80%94%E4%B8%AD%E7%BB%8F%E5%B8%B8%E4%BC%9A%E5%81%9A%E7%9A%84%E5%8D%81%E4%BB%B6%E4%BA%8B%E3%80%82+%E5%9B%A0%E4%B8%BA%EF%BC%8C%E6%88%91%E8%A7%89%E5%BE%97%E8%BF%99%E4%BA%9B%E9%83%BD%E6%98%AF%E5%88%B0%E5%85%AB%E5%8D%81%E5%B2%81%E4%B9%8B%E5%90%8E%E6%83%B3%E8%B5%B7%E6%9D%A5%E9%83%BD%E4%BC%9A%E7%AC%91%E7%9A%84%E4%BA%8B%E6%83%85%E3%80%82+%E9%92%88%E5%AF%B9%E8%BF%99%E6%AC%A1%E4%B8%8D%E6%88%90%E5%8A%9F%E7%9A%84%E6%8B%8D%E5%8D%96%EF%BC%8C%E3%80%8A%E7%A6%8F%E5%B8%83%E6%96%AF%E3%80%8B%E5%92%8C%E3%80%8A%E7%BB%8F%E6%B5%8E%E5%AD%A6%E4%BA%BA%E3%80%8B%E9%83%BD%E6%8F%90%E5%87%BA%E4%BA%86%E5%8D%83%E7%A6%A7%E4%B8%80%E4%BB%A3%E5%9B%A0%E4%B8%BA%E7%BB%8F%E6%B5%8E%E7%8A%B6%E5%86%B5%E4%B8%8D%E4%B9%90%E8%A7%82%E8%B6%8A%E6%9D%A5%E8%B6%8A%E4%B8%8D+%5B%26hellip%3B%5D"><i
                                                    class="fab fa-qq"></i></a></li>
                                    <li data-toggle="tooltip" data-placement="top" title="分享至Fackbook"><a
                                                class="fackbook" rel="nofollow" target="_blank"
                                                href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fdemo.nicetheme.xyz%2Fcosy-style1%2F1941.html"><i
                                                    class="fab fa-facebook-square"></i></a></li>
                                    <li data-toggle="tooltip" data-placement="top" title="分享至Twitter"><a class="twitter"
                                                                                                         rel="nofollow"
                                                                                                         target="_blank"
                                                                                                         href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fdemo.nicetheme.xyz%2Fcosy-style1%2F1941.html"><i
                                                    class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="media post-author p-4 p-lg-4-2 my-4">
                        <div class="author-avatar mr-2 mr-md-3">
                            <a href="author/suxing.html">
                                <img alt=''
                                     src='https://secure.gravatar.com/avatar/afa39accf8700cbbe7b13e1d01aa5b17?s=65&amp;d=mm&amp;r=g'
                                     srcset='https://secure.gravatar.com/avatar/afa39accf8700cbbe7b13e1d01aa5b17?s=130&amp;d=mm&amp;r=g 2x'
                                     class='avatar avatar-65 photo' height='65' width='65'/> </a>
                        </div>
                        <div class="media-body author-info">
                            <h4 class="name">
                                <a href="author/suxing.html">
                                    nicetheme </a>
                            </h4>
                            <div class="desc text-secondary font-14">
                                nicetheme奈斯坚持原创和保持创新的用户体验设计，提供专业与创新的网站解决方案。
                            </div>
                            <div class="links mt-3 mt-md-2">
                                <ul>
                                    <li class="mr-3 font-14" data-toggle="tooltip" data-placement="top" title="微博"><a
                                                href="https://www.nicetheme.cn" target="_blank"
                                                class="btn-author-sns text-light"><i class="fab fa-weibo"></i></a></li>
                                    <li class="font-14" data-toggle="tooltip" data-placement="top" title="QQ"><a
                                                href="25679903.html" target="_blank"
                                                class="btn-author-sns text-light"><i class="fab fa-qq"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="post-navigation-with-image my-2">
                        <div class="row row-10">
                            <div class="item prev col-12 col-sm-12 col-md-12 col-lg-6">
                                <article>
                                    <a href="1817.html" title="如果你是 V&amp;A 博物馆的会员，下次去千万别忘了去这个休息室" target="_blank"
                                       class="custom-hover d-block">

                                        <div class="custom-hover-img image"
                                             style="background-image: url('wp-content/uploads/sites/11/2018/08/2018081115213092.jpg');">
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center flex-column text-center content p-2 p-md-3">
                                            <div class="meta font-12 text-light mb-1"><i class="fas fa-caret-left"></i>
                                                上一篇
                                            </div>
                                            <div class="title"><h2 class="font-16 weight-600 text-l2 color-white">如果你是 V&amp;A
                                                    博物馆的会员，下次去千万别忘了去这个休息室</h2></div>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="item next col-12 col-sm-12 col-md-12 col-lg-6 mt-3 mt-lg-0">
                                <article>
                                    <a href="1594.html" title="耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏" target="_blank"
                                       class="custom-hover d-block">

                                        <div class="custom-hover-img image"
                                             style="background-image: url('wp-content/uploads/sites/11/2017/09/bigger-5b927f1b65d4a.jpg');">
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center flex-column text-center content p-2 p-md-3">
                                            <div class="meta font-12 text-light mb-1">下一篇 <i
                                                        class="fas fa-caret-right"></i></div>
                                            <div class="title"><h2 class="font-16 weight-600 text-l2 color-white">
                                                    耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏</h2></div>
                                        </div>
                                    </a>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div id="comments" class="nice-comments mt-3 mt-md-4-2 mt-lg-5">
                        <h4 class="font-16 mb-4 mt-lg-4-2"><span class="font-18 text-muted mr-2"><i
                                        class="fal fa-comment-alt-lines"></i> </span> 文章评论
                            <small class="font-theme">(34)</small>
                        </h4>
                        <div id="respond" class="comment-respond mb-4 mb-lg-5">
                            <form method="post" action="https://demo.nicetheme.xyz/cosy-style1/wp-comments-post.php"
                                  id="commentform" class="comment-form">
                                <div class="d-flex w-100">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author">
                                        <img alt='' src='https://secure.gravatar.com/avatar/?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo avatar-default' height='50' width='50'/>
                                    </div>
                                    <div class="flex-fill comment-from-author">
                                        <div class="comment-form-info">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="comment-form-author col-12 col-sm-6 col-md-6">
                                                        <input class="form-control" id="author" placeholder="昵称"
                                                               name="author" type="text" value="" required="required">
                                                    </div>

                                                    <div class="comment-form-email col-12 col-sm-6 col-md-6 mt-3 mt-md-0">
                                                        <input id="email" class="form-control" name="email"
                                                               placeholder="邮箱" type="email" value=""
                                                               required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-md-12 comment-form-url">
                                                        <input class="form-control" placeholder="网址" id="url" name="url"
                                                               type="url" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group comment-form-text mb-4">

                                            <div class="form-control comment-textarea">
                                                <textarea id="comment" name="comment" placeholder="" cols="45" rows="8"
                                                          maxlength="65525" aria-required="true"
                                                          required="required"></textarea>
                                                <div class="comment-action-bar">
                                                    <div class="dropdown nice-dropmenu dropdown-smilies">
                                                        <button class="btn btn-link text-secondary" id="dropsmilies"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            <i class="icon icon-emotsmile"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-inner"
                                                             aria-labelledby="dropsmilies">
                                                            <a href="javascript:;" class="insert_emoji"
                                                               data-emoji=";-)">😉</a><a href="javascript:;"
                                                                                         class="insert_emoji"
                                                                                         data-emoji=":|">😐</a><a
                                                                    href="javascript:;" class="insert_emoji"
                                                                    data-emoji=":x">😡</a><a href="javascript:;"
                                                                                             class="insert_emoji"
                                                                                             data-emoji=":twisted:">😈</a><a
                                                                    href="javascript:;" class="insert_emoji"
                                                                    data-emoji=":smile:">🙂</a><a href="javascript:;"
                                                                                                  class="insert_emoji"
                                                                                                  data-emoji=":shock:">😯</a><a
                                                                    href="javascript:;" class="insert_emoji"
                                                                    data-emoji=":sad:">🙁</a><a href="javascript:;"
                                                                                                class="insert_emoji"
                                                                                                data-emoji=":roll:">🙄</a><a
                                                                    href="javascript:;" class="insert_emoji"
                                                                    data-emoji=":razz:">😛</a><a href="javascript:;"
                                                                                                 class="insert_emoji"
                                                                                                 data-emoji=":oops:">😳</a><a
                                                                    href="javascript:;" class="insert_emoji"
                                                                    data-emoji=":o">😮</a><a href="javascript:;"
                                                                                             class="insert_emoji"
                                                                                             data-emoji=":lol:">😆</a><a
                                                                    href="javascript:;" class="insert_emoji"
                                                                    data-emoji=":idea:">💡</a><a href="javascript:;"
                                                                                                 class="insert_emoji"
                                                                                                 data-emoji=":grin:">😀</a><a
                                                                    href="javascript:;" class="insert_emoji"
                                                                    data-emoji=":evil:">👿</a><a href="javascript:;"
                                                                                                 class="insert_emoji"
                                                                                                 data-emoji=":cry:">😥</a><a
                                                                    href="javascript:;" class="insert_emoji"
                                                                    data-emoji=":cool:">😎</a><a href="javascript:;"
                                                                                                 class="insert_emoji"
                                                                                                 data-emoji=":arrow:">➡</a><a
                                                                    href="javascript:;" class="insert_emoji"
                                                                    data-emoji=":???:">😕</a><a href="javascript:;"
                                                                                                class="insert_emoji"
                                                                                                data-emoji=":?:">❓</a><a
                                                                    href="javascript:;" class="insert_emoji"
                                                                    data-emoji=":!:">❗</a></div>
                                                    </div>
                                                    <button class="btn btn-link text-secondary add_image"><i
                                                                class="icon icon-picture"></i></button>
                                                    <button class="btn btn-link text-secondary add_code"><i
                                                                class="fal fa-code" aria-hidden="true"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-submit d-flex align-items-stretch align-items-md-center flex-column  flex-md-row">
                                            <div class="form-captcha-group">

                                                <div class="d-flex align-items-center form-captcha form-captcha-switch mb-3 mb-md-0">
                                                    <div class="d-flex captcha-switch input-switch">
                                                        <input type="checkbox" id="switchy" class="input-checkbox"/>
                                                        <label for="switchy" class="switch-checkbox"></label>
                                                    </div>
                                                    <small><i class="icon icon-question"></i> 点击解锁后提交评论</small>
                                                </div>
                                                <input type="hidden" id="slidecode" name="slidecode" value="2243572">

                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="form-actions text-right">
                                                <a rel="nofollow" id="cancel-comment-reply-link" style="display: none"
                                                   class="btn btn-outline-secondary mb-3 mb-md-0 mr-md-3"
                                                   href="javascript:;">再想想</a>

                                                <input disabled="disabled" name="submit" type="submit" id="submit"
                                                       class="btn btn-primary" value="发表评论">
                                                <input type='hidden' name='comment_post_ID' value='1941'
                                                       id='comment_post_ID'/>
                                                <input type='hidden' name='comment_parent' id='comment_parent'
                                                       value='0'/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div> <!-- #respond -->
                        <ul class="comment-list">
                            <li id="comment-52" class="comment even thread-even depth-1">
                                <article id="div-comment-52" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/8d22e9a2693c372daf5eafeb8ac61cc1?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/8d22e9a2693c372daf5eafeb8ac61cc1?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                <a href='https://jooger.me' rel='external nofollow'
                                                   class='url'>Jooger</a></h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2017-12-20</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>很好看的主题</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="52" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 2</i></a>

                                                <a href="javascript:;" data-id="52" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 2</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-52','52', 'respond','1941' ) "
                                                   href="1941-replytocom=52.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body -->
                                <ul class="children">
                                    <li id="comment-145" class="comment odd alt depth-2">
                                        <article id="div-comment-145" class="d-flex flex-fill comment-body">
                                            <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                                <img alt=''
                                                     src='https://secure.gravatar.com/avatar/d40fe5343bcafa0e7ca9799f2e40eff6?s=50&amp;d=mm&amp;r=g'
                                                     srcset='https://secure.gravatar.com/avatar/d40fe5343bcafa0e7ca9799f2e40eff6?s=100&amp;d=mm&amp;r=g 2x'
                                                     class='avatar avatar-50 photo' height='50' width='50'/></div>
                                            <!-- .comment-author -->
                                            <div class="flex-fill flex-column comment-text">
                                                <div class="d-flex align-items-center comment-info mb-2">
                                                    <h6 class="comment-author">
                                                        11 </h6>
                                                    <div class="flex-fill"></div>
                                                    <div class="pl-3">
                                                        <time class="comment-date text-muted font-12">2018-12-01</time>
                                                    </div>
                                                </div>
                                                <div class="comment-content">
                                                    <p><a href="#comment-52">@Jooger</a>&nbsp;111</p>
                                                </div><!-- .comment-content -->
                                                <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                                    <div class="action mr-3">
                                                        <a href="javascript:;" data-id="145" data-caction="up"
                                                           data-action="comment_up_down"
                                                           class="mr-3 text-secondary like comment-action "><i
                                                                    class="icon icon-like" aria-hidden="true"> 2</i></a>

                                                        <a href="javascript:;" data-id="145" data-caction="down"
                                                           data-action="comment_up_down"
                                                           class="text-secondary fuck comment-action "><i
                                                                    class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                                    </div>
                                                    <div class="flex-fill"></div>
                                                    <div class="reply">
                                                        <a onclick="return addComment.moveForm( 'comment-145','145', 'respond','1941' ) "
                                                           href="1941-replytocom=145.html#respond"
                                                           class="text-secondary comment-reply-link" rel="nofollow"><i
                                                                    class="fal fa-repeat"></i> 回复</a>
                                                    </div>
                                                </div>

                                            </div><!-- .comment-text -->
                                        </article><!-- .comment-body --></li>
                                    <li id="comment-155" class="comment even depth-2">
                                        <article id="div-comment-155" class="d-flex flex-fill comment-body">
                                            <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                                <img alt=''
                                                     src='https://secure.gravatar.com/avatar/7ff98cf6c2b30511f49648962a64ce7c?s=50&amp;d=mm&amp;r=g'
                                                     srcset='https://secure.gravatar.com/avatar/7ff98cf6c2b30511f49648962a64ce7c?s=100&amp;d=mm&amp;r=g 2x'
                                                     class='avatar avatar-50 photo' height='50' width='50'/></div>
                                            <!-- .comment-author -->
                                            <div class="flex-fill flex-column comment-text">
                                                <div class="d-flex align-items-center comment-info mb-2">
                                                    <h6 class="comment-author">
                                                        <a href='http://www.limingliang.net' rel='external nofollow'
                                                           class='url'>明亮</a></h6>
                                                    <div class="flex-fill"></div>
                                                    <div class="pl-3">
                                                        <time class="comment-date text-muted font-12">2018-12-31</time>
                                                    </div>
                                                </div>
                                                <div class="comment-content">
                                                    <p><a href="#comment-145">@11</a>&nbsp;22</p>
                                                </div><!-- .comment-content -->
                                                <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                                    <div class="action mr-3">
                                                        <a href="javascript:;" data-id="155" data-caction="up"
                                                           data-action="comment_up_down"
                                                           class="mr-3 text-secondary like comment-action "><i
                                                                    class="icon icon-like" aria-hidden="true"> 1</i></a>

                                                        <a href="javascript:;" data-id="155" data-caction="down"
                                                           data-action="comment_up_down"
                                                           class="text-secondary fuck comment-action "><i
                                                                    class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                                    </div>
                                                    <div class="flex-fill"></div>
                                                    <div class="reply">
                                                        <a onclick="return addComment.moveForm( 'comment-155','155', 'respond','1941' ) "
                                                           href="1941-replytocom=155.html#respond"
                                                           class="text-secondary comment-reply-link" rel="nofollow"><i
                                                                    class="fal fa-repeat"></i> 回复</a>
                                                    </div>
                                                </div>

                                            </div><!-- .comment-text -->
                                        </article><!-- .comment-body --></li>
                                </ul><!-- .children -->
                            </li>
                            <li id="comment-53" class="comment odd alt thread-odd thread-alt depth-1">
                                <article id="div-comment-53" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/32c254387607b7255a6d675009e15521?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/32c254387607b7255a6d675009e15521?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                池风 </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2017-12-30</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>主题蛮好，期待使用。</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="53" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 1</i></a>

                                                <a href="javascript:;" data-id="53" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 2</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-53','53', 'respond','1941' ) "
                                                   href="1941-replytocom=53.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-54" class="comment even thread-even depth-1">
                                <article id="div-comment-54" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/a4f83c9094bcb014c4d3db146eec0b0e?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/a4f83c9094bcb014c4d3db146eec0b0e?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                苏醒 </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-01-01</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>这波稳！</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="54" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 2</i></a>

                                                <a href="javascript:;" data-id="54" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 2</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-54','54', 'respond','1941' ) "
                                                   href="1941-replytocom=54.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-55" class="comment odd alt thread-odd thread-alt depth-1">
                                <article id="div-comment-55" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/ca19c9e504c3b23449756ab1be1508a9?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/ca19c9e504c3b23449756ab1be1508a9?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                <a href='https://www.zunyipub.com' rel='external nofollow' class='url'>BiuBiuBiu</a>
                                            </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-01-04</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>我是评论 <img
                                                        src="https://cdn.v2ex.com/gravatar/8d22e9a2693c372daf5eafeb8ac61cc1?d=http%3A%2F%2Fcosy.iwpzt.com%2Fwp-content%2Fuploads%2F2017%2F11%2Flogo-120.jpg"
                                                        alt="图片描述"/></p>
                                            <pre>
Code
</pre>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="55" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 1</i></a>

                                                <a href="javascript:;" data-id="55" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 1</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-55','55', 'respond','1941' ) "
                                                   href="1941-replytocom=55.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body -->
                                <ul class="children">
                                    <li id="comment-66" class="comment even depth-2">
                                        <article id="div-comment-66" class="d-flex flex-fill comment-body">
                                            <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                                <img alt=''
                                                     src='https://secure.gravatar.com/avatar/712a961dd1a6f51cff9b94e81b300d00?s=50&amp;d=mm&amp;r=g'
                                                     srcset='https://secure.gravatar.com/avatar/712a961dd1a6f51cff9b94e81b300d00?s=100&amp;d=mm&amp;r=g 2x'
                                                     class='avatar avatar-50 photo' height='50' width='50'/></div>
                                            <!-- .comment-author -->
                                            <div class="flex-fill flex-column comment-text">
                                                <div class="d-flex align-items-center comment-info mb-2">
                                                    <h6 class="comment-author">
                                                        1212 </h6>
                                                    <div class="flex-fill"></div>
                                                    <div class="pl-3">
                                                        <time class="comment-date text-muted font-12">2018-03-11</time>
                                                    </div>
                                                </div>
                                                <div class="comment-content">
                                                    <p><a href="#comment-55">@BiuBiuBiu</a>&nbsp;12121212</p>
                                                </div><!-- .comment-content -->
                                                <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                                    <div class="action mr-3">
                                                        <a href="javascript:;" data-id="66" data-caction="up"
                                                           data-action="comment_up_down"
                                                           class="mr-3 text-secondary like comment-action "><i
                                                                    class="icon icon-like" aria-hidden="true"> 1</i></a>

                                                        <a href="javascript:;" data-id="66" data-caction="down"
                                                           data-action="comment_up_down"
                                                           class="text-secondary fuck comment-action "><i
                                                                    class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                                    </div>
                                                    <div class="flex-fill"></div>
                                                    <div class="reply">
                                                        <a onclick="return addComment.moveForm( 'comment-66','66', 'respond','1941' ) "
                                                           href="1941-replytocom=66.html#respond"
                                                           class="text-secondary comment-reply-link" rel="nofollow"><i
                                                                    class="fal fa-repeat"></i> 回复</a>
                                                    </div>
                                                </div>

                                            </div><!-- .comment-text -->
                                        </article><!-- .comment-body --></li>
                                    <li id="comment-67" class="comment odd alt depth-2">
                                        <article id="div-comment-67" class="d-flex flex-fill comment-body">
                                            <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                                <img alt=''
                                                     src='https://secure.gravatar.com/avatar/12109a641428b53edf3368ea4b2e9344?s=50&amp;d=mm&amp;r=g'
                                                     srcset='https://secure.gravatar.com/avatar/12109a641428b53edf3368ea4b2e9344?s=100&amp;d=mm&amp;r=g 2x'
                                                     class='avatar avatar-50 photo' height='50' width='50'/></div>
                                            <!-- .comment-author -->
                                            <div class="flex-fill flex-column comment-text">
                                                <div class="d-flex align-items-center comment-info mb-2">
                                                    <h6 class="comment-author">
                                                        ____&#039;&#039;D </h6>
                                                    <div class="flex-fill"></div>
                                                    <div class="pl-3">
                                                        <time class="comment-date text-muted font-12">2018-03-16</time>
                                                    </div>
                                                </div>
                                                <div class="comment-content">
                                                    <p><a href="#comment-55">@BiuBiuBiu</a>&nbsp;</p>
                                                    <pre>
&lt;?php

echo '123333';

?&gt;
</pre>
                                                </div><!-- .comment-content -->
                                                <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                                    <div class="action mr-3">
                                                        <a href="javascript:;" data-id="67" data-caction="up"
                                                           data-action="comment_up_down"
                                                           class="mr-3 text-secondary like comment-action "><i
                                                                    class="icon icon-like" aria-hidden="true"> 1</i></a>

                                                        <a href="javascript:;" data-id="67" data-caction="down"
                                                           data-action="comment_up_down"
                                                           class="text-secondary fuck comment-action "><i
                                                                    class="icon icon-dislike" aria-hidden="true"> 2</i></a>
                                                    </div>
                                                    <div class="flex-fill"></div>
                                                    <div class="reply">
                                                        <a onclick="return addComment.moveForm( 'comment-67','67', 'respond','1941' ) "
                                                           href="1941-replytocom=67.html#respond"
                                                           class="text-secondary comment-reply-link" rel="nofollow"><i
                                                                    class="fal fa-repeat"></i> 回复</a>
                                                    </div>
                                                </div>

                                            </div><!-- .comment-text -->
                                        </article><!-- .comment-body --></li>
                                    <li id="comment-99" class="comment even depth-2">
                                        <article id="div-comment-99" class="d-flex flex-fill comment-body">
                                            <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                                <img alt=''
                                                     src='https://secure.gravatar.com/avatar/2706f8716269ecdca13d423a29eea24e?s=50&amp;d=mm&amp;r=g'
                                                     srcset='https://secure.gravatar.com/avatar/2706f8716269ecdca13d423a29eea24e?s=100&amp;d=mm&amp;r=g 2x'
                                                     class='avatar avatar-50 photo' height='50' width='50'/></div>
                                            <!-- .comment-author -->
                                            <div class="flex-fill flex-column comment-text">
                                                <div class="d-flex align-items-center comment-info mb-2">
                                                    <h6 class="comment-author">
                                                        激情影视 </h6>
                                                    <div class="flex-fill"></div>
                                                    <div class="pl-3">
                                                        <time class="comment-date text-muted font-12">2018-09-07</time>
                                                    </div>
                                                </div>
                                                <div class="comment-content">
                                                    <p><a href="#comment-67">@____&#039;&#039;D</a>&nbsp;前排出售最新AV</p>
                                                </div><!-- .comment-content -->
                                                <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                                    <div class="action mr-3">
                                                        <a href="javascript:;" data-id="99" data-caction="up"
                                                           data-action="comment_up_down"
                                                           class="mr-3 text-secondary like comment-action "><i
                                                                    class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                        <a href="javascript:;" data-id="99" data-caction="down"
                                                           data-action="comment_up_down"
                                                           class="text-secondary fuck comment-action "><i
                                                                    class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                                    </div>
                                                    <div class="flex-fill"></div>
                                                    <div class="reply">
                                                        <a onclick="return addComment.moveForm( 'comment-99','99', 'respond','1941' ) "
                                                           href="1941-replytocom=99.html#respond"
                                                           class="text-secondary comment-reply-link" rel="nofollow"><i
                                                                    class="fal fa-repeat"></i> 回复</a>
                                                    </div>
                                                </div>

                                            </div><!-- .comment-text -->
                                        </article><!-- .comment-body --></li>
                                    <li id="comment-106" class="comment odd alt depth-2">
                                        <article id="div-comment-106" class="d-flex flex-fill comment-body">
                                            <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                                <img alt=''
                                                     src='https://secure.gravatar.com/avatar/0a99e1faf0eb4f22e51ed2a3cc993a61?s=50&amp;d=mm&amp;r=g'
                                                     srcset='https://secure.gravatar.com/avatar/0a99e1faf0eb4f22e51ed2a3cc993a61?s=100&amp;d=mm&amp;r=g 2x'
                                                     class='avatar avatar-50 photo' height='50' width='50'/></div>
                                            <!-- .comment-author -->
                                            <div class="flex-fill flex-column comment-text">
                                                <div class="d-flex align-items-center comment-info mb-2">
                                                    <h6 class="comment-author">
                                                        卡拉 </h6>
                                                    <div class="flex-fill"></div>
                                                    <div class="pl-3">
                                                        <time class="comment-date text-muted font-12">2018-10-08</time>
                                                    </div>
                                                </div>
                                                <div class="comment-content">
                                                    <p><a href="#comment-55">@BiuBiuBiu</a>&nbsp;不错</p>
                                                </div><!-- .comment-content -->
                                                <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                                    <div class="action mr-3">
                                                        <a href="javascript:;" data-id="106" data-caction="up"
                                                           data-action="comment_up_down"
                                                           class="mr-3 text-secondary like comment-action "><i
                                                                    class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                        <a href="javascript:;" data-id="106" data-caction="down"
                                                           data-action="comment_up_down"
                                                           class="text-secondary fuck comment-action "><i
                                                                    class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                                    </div>
                                                    <div class="flex-fill"></div>
                                                    <div class="reply">
                                                        <a onclick="return addComment.moveForm( 'comment-106','106', 'respond','1941' ) "
                                                           href="1941-replytocom=106.html#respond"
                                                           class="text-secondary comment-reply-link" rel="nofollow"><i
                                                                    class="fal fa-repeat"></i> 回复</a>
                                                    </div>
                                                </div>

                                            </div><!-- .comment-text -->
                                        </article><!-- .comment-body --></li>
                                </ul><!-- .children -->
                            </li>
                            <li id="comment-56" class="comment even thread-even depth-1">
                                <article id="div-comment-56" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/12325b18108e08ae8a28aa01556caac9?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/12325b18108e08ae8a28aa01556caac9?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                <a href='https://jooger.me' rel='external nofollow'
                                                   class='url'>Jooger</a></h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-01-09</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>真的很好看</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="56" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 1</i></a>

                                                <a href="javascript:;" data-id="56" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-56','56', 'respond','1941' ) "
                                                   href="1941-replytocom=56.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-57" class="comment odd alt thread-odd thread-alt depth-1">
                                <article id="div-comment-57" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/c2ae3af03661d460ebadbb4f209642fa?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/c2ae3af03661d460ebadbb4f209642fa?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                dada </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-01-17</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>wa</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="57" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 2</i></a>

                                                <a href="javascript:;" data-id="57" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 2</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-57','57', 'respond','1941' ) "
                                                   href="1941-replytocom=57.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-58" class="comment even thread-even depth-1">
                                <article id="div-comment-58" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/c2ae3af03661d460ebadbb4f209642fa?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/c2ae3af03661d460ebadbb4f209642fa?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                dada </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-01-17</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>😳</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="58" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 2</i></a>

                                                <a href="javascript:;" data-id="58" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-58','58', 'respond','1941' ) "
                                                   href="1941-replytocom=58.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-59" class="comment odd alt thread-odd thread-alt depth-1">
                                <article id="div-comment-59" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/1ec79fd37523903fbac38b4338639402?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/1ec79fd37523903fbac38b4338639402?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                睡不醒 </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-01-17</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>haha</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="59" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="59" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-59','59', 'respond','1941' ) "
                                                   href="1941-replytocom=59.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-60" class="comment even thread-even depth-1">
                                <article id="div-comment-60" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/ea7401e0cda4915bb4c7a8d72c1fa05e?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/ea7401e0cda4915bb4c7a8d72c1fa05e?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                guji </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-01-17</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>fen</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="60" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 1</i></a>

                                                <a href="javascript:;" data-id="60" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 1</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-60','60', 'respond','1941' ) "
                                                   href="1941-replytocom=60.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-61" class="comment odd alt thread-odd thread-alt depth-1">
                                <article id="div-comment-61" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/ea7401e0cda4915bb4c7a8d72c1fa05e?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/ea7401e0cda4915bb4c7a8d72c1fa05e?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                dasun </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-01-17</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>fenye</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="61" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="61" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-61','61', 'respond','1941' ) "
                                                   href="1941-replytocom=61.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-62" class="comment even thread-even depth-1">
                                <article id="div-comment-62" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/ea7401e0cda4915bb4c7a8d72c1fa05e?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/ea7401e0cda4915bb4c7a8d72c1fa05e?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                dasun </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-01-17</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>123</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="62" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 1</i></a>

                                                <a href="javascript:;" data-id="62" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-62','62', 'respond','1941' ) "
                                                   href="1941-replytocom=62.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-63" class="comment odd alt thread-odd thread-alt depth-1">
                                <article id="div-comment-63" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/ea7401e0cda4915bb4c7a8d72c1fa05e?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/ea7401e0cda4915bb4c7a8d72c1fa05e?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                dasun </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-01-17</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                <pre>
Code
</pre>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="63" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="63" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-63','63', 'respond','1941' ) "
                                                   href="1941-replytocom=63.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-64" class="comment even thread-even depth-1">
                                <article id="div-comment-64" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/e033383e4f019975616c1066ca09d5d2?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/e033383e4f019975616c1066ca09d5d2?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                嬡沵壹泩壹迣 </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-01-17</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                <pre>
Code
</pre>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="64" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="64" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-64','64', 'respond','1941' ) "
                                                   href="1941-replytocom=64.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-65" class="comment odd alt thread-odd thread-alt depth-1">
                                <article id="div-comment-65" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/818340520c2df943e8702b581867be72?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/818340520c2df943e8702b581867be72?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                核心 </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-02-13</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>测试评论</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="65" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="65" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-65','65', 'respond','1941' ) "
                                                   href="1941-replytocom=65.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-68" class="comment even thread-even depth-1">
                                <article id="div-comment-68" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/6a8bdb113060dcaee867ef07019c71f9?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/6a8bdb113060dcaee867ef07019c71f9?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                Gootor@爱屁屁 &amp; 犀牛 ASO 优化 </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-03-29</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>151155115515</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="68" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="68" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-68','68', 'respond','1941' ) "
                                                   href="1941-replytocom=68.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-69" class="comment odd alt thread-odd thread-alt depth-1">
                                <article id="div-comment-69" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/ae7ca360ea62415b1280147695946d05?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/ae7ca360ea62415b1280147695946d05?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                魏先森。 </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-03-31</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>非常喜欢</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="69" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="69" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-69','69', 'respond','1941' ) "
                                                   href="1941-replytocom=69.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-70" class="comment even thread-even depth-1">
                                <article id="div-comment-70" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/e6c428e427925a711a7994ea8f6f9e7c?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/e6c428e427925a711a7994ea8f6f9e7c?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                一只(〃)的喵呜酱 </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-04-11</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>不错</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="70" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="70" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-70','70', 'respond','1941' ) "
                                                   href="1941-replytocom=70.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-71" class="comment odd alt thread-odd thread-alt depth-1">
                                <article id="div-comment-71" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/6f96a1d05eb8c5dd8145d217127f0cb1?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/6f96a1d05eb8c5dd8145d217127f0cb1?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                在路上 </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-04-18</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>1111111</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="71" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="71" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-71','71', 'respond','1941' ) "
                                                   href="1941-replytocom=71.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-72" class="comment even thread-even depth-1">
                                <article id="div-comment-72" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/779e6b7c72714b19d61bc2cd57807baf?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/779e6b7c72714b19d61bc2cd57807baf?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                嘿嘿嘿 </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-05-06</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>好看</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="72" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 1</i></a>

                                                <a href="javascript:;" data-id="72" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 1</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-72','72', 'respond','1941' ) "
                                                   href="1941-replytocom=72.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-73" class="comment odd alt thread-odd thread-alt depth-1">
                                <article id="div-comment-73" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/35de170fc7836ea645e1a7d7b307ff6e?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/35de170fc7836ea645e1a7d7b307ff6e?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                gond </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-05-31</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>主题好看！</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="73" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="73" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-73','73', 'respond','1941' ) "
                                                   href="1941-replytocom=73.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-74" class="comment even thread-even depth-1">
                                <article id="div-comment-74" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/35de170fc7836ea645e1a7d7b307ff6e?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/35de170fc7836ea645e1a7d7b307ff6e?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                腾讯视频 </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-06-08</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>adasd</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="74" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 1</i></a>

                                                <a href="javascript:;" data-id="74" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-74','74', 'respond','1941' ) "
                                                   href="1941-replytocom=74.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-75" class="comment odd alt thread-odd thread-alt depth-1">
                                <article id="div-comment-75" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/a4f83c9094bcb014c4d3db146eec0b0e?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/a4f83c9094bcb014c4d3db146eec0b0e?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                苏醒 </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-06-21</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>fukc</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="75" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="75" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-75','75', 'respond','1941' ) "
                                                   href="1941-replytocom=75.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-101" class="comment even thread-even depth-1">
                                <article id="div-comment-101" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/7963486e421523fbacbe7cac14680318?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/7963486e421523fbacbe7cac14680318?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                <a href='https://www.kalel.cn' rel='external nofollow'
                                                   class='url'>神勇小钢炮</a></h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-09-28</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>不错，好看~好看~</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="101" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="101" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-101','101', 'respond','1941' ) "
                                                   href="1941-replytocom=101.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-122" class="comment odd alt thread-odd thread-alt depth-1">
                                <article id="div-comment-122" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/952a7c553620ff0f5f6c7d286b366118?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/952a7c553620ff0f5f6c7d286b366118?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                <a href='http://www.baidu.com/' rel='external nofollow'
                                                   class='url'>1</a></h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-11-03</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>1111</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="122" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="122" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-122','122', 'respond','1941' ) "
                                                   href="1941-replytocom=122.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-134" class="comment even thread-even depth-1">
                                <article id="div-comment-134" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/efc5eae28f466d155bc662289a63c7be?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/efc5eae28f466d155bc662289a63c7be?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                <a href='http://fdfdfd' rel='external nofollow' class='url'>safdsf</a>
                                            </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-11-23</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                <pre>
Code
</pre>
                                            <pre>
Code
</pre>
                                            <pre>
Code
</pre>
                                            <pre>
Code
</pre>
                                            <pre>
Code
</pre>
                                            <pre>
Code
</pre>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="134" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="134" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-134','134', 'respond','1941' ) "
                                                   href="1941-replytocom=134.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-144" class="comment odd alt thread-odd thread-alt depth-1">
                                <article id="div-comment-144" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/43dc29a64fe0878f7f2eba7d837e8d84?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/43dc29a64fe0878f7f2eba7d837e8d84?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                dd </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-11-30</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>$(document).ready(function(){<br/>
                                                $(&quot;p&quot;).click(function(){<br/>
                                                $(this).hide();<br/>
                                                });<br/>
                                                });<br/>
                                                &lt;/script&gt;</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="144" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="144" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-144','144', 'respond','1941' ) "
                                                   href="1941-replytocom=144.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-147" class="comment even thread-even depth-1">
                                <article id="div-comment-147" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/fb85ebec4d8b5d2a7d513c645cb53bdc?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/fb85ebec4d8b5d2a7d513c645cb53bdc?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                suxingniubi </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2018-12-04</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>这个主题真是厉害啊</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="147" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="147" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-147','147', 'respond','1941' ) "
                                                   href="1941-replytocom=147.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                            <li id="comment-163" class="comment odd alt thread-odd thread-alt depth-1">
                                <article id="div-comment-163" class="d-flex flex-fill comment-body">
                                    <div class="d-flex flex-shrink-0 mr-3 comment-avatar-author vcard">
                                        <img alt=''
                                             src='https://secure.gravatar.com/avatar/ca19c9e504c3b23449756ab1be1508a9?s=50&amp;d=mm&amp;r=g'
                                             srcset='https://secure.gravatar.com/avatar/ca19c9e504c3b23449756ab1be1508a9?s=100&amp;d=mm&amp;r=g 2x'
                                             class='avatar avatar-50 photo' height='50' width='50'/></div>
                                    <!-- .comment-author -->
                                    <div class="flex-fill flex-column comment-text">
                                        <div class="d-flex align-items-center comment-info mb-2">
                                            <h6 class="comment-author">
                                                <a href='https://www.linguang.me' rel='external nofollow' class='url'>刘晨晨</a>
                                            </h6>
                                            <div class="flex-fill"></div>
                                            <div class="pl-3">
                                                <time class="comment-date text-muted font-12">2019-01-17</time>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>这个主题最大的成功就是生成海报功能</p>
                                        </div><!-- .comment-content -->
                                        <div class="comment-meta d-flex font-12 align-items-center flex-row light-10 mt-3">
                                            <div class="action mr-3">
                                                <a href="javascript:;" data-id="163" data-caction="up"
                                                   data-action="comment_up_down"
                                                   class="mr-3 text-secondary like comment-action "><i
                                                            class="icon icon-like" aria-hidden="true"> 0</i></a>

                                                <a href="javascript:;" data-id="163" data-caction="down"
                                                   data-action="comment_up_down"
                                                   class="text-secondary fuck comment-action "><i
                                                            class="icon icon-dislike" aria-hidden="true"> 0</i></a>
                                            </div>
                                            <div class="flex-fill"></div>
                                            <div class="reply">
                                                <a onclick="return addComment.moveForm( 'comment-163','163', 'respond','1941' ) "
                                                   href="1941-replytocom=163.html#respond"
                                                   class="text-secondary comment-reply-link" rel="nofollow"><i
                                                            class="fal fa-repeat"></i> 回复</a>
                                            </div>
                                        </div>

                                    </div><!-- .comment-text -->
                                </article><!-- .comment-body --></li>
                        </ul>


                    </div>
                </main>

                <aside class="nice-sidebar col-12 col-md-4 d-none d-md-block">
                    <div id="search-2" class="widget widget_search">
                        <form role="search" method="get" id="searchform" class="searchform" action="index.html">
                            <div>
                                <label class="screen-reader-text" for="s">搜索：</label>
                                <input type="text" value="" name="s" id="s"/>
                                <input type="submit" id="searchsubmit" value="搜索"/>
                            </div>
                        </form>
                    </div>
                    <div class="widget widget_top_entries">
                        <h3 class="widget-title">聚合文章</h3>
                        <ul class="styel02">
                            <li class="item">
                                <a href="1849.html" class="custom-hover d-flex" target="_blank"
                                   title="纪梵希在四个城市贴海报，“你见过这只猫吗？”">
                                    <div class="content">
                                        <div class="title">
                                            <h4 class="font-16 font-md-14 weight-600 text-l2">
                                                纪梵希在四个城市贴海报，“你见过这只猫吗？”</h4>
                                        </div>
                                        <div class="meta font-md-10 text-light">
                                            2017-10-01
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png"
                                             class="lazyload custom-hover-img timthumb_php"
                                             data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2018-08-2018081116385576.jpg&amp;h=140&amp;w=325&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg"
                                             alt="纪梵希在四个城市贴海报，“你见过这只猫吗？”" title="纪梵希在四个城市贴海报，“你见过这只猫吗？”">

                                    </div>
                                </a>
                            </li>

                            <li class="item">
                                <a href="1722.html" class="custom-hover d-flex" target="_blank"
                                   title="突然想活成一束光——拆拆手机摄影小妙招">
                                    <div class="content">
                                        <div class="title">
                                            <h4 class="font-16 font-md-14 weight-600 text-l2">突然想活成一束光——拆拆手机摄影小妙招</h4>
                                        </div>
                                        <div class="meta font-md-10 text-light">
                                            2017-09-27
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png"
                                             class="lazyload custom-hover-img timthumb_php"
                                             data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092517114518.jpeg&amp;h=140&amp;w=325&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg"
                                             alt="突然想活成一束光——拆拆手机摄影小妙招" title="突然想活成一束光——拆拆手机摄影小妙招">

                                    </div>
                                </a>
                            </li>

                            <li class="item">
                                <a href="1594.html" class="custom-hover d-flex" target="_blank"
                                   title="耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏">
                                    <div class="content">
                                        <div class="title">
                                            <h4 class="font-16 font-md-14 weight-600 text-l2">
                                                耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏</h4>
                                        </div>
                                        <div class="meta font-md-10 text-light">
                                            2017-09-29
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png"
                                             class="lazyload custom-hover-img timthumb_php"
                                             data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-bigger-5b927f1b65d4a.jpg&amp;h=140&amp;w=325&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg"
                                             alt="耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏" title="耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏">

                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_top_entries">
                        <h3 class="widget-title">聚合文章</h3>
                        <ul class="styel01">
                            <li class="item">
                                <a href="3546.html" class="custom-hover d-flex" target="_blank"
                                   title="17天女生独行，如何用4000元横跨南北三省四个城市？">
                                    <div class="content">
                                        <div class="title">
                                            <h4 class="font-16 font-md-14 weight-600 text-l2">
                                                17天女生独行，如何用4000元横跨南北三省四个城市？</h4>
                                        </div>
                                        <div class="meta font-md-10 text-light">
                                            2018-09-22
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png"
                                             class="lazyload custom-hover-img timthumb_php"
                                             data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092214591613-e1537980861650.jpeg&amp;h=90&amp;w=120&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg"
                                             alt="17天女生独行，如何用4000元横跨南北三省四个城市？" title="17天女生独行，如何用4000元横跨南北三省四个城市？">

                                    </div>
                                </a>
                            </li>

                            <li class="item">
                                <a href="2607.html" class="custom-hover d-flex" target="_blank" title="五星推荐超强科幻佳片《怀旧者》">
                                    <div class="content">
                                        <div class="title">
                                            <h4 class="font-16 font-md-14 weight-600 text-l2">五星推荐超强科幻佳片《怀旧者》</h4>
                                        </div>
                                        <div class="meta font-md-10 text-light">
                                            2017-10-03
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png"
                                             class="lazyload custom-hover-img timthumb_php"
                                             data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2018-08-2018081116391818-e1533978162780.jpg&amp;h=90&amp;w=120&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg"
                                             alt="五星推荐超强科幻佳片《怀旧者》" title="五星推荐超强科幻佳片《怀旧者》">

                                    </div>
                                </a>
                            </li>

                            <li class="item">
                                <a href="1849.html" class="custom-hover d-flex" target="_blank"
                                   title="纪梵希在四个城市贴海报，“你见过这只猫吗？”">
                                    <div class="content">
                                        <div class="title">
                                            <h4 class="font-16 font-md-14 weight-600 text-l2">
                                                纪梵希在四个城市贴海报，“你见过这只猫吗？”</h4>
                                        </div>
                                        <div class="meta font-md-10 text-light">
                                            2017-10-01
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="wp-content/themes/Cosy-2.1.0/static/images/ajax.png"
                                             class="lazyload custom-hover-img timthumb_php"
                                             data-src="wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2018-08-2018081116385576.jpg&amp;h=90&amp;w=120&amp;zc=1&amp;a=c&amp;q=100&amp;s=1.jpeg"
                                             alt="纪梵希在四个城市贴海报，“你见过这只猫吗？”" title="纪梵希在四个城市贴海报，“你见过这只猫吗？”">

                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="media_image-2" class="widget widget_media_image"><a href="https://www.nicetheme.cn/"><img
                                    width="600" height="450"
                                    src="wp-content/uploads/sites/11/2018/09/2018092701521548.png"
                                    class="image wp-image-3652  attachment-full size-full" alt=""
                                    style="max-width: 100%; height: auto;"/></a></div>
                    <div id="recent-posts-4" class="widget widget_related_posts">
                        <h3 class="widget-title">相关文章</h3>
                        <ul class="row row-10">
                            <li class="item col-12 col-sm-12 col-md-12 col-lg-6">
                                <a class="custom-hover d-block" href="3546.html" target="_blank"
                                   title="17天女生独行，如何用4000元横跨南北三省四个城市？">
                                    <div class="image custom-hover-img"
                                         style="background-image: url('wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092214591613-e1537980861650.jpeg&h=300&w=300&zc=1&a=c&q=100&s=1.jpeg')"></div>
                                    <div class="d-flex align-items-center justify-content-center  content text-center p-md-2 p-lg-3">
                                        <h4 class="title font-14 color-white text-l3">17天女生独行，如何用4000元横跨南北三省四个城市？</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="item col-12 col-sm-12 col-md-12 col-lg-6">
                                <a class="custom-hover d-block" href="1944.html" target="_blank"
                                   title="在别人看不到的角落努力，在看得见的原野绽放光芒">
                                    <div class="image custom-hover-img"
                                         style="background-image: url('wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092212393345.jpeg&h=300&w=300&zc=1&a=c&q=100&s=1.jpeg')"></div>
                                    <div class="d-flex align-items-center justify-content-center  content text-center p-md-2 p-lg-3">
                                        <h4 class="title font-14 color-white text-l3">在别人看不到的角落努力，在看得见的原野绽放光芒</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="item col-12 col-sm-12 col-md-12 col-lg-6">
                                <a class="custom-hover d-block" href="1594.html" target="_blank"
                                   title="耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏">
                                    <div class="image custom-hover-img"
                                         style="background-image: url('wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-bigger-5b927f1b65d4a.jpg&h=300&w=300&zc=1&a=c&q=100&s=1.jpeg')"></div>
                                    <div class="d-flex align-items-center justify-content-center  content text-center p-md-2 p-lg-3">
                                        <h4 class="title font-14 color-white text-l3">耶鲁大学的这场音乐会，邀请听众用手机和他们一起演奏</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="item col-12 col-sm-12 col-md-12 col-lg-6">
                                <a class="custom-hover d-block" href="1873.html" target="_blank"
                                   title="2014，我是一名大一新生；2018，我是一名旅行摄影师">
                                    <div class="image custom-hover-img"
                                         style="background-image: url('wp-content/themes/Cosy-2.1.0/timthumb.php-src=https---demo.nicetheme.xyz-cosy-style1-wp-content-uploads-sites-11-2017-09-2018092216535846-e1537606449598.jpeg&h=300&w=300&zc=1&a=c&q=100&s=1.jpeg')"></div>
                                    <div class="d-flex align-items-center justify-content-center  content text-center p-md-2 p-lg-3">
                                        <h4 class="title font-14 color-white text-l3">2014，我是一名大一新生；2018，我是一名旅行摄影师</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>

            </div>
        </div>
    </section>

    @include('components.article.article_footer', ['article' => $article])

@endsection