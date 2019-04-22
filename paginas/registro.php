<div class="container">
    <br><!-- El legendario margen -->
    <form action="" method="post">
        <div class="form-row">
            <div class="col">
                <label class="control-label " for="nombrelibro">Nombre del Libro:</label>
                <input type="text" class="form-control" id="nomLibro" placeholder="¿Me entiendes?">
            </div>
            <div class="col">
                <label class="control-label " for="correlativo">Correlativo :</label>
                <input type="number" class="form-control" id="corre" placeholder="000563 (6 digítos)">  
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label class="control-label " for="asignatura">Asignatura</label>
                <select class="form-control" id="sel1">
                    <option value="000">000 (Generalidades)</option>
                    <option value="100">100 (Filosofía & psicología)</option>
                    <option value="200">200 (Religión)</option>
                    <option value="300">300 (Ciencias sociales)</option>
                    <option value="400">400 (Lenguas)</option>
                    <option value="500">500 (Ciencias naturales & matemáticas)</option>
                    <option value="600">600 (Tecnología (Ciencias aplicadas))</option>
                    <option value="700">700 (Las artes)</option>
                    <option value="800">800 (Literatura & retórica)</option>
                    <option value="900">900 (Geografía & historia)</option>
                </select>
            </div>
            <div class="col">
                <label class="control-label" for="autorN">Autor</label> 
                <input type="text" class="form-control" id="autorN" placeholder="J.J.Hernández">
            </div>
        </div>
        <div class="form-row">
            <div class="col">    
                <label class="control-label" >Nacionalidad</label>
                <input type="text" class="form-control" id="naci" disabled>
            </div>
            <div class="col">
                <label class="control-label" for="Cutter">Cutter</label> 
                <input type="text" class="form-control" id="cutt" disabled>    
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label class="control-label" for="pseu">pseudónimo</label>
                <input type="text" class="form-control" id="pseu" disabled>
            </div>
            <div class="col">
                <label class="control-label">&nbsp;</label>
                <button type="submit" class="btn btn-primary btn-block">GUARDAR</button>
            </div>
        </div>
    </form>
    <br><!-- El legendario margen -->
</div>