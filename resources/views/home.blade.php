@extends('layouts.main')

@section('content')

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ Voyager::image(setting('site.BGHome')) }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>{{ setting('site.bigTitle') }}</h1>
                        <span class="subheading">{{ setting('site.description') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @foreach($posts as $post)
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="{{ url('post') }}/{{ $post->slug }}">
                        <h2 class="post-title">{{ $post->title }}</h2>
                        <h3 class="post-subtitle">{!! $post->body !!}</h3>
                    </a>
                    <p class="post-meta">
                        Category :
                        <a href="#!">{{ $post->category_id }}</a>
                        <br>
                        on {{ $post->created_at }}
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                @endforeach

                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
