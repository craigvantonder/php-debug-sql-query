PHP dieSql
==========           

A function to help when debugging SQL queries made within PHP .

**Example Usage:**

    ```// Create a database connection for PHP to use
    $link = mysqli_connect($DBHost, $DBUser, $DBPass);

    // Check that the connection is active
    if (!$link) {
      dieSql($link);
    }
    // Sets encoding type to uft8
    if (!mysqli_set_charset($link, 'utf8')) {
      dieSql($link);
    }
    // Set database that is in use
    if (!mysqli_select_db($link, $DBName)) {
      dieSql($link);
    }```

**Another example:**

    ```// Build a query
    $query = 'SELECT `name` ';
    $query .= 'FROM `people` ';
    // And run the query
    if (!$stmt = $link->prepare($query)) { dieSql($link); }
    if (!$stmt) { dieSql($link); }
    if (!$stmt->execute()) { dieSql($link); }
    if (!$stmt->bind_result($name)) { dieSql($link); }
    $stmt->fetch();
    $stmt->close();```

**Debug output:**

**MySQL Error**

**Executing Script:** /var/www/example.com/public_html/script/SomeClass.php

**On Line:** 70

**MySQL Error Number:** 1054

**MySQL Error Information:** Unknown column 'name' in 'field list'
