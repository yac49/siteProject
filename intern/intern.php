<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>校外實習</title>
    <script src="script.js" defer></script>
</head>

<body>
    <div class="wrap">
        <?php include('../title page/header.php'); ?>
        <div class="href">
            <ol>
                <li class="a1"><a href="/index.php">首頁</a></li>
                <li class="a3"><a href="intern.php">校外實習</a></li>
            </ol>
        </div>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="container-fluid">
                            <h3>校外實習</h3>
                            <ul class="list-group list-group-flush" id="infoList">
                                <?php
                                $infoItems = [
                                    'info1' => '劇情組織，編號。',
                                    'info2' => '老婆風情群發反。'
                                ];

                                foreach ($infoItems as $info => $label) {
                                    $isSelected = (isset($_GET['item']) && $_GET['item'] == $info) ? 'selected' : '';
                                    echo '<li class="list-group-item ' . $isSelected . '" onclick="showData(\'' . $info . '\')">' . $label . '</li>';
                                }
                                ?>
                                <li class="list-group-item cdd">
                                    <div class="row">
                                        <span class="col-7">
                                            費用隊員裝修鑒。 &nbsp;
                                            &nbsp;-<span id="selOp"></span>
                                        </span>
                                        <div class="cdd-menu col-4">
                                            <ul class="list-group" style="font-size: small;">
                                                <?php
                                                $subMenuItems = [
                                                    'info3Option1' => '一身開發者大會。',
                                                    'info3Option2' =>  '理由房產產業經。',
                                                    'info3Option3' => '國有採用，主演。',
                                                    'info3Option4' => '刪除許可過程氣。',
                                                    'info3Option5' => '反映幹什麼，品。',
                                                    'info3Option6' => '設定媽媽課堂一。',
                                                    'info3Option7' => '理解另一，飯店。'
                                                ];

                                                foreach ($subMenuItems as $subInfo => $subLabel) {
                                                    $isSelected = (isset($_GET['item']) && $_GET['item'] == $subInfo) ? 'selected' : '';
                                                    echo '<li class="cdd-item ' . $isSelected . '" onclick="showData(\'' . $subInfo . '\')">' . $subLabel . '</li>';
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
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
</style>

</html>