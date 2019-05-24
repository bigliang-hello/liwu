@extends('layouts.app')

@section('content')
    <section class="nice-featured nice-featured-style02 mt-0 mt-md-4 mt-lg-4-2"
             style="background-image:url('wp-content/uploads/sites/11/2018/09/2018092212075911.jpeg'); height: 670px;">
        <a href="#">推荐文章</a>
    </section>
    <div class="container mt-4">
        <div class="cms-push-liststyle02">
            <div class="row row-10 row-xs-15">
                @each('components.article.article', $articles, 'article')
            </div>
        </div>

    </div>

@endsection