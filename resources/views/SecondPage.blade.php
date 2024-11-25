<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ROOMS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/secondpage.css') }}">
    <style>
        /* CSS for the slider functionality */
        .slider-wrapper {
            position: relative;
            overflow: hidden;
            width: 100%;
        }
        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .room__card {
            min-width: 100%; /* Show one card at a time */
            box-sizing: border-box;
        }
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: #333;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            z-index: 10;
        }
        .prev { left: 10px; }
        .next { right: 10px; }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-content">
            <a href="#" class="logo">
                <img src="{{ asset('images/appd.png') }}" alt="Van Bar Logo">
                <button class="btn back-button" id="transfer" value="index.html" onclick="direct()">Back</button>
            </a>
            <h1 class="header-text">Room Availability</h1>
        </div>
        
    </nav>
    <div class="container">
        <div class="room__container" id="room">
            <div class="room__grid">
                <button class="prev" onclick="prevSlide()">&#8676;</button>
                <div class="slider-wrapper">
                    
                    <div class="slider">
                        <div class="slides">
                            <div class="room__card">
                                <div class="containerleft">
                                    <img src="{{ asset('images/bomboa.png') }}" alt="Deluxe Suite"/>
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
                                    <img src="{{ asset('images/RoomCard .jpg') }}" alt="Family Suite"/>
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
                                <img src="{{ asset('images/hotelinterior.png') }}" alt="Luxury Penthouse" />
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
                </div>
                <button class="next" onclick="nextSlide()">&#8677;</button>  
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('scripts.js') }}"></script>
</body>
</html>
