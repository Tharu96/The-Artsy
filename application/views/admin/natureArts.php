<?php include_once('includes/header.php'); ?>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="views/custom.css">
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>



<div class="card">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url() ?>assets/banner8.jpg" class="d-block w-100" alt="..." style="background-repeat: no-repeat; 
                                    width:100%;
                                    height:300px;
                                    background-position: center;
                                    background-size:cover;"
                        >
                        <div class="container" style="left: 50%;
                            position: absolute;
                            top: 45%;
                            transform: translate(-50%, -55%);
                            text-align: center;">
                                    
                            <h2 class="jumbotron-heading" style="color:#e6e6e6">The Art Marketplace</h2>
                            <h4 class=" lead " style="color:#e6e6e6">This is aimed at all artists (amateurs and professionals), art galleries and art lovers.<h4    >
                            <p class="lead "style="color:#e6e6e6" >Sign up to get updates on your favorites artists </p>
                            <p> 
                        </div>
                        
                    </div>
                    
                </div>
                
        </div>
    </div>

    <br>

    
    <div class="btn-group">
        <?php  echo anchor('welcome/loadAllArts', 'Gallery Home', ['class'=> 'btn btn-primary'] );?>
        <?php  echo anchor('welcome/loadClassicArts', 'Classic', ['class'=> 'btn btn-primary'] );?>
        <?php  echo anchor('welcome/loadRomanceArts', 'Romance', ['class'=> 'btn btn-primary'] );?>
        <?php  echo anchor('welcome/loadNatureArts', 'Nature', ['class'=> 'btn btn-primary active'] );?>
        <?php  echo anchor('welcome/loadPencilArts', 'Pencil-Arts', ['class'=> 'btn btn-primary'] );?>

    </div>

    <br>
    <br>
    <hr>

    
</div>

    <div class="row ">
    <?php if(!empty($arts)){ foreach( $arts as $art){ ?>

    
        <div class="col-lg-4">
            <div class="thumbnail" >
                
                <img  style="width:100px, height:100px "src="<?php echo base_url('uploads/'.$art->Path); ?>"/>

                

                <?php $this->session->set_userdata("UpdateID",$art->Art_Id); ?>
                <p> <?php echo $art->Art_Id?> </p>
                <p> <?php echo $art->Art_Name?> </p>
                <p> <?php echo $art->Artist_Name?> </p>
                <p> <?php echo $art->Category?> </p>
                <button type="button" class="btn btn-primary">View</button>
                <?php  echo anchor('welcome/updateArts', 'Update', ['class'=> 'btn btn-info  btn-sm'] ); ?>
                <?php  echo anchor('welcome/deleteArts', 'Delete', ['class'=> 'btn btn-danger  btn-sm'] ); ?>
            </div>
        </div>
    
    <?php } }else{ ?>
        <P>Image not found....</p>
    <?php } ?>      
    </div> 
            
<br><hr>

<?php include_once('includes/footer.php'); ?>