<?php
    require('header.php');
?>
<form action="result.php" method="post">

<h3>Favourite movies:</h3><br>
<input type="text" name="movie1"><br>
<input type="text" name="movie2"><br>
<input type="text" name="movie3"><br>
<input type="text" name="movie4"><br>
<input type="text" name="movie5"><br>

<h3>Favourite series:</h3> <br>
<input type="text" name="show1"><br>
<input type="text" name="show2"><br>
<input type="text" name="show3"><br>
<input type="text" name="show4"><br>
<input type="text" name="show5"><br>
<br>
<input type="submit">
</form>

<form action="result.php" method="get">

<h3>Favourite country:</h3>
<input type="text" name="country"><br>

<h3>Worst movie ever:</h3>
<input type="text" name="worst_movie"><br>
<br>
<input type="submit">
</form>

</body>
</html>