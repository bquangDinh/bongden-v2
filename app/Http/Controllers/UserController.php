<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Article;
use App\ArticleState;
use Auth;
use App\Http\Services\FileService;
use App\Http\Requests\ChangingPasswordRequest;
use Illuminate\Support\Facades\Hash;

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

    public function changing_password_index(){
      if(Auth::check()){
        return view('userpage.changing_password');
      }

      return "What ?";
    }

    public function change_password(ChangingPasswordRequest $request){
      if(Auth::check()){
        $current_password = Auth::user()->password;
        if(Hash::check($request->current_password,$current_password)){
          $user = Auth::user();
          $user->password = Hash::make($request->new_password);
          $user->save();
          return view('userpage.user_blank')->with('success','Update password succeed');
        }else{
          return view('userpage.changing_password')->with('error','Please enter correct password');
        }
      }else{
        return redirect()->to('/');
      }
    }

    public function update_profile(Request $request){
      $filter_request = array_filter($request->all(),function($item_value){
        if($item_value == ""){
          return false;
        }
        return true;
      });
      Auth::user()->update($filter_request);
      return redirect()->back();
    }

    public function update_avatar_with_url(Request $request){
      $user = Auth::user();
      $user->avatar_path = $request->avatar_path;
      $user->save();
      return "success";
    }

    public function update_avatar_with_file(Request $request){
      $file = $request["avatar"];
      $image = FileService::upload_image($file);

      $user = Auth::user();
      $user->avatar_path = $image->image_path;
      $user->save();

      return $image->image_path;
    }

    public function show_notification(){
      return view('userpage.user_notification');
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
