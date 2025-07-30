<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        function sort_2way (bool $order) {
        $nums = [15, 4, 18, 23, 10 ];

            if($order === true ){
              asort($nums);
              echo '昇順にソートします。<br>';
            }else {
              rsort($nums);
              echo '降順にソートします。<br>';
            }
            foreach ($nums as $num) {
              echo $num . '<br>';
            }
          }
          sort_2way(true);
          sort_2way(false);
        
        ?>
    </p>
</body>

</html>