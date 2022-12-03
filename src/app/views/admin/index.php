<?= Flash::flash(); ?>
<div class="w-full min-h-screen bg-slate-200 p-5 grid place-items-center">
    <div class="bg-white shadow-2xl p-8 rounded-lg">
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
                        <td class="border px-4 py-1 text-center font-bold">Admin Actions</td>
                    </tr>
                </thead>
    
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data[0] as $book): ?>
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
                            <td class="border px-4 py-1 text-center">
                                <div class="flex gap-4">
                                    <a href="<?= BASE_URL ?>edit?id=<?= $book['id'] ?>" style="text-decoration: none; color: black;">
                                        <button class="bg-slate-700 border-none shadow-lg hover:shadow-xl rounded-lg text-white font-bold px-4 py-1 transition-all duration-300">
                                            Edit
                                        </button>
                                    </a>

                                    <a href="<?= BASE_URL ?>delete?id=<?= $book['id'] ?>" style="text-decoration: none; color: black;">
                                        <button class="bg-red-700 border-none shadow-lg hover:shadow-xl rounded-lg text-white font-bold px-4 py-1 transition-all duration-300">
                                            Delete
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="flex justify-center gap-2">
                <?php $j = 1; ?>
                <?php if ($_GET['page'] > 1) : ?>
                    <button class="text-slate-700 border-none hover:opacity-80 rounded-lg font-bold px-4 py-1 transition-all duration-300">
                        <a href="admin?page=<?= $_GET['page'] - 1 ?>">
                            <
                        </a>
                    </button>
                <?php endif; ?>
                
                <?php for($j; $j <= $data[1]; $j++): ?>
                    <?php if ($j == $_GET['page'] || (!isset($_GET['page']) && $j == 1)): ?>
                        <button class="bg-black border-none text-white shadow-lg rounded-lg font-bold px-4 py-1 transition-all">
                            <?= $j ?>
                        </button>
                    <?php else: ?>
                        <button class="bg-slate-700 border-none shadow-lg hover:opacity-80 rounded-lg text-white font-bold px-4 py-1 transition-all duration-300">
                            <a href="admin?page=<?= $j ?>">
                                <?= $j ?>
                            </a>
                        </button>
                    <?php endif; ?>
                <?php endfor; ?>
                
                <?php if ($_GET['page'] < $data[1]) : ?>
                    <button class="text-slate-700 border-none hover:opacity-80 rounded-lg font-bold px-4 py-1 transition-all duration-300">
                        <a href="admin?page=<?= $_GET['page'] + 1 ?>">
                            >
                        </a>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>