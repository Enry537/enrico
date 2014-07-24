<?

$titolo=$_POST[titolo];
$categoria=$_POST[categoria];
$provincia=$_POST[provincia];
$descrizione=$_POST[descrizione];
$email=$_POST[email];
$prezzo=$_POST[prezzo];


//la stringa mysql_connect deve essere compilata con i dati relativi al proprio database
// HOST = IP server Mysql
// USER = Nome utente databse
// PASSWORD = Password utente databse
mysql_connect("host","nomedatabase","passworddatabase");//database connection
// Qui sotto al posto di NOME_DATABSE, inserisci il nome del DB
mysql_select_db("selezionadatabase");
 
//inserting data order
$toinsert = "INSERT INTO tbl_annunci
			(titolo, categoria, provincia, descrizione, prezzo, email)
			VALUES
('".$_POST['titolo']."','".$_POST['categoria']."','".$_POST['provincia']."','".$_POST['descrizione']."','".$_POST['email']."','".$_POST['prezzo']."')";
 
//declare in the order variable
$result = mysql_query($toinsert);	//order executes
if($result){
		echo("<br>Inserimento eseguito");
	
} else{
    echo $result;
	echo $toinsert;
	echo("<br>Inserimento non eseguito");
}
?>

<html>
<head>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
body {
	background-color: #7C7C7C;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Stile1 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #FFFFFF;
	font-weight: bold;
}
.Stile4 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-style: italic;
	color: #3A8936;
}
.Stile5 {font-size: 14}
.Stile7 {font-size: 14px}
.Stile8 {
	font-size: 14px;
	color: #68B532;
	font-weight: bold;
}
-->
</style>
<title>Annunciopoli</title></head>
<body>
<table width="1025" height="768" border="0" align="center" cellpadding="0" cellspacing="0" id="Tabella_01">
	<tr>
		<td colspan="5">
			<img src="immagini/pag__01.jpg" width="1024" height="37" alt=""></td>
		<td>
			<img src="immagini/spaziatore.gif" width="1" height="37" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="immagini/pag__02.jpg" width="669" height="1" alt=""></td>
		<td rowspan="2">
			<img src="immagini/pag__03.jpg" width="297" height="19" alt=""></td>
		<td colspan="2">
			<img src="immagini/pag__04.jpg" width="58" height="1" alt=""></td>
		<td>
			<img src="immagini/spaziatore.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td rowspan="8">
			<img src="immagini/pag__05.jpg" width="40" height="730" alt=""></td>
		<td rowspan="4">
			<img src="immagini/pag__06.jpg" width="629" height="154" alt=""></td>
		<td rowspan="4">
			<img src="immagini/pag__07.jpg" width="18" height="154" alt=""></td>
		<td rowspan="8">
			<img src="immagini/pag__08.jpg" width="40" height="730" alt=""></td>
		<td>
			<img src="immagini/spaziatore.gif" width="1" height="18" alt=""></td>
	</tr>
	<tr>
		<td background="immagini/pag__09.jpg"><table width="273" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="17" colspan="3"><div align="center" class="Stile4">Area Riservata: </div></td>
          </tr>
          <tr>
            <td width="82" rowspan="2"><div align="center"><img src="onlineislemler.png" alt="login" width="62" height="64"></div></td>
            <td width="98" height="33" align="center" valign="middle"><label>
                <div align="center">
                  <input name="textfield" type="text" placeholder="Username" size="15">
                </div>
              </label></td>
            <td width="93" rowspan="2" align="center" valign="middle"><label>
                <div align="center">
                  <input type="submit" name="Submit" style="height:60px; width:70px" value="Invia">
                  </label>
              </div></td>
          </tr>
          <tr>
            <td><div align="center">
                <input name="textfield2" type="password" size="15" placeholder="Password">
            </div></td>
          </tr>
        </table></td>
		<td>
			<img src="immagini/spaziatore.gif" width="1" height="116" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="immagini/pag__10.jpg" width="297" height="3" alt=""></td>
		<td>
			<img src="immagini/spaziatore.gif" width="1" height="3" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="immagini/pag__11.jpg" width="297" height="17" alt=""></td>
		<td>
			<img src="immagini/spaziatore.gif" width="1" height="17" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" background="immagini/pag__12.jpg"><div align="center" class="Stile1">| Homepage | Inserisci Annuncio | Registrati | Contatti | </div></td>
		<td>
			<img src="immagini/spaziatore.gif" width="1" height="48" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" background="immagini/pag__13.jpg"><div align="center">
		  <p class="Stile7">Grazie per aver inoltrato il tuo annuncio.<br>
	      Entro le prossime ore sar&agrave; vagliato dal nostro staff per verificare che rispetti tutte le regole del  sito.<br>
	      Riceverai una notifica via mail non appena sar&agrave; gestito.		  </p>
		  <p class="Stile5">&nbsp;</p>
		  <p><img src="immagini/success.png" width="256" height="256"></p>
		  <p class="Stile8">Attendi mentre vieni reindirizzato alla pagina principale... </p>
		</div></td>
		<td>
			<img src="immagini/spaziatore.gif" width="1" height="455" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" background="immagini/pag__14.jpg"><div align="center"><span class="Stile1">Inserisci qui i diritti </span></div></td>
		<td>
			<img src="immagini/spaziatore.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="immagini/pag__15.jpg" width="944" height="28" alt=""></td>
		<td>
			<img src="immagini/spaziatore.gif" width="1" height="28" alt=""></td>
	</tr>
</table>
</body>
</body>
</html>