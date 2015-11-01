<?php

        $nonList = "bread    butter    ham   cheese   cucumber lettuce\n";
        $space = " ";
        $newLine = "\n";

        echo "Items for spaces to be removed and listed: ", $nonList, "\n";

        $removeMultiSpace = preg_replace('/\s+/',' ', $nonList);
        echo "\n****************************\nMulitple spaces removed\nCreating List\n****************************\n\n\n";
        echo $removeMultiSpace, "\n\n\n";
        $createList = str_replace($space,$newLine,$removeMultiSpace);
        echo "\n****************************\nList Completed\nDisplaying Results\n****************************\n";
        echo $createList;
        echo "\n****************************\nProcess Complete\n****************************\n";


//class listmaker {
//
//
//        public $nonList = 'bread butter ham cheese cucumber lettuce';
//        public $space = " ";
//        public $newLine = "\n";
//
//        $createList = str_replace($space,$newLine,$nonList);
//        echo $this->$createList;
//
//}
