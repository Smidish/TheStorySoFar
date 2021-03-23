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

    function switchPic(){
        var pic1 = document.getElementById('person_img');
        var pic2 = document.getElementById('img_2');
        var input = document.getElementById('answer');
        var btn_next = document.getElementById('btn_riddle');
        var btn_input = document.getElementById('btn_input');
        var btn_play = document.getElementById('play');

        pic1.style.display = "none";
        btn_play.style.display = "none";
        btn_next.style.display = "none";

        pic2.style.display = "block";
        input.style.display = "block";
        btn_input.style.display = "block";
    }
