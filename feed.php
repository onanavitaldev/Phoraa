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
    <title>Phoraa - Promouvoir la culture africaine avec des photos</title>
</head>

<body>
    <!-- Navigation -->
    <?php include("components/nav.php") ?>
    <br><br>
    <main>
        <!-- Récents(10) -->
        <?php include("components/all.php") ?>
        <div class="flex justify-center">
            <button id="open_tools" onclick="showSearch()">
                <a href="#" class="btn-bg-color flex align-middle items-center gap-2">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    Rechercher une image
                </a>
            </button>
        </div>
    </main>

    <!-- Footer -->
    <?php include("components/footer.php") ?>
</body>

</html>