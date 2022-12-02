<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- styles -->
    <link rel="stylesheet" href="../public/dist/css/style.css">

    <title>Register</title>
</head>
<body>
    <div class="grid place-items-center bg-slate-200 w-full min-h-screen p-5">
        <div class="max-w-[500px] w-full shadow-2xl bg-white rounded-lg p-8 grid place-items-center gap-10">
            <h1 class="text-3xl font-bold text-gray-700">Register</h1>

            <form action="" class="flex flex-col gap-5 w-full">
                <div class="flex flex-col gap-3">
                    <label for="name" class="text-gray-700 font-bold">Username</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-2
                        hover:shadow-lg transition-all duration-300"
                        placeholder="Username"
                    >
                </div>

                <div class="flex flex-col gap-3">
                    <label for="email" class="text-gray-700 font-bold">Email</label>
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

                <div class="flex flex-col gap-3">
                    <label for="confirm_password" class="text-gray-700 font-bold">Confirm Password</label>
                    <input
                        type="password"
                        name="confirm_password"
                        id="confirm_password"
                        class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-2
                        hover:shadow-lg transition-all duration-300"
                        placeholder="Confirm Password"
                    >
                </div>

                <button
                    type="submit"
                    class="bg-slate-700 hover:opacity-80 text-white font-bold py-2 px-4 rounded transition-all duration-300"
                >
                    Register
                </button>

                <p class="text-center text-gray-700">Already have an account? <a href="login" class="text-slate-700 font-bold">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>