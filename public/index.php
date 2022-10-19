

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
include __DIR__.'/../src/pages.php';
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
