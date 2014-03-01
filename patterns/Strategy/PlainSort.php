<?php

class PlainSort implements SortingStrategy {
    public function getSortedSet($set) {
        sort($set);
        return $set;
    }
}

