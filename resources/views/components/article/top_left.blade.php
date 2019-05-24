<div class="item">
    <a class="custom-hover d-block" href="{{route('articles.show', $article->id)}}" target="_blank"
       title="{{$article->title}}">
        <div class="custom-hover-img image"
             style="background-image: url('{{$article->cover}}');"></div>
        <div class="content p-3 p-lg-4">
            <div class="title text-l2"><h2
                        class="font-24 font-md-20 font-xs-20 color-white light-14 font-weight-normal">
                    {{$article->title}}</h2></div>
            <div class="data nodots d-none d-md-flex align-items-center flex-row font-14 font-md-12 text-light mt-3">
                <div class="flex-fill d-flex">
                    <span class="u-cat mr-2 mr-md-3">{{$article->category->name}}</span>
                </div>
                <div class="text-nowrap">
                    <span class="u-time">{{$article->created_at->format('Y-m-d')}}</span>
                    <span class="u-comment"><i class="fal fa-comment-alt-lines"></i>   {{$article->reply_count}}</span>
                    <span class="u-like"><i class="fal fa-heart"></i>   {{$article->like_count}}</span>
                </div>
            </div>
        </div>
    </a>
</div>