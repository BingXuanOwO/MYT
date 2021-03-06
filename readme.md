一些前言
------

由于我一开始自己瞎写的Typecho一个主题看着不太好看，问题也有许多，于是我便打算重写一个新的。大概五月初的时候，在一个群里聊天时，有人给了我些启发，那就是遵循Google的[Material Design][1]设计语言来编写。不过，因为此时Google都发布了全新的[Material Design 3（Material you）][2]设计语言，所以，我想要尝试遵循Material Design 3设计语言来做一个新的Typecho主题。于是最后，我写出来了这个MYT主题。

部分特别鸣谢（使用到的东西）（排名不分前后）
-------

 - Material Design设计语言
 - Google Product sans字体以及Noto Sans字体
 - JQuery提供的侧边栏下拉动画及PJAX
 - highlight.js提供的代码块高亮
 - [在pexels上，由Emre Can Acer所作的一张图片][3]为默认文章封面

主题的部分介绍
------

这个主题遵循[Material Design 3（Material you）][2]设计语言。

这个主题目前支持以下特性：

 - 自动切换的明暗色风格
 - pjax免刷新*
 - 无需插件的友情链接*
 - 基于highlight.js的代码块高亮
 - 无需插件的自定义封面
 - （剩下的也没啥可说的了）

(1.pjax可手动打开或关闭，不过目前由于typecho的默认限制，在pjax打开的情况下，如果开启评论的反垃圾保护，则会出现问题，不能评论)

(2.友情链接，包括页脚的自定义，由于本人比较废物，所以这部分需要按照下方所讲的对应格式写相应的html)

此主题目前已知的问题：在手机端点击搜索框后会错误的使侧边栏收起。目前在电脑端使用浏览器开发者工具的设备仿真器无法复现，触发原因未知

主题的自定义
-----------

首先是主题需要按照格式填写的自定义字段。主题的友情链接和页脚要按照以下格式填写，使用星号("*")括起来的部分需按照描述替换掉。

友情链接添加项目的格式如下：

```
<li><a href="*这里放友链的链接*">
<img src="*这里放友链前面的图标的图片链接，如果没有则这整行都删掉*" >
<span>*这里是友链的标题*</span>
</a></li>
```

页脚部分添加链接的格式如下：
```
<li><a href="*这里放转到的链接*">*这里放标题*</a></li>
```


  [1]: https://material.io/
  [2]: https://m3.material.io/
  [3]: https://www.pexels.com/zh-cn/photo/2110951/
