<header class="bg-white fixed top-0 w-full p-0 p-2 sm:p-2" style="z-index:1000;">
    <div class="mx-auto flex align-middle max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
        <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-black text-2xl font-bold whitespace-nowrap" style="color: var(--bg);font-family:cursive">Phoraa</span>
        </a>

        <div class="flex flex-1 items-center justify-end md:justify-between">
            <nav aria-label="Global" class="hidden md:block">
                <div class="flex">
                    <form class="w-full max-w-md mx-auto" action="search.php" method="post">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-4 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-100 rounded-full bg-gray-50 outline-none" placeholder="Rechercher une image"  name="searchImg" style="width:390px;" required />
                        </div>
                    </form>
                </div>
            </nav>
            <div class="flex align-middle items-center gap-1">
                <div class="sm:flex sm:items-center sm:align-middle sm:gap-4">
                    <div class="flex align-middle items-center gap-2">
                        <ul class="flex align-middle gap-6">
                            <li style="list-style: none;">
                                <a href="#" class="block py-2 px-3 mt-3 font-bold text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0">
                                    <img src="assets/img/bell.png" height="35" width="25">
                                </a>
                            </li>
                            <li class="sm:hidden block" style="list-style: none;">
                                <a href="#" class="block py-2 px-2 mt-3 font-bold text-gray-900 rounded-full bg-black hover:bg-gray-100 md:hover:bg-transparent md:p-0">
                                    <img src="assets/img/import.png" height="35" width="25">
                                </a>
                            </li>
                            <?php
                          
                            ?>
                            <li class="hidden sm:block">
                                <a href="post.php" class="btn-bg-color flex align-middle items-center  gap-2">
                                    Importer
                                    <span>
                                        <img src="assets/img/import.png" height="19" width="19">
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</header>