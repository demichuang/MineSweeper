<!DOCTYPE html>
<html>
<head>
<?php require_once("MineSweeperGameArray.php"); ?>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">

    $(document).ready(function () {

        // 按到地雷
        <?php
        for ($i = 0; $i < 10; $i++) {
          for ($j = 0; $j < 10; $j++) {?>
            $("#<?php echo $i.$j ?>").click(

                function () {
                    if(document.getElementById('<?php echo $i.$j ?>').value === " ") {
                        document.getElementById('<?php echo $i.$j ?>').value = '<?php echo $arr[$i][$j]?>';
                    }

                    <?php if ($arr[$i][$j] === "M") { ?>
                        window.alert("You die! Game Over!");

                        <?php
                        for ($k = 0; $k < 10; $k++) {
                          for ($t = 0; $t < 10; $t++) {
                            if ($arr[$k][$t] === "M") { ?>
                                document.getElementById('<?php echo $k.$t ?>').value = '<?php echo $arr[$k][$t]?>';

                            <?php }?>

                            document.getElementById("<?php echo $k.$t ?>").disabled = true;
                        <?php
                          }
                        }
                    } ?>
                }
            );
        <?php
          }
        } ?>
    });
</script>
</head>

<body>

<form action="MineSweeperGame.php">

    <?php
    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 10; $j++) {?>
           <input type ='button' style='width: 50px;height: 50px' value=" " id='<?php echo $i.$j?>'/>
    <?php
        }

        echo '<br>';
    }
    ?>

    <input type ='submit' style='width: 80px; height: 30px' value ="new game">
</form>
</body>
</html>
