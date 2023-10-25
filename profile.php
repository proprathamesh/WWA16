<?php
    require "./Partials/connection.php";
    if (!isset($_SESSION['email'])) {
        header("location : ./login.php");
    }
    session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Partials/css/profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="background-color: red !important;">
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mb-sm-5">
                    <div class="card card-style1 border-0">
                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <img src="/profile.png" alt="...">
                                </div>
                                <div class="col-lg-6 px-xl-10">
                                    <div class="custom_orange_bg d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                        <h3 class="h2 text-white mb-0">Kriti Verma</h3>
                                    </div>
                                    <ul class="list-unstyled mb-1-9">
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26  me-2 font-weight-600">Position:</span> Coach</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26  me-2 font-weight-600">Experience:</span> 10 Years</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26  me-2 font-weight-600">Email:</span> edith@mail.com</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26  me-2 font-weight-600">Website:</span> www.example.com</li>
                                        <li class="display-28"><span class="display-26  me-2 font-weight-600">Phone:</span> 5075414567</li>
                                    </ul>
                                    <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                        <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                        <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4 mb-sm-5">
                    <div>
                        <span class="section-title text-color mb-3 mb-sm-4">About Me</span>
                        <p>Edith is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 mb-4 mb-sm-5">
                            <div class="mb-4 mb-sm-5">
                                <span class="section-title text-color mb-3 mb-sm-4">Skill</span>
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6">HTML</div>
                                        <div class="col-6 text-end">80%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                    <div class="animated custom-bar progress-bar slideInLeft custom_orange_bg" style="width:80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" role="progressbar"></div>
                                </div>
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6">CSS</div>
                                        <div class="col-6 text-end">90%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                    <div class="animated custom-bar progress-bar slideInLeft custom_orange_bg" style="width:90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                </div>
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6">JavaScript</div>
                                        <div class="col-6 text-end">50%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress progress-medium mb-3 " style="height: 4px;">
                                    <div class="animated custom-bar progress-bar slideInLeft custom_orange_bg" style="width:50%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                </div>
                                <div class="progress-text">
                                    <div class="row">
                                        <div class="col-6">PHP</div>
                                        <div class="col-6 text-end">60%</div>
                                    </div>
                                </div>
                                <div class="custom-progress progress progress-medium" style="height: 4px;">
                                    <div class="animated custom-bar progress-bar slideInLeft custom_orange_bg" style="width:60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar"></div>
                                </div>
                            </div>
                            <div>
                                <span class="section-title text-color mb-3 mb-sm-4">Education</span>
                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                <p class="mb-1-9">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>