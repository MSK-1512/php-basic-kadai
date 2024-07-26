<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>課題：クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
    </head>

    <body>
        <p>
            <?php
            class Food {
                private $name;
                private $price;
                public function __construct(string $name, int $price){
                    $this->name = $name;
                    $this->price = $price;
                }
                public function show_price () {
                    echo $this->price . '円<br>';
                }
            }

            class Animal {
                private $name;
                private $height;
                private $weight;
                public function __construct(string $name, int $height, int $weight){
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }
                public function show_height () {
                    echo $this->height . 'cm<br>';
                }
            }
            
            $eggtart = new Food('エッグタルト', 300);
            print_r($eggtart);
            echo '<br>';
            $dog = new Animal('イヌ', 70, 10);
            print_r($dog);
            echo '<br>';
            $eggtart->show_price();
            $dog->show_height();
            ?>
        </p>
    </body>
    
</html>