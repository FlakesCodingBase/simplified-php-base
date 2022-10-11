<?php
/*
 ______ _               _  ________  _____    _____ ____  _____ _____ _   _  _____   ____           _____ ______ 
|  ____| |        /\   | |/ /  ____|/ ____|  / ____/ __ \|  __ \_   _| \ | |/ ____| |  _ \   /\    / ____|  ____|
| |__  | |       /  \  | ' /| |__  | (___   | |   | |  | | |  | || | |  \| | |  __  | |_) | /  \  | (___ | |__   
|  __| | |      / /\ \ |  < |  __|  \___ \  | |   | |  | | |  | || | | . ` | | |_ | |  _ < / /\ \  \___ \|  __|  
| |    | |____ / ____ \| . \| |____ ____) | | |___| |__| | |__| || |_| |\  | |__| | | |_) / ____ \ ____) | |____ 
|_|    |______/_/    \_\_|\_\______|_____/   \_____\____/|_____/_____|_| \_|\_____| |____/_/    \_\_____/|______|
                               This file was made by Flakes ツ#1000 - Dont touch it ;)
*/

// Set an page id to get the file, which has been opened
$pageId = $_SERVER["QUERY_STRING"];
// If you open page https://yourPage.de/?mySite
// then the QUERY_STRING will be "mySite"
?>

<htmlcode>

<?php include 'pages/'.<?= $pageId; ?>.'.php' ?>
<!-- Now the file "page/mySite.php" will be included -->

</htmlcode>
