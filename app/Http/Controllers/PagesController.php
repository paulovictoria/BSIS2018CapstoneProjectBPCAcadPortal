<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Event;
use App\Announcement;
use App\News;
class PagesController extends Controller
{

	public function choiceUser(){
		return view('choiceUser');
	}
	
	public function getIndex() {
		$events=Event::orderBy('id','desc')
		->limit(4)
		->get();
		$announcements=Announcement::orderBy('id','desc')
		->limit(4)
		->get();
		$newses=News::orderBy('id','desc')
		->limit(4)
		->get();
		return view('home')
		->withEvents($events)
		->withAnnouncements($announcements)
		->withNewses($newses);
	}
	public function eventSingle($id) {
		$event=Event::where('id','=',$id)->first();
		return view('pages.event')->withEvent($event);
	}
	public function newsSingle($id) {
		$morenewses=News::orderBy('id','desc')->limit(4)->get();
		$news=News::where('id','=',$id)->first();
		return view('pages.news')->withNews($news)->withMorenewses($morenewses);
	}
	public function announcementSingle($id) {
		$announcement=Announcement::where('id','=',$id)->first();
		return view('pages.announcement')->withAnnouncement($announcement);
	}	

	public function getsocialsImage($filename){
		$file=Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }

    public function eventMore() {
    	$moreevents=Event::orderBy('id','desc')
    	->limit(10)
    	->get();
    	return view('pages.moreEvent')->withMoreevents($moreevents);
    }	

    public function newsMore() {
    	$morenews=News::orderBy('id','desc')
    	->limit(10)
    	->get();
    	return view('pages.moreNews')->withMorenews($morenews);
    }

    public function announcementMore() {
    	$moreannouncements=Announcement::orderBy('id','desc')
    	->limit(10)
    	->get();
    	return view('pages.moreAnnouncement')->withMoreannouncements($moreannouncements);
    }
    
 }
