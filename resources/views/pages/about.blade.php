<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    
</head>
<body>

    @include('layouts.header')

    <div class="parallax">
        <div class="overlay">
            <div class="content">
                <h1>About Us</h1>
                <p>We are a passionate team dedicated to creating amazing experiences for our customers.</p>
                <p>Our mission is to provide quality services and solutions that exceed expectations.</p>
            </div>
        </div>
    </div>

    <div class="team">
        <h2>Meet Our Team</h2>
        <div class="team-member">
            <img src="team-member1.jpg" alt="Team Member 1"> <!-- Replace with actual image -->
            <h3>John Doe</h3>
            <p>CEO</p>
        </div>
        <div class="team-member">
            <img src="team-member2.jpg" alt="Team Member 2"> <!-- Replace with actual image -->
            <h3>Jane Smith</h3>
            <p>CTO</p>
        </div>
        <div class="team-member">
            <img src="team-member3.jpg" alt="Team Member 3"> <!-- Replace with actual image -->
            <h3>Emily Johnson</h3>
            <p>Marketing Manager</p>
        </div>
    </div>

    @include('layouts.footer')

</body>
</html>
