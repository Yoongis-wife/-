<?php
abstract class Body
{
    function __construct()
    {
    }
    abstract function SurfaceArea();
    abstract function Volume();
}
class Parallelepiped extends Body
{
    public $a;
    public $b;
    public $c;
    function __construct($a,$b,$c)
    {
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }
    public function SurfaceArea()
    {
        $s=2*($a*$b+$b*$c+$a*$c);
        return $s;
    }
    function Volume()
    {
        echo $a*$b*$c;
    }
}
class Ball extends Body
{
    public $r;
    function __construct($r)
    {
        $this->r=$r;
    }
    function SurfaceArea()
    {
        echo 4*round(pi(),2)*pow($r,2);
    }
    function Volume()
    {
        echo round(4/3,2)*pi()*pow($r,3);
    }
}
$parallelepiped = new Parallelepiped(1,2,3);
$ball=new Ball(5);
echo $parallelepiped.SurfaceArea();
// $parallelepiped.Volume();
// $ball.SurfaceArea();
// $ball.Volume();
?>
