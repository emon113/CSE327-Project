<?php
class UpdateRepresentatives extends Controller{
    public static function test(){
        $repID = $_GET['mid'];


        $row = self::query("SELECT * from representatives where rep_id = '$repID'");
        foreach ($row as $value) { ?>

            <div class="main">

                <h2 class="name"><?php echo $value[1]; ?></h2>
                <h2 class="name"><?php echo $value[2]; ?></h2>
                <h2 class="name"><?php echo $value[3]; ?></h2>
                <h2 class="name"><?php echo $value[4]; ?></h2>

            </div>
<?php

        }
    }
}

?>