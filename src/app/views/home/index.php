<div class="w-full min-h-screen bg-slate-200 p-5 grid place-items-center">
    <div class="bg-white shadow-2xl p-8 rounded-lg flex flex-col gap-5">
        <h1 class="text-3xl font-bold text-gray-700 text-center">Library</h1>

        <div class="flex flex-col gap-2">
            <div class="flex w-1/3 justify-end self-end relative">
                <input
                    type="text"
                    name="search"
                    id="search"
                    class="shadow border rounded py-2 pl-3 pr-10 text-gray-700 leading-tight focus:outline-2
                    hover:shadow-lg transition-all duration-300 w-full"
                    placeholder="Search Books..."
                >
                <button class="absolute right-4 top-2">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        
            <table>
                <thead>
                    <tr>
                        <td class="border px-4 py-1 text-center font-bold">No</td>
                        <td class="border px-4 py-1 text-center font-bold">Name</td>
                        <td class="border px-4 py-1 text-center font-bold">Description</td>
                        <td class="border px-4 py-1 text-center font-bold">Author</td>
                        <td class="border px-4 py-1 text-center font-bold">Release Date</td>
                        <td class="border px-4 py-1 text-center font-bold">Action</td>
                    </tr>
                </thead>
    
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $book): ?>
                        <!-- TODO: pagination -->
                        <tr>
                            <td class="border px-4 py-1 text-center"><?= $i ?></td>
                            <td class="border px-4 py-1 text-center font-bold">
                                <?= $book['title'] ?>
                            </td>
                            <td class="border px-4 py-1 max-w-[300px] break-words line-clamp-2">
                                <?= $book['description'] ?>
                            </td>
                            <td class="border px-4 py-1 text-center font-bold">
                                <?= $book['author'] ?>
                            </td>
                            <td class="border px-4 py-1 text-center">
                                <?= date('d F Y', strtotime($book['release_date'])) ?>
                            </td>
                            <td class="border px-4 py-1 text-center">
                                <a href="<?= $book['book_url'] ?>" style="text-decoration: none; color: black;">
                                    <button class="bg-blue-500 border-none shadow-lg hover:shadow-xl rounded-lg text-white font-bold px-4 py-1 transition-all duration-300">
                                        Read Book
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="flex justify-center gap-2 mt-5">
                <button class="text-slate-700 border-none hover:opacity-80 rounded-lg font-bold px-4 py-1 transition-all duration-300">
                    <
                </button>
                <button class="bg-slate-700 border-none shadow-lg hover:opacity-80 rounded-lg text-white font-bold px-4 py-1 transition-all duration-300">
                    1
                </button>
                <button class="bg-slate-700 border-none shadow-lg hover:opacity-80 rounded-lg text-white font-bold px-4 py-1 transition-all duration-300">
                    2
                </button>
                <button class="bg-slate-700 border-none shadow-lg hover:opacity-80 rounded-lg text-white font-bold px-4 py-1 transition-all duration-300">
                    3
                </button>
                <button class="text-slate-700 border-none hover:opacity-80 rounded-lg font-bold px-4 py-1 transition-all duration-300">
                    >
                </button>
            </div>
        </div>
    </div>
</div>