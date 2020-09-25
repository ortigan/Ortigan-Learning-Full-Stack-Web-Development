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