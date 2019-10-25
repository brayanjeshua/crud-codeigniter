<script type="text/javascript">

// General Functions for app


// Module for Customers
function validateCustomer() {
  var f = document.forms["customer_form"];
  console.log(f)

  // Add Validation


  // Condition to Send Form

  enviarformCustomer();
}

function enviarformCustomer() {
  var urlw
  urlw = "<?php echo site_url('insert_customer')?>";
     $.ajax({
       type: 'POST',
       url: urlw,
       data: $('#customer_frm').serialize(),

        success: function(data) {
          // alert("Success! "+data);
          location.reload();
        }

      })
  }


  function editCustomer(id) {

    // alert("Editing customer: "+id)

    urlx = "<?php echo site_url('model/elegido/')?>"+id;

     $.ajax({
       url: urlx,
       type:"GET",
       success:function(data){
         console.log(data);

         var datax = JSON.parse(data);
         console.log(datax);


         $("#id").val(datax[0]['id'])
         $("#nombre").val(datax[0]['nombre'])
         $("#motivo_visita").val(datax[0]['motivo_visita'])
         $("#telefono").val(datax[0]['telefono'])
         $("#mail").val(datax[0]['mail'])
         $("#comentarios").val(datax[0]['comentarios'])
         $("#button_customer").val("Edit")

       }


   });

  }

  function deleteCustomer(id){

    var urlx
    urlx = "<?php echo site_url('customer_delete/')?>"+id;

     $.ajax({
       url: urlx,
       type:"GET",
       success:function(data){
         // alert(data);
         location.reload();
       }
   });

 }

</script>
