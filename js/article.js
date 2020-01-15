$(function() {
    var _timeline_row_ = $("<div></div>").addClass("row");
    $(".timeline-container").append(_timeline_row_);
    var loadData = function() {
        $.getJSON("timeline.json", function(data) {
            $.each(data, function(i, tl) {
                var _timeline_ = $("<div></div>").addClass("timeline");
                _timeline_row_.append(_timeline_);

                var _time_block_ = $("<div></div>").addClass("timeline-block");
                var _time_content_ = $("<div></div>").addClass("popover timeline-content");
                _time_block_.append(_time_content_);
                /**
                 * 设置显示内容
                 */

                var _popover_title_ = $("<h3></h3>").addClass("popover-title").text(tl["diagTime"]);
                var _popover_footer_ = $("<div></div>").addClass("popover-footer").text(tl["result"]);
                var _popover_content_ = $("<div></div>").addClass("popover-content");
                _time_content_.append($("<div></div>").addClass("arrow"))
                    .append(_popover_title_)
                    .append(_popover_content_)
                    .append(_popover_footer_);
                /**
                 * 主页展示内容布局
                 */

                if (tl["images"].length > 1 && tl["images"] != "" && tl["images"] != null && tl["images"] != "undefined") {
                    var _img_container_ = $("<div></div>").css("margin-bottom", "10px");
                    var _table_container_ = $("<table></table>").addClass("table table-bordered table-condensed");
                    for (var m = 0; m < tl["images"].length; m++) {
                        _img_container_.append($("<img/>").attr("src", tl["images"][m]).css({ "width": "60px", "height": "60px", "margin-right": "10px" }));
                    }
                    _popover_content_.append(_img_container_);
                    _table_container_.append($("<tr></tr>")
                        .append($("<td nowrap></td>").text("眼象特征"))
                        .append($("<td></td>").text(tl["feature"]))
                    );

                    _table_container_.append($("<tr></tr>")
                        .append($("<td nowrap></td>").text("匹配结果"))
                        .append($("<td></td>").text(tl["matchList"]))
                    );

                    _table_container_.append($("<tr></tr>")
                        .append($("<td nowrap></td>").text("结论说明"))
                        .append($("<td></td>").text(tl["desc"]))
                    );

                    _popover_content_.append(_img_container_).append(_table_container_);

                } else if (tl["images"].length == 1 && tl["images"] != "" && tl["images"] != null && tl["images"] != "undefined") {
                    var _img_container_ = $("<div></div>")
                        .addClass("pull-left")
                        .append($("<img/>").attr("src", tl["images"][0]).css({ "margin": "5px 10px", "width": "100px", "height": "100px" }));
                    var _text_container_ = $("<p></p>").css({ "margin-left": "10px", "margin-top": "5px", "font-size": "12px" })
                        .append("眼象特征: " + tl["feature"]).append("<br/>")
                        .append("匹配结果: " + tl["matchList"]).append("<br/>")
                        .append("结论说明: " + tl["desc"]).append("<br/>");
                    _popover_content_.append(_img_container_).append(_text_container_);
                } else if (tl["images"].length < 1 || tl["images"] == "" || tl["images"] == null || tl["images"] == "undefined") {
                    var _text_container_ = $("<p></p>").css({ "margin-left": "10px", "margin-top": "5px", "font-size": "12px" })
                        .append("眼象特征: " + tl["feature"]).append("<br/>")
                        .append("匹配结果: " + tl["matchList"]).append("<br/>")
                        .append("结论说明: " + tl["desc"]).append("<br/>");
                    _popover_content_.append(_img_container_).append(_text_container_);
                }

                $(_timeline_).append(_time_block_)
                    .append($("<div></div>").addClass("timeline-img"))
                    .append($("<div></div>").addClass("timeline-line"))
                    .append($("<div></div>").addClass("clearfix"));
                if ($(_timeline_).prev().find(".timeline-block").hasClass("timeline-block-odd")) {
                    $(_timeline_).find(".timeline-block").addClass("timeline-block-even");
                    $(_timeline_).find(".timeline-block-even>.timeline-content").addClass("right").css({ "left": "150px" });
                } else {
                    $(_timeline_).find(".timeline-block").addClass("timeline-block-odd");
                    $(_timeline_).find(".timeline-block-odd>.timeline-content").addClass("left").css({ "left": "-150px" });
                }
                $(_timeline_).find(".timeline-block>.timeline-content").animate({
                    left: "0px"
                }, 1000);
            });
            if ($(window).height() >= document.documentElement.scrollHeight) {
                //没有出现滚动条,继续加载下一页
                loadData();
            }

        });


    }

    var tcScroll = function() {
        $(window).on('scroll', function() {
            var scrollTop = $(this).scrollTop();
            var scrollHeight = $(document).height();
            var windowHeight = $(this).height();
            if (scrollTop + windowHeight == scrollHeight) {
                //此处是滚动条到底部时候触发的事件，在这里写要加载的数据，或者是拉动滚动条的操作
                loadData();
            }
        })
    }
    loadData();
    tcScroll();

});