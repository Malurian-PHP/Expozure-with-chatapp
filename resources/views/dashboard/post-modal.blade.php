
<!--Add Post Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add to your feed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="" method="post" action="{{ url('post') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                        <div class="position-relative form-group">
                            <label for="exampleEmail11" class="">What do you want to say?</label>
                            <textarea name="body" id="exampleEmail11" placeholder="Compose something..." type="text" class="form-control" required></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
