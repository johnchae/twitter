<div class="container mainContainer">
  <div class="row">
    <div class="col-12 col-md-8">
      <h2>Search Results</h2>
      <?php displayTweets("search"); ?>
    </div>
    <div class="col-6 col-md-4">
      <?php displaySearch(); ?>
      <hr>
      <?php displayTweetBox(); ?>
    </div>
  </div>
</div>