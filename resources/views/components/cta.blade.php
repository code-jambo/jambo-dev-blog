<section class="cta-section theme-bg-light ">
    <div class="w-full h-full py-4">
        <div class="container text-center single-col-max-width">
            @if ($image != '')
                <img src="{{ $image }}" alt="" style="max-height: 60px; border-radius:10px;max-width:50vw;">
            @endif
            <h2 class="heading {{ $extra ?? '' }}">{{ $ctitle }}</h2>
            <div class="intro">
                {{ $cdescription }}
            </div>
            <div class="single-form-max-width pt-3 mx-auto">
                @if ($action || !isset($action))
                    <form class="signup-form row g-2 g-lg-2 align-items-center">
                        <div class="col-12 col-md-9">
                            <label class="sr-only" for="semail"> email</label>
                            <input type="email" id="semail" name="semail1" class="form-control me-md-1 semail"
                                placeholder="Enter email">
                        </div>
                        <div class="col-12 col-md-2">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>
                @endif
                <!--//signup-form-->
            </div><!--//single-form-max-width-->
        </div><!--//container-->
    </div>
</section>
