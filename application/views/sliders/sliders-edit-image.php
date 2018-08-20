
<div class="container">
    
    <?php echo validation_errors(); ?>
    
    
        <h1>Changing the image display with this slider instance</h1>
        <div class="row border">
            <div class="col-md-4 ">
                <img src="<?php echo base_url();?>uploads/slider/<?php echo $slider->image; ?>" alt="" class="img-thumbnail">
            </div>
            <div class="col-md-8 ">
            <?php echo form_open_multipart('slider/updateImg','',array('id'=>$slider->id)); ?>
                <div class="form-group">
                    <label for="title">Image</label>
                    <input type="file" class="form-control" name="userfile" size="20" />
                </div>
                <div><input class="btn btn-primary" type="submit" value="Submit"/></div>
            </form>
            </div>
        </div>
        
    </div>