<form role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>">
  <label class="screen-reader-text" for="s">Поиск: </label>
  <input type="text" placeholder="Search..." value="<?php echo get_search_query() ?>" name="s" id="s" />
  <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
</form>