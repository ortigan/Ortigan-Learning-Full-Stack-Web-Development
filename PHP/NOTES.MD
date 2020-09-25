# Notes

## Syntax eg.1

A PHP script can be placed anywhere in the document.

A PHP script starts with <?php and ends with ?>:

```php
<?php
// PHP code goes here
?>
```

PHP files are saved with .php extension 

Basic "Hello World" program

Example 1.1

```php
<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

</body>
</html>
```

> PHP statement are end with a semicolon (;)

> All keywords are not case sensitive but variable names are case sensitive

## Variables eg.2

### Declaring a variable

In PHP variable starts with the $ sign, followed by the name of the variable:

```php
<?php 
	$name = "John Doe"; 
	$num1 = 10;
	$num2 = 15.70;
?>
```

A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

Rules for PHP variables:

- A variable starts with the `$` sign, followed by the name of the variable
- A variable name must start with a letter or the underscore character
- A variable name cannot start with a number
- A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variable names are case-sensitive (`$age` and `$AGE` are two different variables)

> Remember PHP variable name are case sensitive

### Using a variable

The PHP echo statement is often used to output data to the screen.

Example 2.1

```php
<?php 
	$name = "John Doe";
	echo "My name is $name";
?>
```

Output

```bash
My Name is John Doe
```

Eample 2.2

```php
<?php 
	$num1 = 10;
	$num2 = 25;
	$ans = $num1 + $num2; 
	echo "The ans is $ans";
?>
```

```bash
The ans is 35
```

## Strings eg.3

Functions to manipulate string 

### strlen() - returns the length of the string

Example 3.1

```php
<?php
	echo strlen("Welcome to Ortigan Learning");
?>
```

Output

```bash
	28
```

### str_word_count() - Count Words in a String

Example 3.2

```php
<?php
    echo str_word_count("Welcome to Ortigan Learning!"); 
?>
```

Output

```bash
4
```

## Loops eg.4

Like any other language, loop in PHP is used to execute a statement or a block of statements, multiple times until and unless a specific condition is met. This helps the user to save both time and effort of writing the same code multiple times.

PHP have for loops:

1. for loop
2. while loop
3. foreach loop
4. do-while loop

### For Loop

This type of loops is used when the user knows in advance, how many times the block needs to execute. That is, the number of iterations is known beforehand. These type of loops are also known as entry-controlled loops. There are three main parameters to the code, namely the initialization, the test condition and the counter.

**Syntax**

```php
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}
```

**Parameters**

- *init counter*: Initialize the loop counter value
- *test counter*: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
- *increment counter*: Increases the loop counter value

Example 4.1

```php
<?php 
    for ($i=0; $i < 10; $i++) { 
        echo $i+1 . "<br>";
    }
?>
```

Output

```bash
1
2
3
4
5
6
7
8
9
10
```

### While Loop

The while loop is also an entry control loop like for loops i.e., it first checks the condition at the start of the loop and if its true then it enters the loop and executes the block of statements, and goes on executing it as long as the condition holds true.

**Syntax**

```php
while (condition is true) {
  code to be executed;
}
```

Example 4.2

```php
<?php 
	$a = 0;
	while ($a <= 10) {
	    echo $a . "<br>";
	    $a++;
	}
?>
```

Output

```bash
0
1
2
3
4
5
6
7
8
9
10
```

### Foreach Loop

This loop is used to iterate over arrays. For every counter of loop, an array element is assigned and the next counter is shifted to the next element.

**Syntax**

```php
foreach ($array as $value) {
  code to be executed;
}
```

For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.

Example 4.3

```php
<?php
	$names = array('Pranav', 'Gaurav', "Parag", 'Jayesh', 'JD');
  foreach ( $names as $name ) {
    echo $name . "<br>";
	}
?>
```

Output

```bash
Pranav
Gaurav
Parag
Jayesh
JD
```

### Do while Loop

The do while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.

**Syntax**

```php
do {
  code to be executed;
} while (condition is true);
```

Example 4.4

```php
<?php
    $a = 0;
    do {
    echo $a . "<br>";
    $a++;
    } while ($a <= 10);
?>
```

Output

```bash
0
1
2
3
4
5
6
7
8
9
10
```

## Form Handling eg.5

There are two ways the browser client can send information to the web server.

- The GET Method
- The POST Method

When we develop a website or a web application, we often have to create forms to take input from users, like a **Login** form or a **Registration** form.

Creating a form on the webpage is accomplished using HTML, while PHP serves as a transport for those values from the webpage to the server and then in further processing those values.

PHP provides two **superglobals** `$_GET` and `$_POST` for collecting form-data for processing.

### The GET Method

The GET method sends the encoded user information appended to the page request. The page and the encoded information are separated by the ? character.

```bash
http://www.test.com/index.htm?name1=value1&name2=value2
```

**When to use Get Method?**

- The variable names and values will be visible in URL if HTML forms submitted by the GET method.
- The GET method is restricted to send up to *2048 characters* only.
- When you submit sensitive information like passwords then should not use this method.
- GET method can't be used, to send binary data like images and Word documents.
- GET method data can be accessed using PHP QUERY_STRING environment variable.
- PHP $_GET associative array is used to access all the sent information by GET method.

Example 5.1

`Filename: form_get_5.1.html`

```html
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-3">
            <h2>Form Handling <br/> <small>using <b>GET</b> Method</small></h2>
            <div class="row">
                <div class="col-md-4">
                    <form action="form_get_process_5.1.php" method="get">
                        <div class="form-group">
                            <label for="Name"></label>
                            <input type="text"
                            class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
                            <small id="" class="form-text text-muted">Name</small>
                        </div>
                        <div class="form-group">
                            
                            <label for="email"></label>
                            <input type="text"
                            class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
                            <small id="" class="form-text text-muted">Email</small>
                        </div>
                        <div class="form-group">
                            
                            <label for="password"></label>
                            <input type="password"
                            class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
                            <small id="" class="form-text text-muted">Password</small>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
```

`Filename: form_get_process_5.1.php`

```php
<?php 
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    echo "Hello " . $name . "<br>";
    echo "Your email is ".$email;
?>
```

Output

```bash
Hello John Doe
Your email is john.doe@gmail.com
```

### The POST Method

Information sent from a form with the POST method is invisible and has no limits on the amount of information to send.

> However, there is an 8 MB max size for the POST method, by default (can be changed by setting the post_max_size in the php.ini file).

**When to use POST Method?**

- The POST method can be used to send ASCII as well as binary data.
- The data sent by POST method goes through HTTP header, so security depends on HTTP protocol. By using Secure HTTP, you can make sure that your information is secure.
- PHP $_POST associative array is used to access all the sent information by POST method.
- Variables are not visible in the URL so users can't bookmark your page.

Example 5.2

`Filename: form_post_5.2.html`

```html
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-3">
            <h2>Form Handling <br/> <small>using <b>POST</b> Method</small></h2>
            <div class="row">
                <div class="col-md-4">
                    <form action="form_post_process_5.2.php" method="post">
                        <div class="form-group">
                            <label for="Name"></label>
                            <input type="text"
                            class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
                            <small id="" class="form-text text-muted">Name</small>
                        </div>
                        <div class="form-group">
                            
                            <label for="email"></label>
                            <input type="text"
                            class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
                            <small id="" class="form-text text-muted">Email</small>
                        </div>
                        <div class="form-group">
                            
                            <label for="password"></label>
                            <input type="password"
                            class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
                            <small id="" class="form-text text-muted">Password</small>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
```

`Filename: form_post_process_5.2.php`

```php
<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "Hello " . $name . "<br>";
    echo "Your email is ".$email;
?>
```

Output

```bash
Hello John Doe
Your email is john.doe@gmail.com
```

## PHP Date and Time eg.6

### Time

PHP's `time()` function gives you all the information that you need about the current date and time. It requires no arguments but returns an integer.

The integer returned by `time()` represents the number of seconds elapsed since midnight GMT on January 1, 1970. This moment is known as the **UNIX epoch**, and the number of seconds that have elapsed since then is referred to as a timestamp.

Example 6.1

```php
<?php
   echo time();
?>
```

Output

```html
1601018121
```

### Date

PHP `date()` function converts a timestamp to a format that is readable and more understandable to humans.

**Syntax**

```php
date(format,timestamp)
```

[Parameters](https://www.notion.so/375e8f89fabe49cba59460fdcff68e7a)

**Formatting options available in date() function**: The format parameter of the date() function is a string that can contain multiple characters allowing to generate dates in various formats.

Date-related formatting characters that are commonly used in format string:

- d – Represents day of the month; two digits with leading zeros (01 or 31).
- D – Represents day of the week in text as an abbreviation (Mon to Sun).
- m – Represents month in numbers with leading zeros (01 or 12).
- M – Represents month in text, abbreviated (Jan to Dec).
- y – Represents year in two digits (08 or 14).
- Y – Represents year in four digits (2008 or 2014).
- The parts of the date can be separated by inserting other characters, like hyphens (-), dots (.), slashes (/), or spaces to add additional visual formatting.

Example 6.2

```php
<?php 
	echo "Today is " . date("d-m-Y");
?>
```

Output

```html
Today is 24-09-2020
```

The following characters can be used along with date() function to format the time string:

- h – Represents hour in 12-hour format with leading zeros (01 to 12).
- H – Represents hour in in 24-hour format with leading zeros (00 to 23).
- i – Represents minutes with leading zeros (00 to 59).
- s – Represents seconds with leading zeros (00 to 59).
- a – Represents lowercase ante meridian and post meridian (am or pm).
- A – Represents uppercase ante meridian and post meridian (AM or PM).

Example 6.3

```php
<?php
	echo "Time is " . date("H:i:sa");
?>
```

Output

```html
Time is 12:53:47pm
```

### Get Your Time Zone

If the time you got back from the code is not correct, it's probably because your server is in another country or set up for a different time zone.

So, if you need the time to be correct according to a specific location, you can set the time zone you want to use.

Example 6.4

```php
<?php
	date_default_timezone_set('Asia/Kolkata');
	echo "The time is " . date("h:i:sa");
?>
```

Output

```html
The Time is 13:06:29pm
```

### PHP Timezones

**Africa**
| Column 1 | Column 2 | Column 3 | Column 4|
| -------- | -------- | -------- |  -------- |
Africa/Abidjan	|Africa/Accra	|Africa/Addis_Ababa	|Africa/Algiers
Africa/Asmara	|Africa/Bamako	|Africa/Bangui|	Africa/Banjul
Africa/Bissau	|Africa/Blantyre	|Africa/Brazzaville |	Africa/Bujumbura
Africa/Cairo	|Africa/Casablanca	|Africa/Ceuta	|Africa/Conakry
Africa/Dakar	|Africa/Dar_es_Salaam	|Africa/Djibouti	|Africa/Douala
Africa/El_Aaiun	|Africa/Freetown	|Africa/Gaborone	|Africa/Harare
Africa/Johannesburg	|Africa/Juba	|Africa/Kampala|	Africa/Khartoum
Africa/Kigali	|Africa/Kinshasa	|Africa/Lagos	|Africa/Libreville
Africa/Lome	|Africa/Luanda	|Africa/Lubumbashi	|Africa/Lusaka
Africa/Malabo	|Africa/Maputo	|Africa/Maseru	|Africa/Mbabane
Africa/Mogadishu	|Africa/Monrovia	|Africa/Nairobi|	Africa/Ndjamena
Africa/Niamey	|Africa/Nouakchott	|Africa/Ouagadougou|	Africa/Porto-Novo
Africa/Sao_Tome	|Africa/Tripoli	|Africa/Tunis	|Africa/Windhoek |


**America**
| Column 1 | Column 2 | Column 3 |
| -------- | -------- | -------- | 
America/Adak	|America/Anchorage|	America/Anguilla
America/Antigua|	America/Araguaina	|America/Argentina/Buenos_Aires
America/Argentina/Catamarca	|America/Argentina/ComodRivadavia|	America/Argentina/Cordoba|
America/Argentina/Jujuy|	America/Argentina/La_Rioja	|America/Argentina/Mendoza
America/Argentina/Rio_Gallegos	|America/Argentina/Salta	|America/Argentina/San_Juan
America/Argentina/San_Luis	|America/Argentina/Tucuman	|America/Argentina/Ushuaia
America/Aruba	|America/Asuncion	|America/Atikokan
America/Atka	|America/Bahia	|America/Bahia_Banderas
America/Barbados	|America/Belem	|America/Belize
America/Blanc-Sablon	|America/Boa_Vista	|America/Bogota
America/Boise|	America/Buenos_Aires	|America/Cambridge_Bay
America/Campo_Grande|	America/Cancun	|America/Caracas
America/Catamarca|	America/Cayenne	|America/Cayman
America/Chicago	|America/Chihuahua|	America/Coral_Harbour
America/Cordoba	|America/Costa_Rica|	America/Creston
America/Cuiaba|	America/Curacao	|America/Danmarkshavn
America/Dawson	|America/Dawson_Creek	|America/Denver
America/Detroit	|America/Dominica	|America/Edmonton
America/Eirunepe	|America/El_Salvador|	America/Ensenada
America/Fort_Wayne	|America/Fortaleza	|America/Glace_Bay
America/Godthab|	America/Goose_Bay	|America/Grand_Turk
America/Grenada	|America/Guadeloupe|	America/Guatemala
America/Guayaquil	|America/Guyana	|America/Halifax
America/Havana	|America/Hermosillo|	America/Indiana/Indianapolis
America/Indiana/Knox	|America/Indiana/Marengo	|America/Indiana/Petersburg
America/Indiana/Tell_City	|America/Indiana/Vevay|	America/Indiana/Vincennes
America/Indiana/Winamac	|America/Indianapolis	|America/Inuvik
America/Iqaluit|	America/Jamaica	|America/Jujuy
America/Juneau	|America/Kentucky/Louisville	|America/Kentucky/Monticello
America/Knox_IN|	America/Kralendijk	|America/La_Paz
America/Lima	|America/Los_Angeles	|America/Louisville
America/Lower_Princes	|America/Maceio	|America/Managua
America/Manaus	|America/Marigot	|America/Martinique
America/Matamoros	|America/Mazatlan	|America/Mendoza
America/Menominee|	America/Merida	|America/Metlakatla
America/Mexico_City	|America/Miquelon	|America/Moncton
America/Monterrey	|America/Montevideo	|America/Montreal
America/Montserrat|America/Nassau	|America/New_York
America/Nipigon	|America/Nome	|America/Noronha
America/North_Dakota/Beulah	|America/North_Dakota/Center|	America/North_Dakota/New_Salem
America/Ojinaga	|America/Panama|	America/Pangnirtung
America/Paramaribo	|America/Phoenix	|America/Port-au-Prince
America/Port_of_Spain|	America/Porto_Acre|	America/Porto_Velho
America/Puerto_Rico|	America/Rainy_River|	America/Rankin_Inlet
America/Recife	|America/Regina	|America/Resolute
America/Rio_Branco	|America/Rosario|	America/Santa_Isabel
America/Santarem|	America/Santiago	|America/Santo_Domingo
America/Sao_Paulo	|America/Scoresbysund	|America/Shiprock
America/Sitka	|America/St_Barthelemy|	America/St_Johns
America/St_Kitts	|America/St_Lucia|	America/St_Thomas
America/St_Vincent	|America/Swift_Current|	America/Tegucigalpa
America/Thule|	America/Thunder_Bay|	America/Tijuana
America/Toronto	|America/Tortola	|America/Vancouver
America/Virgin	|America/Whitehorse|	America/Winnipeg
America/Yakutat	|America/Yellowknife |


**Antartica**
| Column 1 | Column 2 | Column 3 | Column 4 |
| -------- | -------- | -------- |  -------- |
|Antarctica/Casey|	Antarctica/Davis |Antarctica/DumontDUrville	|Antarctica/Macquarie	|Antarctica/Mawson |Antarctica/McMurdo	|Antarctica/Palmer	|Antarctica/Rothera	|Antarctica/South_Pole	|Antarctica/Syowa 
|Antarctica/Vostok |

**Artic**


| Column 1 | 
| -------- | 
| Arctic/Longyearbyen | 



**Asia**

| Column 1 | Column 2 | Column 3 | Column 4 | Column 5|
| -------- | -------- | -------- |  -------- |  --------|
Asia/Aden	|Asia/Almaty	|Asia/Amman|	Asia/Anadyr|	Asia/Aqtau
Asia/Aqtobe |	Asia/Ashgabat	|Asia/Ashkhabad	|Asia/Baghdad	|Asia/Bahrain
Asia/Baku	|Asia/Bangkok	|Asia/Beirut|	Asia/Bishkek	|Asia/Brunei
Asia/Calcutta	|Asia/Choibalsan	|Asia/Chongqing	|Asia/Chungking	|Asia/Colombo
Asia/Dacca	|Asia/Damascus	|Asia/Dhaka|	Asia/Dili	|Asia/Dubai
Asia/Dushanbe	|Asia/Gaza	|Asia/Harbin	|Asia/Hebron	|Asia/Ho_Chi_Minh
Asia/Hong_Kong	|Asia/Hovd	|Asia/Irkutsk	|Asia/Istanbul	|Asia/Jakarta
Asia/Jayapura	|Asia/Jerusalem	|Asia/Kabul|	Asia/Kamchatka	|Asia/Karachi
Asia/Kashgar	|Asia/Kathmandu	|Asia/Katmandu	|Asia/Khandyga|	Asia/Kolkata
Asia/Krasnoyarsk	|Asia/Kuala_Lumpur	|Asia/Kuching	|Asia/Kuwait|	Asia/Macao
Asia/Macau	|Asia/Magadan	|Asia/Makassar|	Asia/Manila	|Asia/Muscat
Asia/Nicosia	|Asia/Novokuznetsk	|Asia/Novosibirsk	|Asia/Omsk	|Asia/Oral
Asia/Phnom_Penh|	Asia/Pontianak	|Asia/Pyongyang	|Asia/Qatar|	Asia/Qyzylorda
Asia/Rangoon	|Asia/Riyadh	|Asia/Saigon	|Asia/Sakhalin|	Asia/Samarkand
Asia/Seoul	|Asia/Shanghai	|Asia/Singapore	|Asia/Taipei	|Asia/Tashkent
Asia/Tbilisi	|Asia/Tehran	|Asia/Tel_Aviv	|Asia/Thimbu	|Asia/Thimphu
Asia/Tokyo	|Asia/Ujung_Pandang	|Asia/Ulaanbaatar|	Asia/Ulan_Bator|	Asia/Urumqi
Asia/Ust-Nera|	Asia/Vientiane|	Asia/Vladivostok|	Asia/Yakutsk|	Asia/Yekaterinburg|
Asia/Yerevan|

**Atlantic**


| Column 1 | Column 2 | Column 3 |
| -------- | -------- | -------- |
| Atlantic/Azores |	Atlantic/Bermuda | Atlantic/Canary | 
| Atlantic/Cape_Verde | Atlantic/Faeroe | Atlantic/Faroe | 
| Atlantic/Jan_Mayen | Atlantic/Madeira	|Atlantic/Reykjavik|
|Atlantic/South_Georgia | Atlantic/St_Helena|	Atlantic/Stanley|



**Australia**

| Column 1 | Column 2 | Column 3 | Column 4 | Column 5|
| -------- | -------- | -------- |  -------- |  --------|
Australia/ACT	|Australia/Adelaide	|Australia/Brisbane	|Australia/Broken_Hill	|Australia/Canberra
Australia/Currie	|Australia/Darwin	|Australia/Eucla	|Australia/Hobart	|Australia/LHI|
Australia/Lindeman	|Australia/Lord_Howe	|Australia/Melbourne|	Australia/North	|Australia/NSW|
Australia/Perth|	Australia/Queensland	|Australia/South	|Australia/Sydney	|Australia/Tasmania|
Australia/Victoria	|Australia/West	|Australia/Yancowinna |

**Europe**


| Column 1 | Column 2 | Column 3 | Column 4 | Column 5 |
| -------- | -------- | -------- | ------ | ------- |
|Europe/Amsterdam	| Europe/Andorra	| Europe/Athens|	Europe/Belfast	 | Europe/Belgrade |
|Europe/Berlin  |	Europe/Bratislava	| Europe/Brussels|	Europe/Bucharest | Europe/Budapest |
|Europe/Busingen|	Europe/Chisinau	| Europe/Copenhagen|	Europe/Dublin|	Europe/Gibraltar|
|Europe/Guernsey|	Europe/Helsinki	| Europe/Isle_of_Man|	Europe/Istanbul	|Europe/Jersey |
| Europe/Kaliningrad	| Europe/Kiev |	Europe/Lisbon| Europe/Ljubljana |	Europe/London |
|Europe/Luxembourg|	Europe/Madrid|	Europe/Malta| Europe/Mariehamn	|Europe/Minsk |
|Europe/Monaco	|Europe/Moscow|	Europe/Nicosia|	Europe/Oslo|	Europe/Paris|
|Europe/Podgorica	|Europe/Prague|	Europe/Riga	|Europe/Rome|	Europe/Samara|
|Europe/San_Marino	|Europe/Sarajevo	|Europe/Simferopol|	Europe/Skopje	|Europe/Sofia|
|Europe/Stockholm|	Europe/Tallinn	|Europe/Tirane	|Europe/Tiraspol	|Europe/Uzhgorod|
|Europe/Vaduz|	Europe/Vatican|	Europe/Vienna	|Europe/Vilnius|	Europe/Volgograd|
|Europe/Warsaw|	Europe/Zagreb|	Europe/Zaporozhye|	Europe/Zurich|



**Indian**

| Column 1 | Column 2 | Column 3 | Column 4 | Column 5 |
| -------- | -------- | -------- | ------ | ------- |
Indian/Antananarivo	|Indian/Chagos	|Indian/Christmas	|Indian/Cocos	|Indian/Comoro
Indian/Kerguelen	|Indian/Mahe	|Indian/Maldives	|Indian/Mauritius	|Indian/Mayotte
|Indian/Reunion |


**Pacific**

| Column 1 | Column 2 | Column 3 | Column 4 | Column 5 |
| -------- | -------- | -------- | ------ | ------- |
Pacific/Apia	|Pacific/Auckland	|Pacific/Chatham	|Pacific/Chuuk	|Pacific/Easter
Pacific/Efate	|Pacific/Enderbury	|Pacific/Fakaofo	|Pacific/Fiji	|Pacific/Funafuti
Pacific/Galapagos	|Pacific/Gambier	|Pacific/Guadalcanal	|Pacific/Guam	|Pacific/Honolulu
Pacific/Johnston	|Pacific/Kiritimati	|Pacific/Kosrae	|Pacific/Kwajalein	|Pacific/Majuro
Pacific/Marquesas	|Pacific/Midway	|Pacific/Nauru	|Pacific/Niue	|Pacific/Norfolk
Pacific/Noumea	|Pacific/Pago_Pago	|Pacific/Palau	|Pacific/Pitcairn	|Pacific/Pohnpei
Pacific/Ponape	|Pacific/Port_Moresby	|Pacific/Rarotonga	|Pacific/Saipan	|Pacific/Samoa
Pacific/Tahiti	|Pacific/Tarawa|	Pacific/Tongatapu	|Pacific/Truk	|Pacific/Wake
Pacific/Wallis	|Pacific/Yap |

## PHP Include eg.7

You can include the content of a PHP file into another PHP file before the server executes it. There are two PHP functions which can be used to included one PHP file into another PHP file.

- `include()`
- `require()`

The include and require statements are identical, except upon failure:

- `require` will produce a fatal error (E_COMPILE_ERROR) and stop the script
- `include` will only produce a warning (E_WARNING) and the script will continue

**Syntax**

```php
include 'filename';

// or

require 'filename';
```

Example 7.1

In this example we will include file `add_function_7.1.php` in file `include_7.1.php`

`filename: add_function_7.1.php`

```php
<?php 

    function add($n1, $n2)
    {
        return $n1+$n2;
    }

?>
```

`filename: include_7.1.php`

```php
<?php 

    include 'add_function.php';

    $num1 = 10;
    $num2 = 20;

    $ans = add($num1, $num2);
    echo 'The addition of '. $num1 . ' and ' . $num2 . ' is = ' . $ans;

?>
```

Output

```html
The addition of 10 and 20 is = 30
```

Example 7.2

In this example we will require file `sub_function_7.2.php` in file `require_7.2.php` 

`filename: sub_function_7.2.php`

```php
<?php 

    function sub($n1, $n2)
    {
        return $n1-$n2;
    }

?>
```

`filename: require_7.2.php`

```php
<?php 

    require 'sub_function.php';

    $num1 = 10;
    $num2 = 20;

    $ans = sub($num2, $num1);
    echo 'The subtraction of '. $num2 . ' and ' . $num1 . ' is = ' . $ans;

?>
```

Output

```html
The subtraction of 20 and 10 is = 10
```

## PHP Cookies eg.8

A cookie is a small text file that lets you store a small amount of data (nearly 4KB) on the user's computer.

There are three steps involved in identifying returning users −

- Server script sends a set of cookies to the browser. For example name, age, or identification number etc.
- Browser stores this information on local machine for future use.
- When next time browser sends any request to web server then it sends those cookies information to the server and server uses that information to identify the user.

### Setting Cookies with PHP

The `setcookie()` function is used to set a cookie in PHP.

**Syntax**

```php
setcookie(name, value, expire, path, domain, security);
```

[Parameters](https://www.notion.so/d1f74007885148b1afecedba053a6c13)

> Make sure you call the `setcookie()` function before any output generated by your script otherwise cookie will not set.

Example 8.1

```php
<?php
    $name = "John";
    setcookie("user_name", $name, strtotime('+10 minute'));
?>
<html>
   
   <head>
      <title>Setting Cookies with PHP</title>
   </head>
   
   <body>
      <?php echo "Set Cookies"; ?>
   </body>
   
</html>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-3">
            <h2>Set Cookie</h2>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
```

Output

```html
Set Cookie
Key: 'user_name'
Value: John
```

> If the expiration time of the cookie is set to 0, or omitted, the cookie will expire at the end of the session i.e. when the browser closes.

### Accessing Cookies Values

The PHP `$_COOKIE` superglobal variable is used to retrieve a cookie value. It typically an associative array that contains a list of all the cookies values sent by the browser in the current request, keyed by cookie name. The individual cookie value can be accessed using standard array notation, for example to display the username cookie set in the previous example, you could use the following code.

Example 8.2

```php
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-3">
            <h2>Accessing Cookie</h2>
            <p>Key: 'user_name'</p>
            <p>Value: '<?php if( isset( $_COOKIE['user_name'] ) ){ echo $_COOKIE['user_name']; } ?>'</p>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
```

Output

```html
Accessing Cookie
Key: 'user_name'
Value: John
```