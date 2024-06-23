<!-- Show the 06 first line of Database -->
<div class="block mt-16 ml-6" id="main">
    <h1 class="font-bold text-black text-2xl sm:text-3xl ml-4 sm:ml-40 sm:-mb-32">Toutes les photos</h1>
    <div class="flex flex-wrap justify-between">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 xl:grid-cols-3 lg:gap-8 p-4 md:p-10 lg:p-40 sm:p-40">
        <?php

            include('config/config.php');

            $sql = "SELECT * FROM all_img ORDER BY theDate DESC";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
            <a href="view.php?id=<?php echo $row["id"] ?>" class="group relative block bg-black rounded-lg" style="border-radius:15px;">
                <img src="<?php echo $row['img_path'] ?>" class="absolute inset-0 h-full w-full object-cover opacity-50 transition-opacity group-hover:opacity-50" style="border-radius:15px;" />
                <div class="relative p-4 sm:p-6 lg:p-8">
                    <p class="text-sm font-medium uppercase tracking-widest" style="color:var(--white);"><?php echo $row["category"] ?></p>
                    <div class="mt-32 sm:mt-48 lg:mt-64">
                        <div class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100">
                            <p class="text-1xl text-white">
                                <?php echo $row["title"] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <?php
                    }
                } else {
                    echo "Aucun article trouvé";
                }

                $mysqli->close();

            ?>
        </div>
    </div>
</div>
<br>