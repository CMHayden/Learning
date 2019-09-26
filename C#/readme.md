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