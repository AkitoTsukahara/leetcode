class Solution {

    /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[]
    */
    function twoSum($nums, $target) {
        $numsLength = count($nums);
        $answer = [];
        
        for ($i = 0; i < $numsLength; $i++) {
            if ($i === $numsLength) {
                break;
            }

            for ($j = $i+1; $j < $numsLength; $j++) {
                $numsSum = $nums[$i] + $nums[$j];
                if ($numsSum === $target) {
                    $answer = [$i, $j];
                    break;
                }
            }
        }

        return $answer;
    }
}
