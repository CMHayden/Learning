<p align="center"><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noopener noreferrer"><img width="100" src="https://pluralsight2.imgix.net/paths/images/javascript-542e10ea6e.png" alt="Vue logo"></a></p>

JavaScript is primarily known as the language of most modern web browsers. It is a powerful, flexible and fast programming language now being used for increasingly complex web development and beyond!

This will be broke into different sections as I find and learn about them. Some basics may be overlooked as I try to remember and go back to the basics.

## Console

The console is a panel which displays important messages such as errors. The ```console``` keyword refers to an object that we can use in our code. Keywords are words that are built into JS so the computer will recognize them and treats them specially. Some of the options we can do with console are:

**1. console.log():**

This is used to log details in the console. It is a great tool when it comes to debugging code. Anything can be typed into the log function.

```js
const variable = 'test';

console.log(variable);      // output: test
console.log("test");        // output: test
console.log(1);             // output: 1
console.log(1+1);           // output: 2
```

**2. console.warn():**

This is much like the log function, but used to tell the console there is a warnings Anything can be passed to the warn function, but it is best practice to only use it for printing warnings. By default, warning messages are highlighted in yellow.

```js
const variable = 'test';

console.warn(variable);     // output: test with a yellow warning
console.warn("test");       // output: test with a yellow warning
console.warn(1);            // output: 1 with a yellow warning
console.warn(1+1);          // output: 2 with a yellow warning
```

**3. console.error():**

This is much like the log function, but used to tell the console there is an error. Anything can be passed to the errpr function, but it is best practice to only use it for printing errprs. By default, error messages are highlighted in red.

```js
const variable = 'test';

console.error(variable);    // output: test with a red error
console.error("test");      // output: test with a red error
console.error(1);           // output: 1 with a red error
console.error(1+1);         // output: 2 with a red error
```

**4. console.clear():**

This is used to clear the console. When using chrome a simple overlayed text will be printed stating the console has been cleared where as in firefox no message is returned.

```js
console.clear();
```

**5. console.time() and console.timeEnd()**

This is used to time how long a function or block of code takes to execute. The time method takes a name which much match with a time end method's name.

```js
console.time('abc'); 
 let fun =  function(){ 
     console.log('fun is running'); 
 } 
 let fun2 = function(){ 
     console.log('fun2 is running..'); 
 } 
 fun(); // calling fun(); 
 fun2(); // calling fun2(); 
console.timeEnd('abc'); 
```

**6. console.table()**

This is used to create a table in the console. The input must be an array or an object which will be shown as a table.

```js
console.table({'a': 1, 'b': 2});
```

**7. console.count()**

This is used to count the number that the function hit by this counting method.

```js
for(let i=0;i<5;i++){ 
    console.count(); 
} 
```

**7. console.group() and console.groupEnd()**

This is used to group contents in seperate blocks. The group and groupEnd methods must have the same name.

```js
console.group("sample");
console.warn("Warning!");
console.error("Error!");
console.log("Im in a group");
console.groupEnd("sample");
```

**8. Custom console logs**

You can style your own logs with css. To do so, you must pass the css style as a second parameter of console log. The style replaces '%c' is the example below:

```js
const spacing = '10px'; 
const styles =  
    `padding: ${spacing}; background-color: black; color: blue; font-style:  
        italic; border: 1px solid black; font-size: 3em;`; 
console.log('%cCustom Log', styles); 
```
