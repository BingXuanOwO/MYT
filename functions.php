<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;




function themeConfig($form)
{
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text(
        'logoUrl',
        null,
        null,
        _t('站点 LOGO 地址'),
        _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO')
    );


    $form->addInput($logoUrl);

    $footer = new Typecho_Widget_Helper_Form_Element_Textarea(
        'footer',
        null,
        null,
        _t('页脚额外信息'),
        _t('在这里填入指定格式的HTML，在页脚上方添加额外内容')
    );

    $form->addInput($footer);

    $links = new Typecho_Widget_Helper_Form_Element_Textarea(
        'links',
        null,
        null,
        _t('友情链接下方的项目'),
        _t('在这里填入HTML，来在\'友链\'下方显示项目')
    );

    $form->addInput($links);

    $themeOptions = new Typecho_Widget_Helper_Form_Element_Checkbox(
        'themeOptions',
        [
            'UsePJAX'    => _t('使用PJAX（需要关闭评论的反垃圾保护）')
        ],
        ['UsePJAX'],
        _t('选项')
    );
    
    $form->addInput($themeOptions->multiMode());


/*
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('UsePJAX' => _t('使用PJAX（需要关闭评论的反垃圾保护）'),
    array('UsePJAX' => _t('使用PJAX（需要关闭评论的反垃圾保护）'),
        ),
    array('UsePJAX'),
    _t('选项'),
    );
    
$form->addInput($sidebarBlock->multiMode());
*/
}


function themeFields($layout)
{
    $coverUrl = new Typecho_Widget_Helper_Form_Element_Text(
        'coverUrl',
        null,
        null,
        _t('文章封面地址'),
        _t('在这里填入一个图片URL地址, 以在文章加上一个自定义的封面')
    );
    $layout->addItem($coverUrl);
}