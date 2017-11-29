<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','gameonline');

$con = mysqli_connect(HOST,USER,PASS,DB);

$sql =
"select transaksi.id, transaksi.appid, game_list.name,game_list.img,
transaksi.nim, users.first_name, users.last_name, transaksi.jurusan
from transaksi
join users on users.id=transaksi.id
join game_list on game_list.appid=transaksi.appid
order by transaksi.appid";

//Execetute Query diatas
 $query = mysqli_query($con,$sql);
 while($dt=mysqli_fetch_array($query)){
  $item[] = array(
   "id"=>$dt["id"],
   "appid"=>$dt["appid"],
   "name"=>$dt["name"],
   "img"=>$dt["img"],
   "nim"=>$dt["nim"],
   "first_name"=>$dt["first_name"],
   "last_name"=>$dt["last_name"],
   "jurusan"=>$dt["jurusan"],
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
