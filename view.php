<?php
    include('config/config.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM all_img WHERE id = $id";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
?>
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
    
    <script src="lib/vue.js"></script>
    <?php include("components/link.php") ?>

    <!-- Title of page -->
    <title><?php echo $row["title"]; ?> - Phoraa</title>
</head>
<body>
    <!-- Navigation -->
    <?php include("components/nav.php") ?>

    <!-- Category -->
    <?php include("components/filter.php") ?>

    <div class="sm:py-12 pt-6 pt-20 sdk" style="z-index:700;background-color:#fefefe">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-4">
                    <div class="h-[300px] sm:h-[500px] cursor-[pointer] rounded-lg bg-gray-300 mb-4">
                        <img class="w-full h-full rounded-lg object-cover" src="<?php echo $row["img_path"] ?>" alt="Product Image">
                    </div>
                    <br>
                </div>
                <div class="md:flex-1 px-4">
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-black mb-8" style="line-height:1.3;"><?php echo $row["title"] ?></h2>
                    <div class="flex mb-4" style="font-size:18px;">
                        <div class="mr-4">
                            <span class="font-bold text-gray-900">Licence:</span>
                            <span class="text-gray-900">
                                <a href="#">Libre de droit</a>
                            </span>
                        </div>
                        <div>
                            <span class="font-bold text-gray-900">Catégorie:</span>
                            <span class="text-gray-900">
                                <a href="#" class="underline"><?php echo $row["category"] ?></a>
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2 -mx-2 mb-4 mt-8">
                        <div class="w-full sm:w-64 px-2">
                            <a href="<?php echo $row["img_path"] ?>" download="<?php echo $row["img_path"] ?>" class="w-full flex justify-center gap-2 items-center rounded-full text-center align-middle text-white py-3 px-4 font-normal hover:shadow-lg" style="background-color:#1A4D2E;">
                                Télécharger l'image
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:currentColor"><path d="m12 16 4-5h-3V4h-2v7H8z"></path><path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path></svg>
                            </a>
                        </div>
                        <div class="w-full sm:w-56 px-2">
                            <a href="#">
                                <button class="w-full flex justify-center gap-2 items-center text-center align-middle bg-gray-300 text-black py-3 px-4 font-normal rounded-full" style="background-color:#E8DFCA">
                                    Partager l'image
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:currentColor"><path d="M11 7.05V4a1 1 0 0 0-1-1 1 1 0 0 0-.7.29l-7 7a1 1 0 0 0 0 1.42l7 7A1 1 0 0 0 11 18v-3.1h.85a10.89 10.89 0 0 1 8.36 3.72 1 1 0 0 0 1.11.35A1 1 0 0 0 22 18c0-9.12-8.08-10.68-11-10.95zm.85 5.83a14.74 14.74 0 0 0-2 .13A1 1 0 0 0 9 14v1.59L4.42 11 9 6.41V8a1 1 0 0 0 1 1c.91 0 8.11.2 9.67 6.43a13.07 13.07 0 0 0-7.82-2.55z"></path></svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php       
        } else {
            echo "Aucun article trouvé avec cet identifiant.";
        }
        } else {
            echo "Aucun identifiant d'article fourni.";
        }
        $mysqli->close();
    ?>

    <!-- Footer -->
    <?php include("components/footer.php") ?>

    <!-- JS files -->
    <?php include("components/script.php") ?>

</body>
</html>