<!DOCTYPE html>
<html>
    <head>
        <title>Mega Driver Custom</title>
         {!! Html::style('css/style.css') !!}
        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        
    </head>
    <body>
        <div class="container">

        <div class="logo">
            <a href="md-soft"><img src="../resources/assets/img/logo.png"/></a>
        </div>

            <div class="content main">
                <a href="login">login</a> <br/>
                
                <?php $counter = 0; ?>

                @foreach ($md_soft as $game)
                <?php 
                    $imgName = str_replace(" ", "_", strtolower($game->title_en));
                    $path = '../resources/assets/img/covers_th/th_'.$imgName.'.png';
                    if(file_exists($path)){
                       //echo '<a href="md-soft-details/'.$game->title_en.'" data-title="{{$game->title_en}}"><img src="'.$path.'"/></a>';
                       echo '<a href="#" data-title="'.$game->title_en.'" data-toggle="modal" data-target="#myModal"><img src="'.$path.'"/></a>';
                       if($counter == 5) { echo '<br/>'; $counter = 0; } 
                    } else {
                       echo '<img src="../resources/assets/img/covers_th/th_no_way.png"/>';
                       if($counter == 5) { echo '<br/>'; $counter = 0; }
                    }
                    $counter++;
                ?>
                @endforeach
                    <!-- {{ $game->title_en }} -->
                

                <!-- Pagination -->

            </div>

            <div id="pagination">
                {!! $md_soft->render() !!}
            </div>

            <div class="footer">
                © 2016 aiko68k | <a href="devlog">devlog</a>
            </div>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">

                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>
                </div>
                <!-- Modal -->

            
        </div>
    </body>

    <script>
    $("a[data-title]").click(function(){
        var title_en = $(this).data('title');
        $.get("{{url('/md-soft-details')}}" + '/' + title_en, function(html){
           $(".modal-content").html(html).show(); // set the html and show the modal
           $( "div.main" ).toggleClass( "content" );
        });
    });
    </script>
</html>