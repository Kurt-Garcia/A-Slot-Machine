<!-- --------Add Image----- -->

<div class="modal fade" id="addImage">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Image</h4>
                    <button type="button" class ="btn btn-outline-danger btn-sm"  data-dismiss="modal" aria-label="close">X</button>
                </div>
                <div class="modal-body">
                    <form action="image_add_edit.php" method="POST" enctype = "multipart/form-data">
                        <div class="form-group">
                            <label for="theme" style="float:left;">Theme</label>
                            <input type="text" class="form-control" name="theme" placeholder="@ex..halloween theme" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" style="float:left;">Image (<span class=" text-danger">@Recommended size: W 1600 x H 1200</span>)</label>
                            <input type="file" class="form-control" name="image"  required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" style="float:left;">is featured ?</label>
                            <select name="feature" id="" class="form-control" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" name="save" id="save" class="btn btn-success btn-sm btn-flat">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" aria-label>Cancel</button>
                    
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- update image -->
   
    
