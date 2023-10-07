@extends('layouts.app')
@section('content')
    <x-cta ctitle="Jambo 👋 Dev Blog"
        cdescription="Welcome to my blog. Subscribe and get my latest blog post in your inbox." />


    <section class="blog-list px-3 py-5 p-md-5">
        <div class="container single-col-max-width">
            {{-- //post item --}}

            @foreach ([1, 2, 3, 4] as $w)
                <x-post ptitle="Hello world" pcontent="welcome welcomwelcomwelcomwelcom to app" />
            @endforeach


            <nav class="blog-nav nav nav-justified my-5">
                <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i
                        class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                <a class="nav-link-next nav-item nav-link rounded" href="#">Next<i
                        class="arrow-next fas fa-long-arrow-alt-right"></i></a>
            </nav>

        </div>
    </section>
@endsection
