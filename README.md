## XML File to Javascript JSON Object or File Converter

This small lovely code will convert you existing **XML file** available localy or at any URL to a easy to use **javascript or jQuery JSON object or JSON File**.

## Motivation

I was in need to convert xml file to easy to use and handle json object but everywhere i was not able to find such code which take xml file and convert it into json object and json file. wherever i was serching i got only self created xml string to be converted into json. I wanted to get xml from a URL and then convert it into JSON. So I thought to create it myself. However this project uses PHP but i think its very nice and efficient approach. I used AJAX Post method to make this happen. Will try to upload XML File to Javascript JSON Object or JSON File Convertor using javascript only soon.

## Requirements

I made this using bemow mentioned enviornment. Your may be different vrsion. It should work on that too.

jQuery Library Version 2.1.4 (Included)
Apache Server Version 2
PHP Version 5.2.0 or later

## Installation

1. Install Apache2 and PHP 5.5.x or just install XAMPP Server if you are on windows, LAMP If you are on Linux and MAMP if you are on Mac or if you have a PHP enavled web hosting account and you want to host this utility on your server please start following from instrection #2.

2. Download source code. there are two major files **index.html** and **xml2json.php** place them in public folder, i.e. htdoc or www or public folder of your apache, xampp, lamp, wamp or hosting account.

3. in **index.html** on line number 12 in place of "http://www.w3schools.com/xml/note.xml" provide link/url/path of any xml file and you will get the json output as data object. which i implemenmted in DOM i.e. &lt;textarea id="data"&gt;$lt;/textarea&gt; on **index.php** script is made in a way that it will also provide status in 
'''html
<div id="status"></div>
'''
markup.

4. You can get json file from same location after getting converted where the **xml2json.php** script is installed.

## Tests

Will provide you test link where you can find this script working soon.

## Contributors

Thousends of coders who help people solving problems. Because of them people like me do things and learn by self exploring.

## Author

Made with love by Hitesh Rohilla (a.k.a. Hitesh Kumar)

## License

The content of this repository is published under GNU GENERAL PUBLIC LICENSE Version 3.
