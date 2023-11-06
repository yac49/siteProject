<?php

require_once('../sqlconnect.php');


$id = $_GET['id'];

// SQL query to fetch full information for the specified id
$sql = "SELECT purpose, category, unit, content, releaseDate, releasePeriod, relevantAttachments, relatedURL FROM announcement WHERE id = $id";
$result = $conn->query($sql);
$category = "";
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Check if $row is not null before accessing its elements
    if (isset($row["category"])) {
        $category = $row["category"];
    }

    // Display full information
    // ... (your existing code)

} else {
    echo "No information found for the specified id.";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Your Page Title</title>
</head>


<body>
    <div class="wrap">
        <?php include('../title page/header.php'); ?>
        <div class="href">
            <ol>
                <li class="a1"><a href="/index.php">首頁</a></li>
                <li class="a2"><a href="announcement.php">最新消息</a></li>
                <li class="a3"><a href="announcement.php?category=<?php echo $category; ?>">
                        <?php
                        if ($category === '全部') {
                            echo '最新消息';
                        } elseif ($category === '徵才') {
                            echo '徵才資訊';
                        } elseif ($category === '榮譽榜') {
                            echo '榮譽榜';
                        } else {
                            echo $category . '公告';
                        }
                        ?></a></li>
            </ol>
        </div>
        <div class="main">
            <?php

            echo "<h1>" . $row["purpose"] . "</h1>";
            echo "<p>" . $row["unit"] . "</p>";
            echo "<p>" . $row["releaseDate"] . "</p>";
            echo "<p>" . $row["content"] . "</p>";

            echo "<strong>附件：</strong>";
            $attachments = explode(',', $row["relevantAttachments"]);

            // Loop through each path and create a link
            foreach ($attachments as $attachment) {
                echo "<a href='" . $attachment . "' target='_blank'>" . $attachment . "</a><br>";
            }
            echo "<p><strong>相關網址：</strong> <a href='" . $row["relatedURL"] . "'>" . $row["relatedURL"] . "</a></p>";

            ?>
        </div>




        <?php include('../title page/footer.php'); ?>
    </div>
</body>

</html>