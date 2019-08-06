# SQL

## Data Types

| Type                      | Description   |
| ------------------------- | ------------- | 
| INT                       | Stores an integer which can be between -2147483648 to 2147483647 OR 0 to 4294967295                                            | 
| SMALLINT                  | Stores an integer which can be between -32768 to 32767 OR 0 to 65535                                                           |
| TINYINT                   | Stores an integer which can be between -128 to 127 OR 0 to 255                                                                 |
| MEDIUMINT                 | Stores an integer which can be between -8388608 to 8388607 OR 0 to 16777215                                                    |
| BIGINT                    | Stores an integer which can be between -9223372036854775808 to 9223372036854775807 OR 0 to 18446744073709551615                |
| FLOAT (L, D)              | Stores a floating point number with L for length and D for No. of decimals. Precision of 24.                                   |
| DOUBLE (L, D)             | Stores a floating point number with L for length and D for No. of decimals. Precision of 53.                                   |
| DECIMAL (L, D)            | Stores a floating point number with L for length and D for No. of decimals. Each decimal is 1 byte.                            |
| DATE                      | Ranges from '1000-01-01' to '9999-12-31'                                                                                       |
| DATETIME                  | Ranges from '1000-01-01 00:00:00' to '9999-12-31 23:59:59'                                                                     |
| TIMESTAMP                 | Ranges from '1970-01-01 00:00:01' UTC to '2038-01-19 03:14:07' UTC                                                             |
| TIME                      | Ranges from '-838:59:59' UTC to '838:59:59' UTC                                                                                |
| CHAR                      | Stores fixed alphanumeric data. It can hold up to 255 characters                                                               |
| VARCHAR                   | Stores variable alphanumeric data. It can hold up to 65535 characters                                                          |
| TEXT                      | Stores variable alphanumeric data. It can hold up to 65535 characters                                                          |
| TINYTEXT                  | Stores variable alphanumeric data. It can hold up to 255 characters, but it increases the memory overhead.                     |
| MEDIUMTEXT                | Stores variable alphanumeric data. It can hold up to 16777215 characters, but it increases the memory overhead.                |
| LONGTEXT                  | Stores variable alphanumeric data. It can hold up to 4294967295 characters, but it increases the memory overhead.              |
| BINARY                    | Stores fixed length binary string and holds up to 255 characters                                                               |
| VARBINARY                 | Stores a variable length binary string and holds up to 65535 characters                                                        |
| BLOB                      | Stands for Binary Large Object. It is used to hold a variable amount of data up to 65535 characters                            |
| TINYBLOB                  | Stands for Binary Large Object. It is used to hold a variable amount of data up to 255 characters                              |
| MEDIUMBLOB                | Stands for Binary Large Object. It is used to hold a variable amount of data up to 16777215 characters                         |
| LONGBLOB                  | Stands for Binary Large Object. It is used to hold a variable amount of data up to 4294967295 characters                       |

## Databases

Create database command is used to create a database. It takes one parameter, the name of the database we are creating.

```SQL
    CREATE DATABASE <databasename>
```

Use command is used to select the database we want to work with. It is used mostly when we ave multiple databases in our MySQL server.

```SQL
    USE <databasename>
```

Drop database command is used to delete a database. This also deletes all the tables and relationships between them.

```SQL
    DROP DATABASE <databasename>
```

## Tables

MySQL databases store data in tables. Each table consists of rows and columns, where the columns specify the type of data and the rows the data itself.

We use the create table command to create a table in mysql.

```SQL
    CREATE TABLE table_name (
        column1 datatype constraint,
        column2 datatype constraint,
        ...
        columnN datatype constraint,
    );
```

```SQL
    CREATE TABLE table_name (
        id INT,
        fullname varchar(45) ,
        age INT,
        phone varchar(12),
    );
```

The truncate table command is used to delete the data from a table. The drop table command is used to delete the full table.

```SQL
    TRUNCATE TABLE table_name; 
    DROP TABLE table_name;
```

## Altering tables

Rename a table:

```SQL
    ALTER TABLE table_name
    RENAME TO new_table_name;
```

Rename a column

```SQL
    ALTER TABLE table_name
    CHANGE COLUMN old_column_name new_column_name datatype;
```

Add columns

```SQL
    ALTER TABLE table_name
    ADD column_name1 datatype,
    ADD column_name2 datatype,
    ...
    ADD column_nameN datatype;
```

Drop column

```SQL
    ALTER TABLE table_name
    DROP COLUMN column_name;
```

Modify column

```SQL
    ALTER TABLE table_name
    MODIFY COLUMN column_name datatype;
```



