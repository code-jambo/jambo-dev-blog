<div>
    <article class="blog-post px-3 py-5 p-md-5">
        <div class="container single-col-max-width">
            <header class="blog-post-header">
                <h2 class="title mb-2">{{ $post->title }}</h2>
                <div class="meta mb-3"><span class="date">Published {{ $post->created_at->format('D M Y') }}</span>
                </div>
            </header>



            <div class="blog-post-body">
                <figure class="blog-banner">
                    <a href="https://made4dev.com"><img class="img-fluid" src="{{ url($post->image) }}"
                            alt="image"></a>

                </figure>

                {!! $post->content !!}


            </div>



            <nav class="blog-nav nav nav-justified my-5">
                <a class="nav-link-prev nav-item nav-link rounded-left" wire:navigate href="{{ route('home') }}">Back<i
                        class="arrow-prev fas fa-long-arrow-alt-left"></i></a>

            </nav>
            {{--
            <div class="blog-comments-section">
                <div id="disqus_thread"></div>
                <script>
                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT
                     *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR
                     *  PLATFORM OR CMS.
                     *
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT:
                     *  https://disqus.com/admin/universalcode/#configuration-variables
                     */
                    /*
                    var disqus_config = function () {
                        // Replace PAGE_URL with your page's canonical URL variable
                        this.page.url = PAGE_URL;

                        // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        this.page.identifier = PAGE_IDENTIFIER;
                    };
                    */

                    (function() { // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
                        var d = document,
                            s = d.createElement('script');

                        // IMPORTANT TODO: Replace 3wmthemes with your forum shortname!
                        s.src = 'https://3wmthemes.disqus.com/embed.js';

                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>
                    Please enable JavaScript to view the
                    <a href="https://disqus.com/?ref_noscript" rel="nofollow">
                        comments powered by Disqus.
                    </a>
                </noscript>
            </div><!--//blog-comments-section--> --}}

        </div><!--//container-->
    </article>


</div>
