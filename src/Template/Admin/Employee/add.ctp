<div class="row">

      <div class="col-md-6">
        <div class="playlist__managment__item">
          <p class="playlist__managment__item__title">
         
            
            <?= __('New US add') ?>
          </p>
     <?= $this->Form->create($_user)  ?>
       <div class="playlist__managment--item">
  <div class="playlist__managment--item__left">
    <p>Firstname </p>
  </div>
  <div class="playlist__managment--item__right">
    <div class="playlist--item--sub">
      <?=  $this->Form->control('firstname',array('label' => false,'class'=>'form-control','min'=>6));?>
    </div>
  </div>
</div>

 <div class="playlist__managment--item">
  <div class="playlist__managment--item__left">
    <p>Lastname </p>
  </div>
  <div class="playlist__managment--item__right">
    <div class="playlist--item--sub">
      <?=  $this->Form->control('lastname',array('label' => false,'class'=>'form-control','min'=>6));?>
    </div>
  </div>
</div>   

<div class="playlist__managment--item">
  <div class="playlist__managment--item__left">
    <p>email </p>
  </div>
  <div class="playlist__managment--item__right">
    <div class="playlist--item--sub">
   <?=  $this->Form->control('mail',['type'=>'email','label' => 'Email', 'class'=>'form-control']); ?>
    </div>
  </div>
</div>  

<div class="playlist__managment--item">
  <div class="playlist__managment--item__left">
    <p>password </p>
  </div>
  <div class="playlist__managment--item__right">
    <div class="playlist--item--sub">
     <?=  $this->Form->control('new_password',['type'=>'password','label' => 'Password', 'class'=>'form-control']); ?>
    </div>
  </div>
</div>  

<div class="playlist__managment--item">
  <div class="playlist__managment--item__left">
    <p>Plans </p>
  </div>
  <div class="playlist__managment--item__right">
    <div class="playlist--item--sub">
     <select name="program_id" id="" class="form-control" required="true">
       <option value="0">Choose Plan</option>
       <?php foreach ($programs as $key => $value): ?>
         <option value="<?= $value['id'] ?>"><?= $value['title'] ?></option>
       <?php   endforeach; ?>
     </select>
    </div>
  </div>
</div>  

<div class="playlist__managment--item">
  <div class="playlist__managment--item__left">
    <p>Adress </p>
  </div>
  <div class="playlist__managment--item__right">
    <div class="playlist--item--sub">
     <?=  $this->Form->control('address',['type'=>'text','label' => 'Password', 'class'=>'form-control']); ?>
    </div>
  </div>
</div>  

<div class="playlist__managment--item">
  <div class="playlist__managment--item__left">
    <p>City </p>
  </div>
  <div class="playlist__managment--item__right">
    <div class="playlist--item--sub">
     <?=  $this->Form->control('city',['type'=>'text','label' => 'Password', 'class'=>'form-control']); ?>
    </div>
  </div>
</div>  

<div class="playlist__managment--item">
  <div class="playlist__managment--item__left">
    <p>Zone </p>
  </div>
  <div class="playlist__managment--item__right">
    <div class="playlist--item--sub">
     <?=  $this->Form->control('zone',['type'=>'text','label' => 'Password', 'class'=>'form-control']); ?>
    </div>
  </div>
</div>  

<div class="playlist__managment--item">
  <div class="playlist__managment--item__left">
    <p>Phone </p>
  </div>
  <div class="playlist__managment--item__right">
    <div class="playlist--item--sub">
     <?=  $this->Form->control('phone',['type'=>'text','label' => 'Password', 'class'=>'form-control']); ?>
    </div>
  </div>
</div>  

<div class="playlist__managment--item">
  <div class="playlist__managment--item__left">
    <p>Business </p>
  </div>
  <div class="playlist__managment--item__right">
    <div class="playlist--item--sub">
     <?=  $this->Form->control('business',['type'=>'text','label' => 'Password', 'class'=>'form-control']); ?>
    </div>
  </div>
</div>  

<div class="playlist__managment--item">
  <div class="playlist__managment--item__left">
    <p>Authoziration </p>
  </div>
  <div class="playlist__managment--item__right">
    <div class="playlist--item--sub">

<?=  $this->Form->control('allow_write', ['type' => 'checkbox','label' => 'Write']); ?>
<?=  $this->Form->control('allow_edit', ['type' => 'checkbox','label' => 'Edit']); ?>
<?=  $this->Form->control('allow_delete', ['type' => 'checkbox','label' => 'Delete']); ?>
    </div>
  </div>
</div> 


<?=  $this->Form->submit('Save ',['class'=>'btn  btn-primary save__changes__form__playlist']); ?>
     <?=   $this->Form->end() ?>
        </div>
      </div>
      <div class="col-md-6">

      </div>  
</div>