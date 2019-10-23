<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Works extends CI_Model
{
    function __construct()
    {
      parent::__construct();
    }

    public function get_current_page_records($limit, $start, $fecha, $fecha2)
    {
        // $this->db->limit($limit, $start);

        if ($_SESSION['tipo_usuario']=='1') {

            if ($fecha2<>"1900") {
                $query = $this->db->get(" worksw where date>='$fecha' and date <='$fecha2' ");
              }else{
                $query = $this->db->get(" worksw where date='$fecha' ");
            }

        }else{

            $userx=$_SESSION['user_id'];

            if ($fecha2<>"1900") {
                $query = $this->db->get(" worksw where date>='$fecha' and date <='$fecha2' and id_usuario='$userx' ");
              }else{
                $query = $this->db->get(" worksw where date='$fecha' and id_usuario='$userx' ");
            }

        }


        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                $data[] = $row;
            }

            return $data;
        }

        return false;
    }

    public function get_total()
    {
        return $this->db->count_all("worksw");
    }
}
