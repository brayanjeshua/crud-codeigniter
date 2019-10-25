<?php

  /*Programming*/

?>

<div class="main-panel" data="blue">

<div class="content">


  <div class="row">


  	<div class="col-lg-6 col-md-12">

  		<div class="card">

  			<div class="card-body">

  				<div class="col-lg-12 col-md-12">
              <div class="card">

                <div class="card-body">

  								<form id="customer_frm" name="customer_form" method="post" action=''>

                      <!-- Input to Send when exist -->
                      <input class="form-control" type="hidden" name="id" id="id">

  											<div class="form-row" id="form-customer">

  												<div class="col-6">
  													<input type="text" class="form-control" placeholder="Nombre" name="nombre" value="" id="nombre">
  												</div>

                          <div class="col-6">
                            <input type="email" class="form-control" placeholder="nombre@mail.com" name="mail" value="" id="mail">
                          </div>

                          <div class="col-6">
                            <select class="form-control" name="motivo_visita">
                              <option value="Compra">Compra</option>
                              <option value="Venta">Venta</option>
                              <option value="Alquiler">Alquiler</option>
                            </select>
                          </div>

  												<div class="col-6">
  													<input type="phone" class="form-control" placeholder="Telefono" name="telefono" value="" id="telefono">
  												</div>

  												<div class="col-12">
  													<textarea type="text" class="form-control" placeholder="Comentarios" name="comentarios" value="" id="comentarios"></textarea>
  												</div>

  												<div class="col-12">
  													<input class="btn btn-primary" type="submit" onclick=validateCustomer() value="Save" id="button_customer">
  												</div>

  											</div>

  								</form>

              </div>

            </div>
  			</div>

  		</div>

  	</div>




  </div>

  <div class="col-lg-6 col-md-12">

    <div class="table-responsive">

      <table class="table">
        <thead>
          <tr>
            <td>Nombre</td>
            <td>Email</td>
            <td>Motivo Visita</td>
            <td>Telefono</td>
            <td>Comentarios</td>
            <td>Editar</td>
            <td>Borrar</td>
          </tr>
        </thead>
        <tbody>

          <?php	if (isset($CustomersList)) { ?>

              <?php foreach ($CustomersList as $key => $value) { ?>

                    <?php echo '<tr>' ?>

                        <td><?= $value['nombre']?></td>
                        <td><?= $value['mail']?></td>
                        <td><?= $value['motivo_visita']?></td>
                        <td><?= $value['telefono']?></td>
                        <td><?= $value['comentarios']?></td>

                        <td>
                          <button type="button" class="btn btn-secondary" onclick="editCustomer(<?= $value['id']?>)">
                            Editar
                          </button>
                        </td>

                        <td>
                          <button type="button" class="btn btn-secondary" onclick="deleteCustomer(<?= $value['id']?>)">
                            Borrar
                          </button>
                        </td>

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
