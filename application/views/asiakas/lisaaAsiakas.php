<h1>Lisää asiakas</h1>

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
	<form class="form-horizontal" method="post" action="lisaaAsiakas">
		<!-- Text input-->
		<div class="control-group">
	 		<label for="en" class="control-label col-xs-2">Etunimi</label>
	  		<div class="col-xs-10">
	    		<input id="en" class="form-control" name="en" type="text" placeholder="Etunimi">
	  		</div>
	  	</div>

	  	<div class="control-group">
	 		<label for="sn" class="control-label col-xs-2">Sukunimi</label>
	  		<div class="col-xs-10">
	    		<input id="sn" class="form-control" name="sn" type="text" placeholder="Sukunimi">
	  		</div>
	  	</div>

	  	<div class="control-group">
	 		<label for="os" class="control-label col-xs-2">Osoite</label>
	  		<div class="col-xs-10">
	    		<input id="os" class="form-control" name="os" type="text" placeholder="Osoite">
	  		</div>
	  	</div>

	  	<div class="control-group">
	 		<label for="pn" class="control-label col-xs-2">Postinumero</label>
	  		<div class="col-xs-10">
	    		<input id="pn" class="form-control" name="pn" type="text" placeholder="Postinumero">
	  		</div>
	  	</div>

	  	<div class="control-group">
	 		<label for="pt" class="control-label col-xs-2">Postitoimipaikka</label>
	  		<div class="col-xs-10">
	    		<input id="pt" class="form-control" name="pt" type="text" placeholder="Postitoimipaikka">
	  		</div>
	  	</div>

	    <div class="control-group">
	 		<label for="puh" class="control-label col-xs-2">Puhelinnumero</label>
	  		<div class="col-xs-10">
	    		<input id="puh" class="form-control" name="puh" type="text" placeholder="Puhelinnumero">
	  		</div>
	  	</div>

	  	<div class="control-group">
	 		<label for="em" class="control-label col-xs-2">Sähköposti</label>
	  		<div class="col-xs-10">
	    		<input id="em" class="form-control" name="em" type="text" placeholder="Sähköposti">
	    	</div>
	  	</div>


	  	<div class="form-group">
	  		<div class="col-xs-offset-2 col-xs-10">
	  			<button type="submit" name="btnTallenna" class="btn btn-primary">Tallenna</button>
	  		</div>
	  	</div>
	 </form>
</div>

