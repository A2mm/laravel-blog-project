
            <div class="panel panel-default">
                
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/category/temp/deleting">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="category_id" value="{{$category->id}}">

                        <h4>Are you sure you wanna delete this category temporarily?</h4>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="button" class="btn btn-default cancel" data-dismiss="modal"> Cancel </button> 
                                <button type="submit" class="btn btn-danger"> Delete temporarily </button> 
                            </div>
                        </div>

                    </form>
                    <p class="hint">Hint. you can resore temporarily deleted categories again from dashboard trashed categories section</p>
                </div>
            </div>

