<header class="sticky top-0 backdrop-blur bg-slate-200 p-5 shadow-2xl flex justify-between">
    <a href="<?= BASE_URL ?>home">
        <h1 class="text-2xl font-bold text-gray-700 hover:opacity-80 transition-all duration-300">Library</h1>
    </a>

    <div class="col-span-1 flex items-center justify-end gap-5">
        <div class="font-bold text-gray-700">
            Welcome <?= ucfirst($data['username']) ?>
        </div>
        
        <?php if ($data['role'] == 'admin') { ?>
            <a href="<?= BASE_URL ?>upload"  class="text-gray-700 font-bold hover:bg-slate-700 transition-all duration-300 hover:text-white rounded-lg px-4 py-1">
                Upload
            </a>
        <?php } ?>

        <a href="<?= BASE_URL ?>login/logout" class="text-gray-700 font-bold hover:bg-slate-700 transition-all duration-300 hover:text-white rounded-lg px-4 py-1">
            Logout
        </a>
    </div>
</header>