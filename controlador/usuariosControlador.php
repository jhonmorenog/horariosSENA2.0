<?php

@include '../modelo/usuarios.php';
@include '../controlador/conexion.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuariosControlador
 *
 * @author jhon
 */
class usuariosControlador extends Usuarios {

    function __construct() {
        @$this->setDocumento($_POST['documento']);
        @$this->setPnombre($_POST['pnombre']);
        @$this->setSnombre($_POST['snombre']);
        @$this->setPapellido($_POST['papellido']);
        @$this->setSapellido($_POST['sapellido']);
        @$this->setCorreoElectronico($_POST['correoElectronico']);
        @$this->setClave($_POST['clave']);
        if (!isset($_POST['entrar']))
            $this->validarDatos();
    }

    public function validarDatos() {
        if ($this->getDocumento() == "") {
            echo 'El documento es obligatorio.';
        }
        if ($this->getPnombre() == "") {
            echo 'El Primer nombre es obligatorio.';
        }
        if ($this->getPapellido() == "") {
            echo 'El Primer apellido es obligatorio.';
        }
        if ($this->getSnombre() == "") {
            $this->setSnombre(NULL);
        }
        if ($this->getSapellido() == "") {
            $this->setSapellido(NULL);
        }
        if ($this->getCorreoElectronico() == "") {
            echo 'El Correo es obligatorio.';
        }
        if ($this->getClave() == "") {
            echo 'La clave es obligatoria.';
        }
    }

    public function guardar() {

        $c = new Conexion();

        $r = $c->con()->prepare("INSERT INTO `USUARIOS`(`documento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `correo_electronico`, `clave_de_acceso`) "
                . "VALUES (:documento, :primer_nombre, :segundo_nombre, :primer_apellido, :segundo_apellido, :correo_electronico, :clave_de_acceso);");
        $r->bindValue(":documento", $this->getDocumento());
        $r->bindValue(":primer_nombre", $this->getPnombre());
        $r->bindValue(":segundo_nombre", $this->getSnombre());
        $r->bindValue(":primer_apellido", $this->getPapellido());
        $r->bindValue(":segundo_apellido", $this->getSapellido());
        $r->bindValue(":correo_electronico", $this->getCorreoElectronico());
        $r->bindValue(":clave_de_acceso", md5($this->getClave()));
        $r->execute();
        $r=NULL;
        $c=NULL;
    }

    public function actualizar() {
        
    }

    public function consultar() {
        
    }

    public function eliminar() {
        
    }

    public function ingresar() {
        $c = new Conexion();

        $r = $c->con()->prepare("select * from USUARIOS where documento=:documento and :clave_de_acceso=:clave_de_acceso;");
        $r->bindValue(":documento", $this->getDocumento());
        $r->bindValue(":clave_de_acceso", md5($this->getClave()));
        $r->execute();
        // se verifica el documento y contraseña
        $result = $r->setFetchMode(PDO::FETCH_ASSOC);
        foreach ($r->fetchAll() as $k => $v) {
            /*
             * variables de sesion con datos para poder usarlas más adelante
             */
            session_start();
            $_SESSION['primer_nombre']=$V['documento'];
            $_SESSION['primer_apellido']=$V['primer_apellido'];
            $_SESSION['correo_electronico']=$V['correo_electronico'];
            header("location:vista/");
        }
       
        $r=NULL;
        $c=NULL;
    }

}
