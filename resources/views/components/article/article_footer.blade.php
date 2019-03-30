<section class="nice-footer-post-dock  d-flex d-lg-flex">
    <div class="container">
        <div class="dock-post-title flex-fill align-items-center d-none d-lg-flex">
            <h2>{{$article->title}}</h2>
        </div>
        <div class="dock-data text-nowrap d-flex font-theme align-items-stretch align-items-lg-center">
                        <span class="item item-view d-flex flex-column flex-lg-row">
                <b class="mb-2 mb-md-0 light-10"><i class="icon icon-eye"></i></b>
                <small class="mt-auto mt-lg-0">{{$article->view_count}}</small>
            </span>
            <span class="d-flex justify-content-center item item-comment">
                <a href="#comments" class="d-flex flex-column flex-lg-row">
                    <i class="fal fa-comment-alt-lines"></i>
                    <small class="mt-auto mt-lg-0">{{$article->reply_count}}</small>
                </a></span>
            <span class="d-flex justify-content-center item item-like">
                <a class="d-flex flex-column flex-lg-row btn-action btn-like post-like " href="javascript:;" data-action="ding" data-id="1941">
                    <i class="fal fa-heart"></i>
                    <small class="count mt-auto mt-lg-0">{{$article->like_count}}</small>
                </a>
            </span>
            <span class="d-flex justify-content-center item">
                    <a class="d-flex flex-column flex-lg-row btn-action btn-bigger-cover" data-module="miPopup" data-selector="#bigger-cover" href="javascript:;">
                        <i class="fal fa-share-alt"></i>
                        <small class="d-lg-none mt-auto mt-lg-0">Share</small>
                    </a>
                </span>
            <span class=" d-flex justify-content-center item scroll-to-top">
                <a href="#" class="d-flex flex-column flex-lg-row">
                    <i class="fal fa-arrow-circle-up"></i>
                    <small class="d-lg-none mt-auto mt-lg-0">Top</small>
                </a>
            </span>
        </div>
    </div>
</section>