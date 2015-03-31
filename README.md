# multisort()

Copyright (c) 2015 by Eric Christenson (eric.j.christenson[at]gmail[dot]com)<br />
Licensed under the MIT Public License (http://opensource.org/licenses/MIT).

An easy wrapper for sorting a multi-dimensional array in PHP. Uses standard sorting constants.

<pre>
bool multisort ( array &$array, $sort_flag = array('key_name', int $sort_type = SORT_REGULAR [, 'key_name2, int $sort_type, ...] ] )
</pre>

## Parameters
**$array** <br /> 
    the input array <br /> 
**$sort_flag** <br /> 
    array of key name, sorting constant, optional 2nd key name, optional 2nd sorting constant, ...
    Sorting constants: SORT_ASC, SORT_DESC, SORT_REGULAR, SORT_NUMERIC, SORT_STRING

## Example
<pre>
$arr = array();
$arr[] = array('name' => 'John', age => '32', 'left-handed' => '0');
$arr[] = array('name' => 'Don', age => '42', 'left-handed' => '1');

$sort_by = array('name', SORT_ASC, 'age', SORT_ASC, SORT_NUMERIC);

multisort($array, $sort_by);
<pre>
