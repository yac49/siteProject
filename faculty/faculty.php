<?php

require_once('../sqlconnect.php');

$sqlAll = "SELECT * FROM faculty";
$resultAll = $conn->query($sqlAll);

// Default employment is '一般'
$employment = isset($_GET['employment']) ? $_GET['employment'] : '全部';


$sql = ($employment !== '全部') ? "SELECT * FROM faculty WHERE employment='$employment'" : $sqlAll;
$result = $conn->query($sql);

$elementsPerPage = 6;
$totalElements = $result->num_rows;
$totalPages = ceil($totalElements / $elementsPerPage);

$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the starting point for the results
$start = ($currentPage - 1) * $elementsPerPage;

// Modify your SQL query to retrieve only the elements for the current page
$sql = ($employment !== '全部') ? "SELECT * FROM faculty WHERE employment='$employment' LIMIT $start, $elementsPerPage" : "SELECT * FROM faculty LIMIT $start, $elementsPerPage";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>師資簡介</title>
    <link rel="stylesheet" href="faculty.css">
</head>

<body>
    <div class="wrap">
        <?php include('../title page/header.php'); ?>
        <div class="href">
            <ol>
                <li class="a1"><a href="/index.php">首頁</a></li>
                <li class="a3">
                    <a href="faculty.php?employment=<?php echo $employment; ?>">
                        <?php
                        if ($employment === '全部') {
                            echo '全部師資';
                        } else {
                            echo $employment . '教師';
                        }
                        ?>
                    </a>
                </li>
            </ol>
        </div>
        <div class="main">
            <div class="carousel" style="align-items: center;">
                <div class="employment <?php echo ($employment === '全部') ? 'selected' : ''; ?>" onclick="location.href='?employment=全部';">全部師資</div>

                <?php
                $categories = ['專任', '兼任', '退休'];

                foreach ($categories as $employ) {
                    $isSelected = ($employment === $employ) ? 'selected' : '';
                    $fontWeight = ($isSelected && $employment !== '全部') ? 'bold' : 'normal';
                ?>

                    <div class="employment <?php echo $isSelected; ?>" style="font-weight: <?php echo $fontWeight; ?>" onclick="location.href='?employment=<?php echo $employ; ?>';">
                        <?php
                        echo $employ . '教師';
                        ?>
                    </div>

                <?php
                }
                ?>

            </div>
            <div class="content-wrapper">
                <div class="content-container row">
                    <?php
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <div class="col-md-6 col-lg-6">
                            <div class="row">
                                <div class="phohograph col-6">
                                    <img src="<?php echo $row["facultyimage"]; ?>" alt="<?php echo $row["name"]; ?>" style="height:100%;object-fit: contain;">
                                </div>
                                <div class="bdtext col-6">
                                    <h1><?php echo $row["name"]; ?></h1>
                                    <i class="material-icons">account_box</i>
                                    <span><?php echo $row["title"]; ?></span><br>
                                    <i class="material-icons">school</i>
                                    <span><?php echo $row["education"]; ?></span><br>
                                    <i class="material-icons">thumb_up</i>
                                    <span><?php echo $row["expertise"]; ?></span><br>
                                    <i class="material-icons">email</i>
                                    <a href="mailto:<?php echo $row["email"]; ?>">
                                        <span><?php echo $row["email"]; ?></span><br>
                                    </a>
                                    <i class="material-icons">business_center</i>
                                    <span><?php echo $row["office_location"]; ?></span><br>
                                    <i class="material-icons">call</i>
                                    <span><?php echo $row["phone"]; ?></span><br><br>
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
                    echo "<a href='faculty.php?employment=$employment&page=$i'>$i</a>";
                }
                ?>
            </div>
        </div>
        <?php include('../title page/footer.php'); ?>
    </div>
</body>

</html>
<style>
    .carousel {
        display: flex;
        overflow: hidden;
        width: 100%;
        justify-content: center;
    }

    .employment {
        font-size: calc(18px + 0.5vw);
        padding: 10px;
        margin: 5px;
        cursor: pointer;
    }

    .employment.selected {
        background-color: #baa6c9;
        color: white;
        font-weight: bold;
    }

    .employment:not(.selected) {
        font-weight: normal;
    }

    .photograph {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>