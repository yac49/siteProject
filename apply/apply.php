<!DOCTYPE html>
<html lang="en">

<head>
    <title>招生資訊</title>
</head>

<body>
    <div class="wrap">
        <?php include('../title page/header.php'); ?>
        <div class="href">
            <ol>
                <li class="a1"><a href="/index.php">首頁</a></li>
                <li class="a3"><a href="apply.php">招生資訊</a></li>
            </ol>
        </div>
        <div class="main">
            <div class="container mt-5">
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-6">
                        <h2 style="text-align: center;">大學部招生</h2>
                        <ul class="list-group list-group-flush">
                            <?php
                            require_once('../sqlconnect.php');
                            $sql = "SELECT method, COUNT(*) as count FROM applicant WHERE goal ='大學部'  GROUP BY method ";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                echo "<li class='list-group-item d-flex justify-content-between align-items-center' style='cursor: pointer;' onclick=\"location.href='applyInfo.php?goal=大學部&method=" . urlencode($row['method']) . "';\">";
                                echo $row["method"];
                                echo "<span class='badge badge-outline badge-pill'>" . $row['count'] . "</span>";
                                echo "</li>";
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <h2 style="text-align: center;">碩士班招生</h2>
                        <ul class="list-group list-group-flush">
                            <?php
                            require_once('../sqlconnect.php');
                            $sql = "SELECT method, COUNT(*) as count FROM applicant WHERE goal ='碩士班'  GROUP BY method ";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                echo "<li class='list-group-item d-flex justify-content-between align-items-center' style='cursor: pointer;' onclick=\"location.href='applyInfo.php?goal=碩士班&method=" . urlencode($row['method']) . "';\">";
                                echo $row["method"];
                                echo "<span class='badge badge-outline badge-pill'>" . $row['count'] . "</span>";
                                echo "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <?php include('../title page/footer.php'); ?>
    </div>
</body>

</html>
<style>
    a {
        text-decoration: none;
        color: black;
    }

    .list-group-item {
        background-color: transparent;
        border-radius: 0;
    }
</style>