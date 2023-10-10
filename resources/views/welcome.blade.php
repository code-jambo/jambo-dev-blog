@extends('layouts.app')
@section('content')
    <x-cta ctitle="Jambo 👋 Dev Blog"
        cdescription="Welcome to my blog. Subscribe and get my latest blog post in your inbox." />
    <section class="w-full">
        <h3 class="text-center pt-4 pb-0 text-primary "><u>Posts Categories</u></h3>
        <div class="row pt-0 p-2 m-5">
            @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 4] as $t)
                <div class="col-sm-3 col-md-3 col-lg-3 mb-3">
                    <div class="card text-dark card-has-bg click-col"
                        style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                        {{-- <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street"
                            alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?"> --}}
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <h4 class="card-title mt-0 "><a class="text-dark"
                                        herf="https://creativemanner.com">Laravel</a>
                                </h4>
                                <small class="card-meta mb-2 text-white">Thought Leadership and laravel is just another time
                                    wasters</small>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </section>
@endsection

<style>
    .card .card-footer {
        background: none;
        border-top: none;
    }

    .card .card-footer .media img {
        border: solid 3px rgba(255, 255, 255, 0.3);
    }

    .card .card-title {
        font-weight: 800;
    }

    .card .card-meta {
        color: rgba(0, 0, 0, 0.3);
        text-transform: uppercase;
        font-weight: 500;
        letter-spacing: 2px;
    }

    .card .card-body {
        transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
    }

    .card:hover {
        cursor: pointer;
        transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
    }

    .card:hover .card-body {
        margin-top: 30px;
        transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
    }


    .lead {
        color: #aaa;
    }

    .wrapper {
        margin: 10vh;
    }

    .card {
        border: none;
        transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
        overflow: hidden;
        border-radius: 20px;
        min-height: 250px;
        box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);
    }

    @media (max-width: 768px) {
        .card {
            min-height: 150px;
        }
    }

    @media (max-width: 420px) {
        .card {
            min-height: 100px;
        }
    }

    .card.card-has-bg {
        transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
        background-size: 120%;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .card.card-has-bg:before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: inherit;
        -webkit-filter: grayscale(1);
        -moz-filter: grayscale(100%);
        -ms-filter: grayscale(100%);
        -o-filter: grayscale(100%);
        filter: grayscale(100%);
    }

    .card.card-has-bg:hover {
        transform: scale(0.98);
        box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3);
        background-size: 130%;
        transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
    }
</style>
