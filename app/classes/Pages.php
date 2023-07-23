<?php


namespace App\classes;


class Pages
{
    public $pages = [];
    public function __construct()
    {
        $this->pages = [
            0=>[
                'id' => 1,
                'page_list' => 'BLog'
            ],
            1=>[
                'id' => 2,
                'page_list' => 'Membership'
            ],
            2=>[
                'id' => 3,
                'page_list' => 'Landing Page'
            ],
            3=>[
                'id' => 4,
                'page_list' => 'Forums'
            ],
            4=>[
                'id' => 5,
                'page_list' => 'Events'
            ],
            5=>[
                'id' => 6,
                'page_list' => 'Shop'
            ],
            6=>[
                'id' => 7,
                'page_list' => 'Gallery'
            ],
            7=>[
                'id' => 8,
                'page_list' => 'Account'
            ],
            8=>[
                'id' => 9,
                'page_list' => 'Portfolio'
            ]
        ];
    }
    public function getAllPageList()
    {
        return $this->pages;
    }
}