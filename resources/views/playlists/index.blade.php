<!DOCTYPE html>
<html lang="en">

<head>
    <title>WYCE Playlist</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>

<body>

        <div class="container">
            <playlists lists="{{ json_encode($playlists) }}"></playlists>
        </div>

        <template id="playlists-template">
        <ul class="list-group" v-for="playlist in lists">
        @{{ playlist.programmer }}
            <div class="playlist" style="border: 1px solid;">
                <li class="list-group-item" v-for="song in playlist">
                    <div class="box" style="border: solid 1px">
                        <div class="content">
                            <p>
                                <strong>
                                    @{{ song.track_title }}
                                </strong>
                                <br> Artist: @{{ song.artist }}
                                <br> Album: <small>@{{ song.album }}</small>
                            </p>
                        </div>
                    </div>
                </li>
            </div>
        </ul>
        </template>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.8/vue.js"></script>
        <script src="/js/main.js"></script>
</body>
</html>
