function votacion(){
    alert("Introduce [1] si quieres drama coreano, [2]para teoría política, [3] para narrativa fantastica o [4] para teatro juvenil");
    let votacion=prompt("Vota aquí");
    while(votacion>4 || votacion<1){
        votacion=prompt("Introduce [1] si quieres drama coreano, [2]para teoría política, [3] para narrativa fantastica o [4] para teatro juvenil");
    }
    switch(votacion){
        case "1":
            alert("Votaste drama coreano");
        break;
        case "2":
            alert("Votaste teoría política");
        break;
        case "3":
            alert("Votaste narrativa fantástica");
        break;
        case "4":
            alert("Votaste teatro juvenil");
        break;
        default:
            alert("Error");
    }
    alert("Gracias por votar, siga disfrutando de la biblioteca");
}

function votacionNoti(){
    const numerito=document.querySelector(".numerito");
    if(numerito.style.display == "none"){
        alert("No hay notificaciones");
    }else{
        alert("Introduce [1] si quieres drama coreano, [2]para teoría política, [3] para narrativa fantastica o [4] para teatro juvenil");
        let votacion=prompt("Vota aquí");
        while(votacion>4 || votacion<1){
            votacion=prompt("Introduce [1] si quieres drama coreano, [2]para teoría política, [3] para narrativa fantastica o [4] para teatro juvenil");
        }
        switch(votacion){
            case "1":
                alert("Votaste drama coreano");
            break;
            case "2":
                alert("Votaste teoría política");
            break;
            case "3":
                alert("Votaste narrativa fantástica");
            break;
            case "4":
                alert("Votaste teatro juvenil");
            break;
            default:
                alert("Error");
        }
        alert("Gracias por votar, siga disfrutando de la biblioteca");
        numerito.style.display = "none";
    }
}

function p(){
    alert("En construcción");
}

function colorCentimo(){
    const body = document.querySelector("body");
    const fondo = ['imagenes/Título.png'];
    if(body.style.backgroundColor=="white"){
        body.style.backgroundColor="rgb(83, 81, 81)";
        body.style.backgroundImage="none";
    }else{
        body.style.backgroundColor="white";
        body.style.backgroundImage=`url(${fondo})`;
    }
}

function juego(){
    alert("Pokemon");
    let vida1=0;
    let vida2=0;
    let ataque1=0;
    let ataque2=0;
    let nombre1 = prompt("¿Como te llamas jugador 1?");
    let pokemon1 = prompt("Elige entre Pikachu,Charizard o Mewtwo");
    while(pokemon1!="pikachu" && pokemon1!="charizard" && pokemon1!="mewtwo" && pokemon1!="arceus"){
        pokemon1=prompt("Debes elegir entre pikachu,charzard o mewtwo, no hay mas");
    }
    if(pokemon1!="arceus"){
        alert(nombre1+", has escogido a "+pokemon1);
    }
    switch(pokemon1){
        case "pikachu":
            vida1= 90;
            ataque1= 40;
            break;
        case "charizard":
            vida1= 150;
            ataque1= 20;
            break;
        case "mewtwo":
            vida1= 130;
            ataque1= 30;
            break;
        case "arceus":
            vida1= 230;
            ataque1= 60;
            alert("???");
            alert("Nuevo pokemon desbloqueable encontrado,Arceus, el dios del mundo pokemon");
            break;
    }
    let nombre2 = prompt("¿Como te llamas jugador 2?");
    let pokemon2 = prompt("Elige entre Pikachu,Charizard o Mewtwo");
    while(pokemon2!="pikachu" && pokemon2!="charizard" && pokemon2!="mewtwo" && pokemon2!="arceus"){
        pokemon2=prompt("Debes elegir entre pikachu, charizard o mewtwo, no hay mas");
    }
    if(pokemon2!="arceus"){
        alert(nombre2+", has escogido a "+pokemon2);
    }
    switch(pokemon2){
        case "pikachu":
            vida2= 90;
            ataque2= 40;
            break;
        case "charizard":
            vida2= 150;
            ataque2= 20;
            break;
        case "mewtwo":
            vida2= 130;
            ataque2= 30;
            break;
        case "arceus":
            vida2= 230;
            ataque2= 60;
            alert("???");
            alert("Nuevo pokemon desbloqueable encontrado,Arceus, el dios del mundo pokemon");
            break;
    }
    const moneda = Math.floor(Math.random() * 2) + 1;
    alert("Lanzando moneda para ver quien empieza...");
    if(moneda==1){
        alert("¡Empieza "+nombre1+"!");
        while(vida1>0 && vida2>0){
            const critico1 = Math.floor(Math.random() * 8) + 1;
            const critico2 = Math.floor(Math.random() * 8) + 1;
            const esquive1 = Math.floor(Math.random() * 5) + 1;
            const esquive2 = Math.floor(Math.random() * 5) + 1;
            if(vida1<=0){
                alert(nombre1+", tu pokemon a sido derrotado por lo que no puede atacar");
            }else{
                if(critico1==5){
                    vida2=vida2-ataque1-20;
                    alert("¡"+pokemon1+" ha hecho un ataque crítico!");
                    if(esquive2==2){
                        vida2=vida2+ataque1+20;
                        alert("¡Que suerte! ¡"+pokemon2+" ha esquivado el golpe crrítico!");
                    }
                    if(vida2<=0){
                        alert(nombre2+", tu pokemon a sido derrotado");
                    }else{
                    alert(nombre2+", esta es la vida de "+pokemon2+" ahora mismo: "+vida2);
                    }
                }else{
                    vida2=vida2-ataque1;
                    alert(pokemon1+" ha atacado");
                    if(esquive2==2){
                        vida2=vida2+ataque1;
                        alert("¡Que suerte! ¡"+pokemon2+" lo ha esquivado!");
                    }
                    if(vida2<=0){
                        alert(nombre2+", tu pokemon a sido derrotado");
                    }else{
                    alert(nombre2+", esta es la vida de "+pokemon2+" ahora mismo: "+vida2);
                    }
                }
            }
            if(vida2<=0){
                alert(nombre2+", tu pokemon a sido derrotado por lo que no puede atacar");
            }else{
                if(critico2==5){
                    vida1=vida1-ataque2-20;
                    alert("¡"+pokemon2+" ha hecho un ataque crítico!");
                    if(esquive1==2){
                        vida1=vida1+ataque2+20;
                        alert("¡Que suerte! ¡"+pokemon1+" ha esquivado el golpe crrítico!");
                    }
                    if(vida1<=0){
                        alert(nombre1+", tu pokemon a sido derrotado");
                    }else{
                        alert(nombre1+", esta es la vida de "+pokemon1+" ahora mismo: "+vida1);
                    }
                }else{
                    vida1=vida1-ataque2;
                    alert(pokemon2+" ha atacado");
                    if(esquive1==2){
                        vida1=vida1+ataque2;
                        alert("¡Que suerte! ¡"+pokemon1+" lo ha esquivado!");
                    }
                    if(vida1<=0){
                        alert(nombre1+", tu pokemon a sido derrotado");
                    }else{
                        alert(nombre1+", esta es la vida de "+pokemon1+" ahora mismo: "+vida1);
                    }
                }
            }
        }
    }else{
        alert("¡Empieza "+nombre2+"!");
        while(vida1>0 && vida2>0){
            const critico1 = Math.floor(Math.random() * 8) + 1;
            const critico2 = Math.floor(Math.random() * 8) + 1;
            const esquive1 = Math.floor(Math.random() * 5) + 1;
            const esquive2 = Math.floor(Math.random() * 5) + 1;
            if(vida2<=0){
                alert(nombre2+", tu pokemon a sido derrotado por lo que no puede atacar");
            }else{
                if(critico2==5){
                    vida1=vida1-ataque2-20;
                    alert("¡"+pokemon2+" ha hecho un ataque crítico!");
                    if(esquive1==2){
                        vida1=vida1+ataque2+20;
                        alert("¡Que suerte! ¡"+pokemon1+" ha esquivado el golpe crrítico!");
                    }
                    if(vida1<=0){
                        alert(nombre1+", tu pokemon a sido derrotado");
                    }else{
                        alert(nombre1+", esta es la vida de "+pokemon1+" ahora mismo: "+vida1);
                    }
                }else{
                    vida1=vida1-ataque2;
                    alert(pokemon2+" ha atacado");
                    if(esquive1==2){
                        vida1=vida1+ataque2;
                        alert("¡Que suerte! ¡"+pokemon1+" lo ha esquivado!");
                    }
                    if(vida1<=0){
                        alert(nombre1+", tu pokemon a sido derrotado");
                    }else{
                        alert(nombre1+", esta es la vida de "+pokemon1+" ahora mismo: "+vida1);
                    }
                }
            }
            if(vida1<=0){
                alert(nombre1+", tu pokemon a sido derrotado por lo que no puede atacar");
            }else{
                if(critico1==5){
                    vida2=vida2-ataque1-20;
                    alert("¡"+pokemon1+" ha hecho un ataque crítico!");
                    if(esquive2==2){
                        vida2=vida2+ataque1+20;
                        alert("¡Que suerte! ¡"+pokemon2+" ha esquivado el golpe crrítico!");
                    }
                    if(vida2<=0){
                        alert(nombre2+", tu pokemon a sido derrotado");
                    }else{
                    alert(nombre2+", esta es la vida de "+pokemon2+" ahora mismo: "+vida2);
                    }
                }else{
                    vida2=vida2-ataque1;
                    alert(pokemon1+" ha atacado");
                    if(esquive2==2){
                        vida2=vida2+ataque1;
                        alert("¡Que suerte! ¡"+pokemon2+" lo ha esquivado!");
                    }
                    if(vida2<=0){
                        alert(nombre2+", tu pokemon a sido derrotado");
                    }else{
                    alert(nombre2+", esta es la vida de "+pokemon2+" ahora mismo: "+vida2);
                    }
                }
            }
        }
    }
    if(vida1<=0){
        alert("¡Felicidades "+nombre2+"!¡Ha ganado tu "+pokemon2+" con "+vida2+" puntos de vida");
    }else{
        alert("¡Felicidades "+nombre1+"!¡Ha ganado tu "+pokemon1+" con "+vida1+" puntos de vida");
    }
}


