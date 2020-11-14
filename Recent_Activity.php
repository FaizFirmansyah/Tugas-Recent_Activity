<?php
  include'Koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Recent Activity</title>
</head>

<body>
  <h1>Recent Activity</h1>

  <table>
    <tr>
      <th>Activity</th>
      <th>Time</th>
    </tr>

    <?php
    $ambildata = mysqli_query($koneksi,"SELECT * FROM recent_activity");
    while ($tampil = mysqli_fetch_array ($ambildata)){
    ?>
    <tr>
      <td><?php echo$tampil['Activity']; ?></td>
      <td><?php echo$tampil['Time']; ?></td>
    </tr>
    <?php    
  }
  ?>
  </table>
</body>

</html>