<?php


namespace App\classes;


class CareerTrack
{
    public $careerTrack=[];
    public function __construct()
    {
        $this->careerTrack=[
            0=>[
                'id'=>1,
                'title'=>'be your own boss',
                'totalCourseNumber'=>9,
                'icon'=>'assets/img/collection-1.png',
                'backgroundColor'=>'#EEC387',
            ],
            1=>[
                'id'=>2,
                'title'=>'certification exam',
                'totalCourseNumber'=>10,
                'icon'=>'assets/img/collection-2.png',
                'backgroundColor'=>'#79D9C7',
            ],
            2=>[
                'id'=>3,
                'title'=>'advance career',
                'totalCourseNumber'=>8,
                'icon'=>'assets/img/collection-3.png',
                'backgroundColor'=>'#FFA0A0',
            ],
            3=>[
                'id'=>4,
                'title'=>'introductory courses',
                'totalCourseNumber'=>8,
                'icon'=>'assets/img/collection-4.png',
                'backgroundColor'=>'#84CDF0',
            ],
            4=>[
                'id'=>5,
                'title'=>'wordpress',
                'totalCourseNumber'=>13,
                'icon'=>'assets/img/collection-1.png',
                'backgroundColor'=>'#EEC387',
            ],
            5=>[
                'id'=>6,
                'title'=>'business',
                'totalCourseNumber'=>14,
                'icon'=>'assets/img/collection-2.png',
                'backgroundColor'=>'#79D9C7',
            ],
            6=>[
                'id'=>7,
                'title'=>'design',
                'totalCourseNumber'=>8,
                'icon'=>'assets/img/collection-3.png',
                'backgroundColor'=>'#FFA0A0',
            ],
            7=>[
                'id'=>8,
                'title'=>'software development',
                'totalCourseNumber'=>12,
                'icon'=>'assets/img/collection-4.png',
                'backgroundColor'=>'#84CDF0',
            ],
        ];
    }
    public function getAllCareerTracks()
    {
        return $this->careerTrack;
    }
}