<?php require('includes/header.php'); 
require('includes/sidebar.php');

$active_user= $_SESSION['active_user'];
$student_id= $_SESSION['student_data']['student_ID'];
$full_name= $_SESSION['student_data']['full_name'];
$email= $_SESSION['student_data']['email'];

?>

<div class="container">
      <div class="row">
            <!-- ----= Done by: Ahmed Yusuf =---- -->
            <div class="dashboard-container col-12" style="">
                  <h2>Welcome, <span style="text-transform: uppercase;"><?php 
                        echo $full_name; ?></span>
                  </h2>
                  <div class="dashboard-text-container">

                        <div class="dashboard-text">
                              <h3>Student ID:</h3> <?php 
                        echo $active_user; ?>
                        </div>
                        <div class="dashboard-text">
                              <h3>College:</h3> College of Information Technology
                        </div>
                        <div class="dashboard-text">
                              <h3>Major:</h3> B.Sc. in Computer Science
                        </div>
                        <!-- <div class="dashboard-text">
                              <h3>Minor:</h3> --
                        </div> -->
                        <!-- <div class="dashboard-text">
                              <h3>Advisor:</h3> Dr.Ali Hassan Al-Safar
                        </div> -->
                        <div class="dashboard-text">
                              <h3>Registered CH:</h3> 15.00
                        </div>
                        <div class="dashboard-text">
                              <h3>Passed CH:</h3> 75.00 (56.8%)
                        </div>
                        <div class="dashboard-text">
                              <h3>Remaining CH:</h3> 57.00 (43.2%)
                        </div>
                        <div class="dashboard-text">
                              <h3>Enrollment Status:</h3> Enrolled
                        </div>
                        <div class="dashboard-text">
                              <h3>Academic Status:</h3> Excellence
                        </div>
                        <div class="dashboard-text">
                              <h3>CGPA:</h3> 4.00
                        </div>
                        <div class="dashboard-text">
                              <h3>MCGPA:</h3> 4.00
                        </div>
                  </div>
            </div>
      </div>
      <div class="row ">

            <div class="dashboard-container " style="width:68%; height: 30vh; margin-right:10px;">
                  <h2>Today's TimeTable</h2>

            </div>
            <div class="dashboard-container " style="width:30%; height: 30vh;">
                  <h2>Upcoming Events</h2>

            </div>
      </div>
      <div class="row">
            <!-- ----= Done by: Ahmed Yusuf =---- -->
            <div class="dashboard-container " style="width:100%; margin-right:10px;">
                  <h2>Attendence</h2>

                  <div class="circule-container-wrapper">
                        <div class="cirule-container">
                              <div class="circular-progress">
                                    <span class="progress-value">97.5%</span>
                              </div>
                              <span class="circule-text">
                                    <h3>ITCS489</h3>
                              </span>
                        </div>
                        <div class="cirule-container">
                              <div class="circular-progress">
                                    <span class="progress-value">97.5%</span>
                              </div>
                              <span class="circule-text">
                                    <h3>ITCS489</h3>
                              </span>
                        </div>
                        <div class="cirule-container">
                              <div class="circular-progress">
                                    <span class="progress-value">97.5%</span>
                              </div>
                              <span class="circule-text">
                                    <h3>ITCS489</h3>
                              </span>
                        </div>
                        <div class="cirule-container">
                              <div class="circular-progress">
                                    <span class="progress-value">97.5%</span>
                              </div>
                              <span class="circule-text">
                                    <h3>ITCE489</h3>
                              </span>
                        </div>
                        <div class="cirule-container">
                              <div class="circular-progress">
                                    <span class="progress-value">97.5%</span>
                              </div>
                              <span class="circule-text">
                                    <h3>ITCS489</h3>
                              </span>
                        </div>
                        <!-- <div class="cirule-container">
                              <div class="circular-progress">
                                    <span class="progress-value">90%</span>
                              </div>
                              <span class="circule-text">
                                    <h3>ITCS489</h3>
                              </span>
                        </div>
                        <div class="cirule-container">
                              <div class="circular-progress">
                                    <span class="progress-value">90%</span>
                              </div>
                              <span class="circule-text">
                                    <h3>ITCS489</h3>
                              </span>
                        </div> -->


                  </div>

            </div>
      </div>

</div>
<?php require('includes/footer.php'); ?>