<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information and Booking Receipt</title>
    <link rel="stylesheet" href="{{ asset('css/perso.css') }}">
    <style>
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc;
            z-index: 1000;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        .modal.active {
            display: block;
        }
        .modal-footer {
            margin-top: 10px;
            text-align: right;
        }
    </style>
</head>
<body>

<a href="{{ route('welcome') }}" class="home-button">Home</a>
<div class="container">
    <div class="form-container">
        <form id="personalInfoForm" action="{{ route('booking.store') }}" method="POST">
            @csrf
            <input type="hidden" name="room_type" id="room_type" value="{{ $roomType ?? '' }}">
            <input type="hidden" name="room_number" id="room_number" value="{{ $roomNumber ?? '' }}">
            <input type="hidden" name="room_rate" id="room_rate" value="{{ $roomRate ?? '' }}">

            <div class="form-row">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" id="fname" name="fname" required>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" id="lname" name="lname" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" maxlength="11" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="arrivalDate">Arrival Date (Check-in):</label>
                    <input type="date" id="arrivalDate" name="arrivalDate" required>
                </div>
                <div class="form-group">
                    <label for="departureDate">Departure Date (Check-out):</label>
                    <input type="date" id="departureDate" name="departureDate" required>
                </div>
            </div>

            <div id="payment-section" class="receipt-container">
                <h3>Online Payment</h3>
                <form action="/process-payment" method="POST">
                    @csrf
                    <label for="payment-method">Select Payment Method:</label>
                    <select id="payment-method" name="payment_method">
                        <option value="visa">Visa</option>
                        <option value="gcash">GCash</option>
                        <option value="paymaya">PayMaya</option>
                    </select>
                    <button type="submit" class="payment-button">Proceed to Payment</button>
                </form>
            </div>
        </form>
    </div>

    <!-- Receipt Modal -->
    @if(session('booking'))
    <div id="receiptModal" class="receipt-container">
        <h2>Booking Receipt</h2>
        <p><strong>First Name:</strong> {{ session('booking')->first_name }}</p>
        <p><strong>Last Name:</strong> {{ session('booking')->last_name }}</p>
        <p><strong>Email:</strong> {{ session('booking')->email }}</p>
        <p><strong>Phone:</strong> {{ session('booking')->phone }}</p>
        <p><strong>Arrival Date:</strong> {{ session('booking')->arrival_date }}</p>
        <p><strong>Departure Date:</strong> {{ session('booking')->departure_date }}</p>
        <p><strong>Room Type:</strong> {{ session('booking')->room_type }}</p>
        <p><strong>Room Rate:</strong> {{ session('booking')->room_rate }}</p>
        <p><strong>Room Number:</strong> {{ session('booking')->room_number }}</p>
        <p><strong>Payment Method: </strong> {{ session('booking')->payment }}</p>
        <div class="modal-footer">
            <button onclick="window.print()">Print Receipt</button>
            <button onclick="closeModal()">Close</button>
        </div>
    </div>
    @endif
</div>
<script>
    function closeModal() {
        document.getElementById('receiptModal').classList.remove('active');
    }
    
    function loadPersonalInfoForm() {
    const savedData = localStorage.getItem('bookingData');
    const today = new Date().toISOString().split('T')[0]; // Default today's date

    if (savedData) {
      const { arrivalDate, departureDate, guests } = JSON.parse(savedData);

      document.getElementById('arrivalDate').value = arrivalDate || today;
      document.getElementById('departureDate').value = departureDate || '';
      console.log('Number of guests:', guests); // Use this data as needed
    } else {
      // Set default dates if no data in LocalStorage
      document.getElementById('arrivalDate').value = today;

      const departure = new Date();
      departure.setDate(departure.getDate() + 1); // Default departure date is tomorrow
      document.getElementById('departureDate').value = departure.toISOString().split('T')[0];
    }
  }

  // Load data on page load
  window.onload = loadPersonalInfoForm;
</script>

</body>
</html>
