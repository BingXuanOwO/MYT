
    <footer>
        <div class="container">
            <?php if($this->options->footer){ ?>
            <ul class="contact">
                <?php $this->options->footer() ?>
            </ul>
            <?php } ?>
            <ul class="info" <?php if($this->options->footer){ ?>
                    style="border-top: solid 0.5px var(--md-sys-color-outline);"
                <?php } ?>> 
                <li class="copyright">
                    <span>© 2022 </span>
                    <a href=""><?php $this->options->title() ?></a>   
                </li>
                <li class="powered-by">
                    <span>Powered by </span>
                    <a href="http://www.typecho.org">Typecho</a>
                </li>
                <li class="theme-creator">
                    <span>Theme by </span>
                    <a href="https://www.bing-xuan.xyz">冰轩OwO</a>
                </li>
                <li class="CDN">
                    <span>jQuery & highlight.js CDN by </span>
                    <a href="https://www.bootcdn.cn">BootCDN</a>
                </li>
                <!--
                <li>
                    <a href="">XICP备0000000000号-0</a>
                </li>
                -->
            </ul>
        </div>
    </footer>