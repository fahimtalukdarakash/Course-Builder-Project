<?php


namespace App\classes;


class Demos
{
    public $demos = [];
    public function __construct()
    {
        $this->demos = [
            0=>[
                'id' =>1,
                'demo_list' => 'Demo Edu Institute'
            ],
            1=>[
                'id' =>2,
                'demo_list' => 'Demo Coursify'
            ],
            2=>[
                'id' =>3,
                'demo_list' => 'Demo eLearning ||'
            ],
            3=>[
                'id' =>4,
                'demo_list' => 'Demo Single Instructor'
            ],
            4=>[
                'id' =>5,
                'demo_list' => 'Demo Test Prep'
            ],
            5=>[
                'id' =>6,
                'demo_list' => 'Demo Corporate Learning'
            ],
            6=>[
                'id' =>7,
                'demo_list' => 'Demo Courses TechCamps'
            ],
            7=>[
                'id' =>8,
                'demo_list' => 'Demo RTL'
            ],
        ];
    }
    public function getAllDemoList()
    {
        return $this->demos;
    }
}