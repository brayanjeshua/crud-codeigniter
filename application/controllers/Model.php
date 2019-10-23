<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Controller {


  public function functionmodel() {

    $sql2="select * from customers order by id desc";

    $result['CustomersList']  = $this->db->query($sql2)->result_array();


      $this->load->view('master');
      $this->load->view('001-model-view', $result);
      $this->load->view('footer');

  }


  public function handleCustomer() {

    // if form has been sent
    if (isset($_POST['company_name'])) {

     $post_data = $_POST;

     // Custom Fields for Add Database
     $post_data['id_user'] = $_SESSION['user_id'];
     $post_data['create_date'] = date("Y-m-d");

      // find number id in database
      $numberId = $post_data['id'];
      $query="select * from customers where id='$numberId'";
      $existCustomer = $this->db->query($query)->result_array();

      // Verify if Customer Exist By id
      if (sizeof($existCustomer)>0) {

        // Update in the Database
        $this->db->where('id', $numberId);
        $this->db->update('customers', $post_data);

        echo "Success Updating Customer";

      } else {

         // Insert in the Database
         $result = $this->db->insert('customers', $post_data);
         $insert_id = $this->db->insert_id();

         if ($result) {
           echo "Inserted with ID: ".$insert_id;
         } else {
           $this->session->set_flashdata('message', "An error occurred while inserting data.");
         }

     }

   }
   $this->db->close();

  }

  public function elegido($id) {

      $sql="select * from customers where id = '$id'";
      $fila = $this->db->query($sql)->result_array();
      echo json_encode($fila);
      $this->db->close();

  }


  public function deleteCustomer($id){

    $sql="delete from customers where id = '$id'";
    $this->db->query($sql);
    $this->db->close();

  }

}
