<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Salon;
use App\Service;
use App\Report;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


use Carbon\Carbon;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salons = Salon::all();
        $services = Service::orderBy('order','desc')->orderBy('created_at','desc')->get();
        $promotions = Post::where('category_id',2)->orderBy('priority','desc')->orderBy('created_at','desc')->take(4)->get();
        $blogs = Post::where('category_id',1)->orderBy('priority','desc')->orderBy('created_at','desc')->take(4)->get();
        $videos = Post::where('category_id',3)->orderBy('priority','desc')->orderBy('created_at','desc')->get();
        $tvs = Post::where('category_id',4)->orderBy('priority','desc')->orderBy('created_at','desc')->get();

        return view('front.index',['salons'=>$salons,'services'=>$services,'promotions'=>$promotions,'blogs'=>$blogs,'videos'=>$videos,'tvs'=>$tvs]);

    }
    public function booking()
    {
        $salons = Salon::all();
        $services = Service::all();
        return view('front.booking',['salons'=>$salons,'services'=>$services]);

    }
    public function news()
    {
        $posts= Post::where('category_id',1)->orderBy('priority','desc')->orderBy('created_at', 'desc')->paginate(5);
        $favoritePosts = Post::where('category_id',1)->inRandomOrder()->take(2)->get();
        return view('front.news',['posts'=>$posts,'favoritePosts'=>$favoritePosts]);

    }
    public function timeline ($strDate,$salon_id)
    {
       // $reports = array();
        $reports = Report::whereDate('scheduled_at', '=', $strDate)->where('status',0)->where('salon_id',$salon_id)->get();
        $times = array();
        $fixes = array("08:30","09:00","09:30","10:00","10:30","11:00","11:30","12:00","12:30","13:00","13:30","14:00","14:30","15:00","15:30","16:00","16:30","17:00","17:30","18:00","18:30","19:00");
        $now = Carbon::now("Asia/Ho_Chi_Minh");
        if ($now->format('Y-m-d') == $strDate) {
            $carbon = new Carbon();
            foreach ($fixes as $fix) {
                if( $fix <= $now->format('H:i')){
                  array_push($times,$fix);
                }
            }
        }
        foreach ($reports as $report){
            array_push($times, $report->scheduled_at->format('H:i'));
        }
        return view('front.layout.timeline',['reports'=>$reports,'times'=>$times,'fixes'=>$fixes]);
    }
    public function news_detail(Post $post)
    {
        $relatedPosts = Post::where('category_id',$post->category_id)->inRandomOrder()->take(3)->get();
        $favoritePosts = Post::where('category_id',$post->category_id)->inRandomOrder()->take(3)->get();

        return view('front.news_detail',['post'=>$post,'relatedPosts'=>$relatedPosts,'favoritePosts'=>$favoritePosts]);

    }
    public function promotion_detail(Post $post)
    {
        $relatedPosts = Post::where('category_id',$post->category_id)->inRandomOrder()->take(3)->get();
        $favoritePosts = Post::where('category_id',$post->category_id)->inRandomOrder()->take(3)->get();

        return view('front.promotion_detail',['post'=>$post,'relatedPosts'=>$relatedPosts,'favoritePosts'=>$favoritePosts]);

    }
    public function promotion()
    {
        $posts= Post::where('category_id',2)->orderBy('priority','desc')->orderBy('created_at', 'desc')->paginate(5);
        $favoritePosts = Post::where('category_id',2)->inRandomOrder()->take(2)->get();

        return view('front.promotion',['posts'=>$posts,'favoritePosts'=>$favoritePosts]);

    }
    public function service()
    {
        $services = Service::orderBy('order','desc')->orderBy('created_at','desc')->get();
        return view('front.service',['services'=>$services]);

    }
    public function maintenance(){
        return view('front.maintenance');
    }

}
