<?php
/**
 * @Author: Marte
 * @Date:   2018-11-05 08:50:53
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-11-05 09:58:23
 */
//转换整形
 function exOne()
 {
    $ip="192.168.1.1";
    $trans=array("."=>"");
    echo strtr($ip,$trans);
 }
 //孙悟空掌管蟠桃园
 //递归
 function exTwo($n)
 {
    //$n天数
    if($n==1)
    {
        return 1; //剩一个
    }else
    {
        return 2*(exTwo($n-1)+1);
    }
 }
 //非递归
 function exTw()
 {
    $n=1;
    for ($i=9; $i>=1; $i--) {
        $n=($n+1)*2;
    }
    echo $n;
 }
//计算整数位数
function exThree($n,$t=1,$f=0)
{
    if(($n/$t)<1)
    {
        return $f;
    }else
{
    $t=$t*10;
    $f=$f+1;
    return exThree($n,$t,$f);
}
}
//定义car类
class Car{
    public static $name="奥迪";
    public static $weight="300kg";
}
class Engine
{
    public function drive()
    {
        echo "Driver will be drive!";
    }
}
class Jeep extends Car
{

}
// $ob=new Jeep;
// $name=$ob::$name;
// echo $name;
// $a=exThree(11111);
// echo $a;
 // exOne();
 // $a=exTwo(10);
 // echo $a;
  // exTw();

?>