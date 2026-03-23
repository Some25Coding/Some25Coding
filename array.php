<?php
$proglang=array("php","c++","java","js","phyton"); //indexed array
/*echo"$proglang[0]<br>;
echo"$proglang[1]<br>;
echo"$proglang[2]<br>;
echo"$proglang[3]<br>;
echo"$proglang[4]<br>;*/
foreach($proglang as $value)
    echo"the programming language.$value<br>";
$emp = array(
   "name" => "feti",
   "id" => "asco123/14",
   "salary" => 16000,
   "position" => "master",
);
echo "name: " . $emp['name'];
echo"<br>";
foreach ($emp as $key => $value) {
    echo "The $key is $value <br>";
}
$stud=array(
   array("Nahom","G-12<sup>11</sup>","wdd","B<sup>+</sup>"),
   array("Feruza","G-12<sup>11</sup>","wdd","A<sup>+</sup>"),
   array("Fasika","G-12<sup>11</sup>","wdd","A"),
   array("Tigistu","G-12<sup>11</sup>","wdd","B"),
);
for($row=0;$row<4;$row++) {
    for($col=0;$col<4;$col++) {
        echo$stud[$row][$col];
    }
    echo"<br>";
}

?>