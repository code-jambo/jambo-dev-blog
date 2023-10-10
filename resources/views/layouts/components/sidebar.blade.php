<h1 class="blog-name pt-lg-4 mb-0"><a class="no-text-decoration" href="index.html">Jambo👋 Dev Blog</a></h1>

<nav class="navbar navbar-expand-lg navbar-dark">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navigation" class="collapse navbar-collapse flex-column">
        <div class="profile-section pt-3 pt-lg-0">
            <img class="profile-image mb-3 rounded-circle mx-auto" src="{{ asset('assets/images/jambo.jpg') }}"
                alt="image">

            <div class="bio mb-3">Hi, my name is Code Jambo. Briefly introduce yourself here. You can also
                provide a link to the about page.<br><a href="">Find out more about me</a></div>
            <!--//bio-->
            <ul class="social-list list-inline py-3 mx-auto">

                <x-icolink to="/" icon="twitter" />

                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a>
                </li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
            </ul><!--//social-list-->
            <hr>
        </div><!--//profile-section-->

        <ul class="navbar-nav flex-column text-start">
            <x-nav-item options="wire:navigate" text="home" :to="route('home')" icon="home" />
            <x-nav-item options="wire:navigate" text="Categories" to="/categories" icon="bookmark" />
            <x-nav-item options="wire:navigate" text="About Me" :to="route('about')" icon="user" />
        </ul>

        <div class="my-2 my-md-3">
            <a class="btn btn-primary" href="#" target="_blank">Get in Touch</a>
        </div>
    </div>
</nav>
