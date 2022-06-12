window.onload=function(){
    var width = window.innerWidth;
    if(width > 1400){
        document.getElementsByClassName('sidebar-hidden')[0].className = 'sidebar-shown';
        document.getElementsByClassName('expand_icon')[0].alt = '收起侧边栏按钮';
    }
}
window.onresize=function(){
    let width = window.innerWidth;
    if(width > 1400){
        document.getElementsByClassName('sidebar-hidden')[0].className = 'sidebar-shown';
        document.getElementsByClassName('expand_icon')[0].alt = '收起侧边栏按钮';
    }
    else{
        document.getElementsByClassName('sidebar-shown')[0].className = 'sidebar-hidden';
        document.getElementsByClassName('expand_icon')[0].alt = '展开侧边栏按钮';
    }
}
window.onscroll=function(){
    if(document.body.scrollTop >= 10){
        document.getElementsByClassName('top-bar')[0].setAttribute("class","top-bar scrolled");
    }
    else{
        document.getElementsByClassName('top-bar')[0].setAttribute("class","top-bar");
    }
}
function expandItem(e){
    let $class = e.parentNode.className;
    let $this = $(e);
    if($class=='item dropdown hidden'){
        $this.siblings("ul").slideDown(200);
        e.parentNode.className = 'item dropdown expand';
    }
    else{
        $this.siblings("ul").slideUp(200);
        e.parentNode.className = 'item dropdown hidden';
    }
}
function toggleSidebar(){
    var $class = document.querySelector('body').className;
    if($class=='sidebar-hidden'){
        document.querySelector('body').className = 'sidebar-shown';
        document.getElementsByClassName('expand_icon')[0].alt = '收起侧边栏按钮';
    }
    else{
        document.querySelector('body').className = 'sidebar-hidden';
        document.getElementsByClassName('expand_icon')[0].alt = '展开侧边栏按钮';
    }
}
function togglereply(e){
    let $classname = e.parentNode.className;
    if($classname == "comment hidden-reply"){
        $(e).siblings(".comment-children").slideDown(200);
        e.parentNode.className = "comment";
    }
    else{
        $(e).siblings(".comment-children").slideUp(200);
        e.parentNode.className = "comment hidden-reply";
    }
}
function textareachange(e){
    e.style.height = 'auto';
    e.style.height = `${e.scrollHeight}px`;
}