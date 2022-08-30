<div class="modalfade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Delete Product Data </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>

            </div>
            
            <form action="{{url('/delete',$prod->id)}}" method="POST">
                <div class="modal-body">
                    @csrf
                    @method('Delete')
                    <h5 class="text-center">Are you sure want to delete {{ $prod->name}} ?</h5>
                    <input type="text" id="deleting_id" name="delete_product_id" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Yes, Delete Project</button>
                </div>
            </form> 

        </div>

    </div>
</div>


