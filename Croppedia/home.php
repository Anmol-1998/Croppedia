<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="container-fluid">
        <?php
        include('includes/dbconnection.php');
        $sql = "SELECT * FROM crop_detail";

        if ($result = $mysqli->query($sql)) {
            echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
            while ($row = $result->fetch_assoc()) {
                $field1name = $row["CROP_NAME"];
                echo '<div class="col">';
                echo '<div class="card h-100">';
                echo '<img height="220" height="150" src="./images/' . strtolower($field1name) . '.jpg" class="card-img-top" alt="' . $field1name . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $field1name . '</h5>';
                echo '<a href="#" class="btn btn-primary">Read Details....</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        }

        $mysqli->close();
        ?>
    </div>
</body>
</html>