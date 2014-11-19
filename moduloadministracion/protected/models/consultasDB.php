<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of consultasDB
 *
 * @author Juan Esteban
 */
class consultasDB extends CActiveRecord{
    //put your code here
    public function tableName() {
        return "organizaciones";
    }
}
