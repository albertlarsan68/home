# home
A cool home page

## Usage:
In ``config/items.php``, you must define your list of lines you want in your home page.
It is defined like this:
```
<?php
return(array(
  array(
    'location'=> '<your folder>',
    'text' => '<the text that is shown>'
  ),
  array(
    'location'=> '<your second folder>',
    'text' => '<the second text that is shown>'
  )
  //...
));
```
