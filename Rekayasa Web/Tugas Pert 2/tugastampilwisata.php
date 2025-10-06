<?php
// Yoga Dwi Pamungkas
// G.211.23.0093
// Rekayasa Web
// Tugas Prak Pert 2

function curl($url)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  curl_close($ch);
  return $output;
}

$send = curl("http://localhost/rekayasaweb/pert2/getwisata.php");
$data = json_decode($send, TRUE);
?>
<!DOCTYPE html>
<html lang="id">
<head>
</head>
<body>
  <table border="1" cellpadding="5" cellspacing="0">
    <tr>
      <th>Kota</th>
      <th>Landmark</th>
      <th>Tarif</th>
    </tr>
    <?php
    if (is_array($data)) {
      foreach($data as $row){
        echo "<tr>";
        echo "<td>".$row["kota"]."</td>";
        echo "<td>".$row["landmark"]."</td>";
        echo "<td>".$row["tarif"]."</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='4'>Data tidak tersedia</td></tr>";
    }
    ?>
  </table>
</body>
</html>
