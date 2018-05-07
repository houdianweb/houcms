<nav class="navbar navbar-default">
    <div class="container">
        <!--创建一个bootstrap全屏布局-->
        <div class="container-fluid">
            <!--创建一个bootstrapLOGO布局-->
            <!--注意:必须要创建navbar-header，把logo以及响应式按钮给包裹进去..否则..大家删除下navbar-header 缩小屏幕点击下拉菜单就知道了-->
            <div class="navbar-header">
                <div class="navbar-brand">
                    <p>厚匠网络</p>
                </div>
                <!--创建一个按钮
                class{
                    navbar-toggle:向js传递这个按钮是可以点击的
                    collapsed:不结合navbar-collapse那就是一个默认class..不加貌似也没发现什么bug.
                }
                data-toggle="collapse":引入collapse插件
                data-target="#navbar-gbtag":当点击按钮的时候跳转/打开哪一个标签
                aria-expanded="false":辅助性阅读功能..针对特殊人群的设置-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-gbtag" aria-expanded="false">
                    <!--在按钮上添加一些图标和说明
                    class{
                        sr-only:隐藏这个标签
                        incon-bar:图标样式
                        动手改一下图标样式为glyphicon glyphicon-star试试
                    }-->
                    <span class="sr-only">点我啊</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!--创建导航条元素布局
            class{
                collapse:配合navbar-collapse 按钮默认是否展开 如果取消collapse 那么按钮默认就是展开的
                navbar-collapse:导航条元素布局必须的class
            }
            id:与按钮的data-targe一致-->
            <div class="collapse navbar-collapse" id="navbar-gbtag">
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
                <form class="navbar-form navbar-left" role="search">
                    <!--class{
                        btn:创建一个按钮所必须的基类
                        btn:按钮样式 基于btn基类 具体参考http://v3.bootcss.com/css/#buttons
                        form-group:排列表单元素的一个基类具体参考http://v3.bootcss.com/css/#forms
                    }-->
                    <div class="form-group">
                        <!--class{
                            form-control:设置宽度为100%但是我们在父级元素form设置了navbar-form所以宽度会得到一定的控制
                        }-->
                        <input type="text" class="form-control" placeholder="搜索" />
                    </div><!--表单组-->
                    <button type="submit" class="btn btn-default">搜索</button>
                </form><!--表单-->

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="">Soul</a></li>
                    <li class="dropdown">
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
                    </li><!--导航子元素2-->
                </ul><!--导航元素2 -->
            </div><!--导航布局-->
        </div><!--end 全屏布局-->
    </div>
</nav>