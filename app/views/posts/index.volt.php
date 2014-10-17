

<h1>Congratulations!</h1>


<?php if (((empty($posts)))) { ?>
<p>empty</p>
<?php } ?>



<p><?php echo $posts->title; ?><p>





<?php echo $this->tag->textArea(array('')); ?>


<?php echo $this->getContent(); ?>






<p>You're now flying with Phalcon. Great things are about to happen!</p>