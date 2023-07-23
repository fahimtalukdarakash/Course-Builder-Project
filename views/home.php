<?php include "header.php"; ?>
<section class="hero-section mb-100">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col h-100">
                <div class="card card-body bg-transparent rounded-0 text-center h-100 w-100 position-relative border-0">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 mb-400" style="z-index: 999;">
                        <h3>Create and sell your</h3>
                        <h2>Own beautiful online courses</h2>
                        <div class="d-flex hero-section-search-bar w-75 bg-white align-items-center">
                            <input type="search" class="form-control ps-3 h-100 border-0" placeholder="What do you want to learn today?" style="outline:none; border-radius: 60px 0 0 60px">
                            <button class="btn btn-2 me-2" style="outline:none;">Search</button>
                        </div>
                    </div>
                    <img src="assets/img/header-search.png" class="position-absolute bottom-0 hero-section-img"/>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="card card-body border-0 rounded-0">
                    <img src="assets/img/img-1.png" alt=""/>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card card-body border-0 rounded-0 py-5">
                    <h3 class="mb-3 mt-5">Welcome to</h3>
                    <h2 class="mb-3">Course Builder Kit</h2>
                    <p class="mb-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A, rem, vero? Debitis dicta dignissimos dolores ducimus non odio quo ratione rem reprehenderit voluptatem?
                        Ad asperiores, atque autem itaque molestias reiciendis?
                    </p>
                    <button class="btn btn-3 mt-3" style="outline:none;">View All</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slider-section pb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mb-5">
                <h1>Top Categories</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusamus aliquid, <br/>blanditiis consequuntur dolore eligendi incidunt nihil porro quibusdam quod, <br/>repellat saepe similique veniam voluptas.
                </p>
            </div>
        </div>
        <div class="slider">
            <div class="owl-carousel">
                <?php foreach($careerTracks as $careerTrack) { ?>
                    <?php if($careerTrack['id']%2!=0) { ?>
                        <div class="slider-card" style="background-color: <?php echo $careerTrack['backgroundColor']; ?>;">
                            <a href="action.php?page=category&group_name=<?php echo $careerTrack['title']; ?>" class="text-decoration-none"><h4 class="mt-4 mb-3 fs-5"><?php echo $careerTrack['title']; ?></h4></a>
                            <p><?php echo $careerTrack['totalCourseNumber']; ?> Courses</p>
                            <!--                        <div class="slider-card-div position-relative">-->
                            <img src="assets/img/bl-collection.png" class="mt-60 slider-card-background-image"/>
                            <img src="<?php echo $careerTrack['icon']; ?>" class="icon position-absolute"/>
                            <!--                        </div>-->
                        </div>
                    <?php } else { ?>
                       <div class="slider-card mt-5" style="background-color: <?php echo $careerTrack['backgroundColor']; ?>;">
                            <a href="action.php?page=category&group_name=<?php echo $careerTrack['title']; ?>" class="text-decoration-none"><h4 class="mt-4 mb-3 fs-5"><?php echo $careerTrack['title']; ?></h4></a>
                            <p><?php echo $careerTrack['totalCourseNumber']; ?> Courses</p>
                            <!--                        <div class="slider-card-div position-relative">-->
                            <img src="assets/img/bl-collection.png" class="mt-60 slider-card-background-image"/>
                            <img src="<?php echo $careerTrack['icon']; ?>" class="icon position-absolute"/>
                            <!--                        </div>-->
                        </div>

                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="skill">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 my-auto">
                <div class="card card-body border-0 bg-transparent rounded-0">
                    <h3>Trusted by thousands</h3>
                    <h2>of Educators in the World</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Commodi cum doloribus ducimus error expedita,
                        facere facilis fugiat nobis, quisquam ratione rem sequi similique veritatis?
                        Dolorum explicabo molestiae porro tempore ut!
                    </p>
                    <img src="assets/img/skill.png" class="mt-3"/>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6" style="min-height: 100vh; display: grid; place-items: center;">
                <div class="parent">
                    <img src="assets/img/counter-center.png" alt=""/>
                    <div class="circle">
                        <h4 class="fw-bold fs-1" id="num1" style="color: #3EDDBF;">1200</h4>
                        <p class="fw-bold">Products</p>
                    </div>
                    <div class="circle">
                        <h4 class="fw-bold fs-1" id="num2" style="color: #F77474;">1500</h4>
                        <p class="fw-bold">Teachers</p>
                    </div>
                    <div class="circle">
                        <h4 class="fw-bold fs-1" id="num3" style="color: #5CC4F6;">2000</h4>
                        <p class="fw-bold">Students</p>
                    </div>
                    <div class="circle">
                        <h4 class="fw-bold fs-1" id="num4" style="color: #F8C780;">1000</h4>
                        <p class="fw-bold">Courses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-body border-0 rounded-0 bg-transparent text-center">
                    <h1>OUR TOP COURSES</h1>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Alias animi at cum doloribus enim eveniet,
                        exercitationem explicabo fuga ipsum maiores minima pariatur quo
                        reiciendis repudiandae sit ut veniam voluptatem, voluptates?
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                <?php $i=1;?>
                <?php foreach($courseNameList as $courseName) { ?>
                    <?php if($i<=6) {?>
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
                        <?php $i++; ?>
                    <?php } else {?>
                        <?php break; ?>
                    <?php } ?>
                <?php } ?>
                <div class="d-flex justify-content-center align-items-center w-100">
                    <a href="action.php?page=all_courses" class="text-decoration-none text-dark"><button class="btn btn-1" style="width: 200px;">View All Courses</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
