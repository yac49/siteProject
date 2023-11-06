<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課程資訊</title>
    <script src="script.js" defer></script>
</head>

<body>
    <div class="wrap">
        <?php include('../title page/header.php'); ?>
        <div class="href">
            <ol>
                <li class="a1"><a href="/index.php">首頁</a></li>
                <li class="a3"><a href="course.php">課程資訊</a></li>
            </ol>
        </div>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="container-fluid">
                            <h3>課程資訊</h3>
                            <ul class="list-group list-group-flush" id="infoList">
                                <?php
                                // Define the list items in PHP
                                $infoItems = [
                                    'info1' => '課程規劃',
                                    'info2' => '修業規定',
                                    'info3' => '課程地圖',
                                    'info4' => '課程基準表'
                                ];

                                foreach ($infoItems as $info => $label) {
                                    $isSelected = (isset($_GET['item']) && $_GET['item'] == $info) ? 'selected' : '';
                                    echo '<li class="list-group-item ' . $isSelected . '" onclick="showData(\'' . $info . '\')">' . $label . '</li>';
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3 id="infoTitle"></h3>
                        <div id="dataDisplay">
                            <?php
                            // Check if the 'item' parameter is set in the URL
                            $selectedItem = isset($_GET['item']) ? $_GET['item'] : 'info1';

                            // Load content based on the selected item
                            include($selectedItem . '.html');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('../title page/footer.php'); ?>
    </div>

</body>


<style>
    a {
        text-decoration: none;
        color: black;
    }

    .list-group-item {
        background-color: transparent;
        border-radius: 0;
        cursor: pointer;
    }

    .selected {
        background-color: #baa6c9;
        color: white;
    }

    .cdd {
        display: inline-block;
        position: relative;
    }

    .cdd-menu {
        display: none;
        top: 100%;
    }

    .cdd:hover .cdd-menu {
        display: flex;
    }

    .main {
        min-height: 80vh;
    }

    .phohograph {
        max-width: 100%;
        text-align: center;
        padding: 10px;
    }

    .phohograph img {
        max-width: 100%;
        height: auto;

        margin: 0 auto;
    }
</style>

</html>