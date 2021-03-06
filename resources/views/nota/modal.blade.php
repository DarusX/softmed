<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog"  id="modal-delete-{{$nota->id}}">
	
	{{Form::Open(array('action'=>array('NotaController@destroy',$nota->id),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar Nota</h4>
			</div>
			<div class="modal-body">
				<p>¿Desea realmente eliminar la nota?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>