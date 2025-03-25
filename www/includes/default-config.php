<?php

// config.php / website configuration file. Adjust accordingly. 

/* Your Minecraft server details */
$server_name         = "ExampleServer"; 
$server_name_short   = "MCES";
$server_ip           = "Example.com";
$server_port         = 25565;
$server_type         = "Java Edition";
$server_description  = "Minecraft Survival Server";
$server_version      = "1.21.4";
// $server_status is now handled inside includes/mc_status.php and called in includes/header.php


/* minecraft server season details */
$server_season_version = "0.0.1";
$server_season_zero    = "Founders Era";
$server_season_one     = "The Reset";
$server_season_two     = "Amplified";
$server_season_three   = "Blossom Boom";
$server_season_four    = "Final Chapter";


/* minecraft server environment details */
$server_java_version    = "23.0.1";


/* discord server details */
$server_discord_link	= "discord.gg/floris";
$server_discord_owner1	= "@mrfloris";
$server_discord_owner2	= "@admins";

/* live map details */
$server_map_link	= "$server_ip:8100";

/* voting for the server details */
$server_vote_rewards		= "a diamond";

$server_vote_site1_url		= "https://www.example.com/vote/server/1";
$server_vote_site1_short	= "VS1";

$server_vote_site2_url		= "https://www.example.com/vote/server/2";
$server_vote_site2_short	= "VS2";

$server_vote_site3_url		= "https://www.example.com/vote/server/3";
$server_vote_site3_short	= "VS3";

$server_vote_site4_url		= "https://www.example.com/vote/server/4";
$server_vote_site4_short	= "VS4";


/* website details */
$server_website_version = "0.4.0";

/*
 Need to add more? Just add a new $variable ="something" And you can use it in your .php code like <?= $variable ?>
*/

/* End of CONFIG, this is how you can use this in your html .php pages:

Shorthand echo statements (just handy)

<?= $server_name ?>
<?= $server_name_short ?>
<?= $server_ip ?>
<?= $server_port ?>
<?= $server_type ?>
<?= $server_description ?>
<?= $server_version ?>

<?= $server_season_version ?>
<?= $server_season_zero ?>
<?= $server_season_one ?>
<?= $server_season_two ?>
<?= $server_season_three ?>
<?= $server_season_four ?>

<?= $server_java_version ?>

<?= $server_discord_link ?>
<?= $server_discord_owner1 ?>
<?= $server_discord_owner2 ?>

<?= $server_vote_rewards ?>

<?= $server_vote_site1_url ?>
<?= $server_vote_site1_short ?>

<?= $server_vote_site2_url ?>
<?= $server_vote_site2_short ?>

<?= $server_vote_site3_url ?>
<?= $server_vote_site3_short ?>

<?= $server_vote_site4_url ?>
<?= $server_vote_site4_short ?>

<?= $server_website_version ?>

*/