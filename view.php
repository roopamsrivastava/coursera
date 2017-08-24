<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>COURSERA</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container" style="padding-top: 10px;">
            <div class="panel panel-primary">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Saved Courses</h4>
                    <a href="index.php" class="btn btn-default pull-right">Back</a>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>COURSE ID</th>
                            <th>COURSE NAME</th>
                            <th>COURSE TYPE</th>
                            </tr>
                        </thead>
                        <tbody>
                              <?php
                                $queryLine = "SELECT * FROM courses";
                                $result = $conn->query($queryLine);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                   ?>
                                 <tr>
                                    <td><?php echo $row["id"] ?></td>
                                    <td><?php echo $row["name"]?></td>
                                    <td><?php echo $row["type"]?></td>
                                 </tr>
                                  <?php
                                    }   
                                 }else {
                                    echo "0 results";
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </body>
</html>
