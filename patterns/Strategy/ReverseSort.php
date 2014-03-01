<?php

class ReverseSort implements SortingStrategy {
    public function getSortedSet($set) {
        rsort($set);
        return $set;
    }
}

