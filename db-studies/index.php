<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Studies</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex justify-center h-screen w-screen bg-gray-900">
        <div class="flex -mt-40 items-center space-x-10">

        <!-- SIGNUP -->
            <div class="bg-white rounded-lg py-12 px-20 shadow-lg shadow-black/50">
                <h1 class="text-4xl font-bold mb-8 text-center">Signup</h1>

                <form action="includes/fh.inc.php" method="post"
                class="flex flex-col items-center text-xl">
                    <input autocomplete="off" name="email" type="text" placeholder="E-mail" class="border-2 border-gray-300 rounded-md px-4 py-1 mb-3 outline-gray-400">
                    <input autocomplete="off" name="username" type="text" placeholder="Username" class="border-2 border-gray-300 rounded-md px-4 py-1 mb-3 outline-gray-400">
                    <input autocomplete="off" name="pwd" type="password" placeholder="Password" class="border-2 border-gray-300 rounded-md px-4 py-1 mb-8 outline-gray-400">

                    <button class="px-12 py-3 bg-emerald-800 text-white font-bold rounded-md shadow-md shadow-black/20 hover:brightness-125 hover:shadow-black/40 duration-300 tracking-wide">Signup</button>
                </form>
            </div>

            <!-- UPDATE -->
            <div class="bg-white rounded-lg py-12 px-20 shadow-lg shadow-black/50">
                <h1 class="text-4xl font-bold mb-8 text-center">Update Account</h1>

                <form action="includes/fh.inc.php" method="post"
                class="flex flex-col items-center text-xl">
                    <input autocomplete="off" name="email" type="text" placeholder="E-mail" class="border-2 border-gray-300 rounded-md px-4 py-1 mb-3 outline-gray-400">
                    <input autocomplete="off" name="username" type="text" placeholder="Username" class="border-2 border-gray-300 rounded-md px-4 py-1 mb-3 outline-gray-400">
                    <input autocomplete="off" name="pwd" type="password" placeholder="Password" class="border-2 border-gray-300 rounded-md px-4 py-1 mb-8 outline-gray-400">

                    <button class="px-12 py-3 bg-amber-600 text-white font-bold rounded-md shadow-md shadow-black/20 hover:brightness-125 hover:shadow-black/40 duration-300 tracking-wide">Update</button>
                </form>
            </div>

            <!-- DELETE -->
            <div class="bg-white rounded-lg py-12 px-20 shadow-lg shadow-black/50">
                <h1 class="text-4xl font-bold mb-8 text-center">Delete Account</h1>

                <form action="includes/fh.inc.php" method="post"
                class="flex flex-col items-center text-xl">
                    <input autocomplete="off" name="email" type="text" placeholder="E-mail" class="border-2 border-gray-300 rounded-md px-4 py-1 mb-3 outline-gray-400">
                    <input autocomplete="off" name="username" type="text" placeholder="Username" class="border-2 border-gray-300 rounded-md px-4 py-1 mb-3 outline-gray-400">
                    <input autocomplete="off" name="pwd" type="password" placeholder="Password" class="border-2 border-gray-300 rounded-md px-4 py-1 mb-8 outline-gray-400">

                    <button class="px-12 py-3 bg-red-800 text-white font-bold rounded-md shadow-md shadow-black/20 hover:brightness-125 hover:shadow-black/40 duration-300 tracking-wide">Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>