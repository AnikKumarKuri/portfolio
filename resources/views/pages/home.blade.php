@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portfolio with Logo and Nickname</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f4f4f4;
      text-align: center;
    }

    .nav-bar {
      
      background-color: #333;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1)
      padding: 0.5em 1em;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    
    .logo-nickname {
      display: flex;
      align-items: center;
      gap: 10px; 
      color: white;
      font-weight: bold;
      font-size: 1.2em;
    }

    nav .logo {
      height: 40px;
      display: block;
    }

    nav .nav-links {
      display: flex;
      gap: 20px;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      font-size: 1.1em;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #ff9800;
    }

    section.profile {
      margin-top: 40px;
    }

    section.profile img {
      width: 180px;
      height: 180px;
      border-radius: 50%;
      border: 4px solid #333;
      object-fit: cover;
    }
  </style>
</head>
<body>

  <nav class="nav-bar">
    <div class="logo-nickname">
      <img src="https://static.vecteezy.com/system/resources/previews/006/258/822/non_2x/initial-letter-a-arrow-up-logo-symbol-good-for-company-travel-start-up-logistic-and-graph-logos-vector.jpg" alt="Logo" class="logo" />
      <span>Captain Jack</span>  
    </div>

    <div class="nav-links">
      <a href="#home">Home</a>
      <a href="#skills">Skills</a>
      <a href="#contact">Contact</a>
    </div>
  </nav>

  <section class="profile" id="home">
    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSQXhsHLb9Mk-anqcsirLcwMxjRjtEYYSn6itlBgmos4W-ExTiF2fC4SYvd1FSwiXEZusTPDpvMaYvzi-elb7JumAA2xHUpkNkDs-j36A" alt="Profile Picture" />
    <h2>Your Name</h2>
    <p>Welcome to my portfolio!. A movie lover. Big fan of jonny depp</p>
  </section>

</body>
</html>



@endsection