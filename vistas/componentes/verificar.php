<div class="descripcionSitio" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="descripcionSitio-header">Productos</h3>
                <ul class="descripcionSitio-tree">
                    <li><a href="#" onClick= <?php echo "envioDatos('paginas','inicio');" ?>>Inicio</a></li>
                    <li class="active">Compra</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="section">
	<div class="container">
		<div class="row">

		<div class="section-producto">
			<div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Datos de envio</h3>
                    </div>
                    <div class="order-summary">
                        <div class="form-group">
                            <input class="input" type="text" id="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" id="apellido" placeholder="Apellido">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" id="direccion" placeholder="Direccion">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" id="mail" placeholder="Correo electronico">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" id="telefono" placeholder="Telefono">
                        </div>
                    </div>
                </div>

				<!-- Order Details -->
				<div class="col-md-5 order-details">
					<div class="section-title text-center">
						<h3 class="title">DETALLE COMPRA</h3>
					</div>
					<div class="order-summary">
						<div class="order-col">
							<div><strong>PRODUCTOS</strong></div>
							<div><strong>TOTAL</strong></div>
						</div>
						<div class="order-products">

							<?php 
								$total=0;
								foreach($lstArticulo as $key => $value){
									$articulo = Articulo::obtenerArticulo($value["producto"]);
							?>
	
								<div class="order-col">
									
									<div><a href=#><i class="fa fa-times-circle"></i></a></div>
									<div value=""> <?php echo $value["cantidad"]." x "; foreach($articulo as $n){ echo $n->articulo." / ".$n->marca; ?> </div>
									<div>
										<?php 
											$preciot = ($n->precio) * $value["cantidad"];
											$total = $total + $preciot;
											echo "$".$preciot; }
										?>
									</div>
								</div>
	
							<?php 
								
								}

							?>

						</div>
						<div class="order-col">
							<div><strong>TOTAL</strong></div>
							<div><strong class="order-total"><?php echo "$".$total; ?></strong></div>
						</div>
					</div>
					<a href="#" class="primary-btn order-submit">Procesar compra</a>
				</div>
			</div>
		</div>
	</div>
</div>