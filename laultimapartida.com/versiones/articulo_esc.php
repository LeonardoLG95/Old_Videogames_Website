    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script>
        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://prueba1234.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <link rel="stylesheet" href="/css/generalEscritorio.css"/>
    <link rel="stylesheet" media="only screen and (min-device-width:1001px)" href="/css/cssEscritorio/cabeceraEscritorio.css"/>
	<link rel="stylesheet" media="only screen and (max-device-width:1000px)" href="/css/cssEscritorio/cabeceraEscritorioLite.css"/>
    <link rel="stylesheet" href="/css/cssEscritorio/articuloEscritorio.css"/>
    <link rel="stylesheet" href="/css/cssEscritorio/pieEscritorio.css"/>
    <script data-ad-client="ca-pub-4558441627790372" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
    <?php
        //Sec viene del archivo padre
        cabecera($sec);
    ?>
    <div class="contenido">
        <section>
            <?php
            anunciosEscritorioLadoArticulo();
            ?>
        </section>
        <article>
        <?php
        /*Aquí aunque las variables no se reciben,
        se reciben en el archivo padre que aloja este, 
        es decir articulo.php, porque hacen falta para las etiquetas meta*/
        presentacionArticulo($id_apartado,$fecha,$apartado,$sinopsis,$palabras_clave,$id,$imagen,$alt_imagen,$titulo,$texto,$video,$tituloLink);
        menuNavegacion($id,$sec);
        ?>
        </article>
        <?php
        chat();
        anuncioEscritorioInferiorArticulo();
        ?>
    </div>
    <?php pie();?>