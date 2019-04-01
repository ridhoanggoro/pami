<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'product/add_edit'?>" method="post">
  <div class="box-body">
    <div class="row">          
		<div class="col-md-6">
		  <div class="form-group">
			<label for="status"> Product Status</label>
			<select name="status" id="" class="form-control">
			<option value="1" <?php echo (isset($productData->status) && $productData->status == '1')?'selected':''; ?> >Active</option>
			
			<option value="0" <?php echo (isset($productData->status) && $productData->status == '0')?'selected':''; ?> >Deleted</option>
			
			</select>
		  </div>
		</div>
	
		<div class="col-md-6">
		  <div class="form-group">
			<label for="">Product Name</label>
			<input type="text" name="name" value="<?php echo isset($productData->name)?$productData->name:'';?>" class="form-control" placeholder="Name">
		  </div>
		</div>
	
		<div class="col-md-6">
		  <div class="form-group">
			<label for="">Product Code</label>
			<input type="text" name="product_id" value="<?php echo isset($productData->product_id)?$productData->product_id:'';?>" class="form-control" placeholder="Product Code">
		  </div>
		</div>
					
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Product Type</label>
				<input type="text" name="type" value="<?php echo isset($productData->type)?$productData->type:'';?>" class="form-control" placeholder="Product Type">
			</div> 
		</div>
                      
        </div>
        <?php if(!empty($productData->product_id)){?>
        <input type="hidden"  name="prod_id" value="<?php echo isset($productData->product_id)?$productData->product_id:'';?>">        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="edit" value="edit" class="btn btn-success wdt-bg">Update</button>
        </div>
              <!-- /.box-body -->
        <?php }else{?>
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Save</button>
        </div>
        <?php }?>
      </form>