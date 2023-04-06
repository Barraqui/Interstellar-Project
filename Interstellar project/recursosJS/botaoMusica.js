const player = document.getElementById('audio');
let tocando = false;

const play = () => {
    if(tocando){
        player.pause();
        taTocando.innerHTML

    } else {
        player.play();
        taTocando.innerHTML
    }

    tocando = !tocando;
}
