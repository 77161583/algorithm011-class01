<!-- 64. 最小路径和
给定一个包含非负整数的 m x n 网格，请找出一条从左上角到右下角的路径，使得路径上的数字总和为最小。

说明：每次只能向下或者向右移动一步。 -->

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function minPathSum($grid) {
        for ($i = 0; $i<count($grid);$i++){
            for ($j = 0; $j<count($grid[0]);$j++){
                if($i == 0 && $j == 0)continue;
                elseif ($i==0) $grid[$i][$j] = $grid[$i][$j-1] + $grid[$i][$j];
                elseif ($j==0) $grid[$i][$j] = $grid[$i-1][$j] + $grid[$i][$j];
                else 
                $grid[$i][$j] = min($grid[$i-1][$j],$grid[$i][$j-1])+ $grid[$i][$j];
            }
        }
        return $grid[count($grid)-1][count($grid[0])-1];
    }
}