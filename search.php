<?php

    include('components/link.php');
    include("components/script.php");

    // Connexion à la base de données
    $db = new PDO('mysql:host=localhost;dbname=phoraa;charset=utf8', 'root', '');

    echo '
    <div class="flex flex-wrap justify-center align-middle items-center mt-10">
      <div class="block">
        <h1 class="font-bold text-black text-3xl sm:text-5xl">
          Résultats de "' . $mot_cle = trim($_POST['searchImg']) .'"
        </h1>
      </div>
    </div>
    ';

    // Vérifier si le formulaire a été soumis
    if (isset($_POST['searchImg'])) {
    // Récupérer le mot-clé de la recherche
    $mot_cle = trim($_POST['searchImg']);

    // Préparer la requête SQL
    $requete = "SELECT * FROM all_img WHERE title LIKE '%" . $mot_cle . "%'";

    // Exécuter la requête
    $resultat = $db->query($requete);

    // Afficher les résultats
    if ($resultat->rowCount() > 0) {
        echo '<div class="flex flex-wrap justify-between">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3 xl:grid-cols-3 lg:gap-8 p-6 md:p-10 lg:p-40 sm:p-40">';

        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo ' <a href="view.php?id=' . $row["id"] . '" class="group relative block bg-black rounded-lg" style="border-radius:15px;">
                    <img src="' . $row["img_path"] . '" class="absolute inset-0 h-full w-full object-cover opacity-50 transition-opacity group-hover:opacity-50" style="border-radius:15px;" />
                    <div class="relative p-4 sm:p-6 lg:p-8">
                    <p class="text-sm font-medium uppercase tracking-widest" style="color:var(--white);">' . $row["category"] . '</p>
                    <div class="mt-32 sm:mt-48 lg:mt-64">
                        <div class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                        <p class="text-1xl text-white">
                            ' . $row["title"] . '
                        </p>
                        </div>
                    </div>
                    </div>
                </a>';
        }

        echo '  </div>
            </div>
            </div>
            <br>';
    } else {
        echo 'Aucun résultat trouvé.';
    }
    } else {
    // Afficher le formulaire de recherche (à adapter en HTML)
        echo 'Aucun résultat !';
    }

?>
