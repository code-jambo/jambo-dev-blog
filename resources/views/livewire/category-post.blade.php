<div>
    <x-cta :image="url($category->image)" ctitle="{{ $category->title }}" :cdescription="$category->description" :action="true" />

    <section class="blog-list px-3 py-5 p-md-5">
        <x-search :pholder="'search in ' . substr($category->title, 0, 14) . '...'" />

        <div class="container single-col-max-width">
            {{-- //post item --}}




            @if (count($posts) < 1)
                <p class="text-center p-5 m-5 text-primary"> sorry no posts available for this category</p>
            @endif
            @foreach ($posts as $post)
                <x-post wire:transition :ptitle="$post->title" :pdate="$post->created_at->format('D/d M Y')" :pimage="url($post->image)" :plink="'/posts/' . $post->slug"
                    :pcontent="substr(strip_tags($post->content), 0, 200)" :category="$post->category->title" />
            @endforeach



            {{ $posts->links('components.paginate') }}



        </div>
    </section>
</div>
