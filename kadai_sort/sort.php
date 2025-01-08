<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        $array = [15, 4, 18, 23, 10];

        function sort_2way($array, $order)
        {

            if ($order == TRUE) {
                echo "昇順にソートします<br>";
                sort($array);
                foreach ($array as $num) {
                    echo $num;
                    echo '<br>';
                }
            } else {
                echo "降順にソートします<br>";
                rsort($array);
                foreach ($array as $num) {
                    echo $num;
                    echo '<br>';
                }
            }
        }
        sort_2way($array, TRUE);
        sort_2way($array, FALSE);
        ?>
    </p>
</body>

</html>

<!-- rsort() sotr() -->