# home
A cool home page

## Usage:
In ``config/items.php``, you **must** define the list of lines you want to show in your home page.
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
