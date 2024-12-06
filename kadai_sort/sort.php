<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array,$order) {
            // 昇順にソート

            if($order===true){
                echo "昇順にソートします。<br>";
                sort($array);
            } else{
                 echo "降順にソートします。<br>";
                 rsort($array);
                }
            
            foreach($array as $num){
                echo "{$num}<br>";
              }
      
        }
        
             // 引数として配列を渡して関数を実行
             $nums = [15, 4, 18, 23, 10];
             sort_2way($nums, true);
             sort_2way($nums, false);
         ?>
    </p>
</body>

</html>