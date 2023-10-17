<?php
namespace MagicConstant;
// Giống như Package trong JAVA, khai báo ở đầu tệp tin, việc KHAI BÁO và KHÔNG KHAI BÁO ảnh hưởng đến các CONSTANT khác

// #1 .__line__
echo "1. The __LINE__ number is : ". __LINE__;
echo "<br>";

// #2 .__file__
echo "<br>";
echo "2. The __FILE__ name is : ". __FILE__;
echo "<br>";

// #3. . __dir__;
echo "<br>";
echo "3. The __DIR ectory__ is : ". __DIR__;
echo "<br>";

// #4. . __function__;
echo "<br>";
function Ocean(): void
{
    echo "4. The __FUNCTION__ name is : ". __FUNCTION__;
}
Ocean();
echo "<br>";

// #5. __class__
echo "<br>";
class Ocean
{
    public function getClassName(): string
    {
        return "5. The __CLASS__ name is: [Namespace\Class] ". __CLASS__;
    }
}
$obj = new Ocean();
echo $obj-> getClassName();
echo "<br>";

// #6. __method__
echo "<br>";
class Company
{
    public function func(): string
    {
        return "6. The __METHOD__ name is: [Namespace\class::method] : ".  __METHOD__;
    }
}
$obj = new Company();
echo $obj->func();
echo "<br>";

// #7. __NAMESPACE__
echo "<br>";

class OceanDang {
    public function ocean(): string
    {
        return "7. The __NAMESPACE__ is: ". __NAMESPACE__;
    }
}
$obj = new OceanDang();
echo $obj->ocean();
echo "<br>";

// #8. __TRAIT__
echo "<br>";
trait TraitDemo{
    function gfg(): void
    {
        echo "8. The __TRAIT__ Constant: [NameSpace\Trait] " . __TRAIT__;
    }
}
class Company2{
    use TraitDemo;
}
$a = new Company2;
$a->gfg();
echo "<br>";

// #9 Classname::class
echo "<br>";
class Geeks{ }

echo "9. [Classname::class] is: {NameSpace\Class}  ". Geeks::class;
//Classname::class