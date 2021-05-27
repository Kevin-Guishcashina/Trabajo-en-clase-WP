<?php get_header(); ?>
<main>


    <div>
        <div class="max-w-md mx-auto bg-gray-100 rounded-xl shadow-md overflow-hidden md:max-w-5xl mt-6">
            <div class="text-4xl text-center">PRESENTACION</div>
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="<?php echo get_template_directory_uri() ?>/assets/img/perfil.jpg" alt="Mi foto">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Mi Perfil</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Mi nonmbre es Kevin Guishcashina</a>
                    <p class="mt-2 text-gray-500">Actualmente estudio la carrera de Análisis de Sistemas en el Instituto Tecnológico Quito
                        6to nivel.
                    </p>
                </div>
            </div>
        </div>


        <div class="max-w-md mx-auto bg-gray-50 rounded-xl shadow-md overflow-hidden md:max-w-5xl mt-6">
            <div class="uppercase tracking-wide text-sm text-indigo-1000 font-semibold text-2xl">Me gusta trabajar con:</div><br>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-blue-50">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/450.jpg" alt="imagen de perfil">
                    <p>JAVA porque permite crear diferentes aplicaciones y procesos en una gran variedad de dispositivos </p>
                </div>
                <div class="bg-blue-50">
                    <img class="" src="<?php echo get_template_directory_uri() ?>/assets/img/css.png" alt="imagen de perfil">
                    <p>CSS porque me gusta la manera en la que puedo dar formato y diseño a nuestro sitio web</p>
                </div>
                <div class="bg-blue-50">
                    <img class="" src="<?php echo get_template_directory_uri() ?>/assets/img/php.png" alt="imagen de perfil">
                    <p>PHP porque es un lenguaje de programacion que se adapta muy bien al desarrollo web</p>
                </div>
            </div>

            
        <div class="flex justify-center md:max-w-5xl mt-10">
        <div class="mb-10">
        <h1 >Pasatiempos</h1>
        
        </div>

            
        </div>
        </div>

    </div>

</main>
<?php get_footer(); ?>