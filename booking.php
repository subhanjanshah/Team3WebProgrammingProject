<?php 
$pageTitle = "Book a Table - CGG Cafe";
include 'header.php'; 
?>

    <div class="parallax-section" style="height: 50vh;">
        <div class="content-layer">
            <h1>Reservations</h1>
            <p class="cafe-text">Secure your spot</p>
        </div>
    </div>

    <div class="container mt-5 mb-5" style="max-width: 600px;">
        <div class="card shadow p-4 border-0">
            <h2 class="text-center mb-4" style="font-family: 'Playfair Display', serif;">Book a Table</h2>
            
            <form>
                <div class="mb-3">
                    <label class="form-label fw-bold">Date</label>
                    <input type="date" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Time</label>
                    <input type="time" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Duration</label>
                    <select class="form-select">
                        <option value="1">1 Hour</option>
                        <option value="2">2 Hours</option>
                        <option value="3">3 Hours</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Table Preference</label>
                    <select class="form-select">
                        <option value="Any">Any Table</option>
                        <option value="Window">Window Seat</option>
                        <option value="Quiet">Quiet Corner</option>
                    </select>
                </div>

                <button type="button" class="btn btn-coffee w-100 py-2 fs-5">Request Booking</button>
            </form>
        </div>
    </div>

<?php include 'footer.php'; ?>