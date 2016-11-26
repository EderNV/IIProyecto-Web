


<div class="container">
  <div class="form-group">
    <form class="form-horizontal" method="POST" action="{{action('PropiedadController@filtros')}}" >
      {{ csrf_field() }}
            
               <div class="form-group">
            <label class="col-sm-2 control-label" for="name"> Provincia</label>
            <div class="col-sm-10">
            <select class="form-control" name="ubicacion" >
                  <option value="Todas">Todas</option>
                 <option value="Alajuela">Alajuela</option>
                  <option value="Sj">San Jose</option>
                  <option value="h">Heredia</option>
                  <option value="c">Cartago</option>
                  <option value="p">Puntarenas</option>
                  <option value="l">Limon</option>
                  <option value="g">Guanacaste</option>

            </select><br></div></div>
        
            
                
                <div class="form-group">
            <label class="col-sm-2 control-label" >Precio mínimo</label>
            <div class="col-sm-10">
            <input class="form-control" type="number" name="pmin" min="0" value="0"  placeholder="Cualquiera" title="Por favor solo proporcione digitos">
            </div>
            
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" >Precio máximo</label>
            <div class="col-sm-10">
            <input class="form-control" type="number" name="pmax" min="0" value="1000000000" placeholder="Cualquiera" title="Por favor solo proporcione digitos">
            </div>
          
        </div>
            <div class="form-group">
            <label class="col-sm-2 control-label" for="minarea">Área mínima <span>(mts2)</span></label>
            <div class="col-sm-10">
            <input class="form-control" type="number" min="0" name="minarea"  placeholder="Cualquiera" title="Por favor solo proporcione digitos">
        </div> </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="maxarea">Área máxima <span>(mts2)</span></label>
            <div class="col-sm-10">
            <input class="form-control" type="number" min="0" name="maxarea"  placeholder="Cualquiera" title="Por favor solo proporcione digitos">
            </div>
        </div>
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" value="Buscar" class=" real-btn btn">
    </div>
    </form>
    <hr>
    </div>

  </div>
  @yield('filtro')

<script src="{{ URL::asset('js/jquery-3.0.0.js') }}"></script>
  <script src="{{ URL::asset('boostrap/js/bootstrap.js') }}"></script>


</body>

</html>