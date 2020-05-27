<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
<form method="post">
  <h1>¡Deja tu comentario!</h1>
  <p>
        <label for="name">
        <div align="center">Nombre</label>
      <div align="center">
          <input name="name" type="text" placeholder="Nombre completo" size="50" >
    </div>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">Email</p>
  <p align="center">
    <input name="email" type="email" placeholder="Email" >
    <label for="coment"><br>
      <br>
      <br>
      <br>
      <br>
    </label>
    <label for="valor">¿Qué tal te pareció la página?</label>
  </p>
  <p align="center">&nbsp;</p>
  <p align="center">
    <select name="valor" id="valor">
      <option value="buena">Buena</option>
      <option value="regular">Regular</option>
      <option value="mala">Mala</option>
    </select>
  </p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p>
    <label for="coment">  <br>
      <br>
      Dudas y comentarios<br>
      <br>
    </label>
    <textarea name="coment" cols="60" rows="12" placeholder="Deja tu comentario"></textarea>
  </p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p>
    <label for="register">Enviar Información</label>
    <input type="submit" name="register">
  <a href="index2.html"><img src="file:///C|/Users/artur/Documents/CBTis 4to semestre/Páginas web Erendira/Práctica 5/kisspng-computer-icons-encapsulated-postscript-arrow-downl-return-icon-5b139278b60999.5307435215280093367456 (1).png" alt="" width="80" height="82" title="Volver
 " /></a>  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp; </p>
  </form>
<?php 
        include("registrar.php");
        ?>
</body>
</html>