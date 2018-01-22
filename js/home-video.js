Modernizr.on('videoautoplay', function(result) {
  var videoSrc = '/wp-content/themes/atlantic-cruising-yachts/media/CA-FINAL-Homepage-051517.mp4';
  var wrapper = document.getElementById('home-video');

  if (result) {
    var video = document.createElement('video');
    video.loop = true;
    video.autoplay = true;
    video.src = videoSrc;
    wrapper.appendChild(video);
  }
});

window.addEventListener('load', function() {
  document.getElementsByTagName('body')[0].classList.add('loaded');
});
