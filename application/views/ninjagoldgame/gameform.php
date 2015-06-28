<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ninja Gold Game using CodeIgniter - Coding Dojo Assignment</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css"/>
</head>
<body>

<div id="wrapper">

    <h1>Ninja Gold Game using CodeIgniter - Coding Dojo Assignment</h1>

    <div id="gold-score">
        <h2>Your Gold:<span>0</span></h2>
    </div>

    <div id="games">

        <div class="game">
            <h3>Farm</h3>
            <p>(earns 10 &mdash; 20 golds)</p>
            <form action="process_money" method="post">
                <input type="hidden" value="farm"/>
                <input type="submit" value="FIND GOLD"/>
            </form>
        </div>

        <div class="game">
            <h3>Cave</h3>
            <p>(earns 5 &mdash; 10 golds)</p>
            <form action="process_money" method="post">
                <input type="hidden" value="cave"/>
                <input type="submit" value="FIND GOLD"/>
            </form>
        </div>

        <div class="game">
            <h3>House</h3>
            <p>(earns 2 &mdash; 5 golds)</p>
            <form action="process_money" method="post">
                <input type="hidden" value="house"/>
                <input type="submit" value="FIND GOLD"/>
            </form>
        </div>

        <div class="game">
            <h3>Casino</h3>
            <p>(earns/loses 0 &mdash; 50 golds)</p>
            <form action="process_money" method="post">
                <input type="hidden" value="casino"/>
                <input type="submit" value="FIND GOLD"/>
            </form>
        </div>
    </div>

    <h3>Activites</h3>
    <div id="activities">



    </div>

</div>



</body>
</html>