<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <!-- Meta(Keywords, description, robots...) -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="robots" content="index,follow">

    <!-- SCSS files -->
    <?php include("components/link.php") ?>

    <!-- JS files -->
    <?php include("components/script.php") ?>
    <script src="lib/vue.js"></script>

    <!-- Title of page -->
    <title>Phoraa</title>
</head>

<body>
    <!-- Navigation -->
    <?php include("components/nav.php") ?>

    <main>
        <section class="pt-1 pb-1 mt-24" id="header">
            <div class="rounded-none sm:rounded-lg mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16" style="background-image: linear-gradient(rgba(0, 0, 0, 0.836), rgba(0, 0, 0, 0.841)), url('assets/img/cover.jpg');">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-0 sm:pl-10">
                    <div class="lg:py-14" id="text">
                        <h2 class="text-3xl text-white font-extrabold sm:text-6xl leading-none">
                            Promouvoir l'Afrique avec des images libres de droits
                        </h2>
                        <p class="mt-4 text-gray-200 text-1xl sm:text-1xl">
                            Télécharger gratuitement des images libres de droits poster par des africains fières de leur continent.
                        </p>
                        <br>
                        <div class="flex sm:-ml-32">   
                            <form class="w-full max-w-md mx-auto" method="post" action="search.php">   
                                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-4 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                        </svg>
                                    </div>
                                    <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-100 rounded-full bg-white outline-none" placeholder="Rechercher une image" name="searchImg" required />
                                    <button type="submit" class="btn-bg-color text-white absolute end-2.5 bottom-2.5 focus:ring-4 focus:outline-none font-medium rounded-full text-sm px-4 py-2">Rechercher</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Récents(10) -->
        <?php include("components/first_img.php") ?>
        

        <!-- Marketing -->
        <div class="flex justify-around p-6 lg:p-40 sm:-mt-56 sm:-mb-40">
            <div class="marketing block p-10 sm:p-20 rounded-lg">
                <h2 class="font-bold text-white text-3xl lg:text-5xl" style="line-height:1.2;">
                    Notre bibliothèque d'outils vous permet d'éditer vos photos simplement et gratuitement.
                </h2>
                <br><br>
                <a href="#" class="btn-bg shadow-xl hover:shadow-lg">Accéder aux outils</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include("components/footer.php") ?>
</body>

</html>