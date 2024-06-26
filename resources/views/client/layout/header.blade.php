<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="{{ route('index') }}">
                    <img src="assets/images/logo/logo.png" alt="logo">
                </a>
            </div>
            <ul class="menu">
                <li>
                    <a href="{{ route('index') }}" class="active">Home</a>
                    {{-- <ul class="submenu">
                        <li>
                            <a href="index.html">Home One</a>
                        </li>
                        <li> --}}
                            {{-- <a href="#0" class="active">Home Two</a> --}}
                        {{-- </li> --}}
                    {{-- </ul> --}}
                </li>
                <li>
                    <a href="{{ route('movie-list') }}">movies</a>
                    <ul class="submenu">
                       
                        <li>
                            <a href="{{ route('movie-list') }}">Movie List</a>
                        </li>
                        
                        <li>
                            <a href="{{ route('detail') }}">Movie Details</a>
                        </li>
                        
                        <li>
                            <a href="{{ route('ticket') }}">Movie Ticket Plan</a>
                        </li>
                        <li>
                            <a href="{{ route('seat') }}">Movie Seat Plan</a>
                        </li>
                        <li>
                            <a href="{{ route('checkout') }}">Movie Checkout</a>
                        </li>
                        <li>
                            <a href="{{ route('popcorn') }}">Movie Food</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#0">events</a>
                    <ul class="submenu">
                      {{--  <li>
                            <a href="events.html">Events</a>
                        </li>
                         <li>
                            <a href="event-details.html">Event Details</a>
                        </li>
                        <li>
                            <a href="event-speaker.html">Event Speaker</a>
                        </li>
                        <li>
                            <a href="event-ticket.html">Event Ticket</a>
                        </li>
                        <li>
                            <a href="event-checkout.html">Event Checkout</a>
                        </li> --}}
                    </ul>
                </li>
                <li>
                    <a href="#0">sports</a>
                    <ul class="submenu">
                       {{--  <li>
                            <a href="sports.html">Sports</a>
                        </li>
                        <li>
                            <a href="sport-details.html">Sport Details</a>
                        </li>
                        <li>
                            <a href="sports-ticket.html">Sport Ticket</a>
                        </li>
                        <li>
                            <a href="sports-checkout.html">Sport Checkout</a>
                        </li> --}}
                    </ul>
                </li>
                <li>
                    <a href="#0">pages</a>
                    <ul class="submenu">
                        {{-- <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="apps-download.html">Apps Download</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('FormSignIn') }}">Sign In</a>
                        </li>
                        <li>
                            <a href="{{ route('FormSignUp') }}">Sign Up</a>
                        </li>
                        {{-- <li>
                            <a href="404.html">404</a>
                        </li> --}}
                    </ul>
                </li>
                <li>
                    <a href="#0">blog</a>
                    {{-- <ul class="submenu">
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a href="blog-details.html">Blog Single</a>
                        </li>
                    </ul> --}}
                </li>
                <li>
                    <a href="contact.html">contact</a>
                </li>
                <li class="header-button pr-0">
                    <a href="{{ route('FormSignIn') }}">join us</a>
                </li>
            </ul>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>

