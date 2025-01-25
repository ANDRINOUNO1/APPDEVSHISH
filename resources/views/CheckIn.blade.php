<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <link rel="stylesheet" href="{{ asset('css/perso.css') }}">
</head>
<body>
    <a href="index.html" class="home-button">Home</a>
    <div class="form-container">
        
    <form action="{{ route('reservations.store') }}" method="POST">
    @csrf
    <input type="hidden" name="room_rate_id" value="{{ $room_rate_id }}">

    <label>Name:</label>
    <input type="text" name="customer_name" required>

    <label>Address:</label>
    <input type="text" name="customer_address" required>

    <label>Contact:</label>
    <input type="text" name="customer_contact" required>

    <label>Email:</label>
    <input type="email" name="customer_email" required>

    <label>Start Date:</label>
    <input type="date" name="start_date" required>

    <label>End Date:</label>
    <input type="date" name="end_date" required>

    <button type="submit">Reserve</button>
</form>
    </div>

    <!-- Receipt Section -->
    <div id="receipt" class="receipt-container" style="display:none;">
        <h2>Booking Receipt</h2>
        <p><strong>First Name:</strong> <span id="receiptFname"></span></p>
        <p><strong>Last Name:</strong> <span id="receiptLname"></span></p>
        <p><strong>Email:</strong> <span id="receiptEmail"></span></p>
        <p><strong>Phone:</strong> <span id="receiptPhone"></span></p>
        <p><strong>Arrival Date:</strong> <span id="receiptArrivalDate"></span></p>
        <p><strong>Departure Date:</strong> <span id="receiptDepartureDate"></span></p>
        <p><strong>Room Number:</strong> <span id="receiptRoomNumber">N/A</span></p>
        <p><strong>Room Type:</strong> <span id="receiptRoomType">N/A</span></p>
        <button onclick="window.print()">Print Receipt</button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Retrieve URL parameters
            const params = new URLSearchParams(window.location.search);
            document.getElementById('fname').textContent = params.get('fname') || 'N/A';
            document.getElementById('lname').textContent = params.get('lname') || 'N/A';
            document.getElementById('email').textContent = params.get('email') || 'N/A';
            document.getElementById('phone').textContent = params.get('phone') || 'N/A';
            document.getElementById('arrivalDate').textContent = params.get('arrivalDate') || 'N/A';
            document.getElementById('departureDate').textContent = params.get('departureDate') || 'N/A';

            // Retrieve room data from localStorage
            document.getElementById('receiptRoomNumber').textContent = localStorage.getItem('selectedRoomNumber') || 'N/A';
            document.getElementById('receiptRoomType').textContent = localStorage.getItem('selectedRoomType') || 'N/A';

            // Handle form submission
            document.getElementById('personalInfoForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                // Collect form data
                const formData = {
                    firstName: document.getElementById('fname').value,
                    lastName: document.getElementById('lname').value,
                    email: document.getElementById('email').value,
                    phone: document.getElementById('phone').value,
                    arrivalDate: document.getElementById('arrivalDate').value,
                    departureDate: document.getElementById('departureDate').value
                };

                // Display the receipt
                document.getElementById('receiptFname').textContent = formData.firstName;
                document.getElementById('receiptLname').textContent = formData.lastName;
                document.getElementById('receiptEmail').textContent = formData.email;
                document.getElementById('receiptPhone').textContent = formData.phone;
                document.getElementById('receiptArrivalDate').textContent = formData.arrivalDate;
                document.getElementById('receiptDepartureDate').textContent = formData.departureDate;

                // Show the receipt section
                document.getElementById('receipt').style.display = 'block';

                // Hide the form after submission
                document.getElementById('personalInfoForm').style.display = 'none';
            });
        });
        
    </script>
</body>
</html>
