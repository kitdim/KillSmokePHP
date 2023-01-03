<?php
    $daysWithoutSmoke = Load();
    if(isset($_POST["answer"])){

        if ($_POST["answer"] == "+")
            $daysWithoutSmoke = 0;
        else
            $daysWithoutSmoke++;
    }

    echo "Ты не куришь ". $daysWithoutSmoke . " ". CheckDays($daysWithoutSmoke);
    Save($daysWithoutSmoke);

    function Load() : int
    {
        $days = 0;

        if (!file_exists("data/days.txt")) {
            @
            $file = fopen("data/days.txt", 'r+');
            return $days;
            fclose($file);
        }
        else {
            $file = fopen("data/days.txt", 'r+');
            $days = fgetc($file);
            
            if(!filesize("data/days.txt")) $days = 0;

            return $days;
        }
    }

    function Save(int $days)
    {
        $file = fopen("data/days.txt", 'w+');
        fwrite($file, $days);
        fclose($file);
    }

    function CheckDays(int $days) : string
    {
        $result = "";

        switch($days){
            case 1:
                $result = "день";
                break;
            case 2:
            case 3:
            case 4:
                $result = "дня";
                break;
            default:
                $result = "дней";
                break;
        }
        return $result;
    }
