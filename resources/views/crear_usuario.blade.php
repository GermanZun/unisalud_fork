@extends('layouts.app')

@section('title', 'crear_usuario')

@section('content')

<form> 
 
        <div class="row mt-5">
            <div class="col-sm-6">
                 <div class="card">
                    <div class="card-body">
                         <h5 class="card-title">NACIONAL</h5>

                        <div class="form-row mt-3">

    	                    <div class="form-group col-md-7">
    			                    <label for="inputEmail4">RUT</label>
    			                    <input type="email" class="form-control" id="inputEmail4" placeholder="ingrese el rut">
    	                    </div>
    	                    <div class="form-group col-md-1">
      			                <label for="inputPassword4">Dv</label>
      			                <input type="password" class="form-control" id="inputPassword4" placeholder="Dv">
    	                    </div>
		
    	                    <div class="form-group col-md-4">
				                <label for="inputEmail4">&nbsp;</label>
				                <button type="button" class="btn btn-primary form-control">Fonasa</button>
   		                    </div>
	                    </div>

       
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                         <h5 class="card-title">EXTRANJERO</h5>

                         <div class="form-row mt-3">

    	                    <div class="form-group col-md-6">
    			                    <label for="inputEmail4">Tipo de Documento</label>
    			                        <select id="inputState" class="form-control">
        			                        <option selected>DNI</option>
        			                        <option>Pasaporte</option>
                                            <option>Acta</option>
                                            <option>Otro</option>
     			                         </select>
    			                    

    	                    </div>
    	                    <div class="form-group col-md-6">
      			                <label for="inputPassword4">N° Documento</label>
      			                <input type="password" class="form-control" id="inputPassword4" placeholder="Ingresar numero de documento">
    	                    </div>
	                    </div>

                     </div>
                </div>
            </div>
        </div>

        <div class="form-row mt-3">

            <div class="form-group col-md-4">
                <label for="inputEmail4">Apellido Paterno</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="ingrese el apellido paterno">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Apellido Materno</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="ingrese el apellido materno">
            </div>
            <div class="form-group col-md-4">
                 <label for="inputEmail4">Nacionalidad</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Ingrese Nacionalidad">
            </div>
        </div>


        <div class="form-row">

		    <div class="form-group col-md-5">
			    <label for="inputEmail4">Fecha de Nacimiento</label>
			    <input type="date" class="form-control" id="inputEmail4" placeholder="Ingrese Fecha Nacimiento">
		    </div>

            <div class="form-group col-md-2">
    			<label for="inputEmail4">Sexo</label>
    			<select id="inputState" class="form-control">
        		    <option selected>Femenino</option>
        			<option>Maculino</option>
                    <option>Otro</option>
     			</select>
    	     </div>

		</div>
        <!--datos de direccion-->

        <div class="form-row">
            <h5 class="card-title col-md-12">DIRECCIÓN</h5>
        
        <div class="form-group col-md-3">
    			<label for="inputEmail4">Via de acceso</label>
    			<select id="inputState" class="form-control">
        		    <option selected>Calle</option>
        			<option>Avenida</option>
                    <option>Pasaje</option>
                    <option>Camino</option>
     			</select>
    	     </div>
		    <div class="form-group col-md-4">
			    <label for="inputEmail4">Direccion</label>
			    <input type="direccion" class="form-control" id="inputEmail4" placeholder="Ingrese direccion">
		    </div>
            <div class="form-group col-md-1">
			    <label for="inputEmail4">Número</label>
			    <input type="direccion" class="form-control" id="inputEmail4" placeholder="Número">
		    </div>
            <div class="form-group col-md-1">
			    <label for="inputEmail4">Dpto.</label>
			    <input type="direccion" class="form-control" id="inputEmail4" placeholder="N° Dpto.">
		    </div>
            <div class="form-group col-md-3">
			    <label for="inputEmail4">Población/Villa</label>
			    <input type="direccion" class="form-control" id="inputEmail4" placeholder="Población/Villa">
		    </div>

		</div >

    <!--fin datos de direccion-->

    <!--datos de contacto-->
        <div class="form-row">
            <h5 class="card-title col-md-12">Contacto</h5>

		    <div class="form-group col-md-4">
			    <label for="inputEmail4">E-mail</label>
			    <input type="e-mail" class="form-control" id="inputEmail4" placeholder="Ingrese e-mail">
		    </div>
            <div class="form-group col-md-2">
    			<label for="inputEmail4">Tipo</label>
    			<select id="inputState" class="form-control">
        		    <option selected>Personal</option>
                    <option>Trabajo</option>
     			</select>
    	     </div>
            <div class="form-group col-md-4">
			    <label for="inputEmail4">Telefono</label>
			    <input type="telefono" class="form-control" id="inputEmail4" placeholder="Teléfono">
		    </div>
            <div class="form-group col-md-2">
    			<label for="inputEmail4">Tipo</label>
    			<select id="inputState" class="form-control">
        		    <option selected>Personal</option>
                    <option>Trabajo</option>
     			</select>
    	     </div>

		</div >
    <!--fin datos de contacto-->

    <!--prevision-->
    <div class="form-row">
        
        <div class="form-group col-md-5">
    			<label for="inputEmail4">Prevision</label>
    			<select id="inputState" class="form-control">
        		    <option selected>Fonasa</option>
        			<option>Isapre</option>
     			</select>
    	</div>
        <div class="form-group col-md-5">
    			<label for="inputEmail4">Tramo</label>
    			<select id="inputState" class="form-control">
        		    <option selected>A</option>
        			<option>B</option>
                    <option>C</option>
                    <option>D</option>
     			</select>
    	</div>
        <div class="form-group col-md-2">
				    <label for="inputEmail4">&nbsp;</label>
				    <button type="button" class="btn btn-primary form-control">Fonasa</button>
   		</div>

	</div >

    <!--fin prevision-->


</form>


@endsection

@section('custom_js')

@endsection