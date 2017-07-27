<!-- Formularios Modales--> 
      <div id="modal1" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Add Condition</h4>
                </div>
                <div class="modal-body">

                    <form class="panel form-horizontal">
                    <div class="row form-group">
                        <label class="col-sm-4 control-label">Condition:</label>
                        <div class="col-sm-8">
                            <input type="text" id="idcondition" hidden="true">
                            <select id="condition"  class="form-control">
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-4 control-label">Treatment:</label>
                        <div class="col-sm-8">
                            <input type="text" id="treatment" class="form-control">
                        </div>
                    </div>

               </form>
                </div>

                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Close" />
                    <input id="save_medinfo" type="button" class="btn btn-primary" value="Save" />
                </div>
            </div> <!-- / .modal-content -->
        </div> <!-- / .modal-dialog -->
    </div> <!-- / .modal -->
<!-- / Small modal -->
