<h2> Update Report</h2>

<form action="<?php echo BASEURL ?>/profile/updatereport" method="post">
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Your name"
value="<?php echo $data['data']->name; ?>">
<div class="error">
<?php if (!empty($data['nameError'])): echo $data['nameError']; endif;?>
</div>
</div>
<div class="form-group">
<input type="number" name="contact" class="form-control" placeholder="contact"
value="<?php echo $data['data']->contact ?>">
<div class="error">
<?php if (!empty($data['contactError'])): echo $data['contactError']; endif;?>
</div>
<input type="hidden" name="hiddenId" value="<?php echo $data['data']->id;?>">
</div>
<div class="form-group">
<input type="number" name="flat_no" class="form-control" placeholder="Flat number"
value="<?php echo $data['data']->flat_no; ?>">
<div class="error">
<?php if (!empty($data['nameError'])): echo $data['nameError']; endif;?>
</div>
</div>
<div class="form-group">
<input type="text" name="title" class="form-control" placeholder="Title"
value="<?php echo $data['data']->title; ?>">
<div class="error">
<?php if (!empty($data['titleError'])): echo $data['titleError']; endif;?>
</div>
</div>

<div class="form-group">
<input type="text" name="description" class="form-control" placeholder="Description"
value="<?php echo $data['data']->description; ?>">
<div class="error">
<?php if (!empty($data['descriptionError'])): echo $data['descriptionError']; endif;?>
</div>
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" value="Update Report">
</div>

</form>