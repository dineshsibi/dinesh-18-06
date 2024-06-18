<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/toggle.css">
  
  
  
  
</head>
<body>
  <header>
    <img src="CFR.png" width="100%" alt="no image">
    <div class="container">
      <button id="toggleButton">☰</button>
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#academics">Academics</a></li>
          <li><a href="#admissions">Admissions</a></li>
          <li><a href="#research">Research</a></li>
          <li><a href="#student-life">Students</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  <div id="dashboard" class="dashboard">
    <h2>Dashboard</h2>
    <button class="dashboard-button" id="button1">Student Grievance</button>
    <button class="dashboard-button" id="button2">Grievance Status</button>
    <button class="dashboard-button">Faculties</button>
    <button class="dashboard-button">Exams</button>
    <button class="dashboard-button">Administration</button>
    <button class="dashboard-button">Library</button>
  </div>
  
  <section id="home">
    <div class="hero">
      <h1>Welcome to Our University</h1><br><br>
    </div>
  </section>

  <section id="about" class="section">
    <div class="container">
      <h2>About Us</h2>
      <p>Learn more about our history, mission, and values.</p>
      <a href="about.html" class="btn">Read More</a>
    </div>
  </section>

  <section id="academics" class="section">
    <div class="container">
      <h2>Academics</h2>
      <p>Discover our wide range of academic programs and resources.</p>
      <a href="academics.html" class="btn">Explore Programs</a>
    </div>
  </section>

  <section id="admissions" class="section">
    <div class="container">
      <h2>Admissions</h2>
      <p>Find out how to apply, tuition fees, and financial aid options.</p>
      <a href="admissions.html" class="btn">Learn More</a>
    </div>
  </section>

  <section id="research" class="section">
    <div class="container">
      <h2>Research</h2>
      <p>Explore our cutting-edge research initiatives and opportunities.</p>
      <a href="research.html" class="btn">Discover Research</a>
    </div>
  </section>

  <section id="student-life" class="section">
    <div class="container">
      <h2>Student Life</h2>
      <p>Experience vibrant campus life through various activities and organizations.</p>
      <a href="student-life.html" class="btn">Get Involved</a>
    </div>
  </section>

  <section id="news" class="section">
    <div class="container">
      <h2>News</h2>
      <div class="news-item">
        <h3>Latest News Title</h3>
        <p>Summary of the latest news.</p>
        <a href="news.html" class="btn">Read More</a>
      </div>
      <div class="news-item">
        <h3>Another News Title</h3>
        <p>Summary of another news article.</p>
        <a href="news.html" class="btn">Read More</a>
      </div>
    </div>
  </section>

  <section id="events" class="section">
    <div class="container">
      <h2>Events</h2>
      <div class="event-item">
        <h3>Upcoming Event Title</h3>
        <p>Details about the upcoming event.</p>
        <a href="events.html" class="btn">Find Out More</a>
      </div>
      <div class="event-item">
        <h3>Another Event Title</h3>
        <p>Details about another event.</p>
        <a href="events.html" class="btn">Find Out More</a>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2024 MKU. All rights reserved.</p>
      <p>Contact us: <a href="mailto:info@university.com">mkuniversity.ac.in</a></p>
      <ul class="social-media">
        <li><a href="#"><img src="facebook_icon.png" alt="Facebook"></a></li>
        <li><a href="#"><img src="twitter_icon.png" alt="Twitter"></a></li>
        <li><a href="#"><img src="instagram_icon.png" alt="Instagram"></a></li>
        <li><a href="#"><img src="linkedin_icon.png" alt="LinkedIn"></a></li>
      </ul>
    </div>
  </footer>

 
</body><script src="script/toggle.js"></script>

</html>
