<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="LC.ico" />
    <title>Live Control</title>
    <!-- CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css" >

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>



    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
          <a class="navbar-brand" <a href="Home.html"> <img src="immagini/lclogo.png"  height="50" width="150" alt="Brand" ></a></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

           <ul class="nav navbar-nav navbar-right">
            <li><a href="Home.html">HOME <span class="sr-only">(current)</span></a></li>
           <li><a href="logout.php">LOGOUT</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MENÚ<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="chisiamo.html"> Chi siamo</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="mailto:livecontrolinfo@gmail.com">Contattaci</a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li>
          </ul>


        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

  <div class="container">

<table border="0">
<a href='guiu.html'><img src='immagini/indietro.jpg' height='30' width='25'>				</a>

 <tr>
    <td align="center" ><strong>Che giorno vuoi vedere:</strong>
	</td>
</tr>
<form method="POST" action="dash.php">
<tr>
	<td>

     <input type="date" name="mydatetime">
	 </td>
 </tr> <table>
<tr>
	<td> Sito:</td>
	<td>
        <input type="text" name="sito">
     </td>
</tr>
<tr>
	<td>Impianto:</td>
	<td>
        <input type="text" name="impianto">
     </td>
</tr>

		<td></td>
          <td align="left"><input type="reset"
          name="cancella" value="cancella"></td>
          <td></td>
          <td align="right"><input type="submit"
          name="submit" value="Sent"></td>

        </tr>
        </tr>
        </form>
        </table>
      </td>
    </tr>
</table>


</div>

</body>
</html>

<html>
