<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <!-- styles -->
    <link rel="stylesheet" href="../public/dist/css/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/718ba65da2.js" crossorigin="anonymous"></script>

    <title>Home</title>
</head>
<body>
    <header class="sticky top-0 backdrop-blur bg-slate-200 p-5 shadow-2xl flex justify-between">
    <a href="<?= BASE_URL ?>home">
            <h1 class="text-2xl font-bold text-gray-700 hover:opacity-80 transition-all duration-300">Library</h1>
        </a>

        <div class="col-span-1 flex justify-end gap-5">
            <a href="<?= BASE_URL ?>upload"  class="text-gray-700 font-bold hover:bg-slate-700 transition-all duration-300 hover:text-white rounded-lg px-4 py-1">
                Upload
            </a>
            <a href="<?= BASE_URL ?>login/logout" class="text-gray-700 font-bold hover:bg-slate-700 transition-all duration-300 hover:text-white rounded-lg px-4 py-1">
                Logout
            </a>
        </div>
    </header>

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
                            <td class="border px-4 py-1 text-center">No</td>
                            <td class="border px-4 py-1 text-center">Name</td>
                            <td class="border px-4 py-1 text-center">Description</td>
                            <td class="border px-4 py-1 text-center">Author</td>
                            <td class="border px-4 py-1 text-center">Release Date</td>
                            <td class="border px-4 py-1 text-center">Action</td>
                        </tr>
                    </thead>
        
                    <tbody>
                        <tr>
                            <td class="border px-4 py-1 text-center">1</td>
                            <td class="border px-4 py-1 text-center font-bold">Harry Potter</td>
                            <td class="border px-4 py-1 max-w-[300px] break-words line-clamp-2">This is a book about bla bla bla bla bla blaaaaaaaaa aaaaaaaaaa aaaaaaaaaaa aaaaaa aaaaaaaaaaaaaa</td>
                            <td class="border px-4 py-1 text-center font-bold">J.K. Rowling</td>
                            <td class="border px-4 py-1 text-center">2000</td>
                            <td class="border px-4 py-1 text-center">
                                <a href="<?= BASE_URL ?>book/edit/1" style="text-decoration: none; color: black;">
                                    <button class="bg-blue-500 border-none shadow-lg hover:shadow-xl rounded-lg text-white font-bold px-4 py-1 transition-all duration-300">
                                        Read Book
                                    </button>
                                </a>
                        </tr>
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
</body>
</html>