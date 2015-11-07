<?php
class GoodBadChecker
{
    public $itsBob = "Im Bob\n";
    public $itsSue = "Im Sue\n";
    public $itsRasmus = "Im Rasmus Lerdorf! haha";

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
        return $this->itsBob;
    }

    public function sue()
    {
        return $this->itsSue;
    }

    public function rasmus()
    {
        return $this->itsRasmus;
    }
}

class IsGoodBad extends GoodBadChecker
{
    public function __construct()
    {
        echo "Calling parent constructor...\n\n";
        parent::__construct();
    }

//Next Project - random output
//    public function randomOutName()
//    {
//        $names = array($this->bob(), $this->sue(), $this->rasmus());
//        $randName = array_rand($names, 1);
//        echo $names[$randName[0]];
//    }
//
   public function startupIsGoodBad()
    {
        echo "Initiating\n";
    }

    public function getBob()
    {
        return $this->bob();
    }

    public function getSue()
    {
        return $this->sue();
    }

    public function getRasmus()
    {
        return $this->rasmus();
    }


}
$GoodBadCheck = new IsGoodBad();
echo "\nCalling Object...\n";
echo $GoodBadCheck->startupIsGoodBad();
//echo $GoodBadCheck->randomOutName();

echo $GoodBadCheck->getBob();
echo $GoodBadCheck->getSue();
echo $GoodBadCheck->getRasmus();

