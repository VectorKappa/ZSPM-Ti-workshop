<?php
    //! DATE AND TIME

    //* date(format,timestamp)
    
    //? d - The day of the month (from 01 to 31)
    //? D - A textual representation of a day (three letters)
    //? j - The day of the month without leading zeros (1 to 31)
    //? l (lowercase 'L') - A full textual representation of a day
    //? N - The ISO-8601 numeric representation of a day (1 for Monday, 7 for Sunday)
    //? S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
    //? w - A numeric representation of the day (0 for Sunday, 6 for Saturday)
    //? z - The day of the year (from 0 through 365)
    //? W - The ISO-8601 week number of year (weeks starting on Monday)
    //? F - A full textual representation of a month (January through December)
    //? m - A numeric representation of a month (from 01 to 12)
    //? M - A short textual representation of a month (three letters)
    //? n - A numeric representation of a month, without leading zeros (1 to 12)
    //? t - The number of days in the given month
    //? L - Whether it's a leap year (1 if it is a leap year, 0 otherwise)
    //? o - The ISO-8601 year number
    //? Y - A four digit representation of a year
    //? y - A two digit representation of a year
    //? a - Lowercase am or pm
    //? A - Uppercase AM or PM
    //? B - Swatch Internet time (000 to 999)
    //? g - 12-hour format of an hour (1 to 12)
    //? G - 24-hour format of an hour (0 to 23)
    //? h - 12-hour format of an hour (01 to 12)
    //? H - 24-hour format of an hour (00 to 23)
    //? i - Minutes with leading zeros (00 to 59)
    //? s - Seconds, with leading zeros (00 to 59)
    //? u - Microseconds (added in PHP 5.2.2)
    //? e - The timezone identifier (Examples: UTC, GMT, Atlantic/Azores)
    //? I (capital i) - Whether the date is in daylights savings time (1 if Daylight Savings Time, 0 otherwise)
    //? O - Difference to Greenwich time (GMT) in hours (Example: +0100)
    //? P - Difference to Greenwich time (GMT) in hours:minutes (added in PHP 5.1.3)
    //? T - Timezone abbreviations (Examples: EST, MDT)
    //? Z - Timezone offset in seconds. The offset for timezones west of UTC is negative (-43200 to 50400)
    //? c - The ISO-8601 date (e.g. 2013-05-05T16:34:42+00:00)
    //? r - The RFC 2822 formatted date (e.g. Fri, 12 Apr 2013 12:01:05 +0200)
    //? U - The seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)

    $today = date("F j, Y, g:i a");                 //? March 10, 2001, 5:16 pm
    $today = date("m.d.y");                         //? 03.10.01
    $today = date("j, n, Y");                       //? 10, 3, 2001
    $today = date("Ymd");                           //? 20010310
    $today = date('h-i-s, j-m-y, it is w Day');     //? 05-16-18, 10-03-01, 1631 1618 6 Satpm01
    $today = date('\i\t \i\s \t\h\e jS \d\a\y.');   //? it is the 10th day.
    $today = date("D M j G:i:s T Y");               //? Sat Mar 10 17:16:18 MST 2001
    $today = date('H:m:s \m \i\s\ \m\o\n\t\h');     //? 17:03:18 m is month
    $today = date("H:i:s");                         //? 17:16:18
    $today = date("Y-m-d H:i:s");                   //? 2001-03-10 17:16:18 

    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");

    echo "&copy; 2010-".date("Y");

    //? H - 24-hour format of an hour (00 to 23)
    //? h - 12-hour format of an hour with leading zeros (01 to 12)
    //? i - Minutes with leading zeros (00 to 59)
    //? s - Seconds with leading zeros (00 to 59)
    //? a - Lowercase Ante meridiem and Post meridiem (am or pm)

    echo "The time is " . date("h:i:sa");
    //* forgot about time()

    $t=time();
    echo($t . "<br>");
    echo(date("Y-m-d",$t));

    //* and getdate()

    print_r(getdate());

    //? [seconds] - seconds
    //? [minutes] - minutes
    //? [hours] - hours
    //? [mday] - day of the month
    //? [wday] - day of the week (0=Sunday, 1=Monday,...)
    //? [mon] - month
    //? [year] - year
    //? [yday] - day of the year
    //? [weekday] - name of the weekday
    //? [month] - name of the month
    //? [0] - seconds since Unix Epoch

    //* set timezone

    date_default_timezone_set("America/New_York"); //TODO https://www.php.net/manual/en/timezones.php if you want more stuff    e.g. Europe/Warsaw, Indian/Reunion hon hon hon
    echo "The time is " . date("h:i:sa");

    //* mktime(hour, minute, second, month, day, year) Why u like this

    $d=mktime(11, 14, 54, 8, 12, 2014);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);

    //* strtotime(time, now)

    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    //TODO More Date Examples

    //* The example below outputs the dates for the next six Saturdays:

    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);
    //? I'm just listening to music idc about anything else +1
    while ($startdate < $enddate) {
      echo date("M d", $startdate) . "<br>";
      $startdate = strtotime("+1 week", $startdate);
    }

    //* The example below outputs the number of days until 4th of July:

    $d1=strtotime("July 04");
    $d2=ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 ." days until 4th of July.";
    
    //! FILES

    //* readfile()

    echo readfile("webdictionary.txt");

    //* fopen()

    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("webdictionary.txt"));
    fclose($myfile);

    //? r	Open a file for read only. File pointer starts at the beginning of the file
    //? w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
    //? a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
    //? x	Creates a new file for write only. Returns FALSE and an error if file already exists
    //? r+	Open a file for read/write. File pointer starts at the beginning of the file
    //? w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
    //? a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
    //? x+	Creates a new file for read/write. Returns FALSE and an error if file already exists

    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);

    //* Check eofs

    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while(!feof($myfile)) {
      echo fgets($myfile) . "<br>";
    }
    fclose($myfile);

    //* Get single char

    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // Output one character until end-of-file
    while(!feof($myfile)) {
      echo fgetc($myfile);
    }
    fclose($myfile);

    //* writing files

    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);

    //* overwriting files

    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "Mickey Mouse\n";
    fwrite($myfile, $txt);
    $txt = "Minnie Mouse\n";
    fwrite($myfile, $txt);
    fclose($myfile);

    //* Check if file already exists

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    //* Check file size

    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    filesize('file');

    //* create file

    touch('file');

    //* delete file

    unlink('file'); // returns bool

    //* Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    //! UPLOAD EXAMPLE (NOT IMPORTANT)
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

?>