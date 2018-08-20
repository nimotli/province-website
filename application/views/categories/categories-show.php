<div class="container">
    <h1>this is the article show page </h1>
    <div class="row">
    <?php 
            echo'
            <div class="col-12 ">
                <h3><a href="'.base_url().'article/show/'.$article->id.'">'.$article->title.'</a></h3>
                <small>'.$article->created.'</small>
                <p>'.$article->body.'</p>
            </div>
            ';
        
    ?>
    </div>
    

</div>