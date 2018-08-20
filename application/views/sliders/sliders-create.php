
<div class="container">
    
<?php echo validation_errors(); ?>


    <h1>this is the slider main page </h1>
    <?php echo form_open('slider/store'); ?>
    <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" >
        </div>
        <div class="form-group">
            <label for="title">Description</label>
            <textarea type="text" name="description" class="form-control" id="description"></textarea>
        </div>
        
    <div><input type="submit" value="Submit" /></div>

    </form>
</div>