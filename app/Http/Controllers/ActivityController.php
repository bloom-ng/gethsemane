<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use App\Models\Member;

class ActivityController extends Controller
{
    
    public function index()
    {
        $activities = Page::paginate(12);
        return view('activities',['activities' => $activities,]);
    }

    public function show($slug)
    {
        $activity = Page::all()->where('slug','=',$slug)->first();
        $moreActivities = $this->getRandomPages(3);
        return view('activity',['activity'=>$activity,'more_activities'=>$moreActivities,]);
    }

    public function getRandomPages(int $number)
    {
        $pages = Page::inRandomOrder()->take($number)->get();
        return $pages;
    }
}
