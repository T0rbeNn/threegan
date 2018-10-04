@extends('pages.layouts.app')
use App\Post;<!--Hier kommt die Artikel Seite rein-->
<section>
  <div class="row">
   <div class="col-md-6 col-md-offset-3" style="background-color:#F5F5F5" align="center">
     <br>
     <br>
     <br>

     <?php
    //$trendArticles =  $posts->where('id', '=', ???)->get();
    $query = explode('&',$_SERVER['QUERY_STRING'] );

    $titleQuery  = explode('=',$query[1]);

    echo "hier  ";
    $post1 = $posts -> find($titleQuery);
    echo "da";
    echo gettype($post1);
    echo "Danach:";
    $post  =  $posts -> where('id', '=', $titleQuery[1])->pluck('bodyDeutsch');
    echo $res = preg_replace("/[^a-zA-Z0-9\s]/", "", $post);
    $views =  $posts -> where('id', '=', $titleQuery[1])->pluck('views');
    $withoutBrackets = trim($views, '[]');
    echo intval(gettext($withoutBrackets));
    $views = intval(gettext($withoutBrackets)) + 1;
    echo $views;
    $post1 -> views = $views;
  //  $post1 -> update();
  //  echo  $posts -> where('titleDeutsch', '=', $titleQuery[1]);
    //echo $post->bodyDeutsch;
  //  echo $titleQuery[1];
    //echo $posts -> where('$posts->titleDeutsch', '=', '$titleQuery[1]')->get();

    //maybe use explode to divide query
    // Need to get the views
    //increment views and save in database
    ?>



 </div>
 </div>
</section>
