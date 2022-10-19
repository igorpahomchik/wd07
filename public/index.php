
//$arr = [];
//for ($i=1;$i < 10; $i++){
//    $arr[$i] = $i;
//    }
//var_dump ($arr);

//for ($i = 1; $i <= 5; $i++){
//    echo "hhhhh";
//    echo "<br>";
//}
//$arr = [2,45,66,5656,5,'fref' =>8,9,9];
//foreach ($arr as $key => $item){
//    echo $key.":".$item;
//    echo '<br>';
//}

//$arr = [];
//$i = 0;
//
//while ($i<10){
//    $i++;
//    $j = random_int(1,100);
//    $arr[]=$j;
//}
//var_dump($arr);

//$arr = [1,2,3,4,5,6,7,8,9,10];
//foreach ($arr as $item){
//    if($item%2 == 0){
//        echo $item;
//    }
//}


//$i= 0;
//$arr = [1,2,3,4,5,6,7,8,9,10];
//foreach ($arr as $item){
//    $i=$i + $item;
//}
//echo $i;
<?php
//$pages= [
//    ['title' => 'kkkfkfkfkfk1',
//   'content' => 'jojokokokok1'
//    ],
//    ['title' => 'kkkfkfkfkfk2',
//        'content' => 'jojokokokok2'
//    ],
//    ['title' => 'kkkfkfkfkfk3',
//        'content' => 'jojokokokok3'
//    ],
//    ['title' => 'kkkfkfkfkfk4',
//        'content' => 'jojokokokok4'
//    ],];
$arr = [
    [1,2,3,4,5,6,7],
    [8,9,10,11],
    [12,15,17,111],
];
    $sum = 0;
    for ($i=0; $i < count($arr); $i++){
        print_r($arr[$i]);
        for ($j=0; $j < count($arr[$i]); $j++){
        $sum += $arr[$i][$j];
        }
    }
    echo $sum;
//
//    foreach ($pages as $page){
//        foreach ($page as $key => $item){
//            echo $key.":".$item;
//        }
//    }
include '/var/www/html/src/pages.php'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php foreach ($pages as $page):?>
    <div class="post">
        <h2><?=$page['title']?></h2>
        <p><?=$page['content']?></p>
        <a href="#">Link</a>
    </div>
    <?php endforeach;?>

</body>
</html>  
