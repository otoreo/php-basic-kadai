<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         class Food{
             // プロパティを定義する
             private $name;
             private $price;
    
             // メソッドを定義する
             function show_price() {
                echo $this->price;
             }

             // コンストラクタを定義する
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;
            }
          }

             // インスタンス化する
             $food = new Food('potato', 250,);
 
             // インスタンス$userの各プロパティの値を出力する
             print_r($food) ;

             echo '<br>';

       


         class Animal{
            // プロパティを定義する
             private $name;
             private $height;
             private $weight;
         

             // メソッドを定義する
             function show_height() {
                echo $this->height;
             }

             // コンストラクタを定義する
             public function __construct(string $name, int $height, int $weight) {
                 $this->name = $name;
                 $this->height = $height;
                 $this->weight = $weight;
            }
        }

             // インスタンス化する
             $animal = new Animal('dog', 60, 5000,);
 
             // インスタンス$userの各プロパティの値を出力する
             print_r($animal);


             echo '<br>';

            // メソッドにアクセスして実行する
            echo $food->show_price();
            echo '<br>';
            echo $animal->show_height();
         ?>
     </p>
</body>

</html>      