<?php require_once 'includes/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Event Listing</title>
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
    <h1>Event Listing</h1>
  </header>
  <main>
    <section class="event-listing">
      <h2>Upcoming Events</h2>
      <ul>
        <?php
        // Display all events
        $query = "SELECT * FROM events";
        $result = execute_query($query);
        while ($event = mysqli_fetch_assoc($result)) : ?>
          <li>
            <h3><?php echo $event['title']; ?></h3>
            <p><?php echo $event['description']; ?></p>
            <p>Date: <?php echo $event['date']; ?></p>
            <p>Time: <?php echo $event['time']; ?></p>
            <p>Location: <?php echo $event['location']; ?></p>
            <p>Price: <?php echo $event['price']; ?></p>
            <a href="event_details.php?id=<?php echo $event['id']; ?>">View Details</a>
          </li>
        <?php endwhile; ?>
      </ul>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 Event Management System</p>
  </footer>
</body>
</html>