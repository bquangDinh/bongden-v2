<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Article;
use App\ArticleState;

class UserController extends Controller
{
    public function index(){
      return view('userpage.user_dashboard');
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
