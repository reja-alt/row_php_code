<?php
CONST check = 5;
class Classy {

    const       STAT = 'S' ; // no dollar sign for constants (they are always static)
    static     $stat = 'Static' ;
    public static     $publ_demo = 'Public Demo' ;
    static     $publ2 = 'Public2' ;
    private    $priv = 'Private' ;
    protected  $prot = 'Protected' ;
    
    function __construct( ){  }
    
    public function showMe( ){
        print '<br> self::STAT: '  .  self::STAT ; // refer to a (static) constant like this
        print '<br> self::$stat: ' . self::$stat ; // static variable
        print '<br>$this->stat: '  . $this->stat ; // legal, but not what you might think: empty result
        // print '<br>$this->publ: '  . $this->publ ; // refer to an object variable like this
        print '<br>$this->publ: '  . $this->priv ;
        print '<br>$this->publ: '  . $this->prot ;
        print 'Public2 value is: '  . self::$stat;
        print 'Public2 demo is: '  . self::$publ_demo;
        print '<br>' ;
    }
    }
    $me = new Classy( ) ;
    $me->showMe() ;

   class Tree {

        public $publ_demo = 'Public Demo' ;

        function leaves() {
            echo 'Leaves produce food' . "<br />";
        }

        function branch() {
            echo 'Branch of tree' . "<br />";
        }

        function root() {
            echo self::leaves() . "<br />";
        }

        function body() {
            return $this->branch() . "<br />";
        }

        function variable_access() {
            echo $this->publ_demo . "<br />";
        }
   }
   $obj = new Tree();
   $obj->root();
   $obj->variable_access();
   echo $obj->body();

   class Point3D
    {
        public $x;
        public $y;
        public $z;                  // the x coordinate of this Point.

        /*
        * use the x and y variables inherited from Point.php.
        */
        public function __construct($xCoord=0, $yCoord=0, $zCoord=0)
        {
            $this->x = $xCoord;
            $this->y = $yCoord;
            $this->z = $zCoord;
        }

        /*
        * the (String) representation of this Point as "Point3D(x, y, z)".
        */
        public function __toString()
        {
            return 'Point3D(x=' . $this->x . ', y=' . $this->y . ', z=' . $this->z . ')';
        }
    }
    
    $point3d = new Point3D();
    echo "<pre>";
    var_dump($point3d);
    echo "</pre>";

    /*
* Line3D.php
*
* Represents one Line in 3-dimensional space using two Point3D objects.
*/
class Line3D
{
    public $start;
    public $end;

    public function __construct($xCoord1=0, $yCoord1=0, $zCoord1=0, $xCoord2=1, $yCoord2=1, $zCoord2=1)
    {
        $this->start = new Point3D($xCoord1, $yCoord1, $zCoord1);
        $this->end = new Point3D($xCoord2, $yCoord2, $zCoord2);
    }

    /*
     * calculate the length of this Line in 3-dimensional space.
     */
    public function getLength()
    {
        return sqrt(
            pow($this->start->x - $this->end->x, 2) +
            pow($this->start->y - $this->end->y, 2) +
            pow($this->start->z - $this->end->z, 2)
        );
    }

    /*
     * The (String) representation of this Line as "Line3D[start, end, length]".
     */
    public function __toString()
    {
        return 'Line3D[start=' . $this->start .
            ', end=' . $this->end .
            ', length=' . $this->getLength() . ']';
    }
}

/*
* create and display objects of type Line3D.
*/
echo '<p>' . (new Line3D()) . "</p>\n";
echo '<p>' . (new Line3D(0, 0, 0, 100, 100, 0)) . "</p>\n";
echo '<p>' . (new Line3D(0, 0, 0, 100, 100, 100)) . "</p>\n";

// ways of creating stdClass instances
$x = new stdClass;
$y = (object) 'test';        // same as above
$z = (object) 'a';         // creates property 'scalar' = 'a'
$a = (object) array('property1' => 1, 'property2' => 'b');