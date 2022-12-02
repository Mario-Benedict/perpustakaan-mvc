<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- styles -->
    <link rel="stylesheet" href="../public/dist/css/style.css">
    
    <title>Login</title>
</head>
<body>
    <div class="grid place-items-center bg-slate-200 w-full min-h-screen p-5">
        <div class="max-w-[500px] w-full shadow-2xl bg-white rounded-lg p-8 grid place-items-center gap-10">
            <h1 class="text-3xl font-bold text-gray-700">Login</h1>

            <form action="" class="flex flex-col gap-5 w-full">
                <div class="flex flex-col gap-3">
                    <label for="email" class="text-gray-700 font-bold">Email / Username</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-2
                        hover:shadow-lg transition-all duration-300"
                        placeholder="example@gmail.com"
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
                        placeholder="Password"
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
                        <a href="#" class="text-slate-700 hover:opacity-80 font-bold transition-all duration-300">Register</a>
                    </span>
                    
                    <a href="#" class="text-slate-700 hover:opacity-80 font-bold transition-all duration-300">Forgot Password?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>