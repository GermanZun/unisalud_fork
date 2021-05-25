@extends('layouts.app')

@section('title', 'traspaso_bloqueos')

@section('content')

<form>

    <div class="form-row">
        
        <div class="form-group col-md-4">
    			<label for="inputEmail4">Especialidad</label>
    			<select id="inputState" class="form-control">
        		    <option selected>Traumatología</option>
        			<option>Cardiología</option>
                    <option>Ginecología</option>
                    <option>Neurología</option>
                    
     			</select>
    	</div>
        <div class="form-group col-md-4">
    			<label for="inputEmail4">Funcionario</label>
    			<select id="inputState" class="form-control">
        		    <option selected>Macarena Lopez</option>
        			<option>Daniel Suarez</option>
                    <option>Jorge Miranda</option>
                    <option>Maria Isabel Araya</option>
     			</select>
    	</div>
        <div class="form-group col-md-3">
			    <label for="inputEmail4">Fecha </label>
			    <input type="date" class="form-control" id="inputEmail4" placeholder="Ingrese Fecha">
		</div>
        <div class="form-group col-md-1">
				<label for="inputEmail4">&nbsp;</label>
				<button type="button" class="btn btn-primary form-control">Buscar</button>
   		</div>

	</div>  
	<!--tabla doctor-->                                                                                                               
	<table class="table table-hover">
  		<thead>
    		<tr class="table-info">
      			<th scope="col">Dr JORGE MIRANDA</th>
      			<th scope="col">HORA</th>
      			<th scope="col">USUARIO</th>
    		</tr>
  		</thead>

  		<tbody>
    		<tr>
      			<th scope="row"></th>
      			<td>8:00</td>
      			<td>
				  <label class="form-check-label" for="invalidCheck2">Cristian Carpio</label>
      				<input class="form-check-input col-md-1" type="checkbox" value="" id="invalidCheck2" required> 
				</td>
      			
    		</tr>
   		 	<tr>
      			<th scope="row"></th>
      			<td>9:00</td>
      			<td>
					<label class="form-check-label" for="invalidCheck2">Cristian Carpio</label>
      				<input class="form-check-input col-md-1" type="checkbox" value="" id="invalidCheck2" required>
				</td>
      			
    		</tr>
    		<tr>
      			<th scope="row"></th>
      			<td>10:00</td>
				<td>
					
					<label class="form-check-label" for="invalidCheck2">Mariano Carrasco</label>
      				<input class="form-check-input col-md-1" type="checkbox" value="" id="invalidCheck2" required>
				</td>
      			
    		</tr>
			<tr>
      			<th scope="row"></th>
      			<td>11:00</td>
				<td>
					 <label class="form-check-label" for="invalidCheck2">Paciente 3</label>
      				 <input class="form-check-input col-md-1" type="checkbox" value="" id="invalidCheck2" required>
				</td>
      			
    		</tr>
		</tbody>
	</table>
	<!--fin tabla doctor-->
	<div class="form-row">
        
        <div class="form-group col-md-3">
    			<label for="inputEmail4">Especialidad</label>
    			<select id="inputState" class="form-control">
        		    <option selected>Traumatología</option>
        			<option>Cardiología</option>
                    <option>Ginecología</option>
                    <option>Neurología</option>
                    
     			</select>
    	</div>
        <div class="form-group col-md-3">
    			<label for="inputEmail4">Funcionario</label>
    			<select id="inputState" class="form-control">
        		    <option selected>Macarena Lopez</option>
        			<option>Daniel Suarez</option>
                    <option>Jorge Miranda</option>
                    <option>Maria Isabel Araya</option>
     			</select>
    	</div>
       	<!--CHECK-->
		<div class="form-group col-md-2 mt-5 ml-4">
			
    		<input type="checkbox" class="form-check-input" id="exampleCheck1" >
			<label class="form-check-label" for="exampleCheck1">Proxima</label>
  		</div>
		<!--CHECK-->

        <div class="form-group col-md-2">
			    <label for="inputEmail4">Fecha </label>
			    <input type="date" class="form-control" id="inputEmail4" placeholder="Ingrese Fecha">
		</div>
        <div class="form-group col-md-1">
				<label for="inputEmail4">&nbsp;</label>
				<button type="button" class="btn btn-primary form-control">Buscar</button>
   		</div>
   </div>
	<!--anterior,siguiente,traspasar-->
	<div class="form-row">
        
        <div class="form-group col-md-2">
    		    <button type="button" class="btn btn-outline-primary">ANTERIOR <<</button>
                    
     			</select>
    	</div>
        <div class="form-group col-md-2">
    			<button type="button" class="btn btn-outline-primary">SIGUIENTE >></button>
    	</div>
        <div class="form-group col-md-2">
				<button type="button" class="btn btn-outline-primary">TRASPASAR</button>
   		</div>

	</div>  
	<!-- fin anterior,siguiente,traspasar-->




   <!--tabla agenda-->

   <table class="table table-hover">
  		<thead>
    		<tr class="table-info">
      			<th scope="col">JUEVES 27 DE MAYO</th>
      			<th scope="col"></th>
      			<th scope="col"></th>
				  <th scope="col">CUPOS</th>
				  <th scope="col">SOBRE CUPO</th>
				  <th scope="col">ESTADO</th>
    		</tr>
  		</thead>

  		<tbody>
    		<tr>
      			<th scope="row">Dra Macarena Lopez</th>
      			<td>
				  <label class="form-check-label" for="invalidCheck2">8:00</label>
				</td>
				  <td>
				  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required> 
				  </td>
				  <td>2</td>
				  <td>1</td>
				  <td>DISPONIBLE</td>
      		
      			
    		</tr>
   		 	<tr>
      			<th scope="row">Dr. Daniel Suarez</th>
      			<td></td>
      			<td>
				    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required> 
					<label class="form-check-label" for="invalidCheck2"></label>
					
				</td>
				<td>3</td>

				  <td>0</td>
				  <td>DISPONIBLE</td>
      			
    		</tr>
			<thead>
    		<tr class="table-info">
      			<th scope="col">VIERNES 28 DE MAYO</th>
      			<th scope="col"></th>
      			<th scope="col-md-1"></th>
				  <th scope="col" >CUPOS</th>
				  <th scope="col">SOBRE CUPO</th>
				  <th scope="col">ESTADO</th>
    		</tr>
  		</thead>

  		<tbody>
    		<tr>
      			<th scope="row">Dr. Jorge Lopez</th>
      			<td>
				  <label class="form-check-label" for="invalidCheck2">9:00</label>
				  
				  </td>
				  <td>
				  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required> 
				  </td>
				  <td>3</td>
				  <td>1</td>
				  <td>DISPONIBLE</td>
      		
      			
    		</tr>
   		 	<tr>
      			<th scope="row">Dr. Daniel Suarez</th>
      			<td></td>
      			<td>
				    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required> 
					<label class="form-check-label" for="invalidCheck2"></label>
					
				</td>
				<td>3</td>
				  <td>0</td>
				  <td>DISPONIBLE</td>
      			
    		</tr>
    		
		</tbody>
	</table>

  


</form>




@endsection

@section('custom_js')

@endsection