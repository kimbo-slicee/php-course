## 📊 Data Types in PHP
In PHP, data types are classifications that specify what kind of data a variable can hold. PHP is a loosely typed language, meaning variables do not need to be explicitly declared with a type; PHP will automatically determine the data type based on the assigned value. Here are the primary data types in PHP:
## 1. 🔢 Integer
An integer is a non-decimal number (whole number) that can be positive, negative, or zero.
```php
$age = 25; // Integer
```
## 2. 🔬 Float (or Double)
A string is a sequence of characters enclosed in single (' ') or double (" ") quotes.
```php
$name = "John Doe"; // String
```
## 4. ✅ Boolean
   A boolean represents a true or false value. It’s often used in conditional statements.
```php
$isStudent = true; // Boolean
$isAdmin = false; // Boolean
```
## 5. 📋 Array
An array is a data structure that stores multiple values in a single variable. There are three types of arrays in PHP:
1. Indexed arrays (numerically indexed)
2. Associative arrays (key-value pairs)
3. Multidimensional arrays (arrays within arrays)
```php
// Indexed array
$fruits = ["Apple", "Banana", "Orange"];

// Associative array
$person = ["name" => "Alice", "age" => 30];

// Multidimensional array
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
```
## 6. 👤 Object
An object is an instance of a class. PHP supports object-oriented programming (OOP), so you can define classes with properties and methods and create objects based on these classes
```php
class Car {
    public $make;
    public $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }
}

$myCar = new Car("Toyota", "Corolla"); // Object

```
## 7. 🧱 NULL
NULL represents a variable with no value. It’s used to explicitly set a variable to "no value" or "empty".
```php
$noValue = NULL; // NULL
```
## 8. 🔧 Resource
A resource is a special variable that holds a reference to an external resource, such as a file, database connection, or stream. Resources are usually created by functions that interact with system-level resources. 
```php
$file = fopen("test.txt", "r"); // Resource
```

## 🔄 Type Juggling and Type Conversion in PHP
1. 🔄 Type Juggling
is PHP's automatic way of converting data types on-the-fly based on the context. PHP is a loosely typed language, so it tries to adapt variable types automatically without explicit conversions from the developer. This feature is known as type juggling.
2. Limitations of Type Juggling
   While type juggling makes PHP flexible, it can lead to unexpected results. For instance, comparing strings and numbers directly can produce unexpected outputs.
## 🎛️ Type Conversion
   Type conversion (also known as type casting) is when you manually specify the type of a variable. Unlike type juggling, which is implicit, type conversion is explicit and allows you to ensure a variable is treated as a specific data typ



