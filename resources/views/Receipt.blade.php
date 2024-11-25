<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Receipt</title>
    <link rel="stylesheet" href="{{ asset('css/receipt.css') }}">
</head>
<body> 
    <div id="receipt" class="receipt-container">
        <h2>Booking Receipt</h2>
        <p><strong>First Name:</strong> {{ $booking->first_name }}</p>
        <p><strong>Last Name:</strong> {{ $booking->last_name }}</p>
        <p><strong>Email:</strong> {{ $booking->email }}</p>
        <p><strong>Phone:</strong> {{ $booking->phone }}</p>
        <p><strong>Arrival Date:</strong> {{ $booking->arrival_date }}</p>
        <p><strong>Departure Date:</strong> {{ $booking->departure_date }}</p>
        <p><strong>Room Number:</strong> {{ $booking->room_number }}</p>
        <p><strong>Room Type:</strong> {{ $booking->room_type }}</p>
        <button onclick="window.print()">Print Receipt</button>
    </div>
</body>
</html>
