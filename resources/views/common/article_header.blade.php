<section class="nice-featured nice-featured-style02 mt-0 mt-md-4 mt-lg-4-2"
         style="background-image:url('wp-content/uploads/sites/11/2018/09/2018092212075911.jpeg');">
    <div class="container">
        <div class="row no-gutters">
            @if(count($articles) > 0)
                <div class="items items-left col-12 col-md-6">
                    @include('components.article.top_left', ['article' => $articles->first()])
                </div>
                <div class="items items-right col-12 col-md-6 mt-2 mt-md-0">
                    <div class="row no-gutters flex-nowrap flex-md-wrap">
                        @each('components.article.top_right', $articles->slice(1, count($articles)-1), 'article')
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>