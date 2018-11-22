<?php

   use PHPUnit\Framework\TestCase;                  //obtenemos las librerias de PHPUnit
   use php\registrate;                              // .php del que se hara la prueba
   
   final class registrateTest extends TestCase      // nuestro test usara los parametros de testcase
   
   {
     
	  public function Testregistro()
	   
	   {
		  $this->visit ('php/registrate')           // Esta linea de codigo hara la prueba en el archivo registrate, de la carpeta php REGISTRO CORRECTO
		  ->type("Patzari","nombre")                // valor asignado, variable que ocupa
		  ->type("Aguirre","appaterno")
		  ->type("Gamiño","appmaterno")
		  ->type("broofevil","nickname")
		  ->type("broofevil665@gmail.com","correo")
		  ->type("123456","contrasena")
		  ->type("123456","password2")
		  ->press("submit");                        //hará la funcion de boton submit    
		  ->seePageIs("login");
		}
		
	  public function Testcampovacio()
	     {
		  $this->visit ('php/registrate')           // Esta linea de codigo hara la prueba en el archivo registrate, de la carpeta php ERROR CAMPO VACIO
		  ->type("Patzari","nombre")                // valor asignado, variable que ocupa
		  ->type("Aguirre","appaterno")             //puede eliminar cualquier campo para la prueba
		  ->type("Gamiño","appmaterno")
		  ->type("broofevil667@gmail.com","correo")
		  ->type("123456","contrasena")
		  ->type("123456","password2")
		  ->press("submit")                         //hará la funcion de boton submit    
		  ->see("Por favor rellena todos los datos correctamente"); //muestra el error de la pagina
		 }
		  
	  public function Testdiscon()
	     {
		  $this->visit ('php/registrate')           // Esta linea de codigo hara la prueba en el archivo registrate, de la carpeta php DISTINTAS CONTRASEÑAS
		  ->type("Patzari","nombre")                // valor asignado, variable que ocupa
		  ->type("Aguirre","appaterno")
		  ->type("Gamiño","appmaterno")
		  ->type("broofevil667","nickname")
		  ->type("broofevil667@gmail.com","correo")
		  ->type("123456","contrasena")
		  ->type("123446","password2")
		  ->press("submit")                        //hará la funcion de boton submit    
		  ->see("Las contraseñas no son iguales");  //muestra el error de la pagina
		 }
	   
	 public function Testnicknamerep()
	     {
		  $this->visit ('php/registrate')           // Esta linea de codigo hara la prueba en el archivo registrate, de la carpeta php DISTINTAS CONTRASEÑAS
		  ->type("Patzari","nombre")                // valor asignado, variable que ocupa
		  ->type("Aguirre","appaterno")
		  ->type("Gamiño","appmaterno")
		  ->type("broofevil667","nickname")
		  ->type("broofevil667@gmail.com","correo")
		  ->type("123456","contrasena")
		  ->type("123446","password2")
		  ->press("submit")                         //hará la funcion de boton submit    
		  ->see("El nombre de usuario ya existe");  //muestra el error de la pagina
		 }
		 }