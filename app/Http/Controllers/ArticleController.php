<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ArticleService;
use App\Http\Services\PermissionService;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function index(){
      if(PermissionService::isThisUserHavePermission("write article") == false){
        return view('userpage.user_blank')->with('error','Bạn không đủ quyền để thực hiện tính năng này');
      }

      return view('userpage.user_creating_article');
    }

    public function getArticleList(){
      $articles = ArticleService::getAllArticleOfUser();
      return view('userpage.user_created_article')->with('articles',$articles);
    }

    public function create(ArticleRequest $request){
      if(PermissionService::isThisUserHavePermission("write article") == false){
        return view('userpage.user_blank')->with('error','Bạn không đủ quyền để thực hiện tính năng này');
      }

      $err = ArticleService::create($request);

      if($err == -1){
        return view('userpage.user_blank')->with('error','Cannot create article. Something gone wrong !');
      }

      return view('userpage.user_blank')->with('success','Create Article succeed !');
    }

    public function delete(Request $request){
      $article_id = $request->article_id;
      ArticleService::deleteByID($article_id);
      return 0;
    }

    public function getAdminDeletedInfo($article_id){
      $reason = ArticleService::getAdminDeletedInfo($article_id);
      return $reason;
    }

    public function showrule(){
      return view('userpage.user_writing_rules');
    }
}
