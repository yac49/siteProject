<?php

require_once('../sqlconnect.php');

// Fetch all announcements
$sqlAll = "SELECT * FROM announcement ORDER BY releaseDate DESC";
$resultAll = $conn->query($sqlAll);

// Default category is '一般'
$category = isset($_GET['category']) ? $_GET['category'] : '全部';

// Fetch announcements based on the selected category
$sql = ($category !== '全部') ? "SELECT * FROM announcement WHERE category='$category' ORDER BY releaseDate DESC" : $sqlAll;
$result = $conn->query($sql);

$categoryQuery = "SELECT DISTINCT category FROM announcement";
$categoryResult = $conn->query($categoryQuery);
$selectedCategory = '全部';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        <?php
        if ($category === '全部') {
            echo '最新消息';
        } else {
            echo $category . '公告';
        }
        ?>
    </title>

</head>

<body>
    <div class="wrap">
        <?php include('../title page/header.php'); ?>
        <div class="href">
            <ol>
                <li class="a1"><a href="/index.php">首頁</a></li>
                <li class="a3">
                    <a href="announcement.php?category=<?php echo $category; ?>">
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
                        ?></a>
                </li>
            </ol>
        </div>
        <div class="img-section" style="margin-top: 10px; margin-bottom: 10px;">
            <?php
            if ($category == '一般') {
                echo '<img src="img/A.jpg" alt="A" style="width:100%;">';
            } elseif ($category == '招生') {
                echo '<img src="img/B.jpg" alt="B" style="width:100%;">';
            } elseif ($category == '徵才') {
                echo '<img src="img/C.jpg" alt="B" style="width:100%;">';
            } elseif ($category == '榮譽榜') {
                echo '<img src="img/C.jpg" alt="C" style="width:100%;">';
            }
            ?>
        </div>
        <div class="main" style="align-items: center;">
            <div class="carousel">
                <div class="category <?php echo ($category === '全部') ? 'selected' : ''; ?>" onclick="location.href='?category=全部';">最新消息</div>

                <?php
                $categories = ['一般', '招生', '徵才', '榮譽榜'];

                foreach ($categories as $cate) {
                    $isSelected = ($category === $cate) ? 'selected' : '';
                    $fontWeight = ($isSelected && $category !== '全部') ? 'bold' : 'normal';
                ?>

                    <div class="category <?php echo $isSelected; ?>" style="font-weight: <?php echo $fontWeight; ?>" onclick="location.href='?category=<?php echo $cate; ?>';">
                        <?php if ($cate === '徵才') {
                            echo '徵才資訊';
                        } elseif ($cate === '榮譽榜') {
                            echo '榮譽榜';
                        } else {
                            echo $cate . '公告';
                        } ?>
                    </div>

                <?php
                }
                ?>

            </div>
            <table class="table table-hover" style="width: 60%;">
                <thead>
                    <tr style="text-align: center;">
                        <th style="width: 30%;">發布日期</th>
                        <th>主旨</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td style='text-align: center;''>" . $row["releaseDate"] . "</td>";
                        echo "<td><a href='announceInfo.php?id=" . $row["id"] . "'>" . $row["purpose"] . "</a></td>";
                        echo "</tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>

        <?php include('../title page/footer.php'); ?>
    </div>
</body>

</html>
<style>
    img {
        max-height: calc(50vh - 100px);
        object-fit: cover;
    }

    .carousel {
        display: flex;
        overflow: hidden;
        width: 100%;
        justify-content: center;
    }

    .category {
        font-size: calc(18px + 0.5vw);
        padding: 10px;
        margin: 5px;
        cursor: pointer;
    }

    .category.selected {
        background-color: #baa6c9;
        color: white;
        font-weight: bold;
    }

    .category:not(.selected) {
        font-weight: normal;
    }

    a {
        text-decoration: none;
        color: black;
    }

    a :hover {
        text-decoration: none;
        cursor: pointer;
    }
</style>