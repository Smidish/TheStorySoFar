function play() {
        var audio = document.getElementById('audio');
        if (audio.paused) {
            audio.play();
            $('#play').removeClass('fa-play')
            $('#play').addClass('fa-pause')
        }else{
            audio.pause();
            audio.currentTime = 0
            $('#play').removeClass('fa-pause')
            $('#play').addClass('fa-play')
            
        }
    }
