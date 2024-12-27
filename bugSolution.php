```php
$file = fopen("myfile.txt", "r+");
if ($file) {
    // ... process the file ...
    if (fclose($file)) {
        echo "File closed successfully.";
    } else {
        echo "Error closing the file.";
        // Handle the error appropriately, e.g., log it
    }
} else {
    echo "Error opening the file.";
    // Handle file opening error, such as logging or throwing an exception
}
```