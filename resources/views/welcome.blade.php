@extends('layouts.app')
@section('content')
    <x-cta ctitle="Jambo 👋 Dev Blog"
        cdescription="Welcome to my blog. Subscribe and get my latest blog post in your inbox." />

    <section class="w-full">

        <h3 class="text-center pt-4 pb-0 text-primary "><u>Posts Categories</u></h3>
        <div class="row pt-0 p-2 m-5">
            @foreach ([1, 2, 3, 4, 5] as $t)
                <div class="col-sm-6  p-2 text-center">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </section>
@endsection
