import {hasCollided} from '../ts/types.js'

let player = document.querySelector('.player');
let moveBy = 20;

window.addEventListener('load', () => {
    player.style.position = 'absolute';
    // player.style.left = 0;
    // player.style.top = 0;
})

window.addEventListener("resize", () => {
    centerPlayerInDocument();
});

window.addEventListener('keydown', (e) => {
    switch (e.key) {
        case 'a':
            player.style.left = parseInt(player.style.left) - moveBy + 'px';
            break;
        case 'd':
            player.style.left = parseInt(player.style.left) + moveBy + 'px';
            break;
        case 'w':
            player.style.top = parseInt(player.style.top) - moveBy + 'px';
            break;
        case 's':
            player.style.top = parseInt(player.style.top) + moveBy + 'px';
            break;
    }
});

export const centerPlayerInDocument = () => {
    const extraPadding = 45;
    const playerHeight = player.offsetHeight + extraPadding;
    const horizontalPosition = document.body.offsetWidth / 2;
    const verticalPosition = document.body.offsetHeight - playerHeight;
    player.style.left = `${horizontalPosition}px`;
    player.style.top = `${verticalPosition}px`;
}

