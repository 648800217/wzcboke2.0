$(function() {
    let currentPage = 1;
    let pageSize = 3;

    function render() {
        $.ajax({
            url: "./setPage.php",
            data: {
                page: currentPage,
                pageSize: pageSize
            },
            dataType: "json",
            success: function(result) {
                // 将数据渲染到页面
                $("tbody").html(template("tableTemp", {
                        item: result
                    }))
                    // 调用分页函数.参数:当前所在页, 总页数(用总条数 除以 每页显示多少条,在向上取整), ajax函数
                setPage(currentPage, Math.ceil(result[0].size / pageSize), render)
            }
        })
    }
    render()

    /**
     *
     * @param pageCurrent 当前所在页
     * @param pageSum 总页数
     * @param callback 调用ajax
     */
    function setPage(pageCurrent, pageSum, callback) {
        $(".pagination").bootstrapPaginator({
            //设置版本号
            bootstrapMajorVersion: 3,
            // 显示第几页
            currentPage: pageCurrent,
            // 总页数
            totalPages: pageSum,
            //当单击操作按钮的时候, 执行该函数, 调用ajax渲染页面
            onPageClicked: function(event, originalEvent, type, page) {
                // 把当前点击的页码赋值给currentPage, 调用ajax,渲染页面
                currentPage = page
                callback && callback()
            }
        })
    }
})