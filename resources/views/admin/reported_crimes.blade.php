@include('user.header')
<section class="titlebar ">
  <div class="row">
            <div class="large-6 columns">
        <h2 id="page-title" class="title">
          Reported crimes					</h2>
    </div>
        </div>
</section>
<!-- content  -->
	<main class="l-main">
		<div class="main row">

  <h5>Date Reported: </h3>
  <p class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Click here to cancel reply.</a></p>
    <div class="row">
    <form action="https://themes.webdevia.com/wp-comments-post.php" method="post" id="commentform">
              <div class="large-4 columns name-column">
          <p>
            <label for="author">State</label>
            <input type="text" class="five" name="author" id="author" value="" size="22" tabindex="1" aria-required='true'>
          </p>
        </div>
        <div class="large-4 columns">
          <p>
            <label for="email">LGA</label>
            <input type="text" class="five" name="email" id="email" value="" size="22" tabindex="2" aria-required='true'>
          </p>
        </div>
        <div class="large-4 columns website-column">
          <p>
            <label for="url">Street Address</label>
            <input type="text" class="five" name="url" id="url" value="" size="22" tabindex="3">
          </p>
        </div>

            <div class="large-12 columns">
        <p>
          <label for="comment">Comment</label>
          <textarea name="comment" id="comment" tabindex="4"></textarea>
        </p>
      <p><input name="submit" class="small radius button" type="submit" id="submit" tabindex="5" value="Submit Comment"></p>
      </div>
      <input type='hidden' name='comment_post_ID' value='2740' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
          </form>
  </div>
		</div>  
	</main>
	<!-- /content  -->
@include('user.footer')