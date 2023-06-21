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
@isset($reportedCrimes)
  
	<main class="l-main">
    @foreach ($reportedCrimes as $reportedCrime)
		<div class="main row">
      <div style="width: 100%; height:1px; border:1px solid #fff;"></div> 

  <h5>Date Reported: </h3>
  <p class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Click here to cancel reply.</a></p>
    <div class="row">
    <form action="https://themes.webdevia.com/wp-comments-post.php" method="post" id="commentform">
              <div class="large-4 columns name-column">
          <p>
            <label for="author">State</label>
            <input type="text" class="five" name="author" id="author" style="text-align: center" value="{{ $reportedCrime->state }}" size="22" tabindex="1" aria-required='true'>
          </p>
        </div>
        <div class="large-4 columns">
          <p>
            <label for="email">LGA</label>
            <input type="text" class="five" name="email" id="email" style="text-align: center" value="{{ $reportedCrime->local_govt }}" size="22" tabindex="2" aria-required='true'>
          </p>
        </div>
        <div class="large-4 columns website-column">
          <p>
            <label for="url">Street Address</label>
            <input type="text" class="five" name="url" id="url" style="text-align: center" value="{{ $reportedCrime->street_address }}" size="22" tabindex="3">
          </p>
        </div>

            <div class="large-12 columns">
        <p style="display:flex">
          <label for="comment" style="margin-inline: 50px">Comment</label>
          <textarea name="comment" id="comment"  style="text-align: center;" tabindex="4">{{ $reportedCrime->comment }}</textarea>
          <textarea name="comment" id="comment"  style="text-align: center;" tabindex="4">{{ $reportedCrime->comment }}</textarea>
        </p>
      <p>@if ($reportedCrime->status !== null )
        <p><span>Attended To</span></p>
      @else
      <form  action="{{ route('crime.update', $reportedCrime->id) }}" method="post">
        @method('PATCH')
        @csrf
        <input  name="submit" class="small radius button" type="submit" id="submit" tabindex="5" value="Attended to ?">
        </form>
      </p>
      @endif
        
      <p>
        <form  action="{{ route('crime.destroy', $reportedCrime->id) }}" method="post">
          @method('DELETE')
          @csrf
          <input  name="submit" class="small radius button" type="submit" id="submit" tabindex="5" value="Delete">
          </form>
        </p>
        
      </div>

      <input type='hidden' name='comment_post_ID' value='2740' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
          </form>
          
  </div>
		</div>
    @endforeach
	</main>
  @endisset
	<!-- /content  -->
@include('user.footer')