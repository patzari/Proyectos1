<?php

   use PHPUnit\Framework\TestCase;                  //obtenemos las librerias de PHPUnit
   use index_general;                              // .php del que se hara la prueba
   use index_usr;
   use index_admin;
   
   final class paginasTest extends TestCase      // nuestro test usara los parametros de testcase
    
	{
	
	 public function Testpaginas1()
	 
	 {
	 $response = $this->get('index_general')
	          ->assertStatus(200)                 //confirma que puede abrir la pagina
	          ->assertSee('Bienvenido a este sitio de estacionamientos.')  // lo ocupamos para saber que efectivamente ingresamos a la pagina
			  
	 
	 }
	 
	 public function Testpaginas2()
	 
	 {
	 $response = $this->get('index_admin')
	          ->assertStatus(200)                 //confirma que puede abrir la pagina
	          ->assertSee('Sistema de estacionamiento')    // al ser un texto mandado desde la aplicacion nos da la certeza de la conexion a la pagina
			  
	 
	 }
	 public function Testpaginas3()
	 
	 {
	 $response = $this->get('index_usr')
	          ->assertStatus(200)                 //confirma que puede abrir la pagina
	          ->assertSee('Sistema de estacionamiento')    // esto nos permite un mayor rango de confianza en nuestra prueba unitaria
			  
	 
	 }