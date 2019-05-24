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
                            <span class="u-avatar mr-1 mr-md-2">
                                <a href="author/suxing.html" target="_blank">
                                    <img alt='' src='{{$article->user->avatar}}' class='avatar avatar-33 photo' height='33' width='33'/>
                                </a>
                            </span>
                            <span class="u-name">
                                <a class="d-block font-14 font-xs-12" href="author/suxing.html" rel="category tag" target="_blank">{{$article->user->nickname}}</a>
                            </span>
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
                        <h3 class="widget-title">推荐文章</h3>
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
                </aside>

            </div>
        </div>
    </section>

    @include('components.article.article_footer', ['article' => $article])

@endsection