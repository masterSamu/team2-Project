<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        table {
            border-collapse: collapse;
            }
    </style>

    <title>Excercise1</title>
</head>
<body>
    
<?php 

//  Task 1:
echo "<b>Task 1. Write a PHP script to get the PHP configuration information. hint phpinfo():</b><br>";

echo "You can find phpinfo at end of this page.";



//  Task 2:
echo "<hr><b>Task 2. Write a simple PHP script to print your information (Name and your groupid):</b><br>";

echo "Name: Samu<br> GroupId: BBCAP20A3<br>";

//  Task 3:
echo "<hr><b>Task 3. Write PHP code to display the following message
Hello world ! My name is \"David\":</b><br>";

echo "Hello world ! My name is \"David\"<br>";

// Task 4:
echo "<hr><b>Task 4. Write PHP code to display the following paragraph. It is possible to place variables inside of double-quoted strings (e.g. \"string here and a \$variable\"). By putting a variable inside the quotes (\" \") you are telling PHP that you want it to grab the string value of that variable and use it in the string. The example below shows an example of this  feature. </b><br>";

echo "<p>It is possible to place variables inside of double-quoted strings (e.g. \"string here and a \$variable\"). By putting a variable inside the quotes (\" \") you are telling PHP that you want it to grab the string value of that variable and use it in the string. The example below shows an example of this  feature.</p>";


//  Task 5:
echo "<hr><b>Task 5. Use two constants to assign your first name and last name. Print to get the following output. 
My first name is firstname and last name is lastname.</b><br>";

define("firstname", "Samu");
define("lastname", "Uunonen");
echo "My first name is ", firstname, " and last name is ", lastname, ".<br>";

//  Task 6:
echo "<hr><b>Task 6. In one of your HTML page, write the PHP code to display date. </b><br>";
echo date("d.m.Y") . "<br>";

//  Task 7:
echo "<hr><b>Task 7. \$title = \"PHP is interesting\" . Put this variable as a title that is marked as h1 (heading 1) in your HTML document. </b><br>";

$title = "PHP is interesting";
echo "<h1>$title</h1>";


//  Task 8:
echo "<hr><b>Task 8. \$g1=5, \$g2=4, \$g3=5. These are the grades for 3 students in the course. Use HTML table into echo and include 3 columns S.n., Name, and grade. Your table should look like the one below: </b><br><br>";

?>
<table style border ='1'>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo 
"<tr>
    <th>S.N</th>
    <th>Firstname</th>
    <th>Grade</th>
 </tr>
 <tr>
    <td>1</td>
    <td>Pekka</td>
    <td>$g1</td>
</tr>
<tr>
    <td>2</td>
    <td>Johanna</td>
    <td>$g2</td>
</tr>
<tr>
    <td>3</td>
    <td>John</td>
    <td>$g3</td>
</tr>";

?>
</table>

<?php
phpinfo();
?>
 

</body>
</html>

