<h1>Lisää uusi tili</h1>

<style type="text/css">
	.ruudut{
		margin: 20px;
	}

	.form-horizontal .control-label{
		padding-top: 7px;
		padding-bottom: 7px;
	}


</style>

<div class="ruudut">
	<form class="form-horizontal" method="post" action="lisaaTili">
		<!-- Text input-->
		<div class="control-group">
	 		<label for="tili" class="control-label col-xs-2">Tilin numero</label>
	  		<div class="col-xs-10">
	    		<input id="tili" class="form-control" name="tili" type="text" placeholder="Tilin numero">
	  		</div>
	  	</div>

	  	<div class="control-group">
	 		<label for="saldo" class="control-label col-xs-2">Saldo</label>
	  		<div class="col-xs-10">
	    		<input id="saldo" class="form-control" name="saldo" type="text" placeholder="Lisää saldo">
	  		</div>
	  	</div>

	  	<div class="control-group">
	  		<label for="idas" class="control-label col-xs-2">Valitse asiakas</label>
	  		<div class="col-xs-10">
		  	<select class="form-control" name="idas" id="idas">
		  			<?php
		  				foreach ($asiakas as $rivi) {
		  					echo '<option value="'.$rivi['id_asiakas'].'">'.$rivi['etunimi'].' '.$rivi['sukunimi'].'</option>';
		  				}
		  			?>
		  	</select>
		  	</div>
	  	</div>

	  	<div class="control-group">
	  		<div class="col-xs-offset-2 col-xs-10">
	  			<button type="submit" name="btnLisaa" class="btn btn-primary">Tallenna</button>
	  		</div>
	  	</div>
	 </form>
	 

</div>

