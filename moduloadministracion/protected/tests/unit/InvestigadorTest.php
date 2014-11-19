<?php
class InvestigadorTest extends PHPUnit_Framework_TestCase
{
	//test para el investigador 
	 public function testCreateInvestigador(){
	 	$investigador= new Investigador;
	 	$investigador->Nombres="Pedro";
	 	$investigador->Apellidos="Perez";
	 	$investigador->Tipo_Documento="cedula";
	 	$investigador->Numero_Documento=1094941728;
	 	$investigador->Nacionalidad="colombiano";
	 	$investigador->Datos_contacto="3163360477";
	 	$investigador->Evaluador="0";
	 	$this->assertTrue($investigador->save());
	 }

	 public function testBuscarInvestigador(){
	 	$investigador = new Investigador;
	 	$aux = $investigador->findByPk(1094941728);
	 	$this->assertNotNull($aux);
	 }

	 public function testEliminarInvestigador(){
	 	$investigador = new Investigador;
	 	$aux = $investigador->findByPk(1094941728);
	 	$aux->delete();
	 	$aux = $investigador->findByPk(1094941728);
	 	$this->assertNull($aux);
	 }

	 //test para las organizaciones
	 public function testCrearOrganizacion(){
	 	$organizacion= new organizaciones;
	 	$organizacion->Nit=1010;
	 	$organizacion->Email="example@hotmail.com";
	 	$organizacion->Direccion="Mercedez";
	 	$organizacion->Telefono="7460000";
	 	$organizacion->Nombre="ComeCon";
	 	$organizacion->motivoCambioOrganizacion="Por chimba";
	 	$organizacion->Ciudad="Armenia";
	 	$organizacion->validar="yes";
	 	$this->assertTrue($organizacion->save());
	 }

	 public function testBuscarOrganizacion(){
	 	$organizacion=new Organizaciones;
	 	$aux=$organizacion->findByPk(1010);
	 	$this->assertNotNull($aux);
	 }

	 public function testEliminarOrganizacion(){
	 	$organizacion=new Organizaciones;
	 	$aux=$organizacion->findByPk(1010);
	 	$aux->delete();
	 	$aux=$organizacion->findByPk(1010);
	 	$this->assertNull($aux);
	 }

	 //test para los parametros
	 public function testCrearParametro(){
	 	$parametro=new Parametros;
	 	$parametro->id=10;
	 	$parametro->Nombre="prueba";
	 	$parametro->Valor="value";
	 	$this->assertTrue($parametro->save());
	 }

	 public function testBuscarParametro(){
	 	$parametro=new Parametros;
	 	$aux=$parametro->findByPk(10);
	 	$this->assertNotNull($aux);
	 }

	 public function testEliminarParametro(){
	 	$parametro=new Parametros;
	 	$aux=$parametro->findByPk(10);
	 	$aux->delete();
	 	$aux=$parametro->findByPk(10);
	 	$this->assertNull($aux);
	 }

	 //test para las plantillas
	 public function testPlantillas(){
	 	$plantilla
	 }
}
?>