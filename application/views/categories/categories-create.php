
<div class="container">
    
<?php echo validation_errors(); ?>


    <h1>this is the article main page </h1>
    <?php echo form_open('categorie/store'); ?>
    <div class="form-group">
        <label for="title">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="name">
    </div>

    <div><input type="submit" value="Submit" /></div>

    </form>
</div>