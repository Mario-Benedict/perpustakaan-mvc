<?= Flash::flash(); ?>

<div class="w-full min-h-screen bg-slate-200 p-5 grid place-items-center">
    <div class="bg-white shadow-2xl p-8 rounded-lg max-w-[500px] w-full">
        <h1 class="text-3xl font-bold text-gray-700 text-center">Upload</h1>
        
        <form action="<?= BASE_URL ?>upload/upload" class="flex flex-col gap-5 w-full" method="post">
            <div class="flex flex-col gap-3">
                <label for="book_name" class="text-gray-700 font-bold">Book Name</label>
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
                <label for="book_link" class="text-gray-700 font-bold">Book Link</label>
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
                <label for="description" class="text-gray-700 font-bold">Description</label>
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
                <label for="author" class="text-gray-700 font-bold">Author</label>
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
                <label for="release" class="text-gray-700 font-bold">Release</label>
                <input
                    type="date"
                    name="release"
                    id="release"
                    class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-2
                    hover:shadow-lg transition-all duration-300"
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