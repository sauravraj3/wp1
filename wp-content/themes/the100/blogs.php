<?php /* Template Name: Blogs */
get_header() ;

$meta = _WSH()->get_meta();?>

<?php wp_head(); ?>
<!-- <script type="text/javascript" src="<?php //bloginfo('template_url');?>/js/jquery.js"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<style>
 @media screen and (min-width: 1030px) {
.masthead-fixed .site-main {
    margin-top: 64px !important;
}}
    @media only screen and (min-width: 1100px) and (max-width:2200px) {
    .main11{
    
   margin-top: 0px !important;  
}
.site.bread {
    margin-top: 48px;
}

    }
	  @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) { 
		  .date {
    margin-top: 0px !important;
}
		  td#blog1 {
    width: 39%;
}.line {
	font-size: 14px;align-content !important;}
			button {
    width: 222px !important;
    margin-right: 28px !important;
}
			
			input, textarea,input#search{width:-webkit-fill-available !important;}
			.main11 {
    padding-top: 0px;

}
			.content-sidebar {
    margin-top: 0px !important;
}
	}
	
	
    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) { 
		
	
		.ml-responsive-table .ml-grid{border:none !important;}
		input#search {
    float: none !important;
    text-align: center !important;
    width: 40% !important;
}
		button.button_tmc1.plushreview {        color: #fff;
    text-align: center;
    background: #e11d17;}
		button#new-play { background:#f6cb3d;      color: #000;    }
		button {
    font-size: 14px;
}
		.mobile {
    display: block !important;
}
		.ml-title {
    display: none;
}
		.ml-value {
    padding: 8px !important;
    margin: 0px !important;
}
		.site h1 {
    float: none !important;
    text-align: center !important;
    font-size: 24px !important;
}

p#welcome {
    float: none !important;
    text-align: center !important;
    font-size: 19px !important;
}
		.ml-table {
    width: auto !important;
    text-align: center !important;
}
		.ml-responsive-table.ml-responsive-table-0 .ml-grid {
    padding: 10px;    padding-bottom: 25px;
    border: 1px solid grey;
    margin-bottom: 15px;
    background: #EDEDEE;
    border-radius: 10px;
}
		div#nav {
    display: none;
}


			.main11 {
    padding-top:0px !important; 
}
		.content-sidebar {
    border: 0;
    float: right;
    margin-left: 33.33333333%;
    padding: 48px 30px 24px;
    position: relative;
    width: 100%;
}
		div#content-sidebar {
    display: block !important;
}
		
		.widget {
    border: 0px solid rgb(189, 189, 189)!important;
    text-align: center;
}
		.casi4, .casi5 {
    margin-right: 0px  !important;
    float: left;
    width:100%; 
}
		.ml-value {
    padding: 8px !important;
    margin: 0px !important;
}
		.ml-table {
    width: auto !important;
    text-align: center !important;
}
	}
	
		@media only screen and (max-device-width: 760px) and (min-device-width: 415px){
	input#search {
    float: none !important;
    text-align: center !important;
    width: 45% !important;
}
	}
	
	
		@media only screen and (max-device-width: 760px) and (min-device-width: 100px){
			.ml-responsive-table.ml-responsive-table-0 dl.ml-grid.ml-clearfix.ml-row-0 {
    display:block !important;
}
			
			h3 {
    text-align: center !important;
    float: none !important;
}
div#nav {
    display: none;
}

			
			aside#text-3 .ml-responsive-table .ml-grid {
    border: none !important;
}
			.main11 {    margin-top: 0px;}
a#visit {
  float: none !important;
    text-align: center !important;
    margin: 0 auto;
}
.ml-responsive-table.ml-responsive-table-0 .ml-grid {
    padding: 10px;
    border: 1px solid grey;
    margin-bottom: 15px;
    background: #EDEDEE;
    border-radius: 10px;
}
	.content-sidebar {
padding: 0px 30px 0px;
			border-bottom: 0px solid rgba(0, 0, 0, 0.1) !important;
		}
		
		.ml-responsive-table.ml-responsive-table-1 {
    display: block !important; 
}
		
		.widget {
    border: 0px solid rgb(189, 189, 189)!important;    text-align: center;

}		
			
	}
	
	
	
	span#author {
    float: left;
    display: block;
    margin-bottom: 5px;
    /* text-align: center; */
    color: #000;
    font-weight: bold;
    font-size: 16px !important;
}
    .date {
    margin-top: 11px;
}
	.site h1 {
    font-size: 26px;
    font-family: amiko;
}
	.site h3 {
    color: #E11D17;
    font-size: 23px;
    font-family: amiko;
    font-weight: bold;
    padding: 0px 0 10px 0px;
}
	
	.content-sidebar {    display: block !important; }
	
	
	@media screen and (min-width:980px){
.main11{
    width: 100%;margin-top: 0px;
}
	}
	
	
    #data tr {
  display: none;
}
    #nav{text-align:center;margin-bottom:30px;}
    
  #nav a{
      
      color: #fff;
    background: #f9c000;;
    padding: 9px;
    margin-left: 10px;

      
  }  
  
  .home h3{
         color: #0B0B0B;
    font-size: 22px;
    text-align: center;
    font-family: asap-regular;
    font-weight: 400;
    background: #EFEEEE;
    padding: 10px 0 10px 0px;
    margin-top: 0px !important;
  }
  .right li{
      padding-left: 9px;
    background: #F6F6F6;
             border-left: 1px solid #E4E4E4 !Important;
    border-right: 1px solid #E4E4E4 !Important;
    border-bottom: 1px solid #E4E4E4 !Important;
  }
  .right p{
      
      font-size:14px !important;
     
      
  }
  .right p:nth-child(3) {
    font-size: 11px !important;
}
input, textarea {
   
     border: 1px solid grey; 
    width: 230px;
    height: 30px;
        border-color: none !important;
}
	.content-sidebar .widget input{  border-color: none !important;}
button, .button, input[type="button"], input[type="reset"], input[type="submit"]{
    
    font-weight:500 !important;
    
}
  .accordion {
       background-color: #fff;
    color: #444444;
    cursor: pointer;border:1px solid #D4D4D4;
    padding: 18px;
    width: 92%;
    font-family:asap-regular;
    font-weight:600;
       background: url(http://212.48.64.43/~dlivecasinobonus/wp-content/uploads/2018/03/Hover-Arrow.png);
    background-repeat: no-repeat;
    background-position: 97%;
    text-align: left;
    outline: none;
    font-size: 16px;text-transform:capitalize;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #fff; 
    color:#000;
}
#data a{
       float: none;
        
    }

.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;}

	table#data {
    border: none !important;
}
	/*------------------*/
			  @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) { 
				

				  p.title {
    margin-top: 10px;
    padding-top: 34px;
    font-size: 20px;
    margin-left: 3px;
	font-weight: 600;				  
}
				 td#blog1 {
    width: 100% !important;
					 margin-top: 20px !important;
}
				  td#blog2 {
    width: 100% !important;
					 
}
				  
								  
#blog1 img {
    border-radius: 5px !important;
    width: auto !important;
    height: auto !important;
	    margin-left: 50px;
}
	}
	
	
	
		  @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) { 

			 p.title {
    padding-top: 50px !important;
    margin-top: 50px !important;
				      font-size: 20px;
    font-weight: 600;
}
			  #blog1 img {
    border-radius: 5px !important;
    width: 327px !important;
    height: 174px;
}
td#blog2 {
        padding-top: 19px!important;
    padding-right: 22px!important;
    padding-bottom: 11px!important;
    padding-left: 20px!important;
    
}
			  
	}
@media (min-width: 1200px){
	p.title {
    margin-top: 50px;
    margin-bottom: -30px;
    font-size: 22px;
    font-weight: 600;
}
.container {
    width: 1170px;
    margin-top: 50px;
	}
	td#blog2{
	    border-radius: 10px 10px 10px 10px;
    overflow: hidden;
    border-width: 1px;
    border-color: #dddddd;
    padding-top: 20px;
    padding-right: 20px!important;
    padding-bottom: 20px;
    padding-left: 20px!important;
    box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.3)
	}
	
	}

	
	#blog1 img{    border-radius: 5px !important;}
	#blog1 img {
    border-radius: 5px !important;
    width: 364px;
		height: 174px;
}
	
	
	td#blog1 {
    border-radius: 10px 10px 10px 10px;
    overflow: hidden;
    border-width: 1px;
    border-color: #dddddd;
    padding-top: 20px!important;
    padding-right: 20px!important;
    padding-bottom: 20px!important;
    padding-left: 20px!important;
    box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.3);margin-bottom: 20px;
}
	@media (max-width: 660px){

	td#blog2{
	     width: 95% !important;
    float: left !important;
    vertical-align: top;
    text-align: center;
    margin-left: 8px !important;
    margin-bottom: 30px !important;
	
		}
		
			td#blog1{

		    margin-left: 10px !important;
		}
		
		#blog1 img {
    border-radius: 5px !important;
    width: 304px !important;
		height: 174px;
}
	.container.top {
    padding-top: 70px;
    margin-left: 15px;
    text-transform: capitalize !important;
    font-size: 19px;
    font-weight: 600;
}
	}
	a.more {
    font-weight: 600;
    text-decoration: underline;
}
	td#blog2{
	    border-radius: 10px 10px 10px 10px;
    overflow: hidden;
    border-width: 1px;
    border-color: #dddddd;
    padding-top: 20px;
    padding-right: 20px!important;
    padding-bottom: 20px;
    padding-left: 20px!important;
    box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.3)
	}
	
	.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 2s !important;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
</style>

<div class="container top">
     <p class="title">
        <?php the_title(); ?>
        
    </p>
    
   
</div>





<div class="container">
    
 <div class="main11" style="float:left;">
      
        <table class="blog" id="data" style="height:auto;">
         <?php
$args = array(
    'posts_per_page'   => -1,
    'post_type'        => 'post',
   'taxonomy' => 'category',
'term' => 'blog'
);
$the_query = new WP_Query($args);
						if ( $the_query->have_posts() ) {
$i = 1;
							while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
      
  <tr class="row"> <td id="blog1" style="float:left; padding-bottom: 50px;"><?php the_post_thumbnail(); ?></td>
	  
  <td id="blog2" style="width:56%;  float:right;      vertical-align: top;    text-align: center;">
	  
	  
 
<div class="blogg">
							
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
									
									
								
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">	<h3 style="color:#000;margin: 0px 0 6px; float:left; font-weight: bold; font-size: 20px; padding:0px; "><?php the_title(); ?></h3></a>
								<div class="line" style="clear: both;text-align: justify;"><?php echo wp_trim_words( get_the_content(), 60, '...' ); ?> <span class="more"><a class="more" href="<?php the_permalink(); ?>" title="More">Read More</a></span></div>
								
								
								
								
								
											<div class="date" style="display:block">
												<span id="author">Author:  UK CCTV  </span>
												<!--<span class="second" style="display: block;
    margin-bottom: 5px;    FLOAT: left;
    /* text-align: center; */
    color: #000;
    font-weight: bold;
    font-size: 16px !important;
  "><?php echo get_the_date('M'); ?> <?php echo str_repeat(" ", 1);   ?></span>
												
												
												<span class="first" style="display: block;
    margin-bottom: 5px;    FLOAT: left;
    /* text-align: center; */
    color: #000;
    font-weight: bold;
    font-size: 16px !important;
    "><?php echo str_repeat("-", 1);   ?><?php echo str_repeat(" ", 1);   ?><?php echo get_the_date('d'); ?><?php echo str_repeat(" ", 1);   ?><?php echo str_repeat("-", 1);   ?><?php echo str_repeat(" ", 1);   ?></span>
											
								
								<span class="second" style="display: block;
    margin-bottom: 5px;
    /* text-align: center; */
    color: #000;float:left;
    font-weight: bold;
    font-size: 16px !important;
  "><?php echo get_the_date('Y'); ?> </span>-->
								
						</div>
											</div>





    
    </td></tr>
 

        
     <?php $i++; endwhile;  wp_reset_query(); 
						}  ?>    
        
</table>
               
    </div>

	
	
	
    <div class="site" style="clear:both;">
     <p>
        <?php the_content(); ?>
        
    </p>
		
		

      
		
		
		
		
   
</div>
          
   
     

        </div> 
   </div> 
    <div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    
    $(document).ready(function(){
    $('#data').after('<div id="nav"></div>');
    var rowsShown = 6
    var rowsTotal = $('#data tbody tr').length;
    var numPages = rowsTotal/rowsShown;
    for(i = 0;i < numPages;i++) {
        var pageNum = i + 1;
        $('#nav').append('<a href="#" rel="'+i+'">'+pageNum+'</a> ');
    }
    $('#data tbody tr').hide();
    $('#data tbody tr').slice(0, rowsShown).show();
    $('#nav a:first').addClass('active');
    $('#nav a').bind('click', function(){

        $('#nav a').removeClass('active');
        $(this).addClass('active');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#data tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
        css('display','table-row').animate({opacity:1}, 300);
    });
});
    
</script>

        


    
    <?php get_footer();