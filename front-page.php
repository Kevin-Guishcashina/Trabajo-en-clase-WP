<?php get_header(); ?>
<main content-center>
    <span class="text-2xl">PRESENTACION</span>
    <div class="flex justify-center space-x-10  ">

        <div class="w-2/12">
            <img class="rounded-full" src="<?php echo get_template_directory_uri() ?>/assets/img/perfil.jpg" olt="imagen de perfil">
        </div>
        <div class="w-6/12">
            <p>Mi nombre es Kevin Guishcashina me gusta el diseño web.
                Actualmente estoy cursando el sexto nivel de la carrera de Análisis de Sistemas en el Instituto Tecnológico Quito
                Me gusta la carrera ya que me quiero dedicar al diseño web

            </p>
        </div>
    </div>
    <div class="text-2xl">Me gusta trabajar con estos lenguajes</div>
    <div class="grid grid-cols-3 gap-4">
        <div>
            <img class="rounded-full" src="<?php echo get_template_directory_uri() ?>/assets/img/450.jpg" olt="imagen de perfil">
            <p>JAVA porque permite crear diferentes aplicaciones y procesos en una gran variedad de dispositivos </p>
        </div>

        <div>
            <img class="rounded-full" src="<?php echo get_template_directory_uri() ?>/assets/img/css.png" olt="imagen de perfil">
            <p>CSS porque me gusta la manera en la que puedo dar formato y diseño a nuestro sitio web</p>
        </div>
        <div>
            <img class="rounded-full" src="<?php echo get_template_directory_uri() ?>/assets/img/php.png" olt="imagen de perfil">
            <p>PHP porque es un lenguaje de programacion que se adapta muy bien al desarrollo web</p>
        </div>
    </div>
    <div class="text-2xl flex justify-center ">Pasatiempos</div>
    <div class="flex justify-center space-x-10 ">
        <div class="w-2/12">
        <img class="rounded-full" src="<?php echo get_template_directory_uri() ?>/assets/img/guitar.jpg" olt="imagen de perfil">
        </div>
        <div class="w-4/12">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, autem? Facilis optio pariatur in dolorem, quod accusamus dolorum dolores eaque expedita ex exercitationem, nihil, laudantium assumenda neque tempora delectus dolore?</p>
        </div>
    </div>
</div>
</main>
<?php get_footer(); ?>