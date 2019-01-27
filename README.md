# What is this

This package provides the same function naming with python for php to reduce switching cost.
though the function for the object may be defined just as a function becauase the type of python and php is different.

ex.
Python: string.lower
=>
PHP: lower(string)

# How to install it

add 
```
    "require": {
        ...
        "hikarine3/py2php": "*",
        ...
    }
```
to composer.json

# How to use

```
$py2php = new Py2php();
$string = "ABC";
print($py2php->lower($string));
```

# Supported function

php =>  py2php

strtolower  =>  lower

# How to test

composer test tests;

# Author

Hajime Kurita

An adminstrator of https://sakuhindb.com/ , http://minakoe.jp/ and so on

https://github.com/hikarine3

Twitter:

JP: https://twitter.com/hikarine3

EN: https://twitter.com/hajimekurita