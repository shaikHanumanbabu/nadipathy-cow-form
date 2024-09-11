<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-2 px-lg-4">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
        <!-- <h2 class="m-0">Nadipathy Goshala</h2> -->
        <img src="{{ URL::asset("img/logo2a.png")}}">
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link active">{{__('messages.home')}}</a>
            <a href="{{ url('about-us') }}" class="nav-item nav-link">{{__('messages.about')}}</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('messages.cows and bulls')}}</a>
                <div class="dropdown-menu bg-light m-0">
                    @forelse ($breeds as $breed)
                        <a href="{{ url("/cows/". Str::slug($breed->title)) }}" class="dropdown-item">{{ $breed->title }}</a>
                        
                    @empty
                        <a href="#" class="dropdown-item">No Breeds</a>
                    @endforelse
                    {{-- <a href="short-varieties.html" class="dropdown-item">Short Varieties</a> --}}
                </div>
            </div>
            <!--<a href="{{ url('products') }}" class="nav-item nav-link">{{__('messages.products')}}</a>-->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('messages.media')}}</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ url('press-news-info') }}" class="dropdown-item">{{__('messages.press news')}}</a>
                    <a href="{{ url('tv-news-info') }}" class="dropdown-item">{{__('messages.tv news')}}</a>
                    <a href="{{ url('social-media-info') }}" class="dropdown-item">{{__('messages.social media')}}</a>
                </div>
            </div>
            <!--<a href="{{ url('awards-rewards') }}" class="nav-item nav-link">{{__('messages.awards')}}</a>-->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('messages.memories')}}</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ url('photo-gallery') }}" class="dropdown-item">{{__('messages.photo gallery')}}</a>
                    <a href="{{ url('video-gallery') }}" class="dropdown-item">{{__('messages.video gallery')}}</a>
                </div>
            </div>
            
            <!--<a href="{{ url('blog') }}" class="nav-item nav-link">{{__('messages.blog')}}</a>-->
            <a href="{{ url('events') }}" class="nav-item nav-link">Events</a>
            <a href="{{ url('awards-rewards') }}" class="nav-item nav-link">{{__('messages.awards')}}</a>
            <a href="{{ url('contact') }}" class="nav-item nav-link">{{__('messages.contact')}}</a>
        </div>
        <!-- <div class="border-start ps-4 d-none d-lg-block">
            <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
        </div> -->
    </div>
</nav>
<!-- Navbar End -->