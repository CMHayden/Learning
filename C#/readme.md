# C#
C# is an elegant and type-safe object-oriented language that enables developers to build a variety of secure and robust applications that run on the .NET Framework. You can use C# to create Windows client applications, XML Web services, distributed components, client-server applications, database applications, and much, much more. Visual C# provides an advanced code editor, convenient user interface designers, integrated debugger, and many other tools to make it easier to develop applications based on the C# language and the .NET Framework.

## Types

### Value Types
Variables stand for the value of that type. They can be signed or unsigned. Signed types can hold a negative or positive value, whereas unsigned types can only hold positive values. The value types in C# are:
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

    * Type Table:

    | Type                      | Size (in bits)    | Range                                             |
    | ------------------------- | ----------------- | ------------------------------------------------- | 
    | sbyte                     | 8                 | -128 to 127                                       |
    | byte                      | 8                 | 0 to 255                                          |
    | short                     | 16                | -32768 to 32767                                   |
    | ushort                    | 16                | 0 to 65535                                        |
    | int                       | 32                | -2147483648 to 21747483647                        |
    | uint                      | 32                | 0 to 4294967295                                   |