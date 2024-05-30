<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
    <h1>自訂函式</h1>
    <?php
    include_once "./db.php";
    
    $a = ['A', 'B', 'C', 'D', 'E'];
    $b = [
        '姓名' => '陳靖雯',
        '學號' => '103001',
        '數學' => '99',
        '國文' => 90,
        '英文' => 59
    ];
    
    dd($a);
    dd($b);
    
    /**
     * 在頁面上快速顯示陣列內容
     * direct dump
     * @param $array 輸入的參數需為陣列
     */
    function dd($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    ?>
    <hr>
    三角形-畫星
    <?php
        star();
        star(12);


            // function star($num = 7)
            // {
            //     for ($i = 0; $i < $star; $i++) {
            //         for ($k = 0; $k < $star - 1 - $i; $k++) {
            //             echo "&nbsp;";
            //         }
    
            //         for ($j = 0; $j < $i * 2 + 1; $j++) {
            //             echo "*";
            //         }
            //         echo "<br>";
            //     }
            // }
    ?>

<hr>
    任意多邊形-畫星
    <?php
      starts(正三角形,5);
      starts(菱形,6);
      starts(矩形,13);


            function stars($shape = '正三角形', $stars = 7)
            {
                switch ($shape) {
                    case "正三角形":
                    case 'equilateral triangle':
                        for ($i = 0; $i < $stars; $i++) {
                            for ($k = 0; $k < $stars - 1 - $i; $k++) {
                                echo "&nbsp;";
                            }
                        
                            for ($j = 0; $j < $i * 2 + 1; $j++) {
                                echo "*";
                            }
                            echo "<br>";
                        }
                        break;
                    case '菱形':
                    case 3:
                        $odd = ($stars % 2 == 0) ? $stars + 1 : $stars;
                        $mid = (($odd + 1) / 2) - 1;
                        $tmp = 0;
                        for ($i = 0; $i < $stars; $i++) {
                            if ($i <= $mid) {
                                $tmp = $i;
                            } else {
                                // $tmp--;
                                $tmp = $tmp - 1;
                            }
                            for ($k = 0; $k < $mid - $tmp; $k++) {
                                echo "&nbsp;";
                            }
                            for ($j = 0; $j < $tmp * 2 + 1; $j++) {
                                echo "*";
                            }
                            echo "<br>";
                        }
                        break;
                    case '矩形';
                        for ($i = 0; $i < $stars; $i++) {
                        
                            for ($j = 0; $j < $stars; $j++) {
                                if ($i == 0 || $i == $stars - 1) {
                                    echo "*";
                                } else if ($j == 0 || $j == $stars - 1) {
                                    echo "*";
                                } else {
                                    echo "&nbsp;";
                                }
                            }
                            echo "<br>";
                        }
                        break;
                }
            }
    ?>

    <hr><hr>
    <?php

        dd(all('students', " WHERE `id`<5"));
        dd(find('students', ['uni_id' => 'F200000035', 'parents' => '孔進豐']));
    ?>



</body>
</html>