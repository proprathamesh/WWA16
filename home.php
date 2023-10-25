<?php
    require "./Partials/connection.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Partials/filter.css">
    <title>Job Section</title>
</head>
<body style="background-color:#e9ecef;">
    <?php require "./Partials/navbar.php"; ?>
    <div class="job-container container d-flex flex-row justify-content-evenly">
        <?php require "./Partials/filter.php" ?>
        <div class="col-7">
            <?php
            if (isset($_GET['job'])) {
                $sql =  "select * from job_info where jobType = 'Internship'";
            }
            else{
                $sql = "select * from job_info";
            }
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                for ($i=0; $i < $num; $i++) {
                    $row = mysqli_fetch_assoc($result);
                    $id = $row['id'];
                    $name = $row['CompName'];
                    $skills = $row['skills'];
                    $job_type = $row['jobType'];
                    $working = $row['working'];
                    $resultSkills = explode(',', $skills);
                    $logo = $row['logo'];
                    $date = $row['time'];
                    echo '<div class="w-100 my-4 shadow">
                    <div class="card card-img d-flex flex-row rounded-2 border-start border-end border-2" style="border: none; border-color:#fd7e14;">
                    <img width="100px" height="100px" class="m-3 rounded-2 shadow" src="https://graphicsfamily.com/wp-content/uploads/2020/08/Construction-Logo-Design-Free-psd-1180x787.jpg" alt="Company logo">
                    <div class="col-6 me-3">
                        <h1 class="fs-3 card-title pt-3 fw-bold m-0 text-primary" style="font-family: "Roboto Condensed", sans-serif;">'.$name.'</h2>
                        <div class="my-1">
                            <a href="#"  class="card-description text-info link-underline-primary">'.$job_type.'</a>
                            <a href="#"  class="card-description text-info link-underline-primary ms-4">'.$working.'</a>
                        </div>
                        <div class="attributes mt-4 d-flex flex-row">
                            <div class="atts text-center mx-2">
                                <p class="" style="font-size:13px; margin-bottom:0.5rem;">'.$resultSkills[0].'</p>
                            </div>
                            <div class="atts text-center mx-2">
                                <p class="" style="font-size:13px; margin-bottom:0.5rem;">'.$resultSkills[1].'</p>
                            </div>
                            <div class="atts text-center mx-2">
                                <p class="" style="font-size:13px; margin-bottom:0.5rem;">'.$resultSkills[2].'</p>
                            </div>
                        </div>
                        <hr class="my-1">
                        <p>Posted on:  '.$date.'</p>
                    </div>
                    <div class="border-start my-2 py-3 px-3 w-100 d-flex flex-column justify-content-between">
                        <div class="d-flex flex-row justify-content-between mb-2">
                            <div class="text-center">
                                <p margin-bottom:0px;">1,200 applicants</p>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary w-100">Apply &gt;</a>
                    </div>
                </div>';
                }
            ?>
        </div>
        </div>
    </div>
</body>
</html>