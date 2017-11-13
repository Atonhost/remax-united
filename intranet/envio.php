<form class="form-horizontal" id="myform" action="action/add_agente.php" method="get" />
          
          <div class="control-group">
            <label class="control-label" for="usuario">Usuario</label>
            <div class="controls">
              <input  placeholder="usuario" type="text" name="usuario" id="usuario" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="password">Contraseña</label>
            <div class="controls">
              <input  placeholder="contraseña" type="password" name="password" id="password" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="nombre">Nombre</label>
            <div class="controls">
              <input  placeholder="nombre" type="text" name="nombre" id="nombre" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="apellidos">Apellidos</label>
            <div class="controls">
              <input  placeholder="Apellidos" type="text" name="apellidos" id="apellidos" class="input-xlarge" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="telefono">Telefono</label>
            <div class="controls">
              <input  placeholder="Telefono" type="text" name="telefono" id="telefono" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="celular">Celular</label>
            <div class="controls">
              <input  placeholder="Celular" type="text" name="celular" id="celular" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="email">Correo</label>
            <div class="controls">
              <input  placeholder="Correo" type="text" name="email" id="email" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="fileupload">Foto</label>
            <div class="controls">
             <span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Seleccionar imagen...</span>
              <input id="fileupload" type="file" name="files[]" data-url="../agentes/" >
              </span>
              <input   type="text" name="foto" id="foto" readonly/>

            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="estado">Estado</label>
            <div class="controls">
              <select id="estado">
                <option value="1">Activado</option>
                <option value="2">Desactivado</option>
              </select>
            </div>
          </div>
          <div class="space-4"></div>
          <div class="form-actions">
            <button class="btn btn-info" type="submit" > <i class="icon-ok bigger-110"></i> Guardar </button>
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset"> <i class="icon-undo bigger-110"></i> Limpiar </button>
          </div>
          <div class="hr"></div>
          </form>