
            <div class="panel panel-default">
                
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/post/perm/deleting">
                        {{ csrf_field() }}

                        <input type="hidden" name="post_id" value="{{$post->id}}">

                        <h4>Are you sure you wanna delete this post permanently?</h4>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="button" class="btn btn-default cancel" data-dismiss="modal"> Cancel </button> 
                                <button type="submit" class="btn btn-danger"> Delete permanently </button> 
                            </div>
                        </div>

                    </form>
                </div>
            </div>

