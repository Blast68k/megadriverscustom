<!DOCTYPE html>
<html>
    <head>
        <title>Mega Driver Custom</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
        <style>

          .cover {
            margin:20px;
          }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <!-- Modal content-->
                @foreach ($md_soft_details as $game)
                        <h2>{!! $game->title_jp !!} </h2>
                        <h3>{{ $game->title_en }}</h3>
                      <div class="modal-body">
                        <dl class="dl-horizontal">
                          <dt>Catalog Nr.</dt>
                            <dd>{!! $game->catalog_nr !!}</dd>

                          <dt>Release Date</dt>
                            <dd>{!! $game->release_date !!}</dd>

                          <dt>Publisher (JP.)</dt>
                            <dd>{!! $game->publisher_jp !!}</dd>

                          <dt>Publisher</dt>
                            <dd>{!! $game->publisher_en !!}</dd>

                          <dt>Genre</dt>
                            <dd>{!! $game->genre !!}</dd>

                          <dt>Release Price</dt>
                            <dd>{!! $game->price !!}</dd>

                          <dt>ROM-Capacity</dt>
                            <dd>{!! $game->capacity !!}</dd>
                      </dl>
                      </div>

                      <div class="cover">
                        <?php 
                          $imgName = str_replace(" ", "_", strtolower($game->title_en));
                          $path = '../resources/assets/img/covers/'.$imgName.'.png';

                          echo '<img src="'.$path.'" width="500"/>';
                        ?>
                      </div>
               @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>