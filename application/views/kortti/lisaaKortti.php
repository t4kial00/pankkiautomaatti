<h1>Lisää uusi kortti</h1>

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
	<form class="form-horizontal" method="post" action="lisaaKortti">
		<!-- Text input-->
		<div class="control-group">
	 		<label for="en" class="control-label col-xs-2">Kortin numero</label>
	  		<div class="col-xs-10">
	    		<input id="nro" class="form-control" name="nro" type="text" placeholder="Kortin numero">
	  		</div>
	  	</div>

	  	<div class="control-group">
	 		<label for="sn" class="control-label col-xs-2">PIN-koodi</label>
	  		<div class="col-xs-10">
	    		<input id="pin" class="form-control" name="pin" type="text" placeholder="PIN-koodi">
	  		</div>
	  	</div>

	  	<div class="control-group">
	  		<label for="idtili" class="control-label col-xs-2">Valitse tili</label>
	  		<div class="col-xs-10">
		  	<select class="form-control" name="idtili" id="idtili">
		  			<?php
		  				foreach ($tili as $rivi) {
		  					echo '<option value="'.$rivi['id_tili'].'">TiliID: '.$rivi['id_tili'].' Omistaja: '.$rivi['etunimi'].' '.$rivi['sukunimi'].'</option>';
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

