<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomePageController extends Controller
{
    public function index(){
      $lastest_article = Article::orderBy('created_at','desc')->first();
      $articles = Article::where('id','<>',$lastest_article->id)->orderBy('created_at','desc')->take(6)->get();
      return view('trangchu')->with('lastest_article',$lastest_article)->with('articles',$articles);
    }
}
