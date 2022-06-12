<?php
    if (!defined('__TYPECHO_ROOT_DIR__')) exit;
    $this->need('header.php');
?>

    <?php  $this->need('sidebar.php'); ?>




    <div class="main" id="main">
        <span class="archive-title"><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ''); ?></span>
        <div class="main-container archive">
            <?php while($this->next()): ?>
                <article class="post middle">
                    <a class="post-container" href="<?php $this->permalink(); ?>">
                        <?php if($this->fields->coverUrl){?>
                            <img class="post-cover" src="<?php $this->fields->coverUrl();?>"></img>
                        <?php }else{?>
                            <img class="post-cover" src="<?php $this->options->themeUrl('/cover.jpg'); ?>"/></img>
                        <?php } ?>
                        <span class="post-title" title="<?php $this->title(); ?>" ><?php $this->title(); ?></span>
                        <span class="post-preview"><?php $this->excerpt(50, '...'); ?></span>
                    </a>
                    <div class="post-info-container">
                        <?php $this->category(''); ?> 
                        <a class="post-author" href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
                        <a class="post-date"><?php $this->date('Y-m-d'); ?></a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
        <?php $this->need('pageNav.php');?>
    </div>

    <?php  $this->need('footer.php'); ?>
</body>