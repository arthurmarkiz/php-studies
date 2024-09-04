<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#111]">

    <div class="flex flex-col justify-center items-center">
        <div class="flex justify-center items-center mt-20 p-4 text-2xl">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"
            class="flex flex-col items-center">
                <div class="flex items-center justify-center space-x-6 mb-8">
                    <label class="flex flex-col space-y-4">
                        <input type="number" name="num1" placeholder="First number" class="px-3 py-1 rounded-md outline-none">
                        <input type="number" name="num2" placeholder="Second number" class="px-3 py-1 rounded-md outline-none">
                    </label>
                    <select name="operator" id="operator" class="outline-none rounded-md p-1 border-none">
                        <option value="add">+</option>
                        <option value="subtract">-</option>
                        <option value="multiply">*</option>
                        <option value="divide">/</option>
                    </select>
                </div>
                <button class="px-6 py-1 text-[#111] font-bold bg-amber-500 rounded-md">Calculate</button>
            </form>
        </div>

        <?php

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                // Grab data from inputs
                $num1 = filter_input(INPUT_POST, 'num1', FILTER_SANITIZE_NUMBER_FLOAT);
                $num2 = filter_input(INPUT_POST, 'num2', FILTER_SANITIZE_NUMBER_FLOAT);
                $operator = htmlspecialchars($_POST['operator']);

                // Error handlers
                $errors = false;

                if (empty($num1) || empty($num2) || empty($operator)) {
                    echo '<p class="text-red-500 mt-12 text-2xl"> Fill in all fields! </p>';
                    $errors = true;
                }
                else if (!is_numeric($num1) || !is_numeric($num2)) {
                    echo '<p class="text-red-500 mt-12 text-2xl"> Only write numbers! </p>';
                    $errors = true;
                }

                // Calculate the numbers if no errors
                if (!$errors) {
                    $value = 0;
                    switch ($operator) {
                        case 'add':
                            $value = $num1 + $num2;
                            break;
                        case 'subtract':
                            $value = $num1 - $num2;
                            break;
                        case 'multiply':
                            $value = $num1 * $num2;
                            break;
                        case 'divide':
                            $value = $num1 / $num2;
                            break;
                        default:
                            echo '<p class="text-red-500 font-bold mt-12 text-2xl"> Something went HORRIBLY wrong! </p>';
                    }

                    echo '<p class="text-white font-bold mt-12 text-2xl"> Result = ' . $value . '</p>';
                }
            }
        ?>
        
    </div>
</body>
</html>