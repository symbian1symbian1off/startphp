<?php
echo "how old are you ";
$n= "10";
/*  switch باید () بگدذارید بشده الزامنی است .حتما توجه داشته باشید که جلوی دستور  */
switch ($n) {
case 5:
    $result = "you are too young !!!";
    break ;
case 10 :
    $result = "good age too start programing ";
    break;
default :
    $result = "you must chose 10 or 5  as your age ";
    break;
}
echo $result 
    ?>
