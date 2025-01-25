  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Albergo Di Lusso</title>
  </head>
  <body>
    <nav>
      <div class="nav__bar">
        <div class="nav__header">
          <div class="logo nav__logo">
            <div class="ADL"><img src="{{ asset('Images/appd.png') }}" alt="Logo"></div>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
          </div>
        </div>
      
        <ul class="nav__links" id="nav-links">
          <li><a href="#room">Room</a></li>
          <li><a href="#feature">Feature</a></li>
          <form method="get"action="{{ route('login')}}">
            @csrf
          <button><a action="{{ route('login')}}">Login</a></button><form>
        </ul>
      </div>
    </nav>

    <header class="header" id="home">
      <div class="section__container header__container">
        <p class="section__subheader">ABOUT US</p>
        <h1>The Perfect<br />Place to Relax</h1>
        <li><a href="#about">Take A Tour</a></li>
      </div>
    </header>

    <section class="booking">
      <div class="section__container booking__container">
        <form action="/">
          <div class="input__group">
            <label for="arrival">Arrival Date</label>
            <input type="date" id="arrivalDate" placeholder="Your Arrival Date" />
          </div>
          <div class="input__group">
            <label for="departure">Departure Date</label>
            <input type="date" id="departureDate" placeholder="Your Departure Date" />
          </div>
          <div class="input__group">
            <label for="guests">Guests</label>
            <input type="number" id="guests" placeholder="No Of Guests" min="1" />
          </div>
          <button type="button" onclick="checkAvailability()">Check Availability</button>
        </form>
      </div>
    </section>

    <section class="about" id="about">
      <div class="section__container about__container">
        <div class="about__grid">
          <div class="about__image">
            <img src="{{ asset('Images/pov.jpg') }}" alt="about" />
          </div>
          <div class="about__card">
            <span><i class="ri-user-line"></i></span>
            <h4>Strong Team</h4>
            <p>
              Unlocking Hospitality Excellence And Ensures Your Perfect Stay
            </p>
          </div>
          <div class="about__image">
            <img src="{{ asset('Images/prev.jpg') }}" alt="about" />
          </div>
          <div class="about__card">
            <span><i class="ri-calendar-check-line"></i></span>
            <h4>Luxury Room</h4>
            <p>Experience Unrivaled Luxury at Our Exquisite Luxury Rooms</p>
          </div>
        </div>
        <div class="about__content">
          <p class="section__subheader">ABOUT US</p>
          <h2 class="section__header">Discover Our Underground</h2>
          <p class="section__description">
            Welcome to a hidden realm of extraordinary accommodations where
            luxury, comfort, and adventure converge. Our underground hotels
            offer an unparalleled escape from the ordinary, inviting you to
            explore a subterranean world of wonders.
          </p>
        </div>
      </div>
    </section>

    <section class="room__container" id="room">
      <p class="section__subheader">ROOMS</p>
      <h2 class="section__header">Hand Picked Rooms</h2>
      <div class="room__grid">
        <div class="room__card">
          <img src="{{ asset('Images/bomboa.png') }}" alt="room" />
          <div class="room__card__details">
            <div class="room__summary">
              <h4>Deluxe Suite</h4>
            </div>
            <div class="room__more-details">
              <p>Well-appointed rooms designed for guests who desire a more.</p>
              <h3>$399<span>/night</span></h3>
            </div>
          </div>
        </div>
        <div class="room__card">
          <img src="{{ asset('Images/bombo.jpg') }}" alt="room" />
          <div class="room__card__details">
            <div class="room__summary">
              <h4>Family Suite</h4>
            </div>
            <div class="room__more-details">
              <p>Consist of multiple rooms and a common living area.</p>
              <h3>$599<span>/night</span></h3>
            </div>
          </div>
        </div>
        <div class="room__card">
          <img src="{{ asset('Images/hotelinterior.png') }}" alt="room" />
          <div class="room__card__details">
            <div class="room__summary">
              <h4>Luxury Penthouse</h4>
            </div>
            <div class="room__more-details">
              <p>Top-tier accommodations usually on the highest floors of a hotel.</p>
              <h3>$799<span>/night</span></h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="intro">
      <div class="section__container intro__container">
        <div class="intro__cotent">
          <h2 class="section__header">Meet With Our Luxury Place</h2>
          <p class="section__description">
            Whether you're seeking a cozy and exclusive hideaway or an immersive
            journey beneath the surface, ADL promises to be an
            unforgettable stay, where the depths of comfort and excitement await
            your arrival.
          </p>
          <form method="get"action="{{ route('secondPage')}}">
          <button class="btn" action="{{ route('secondPage')}}" >Book Now</button>
          @csrf
</form>
        </div>
        <div class="intro__video">
          <img src="{{ asset('Images/hahahaha.png') }}" alt="intro video">
        </div>
      </div>
    </section>

    <section class="section__container feature__container" id="feature">
      <p class="section__subheader">FACILITIES</p>
      <h2 class="section__header">Core Features</h2>
      <div class="feature__grid">
        <div class="feature__card">
          <span><i class="ri-thumb-up-line"></i></span>
          <h4>Have High Rating</h4>
          <p>
            We take pride in curating a selection of hotels that consistently
            receive high ratings and positive reviews.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-time-line"></i></span>
          <h4>Quiet Hours</h4>
          <p>
            We understand that peace and uninterrupted rest are essential for a
            rejuvenating experience.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-map-pin-line"></i></span>
          <h4>Best Location</h4>
          <p>
            At our hotel booking website, we take pride in offering
            accommodations in the most prime and sought-after locations.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-close-circle-line"></i></span>
          <h4>Free Cancellation</h4>
          <p>
            We understand that travel plans can change unexpectedly, which is
            why we offer the flexibility of free cancellation.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-wallet-line"></i></span>
          <h4>Payment Options</h4>
          <p>
            Our hotel booking website offers a range of convenient payment
            options to suit your preferences.
          </p>
        </div>
        <div class="feature__card">
          <span><i class="ri-coupon-line"></i></span>
          <h4>Special Offers</h4>
          <p>
            Whether you're planning a romantic getaway, or a business trip, our
            carefully curated special offers cater to all your needs.
          </p>
        </div>
      </div>
      </section>
</body>
</html>