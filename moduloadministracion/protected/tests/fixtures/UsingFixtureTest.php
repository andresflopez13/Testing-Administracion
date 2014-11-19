<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsingFixtureTest
 *
 * @author Juan Esteban
 */
class UsingFixtureTest  extends CDbTestCase{
    /**
     * Fixture de Yii
     * Se usa la ruta del modulo para que yii puede importar el modelo
     */
    public $fixtures=array(
        'ejemplos'=>'ejemplos.models.Ejemplo',
    );
    
    /**
     * Test para probar el uso de fixture
     * 
     * 
     */
    public function testFixture()
    {                
        //en la variable $this->ejemplos tenemos el contenido de nuetro fixture
        // y lo podemos usar en todos nuestros test, en este caso es un array de 
        // de una posición
        $arrEjemploList = $this->ejemplos;  
        //para acceder a la posición específica de un set de datos del fixture    
        //retorna un array
        $arrFirstExample = $this->ejemplos['test1'];           
        //si queremos obtener una instancia de ActiveRecord
        //obtiene un objeto AR
        $objFirstExample = $this->ejemplos('test1'); 
    }
}