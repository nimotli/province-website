<div id="analysis-content-wrapper">
    <div class="container-fluid">
        <h1>Page d'administration</h1>
        <p>gestion de contenu</p>
        <a href="<?php echo base_url() ;?>slider/create" class="btn btn-success float-right">Nouveau element slider</a>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>etat</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($sliders as $slider)
            {?>
                <tr>
                    <td><?php echo $slider->id ;?></td> 
                    <td><?php echo $slider->title ;?></td>
                    <td><?php echo $slider->description ;?></td>
                    <td><?php if($slider->description == 0) echo 'non active';else echo 'active';  ?></td>
                    <td>
                    <a class="btn btn-secondary text-white" href="<?php echo base_url() ;?>slider/editimg/<?php echo $slider->id ;?>">Modifer Image</a>
                    <a class="btn btn-primary text-white" href="<?php echo base_url() ;?>slider/edit/<?php echo $slider->id ;?>">Modifer</a>
                    <a class="btn btn-danger text-white" href="<?php echo base_url() ;?>slider/delete/<?php echo $slider->id ;?>">Supprimer</a>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>