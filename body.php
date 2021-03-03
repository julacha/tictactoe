<body>

    <form id="request" class="container" action="<?php "http://localhost/tictactoe/test.php" ?>" method="post">
        <input type="submit" name="mark" class="square" id="sq1" value="" />
        <input type="submit" name="mark" class="square" id="sq2" value="" />
        <input type="submit" name="mark" class="square" id="sq3" value="" />
        <input type="submit" name="mark" class="square" id="sq4" value="" />
        <input type="submit" name="mark" class="square" id="sq5" value="" />
        <input type="submit" name="mark" class="square" id="sq6" value="" />
        <input type="submit" name="mark" class="square" id="sq7" value="" />
        <input type="submit" name="mark" class="square" id="sq8" value="" />
        <input type="submit" name="mark" class="square" id="sq9" value="" />
    </form>
    <div class="status_container">
        <p id="game_status">Player A goes now</p>
    </div>
    <script>
        let action = "<?php "http://localhost/tictactoe/test.php" ?>";
    </script>
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>