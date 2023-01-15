<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>

</head>

<body>
  <?php


  $file = "data.json";
  $json = file_get_contents($file); //指定したファイルの要素をすべて取得する
  // echo "---------------------------<br>";
  // print_r($json);
  // echo "<br>";
  // echo "---------------------------<br>";

  $posts = json_decode($json, true); //json形式のデータを連想配列の形式にする
  // echo "---------------------------<br>";
  // print_r($posts);
  // echo "<br>";
  // echo "---------------------------<br>";

  foreach ($posts as $post) {
    echo "<div class ='card'>";
    echo "<div class ='dttm'>" . $post["date"] . "</br></div>";
    echo "<div class ='post'>" . $post["post"] . "</br></div>";
    echo "</div>";
  }




  // $user_data = array(
  //             'name' => $user['name'],
  //             'age' => $user['age'],
  //             'language' => $user['language']
  //         );


  // require_once('Post.php');

  // $posts[0] = new Post('500万人突破するまで生配信！！！');
  // $posts[1] = new Post('頼む！行かないでくれ！');
  // $posts[2] = new Post('登録即解除とかしたらどうなるん');
  // $posts[3] = new Post('お前らは大嫌いだろうけど素直に凄いわ');

  // for ($i = 0; $i <= count($posts) - 1; $i++) {
  //   echo "<div class ='card'>";
  //   echo "<div class ='dttm'>" . $posts[$i]->dttm . "</br></div>";
  //   echo "<div class ='post'>" . $posts[$i]->post . "</br></div>";
  //   echo "</div>";
  // }
  ?>
  <h3>以上がポストです</h3>
</body>

</html>