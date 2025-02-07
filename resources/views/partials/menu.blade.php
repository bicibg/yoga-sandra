<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
{{--            <img src="/path-to-logo.png" alt="Logo" width="30" height="30" class="me-2">--}}
            {{ config('app.name', 'Yoga Emmental') }}
        </a>
        @php
            $pages = \App\Models\Page::all();
        @endphp
        <!-- Toggler for mobile view -->
        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left side (Navigation links) -->
            <ul class="navbar-nav me-auto">
                @foreach($pages as $page)
                    <li class="nav-item">
                        <a
                                class="nav-link {{
                                route('pages.show', $page->slug) === url()->current() ||
                                (route('pages.home') === url()->current() && $page->id === \App\Models\Page::firstOrFail()->id)
                                ? 'active'
                                : ''
                            }}"
                                href="{{ route('pages.show', $page->slug) }}"
                        >
                            {{ $page->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
