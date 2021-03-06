<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>管理员列表</title>
    <link rel="stylesheet" href="{{asset('admin/style/css/ch-ui.admin.css')}}">
    <link rel="stylesheet" href="{{asset('admin/style/font/css/font-awesome.min.css')}}">
    <script src="{{asset('lirary/uploadify/jquery1.11.3.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('js/util.js')}}"></script>



</head>
<body>
<!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">管理员管理</a> &raquo; 管理员列表
</div>
<!--面包屑导航 结束-->
<div class="search_wrap">
    <form action="" method="get">
        <table class="search_tab">
            <tr>
                <th width="120">管理员登录名：</th>
                <td><input type="text" name="username" placeholder="搜索管理员"></td>
                <td><input type="submit"  value="查询"></td>
            </tr>
        </table>
    </form>
</div>
<!--结果页快捷搜索框 结束-->
<div class="result_wrap">
    <section>
        <table class="list_tab">
            <thead>
            <tr>
                <th>管理员名称</th>
                <th>权限列表</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>名</td>
                <td>
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                </td>
                <td class="tc"><a href="#">删除</a></td>
            </tr>
            </tbody>
        </table>
    </section>
</div>
</body>
</html>