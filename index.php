<!DOCTYPE html>
<html lang="en">

<head>
  <title>首頁</title>

  <link rel="stylesheet" href="mystyle.css" />
</head>

<body>
  <div class="wrap">
    <?php include('./title page/header.php'); ?>
    <div class="banner">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../image/A.jpg" class="d-block w-100" alt="..." style="height: 450px" />
          </div>
          <div class="carousel-item">
            <img src="../image/B.png" class="d-block w-100" alt="..." style="height: 450px" />
          </div>
          <div class="carousel-item">
            <img src="../image/C.jpg" class="d-block w-100" alt="..." style="height: 450px" />
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!---class="banner"--->

    <div class="main">
      <div class="container mt-5">
        <div class="row">
          <!-- Column 1 -->
          <div class="col-md-6">
            <h2 style="text-align: center;">最新公告</h2>
            <table class="table table-hover">
              <thead>
                <tr style="text-align: center;">
                  <th style="min-width: 110px;">發布日期</th>
                  <th>主旨</th>
                </tr>
              </thead>
              <tbody>
                <?php
                require_once('sqlconnect.php');
                $sql = "SELECT id, releaseDate, purpose FROM announcement WHERE category='一般' ORDER BY releaseDate DESC LIMIT 3";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td style='text-align: center;''>" . $row["releaseDate"] . "</td>";
                  echo "<td><a href='announcement/announceInfo.php?id=" . $row["id"] . "'>" . $row["purpose"] . "</a></td>";
                  echo "</tr>";
                }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2" class="text-center">
                    <a href="announcement/announcement.php?category=一般" class="btn btn-light">
                      更多一般公告
                    </a>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>

          <!-- Column 2 -->
          <div class="col-md-6">
            <h2 style="text-align: center;">招生公告</h2>
            <table class="table table-hover">
              <thead>
                <tr style="text-align: center;">
                  <th style="min-width: 110px;">發布日期</th>
                  <th>主旨</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT id, releaseDate, purpose FROM announcement WHERE category='招生' ORDER BY releaseDate DESC LIMIT 3";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td style='text-align: center;''>" . $row["releaseDate"] . "</td>";
                  echo "<td><a href='announcement/announceInfo.php?id=" . $row["id"] . "'>" . $row["purpose"] . "</a></td>";
                  echo "</tr>";
                }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2" class="text-center">
                    <a href="announcement/announcement.php?category=招生" class="btn btn-light">
                      更多招生公告
                    </a>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>

    <?php include('./title page/footer.php'); ?>
  </div>
</body>

</html>
<style>
  a {
    text-decoration: none;
    color: black;
  }
</style>