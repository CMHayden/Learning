# General Programming

Objected Oriented
Paradigm


## Systems Languages

Systems languages build algorithms and data structures from scratch. They use strong typing to help manage complexity of large pieces of software. Focus is often on speed of execution. The easy access to low-level operating system is crucial.

Examples: C, C#

### Common Features of Systems Languages

Systems langauges typically offer more direct access to the physical hardware of the machine. 

They often lack built in input/output facilities because a system-software project usually develops its own I/O mechanisms or builds on top of basic monitor I/O or screen management facilities. Example, importing IO in a C++ or C# project.

With systems languages, type checks are performed at compile-time, this is called **static type checking**, and allows for many type errors to be caught in the early development cycle. It often results in compiled code that executes quickly because the compiler knows the exact data types that are in use, allowing it to produce optimized machine code.

### When to use Systems Languages

* Does the application implement complex algorithms or data structures?

* Does the application manipulate large data sets?

* Are the application's functions well-defined and changing slowly?

If so, then a systems language is for you.

## Scripting Languages

The main purpose of scripting languages is to glue software together. The focus is on rapid-prototyping. Safety aspects are of a lesser concern, so scripting languages are often type-less. Modern scripting languages incorporate features of general purpose programming languages, especially object-oriented (O-O) features. They are easier to learn for casual programming.

Examples: sh, php, python, perl, ruby, lua

### Scripting Languages - A History

They were developed as an abstraction over assembler programs. They are higher-level by introducing abstraction mechanisms to manage large pieces of code. They are safe thanks to the use of strong typing allowing easier detection of mistakes in the program. They delegate some control of the underlying machine to libraries and operating system. 

Together, this drastically increases programmer productivity.

#### First Generation:

The first generation of scripting languages are a simple composition of command-line jobs (especially Unix systems); also called batch-languages. There is very little language abstraction. The syntax is slightly different depending on the languages. They include rich libraries for low-level coordination with the operating system.

Examples: sh, bash, tcsh...

#### Second Generation

The second generation of scripting languages try to combine many different languages features into one language. It addresses the problem that different batch languages do the same thing slightly differently, thus, the language becomes huge. The mixture of concepts makes it hard to read thid-party code. It also has extended support for GUIs.

Examples: perl, tcl

#### Third Generation

The third generation of scripting languages increasingly use modern programming language abstraction to make programming simpler. In particular, they have a heavy use of object oriented concepts, along with concepts from other programming paradigms such as higher-order functions and polymorphism.

Examples: php, python, ruby, lua, go, dart

### Relevance of Scripting Languages

The increasing speed of processors make the application of interpreted languages viable. With large libraries the development of software from scratch is a lot less common. With an environment based on using hardware and software systems from different vendors (Heterogeneous Environment) make a write-once run-everywhere approach appealing. New technologies make the issue of composing services even more important.

### Common Features of Scripting Languages

Scripting languages are usually typless, meaning there are no type restrictions on the use of the input/output to/from existing components. This enhances the flexability of the language, but reduces the safety. Here is an example from Unix shells pipelining mechanism:

```shell
select | grep scripting | wc
```

This reads the text currently selected in a window, passes it to a search for the word "scriting" and counts the number of lines in the output.

Modern scripting languages provide a limited amount of type information to re-gain type safety. To avoid frequent conversion functions between types, class hierarchies and implicit type conversions are used. Some type checks are performed at run-time.

Scripting languages are usually interpreted. This gains rapid turnaround time in writing and testing code. It increases flexibility, since the program can generate strings that are in themselves programs. It loses performance compared to executing compiled code; but typically the amount of code in the scripting language is small and performance is dominated by the code in the components.

Scripting languages are often higher-level than system languages, especially for the latest generation. For example, many scripting languages have powerful built-in mechanisms for regular expression substitution. In the latest generation, high-level concepts such as class hierarchies are included too.

### When to use Scripting Languages

* Is the application's main task to connect pre-existing components?

* Will the application manipulate a variety of different kinds of things?

* Does the application involve a GUI?

* Does the application do a lot of string manipulation?

* Will the application's functionality evolve rapidly over time?

* Does the application need to be extensible?

If the answer is yes, scripting languages are the way forward.

## Sources of Information

The majority of this document is formed from notes taken from a fourth year course at Heriot Watt called Industrial Programming and taught by Dr Hans Wolfgang Loidl. 

## Contributing

Interested in contributing to this document? I'd love to hear any suggestions on what to improve, any contributions you can make, and any errors I have made. Please feel free to create [email me at haydencallum4@gmail.com](mailto:haydencallum4@gmail.com) and I'll be in touch asap.
