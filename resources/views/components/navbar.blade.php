<nav>
    <div class="nav-bg">
        {{-- portoport logo --}}
        <div class="logo">
            <img src="{{ asset('images/portoport-logo.png') }}" alt="Logo">
        </div>
        {{-- dropdown menu --}}
        <div class="dropdown-menu">
            <div class="inspiration-menu">
                <p>Inspiration</p>
                <img class="arrow-down" src="{{ asset('icons/round-arrow-down.svg') }}" alt="Arrow Down Icon">
            </div>
            <div class="dropdown-menu__items">
                <ul><a href="#">Categories</a>
                    <li><a href="#animation-porto">Animation</a></li>
                    <li><a href="#ilustration-porto">Ilustration</a></li>
                    <li><a href="#mobile-porto">Mobile</a></li>
                    <li><a href="#typography-porto">Typography</a></li>
                    <li><a href="#web-porto">Web Design</a></li>
                </ul>
                <ul><a href="#">Discover</a></ul>
                <ul><a href="#">For You</a></ul>
            </div>
        </div>
        {{-- search bar --}}
        <div class="search-bar">
            <input type="text" placeholder="Search design, website, typography ...">
        </div>
        {{-- button be pro --}}
        <div class="btn btn-be-pro">
            <div class="content">
                <a href="#" id="be-pro">Be Pro</a>
                <a href="#" id="go-it">Got it!</a>
            </div>
        </div>
        {{-- button upload porto --}}
        <div class="btn btn-upload-porto">
            <a href="#">Upload Porto</a>
        </div>
        {{-- profile --}}
        <div class="profile">
            <img src="{{ asset('images/cat-profile.jpg') }}" alt="Profile Picture">
        </div>
    </div>
</nav>

<script src="{{ asset('scripts/navbar.js') }}"></script>