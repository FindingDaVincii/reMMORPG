<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="trendingbar"><strong>Trending Games</strong><?php for ($i=0,$k=count($trending);$i<$k;$i++): ?> | <a href="<?php echo $trending[$i]['link'];?>"><?php echo $trending[$i]['name'];?></a><?php endfor; ?>
<div class="social">
  <a href="#"><img src="" alt="" width="12" height="12"/> Facebook</a>
  <a href="#"><img src="" alt="" width="12" height="12"/> Twitter</a>
  <a href="#"><img src="" alt="" width="12" height="12"/> YouTube</a>
  <a href="#"><img src="" alt="" width="12" height="12"/> Twitch.tv</a>
  <a href="#"><img src="" alt="" width="12" height="12"/> YouTube.Gaming</a>
</div>
</div>
