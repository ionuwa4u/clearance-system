<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $this->title;?></h1>
         </div>
        </div>
    <div class="row">
            <div class="col-md-12">
            <?php 
  
     if($this->session->flashdata('msg') != ''){
        echo '
        <div class="grid grid-1"> 
            <div class="alert alert-danger">'.$this->session->flashdata('msg').'</div>
        </div>';
    }
    if($this->session->flashdata('success') != ''){
        echo '
        <div class="grid grid-1">
            <div class="alert alert-success">'.$this->session->flashdata('success').'</div>
        </div>';

    } 
    
        ?>
                <form name="create_accout" id="create_account" action="<?= base_url('clearance/apply');?>" method="POST">
                    <div class="col-md-12 control-group form-group">
                        <div class="controls">
                            <input type="text" name="name" class="form-control" id="name" required data-validation-required-message="Please Enter Your Fullname." placeholder="Enter Your Fullname (Surname First)">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="col-md-6 control-group form-group">
                        <div class="controls">
                            <input type="text" name="pin" class="form-control" id="text" required data-validation-required-message="Please Enter Your ID Number (Registration Number For Students)" placeholder="Enter Your ID Number (Registration Number For Students)">
                        </div>
                    </div>
                    <div class="col-md-6 control-group form-group">
                        <div class="controls">
                            <input type="tel" name="phone" class="form-control" id="phone" required data-validation-required-message="Please Enter Your Phone Number." placeholder="Enter Your Phone Number">
                        </div>
                    </div>
                    <div id="success"></div>
                    <div class="col-md-6 control-group form-group">
                        <div class="controls">
                    <button type="submit" class="btn btn-primary">Apply</button>
                    </div>
                </form>
            </div>
</div>