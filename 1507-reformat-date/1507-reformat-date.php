class Solution {

    /**
     * @param String $date
     * @return String
     */
    function reformatDate($date) {
        return date('Y-m-d', strtotime($date));
    }
}