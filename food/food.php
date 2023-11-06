<?php

require_once('../sqlconnect.php');

$sql = "SELECT * FROM food";
$result = $conn->query($sql);

$elementsPerPage = 6;
$totalElements = $result->num_rows;
$totalPages = ceil($totalElements / $elementsPerPage);

$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the starting point for the results
$start = ($currentPage - 1) * $elementsPerPage;

// Modify your SQL query to retrieve only the elements for the current page
$sql = "SELECT * FROM food LIMIT $start, $elementsPerPage";
$result = $conn->query($sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>美食推薦</title>
    <link rel="stylesheet" href="food.css">

</head>


<body>
    <div class="wrap">

        <?php include('../title page/header.php'); ?>
        <div class="href">
            <ol>
                <li class="a1"><a href="/index.php">首頁</a></li>

                <li class="a3"><a href="/food/food.php">美食推薦</a></li>
            </ol>
        </div>
        <div class="main">
            <p>美食推薦</p>
            <div class="content-wrapper">
                <div class="content-container row">
                    <?php
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <div class="col-md-6 col-lg-6">
                            <div class="row">
                                <div class="phohograph col-6">
                                    <img class="img-fluid" src="<?php echo $row["foodimage"]; ?>" alt="<?php echo $row["foodname"]; ?>">
                                </div>
                                <div class="bdtext col-6">
                                    <h1><?php
                                        $k = $row["foodname"];
                                        echo $row["foodname"];
                                        ?></h1>
                                    <?php
                                    echo "<a href='http://newurl.com
                                    <i class='material-icons'>place</i>
                                    <span>" . $row['foodmap'] . "</span><br>
                                </a>"
                                    ?>
                                    <i class="material-icons">call</i>
                                    <span><?php echo $row["foodcell"]; ?></span><br>
                                    <i class="material-icons">access_time</i>
                                    <span><?php echo $row["foodtime"]; ?></span><br>
                                    <i class="material-icons">list</i>
                                    <span><?php echo $row["foodlist"]; ?></span><br>
                                    <i class="material-icons">thumb_up</i>
                                    <span><?php echo $row["foodcomment"]  ?></span><br><br>
                                </div>
                            </div>

                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="page">
                <?php
                for ($i = 1; $i <= $totalPages; $i++) {
                    echo "<a href='food.php?page=$i'>$i</a>";
                }
                ?>
            </div>
        </div>




        <?php include('../title page/footer.php'); ?>
    </div>
</body>

</html>