<?php
    $users = [
        ['id'=> 1, 'f_name' => 'Ani', 'l_name' => 'Grigoryan'],
        ['id'=> 2, 'f_name' => 'Ani', 'l_name' => 'Grigoryan'],
        ['id'=> 3, 'f_name' => 'Ani', 'l_name' => 'Grigoryan'],
        ['id'=> 4, 'f_name' => 'Ani', 'l_name' => 'Grigoryan'],
        ['id'=> 5, 'f_name' => 'Ani', 'l_name' => 'Grigoryan'],
    ]
?>



<!DOCTYPE html>
<html>
<head>
    <title>Complete interface</title>
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        .search-box {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
        .search-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .search-results {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Complete interface</h1>
        <form action="" method="get">
            <input type="text" class="search-box" name="query" placeholder="serch complete interface..." required>
            <button type="submit" class="search-button">search</button>
        </form>
        <div class="search-results">
            <?php
            // if (isset($_GET['query'])) {
                // $query = $_GET['query'];
                
                // $searchResults = array(
                //     "complete interface1",
                //     "complete interface2",
                //     "complete interface3",
                    
                // );

                // if (count($users) > 0) {
                //     echo "<h2>resulrs found</h2>";
                //     echo "<ul>";
                    for ($i = 0; $i < count($users); $i++) {
                            echo $users[$i]['id'] . '<br>';
                           echo $users[$i]['f_name'];
                           echo $users[$i]['l_name'] . '<br>';      
                //     echo "</ul>";
                // } else {
                //     echo "<p>Nothing found, try again:</p>";
                // }
        
            ?>

            <?php
                    // }
            }
            ?>
        </div>
    </div>
</body>
</html>
