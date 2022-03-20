<?php

    class Materiales extends Conectar{

        public function get_materiales(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM ma_materiales ";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_material($id){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM ma_materiales WHERE ID = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        /*Ejemplo del lic en Socio_Negocio  tabla ma_socio_negocio
        public function insert_socio($nombre, $razonsocial, $direccion, $rtn, $contacto, $estado){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO ma_socios_negocio(id,nombre,razon_social,direccion,RTN,contacto,estado)
            VALUES (NULL,?,?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $nombre);
            $sql->bindValue(2, $razonsocial);
            $sql->bindValue(3, $direccion);
            $sql->bindValue(4, $rtn);
            $sql->bindValue(5, $contacto);
            $sql->bindValue(6, $estado);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }*/

        public function insert_material($descripcion, $unidad, $costo, $precio, $aplica_isv, $porcentaje_isv, $estado, $id_socio){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO ma_materiales(ID, DESCRIPCION, UNIDAD, COSTO, PRECIO, APLICA_ISV, PORCENTAJE_ISV, ESTADO, ID_SOCIO)
            VALUES (NULL,?,?,?,?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $descripcion);
            $sql->bindValue(2, $unidad);
            $sql->bindValue(3, $costo);
            $sql->bindValue(4, $precio);
            $sql->bindValue(5, $aplica_isv);
            $sql->bindValue(6, $porcentaje_isv);
            $sql->bindValue(7, $estado);
            $sql->bindValue(8, $id_socio);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        /*Ejemplo del lic en Socio_Negocio  tabla ma_socio_negocio
        public function update_socio($id,$razonsocial,$direccion,$rtn,$contacto){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="UPDATE ma_socios_negocio SET razonsocial=?, direccion=?, RTN=?, contacto=? WHERE id=?;";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $razonsocial);
            $sql->bindValue(2, $direccion);
            $sql->bindValue(3, $rtn);
            $sql->bindValue(4, $contacto;
            $sql->bindValue(5, $id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }*/

        public function update_material($id, $descripcion, $unidad, $costo, $precio, $aplica_isv, $porcentaje_isv, $estado, $id_socio){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="UPDATE ma_materiales SET DESCRIPCION=?, UNIDAD=?, COSTO=?, PRECIO=?, APLICA_ISV=?, PORCENTAJE_ISV=?, ESTADO=?, ID_SOCIO=? WHERE ID=?;";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $descripcion);
            $sql->bindValue(2, $unidad);
            $sql->bindValue(3, $costo);
            $sql->bindValue(4, $precio);
            $sql->bindValue(5, $aplica_isv);
            $sql->bindValue(6, $porcentaje_isv);
            $sql->bindValue(7, $estado);
            $sql->bindValue(8, $id_socio);
            $sql->bindValue(9, $id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function delete_material($id){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="DELETE FROM ma_materiales WHERE ID=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>