document.addEventListener('DOMContentLoaded',eventos,false);

function eventos(){
    ponerFecha();
    let imagen=document.getElementById('imagen');
    imagen.addEventListener('change',actualizarImg,false);
    let apartado=document.getElementById('apartado');
    apartado.addEventListener('change',actualizarApar,false);
    let titulo=document.getElementById('titulo');
    titulo.addEventListener('keyup',actualizarTit,false);
    let sinopsis=document.getElementById('sinopsis');
    sinopsis.addEventListener('keyup',actualizarSin,false);
    let texto=document.getElementById('texto');
    texto.addEventListener('keyup',actualizarText,false);
    //Botones
    let bVerEsc=document.getElementById('bVerEsc');
    bVerEsc.addEventListener('click',botonEsc,false);
    let bVerMov=document.getElementById('bVerMov');
    bVerMov.addEventListener('click',botonMov,false);
}

function ponerFecha(){
    let fecha=document.getElementById('fecha');
    let fechaArt=document.getElementById('fechaArt');
    let d=new Date();
    let h=0;
    let min=0;

    //Zero fill horas
    if(d.getHours()<10){
        h='0'+d.getHours();
    }
    else if(d.getHours()==0){
        h='00';
    }
    else{
        h=d.getHours();
    }

    //Zero fill minutos
    if(d.getMinutes()<10){
        min='0'+d.getMinutes();
    }
    else if(d.getMinutes()==0){
        min='00';
    }
    else{
        min=d.getMinutes();
    }

    fecha.innerHTML=d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear()+' - '+h+':'+min;
    fechaArt.innerHTML=d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear()+' - '+h+':'+min;
}

function actualizarApar(){
    let apartado=document.getElementById('apartado').value;
    let divApartado=document.getElementById('divApartado');
    let divApartadoArt=document.getElementById('divApartadoArt');
    let borde=document.getElementsByClassName('borde');
    let bordeArt=document.getElementsByClassName('bordeArt');

    let id='';

    if(apartado=='Xbox'){
        id='x';
    }
    else if(apartado=='Tecnología'){
        id='t';
    }
    else if(apartado=='Nintendo'){
        id='n';
    }
    else if(apartado=='PlayStation'){
        id='s';
    }
    else{
        id='j';
    }

    divApartado.innerHTML=apartado;
    divApartadoArt.innerHTML=apartado;
    borde[0].setAttribute('id',id);
    bordeArt[0].setAttribute('id',id);
}

function actualizarImg(){
    let imagen=document.getElementById('imagen');
    let img=document.getElementsByTagName('img');

    img[0].setAttribute('src','C:\\Users\\Leo\\Desktop\\'+imagen.files[0].name); 
    img[1].setAttribute('src','C:\\Users\\Leo\\Desktop\\'+imagen.files[0].name); 
}

function actualizarTit(){
    let titulo=document.getElementById('titulo').value;
    let hTit=document.getElementById('hTit');
    let tituloArt=document.getElementById('tituloArt');

    hTit.innerHTML=titulo;
    tituloArt.innerHTML=titulo;
}
function actualizarSin(){
    let sinopsis=document.getElementById('sinopsis').value;
    let pSin=document.getElementById('pSin');

    pSin.innerHTML=sinopsis;
}
function actualizarText(){
    let texto=document.getElementById('texto').value;
    let textoArt=document.getElementById('textoArt');

    textoArt.innerHTML=texto;
}

//---------------------------Botones--------------------------------------

function botonEsc(){
    let bVerEsc=document.getElementById('bVerEsc');
    let bVerMov=document.getElementById('bVerMov');
    let verEsc=document.getElementById('oculto');
    let verMov=document.getElementById('verMov');

    verEsc.setAttribute('id','verEsc');
    verMov.setAttribute('id','oculto');
    bVerEsc.setAttribute('class','pulsado');
    bVerMov.setAttribute('class','');
}
function botonMov(){
    let bVerMov=document.getElementById('bVerMov');
    let bVerEsc=document.getElementById('bVerEsc');
    let verMov=document.getElementById('oculto');
    let verEsc=document.getElementById('verEsc');

    verEsc.setAttribute('id','oculto');
    verMov.setAttribute('id','verMov');
    bVerMov.setAttribute('class','pulsado');
    bVerEsc.setAttribute('class','');
}