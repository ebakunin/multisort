<?php
/**
 * An easy wrapper for sorting a multi-dimensional array.
 *
 * @author Eric Christenson (EricChristenson.com)
 * @copyright 2015
 * @version 1.1
 * @license MIT Public License (http://opensource.org/licenses/MIT)
 *
 * @param   array $arr
 * @param   array  $sort_by  ['key_name', constant (, 'key_name2', constant, ...)]
 *                           Accepts standard sorting constants:
 *                           SORT_ASC, SORT_DESC, SORT_REGULAR,
 *                           SORT_NUMERIC, SORT_STRING
 * @return  array $arr
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
