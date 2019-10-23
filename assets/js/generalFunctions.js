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
          alert("Success! "+data);
          // location.reload();
        }

      })
  }


  function editCustomer(id) {

    alert("Editing customer: "+id)

    urlx = "<?php echo site_url('work/elegido/')?>"+id;

     $.ajax({
       url: urlx,
       type:"GET",
       success:function(data){
         console.log(data);

         var datax = JSON.parse(data);
         console.log(datax);


         $("#id").val(datax[0]['id'])
         $("#company_name").val(datax[0]['company_name'])
         $("#contact_name").val(datax[0]['contact_name'])
         $("#phone").val(datax[0]['phone'])
         $("#mail").val(datax[0]['mail'])
         $("#observations").val(datax[0]['observations'])
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
         alert(data);
         // location.reload();
       }
   });

 }
