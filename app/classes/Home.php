<?php


namespace App\classes;
use App\classes\Demos;
use App\classes\Courses;
use App\classes\Pages;
use App\classes\CareerTrack;
class Home
{
    public $demo, $demos=[], $course, $courses=[], $page, $pages=[],$careerTrack, $careerTracks=[], $courseNameList=[],$singleCourse=[];
    public $freeCourses=[], $paidCourses=[];
    public function __construct()
    {
        $this->demo=new Demos();
        $this->demos=$this->demo->getAllDemoList();
        $this->course=new Courses();
        $this->courses=$this->course->getAllCourseList();
        $this->courseNameList=$this->course->getAllCourseNameList();
        $this->page=new Pages();
        $this->pages=$this->page->getAllPageList();
        $this->careerTrack = new CareerTrack();
        $this->careerTracks = $this->careerTrack->getAllCareerTracks();
    }

    public function index()
    {
        return view('home', ['demos'=>$this->demos, 'courses'=>$this->courses, 'pages'=>$this->pages, 'careerTracks'=>$this->careerTracks, 'courseNameList'=>$this->courseNameList]);
    }
    public function categoryByGroup($group_name)
    {
        $this->course= new Courses();
        $this->courseNameList=$this->course->getCategoryCourses($group_name);
        return view('category', ['demos'=>$this->demos, 'courses'=>$this->courses, 'pages'=>$this->pages, 'courseNameList'=>$this->courseNameList]);
    }
    public function singleCourseDetail($course_name)
    {
        $this->course = new Courses();
        $this->singleCourse = $this->course->getSingleCourse($course_name);
        return view('detail',['demos'=>$this->demos, 'courses'=>$this->courses, 'pages'=>$this->pages,'singleCourse'=>$this->singleCourse]);
    }

    public function freeCourses()
    {
        $this->course = new Courses();
        $this->freeCourses = $this->course->getFreeCourses();
        return view('freeCourses',['demos'=>$this->demos, 'courses'=>$this->courses, 'pages'=>$this->pages,'freeCourses'=>$this->freeCourses]);
    }
    public function paidCourses()
    {
        $this->course = new Courses();
        $this->paidCourses = $this->course->getPaidCourses();
        return view('paidCourses',['demos'=>$this->demos, 'courses'=>$this->courses, 'pages'=>$this->pages,'paidCourses'=>$this->paidCourses]);
    }
    public function allCourses()
    {
        return view('allCourses', ['demos'=>$this->demos, 'courses'=>$this->courses, 'pages'=>$this->pages, 'courseNameList'=>$this->courseNameList]);
    }
}