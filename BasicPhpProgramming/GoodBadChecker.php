<?php
class GoodBadChecker
{
    public $itsBob = "Im Bob";
    public $itsSue = "Im Sue";
    public $itsRasmus = "Im not Bob, im Rasmus Lerdorf! haha";

    function __construct()
    {
        echo "\n****************************\nProcess Initiating\n****************************\n ";

    }

    function __destruct()
    {
        echo "\n****************************\nProcess Complete\n****************************\n";
    }

    function bob()
    {
        echo $this->itsBob."\n";
        echo "bob?\n";

    }

    function sue()
    {
        echo $this->itsSue."\n";
        echo "sue?\n";

    }
}
class IsGoodBad extends GoodBadChecker
{

    public function rasmus()
    {
        echo $this->itsRasmus."\n";
        echo "phew, no rasmus\n";
    }

    public function hitList()
    {
        echo "Fetching list process system...\n\n";
        $this->createList();
    }
}
$GoodBadCheck = new IsGoodBad();
//echo $GoodBadCheck->rasmus();
