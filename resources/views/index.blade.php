@extends('layouts.app')

@section('content')

    @include('common.article_header', ['articles' => $articles->take(5)])

    <section class="nice-cms-list my-0 my-md-4 py-3 py-md-0">
        <div class="container">
            <div class="row row-10 row-xs-15 flex-nowrap flex-md-wrap">
                @each('components.category.category', $categories, 'category')
            </div>
        </div>
    </section>

    <section class="nice-cms-push position-relative pt-4 pt-lg-5 pb-4 pb-md-4 pb-lg-5">
        <div class="white-gradient"></div>
        <div class="container">
            <div class="cms-push-liststyle02">
                @include('common.more', ['title' => '推荐文章', 'href' => '#'])
                <div class="row row-10 row-xs-15">
                    @each('components.article.article', $articles, 'article')
                </div>
            </div>

        </div>
    </section>

    <section class="nice-cms-push position-relative pt-4 pt-lg-5 pb-4 pb-md-4 pb-lg-5">
        <div class="white-gradient"></div>
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