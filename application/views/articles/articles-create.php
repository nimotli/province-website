
<div class="container">
    
<?php echo validation_errors(); ?>


    <h1>this is the article main page </h1>
    <?php echo form_open('article/store'); ?>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="title">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" id="body" placeholder="body"></textarea>
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" name="category" id="category">
            <option value="1">Category 1</option>
            <option value="2">Category 2</option>
        </select>
    </div>

    <div><input type="submit" value="Submit" /></div>

    </form>
</div>