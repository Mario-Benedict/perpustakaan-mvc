<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <!-- styles -->
    <link rel="stylesheet" href="../public/dist/css/style.css">

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

        <div class="bg-white shadow-2xl p-8 rounded-lg max-w-[500px] w-full">
        <h1 class="text-3xl font-bold text-gray-700 text-center">Edit</h1>
            
            <form action="" class="flex flex-col gap-5 w-full" method="post">
                <div class="flex flex-col gap-3">
                    <label for="username" class="text-gray-700 font-bold">Book Name</label>
                    <input
                        type="text"
                        name="book_name"
                        id="book_name"
                        class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-2
                        hover:shadow-lg transition-all duration-300"
                        placeholder="e.g. Harry Potter"
                    >
                </div>

                <div class="flex flex-col gap-3">
                    <label for="email" class="text-gray-700 font-bold">Book Link</label>
                    <input
                        type="text"
                        name="book_link"
                        id="book_link"
                        class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-2
                        hover:shadow-lg transition-all duration-300"
                        placeholder="https://example.com/..."
                    >
                </div>

                <div class="flex flex-col gap-3">
                    <label for="password" class="text-gray-700 font-bold">Description</label>
                    <input
                        type="text"
                        name="description"
                        id="description"
                        class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-2
                        hover:shadow-lg transition-all duration-300"
                        placeholder="Book Description"
                    >
                </div>

                <div class="flex flex-col gap-3">
                    <label for="confirm_password" class="text-gray-700 font-bold">Author</label>
                    <input
                        type="text"
                        name="author"
                        id="author"
                        class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-2
                        hover:shadow-lg transition-all duration-300"
                        placeholder="e.g. J.K. Rowling"
                    >
                </div>

                <div class="flex flex-col gap-3">
                    <label for="confirm_password" class="text-gray-700 font-bold">Release</label>
                    <input
                        type="text"
                        name="release"
                        id="release"
                        class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-2
                        hover:shadow-lg transition-all duration-300"
                        placeholder="e.g. 2001"
                    >
                </div>

                <button
                    type="submit"
                    name="submit"
                    class="bg-slate-700 hover:opacity-80 text-white font-bold py-2 px-4 rounded transition-all duration-300"
                >
                    Submit
                </button>
            </form>
        </div>
    </div>
</body>
</html>