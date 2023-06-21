@include('user.header')
<section class="titlebar ">
	<div class="row">
						<div class="large-6 columns">
				<h2 id="page-title" class="title">
					Report Crime here				
					@isset($message)
					<span style="text-align: right">{{ $message }}</span>	
					@endisset
				</h2>
		</div>
		<div class="large-6 columns">
			<ul class="breadcrumbs"><li><a href="../index.html">Home</a></li><li><strong> Report Crime</strong></li></ul>			</div>
				</div>
</section>
<!-- content  -->
	<main class="l-main">
		<div class="main row">
  			<article>
  				<div class="body field clearfix">
  					<section class="wpb-content-wrapper"><div class="vc_row wpb_row vc_row-fluid vc_custom_1445016084106" style="color: ;}" ><div class="text-center wpb_column vc_column_container vc_col-sm-4" data-equalizer-watch><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left right-to-left" >
		<div class="wpb_wrapper">
			<p>We are the leader of the security and bodyguard services industry. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

		</div>
	</div>
<div class="vc_icon_element vc_icon_element-outer decoration-icon wpb_animate_when_almost_visible wpb_right-to-left right-to-left vc_icon_element-align-center"><div class="vc_icon_element-inner vc_icon_element-color-orange vc_icon_element-size-md vc_icon_element-style- vc_icon_element-background-color-grey" ><span class="vc_icon_element-icon entypo-icon entypo-icon-map" ></span></div></div>
	<div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left right-to-left" >
		<div class="wpb_wrapper">
			<p>Monday – Friday: 08.00 – 17.00<br />
Saturday: 09.00 – 12.00</p>

		</div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-8" data-equalizer-watch><div class="vc_column-inner "><div class="wpb_wrapper"><div role="form" class="wpcf7" id="wpcf7-f4-p2740-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="{{ route('crime.store') }}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
@csrf
<div class="large-6 columns"><span class="wpcf7-form-control-wrap" data-name="your-name"><input required type="text" name="state" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="State" /></span></p>
<p><span class="wpcf7-form-control-wrap" data-name="your-email"><input required type="text" name="local_govt" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="LGA" /></span> </p>
<p><span class="wpcf7-form-control-wrap" data-name="your-email"><input required type="text" name="street_address" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Street Address" /></span> </p>
<p><span class="wpcf7-form-control-wrap" data-name="your-subject"><input type="file" name="file_path" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="support document" /></span></p>

</div>
<div class="large-6 columns">
	<span class="wpcf7-form-control-wrap" data-name="your-message"><textarea required name="comment" cols="40" rows="7" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Message"></textarea></span> </p>
	<p>We shall make sure that Justuce is Served As Soon As Possible.</p>
	<p class="right"><input type="submit" value="Report Now" class="wpcf7-form-control has-spinner wpcf7-submit" /></p>
</div>
<div class="wpcf7-response-output" aria-hidden="true"></div></form></div></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding" style="color: ;}" ><div class="wpb_column vc_column_container vc_col-sm-12" data-equalizer-watch><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			         
    <div class="map">
            <div id="map-canvas" style="height: 500px;" data-latitude="40.643594"  
        data-longitude="-73.930474" data-zoom="14" data-companyname="Bodyguard" 
        data-decription="">
      </div>
    </div>
    

    

		</div>
	</div>
</div></div></div></div><div class="vc_row-full-width"></div>
</section>  				</div>
				<div class="pagination">
									</div>

  			</article>
            
    <section id="respond">

		</div>  
	</main>
	<!-- /content  -->
@include('user.footer')