<?php
require_once('../sqlconnect.php');

if (isset($_GET['method'])) {
    $selectedMethod = mysqli_real_escape_string($conn, $_GET['method']);

    $sql = "SELECT * FROM applicant WHERE method = '$selectedMethod'";
    $result = $conn->query($sql);

    if ($result) {

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li class='list-group-item d-flex justify-content-between align-items-center' onclick=\"openFile('" . $row["link"] . "')\">";
            echo $row["resource"];
            echo "</li>";
        }

        echo '</table>';
        mysqli_free_result($result);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Method parameter not set.";
}

mysqli_close($conn);
