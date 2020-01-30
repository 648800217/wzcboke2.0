$(function() {
    // 初始化
    // pagination( 总条数 )   每页 10 条
    // $('#box').pagination( 56 );

    $('#box').pagination(20, {
        // 各种配置
        prev_text: "上一页",
        next_text: "下一页",
        items_per_page: 5, // 每页显示多少条
        num_edge_entries: 1, // 配置首尾按钮显示的个数
        num_display_entries: 5, // 配置连续主体显示的条目数
        current_page: 4, // 当前页索引, 从0开始
        load_first_page: false, // 表示一进入页面不需要直接调用一次回调函数
        callback: function(index) {
            alert(index);
        }
    })

});