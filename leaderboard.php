<?php
include("db/db_config.php");
include("db/get_game_state.php");
?>
<head>
    <title>Socially Distant Pub Quiz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
</head>
<body>
    <div class="container">
        <h1>Leaderboard:</h1>
        <h4>Socially Distanced Pub Quiz</h4>

        <?php
        if ($current_round > 1){
         include("db/build_leaderboard.php"); 
        } else {
        ?>
        <div class="alert alert-warning"><p><strong>The results aren't in yet</strong></p>
            <p>The leaderboard will become available after the first round has been marked</p>
        </div>
        <?php
        }
        ?>
            

    </div> <!-- end container -->
</body>

<?php 
	mysqli_close($conn);
?>

