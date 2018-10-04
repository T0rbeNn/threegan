@extends('pages.layouts.app')
@section('content')
 <div class="row">
  <div class="col-md-6 col-md-offset-3" style="background-color:#F5F5F5" align="center">

  @if(count($posts)>=1)

    @foreach($posts as $post)

          <h1>{{$post->titleDeutsch}}</h1>
          <p><?php echo nl2br($post->bodyDeutsch, true); ?></p>
          <p><img src={{$post->imgLink}} alt={{$post->altText}}></p>

          <?php $tagArray = explode(',',$post->tags);
                $countArray = count($tagArray);
           ?>
           <p>
             @if(count($tagArray)>=1)
               @foreach($tagArray as $tag)
                 <a href="<?php echo $tag;?>"><?php echo $tag;
                                                $countArray--;
                                                if($countArray>0)
                                                  echo ",";?></a>


               @endforeach
             @endif
           </p>
    @endforeach
  @else
    <br>
    <p> No posts found </p>
  @endif
</div>
</div>
@endsection
