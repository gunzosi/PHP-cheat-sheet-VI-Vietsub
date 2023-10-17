# PHP Cheatsheet  
> Dang Dai Duong <br>
> Update to: October 2023 <br>
> GitHub: 

------------------------------------------------------
[Return`MENU`](..%2FREADme.md)
## 1. PHP là gì?
Thuật ngữ PHP là từ viết tắt của  `Hypertext Preprocessor` .
Nó là một ngôn ngữ kịch bản phía máy chủ hướng đối tượng, mã nguồn mở, 
được giải thích, được sử dụng để phát triển web. PHP được _**Rasmus Lerdorf**_ phát triển vào năm 1994 
với phiên bản PHP đầu tiên được thiết kế đơn giản để thiết lập các nhị phân `Common Gateway Interface ` Giao diện cổng chung `(CGI)`,
được viết bằng ngôn ngữ lập trình C. Nó có thể dễ dàng nhúng vào các tệp HTML. Mã HTML cũng có thể được viết bằng tệp PHP. 
Mã PHP được thực thi ở phía máy chủ trong khi mã HTML được thực thi trực tiếp trên trình duyệt.

![PHP_application.png](..%2FImage%2FPHP_application.png)
### Ứng dụng của PHP

* Phát triển web phía máy chủ
* Hệ thống quản lý nội dung (CMS) 
* Trang web thương mại điện tử
* Ứng dụng dựa trên cơ sở dữ liệu 
* API Web

#### Đặc điểm của PHP

1. Simple and fast - **Đơn giản và nhanh chóng**
2. Efficient - **Có hiệu quả**
3. Secured - **Bảo mật**
4. Flexible - **Linh Hoạt**
5. Cross-platform, it works with major operating systems like `Windows`, `Linux`, and `macOS`. - **Đa nền tảng**
6. Open Source - **Mã nguồn mở**
7. Powerful Library Support - **Hỗ trợ thư viện mạnh mẽ**
8. Database Connectivity - **Kết nối `Cơ Sở Dữ Liệu` - _Database_**

```php
<html>
<head>
	<title>PHP Example</title>
</head>
<body>
	<?php echo "Hello, World! This is PHP code";?>
</body>
</html>
```
````php
> Hello, World! This is PHP code
````
> Ví dụ về PHP

### Thiết lập môi trường
Các bước để thiết lập môi trường PHP trên máy cục bộ: Về cơ bản có hai cách để thiết lập PHP trên máy cục bộ đó là:

* Sử dụng tất cả trong một gói (**XAMPP** & **WAMP**). 
* Cài đặt thủ công tất cả các gói cần thiết (MySQL, PHP & Apache) và định cấu hình chúng.
---------------------------------------------------------
## 2. [CODE trong PHP](#)
#### Coding Standards
````php
<?PHP
  Mã PHP
?> 
````
> Cú pháp chuẩn của PHP
````php
<?
  Mã PHP
?>
````
> Cú pháp ngắn gọn (Short Hand)

#### Comments
- Có hai cách để Comment trong PHP: 
1. Single-line comments: `//` hoặc `#`
````php
echo "Hello, World!"; # My first PHP statement
echo "Hello world"; // My first PHP statement
````
2. Multi-line comments: `/* ~~code~~ */` 
````php
/* echo "I've never thought of PHP as more 
than a simple tool to solve problems.";
- Rasmus Lerdorf */
echo "Hello, World!";
````
---------------------------------------------------------
## 3. Cú pháp cơ bản - Basic Syntax
##### Escaping To PHP: (Cơ chế viết PHP)
_"The mechanism of separating a normal HTML from PHP code is called the mechanism of Escaping To PHP"_
<br><br> **Có 4 thẻ để nhúng vào PHP:**
1. _Canonical PHP Tag:_
* Thẻ này mở đầu bằng `<?php và kết thúc bằng ?>`, mọi thứ bên ngoài cặp thẻ mở và đóng đều bị phân tích cú pháp PHP bỏ qua. Các thẻ mở và thẻ đóng này gọi là dấu **phân cách** [`delimeters`]. 
* Mọi câu lệnh đều phải kết thúc bằng dấu `;`
````php
<?php
# Here echo command is used to print
echo "Hello, world!";
?>
````
2. _`SGML` or `Short HTML` Tags:_
* Có cách khác ngắn hơn để khởi tạo mã PH. Cú pháp này khởi đầu bằng `<? và kết thúc bằng ?>`
* Điều này chỉ hoạt động khi file setting của PHP là `php.ini` và setting cho mục `short_open_tag` là **`on`** hoặc `true`;

````php
<? 
# Here echo command will only work if
# setting is done as said before
echo "Hello, world!";
?>
````
3. _**HTML Script Tags:**_ 
* Thẻ này **ĐÃ BỊ LOẠI BỎ KHỎI PHP** tuy nhiên nên cung cấp cho bạn kiến thức để khi gặp không bị bỡ ngỡ
* Thẻ này bị loại bỏ từ phiên bản PHP 7.0.0
````php
<script language="php">
echo "hello world!";
</script>
````
4. _**ASP Style Tags:**_
* `ASP` được viết tắt của `Active Server Pages` để mô tả các khối mã. Đièu này giống với SGML và Short HTML là phải cài đặt trong `php.ini`.
* Và được bắt đầu bằng `<% và kết thúc bằng %>`;
````php
<% 
# Can only be written if setting is turned on
# to allow %
echo "hello world";
%>
````
## 4. Biến trong PHP
   #### 1. **BIẾN** - VARIABLE
- Các biến (`$Variable`) được sử dụng để lưu trữ các giá trị hoặc dữ liệu có thể được sử dụng sau này trong chương trình. 
- Các biến giống như các thùng để lưu trữ _giá trị ký tự_ (`Character Values`), _số_ [`Numeric Values`], _địa chỉ bộ nhớ_ [`Memory Address`], _chuỗi_ [`String`].

1. Tất cả các biến khi **KHAI BÁO** đều phải có `Dollar_sign` `$` đằng trước sau đó là tên biến `$variable`.
2. Độ dài của biến là tuỳ chỉnh 
3. Tên biến **chỉ có thể** chứa các ký tự chữ và số (‘a-z’, ‘A-Z’, ‘0-9, and ‘_’).
4. Một hằng số ($Constant) được dùng cho một biến cho một giá trị đơn giản thì không thể thay đổi. Nó cũng phân biệt chữ hoa và chữ thường.
5. Gán biến bằng `TOÁN TỬ GÁN` (assignment operator).
6. _TÊN BIẾN BẮT ĐẦU BẰNG_ **Dấu gạch dưới** hoặc **số** và không có ký tự nào khác (``$_variable, $Var``);
7. KHÔNG cần khai báo kiểu dữ liệu cho biến. 
8. PHP là ngôn ngữ `Case-sensitive` phân biệt chữ hoa và chữ thường.
9. Các kiểu dữ liệu được PHP sử dụng để khai báo hoặc xây dựng các biến: 
   - Integers
   - Doubles
   - NULL
   - Strings
   - Booleans
   - Arrays
   - Objects
   - Resources
> Đặc biệt lưu ý, `PHP` **KHÔNG** có **`FLOAT`**

   #### 2. PHẠM VI BIẾN - BLOCK of scope 
Phạm vi biến được định nghĩa là phạm vi mà biến có thể truy cập trong một chương trình mà nó có thể truy cập. Trong PHP có loại phạm vi:
   1. **Local Variables - Biến cục bộ:** 
      - Là các biến được khai báo trong một hàm đó và chỉ có phạm vi truy cập hàm cụ thể nào đó. 
      - Nói tóm gọn lại, nó không thể truy cập bên ngoài chức năng (Function) nào đó. 
      - Bất ký khai báo một `biến` bên ngoài nào đó về một biến bên ngoài hàm (function) có cùng `TÊN` thì đều là một hàm khác hoàn toàn.
```php
<?php
// Biến $num đầu tiên
$num = 60;

function local_var()
{ 
	// This $num is local (cục bộ) to this function (hàm)
	// the variable $num outside this function
	// is a completely different variable
	// (hoàn toàn khác với biến $num trên)
	$num = 50;
	echo "local num = $num \n";
}

local_var();

// $num outside function local_var() is a 
// completely different Variable than that of 
// inside local_var()
echo "Variable num outside local_var() is $num \n";

?>
  ```
````php
local num = 50 
Variable num outside local_var() is 60 
````
   2. **Global Variables - Biến toàn cục:**
      - Các biến được khai báo bên ngoài hàm được gọi là toàn cục 
            - _"The variables declared outside a function are called global variables"_
      - Các biến này có thể được truy cập trực tiếp ngoài hàm.
      - Để có quyền truy cập một hàm, ta dùng từ khoá `global` trước biến toàn cục (refer global variable)
````php
<?php

$num = 20;

// function to demonstrate use of global variable
function global_var()
{
	// we have to use global keyword before 
	// the variable $num to access within 
	// the function
	global $num;
	
	echo "Variable num inside function : $num \n";
}

global_var();

echo "Variable num outside function : $num \n";
?>

````
````php
Variable num inside function : 20 
Variable num outside function : 20 
````
   3. **STATIC Variables - Biến STATIC:**
      - Đặc điểm của PHP là xoá biến sau khi hoàn thành quá trình thực thi và giải phóng bộ nhớ
      - Nhưng đôi khi chúng ta cần lưu trữ các biến sau khi hoàn thành việc thực thi hàm (function execution).
      - Để có thể thực hiện được việc đó, ta dùng từ khoá `STATIC` trước các biến
      - Và các biến sau đó gọi là biến tĩnh (`Static Variables`).
      - PHP liên kết một kiểu dữ liệu tuỳ thuộc vào giá trị biến - _(PHP associates a data type depending on the value for the variable.)_
````php
<?php
// function to demonstrate static variables
function static_var()
{ 
	// static variable
	static $num = 5;
	$sum = 2;
	
	$sum++;
	$num++;
	
	echo $num, "\n";
	echo $sum, "\n";
}

// first function call
static_var();

// second function call
static_var();
?>
````
````php
// Output:
6
3
7
3
````
#### Biến đặc biệt: Biến động - Variable Variables: 
##### **Variable Variables**
* Trong PHP cho phép chúng ta sử dụng tên biến động (dynamic variables name) - Biến được gán, có thể linh hoạt việc gọi và gán (invoke && assigment).
* Cách thức này gọi là `Variable Variables`, được chuyển hoá đơn giản rằng các biến có tên được tạp động bởi các giá trị của biến khác.

````php
<?php
$a = 'hello'; //hello is value of variable $a
$$a = 'World'; //$($a) is equals to $(hello)
echo $hello; //$hello is World i.e.
// $hello is new variable with value 'World'
?>
````

````php
// Output: 
World
````

## 5. ECHO && Print && `.` Operator
* `echo` dùng để hiển thị đầu ra các tham số được truyền cho nó. Nó hiển thị kết quả đầu ra của một hoặc nhiều chuỗi được phân tách bằng dấu phẩy.
* `print` thường được chấp nhận một đối số tại một thời điểm và _không thể sử dụng làm biến_ [cannot be used as a variable function]() trong `PHP`. `print` chỉ output các chuỗi.

- Cả hai `ECHO && Print` đều là [language constructs](https://www.dictionary4it.com/term/language-construct-7298/) - **Cấu trúc ngôn ngữ**. 
- Cả hai `ECHO && Print` đều mang chức năng xuất dữ liệu ra màn hình trình duyệt. 
> _The print statement is an alternative to echo._

### ECHO
1. Echo Statement - Câu lệnh `echo`: Đây là một cấu trúc ngôn ngữ và không bao giờ hoạt động giống như một hàm - `(never behaves like a function)`. Do đó không cần dấu ngoặc đơn.
2. `echo` có thể hiển thị chuỗi dưới dạng nhiều đối số - *Displaying Strings as multiple arguments*
````php
<?php
    echo "Multiple ","argument ","string!";
?>
````

### PRINT
- Câu lệnh `print` trong PHP tương tự như echo và có thể được sử dụng để thay thế cho `echo`.

#### Sự khác biệt của `ECHO && Print`
- `echo` không hoạt động ngầm giống như một hàm, trong khi `print` hoạt động như một hàm. 
- `print` chỉ có thể một đối số - [Argument] tại một thời điểm và do đó có thể in ra một chuỗi đơn giản. 
- Câu lệnh `print` luôn trả về **1** *(**)*.
- `echo` chấp nhận một danh sách các đối số, còn `print` thì không.
- `echo` sẽ nhanh hơn các câu lệnh `print`.
````php
<?php
    print "Hello, world!";
?>
````

### Toán tử `.` - DOT operator
* Mang nhiệm vụ là nối 2 chuỗi - `concatenation`. 

## 6. Data Type - Kiểu dữ liệu 
_Như đã nói ở mục [{4. Biến trong PHP}(9.)](#4-biến-trong-php-) , gồm các kiểu dữ liệu, ở phần này, ta sẽ đi chuyên sâu hơn về các kiểu dữ liệu._

### DATA TYPE 
* PHP cho phép `10` loại kiểu dữ liệu khác nhau, được phân thành 3 nhóm kiểu (group-type) và 2 định dạng (specify):
1. Kiểu dữ liệu được xác định trước - `predefined data types` hay `Scalar.`
   * Boolean #1
   * Integer #2
   * Double #3
   * String #4
2. Kiểu dữ liệu do người dùng xác định (phức tạp) - `user-defined (compound) data types` hay `Coumpound.`
   * Array #5
   * Objects #6
   * Callable 
   * Iterable
3. Kiểu dữ liệu đặc biệt - `special data types` hay `Special.`
    * NULL #7
    * Resource #8

![PHP_DataType.png](..%2FImage%2FPHP_DataType.png)
> Các kiểu dữ liệu trong PHP

> 5 loại đầu tiên `#1 -> #5` được gọi là _kiểu dữ liệu đơn giản_ - `simple data types` <br>

> 3 loại sau `#6 -> #8` được gọi là _kiểu dữ liệu phức tạp_ - `compound data types`

#### #1 Integer
* Số nguyên là tập hợp các số thuộc tập hợp `ℤ = {..., -2, -1, 0, 1, 2, ...}.`.
* Số nguyên còn được chỉ định bằng các sử dụng các hệ cơ số thập phân `decimal (base 10)`, thập lục phân `hexadecimal (base 16)`, thập bát phân `octal (base 8)`, nhị phân `binary (base 2)`. 
* Phạm vi của số nguyên phải nằm trong khoảng từ `-2^31 đến 2^31`.
````php
<?php
$a = 1234; // decimal number
$a = 0123; // octal number (equivalent to 83 decimal)
$a = 0o123; // octal number (as of PHP 8.1.0)
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$a = 0b11111111; // binary number (equivalent to 255 decimal)
$a = 1_234_567; // decimal number (as of PHP 7.4.0)
?>
````
> Một số quy tắt viết các số nguyên `Integer` từ PHP 7.4 trở đi
![Integer_DataTypes.png](..%2FImage%2FInteger_DataTypes.png)

#### #2 Double
* Có thể chứa phân số `(fractional)` hoặc số thập phân `(decimal parts)`, bao gồm số dương và số âm hay số `(number in exponential form).`
* Kiểu dữ liệu `Double` giống như kiểu dữ liệu `Float` như là `floating-point numbers` or `real numbers.`
```php
<?php
$val1 = 50.85; 
$val2 = 654.26; 

$sum = $val1 + $val2;

echo $sum;
echo "\n\n";

//returns data type and value
var_dump($sum)
?>
```
```php
// Output:
705.11
float(705.11)
```
#### #3 String
* Chuỗi giữ các chữ cái hoặc bất kỳ bảng chữ cái nào, bao gồm cả số. Chúng được viết trong dấu ngoặc kép `double quotes  " "` trong khi khai báo. 
* Các chuỗi cũng có thể được viết trong dấu ngoặc đơn `single quotes ''`, nhưng sẽ được xử lý khác nhau khi in các biến.
* Trong `String` có 4 cách định nghĩa (`specified`):
  * **Single Quotes** (`' '`) - nháy đơn.
  * **Double Quotes** (`" "`) - nháy đôi.
  * **Heredoc Syntax** - Định dạng bằng `<<<END ... END;` -> `<<<` `Heredocs Syntax`.
  * **Nowdoc Syntax** - giống vơi `Heredoc` nhưng không hỗ trợ `Escape Sequence`.

```php
<?php

$name = "Krishna";
echo "The name of the Geek is $name \n"; 
                // Double Quotes " "
echo 'The name of the geek is $name '; 
                // Single Quotes ' '
echo "\n\n";

//returns data type, size and value
var_dump($name)

?>
```
```php
// Output: 
The name of the Geek is Krishna 
The name of the geek is $name 

string(7) "Krishna"
```
#### #4 Boolean
* Là kiểu dữ liệu được sử dụng trong kiểm tra điều kiện `conditional testing`. Chỉ có hai giá trị duy nhất là TRUE(1) hoặc FALSE(0).
* `Successful` sẽ trả về `TRUE`, và ngược lại sẽ trả về `FALSE`.
  * _Lưu ý: Giá trị NULL cũng tính là FALSE, kể cả 0 cũng tính là NULL, Chuỗi trống (`String Empty`) cũng được xem xét là NULL._

```php
<?php
if(TRUE)
    echo "This condition is TRUE";
if(FALSE)
    echo "This condition is not TRUE";
?>
```
```php
This condition is TRUE
```
#### #5 Array:
* Mảng là kiểu dữ liệu phức tạp `Compound` có thể lưu trữ nhiều dữ liệu giá trị của cùng một kiểu dữ liệu.
* Thực chất của một mảng là một `Map`- `Ordered Map`. A `Map` là một loại dữ liệu kết hợp các giá trị `values` với các khoá `keys`. (`key` => `value`);
> A map is a type that associates values to keys. This type is optimized for several different uses;
* Nó có thể được xem là các mảng `Array`, `List (vector)`, `Hash Table` ,`Dictionary`, `Collection`, `Stack`, `Queue`.
* Bởi v các giá trị của mảng là có thể là các mảng khác , nên mảng đa chiều là có thể.

> Các nguyên tắc áp dụng trong `Array`:
  - 1.`String` chứa các số nguyên hợp lệ `<decimal ints>`, trừ khi số đó đứng trước dấu +, sẽ chuyển đổi thành kiểu số nguyên (8+ => 8), ("8" -> 8). Tuy nhiên "08" sẽ không được chuyển đổi vì n không phải số nguyên hợp lệ.
  - 2.Số thực `Float` cũng sẽ được chuyển đổi thành số nguyên `Integer`, có nghĩa là số thập phân cũng sẽ bị cất đi. ("8.7" => "8");
  - 3.Boolean cũng sẽ bị chuyển đổi thành số nguyên `Integer`, với `true` bằng 1 và 'false' bằng 0, tuy nhiên ở PHP, false sẽ `KHÔNG HIỂN THỊ LÊN MÀN HÌNH`.
  - 4.Null sẽ chuyển thành chuỗi rỗng, nghĩa là Null sẽ được lưu trữ dưới dạng `""`;
  - 5.`Arrays` && `Object` không thể được chọn làm khoá - `keys`. Nếu không sẽ báo lỗi `Illegal offset type`.

i.e.
```php
<?php
$intArray = array( 10, 20 , 30);
echo "First Element: $intArray[0]\n";
echo "Second Element: $intArray[1]\n";
echo "Third Element: $intArray[2]\n\n";

//returns data type and value
var_dump($intArray);
?>
```
```php
// Output: 
First Element: 10
Second Element: 20
Third Element: 30

array(3) {
  [0]=>
  int(10)
  [1]=>
  int(20)
  [2]=>
  int(30)
}
```
#### #6 Object
* `Object` là các đối tượng được định nghĩa `defined` là các `instance` của các lớp _**do người dùng định nghĩa**_ (`user-defined classed`) có thể chứa các `values`, `functions` & `thông tin để xử lý dữ liệu cụ thể cho lớp đó`.
* Khi một đối tượng được tạo, chúng thừa kế tất cả các thuộc tính `properties` và các hành vi `behaviours` từ các lớp, các giá trị khác nhau cho tất cả thuộc tính.
> Các đối tượng được khởi tạo từ từ khoá `new`.
```php
<?php
class gfg {
var $message;
function gfg($message) {
	$this->message = $message;
}
function msg() {
	return "This is an example of " . $this->message . "!";
}
}
// instantiating a object
$newObj = new gfg("Object Data Type");
echo $newObj -> msg();
?>
```
```php
This is an example of Object Data Type!
```
#### #7 NULL
* Đây là `specials types` chỉ có chứa một giá trị là `NULL`. Và không trả về giá trị nào.

#### #8 Resource
* Trong PHP, `Resources` trong PHP không phải là một kiểu dữ liệu chính xác. Về cơ bản, chúng được sử dụng cho việc lưu trữ các tham chiếu đến một số lệnh gọi hàm hoặc tài nguyên.
* Để kiểm tra loại (`type`) và giá trị (`value`) trong một biểu thức, sử dụng `var_dump()` để xuất thông tin một biến. 

#### var_dump() > Kiểm tra đối tượng
```php
<?php
// Integer (Số nguyên)
$int = 42;
// Float (Số thực)
$float = 3.14;
// Boolean 
$bool = true;
// String (Chuỗi)
$string = "Hello, World!";
// Array.md (Mảng)
$array = [1, 2, 3];
// Object (Đối tượng)
class MyClass {
    public $prop = "property value";
}
$obj = new MyClass();
// Null (Rỗng)
$null = null;
// Resource (Tài nguyên)
$resource = fopen('example.txt', 'r');
// Kiểm tra và in ra thông tin các giá trị
var_dump($int, $float, $bool, $string, $array, $obj, $null, $resource);
// Đóng tài nguyên
fclose($resource);
?>
```




## 7. Hằng số - Constants
* Hằng số là một mã định danh hoặc tên đơn giản là được gán bằng bất kỳ giá trị cố định nào (`Fixed Value`). Các `Constant` tương tự như một biến ngạoi trừ việc chúing không bao gờ có thể thay đổi được.
* Chúng không thay đổi trong suốt chương trình và không thể thay đổi trong quá trình thực hiện.
* Một khi `Constants` được định nghĩa, nó không thể được xác định hoặc xác định lại (`undefined` || `redefined`). 
* Mã định dang không đổi (`constant identifiers`) theo quy ước phải được viết `IN HOA` (`Uppercase`).
* Constants luôn phân biệt chữ hoa chữ thường (`Case-sensitive`).
* _KHÔNG_ bao giờ được bắt đầu bằng một số, luôn bắt đầu bằng một chữ (a-zA-Z) hoặc dấu gạch dưới (Underscorce `_`).

> Để tạo một HẰNG SỐ: 
#### define() func:
- Hàm `define()` trong PHP sử dụng đ tạo một hằng số: 
```php
define(name, value, case_insensitive)
```
- Các tham số được định nghĩa như sau: 
  - `name`: Tên của `CONSTANTS`.
  - `value`: Giá trị được lưu trữ trong `CONSTANTS`.
  - `case_insensitive`: Xác định xem một hằng số có phân biệt chữ hoa chữ thường hay không. Mặc định là `False`(phân biệt chữ hoa, chữ thường).

```php
<?php 
// This creates a case-sensitive constant
define("OCEAN", 'Ocean', true);
echo OCEAN, "\n";

// This creates a case-insensitive constant
define("hello", "love", false);
echo hello;
?>
```
- i.e. [Constant.php](C01_PhpBasic%2FConstant.php)

#### constant()

```php
constant(name)
```

```php
define("WELCOME", "Hello World!!!");
echo WELCOME, "\n";
echo constant("WELCOME");
```
```php
// Output:
Hello World!!! Hello World!!!
```


#### Constant Global: 
Theo mặc định, các hằng số tự động có tính toàn cục (GLOBAL) và có thể được sử dụng trong toàn boọ tập lệnh, có thể truy cập được bên trong và ngoài bất kỳ hàm nào.

```php
define("NICE", "GLOBAL");
function testGlobal(): void
{
    echo NICE;
}
testGlobal();
```
```php
//Output:
GLOBAL
```
> - vd: [Constant.php](C01_PhpBasic%2FConstant.php)

### CONSTANT && VARIABLE
|                  CONSTANT                   |              VARIABLE               |
|:-------------------------------------------:|:-----------------------------------:|
|  Không thể thay đổi khi đã được định nghĩa  | Có thể được thay đổi khi định nghĩa |
|          Không cần `$` để khai báo          |       CẦN `$` mỗi hi khai báo       |
| Định nghĩa bằng các hàm `func()` và `const` |     Dùng `=` để khai báo và gán     |



## 8. Magic CONSTANTS  - __ constant __
* Được định nghĩa là các hằng số xác định trước trong PHP(Đã được hệ thống xác định trước và chỉ việc gọi ra để dùng).
* Có `9` loại Magic CONSTANTS trong PHP và tất cả được giải quyết tại thời điểm `compile-time`(các hằng số thường {regular constant} được giải quyết trong `run-time`).
* Có `8` trong `9` loại `MAGIC CONSTANT` được bắt đầu và kết thúc bằng dấu gạch kép (double underscorce) `__`.
> Các ví dụ được đề cập ở file [MagicConstant.php](C01_PhpBasic%2FMagicConstant.php)
#### 1. [__ LINE __](C01_PhpBasic%2FMagicConstant.php)
- Trả về số dòng hiện tại của tệp. Hằng số MAGIC CONSTANT này ở đâu thì sẽ xuất ra màn hình số dòng ở đó.

```php
// Syntax:
.__line__
```
```php
// Example: 
<?php
echo "The Line number is : ". __line__;
?>
```
```php
// Output:
The Line number is : 3
```

#### 2. [__ FILE __](C01_PhpBasic%2FMagicConstant.php)
Hằng số này trả về đường dẫn đầy đủ của tệp được thực thi cùng với tên tệp.
```php
// Syntax:
.__file__
```
```php
<?php
echo "The file name is : ". __file__;
?>
```
```php
The file name is : /Applications/XAMPP/xamppfiles/htdocs/Website/C01_PhpBasic
```

#### 3. [__ DIR __](C01_PhpBasic%2FMagicConstant.php)
Hằng số ma thuật này trả về thư mục của tệp đã thực thi.
> note: dir viết tắt của directory (thư mục).
> 
```php
//Syntax:
.__dir__
```
```php
<?php
echo "The directory is : ". __dir__;
?>
```
```php
The directory is : /Applications/XAMPP/xamppfiles/htdocs/Website/C01_PhpBasic
```

#### 4. [__ FUNCTION __](C01_PhpBasic%2FMagicConstant.php)
Hằng số này trả về tên hàm (`func()`) chứa hằng số này.
```php
//Syntax:
.__function__
```
#### 5.[__ CLASS __](C01_PhpBasic%2FMagicConstant.php)
Hằng số trả về tên lớp (class) chứa hằng số này.
```php
//Syntax:
.__class__
```

#### 6.[__ METHOD __](C01_PhpBasic%2FMagicConstant.php)
Hằng số này trả về tên phương thức chứa hằng số này 
```php
//Syntax:
.__method__
```
```php

<?php
class Company
{
    public function Ocean(){
        return __method__;
    }
}
$obj = new Company();
echo  $obj->Ocean(); 
?>
```
```php
// Output:
Company::Ocean
```
#### 7. [__ NAMESPACE __](C01_PhpBasic%2FMagicConstant.php)
Hằng số này trả vềg khôgn gian tên hiện tại chứa hằng số này.
```php
//Syntax:
.__namespace__
```
```php
<?php
namespace OceanMac;
class Company {
	public function ocean() {
		return __namespace__;
	}
}
$obj = new Company();
echo $obj->ocean(); 
?>
```
```php
// Output:
OceanMac
```
#### 8. [__ TRAIT __]((C01_PhpBasic%2FMagicConstant.php))
Hằng số này trả về tên đặc điểm chứa hằng số này. (`return trait`).
```php
//Syntax:
.__trait__
```
```php

<?php
trait OceanTrait{  
    function fuc(){  
        echo __trait__;  
        }  
    }  
    class Company{  
        use OceanTrait;  
        }  
    $a = new Company;  
    $a->fuc();  
?>
```
```php
// Output:
OceanTrait
```


#### 9. [ClassName::class](C01_PhpBasic%2FMagicConstant.php)
Hằng số này trả về tên lớp với tất cả đầy đủ điều kiện.
```php
// Syntax: 
ClassName::class
```
```php
namespace MagicConstant;
class Ocean{ }
echo "9. return {NameSpace\Class}  ". Ocean::class;
//Classname::class
```
```php
//Output:
MagicConstant\Ocean
```

VÍ DỤ Về 9 loại trong `Magic Constant`

> i.e. [MagicConstant.php](C01_PhpBasic%2FMagicConstant.php)
![PHP_MagicConstant.png](..%2FImage%2FPHP_MagicConstant.png)

---------------------------------------------------
[Trở về đầu trang `PHPBasic.md`](#1-php-là-gì) <br>
[Trở về danh sách `MENU`](..%2FREADme.md)
