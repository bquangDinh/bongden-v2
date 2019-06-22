<?php
namespace App\Http\Services;

use App\Tag;

class TagService{

    public static function addIfNotExist($tags){
      //this function will update any tag which not exist in tag table
      $tagIDs = array();

      $tags = array_unique($tags);
      foreach($tags as $tag){
        if(!is_numeric($tag)){
          //tag is invalid
          //means this tag is not exist in tag database
          //add it !
          $mytag = new Tag;
          $mytag->name = $tag;
          $mytag->save();
          array_push($tagIDs,$mytag->id);
          continue;
        }
        array_push($tagIDs,$tag);
      }

      return $tagIDs;
    }
}
