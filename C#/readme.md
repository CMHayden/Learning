# C#
C# is an elegant and type-safe object-oriented language that enables developers to build a variety of secure and robust applications that run on the .NET Framework. You can use C# to create Windows client applications, XML Web services, distributed components, client-server applications, database applications, and much, much more. Visual C# provides an advanced code editor, convenient user interface designers, integrated debugger, and many other tools to make it easier to develop applications based on the C# language and the .NET Framework.

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