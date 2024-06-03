<?php 
require_once("./dbConnect.php")
?>

!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add authorship metadata and link CSS and JS files -->
    <link rel="stylesheet" href="CSS/respitecenter.css">
    <title>Respite centers</title>
   
</head>
<body>

 <main>   
    <h1>These are the lists of Respite centers</h1>
    <div class="line"></div>
    <br><br>
<?php
    $sql = "SELECT * FROM respitecenters;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
  // Output wrapped in HTML elements with classes
  echo '<div class="container">';
    echo '<div class="data-row">';
        // echo '<span class="data-label">ID:</span>' . $row['id'] . '<br>';
         echo '<span class="data-label">Name:</span>'. $row['Name_of_center'] . '<br>';
         echo '<span class="data-label">Location:</span>' . $row['location'] . '<br>';
         echo '<span class="data-label">Contact Information:</span>' . $row['contact_information'] . '<br>';
    echo '</div>';
  echo '</div>';
        }
    }
?>



</main>
</body>
</html>