@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Portfolio</title>

  <style>
    /* Reset default styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Navigation Bar */
    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      height: 70px;
      background-color: rgba(0, 0, 0, 0.7);
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 40px;
      z-index: 100;
    }

    .nav-left {
      display: flex;
      align-items: center;
    }

    .logo {
      height: 45px;
      width: 45px;
      border-radius: 50%;
      margin-right: 10px;
    }

    .name {
      font-size: 1.5rem;
      font-weight: 600;
    }

    .nav-right a {
      color: white;
      text-decoration: none;
      margin-left: 25px;
      font-size: 1rem;
      transition: color 0.3s;
    }

    .nav-right a:hover {
      color: #00c6ff;
    }

    /* Cover Section */
    .cover-photo {
      margin-top: 70px; /* space for navbar */
      width: 100%;
      height: 300px;
      overflow: hidden;
      position: relative;
    }

    .cover-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Profile Picture Section */
    .profile-section {
      display: flex;
      justify-content: center;
      position: relative;
      top: -80px; /* overlap on cover */
    }

    .profile-pic {
      width: 160px;
      height: 160px;
      border-radius: 50%;
      border: 5px solid white;
      object-fit: cover;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
    }

    /* Divider Bar */
    .divider-bar {
      width: 100%;
      height: 4px;
      background: linear-gradient(to right, #00c6ff, #0072ff);
      position: relative;
      top: -60px;
    }

    /* Main Content */
    .content {
      text-align: center;
      padding: 60px 20px;
      font-family: 'Segoe UI', sans-serif;
      color: #333;
    }

    .content h1 {
      margin-bottom: 15px;
      font-size: 2rem;
    }

    .content p {
      font-size: 1.1rem;
      color: #555;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        height: auto;
        padding: 10px 20px;
      }

      .nav-right {
        margin-top: 10px;
      }

      .nav-right a {
        margin: 0 10px;
      }

      .profile-pic {
        width: 120px;
        height: 120px;
      }
    }
  </style>
</head>
<body>
  <!-- Navigation Bar -->
  <header class="navbar">
    <div class="nav-left">
      <img src="https://static.vecteezy.com/system/resources/previews/005/039/663/non_2x/ak-a-k-letter-logo-design-with-a-creative-cut-vector.jpg" alt="Logo" class="logo" />
      <span class="name">Anik Kumar Kuri</span>
    </div>
    <nav class="nav-right">
      <a href="#home">Home</a>
      <a href="#skills">Skills</a>
      <a href="#academic">Academic BG</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <!-- Cover Section -->
  <section class="cover-photo">
    <img src="https://static0.srcdn.com/wordpress/wp-content/uploads/2023/10/demon-slayer-s-zenitsu.jpg" alt="Cover Photo" class="cover-image" />
  </section>

  <!-- Profile Section -->
  <section class="profile-section">
    <img src="https://avatars.githubusercontent.com/u/232799374?s=400&u=69c8a32b05e551ede9a3031f344781c9b48fd5f5&v=4" alt="Profile Picture" class="profile-pic" />
  </section>

  <!-- Divider Bar -->
  <div class="divider-bar"></div>

  <!-- Content -->
  <main class="content">
    <h1>Welcome to My Portfolio</h1>
    <p>Hello I'm </p>
  </main>
</body>
</html>


@endsection