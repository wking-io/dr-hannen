import '../css/home.css';

function handleVideoComplete() {
  const videoParent = document.querySelector('.hero-video');
  if (videoParent) {
    videoParent.setAttribute('data-video-state', 'complete');
  }
}

const video = document.getElementById('hero-video');
if (video) {
  video.addEventListener('ended', handleVideoComplete, false);
}
