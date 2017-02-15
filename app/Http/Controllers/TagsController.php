<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {
    	$ads = $tag->ads;

    	return view('ads.index',compact('ads'));
    }
}
