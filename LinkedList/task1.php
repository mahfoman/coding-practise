<?php

// the reversed linked list

class Node {
    public $val;
    public $next;
    public function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

function createLinkedList($arr) {
    if (empty($arr)) {
        return null;
    }

    $head = new Node($arr[0]);
    $current = $head;

    for ($i = 1; $i < count($arr); $i++) {
        $current->next = new Node($arr[$i]);
        $current = $current->next;
    }

    return $head;
}

function reverseList($head) {
    $prev = null;
    $current = $head;
    
    while ($current !== null) {
        $next = $current->next;  // Storing next node
        $current->next = $prev;  // Reversing the link
        $prev = $current;        // Moving prev to current node
        $current = $next;        // Moving to the next node
    }
    
    return $prev;  // New head of the reversed list
}

function printList($head) {
    $current = $head;
    while ($current !== null) {
        $arr[] = $current->val;
        $current = $current->next;
    }
    return print_r($arr ?? []);
}

$arr = [1, 2, 3, 4, 5];
print_r($arr);

$head = createLinkedList($arr);

// Reversing the list
$reversedHead = reverseList($head);

// Printing reversed list
printList($reversedHead);

//Time Complexity: O(n) .. as n is the number of nodes in the linked list traversing among them exactly once
//Space Complexity: O(1) ... as we use a few pointers (prev, current, next) only regardless of the size of the linked list