<div id="analysis-content-wrapper">
    <div class="container-fluid">
        <h1>Page d'administration</h1>
        <p>gestion de contenu</p>
        <a href="<?php echo base_url() ;?>category/create" class="btn btn-success float-right">Nouveau category</a>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($categories as $category)
            {?>
                <tr>
                    <td><?php echo $category->id ;?></td> 
                    <td><?php echo $category->name ;?></td>
                    <td>
                    <a class="btn btn-primary text-white" href="<?php echo base_url() ;?>categorie/edit/<?php echo $category->id ;?>">Modifer</a>
                    <a class="btn btn-danger text-white" href="<?php echo base_url() ;?>categorie/delete/<?php echo $category->id ;?>">Supprimer</a>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>