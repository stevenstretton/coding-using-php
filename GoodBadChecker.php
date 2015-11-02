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


    public function bob()
    {

    }



}

class GetList extends ListMaker
{

    public function bob()
    {

    }

    public function hitList()
    {
        echo "1. Fetching list process system...\n\n";
        $this->createList();
    }
}

$listMaker = new GetList();