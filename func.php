<?php
    $daysWithoutSmoke = Load();

    if(isset($_POST["answer"])){

        if ($_POST["answer"] == "+")
            $daysWithoutSmoke = 0;
        else
            $daysWithoutSmoke++;
    }

    echo "Ты не куришь ". $daysWithoutSmoke . " дней";
    Save($daysWithoutSmoke);

    function Load() : int
    {
        $file = fopen("data/days.txt", 'w+');
        $days = fgets($file);;
        fclose($file);

        return $days;
    }
    function Save(int $days)
    {
        $file = fopen("data/days.txt", 'w');
        fwrite($file, $days);
        fclose($file);
    }
