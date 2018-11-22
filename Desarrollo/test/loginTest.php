<?php

   use PHPUnit\Framework\TestCase;                  //obtenemos las librerias de PHPUnit
   use php\login;                              // .php del que se hara la prueba
   
   final class loginTest extends TestCase      // nuestro test usara los parametros de testcase
   {
     
	  public function Testlogin()
	   
	   {
		  $this->visit ('php/registrate')           // Esta linea de codigo hara la prueba en el archivo login, de la carpeta php Login CORRECTO
		  ->type("broofevil665@gmail.com","correo")                // valor asignado, variable que ocupa
		  ->type("123456","password")
		  ->press("logim.submit")                       //hara la funcion de boton submit    
		  ->seePageIs("index_user");
		}
		
	 public function Testcampovacio()
	   
	   {
		  $this->visit ('php/registrate')           // Esta linea de codigo hara la prueba en el archivo login, de la carpeta php ERROR LOGIN CAMPO VACIO
		  ->type("broofevil665@gmail.com","correo")                // valor asignado, variable que ocupa
		  ->press("logim.submit")                        //hará la funcion de boton submit    
		  ->see("Datos Incorrectos");
		}
		
      public function Testdatoerroneo()
	   
	   {
		  $this->visit ('php/registrate')           // Esta linea de codigo hara la prueba en el archivo login, de la carpeta php ERROR LOGIN CAMPO VACIO
		  $this->visit ('php/registrate')           // Esta linea de codigo hara la prueba en el archivo login, de la carpeta php Login CORRECTO
		  ->type("broofevil665@gmail.com","correo")                // valor asignado, variable que ocupa
		  ->type("123455","password")
		  ->press("logim.submit")  
		  ->see("Datos Incorrectos");
		}
			}