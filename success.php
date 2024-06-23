<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <!-- Meta(Keywords, description, robots...) -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,nofollow">

    <!-- SCSS files -->
    <?php include("components/link.php") ?>

    <!-- JS files -->
    <?php include("components/script.php") ?>
    <script src="lib/vue.js"></script>

    <!-- Title of page -->
    <title>Redirection</title>
</head>
<style>
    svg
    {
        animation: zoomIn 1s;
    }
</style>
<body style="background-color:var(--bg);">
    <main>
        <div class="flex flex-wrap justify-center mt-40">
            <div class="block">
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" viewBox="0 0 24 24" style="fill:#fff;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M9.999 13.587 7.7 11.292l-1.412 1.416 3.713 3.705 6.706-6.706-1.414-1.414z"></path></svg>
                </div>
                <br>
                <h2 class="font-normal text-center text-white text-2xl mb-2">
                    Votre photo à été publier avec succès !
                </h2>
                <p class="text-1xl text-center text-gray-300">
                    Vous serez rediriger vers la page d'exploration dans quelques secondes.
                </p>
            </div>
        </div>
    </main>
    <script>
        setTimeout(() => {
            // Redirection, feed.php
            location.href = "feed.php";
        }, 2000);
    </script>
</body>

</html>