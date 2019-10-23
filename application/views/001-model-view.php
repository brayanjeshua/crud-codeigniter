<?php

  /*Programming*/

?>

<div class="main-panel" data="blue">

<div class="content-dashboard">


  <div class="row">


  	<div class="col-12">

  		<div class="card-dashboard">

  			<div class="card-header">
  				<h4 class="card-title"><b>Customers</b> Register</h4>
  			</div>

  			<div class="card-body">

  				<div class="col-lg-12 col-md-12">
              <div class="card-dashboard card-tasks">

                <div class="card-header ">
                  <h6 class="title d-inline">Create, Edit and Delete</h6>

                </div>


                <div class="card-body">

  								<form id="customer_frm" name="customer_form" action='' method="post">

                      <!-- Input to Send when exist -->
                      <input class="form-control" type="hidden" name="id" id="id">

  											<div class="form-row" id="form-customer">

  												<div class="col-2">
  													<input type="text" class="form-control form-control-lg" placeholder="Company Name" name="company_name" value="" id="company_name">
  												</div>

                          <div class="col-2">
                            <input type="text" class="form-control form-control-lg" placeholder="Contact Name" name="contact_name" value="" id="contact_name">
                          </div>

  												<div class="col-2">
  													<input type="phone" class="form-control form-control-lg" placeholder="phone" name="phone" value="" id="phone">
  												</div>

  												<div class="col-2">
  													<input type="email" class="form-control form-control-lg" placeholder="mail" name="mail" value="" id="mail">
  												</div>

  												<div class="col-4">
  													<input type="text" class="form-control form-control-lg" placeholder="Observations" name="observations" value="" id="observations">
  												</div>

  												<div class="col-2">
  													<input class="btn btn-primary" type="submit" onclick=validateCustomer() value="Save" id="button_customer">
  												</div>

  											</div>

  								</form>

                  <div class="table-full-width table-responsive ps ps--active-y ps--scrolling-y">

                    <table class="table">
                      <thead>
                        <tr>
                          <td>Company Name</td>
                          <td>Contact Name</td>
                          <td>Phone</td>
                          <td>mail</td>
                          <td>Observations</td>
                        </tr>
                      </thead>
                      <tbody>

  											<?php	if (isset($CustomersList)) { ?>

  													<?php foreach ($CustomersList as $key => $value) { ?>

  																<?php echo '<tr>' ?>

                                      <td><?= $value['company_name']?></td>
  																		<td><?= $value['contact_name']?></td>
  																		<td><?= $value['phone']?></td>
  																		<td><?= $value['mail']?></td>
                                      <td><?= $value['observations']?></td>

  																<?php echo '</tr>' ?>

  													<?php } ?>

  											<?php	} ?>

                      </tbody>
                    </table>

  							</div>
              </div>
            </div>
  			</div>
  		</div>

  	</div>




  </div>


</div>

</div>
