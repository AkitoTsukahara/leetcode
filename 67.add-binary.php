/*
 * @lc app=leetcode id=67 lang=php
 *
 * [67] Add Binary
 */

// @lc code=start
class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $r = '';

        $max_length = strlen($a);
        if(strlen($a)>=strlen($b))
        {
            $str_1 = strrev($a);
            $str_2 = strrev($b);
        }
        else
        {
            $max_length = strlen($b);
            $str_2 = strrev($a);
            $str_1 = strrev($b);
        }

        $ost = 0;
        for($i=0; $i<$max_length; $i++)
        {
            $ch_1 = (int)$str_1[$i];
            $ch_2 = (int)$str_2[$i];
            $z = $ch_1 + $ch_2 + $ost;
            $ost = 0;

            if($z==0)
            {
                $r = '0'.$r;
            }
            else if($z==1)
            {
                $r = '1'.$r;
            }
            else if($z==2)
            {
                $r = '0'.$r;
                $ost = 1;
            }
            else if($z==3)
            {
                $r = '1'.$r;
                $ost = 1;
            }
        }
        if($ost==1) $r = '1'.$r;

        return $r;
    }
}
// @lc code=end

