@extends('layouts.main')

@section('content')

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ Voyager::image($post->image) }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>{{ $post->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>{!! $post->body !!}</p>
                    <span class="meta">Category
                    <a href="#"></a>
                    on: {{ $post->created_at }}
                    </span>
                </div>
            </div>
        </div>
    </article>
@endsection
