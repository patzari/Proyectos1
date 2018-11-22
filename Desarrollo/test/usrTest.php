<?php

   use PHPUnit\Framework\TestCase;                  //obtenemos las librerias de PHPUnit
   use php\index_usr;                              // .php del que se hara la prueba
   
   final class usrTest extends TestCase      // nuestro test usara los parametros de testcase
   {
     
	  public function Testbuscar()
	   
	   {
		  $this->visit ('index_usr')           // Esta linea de codigo hara la prueba en el archivo login, de la carpeta php Login CORRECTO
		  ->type("Estacionamiento del centro","Search")
		  ->press("logim.submit")                      //hara la funcion de boton submit    
		  ->see("Direccion")
		}
	  public function Testmasinfo()
	   
	   {
		  $this->visit ('index_usr')           // Esta linea de codigo hara la prueba en el archivo login, de la carpeta php Login CORRECTO
		  ->press("click")                      //hara la funcion de boton submit    
		  ->seePageIs("estacionamiento")       // nos mandara a la pagina de la informacion del estacionamiento
		}		
		
		}