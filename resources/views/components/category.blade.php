 <div class="col-sm-3 col-md-3 col-lg-3 mb-3">
     <div class="card text-dark card-has-bg click-col" style="background-image:url('{{ $image ?? '' }}');">
         {{-- <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street"
                            alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?"> --}}
         <div class="card-img-overlay d-flex flex-column">
             <div class="card-body">
                 <h4 class="card-title mt-0 "><a class="text-dark"
                         herf="{{ $slug ?? 'laravel' }}">{{ $title ?? 'laravel' }}</a>
                 </h4>
                 <small
                     class="card-meta mb-2 text-white">{{ $description ?? 'laravel is just another piece of crap' }}</small>
             </div>

         </div>
     </div>
 </div>
