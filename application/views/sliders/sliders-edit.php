
<div class="container">
    
    <?php echo validation_errors(); ?>
    
    
        <h1>this is the slider main page </h1>
        <?php echo form_open('slider/update','',array('id'=>$slider->id)); ?>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="<?php echo $slider->title ?>">
        </div>
        <div class="form-group">
            <label for="title">Description</label>
            <input type="text" name="description" class="form-control" id="description" value="<?php echo $slider->description ?>">
        </div>
    
        <div><input type="submit" value="Submit" /></div>
    
        </form>
    </div>