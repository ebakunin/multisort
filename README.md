# multisort()

Copyright (c) 2015 by Eric Christenson (eric.j.christenson[at]gmail[dot]com)<br />
Licensed under the MIT Public License (http://opensource.org/licenses/MIT).

An easy wrapper for sorting a multi-dimensional array in PHP. Uses standard sorting constants.

<pre>
bool multisort ( array &$array [, int $sort_flag = SORT_REGULAR ] )
</pre>

## Parameters
**$array** <br /> 
    the input array <br /> 
**$sort_flag** <br /> 
    the sorting constant: SORT_ASC, SORT_DESC, SORT_REGULAR, SORT_NUMERIC, SORT_STRING

## Example
<pre>
$arr = array();
$arr[] = array('name' => 'John', age => '32', 'lefthanded' => '0');
$arr[] = array('name' => 'Don', age => '42', 'lefthanded' => '1');

$sort_by = array('name', SORT_ASC, 'age', SORT_ASC, SORT_NUMERIC);

multisort($array, $sort_by);
<pre>
