<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','gameonline');

$con = mysqli_connect(HOST,USER,PASS,DB);

$sql =
"select game_list.name, game_list.img, COUNT(transaksi.appid) as jumlah FROM transaksi
JOIN game_list ON game_list.appid=transaksi.appid
GROUP BY game_list.appid
order by COUNT(transaksi.appid) desc";

//Execetute Query diatas
 $query = mysqli_query($con,$sql);
 while($dt=mysqli_fetch_array($query)){
  $item[] = array(
   "name"=>$dt["name"],
   "img"=>$dt["img"],
   "jumlah"=>$dt["jumlah"]
  );
 }

 //Menampung data yang dihasilkan
 $json = array(
    'result' => 'Success',
    'item' => $item
   );

 //Merubah data kedalam bentuk JSON
 echo json_encode($json);
?>
