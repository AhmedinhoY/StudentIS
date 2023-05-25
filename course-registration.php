<?php require('includes/student-header.php');
require('includes/sidebar.php'); 
require('includes/student-sessions.php'); ?>

<?php

require('includes/student-sessions.php');

try {
      require('includes/connection.php');
      $sql_query= " select * from studentInfo where studentID = '$student_id' ";
      $rs= $db->query($sql_query);
      $row= $rs->fetch();

      $offerd_courses_query= "select course.courseID
      FROM course
      JOIN studentClassroom ON course.`pre-requisite` = studentClassroom.courseID
      WHERE NOT EXISTS (
          SELECT 1
          FROM studentClassroom
          WHERE studentClassroom.courseID = course.courseID
          AND studentClassroom.studentID = '$student_id'
      )";
      $offerd_courses_rs= $db->query($offerd_courses_query);

      $sections_query= "select courseTiming.courseID, staff.fullName, courseTiming.section, classroom.room,
      courseTiming.lecturesDay, courseTiming.lecturesTime, courseTiming.examDate, courseTiming.examTime
      FROM courseTiming 
            LEFT JOIN staff ON courseTiming.instructorID = staff.staffID 
            LEFT JOIN classroom ON courseTiming.classroomID = classroom.classroomID
      WHERE courseTiming.courseID= 'ITCS489' AND courseTiming.year = 2023 AND courseTiming.semester= 2 ";
      $sections_rs= $db->query($sections_query);



} catch (PDOException $e) {
  die("error: " . $e->getMessage());
}

?>

<div class="container">

      <div class="outer-div">
            <div class="inner-div">
                  <div class="div-header">
                        <h2>Course Registration</h2>
                        <!-- <button class="close-button" onclick="closeForm()">&times;</button> -->
                  </div>
                  <div class="divs-wrapper" style="display: flex; margin:auto;">
                        <div class="inner-inner-div" style="width: 30%; overflow-y: auto; margin-right:15px">

                              <h2>Offered Courses</h2>

                              <form action="">
                                    <?php foreach ($offerd_courses_rs as $row) { ?>
                                    <button type="button" class="form-btn2" value="<?php echo $row[0] ?>"
                                          onclick="showSections(this.value)">
                                          <?php echo $row[0] ?> </button>
                                    <?php } ?>
                              </form>

                        </div>
                        <div class="inner-inner-div" style="width: 40%; overflow-y: auto; margin-right:15px;">

                              <form method="post" action="">

                                    <h2>Sections</h2>
                                    <div class="sections" id="sections-list" style="">


                                    </div>
                              </form>
                        </div>
                        <div class="inner-inner-div" style="width: 30%; overflow-y: auto;">

                              <h2>Section Details</h2>
                              <div class="sections" id="section-details" style="">

                              </div>
                        </div>

                  </div>

            </div>

      </div>
</div>

<!--end of container-->
<?php require('includes/footer.php'); ?>