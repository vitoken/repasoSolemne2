<?php
require_once("../lib/db.php");

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of crudAlumno
 *
 * @author Victor
 */
class crudAlumno {
    function __construct() {
        
    }
    
    // método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($almunos){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO alumnos values(NULL,:Dig_alumnos,:Nom_alumnos,:Rut_alumnos)');
			$insert->bindValue('Dig_alumnos',$almunos->getDig_alumnos());
			$insert->bindValue('Nom_alumnos',$almunos->getNom_alumnos());
			$insert->bindValue('Rut_alumnos',$almunos->getRut_alumnos());
			$insert->execute();

		}

//		// método para mostrar todos los libros
//		public function mostrar(){
//			$db=Db::conectar();
//			$listaLibros=[];
//			$select=$db->query('SELECT * FROM libros');
//
//			foreach($select->fetchAll() as $libro){
//				$myLibro= new Libro();
//				$myLibro->setId($libro['id']);
//				$myLibro->setNombre($libro['nombre']);
//				$myLibro->setAutor($libro['autor']);
//				$myLibro->setAnio_edicion($libro['anio_edicion']);
//				$listaLibros[]=$myLibro;
//			}
//			return $listaLibros;
//		}
//
//		// método para eliminar un libro, recibe como parámetro el id del libro
//		public function eliminar($id){
//			$db=Db::conectar();
//			$eliminar=$db->prepare('DELETE FROM libros WHERE ID=:id');
//			$eliminar->bindValue('id',$id);
//			$eliminar->execute();
//		}
//
//		// método para buscar un libro, recibe como parámetro el id del libro
//		public function obtenerLibro($id){
//			$db=Db::conectar();
//			$select=$db->prepare('SELECT * FROM libros WHERE ID=:id');
//			$select->bindValue('id',$id);
//			$select->execute();
//			$libro=$select->fetch();
//			$myLibro= new Libro();
//			$myLibro->setId($libro['id']);
//			$myLibro->setNombre($libro['nombre']);
//			$myLibro->setAutor($libro['autor']);
//			$myLibro->setAnio_edicion($libro['anio_edicion']);
//			return $myLibro;
//		}
//
//		// método para actualizar un libro, recibe como parámetro el libro
//		public function actualizar($libro){
//			$db=Db::conectar();
//			$actualizar=$db->prepare('UPDATE libros SET nombre=:nombre, autor=:autor,anio_edicion=:anio  WHERE ID=:id');
//			$actualizar->bindValue('id',$libro->getId());
//			$actualizar->bindValue('nombre',$libro->getNombre());
//			$actualizar->bindValue('autor',$libro->getAutor());
//			$actualizar->bindValue('anio',$libro->getAnio_edicion());
//			$actualizar->execute();
//		}
	}
?>
