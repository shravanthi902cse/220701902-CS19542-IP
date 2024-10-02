// Database connection
$conn = mysqli_connect("localhost", "root", "1221", "event_management");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Function to execute queries
function execute_query($query) {
  global $conn; // Add this line to make $conn global
  $result = mysqli_query($conn, $query);
  return $result;
}

// Function to close connection
function close_connection() {
  global $conn; // Add this line to make $conn global
  mysqli_close($conn);
}

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="events.php">Events</a></li>
      <li><a href="login.php">Login/Register</a></li>
      <li><a href="admin.php">Admin Dashboard</a></li>
    </ul>
  </nav>
  <header>
    <h1>Admin Dashboard</h1>
  </header>
  <main>
    <section class="admin-dashboard">
      <h2>Manage Events</h2>
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
            <a href="edit_event.php?id=<?php echo $event['id']; ?>">Edit</a>
            <a href="delete_event.php?id=<?php echo $event['id']; ?>">Delete</a>
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