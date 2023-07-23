<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course builder</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/all.css"/>
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>"/>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a href="action.php?page=home" class="navbar-brand"><img src="assets/img/logo-kit.png"/></a>
            <ul class="navbar-nav">
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle nav-listItem" data-bs-toggle="dropdown">Demos<i class="fa-solid fa-chevron-down ms-2"></i></a>
                    <ul class="dropdown-menu">
                        <?php foreach ($demos as $demo){ ?>
                            <li><a href="" class="dropdown-item"><?php echo $demo['demo_list']; ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li><a href="action.php?page=about" class="nav-link nav-listItem">About</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle nav-listItem" data-bs-toggle="dropdown">Courses<i class="fa-solid fa-chevron-down ms-2"></i></a>
                    <ul class="dropdown-menu">
                        <?php foreach ($courses as $course){ ?>
                            <?php if($course['course_list']=='Free Access Courses') { ?>
                                <li><a href="action.php?page=free_courses" class="dropdown-item"><?php echo $course['course_list']; ?></a></li>
                            <?php } elseif($course['course_list']=='Paid Courses') { ?>
                                <li><a href="action.php?page=paid_courses" class="dropdown-item"><?php echo $course['course_list']; ?></a></li>
                                <?php } else {?>
                                <li><a href="" class="dropdown-item"><?php echo $course['course_list']; ?></a></li>
                                <?php }?>
                        <?php } ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle nav-listItem" data-bs-toggle="dropdown">Pages<i class="fa-solid fa-chevron-down ms-2"></i></a>
                    <ul class="dropdown-menu">
                        <?php foreach ($pages as $page){ ?>
                            <li><a href="" class="dropdown-item"><?php echo $page['page_list']; ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li><a href="action.php?page=contact" class="nav-link nav-listItem">Contact</a></li>
            </ul>
            <div>
                <a href="" class="text-decoration-none me-3 nav-listItem"><i class="fa-solid fa-user me-2"></i>Log in</a>
                <button class="btn btn-1">BUY COURSE</button>
            </div>
        </div>
    </nav>
</header>