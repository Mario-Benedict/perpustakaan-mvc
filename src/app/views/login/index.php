<?= Flash::flash(); ?>

<div class="grid place-items-center bg-slate-200 w-full min-h-screen p-5">
    <div class="max-w-[500px] w-full shadow-2xl bg-white rounded-lg p-8 grid place-items-center gap-10">
        <h1 class="text-3xl font-bold text-gray-700">Login</h1>

        <form action="<?= BASE_URL ?>login/login" class="flex flex-col gap-5 w-full" method="post">
            <div class="flex flex-col gap-3">
                <label for="email" class="text-gray-700 font-bold">Email or Username</label>
                <input
                    type="text"
                    name="identifier"
                    id="email"
                    class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-2
                    hover:shadow-lg transition-all duration-300"
                    placeholder="Your Email or Username"
                >
            </div>

            <div class="flex flex-col gap-3">
                <label for="password" class="text-gray-700 font-bold">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-2
                    hover:shadow-lg transition-all duration-300"
                    placeholder="Your Password"
                    autocomplete="on"
                >
            </div>

            <button
                type="submit"
                class="bg-slate-700 hover:opacity-80 text-white font-bold py-2 px-4 rounded transition-all duration-300"
            >
                Login
            </button>

            <div class="flex justify-between items-center">
                <span class="text-gray-700">
                    Don't have an account?
                    <a href="<?= BASE_URL ?>register" class="text-slate-700 hover:opacity-80 font-bold transition-all duration-300">Register</a>
                </span>
                
                <a href="#" class="text-slate-700 hover:opacity-80 font-bold transition-all duration-300">Forgot Password?</a>
            </div>
        </form>
    </div>
</div>