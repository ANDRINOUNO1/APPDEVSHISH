<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ROOMS</title>
    <link rel="stylesheet" href="{{ asset('css/secondpage.css') }}"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
</head>
<body>
    <nav class="navbar">
       <div class="nav-content">
           
            <a href="#" class="logo">
                <img src="{{ asset('Images/appd.png') }}" alt="Van Bar Logo">
            </a>
            <h2 class="text-center">Room Availability Calendar</h2>
            <ul class="nav-links">
            <form method="get"action="{{ route('welcome')}}">
            @csrf
          <button><a action="{{ route('welcome')}}">Back</a></button><form>
            </ul>
        </div>
    </nav>
    <div class="containing">
       <div class="room__container" id="room">
      <div class="room__grid">
     <div class="slider-wrapper">
    <button class="prev" onclick="prevSlide()">&#10094;</button>
    <div class="slider">
        <div class="slides">
       <div class="room__card">
      <div class="containerleft">
     <img src="{{ asset('Images/bomboa.png') }}" alt="Deluxe Suite" />
     <div class="room__card__details">
    <div class="room__summary">
        <h4><b>Deluxe Suite</b></h4>
    </div>
    <div class="room__more-details">
        <p>Well-appointed rooms designed for guests who desire more comfort...</p>
        <h3><span>$399/night</span></h3>
        <button class="butt" value="Deluxe Suite,399">Select</button>
    </div>
     </div>  
      </div>
      <div class="containerright">
     <div class="room__list-inside">
    <h4>Available Rooms</h4>
    <button class="room-btn" data-room-number="101" data-room-type=" Deluxe Suite" value="Room 101">Room 101</button>
    <button class="room-btn" data-room-number="102" data-room-type="Deluxe Suite" value="Room 102">Room 102</button>
    <button class="room-btn" data-room-number="103" data-room-type="Deluxe Suite" value="Room 103">Room 103</button>
    <button class="room-btn" data-room-number="104" data-room-type="Deluxe Suite" value="Room 104">Room 104</button>
     </div>
      </div>  
       </div>
       <div class="room__card">
      <div class="containerleft">
     <img src="{{ asset('Images/bombo.jpg') }}" alt="Family Suite" />
     <div class="room__card__details">
    <div class="room__summary">
        <h4><b>Family Suite</b></h4>
    </div>
    <div class="room__more-details">
        <p>Consist of multiple rooms and a common living area...</p>
        <h3>$599<span>/night</span></h3>
        <button class="butt" value="Family Suite,599">Select</button>
    </div>
     </div>  
      </div>
      <div class="containerright">
     <div class="room__list-inside">
    <h4>Available Rooms</h4>
    <button class="room-btn" data-room-number="105" data-room-type="Family Suite" value="Room 105">Room 105</button>
    <button class="room-btn" data-room-number="106" data-room-type="Family Suite" value="Room 106">Room 106</button>
    <button class="room-btn" data-room-number="107" data-room-type="Family Suite" value="Room 107">Room 107</button>
    <button class="room-btn" data-room-number="108" data-room-type="Family Suite" value="Room 108">Room 108</button>
     </div>
      </div>  
       </div>
       <div class="room__card">
      <div class="containerleft">
     <img src="hotel-room-interior-modern-seaside-600nw-1387008533.png" alt="Luxury Penthouse" />
     <div class="room__card__details">
    <div class="room__summary">
        <h4><b>Luxury Penthouse</b></h4>
    </div>
    <div class="room__more-details">
        <p>Top-tier accommodations usually on the highest floors of a hotel...</p>
        <h3>$799<span>/night</span></h3>
        <button class="butt" value="Luxury Penthouse,799">Select</button>
    </div>
     </div> 
      </div>
      <div class="containerright">
     <div class="room__list-inside">
    <h4>Available Rooms</h4>
    <button class="room-btn" data-room-number="109" data-room-type="Luxury Penthouse" value="Room 109">Room 109</button>
    <button class="room-btn" data-room-number="110" data-room-type="Luxury Penthouse" value="Room 110">Room 110</button>
    <button class="room-btn" data-room-number="111" data-room-type="Luxury Penthouse" value="Room 111">Room 111</button>
    <button class="room-btn" data-room-number="112" data-room-type="Luxury Penthouse" value="Room 112">Room 112</button>
     </div>
      </div>  
       </div>
        </div>
    </div>
    <button class="next" onclick="nextSlide()">&#10095;</button>
     </div>
      </div>
       </div>

 <footer><a href="{{ route('check-in') }}" class="calendar-btn">BOOK NOW</a></footer>
</body>
</html>
