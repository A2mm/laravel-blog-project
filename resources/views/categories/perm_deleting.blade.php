
            <div class="panel panel-default">
                
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/category/perm/deleting">
                        {{ csrf_field() }}

                        <input type="hidden" name="category_id" value="{{$category->id}}">

                        <h4>Are you sure you wanna delete this category permanently?</h4>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="button" class="btn btn-default cancel" data-dismiss="modal"> Cancel </button> 
                                <button type="submit" class="btn btn-danger"> Delete permanently </button> 
                            </div>
                        </div>

                    </form>
                </div>
            </div>

