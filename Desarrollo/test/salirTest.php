<?php

   use PHPUnit\Framework\TestCase;                  //obtenemos las librerias de PHPUnit
   use php\index_usr;                              // .php del que se hara la prueba
   
   final class salirTest extends TestCase      // nuestro test usara los parametros de testcase
   
   {
     
	  public function Testsalir()
	   
	   {
		  $this->visit ('php/salir')           // Esta linea de codigo hara la prueba en el archivo registrate, de la carpeta php REGISTRO CORRECTO
		  ->press("salir");                        //hará la funcion de boton submit    
		  ->seePageIs("login");
		}
		