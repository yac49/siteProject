<?php

require_once('../sqlconnect.php');

$sqlAll = "SELECT * FROM applicant GROUP BY method";
$resultAll = $conn->query($sqlAll);
$selectedMethod = isset($_GET['method']) ? $_GET['method'] : '技優甄選';
$goal = isset($_GET['goal']) ? $_GET['goal'] : '大學部';
$sql = "SELECT method FROM applicant WHERE goal ='$goal'  GROUP BY method ";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $goal ?></title>
</head>

<body>
    <div class="wrap">
        <?php include('../title page/header.php'); ?>
        <div class="href">
            <ol>
                <li class="a1"><a href="/index.php">首頁</a></li>
                <li class="a2"><a href="apply.php">招生資訊</a></li>
                <li class="a3"><?php echo $goal ?></li>
            </ol>
        </div>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <?php
                        if ($result) {
                            echo '<div class="container-fluid">';
                            echo '<h3>入學管道-' . $goal . '</h3>';
                            echo '<ul class="list-group list-group-flush" id="methodList">';

                            while ($row = mysqli_fetch_assoc($result)) {
                                // Check if the current method is the selected method
                                $isSelected = ($row['method'] == $selectedMethod) ? 'selected' : '';

                                echo '<li class="list-group-item ' . $isSelected . '" onclick="showData(\'' . $row['method'] . '\')">' . $row['method'] . '</li>';
                            }

                            echo '</ul>';
                            echo '</div>';

                            mysqli_free_result($result);
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }

                        mysqli_close($conn);
                        ?>
                    </div>
                    <div class="col-md-8">
                        <h3>簡章</h3>
                        <div id="dataDisplay">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('../title page/footer.php'); ?>
    </div>
</body>


</html>
<script>
    function showData(method) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("dataDisplay").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "applyData.php?method=" + method, true);
        xmlhttp.send();
    }
    document.addEventListener('DOMContentLoaded', function() {
        var methodList = document.getElementById("methodList");

        // Get the initially selected method from the URL parameter
        var selectedMethod = "<?php echo $selectedMethod; ?>";

        // Call the showData function with the initially selected method
        showData(selectedMethod);

        // Add a click event listener to highlight the selected method
        methodList.addEventListener('click', function(event) {
            var listItems = methodList.getElementsByTagName("li");

            for (var i = 0; i < listItems.length; i++) {
                listItems[i].classList.remove('selected');
            }

            if (event.target.tagName === 'LI') {
                var selectedMethod = event.target.textContent;
                showData(selectedMethod);

                // Add a class to highlight the selected method
                event.target.classList.add('selected');
            }
        });
    });

    function openFile(filePath) {
        window.open(filePath, "_blank");
    }
</script>
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
</style>