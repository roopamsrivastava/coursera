<?php
include 'config.php';
?>
<!DOCTYPE html>
<?php
if(isset($_GET['courseName'])&&isset($_GET['courseid'])&&isset($_GET['courseType'])){
    $courseid=$_GET['courseid'];
    $courseName=$_GET['courseName'];
    $courseType=$_GET['courseType']; 
    
    //validation of data saved
    $queryLine="SELECT * FROM courses WHERE id='$courseid'";
    $result = $conn->query($queryLine);
    if(@$result->num_rows > 0){
        echo "Data is already available";
    }
    else {
        //inserting values in the database
    $queryLine="INSERT INTO courses VALUES ('$courseid', '$courseName', '$courseType')";
    if ($conn->query($queryLine) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "An error occured while adding new course";
    }
    }
    
}
?>
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
                    <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Available Courses</h4>
                    <a href="view.php" class="btn btn-default pull-right">View Saved Courses</a>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                          <th>COURSE ID</th>
                          <th>COURSE NAME</th>
                          <th>COURSE TYPE</th>
                          <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        //Read the course data from the API.
                        $response = file_get_contents("https://api.coursera.org/api/courses.v1");
                        //Decode the JSON data into Array
                        $coursedata = json_decode($response,true);
                        //All course data belongs to the 1st index of the response set. ie: elements, So we need to fetch all the data from $coursedata["elements"].
                        $courses=$coursedata["elements"];
                        for($i=0;$i<count($courses);$i++){
                            $course=$courses[$i];
                            ?>
                              <tr>
                                  <td><?php echo $course["id"];?></td>
                                  <td><?php echo $course["name"];?></td>
                                  <td><?php echo $course["courseType"];?></td>
                                  <td><a href="index.php?courseid=<?php echo $course['id']; ?>&courseName=<?php echo $course['name'];?>&courseType=<?php echo $course['courseType'];?>" class="btn btn-primary"> SAVE </a></td>
                              </tr>
                        <?php
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
