import { centerPlayerInDocument } from "../js/player.js";
export interface Point {
    x: number;
    y: number;
}

type PositionType = 'back' | ' right' | 'left' | 'up' | 'inspect'; 

export interface Collider {
    position?: PositionType;
    topLeft: Point;
    topRight: Point;
    bottomLeft: Point;
    bottomRight: Point;
}

export interface Location {
    id: number; //identificar de la imagen en sí. va a servir para buscar mi location con el id
    imageName: string; //nombre de la imagen que representa este estado
    back?: number;
    right?: number;
    left?: number;
    up?: number;
    inspect?: number;
    colliders?: Collider[];
}

export interface Game {
    locationList: Location[]; //un array de mis graphs
    selectedLocation: number; //id de la lacation actual. lo único que tengo que hacer es cambiar esto para avanzar en el juego
}

const game:Game = {
    locationList:
    [
        {
            id:0,
            imageName: '../images/imagen0.png',
            back: undefined,
            right: undefined,
            left: undefined,
            up: 1,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 300,
                        x: 420
                    },
                    topRight: {
                        y: 300,
                        x: 620
                    },
                    bottomLeft: {
                        y: 500,
                        x: 420
                    },
                    bottomRight: {
                        y: 500,
                        x: 620
                    }
                }
            ]
        },
        {
            id:1,
            imageName: '../images/imagen1.png',
            back: 0,
            right: undefined,
            left: undefined,
            up: 2,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 300,
                        x: 785
                    },
                    topRight: {
                        y: 300,
                        x: 985
                    },
                    bottomLeft: {
                        y: 500,
                        x: 785
                    },
                    bottomRight: {
                        y: 500,
                        x: 985
                    }
                },
                {
                    topLeft: {
                        y: 735,
                        x: 110
                    },
                    topRight: {
                        y: 735,
                        x: 1125
                    },
                    bottomLeft: {
                        y: 745,
                        x: 110
                    },
                    bottomRight: {
                        y: 745,
                        x: 1125
                    }
                }
            ]
        },
        {
            id:2,
            imageName: '../images/imagen2.png',
            back: 1,
            right: undefined,
            left: undefined,
            up: 3,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 360,
                        x: 400
                    },
                    topRight: {
                        y: 360,
                        x: 880
                    },
                    bottomLeft: {
                        y: 560,
                        x: 400
                    },
                    bottomRight: {
                        y: 560,
                        x: 880
                    }
                },
                {
                    topLeft: {
                        y: 735,
                        x: 110
                    },
                    topRight: {
                        y: 735,
                        x: 1125
                    },
                    bottomLeft: {
                        y: 745,
                        x: 110
                    },
                    bottomRight: {
                        y: 745,
                        x: 1125
                    }
                }
            ]
        },
        {
            id:3,
            imageName: '../images/imagen3.png',
            back: 2,
            right: 12,
            left: 4,
            up: 14,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 735,
                        x: 110
                    },
                    topRight: {
                        y: 735,
                        x: 1125
                    },
                    bottomLeft: {
                        y: 745,
                        x: 110
                    },
                    bottomRight: {
                        y: 745,
                        x: 1125
                    }
                }
            ]
        },
        {
            id:4,
            imageName: '../images/imagen4.png',
            back: 3,
            right: 6,
            left: 5,
            up: undefined,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:5,
            imageName: '../images/imagen5.png',
            back: 4,
            right: undefined,
            left: undefined,
            up: undefined,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:6,
            imageName: '../images/imagen6.png',
            back: 4,
            right: 7,
            left: 11,
            up: 10,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:7,
            imageName: '../images/imagen7.png',
            back: 6,
            right: undefined,
            left: undefined,
            up: 8,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:8,
            imageName: '../images/imagen8.png',
            back: 7,
            right: undefined,
            left: undefined,
            up: 9,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:9,
            imageName: '../images/imagen9.png',
            back: 8,
            right: undefined,
            left: undefined,
            up: undefined,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:10,
            imageName: '../images/imagen10.png',
            back: 6,
            right: undefined,
            left: undefined,
            up: undefined,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:11,
            imageName: '../images/imagen11.png',
            back: 6,
            right: undefined,
            left: undefined,
            up: undefined,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:12,
            imageName: '../images/imagen12.png',
            back: 3,
            right: undefined,
            left: undefined,
            up: 13,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:13,
            imageName: '../images/imagen13.png',
            back: 12,
            right: undefined,
            left: undefined,
            up: undefined,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:14,
            imageName: '../images/imagen14.png',
            back: 3,
            right: 21,
            left: undefined,
            up: 15,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:15,
            imageName: '../images/imagen15.png',
            back: 14,
            right: undefined,
            left: 16,
            up: 17,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:16,
            imageName: '../images/imagen16.png',
            back: 15,
            right: undefined,
            left: undefined,
            up: undefined,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:17,
            imageName: '../images/imagen17.png',
            back: 15,
            right: 20,
            left: 18,
            up: 19,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:18,
            imageName: '../images/imagen18.png',
            back: 17,
            right: undefined,
            left: undefined,
            up: undefined,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:19,
            imageName: '../images/imagen19.png',
            back: 17,
            right: undefined,
            left: undefined,
            up: undefined,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:20,
            imageName: '../images/imagen20.png',
            back: 17,
            right: undefined,
            left: undefined,
            up: undefined,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:21,
            imageName: '../images/imagen21.png',
            back: 14,
            right: undefined,
            left: undefined,
            up: 22,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:22,
            imageName: '../images/imagen22.png',
            back: 21,
            right: undefined,
            left: undefined,
            up: 23,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                },
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        },
        {
            id:23,
            imageName: '../images/imagen23.png',
            back: 22,
            right: undefined,
            left: undefined,
            up: undefined,
            inspect: undefined,
            colliders: [
                {
                    topLeft: {
                        y: 319,
                        x: 479
                    },
                    topRight: {
                        y: 319,
                        x: 572
                    },
                    bottomLeft: {
                        y: 507,
                        x: 479
                    },
                    bottomRight: {
                        y: 507,
                        x: 572
                    }
                }
            ]
        }
    ],
    selectedLocation: 0
}

const getKeyInput2 = (key: { keyCode: any; }) => {
    let inputKey = key.keyCode;
    if(inputKey >= 37 && inputKey <= 40){
        if (inputKey === 39 && game.locationList[game.selectedLocation].right != undefined) {
            game.selectedLocation = game.locationList[game.selectedLocation].right!
            setSelectedImage();
        }
        else if (inputKey === 40 && game.locationList[game.selectedLocation].back != undefined){
            game.selectedLocation = game.locationList[game.selectedLocation].back!
            setSelectedImage();
        }
        else if (inputKey === 38 && game.locationList[game.selectedLocation].up != undefined){
            game.selectedLocation = game.locationList[game.selectedLocation].up!
            setSelectedImage();
        }
        else if (inputKey === 37 && game.locationList[game.selectedLocation].left != undefined){
            game.selectedLocation = game.locationList[game.selectedLocation].left!
            setSelectedImage();
        }
    }
}

const getKeyInput = (inputKey: any) => {
    if(inputKey === 68 || inputKey === 83 || inputKey === 87 || inputKey === 65){
        if (inputKey === 68 && game.locationList[game.selectedLocation].right != undefined) {
            game.selectedLocation = game.locationList[game.selectedLocation].right!
            setSelectedImage();
        }
        else if (inputKey === 83 && game.locationList[game.selectedLocation].back != undefined){
            game.selectedLocation = game.locationList[game.selectedLocation].back!
            setSelectedImage();
        }
        else if (inputKey === 87 && game.locationList[game.selectedLocation].up != undefined){
            game.selectedLocation = game.locationList[game.selectedLocation].up!
            setSelectedImage();
        }
        else if (inputKey === 65 && game.locationList[game.selectedLocation].left != undefined){
            game.selectedLocation = game.locationList[game.selectedLocation].left!
            setSelectedImage();
        }
    }
}

const getInput = (key: { keyCode: any; }) => {
    const tecla: { keyCode: any; } = key.keyCode;
    return tecla;
}

const getSelectedLocationImagePath = (): string => {
    const selectedLocation = getSelectedLocation();
    return `../images/${selectedLocation?.imageName}`;
}

const setSelectedImage = () => {
    const path = getSelectedLocationImagePath();
    const body = document.querySelector("body");
    if(body){
        body.style.backgroundImage = `url("${path}")`;
    }
}

const getSelectedLocation = () => {
    const selectedId = game.selectedLocation;
    const selectedLocation = game.locationList.find((location) => location.id === selectedId);
    return selectedLocation;
}

// const goBack = () =>{
//     const selectedId = game.selectedLocation;
//     const selectedLocation = game.locationList.find((location)=>location.id === selectedId); //nos dice en qué objeto estamos rn
//     const goBackLocation = selectedLocation?.back; //estado futuro, lo que va a hacer a continuación
//     if(goBackLocation != undefined){
//         game.selectedLocation = goBackLocation;
//     }
// }

interface Interval {
    min: number;
    max: number;
}

const isOverlappedInterval = (interval1: Interval, interval2: Interval): boolean => {
    if(interval1.min <= interval2.min && interval2.min <= interval1.max) {
        return true;
    }
    if(interval1.min <= interval2.max && interval2.max <= interval1.max) {
        return true;
    }
    return false;
}

const hasCollidedHorizontally = (point1: Point, point2: Point, player: any): boolean => {
    const leftPoint = point1.x;
    const rightPoint = point2.x;

    const playerLeftPoint = player.offsetLeft;
    const playerRightPoint = playerLeftPoint + player.offsetWidth;

    const result = isOverlappedInterval({min: leftPoint, max: rightPoint}, {min: playerLeftPoint, max: playerRightPoint});
    return result;
}

const hasCollidedVertically = (point1: Point, point2: Point, player: any): boolean => {
    const leftPoint = point1.y;
    const rightPoint = point2.y;

    const playerLeftPoint = player.offsetTop;
    const playerRightPoint = playerLeftPoint + player.offsetHeight;

    return isOverlappedInterval({min: leftPoint, max: rightPoint}, {min: playerLeftPoint, max: playerRightPoint});
}

export const hasCollided = (e: any) => {
    const player = document.querySelector('.player');
    const location = getSelectedLocation();
    // const keyInput: any = document.addEventListener("keydown", getInput);
    // console.log(e.keyCode)
    location?.colliders?.forEach((collider) => {
        if(collider && player){
            const horizontalCollition = hasCollidedHorizontally(collider.topLeft, collider.topRight, player);
            const verticalCollition = hasCollidedVertically(collider.topLeft, collider.bottomLeft, player);
            if( horizontalCollition && verticalCollition ){
                console.log('He colisionado');
                getKeyInput(e.keyCode);
                // console.log("El key input es: " + keyInput);
                // document.addEventListener('keydown', getKeyInput);
                centerPlayerInDocument();
            }
        }
    });
}

document.addEventListener("keydown", hasCollided);
// document.addEventListener("keydown", getKeyInput2);

const initialize = () => {
    setSelectedImage();
    centerPlayerInDocument();
};

initialize();