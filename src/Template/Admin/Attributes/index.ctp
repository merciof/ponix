 <section class="content white_background products_container">
  <div class="row">
   <div class="col-xs-12">
     <div class="products_container_top">
       <p class="products_container_title">Групи атрибутів</p>
       <div class="product_container_buttons">
                  <a href="<?= $this->Url->build(['controller' => 'attributes','action'=>'add']) ?>" class="product_container_buttons_add btn-primary">
           <i class="fa fa-plus"></i>
         </a>

         <div class="create__new__user">
            
           <button class="btn delete_form_checked  btn-dangeres save__changes__form__playlist" data-toggle="modal" data-target="#mediaGallery" >
                     <i class="fa fa-trash"></i>
          </button>
         </div>
         
       </div>
     </div>
     <div class="box">
      <div class="box-body table-responsive no-padding">
       <div class="box-header">

              
           </div>
              <table class="table table-bordered table-striped" id="example1">
                 <thead>
                <tr>
                 <th class="first-check">
                    <label class="custom-checkbox">
                          <input type="checkbox" id="delete-all">
                          <span class="checkmark"></span>
                    </label>
                  </th>
                  <th>ID</th>
                  <th>Ім'я</th>
                  <th>Дії</th>
                </tr>
                </thead>
                <tbody>
                <?php   foreach ($attributes as $attribute): ?>
                  <tr>
                     <td class="first-check">
                       <label class="custom-checkbox">
                          <input type="checkbox" id="delete-all" value="<?= $attribute->id ?>" class='delete_item'>
                          <span class="checkmark"></span>
                    </label>
                    </td>
                    <td><?= $attribute->id ?></td>
                    <td><?= $attribute->name ?></td>
                    <td class='table__flex'>
                      <?php
                        echo   $this->Html->link('<i class="fa fa-pencil"></i>', ['action' => 'edit', $attribute->id], ['class'=>'btn change__user','escape' => false]);
                         echo "<button class='btn  delete__user' data-toggle='modal' data-target='#mediaGallery_".$attribute->id."'><i class='fa fa-trash'></i></button>"; ?>
                    </td>
                    </tr>
                <?php endforeach; ?>
              </tbody>
              </table>
            </div>
             <?php
              $params = $this->Paginator->params();
              if ($params['pageCount'] > 1): ?>
                <ul class="pagination pagination-sm">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
          <?php endif; ?>
          </div>
        </div>
      </div>


<?php   foreach ($attributes as $attribute): ?>

  <div class="modal fade" id="mediaGallery_<?= $attribute->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabels" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="gallery-box form__inline" style="text-align: center;">
          <h2 style="text-align: center;">Ви хочете видалити атрибут <?= $attribute->name ?> ?</h2>
          <button class="close_modal_form close__modal" >Ні</button>
           <?= $this->Form->create('Delete',['url'   => array(
               'controller' => 'attributes','action' => 'delete/'.$attribute->id
           )])  ?>
           <div class="delete_form_checked_inputs"> </div>
           <?=  $this->Form->submit('Так ',['class'=>'btn  btn-dangeres save__changes__form__playlist','style'=>'margin-top:0px;margin-left:auto;margin-right:auto;']); ?>
           <?=   $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>


<div class="modal fade" id="mediaGallery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabels" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="gallery-box form__inline" style="text-align: center;">
          <h2 style="text-align: center;">Ви хочете видалити групи атрибутів ?</h2>
          <button class="close_modal_form close__modal" >Ні</button>
           <?= $this->Form->create('Delete',['url'   => array(
               'controller' => 'attributes','action' => 'deletechecked'
           )])  ?>
           <div class="delete_form_checked_inputs"> </div>
           <?=  $this->Form->submit('Так ',['class'=>'btn  btn-dangeres save__changes__form__playlist','style'=>'margin-top:0px;margin-left:auto;margin-right:auto;']); ?>
           <?=   $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>
</div>
    </section>
  <script>

<?php $this->Html->script('admin/jquery.dataTables.min.js', ['block' => 'scriptBottom']); ?>
<?php $this->Html->script('admin/dataTables.bootstrap.min.js', ['block' => 'scriptBottom']); ?>
<?php echo $this->Html->scriptStart(['block' => true]); ?>
 
<?php echo $this->Html->scriptEnd(); ?>
</script>