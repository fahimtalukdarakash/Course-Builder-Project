<?php


namespace App\classes;


class Courses
{
    public $courses = [], $course_list=[], $free_courses=[], $paid_courses=[], $courseNameList=[], $single_course=[];
    public function __construct()
    {
        $this->courses=[
            0=>[
                'id' => 1,
                'course_list' => 'Courses'
            ],
            1=>[
                'id' => 2,
                'course_list' => 'Free Access Courses'
            ],
            2=>[
                'id' => 3,
                'course_list' => 'Paid Courses'
            ],
            3=>[
                'id' => 4,
                'course_list' => 'Our Teachers'
            ],
            4=>[
                'id' => 5,
                'course_list' => 'Become an Instructor'
            ],
            5=>[
                'id' => 6,
                'course_list' => 'Collections'
            ],
            6=>[
                'id' => 7,
                'course_list' => 'Instructor Profile'
            ]
        ];
        $this->course_list=[
            0=>[
                'id'=>1,
                'course_name'=>'the ultimate ethical hacking',
                'date'=>'July 21,2022',
                'group'=>[
                    'business',
                    'be your own boss',
                    'certification exam'
                ],
                'teacher'=>'thimpress',
                'students'=>'148(registered)',
                'course_description'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'certification'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'image'=>'assets/img/1.jpg',
                'price'=>'Free',
                'learning_outcomes'=>[
                    'Over 37 lectures and 55.5 hours of content!',
                    'LIVE PROJECT End to End Software Testing Training Included.',
                    'Learn Software Testing and Automation basics from a professional trainer from your own desk.',
                    'Information packed practical training starting from basics to advanced testing techniques.',
                    'Best suitable for beginners to advanced level users and who learn faster when demonstrated.',
                    'Course content designed by considering current software testing technology and the job market.',
                    'Practical assignments at the end of every session.',
                    'Practical learning experience with live project work and examples.'
                ],
                'course_content'=>[
                    'Section 1'=>[
                        'A Note On Asking Gor Help',
                        'Introducing Our TA - Test Slider',
                        'Our Class Chat Room',
                        'Why This Course',
                        'Syllabus Download',
                        'Basic Quizzes 1',
                        'Basic Quizzes 2'
                    ],
                    'Section 2'=>[
                        'Unit Objectives - Big Video',
                        'Setting Up Front-End Developer Environment',
                        'Introduction to the Web',
                        'Final Quiz'
                    ],
                    'Section 3'=>[
                        'Unit Objectives - Big Video',
                        'Setting Up Front-End Developer Environment',
                        'Introduction to the Web',
                        'Final Quiz'
                    ]
                ]
            ],
            1=>[
                'id'=>2,
                'course_name'=>'affiliate marketing - a beginners guide',
                'date'=>'July 21,2022',
                'group'=>[
                    'business',
                    'design',
                    'be your own boss'
                ],
                'teacher'=>'thimpress',
                'students'=>'148(registered)',
                'course_description'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'certification'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'image'=>'assets/img/2.jpg',
                'price'=>'Free',
                'learning_outcomes'=>[
                    'Over 37 lectures and 55.5 hours of content!',
                    'LIVE PROJECT End to End Software Testing Training Included.',
                    'Learn Software Testing and Automation basics from a professional trainer from your own desk.',
                    'Information packed practical training starting from basics to advanced testing techniques.',
                    'Best suitable for beginners to advanced level users and who learn faster when demonstrated.',
                    'Course content designed by considering current software testing technology and the job market.',
                    'Practical assignments at the end of every session.',
                    'Practical learning experience with live project work and examples.'
                ],
                'course_content'=>[
                    'Section 1'=>[
                        'A Note On Asking Gor Help',
                        'Introducing Our TA - Test Slider',
                        'Our Class Chat Room',
                        'Why This Course',
                        'Syllabus Download',
                        'Basic Quizzes 1',
                        'Basic Quizzes 2'
                    ],
                    'Section 2'=>[
                        'Unit Objectives - Big Video',
                        'Setting Up Front-End Developer Environment',
                        'Introduction to the Web',
                        'Final Quiz'
                    ]
                ]
            ],
            2=>[
                'id'=>3,
                'course_name'=>'aws certified solutions architect - associate 2017',
                'date'=>'July 21,2022',
                'group'=>[
                    'software development',
                    'certification exam'
                ],
                'teacher'=>'thimpress',
                'students'=>'148(registered)',
                'course_description'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'certification'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'image'=>'assets/img/3.jpg',
                'price'=>'$ 33.00',
                'learning_outcomes'=>[
                    'Over 37 lectures and 55.5 hours of content!',
                    'LIVE PROJECT End to End Software Testing Training Included.',
                    'Learn Software Testing and Automation basics from a professional trainer from your own desk.',
                    'Information packed practical training starting from basics to advanced testing techniques.',
                    'Best suitable for beginners to advanced level users and who learn faster when demonstrated.',
                    'Course content designed by considering current software testing technology and the job market.',
                    'Practical assignments at the end of every session.',
                    'Practical learning experience with live project work and examples.'
                ],
                'course_content'=>[
                    'Section 1'=>[
                        'A Note On Asking Gor Help',
                        'Introducing Our TA - Test Slider',
                        'Our Class Chat Room',
                        'Why This Course',
                        'Syllabus Download',
                        'Basic Quizzes 1',
                        'Basic Quizzes 2'
                    ],
                    'Section 2'=>[
                        'Unit Objectives - Big Video',
                        'Setting Up Front-End Developer Environment',
                        'Introduction to the Web',
                        'Final Quiz'
                    ]
                ]
            ],
            3=>[
                'id'=>4,
                'course_name'=>'learnpress learning jquery mobile for beginners',
                'date'=>'July 21,2022',
                'group'=>[
                    'introductory courses',
                    'be your own boss'
                ],
                'teacher'=>'thimpress',
                'students'=>'148(registered)',
                'course_description'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'certification'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'image'=>'assets/img/4.jpg',
                'price'=>'Free',
                'learning_outcomes'=>[
                    'Over 37 lectures and 55.5 hours of content!',
                    'LIVE PROJECT End to End Software Testing Training Included.',
                    'Learn Software Testing and Automation basics from a professional trainer from your own desk.',
                    'Information packed practical training starting from basics to advanced testing techniques.',
                    'Best suitable for beginners to advanced level users and who learn faster when demonstrated.',
                    'Course content designed by considering current software testing technology and the job market.',
                    'Practical assignments at the end of every session.',
                    'Practical learning experience with live project work and examples.'
                ],
                'course_content'=>[
                    'Section 1'=>[
                        'A Note On Asking Gor Help',
                        'Introducing Our TA - Test Slider',
                        'Our Class Chat Room',
                        'Why This Course',
                        'Syllabus Download',
                        'Basic Quizzes 1',
                        'Basic Quizzes 2'
                    ],
                    'Section 2'=>[
                        'Unit Objectives - Big Video',
                        'Setting Up Front-End Developer Environment',
                        'Introduction to the Web',
                        'Final Quiz'
                    ]
                ]
            ],
            4=>[
                'id'=>5,
                'course_name'=>'the ultimate ethical hacking boot camp: begineer to pro',
                'date'=>'July 21,2022',
                'group'=>[
                    'business',
                    'design',
                    'software development'
                ],
                'teacher'=>'thimpress',
                'students'=>'148(registered)',
                'course_description'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'certification'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'image'=>'assets/img/5.jpg',
                'price'=>'Free',
                'learning_outcomes'=>[
                    'Over 37 lectures and 55.5 hours of content!',
                    'LIVE PROJECT End to End Software Testing Training Included.',
                    'Learn Software Testing and Automation basics from a professional trainer from your own desk.',
                    'Information packed practical training starting from basics to advanced testing techniques.',
                    'Best suitable for beginners to advanced level users and who learn faster when demonstrated.',
                    'Course content designed by considering current software testing technology and the job market.',
                    'Practical assignments at the end of every session.',
                    'Practical learning experience with live project work and examples.'
                ],
                'course_content'=>[
                    'Section 1'=>[
                        'A Note On Asking Gor Help',
                        'Introducing Our TA - Test Slider',
                        'Our Class Chat Room',
                        'Why This Course',
                        'Syllabus Download',
                        'Basic Quizzes 1',
                        'Basic Quizzes 2'
                    ],
                    'Section 2'=>[
                        'Unit Objectives - Big Video',
                        'Setting Up Front-End Developer Environment',
                        'Introduction to the Web',
                        'Final Quiz'
                    ]
                ]
            ],
            5=>[
                'id'=>6,
                'course_name'=>'the java spring tutorial: learn javas popular',
                'date'=>'July 21,2022',
                'group'=>[
                    'design'
                ],
                'teacher'=>'thimpress',
                'students'=>'148(registered)',
                'course_description'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'certification'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'image'=>'assets/img/1.jpg',
                'price'=>'Free',
                'learning_outcomes'=>[
                    'Over 37 lectures and 55.5 hours of content!',
                    'LIVE PROJECT End to End Software Testing Training Included.',
                    'Learn Software Testing and Automation basics from a professional trainer from your own desk.',
                    'Information packed practical training starting from basics to advanced testing techniques.',
                    'Best suitable for beginners to advanced level users and who learn faster when demonstrated.',
                    'Course content designed by considering current software testing technology and the job market.',
                    'Practical assignments at the end of every session.',
                    'Practical learning experience with live project work and examples.'
                ],
                'course_content'=>[
                    'Section 1'=>[
                        'A Note On Asking Gor Help',
                        'Introducing Our TA - Test Slider',
                        'Our Class Chat Room',
                        'Why This Course',
                        'Syllabus Download',
                        'Basic Quizzes 1',
                        'Basic Quizzes 2'
                    ],
                    'Section 2'=>[
                        'Unit Objectives - Big Video',
                        'Setting Up Front-End Developer Environment',
                        'Introduction to the Web',
                        'Final Quiz'
                    ]
                ]
            ],
            6=>[
                'id'=>7,
                'course_name'=>'ios app development essential training',
                'date'=>'July 21,2022',
                'group'=>[
                    'certification exam',
                    'advance career',
                    'software development'
                ],
                'teacher'=>'thimpress',
                'students'=>'148(registered)',
                'course_description'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'certification'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'image'=>'assets/img/2.jpg',
                'price'=>'Free',
                'learning_outcomes'=>[
                    'Over 37 lectures and 55.5 hours of content!',
                    'LIVE PROJECT End to End Software Testing Training Included.',
                    'Learn Software Testing and Automation basics from a professional trainer from your own desk.',
                    'Information packed practical training starting from basics to advanced testing techniques.',
                    'Best suitable for beginners to advanced level users and who learn faster when demonstrated.',
                    'Course content designed by considering current software testing technology and the job market.',
                    'Practical assignments at the end of every session.',
                    'Practical learning experience with live project work and examples.'
                ],
                'course_content'=>[
                    'Section 1'=>[
                        'A Note On Asking Gor Help',
                        'Introducing Our TA - Test Slider',
                        'Our Class Chat Room',
                        'Why This Course',
                        'Syllabus Download',
                        'Basic Quizzes 1',
                        'Basic Quizzes 2'
                    ],
                    'Section 2'=>[
                        'Unit Objectives - Big Video',
                        'Setting Up Front-End Developer Environment',
                        'Introduction to the Web',
                        'Final Quiz'
                    ]
                ]
            ],
            7=>[
                'id'=>8,
                'course_name'=>'complete java masterclass',
                'date'=>'July 21,2022',
                'group'=>[
                    'advance career',
                    'software development'
                ],
                'teacher'=>'thimpress',
                'students'=>'148(registered)',
                'course_description'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'certification'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'image'=>'assets/img/3.jpg',
                'price'=>'Free',
                'learning_outcomes'=>[
                    'Over 37 lectures and 55.5 hours of content!',
                    'LIVE PROJECT End to End Software Testing Training Included.',
                    'Learn Software Testing and Automation basics from a professional trainer from your own desk.',
                    'Information packed practical training starting from basics to advanced testing techniques.',
                    'Best suitable for beginners to advanced level users and who learn faster when demonstrated.',
                    'Course content designed by considering current software testing technology and the job market.',
                    'Practical assignments at the end of every session.',
                    'Practical learning experience with live project work and examples.'
                ],
                'course_content'=>[
                    'Section 1'=>[
                        'A Note On Asking Gor Help',
                        'Introducing Our TA - Test Slider',
                        'Our Class Chat Room',
                        'Why This Course',
                        'Syllabus Download',
                        'Basic Quizzes 1',
                        'Basic Quizzes 2'
                    ],
                    'Section 2'=>[
                        'Unit Objectives - Big Video',
                        'Setting Up Front-End Developer Environment',
                        'Introduction to the Web',
                        'Final Quiz'
                    ]
                ]
            ],
            8=>[
                'id'=>9,
                'course_name'=>'the complete sql bootcamp',
                'date'=>'July 21,2022',
                'group'=>[
                    'software development'
                ],
                'teacher'=>'thimpress',
                'students'=>'148(registered)',
                'course_description'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'certification'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'image'=>'assets/img/4.jpg',
                'price'=>'Free',
                'learning_outcomes'=>[
                    'Over 37 lectures and 55.5 hours of content!',
                    'LIVE PROJECT End to End Software Testing Training Included.',
                    'Learn Software Testing and Automation basics from a professional trainer from your own desk.',
                    'Information packed practical training starting from basics to advanced testing techniques.',
                    'Best suitable for beginners to advanced level users and who learn faster when demonstrated.',
                    'Course content designed by considering current software testing technology and the job market.',
                    'Practical assignments at the end of every session.',
                    'Practical learning experience with live project work and examples.'
                ],
                'course_content'=>[
                    'Section 1'=>[
                        'A Note On Asking Gor Help',
                        'Introducing Our TA - Test Slider',
                        'Our Class Chat Room',
                        'Why This Course',
                        'Syllabus Download',
                        'Basic Quizzes 1',
                        'Basic Quizzes 2'
                    ],
                    'Section 2'=>[
                        'Unit Objectives - Big Video',
                        'Setting Up Front-End Developer Environment',
                        'Introduction to the Web',
                        'Final Quiz'
                    ]
                ]
            ],
            9=>[
                'id'=>10,
                'course_name'=>'the web developer bootcamp',
                'date'=>'July 21,2022',
                'group'=>[
                    'software development',
                    'wordpress'
                ],
                'teacher'=>'thimpress',
                'students'=>'148(registered)',
                'course_description'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'certification'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'image'=>'assets/img/5.jpg',
                'price'=>'$ 200.00',
                'learning_outcomes'=>[
                    'Over 37 lectures and 55.5 hours of content!',
                    'LIVE PROJECT End to End Software Testing Training Included.',
                    'Learn Software Testing and Automation basics from a professional trainer from your own desk.',
                    'Information packed practical training starting from basics to advanced testing techniques.',
                    'Best suitable for beginners to advanced level users and who learn faster when demonstrated.',
                    'Course content designed by considering current software testing technology and the job market.',
                    'Practical assignments at the end of every session.',
                    'Practical learning experience with live project work and examples.'
                ],
                'course_content'=>[
                    'Section 1'=>[
                        'A Note On Asking Gor Help',
                        'Introducing Our TA - Test Slider',
                        'Our Class Chat Room',
                        'Why This Course',
                        'Syllabus Download',
                        'Basic Quizzes 1',
                        'Basic Quizzes 2'
                    ],
                    'Section 2'=>[
                        'Unit Objectives - Big Video',
                        'Setting Up Front-End Developer Environment',
                        'Introduction to the Web',
                        'Final Quiz'
                    ]
                ]
            ],
            10=>[
                'id'=>11,
                'course_name'=>'become a better photographer (pro)',
                'date'=>'July 21,2022',
                'group'=>[
                    'business',
                    'advance career'
                ],
                'teacher'=>'thimpress',
                'students'=>'148(registered)',
                'course_description'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'certification'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'image'=>'assets/img/1.jpg',
                'price'=>'$ 10.00',
                'learning_outcomes'=>[
                    'Over 37 lectures and 55.5 hours of content!',
                    'LIVE PROJECT End to End Software Testing Training Included.',
                    'Learn Software Testing and Automation basics from a professional trainer from your own desk.',
                    'Information packed practical training starting from basics to advanced testing techniques.',
                    'Best suitable for beginners to advanced level users and who learn faster when demonstrated.',
                    'Course content designed by considering current software testing technology and the job market.',
                    'Practical assignments at the end of every session.',
                    'Practical learning experience with live project work and examples.'
                ],
                'course_content'=>[
                    'Section 1'=>[
                        'A Note On Asking Gor Help',
                        'Introducing Our TA - Test Slider',
                        'Our Class Chat Room',
                        'Why This Course',
                        'Syllabus Download',
                        'Basic Quizzes 1',
                        'Basic Quizzes 2'
                    ],
                    'Section 2'=>[
                        'Unit Objectives - Big Video',
                        'Setting Up Front-End Developer Environment',
                        'Introduction to the Web',
                        'Final Quiz'
                    ]
                ]
            ],
            11=>[
                'id'=>12,
                'course_name'=>'build responsive website with html5',
                'date'=>'July 21,2022',
                'group'=>[
                    'design',
                    'software development'
                ],
                'teacher'=>'thimpress',
                'students'=>'148(registered)',
                'course_description'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'certification'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'image'=>'assets/img/2.jpg',
                'price'=>'Free',
                'learning_outcomes'=>[
                    'Over 37 lectures and 55.5 hours of content!',
                    'LIVE PROJECT End to End Software Testing Training Included.',
                    'Learn Software Testing and Automation basics from a professional trainer from your own desk.',
                    'Information packed practical training starting from basics to advanced testing techniques.',
                    'Best suitable for beginners to advanced level users and who learn faster when demonstrated.',
                    'Course content designed by considering current software testing technology and the job market.',
                    'Practical assignments at the end of every session.',
                    'Practical learning experience with live project work and examples.'
                ],
                'course_content'=>[
                    'Section 1'=>[
                        'A Note On Asking Gor Help',
                        'Introducing Our TA - Test Slider',
                        'Our Class Chat Room',
                        'Why This Course',
                        'Syllabus Download',
                        'Basic Quizzes 1',
                        'Basic Quizzes 2'
                    ],
                    'Section 2'=>[
                        'Unit Objectives - Big Video',
                        'Setting Up Front-End Developer Environment',
                        'Introduction to the Web',
                        'Final Quiz'
                    ]
                ]
            ],
            12=>[
                'id'=>13,
                'course_name'=>'wordpress bootstrap theme development',
                'date'=>'July 21,2022',
                'group'=>[
                    'advance career',
                    'wordpress'
                ],
                'teacher'=>'thimpress',
                'students'=>'148(registered)',
                'course_description'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'certification'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'image'=>'assets/img/3.jpg',
                'price'=>'$ 10.00',
                'learning_outcomes'=>[
                    'Over 37 lectures and 55.5 hours of content!',
                    'LIVE PROJECT End to End Software Testing Training Included.',
                    'Learn Software Testing and Automation basics from a professional trainer from your own desk.',
                    'Information packed practical training starting from basics to advanced testing techniques.',
                    'Best suitable for beginners to advanced level users and who learn faster when demonstrated.',
                    'Course content designed by considering current software testing technology and the job market.',
                    'Practical assignments at the end of every session.',
                    'Practical learning experience with live project work and examples.'
                ],
                'course_content'=>[
                    'Section 1'=>[
                        'A Note On Asking Gor Help',
                        'Introducing Our TA - Test Slider',
                        'Our Class Chat Room',
                        'Why This Course',
                        'Syllabus Download',
                        'Basic Quizzes 1',
                        'Basic Quizzes 2'
                    ],
                    'Section 2'=>[
                        'Unit Objectives - Big Video',
                        'Setting Up Front-End Developer Environment',
                        'Introduction to the Web',
                        'Final Quiz'
                    ]
                ]
            ],
            13=>[
                'id'=>14,
                'course_name'=>'the art of black and white photography',
                'date'=>'July 21,2022',
                'group'=>[
                    'business',
                    'design',
                    'introductory courses'
                ],
                'teacher'=>'thimpress',
                'students'=>'148(registered)',
                'course_description'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'certification'=>'If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and increase sales as well.',
                'image'=>'assets/img/4.jpg',
                'price'=>'$ 10.00',
                'learning_outcomes'=>[
                    'Over 37 lectures and 55.5 hours of content!',
                    'LIVE PROJECT End to End Software Testing Training Included.',
                    'Learn Software Testing and Automation basics from a professional trainer from your own desk.',
                    'Information packed practical training starting from basics to advanced testing techniques.',
                    'Best suitable for beginners to advanced level users and who learn faster when demonstrated.',
                    'Course content designed by considering current software testing technology and the job market.',
                    'Practical assignments at the end of every session.',
                    'Practical learning experience with live project work and examples.'
                ],
                'course_content'=>[
                    'Section 1'=>[
                        'A Note On Asking Gor Help',
                        'Introducing Our TA - Test Slider',
                        'Our Class Chat Room',
                        'Why This Course',
                        'Syllabus Download',
                        'Basic Quizzes 1',
                        'Basic Quizzes 2'
                    ],
                    'Section 2'=>[
                        'Unit Objectives - Big Video',
                        'Setting Up Front-End Developer Environment',
                        'Introduction to the Web',
                        'Final Quiz'
                    ]
                ]
            ],
        ];
    }
    public function getAllCourseList()
    {
        return $this->courses;
    }
    public function getAllCourseNameList()
    {
        return $this->course_list;
    }
    public function getCategoryCourses($group_name)
    {
        foreach($this->course_list as $course)
        {
            foreach ($course['group'] as $courseGroup)
            {
                if($courseGroup==$group_name)
                {
                    array_push($this->courseNameList,$course);
                }
            }
        }
        return $this->courseNameList;
    }
    public function getSingleCourse($course_name)
    {
        foreach ($this->course_list as $course)
        {
            if($course['course_name']==$course_name)
            {
                array_push($this->single_course,$course);
            }
        }
        return $this->single_course;
    }
    public function getFreeCourses()
    {
        foreach ($this->course_list as $course)
        {
            if($course['price']=='Free')
            {
                array_push($this->free_courses,$course);
            }
        }
        return $this->free_courses;
    }
    public function getPaidCourses()
    {
        foreach ($this->course_list as $course)
        {
            if($course['price']=='Free')
            {
                continue;
            }
            else
            {
                array_push($this->paid_courses,$course);
            }
        }
        return $this->paid_courses;
    }
}