# C#

## Table of Contents

* [Features](https://github.com/CMHayden/Learning/tree/master/C%23#features)
* [C# Program Explained](https://github.com/CMHayden/Learning/tree/master/C%23#c-program---explained)
* [Microsoft .Net](https://github.com/CMHayden/Learning/tree/master/C%23#microsoft-net)
* [Types](https://github.com/CMHayden/Learning/tree/master/C%23#types)
* [Control Structures](https://github.com/CMHayden/Learning/tree/master/C%23#control-structures)
* [ADO.Net](https://github.com/CMHayden/Learning/tree/master/C%23#adonet)
* [LINQ](https://github.com/CMHayden/Learning/tree/master/C%23#linq)
* [References](https://github.com/CMHayden/Learning/tree/master/C%23#sources-of-information)
* [Contributing](https://github.com/CMHayden/Learning/tree/master/C%23#contributing)

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

---

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

---

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

---

## Control Structures

### Logical Operators

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

### Conditional

In C# if statements can have an else condition or an if-else statemnt. In an if statement, the expression must evaluate to a bool value. If the expression is true, control is passed to a statement, if not, it is passed to the second statement (if an else statement is present).

```C#
if (name = "Callum") {
    Console.write("Hello Callum");
} else {
    Console.Write("Hello stranger");
}
```

### Switch

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

### While

In a while statement, the boolean expression is evaluated before the statement is executed. This means it is possible for it to never reach the statement.

```C#
int i = 0;
while (i <= 3) { // Output: 0, 1, 2, 3
    Console.WriteLine(i);
    i++
}
```

### Do While

In a do while statement, the boolean expression is evaluated after the statement is executed. This means it will always execute at least once.

```C#
int i = 0;
do { // Output: 0
    Console.WriteLine(i);
    i++
} while (i == 9)
```

### For Loop

In a form loop, the initialization of the variable (in the example below it is *i*) is done before the first iteration. It iterates while the boolean_expression remains true. It performs step at the end of each iteration.

```C#
for (int i = 0; i<3; i++) {
    Console.Write(i); // Output: 0, 1, 2
}
```

### For Each Loop

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

---

## Functions

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

## ADO.Net

ADO.Net provides a direct interface for a database. It uses a conventional, shallow embedding of SQL commands into C# as a host language. Meaning SQL commands are composed as strings. To access a database with ADO we use the following steps

### Connect to a Database

To connect to a database a string must specify location, account, password... Here is an example:

```C#
using MySql.Data.MySqlClient;
string cstr = "Server=Server;Database=Database;User ID= ID;Password=Password";
MySqlConnection dbcon;

try {
    dbcon = new MySqlConnection(cstr);
    dbcon.Open();
}catch (MySql.Data.MySqlClient.MySqlException ex){
    ... }
```

### Compose an SQL Query

To compose an SQL query we do it as a string. It can be any SQL operation. Depending on the database, SQL extensions might be available. Here is an example:

```C#
MySqlCommand dbcmd = dbcon.CreateCommand();

string sql = " SELECT A_ID, A_FNAME, A_LNAMe " + " FROM authors ";
dbcmd.CommandText = sql ;
```

### Issue Query and Process Response

When we issue our query, we must process the response. This is normally done in a while loop. Here is an example:

```C#
MySqlDataReader reader = dbcmd.ExecuteReader();

while(reader.Read()) {
    string FirstName = (string) reader["A_FNAME"];
    string LastName = (string) reader["A_LNAME"];

    Console.WriteLine("Name: " + FirstName + " " + LastName);
}
```

### Clean-up and Disconnect

To finish up, we close the reader and database connection, we dispose of the database command, and we set it all to null.

```C#
reader.Close();
reader = null;

dbcmd.Dispose();
dbcmd = null;

dbcon.Close();
dbcon = null;
```

---

## LINQ

LINQ or Language Integrated Query is a more advanced way to interact with databases. It's a new feature with C# 3.0 onwards. It provides SQL-like commands as language extensions rather than composing SQL queries as strings. This is known as deep embedding.

It can also be used to access other forms of data, such as XML or compound C# data structures. This results in more uniform and succinct code. Using LINQ in this way requires several advanced language features and is an alternative to using standard mechanisms of traversing data structures such as iterators.

To use LINQ to access a database, first classes representing the tables of the database are defined:

```C#
[Table(name = "authors")]
public class Authors
{
    [Column]
    public int A_ID {get; set;}
    [Column]
    public string A_FNAME {get; set;}
    [Column]
    public string A_LNAME {get; set;}
}
```

Next a conection is made using a connection string, similar to ADO.Net:

```C#
DataContext db = new DataContext(
    "Data Source = .\\MySql;" + "Initial Catalog=test; Integrated Security=True"
);
DataContext db = new DataContext(connStr)
```

The main advantage of LINQ is the simplified way of performing queries. SQL-like commands such as select or from are directly available.

```C#
Table<Authors> AuthorTable = db.GetTable<Authors>();
List<Authors> dbQuery = from author in Authors select author;

foreach (var author in dbQuery) {
    Console.WriteLine("Author: " + author.A_FNAME + " " + author.A_LNAME);
}
```

### Querying In Memory Data

Assume we have a list of books:

```C#
List<Books> booklist = new List<Book> {
    new Book {
        Title = "Learning C#",
        Author = "Jesse Liberty",
        Publisher = "O'Reilly",
        Year = 2008
    },
    new Book {
        Title = "Programming C#",
        Author = "Jesse Liberty",
        Publisher = "O'Reilly",
        Year = 2008
    },
    new Book {
        Title = "Programming PHP",
        Author = "Rasmus Lerdorf, Kevin Tatroe",
        Publisher = "O'Reilly",
        Year = 2006
    }
};
```

The normal way to iterate over the list looks like this:

```C#
foreach (Book b in booklist) {
    if (b.Author == "Jesse Liberty"){
        Console.WriteLine(b.Title + " by " + b.Author);
    }
}
```

The LINQ-style iteration looks like an SQL query and is shorter:

```C#
IEnumerable<Book> resultsAuthor =  // Embedded SQL-like code (LINQ code)
    from b in booklist
    where b.Author == "Jesse Liberty"
    select b;

// Iterate over the results
foreach(Book r in resultsAuthor) {
    Console.WriteLine(r.Title + " by " + r.Author);
}
```

Unfortunetly, with this solution, we return the entire books data from the query. So instead of just the title and author, we get everything. To avoid this, we can use anonymous types:

```C#
var resultsAuthor1 = 
    from b in booklist
    where b.Author == "Jesse Liberty"
    select new {b.Title, b.Author}; // Anonymous type

foreach(var r in resultsAuthor1) {
    Console.WriteLine(r.Title + " by " + r.Author);
}
```

This query can be shortened further still by using a lambda expression (anonymous function). This syntax is similar to an arrow function in JavaScript.

```C#
var resultsAuthor2 = booklist.Where(bookEval => bookEval.Author == "Jesse Liberty");

foreach(var r in resultsAuthor2) {
    Console.WriteLine(r.Title + " by " + r.Author);
}
```

We can also use other SQL Like commands such as sorting the result:

```C#
var resultsAuthor3 = 
    from b in booklist
    orderby b.Author
    select new {b.Title, b.Author};

foreach(var r in resultsAuthor3){
    Console.WriteLine(r.Title + " by " + r.Author);
}
```

or joining tables:

```C#
var resultList4 = 
    from b in booklist
    join p in puchaselist on b.Title equals p.Title
    where p.Quantity >=2
    select new {b.Title, b.Author, p.Quantity};

foreach (var r in resultList4) {
    Console.WriteLine(r.Quantity + " items of " + r.Title + " by " + r.Author);
}
```

---

## Advanced Features

Advanced features provide tools of abstraction to generate re-usable code. The enable structured control over collections, adapting language features such as foreach loops to user-defined classes. They enable the abstraction over types through generics and abstraction over methods with delegates, in a similar way to abstracting data through class hierarchies.

Using these features can save a lot of code and programming effort.

### Collections

Collections provide a framework for putting objects of the same type together. Examples are arrays, or pre-defined classes such as Stack, List, Queue, or Dictionary. Constructs are available to iterate over all elements of a collection. A user-defined class can be made a collection by implementing certain interfaces such as IEnumerable or ICollection.

### Indexers

Indexers allow for trating a class as if it were an array. This allows for using the foreach loop on a class. To use an indexer, a get and set method must be defined which are parameterised by an index argument. Read and write uses of the class in array notation are then translated into calls to these get and set methods.

```C#
public class ListBox {
    private string[] strings;
    private int ctr = 0;

    // params keyword allows for passing individual strings which the compiler translates to an array
    public ListBox(params string[] initStrs){ 
        // Constructor for ListBox. Takes initStrs and adds to strings[] 
        strings = new String[256];
        foreach (string s in initStrs){
            strings[ctr++] = s;
        }
    }

    public void Add(string s) {
        // Method to add new string to strings[]
        if(ctr >= strings.Length){
            // ToDo: handle overflow
        } else {
            strings[ctr++] = s;
        }
    }

    public string this[int index] {
        get {
            if (index<0 || index>=strings.Length) {
                // handle error case
            } else {
                return strings[index];
            }
        }

        set {
            if (index >= ctr) {
                // handle error case
            } else {
                strings[index] = value;
            }
        }
    }

    public int GetNumEntries() {
        // Returns the length of String
        return ctr;
    }
}
```

We can now treat LisBox class like an array of strings:

```C#
// Object lbt is treated like an array
for (int i = 0; i<lbt.GetNumEntries(); i++) {
    Console.WriteLine("lbt[{0}]: {1}", i, lbt[i]);
}
```

### Generics

Generics offer the possibility to leave the type of an element undefined. For this to be possible, a type-variable is specified. An example is the pre-defined List class:

```C#
public class List<T> { ... }
```

*T* is a type-variable. It stands for the element type of the list. The method in the class work over any basis type T meaning they are polymorphic. When using the list you specify the element type:

```C#
List<int> myList = new List<int>();
```

Other pre-defined generic classes are:

```C#
List<T> name = new List<T>();
Stack<T> name = new Stack<T>();
Queue<T> name = new Queue<T>();
Dictionary<K, V> name = new Dictionary<K, V>();
```

It is possible to restrict the type variable:

```C#
public class Node<T> where T:IComparable
```

It can only be instantiated for a type that impements the IComparable interface. Several generic interfaces can be implemented to make iteration over collections simpler. With an implementation of the *IEnumerable<T>* interface it is possible to use a foreach loop on the collection.

```C#
public class ListBox : IEnumerable<String> {
    private string[] strings;
    private int ctr = 0;

    // Enumerator
    public IEnumerator<string> GetEnumerator() {
        foreach (string s in strings) {
            yield return s;
        }
        // Required to fulfill IEnumerable
        System.Collections.IEnumerator System.Collections.IEnumerable.GetEnumerator(){
            IEnumerable.GetEnumerator(){
                throw new NotImplementedException();
            }
        }
    }
}
```

Now we can use a foreach loop on a ListBox lbt:

```C#
foreach(string s in lbt) { // Object lbt is used as a container
    Console.WriteLine("Value: {0}", s);
}
```

### Exceptions

Exceptions provide language constructs to deal with foreseen error cases in the code. For instance, when accessing an array an exception should be thrown if the index is out of range. An exception is an object that has information abotu the error. A handler deals with the error case. The handler can be defined in the method or in any of the calling methods. **NO EXCEPTION SHOULD BE UNHANDLED.**

Here is an example for checking the array bounds of the previous ListBox example

```C#
public string this[int index] {
    get {
        if (index <0 || index>=strings.Length) {
            throw new OutOfBoundsException();
        } else {
            return strings[index];
        }
    }
}
```

A concrete exception class must inherit from the Exception class:

```C#
public class OutOfBoundsException : System.Exception {
    public OutOfBoundsException(string msg) {
        base(msg);
    }
}
```

An exception is caught by attatching an exception handler to the code:

```C#
try {
    x = lbt[i]; //Dangerous code
} catch (OutOfBoundsException e) {
    Console.WriteLine("Index out of bounds; msg: {0}", e.Message);
}
```

### Delegates

Delegates are an object oriented technique for defining higher-order functions, i.e. functions that can take other functions as arguments. As delegates refer to methods, when delcaring delegates the type of a method is speccified.

```C#
public delegate int FindResult(object o1, object o2);
```

A concrete method can be instantiated for the delegate if it matches its result and parameter types. Anonymous methods or lambda abstractions can also be instantiated for a delegate.

Here is an example for storing and playing media:

```C#
public class MediaStorage {
    public delegate int PlayMedia();
    public void ReportResult(PlayMedia playerDelegate) {
        if (playerDelegate() == 0) {
            Console.WriteLine("Media played correctly");
        } else {
            Console.WriteLine("Error in playing media");
        }
    }
}
```

In the ReportResult method, the player delegate is called, which refers to a concrete method without fixing it in the code. At compile time, only the type of the delegate needs to be known. At run-time the delegate must be instantiated with one concrete method. This is the same abstraction step as it is done for data when using an abstract class as base type, and instantiating it with a sub-class at run-time.

The ReportResult method can be applied to different types of players:

```C#
public class AudioPlayer {
    private int audioPlayerStatus;
    public int PlayAudioFile() {
        Console.WriteLine("Playing audio file");
        audioPlayerStatus = 0;
        return audioPlayerStatus;
    }
}
```

Delegates are frequently used for GUI programming and handling events. An event for instance could be a mouse click. In the GUI code a delegate is used to refer to the method that will handle the mouse click. In the application code, an instance for the delegate is provided to perform the actual work. This achieves a separation of concerns between the GUI and the application.

#### Anonymous Methods

When instantiating a delegate with a short method it is cumbersome to define a method only to provide an instance to the delegate. In these cases, anonymous methods can be used, e.g. for increasing its argument:

```C#
delegate(ref int counter) { counter++; }
```

This form can be used instead of the name of a concrete method.

#### Lambda Expressions

Lambda expressions are a generalisation of anonymous methods. They behave like unnamed functions in a functional language, e.g. arrow functions in JS. Whereas anonymous methods can only be used in the context of delegates, lambda expressions can be used wherever a method is expected. This is used for the LINQ engine of C# for accessing databases.



---

## Reflection

Reflection is used to get access to concepts in C# that are not normally explicit. It is good for manipulating program constructs. To do this, you need to access the meta-data of a program.

### Implicit Serialisation

The goal with implicit serialisation is to turn the data in an object into a linear form so that it can be written to a disk or trasnferred to another machine. When done implicitly it, it means the system tries to automatically generate the code for it. To achieve implicit serialisation we attach an attribute as meta-data to a class definition:

```C#
[Serialisable]
class Student: Person {...}
```

This will automatically generate a function Serialize() for serialisation before writing an object to file:

*this uses a binary formatter. For compatibility you may want to use SOAP or XML*
*Soap - System.Runtime.Serialization.Formatters.Soap*
*Xml - System.Xml.Serialization*

```C#
IFormatter formatter = new BinaryFormatter();
Stream streamOut = new FileStream("ThisPerson.bin", FileMode.Create, FileAccess.Write, FileShare.None);
formatter.Serialize(streamOut, 1);
streamOut.Close();
```

The serialized data can then be read from the file like this:

```C#
IFormatter formatter = new BinaryFormatter();
Stream streamIn = new FileStream("ThisPerson.bin", FileMode.Open, FileAccess.Read, FileShare.Read);
Student s1 = (Student) formatter.Deserialize(streamIn);
streamIn.Close();
```

This uses a binary formatter. For compatibility across platforms, you often want other formats such as SOAP (System.Runtime.Serialization.Formatters.Soad) or XML (System.Xml.Serialization).

### Explicit Serialisation

Writing your own serialization function is easy, and useful in many contexts such as implementing a ToString() function. To serialise an object of class A:

* Serialize all value type attributes, by directly writing the data into the result buffer.

* Serialize all reference type attributes by recursively calling serialisation on them.

### Naive Serialisation

We implement ToString() for our Student example as one special case of serialisation:

```C#
public string ToString() {
    return String.Format(
        "Name: {0} {1}\tAddress: {2} \nMatric. No.: {3} \tDegree: {4}",
        this.GetfName(),
        this.GetlName(),
        this.GetAddress(),
        this.matricNo, 
        this.degree
    );
}
```

### Serialisation Using Overloading

A better way to implement serialisation is to use the class hierarchy and overloading:

```C#
public override string ToString() {
    string base_str = base.ToString();
    string this_str = String.Format("MatricNo: {0} \tDegree: {1}", this.matricNo, this.degree);
    return base_str+"\n"+this_str;
}
```

This way, any change in ToString() as defined in the base class is picked up without further code changes. The implementor of the Student class no longer needs to know details of the base class (person), abstracting over implementation details and making the code more re-usable.

### Properties Rather Than Fields

We now use properties rather than fields to better controll access to the data:

```C#
class Student: Person{
    //private data for student
    private string _matricNo;
    private string _degree;

    //properties to access the data
    public string degree {
        get { return _degree; }
        set { _degree = value; }
    }

    public string matricNo {
        get { return _matricNo; }
        set { _matricNo = value; }
    }

    //constructor would go here
}
```

### Serialisation using Reflection

We can further improve the code by abstracting over the concrete property-names as well by using reflection:

```C#
public override string Serialise() {
    string str = "";
    Type type = this.GetType();
    PropertyInfo[] props = types.GetProperties();
    foreach(PropertyInfo propertyInfo in props) {
        str += String.Format("\t{0}: {1}",
            propertyInfo.Name,
            propertyInfo.GetValue(this, null)
        );
    }
    return str;
}
```

**NOTE** this code doesn't mention the concrete names of properties at all!

Running this code will show the names and values for all properties visible in an object.

### Fields vs Properties

You can use either fields or properties, but the reflective code needs to know whether to look for one or the other. Properties are generally safer, even if using the default getter and setter, because you can later modify (for example) the setter to trace calls to it like this:

```C#
public string officeNo {
    get { return _officeNo; }
    set {
        StackTrace stackTrace = new StackTrace();
        MethodBase methodBase = stackTrace.GetFrame(1).GetMethod();
        Console.WriteLine("setter called by: " + methodBase.Name);
        _officeNo = value;
    }
}
```

This could also be done using attributes.

### Custom attributes

Now we want to define our own attributes and attach it to code. We want to define a BugFix attribute which captures information of bug-fixes during development. Thi sis better than capturing changes in comments because the meta-data is machine-readable.

We want to use an attribute like this:

```C#
[BugFixAttribute(121, "Callum M Hayden", "30/4/20", Comment = "Fixed the annoying bug with the GUI")]

public class MyMath
```

To define custom attributes first we need to define a class for our attributes, deriving from System.Attribute

```C#
public class BugFixAttribute : System.Attribute
```

Then we need to specify to which language constructs this attribute can be attatched to. To do this, we use an attribute:

```C#
[AttributeUsage(AttributeTargets.Class |
                AttributeTargets.Constructor |
                AttributeTargets.Field |
                AttributeTargets.Method | 
                AttributeTargets.Property,
                AllowMultiple = true)]
```

The constructor of the attribute is faily conventional:

```C#
//attribute constructor for positional parameters
public BugFixAttribute
(
    int bugID,
    string programmer,
    string date
)
{
    this.BugID = bugID;
    this.Programmer = programmer;
    this.Date = date;
}
```

We want to use both positional and named arguments to the constructor. To do this we introduce properties:

```C#
//accessors
public int BugID { get; private set; }
public string Date { get; private set; }
public string Programmer { get; private set; }

//property for named parameter
public string Comment { get; set; }
```

**NOTE** the positional parameters are read-only, by specifying the setter as private. The named parameter Comment is implemented as a property.

### TL;DR:

Reflection allows the programmer to put meta-data onto language constructs.

A common example is the use of the serializable attribute, which is needed for tasks such as writing to a file.

Reflection can be used ot make code more abstract hence more general, e.g. iterating over all properties.

The programmer can define own custom attributes to attach meta-data such as information about code changes.

## Parallel Programming with C#

Parallel programming is the use of multiple resources, in this case, processors, to solve a problem. This type of programming takes a problem, breaks it down into a series of smaller steps, delivers instructions, and processors execute the solutions at the same time. 

C# provides several mechanisms for parallel programming:

### Explicit threads

Explicit threads with synchronisation via locks, critical regions etc. The user gets full control over the parallel code. However, orchestrating the parallel threads is tricky and error prone due to race conditions, deadlocks, etc. This technique requires a shared-memory model.

### Explicit threads with a message-passing library:

Threads communicate by explicitly sending messages, with data required/produced, between workstations. Parallel code can run on a distributed-memory architecture, eg, a network of workstations. The programmer has to write code for unserialising the data that is sent between machines.

### TL;DR:

The preferred, high-level way of coding parallel computation in C# is through parallel patterns, an instance of design patterns.

Parallel patterns capture common patterns of parallel computation. Two main classes of parallelism exist:

* Data parallelism which is implemented through parallel for/foreach loops.

* Task parallelism, which is implemented through parallel method invocation.

Tuning the parallel performance often requires code restructuring (thresholding).

---

## Sources of Information

The majority of this document is formed from notes taken from a fourth year course at Heriot Watt called Industrial Programming and taught by Dr Hans Wolfgang Loidl.  Other useful links are:

* [.Net Framework to run C# applications - Download Instructions](https://dotnet.microsoft.com/)

* [C# and .Net tutorials and documentation](https://docs.microsoft.com/en-us/dotnet/welcome)

## Contributing

Interested in contributing to this document? I'd love to hear any suggestions on what to improve, any contributions you can make, and any errors I have made. Please feel free to [email me](mailto:haydencallum4@gmail.com) and I'll be in touch asap.