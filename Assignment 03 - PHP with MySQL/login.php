<?php require_once 'includes/db.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Login/Register</title>
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
    <h1>Login/Register</h1>
  </header>
  <main>
    <section class="login-register">
      <h2>Login</h2>
      <form>
        <input type="text" name="username" placeholder="Username...">
        <input type="password" name="password" placeholder="Password...">
        <button type="submit">Login</button>
      </form>
      <h2>Register</h2>
      <form>
        <input type="text" name="username" placeholder="Username...">
        <input type="password" name="password" placeholder="Password...">
        <input type="email" name="email" placeholder="Email...">
        <button type="submit">Register</button>
      </form>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 Event Management System</p>
  </footer>
</body>
</html>