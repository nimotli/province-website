<div id="analysis-content-wrapper">
    <div class="container-fluid">
        <h1>Page d'administration</h1>
        <p>gestion de contenu</p>
        <a href="<?php echo base_url() ;?>article/create" class="btn btn-success float-right">Nouveau article</a>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Contenue</th>
                    <th>Categorie</th>
                    <th>Date de creation</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($articles as $article)
            {?>
                <tr>
                    <td><?php echo $article->id ;?></td> 
                    <td><?php echo $article->title ;?></td>
                    <td><?php echo substr($article->body,0,150) ;?></td>
                    <td><?php echo $article->category ;?></td>
                    <td><?php echo $article->created ;?></td>
                    <td>
                    <a class="btn btn-primary text-white" href="<?php echo base_url() ;?>article/edit/<?php echo $article->id ;?>">Modifer</a>
                    <a class="btn btn-danger text-white" href="<?php echo base_url() ;?>article/delete/<?php echo $article->id ;?>">Supprimer</a>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>