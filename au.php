<?php

$auhtml = '<audio id="track">
  <source src="'. $au .'" type="audio/mpeg" />
</audio>

<div style="  font-weight: bold;
 color:blue;" id="player-container">
  گوش کنید
  <div id="play-pause" class="play">پخش</div>

</div>
<style>
#player-container #play-pause {
 border-radius: 25px;
  cursor: pointer;
  text-indent: -999999px;
  height:40px;
  width: 40px;
  padding: 12px 18px;
  z-index: 2048;
    background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMiAyNHYtMjRsMjAgMTItMjAgMTJ6Ii8+PC9zdmc+);
    background-repeat: no-repeat!important;
    background-position: center;
    background-size: 16px;
  background-repeat:no-repeat;
  background-position:center;
  background-size:20px;
  background-color: gainsboro;
}
.play {
  background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMiAyNHYtMjRsMjAgMTItMjAgMTJ6Ii8+PC9zdmc+);
}
.pause {
   background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTAgMjRoLTZ2LTI0aDZ2MjR6bTEwLTI0aC02djI0aDZ2LTI0eiIvPjwvc3ZnPg==)!important;
}
</style>
<script>

var track = document.getElementById("track");

var controlBtn = document.getElementById("play-pause");

function playPause() {
    if (track.paused) {
        track.play();
        //controlBtn.textContent = "Pause";
        controlBtn.className = "pause";
    } else { 
        track.pause();
         //controlBtn.textContent = "Play";
        controlBtn.className = "play";
    }
}

controlBtn.addEventListener("click", playPause);
track.addEventListener("ended", function() {
  controlBtn.className = "play";
});
</script>';
