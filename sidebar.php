
        <div class="overlay" onclick="toggleSidebar()"></div>
        <ul class="sidebar">
        <li class="item" id="search-container">
            <form method="post" action="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M15.5 14h-.79l-.28-.27c.98-1.14 1.57-2.62 1.57-4.23 0-3.59-2.91-6.5-6.5-6.5s-6.5 2.91-6.5 6.5 2.91 6.5 6.5 6.5c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99 1.49-1.49-4.99-5zm-6 0c-2.49 0-4.5-2.01-4.5-4.5s2.01-4.5 4.5-4.5 4.5 2.01 4.5 4.5-2.01 4.5-4.5 4.5z"/>
                    <path d="M0 0h24v24h-24z" fill="none"/>
                </svg>
                <input id="search" name="s" placeholder="搜索"></input>
            </form>
        </li>
        <li class="nav-drawer-section">
            <div class="section-title">
                <span>页面</span>
            </div>
            <ul class="section-items">
                <li class="item">
                    <a href="<?php $this->options->siteUrl(); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10 20v-6h4v6h5v-8h3l-10-9-10 9h3v8z"/>
                            <path d="M0 0h24v24h-24z" fill="none"/>
                        </svg>   
                        <span>主页</span>
                    </a>
                </li>

                <li class="item dropdown hidden">
                    <a href="javascript:void(0)" class="onfocus" id="selected" onclick="expandItem(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10 4h-6c-1.1 0-1.99.9-1.99 2l-.01 12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-10c0-1.1-.9-2-2-2h-8l-2-2z"/>
                            <path d="M0 0h24v24h-24z" fill="none"/>
                        </svg>    
                        <span>分类</span>
                        <svg class="expand-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M16.59 8.59l-4.59 4.58-4.59-4.58-1.41 1.41 6 6 6-6z"/>
                            <path d="M0 0h24v24h-24z" fill="none"/>
                        </svg>
                    </a>
                    <ul class="sub-items">
                        <?php $this->widget('Widget_Metas_Category_List')
                            ->parse('<li class="sub-item">
                                        <a href="{permalink}">
                                            <span>{name}({count})</span>
                                        </a>
                                    </li>'); ?>
                    </ul>
                </li>
                <li class="item dropdown hidden">
                    <a href="javascript:void(0)" class="onfocus" id="selected" onclick="expandItem(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M20.54 5.23l-1.39-1.68c-.27-.34-.68-.55-1.15-.55h-12c-.47 0-.88.21-1.16.55l-1.38 1.68c-.29.34-.46.79-.46 1.27v12.5c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-12.5c0-.48-.17-.93-.46-1.27zm-8.54 12.27l-5.5-5.5h3.5v-2h4v2h3.5l-5.5 5.5zm-6.88-12.5l.81-1h12l.94 1h-13.75z"/>
                            <path d="M0 0h24v24h-24z" fill="none"/>
                        </svg>
                        <span>归档</span>
                        <svg class="expand-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M16.59 8.59l-4.59 4.58-4.59-4.58-1.41 1.41 6 6 6-6z"/>
                            <path d="M0 0h24v24h-24z" fill="none"/>
                        </svg>
                    </a>
                    <ul class="sub-items">
                        <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
                            ->parse('<li class="sub-item">
                                        <a href="{permalink}">
                                            <span>{date}</span>
                                        </a>
                                    </li>'); ?>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="nav-drawer-section">
            <div class="section-title">
                <span>独立页面</span>
            </div>
            <ul class="section-items">
                <?php $this->widget('Widget_Contents_Page_List')
                    ->parse('
                    <li class="item">
                        <a href="{permalink}" alt="{title}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M0 0h24v24h-24z" fill="none"/>
                                <path d="M14 2h-8c-1.1 0-1.99.9-1.99 2l-.01 16c0 1.1.89 2 1.99 2h12.01c1.1 0 2-.9 2-2v-12l-6-6zm2 16h-8v-2h8v2zm0-4h-8v-2h8v2zm-3-5v-5.5l5.5 5.5h-5.5z"/>
                            </svg>
                            <span>{title}</span>
                        </a>
                    </li>
                    '); ?>
            </ul>
        </li>
        <li class="nav-drawer-section">
            <div class="section-title">
                <span>其它</span>
            </div>
            <ul class="section-items">
                <li class="item dropdown hidden">
                    <a href="javascript:void(0)" class="onfocus" id="selected" onclick="expandItem(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M0 0h24v24h-24z" fill="none"/>
                            <path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4v-1.9h-4c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9h-4c-1.71 0-3.1-1.39-3.1-3.1zm4.1 1h8v-2h-8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4v1.9h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"/>
                        </svg> 
                        <span>友链</span>
                        <svg class="expand-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M16.59 8.59l-4.59 4.58-4.59-4.58-1.41 1.41 6 6 6-6z"/>
                            <path d="M0 0h24v24h-24z" fill="none"/>
                        </svg>
                    </a>
                    <ul class="sub-items">
                        <?php $this->options->links(); ?>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>