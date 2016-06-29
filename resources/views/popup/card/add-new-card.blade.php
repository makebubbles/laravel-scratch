<div id="addNewCard" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add New Card</h4>
        </div>
        <div class="modal-body">
            <form id="addNewCardForm" method="POST" action="/cards">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Card title" autofocus/>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" form="addNewCardForm">Save</button>
        </div>
    </div>
    </div>
</div>
