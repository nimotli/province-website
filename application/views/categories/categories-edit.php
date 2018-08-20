
<div class="container">
    
    <?php echo validation_errors(); ?>
    
    
        <h1>this is the category main page </h1>
        <?php echo form_open('categorie/update','',array('id'=>$category->id)); ?>
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="<?php echo $category->name ?>">
        </div>
    
        <div><input type="submit" value="Submit" /></div>
    
        </form>
    </div>