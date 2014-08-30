
var banners = ["images/slide-1.png","images/slide-2.png","images/slide-3.png"];
var bannerAtual = 0;

function trocaBanner() {
  bannerAtual = (bannerAtual + 1) % 2;
  document.querySelector('#slide img').src = banners[bannerAtual];
}

var timer = setInterval(trocaBanner, 6000);


var controle = document.querySelector('.pause');

controle.onclick = function() {
  if (controle.className == 'pause') {
    clearInterval(timer);
    controle.className = 'play';
  } else {
    timer = setInterval(trocaBanner, 6000);
    controle.className = 'pause';
  }

  return false;
};
