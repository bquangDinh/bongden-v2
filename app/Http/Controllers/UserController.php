<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Article;
use App\ArticleState;
use Auth;

class UserController extends Controller
{
    public function index(){
      return view('userpage.user_dashboard');
    }

    public function profile(){
      if(Auth::check()){
        return view('userpage.profile');
      }

      return "What ?";
    }

    public function show_editing_article($article_id){
      $article = Article::find($article_id);
      if(!$article){
        return view('userpage.page_404');
      }

      return view('userpage.user_updating_article')->with('article',$article);
    }

    public function showrule(){
      return view('userpage.user_writing_rules');
    }

    public function show_creating_article(){
      return view('userpage.user_creating_article');
    }

    public function getPageByPermission($permission){
      if($permission == "approve_article"){
        if(View::exists('userpage.special_action.approve_article')){
          return $this->getApprovePage();
        }
      }

      return view('userpage.page_404');
    }

    private function getApprovePage(){
      $articles = ArticleState::where('state',"upload")->get();
      return view('userpage.special_action.approve_article')->with('articles',$articles);
    }
}
