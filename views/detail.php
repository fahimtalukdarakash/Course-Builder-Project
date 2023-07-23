<?php include "header.php"; ?>
<section class="single_course_background">
    <div class="container">
        <div class="row">
            <?php foreach ($singleCourse as $course) { ?>
            <div class="col-lg-12 d-flex justify-content-center align-items-center">
                <div class="mt-200 mb-50">
                    <h1 class="text-white text-center"><?php echo $course['course_name']; ?></h1>
                    <p class="text-white text-center">LearnPress is the best WordPress Learning Management System and it comes with many great features. This is the best WPLMS theme available in the market.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-body bg-transparent border-0 rounded-0 mt-100">
                    <img src="<?php echo $course['image']; ?>" style="height: 600px; width: 100%;" class=""/>
                </div>
                <div class="row pe-4 pt-4 pb-4 border-bottom">
                    <div class="col border-end pe-3">
                        <img src="assets/img/teacher.webp" style="width: 75px; height: 75px; border-radius: 50%" class="ms-2">
                        <div class="float-end">
                            <p class="text-muted fs-5">Teacher</p>
                            <h5 class="text-uppercase"><?php echo $course['teacher']; ?></h5>
                        </div>
                    </div>
                    <div class="col border-end ps-3 pe-3">
                        <p class="text-muted fs-5">Categories</p>
                        <h5 class="text-uppercase fs-6"><?php for( $i=0;$i<count($course['group'])-1;$i++) { ?><?php echo $course['group'][$i].','; ?><?php } ?><?php echo $course['group'][count($course['group'])-1]?></h5>
                    </div>
                    <div class="col border-end ps-3 pe-3">
                        <p class="text-muted fs-5">Students</p>
                        <h5 class="text-uppercase"><?php echo $course['students']; ?></h5>
                    </div>
                    <div class="col border-end ps-3 pe-3">
                        <p class="text-muted fs-5">Starting Date</p>
                        <h5 class="text-uppercase"><?php echo $course['date']; ?></h5>
                    </div>
                    <div class="col border-end ps-3 pe-3">
                        <p class="text-muted fs-5">Price</p>
                        <h5 class="text-uppercase"><?php echo $course['price']; ?></h5>
                    </div>
                </div>
                <div class="row mt-4 pe-4">
                    <div class="col">
                        <h4>Course Description</h4>
                        <p class="text-muted fs-5">
                            <?php echo $course['course_description']; ?>
                        </p>
                    </div>
                </div>
                <div class="row mt-4 pe-4">
                    <div class="col">
                        <h4>Certification</h4>
                        <p class="text-muted fs-5">
                            <?php echo $course['certification']; ?>
                        </p>
                    </div>
                </div>
                <div class="row mt-4 pe-4">
                    <div class="col">
                        <h4>Learning Outcomes</h4>
                        <ul class="list-inline">
                            <?php foreach ($course['learning_outcomes'] as $learning_outcome) { ?>
                                <li class="py-2 fs-5"><span class="text-color">* </span><span class="text-muted"><?php echo $learning_outcome?></span></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="row mt-4 pe-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h2>Course Content</h2>
                            </div>
                            <div class="card-body">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <?php foreach ($course['course_content'] as $section=>$singleSection) { ?>
                                    <div class="accordion-item w-100">
                                        <h2 class="accordion-header bg-transparent">
                                            <button class="accordion-button btn" type="button" data-bs-toggle="collapse" data-bs-target="#content" aria-expanded="true" aria-controls="content" style="color: #7AD3C6;">
                                                <?php echo $section?>
                                            </button>
                                        </h2>
                                        <div id="content" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <ul class="list-inline">
                                                    <?php foreach ($singleSection as $content) { ?>
                                                        <?php if(strpos($content,'Quiz') !== false) { ?>
                                                            <li class="py-3 border-bottom fs-5"><i class="fa-regular fa-circle-question text-color me-2"></i><span class="text"><?php echo $content; ?></span></li>
                                                        <?php } else {?>
                                                            <li class="py-3 border-bottom fs-5"><i class="fa-regular fa-file text-color me-2"></i><span class="text"><?php echo $content; ?></span></li>
                                                        <?php }?>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>