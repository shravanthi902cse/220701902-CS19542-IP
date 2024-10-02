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