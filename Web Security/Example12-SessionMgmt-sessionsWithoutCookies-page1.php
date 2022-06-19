<?php
  ini_set("session.use_cookies", 0);
  ini_set("session.use_only_cookies", 0);
  ini_set("session.use_trans_sid", 1);
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sessions without cookies - Page 1</title>
</head>
<body>
  <?php
    echo '<h3>Page 1</h3>';

    if (!isset($_SESSION['visits'])) {
      $_SESSION['visits'] = 1;
    } else {
      $_SESSION['visits']++;
    }

    echo 'You have visited this site: ' . $_SESSION['visits'] . ' times <br>';
    echo 'Session name: ' . session_name() . '<br>';
    echo 'Session id: ' . session_id() . '<br><br>';
    echo 'SID: ' . SID . '<br><br>';
    echo "<a href=\"Example12-SessionMgmt-sessionsWithoutCookies-page2.php\"> Next page </a>";
  ?>
</body>
</html>
