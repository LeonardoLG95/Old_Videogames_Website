<?php
require 'funcionesBD.php';

/////////////////////////////FUNCIONES GENERALES//////////////////////////////
function cabecera($seccion=''){
    
    //Urls cabecera
    $inicio='https://www.laultimapartida.com';
    $multiplataforma='/Multiplataforma';
    $tecnologia='/Tecnologia';
    $nintendo='/Nintendo';
    $playstation='/PlayStation';
    $xbox='/Xbox';
    
    //Id de las opciones del menú
    $menuT="t";
    $menuN="n";
    $menuS="s";
    $menuX="x";
    $menuM="m";

    $headerId='';

    if(isset($seccion)){
        switch($seccion){
            case('t'):
                $menuT="selectedT";
                $headerId="headerT";
                break;
            case('n'):
                $menuN="selectedN";
                $headerId="headerN";
                break;
            case('s'):
                $menuS="selectedS";
                $headerId="headerS";
                break;
            case('x'):
                $menuX="selectedX";
                $headerId="headerX";
                break;
            case('j'):
                $menuM="selectedM";
                break;
        }
    }
    /*Sección buscar que incluiré despues de publicar la nueva estetica
    <li id="b"><a href="#" title="Buscar"><img class="icono" src="/iconos/b.svg" alt="Buscar">Buscar</a></li>*/
    ?>
    <header id="<?=$headerId?>">
        <a href="<?=$inicio?>" title="Portada"><img id="logo" src="/iconos/logo.svg" alt="laultimapartida.com"></a>
        <nav id="menu">
            <img class="icono" src="/iconos/m.svg" alt="Menú">
            <ul>
                <li id="<?=$menuT?>"><a href="<?=$tecnologia?>" title="Tecnología"><img class="icono" src="/iconos/t.svg" alt="Sección Tecnología">Tecnología</a></li>
                <li id="<?=$menuX?>"><a href="<?=$xbox?>" title="Xbox"><img class="icono" src="/iconos/x.svg" alt="Sección Xbox">Xbox</a></li>
                <li id="<?=$menuN?>"><a href="<?=$nintendo?>" title="Nintendo"><img class="icono" src="/iconos/n.svg" alt="Sección Nintendo">Nintendo</a></li>
                <li id="<?=$menuS?>"><a href="<?=$playstation?>" title="PlayStation"><img class="icono" src="/iconos/s.svg" alt="Sección PlayStation">PlayStation</a></li>
                <li id="<?=$menuM?>"><a href="<?=$multiplataforma?>" title="Multiplataforma"><img class="icono" src="/iconos/j.svg" alt="Portada">Multiplataforma</a></li>
                <li id="p"><a href="<?=$inicio?>" title="Portada"><img class="icono" src="/iconos/h.svg" alt="Portada">Portada</a></li>
            </ul>
        </nav>
    </header>
    <?php
}

function pie(){
    
    //Urls pie
    $informacion='https://www.laultimapartida.com/Informacion';
    $contacto='https://www.laultimapartida.com/Contacto';
    $legal='https://www.laultimapartida.com/Legal';
    $privacidad='https://www.laultimapartida.com/Privacidad';
    $cookies='https://www.laultimapartida.com/Cookies';
    ?>
    </div>
    <footer id="pie">
        <ul>
            <li><a href="<?=$informacion?>">Información</a></li>
            <li><a href="<?=$contacto?>">Contacto</a></li>
            <li><a href="<?=$legal?>">Legal</a></li>
            <li><a href="<?=$privacidad?>">Privacidad</a></li>
            <li><a href="<?=$cookies?>">Cookies</a></li>
        </ul>
    </footer>
    <?php        
}

////////////////////////////////FUNCIONES ÍNDICE//////////////////////////////

function preparacionQueryLista($posicion,$seccion){
    //Comprovación de que el numero sea un int para prevenir sql injection
    $numero='';
    $numero=intval($posicion);
    if(is_int($numero) && $numero>0){
        $posicion=$numero-1;
    }
    else{
        $posicion=intval(0);
    }

    $limite=$posicion*11;

    //Comprovación de que la letra sea la que necesita para prevenir sql injection
    if($seccion!='t'&&$seccion!='m'&&$seccion!='n'&&$seccion!='s'&&$seccion!='x'&&$seccion!='j'){
        $seccion='';
    }

    return queryListaArticulos($seccion,$limite);
}

function listaArticulos($posicion=1,$seccion='',$verMovil=false){

    $articulos=preparacionQueryLista($posicion,$seccion);

    //Impresión de miniaturas de artículos
    $impresos=0;
    ?>
    <main>
        <?php
        while($reg=mysqli_fetch_array($articulos)){
            
            $impresos++;

            $fecha=$reg['fecha'];
            $fecha=strtotime($fecha);
            //$fecha+=3600;//7200
            $fecha=date('d/m/Y - H:i', $fecha);

            //Anuncio 1
            if($impresos==3 && $_SERVER['SERVER_NAME']=="www.laultimapartida.com" && $verMovil==true){?>
                <div id="anuncioM1">
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-format="fluid"
                        data-ad-layout-key="-6e+dc+18-66+hk"
                        data-ad-client="ca-pub-4558441627790372"
                        data-ad-slot="7155935715"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            <?php
            }
            //Anuncio 2
            if($impresos==6 && $_SERVER['SERVER_NAME']=="www.laultimapartida.com" && $verMovil==true){?>
                <div id="anuncioM2">
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-format="fluid"
                        data-ad-layout-key="-6y+d0+x+3q+c"
                        data-ad-client="ca-pub-4558441627790372"
                        data-ad-slot="8597349208"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            <?php
            }
            if($impresos==1&&$posicion<=1&& !$verMovil){?>
                <article class="primer" id="<?=$reg['id_apartado']?>">
                    <a href="https://www.laultimapartida.com/<?php
                        //Selección de sección en el articulo, para saber desde que sección viene
                        switch($seccion){
                            case('t'):
                                ?>Tecnologia<?php
                                break;
                            case('m'):
                                ?>Multiplataforma<?php
                                break;
                            case('n'):
                                ?>Nintendo<?php
                                break;
                            case('s'):
                                ?>PlayStation<?php
                                break;
                            case('x'):
                                ?>Xbox<?php
                                break;
                            default:
                                ?>Portada<?php
                                break;		
                        }//Articulo en si?>/<?=$reg['id']?>/<?=preg_replace('/\s+/', '_', $reg['titulo']);?>" class="articulo" id="<?=$reg['id_apartado']?>" title="<?=$reg['titulo']?>">
                        <div class="borde">
                            <div id="fecha"><?=$fecha?></div>
                            <div id="apartado"><?=$reg['apartado']?></div>
                        </div>
                        <img src="/calidadArticulo/<?=$reg['imagen']?>_0.webp" alt="<?=$reg['alt_imagen']?>">
                        <h2 id="titulo"><?=$reg['titulo']?></h2>
                        <p id="sinopsis"><?=$reg['sinopsis']?></p>
                    </a>
                </article>
                <?php
            }
            else{
                if(($impresos==2&&$posicion<=1)||($impresos==1&&$posicion>1)){?>
                    <div id="articulos">
                    <?php
                }?>
                <article id="<?=$reg['id_apartado']?>">
                    <a href="https://www.laultimapartida.com/<?php
                        //Selección de sección en el articulo, para saber desde que sección viene
                        switch($seccion){
                            case('t'):
                                ?>Tecnologia<?php
                                break;
                            case('m'):
                                ?>Multiplataforma<?php
                                break;
                            case('n'):
                                ?>Nintendo<?php
                                break;
                            case('s'):
                                ?>PlayStation<?php
                                break;
                            case('x'):
                                ?>Xbox<?php
                                break;
                            default:
                                ?>Portada<?php
                                break;		
                        }//Articulo en si?>/<?=$reg['id']?>/<?=preg_replace('/\s+/', '_', $reg['titulo']);?>" class="articulo" id="<?=$reg['id_apartado']?>" title="<?=$reg['titulo']?>">
                        <div class="borde">
                            <div id="fecha"><?=$fecha?></div>
                            <div id="apartado"><?=$reg['apartado']?></div>
                        </div>
                        <img src="/miniaturas/<?=$reg['imagen']?>_1.webp" alt="<?=$reg['alt_imagen']?>">
                        <h2 id="titulo"><?=$reg['titulo']?></h2>
                        <p id="sinopsis"><?=$reg['sinopsis']?></p>
                    </a>
                </article>
                <?php
            }
            ?>  
        <?php
        }
        ?>
        </div> 
    </main>
    <?php
    //Devuelve la variable impresos para en la variable paginación saber si a llegado al final
    return $impresos;
}

function paginacion($posicion,$seccion,$impresos){
    /*
    NOTA DE POSICIÓN:
        $posicion es uno menor al que realmente está 
        en htaccess lo configure para que visualmente 
        le añadiese 1 es decir para que en la url 
        la primera posición no se viese 0 si no 1
    */

    $posicion=$posicion-1;

    $cantidadQuery=queryCantidadArticulos($seccion);
    $cantidad=mysqli_num_rows($cantidadQuery);

    //Selección cadena de texto para la url
    switch($seccion){
        case 't':
            $secString='Tecnologia';
            break;
        case 'j':
            $secString='Multiplataforma';
            break;
        case 'n':
            $secString='Nintendo';
            break;
        case 's':
            $secString='PlayStation';
            break;
        case 'x':
            $secString='Xbox';
            break;
        default:
            $secString='Portada';
            break;
    }
    //Menú
    ?>

    <nav id="nav">
        <ul>
    <?php
        if($posicion<0){
            $posicion=0;
        }
		if($posicion>1){?>
            <li><a href="https://www.laultimapartida.com/<?=$secString?>/1" id="0...">1...</a></li>
        <?php
		}
		if($posicion>0){
            $anterior=$posicion;?>
            <li><a href="https://www.laultimapartida.com/<?=$secString?>/<?=$anterior?>" id="ant">&#9668;</a></li>
        <?php
        }

        //Para evitar que se sume a posición
        $indice=$posicion;
		for($i=0;$i<9;$i++){

            $indiceVisual=$indice+1;
            
			if($indice*11>=$cantidad){
                break;
            }
			if($indice==$posicion){?>
                <li  class="seleccionado"><a href="" id="<?=$i?>"><?=$indiceVisual?></a></li>
            <?php
            }
            else{?>
                <li><a href="https://www.laultimapartida.com/<?=$secString?>/<?=($indice+1)?>" id="<?=$i?>"><?=$indiceVisual?></a></li>
        <?php
			}
			$indice++;
		}
		if($impresos==11){?>
            <li><a href="https://www.laultimapartida.com/<?=$secString?>/<?=$indice?>" id="sig">&#9658;</a></li>
        <?php
		}
		?>
        </ul>
    </nav>
    <?php
}

///////////////////////////////FUNCIONES ARTÍCULOS///////////////////////////

//---------Funciones generales articulos, versión movil y escritorio---------
function presentacionArticulo($id_apartado,$fecha,$apartado,$sinopsis,$palabras_clave,$id,$imagen,$alt_imagen,$titulo,$texto,$video,$tituloLink,$verMovil=false){?>
    <div class="borde" id="<?=$id_apartado?>">
        <div id="fecha"><?=$fecha?></div>
        <div id="apartado"><?=$apartado?></div>
    </div>
    <h1><?=$titulo?></h1>
    <div id="compartir">
        <a class="twitter-share-button"
        href="https://twitter.com/intent/tweet?original_referer=&text=<?=$sinopsis?>&hashtags=<?=$palabras_clave?>&
        url=https://laultimapartida.com/<?=$apartado?>/<?=$id?>/<?=$tituloLink?>"
        data-size="small"
        data-dnt="true"
        data-show-count="false">
        </a>
        <div class="fb-share-button" 
        data-href="https://laultimapartida.com/<?=$apartado?>/<?=$id?>" 
        data-layout="button"
        data-size="small">
        </div>
    </div>
    <?php
    if($_SERVER['SERVER_NAME']=="www.laultimapartida.com" && $verMovil==true){
        //Articulo_1_Movil?>
        <div id="anuncioM1">
            Publicidad
            <hr>
            <!-- Articulo_Arriba_Movil -->
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-4558441627790372"
                data-ad-slot="5835949337"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    <?php
    }?>
    <img id="imagen" src="/calidadArticulo/<?=$imagen?>_0.webp" alt="<?=$alt_imagen?>"/>
    <div id="texto">
        <?=$texto?>
    </div>
    <?php
    if($video!=''){?>
        <iframe class="youtube-player"
            id="video"
            type="text/html"
            src="https://www.youtube.com/embed/<?=$video?>?version=3&amp;rel=1&amp;fs=1&amp;autohide=2&amp;showsearch=0&amp;showinfo=1&amp;iv_load_policy=1&amp;wmode=transparent"
            allowfullscreen="true"
            style="border:0;"
            width="640"
            height="390">
        </iframe>
    <?php
    }
}

function menuNavegacion($id,$sec){?>
    <div id="nav">
        <?php
        //Botones navegación siguiente y anterior


        //Id del siguiente y el anterior
        $siguiente=siguiente($id,$sec);
        $anterior=anterior($id,$sec);

        $sig='';
        $ant='';
        if($reg2=mysqli_fetch_array($siguiente)){
            $sig=$reg2['id'];
            $tituloSig=preg_replace('/\s+/', '_', $reg2['titulo']);
        }
        if($reg3=mysqli_fetch_array($anterior)){
            $ant=$reg3['id'];
            $tituloAnt=preg_replace('/\s+/', '_', $reg3['titulo']);
        }

        //Sección
        switch($sec){
            case('t'):
                $seccion='Tecnologia';
                break;
            case('j'):
                $seccion='JuegosGeneral';
                break;
            case('n'):
                $seccion='Nintendo';
                break;
            case('s'):
                $seccion='PlayStation';
                break;
            case('x'):
                $seccion='Xbox';
                break;
            default:
                $seccion='Portada';
                break;		
        }

        //Botón anterior               
        if($ant!=''){?>
            <a href="https://www.laultimapartida.com/<?=$seccion?>/<?=$ant?>/<?=$tituloAnt?>" id="ant"><div>&#9668;&nbsp;&nbsp;Anterior</div></a>
        <?php
        }
        //Botón siguiente
        if($sig!=''){?>
            <a href="https://www.laultimapartida.com/<?=$seccion?>/<?=$sig?>/<?=$tituloSig?>" id="sig"><div>Siguiente&nbsp;&nbsp;&#9658;</div></a>
        <?php
        }
        ?>
    </div>
    <?php
}

function chat(){?>
    <div id="disqus_thread"></div>
    <noscript><p>Para ver los comentarios debes habilitar Java Script.</p></a></noscript>
    <?php
}

//////////////////////////////Anuncios//////////////////////////////
//----------------Versión escritorio-------------

function anunciosEscritorioLadoArticulo(){
    if($_SERVER['SERVER_NAME']=="www.laultimapartida.com"){?>
        <div id="anuncioLado">
            Publicidad
            <hr>
            <!-- Articulo_Vertical1_PC -->
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-4558441627790372"
                data-ad-slot="5975055291"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    <?php
    } 
}

function anuncioEscritorioInferiorArticulo(){ 
    if($_SERVER['SERVER_NAME']=="www.laultimapartida.com"){?>
        <div id="anuncioInferior">
            Publicidad
            <hr>
            <!-- Articulo_Abajo_PC -->
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-4558441627790372"
                data-ad-slot="2043549149"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    <?php
    }      
}

//----------------Versión movil--------------------

function anuncioMovil2(){
    if($_SERVER['SERVER_NAME']=="www.laultimapartida.com"){?>
    <div id="anuncioM2">
        Publicidad
        <hr>
        <!-- Articulo_Comentarios_Movil -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4558441627790372"
            data-ad-slot="4478140793"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    <?php
    }
}

function anuncioMovil3(){
    if($_SERVER['SERVER_NAME']=="www.laultimapartida.com"){?>
    <div id="anuncioM3">
        Publicidad
        <hr>
        <!-- Articulo_Movil_3 -->
        <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-4558441627790372"
                data-ad-slot="7281812819"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
        <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    <?php
    }
}

//------------------Escritorio Indice-------------------

function anuncioEscritorioSuperiorIndice(){
    if($_SERVER['SERVER_NAME']=="www.laultimapartida.com"){?>
    <div id="anuncioSuperior">
        Publicidad
        <hr>
        <!-- Index_Vertical1_PC -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4558441627790372"
            data-ad-slot="9426875839"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    <?php
    }
}

function anunciosEscritorioLadoIndice1(){
    if($_SERVER['SERVER_NAME']=="www.laultimapartida.com"){?>
    <div id="anuncioLado1">
        Publicidad
        <hr>
        <!-- Index_Vertical1_PC -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4558441627790372"
            data-ad-slot="9426875839"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    <?php
    }
}

function anunciosEscritorioLadoIndice2(){
    if($_SERVER['SERVER_NAME']=="www.laultimapartida.com"){?>
        <!-- Index_Vertical1_PC -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4558441627790372"
            data-ad-slot="9426875839"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    <?php
    }
}

function anuncioEscritorioInferiorIndice(){?>
    <?php 
    if($_SERVER['SERVER_NAME']=="www.laultimapartida.com"){?>
    <div id="anuncioInferior">
        Publicidad
        <hr>
        <!-- Index_Abajo_PC -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4558441627790372"
            data-ad-slot="2569173076"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    <?php
    }?>
    <?php
}

//------------------Móvil Inferior-------------
function anuncioMovilInferior(){
    if($_SERVER['SERVER_NAME']=="www.laultimapartida.com"){?>
        <div id="anuncioM3">
            <!-- Index_Abajo_Movil -->
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-4558441627790372"
                data-ad-slot="5153423056"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    <?php
    }
}