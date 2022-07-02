<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 从CDN引用jQuery以及highlight.js -->
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/highlight.js/11.5.1/highlight.min.js"></script>
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/highlight.js/11.5.1/styles/a11y-dark.min.css">

    <!-- 引入本地css样式及json -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/css.css'); ?>"></link>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/color.css'); ?>"></link>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/font/font.css'); ?>"></link>
    <script type="text/javascript" src="<?php $this->options->themeUrl('/js/js.js'); ?>"></script>
    
    <!-- 输出headers -->
    <?php $this->header(); ?>
   
    <!-- PJAX相关 -->
    <?php if (!empty($this->options->themeOptions) && in_array('UsePJAX', $this->options->themeOptions)){ ?>
        <script src="https://cdn.bootcdn.net/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.js"></script>
        <script>
            $(document).pjax(
                'a[href^="<?php $this->options->siteUrl();?>"]',{
                    timeout:15000,
                    container:'#main',
                    fragment:'#main',
                });
        </script>
    <?php } ?>
            

    <title>
        <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
    </title>
</head>

<body class="sidebar-hidden">

    <div class="top-bar">
        <a href="javascript:void(0)" class="expand_button" onclick="toggleSidebar()">
            <svg class="expand_icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"alt="展开侧边栏按钮">
                <path d="M0 0h24v24h-24z" fill="none"/>
                <path d="M3 18h18v-2h-18v2zm0-5h18v-2h-18v2zm0-7v2h18v-2h-18z"/>
            </svg>
        </a>
        <a href="<?php $this->options->siteUrl(); ?>" class="title">
            <?php if($this->options->logoUrl){ ?>
                <img class="icon" src="<?php $this->options->logoUrl();?>"/>
            <?php } ?>
            <span class="title-text"><?php $this->options->title() ?></span>
        </a>
        <a href="<?php $this->options->feedUrl(); ?>" class="rss-sub" alt="rss订阅链接">
            <svg class="rss-sub-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M6.18 15.64a2.18 2.18 0 0 1 2.18 2.18C8.36 19 7.38 20 6.18 20C5 20 4 19 4 17.82a2.18 2.18 0 0 1 2.18-2.18M4 4.44A15.56 15.56 0 0 1 19.56 20h-2.83A12.73 12.73 0 0 0 4 7.27V4.44m0 5.66a9.9 9.9 0 0 1 9.9 9.9h-2.83A7.07 7.07 0 0 0 4 12.93V10.1Z">
                </path>
            </svg>
        </a>
    </div>