<div class="item-card d-flex col-12 col-sm-6 col-md-3 col-lg-3">
    <article class="card flex-fill mb-4 mb-sm-4-2 mb-md-4 mb-lg-4-2">
        <div class="image">
            <a class="" href="{{route('gifts.show', $gift->id)}}" title="{{$gift->title}}">
                <div class="custom-hover d-block">
                    <img src="{{$gift->pict_url}}"
                         class="lazyload custom-hover-img timthumb_php"
                         title="{{$gift->title}}">
                </div>
            </a>
        </div>
        <div class="card-body d-flex flex-column content mt-1 mt-md-2">

            <div class="meta mt-2 light-12 ">
                                        <span class="u-cat-name font-12 d-block u-cat-dot u-color-red"><a
                                                    class="text-primary" href="category/shangye.html">{{$gift->nick}}</a></span>
            </div>
            <div class="title flex-grow-1 mt-2"><h2
                        class="font-16 font-md-14 font-xs-16 text-l2 font-weight-normal light-14">
                    <a href="{{route('gifts.show', $gift->id)}}" title="{{$gift->title}}">{{$gift->title}}</a>
                </h2></div>

            <div class="data nodots d-flex align-items-center flex-row font-12 font-md-10 text-muted mt-2 mt-lg-3 light-12 d-flex d-lg-flex">
                <div class="flex-fill d-flex ">
                    <a href="{{route('gifts.show', $gift->id)}}" class="u-time" style="font-size: 0.8rem;color: red;border:1px dashed red;padding: 5px;border-radius:5px;">{{'券'.round($gift->coupon_info_money, 0).'元'}}</a>
                </div>
                <div class="text-nowrap">

                    {{--<span class="u-comment d-none d-lg-inline-block"><i--}}
                                {{--class="fal fa-comment-alt-lines"></i>  22</span>--}}

                    {{--<span class="u-like d-inline-block d-lg-none d-lg-inline-block"><i--}}
                                {{--class="fal fa-heart"></i> 33</span>--}}

                    <span class="u-comment d-inline-block d-lg-none d-lg-inline-block" style="font-size: 1rem;color: red;"> {{'¥'.round($gift->quanhou_jiage, 1).'元'}}</span>

                    <span class="u-like d-none d-lg-inline-block" style="text-decoration:line-through;margin-left: 2px;">  {{round($gift->size, 1).'元'}}</span>
                </div>
            </div>

        </div>
    </article>
</div>