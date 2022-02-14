/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution
{

    /**
     * @param ListNode $head
     *
     * @return ListNode
     */
    function sortList($head)
    {
        if (!$head || !$head->next) {
            return $head;
        }
        $slow = $head;
        $fast = $head->next;
        while ($fast && $fast->next) {
            $fast = $fast->next->next;
            $slow = $slow->next;
        }
        $head2 = $slow->next;
        $slow->next = null;

        $ch1 = $this->sortList($head);
        $ch2 = $this->sortList($head2);

        $head = $tail = new ListNode;
        while ($ch1 && $ch2) {
            if ($ch1->val < $ch2->val) {
                $el = $ch1;
                $ch1 = $ch1->next;
            } else {
                $el = $ch2;
                $ch2 = $ch2->next;
            }
            $tail = $tail->next = $el;
        }
        $tail->next = $ch1 ?: $ch2;

        return $head->next;
    }

}