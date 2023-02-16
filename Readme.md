## LCD Digits
Your task is to create an LCD string representation of an
integer value using a 3x3 grid of space, underscore, and
pipe characters for each digit. Each digit is shown below
(using a dot instead of a space)

```
._.   ...   ._.   ._.   ...   ._.   ._.   ._.   ._.   ._.
|.|   ..|   ._|   ._|   |_|   |_.   |_.   ..|   |_|   |_|
|_|   ..|   |_.   ._|   ..|   ._|   |_|   ..|   |_|   ..|
```

Example: 910
```
._. ... ._.
|_| ..| |.|
..| ..| |_|
```

### Execute phpunit
You can execute phpunit directly with your local dependencies
```
vendor/bin/phpunit --bootstrap vendor/autoload.php tests
```
or you can use Docker using this bash script 
```
./test.sh
```
