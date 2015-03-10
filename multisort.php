<?php
/**
 * An easy wrapper for sorting a multi-dimensional array.
 *
 * @param array $arr
 * @param array $sort_by  Accepts standard sorting constants:
 *                        SORT_ASC, SORT_DESC, SORT_REGULAR,
 *                        SORT_NUMERIC, SORT_STRING
 *
 * @example
 * $arr = array();
 * $arr[] = array('name' => 'John', age => '32', 'housebroken' => '0');
 * $arr[] = array('name' => 'Don', age => '42', 'housebroken' => '1');
 *
 * $sort_by = array('name', SORT_ASC, 'age', SORT_ASC, SORT_NUMERIC);
 *
 * multisort($arr, $sort_by);
 */
function multisort(array &$arr, $sort_by) {
    $args = array();
 
    foreach ($sort_by as $by) {
        if (is_numeric($by)) {
            $args[] = $by;
        } else {
            $values = array();
 
            foreach ($arr as $key => $row) {
                $values[$key] = $row[$by];
            }
 
            $args[] = $values;
        }
    }
    $args[] =& $arr;
 
    return call_user_func_array('array_multisort', $args);
}
