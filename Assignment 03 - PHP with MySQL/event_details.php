<?php require_once 'includes/db.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Event Details</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="events.php">Events</a></li>
      <li><a href=" login.php">Login/Register</a></li>
      <?php if (isset($_SESSION['admin'])) : ?>
        <li><a href="admin.php">Admin Dashboard</a></li>
      <?php endif; ?>
    </ul>
  </nav>
  <header>
    <h1>Event Details</h1>
  </header>
  <main>
    <section class="event-details">
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
      <?php
      require_once 'includes/db.php';
      // Display event details
      $id = $_GET['id'];
      $query = "SELECT * FROM events WHERE id = '$id'";
      $result = execute_query($query);
      $event = mysqli_fetch_assoc($result);
      ?>
      <h2><?php echo $event['title']; ?></h2>
      <p><?php echo $event['description']; ?></p>
      <p>Date: <?php echo $event['date']; ?></p>
      <p>Time: <?php echo $event['time']; ?></p>
      <p>Location: <?php echo $event['location']; ?></p>
      <p>Price: <?php echo $event['price']; ?></p>
      <a href="book_ticket.php?id=<?php echo $event['id']; ?>">Book Ticket</a>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 Event Management System</p>
  </footer>
</body>
</html>