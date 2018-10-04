
@extends('pages.layouts.app')


@section('content')

<!-- Popular articles and newest -->

 <?php
  $trendArticles =  $posts->sortByDesc('views');
  $firstTrendArticle  =  $trendArticles[0];
  $secondTrendArticle =  $trendArticles[1];
  $thirdTrendArticle  =  $trendArticles[2];

  $firstTrendArticleUrl  = http_build_query( array('titel' =>$firstTrendArticle->titleDeutsch,'id'=>$firstTrendArticle->id));
  $secondTrendArticleUrl = http_build_query( array('titel' =>$secondTrendArticle->titleDeutsch,'id'=>$secondTrendArticle->id));
  $thirdTrendArticleUrl  = http_build_query( array('titel' =>$thirdTrendArticle->titleDeutsch,'id'=>$thirdTrendArticle->id));


   $newestArticles =  $posts->sortBy('created_at');
   $firstNewArticle = $newestArticles[0];
   $secondNewArticle = $newestArticles[1];
   $thirdNewArticle = $newestArticles[2];

   $firstNewArticleUrl  = http_build_query( array('titel' =>$firstNewArticle->titleDeutsch,'id'=>$firstNewArticle->id));
   $secondNewArticleUrl = http_build_query( array('titel' =>$secondNewArticle->titleDeutsch,'id'=>$secondNewArticle->id));
   $thirdNewArticleUrl  = http_build_query( array('titel' =>$thirdNewArticle->titleDeutsch,'id'=>$thirdNewArticle->id));


 ?>
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <!-- Load the three most clicked articles. How do i do? Brauch id für den Artikel-->
        <div class="row">
          <h1> Beliebteste Beiträge </h1>
          <div class="col-lg-4">
            <img class="img-circle" src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fkaspri.de%2Fmedia%2Fimage%2F67%2Fa8%2F8a%2Fvegan1.png&f=1" alt="Generic placeholder image" width="140" height="140">
            <a href="article/?<?php echo $firstTrendArticleUrl;?>"><h2> {{$firstTrendArticle->titleDeutsch}}</h2></a>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>

          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <a href="article/?<?php echo $secondTrendArticleUrl;?>"> <h2>{{$secondTrendArticle->titleDeutsch}}</h2></a>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>

          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <a href="article/?<?php echo $thirdTrendArticleUrl;?>"> <h2>{{$thirdTrendArticle->titleDeutsch}}</h2></a>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES
            Neuste Beiträge-->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <a href="article/?<?php echo $firstNewArticleUrl;?>"><h2 class="featurette-heading">{{$firstNewArticle->titleDeutsch}}</h2></a>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE2NWU5NGJkYTc3IHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTY1ZTk0YmRhNzciPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg1LjEzMzMzMTI5ODgyODEyIiB5PSIyNjEuMSI+NTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 col-md-push-5">
            <a href="article/?<?php echo $secondNewArticleUrl;?>"><h2 class="featurette-heading">{{$secondNewArticle->titleDeutsch}}</h2></a>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE2NWU5NGMwMTJiIHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTY1ZTk0YzAxMmIiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg1LjEzMzMzMTI5ODgyODEyIiB5PSIyNjEuMSI+NTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <a href="article/?<?php echo $thirdNewArticleUrl;?>"><h2 class="featurette-heading">{{$thirdNewArticle->titleDeutsch}}</h2></a>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE2NWU5NGJiMmRlIHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTY1ZTk0YmIyZGUiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg1LjEzMzMzMTI5ODgyODEyIiB5PSIyNjEuMSI+NTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->


        <!-- FOOTER -->
        <footer>
          <p class="pull-right"><a href="#">Back to top</a></p>
          <p>© 2016 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>

      </div><!-- /.container -->
@endsection
