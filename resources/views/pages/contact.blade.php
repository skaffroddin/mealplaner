<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
        body {
            background-color: #f7fafc; /* Light gray for light mode */
            color: #1a202c; /* Dark gray for text */
        }
        .header {
            background-color: #ff7f50; /* Coral color for the header */
            color: white; /* White text in header */
        }
        .button {
            background-color: #ff7f50; /* Coral color for buttons */
            color: white; /* White text on buttons */
            border-radius: 9999px; /* Full rounded */
        }
        .contact-container {
            display: flex; /* Use flexbox for layout */
            justify-content: space-between; /* Space out columns */
            max-width: 1200px; /* Max width for the container */
            margin: auto; /* Center the container */
            padding: 2rem; /* Padding around the container */
        }
        .form-column {
            flex: 1; /* Grow to fill space */
            margin-right: 1rem; /* Space between columns */
        }
        .map-column {
            flex: 1; /* Grow to fill space */
            max-width: 500px; /* Max width for map */
        }
        .card {
            background-color: white; /* White background for cards */
            border: 1px solid #e2e8f0; /* Light gray border */
            border-radius: 0.5rem; /* Rounded corners */
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            padding: 2rem; /* Padding for the card */
        }
        input, textarea {
            border: 1px solid #e2e8f0; /* Light gray border */
            border-radius: 0.375rem; /* Rounded corners */
            padding: 0.5rem; /* Padding inside input fields */
            width: 100%; /* Full width */
            margin-bottom: 1rem; /* Space between fields */
        }
        input:focus, textarea:focus {
            outline: none; /* Remove default outline */
            border-color: #ff7f50; /* Change border color on focus */
        }
        iframe {
            width: 100%; /* Full width for map */
            height: 300px; /* Fixed height for map */
            border: 0; /* Remove border */
        }
    </style>
</head>
<body>
    @include('layouts.header')

    <main class="mt-40 mx-auto">
        <div class="contact-container">
            <div class="form-column">
                <div class="card">
                    <h1 class="text-3xl font-semibold text-center mb-4">Contact Us</h1>
                    <p class="text-center mb-6">We'd love to hear from you! Please fill out the form below and we will get back to you shortly.</p>
                    <form action="/contact" method="POST">
                        @csrf <!-- Include CSRF token for security -->
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                        <button type="submit" class="button text-sm px-5 py-2.5">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="map-column">
                <div class="card">
                    <h2 class="text-xl font-semibold text-center mb-4">Find Us</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.021070477252!2d-122.42324668468142!3d37.77928057975926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809b4b849b53%3A0xf97c1e8e42ef6b34!2sCalifornia%20Street%2C%20San%20Francisco%2C%20CA%2094108%2C%20USA!5e0!3m2!1sen!2sin!4v1630450221480!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.footer')
</body>
</html>
