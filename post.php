
<?php
    if (!defined('__TYPECHO_ROOT_DIR__')) exit;
    $this->need('header.php');
?>

    <?php  $this->need('sidebar.php'); ?>

    <div class="main" id="main">
        <script>hljs.highlightAll();</script>
        <div class="post-main-info-container">
            <?php if($this->fields->coverUrl){?>
                <div class="post-main-cover" style="background-image: url(<?php $this->fields->coverUrl();?>);">
            <?php }else{?>
                <div class="post-main-cover" style="background-image: url(<?php $this->options->themeUrl('/cover.jpg'); ?>);">
            <?php } ?>
                <h1 class="post-title">
                    <a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a>
                </h1>
            </div>
        </div>

        <div class="post-main-container">
            <div class="post-meta-container">
                    <?php $this->category(''); ?> 
                    <a class="post-author" href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
                    <a class="post-date"><?php $this->date('Y-m-d'); ?></a>
            </div>
            <hr>
            <div class="post-content" itemprop="articleBody">
                <?php $this->content(''); ?>
                标签: <?php $this->tags(',', true, 'none'); ?>
            </div>
            
        </div>

        <?php include('comments.php');?>
    </div>
    <?php include('footer.php');?>

</body>