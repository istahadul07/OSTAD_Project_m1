
<?php
echo"Enter units:";
$unit=(int)readline();

if($unit<=100)
{
    $bill=$unit*5;

}
elseif($unit<=200)
{
    $bill=100*5+($unit-100)*10;
}
elseif($unit<=300)
{
    $bill=100*5+100*10+($unit-200)*15;
}
else{
    $bill=100*5+100*10+100*15+($unit-300)*20;
}
echo"Total bill :$bill";
