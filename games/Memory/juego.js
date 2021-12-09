document.addEventListener('DOMContentLoaded', () => {
    const cartas = [ //array con imagenes del memory
        {
            name: 'Monitor',
            img: './img/Monitor.png'
        },
        {
            name: 'Raton',
            img: './img/Raton.png'
        },
        {
            name: 'Codigo',
            img: './img/Codigo.png'
        },
        {
            name: 'Lenguaje',
            img: './img/Lenguaje.png'
        },
        {
            name: 'Pc',
            img: './img/Pc.png'
        },
        {
            name: 'Logo',
            img: './img/Logo.png'
        },
        {
            name: 'Monitor',
            img: './img/Monitor.png'
        },
        {
            name: 'Raton',
            img: './img/Raton.png'
        },
        {
            name: 'Codigo',
            img: './img/Codigo.png'
        },
        {
            name: 'Lenguaje',
            img: './img/Lenguaje.png'
        },
        {
            name: 'Pc',
            img: './img/Pc.png'
        },
        {
            name: 'Logo',
            img: './img/Logo.png'
        },
        {
            name: 'Ethernet',
            img: './img/Ethernet.png'
        },
        {
            name: 'wifi',
            img: './img/wifi.png'
        },
        {
            name: 'Portatil',
            img: './img/Portatil.png'
        },
        {
            name: 'Ethernet',
            img: './img/Ethernet.png'
        },
        {
            name: 'wifi',
            img: './img/wifi.png'
        },
        {
            name: 'Portatil',
            img: './img/Portatil.png'
        }
    ]


    cartas.sort(() => 0.5 - Math.random()); //random para que te salgan las cartas aleatorias
    const card = [];
    const grid = document.querySelector('.grid');
    const resultado = document.querySelector('#resultado');
    const tempo = document.querySelector('#tempo');
    const acabo = document.querySelector('#acabo');
    let victoria = true;
    let cartaEscogida = [];
    let cartaEscogidaId = [];
    let cartasGanadas = [];
    const opcionId1 = cartaEscogidaId[0];
    const opcionId2 = cartaEscogidaId[1];
    let seg;


    function crearTablero() { //creo el tablero con cartas 
        for (let i = 0; i < cartas.length; i++) {
            let carta = document.createElement('img');
            carta.setAttribute('src', './img/carta_detras.png');
            carta.setAttribute('data-id', i);
            card[i]=i;
            carta.draggable = false;
            carta.addEventListener('click', transicion);
            grid.appendChild(carta);
        }
        
    }
    crearTablero();
    temporizador();
    setInterval(moverCartas,3200);
    
    function coincide() {//funcion que comprueba si la primera carta seleccionada es igual que la segunda si coincide cambia la imagen a blanco y sube el score, si no se vuelve a voltear la carta 
        let carta = document.querySelectorAll('img');
        const opcionId1 = cartaEscogidaId[0];
        const opcionId2 = cartaEscogidaId[1];
        if (cartaEscogida[0] === cartaEscogida[1]) {
            //aviso de acierto
            carta[opcionId1].style.visibility = 'hidden';
            carta[opcionId2].style.visibility = 'hidden';
            cartasGanadas.push(cartaEscogida);
            
        } else {
            if (carta[opcionId1] !== "'src','./img/blanco.png'" || carta[opcionId2] !== "'src','./img/blanco.png'") {
                carta[opcionId1].style.transform = "rotateY(180deg)";
                carta[opcionId1].setAttribute('src', './img/carta_detras.png');
                carta[opcionId2].style.transform = "rotateY(180deg)";
                carta[opcionId2].setAttribute('src', './img/carta_detras.png');
               
            }
            //aviso de fallo
           
        }
        cartaEscogida = [];
        cartaEscogidaId = [];
        if (cartasGanadas.length <= cartas.length / 2) {//Le pone al score cuantos puntos tienes si los puntos que tienes es menor al lenght del array entre 2, ¿Porque entre 2? porque en el array tienes 2 objetos iguales 
            resultado.textContent = cartasGanadas.length;
        }

        if (cartasGanadas.length === cartas.length / 2) {//Te muestra un mensage de lo has logrado, cuando tu score es igual a al length entre 2
            resultado.textContent = 'Enorabuena lo has logrado ! :)';
            modal();
        }
    }
    
    function transicion() {
        let carta = this;
        carta.style.transform = "rotateY(360deg)"; //gira la carta
        setTimeout(voltearCarta, 125, carta);  
    }

    function voltearCarta(carta) { //funcion para voltear la carta y mostrarte la carta es lo primero que se ejecuta cuando le das a una carta
        //let carta = this;
        if (cartaEscogidaId[0] !== carta.getAttribute('data-id')) {
            let cartaId = carta.getAttribute('data-id');
            cartaEscogida.push(cartas[cartaId].name);
            cartaEscogidaId.push(cartaId); 
           carta.setAttribute('src', cartas[cartaId].img); //Voltea la carta
            if (cartaEscogida.length === 2) {
                setTimeout(coincide, 1000);
            }
        }
    }
   
    
    function modal() {
        // Get the modal
        clearInterval(seg);
        let modal = document.getElementById("myModal");

        // Get the <span> element that closes the modal
        let span = document.getElementsByClassName("close")[0];

        modal.style.display = "block";
        if (victoria==true) { 
        enorabuena.textContent = "Enorabuena lo has logrado !!! :)";
        scores.textContent = "Tu score es: " + cartasGanadas.length;
        tiempos.textContent = "Te han sobrado: " + tempo.innerHTML + " seg";
        } else {
             enorabuena.textContent = "Lo siento pero se te a acabado el tiempo :(  ";
        scores.textContent = "Tu score es: " + cartasGanadas.length;
        tiempos.textContent = "TIEMPO !!!!";
    }
    }

    function temporizador() {
        if (tempo.innerHTML != 0) {
           seg = setInterval(function () { tiempo() }, 1000);
        }
    }
    function tiempo() {
        if (tempo.innerHTML != 0) {
            tempo.textContent = tempo.innerHTML - 1;
        }else{
            clearInterval(seg);
            tempo.textContent="TIEMPOOOO "
            acabo.textContent = " "
            victoria = false;
            modal();
        }
    }
    function moverCartas() {
        /*if (cartas[card[0]].style.transitionDuration == "0s") {
            cartas[card[0]].style.transitionDuration = "3s";
        }*/
        
        cartas[card[0]].style.marginLeft = "100%";
        setTimeout(volver,3000);
    }
    
    function volver(){
        cartas[card[0]].style.transitionDuration = "0s";
        cartas[card[0]].style.marginLeft = "0%";
    }
}
)