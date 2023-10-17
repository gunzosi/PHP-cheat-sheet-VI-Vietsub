# Các câu lệnh điều khiển 
#### MỤC LỤC
1. [Control Structure](#1-control-structure) - Cấu trúc câu lệnh điều khiển 
2. [Loop Statement](#2-loop-statement---câu-lệnh-vòng-lặp-) - Câu lệnh vòng lặp
3. [Branching Statement](#3-branching-statement---câu-lệnh-phân-nhánh) - Câu lệnh phân nhánh
4. [Declaration Statements](#4-declaration-statement---câu-lệnh-khai-báo-) - Câu lệnh khai báo 
5. [Function Control Statements](#5-function-control-statement---câu-lệnh-điều-khiển-) - Câu lệnh điều khiển
6. [File Inclusion Statement](#6-file-inclusion-statement---câu-lệnh-gọi-tệp-tin-) - Câu lệnh gọi tệp tin [`require - inclue - require_once - include_once`].
7. [Jump Statement](#7-jump-statement---câu-lệnh-nhảy) - Câu lệnh 'Nhảy'

-----------------------------------------------------
[Return `MENU`](..%2FREADme.md)
## 1. CONTROL STRUCTURE
* PHP cho phép người dùng thực hiện các hoạt động dựa trên một số loại điều kiện Logical hoặc là So Sánh.
* Dựa vào kết quả của các điều kiện này là `TRUE` hoặc `FALSE`. Được ví như con đường có hai hướng đi, muốn cái gì thì đi hướng này, còn không thì rẽ hướng kia.
    - [if](#if)
    - [if...else](#12-câu-lệnh-ifelse)
    - [if...elseif / else if...else](#13-câu-lệnh-ifelse-ifelse)
    - [switch](#14-câu-lệnh-switch)
    - Tổng hợp các ví dụ ở [C02_ControlStatement](..%2FC02_ControlStatement)
### 1.1 Câu lệnh `IF`
 Câu lệnh này cho phép chúng ta đặt một điều kiện. Nếu là `TRUE`, khối mã nằm trong câu lệnh `IF` sẽ được thực thi.
```php
// Syntax:
if (condition){
    // if TRUE then execute this code
}
// hoặc có thể được hiếu dưới dạng sau:
if(expr){
    statement;
}
```
![C02_if-stmt2.png](..%2FImage%2FC02_if-stmt2.png)
```php
$is_admin = true;
// Vì is_admin là true
if ($is_admin)
    echo 'Welcome, admin!';
```
```php
// Output:
Welcome, admin!
```
> Ta có thể thực hiện nhiều câu lệnh trong một hàm if bởi dấu _Ngoặc nhọn_ [`Curly braces {}`].

```php
if ( expression ) {
   statement1;
   statement2;
   // more statement
}
```

#### A. Lồng IF
Ta có thể lồng nhiều câu lệnh `IF` lại với nhau
```php
if ( expression1 ) {
    // do something
    if( expression2 ) {
        // do other things
    }
}
```

#### B. Áp dụng câu lệnh `IF` nhúng vào `HTML`.
```php
// Syntax: 
<?php if ( expession) : ?>
<!-- HTML code here -->
<?php endif; ?>
```
* Luôn luôn có `endif;` ở dòng đóng `<?php ?>` => `<?php endif; ?>` nếu không sẽ báo lỗi 

```php
<body>
    <?php $is_admin = true; ?>
    <?php if ( $is_admin ) : ?>
        <a href="#">In IF Statement and only show when condition $is_admin is `true` </a>
        <br>
    <?php endif; ?>
    <a href="#">Out of IF Statement, not effect with condition $is_admin</a>
</body>
```
> Xem ví dụ ở đoạn code [IfStatementDemo.php](..%2FC02_ControlStatement%2FIfStatementDemo.php)

### 1.2 Câu lệnh `IF...ELSE`
Nối tiếp với `IF`, câu lệnh sẽ được thực thi nếu điều kiện là `true`. Nhưng đối với điều kiện không đúng `false`, thì lúc này câu lệnh `else` sẽ làm việc đó.
```php
if ( expression ) {
    // code block
} else {
    // another code block
}
```
![C02_Else_Statement.png](..%2FImage%2FC02_Else_Statement.png)
```php
$is_authenticated = false;
if ( $is_authenticated ) {
    echo 'Welcome!';
} else {
    echo 'You are not authorized to access this page.'
}
```
```php
// Output:
You are not authorized to access this page.
```
#### A. Nhúng `IF...ELSE` vào `HTML`
```php
<?php if ( expression ): ?>
<!--Show HTML code when expression is true -->
<?php else: ?>
<!--Show HTML code when expression is false -->
<?php endif ?>
```
```php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP if else Statement Demo</title>
</head>
<body>
  <?php $is_authenticated = true; ?>
  <?php if ($is_authenticated) : ?>
  <a href="#">Logout</a>
  <?php else: ?>
  <a href="#">Login</a> 
  <?php endif ?>
</body>
</html>
```
> Xem đoạn code ở [IfElseStmtDemo.php](..%2FC02_ControlStatement%2FIfElseStmtDemo.php)
### 1.3 Câu lệnh `IF...ELSEIF...ELSE`
Câu lệnh `ELSEIF` là một dạng câu lệnh `IF...ELSE` với nhiều điều kiện hơn.
 ```php
// Syntax:
if (expression1) {
	statement;
} elseif (expression2) {
	statement;
} elseif (expression3) {
	statement;
}
```
> Cú pháp thay thế | `PHP if elseif alternative syntax`

```php
<?php
if (expression): // « Dấu 2 : ở mỗi dòng thay vì {}
	statement;
elseif (expression2):
	statement;
elseif (expression3):
	statement;
endif;
```
* Sử dụng `:` - Semicolon sau mỗi điều kiện sau `if` và `else if`
* Dùng `endif` thay vì dấu ngoặc nhọn - curly brace - `{}` vào mục `if` cuối cùng.

> Cách hoạt động của `if-elseif`
![C02_ElseIfStmt.png](..%2FImage%2FC02_ElseIfStmt.png)
##### Phân biệt `elseif` && `else if`
|               `Elseif`                |                 `Else If`                 | 
|:-------------------------------------:|:-----------------------------------------:|
|     Không có khoảng trắng ở giữa      |          Có khoảng trắng ở giữa           |
| **DÙNG** được trong  `alternative` ✅  | **KHÔNG DÙNG** được trong `alternative` ❌ |



### 1.4 Câu lệnh `SWITCH`
Câu lệnh `Switch` được thực hiện trong nhiều trường hợp khác nhau, tức là nó có nhiều trường hợp khác để thực thi phù hợp với điều kiện
```php
switch(n) {
    case statement1:
        code to be executed if n==statement1;
        break;
    case statement2:
        code to be executed if n==statement2;
        break;
    case statement3:
        code to be executed if n==statement3;
        break;
    case statement4:
        code to be executed if n==statement4;
        break;
    ......
    default:
        code to be executed if n != any case;
```
> Flow Chart
> ![C01_SwitchCase.png](..%2FImage%2FC01_SwitchCase.png)

### 1.5 Toán tử 3 ngôi - Tenary Operator
```php
(condition) ? if TRUE execute this : otherwise execute this;
```

Câu lệnh sử dụng dấu chấm hỏi `(?)` và dấu hai chấm `(:)` và có `ba` toán hạng: _một_ điều kiện cần kiểm tra, _một_ kết quả là `TRUE` và _một_ kết quả là `FALSE`.

```php
// Example

<?php 
$x = -12; 
  
if ($x > 0) { 
    echo "The number is positive \n"; 
} 
else { 
    echo "The number is negative \n"; 
} 
  
  // >> Tenary Operator
// This lot can be written in a  
// single line using ternary operator 
echo ($x > 0) 
        ? 'The number is positive' 
        :  'The number is negative'; 
?>
```










-----------------------------------------------------------------
[Return `MENU`](..%2FREADme.md)

## 2. LOOP STATEMENT - Câu lệnh vòng lặp 
* Giống như mọi ngôn ngữ khác, vòng lặp PHP được sử dụing để thực thi một câu lệnh hoặc một khối câu lệnh, nhiều lần cho ến khi và trừ khi đáp ứng được yêu cầu cụ thể
  * [for](#21-for-loop)
  * [while](#22-while-loop-)
  * [do-while](#23-do-while-loop)
  * [for-each](#24-for-each-loop)

#### 2.1 FOR Loop
* Dùng vòng lặp `for` khi biết chính xác số lần khối cần thực thi. 
* Vòng lặp này còn có tên `entry-controlled loops` - Kiểm soát mục nhập.
```php
for (initialization expression; test condition; update expression) {
    //        [1]                    [2]               [3]
    // code to be executed
}
```
> Biểu thức khởi tạo [1]: Trong biểu thức này, chúng ta phải khởi tạo bộ đếm vòng lặp thành một giá trị nào đó. ví dụ: $num = 1; <br>
> Kiểm tra biểu thức [2]: Trong biểu thức này chúng ta phải kiểm tra điều kiện. Nếu điều kiện là đúng thì chúng ta sẽ thực thi phần thân vòng lặp và cập nhật biểu thức, nếu không chúng ta sẽ thoát khỏi vòng lặp for. Ví dụ: $num <= 10; <br>
> Cập nhật biểu thức [3]: Sau khi thực thi phần thân vòng lặp, biểu thức này sẽ tăng/giảm biến vòng lặp theo một giá trị nào đó. ví dụ: $num += 2;

- Alternative Syntax:
```php
for (start; condition; increment):
   statement;
endfor;
```
#### 2.2 WHILE Loop 
Vòng lặp while cũng là một vòng lặp điều khiển mục nhập giống như vòng lặp for, đầu tiên vòng lặp kiểm tra điều kiện ở đầu vòng lặp, nếu đúng nó sẽ thực thi các câu lệnh trong khối điều kiện đó, và thực thi đến khi nào điều kiện còn đúng thì thôi.
```php
while (expression) {
	statement;
}
```
> Alternative Syntax for WHILE
```php
while (expression):
	statement;
endwhile;
```

#### 2.3 Do-While Loop
- Đây là một vòng lặp điều khiển thoát - exit control loop - Vòng lặp đi vào thực thi các câu lệnh sau đó mới kiểm tra các điều kiện.
- Vòng lặp `do-while` thực hiện ít nhất một lần -  `executes precisely one time.`. Sau một lần, chương trình sẽ thực thi miễn khi câu lệnh là đúng.
```php
do {
    //code is executed
} while (if condition is true);
```

#### 2.4 For-Each Loop
- Vòng lặp này được sử dụng để lặp qua các mảng. Đối với mỗi bộ đếm - counter of loop - một phần tử mảng sẽ được gán vào bộ đếm tiếp theo đén khi chuyển sang phần tử tiếp theo.
- `This loop is used to iterate over arrays. For every counter of loop, an array element is assigned and the next counter is shifted to the next element.`

```php
// Syntax:
foreach (array_element as value) {
   //code to be executed
}
// For-each for ARRAY 
foreach ($array_name as $key => $value) {
   //process element here;
}
```
```php
// Example:
<?php 

    $arr = array (10, 20, 30, 40, 50, 60); 
    foreach ($arr as $val) {  
        echo "$val \n"; 
    } 
      
    $arr = array ("Ram", "Laxman", "Sita"); 
    foreach ($arr as $val) {  
        echo "$val \n"; 
    } 
  
?>

// Example 2:
<?php
// Array 
$capitals = [
	'Japan' => 'Tokyo',
	'France' => 'Paris',
	'Germany' => 'Berlin',
	'United Kingdom' => 'London',
	'United States' => 'Washington D.C.'
];

foreach ($capitals as $country => $capital) {
	echo "The capital city of {$country} is $capital" . '<br>';
}

```

## 3. BRANCHING STATEMENT - Câu lệnh phân nhánh
`break` và `continue` là hai từ khóa quan trọng trong PHP được sử dụng để kiểm soát luồng thực thi trong các vòng lặp (như `for`, `while`, `do-while`) hoặc cấu trúc điều kiện (`switch`).
#### BREAK 
- Break được sử dụng để dùng vòng lặp hoặc thoát khỏi một câu lệnh switch
```php
for ($i = 0; $i < 5; $i++) {
    if ($i == 3) {
        break; // Dừng vòng lặp khi $i == 3
    }
    echo $i . " ";
}
```
#### CONTINUE
- Continue được sử dụng để bỏ qua các phần còn lại của vòng lặp và tiếp tục đến lần tiếp theo
```php
for ($i = 0; $i < 5; $i++) {
    if ($i == 2) {
        continue; // Bỏ qua lần lặp khi $i == 2
    }
    echo $i . " ";
}
```

## 4. DECLARATION STATEMENT - Câu lệnh khai báo 
`DECLARE` construct được sử dụng để đặt các chỉ thị thực thi - `execution directives`. Cú pháp của `DECLARE` tương tự như những cú pháp của các kết cấu điều khiển khác.
```php
// Syntax:
declare (directive)
    statement
```
Trong đó `directive` - chỉ thị - cho phép thiết lập hành vi của khối `declare`. Hiện chỉ có 3 chỉ thị được nhận diện:
- [ticks]()
- [encoding]()
- [strict_types]()

Phần câu lệnh (Statement) của khối `declare` được thực thi - cách thực thi phụ thuộc vào các hiệu ứng trong quá trình thực thi, phụ thuộc vào chỉ thị được đặt trong (directive block).

```php
<?php
// This is valid:
declare(ticks=1);

// This is invalid:
const TICK_VALUE = 1;
declare(ticks=TICK_VALUE);
?>
```

##### A. Ticks: 
* Là một sự kiện cho mỗi `N` low-level tickable được thực thi bởi trình biên dịch. Giá trị của `N` được chỉ định bằng `ticks=N` trong phần chỉ thị của khối `declare`.
* Sự kiện xảy ra trên mỗi `tick` được chỉ định bằng cách sử dụng hàm `register_tick_fucntion()`. 
##### B. Encoding:
* Mã hóa của một tập lệnh có thể được chỉ định cho mỗi tập lệnh bằng cách sử dụng chỉ thị encoding.
```php
<?php
declare(encoding='ISO-8859-1');
// code here
?>
```
##### C. strict_types

## 5. FUNCTION CONTROL STATEMENT - Câu lệnh điều khiển 
Câu lệnh `Return` trả lại quyền điều khiển  chương trình về để gọi module. Việc thực thi được tiếp tục tại biểu thức sau lời gọi module.

Nếu được gọi từ bên trong một hàm - `function()`, câu lệnh `return` ngay lập tức kết thúc việc thực thi của hàm hiện tại và trả về đối số của nó như giá trị của cuộc gọi hàm. `return` cũng kết thúc việc thực thi của một câu lệnh `eval()` hoặc Script File.
## 6. FILE INCLUSION STATEMENT - Câu lệnh gọi tệp tin 
#### A. `include()` 
* Hàm này được sử dụng để sao chép tất cả nội dung của một tệp được gọi trong hàm, văn bản vào tệp mà nó được gọi.
* Điều này xảy ra trước khi máy chủ thực thi mã.
> Ví dụ cho 2 file .php và dùng câu lệnh include()

```php
// even.php
<?php 
  // File to be included 
  echo "Hello Ocean"; 
?>
```

```php
// index.php
<?php 
    include("even.php"); 
    echo "<br>Above File is Included"
?>
```

```php
// Result
Hello Ocean
Above File is Included
```
#### B. require()
* Hàm `require()` hoạt động giống như `include()`. Nó cũng lấy tệp được yêu cầu và sao chép toàn bộ mã vào tệp nơi hàm `required()` được gọi.

// even.php
<?php 
  // File to be required 
  echo "Hello Ocean 2"; 
?>
```

```php
// index.php
<?php 
    include("even.php"); 
    echo "<br>Above File is Required"
?>
```

```php
// Result
Hello Ocean 2
Above File is Required
```

#### C. require_once()
* Tương tự như `require`, nhưng các tệp `file` được `require_once()` nạp vào hệ thống sẽ không phải nạp lại lần nữa nếu đã nạp trước rồi,
* `require_once` sẽ đưa ra lỗi nghiêm trọng nếu tệp không tồn tại
* Nếu tệp không tồn tại sẽ kết thúc chương trình.
#### D. include_once()
* Tương tự như `include`, nhưng tệp tin sẽ được nạp vào hệ thống, và nếu đã nạp từ trước thì hàm `include_once` sẽ không nạp lại.

### SO SÁNH 4 loại [`require - inclue - require_once - include_once`]
Để so sánh `include`, `include_once`, `require` và `require_once`, chúng ta có thể sử dụng một bảng như sau:

|       Chức năng        |  Được gọi từ  | Nếu tệp  không tồn tại | Trả về giá trị | Kết thúc chương trình nếu tệp không tồn tại |
|:----------------------:|:-------------:|:----------------------:|:--------------:|:-------------------------------------------:|
|        include         |  Bất kỳ đâu   |        Cảnh báo        |      None      |                    Không                    |
|      include_once      |  Bất kỳ đâu   |        Cảnh báo        |      None      |                    Không                    |
|        require         |  Bất kỳ đâu   |    Lỗi nghiêm trọng    |      None      |                     Có                      |
|      require_once      |  Bất kỳ đâu   |    Lỗi nghiêm trọng    |      None      |                     Có                      |

**Chú thích**:

- "Được gọi từ" chỉ nơi mà hàm có thể được gọi, tức là trong bất kỳ phạm vi nào của chương trình.
- "Nếu tệp không tồn tại" xảy ra khi tệp mà hàm cố gắng nạp không tồn tại.
- "Trả về giá trị" cho biết loại giá trị được trả về sau khi hàm thực thi.
- "Kết thúc chương trình nếu tệp không tồn tại" cho biết liệu chương trình có dừng lại (terminate) nếu tệp không tồn tại hay không.

Như bạn có thể thấy, `include` và `include_once` chỉ tạo ra cảnh báo nếu tệp không tồn tại, và chương trình sẽ tiếp tục thực thi. Trong khi đó, `require` và `require_once` tạo ra một lỗi nghiêm trọng nếu tệp không tồn tại, và có thể dẫn đến kết thúc chương trình.

## 7. JUMP STATEMENT - Câu lệnh nhảy
- Câu lệnh `goto` trong PHP được sử dụng để cho phép chương trình đang thực thi nhảy đến một `nhãn` được định nghĩa trước đó.
```php
goto label;
// ...
label:
/*
 * goto là từ khóa bắt đầu câu lệnh.
 * label là tên của nhãn mà bạn muốn nhảy đến.
 */
```
```php
<?php
goto a;
echo 'This will not be executed.';

a:
echo 'Hello World!';
?>
```
```php
//Output: 
Hello World
```
> Vậy `goto` trong một vòng lặp thì sao
```php
//Example Loop
<?php
for($i=0,$j=50; $i<100; $i++) {
  while($j--) {
    if($j==17) goto end; 
  }  
}
echo "i = $i";
end:
echo 'j hit 17';
?>
```
```php
//Output: 
j hit 17
```
