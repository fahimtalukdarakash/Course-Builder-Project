<?php include "header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach($courseNameList as $courseName) { ?>
            <div class="col-md-4 mb-5">
                <div class="card border-0 rounded-0 bg-transparent position-relative overflow-hidden category-card">
                    <img src="<?php echo $courseName['image'];?>" class="category-course-image"/>
                    <div class="position-absolute" style="width: 120px; height: 50px; background-color: white; bottom: 33.5%; color: #7AD3C6">
                        <p class="text-center fs-3"><?php echo $courseName['price']; ?></p>
                    </div>
                    <div class="card-body mt-3" style="height: 100px;">
                        <a href="action.php?page=detail&course_name=<?php echo $courseName['course_name']; ?>" class="text-decoration-none text-dark"><h5 class="text-uppercase"><?php echo $courseName['course_name']?></h5></a>
                        <p class="text-muted"><?php echo $courseName['date']; ?></p>
                    </div>
                    <div class="card-footer bg-transparent border-0 rounded-0">
                        <a href="action.php?page=detail&course_name=<?php echo $courseName['course_name']; ?>" class="text-decoration-none text-dark"><button class="btn btn-3">Detail</button></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
