<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900">
    <main class="text-white">
        <form action="includes/formhandler.php" method="post" 
        class="flex flex-col justify-center items-center mt-20">
            <label for="firstname" class="font-bold mb-2">First name:</label>
            <input id="firstname" type="text" name="firstname" placeholder="First name..." class="border-2 border-gray-400 px-4 py-1 mb-6 rounded-md bg-gray-700 outline-none">

            <label for="lastname" class="font-bold mb-2">Last name:</label>
            <input id="lastname" type="text" name="lastname" placeholder="Last name..." class="border-2 border-gray-400 px-4 py-1 mb-6 rounded-md bg-gray-700 outline-none">

            <label for="favouritepet" class="font-bold mb-2">
                Favourite Pet:
            </label>
            <select name="favouritepet" id="favouritepet" 
            class="px-2 py-1 border-2 border-gray-400 rounded-md bg-gray-700 outline-none">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button name="submit" type="submit" 
            class="mt-10 px-6 py-2 bg-red-700 text-white font-bold rounded-md hover:px-7 duration-300 hover:shadow-md hover:shadow-black/25">
            Submit</button>
        </form>
    </main>
</body>
</html>