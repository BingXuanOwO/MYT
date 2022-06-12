<?php
/**
 * 一个使用material design 3设计语言的typecho主题。
 *
 * @package MYT
 * @author 冰轩OwO
 * @version 0.1
 * @link https://www.bing-xuan.xyz
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

    <?php  $this->need('sidebar.php'); ?>


    <div class="main" id="main">
        <div class="main-container">
            <?php $index=0; ?>
            <?php while($this->next()): ?>
                <?php
                    switch($index%6){
                        case 0:
                            $class='post left huge 0';
                            break;
                        case 1:
                            $class='post right small 1';
                            break;
                        case 2:
                            $class='post right small 2';
                            break;
                        case 3:
                            $class='post left small 3';
                            break;
                        case 4:
                            $class='post left small 4';
                            break;
                        case 5:
                            $class='post right huge 5';
                            break;
                    }
                    $index++;
                ?>
                <article class="<?php echo $class; ?>">
                    <a class="post-container" href="<?php $this->permalink(); ?>">
                        <?php if($this->fields->coverUrl){?>
                            <img class="post-cover" src="<?php $this->fields->coverUrl();?>"/>
                        <?php }else{?>
                            <img class="post-cover" src="<?php $this->options->themeUrl('/cover.jpg'); ?>"/>
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