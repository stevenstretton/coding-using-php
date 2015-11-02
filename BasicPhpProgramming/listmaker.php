<?php

class ListMaker
{
    public function __construct()
    {
        echo "\n****************************\nProcess Initiating\n****************************\n ";
    }

    public function __destruct() 
    {
        echo "\n****************************\nProcess Complete\n****************************\n";
    }


    public function createList()
    {
        $nonList = "bread    butter    ham   cheese   cucumber lettuce\n";
        $space = " ";
        $newLine = "\n";
        echo "2. Items for spaces to be removed and listed: ", $nonList, "\n";
        $removeMultiSpace = preg_replace('/\s+/', ' ', $nonList);
        echo "\n3.****************************\nMulitple spaces removed\nCreating List\n****************************\n\n\n";
        echo $removeMultiSpace, "\n\n\n";
        $createList = str_replace($space, $newLine, $removeMultiSpace);
        echo "\n4.****************************\nList Completed\nDisplaying Results\n****************************\n";
        echo "5".$createList;
    }
}

class GetList extends ListMaker
{
    public function hitList()
    {
        echo "1. Fetching list process system...\n\n";
        $this->createList();
    }
}

$listMaker = new GetList();
