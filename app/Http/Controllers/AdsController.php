<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Ads;
use App\Ad;

class AdsController extends Controller
{

    public function __construct(){

        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index(Ads $ads)
    {

      $ads = $ads->all();
    	// $ads = Ad::latest()->get();

    	return view('ads.index', compact('ads'));
    }

    //Route model binding   do  Ad::find(wildcard)
    public function show(Ad $ad)
    {  

		//$ad = Ad::find($id);
		//return $ad;
		return view('ads.show', compact('ad'));
    }

        public function create()
    {  

		//$ad = Ad::find($id);
		//return $ad;
		return view('ads.create');
    }

    public function store()
    {

    	$this->validate(request(), [

    		'title' => 'required',
    		'content' => 'required',
    		'price' => 'required',
    		'location' => 'required'
    		]);


          //   	$ad = new Ad;

          // 		Ad::create([

          //   		'title'=>request('title'),
          //   		'content'=>request('content'),
          //   		'price'=>request('price'),
          //   		'location'=>request('location'),
          //           'user_id'=> auth()->id()
          // ]);

        auth()->user()->publish(

           new Ad(request(['title', 'content','price', 'location']))

        );

    	return redirect ('/');
    }
}
