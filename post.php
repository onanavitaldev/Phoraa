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

    <!-- Title of page -->
    <title>Publier une image</title>
</head>
<style>
    input::placeholder {
        color: #000;
    }
</style>

<body style="background-image:linear-gradient(rgba(255, 255, 255, 0.803), rgba(255, 255, 255, 0.9)),
    url('assets/img/pattern.webp');background-attachment: fixed;">
    <!-- Navigation -->
    <?php include("components/nav.php") ?>
    <br>
    <main class="flex flex-wrap justify-around -mb-32">
        <!-- Content of app -->
        <div class="pt-20 mt-10 mb-32 w-full border-none" id="upload_box">
            <form action="import.php" method="POST" enctype="multipart/form-data" class="border-none">
                <label for="uploadFile1" class="w-full bg-white text-gray-500 font-semibold text-base rounded max-w-md h-64 flex flex-col items-center justify-center cursor-pointer border-2 border-gray-300 border-dashed mx-auto" style="height: 530px;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-32 mb-2" viewBox="0 0 32 32" style="fill:var(--bg);" id="svg">
                        <path d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z" data-original="#000000" />
                        <path d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z" data-original="#000000" />
                    </svg>
                    <h3 class="font-bold text-3xl text-gray-900">
                        Importer une image
                    </h3>

                    <input type="file" id='uploadFile1' class="hidden" />
                    <p class="text-xs font-medium text-gray-600 mt-2">PNG, JPG, SVG, WEBP, et GIF sont permis.</p>
                    <br>
                    <div class="flex flex-wrap gap-4 p-6 w-full">
                    <label for="countries_disabled" class="block text-sm font-medium text-gray-900">Selectionner une catégorie</label>
                        <select id="countries_disabled" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full outline-none block w-full p-3" name="category">
                            <option selected>Choisir la catégorie de la photo</option>
                            <option value="Humains">Humains</option>
                            <option value="Animaux">Animaux</option>
                            <option value="Nature">Nature</option>
                            <option value="Objets">Objets</option>
                            <option value="IA">Architecture</option>
                            <option value="IA">Arts & Cultures</option>
                            <option value="IA">IA</option>
                        </select>

                        <!-- File -->
                        <input type="file" class="block w-full p-3 ps-10 text-sm text-gray-900 font-normal rounded-full bg-gray-50 outline-none" required name="path_img">

                        <!-- Title of image -->
                        <input type="text" class="block w-full p-3 ps-10 text-sm text-gray-900 font-normal rounded-full bg-gray-50 outline-none" placeholder="Entrer le titre de l'image" required name="title" />
                        
                        <button type="submit" name="save" class="btn-bg-color w-full">
                            Publier la photo
                        </button>
                    </div>
                </label>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <?php include("components/footer.php") ?>

    <!-- JS files -->
    <?php include("components/script.php") ?>
</body>

</html>