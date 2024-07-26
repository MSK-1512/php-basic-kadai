<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>課題：PHPマニュアルを参照してソート関数を実装してみよう</title>
    </head>

    <body>
        <p>
            <?php
            function sort_2way ($order) {
                $nums =[15, 4, 18, 23, 10];
                if ($order === true) {
                    echo '昇順にソートします。<br>';
                    sort($nums);
                } else {
                    echo '降順にソートします。<br>';
                    rsort($nums);
                }
                foreach($nums as $num){
                    echo $num .'<br>';
                }
            }
            sort_2way (true);
            sort_2way (false);
            ?>
        </p>
    </body>
    
</html>