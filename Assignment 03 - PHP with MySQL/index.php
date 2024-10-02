<?php require_once 'includes/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Event Management System</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="events.php">Events</a></li>
      <li><a href="login.php">Login/Register</a></li>
      <?php if (isset($_SESSION['admin'])) : ?>
        <li><a href="admin.php">Admin Dashboard</a></li>
      <?php endif; ?>
    </ul>
  </nav>
  <header>
    <h1>Event Management System</h1>
  </header>
  <main>
    <section class="featured-events">
      <h2>Featured Events</h2>
      <ul>
        <?php
        // Display featured events
        $query = "SELECT * FROM events LIMIT 3";
        $result = execute_query($query);
        while ($event = mysqli_fetch_assoc($result)) : ?>
          <li>
            <h3><?php echo $event['title']; ?></h3>
            <p><?php echo $event['description']; ?></p>
            <p>Date: <?php echo $event['date']; ?></p>
            <p>Time: <?php echo $event['time']; ?></p>
            <p>Location: <?php echo $event['location']; ?></p>
            <p>Price: <?php echo $event['price']; ?></p>
          </li>
        <?php endwhile; ?>
      </ul>
    </section>
    <section class="search-events">
      <h2>Search Events</h2>
      <form>
        <input type="text" name="search" placeholder="Search events...">
        <button type="submit">Search</button>
      </form>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 Event Management System</p>
  </footer>
</body>
</html>