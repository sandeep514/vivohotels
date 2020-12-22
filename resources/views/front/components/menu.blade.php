<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index-2.html">VIVO<span> Hotels</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('/') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('ourRooms') }}" class="nav-link">Destination</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="{{ route('contactUs') }}" class="nav-link">Contact</a></li>
                {{-- <li class="nav-item"><a href="{{ route('restaurant') }}" class="nav-link">Restaurant</a></li> --}}
                <li class="nav-item"><a href="{{ route('why.us') }}" class="nav-link">Why Us</a></li>
                <li class="nav-item"><a href="{{ route('partner.with.us') }}" class="nav-link">Partner With Us</a></li>
            </ul>
        </div>
    </div>
</nav>
