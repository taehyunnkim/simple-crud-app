<?php include "layout/header.php"; ?>

  <h2>Find a user based on location</h2>

  <form method="post">
    <label for="location">Location</label>
    <input type="text" id="location" name="location">
    <input type="submit" name="submit" value="View Results">
  </form>

  <a href="index.php">Back to home</a>

<?php include "layout/footer.php"; ?>