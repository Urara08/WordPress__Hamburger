<!-- 'text-add-photo '　文章（画像有）※文章が左・画像が右-->

<div class="c-wrapper--card--single">
  <figure class="c-card--single--special">
    <figcaption class="c-caption-group--card--single --for-pc">
      <p class="c-detail--card--single"><?php block_field( 'text-add-photo-text' ); ?></p>
    </figcaption>

    <div class="c-photo-frame--card--single--various">
      <div class="c-photo--card--single--various" style="background-image: url(<?php block_field( 'text-add-photo-photo' ); ?>)"></div>
    </div>
  </figure>
</div>
