// Grab a handle to the video
var video = document.getElementById("video");
// Turn off the default controls
//  video.controls = false;
// function togglePlayPause() {
//   var playpause = document.getElementById("playpause");
//   if (video.paused || video.ended) {
//     playpause.title = "pause";
//     playpause.innerHTML = "pause";
//     video.play();
//   } else {
//     playpause.title = "play";
//     playpause.innerHTML = "play";
//     video.pause();
//   }
// }
// function setVolume() {
//   var volume = document.getElementById("volume");
//   video.volume = volume.value;
// }
// function toggleMute() {
//   video.muted = !video.muted;
// }
// function updateProgress() {
//   var progress = document.getElementById("progress");
//   var value = 0;
//   if (video.currentTime > 0) {
//     value = Math.floor((100 / video.duration) * video.currentTime);
//   }
//   progress.style.width = value + "%";
// }

// function resetPlayer() {
//   var playpause = document.getElementById("playpause");
//   playpause.title = "play";
//   playpause.innerHTML = "play";
//   if (video.currentTime > 0) video.currentTime = 0;
//   updateProgress();
// }

// adding play list
function playlistClick(file) {
  var v = document.createElement("video");
  if (v.canPlayType("video/mp4") != "") {
    changeSource(file + ".mp4");
  } else if (v.canPlayType("video/webm") != "") {
    changeSource(file + ".webm");
  }

  return false;
}

function changeSource(src) {
  //   resetPlayer();
  video.src = src;
  video.load();
}

jQuery(function($) {
  var $window = $(window); // 1. Window Object.
  var $featuredMedia = $("#featured-media"); // 1. The Video Container.
  var $featuredVideo = $("#featured-video"); // 2. The Youtube Video.

  var player; // 3. Youtube player object.
  var top = $featuredMedia.offset().top; // 4. The video position from the top of the document;
  var offset = Math.floor(top + $featuredMedia.outerHeight() / 2); //5. offset.

  window.onYouTubeIframeAPIReady = function() {
    player = new YT.Player("featured-video", {
      events: {
        onStateChange: onPlayerStateChange
      }
    });
  };

  function onPlayerStateChange(event) {
    var isPlay = 1 === event.data;
    var isPause = 2 === event.data;
    var isEnd = 0 === event.data;

    if (isPlay) {
      $featuredVideo.removeClass("is-paused");
      $featuredVideo.toggleClass("is-playing");
    }

    if (isPause) {
      $featuredVideo.removeClass("is-playing");
      $featuredVideo.toggleClass("is-paused");
    }

    if (isEnd) {
      $featuredVideo.removeClass("is-playing", "is-paused");
    }
  }

  $window
    .on("resize", function() {
      top = $featuredMedia.offset().top;
      offset = Math.floor(top + $featuredMedia.outerHeight() / 2);
    })

    .on("scroll", function() {
      $featuredVideo.toggleClass(
        "is-sticky",
        $window.scrollTop() > offset && $featuredVideo.hasClass("is-playing")
      );
    });
});
