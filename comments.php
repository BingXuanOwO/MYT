<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php function threadedComments($comments, $options) { ?>
    <li class="comment hidden-reply" id="li-<?php $comments->theId(); ?>">
        <div class="comment-info">
            <div class="comment-avatar">
            <img src="<?php echo 'https://cravatar.cn/avatar/' . md5($comments->mail) . '?size=35' ; ?>" alt="avatar"></img>
            </div>
            <div class="container">
                <div class="comment-author">
                    <a <?php if($comments->permalink()) { ?>href="<?php $comments->permalink(); ?>"<?php } ?>><?php $comments->author(); ?></a>
                </div>
                <div class="comment-date">
                    <?php $comments->date('Y-m-d H:i'); ?>          
                </div>
            </div>
            <div class="comment-reply">
                <?php $comments->reply(); ?>
            </div>
            <div class="comment-content">
                <?php $comments->content(); ?>       
            </div>
        </div>
        <?php if ($comments->children) { ?>
            <a href="javascript:void(0)" class="toggle-reply" onclick="togglereply(this)">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24h-24z" fill="none"/>
                </svg>
            </a>
            <div class="comment-children">
                <?php $comments->threadedComments($options); ?>
            </div>
        <?php } ?>
    </li>
<?php } ?>



    <div id="comments">
        <div class="comments-container">
        <span id="commentNum"><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></span>

            <?php $this->comments()->to($comments); ?>
            <?php if ($comments->have()): ?>
                <ol class="comment-list">
                    <?php $comments->listComments(); ?>
                    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
                </ol>
            <?php endif ?>
            <div class="new_comment">
                <span id="response">添加新评论</span>
                <div class="cancel-comment-reply">
                <?php $comments->cancelReply(); ?>
                </div>
                <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                    <?php if($this->user->hasLogin()){ ?>
    		            <p>登录身份: <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
                    <?php }else{?>
                        <div class="newcomment_info">
                            <div class="newcomment_author">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                    <path d="M0 0h24v24h-24z" fill="none"/>
                                </svg>
                                <input name="author" placeholder="名字" value="" required="">
                            </div>
                            
                            <div class="newcomment_mail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M20 4h-16c-1.1 0-1.99.9-1.99 2l-.01 12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-12c0-1.1-.9-2-2-2zm0 4l-8 5-8-5v-2l8 5 8-5v2z"/>
                                    <path d="M0 0h24v24h-24z" fill="none"/>
                                </svg>
                                <input name="mail" placeholder="邮箱<?php if ($this->options->commentsRequireMail){?>*<?php } ?>" value="" <?php if ($this->options->commentsRequireMail){?>required<?php } ?>>
                            </div>
                            <div class="newcomment_url">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M0 0h24v24h-24z" fill="none"/>
                                    <path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4v-1.9h-4c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9h-4c-1.71 0-3.1-1.39-3.1-3.1zm4.1 1h8v-2h-8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4v1.9h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"/>
                                </svg>
                                <input name="url" placeholder="网站<?php if ($this->options->commentsRequireURL){?>*<?php } ?>" value="" <?php if ($this->options->commentsRequireURL){?>required<?php } ?>>
                            </div>
                        </div>
                    <?php } ?>
                    <p class="newcomment_content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M21.99 4c0-1.1-.89-2-1.99-2h-16c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zm-3.99 10h-12v-2h12v2zm0-3h-12v-2h12v2zm0-3h-12v-2h12v2z"/>
                            <path d="M0 0h24v24h-24z" fill="none"/>
                        </svg>
                        <textarea oninput="textareachange(this)" name="text" id="textarea" style="height: 25px;" class="textarea auto-height" rows="1" required="" placeholder="发条评论"></textarea>
                    </p>
                    <button type="submit" class="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M2.01 21l20.99-9-20.99-9-.01 7 15 2-15 2z"/>
                                <path d="M0 0h24v24h-24z" fill="none"/>
                            </svg>                            
                            <span>发送</span>
                    </button>
                </form>
            </div>
        </div>
    </div>