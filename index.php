<?php
    $daysWithoutSmoke = Load();

    if(isset($_POST["answer"])){
        if ($_POST["answer"] == "+")
            $daysWithoutSmoke = 0;
    }
    else
        $daysWithoutSmoke++;

    echo "Ты не куришь ". $daysWithoutSmoke . " дней";
    Save($daysWithoutSmoke);

    function Load() : int
    {
        return 0;
    }
    function Save(int $days)
    {

    }
