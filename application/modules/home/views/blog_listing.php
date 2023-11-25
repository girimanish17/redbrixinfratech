<section class="about-main d-flex align-items-center justify-content-center">
    <div class="inner-page-title">
      <h1>Blog</h1>
      <p>Lorem ipsum dolor sit amet </p>
    </div>
  </section>


 
</section>
 
 <section class="blog details">
<div class="container">

  
  <div class="row">
    <div class="leftcolumn">
	<?php if($results){ foreach($results as $val){ ?>
      <div class="card">
        <h2><?php echo $val->title?></h2>
        <h5>by Admin, <?php echo date('d F Y',strtotime($val->date))?></h5>
        <img src="<?php echo base_url('uploads/blogs/'.$val->image);?>" alt="" class="img-fluid">
        <p><?php echo $val->description?></p>
      </div>
	<?php }} ?>
      
    </div>
    <div class="rightcolumn">
     
      <div class="card">
	  <?php //print_r($pblog);?>
        <h3>Popular Post</h3><?php if($pblog){ foreach($pblog as $bval){?>
        <a href="<?php echo base_url('home/blog_listing/'.$bval->slug);?>"><img src="<?php echo base_url('uploads/blogs/'.$bval->image);?>" alt="" class="img-fluid"></a>
        <br>
		<?php }} ?>
       <!-- <a href="#"><img src="<?php echo base_url()?>assets/asset2/images/blogpic.jpg" alt="" class="img-fluid"></a>
        <br>
        <a href="#"><img src="<?php echo base_url()?>assets/asset2/images/blogpic.jpg" alt="" class="img-fluid"></a>
        <br>-->
      </div>
      <!--<div class="card">
        <h3>Follow Me</h3>
        <p>Some text..</p>
      </div>-->
    </div>
  </div>
  
 
</div>
 </section>


  

  


  

  



   <section class="cta-section">
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="call-to-action-inner call-to-action-inner ltn__secondary-bg position-relative">
              <div class="coll-to-info text-color-white">
                <h1>Ready to Discover? Dive into RedBrix Listings Now</h1>
                <p>Explore an array of residential, commercial, and plot options at Redbrix. Find your perfect space and make your property aspirations a reality.</p>
              </div>
              <div class="btn-wrapper"><a class="btn btn-effect-3 btn-white" href="#">REQUEST A CALL BACK<i
                    class="icon-next"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
