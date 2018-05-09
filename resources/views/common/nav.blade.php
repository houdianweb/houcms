<!--创建导航条内部元素
                 class{
                     nav :创建导航条内部元素的一个必须的基类
                     navbar-nav:这点不好解释.因为翻了一下官方文档并没有说的特别详细 这里稍微说一下
                     ,:使ul水平居中横排排列.同时宽度为内容宽度不会挤下后面的元素如form;等最后大家可以删除这个class试试就知道作用了
                     navbar-right:导航条排列的类
                 }-->
<ul class="nav navbar-nav">
    <!--class{
        active:默认点击,
        dropdown:创建一个下拉菜单所需要的基类
    }-->
    <li class="active">
        <a href="">Relsoul</a>
    </li>
    <li><a href="">GBTag</a></li>
    <li class="dropdown">
        <!--class{
            dropdown-toggle:声明这是一个可以下拉的列表..实际上我没发现这个class的具体用途.取消也未发现什么bug
            span .caret{
                一个小三角的图标
                图片样式
            }
        }
        data-toggle="dropdown" :引入下拉菜单组件的一个必要的属性
        role="button":起辅助声明作用.声明这个是一个按钮-->

        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">下拉菜单名称<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="">bootstrap</a></li>
            <!--class{
                divider:分隔线样式
            }
            role="separator":声明这个元素为一个分隔线-->
            <li role="separator" class="divider"></li>
            <li><a href="">请关注极客标签</a></li>

        </ul><!--下拉菜单-->
    </li><!--导航子元素-->
</ul><!--导航元素-->
<!--class{
navbar-form:可以呈现良好的垂直对齐具体参考http://v3.bootcss.com/components/#navbar-forms
navbar-left:用来规定导航条内元素对齐的具体参考http://v3.bootcss.com/components/#navbar-component-alignment
}-->