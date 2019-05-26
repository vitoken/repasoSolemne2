<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Casa
 */
interface Icrud {
    //put your code here
    public function validar(usuario $usuario);
    
}
class usuarioDAO implements Icrud {
    
        public function validar(\usuario $usuario) {
        /* Verficamos la existencia */
        $db = new DBConnect();
        $dblink = $db->conexion();

        if (!isset($dblink)) {
            return false;
        }

        $PDOst = $dblink->prepare('select Usuario, Clave
                                 from usuario
                                 where Usuario=? and Clave=?');

        $PDOst->execute(array($usuario->getUsuario(), $usuario->getClave()));

        if ($row = $PDOst->fetch(PDO::FETCH_OBJ)) {
            $usuario->setUsuario($row->Usuario);
            $usuario->setClave($row->Clave);
            return true;
        } else {
            return false;
        }
    }


}