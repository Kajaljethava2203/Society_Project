<h2> Add Report</h2>

<form action="<?php echo BASEURL ?>/profile/reporting" method="post">
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Your Name"
value="<?php if(!empty($data['name'])): echo $data['name']; endif?>">
<div class="error">
<?php if (!empty($data['nameError'])): echo $data['nameError']; endif;?>
</div>
</div>
<div class="form-group">
<input type="number" name="contact" class="form-control" placeholder="contact"
value="<?php if(!empty($data['contact'])): echo $data['contact']; endif?>">
<div class="error">
<?php if (!empty($data['contactError'])): echo $data['contactError']; endif;?>
</div>
</div>
<div class="form-group">
<input type="number" name="flat_no" class="form-control" placeholder="flat number"
value="<?php if(!empty($data['flat_no'])): echo $data['flat_no']; endif?>">
<div class="error">
<?php if (!empty($data['flatnoError'])): echo $data['flatnoError']; endif;?>
</div>
</div>
<div class="form-group">
<input type="text" name="title" class="form-control" placeholder="title"
value="<?php if(!empty($data['title'])): echo $data['title']; endif?>">
<div class="error">
<?php if (!empty($data['titleError'])): echo $data['titleError']; endif;?>
</div>
</div>
<div class="form-group">
<input type="text" name="description" class="form-control" placeholder="description"
value="<?php if(!empty($data['description'])): echo $data['description']; endif?>">
<div class="error">
<?php if (!empty($data['descriptionError'])): echo $data['descriptionError']; endif;?>
</div>
</div>

<div class="form-group">
<input type="submit" class="btn btn-primary" value="Add Report">
</div>

</form>
