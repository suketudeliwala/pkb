<?php
// log_ad_click.php

include("includes/config.php"); // Include your database connection file

if (isset($_POST['ad_id'])) {
    $ad_id = $_POST['ad_id'];
    $stmt = $conn->prepare("INSERT INTO ad_clicks (ad_id) VALUES (?)");
    $stmt->bind_param("s", $ad_id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>