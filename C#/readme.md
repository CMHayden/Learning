# C#
C# is an elegant and type-safe object-oriented language that enables developers to build a variety of secure and robust applications that run on the .NET Framework. You can use C# to create Windows client applications, XML Web services, distributed components, client-server applications, database applications, and much, much more. Visual C# provides an advanced code editor, convenient user interface designers, integrated debugger, and many other tools to make it easier to develop applications based on the C# language and the .NET Framework.

It is a simple, modern, general purpose, object-oriented language.

It has support for strong type checking, array bounds checking, checks for uninitialised variables and automatic garbage collection. The software components are suitable for deployment in distributed environments, for applications both for hosted and embedded systems. It has support for low-level C-style programming.

C# was developed out of C and C++.
 
 ## Features

 Many of the features were picked up from Java, C++ and others. Features taken from languages are:

* From C++:
    * Pointer operations (unsafe coding)
    * Operator overloading
    * Preprocessor directives
    * Structs, enums, and many others

* From Java:
    * Class structure
    * Single inheritance
    * Inheritance
    * Garbage collection
    * Code safety
    * Stricter typing
    * Removal of global types

* Other features:
    * Properties
    * Indexes
    * Attributes
    * Delegates
    * Events

### Comparison with java

| Feature           | Java                         | C#                                                 |
| ----------------- | ---------------------------- | -------------------------------------------------- | 
| Portability       | High (based on portable JVM) | Low                                                |
| Simplicity        | Simple and easy to learn     | More difficult to learn, with convenience features |
| Intermediate Code | JVM bytecode                 | IL in .Net assemblies                              |

### Differences to Java

The filename can be different to the class name. A file can contain several public classes and interfaces. Each of the classes can have its own Main function. To denote the starting point of execution, the main class has to be specified on the command line.

```
csc Hello.cs /main:Class1
```

To compile into a library instead of a standalone executable, call csc like this:

```
csc /target:library Hello.cs
```

## C# Program - Explained

Here is an example of a hello world program in C#:

```C#
using System;
namespace HelloWorld
{
    class Hello
        {
        static void Main()
            {
                System.Console.WriteLine("Hello World!");
            }
        }
} 
```

### using System

The "using" command allows us to specify which libraries namespaces we want access to. It is similar to Java's import. The "System" library contains the namespaces for all common .Net variables such as System.Int32 amongst other things. The System namespace also contains core classes including the Console class.

### namespace HelloWorld

Defines a new namespace called HelloWorld. Namespaces seperate code into individually named containers and avoids the danger of having duplicate variable names within the scope of a block.

### class Hello

Defines a class named Hello in the namespace. Just like in Java or C++, C# uses classes to facilitate it's object-oriented design methodology. Classes allow us to create individual self-contained units of code which can be instantiated throughout our application. All C# applications must contain at least one class.

### static void Main()

All C# applications must have a Main() function, which is the entry point for execution of the application. In contrast to Java, Main() can be declared without arguments. The Main() function dis declared public by default. Main can return either an integer or nothing with void. Main can take an array of strings as command line arguments, and can return an int value as return code.

### System.Console.WriteLine("Hello World!")

A call to the WriteLine() function of the console class. It displays "Hello World!" upon compiling and executing.

## Microsoft .Net

Microsfot .Net is Microsoft's Internet strategy. It was originally called NGWS (next generation windows services). It is an internet and web based infrastructure that will run in any browser. .Net and Java/JVM are modern, powerful programming techniques and are equal competitors.

### .Net vs JVM

Java is a programming language which runs on many platforms so uses a common language (Java) which gets compiled and run on different platforms. .Net takes a different approach. It allows you to use any language (VB.Net, C#, F#) but has compilers for different languages that generate a platform specific code.

### Advantages and Disadvantages

* With .Net you are not stuck to one language. A multi-language solution is easier to provide than one with only Java.

* .Net isn't as portable as Java. You can't use it to compile an executable that will run on Linux or Solaris in addition to Windows, while you can with Java.

### Suitability of .Net

Java can be used to write programs for many operating systems, and .Net can be used to make any programming language into a Windows program. .Net is suitable for professionals who want to develop an application for windows easier than using Java for the same.

### The .Net Framework

The .Net framework is an environment for building, deploying, and running web services and web applications. The main components are:

#### Common Language Specification (CLS)

The CLS Defines a set of language features such as how methods and constructors are called. It allows .Net appplications to fully interact with other objects, regardless of the language in which they were implemented.

In an object oriented environment such as C# and the .Net platform everything is an object, so once created, it needs to be able to communicate or interact with other objects. These other objects may be in a different language such, but this problem is overcome by implementing the Common Type System. The CTS means every .Net language uses the same data types (or objects). Due to this, when you pass parameters between languages, there is no longer a requirement to convert data types.

#### Common Type System (CTS)

The common type system defines how types are declared, used, and managed in CLR. It specified a set of types that any programming language in CLR should implement. There are two type categories, value types (variables stand for the value of that type) and reference types (contains a reference to a memory location where data is stored). Languages also defines aliases, for example, CTS defines System.Int32 which C# aliases as int.

#### Common Language Runtime (CLR)

The common language runtime is a virtual machine of the .Net framework. It is an implementation of Microsoft's Common Language Infrastructure (CLI) standard. It defines an execution enviornment for program code. It runs a form of bytecode called the Microsoft Intermediate Language (MSIL).

Developers write programs. At compile time, the CLR converts the program into MSIL code. At runtime, the CLR's "just-in-time" compiler converts the MSIL code into native code, suitable for the underlying operating system.

The key tasks for the CLR are:

* Class loading
* Assembly integrity check
* Security check
* Memory type safety check
* Just-in-time compilation
* Automatic memory management

#### .Net Framework Class Library (FCL)

The framework class library contains thousands of reusable classes, interfaces and value types which are grouped in namespaces. The fundamental functionality is provided by the Base Class libraries (BCL) which is part of FCL. Some of the common FCL namespaces are System, System.IO, System.Net, and System.Security.

## Types

### Value Types
Variables stand for the value of that type. They can be signed or unsigned. Signed types can hold a negative or positive value, whereas unsigned types can only hold positive values. The value types in C# can be:

#### Built-In Value Types
Built-in value types are value types that come out the box with C#. 

* Integers:

   They can be signed or unsigned:

    * Signed:

    ```C#
        sbyte variableName = -4;
        int variableName = -4;
        short variableName = -4;
        long variableName = -4;
    ```

    * Unsigned:

    ```C#
        byte variableName = 4;
        uint variableName = 4;
        ushort variableName = 4;
        ulong variableName = 4;
    ```

* Floating point: 

```C#
    float variableName = 34.87f; // The f suffix states this is a float.
    double variableName = 10.5;
```

* Decimal types:

Appropriate for storing monetary data. Provides greater precision. 

```C#
    decimal variableName = 44444444.94M; // The M suffix states this is a monetary value.
```

* Bolean variables:

Used for stating true or false

```C#
    bool variableName = true;
```

* Character variables:

They store a single character.

```C#
    char variableName = "a";
```

#### Type Table:

| Type                      | Size (in bits)    | Range                                             |
| ------------------------- | ----------------- | ------------------------------------------------- | 
| sbyte                     | 8                 | -128 to 127                                       |
| byte                      | 8                 | 0 to 255                                          |
| short                     | 16                | -32768 to 32767                                   |
| ushort                    | 16                | 0 to 65535                                        |
| int                       | 32                | -2147483648 to 21747483647                        |
| uint                      | 32                | 0 to 4294967295                                   |
| long                      | 64                | -9223372036854775808 to 9223372036854775807       |
| ulong                     | 64                | 0 to 18446744073709551615                         |
| char                      | 16                | 0 to 65535                                        |

| Type         | Size (in bits)    | Precision                  | Range                                   |
| ------------ | ----------------- | -------------------------- | --------------------------------------- | 
| float        | 32                | 7 digits                   | 1.5 x 10^-45 to 3.4 x 10^38             |
| double       | 64                | 15-16 digits               | 5.0 x 10^-324 to 1.7 x 10^308           |
| decimal      | 128               | 28-29 Decimal places       | 1.0 x 10^-28 to 7.9 x 10^28             |


#### User-Defined Value Types

Struct types are user-defined types. They can contain members of different types but can't be extended.

```C#
struct Person {
    public string fName, lName;
    public Person(String fName, String lName) {
        this.fName = fName;
        this.lName = lName;
    }
}

Person p = new Person("Callum", "Hayden");
```

#### Enumerations

The enum keyword is used to declare an enumeration. An enumeration is a type consisting of a set of named constants called the enumerator list. Every enumeration types has an underlying type, which can be any integral typpe except char.

```C#
enum listName {item1, item2, item3};
```

The default underlying type of the enumeration elements is int. The first enumerator has the value 0. Enumerators can have initialisers to override the default values.

```C#
enum listName {item1=1, item2, item3};
```

### Structs vs Classes

| Classes                                         | Structs                                           |
| ----------------------------------------------- | ------------------------------------------------- | 
| Reference type                                  | Value type                                        | 
| Used with dynamic instantiation                 | Used with static instantiation                    |
| Ancestors of class Object                       | Ancestors of class Object                         |
| Can be extended by inheritance                  | Can't be extended                                 |
| Can implement one or more interfaces            | Can implement one or more interfaces              |
| Can initialize fields with initializers         | Can't initialize fields with initializers         |
| Can have a parameterless constructor            | Can't have a parameterless constructor            |

### Reference Type

A variable of reference type contains a reference to a memory location where data is stored (such as a pointer). They have some properties:

* Direct inheritance from Object.
* Can implement many interfaces.
* Two predefined reference types in C#:
    * String
    ```C#
    string variableName =  "data";
    ```

    * Object: it is the root of all types.

#### Boxing and Unboxing

Boxing is the conversion of a value type to a reference type. Unboxing is the opposite, it converts from reference type to value type. Using boxing, an integer value can be converted to an object to be passed to a method that takes an object as an argument.

```C#
int n = 5;
object nObject = n;       //boxing
int n2 = (int) nObject;   //unboxing
```

#### Casting

There are two ways of changing the type of a value:

* Implicit conversion by assignment

```C#
short myShort = 5;
int myInt = myShort;
```

* Explicit conversion using the syntax (type)expression

```C#
double myDouble = 5.4;
int myInt = (int)myDouble;
```

#### Nullable Types

Variables of reference type can have the value null if they don't refer to anything. Variables of value type can't have the value null because they represent values. Sometimes it is useful to have a variable of value type that may have no value, to this end, a nullable type can be used:

```C#
int? i; // i is of type int but may have the value null
```

#### Arrays

C# supports one dimensional, multi dimensional and jagged arrays.

* One-dimensional arrays:
    * Are declared like this:
    ```C#
    string[] names = new string [30];
    ```

    * Starts at index 0 up to (in the example above) index 29 (length - 1).
    
    * Are accessed like this:
    ```C#
    names[2] = "John";
    ```

* Multi-dimensional array:
    ```C#
    int[,] numbers = new int [5,10];
    ```

* Jagged array:

    It is a multi-dimensional array where the rows may have different sizes.

    * It is declared like this:
     ```C#
    int[][] myJaggedArray = new int [4][];
    ```

    * The rows are filled in separately
    ```C#
    myJaggedArray[0] = new int [5];
    ```

    * Access to array elements work like this:
    ```C#
    myJaggedArray[0][2];
    ```

C# offers some methods to be used on arrays such as:

* Length: gives the number of elements in an array.

* Rank: gives the number of dimensions in the array.

* GetLength(n): gives the number of elements in the n-th dimension.

### Control Structures

#### Logical Operators

For comparing values, these operators exist:

```C#
a == b; // a is equal to b
a != b; // a is not equal to b
a <= b; // a is smaller or equal to b
a >= b; // a is larger or equal to b
a < b;  // a is smaller than b
a > b;  // a is larger than b
```

A conditional expression is written like this:

```C#
boolean_expr ? expr_true : expr_false
```

#### Conditional

In C# if statements can have an else condition or an if-else statemnt. In an if statement, the expression must evaluate to a bool value. If the expression is true, control is passed to a statement, if not, it is passed to the second statement (if an else statement is present).

```C#
if (name = "Callum") {
    Console.write("Hello Callum");
} else {
    Console.Write("Hello stranger");
}
```

#### Switch

In C# switch statements have an expression which **must** be of type: *byte*, *byte*, *short*, *ushort*, *int*, *uint*, *long*, *ulong*, *char* or *string*. Each case must include a jump-statement (also known as a break statement) apart from the last case in the switch. Case clauses can be combined by writing them directly one after the other.

```C#
int caseSwitch = 1;

switch (caseSwitch) {
    case 1:
        Console.WriteLine("Case 1");
        break;

    case 2:
        Console.WriteLine("Case 2");
        break;

    default:
        Console.WriteLine("Default case");
        break;
}
```

#### While

In a while statement, the boolean expression is evaluated before the statement is executed. This means it is possible for it to never reach the statement.

```C#
int i = 0;
while (i <= 3) { // Output: 0, 1, 2, 3
    Console.WriteLine(i);
    i++
}
```

#### Do While

In a do while statement, the boolean expression is evaluated after the statement is executed. This means it will always execute at least once.

```C#
int i = 0;
do { // Output: 0
    Console.WriteLine(i);
    i++
} while (i == 9)
```

#### For Loop

In a form loop, the initialization of the variable (in the example below it is *i*) is done before the first iteration. It iterates while the boolean_expression remains true. It performs step at the end of each iteration.

```C#
for (int i = 0; i<3; i++) {
    Console.Write(i); // Output: 0, 1, 2
}
```

#### For Each Loop

The foreach statement iterates over arrays and collections. The variable identifier is bound to each element in turn.

```C#
var fibNumbers = new List<int> { 0, 1, 1, 2, 3, 5, 8, 13 };
int count = 0;
foreach (int element in fibNumbers)
{
    count++;
    Console.WriteLine($"Element #{count}: {element}");
}
Console.WriteLine($"Number of elements: {count}");
```

### Functions

Functions, or static methods, encapsulate common sequences of instructions. As an example, this function returns the nth element of an array. The static method is then called directly.

```C#
static int Get(int[] arr, int n) {
    return arr[n];
}

i = Get(myArr, 3);
```

Functions can take in parameters. All objects, arrays and strings are passed by reference, meaning that changes that affect them is passed to the function, but value types are copied. The keyword *ref* is needed for passing by reference.

```C#
static void Set (int [] arr , int n , int x ) {
    arr[n] = x;
}

static void SetStep (int [] arr , ref int n , int x ){
    arr[n] = x;
    n += 1;
}
```

---

## Sources of Information

The majority of this document is formed from notes taken from a fourth year course at Heriot Watt called Industrial Programming and taught by Dr Hans Wolfgang Loidl.  Other useful links are:

* [.Net Framework to run C# applications - Download Instructions](https://dotnet.microsoft.com/)

* [C# and .Net tutorials and documentation](https://docs.microsoft.com/en-us/dotnet/welcome)

## Contributing

Interested in contributing to this document? I'd love to hear any suggestions on what to improve, any contributions you can make, and any errors I have made. Please feel free to [email me](mailto:haydencallum4@gmail.com) and I'll be in touch asap.