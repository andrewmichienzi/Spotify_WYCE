<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    {{ $playlist->programmer }}
    <ul>
        @foreach($playlist->songs as $song)
        <li>
            {{-- /*song.blade.php*/ --}}
            <div class="box" style="border: solid 1px">
                <article class="media">
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>
     								{{ $song->track_title }}
     							</strong>
                                <br> Artist: {{ $song->artist }}
                                <br> Album: <small>{{ $song->album }}</small>
                            </p>
                        </div>
                        <nav class="level is-mobile">
                            <div class="level-left">
                                <a class="level-item">
                                    <span class="icon is-small"><i class="fa fa-reply"></i></span>
                                </a>
                                <a class="level-item">
                                    <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                                </a>
                                <a class="level-item">
                                    <span class="icon is-small"><i class="fa fa-heart"></i></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </article>
            </div>
        </li>
        @endforeach
    </ul>
</body>
