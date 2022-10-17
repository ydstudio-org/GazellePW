<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* zh-Hans/zh-Hans.yaml */
class __TwigTemplate_724e28cef965c8191372fdaee01793636698957255cb39581ac2e5f79ac797fd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "client.upload.copied: |-
  复制成功
client.common.save: |-
  保存
client.common.cancel: |-
  取消
client.upload.uploading: |-
  上传中：
client.upload.uploaded: |-
  上传完成
client.bbcode.edit: |-
  编辑
client.bbcode.loading: |-
  加载中……
client.bbcode.preview: |-
  预览
client.common.actor: |-
  演员
client.common.are_you_sure_cannot_undone: |-
  你确定要这样操作吗？该操作不可撤销！
client.common.are_you_sure_you_want_to_cancel: |-
  你确定要取消吗？
client.common.are_you_sure_you_wish_to_delete_this_post: |-
  你确定要删除这条回帖吗？
client.common.check_all: |-
  全选
client.common.cinematographer: |-
  摄影
client.common.clear: |-
  清除
client.common.collapse_this_group: |-
  折叠本影片。在左键单击的同时按住 [Command] <em>(Mac)</em> 或 [Ctrl] <em>(PC)</em> 键以折叠";
        // line 32
        echo twig_escape_filter($this->env, ($context["section"] ?? null), "html", null, true);
        echo "所有的影片。
client.common.composer: |-
  作曲
client.common.confirm_purchase: |-
  你确定要购买 ";
        // line 36
        echo twig_escape_filter($this->env, ($context["item"] ?? null), "html", null, true);
        echo "吗？
client.common.confirm_username: |-
  请输入受赠者的用户名:
client.common.copied: |-
  已复制
client.common.director: |-
  导演
client.common.expand_this_group: |-
  展开本影片。在左键单击的同时按住 [Command] <em>(Mac)</em> 或 [Ctrl] <em>(PC)</em> 键以展开";
        // line 44
        echo twig_escape_filter($this->env, ($context["section"] ?? null), "html", null, true);
        echo "所有的影片。
client.common.hide: |-
  隐藏
client.common.in_this_release_type: |-
  本发布类型
client.common.like: |-
  赞
client.common.on_this_page: |-
  本页面
client.common.pm_user_on_edit: |-
  <span id=\"pmbox";
        // line 54
        echo twig_escape_filter($this->env, ($context["postId"] ?? null), "html", null, true);
        echo "\"><label>编辑后私信通知发帖人？<input type=\"checkbox\" name=\"pm\" value=\"1\" /></label></span>
client.common.producer: |-
  制片
client.common.request_has_been_unresolved: |-
  请求已被归入未处理类别。请刷新浏览器查看。
client.common.uncheck_all: |-
  取消全选
client.common.view: |-
  查看
client.common.writer: |-
  编剧
client.error.imdb_unknown_error: |-
  请检查 IMDb ID 是否填写有误，如果无误，请重试，重试无效，请联系管理员。
client.error.invalid_imdb_link_note: |-
  请填入格式合规的 IMDb 链接，形如 “tt1234567” 或 “https://www.imdb.com/title/tt1234567”。
client.error.request_torrent_group_exists_note: |-
  站点已有此电影，<a href='/torrents.php?id=";
        // line 70
        echo twig_escape_filter($this->env, ($context["groupID"] ?? null), "html", null, true);
        echo "'>点此</a> 查看并确保你想要的格式不存在，通过页面上方的 “请求格式” 发布求种。
client.error.torrent_group_exists_note: |-
  站点已有此电影，<a href='/torrents.php?id=";
        // line 72
        echo twig_escape_filter($this->env, ($context["groupID"] ?? null), "html", null, true);
        echo "'>点此</a> 查看并确保你想要发布的种子不与既有种子重复后，通过页面上方的 “添加格式” 发布。
client.other.client_whitelist: |-
  客户端白名单
client.screenshot_comparison.gpw_helper_not_installed: |-
  请先安装 <a href=\"https://greasyfork.org/scripts/445653-gpw-helper/code/GPW-Helper.user.js\" target=\"_blank\">GPW 助手</a>, 然后重新加载此页面
client.screenshot_comparison.help: |-
  按 ? 键查看帮助文档
client.screenshot_comparison.help_title: |-
  截图对比器帮助文档
client.screenshot_comparison.loading: |-
  加载中……
client.screenshot_comparison.pixel_compare: |-
  像素对比
client.screenshot_comparison.solar_curve: |-
  曲线滤镜
client.staffpm.assign_assigned: |-
  成功指定对话
client.staffpm.error: |-
  系统出错了
client.staffpm.response_created: |-
  成功创建回复
client.staffpm.response_deleted: |-
  成功删除回复
client.staffpm.response_edited: |-
  成功编辑回复
client.stats.torrentByDay: |-
  每日发种数
client.stats.torrentByMonth: |-
  每月发种数
client.stats.torrentByYear: |-
  每年发种数
client.torrent_table.collapse_edition: |-
  折叠本清晰度组。在左键单击的同时按住 [Command] <em>(Mac)</em> 或 [Ctrl] <em>(PC)</em> 键以折叠本影片中所有的清晰度组。
client.torrent_table.expand_edition: |-
  展开本清晰度组。在左键单击的同时按住 [Command] <em>(Mac)</em> 或 [Ctrl] <em>(PC)</em> 键以展开本影片中所有的清晰度组。
client.upload.codec_required: |-
  请选择一个编码。
client.upload.container_required: |-
  请选择一个容器。
client.upload.desc_img_3_png: |-
  请添加至少三张 PNG 格式的电影原始分辨率（非播放分辨率）截图，操作方法请见 <a href=\"wiki.php?action=article&id=51\" target=\"_blank\">本文</a>。
client.upload.desc_img_hosts: |-
  请使用发布规则 <a href=\"rules.php?p=upload#2.2.1\" target=\"_blank\">2.2.1</a> 所推荐的图床以保证截图的访问速度和有效时长。
client.upload.english_name: |-
  英文名
client.upload.imdb: |-
  IMDb
client.upload.imdb_link_required: |-
  请填写格式正确的 IMDb 链接或 ID！
client.upload.mediainfo_complete_name_required: |-
  必须要包含 Complete name 或 Disc Title 或 Disc Label。
client.upload.mediainfo_invalid_chars: |-
  你填入的 MediaInfo/BDInfo 存在错误，请自用 MdiaInfo 工具扫描获取，不要从他站直接粘贴。如果仍然失败，请在论坛反馈。
client.upload.mediainfo_required: |-
  必须填写 MediaInfo（或 BDInfo）。<br/>对于 DVD 原盘，请填写最大的 VOB 文件以及在它之前的（按文件名排序）、包含了片长信息的 IFO 文件的 MediaInfo 日志。
client.upload.mediainfo_table_space: |-
  BDInfo表格中的空格导致无法解析，请使用 Tab 空格（\\t）替代。
client.upload.movie_desc_required: |-
  请填写电影简介！
client.upload.movie_title_required: |-
  请填写电影名！
client.upload.poster_required: |-
  请填写电影海报图链！如果一张都找不到，请从电影整片里截一张并添上电影名。
client.upload.processing_required: |-
  请选择一个处理。
client.upload.releasetype_required: |-
  请根据 <a href=\"/rules.php?p=upload\">发布规则</a> 的定义指定片种！
client.upload.remaster_required: |-
  请写明种子包含的非主体内容具体是什么
client.upload.resolution_required: |-
  请选择一个分辨率。
client.upload.source_required: |-
  请选择片源。如果你不确定，请选 “Other”，然后输入 “Unknown”。
client.upload.sub_name: |-
  中文名
client.upload.subtitles_required: |-
  请指明文件所包含的字幕，如果没有就勾选 “无字幕”。
client.upload.subtitles_with_mediainfo: |-
  MediaInfo 未提供语言信息，请根据实际情况手动勾选。
client.upload.tag_required: |-
  请填写至少一个类型标签！
client.upload.torrent_file_required: |-
  请选中一个种子文件！
client.upload.year_required: |-
  请填写电影首次公映的年份！
client.validation.please_enter_a_valid_credit_card_number: |-
  请输入一个有效的信用卡号。
client.validation.please_enter_a_valid_date: |-
  请输入一个有效的日期。
client.validation.please_enter_a_valid_date_iso: |-
  请输入一个有效的日期（ISO）。
client.validation.please_enter_a_valid_date_number: |-
  请输入一个有效的数字。
client.validation.please_enter_a_valid_email_address: |-
  请输入一个有效的邮箱地址。
client.validation.please_enter_a_valid_url: |-
  请输入一个有效的网址。
client.validation.please_enter_a_value_between_x_and_y: |-
  请输入一个介于 {0} 到 {1} 之间的值。
client.validation.please_enter_a_value_between_x_and_y_characters_long: |-
  请输入一个介于 {0} 到 {1} 字符长度之间的值。
client.validation.please_enter_a_value_greater_than_or_equal_to_n: |-
  请输入一个大于等于 {0} 的值。
client.validation.please_enter_a_value_less_than_or_equal_to_n: |-
  请输入一个小于等于 {0} 的值。
client.validation.please_enter_at_least_n_characters: |-
  请输入至少 {0} 个字符。
client.validation.please_enter_no_more_than_n_characters: |-
  请输入不超过 {0} 个字符。
client.validation.please_enter_only_digits: |-
  请输入纯数字。
client.validation.please_enter_the_same_value_again: |-
  请重复输入一遍。
client.validation.please_fix_this_field: |-
  请修正此栏。
client.validation.this_field_is_required: |-
  此栏必填。
server.apply.applicant: |-
  申请人
server.apply.applicant_administration: |-
  申请管理
server.apply.application_received_from: |-
  来自 %s 的申请于 %s 被送达。
server.apply.apply: |-
  申请职位
server.apply.apply_for_a_role_at: |-
  在 ";
        // line 198
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["CONFIG"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["SITE_NAME"] ?? null) : null), "html", null, true);
        echo " 申请职位
server.apply.archived: |-
  封存
server.apply.at_least_80_characters: |-
  至少 80 字符，努力说服我们吧！
server.apply.blank_applications: |-
  申请
server.apply.choose_a_role_from_the_list: |-
  从下拉列表中选择一个职位
server.apply.comments: |-
  评论数
server.apply.current: |-
  当前
server.apply.current_applications: |-
  当前申请
server.apply.current_roles: |-
  当前职位
server.apply.date_created: |-
  创建时间
server.apply.description: |-
  描述
server.apply.edit_role: |-
  编辑
server.apply.last_comment_added: |-
  最近评论时间
server.apply.last_comment_from: |-
  最近评论来自
server.apply.manage_roles: |-
  管理职位
server.apply.manage_roles_at: |-
  管理 ";
        // line 228
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["CONFIG"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["SITE_NAME"] ?? null) : null), "html", null, true);
        echo " 的职位申请
server.apply.member_will_see_this_reply: |-
  回复用户可见
server.apply.new_applicant_one: |-
  1 新职位申请
server.apply.new_applicant_other: |-
  %s 新职位申请
server.apply.new_applicant_reply_one: |-
  1 新职位申请回复
server.apply.new_applicant_reply_other: |-
  %s 新职位申请回复
server.apply.new_role: |-
  新建
server.apply.no_current_roles: |-
  当前尚无职位。使用下方表单创建一个。
server.apply.only_staff_will_see_this_reply: |-
  回复仅管理可见
server.apply.open_roles: |-
  开放申请的职位
server.apply.public: |-
  公开
server.apply.published: |-
  开放
server.apply.referral_note: |-
  <b>内推制度：欢迎用户推荐自己的伙伴前来应聘（可推荐无号用户，应聘 TI 除外），内推成功可获得 <span class='u-colorWarning'>3 个邀请名额</span> 和 <span class='u-colorWarning'>250000 积分</span>的奖励！请推荐者使用 Staff PM（对象为 “工作组”）提交推荐信，信中需包含被推荐者的基本信息及意向沟通方式。</b>
server.apply.reply: |-
  回复
server.apply.resolved: |-
  已处理
server.apply.resolved_applications: |-
  已处理申请
server.apply.role: |-
  职位
server.apply.role_created_by: |-
  %s 创建
server.apply.role_created_by_4: |-
  ，最近修改于&nbsp;
server.apply.role_title: |-
  职位名
server.apply.saved: |-
  保存
server.apply.space_role: |-
  职位
server.apply.staff: |-
  仅管理
server.apply.thanks_for_your_interest_in_helping: |-
  感谢你对站点的支持！目前尚无职位开放申请。请对首页和论坛公告保持关注。
server.apply.the_cupboard_is_empty: |-
  目前没有申请可供展示，因此空空如也。
server.apply.the_role_was: |-
  职位 %s 已被 %s。
server.apply.updated: |-
  更新
server.apply.view_applications: |-
  查看申请
server.apply.view_your_application: |-
  查看你的申请
server.apply.visibility: |-
  可见性
server.apply.you_need_choose_role: |-
  你得选择一个自己感兴趣的职位。
server.apply.you_need_explain_more: |-
  你得多说两句。
server.apply.your_cover_letter: |-
  你的求职申请
server.artist.1021: |-
  执导
server.artist.1022: |-
  编剧
server.artist.1023: |-
  制片
server.artist.1024: |-
  作曲
server.artist.1025: |-
  摄影
server.artist.1026: |-
  参演
server.artist.add_alias: |-
  添加一个别名
server.artist.add_alias_note: |-
  此功能会对新增（比如发布种子或添加艺人时）艺人名进行重定向。在下方填入的艺人名添加后，一切在站点新增的该名称都会被目标艺人名取代（在站点实际显示目标艺人名而非新增时填写的艺人名）。适用于常见的拼写错误、他语艺人名等。
server.artist.add_similarartist: |-
  添加相似艺人
server.artist.added: |-
  发布时间
server.artist.aliases_list: |-
  艺人当前别名列表
server.artist.an_alias_already_exists: |-
  此别名已存在，请见 <a href=\"artist.php?id=%s\">此处</a>。你可以尝试将艺术家重命名为此名。
server.artist.artist_aliases: |-
  艺人别名组
server.artist.artist_deleted: |-
  艺人已删除
server.artist.artist_id: |-
  艺人编号
server.artist.artist_info: |-
  艺人信息
server.artist.chinese_biography: |-
  中文艺人简介
server.artist.english_biography: |-
  英文艺人简介
server.artist.artist_name: |-
  艺人名
server.artist.artist_x_deleted: |-
  艺人 “%s” 删除成功！
server.artist.artistcomments: |-
  评论
server.artist.as_an_artist: |-
  &nbsp;这位艺人。
server.artist.blank_artist_name: |-
  Blank artist name.
server.artist.bounty: |-
  报酬
server.artist.box_search: |-
  文件列表搜索
server.artist.cannot_redirect: |-
  Cannot redirect to a nonexistent artist alias.
server.artist.change_artist_id: |-
  修改艺人ID
server.artist.confirm_merge: |-
  合并确认
server.artist.confirm_merge_body: |-
  请确认你想将 %s 合并到 %s 的名下。
server.artist.delete_this_alias: |-
  删除此别名
server.artist.edit_artist: |-
  编辑艺人
server.artist.edit_details: |-
  编辑详情
server.artist.edit_summary: |-
  编辑摘要
server.artist.editrequest: |-
  请求编辑
server.artist.empty_introduction_note: |-
  （这位艺人还没有介绍，快去编辑页面补上吧！）
server.artist.image: |-
  头像链接
server.artist.imdb_artist_id: |-
  IMDb 艺人编号
server.artist.imdb_born_area: |-
  出生地点
server.artist.imdb_born_date: |-
  出生日期
server.artist.imdb_link: |-
  IMDb 链接
server.artist.info: |-
  信息
server.artist.loading: |-
  加载中……
server.artist.make_into: |-
  移入艺人别名组
server.artist.make_into_note: |-
  将此艺人移入下方指定的艺人别名组，以使其所属别名成为下填艺人的别名。
server.artist.merging_artists: |-
  合并艺人
server.artist.name: |-
  别名
server.artist.no_changes_were_made: |-
  由于目标别名没有任何重定向目标，因此改动并未执行。
server.artist.number_of_groups: |-
  影片数
server.artist.number_of_leechers: |-
  下载数
server.artist.number_of_seeders: |-
  做种数
server.artist.number_of_snatches: |-
  完成数
server.artist.number_of_torrents: |-
  种子数
server.artist.or: |-
  或
server.artist.please_remove_the_artist_from_these_requests: |-
  请在尝试删除前手动将艺人从这些求种中移除。
server.artist.please_remove_the_artist_from_these_torrents: |-
  请在尝试删除前手动将艺人从这些种子中删除。
server.artist.re_torrents: |-
  发布求种
server.artist.redirect_to: |-
  目标艺人名
server.artist.redirection_must_target: |-
  当前艺术家的重定向必须指向一个别名。
server.artist.remove_similar_artist_title: |-
  删除该相似艺人
server.artist.rename: |-
  重命名艺人
server.artist.request_an_edit: |-
  请求编辑
server.artist.request_name: |-
  求种名
server.artist.revert: |-
  还原该版
server.artist.revision_history: |-
  历史版本
server.artist.similar_artist_cloud: |-
  相似艺人浮云图
server.artist.similar_artist_map: |-
  相似艺人关系图
server.artist.similarartist: |-
  相似艺人
server.artist.similarartist_note: |-
  未发现
server.artist.statistics: |-
  统计
server.artist.sub_name: |-
  中文名
server.artist.switch_to_cloud: |-
  切换到浮云图
server.artist.switch_to_map: |-
  切换到关系图
server.artist.search_auto_fill: |-
  搜索以自动填充
server.artist.tag: |-
  标签
server.artist.there_are_still_requests_that_have: |-
  当前仍有一些求种包含&nbsp;
server.artist.there_are_still_torrents_that_have: |-
  当前仍有一些种子包含&nbsp;
server.artist.torrents_notify: |-
  订阅新种
server.artist.torrents_unnotify: |-
  退订新种
server.artist.user: |-
  用户
server.artist.view: |-
  查看
server.artist.view_artist: |-
  查看艺人
server.artist.view_torrent_group: |-
  查看种子组
server.artist.viewhistory: |-
  历史版本
server.artist.vote: |-
  投票
server.artist.vote_down_similar_artist_title: |-
  反对该相似艺人：在你认为两个艺人不怎么相似时可点此按钮
server.artist.vote_up_similar_artist_title: |-
  支持该相似艺人：在你认为两个艺人确实很相似时可点此按钮
server.artist.writes_redirect_to: |-
  重定向到
server.artist.you_are_req_for: |-
  你当前请求编辑的艺人是
server.artist.you_are_req_for_note: |-
  <p>请详细写明编辑该艺人所需的信息，包括所有相关链接（IMDb、豆瓣等）。<br /><br />请求编辑不会生成报告，但会在论坛的 “编辑请求” 版块生成一个帖子。<br /><br />该功能可用于：</p> <ul> <li>重命名艺人</li> <li>取消或设置别名的重定向</li> <li>增／删别名</li> <li>其他……</li> </ul> <p>绝对不要将此功能用于种子或种子组。对于单个的种子，使用种子报告功能；对于种子组，前往其各自的页面使用请求编辑功能。</p>
server.badges.badge_achievement_progress: |-
  成就进度
server.badges.badge_display: |-
  印记展示
server.badges.badge_exchange: |-
  兑换
server.badges.badge_introduction: |-
  印记介绍
server.badges.badge_log: |-
  获取历史
server.badges.badge_log_detail: |-
  历史记录
server.badges.badge_name: |-
  名称
server.badges.badge_obtained_time: |-
  时间
server.badges.badge_preview: |-
  印记预览
server.badges.badge_price: |-
  售价
server.badges.badge_store: |-
  印记商城
server.badges.badge_unshelve: |-
  下架时间
server.badges.badges_center: |-
  印记中心
server.badges.index_badge: |-
  印记
server.badges.sold_out: |-
  已售空
server.badges.you_do_not_display_any_badge: |-
  你已经拥有印记，但没有设置展示，所以这里空空如也哟~
server.badges.you_do_not_have_any_badge: |-
  你还没有任何印记，无法装扮自己的印记展示区哦~
server.blog.body: |-
  正文
server.blog.by: |-
  发布者是
server.blog.create_a_blog_post: |-
  发布博文
server.blog.create_staff_blog_post: |-
  新建管理组博文
server.blog.discuss_this_post_here: |-
  点此讨论
server.blog.do_you_want_to_delete_this: |-
  确定要删除这篇博文吗？
server.blog.edit_blog_post: |-
  编辑博文
server.blog.edit_staff_blog_post: |-
  编辑管理组博文
server.blog.important: |-
  重要
server.blog.please_enter_a_title: |-
  请输入标题。
server.blog.posted: |-
  发布于
server.blog.remove_link: |-
  取消关联
server.blog.staff_blog: |-
  管理组博客
server.blog.thread_id: |-
  主题 ID
server.blog.thread_id_note: |-
  （留空以自动生成主题，填 0 则不生成主题）
server.blog.title: |-
  标题
server.bonus.about_bonus_points: |-
  积分规则
server.bonus.bbcode_allowed: |-
  允许 BBCode
server.bonus.bonus_point_rates: |-
  积分计算
server.bonus.bonus_points_purchase_history: |-
  积分消费历史
server.bonus.bonus_points_shop: |-
  积分商城
server.bonus.bonus_points_spending_history: |-
  积分消费历史
server.bonus.bonus_points_spending_history_for: |-
  %s的积分消费历史
server.bonus.bonus_points_title: |-
  积分商城 - 头衔
server.bonus.bonus_points_to_purchase: |-
  积分用于购买
server.bonus.bp_day: |-
  日积分
server.bonus.bp_hour: |-
  时积分
server.bonus.bp_month: |-
  月积分
server.bonus.bp_week: |-
  周积分
server.bonus.bp_year: |-
  年积分
server.bonus.checkout: |-
  结算
server.bonus.custom_title: |-
  用户自定义头衔
server.bonus.description: |-
  商品名
server.bonus.eliminate_a_hnr: |-
  消除一个 H&R
server.bonus.history: |-
  消费历史
server.bonus.invite: |-
  1 枚邀请
server.bonus.item: |-
  件商品
server.bonus.items: |-
  件商品
server.bonus.need_higher_user_class: |-
  等级不够
server.bonus.no_bbcode_allowed: |-
  不允许 BBCode
server.bonus.no_purchase_history: |-
  无消费历史。
server.bonus.no_torrent_seeded_currently: |-
  当前没有正在做种的种子。
server.bonus.other-1: |-
  将 1 枚令牌送与他人
server.bonus.other-2: |-
  将 10 枚令牌送与他人
server.bonus.other-3: |-
  将 50 枚令牌送与他人
server.bonus.period: |-
  。
server.bonus.points: |-
  积分
server.bonus.points_price: |-
  售价
server.bonus.purchase: |-
  购买
server.bonus.purchased: |-
  购买成功！
server.bonus.s_bonus_point_rate: |-
  &nbsp;的积分获取速率
server.bonus.seeders: |-
  做种
server.bonus.seedtime: |-
  做种时长
server.bonus.size: |-
  大小
server.bonus.statistical_size: |-
  统计大小
server.bonus.th_for: |-
  受惠人
server.bonus.th_item: |-
  项目
server.bonus.th_price: |-
  价格
server.bonus.th_purchase_date: |-
  购买日期
server.bonus.title-bb-n: |-
  用户自定义头衔（不允许 BBCode）
server.bonus.title-bb-y: |-
  用户自定义头衔（允许 BBCode）
server.bonus.title-off: |-
  移除用户自定义头衔
server.bonus.token-1: |-
  1 枚令牌
server.bonus.token-2: |-
  10 枚令牌
server.bonus.token-3: |-
  50 枚令牌
server.bonus.token-4: |-
  100 枚令牌
server.bonus.too_expensive: |-
  积分不足
server.bonus.torrent: |-
  种子
server.bonus.total_points: |-
  总积分
server.bonus.total_torrents: |-
  种子总数
server.bonus.upload-1: |-
  5GB 上传量
server.bonus.upload-2: |-
  50GB 上传量
server.bonus.upload-3: |-
  250GB 上传量
server.bonus.upload-4: |-
  500GB 上传量
server.bonus.you_cannot_afford_this_item: |-
  你的余额不足以支付此商品的价格。
server.bonus.you_have_spent: |-
  你已花费
server.bonus.your_bonus_point_rate: |-
  你的积分获取速率
server.bookmarks.add_some_torrents_and_come_back_later: |-
  添加一些种子，回头再来。
server.bookmarks.bookmark: |-
  加入收藏
server.bookmarks.bookmarked: |-
  已收藏
server.bookmarks.collages: |-
  合集
server.bookmarks.current_order: |-
  当前顺序
server.bookmarks.dont_notify_new: |-
  关闭新种提醒
server.bookmarks.drag_drop_textnote_torrents: |-
  <ul> <li>单击列标题的按钮以自动排序。</li> <li>按住 [Shift] 键并单击其他列标题，同时对多个列排序。</li> <li>拖放任意行以改变其顺序。</li> <li>双击以快速勾选一行。</li> </ul>
server.bookmarks.manage_torrents: |-
  管理种子
server.bookmarks.no_bookmarked_artists: |-
  你尚未收藏任何艺人
server.bookmarks.no_bookmarked_torrents: |-
  你尚未收藏任何种子
server.bookmarks.no_torrents_found: |-
  空空如也。
server.bookmarks.notify_new: |-
  新种提醒
server.bookmarks.order: |-
  顺序
server.bookmarks.organize_bookmarks: |-
  管理收藏
server.bookmarks.organize_torrent_bookmarks: |-
  管理种子收藏
server.bookmarks.remove: |-
  移除
server.bookmarks.remove_snatched: |-
  移出已完成种子
server.bookmarks.remove_snatched_confirm: |-
  你确定要将所有已完成种子移出收藏吗？
server.bookmarks.s_bookmarked_artists: |-
  &nbsp;收藏的艺人
server.bookmarks.s_bookmarked_torrent_groups: |-
  &nbsp;收藏的种子组
server.bookmarks.sorting: |-
  排序
server.bookmarks.stats: |-
  统计
server.bookmarks.top_artists: |-
  艺人排行
server.bookmarks.top_tags: |-
  标签排行
server.bookmarks.torrent_groups: |-
  种子组
server.bookmarks.year: |-
  年
server.bookmarks.your_bookmarked_artists: |-
  你收藏的艺人
server.bookmarks.your_bookmarked_torrent_groups: |-
  你收藏的电影
server.collages.a_collage_with_that_name_already_exists_1: |-
  同名合集已存在，但需要恢复，请 <a href=\"staffpm.php\">联系</a> 管理组。
server.collages.add_comment: |-
  发表评论
server.collages.add_to_collage: |-
  加入合集
server.collages.add_torrent_group: |-
  添加种子组
server.collages.add_torrent_group_note1: |-
  输入站点种子组的网页链接。
server.collages.add_torrent_group_note2: |-
  输入站点种子组的网页链接，每行一个。
server.collages.adder: |-
  添加者
server.collages.all: |-
  全部
server.collages.any: |-
  任一
server.collages.author: |-
  创建者
server.collages.batch_add: |-
  批量添加
server.collages.bookmarks_collages: |-
  合集收藏
server.collages.browse_collages: |-
  合集
server.collages.built_by_n_users: |-
  贡献者共计%s%s
server.collages.category: |-
  类别
server.collages.collage: |-
  合集
server.collages.collage_add_error: |-
  加入失败
server.collages.collage_add_success: |-
  加入成功
server.collages.collage_id: |-
  合集 ID
server.collages.collage_is_completely_deleted: |-
  合集已被删除
server.collages.collage_recovery: |-
  合集恢复
server.collages.collage_search: |-
  搜索合集
server.collages.collagecats:
  '1': |-
    私人合集
  '2': |-
    主题合集
  '3': |-
    类型介绍
  '4': |-
    系列电影
  '5': |-
    制片公司
  '6': |-
    管理精选
  '7': |-
    影评榜单
  '8': |-
    获奖名录
server.collages.collages: |-
  合集
server.collages.collages_list: |-
  合集总览
server.collages.comments: |-
  评论
server.collages.contributed_collages: |-
  你参与的合集
server.collages.create_collages: |-
  创建合集
server.collages.delete_collage: |-
  删除合集
server.collages.delete_confirm: |-
  你确定要删除该合集吗？
server.collages.delete_warning: |-
  警告：这是一个私人合集。如果你删掉，它是<em>不能</em>恢复的！
server.collages.description: |-
  描述
server.collages.drag_drop_textnote: |-
  <ul> <li>单击列标题的按钮以自动排序。</li> <li>按住 [Shift] 键并单击其他列标题，同时对多个列排序。</li> <li>拖放任意行以改变其顺序。</li> <li>结束排序，请点击 “保存” 以保存结果。</li> <li>点击 “Edit” 或 “Remove” 来修改单个条目。</li> </ul>
server.collages.edit_collage: |-
  编辑合集
server.collages.edit_description: |-
  编辑描述
server.collages.edit_tags: |-
  标签
server.collages.featured: |-
  推荐
server.collages.featured_title: |-
  “推荐” 的私人合集及其内含种子的部分预览会在你的个人页面展示出来。
server.collages.ft_order: |-
  排序
server.collages.ftb_searchstr: |-
  搜索关键词
server.collages.individual_add: |-
  单个添加
server.collages.last_updated: |-
  最近更新
server.collages.locked: |-
  锁定
server.collages.manage_collage: |-
  管理合集
server.collages.manage_torrents: |-
  管理电影
server.collages.max_groups: |-
  影片数上限
server.collages.max_groups_per_user: |-
  单用户影片添加上限
server.collages.name: |-
  名称
server.collages.new_category: |-
  类别
server.collages.new_category_note: |-
  <li><strong>主题合集：</strong>与特定主题相关的电影（如「武侠电影」「抗战电影」等）；</li> <li><strong>类型介绍：</strong>由本站用户所编撰的对某一电影类型的主观性介绍；</li> <li><strong>制片公司：</strong>来自某一特定制片公司的所有电影；</li> <li><strong>管理精选：</strong>由管理员或特定级别的用户在特定场合下挑选的推荐电影清单；</li> <li><strong>获奖名录：</strong>包含了在某一奖项中获奖和提名的电影（如「中国电影金鸡奖」「大众电影百花奖」「中国电影华表奖」）；</li> <li><strong>系列电影：</strong>包含了同一主题且故事具有关联性的一系列电影（如《钢铁侠》三部，《复仇者联盟》四部）；</li> <li><strong>影评榜单：</strong>由较为权威的个人或组织按一定标准选出的一批电影（如「IMDb Top 1000」「豆瓣电影 Top 250」等）；</li>
server.collages.new_category_note2: |-
  <li><strong>私人合集：</strong>专属于你个人的合集，想放啥都可以。</li>
server.collages.new_create: |-
  创建合集
server.collages.new_description: |-
  描述
server.collages.new_name: |-
  名称
server.collages.new_note: |-
  <strong>请确保你创建的合集符合 <a href='rules.php?p=collages'>合集规则</a>。</strong>
server.collages.open_collage: |-
  查看合集
server.collages.order: |-
  顺序
server.collages.personal_collage: |-
  私人合集
server.collages.personal_collages: |-
  私人合集
server.collages.please_select_a_category: |-
  请选择一个类别
server.collages.random_collages: |-
  随机合集
server.collages.reason: |-
  原因
server.collages.recover_collages: |-
  恢复合集
server.collages.recover_deleted_collage: |-
  已删合集恢复
server.collages.report: |-
  报告
server.collages.report_collage: |-
  报告合集
server.collages.result_1: |-
  你并未收藏任何合集。
server.collages.result_2: |-
  搜索结果空空如也
server.collages.result_3: |-
  请确认名称拼写准确无误，或是降低搜索条件
server.collages.search: |-
  搜索
server.collages.search_ascending: |-
  升序
server.collages.search_descending: |-
  降序
server.collages.search_descriptions: |-
  描述
server.collages.search_for: |-
  搜索范围
server.collages.search_name: |-
  名称
server.collages.search_subscribers: |-
  订阅数
server.collages.search_time: |-
  创建时间
server.collages.search_torrents: |-
  种子数
server.collages.search_updated: |-
  最近更新
server.collages.selected_collage_author: |-
  创建者
server.collages.selected_collage_category: |-
  类别
server.collages.selected_collage_description: |-
  描述
server.collages.sorting: |-
  排序方法
server.collages.start_collages: |-
  你发起的合集
server.collages.statistics: |-
  统计
server.collages.subscribe: |-
  订阅新种
server.collages.subscribed_collages: |-
  合集订阅
server.collages.subscribers: |-
  订阅数
server.collages.tags: |-
  标签 (逗号分隔)
server.collages.that_collage_already_exists_1: |-
  同名合集已存在，但需要恢复，请 <a href=\"staffpm.php\">联系</a> 管理组。
server.collages.the_description_must_between: |-
  描述须介于 10~65535 字符之间
server.collages.the_name_must_between: |-
  名称须介于 3~100 字符之间
server.collages.top_artists: |-
  艺人排行
server.collages.top_contributors: |-
  贡献者排行
server.collages.top_tags: |-
  标签排行
server.collages.tweak: |-
  调整
server.collages.tweak_title: |-
  修改单个条目
server.collages.type: |-
  类别
server.collages.unsubscribe: |-
  退订新种
server.collages.updated: |-
  最近更新
server.collages.user_one: |-
  人
server.collages.user_other: |-
  人
server.collages.user_s_personal_collage: |-
  &nbsp;的私人合集
server.collages.you_may_not_create_a_personal_collage: |-
  你不能再创建私人合集了。
server.collages.your_bookmarked_collages: |-
  你收藏的合集
server.collages.your_personal_collage_must: |-
  你的私人合集名称内须含有你的用户名。
server.comments.artist_comments: |-
  艺人评论
server.comments.artist_comments_left_by_user: |-
  %s发布的艺人评论
server.comments.collage_comments: |-
  合集评论
server.comments.collage_comments_left_by_user: |-
  %s发布的合集评论
server.comments.collages_created_by: |-
  &nbsp;%s&nbsp;所创建合集
server.comments.comments_left_on_collages_user_created: |-
  &nbsp;%s&nbsp;所创建合集中的评论
server.comments.comments_left_on_collages_user_has_contributed_to: |-
  %s所参与合集中的评论
server.comments.comments_left_on_requests_user_created: |-
  %s所发布求种中的评论
server.comments.comments_left_on_requests_user_has_voted_on: |-
  %s所投票求种中的评论
server.comments.comments_left_on_torrents_user_has_uploaded: |-
  %s所发布种子中的评论
server.comments.display_comments_left_on_collages_user_has_contributed_to: |-
  显示%s所参与合集中的评论
server.comments.display_comments_left_on_collages_user_has_made: |-
  显示%s发布的合集评论
server.comments.display_comments_left_on_requests_user_created: |-
  显示%s所发布求种中的评论
server.comments.display_comments_left_on_requests_user_has_made: |-
  显示%s发布的求种评论
server.comments.display_comments_left_on_requests_user_has_voted_on: |-
  显示%s所投票求种中的评论
server.comments.display_comments_left_on_torrents_user_has_made: |-
  显示%s发布的种子评论
server.comments.display_comments_left_on_torrents_user_has_uploaded: |-
  显示%s所发布种子中的评论
server.comments.display_comments_left_on_users_collages: |-
  显示%s中的评论
server.comments.no_results: |-
  空空如也。
server.comments.request_comments: |-
  求种评论
server.comments.request_comments_left_by_user: |-
  %s发布的求种评论
server.comments.space_on_space: |-
  &nbsp;于&nbsp;
server.comments.torrent_comments: |-
  种子评论
server.comments.torrent_comments_left_by: |-
  %s发布的种子评论
server.comments.user_has: |-
  &nbsp;%s&nbsp;
server.comments.username_space: |-
  &nbsp;%s&nbsp;
server.comments.you: |-
  我
server.comments.you_ve: |-
  我
server.comments.your_collages: |-
  我所创建合集
server.common.actions: |-
  操作
server.common.add: |-
  添加
server.common.add_bookmark: |-
  加入收藏
server.common.artist: |-
  艺人
server.common.artists: |-
  艺人
server.common.bonus: |-
  积分
server.common.collages: |-
  合集
server.common.collapse_this_edition_title: |-
  折叠本次分组。在左键单击的同时按住 [Command] <em>(Mac)</em> 或 [Ctrl] <em>(PC)</em> 键以折叠本影片中所有的次分组。
server.common.collapse_this_group_title: |-
  折叠本影片。在左键单击的同时按住 [Command] <em>(Mac)</em> 或 [Ctrl] <em>(PC)</em> 键以折叠本页面所有的影片。
server.common.comma_separated: |-
  以英文逗号分隔
server.common.comma_separated_edition: |-
  以英文逗号分隔各版本信息
server.common.countries_and_regions: |-
  国家和地区
server.common.date: |-
  日期
server.common.delete: |-
  删除
server.common.modify: |-
  修改
server.common.director: |-
  导演
server.common.douban_rating: |-
  豆瓣评分
server.common.download: |-
  下载
server.common.downloaded: |-
  下载量
server.common.edit: |-
  编辑
server.common.edition_info: |-
  版本信息
server.common.enable_requests: |-
  &nbsp;账号恢复申请
server.common.error: |-
  错误
server.common.error_403_description: |-
  你刚刚试图查看你无权访问的页面。
server.common.error_403_title: |-
  错误 403
server.common.error_404_description: |-
  你刚刚试图查看不存在的页面。
server.common.error_404_title: |-
  错误 404
server.common.external_subtitles: |-
  外挂
server.common.feature_film: |-
  长片
server.common.fltoken: |-
  令牌
server.common.format: |-
  格式
server.common.forums: |-
  论坛
server.common.github: |-
  GitHub
server.common.gpw_rating: |-
  GPW 评分
server.common.hide: |-
  隐藏
server.common.image_host: |-
  图床
server.common.imdb_rating: |-
  IMDb 评分
server.common.in_torrent_hard_subtitles: |-
  硬字
server.common.in_torrent_subtitles: |-
  内封
server.common.inbox: |-
  我的信箱
server.common.include_all_aliases: |-
  同时搜索所有别名
server.common.index: |-
  首页
server.common.invalid_input_description: |-
  你发出的请求提供了无效输入，服务器拒绝完成该请求。
server.common.invalid_input_title: |-
  无效输入
server.common.invalid_request_description: |-
  你发出的请求存在错误，服务器拒绝完成该请求。
server.common.invalid_request_title: |-
  无效请求
server.common.invite: |-
  邀请
server.common.jump_to_last_read: |-
  跳转到最近的已读帖子
server.common.lang_chs: |-
  简体中文
server.common.lang_en: |-
  English
server.common.language: |-
  语言
server.common.language_region: |-
  语言和地区
server.common.leechers: |-
  下载
server.common.live_performance: |-
  现场演出
server.common.log: |-
  日志
server.common.logout: |-
  注销
server.common.menu_upload_title: |-
  上传／发布
server.common.miniseries: |-
  迷你剧
server.common.missing: |-
  空槽总览
server.common.movie_collection: |-
  电影集
server.common.movie_name: |-
  电影名
server.common.movie_name_title: |-
  电影名或 IMDb ID
server.common.my_badges: |-
  印记管理
server.common.my_bookmarks: |-
  我的收藏
server.common.my_comments: |-
  我的评论
server.common.my_friends: |-
  我的好友
server.common.my_notify: |-
  RSS 推送
server.common.my_subscriptions: |-
  订阅管理
server.common.my_uploaded: |-
  我的发布
server.common.n_fl_token_one: |-
  %s 枚免费令牌
server.common.n_fl_token_other: |-
  %s 枚免费令牌
server.common.no_torrent_tags: |-
  无标签
server.common.not_seeded_sure_use_fl: |-
  注意！该种子目前无人做种，你确定要为它使用 %s 吗？
server.common.others: |-
  其他
server.common.profile: |-
  账号
server.common.rating: |-
  评分
server.common.ratio: |-
  分享率
server.common.remove: |-
  删除
server.common.remove_bookmark: |-
  移出收藏
server.common.rename: |-
  重命名
server.common.report: |-
  报告
server.common.requests: |-
  求种
server.common.required_ratio: |-
  合格分享率
server.common.revision: |-
  版本号
server.common.rss: |-
  RSS
server.common.rt_rating: |-
  烂番茄评分
server.common.rules: |-
  规则
server.common.search: |-
  搜索
server.common.seeders: |-
  做种
server.common.setting: |-
  设置
server.common.short_film: |-
  短片
server.common.show: |-
  显示
server.common.size: |-
  大小
server.common.snatched: |-
  已完成
server.common.ssp: |-
  代理
server.common.staff: |-
  管理
server.common.staffpm: |-
  管理私信
server.common.stand_up_comedy: |-
  单口喜剧
server.common.submit: |-
  提交
server.common.subscribe: |-
  订阅
server.common.subtitle: |-
  字幕
server.common.subtitles: |-
  字幕
server.common.summary: |-
  摘要
server.common.sure_use_fl: |-
  你确定要为它使用 %s 吗？
server.common.tags: |-
  标签
server.common.telegram: |-
  Telegram
server.common.time: |-
  时间
server.common.toggle: |-
  显隐
server.common.top_10: |-
  排行
server.common.torrent: |-
  种子
server.common.torrents: |-
  种子
server.common.type: |-
  片种
server.common.unexpected_error_description: |-
  你遇到了预期之外的错误。
server.common.unexpected_error_title: |-
  预期之外的错误
server.common.unsubscribe: |-
  退订
server.common.uploaded: |-
  上传量
server.common.use_fl_tokens: |-
  使用令牌免费下载
server.common.user: |-
  用户
server.common.users: |-
  用户
server.common.view_torrent: |-
  查看种子
server.common.wiki: |-
  Wiki
server.common.year: |-
  年
server.donate.added_time: |-
  时间
server.donate.bronze_rank: |-
  青铜
server.donate.card_num: |-
  卡号
server.donate.card_num_length: |-
  17 位数字
server.donate.card_secret: |-
  卡秘
server.donate.card_secret_length: |-
  18 位数字
server.donate.copper_rank: |-
  黄心
server.donate.diamond_rank: |-
  钻石
server.donate.donate: |-
  捐助
server.donate.donate_error: |-
  系统错误
server.donate.donor_ranks: |-
  捐助等级
server.donate.duplicated_card: |-
  该充值卡已被使用！
server.donate.face_value: |-
  面值
server.donate.failed: |-
  失败
server.donate.gold_rank: |-
  黄金
server.donate.has_pending_donation: |-
  &nbsp;条未处理的捐助
server.donate.history: |-
  历史
server.donate.how_to_donate: |-
  如何捐助？
server.donate.incorrect_card_num: |-
  请填写正确的卡号信息！
server.donate.incorrect_card_secret: |-
  请填写正确的卡密信息！
server.donate.incorrect_face_value: |-
  请选择正确的面值！
server.donate.invites: |-
  邀请名额
server.donate.pending: |-
  处理中
server.donate.personal_collages: |-
  个人合集
server.donate.prepaid_card: |-
  充值卡捐助
server.donate.profile_info: |-
  个人介绍
server.donate.progress: |-
  捐助（已达到年目标的 %d%%）
server.donate.red_rank: |-
  爱心
server.donate.silver_rank: |-
  白银
server.donate.status: |-
  状态
server.donate.success: |-
  成功
server.donate.tutorials: |-
  教程
server.donate.unlockable_reward: |-
  可解锁奖励
server.donate.unlockable_reward_1: |-
  免疫 <a href=\"/wiki.php?action=article&id=73\">账号不活跃</a>
server.donate.unlockable_reward_2: |-
  捐助图标鼠标悬停文本
server.donate.unlockable_reward_3: |-
  头像鼠标悬停文本
server.donate.unlockable_reward_4: |-
  捐助图标外部链接
server.donate.unlockable_reward_5: |-
  自定义捐助图标、捐助者版块访问权
server.donate.view_donor_perks_img: |-
  查看捐助等级福利图解
server.donate.view_donor_system_faq: |-
  查看捐助系统常见问题解答
server.donate.want_donate: |-
  我想捐助
server.donate.what_will_receive: |-
  捐助之后你能获得
server.donate.what_wont_receive: |-
  捐助之后你不能获得
server.donate.why_donate: |-
  关于捐助<strong class=\"u-colorWarning\">（必读）</strong>
server.donate.yuan: |-
  元
server.editioninfo.10_bit: |-
  10-bit
server.editioninfo.2_disc_set: |-
  双碟套装
server.editioninfo.2_in_1: |-
  二合一
server.editioninfo.2d_3d_edition: |-
  2D/3D版
server.editioninfo.3d_anaglyph: |-
  红蓝3D
server.editioninfo.3d_full_sbs: |-
  全宽3D
server.editioninfo.3d_half_ou: |-
  半高3D
server.editioninfo.3d_half_sbs: |-
  半宽3D
server.editioninfo.4k_remaster: |-
  4K重制版
server.editioninfo.4k_restoration: |-
  4K修复版
server.editioninfo.collections: |-
  珍藏集
server.editioninfo.director_s_cut: |-
  导演剪辑版
server.editioninfo.dolby_atmos: |-
  杜比全景声
server.editioninfo.dolby_vision: |-
  杜比视界
server.editioninfo.dts_x: |-
  DTS:X
server.editioninfo.dual_audio: |-
  双音轨
server.editioninfo.editions: |-
  版本
server.editioninfo.english_dub: |-
  英语配音
server.editioninfo.extended_edition: |-
  加长版
server.editioninfo.extras: |-
  额外内容
server.editioninfo.features: |-
  特点
server.editioninfo.hdr10: |-
  HDR10
server.editioninfo.hdr10plus: |-
  HDR10+
server.editioninfo.masters_of_cinema: |-
  电影大师
server.editioninfo.remaster: |-
  重制版
server.editioninfo.remux: |-
  Remux
server.editioninfo.rifftrax: |-
  RiffTrax
server.editioninfo.the_criterion_collection: |-
  标准收藏
server.editioninfo.theatrical_cut: |-
  影院版
server.editioninfo.uncut: |-
  未删减版
server.editioninfo.unrated: |-
  未分级版
server.editioninfo.warner_archive_collection: |-
  华纳档案馆
server.editioninfo.with_commentary: |-
  评论音轨
server.forums.after: |-
  晚于
server.forums.answers: |-
  选项
server.forums.as_system: |-
  系统
server.forums.author: |-
  作者
server.forums.auto_locked: |-
  自动锁定
server.forums.before: |-
  早于
server.forums.blank: |-
  弃权 - 显示结果
server.forums.blank_show_results: |-
  留空&#8202;&mdash;&#8202;显示结果！
server.forums.body: |-
  正文
server.forums.bonus: |-
  积分
server.forums.bonus_giver: |-
  赠送人
server.forums.bonus_giving: |-
  赠送积分
server.forums.bonus_reward: |-
  积分奖励
server.forums.by: |-
  发帖人是
server.forums.by_user_just_now: |-
  &nbsp;刚刚发布
server.forums.cant_like_yourself: |-
  无法赞自己。
server.forums.catch_up: |-
  全部设置已读
server.forums.change_specific_rules: |-
  更改版规
server.forums.check_all: |-
  全选
server.forums.checkbox_merge: |-
  合并
server.forums.checkbox_subscribe: |-
  订阅
server.forums.closed: |-
  已结束
server.forums.comment_optional: |-
  评论（可选）
server.forums.comments: |-
  评论
server.forums.confirm: |-
  确定
server.forums.create_one: |-
  发布一个！
server.forums.customize: |-
  自定义
server.forums.delete_poll_option: |-
  删除投票选项
server.forums.delete_poll_option_title: |-
  你确定想要删除该投票选项？
server.forums.delete_thread: |-
  删除主题
server.forums.dont_auto_locked: |-
  不自动锁定
server.forums.edit_forum_specific_rules: |-
  编辑版规
server.forums.edit_thread: |-
  编辑主题
server.forums.either_the_thread_is_locked_or: |-
  帖子已锁定，或是你没有编辑此帖子的权限。
server.forums.featured: |-
  首页显示
server.forums.forum: |-
  版块
server.forums.forum_specific_rules: |-
  版规
server.forums.forums: |-
  论坛
server.forums.forums_greater_than_search: |-
  论坛 &gt; 搜索
server.forums.index_refresh: |-
  首页显示
server.forums.jump_to_last_read: |-
  跳转到最近的已读帖子
server.forums.last_edit_by: |-
  最近由 %s 编辑于
server.forums.last_edited_by: |-
  最近由 %s 编辑于
server.forums.last_post: |-
  最新回帖
server.forums.last_post_time: |-
  最近回帖时间
server.forums.latest: |-
  最新主题
server.forums.like: |-
  赞
server.forums.limited: |-
  限投%s项
server.forums.locked: |-
  锁定
server.forums.missing_votes: |-
  弃权票
server.forums.move_thread: |-
  移动主题到
server.forums.new_thread: |-
  发布主题
server.forums.new_topic: |-
  新主题
server.forums.no_threads_in_forum: |-
  本版空空如也。
server.forums.only_starter: |-
  回帖仅楼主可见
server.forums.only_tc: |-
  TC 专用
server.forums.personal_reward: |-
  个人奖励
server.forums.please_select_an_option: |-
  请选择一项。
server.forums.poll: |-
  投票
server.forums.poll_settings: |-
  投票设置
server.forums.post_bodies: |-
  帖子内容
server.forums.post_by: |-
  发帖人
server.forums.post_comment: |-
  评论
server.forums.post_created: |-
  帖子发布时间
server.forums.post_reply: |-
  发帖
server.forums.posted_by: |-
  发帖人
server.forums.posts: |-
  帖子
server.forums.question: |-
  问题
server.forums.quote: |-
  回复
server.forums.ranking: |-
  排序
server.forums.replies: |-
  回帖
server.forums.report: |-
  报告
server.forums.search: |-
  搜索
server.forums.search_for: |-
  搜索关键字
server.forums.search_forums: |-
  搜索版块
server.forums.search_in: |-
  搜索范围
server.forums.search_this_forum: |-
  搜索本版
server.forums.search_this_thread: |-
  搜索回帖
server.forums.service_stats: |-
  刷新
server.forums.sticky: |-
  置顶
server.forums.sticky_title: |-
  置顶本帖
server.forums.submit_poll_title: |-
  确定发布此投票？
server.forums.subscribe_to_topic: |-
  订阅该主题
server.forums.the_same_as_thread: |-
  与本版设置相同
server.forums.there_are_no_topics: |-
  版块内暂无主题。
server.forums.thread_id: |-
  主题 ID
server.forums.thread_notes: |-
  主题备注
server.forums.title: |-
  标题
server.forums.titles: |-
  标题
server.forums.topic: |-
  主题
server.forums.topic_created: |-
  主题发布时间
server.forums.topic_creation_time: |-
  主题发布时间
server.forums.topics: |-
  主题
server.forums.unknown_username: |-
  &nbsp;（未知用户名）
server.forums.unsticky_title: |-
  取消置顶
server.forums.username: |-
  用户名
server.forums.view: |-
  查看
server.forums.voters: |-
  参与人数
server.forums.votes: |-
  票数
server.forums.warn: |-
  警告
server.forums.you_can_t_award_yourself: |-
  ：你无法对自己评分
server.forums.your_posting_privileges_removed: |-
  你的帖子编辑权限已被封禁。
server.friends.down: |-
  下载量
server.friends.friends: |-
  好友
server.friends.friends_list: |-
  好友列表
server.friends.ratio: |-
  分享率
server.friends.up: |-
  上传量
server.friends.you_have_no_friends: |-
  你还没交到朋友 _(:з」∠)_
server.inbox.a_recipient_does_not_exist: |-
  收件人不存在。
server.inbox.back_to_inbox: |-
  返回收件箱
server.inbox.body: |-
  内容
server.inbox.cannot_send_msg_without_body: |-
  你不能发送没有内容的私信。
server.inbox.cannot_send_msg_without_subject: |-
  你不能发送没有主题的私信。
server.inbox.compose: |-
  撰写私信
server.inbox.date: |-
  日期
server.inbox.delete_conversation: |-
  删除对话
server.inbox.delete_messages: |-
  删除信件
server.inbox.expire_rank_pm: |-
  你的捐助等级还有两天就会到期，届时，你还会拥有额外两天宽限期，在宽限期过去后，你的捐助等级就会下降一级。
server.inbox.expire_rank_sbj: |-
  你的捐助等级即将下降
server.inbox.forward_conversation: |-
  转发对话
server.inbox.forward_to: |-
  转发给
server.inbox.forwarded_to: |-
  转发
server.inbox.get_special_rank_five_pm: |-
  恭喜你达到 [url=wiki.php?action=article&id=277]特殊等级 5[/url]！你现在是[b]钻石捐助者[/b]了！你已永久激活所有捐助等级所涉及的所有奖励，海豚感谢你的奉献！
  ";
        // line 1646
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["CONFIG"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["SITE_NAME"] ?? null) : null), "html", null, true);
        echo " Staff
server.inbox.get_special_rank_five_sbj: |-
  你已达到特殊等级 5！你获得了：钻石捐助等级。详情请见正文。
server.inbox.get_special_rank_four_pm: |-
  恭喜你达到 [url=wiki.php?action=article&id=277]特殊等级 4[/url]！你获得了[b]第二头像[/b]！你可前往设置页面的个人设置部分设定你的第二头像，在鼠标移动到你的头像上时，它就能自动切换显示第二头像。
  ";
        // line 1651
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["CONFIG"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["SITE_NAME"] ?? null) : null), "html", null, true);
        echo " Staff
server.inbox.get_special_rank_four_sbj: |-
  你已达到特殊等级 4！你获得了：第二头像。详情请见正文。
server.inbox.get_special_rank_one_pm: |-
  恭喜你达到 [url=wiki.php?action=article&id=277]特殊等级 1[/url]！你现在已经能够免疫 [url=wiki.php?action=article&id=73]账号不活跃[/url] 了。祝你玩得开心！
  ";
        // line 1656
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["CONFIG"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["SITE_NAME"] ?? null) : null), "html", null, true);
        echo " Staff
server.inbox.get_special_rank_one_sbj: |-
  你已达到特殊等级 1！你获得了：免疫不活跃。详情请见正文。
server.inbox.get_special_rank_three_pm: |-
  恭喜你达到 [url=wiki.php?action=article&id=277]特殊等级 3[/url]！你赢得了[b]一次用户指定[/b]！你指定的电影会在 ";
        // line 1660
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["CONFIG"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["SITE_NAME"] ?? null) : null), "html", null, true);
        echo " 首页亮相。在你提交选择后，我们无法保证你选择的电影的具体上线时间。用户指定电影将按照先到先得的顺序排列。指定时请遵循以下准则： [*]请指定尚未当选过推荐电影的电影。你可以在论坛里找到过往的推荐电影。 [*]仔细完整地填写所附表格。 [*]关于你所指定电影的具体安排、上线时间，请发送 [url=staffpm.php]Staff PM[/url] 询问。
  ";
        // line 1661
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["CONFIG"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["SITE_NAME"] ?? null) : null), "html", null, true);
        echo " Staff
server.inbox.get_special_rank_three_sbj: |-
  你已达到特殊等级 3！你获得了：一次用户指定。详情请见正文。
server.inbox.get_special_rank_two_pm: |-
  恭喜你达到 [url=wiki.php?action=article&id=277]特殊等级 2[/url]！你获得了一枚 [url=badge.php]捐助纪念印记[/url]。祝你玩得开心！
  ";
        // line 1666
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["CONFIG"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["SITE_NAME"] ?? null) : null), "html", null, true);
        echo " Staff
server.inbox.get_special_rank_two_sbj: |-
  你已达到特殊等级 2！你获得了：一枚捐助印记。详情请见正文。
server.inbox.inbox: |-
  收件箱
server.inbox.is_empty: |-
  是空的。
server.inbox.list_latest_first: |-
  最新优先
server.inbox.list_unread_first: |-
  未读优先
server.inbox.manage_conversation: |-
  管理对话
server.inbox.mark_as_read: |-
  标为已读
server.inbox.mark_as_unread: |-
  标为未读
server.inbox.message: |-
  内容
server.inbox.message_from: |-
  来自 %s 的消息
server.inbox.no_results: |-
  空空如也。
server.inbox.placeholder_search: |-
  搜索
server.inbox.quote: |-
  回复
server.inbox.quote_if_disagree_unfill_please_url: |-
  [/quote]
  如果你认为对应求的否决并不合理，请 [url=
server.inbox.receiver: |-
  收件人
server.inbox.reply: |-
  回复
server.inbox.report_request_and_explain: |-
  ]报告求种[/url] 并解释它不该被否决的具体原因。
server.inbox.request_filled_unfilled: |-
  你有一个应求被否决
server.inbox.send_a_message_to_user: |-
  向 %s 发送私信
server.inbox.send_message: |-
  发送
server.inbox.sender: |-
  发件人
server.inbox.sentbox: |-
  发件箱
server.inbox.sticky: |-
  置顶对话
server.inbox.subject: |-
  主题
server.inbox.the_request_url: |-
  求种 \"[url=
server.inbox.this_recipient_does_not_exist: |-
  收件人不存在。
server.inbox.url_for_the_reason_quote: |-
  [/url] 所否决，理由是：[quote]
server.inbox.url_was_unfilled_by_url: |-
  [/url]\" 的应求被 [url=
server.inbox.user: |-
  用户
server.inbox.view_conversation_space: |-
  对话主题&nbsp;
server.inbox.you_cannot_start_a_conversation_with_yourself: |-
  你不能向自己发起对话！
server.inbox.your: |-
  你的
server.index.add_more: |-
  加载更多
server.index.announcements: |-
  公告
server.index.blank: |-
  弃权 - 显示结果
server.index.blog_note: |-
  博客
server.index.cleader: |-
  竞赛排行榜
server.index.click_here: |-
  请点此
server.index.collage: |-
  合集
server.index.day_visit: |-
  今日访问
server.index.details: |-
  详情
server.index.discuss: |-
  讨论
server.index.enable_users: |-
  生效用户
server.index.featured_item: |-
  电影推荐
server.index.filled: |-
  已应求
server.index.fproduct: |-
  推荐商品
server.index.fproduct_title: |-
  推荐商品图
server.index.hide: |-
  隐藏
server.index.index: |-
  首页
server.index.latest_thread: |-
  最新回帖
server.index.links: |-
  相关链接
server.index.mon_visit: |-
  本月访问
server.index.moviegroups: |-
  电影
server.index.mystery: |-
  天机不可泄露！
server.index.peers: |-
  同伴数
server.index.period: |-
  。
server.index.poll: |-
  投票
server.index.popular_movies: |-
  热门电影
server.index.product_note: |-
  你可能想在这里放一张图。
server.index.product_page: |-
  商品页面
server.index.s_l_ratio: |-
  做种/下载比
server.index.show: |-
  显示
server.index.snatches: |-
  已完成
server.index.staff_note: |-
  管理组博客
server.index.stats: |-
  统计
server.index.topic: |-
  主题
server.index.user_limit: |-
  用户限值
server.index.visit: |-
  访问
server.index.vote: |-
  投票
server.index.wek_visit: |-
  本周访问
server.log.message: |-
  日志内容
server.log.nothing_found: |-
  空空如也！
server.log.period: |-
  。
server.log.search_for: |-
  搜索关键词
server.log.search_request_failed: |-
  搜索请求失败
server.log.site_log: |-
  站点日志
server.log.time: |-
  时间
server.login.2fa_key: |-
  验证码
server.login.approved: |-
  批准
server.login.attempts: |-
  你还剩余 %s &nbsp;次登录尝试机会。<br />
  警告：超过登录次数限制将被限制 6 小时。
server.login.back: |-
  返回
server.login.cookies_disabled: |-
  你似乎禁用了 Cookies。
server.login.denied: |-
  拒绝
server.login.disabled: |-
  已被禁用
server.login.disabled_note1: |-
  你的账号已被禁用。<br />这可能是由于不活跃或违规造成的。<br /><br /></p>
server.login.disabled_note2: |-
  如果你确信自己的账号信誉良好且是由于不活跃而被禁用的，你可以在下面方框内通过邮件恢复它。<br />请注意，你需要使用与 ";
        // line 1840
        echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["CONFIG"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["SITE_NAME"] ?? null) : null), "html", null, true);
        echo " 账号相关联的电子邮件来进行此操作；<br />如果你不确定原因，请查看输入框下面的说明。<br /><br />
server.login.disabled_note3: |-
  如果你不确定何原因导致账号被禁用，或者你希望找管理组询问情况，可以进入我们的 <a href='";
        // line 1842
        echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["CONFIG"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["TG_DISBALE_CHANNEL"] ?? null) : null), "html", null, true);
        echo "'>Telegram 申诉频道</a>。<br /><br /><strong>在进入 IRC 或 Telegram 频道之前，请再次阅读 <a style='color: #ffbb33;' href='#' onclick=\"toggle_visibility('golden_rules')\">黄金规则</a>。</strong><br /><br />进入频道后，请阅读公告。<br /><br />请注意，<strong>不诚实</strong>会导致你永远无缘 ";
        echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["CONFIG"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["SITE_NAME"] ?? null) : null), "html", null, true);
        echo "。<br />
server.login.email: |-
  电子邮箱
server.login.email_address_placeholder: |-
  邮箱地址
server.login.email_send: |-
  邮件已发送，请根据其中的提示重设你的密码。
server.login.enable_request_id_by_user: |-
  &nbsp;- 恢复申请 %s，处理人是&nbsp;
server.login.enable_request_id_unresolved_by: |-
  &nbsp;- 恢复申请 %s 已被标为未处理，处理人是&nbsp;
server.login.enable_request_received_from_ip: |-
  &nbsp;- 恢复申请 %s 已被送达，它提交自&nbsp;
server.login.enable_request_rejected_from_ip: |-
  &nbsp;- 恢复申请已被拒绝，它提交自&nbsp;
server.login.enter_valid_email: |-
  请输入一个有效的邮箱。
server.login.err_1: |-
  你的账号还未激活，<br />请检查注册邮箱是否收到激活邮件。
server.login.err_2: |-
  账号或密码不正确
server.login.find_pw: |-
  点此找回密码
server.login.forget_pw: |-
  忘记密码?
server.login.invalid_token: |-
  无效的通行令。
server.login.login: |-
  登录
server.login.new_password: |-
  输入新密码
server.login.outcome_approved: |-
  批准
server.login.outcome_discarded: |-
  忽略
server.login.outcome_rejected: |-
  拒绝
server.login.password: |-
  密　码
server.login.password_send: |-
  你的密码已成功重置。<br /> 请<a href='login.php'>点此</a>登录 ";
        // line 1882
        echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["CONFIG"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["SITE_NAME"] ?? null) : null), "html", null, true);
        echo "。
server.login.re_enable_request_received: |-
  你的账号恢复申请已被送达。你会在 72 小时内收到一封回信。<br />如果你在 72 小时后仍未收到邮件，请通过 IRC 或 <a href='";
        // line 1884
        echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["CONFIG"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["TG_DISBALE_CHANNEL"] ?? null) : null), "html", null, true);
        echo " '>Telegram</a> 同管理员取得联系。
server.login.re_enable_request_rejected: |-
  你的账号恢复申请已被拒收。<br />这可能是因为之前已经提交的申请尚未被处理，或最近的申请确实已被拒绝。<br /><br />请通过 IRC 或 <a href='";
        // line 1886
        echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["CONFIG"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["TG_DISBALE_CHANNEL"] ?? null) : null), "html", null, true);
        echo "'>Telegram</a> 同管理员取得联系。
server.login.re_new_password: |-
  确认新密码
server.login.reason: |-
  原因
server.login.recovery: |-
  重设密码
server.login.recovery_1: |-
  重设密码——第一步
server.login.recovery_2: |-
  重设密码——即将完成
server.login.recovery_2_note: |-
  一个比较安全的密码的长度应大于等于 8 字符，包括至少 1 个小写和 1 个大写字母，且包含至少 1 个数字或符号，或是大于等于 20 个字符。<br /><br />
server.login.recovery_note: |-
  如果你提供的电子邮箱在本站有记录，它将会收到一封邮件，<br/>其中带有如何重设密码的相关信息。<br /><br />
server.login.remember_me: |-
  保持登录
server.login.requires_js: |-
  &nbsp;需要 JavaScript 才能运行。请在浏览器启用 JavaScript。
server.login.token_has_expired_please_visit: |-
  通行令已过期。请访问 %s 频道，它位于 %s，进入频道后，联系管理请求协助。
server.login.tried_to_use_an_expired_token: |-
  &nbsp;- 尝试在 %s 使用账号恢复通行令
server.login.two_factor_auth_key: |-
  两步验证码
server.login.two_factor_authentication: |-
  两步验证
server.login.use_2fa_recovery_code: |-
  使用两步验证恢复码
server.login.use_recovery_key: |-
  使用恢复码？
server.login.username: |-
  用户名
server.login.warning: |-
  你输入了错误的两步验证码，请再试一次。
server.login.warning_disable: |-
  你将被限制登录 %s。
server.login.you_are_banned_from_logging: |-
  你将被限制登录 %s。
server.login.your_account_has_been_enabled: |-
  账号已恢复，你现在可以登录了。<br>请确保在今晚 24:00 之前完成登录，否则你的账号会被再次禁用。
server.login.your_enable_request_for: |-
  你向 %s 提交的恢复申请已被
server.permissions.admin_advanced_user_search: |-
  能够访问高级用户搜索
server.permissions.admin_bp_history: |-
  能够看到其他用户的积分消费情况
server.permissions.admin_clear_cache: |-
  能够为页面清除缓存
server.permissions.admin_create_users: |-
  能够在后台给用户开号
server.permissions.admin_dnu: |-
  能够管理禁止发布列表
server.permissions.admin_donor_log: |-
  能够访问捐助日志
server.permissions.admin_interviewer: |-
  能够管理用户的入站申请
server.permissions.admin_login_watch: |-
  能够管理登录监控
server.permissions.admin_manage_applicants: |-
  能够管理招聘职位和用户申请
server.permissions.admin_manage_badges: |-
  能够管理印记
server.permissions.admin_manage_blog: |-
  能够管理站点博客
server.permissions.admin_manage_fls: |-
  能够管理一线支持 (FLS) 团队
server.permissions.admin_manage_forums: |-
  能够管理论坛版块 (添加／编辑／删除)
server.permissions.admin_manage_ipbans: |-
  能够管理 IP 封禁
server.permissions.admin_manage_news: |-
  能够管理站点新闻
server.permissions.admin_manage_permissions: |-
  能够编辑权限等级／用户权限
server.permissions.admin_manage_polls: |-
  能够管理投票
server.permissions.admin_manage_stylesheets: |-
  能够管理站点样式
server.permissions.admin_manage_user_fls: |-
  能够管理用户的免费令牌
server.permissions.admin_manage_wiki: |-
  能够管理 Wiki 访问权限设置
server.permissions.admin_reports: |-
  能够访问报告系统
server.permissions.admin_schedule: |-
  能够运行网站时间表
server.permissions.admin_send_bonus: |-
  能够在论坛使用系统评分
server.permissions.admin_update_geoip: |-
  能够更新 geoIP 数据
server.permissions.admin_whitelist: |-
  能够管理客户端白名单
server.permissions.administrative: |-
  站管
server.permissions.edit_unknowns: |-
  能够编辑未知发行信息
server.permissions.events_reward_badges: |-
  能够访问整合奖励发放的印记模块
server.permissions.events_reward_bonus: |-
  能够访问整合奖励发放的积分模块
server.permissions.events_reward_history: |-
  能够访问整合奖励发放的发放历史
server.permissions.events_reward_invites: |-
  能够访问整合奖励发放的邀请模块
server.permissions.events_reward_tokens: |-
  能够访问整合奖励发放的令牌模块
server.permissions.forums_polls_create: |-
  能够在论坛发起投票
server.permissions.forums_polls_moderate: |-
  能够关闭投票或将其添加到首页
server.permissions.forums_see_hidden: |-
  能够看到隐藏的帖子
server.permissions.only_applicable_to_lower_class: |-
  *所有改动只能应用到等于或低于你的用户等级上
server.permissions.project_team: |-
  策划组成员
server.permissions.self_torrents_check: |-
  能够检查自己的种子
server.permissions.show_admin_team: |-
  显示管理员团队
server.permissions.show_staff_username: |-
  显示工作人员用户名
server.permissions.site: |-
  站点
server.permissions.site_admin_forums: |-
  能够支配论坛
server.permissions.site_advanced_search: |-
  能够使用高级搜索
server.permissions.site_advanced_top10: |-
  能够访问扩展排行榜
server.permissions.site_album_votes: |-
  能够为心仪的种子投票
server.permissions.site_can_invite: |-
  能够发邀
server.permissions.site_can_invite_always: |-
  能够在站点邀请系统关闭时发邀
server.permissions.site_collages_create: |-
  能够创建合集
server.permissions.site_collages_delete: |-
  能够删除合集
server.permissions.site_collages_manage: |-
  能够管理合集 (添加种子、排序)
server.permissions.site_collages_personal: |-
  能够拥有一个私人合集
server.permissions.site_collages_recover: |-
  能够恢复已被删除的合集
server.permissions.site_collages_renamepersonal: |-
  能够重命名自己的私人合集
server.permissions.site_collages_subscribe: |-
  能够访问合集订阅
server.permissions.site_debug: |-
  能够查看站点排错调试表
server.permissions.site_delete_artist: |-
  能够删除艺人 (必须同时能删除种子和求种)
server.permissions.site_delete_tag: |-
  能够删除标签
server.permissions.site_disable_ip_history: |-
  能够禁用 IP 历史
server.permissions.site_edit_wiki: |-
  能够编辑 Wiki 页面
server.permissions.site_leech: |-
  能够下载
server.permissions.site_make_bookmarks: |-
  能够添加收藏
server.permissions.site_manage_recommendations: |-
  能够编辑推荐列表
server.permissions.site_moderate_forums: |-
  能够管理论坛
server.permissions.site_moderate_requests: |-
  能够管理任一求种
server.permissions.site_proxy_images: |-
  通过站点服务器代理加载图片
server.permissions.site_recommend_own: |-
  能够将自己的种子添加到推荐列表
server.permissions.site_search_many: |-
  能够不受搜索结果数量限制
server.permissions.site_send_unlimited_invites: |-
  拥有无限邀请
server.permissions.site_submit_requests: |-
  能够提交求种
server.permissions.site_tag_aliases_read: |-
  能够访问标签别名列表
server.permissions.site_top10: |-
  能够访问排行榜
server.permissions.site_torrents_notify: |-
  能够访问种子推送系统
server.permissions.site_upload: |-
  能够上传
server.permissions.site_view_flow: |-
  能够访问站点统计和数据池
server.permissions.site_view_full_log: |-
  能够访问全部站点日志
server.permissions.site_view_torrent_snatchlist: |-
  能够查看种子完成列表
server.permissions.site_vote: |-
  能够为求种投票
server.permissions.staff_award: |-
  能够发放奖励
server.permissions.torrents: |-
  种子
server.permissions.torrents_add_artist: |-
  能够将艺人添加到任意种子组
server.permissions.torrents_check: |-
  能够检查全站的种子
server.permissions.torrents_check_log: |-
  能够查看种子检查日志
server.permissions.torrents_delete: |-
  能够删除种子
server.permissions.torrents_delete_fast: |-
  能够一次删除超过 3 个种子
server.permissions.torrents_edit: |-
  能够编辑任一种子
server.permissions.torrents_fix_ghosts: |-
  能够修复艺人页面的虚假种子组
server.permissions.torrents_freeleech: |-
  能够给种子设置免费
server.permissions.torrents_hide_dnu: |-
  默认隐藏禁止发布列表
server.permissions.torrents_search_fast: |-
  无搜索频率限制 (适用于脚本)
server.permissions.torrents_slot_edit: |-
  能够调整种子所处的槽位
server.permissions.torrents_trumpable: |-
  能够勾选种子的可替代标记
server.permissions.users: |-
  用户
server.permissions.users_delete_users: |-
  能够删除任何用户的账号
server.permissions.users_disable_any: |-
  能够封禁任何用户的权利
server.permissions.users_disable_posts: |-
  能够封禁用户的发帖权限
server.permissions.users_disable_users: |-
  能够封禁用户
server.permissions.users_edit_avatars: |-
  能够更换头像
server.permissions.users_edit_invites: |-
  能够修改邀请数量以及取消邀请的发送
server.permissions.users_edit_own_ratio: |-
  能够修改自己的上传／下载量
server.permissions.users_edit_password: |-
  能够修改密码
server.permissions.users_edit_profiles: |-
  能够编辑任何用户的设置
server.permissions.users_edit_ratio: |-
  能够修改任何用户的上传／下载量
server.permissions.users_edit_reset_keys: |-
  能够重设任何用户的密钥
server.permissions.users_edit_titles: |-
  能够修改头衔
server.permissions.users_edit_usernames: |-
  能够编辑用户名
server.permissions.users_edit_watch_hours: |-
  能够修改 contrib 监视时间
server.permissions.users_give_donor: |-
  能够提供捐助者访问权
server.permissions.users_invite_notes: |-
  能够在邀请用户时添加管理备注
server.permissions.users_logout: |-
  能够登出用户
server.permissions.users_make_invisible: |-
  能够使用户不可见
server.permissions.users_mod: |-
  能够访问基础的管理工具 (管理员评论)
server.permissions.users_override_paranoia: |-
  能够无视隐私设置
server.permissions.users_promote_below: |-
  能够将用户提升到当前等级以下
server.permissions.users_promote_to: |-
  能够将用户提升到当前等级
server.permissions.users_reset_own_keys: |-
  能够重设自己的密钥
server.permissions.users_view_disabled: |-
  能够查看已被封禁的权限
server.permissions.users_view_email: |-
  能够查看 Email 地址
server.permissions.users_view_friends: |-
  能够查看任何用户的好友
server.permissions.users_view_invites: |-
  能够查看用户邀请了谁
server.permissions.users_view_ips: |-
  能够查看 IP 地址
server.permissions.users_view_keys: |-
  能够查看密钥
server.permissions.users_view_seedleech: |-
  能够查看用户正在做种或下载什么
server.permissions.users_view_uploaded: |-
  能够无视用户隐私设置查看其发布的种子
server.permissions.users_warn: |-
  能够警告用户
server.permissions.zip_downloader: |-
  能够同时下载多个种子
server.pub.a: |-
  1
server.pub.login: |-
  登&nbsp;&nbsp;录
server.pub.new_quote_one: |-
  新回复
server.pub.new_quote_other: |-
  新回复
server.pub.new_subscription_one: |-
  新订阅
server.pub.new_subscription_other: |-
  新订阅
server.pub.not_allowed_email: |-
  本站禁止 ProtonMail！
server.pub.note: |-
  本站服务器并未存储所显示的一切文件，相关链接仅由本站用户提供。这些种子文件仅用于备份目的。下载种子文件即意味着你已拥有原始文件。若相关文件以任何形式被滥用，本站管理员不承担任何责任，也不对用户发布的内容或其任何操作负责。
server.pub.other_report: |-
  &nbsp;其他报告
server.pub.other_reports: |-
  &nbsp;其他报告
server.pub.public_index: |-
  首&nbsp;&nbsp;页
server.pub.ratio_watch_you_have: |-
  <a href=\"rules.php?p=ratio\" data-tooltip=\"你需要在 %s 内将你的分享率提高至合格分享率，否则你的下载权限会被封禁\">分享率监控</a>
server.pub.ratio_watch_your_dl_privileges: |-
  <span class=\"ratio_warning\"><a href=\"rules.php?p=ratio\" data-tooltip=\"在分享率合格之前，你的下载权限都无法恢复\">分享率监控</a></span>
server.pub.referral: |-
  推&nbsp;&nbsp;荐
server.pub.register: |-
  注&nbsp;&nbsp;册
server.pub.report: |-
  &nbsp;报告
server.pub.space_new_collage_update_one: |-
  &nbsp;条合集更新
server.pub.space_new_collage_update_other: |-
  &nbsp;条合集更新
server.pub.space_new_message_one: |-
  &nbsp;条新信息
server.pub.space_new_message_other: |-
  &nbsp;条新信息
server.pub.space_new_staff_pm_one: |-
  &nbsp;条新管理组私信
server.pub.space_new_staff_pm_other: |-
  &nbsp;条新管理组私信
server.pub.space_new_torrent_notification_one: |-
  &nbsp;条新种推送
server.pub.space_new_torrent_notification_other: |-
  &nbsp;条新种推送
server.pub.statistics: |-
  统计面板
server.pub.toolbox: |-
  管理面板
server.pub.user_manage: |-
  用户审核
server.pub.you_have_space: |-
  你有&nbsp;
server.referral.an_error: |-
  系统确认你在 %s 的身份时出错。请刷新页面重试。
server.referral.another_tracker_we_trust: |-
  在此页面，你可通过验证我们认可的他站用户身份以加入 ";
        // line 2238
        echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["CONFIG"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["SITE_NAME"] ?? null) : null), "html", null, true);
        echo "。
server.referral.choose_a_tracker: |-
  选择一个站点：
server.referral.choose_a_tracker_you_are_member: |-
  在下方选择一个你拥有账号的站点。
server.referral.congratulations: |-
  恭喜，我们已经确认了你在 %s 的身份。我们已经向你填写的邮箱发送了邀请邮件。如果收件箱没有，记得看看垃圾箱！欢迎加入 ";
        // line 2244
        echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["CONFIG"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["SITE_NAME"] ?? null) : null), "html", null, true);
        echo "！
server.referral.copy_and_paste_the_code: |-
  复制下方识别码，并将之粘贴到你 %s 账号的个人信息栏中。只要它完整无缺地存在其中，并显而易见即可。
server.referral.email_address: |-
  邮箱地址
server.referral.enter_username_at: |-
  请准确输入你在 %s 使用的用户名。这对于识别你的身份非常重要。
server.referral.enter_your_username: |-
  输入你的用户名，然后 ";
        // line 2252
        echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["CONFIG"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["SITE_NAME"] ?? null) : null), "html", null, true);
        echo " 会确认你的身份并向你发送邀请。
server.referral.exclamation_mark: |-
  ！
server.referral.external_tracker_referrals: |-
  他站用户自荐
server.referral.join: |-
  加入
server.referral.paste_string: |-
  复制粘贴识别码到个人信息栏，保存即可。
server.referral.please_try_again: |-
  抱歉，我们目前不接受他站用户自荐。请以后再试。
server.referral.process_follows: |-
  流程如下：
server.referral.step_1: |-
  第一步：粘贴识别码
server.referral.step_2: |-
  第二步：加入&nbsp;
server.referral.username: |-
  用户名
server.referral.will_generate_string: |-
  &nbsp;会生成一段识别码，需要你在那个站点将之展示出来。
server.register.a_strong_password_is_8_characters_or_longer: |-
  密码的安全长度至少 8 个字符，包含至少 1 个小写和 1 个大写字母，并且包含至少 1 个数字或符号，或者超过 20 个字符
server.register.agereq: |-
  我已年满 13 周岁。
server.register.email: |-
  邮　箱
server.register.email_note: |-
  目前仅面向部分教育网邮箱开放注册。
server.register.invite_does_not_exist: |-
  邀请不存在
server.register.invite_email_mismatch: |-
  你输入的邮箱地址和邀请中所要求的不一致，请输入正确的邮箱地址。
server.register.password: |-
  密　码
server.register.password_note: |-
  至少 8 个字符，包含至少 1 小写和 1 大写字母，且包含至少 1 个数字或符号，或超过 20 字符。
server.register.promise: |-
  承　诺
server.register.re_password: |-
  确认密码
server.register.readrules: |-
  我会认真阅读本站规则。
server.register.readwiki: |-
  我会认真阅读本站 Wiki。
server.register.register: |-
  注册
server.register.register_closed: |-
  注册关闭
server.register.register_closed_note: |-
  抱歉，网站目前仅限邀请。
server.register.register_closed_note2: |-
  目前，允许自助注册的邮箱如下：
server.register.register_complete: |-
  激活成功
server.register.register_complete_note: |-
  <strong>恭喜！你的账号已激活成功！</strong><br /><br>现在你可以 <a href='login.php'>点此</a> 登录了。
server.register.register_fail: |-
  链接失效
server.register.register_fail_note: |-
  <strong>该用户已激活。</strong>
server.register.send_note: |-
  注册验证邮件已发送到你所提供的注册邮箱中，<br/>请按照邮件内容完成验证后登录。
server.register.someone_registered_with_that_email: |-
  此邮箱在本站已有账号，请尝试 <a href='/login.php?act=recover'>找回密码</a>
server.register.someone_registered_with_that_username: |-
  该用户名已被其他人占用
server.register.username: |-
  用户名
server.register.username_note: |-
  不支持中文，不允许使用冒犯性的用户名，一经确认，不可更改，请深思熟虑。
server.register.you_cannot_have_a_username_of_0_or_1: |-
  你不能将 \"0\" 或 \"1\" 作为用户名
server.register.you_did_not_enter_a_captcha_code: |-
  你没有输入验证码
server.register.you_did_not_enter_a_valid_email_address: |-
  你输入的邮箱地址无效
server.register.you_did_not_enter_a_valid_username: |-
  你输入的用户名无效
server.register.you_did_not_select_age: |-
  你没有勾选已年满 13 周岁的复选框
server.register.you_did_not_select_rules: |-
  你没有勾选会认真阅读本站规则的复选框
server.register.you_did_not_select_wiki: |-
  你没有勾选会认真阅读本站 Wiki 的复选框
server.register.your_passwords_do_not_match: |-
  两次输入的密码不一致
server.reports.active_reports: |-
  未处理的报告
server.reports.body: |-
  内容
server.reports.claim: |-
  认领
server.reports.claimed_by: |-
  由 %s 认领
server.reports.collage: |-
  合集
server.reports.comment: |-
  评论
server.reports.compose: |-
  撰写私信
server.reports.contact: |-
  联系
server.reports.description: |-
  描述
server.reports.filled: |-
  已应求
server.reports.h2_forum_post: |-
  论坛帖子
server.reports.h2_forum_thread: |-
  论坛主题
server.reports.h2_report: |-
  报告
server.reports.incorrect_type: |-
  类别错误
server.reports.new: |-
  未处理
server.reports.no: |-
  否
server.reports.no_collage_with_the_reported_id_found: |-
  未找到该报告 ID 所对应的合集
server.reports.no_comment_with_the_reported_id_found: |-
  未找到该报告 ID 所对应的评论
server.reports.no_forum_post_with_the_reported_id_found: |-
  未找到该报告 ID 所对应的论坛帖子
server.reports.no_forum_thread_with_the_reported_id_found: |-
  未找到该报告 ID 所对应的论坛主题
server.reports.no_request_with_the_reported_id_found: |-
  未找到该报告 ID 所对应的求种
server.reports.no_user_with_the_reported_id_found: |-
  未找到该报告 ID 所对应的用户
server.reports.old: |-
  已处理
server.reports.other_reports_stats: |-
  其他报告统计
server.reports.place: |-
  排名
server.reports.reason: |-
  原因
server.reports.release_type: |-
  发行类别
server.reports.report: |-
  报告
server.reports.report_a: |-
  报告一个
server.reports.report_collage_guide_1: |-
  该类目用于报告违反了 <a href=\"rules.php?p=collages\">合集规则</a> 的合集。
server.reports.report_collage_guide_2: |-
  合集规则属于解释性概念，管理组拥有最终解释权。如果你认为这个合集介于允许与不允许之间，请随时报告，我们会查看并确认。
server.reports.report_collage_guide_3: |-
  我们鼓励用户尽量使用此功能。它比私信管理组成员更加高效。
server.reports.report_collage_guide_4: |-
  在下面的报告描述中，请尽可能详尽地描述情况以帮助管理解决问题。
server.reports.report_forum_thread_guide_1: |-
  请在下述情况下使用 “报告论坛主题” 类目： <ul> <li>当 <a href=\"rules.php?p=chat\">社交规则</a> 被违反时，比如含有种族主义、攻击性、煽动性、色情和其他违反规则内容的帖子。我们鼓励所有用户在看到任何形式的违规时及时报告。</li> <li>申请解锁主题。</li> <li>报告出现在错误版块的主题。</li> <li>报告求助版块中已被解决但尚未添加标记的问题。</li> </ul>
server.reports.report_forum_thread_guide_2: |-
  它比私信管理组成员更加高效。
server.reports.report_forum_thread_guide_3: |-
  请注意，此功能仅用于报告违规行为，而且，是报告主题，而不是回帖。
server.reports.report_post_comment_guide_1: |-
  该类目用于报告 <a href=\"rules.php?p=chat\">社交规则</a> 被违反的情况，比如含有种族主义、攻击性、煽动性、色情和其他违反规则内容的帖子或评论。
server.reports.report_post_comment_guide_2: |-
  我们鼓励所有用户在看到任何形式的违规时及时报告。
server.reports.report_post_comment_guide_3: |-
  它比私信管理组成员更加高效。
server.reports.report_post_comment_guide_4: |-
  请注意，此功能仅用于报告违规行为，而且，是报告帖子或评论，而不是回复。
server.reports.report_request_guide_1: |-
  该类目用于报告违反了 <a href=\"rules.php?p=requests\">求种规则</a> 的求种，也用于申请对求种进行次要的、通常是修饰性的编辑（例如添加电影海报、修改求种的电影标题等）。
server.reports.report_request_guide_2: |-
  我们鼓励用户尽量使用此功能。它比私信管理组成员更加高效。
server.reports.report_request_guide_3: |-
  在下面的报告描述中，请尽可能详尽地描述情况以帮助管理解决问题。可信的外部信息源对于处理报告非常有益，有如制片公司官网、<a href=\"https://imdb.com/\">IMDb</a>、<a href=\"https://www.themoviedb.org/\">TMDB</a> 和 <a href=\"https://movie.douban.com/\">豆瓣</a>。
server.reports.report_request_guide_4: |-
  <strong>不要单纯因为求种无法完成而报告它。</strong>当下无人能应求的求种并无问题，因为也许在将来它会被完成。一个对此情形的假设是，一个求种对当下仅有 Amazon 发行的 WEB 要求一份物理媒介发行，因为物理媒介发行也许会在将来某一天发售。至于这样的物理媒介其发行的可能性大小并不在我们的考虑范围内。
server.reports.report_request_guide_5: |-
  <strong>如果你报告这个求种是为了将之转移到新求种系统，请返回并点击「Request update」。</strong>
server.reports.report_request_update_guide_1: |-
  该类目用于向 Mod+ 管理申请将你的求种转移到新系统中。
server.reports.report_request_update_guide_2: |-
  如果并没有其他人为你的求种投票，你可以自行编辑。
server.reports.report_user_guide_1: |-
  该类目用于报告违反了 <a href=\"rules.php\">黄金规则</a> 的用户，抑或是你没有其他途径提醒管理这个用户有特殊之处。
server.reports.report_user_guide_2: |-
  我们鼓励用户尽量使用此功能。它比私信管理组成员更加高效。
server.reports.report_user_guide_3: |-
  请勿在此报告违反了以下规则的用户： <ul> <li>种子发布</li> <li>论坛主题／帖子</li> <li>合集</li> <li>求种</li> </ul>
server.reports.report_user_guide_4: |-
  以上报告类目拥有各自的入口，请专项专用。
server.reports.report_user_guide_5: |-
  在下面的报告描述中，请尽可能详尽地描述情况以帮助管理解决问题。
server.reports.reporting_guidelines: |-
  报告指南
server.reports.reporting_guidelines_intro: |-
  以下是帮助管理员高效处理你报告的注意事项。
server.reports.reporting_guidelines_summary: |-
  简而言之，请尽可能多地在报告中包含具体细节，谢谢你。
server.reports.reporting_the: |-
  你正在报告
server.reports.reporting_the_collage: |-
  你正在报告的合集
server.reports.reporting_the_post: |-
  你正在报告的帖子
server.reports.reporting_the_request: |-
  你正在报告的求种
server.reports.reporting_the_thread: |-
  你正在报告的主题
server.reports.reporting_the_user: |-
  报告用户
server.reports.reports: |-
  报告数
server.reports.reports_resolved_in_the_last_24_hours: |-
  在过去 24 小时内处理的报告
server.reports.reports_resolved_in_the_last_month: |-
  在过去一月内处理的报告
server.reports.reports_resolved_in_the_last_week: |-
  在过去一周内处理的报告
server.reports.reports_resolved_since_other_reports: |-
  所有已处理的报告
server.reports.request: |-
  求种
server.reports.request_update: |-
  报告 (更新)
server.reports.resolved_by: |-
  由 %s 解决
server.reports.send_a_message_to: |-
  向 %s 发送私信
server.reports.stats: |-
  统计
server.reports.sth_was_reported_by_user_sometime: |-
  由 %s 报告于
server.reports.subject: |-
  主题
server.reports.threads_trashed_since_the_beginning_of_time: |-
  所有被删除的主题
server.reports.title: |-
  标题
server.reports.toggle_notes: |-
  显隐备注
server.reports.trashed: |-
  删除量
server.reports.unclaim: |-
  取消认领
server.reports.user: |-
  用户
server.reports.username: |-
  用户名
server.reports.way_to_increase_turnover_rate: |-
  如果你尽可能详细地填写以下信息，将大大提高更新的效率。
server.reports.year_required: |-
  年 (必填)
server.reports.yes: |-
  是
server.reports.you_cannot_start_a_conversation_with_yourself: |-
  你不能向自己发起对话！
server.reports.you_reported_sth_for_the_reason: |-
  你报告了 %s，理由是
server.reportsv2.a_torrent_with_that_id_does_not_exist: |-
  不存在该 ID 的种子。
server.reportsv2.all_new_reports_for_the_chosen_type: |-
  指定类目下的所有新报告
server.reportsv2.all_reports_for_the_torrent: |-
  种子 %s 的所有未处理报告
server.reportsv2.all_reports_for_torrents_uploaded_by: |-
  由 %s 所发布种子的所有报告
server.reportsv2.all_reports_for_torrents_uploaded_by_user: |-
  由用户 %s 所发布种子的所有报告
server.reportsv2.all_the_old_smelly_reports: |-
  陈芝麻烂谷子的报告
server.reportsv2.all_torrents_reported_by: |-
  所有被 %s 报告的种子
server.reportsv2.all_torrents_reported_by_user: |-
  所有被用户 %s 报告的种子
server.reportsv2.also_space: |-
  也
server.reportsv2.and_until: |-
  到
server.reportsv2.as_useful_as_blank_reports_are_could_you_be_a_tiny_bit_more_helpful_leave_a_comment: |-
  这条报告和空白的一样毫无价值，请认真填写报告说明！
server.reportsv2.by_group_id_of_torrent_reported: |-
  通过被报告种子的种子组 ID
server.reportsv2.by_id_of_torrent_reported: |-
  通过被报告种子的 ID
server.reportsv2.by_report_id: |-
  通过报告人 ID
server.reportsv2.by_resolver_id: |-
  通过处理人 ID
server.reportsv2.by_uploader_id: |-
  通过发布人 ID
server.reportsv2.claim: |-
  认领
server.reportsv2.claim_all: |-
  全部认领
server.reportsv2.claim_all_btn_title: |-
  你会认领本页所有报告
server.reportsv2.comments: |-
  说明
server.reportsv2.current_count: |-
  当前数量
server.reportsv2.currently_assigned_reports_by_staff_member: |-
  当前由管理组成员分配的报告
server.reportsv2.custom_trumpable: |-
  自定义可替代理由
server.reportsv2.date_reported: |-
  报告时间
server.reportsv2.delete_title: |-
  删种？
server.reportsv2.deleted: |-
  已删除
server.reportsv2.deleted_has_been_automatically_resolved: |-
  (已删除) 已被自动处理。
server.reportsv2.different_view_modes_by_person: |-
  按用户分类查看报告
server.reportsv2.different_view_modes_by_report_type: |-
  按报告类目分类查看报告
server.reportsv2.don_t_care: |-
  不限
server.reportsv2.dynamic: |-
  动态
server.reportsv2.dynamic_title: |-
  启停自动用未处理报告更替已处理报告的功能
server.reportsv2.edit_request_about_this_torrent: |-
  与该种子相关的编辑请求
server.reportsv2.extra: |-
  追加
server.reportsv2.first_torrent: |-
  用户首种
server.reportsv2.first_torrent_title: |-
  这是该用户发布的第一个种子
server.reportsv2.for_browsing_anything_more_complicated_than_these: |-
  欲通过任何更复杂的方式浏览信息，请使用搜索功能。
server.reportsv2.from: |-
  从
server.reportsv2.handled_by: |-
  处理人
server.reportsv2.image_s: |-
  图片链接
server.reportsv2.in_progress_by: |-
  认领人
server.reportsv2.invalidate_report: |-
  报告无效
server.reportsv2.link_s_to_external_source: |-
  外部资料源链接
server.reportsv2.link_s_to_proof_images: |-
  证据图片链接
server.reportsv2.log_message: |-
  日志信息
server.reportsv2.multi_resolve: |-
  批量处理
server.reportsv2.multi_resolve_btn_title: |-
  采用各自的解决方案处理所有已勾选报告
server.reportsv2.multi_resolve_title: |-
  通过批量处理按钮，所有已勾选报告都会被一次性处理掉
server.reportsv2.relevant_other_torrents: |-
  相关种子
server.reportsv2.new_auto_assigned: |-
  新 (自动分配)
server.reportsv2.new_reports_auto_assigned: |-
  自动分配新报告
server.reportsv2.new_reports_not_auto_assigned: |-
  未自动分配的新报告
server.reportsv2.new_un_auto: |-
  新 (未自动分配)
server.reportsv2.no_new_reports: |-
  没有新的报告啦，芜湖！
server.reportsv2.pl_to_other_relevant_torrent_s: |-
  <strong>另一相关</strong> 种子的永久链接 (PL)
server.reportsv2.pm_reason: |-
  原因
server.reportsv2.pm_uploader_reporter: |-
  私信
server.reportsv2.pm_uploader_reporter_title: |-
  发布人：如不使用 “Send now”，内容就会附加到常规信息中。报告人：必须使用 “Send now”。
server.reportsv2.reason: |-
  报告类目
server.reportsv2.relevant_images: |-
  相关图片
server.reportsv2.relevant_links: |-
  相关链接
server.reportsv2.relevant_tracks: |-
  相关音轨
server.reportsv2.remove_upload_privileges: |-
  封禁发布权限
server.reportsv2.remove_upload_privileges_title: |-
  封禁发布权限？
server.reportsv2.report: |-
  报告
server.reportsv2.report_a_torrent: |-
  报告该种子
server.reportsv2.report_comment: |-
  处理意见
server.reportsv2.report_created: |-
  提交时间
server.reportsv2.report_for_torrent: |-
  所对应的种子
server.reportsv2.report_information: |-
  报告内容
server.reportsv2.report_introduction: |-
  <strong>使用准确的报告项（<a href=\"wiki.php?action=article&name=种子报告系统指南\">指南</a>）并遵循以下报告要点将有助于管理员及时处理你的报告请求：</strong>
server.reportsv2.report_type: |-
  报告类目
server.reportsv2.report_was_handled_by_user: |-
  报告由 [user]%s[/user] 处理。
server.reportsv2.reported_by: |-
  报告人
server.reportsv2.reporter: |-
  报告人
server.reportsv2.reports: |-
  报告数
server.reportsv2.reports_v2: |-
  种子报告系统
server.reportsv2.reports_v2_information: |-
  种子报告系统信息
server.reportsv2.required: |-
  必填
server.reportsv2.resolve: |-
  处理
server.reportsv2.resolve_report: |-
  手动解决报告
server.reportsv2.resolve_time: |-
  处理时间
server.reportsv2.resolve_title: |-
  点此重设处理选项为默认值
server.reportsv2.resolver: |-
  处理人
server.reportsv2.s_in_progress_reports: |-
  &nbsp;处理中的报告
server.reportsv2.s_reports: |-
  &nbsp;的报告
server.reportsv2.s_resolved_reports: |-
  &nbsp;已处理的报告
server.reportsv2.search_reports: |-
  搜索报告
server.reportsv2.single_torrent: |-
  单个种子
server.reportsv2.space_log_message: |-
  站点日志信息
server.reportsv2.space_staff_notes: |-
  管理组备注
server.reportsv2.staff_member: |-
  管理组成员
server.reportsv2.the_extra_image_links_you_provided_were_not_links_to_images: |-
  你提供的额外图片链接并非图链。
server.reportsv2.the_extra_links_you_provided_were_not_links: |-
  你提供的额外链接并非网页链接。
server.reportsv2.the_extra_pl_you_gave_included_the_link_to_the_torrent_you_are_reporting: |-
  你提供的另一种子的永久链接指向的就是你正在报告的种子。
server.reportsv2.the_pl_was_incorrect_it_should_look_like_torrents_php_torrentid_12345: |-
  永久链接格式错误，它应当形如&nbsp;
server.reportsv2.there_are_n_other_reports_for_torrents_in_this_group: |-
  该种子组内的种子还%s
server.reportsv2.there_are_n_other_reports_for_torrents_in_this_group_report_one: |-
  有其他 1 个报告
server.reportsv2.there_are_n_other_reports_for_torrents_in_this_group_report_other: |-
  有其他 %s 个报告
server.reportsv2.there_are_n_other_reports_for_torrents_uploaded_by_this_user: |-
  该用户上传的种子还%s
server.reportsv2.there_are_n_other_reports_for_torrents_uploaded_by_this_user_count_one: |-
  有其他 1 个报告
server.reportsv2.there_are_n_other_reports_for_torrents_uploaded_by_this_user_count_other: |-
  有其他 %s 个报告
server.reportsv2.this_has_resulted_in_an_n_week_warning: |-
  这导致你被警告了 [url=%s&nbsp;周[/url] 作为惩罚。
server.reportsv2.this_has_resulted_in_the_loss_of_your_upload_privilege: |-
  你的上传权限%s因此被封禁。
server.reportsv2.this_request: |-
  该求种
server.reportsv2.time_a: |-
  所有已处理的报告
server.reportsv2.time_d: |-
  一天内处理的报告
server.reportsv2.time_m: |-
  一月内处理的报告
server.reportsv2.time_w: |-
  一周内处理的报告
server.reportsv2.torrent_group: |-
  种子组
server.reportsv2.track_number_s: |-
  音轨序号
server.reportsv2.tracks_should_be_given_in_a_space_separated_list_of_numbers_with_no_other_characters: |-
  音轨序号之间用空格空开，且不应含有数字以外的字符。
server.reportsv2.type: |-
  类目
server.reportsv2.types.master.banned.report_messages.1: |-
  请明确指出其违反了 “禁止发布” 列表中的哪一项。
server.reportsv2.types.master.banned.resolve_options.pm: |-
  [rule]h1.2[/rule]。你上传了本站目前禁止的资源。列于禁止发布列表（位于 [url=upload.php]发布页面[/url] 顶部）以及上传规则中 [url=rules.php?p=upload#1.2]特别禁止[/url] 部分的资源不能被上传到本站。除非你的种子符合禁止发布列表注释中指定的条件，否则请勿发布。
  你的种子已被报告，因为它包含了来自禁止发布列表或上传规则中特别禁止部分的资源。
server.reportsv2.types.master.banned.title: |-
  特别禁止内容
server.reportsv2.types.master.dupe.report_messages.1: |-
  请附上既有种子的链接
server.reportsv2.types.master.dupe.resolve_options.pm: |-
  [rule]h2.2[/rule]。你的种子已被报告，因为它与站点既有种子重复。
server.reportsv2.types.master.dupe.title: |-
  重复
server.reportsv2.types.master.other.report_messages.1: |-
  请在说明中尽可能详细地描述问题。
server.reportsv2.types.master.other.title: |-
  其他
server.reportsv2.types.master.trump.report_messages.1: |-
  请列出新种子能够替代原有种子的具体原因。
server.reportsv2.types.master.trump.report_messages.2: |-
  请确保你正在报告的，是<strong class=\"u-colorWarning\">将被替代</strong>且应被删除的种子，而不是你认为应保留的种子。
server.reportsv2.types.master.trump.resolve_options.pm: |-
  [rule]h2.2[/rule]。你的种子已被报告，因为它将被新的种子替代。
server.reportsv2.types.master.trump.title: |-
  替代
server.reportsv2.types.master.urgent.report_messages.1: |-
  该类目仅适用于紧急情况，一般是因为在种子中泄露了个人信息。
server.reportsv2.types.master.urgent.report_messages.2: |-
  滥用 “紧急” 类目会导致警告或更严重的惩罚。
server.reportsv2.types.master.urgent.report_messages.3: |-
  由于该类目不能方便地告知管理员问题所在，所以请在说明中详细描述种子的问题。
server.reportsv2.types.master.urgent.title: |-
  紧急
server.reportsv2.types.movie.audio_track_bad.report_messages.1: |-
  请指出音频轨存在的具体问题。
server.reportsv2.types.movie.audio_track_bad.resolve_options.pm: \"[rule]5.4.3[/rule]。种子内含的音频轨相对其分辨率而言过于庞大。\\n\\n[rule]5.4.4[/rule]。种子含有冗余的音频轨。\\n\\n[rule]5.4.16[/rule]。既没有原始语种音频也没有国语配音，只有非国语配音的种子会被标记为 “可替代”。\\n\\n[rule]5.4.17[/rule]。种子中包含的音轨有效，但不同步。\\n\\n你的种子被标记为 “问题音频轨” 且可被替代。\"
server.reportsv2.types.movie.audio_track_bad.title: |-
  问题音频轨
server.reportsv2.types.movie.format.report_messages.1: |-
  在规则容许规格范围外的种子都可以使用本项，如 SDR x265 1080p Encode、RMVB 720p Encode 等。
server.reportsv2.types.movie.format.report_messages.2: |-
  请指明是容器不被规则允许，还是分辨率存在问题。
server.reportsv2.types.movie.format.resolve_options.pm: \"[rule]5.4.8[/rule]。种子应符合我们 [rule]h3[/rule] 推荐格式的要求。\\n\\n[rule]5.4.9[/rule]。种子应符合我们 [rule]h3[/rule] 推荐分辨率的要求。\\n\\n你的种子已被报告，因为其格式或分辨率与规则不符。\"
server.reportsv2.types.movie.format.title: |-
  规格不当
server.reportsv2.types.movie.low.report_messages.1: |-
  请向我们提供 PNG 格式的影片原始分辨率截图。
server.reportsv2.types.movie.low.resolve_options.pm: |-
  [rule]5.4.10[/rule]、[rule]5.4.11[/rule]、[rule]5.4.21[/rule]、[rule]5.4.24[/rule]。编码自质量低下的、存在错误的、低清的源的作品会被标记为 “可替代”。
server.reportsv2.types.movie.low.title: |-
  劣质源
server.reportsv2.types.movie.names_bad.report_messages.1: |-
  请指出有问题的文件（夹）名。
server.reportsv2.types.movie.names_bad.report_messages.2: |-
  理想情况下，你可以发布修复了文件（夹）名问题之后的种子以替代该种子。
server.reportsv2.types.movie.names_bad.resolve_options.pm: \"[rule]2.1.1[/rule]。文件（夹）名必须使用电影原始语种名称或官方英文名（推荐）。（如海报所示等的官方英文名，其优先级高于 IMDb。）\\n\\n[rule]2.1.2[/rule]。压制组发行（来自 P2P 组或 Scene 组）不应重命名，除非它们不满足规则 [rule]2.1.1[/rule] 或我们的文件名要求。\\n\\n[rule]2.1.4[/rule]。DVD 和 BD 文件目录结构不允许改动，仅顶层文件夹允许重命名。\\n\\n你的种子被标记为问题文件（夹）名且可被替代。当然你也可自行修复这个种子，补充或修正文件（夹）名然后重新发布种子。然后以 “替代” 为由报告（RP）旧种，在报告说明中指出你已修复的命名问题，同时请确保提供用以替代的新种永久链接（PL）。\"
server.reportsv2.types.movie.names_bad.title: |-
  问题文件（夹）名
server.reportsv2.types.movie.subtitle_track_bad.report_messages.1: |-
  请指出字幕轨存在的具体问题。
server.reportsv2.types.movie.subtitle_track_bad.resolve_options.pm: \"[rule]5.4.7[/rule]。种子中包含的字幕有效，但不同步。\\n\\n[rule]5.4.14[/rule]。无中字槽位的种子如果是不包含英文字幕（通过字幕管理器内挂或外挂）的非英语电影，会被标为 “可替代”。\\n\\n[rule]5.4.15[/rule]。无中字槽位的种子，其重要非英语对白不包含单独的英文字幕。\\n\\n[rule]5.4.19[/rule]。包含字幕质量很差，且不是电影准确翻译的种子会被标为 “可替代”。\\n\\n[rule]5.4.20[/rule]。字幕被硬编码在视频轨中的种子会被标为 “可替代”。\\n\\n你的种子被标记为 “问题字幕轨” 且可被替代。\"
server.reportsv2.types.movie.subtitle_track_bad.title: |-
  问题字幕轨
server.reportsv2.types.movie.torrent_description_bad.report_messages.1: |-
  请指出种子描述存在的具体问题。
server.reportsv2.types.movie.torrent_description_bad.resolve_options.pm: |-
  [rule]2.2[/rule]。当前填写的种子描述未符合规则要求，可能是 MediaInfo 不完整、有错误；或截图不符合规则。
server.reportsv2.types.movie.torrent_description_bad.title: |-
  问题种子描述
server.reportsv2.types.movie.transcode.report_messages.1: |-
  请写明你检查的音视频轨以及用以确认它为劣质转码的方法。
server.reportsv2.types.movie.transcode.report_messages.2: |-
  如有可能，请附上至少一张用以佐证的分析图，分析图多多益善。
server.reportsv2.types.movie.transcode.resolve_options.pm: |-
  [rule]5.4.21[/rule]。我们不接受有损来源的转码或重编码。
  你的种子已被报告，因为它包含了劣质转码的音轨。
server.reportsv2.types.movie.transcode.title: |-
  劣质转码
server.reportsv2.types.movie.video_track_bad.report_messages.1: |-
  请指出视频轨存在的具体问题，并向我们提供 PNG 格式的影片原始分辨率截图。
server.reportsv2.types.movie.video_track_bad.resolve_options.pm: \"[rule]5.4.1[/rule]、[rule]5.4.2[/rule]。种子的纵横比因编码错误等原因与原始的、影院上映的电影不同。\\n\\n[rule]5.4.5[/rule]、[rule]5.4.6[/rule]。种子被错误地反交错，或以错误的帧率播放。\\n\\n[rule]5.4.18[/rule]。种子明显裁边过多或过少。\\n\\n[rule]5.4.22[/rule]。种子含有明显的水印。\\n\\n你的种子被标记为 “问题视频轨” 且可被替代。\"
server.reportsv2.types.movie.video_track_bad.title: |-
  问题视频轨
server.reportsv2.unclaim: |-
  取消认领
server.reportsv2.unclaim_all: |-
  全部取消认领
server.reportsv2.unclaim_all_btn_title: |-
  放弃认领当前显示的所有报告
server.reportsv2.unresolved_reports_for_the_group: |-
  种子组 %s 的未处理报告
server.reportsv2.update_now_title: |-
  暂存处理意见
server.reportsv2.upload_time: |-
  发布时间
server.reportsv2.uploaded_by: |-
  发布人
server.reportsv2.uploader: |-
  发布人
server.reportsv2.uploader_s_reply: |-
  发布者回复
server.reportsv2.used_this_torrent_to_fill: |-
  使用该种子完成了
server.reportsv2.user_comment: |-
  报告人说明
server.reportsv2.username: |-
  用户名
server.reportsv2.view_old_reports: |-
  查看已处理的报告
server.reportsv2.view_your_claimed_reports: |-
  查看你认领的报告
server.reportsv2.viewing_resolution_of_report: |-
  查看报告 %s 的处理结果
server.reportsv2.views: |-
  总览
server.reportsv2.warning: |-
  警告
server.reportsv2.warning_title: |-
  警告周数
server.reportsv2.you_are_missing_a_required_filed_for_a_report: |-
  你有一项 (%s) 未填写，它是 %s 类目的必填项。
server.reportsv2.your_above_torrent_was_reported_and_has_been_deleted: |-
  [url=%s]你发布的种子[/url] 已被报告并删除。
server.reportsv2.your_above_torrent_was_reported_but_not_been_deleted: |-
  [url=%s]你发布的种子[/url] 已被报告并处理，但未被删除。
server.reportsv2.your_torrent_is_now_displayed_on_better_php_and_trumpable: |-
  你的种子现因上述原因被列在 [url=%s/better.php]站点优化[/url] 的页面且可被替代。当然你也可自行修复这个种子，修复该问题后重新上传种子。然后报告（RP）旧种，选择 “替代” 类目，在报告说明中指出你已修复的具体问题，同时请确保你提供了用以替代的新种永久链接（PL）。
server.requests.acceptable_codecs: |-
  允许的编码
server.requests.acceptable_containers: |-
  允许的容器
server.requests.acceptable_resolutions: |-
  允许的分辨率
server.requests.acceptable_sources: |-
  允许的片源
server.requests.add_by: |-
  求种人
server.requests.all: |-
  全部
server.requests.already_filled: |-
  此求种已被应求。
server.requests.any: |-
  任一
server.requests.artist_note: |-
  请不要将 “群星” 作为单个艺人添加，而是使用多艺人功能；阅读 <a href=\"wiki.php?action=article&amp;id=27\" target=\"_blank\">本文</a> 了解详情。
server.requests.associated_with_the_above_torrent_group: |-
  和上方填写的种子组关联在一起。
server.requests.at_least_one_director: |-
  请填写至少一位导演。
server.requests.auto_fill_note: |-
  使用 IMDb 或者种子组链接自动填充
server.requests.basic_info: |-
  基本信息
server.requests.bookmarked_requests: |-
  求种收藏
server.requests.bookmarks: |-
  你收藏的求种
server.requests.bounty: |-
  报酬
server.requests.by_user: |-
  发起人
server.requests.codec_list: |-
  编码
server.requests.collages: |-
  合集
server.requests.container_list: |-
  容器
server.requests.costs: |-
  赞助
server.requests.cover: |-
  封面
server.requests.created: |-
  发布时间
server.requests.created_by: |-
  发起人
server.requests.custom_vote: |-
  自定义赞助
server.requests.custom_vote_title: |-
  这里的单位是二进制而非十进制的，比如，1024 MB 等于 1 GB。
server.requests.delete_request_warning: |-
  删除求种会导致你 <strong>永远失去</strong> 发起求种所消耗的上传量。
server.requests.description: |-
  求种描述
server.requests.description_note: |-
  <b>请尽量对你的请求做出说明。</b>例 1：求种顺序 Blu-ray > WEB-DL > HDTV；例 2：WEB-DL 需要来自 Netflix 或 Amazon。 <br>如无其他要求，请填写 “无额外说明”。
server.requests.entered_bounty_not_number: |-
  你填的报酬不是数字。
server.requests.entered_year_not_number: |-
  你填的年份不是数字。
server.requests.fill_a_request_how_to_blockquote: |-
  先搜索是否已有符合的资源，再根据下述不同情况，将应求种的<strong>永久链接（PL）</strong>填入下列框中以完成应求。 <ul> <li>若已有符合的种子，直接填入其 PL；</li> <li>若没有符合的种子，但存在该影片组，请使用影片详情页面的 “添加格式” 上传新种并填入其 PL；</li> <li>若没有符合的种子且不存在该影片组，请使用 “发布应求” 按钮来上传新种并填入其 PL。</li></ul>
server.requests.fill_a_request_how_to_toggle: |-
  &nbsp;应求方法&nbsp;
server.requests.fill_request: |-
  应求
server.requests.fill_request_explanation: |-
  点击此按钮以引用此求种所提供的信息快速发布应求。
server.requests.filled: |-
  完成
server.requests.filled_by: |-
  完成人
server.requests.find_in_stores: |-
  在网络商店搜索
server.requests.for_user: |-
  代人应求
server.requests.forgot_enter_artists: |-
  你忘填艺人了。
server.requests.forgot_enter_bounty: |-
  你忘填报酬了。
server.requests.forgot_enter_description: |-
  你忘填求种描述了。
server.requests.forgot_enter_tags: |-
  你忘填标签了。
server.requests.forgot_enter_title: |-
  你忘填标题了。
server.requests.forgot_enter_year: |-
  你忘填发行年份了。
server.requests.forgot_link_fill_torrent: |-
  你忘了提供应求用的种子链接。
server.requests.forgot_pick_release_type: |-
  请选择一个分类。
server.requests.if_this_is_incorrect_please: |-
  如果存在错误，请&nbsp;
server.requests.if_you_add_the_entered: |-
  如果你赞助
server.requests.image: |-
  封面链接 (选填)
server.requests.image_link_invalid: |-
  &nbsp;是无效图链。
server.requests.include_filled: |-
  包含已应求
server.requests.is: |-
  已
server.requests.last_voted: |-
  最近的赞助人
server.requests.lastvote: |-
  最后投票
server.requests.link: |-
  链接
server.requests.link_empty_warning: |-
  如 IMDb 链接和种子组链接都不存在，请勾选选框。
server.requests.link_not_valid: |-
  你提供的种子链接无效。
server.requests.min_bounty: |-
  报酬至少 1 GiB。
server.requests.my_requests: |-
  我的求种
server.requests.name: |-
  名称
server.requests.new_create: |-
  发布求种
server.requests.new_edit: |-
  编辑求种
server.requests.new_request: |-
  发布求种
server.requests.new_rules: |-
  请确保你发布的求种符合 <a href='rules.php?p=requests'>求种规则</a>！
server.requests.no_link: |-
  无链接
server.requests.no_such_user_to_fill: |-
  求种用户不存在！
server.requests.of_bounty_your_new_stats: |-
  作为酬金，你的统计数据将会变为
server.requests.one_hour_grace_period: |-
  发种者可以在发种后的一小时内独占应求的机会。
server.requests.pst: |-
  发布后状态
server.requests.pst_body: |-
  如果你确认发布 %s 的报酬，你新的账号状态将变为
server.requests.purchasable_at: |-
  可购买于
server.requests.purchasable_at_placeholder: |-
  选填，用以指向当前可购买片源的网店链接（不允许填预售链接）
server.requests.quick_vote: |-
  快速赞助
server.requests.ratio: |-
  分享率
server.requests.reason: |-
  原因
server.requests.release_list: |-
  发行类别
server.requests.report_request: |-
  报告求种
server.requests.report_this_request: |-
  报告该求种
server.requests.request_update: |-
  求种更新
server.requests.requests: |-
  求种
server.requests.requests_created_by: |-
  %s 发布的求种
server.requests.requests_filled_by: |-
  %s 完成的求种
server.requests.requests_i_have_filled: |-
  我完成的求种
server.requests.requests_i_have_voted_on: |-
  我参与的求种
server.requests.requests_voted_for_by: |-
  %s 参与的求种
server.requests.require_one_codec: |-
  你至少要勾选一个编码。
server.requests.require_one_container: |-
  你至少要勾选一个容器。
server.requests.require_one_resolution: |-
  你至少要勾选一个分辨率。
server.requests.require_one_source: |-
  你至少要勾选一个片源。
server.requests.resolution_list: |-
  分辨率
server.requests.search_terms: |-
  搜索条件
server.requests.should_be_pl_to_the_torrent: |-
  你应填写种子的永久链接 (PL) (比如
server.requests.so_that_staff_can_fix_it: |-
  ，如此管理员就能修正它。
server.requests.source_list: |-
  片源
server.requests.source_torrent: |-
  片源种子
server.requests.source_torrent_placeholder: |-
  选填，请填写可作为该求种压制源的种子永久链接
server.requests.system_taxed: |-
  被系统作为消费税扣除了。</strong>
server.requests.t_group: |-
  种子组
server.requests.t_group_note: |-
  如果求种与<strong>站点已有</strong>的种子组相匹配，请在此填写其链接。
server.requests.tags: |-
  标签
server.requests.tags_comma: |-
  标签 (逗号分隔)
server.requests.tags_note: |-
  标签应以英文逗号（“,”）分隔，你应使用英文点号（“.”）来分隔标签内的单词——例如 “<strong class='u-colorSuccess'>imdb.top.500</strong>”。<br />请使用左侧文本框的官方标签，而不是 “非官方” 标签（例如使用官方的 “<strong class='u-colorSuccess'>剧情</strong>” 标签, 而不是非官方的 “<strong class='u-colorWarning'>holy.crap</strong>” 标签）。
server.requests.this_request: |-
  该求种
server.requests.top_contributors: |-
  赞助人排行榜
server.requests.torrent_category_different_from_torrent: |-
  种子的分类与求种不一致。如果求种提供的分类有误，请联系管理。
server.requests.torrent_group: |-
  种子组
server.requests.torrent_group_must_correspond_site: |-
  如果输入了种子组 ID，那它必须与站点现存的种子组相符。
server.requests.unfill: |-
  否决
server.requests.unfilling_a_request_without_reason: |-
  没有有效且合理的理由去否决会导致你被警告。
server.requests.upload_request: |-
  发布应求
server.requests.uploaded: |-
  上传量
server.requests.view_request: |-
  查看求种
server.requests.vote_requests: |-
  我参与的求种
server.requests.will_be: |-
  将会
server.requests.year: |-
  年
server.requests.yes: |-
  是
server.requests.you_do_not_have_enough_uploaded: |-
  你的上传量未达到发起求种的最低要求。
server.requests.you_have_not_bookmarked_any_request: |-
  你尚未收藏任何一个求种。
server.rules.chat_forum: |-
  论坛规则不允许的行为在交流群也不允许，反之亦然。分开来写仅仅是为了方便。
server.rules.chat_title: |-
  社交
server.rules.chat_title_de: |-
  该部分规则请你在前往论坛发帖或交流群发言之前阅读。
server.rules.clients_title: |-
  客户端
server.rules.clients_title_de: |-
  该部分规则决定哪些客户端可以连接到我们的服务器，以及为它们设定的相关条例。
server.rules.collages_title: |-
  合集
server.rules.collages_title_de: |-
  该部分规则决定合集的组织和管理形式。
server.rules.end: |-
  分享率规则\"
server.rules.golden_rules: |-
  黄金规则
server.rules.golden_rules_de: |-
  该部分规则至关重要，违反它们会导致极为严重的后果。
server.rules.info: |-
  注释
server.rules.ratio: |-
  分享率
server.rules.ratio_dl_title: |-
  这些单位是二进制而非十进制的，举个例子，1 GB 中有 1024 MB。
server.rules.ratio_title: |-
  分享率
server.rules.ratio_title_de: |-
  该部分规则决定用户在本站做种／下载活动应如何进行。
server.rules.requests_title: |-
  求种
server.rules.requests_title_de: |-
  该部分规则决定求种的组织和管理形式。
server.rules.rules: |-
  规则
server.rules.tags_title: |-
  标签
server.rules.tags_title_de: |-
  该部分规则决定哪些标签可以添加而哪些不能。
server.rules.type: |-
  分类
server.rules.upload_h13k: |-
  Scene 发布
server.rules.upload_h13k_a: |-
  <a href='wiki.php?action=article&amp;id=140'>Scene</a> 发布
server.rules.upload_h22k_t: |-
  种子描述
server.rules.upload_h23k_t: |-
  电影海报
server.rules.upload_h24k_t: |-
  其他发行信息
server.rules.upload_h54k_t: |-
  可替代标记
server.rules.upload_r220: |-
  总览
server.rules.upload_r220_note: |-
  这张图表是重复和替代规则的总览。
server.rules.upload_rules: |-
  发布规则
server.rules.upload_title: |-
  发布
server.rules.upload_title_de: |-
  该部分规则决定哪些内容可以被发布到本站。
server.sitehistory.body: |-
  正文
server.sitehistory.calendar: |-
  日历
server.sitehistory.category: |-
  类别
server.sitehistory.choose_a_category: |-
  选择一个类别
server.sitehistory.choose_a_subcategory: |-
  选择一个子类别
server.sitehistory.choose_tags: |-
  选择标签
server.sitehistory.comma_separated_tags: |-
  半角逗号分隔标签
server.sitehistory.create: |-
  新建
server.sitehistory.create_new_event: |-
  新建事件
server.sitehistory.date: |-
  日期
server.sitehistory.edit: |-
  编辑
server.sitehistory.edit_event: |-
  编辑事件
server.sitehistory.latest_site_history: |-
  最近的站点历史
server.sitehistory.link: |-
  链接
server.sitehistory.search: |-
  搜索
server.sitehistory.site_history: |-
  站点历史
server.sitehistory.subcategory: |-
  子类别
server.sitehistory.tags: |-
  标签
server.sitehistory.tags_placeholder: |-
  使用半角逗号分隔标签；使用半角句点充当空格
server.sitehistory.title: |-
  标题
server.staff.community_help: |-
  社群互助
server.staff.contact_staff: |-
  联系管理团队
server.staff.contact_staff_note: |-
  <p>如果你遇到的只是一般问题，我们建议你通过下面的管理组信箱提交你的问题，我们会尽快答复给你。</p> <p>你可以在此 <a href=\"javascript:void(0)\" onclick=\"\$('#compose').gtoggle(); return false;\">私信管理组</a>。</p>
server.staff.donation: |-
  捐助
server.staff.first_line_support: |-
  一线支持
server.staff.fl_support_note: |-
  <p><strong>这些用户并不一定是管理组成员。</strong>他们是志愿抽出时间帮助他人的用户。请在交流时对他们保持尊重，并在联系他们之前阅读 <a href='wiki.php?action=article&id=94'>本文</a>。</p>
server.staff.hidden_by_staff_member: |-
  管理员隐藏
server.staff.index: |-
  管理团队
server.staff.lastseen: |-
  最近上线
server.staff.message: |-
  内容
server.staff.remark: |-
  职权范围
server.staff.role_applications: |-
  职位申请
server.staff.role_applications_note: |-
  <p>成长路上，希望有你。如果你对我们的工作有兴趣，欢迎尝试 <a href='apply.php'>申请</a> 加入我们！
server.staff.role_applications_sub: |-
  （具体招聘岗位请点击下方申请）
server.staff.send_to: |-
  发送给
server.staff.staff: |-
  工作组
server.staff.subject: |-
  主题
server.staff.support: |-
  支持项目
server.staff.torrent_inspector: |-
  种子检查员 (TI)
server.staff.username: |-
  用户名
server.staffpm.amount: |-
  总量
server.staffpm.assigned_to: |-
  发件对象
server.staffpm.compose_new: |-
  撰写私信
server.staffpm.date: |-
  时间
server.staffpm.eur: |-
  欧元
server.staffpm.first_line_support: |-
  一线支持
server.staffpm.flattr: |-
  Flattr
server.staffpm.no_messages: |-
  无信息
server.staffpm.open_messages: |-
  未解决的私信
server.staffpm.personal_staff_inbox: |-
  私人管理组信箱
server.staffpm.preview: |-
  预览
server.staffpm.quote: |-
  回复
server.staffpm.reason: |-
  原因
server.staffpm.replies: |-
  回复数
server.staffpm.reply: |-
  回复
server.staffpm.resolved: |-
  已解决
server.staffpm.resolved_by: |-
  处理人
server.staffpm.resolved_messages: |-
  已解决的私信
server.staffpm.select_a_message: |-
  选择一条消息
server.staffpm.select_an_answer_from_the_drop_down_to_view_it: |-
  从下拉菜单选择一个回答以查看。
server.staffpm.sender: |-
  发件人
server.staffpm.space_staff_pms: |-
  的管理组私信
server.staffpm.staff_inbox: |-
  管理组信箱
server.staffpm.staff_pm: |-
  管理组私信
server.staffpm.staff_pms: |-
  管理组私信
server.staffpm.subject: |-
  主题
server.staffpm.unanswered: |-
  未回复
server.staffpm.unresolved: |-
  未解决
server.staffpm.view_all_unanswered: |-
  查看所有未回复
server.staffpm.view_resolved: |-
  查看已解决
server.staffpm.view_scoreboard: |-
  查看计分板
server.staffpm.scoreboard: |-
  计分板
server.staffpm.view_unresolved: |-
  查看未解决
server.staffpm.view_your_unanswered: |-
  查看你的未回复
server.staffpm.your_unanswered: |-
  你未解决
server.stats.detailed_torrent_statistics: |-
  种子统计详情
server.stats.detailed_user_statistics: |-
  用户统计详情
server.stats.geographical_distribution_map: |-
  地理分布图
server.stats.geographical_distribution_map_africa: |-
  地理分布图 - 非洲
server.stats.geographical_distribution_map_asia: |-
  地理分布图 - 亚洲
server.stats.geographical_distribution_map_europe: |-
  地理分布图 - 欧洲
server.stats.geographical_distribution_map_middle_east: |-
  地理分布图 - 中东
server.stats.geographical_distribution_map_south_america: |-
  地理分布图 - 南美
server.stats.number_of_users_by_country: |-
  各国用户数量
server.stats.stats: |-
  统计
server.stats.torrent_flow_chart: |-
  种子流动表
server.stats.torrent_stats: |-
  种子统计
server.stats.torrents_by_category: |-
  种子分类占比
server.stats.uploads_by_month: |-
  每月发布
server.stats.user_browsers: |-
  用户浏览器
server.stats.user_browsers_market_share: |-
  用户浏览器市场份额表
server.stats.user_class_distribution: |-
  用户等级分布表
server.stats.user_classes: |-
  用户等级
server.stats.user_flow: |-
  用户流动
server.stats.user_platform_distribution: |-
  用户操作系统分布表
server.stats.user_platforms: |-
  用户操作系统
server.stats.user_stats: |-
  用户统计
server.subtitles.a_subtitle_group: |-
  某字幕组
server.subtitles.anonymous_upload: |-
  匿名上传
server.subtitles.bookmarked_subtitles: |-
  字幕收藏
server.subtitles.button_upload: |-
  上传
server.subtitles.delete_subtitle: |-
  删除字幕
server.subtitles.delete_subtitle_warning: |-
  确认要删除该字幕吗？
server.subtitles.do_not_show_my_username: |-
  不要显示我的用户名
server.subtitles.h2_subtitles: |-
  字幕
server.subtitles.lack_of_torrent_permalink: |-
  未填写对应种子的永久链接
server.subtitles.movie_title: |-
  电影标题
server.subtitles.my_subtitles: |-
  我的字幕
server.subtitles.new: |-
  新
server.subtitles.new_subtitle: |-
  上传字幕
server.subtitles.please_choose_a_subtitle_file: |-
  未选中字幕文件
server.subtitles.please_select_language: |-
  请勾选至少一种语言
server.subtitles.please_upload_supported_subtitle_formats: |-
  请上传站点允许格式的字幕
server.subtitles.reason: |-
  原因
server.subtitles.request_a_subtitle: |-
  求字幕
server.subtitles.search: |-
  搜索
server.subtitles.source: |-
  来源
server.subtitles.subtitle_file: |-
  字幕文件
server.subtitles.subtitle_names: |-
  字幕名
server.subtitles.subtitle_rules: |-
  <ul> <li id='r3.6.1'><a href='rules.php?p=upload#3.6.1'>1.</a> <strong>用户上传的字幕应与对应种子的视频文件同步，否则会被直接删除。</strong> </li> <li id='r3.6.2'><a href='rules.php?p=upload#3.6.2'>2.</a> <strong>站点允许的字幕格式有 .sub、.idx、.sup、.srt、.vtt、.ass、.smi、.ssa。</strong>此外，也允许压缩打包上传，支持 .rar、.zip、.7z、.tar、.tgz、.tar.gz。 </li> <li id='r3.6.3'><a href='rules.php?p=upload#3.6.3'>3.</a> <strong>字幕文件建议采用与对应视频文件相一致的文件命名以方便使用。</strong>在尾部增加用以标明语言的字段是允许的，如 “Monsters.Inc.2001.1080p.BluRay.DTS.x264.D-Z0N3.chs.srt”。 </li> <li
  id='r3.6.4'><a href='rules.php?p=upload#3.6.4'>4.</a> <strong>字幕文件应以 Unicode 编码为佳。</strong> </li> <li id='r3.6.5'><a href='rules.php?p=upload#3.6.5'>5.</a> <strong>对于单文件电影，请直接上传单个的字幕文件，不要将同一部电影的多类字幕文件一同打包上传。</strong>如，在一个压缩包内同时囊括简中 SRT、繁中 SRT、中英 ASS，这是不允许的，你应将它们分别上传。<strong>对于迷你剧，则可以将每一集对应的字幕合并打包上传。</strong>但应保证每一集所对应的字幕文件命名与视频文件相同。 </li> </ul>
server.subtitles.subtitle_upload_warning: |-
  请确保字幕与对应的视频文件同步，否则你上传的字幕会被直接删除，你可能会被警告
server.subtitles.subtitle_uploader: |-
  上传者
server.subtitles.times_of_download: |-
  下载次数：
server.subtitles.title_or_imdb_link: |-
  片名或 IMDb 链接
server.subtitles.top_warning: |-
  此页面仅供浏览，欲上传字幕，请前往种子详情页面
server.subtitles.torrent_pl: |-
  对应种子 PL
server.subtitles.upload_a_subtitle: |-
  上传字幕
server.subtitles.year_optional: |-
  年 (选填)&nbsp;
server.time.ago: |-
  前
server.time.d: |-
  天
server.time.ds: |-
  天
server.time.h: |-
  时
server.time.hs: |-
  时
server.time.just_now: |-
  刚才
server.time.m: |-
  月
server.time.mn: |-
  分
server.time.mns: |-
  分
server.time.ms: |-
  月
server.time.space_and_space: |-
  %s
server.time.w: |-
  周
server.time.ws: |-
  周
server.time.y: |-
  年
server.time.ys: |-
  年
server.tools.Bonus: |-
  积分
server.tools.about_rendering: |-
  关于渲染
server.tools.about_rendering_note: |-
  <p>你正在渲染层叠样式表图库。</p> <p>在右侧可以看到使用到的参数，参数下面是返回的状态。</p>
server.tools.above: |-
  大于
server.tools.access: |-
  操作
server.tools.activity: |-
  活动
server.tools.add: |-
  补充
server.tools.add_all: |-
  所有用户
server.tools.add_an_entry_to_the_dnu_list: |-
  添加新的禁止发布项
server.tools.add_bonus_points_to_all_users: |-
  向全站用户发放积分
server.tools.add_bonus_sitewide: |-
  积分发放
server.tools.add_client: |-
  添加客户端
server.tools.add_fl_tokens_to_all_enabled_users: |-
  向所有未封号用户发放免费令牌
server.tools.add_invites: |-
  邀请发放
server.tools.add_invites_to_users: |-
  向用户发放邀请
server.tools.add_part: |-
  部分用户
server.tools.add_recommendation: |-
  添加推荐
server.tools.add_rule: |-
  添加
server.tools.add_to: |-
  发放给
server.tools.add_to_blacklist: |-
  将电子邮箱或域名添加到黑名单
server.tools.add_to_disabled_users: |-
  同时发放给被封禁的用户
server.tools.add_to_placeholder: |-
  请在此填写用户名，以英文逗号分隔。
server.tools.add_tokens_sitewide: |-
  向全站用户发放令牌
server.tools.added: |-
  待复审
server.tools.added_on: |-
  添加时间
server.tools.additional_forums: |-
  特许论坛版块（版块 ID）
server.tools.administration: |-
  用户管理
server.tools.affected_entries: |-
  影响项
server.tools.affected_requests: |-
  受影响的求种
server.tools.affected_torrent_groups: |-
  受影响的影片
server.tools.age: |-
  提交时间
server.tools.album_id: |-
  影片 ID
server.tools.featured_movie: |-
  电影推荐
server.tools.all: |-
  全部
server.tools.all_current_torrents: |-
  当前所有种子
server.tools.all_enabled_users: |-
  全体未封禁用户
server.tools.all_new_torrents: |-
  所有新种
server.tools.all_torrents_include_new: |-
  所有种子（含将来的新种）
server.tools.all_users: |-
  全体用户
server.tools.also_add_tokens_to_leech_disabled_users: |-
  为下载权限被封禁的用户也添加令牌 (如有需要)
server.tools.amount: |-
  总量
server.tools.announcements: |-
  通告
server.tools.application_email: |-
  申请邮箱
server.tools.application_ip: |-
  申请 IP
server.tools.application_management: |-
  入站申请管理
server.tools.application_manager: |-
  用户审核
server.tools.are_you_sure_remove_class: |-
  你确定要删除该用户组吗？
server.tools.ascending: |-
  升序
server.tools.author: |-
  作者
server.tools.auto_enable_requests: |-
  自动恢复申请
server.tools.auto_enable_requests_checked: |-
  已核实
server.tools.auto_enable_requests_invalid_email: |-
  无效邮箱
server.tools.auto_enable_requests_invalid_email_title: |-
  无匹配的邮箱地址
server.tools.auto_enable_requests_ip_overlap: |-
  IP 重叠
server.tools.auto_enable_requests_ip_overlap_title: |-
  提交申请的 IP 与其他账号重叠
server.tools.auto_enable_requests_main: |-
  主页
server.tools.auto_enable_requests_main_title: |-
  默认页面
server.tools.auto_enable_requests_manual_disable: |-
  手动禁用
server.tools.auto_enable_requests_manual_disable_title: |-
  提交申请的账号不是因为不活跃被禁用的
server.tools.auto_enable_requests_perfect: |-
  完美
server.tools.auto_enable_requests_perfect_minus_ip: |-
  除了 IP 完美
server.tools.auto_enable_requests_perfect_minus_ip_title: |-
  用户名有效、邮箱匹配且由于不活跃被禁用
server.tools.auto_enable_requests_perfect_title: |-
  用户名有效、邮箱匹配、当前 IP 没有重叠且由于不活跃被禁用
server.tools.auto_enable_requests_scores: |-
  计分板
server.tools.auto_enable_requests_scores_title: |-
  显示／隐藏计分板
server.tools.auto_enable_requests_search: |-
  搜索
server.tools.auto_enable_requests_search_title: |-
  显示／隐藏搜索
server.tools.auto_lock: |-
  自动锁定
server.tools.auto_lock_weeks: |-
  自动锁定周数
server.tools.available_request_bounty: |-
  可获取的求种报酬
server.tools.avatar_text: |-
  头像文本
server.tools.back_to_permission_list: |-
  返回用户组列表
server.tools.back_to_tools: |-
  返回管理面板
server.tools.badge: |-
  印记
server.tools.badge_auto: |-
  自动
server.tools.badge_class: |-
  大类
server.tools.badge_icon: |-
  图标
server.tools.badge_image: |-
  图片
server.tools.badge_level: |-
  等级
server.tools.badge_level_number: |-
  数值
server.tools.badge_management: |-
  印记管理
server.tools.badge_note: |-
  备注
server.tools.badge_operations: |-
  操作
server.tools.badge_progress: |-
  进度
server.tools.badge_query: |-
  查询
server.tools.badge_send: |-
  印记发放
server.tools.badge_sort: |-
  排序
server.tools.badge_tag: |-
  标签
server.tools.badge_to: |-
  发给
server.tools.badge_type: |-
  类型
server.tools.badge_withdraw: |-
  收回
server.tools.badges_giving: |-
  印记发放
server.tools.ban_reason: |-
  封禁原因
server.tools.tag_type: |-
  标签类型
server.tools.bans: |-
  禁用
server.tools.base_salary: |-
  基础底薪
server.tools.batch_tag_editor: |-
  标签批量编辑
server.tools.bbcode_sandbox: |-
  BBCode 样式预览
server.tools.below: |-
  小于
server.tools.bitcoin_address: |-
  比特币地址
server.tools.bitcoin_donation_balance: |-
  比特币捐助结算
server.tools.body: |-
  正文
server.tools.pick_reason: |-
  推荐理由
server.tools.bonus_number: |-
  积分数量
server.tools.bonus_points_giving: |-
  积分发放
server.tools.both: |-
  两者皆可
server.tools.breakdown: |-
  饼图
server.tools.browser: |-
  浏览器
server.tools.browser_usage: |-
  浏览器使用统计
server.tools.btc_donations_balance: |-
  比特币捐助 (结算)
server.tools.btc_donations_unprocessed: |-
  比特币捐助 (未处理)
server.tools.build_preview: |-
  构建预览
server.tools.byuserid: |-
  发奖人
server.tools.cache: |-
  缓存
server.tools.cache_decrement: |-
  缓存减量
server.tools.cache_evicted: |-
  缓存释放
server.tools.cache_flushes: |-
  缓存刷新
server.tools.cache_flushes_title: |-
  定期刷新缓存会无法利用其优势，请尽可能研究使用缓存处理或删除来代替全局刷新。
server.tools.cache_increment: |-
  缓存增量
server.tools.calendar: |-
  日历
server.tools.cannot_merge_tag_with_itself: |-
  无法将标签 %s 与自身合并！
server.tools.cas_update_success: |-
  自动控制/更新 (成功)
server.tools.cas_update_success_title_1: |-
  在已发布的自动控制指令中，有超过 30%% 是不必要的时间和资源浪费。
server.tools.cas_update_success_title_2: |-
  使用 -C 参数禁用自动控制，因为用不着，所以可以节省资源。
server.tools.cas_updates: |-
  自动控制/更新
server.tools.cashe_current_index: |-
  缓存当前索引
server.tools.cashe_storage: |-
  缓存空间占用
server.tools.cashe_storage_title: |-
  当空间占用超过 85%% 时开始释放
server.tools.cashe_total_index: |-
  缓存全部索引
server.tools.category: |-
  分区
server.tools.category_manager: |-
  论坛分区管理
server.tools.certain_size_torrents: |-
  指定大小的种子
server.tools.certain_torrent_groups: |-
  指定种子组
server.tools.certain_torrents: |-
  指定种子
server.tools.change_log: |-
  更新日志
server.tools.checked_mark: |-
  已核实
server.tools.checks: |-
  检查
server.tools.chinese_dubbed: |-
  国语配音
server.tools.class_level: |-
  用户组等级
server.tools.clear: |-
  清除
server.tools.clear_a_cache_key: |-
  清除缓存数据
server.tools.clear_common_cashes: |-
  清除公用缓存
server.tools.clear_view_a_cache_key: |-
  清除／查看缓存数据
server.tools.clears_out: |-
  清除
server.tools.click_to_see: |-
  点此查看
server.tools.client: |-
  客户端
server.tools.client_screenshots: |-
  客户端截图
server.tools.client_whitelist: |-
  客户端白名单
server.tools.client_whitelist_manager: |-
  客户端白名单管理
server.tools.collage_recovery: |-
  已删合集恢复
server.tools.comment: |-
  评论
server.tools.comment_checked_by: |-
  /核实人
server.tools.commit_message: |-
  具体信息
server.tools.community: |-
  社群
server.tools.compose_mass_pm: |-
  撰写群发私信
server.tools.concurrency: |-
  并发
server.tools.connections: |-
  连接
server.tools.controls: |-
  操作
server.tools.converting_image: |-
  转换图像
server.tools.count: |-
  计数
server.tools.country: |-
  国家
server.tools.create_a_new_permission_set: |-
  新建用户组
server.tools.create_a_user: |-
  创建用户
server.tools.create_category: |-
  创建分区
server.tools.create_forum: |-
  创建版块
server.tools.create_group: |-
  创建分组
server.tools.create_user: |-
  创建用户
server.tools.current_sales_promotion_rules: |-
  当前促销规则
server.tools.current_users_in_this_class: |-
  本组当前用户
server.tools.data: |-
  流量
server.tools.data_read: |-
  数据读取
server.tools.data_size: |-
  数据大小
server.tools.data_write: |-
  数据写入
server.tools.database: |-
  数据库
server.tools.database_slow: |-
  数据库降速
server.tools.database_slow_title: |-
  允许降速至 1/7500 查询指令以减少对性能的影响。
server.tools.database_specifics: |-
  数据库详情
server.tools.date: |-
  日期
server.tools.date_added: |-
  添加日期
server.tools.default: |-
  默认
server.tools.deficit: |-
  欠额
server.tools.deficit_title: |-
  用户想要达到合格分享率所需的上传量
server.tools.delete_failed: |-
  删除失败
server.tools.delete_success: |-
  删除 (成功)
server.tools.delete_success_title: |-
  在已发出的删除命令中，有 30%% 以上是不必要的，浪费了时间和资源。
server.tools.deleted_on: |-
  删除时间
server.tools.deletes: |-
  删除
server.tools.descending: |-
  降序
server.tools.description: |-
  描述
server.tools.developer_sandboxes: |-
  开发人员沙盒
server.tools.development: |-
  开发
server.tools.disable_entire_tree: |-
  砍掉整棵树
server.tools.disable_invites_privileges: |-
  封禁整棵树的邀请权限
server.tools.dnu_added: |-
  添加详情
server.tools.dnu_comment: |-
  注释
server.tools.dnu_list: |-
  禁止发布列表
server.tools.do_not_process_these_donations_manually: |-
  <strong>不要手动处理这些捐助！</strong>比特币处理器迟早<em>会will</em>搞定它们的（如果系统有问题就戳开发）。
server.tools.do_nothing: |-
  什么也不做
server.tools.donor_rank: |-
  捐助等级
server.tools.donor_rewards: |-
  捐助奖励
server.tools.downloaded: |-
  下载量
server.tools.drag_and_drop_table_rows_to_reorder: |-
  拖放以改变禁止发布项的排序
server.tools.drive: |-
  光驱
server.tools.dupe_ips: |-
  重叠的 IP
server.tools.dupes: |-
  重叠人数
server.tools.duplicate_ip_addresses: |-
  重叠的 IP 地址
server.tools.economic_stats: |-
  站点总体统计
server.tools.economy: |-
  站点总体统计
server.tools.edit_an_announcement: |-
  编辑公告:</br>(不会触发公告广播)
server.tools.edit_requests_handled: |-
  处理申请编辑
server.tools.email: |-
  邮箱
server.tools.email_address: |-
  邮箱
server.tools.email_blacklist: |-
  电子邮箱黑名单
server.tools.email_blacklist_comment: |-
  备注
server.tools.enable_requests: |-
  账号启用申请
server.tools.engine: |-
  引擎
server.tools.enter_a_single_replacement_tag: |-
  输入单个标签用于替换。
server.tools.enter_a_single_tag_to_search_for: |-
  输入单个标签用于搜索。
server.tools.enter_cache_keys_delimited_by_any_amount_of_whitespace: |-
  输入缓存键值，以任意数量的空格隔开。
server.tools.equal: |-
  等于
server.tools.error: |-
  错误
server.tools.events_reward: |-
  整合奖励发放
server.tools.events_reward_history: |-
  奖励发放历史
server.tools.events_reward_pm: |-
  奖励原因
server.tools.examined: |-
  审核
server.tools.expires: |-
  过期时间
server.tools.explanation_thread: |-
  数据统计及工资计算说明具体请参见 <a href=\"forums.php?action=viewthread&threadid=123\">该帖</a>
server.tools.failed_to_get_stats_for_user: |-
  获取用户 %s 的数据失败
server.tools.failed_to_get_tracker_info: |-
  获取 tracker 信息失败
server.tools.feature_torrent: |-
  特色种子
server.tools.files_per_day_this_month: |-
  本月日均文件数
server.tools.files_per_day_this_week: |-
  本周日均文件数
server.tools.files_this_month: |-
  本月文件数
server.tools.files_this_week: |-
  本周文件数
server.tools.files_today: |-
  今日文件数
server.tools.finances: |-
  捐助
server.tools.fl: |-
  免费种子
server.tools.fl_tokens_giving: |-
  免费令牌发放
server.tools.floating_wage: |-
  佣金
server.tools.for_reason: |-
  理由是
server.tools.forum_category_control_panel: |-
  论坛分区管理
server.tools.forum_category_control_panel_forums: |-
  版块数
server.tools.forum_category_management: |-
  论坛分区管理
server.tools.forum_control_panel: |-
  论坛版块管理
server.tools.forum_management: |-
  论坛管理
server.tools.forum_manager: |-
  论坛版块管理
server.tools.gamble: |-
  赌博
server.tools.gamble_title: |-
  用户在分享率监控期间的下载量
server.tools.get_select: |-
  获取/选取
server.tools.get_select_success: |-
  获取/选取（成功）
server.tools.get_stats_for_user: |-
  获取指定用户的数据
server.tools.global_cache: |-
  全局缓存
server.tools.global_notification: |-
  全站通告
server.tools.global_torrents_sales_promotion_management: |-
  全局种子促销管理
server.tools.grade_1: |-
  一档
server.tools.grade_2: |-
  二档
server.tools.grade_3: |-
  三档
server.tools.grade_4: |-
  四档
server.tools.grade_5: |-
  五档
server.tools.grant_tokens_to_leech_disabled_users: |-
  为下载权限被封禁的用户也发放令牌
server.tools.group: |-
  组
server.tools.group_number: |-
  组别
server.tools.gz_change_log: |-
  Gazelle 更新日志
server.tools.h2_global_torrents_sales_promotion_management: |-
  全局种子促销管理
server.tools.h2_ip_address_bans: |-
  IP 地址封禁
server.tools.h2_manipulate_invite_tree: |-
  邀请树管理
server.tools.h2_official_tags_manager: |-
  官方标签管理
server.tools.official_tag: |-
  官方
server.tools.other_tag: |-
  其他
server.tools.h2_os_and_browser_usage: |-
  操作系统和浏览器使用统计
server.tools.h2_site_options: |-
  站点选项
server.tools.h2_upscale_pool: |-
  分享率监控名单
server.tools.h2_user_flow: |-
  用户流动情况
server.tools.had_trackers: |-
  拥有站点
server.tools.handled_after: |-
  晚于
server.tools.handled_before: |-
  早于
server.tools.handled_between: |-
  介于
server.tools.handled_by_username: |-
  处理人
server.tools.handled_on: |-
  于
server.tools.handled_outcome: |-
  处理结果
server.tools.handled_timestamp: |-
  处理时间
server.tools.handled_timestamp_title: |-
  它会检索输入的日期及其之后的 24 小时
server.tools.hidden: |-
  隐藏
server.tools.history: |-
  历史
server.tools.host: |-
  服务商
server.tools.hour_s: |-
  小时
server.tools.hours: |-
  小时
server.tools.icon: |-
  捐助图标
server.tools.icon_link: |-
  捐助图标链接
server.tools.icon_text: |-
  捐助图标文本
server.tools.id: |-
  ID
server.tools.importance: |-
  优先级
server.tools.inactivity: |-
  不活跃
server.tools.include_checked: |-
  包括已核实
server.tools.incomplete: |-
  待补充
server.tools.increment_decrement: |-
  增量/减量
server.tools.increment_decrement_success: |-
  增量/减量 (成功)
server.tools.index_size: |-
  索引大小
server.tools.internal_torrent: |-
  Int 组种子
server.tools.introduction: |-
  个人介绍
server.tools.invalid_freeleech_type_or_freeleech_reason: |-
  无效的免费类型或理由
server.tools.invalid_group_ids: |-
  无效的种子组 ID
server.tools.invalid_size_or_units: |-
  无效的数值或单位
server.tools.invite_code: |-
  邀请码
server.tools.invite_pool: |-
  邀请池
server.tools.inviter: |-
  邀请者
server.tools.invites: |-
  邀请数
server.tools.invites_giving: |-
  邀请发放
server.tools.invites_number: |-
  邀请数量
server.tools.invites_type: |-
  邀请类型
server.tools.invitestime: |-
  邀请过期时间
server.tools.ip_address: |-
  IP 地址
server.tools.ip_address_bans: |-
  IP 地址封禁
server.tools.ip_lock_management: |-
  登录 IP 限制
server.tools.irc_manager: |-
  IRC 管理
server.tools.joined: |-
  加入
server.tools.joined_after: |-
  加入时间晚于
server.tools.joined_before: |-
  加入时间早于
server.tools.key: |-
  键值
server.tools.last_donated: |-
  最近捐助
server.tools.leave_blank_to_auto_generate: |-
  留空以自动生成
server.tools.leechdisabled: |-
  发放给下载权限被封禁的用户
server.tools.leeching: |-
  下载数
server.tools.length_in_min: |-
  时长 (以分钟计)
server.tools.level: |-
  等级
server.tools.life_span: |-
  有效期
server.tools.link_to_a_torrent_group: |-
  添加站内一个种子组的链接。例如，
server.tools.list_affected_rows: |-
  列出受影响的项目
server.tools.login_watch: |-
  登录监控
server.tools.main_stats: |-
  主要数据
server.tools.manage: |-
  管理
server.tools.manage_badges: |-
  印记管理
server.tools.manage_email_blacklist: |-
  管理邮箱黑名单
server.tools.manage_permissions: |-
  权限管理
server.tools.manage_stylesheets: |-
  层叠样式表管理
server.tools.manage_the_dnu_list: |-
  禁止发布列表管理
server.tools.managers: |-
  站点管理
server.tools.mandatory_comment: |-
  强制备注
server.tools.manipulate_invite_tree: |-
  邀请树管理
server.tools.manual: |-
  手动
server.tools.manually_submit_a_log: |-
  手工提交更新日志
server.tools.mark_torrents_as: |-
  将种子设置为
server.tools.mass_pm: |-
  私信群发
server.tools.mass_pm_class: |-
  用户群
server.tools.max_collages: |-
  私人合集数量上限
server.tools.mean_buffer: |-
  平均缓冲量
server.tools.mean_download: |-
  平均下载量
server.tools.mean_files_per_torrent: |-
  种子平均文件数
server.tools.mean_filesize: |-
  文件平均大小
server.tools.mean_leechers_per_torrent: |-
  单种平均下载数
server.tools.mean_leeching_per_user: |-
  单人平均下载数
server.tools.mean_leeching_per_user_in_at_least_1_swarm: |-
  参与至少一个集群用户的平均下载数
server.tools.mean_ratio: |-
  平均分享率
server.tools.mean_seeders_per_torrent: |-
  单种平均做种数
server.tools.mean_seeding_per_user: |-
  单人平均做种数
server.tools.mean_seeding_per_user_in_at_least_1_swarm: |-
  参与至少一个集群用户的平均做种数
server.tools.mean_snatches_per_torrent: |-
  单种平均完成数
server.tools.mean_snatches_per_user: |-
  单人平均完成数
server.tools.mean_snatches_per_user_in_at_least_1_swarm: |-
  参与至少一个集群用户的平均完成数
server.tools.mean_torrent_size: |-
  种子平均大小
server.tools.mean_torrents_per_user: |-
  人均种子数
server.tools.mean_upload: |-
  平均上传量
server.tools.merge_rename_tags: |-
  合并／重命名标签
server.tools.message: |-
  消息
server.tools.min_class_create: |-
  创建等级限制
server.tools.min_class_read: |-
  阅读等级限制
server.tools.min_class_write: |-
  编辑等级限制
server.tools.misc: |-
  杂项
server.tools.month: |-
  &nbsp;%s&nbsp;月
server.tools.multi_key: |-
  多个键值
server.tools.multiple_freeleech: |-
  批量免费设置
server.tools.name: |-
  名称
server.tools.navigation_manager: |-
  导航管理
server.tools.net_growth: |-
  净增长
server.tools.new_donations_from: |-
  来自 %s 的新捐助
server.tools.new_official_tag: |-
  新增官方标签
server.tools.news_post: |-
  公告发布
server.tools.nl: |-
  中性种子
server.tools.nl_torrents_over: |-
  在种子的体积大于&nbsp;
server.tools.nl_torrents_over_after: |-
  &nbsp;时将之设为中性种子
server.tools.no: |-
  否
server.tools.no_new_pending_auto_enable_requests: |-
  没有新的待处理自动恢复申请
server.tools.no_special_users: |-
  尚无特殊用户。
server.tools.no_such_tag_found: |-
  未找到该标签
server.tools.no_unprocessed_bitcoin_donations: |-
  没有未处理的比特币捐助
server.tools.nodejs: |-
  NodeJS
server.tools.normal: |-
  普通种子
server.tools.notes: |-
  备注
server.tools.numbers_and_such: |-
  数值以及其他信息
server.tools.tags_manager: |-
  标签管理
server.tools.offset: |-
  偏移值
server.tools.offsets_inserted: |-
  条偏移值记录已插入。
server.tools.only_affect_users_with_at_least_this_many_tokens: |-
  只影响令牌数超过该数值的用户
server.tools.operation: |-
  操作
server.tools.operations: |-
  操作
server.tools.operator: |-
  操作人
server.tools.opinion: |-
  审核意见
server.tools.order_by: |-
  排序
server.tools.original_options: |-
  原创选项
server.tools.os: |-
  操作系统
server.tools.os_and_browser_usage: |-
  操作系统和浏览器使用统计
server.tools.os_usage: |-
  操作系统使用统计
server.tools.other: |-
  其他
server.tools.others: |-
  其他
server.tools.outcome: |-
  处理结果
server.tools.outcome_approved: |-
  已批准
server.tools.outcome_denied: |-
  已否决
server.tools.outcome_discarded: |-
  已遗弃
server.tools.overall_stats: |-
  总体统计
server.tools.pass: |-
  通过
server.tools.passed: |-
  已通过
server.tools.password: |-
  密码
server.tools.paste_a_list_of_collage_or_torrent_group_urls: |-
  粘贴多个合集或影片网址
server.tools.path: |-
  路径
server.tools.peer_id: |-
  同伴 ID
server.tools.pend: |-
  待定
server.tools.pending: |-
  待定中
server.tools.period_of_validity: |-
  有效期
server.tools.permanent: |-
  永久
server.tools.permission_name: |-
  用户组名称
server.tools.permissions_manager: |-
  用户组管理
server.tools.php_processes: |-
  PHP 进程
server.tools.please_enter_a_comment_to_add_to_the_users_affected: |-
  请为受影响的用户输入一段备注。
server.tools.please_enter_properly_formatted_urls: |-
  请输入格式正确的网址
server.tools.plz_supply_a_valid_album_id: |-
  请提交一个有效的影片 ID
server.tools.points_to_add: |-
  欲发放的积分数额
server.tools.posts: |-
  站内发帖数
server.tools.prepaid_card_donor: |-
  移动充值卡捐助
server.tools.processing: |-
  处理
server.tools.proper_tag: |-
  正确标签
server.tools.publish_a_new_announcement: |-
  发布新公告:</br>(会触发公告广播)
server.tools.puppeteer: |-
  操作人
server.tools.qq_group: |-
  QQ 群
server.tools.quarter_1: |-
  第一季度
server.tools.quarter_2: |-
  第二季度
server.tools.quarter_3: |-
  第三季度
server.tools.quarter_4: |-
  第四季度
server.tools.queue: |-
  队列
server.tools.queuing: |-
  排队中
server.tools.range: |-
  范围
server.tools.rank: |-
  捐助等级
server.tools.ratio: |-
  分享率
server.tools.ratio_watch_ended_ends: |-
  分享率监控结束时间
server.tools.ratio_watch_ended_ends_title: |-
  如果此处显示的时间以 “前” 结尾，则代表用户被监控分享率的时长和／或低于其合格分享率的时长。如果此处显示的时间不以 “前” 结尾，则它是两周分享率监控期结束的时间。
server.tools.reason: |-
  理由
server.tools.reason_placeholder: |-
  在此填写的内容会记录在活动奖励发放历史中。
server.tools.receiving_bitcoin_address: |-
  比特币接收地址
server.tools.recommendations: |-
  推荐
server.tools.registered: |-
  注册时间
server.tools.registration_date: |-
  注册时间
server.tools.registration_log: |-
  注册日志
server.tools.reject: |-
  拒绝
server.tools.rejected: |-
  已拒绝
server.tools.remaining: |-
  剩余
server.tools.remark: |-
  原因
server.tools.remove: |-
  删除
server.tools.rename_to_merge_with_tag: |-
  重命名／合并到标签
server.tools.renamed_from: |-
  重命名自
server.tools.rendering_parameters: |-
  渲染参数
server.tools.rendering_status: |-
  渲染状态
server.tools.reports_handled: |-
  处理报告
server.tools.reports_submitted: |-
  提交报告
server.tools.required_ratio: |-
  合格分享率
server.tools.rerender_stylesheet_gallery_images: |-
  重新渲染层叠样式表图库
server.tools.resolution: |-
  分辨率
server.tools.rewarded_times: |-
  打赏次数
server.tools.rewards: |-
  奖励
server.tools.row_size: |-
  行大小
server.tools.rows: |-
  行数
server.tools.sales_promotion_period: |-
  促销期限
server.tools.sales_promotion_plan: |-
  促销方案
server.tools.sales_promotion_range: |-
  促销范围
server.tools.sales_promotion_rules_history: |-
  促销规则历史记录
server.tools.schedule: |-
  计划任务
server.tools.schema: |-
  模式
server.tools.search_ip: |-
  搜索
server.tools.second_avatar: |-
  第二头像
server.tools.secondary_class: |-
  次用户组
server.tools.seeder_leecher_ratio: |-
  做种数／下载数
server.tools.seeder_snatch_ratio: |-
  做种数／完成数
server.tools.seeding: |-
  做种数
server.tools.send_a_mass_pm: |-
  群发私信
server.tools.send_as_system: |-
  以系统名义发送
server.tools.send_rewards: |-
  发放奖励
server.tools.server_root: |-
  服务器根目录
server.tools.service: |-
  服务器
server.tools.service_stats: |-
  服务器数据
server.tools.set_global_notification: |-
  设置全站通告
server.tools.set_insert: |-
  存入/插入
server.tools.set_insert_success: |-
  存入/插入 (成功)
server.tools.should_edit: |-
  此 ID 已有 IP 限制条目，请编辑而不是重复添加！
server.tools.show_abusers: |-
  显示滥用者
server.tools.show_all: |-
  显示全部
server.tools.show_donor_list: |-
  显示捐助列表
server.tools.show_on_staff_page: |-
  显示在管理页面
server.tools.site_activities: |-
  活跃站点
server.tools.site_info: |-
  站点信息
server.tools.site_information: |-
  站点信息
server.tools.site_options: |-
  站点选项
server.tools.size_limitation: |-
  大小限制
server.tools.size_limitation_note: |-
  “等于” 与 “大于” “小于” 互斥，如果同时都填写了，只有 “等于” 会生效。如果希望对所有大小的种子生效，三处留空即可。
server.tools.size_per_day_this_month: |-
  本月日均大小
server.tools.size_per_day_this_week: |-
  本周日均大小
server.tools.size_this_month: |-
  本月大小
server.tools.size_this_week: |-
  本周大小
server.tools.size_today: |-
  今日大小
server.tools.snatches: |-
  完成
server.tools.someone_bonus: |-
  奖励积分
server.tools.someone_invites: |-
  奖励邀请
server.tools.someone_tokens: |-
  发放令牌
server.tools.sort: |-
  排序
server.tools.sort_by_bad_labels: |-
  错误厂牌正序排列
server.tools.sort_by_bad_tags: |-
  错误标签正序排列
server.tools.sort_by_good_labels: |-
  正确厂牌正序排列
server.tools.sort_by_good_tags: |-
  正确标签正序排列
server.tools.source: |-
  片源
server.tools.space_bonus: |-
  &nbsp;积分
server.tools.space_in_this_view: |-
  出现在这里
server.tools.space_invite_one: |-
  1 枚邀请
server.tools.space_invite_other: |-
  %s 枚邀请
server.tools.space_token_one: |-
  1 枚令牌
server.tools.space_token_other: |-
  %s 枚令牌
server.tools.special: |-
  特殊
server.tools.special_effects_subtitles: |-
  特效字幕
server.tools.special_rank: |-
  特殊等级
server.tools.special_users: |-
  特殊用户
server.tools.specifications: |-
  规格
server.tools.staff: |-
  管理组
server.tools.staff_group_management: |-
  管理组分组管理
server.tools.staff_page_group: |-
  管理页面分组
server.tools.staff_page_group_manager: |-
  管理组分组管理
server.tools.staff_tools: |-
  管理工具面板
server.tools.standard_definition: |-
  标清
server.tools.static_server: |-
  静态服务器
server.tools.statistical_settlement_time_dividing_query_panel: |-
  统计结算分时查询面板
server.tools.status: |-
  状态
server.tools.stylesheets: |-
  层叠样式表
server.tools.subject: |-
  主题
server.tools.submit: |-
  提交
server.tools.submit_checked_date: |-
  /核实日期
server.tools.submitted_after: |-
  晚于
server.tools.submitted_at: |-
  提交于
server.tools.submitted_before: |-
  早于
server.tools.submitted_between: |-
  介于
server.tools.submitted_on: |-
  于
server.tools.submitted_timestamp: |-
  提交时间
server.tools.submitted_timestamp_title: |-
  它会检索输入的日期及其之后的 24 小时
server.tools.success_exclamation_mark: |-
  成功！
server.tools.supplementary_information: |-
  补充资料
server.tools.sure_delete_staff_group_title: |-
  你确定要这么做吗？开弓没有回头箭！
server.tools.swarms_and_snatches: |-
  集群与竞争
server.tools.tag: |-
  标签
server.tools.sub_tag: |-
  标签中文名
server.tools.tag_aliases: |-
  标签别名
server.tools.td_ip_address: |-
  IP 地址
server.tools.temporary: |-
  临时
server.tools.tg_group: |-
  TG 群
server.tools.there_are_currently_enabled_users_on_ratio_watch: |-
  当前共 %s 位未封禁用户名列其中，且有 %s 位已被封禁下载权限。
server.tools.there_are_currently_no_users_on_ratio_watch: |-
  当前没有用户在分享率监控名单上。
server.tools.there_are_no_permission_classes: |-
  尚无用户组。
server.tools.there_are_no_stylesheets: |-
  目前还没有层叠样式表。
server.tools.there_are_no_users_with_more_than_n_ip_overlaps: |-
  当前没有 IP 重叠数超过 %s 的用户。
server.tools.there_have_been_no_new_registrations_in_the_past_72_hours: |-
  在过去的 72 小时内没有新注册的用户。
server.tools.threads_active: |-
  线程 (活动)
server.tools.time: |-
  时间
server.tools.timer: |-
  定时
server.tools.tips: |-
  补充提示
server.tools.token_number: |-
  令牌数量
server.tools.token_type: |-
  令牌类型
server.tools.tokens: |-
  令牌
server.tools.tokens_to_add: |-
  欲发放的数量
server.tools.tokens_to_set: |-
  欲设定的数量
server.tools.tokenstime: |-
  令牌过期时间
server.tools.tools: |-
  工具
server.tools.torrent_checked: |-
  已检查的种子
server.tools.torrent_groups: |-
  影片
server.tools.torrent_management: |-
  种子管理
server.tools.torrent_stats: |-
  种子总体统计
server.tools.torrents: |-
  种子
server.tools.torrents_per_day_this_month: |-
  本月日均种子数
server.tools.torrents_per_day_this_week: |-
  本周日均种子数
server.tools.torrents_this_month: |-
  本月种子数
server.tools.torrents_this_week: |-
  本周种子数
server.tools.torrents_today: |-
  今日种子数
server.tools.total: |-
  总数
server.tools.total_amount: |-
  总金额
server.tools.total_buffer: |-
  总缓冲量
server.tools.total_download: |-
  总下载量
server.tools.total_files: |-
  文件总数
server.tools.total_leechers: |-
  总下载数
server.tools.total_points: |-
  总点数
server.tools.total_reads: |-
  总读取
server.tools.total_request_bounty: |-
  求种报酬总量
server.tools.total_seeders: |-
  总做种数
server.tools.total_size: |-
  总大小
server.tools.total_snatches: |-
  总完成数
server.tools.total_torrents: |-
  种子总数
server.tools.total_upload: |-
  总上传量
server.tools.total_users_in_at_least_1_swarm: |-
  参与至少一个集群的用户总数
server.tools.total_wages: |-
  总工资
server.tools.total_writes: |-
  总写入
server.tools.tracker_info: |-
  Tracker 信息
server.tools.tracker_screenshots: |-
  站点截图
server.tools.unprocessed_amount_total: |-
  未处理总量 (共计
server.tools.unprocessed_bitcoin_donations: |-
  未处理的比特币捐助
server.tools.unresolve: |-
  未解决
server.tools.unused_invites_have_been_sent: |-
  枚已发送但未被使用的邀请。
server.tools.update_geoip: |-
  更新 GeoIP
server.tools.update_offsets: |-
  更新偏移值
server.tools.upload_frequency: |-
  发布频率
server.tools.uploaded: |-
  上传量
server.tools.uploads: |-
  发布
server.tools.upscale_pool: |-
  分享率监控名单
server.tools.url: |-
  网址
server.tools.user: |-
  用户
server.tools.user_agent: |-
  用户代理
server.tools.user_count: |-
  用户数
server.tools.user_does_not_exist: |-
  用户 %s 不存在
server.tools.user_flow: |-
  用户流动情况
server.tools.user_flow_vs_time: |-
  用户流动情况随时间变化表
server.tools.user_id: |-
  用户 ID
server.tools.user_stats: |-
  用户数据
server.tools.userid: |-
  用户 ID
server.tools.userids: |-
  获奖 ID
server.tools.username: |-
  用户名
server.tools.username_search: |-
  用户名搜索
server.tools.users: |-
  用户
server.tools.users_caches_cleared: |-
  位用户的缓存数据已被清除！
server.tools.uses: |-
  用量
server.tools.utilities: |-
  工具
server.tools.value: |-
  值
server.tools.view: |-
  查看
server.tools.wage_statistics: |-
  工资统计
server.tools.whoami: |-
  显示本用户信息
server.tools.wi: |-
  使用 whatismyipaddress.com 查询
server.tools.words_must_be_separated_by_underscores: |-
  须使用下划线分隔单词
server.tools.work_statistical_graph: |-
  工作统计分时表
server.tools.year: |-
  %s 年
server.tools.yes: |-
  是
server.top10.all: |-
  全部
server.top10.any: |-
  任一
server.top10.current_donor_rank: |-
  当前捐助等级
server.top10.date: |-
  日期
server.top10.day: |-
  天
server.top10.dl_speed: |-
  下载速度
server.top10.donors: |-
  捐助者
server.top10.down_speed_is_base_2: |-
  下载速度是基于二进制的 byte/s，而非 bit/s 报告的。
server.top10.downloaded: |-
  下载量
server.top10.downloaders: |-
  下载者
server.top10.fastest_downloaders: |-
  高速下载者
server.top10.fastest_uploaders: |-
  高速上传者
server.top10.favorites: |-
  好评
server.top10.found_no_tags_matching_the_criteria: |-
  没有满足条件的标签
server.top10.found_no_torrents_matching_the_criteria: |-
  没有满足条件的种子
server.top10.found_no_users_matching_the_criteria: |-
  没有满足条件的用户
server.top10.free: |-
  免费
server.top10.ft_torrents: |-
  搜索
server.top10.hide: |-
  隐藏
server.top10.in_the_past_day: |-
  最近一天内上传最活跃的资源
server.top10.in_the_past_month: |-
  最近一月内上传最活跃的资源
server.top10.in_the_past_week: |-
  最近一周内上传最活跃的资源
server.top10.in_the_past_year: |-
  最近一年内上传最活跃的资源
server.top10.joined: |-
  加入时间
server.top10.last_donated: |-
  最近捐助
server.top10.most_data: |-
  产生流量最多的资源
server.top10.most_highly_voted_tags: |-
  高支持率标签
server.top10.most_seed: |-
  上传最快的资源
server.top10.most_snatched: |-
  已完成用户最多的资源
server.top10.most_torrents: |-
  上传最活跃的资源
server.top10.most_used_request_tags: |-
  高使用率求种标签
server.top10.most_used_torrent_tags: |-
  高使用率种子标签
server.top10.movies: |-
  电影
server.top10.name: |-
  种子名称
server.top10.neg_votes: |-
  反对
server.top10.original: |-
  原创
server.top10.original_uploaders: |-
  原创发布者
server.top10.original_uploads: |-
  原创发布数
server.top10.pos_votes: |-
  支持
server.top10.position: |-
  排名
server.top10.rank: |-
  排名
server.top10.ratio: |-
  分享率
server.top10.search_for_a_date_after: |-
  搜索日期 (2010-09-05 之后)
server.top10.self_purchased_uploaders: |-
  自购发布者
server.top10.self_purchased_uploads: |-
  自购发布数
server.top10.self_rip_uploaders: |-
  自制发布者
server.top10.self_rip_uploads: |-
  自制发布数
server.top10.show: |-
  展示
server.top10.sth_is_wrong_with_the_date_you_provided: |-
  你提供的日期不太对
server.top10.tag: |-
  标签
server.top10.tags: |-
  标签
server.top10.tags_comma: |-
  标签 (逗号分隔)
server.top10.the_first_week_after: |-
  %s 之后一周内
server.top10.top: |-
  前
server.top10.top_10_donors: |-
  前 10 捐助者
server.top10.top_10_for: |-
  %s 的前 10 种子
server.top10.top_10_original_uploaders: |-
  前 10 原创发布者
server.top10.top_10_tags: |-
  前 10 标签
server.top10.top_10_torrents: |-
  前 10 种子
server.top10.top_10_torrents_history: |-
  前 10 种子历史记录
server.top10.top_10_users: |-
  前 10 用户
server.top10.top_donors: |-
  捐助者排行
server.top10.top_movies: |-
  电影
server.top10.top_n_donors: |-
  捐助者
server.top10.top_torrents: |-
  种子
server.top10.torrents: |-
  种子
server.top10.torrents_uploaded: |-
  发布者
server.top10.total_donor_points: |-
  总捐助点数
server.top10.type: |-
  类型
server.top10.ul_speed: |-
  上传速度
server.top10.up_speed_is_base_2: |-
  上传速度是基于二进制的 byte/s，而非 bit/s 报告的。
server.top10.uploaded: |-
  上传量
server.top10.uploaders: |-
  上传者
server.top10.uploads: |-
  发布数
server.top10.user: |-
  用户
server.top10.users: |-
  用户
server.top10.uses: |-
  使用次数
server.top10.week: |-
  周
server.top10.you_do_not_have_access_to_view_this_feature: |-
  你没有访问此功能的权限。
server.torrents.1080p_empty_slots: |-
  1080p 空槽：
server.torrents.3d: |-
  3D
server.torrents.720p_empty_slots: |-
  720p 空槽：
server.torrents.action_downloaded: |-
  已下载
server.torrents.action_leeching: |-
  下载中
server.torrents.action_seeding: |-
  做种中
server.torrents.action_snatched: |-
  已完成
server.torrents.action_torrents: |-
  的种子
server.torrents.action_uploaded: |-
  已发布
server.torrents.active: |-
  最新活动
server.torrents.actual_hnrs: |-
  实际统计的 H&R
server.torrents.add_artist: |-
  添加艺人
server.torrents.add_format: |-
  添加格式
server.torrents.add_subtitles: |-
  添加字幕
server.torrents.add_tag: |-
  添加标签
server.torrents.add_time: |-
  添加时间
server.torrents.additional_slots: |-
  额外的特许槽位
server.torrents.advanced: |-
  高级
server.torrents.album_votes: |-
  影片投票
server.torrents.all: |-
  全部
server.torrents.all_quality_slot: |-
  所有质量槽
server.torrents.allow: |-
  未允禁转
server.torrents.already_a_re_seed_request: |-
  最近 10 天内已有针对该种子的一个续种请求了。
server.torrents.any: |-
  任一
server.torrents.appended_to_the_regular_message_unless_using_send_now: |-
  除非使用 “Send now”，否则会追加到常规信息中。
server.torrents.artist_alias_id: |-
  艺人 ID
server.torrents.asc: |-
  升序
#at <time>
server.torrents.at: |-
  于 %s
server.torrents.bad_filename: |-
  问题文件夹名
server.torrents.bad_files: |-
  问题文件名
server.torrents.base: |-
  简单
server.torrents.basic: |-
  基本
server.torrents.because: |-
  由于
server.torrents.bounty: |-
  报酬
server.torrents.browser_edit_torrent: |-
  编辑种子
server.torrents.buy: |-
  自购
server.torrents.catch_up: |-
  刷新列表
server.torrents.change_category: |-
  变更分类
server.torrents.change_group: |-
  变更种子组
server.torrents.checked_by: |-
  由 %s 检查
server.torrents.checked_explanation: |-
  检查（此图标仅指种子是否已被检查而非质量好坏，具体请查看 Wiki）
server.torrents.chi: |-
  中字
server.torrents.cinematographer: |-
  摄影
server.torrents.clear_all_old: |-
  清空所有
server.torrents.clear_all_old_in_filter: |-
  清空此过滤器中的所有项
server.torrents.clear_selected: |-
  清除已选
server.torrents.clear_selected_in_filter: |-
  清除此过滤器中的已选项
server.torrents.clear_slot: |-
  清除选择
server.torrents.cleardefault: |-
  清除默认
server.torrents.client: |-
  客户端
server.torrents.cn_dub: |-
  国配
server.torrents.cn_quality_slot: |-
  中字质量槽
server.torrents.cn_quality_slot_requirements: |-
  必须内封中字。不得含有简繁英以外的字幕。压制质量越高越好。
server.torrents.cn_quality_slot_x265: |-
  中字质量槽 (x265)
server.torrents.codec: |-
  编码
server.torrents.composer: |-
  作曲
server.torrents.connectable: |-
  连接性
server.torrents.container: |-
  容器
server.torrents.database_ids: |-
  数据库编号
server.torrents.date: |-
  时间
server.torrents.dead: |-
  死种
server.torrents.delete_title: |-
  删种？
server.torrents.delete_torrent: |-
  删除种子
server.torrents.delete_torrent_note: |-
  如果你是因为种子被报告而想要删种，请不要这样做，因为它很可能错不至此。随意删种可能会导致你受处罚。
server.torrents.deleted: |-
  已删除
server.torrents.desc: |-
  降序
server.torrents.director: |-
  导演
server.torrents.diy: |-
  自制
server.torrents.diy_slot: |-
  DIY 槽
server.torrents.diy_slot_requirements: |-
  仅供外语电影。必须拥有国配或特效字幕。
server.torrents.douban_id: |-
  豆瓣编号
server.torrents.dupe: |-
  重复
server.torrents.edit_details: |-
  编辑详情
server.torrents.edit_filters: |-
  编辑过滤器
server.torrents.edit_notification_filters: |-
  编辑推送
server.torrents.edit_summary: |-
  编辑摘要
server.torrents.edit_torrent_group: |-
  编辑种子组
server.torrents.editgroup: |-
  编辑描述
server.torrents.edition_expand: |-
  点此切换搜索特定发行的信息
server.torrents.editrequest: |-
  请求编辑
server.torrents.eliminate_a_hnr: |-
  消除一个 H&R
server.torrents.eliminated_hnrs: |-
  H&R 消除数
server.torrents.empty_slot: |-
  该种子尚未被指定槽位
server.torrents.empty_slots: |-
  空槽：
server.torrents.en_quality_slot: |-
  英字质量槽
server.torrents.en_quality_slot_requirements: |-
  建议内封英字。无英字的非英语电影会被标为「可替代」。压制质量越高越好。
server.torrents.en_quality_slot_x265: |-
  英字质量槽 (x265)
server.torrents.error_downloaded_to_many_times: |-
  你已下载该种子四次了。如果你还需要下载，请在浏览器中再次操作。
server.torrents.error_leech_disabled: |-
  你不能在下载权限被禁用的时候使用免费令牌。
server.torrents.error_leech_disabled_may: |-
  你不能在下载权限被禁用的时候使用免费令牌。
server.torrents.error_occurred_to_token: |-
  不好意思！在尝试消耗你的令牌时发生了一点错误。这很可能是因为 tracker 无响应或负载过重。请稍后再试。
server.torrents.error_tokens_not_enough: |-
  免费令牌余额不足。请使用常规的 DL 按钮。
server.torrents.extra: |-
  追加
server.torrents.extra_definition: |-
  其他
server.torrents.extra_info: |-
  额外信息
server.torrents.extra_info_placeholder: |-
  请尽可能详细地阐述你删除种子的理由。
server.torrents.feature: |-
  特色
server.torrents.feature_slot: |-
  特色槽
server.torrents.feature_slot_requirements: |-
  仅供外语电影。必须内封中字。必须拥有国配或特效字幕。
server.torrents.file_names: |-
  文件列表
server.torrents.first_torrent: |-
  用户首种
server.torrents.first_torrent_title: |-
  这是该用户发布的第一个种子
server.torrents.fld: |-
  FREE
server.torrents.fold_tooltip: |-
  单击可折叠和展开简介
server.torrents.for_the_reason: |-
  ，报告类型 \"
server.torrents.free_left: |-
  限时 %s
server.torrents.freeleech: |-
  免费种子
server.torrents.ft_filelist: |-
  文件列表
server.torrents.ft_order: |-
  排序
server.torrents.ft_releasetype: |-
  发行类别
server.torrents.ft_ripspecifics: |-
  具体条件
server.torrents.ft_year: |-
  发行年份
server.torrents.ftb_searchstr: |-
  搜索关键词
server.torrents.gift_points_pre_tax: |-
  打赏积分（税前）
server.torrents.giver_list: |-
  打赏列表
server.torrents.global_freeleech_text: |-
  全局免费生效中，种子的优惠设置暂时无效
server.torrents.group_high_resolution: |-
  HD
server.torrents.group_id: |-
  种子组 ID
server.torrents.group_results: |-
  依据发行版本分组
server.torrents.group_standard_resolution: |-
  SD
server.torrents.group_title: |-
  电影标题
server.torrents.group_ultra_high_resolution: |-
  UHD
server.torrents.guide_of_advanced_search: |-
  使用说明
server.torrents.has_been_checked: |-
  已
server.torrents.has_not_been_checked: |-
  未
server.torrents.hd_encode: |-
  HD 压制类
server.torrents.hd_encode_title: |-
  质量槽／存档槽／特色槽
server.torrents.hd_untouched: |-
  HD 原盘类
server.torrents.hd_untouched_title: |-
  Remux 槽／原盘槽／DIY 槽
server.torrents.header: |-
  电影
server.torrents.hide: |-
  隐藏
server.torrents.hide_tags: |-
  隐藏标签
server.torrents.history_for_after: |-
  编辑记录
server.torrents.history_for_group_after: |-
  编辑记录
server.torrents.hit_and_run: |-
  H&R
server.torrents.hnr_is_not_opened_now: |-
  站点目前未开启 H&R
server.torrents.hnrs: |-
  H&R
server.torrents.if_you_download_this: |-
  下载该种子后，你的分享率将降至%s。
server.torrents.image: |-
  海报链接
server.torrents.imdb_id: |-
  IMDb 编号
server.torrents.imdb_language: |-
  语言
server.torrents.imdb_plot: |-
  梗概
server.torrents.imdb_region: |-
  地区
server.torrents.imdb_runtime: |-
  片长
server.torrents.info: |-
  信息
server.torrents.into_the_group: |-
  合并到另一组
server.torrents.jinzhuan: |-
  禁转
server.torrents.lack_of_info_now: |-
  暂无此片信息
server.torrents.last_active: |-
  最新活动
server.torrents.latest_notifications: |-
  最近的新种推送
server.torrents.leechers: |-
  下载数
server.torrents.like: |-
  赞
server.torrents.list_of_downloaders: |-
  下载列表
server.torrents.list_of_giver: |-
  打赏列表
server.torrents.list_of_giver_title: |-
  打赏用户名单
server.torrents.list_of_snatchers: |-
  完成列表
server.torrents.location: |-
  位置
server.torrents.mark_all_in_filter_as_read: |-
  将此过滤器中的所有项设为已阅
server.torrents.mass_pm: |-
  群发给已完成的用户
server.torrents.masspm: |-
  群发给已完成用户
server.torrents.matches_for: |-
  满足 %s 条件的新种
server.torrents.matches_for_unknown_filter: |-
  满足未知过滤器 %s 的新种
server.torrents.media_info: |-
  媒体信息
server.torrents.merge_confirm: |-
  合并确认
server.torrents.merge_target: |-
  目标种子组 ID
server.torrents.merge_with: |-
  并入另一种子组
server.torrents.misc: |-
  杂项
server.torrents.missing: |-
  空槽总览
server.torrents.movie_producer: |-
  制片
server.torrents.movie_votes: |-
  票
server.torrents.my_notifications: |-
  我的新种推送
server.torrents.n_user_one: |-
  1 位用户。
server.torrents.n_user_other: |-
  %s 位用户。
server.torrents.name: |-
  名称
server.torrents.neutral_leech: |-
  中性种子
server.torrents.never: |-
  无
server.torrents.no: |-
  否
server.torrents.no_new_notifications_found: |-
  新种订阅空空如也
server.torrents.non_wiki_torrent_group_editing: |-
  种子组编辑
server.torrents.nothing_found: |-
  无匹配结果！
server.torrents.off25: |-
  -25%%
server.torrents.off50: |-
  -50%%
server.torrents.off75: |-
  -75%%
server.torrents.only_hnr: |-
  只显示H&R
server.torrents.only_shows_free_torrents: |-
  只显示免费种子
server.torrents.other: |-
  其他
server.torrents.peer: |-
  同伴
server.torrents.peer_list: |-
  做种列表
server.torrents.people_who_like_this_album_also_liked: |-
  喜欢这部影片的用户也喜欢……
server.torrents.period: |-
  。
server.torrents.permalink: |-
  永久链接
server.torrents.pfl: |-
  个人免费
server.torrents.pm_uploader: |-
  私信发布者
server.torrents.processing: |-
  处理
server.torrents.quality_slot: |-
  质量槽
server.torrents.quality_slot_requirements: |-
  建议内封中字。同时缺少中英字幕的种子会被标为「可替代」。压制质量越高越好。
server.torrents.quality_type_slot: |-
  质量槽类 (含英字和无要求)
server.torrents.random: |-
  随机
server.torrents.reason: |-
  原因
server.torrents.regenerate: |-
  重新生成
server.torrents.release_type: |-
  发行类别
server.torrents.release_types:
  '1': |-
    长片
  '2': |-
    短片
  '3': |-
    迷你剧
  '4': |-
    单口喜剧
  '5': |-
    现场演出
  '6': |-
    电影集
server.torrents.remove: |-
  删除
server.torrents.remove_artist: |-
  删除艺人
server.torrents.remove_conductor: |-
  删除指挥
server.torrents.remove_tag: |-
  删除标签
server.torrents.remove_upload_privileges: |-
  封禁发布权限
server.torrents.remove_upload_privileges_title: |-
  封禁发布权限？
server.torrents.remux_slot: |-
  Remux 槽
server.torrents.remux_slot_requirements: |-
  建议内封中字。同时缺少中英字幕的种子会被标为「可替代」。
server.torrents.rename: |-
  重命名 (不会合并)
server.torrents.reply: |-
  回复
server.torrents.reply_at: |-
  回复报告于
server.torrents.reply_it_patiently: |-
  请在此填写你针对已有报告想作出的解释和说明，你只能提交一次，请保持礼貌、客观。该说明有助于管理更好地处理该报告。
server.torrents.report: |-
  报告
server.torrents.reported: |-
  已报告
server.torrents.reported_it: |-
  报告此种
server.torrents.req_format: |-
  请求格式
server.torrents.request_an_edit: |-
  请求编辑
server.torrents.request_number: |-
  求种数
server.torrents.request_re_seed: |-
  请求续种
server.torrents.request_re_seed_confirm: |-
  你确定要为这个种子请求续种么？
server.torrents.reset: |-
  重置
server.torrents.resolution: |-
  分辨率
server.torrents.resolve: |-
  处理
server.torrents.retention_slot: |-
  存档槽
server.torrents.retention_slot_requirements: |-
  应小于质量类槽位体积的 80%。压制质量达到一般要求即可。
server.torrents.retention_type_slot: |-
  存档槽类（含存档和特色）
server.torrents.revert: |-
  还原该版
server.torrents.revert_confirm: |-
  还原确认！
server.torrents.revert_confirm_body: |-
  你正在试图还原到版本%s。
server.torrents.revision_history_after: |-
  历史版本
server.torrents.reward_100_bonus_to_uploader: |-
  赠送 100 积分给发布者
server.torrents.reward_300_bonus_to_uploader: |-
  赠送 300 积分给发布者
server.torrents.reward_30_bonus_to_uploader: |-
  赠送 30 积分给发布者
server.torrents.reward_5_bonus_to_uploader: |-
  赠送 5 积分给发布者
server.torrents.rt_title: |-
  烂番茄标题
server.torrents.rules_broken: |-
  违规
server.torrents.s_notifications: |-
  &nbsp;的新种推送
server.torrents.scene: |-
  Scene
server.torrents.sd_encode: |-
  SD 压制类
server.torrents.sd_encode_title: |-
  质量槽
server.torrents.sd_untouched: |-
  SD 原盘类
server.torrents.sd_untouched_title: |-
  原盘槽
server.torrents.se_sub: |-
  特效
server.torrents.search: |-
  搜索
server.torrents.search_empty_1: |-
  你的搜索与任何内容都不匹配。
server.torrents.search_empty_2: |-
  确保所有名称拼写正确，或尝试模糊搜索。
server.torrents.search_for: |-
  搜索关键词
server.torrents.search_requests: |-
  搜索
server.torrents.search_torrents: |-
  搜索
server.torrents.seeders: |-
  做种数
server.torrents.seeding_status: |-
  做种状态
server.torrents.seeding_time: |-
  已做种
server.torrents.setdefault: |-
  设为默认
server.torrents.show: |-
  显示
server.torrents.show_comparison: |-
  显示对比图
server.torrents.show_downloads_title: |-
  查看点击了下载按钮的用户列表
server.torrents.show_snatches_title: |-
  查看向 Tracker 汇报了已完成信息的用户列表
server.torrents.showing_first_n_matches: |-
  显示前 %s 条匹配
server.torrents.size: |-
  大小
server.torrents.slot_action: |-
  所属槽位
server.torrents.slot_filter: |-
  槽位筛选器
server.torrents.slot_status: |-
  槽位状态
server.torrents.slot_status_empty: |-
  空置
server.torrents.slot_status_full: |-
  已满
server.torrents.slot_status_occupied: |-
  已占
server.torrents.slot_status_trumpable: |-
  可替
server.torrents.slot_table: |-
  槽位
server.torrents.slot_wiki: |-
  查看介绍
server.torrents.slots_we_need: |-
  剩余槽位：
server.torrents.snatched: |-
  已完成
server.torrents.someone_reported_it: |-
  某位用户报告此种
server.torrents.source: |-
  片源
server.torrents.space_log_message: |-
  站点日志信息
server.torrents.space_results: |-
  个结果
server.torrents.space_staff_notes: |-
  管理组备注
server.torrents.space_to_space: |-
  &nbsp;将续种请求发送给了&nbsp;
server.torrents.split_off_into_new_group: |-
  拆分到新的种子组
server.torrents.sub_title: |-
  中文标题
server.torrents.subscribe: |-
  订阅评论
server.torrents.successfully_sent_re_seed_request: |-
  续种请求发送成功
server.torrents.successfully_sent_re_seed_request_for_torrent: |-
  已成功将种子&nbsp;
server.torrents.tag: |-
  标签
server.torrents.tag_rules: |-
  标签规则
server.torrents.tags: |-
  标签（逗号分隔）
server.torrents.the_destination_torrent_group_does_not_exist: |-
  目标种子组不存在！
server.torrents.there_are_no_tags_to_display: |-
  没有标签可供显示
server.torrents.this_album_is_in_collages: |-
  该影片被收录在 %s
server.torrents.this_album_is_in_collages_count_one: |-
  %s 个合集中
server.torrents.this_album_is_in_collages_count_other: |-
  %s 个合集中
server.torrents.this_album_is_in_personal_collages: |-
  该影片被收录在 %s
server.torrents.this_album_is_in_personal_collages_count_one: |-
  %s 个私人合集中
server.torrents.this_album_is_in_personal_collages_count_other: |-
  %s 个私人合集中
server.torrents.this_request: |-
  该求种
server.torrents.this_torrent_has_active_reports: |-
  该种子带有 %s 个未处理的 %s
server.torrents.this_torrent_has_active_reports_count_one: |-
  报告
server.torrents.this_torrent_has_active_reports_count_other: |-
  报告
server.torrents.time: |-
  时间
server.torrents.title: |-
  电影标题
server.torrents.torrent: |-
  种子
server.torrents.torrent_already_deleted: |-
  种子已被删除。
server.torrents.torrent_cannot_be_deleted_because_the_upload_process_is_not_completed_yet: |-
  由于发布进程尚未完成，种子无法被删除，请稍后再试。
server.torrents.torrent_deleted: |-
  种子已删除
server.torrents.torrent_deleted_notice: |-
  注意
server.torrents.torrent_deleted_successfully: |-
  种子已被成功删除
server.torrents.torrent_group: |-
  种子组：
server.torrents.torrent_group_id_change_confirmation: |-
  种子组 ID 变更确认
server.torrents.torrent_group_leech_status: |-
  种子组优惠设置
server.torrents.torrent_group_meta_editing: |-
  影片信息编辑
server.torrents.torrents_count: |-
  种子数量
server.torrents.total_reward_bonus_points_pre_tax: |-
  总打赏积分（税前）
server.torrents.trump: |-
  可替代
server.torrents.trumpable_reason: |-
  可替代原因
server.torrents.trumped: |-
  被替代
server.torrents.turn_me_green: |-
  大爷，求变绿~
server.torrents.uhd_encode: |-
  UHD 压制类
server.torrents.uhd_encode_title: |-
  质量槽／存档槽／特色槽
server.torrents.uhd_untouched: |-
  UHD 原盘类
server.torrents.uhd_untouched_title: |-
  Remux 槽／原盘槽／DIY 槽
server.torrents.unchecked_torrents: |-
  未检查
server.torrents.unchecked_torrents_results_note: |-
  （共%s个未检查）
server.torrents.checking_status: |-
  检查状态
server.torrents.checked_torrents: |-
  已检查
server.torrents.undo_delete: |-
  撤销删除
server.torrents.unsubscribe: |-
  退订评论
server.torrents.untouched_slot: |-
  原盘槽
server.torrents.untouched_slot_ntsc: |-
  原盘槽 (NTSC)
server.torrents.untouched_slot_pal: |-
  原盘槽 (PAL)
server.torrents.untouched_slot_requirements: |-
  必须是与零售光盘完全一致的副本，仅版权警告部分可以删去。
server.torrents.untouched_type_slot: |-
  原盘槽类 (含 Remux、原盘和 DIY)
server.torrents.up_this_session: |-
  上传量 (本阶段)
server.torrents.upload_by: |-
  由 %s 发布于
server.torrents.upload_torrent: |-
  上传种子
server.torrents.uploader_replied_it: |-
  发布者回复于
server.torrents.used_this_torrent_to_fill: |-
  使用该种子完成了
server.torrents.user: |-
  用户
server.torrents.user_s: |-
  &nbsp;
server.torrents.view_all: |-
  查看所有
server.torrents.view_download_list: |-
  下载列表
server.torrents.view_file_list: |-
  文件列表
server.torrents.view_peer_list: |-
  做种列表
server.torrents.view_report_information: |-
  查看报告信息
server.torrents.view_snatch_list: |-
  完成列表
server.torrents.view_tags: |-
  查看标签
server.torrents.view_the_profile_of_the_user_that_added_this_tag: |-
  查看该标签添加者的个人页面
server.torrents.viewhistory: |-
  历史版本
server.torrents.viewlog: |-
  编辑记录
server.torrents.vote_this_tag_down: |-
  反对该标签
server.torrents.vote_this_tag_up: |-
  支持该标签
server.torrents.votes: |-
  投票
server.torrents.votes_changed: |-
  后悔了？
server.torrents.votes_clear: |-
  清除你的投票
server.torrents.votes_downvote: |-
  踩
server.torrents.votes_downvoted: |-
  你已踩过。
server.torrents.votes_downvotes: |-
  踩
server.torrents.votes_positive: |-
  支持率
server.torrents.votes_score: |-
  分数
server.torrents.votes_score_note: |-
  这是乘以 100 之后的二项式比率信赖区间下界值，具体解释见 &lt;a href=&quot;wiki.php?action=article&amp;id=240&quot;&gt;本文&lt;/a&gt;。
server.torrents.votes_total: |-
  总计
server.torrents.votes_upvote: |-
  赞
server.torrents.votes_upvoted: |-
  你已赞过。
server.torrents.votes_upvotes: |-
  赞
server.torrents.warning: |-
  警告
server.torrents.warning_title: |-
  警告周数
server.torrents.writer: |-
  编剧
server.torrents.year: |-
  年
server.torrents.yes: |-
  是
server.torrents.you_are_attempt_to_move_from: |-
  你正在试图将种子组 ID %s 下的种子
server.torrents.you_are_attempting_to_merge: |-
  你正要将种子组
server.torrents.you_are_req: |-
  你当前请求编辑的种子组是
server.torrents.you_are_req_note: |-
  <p>请详细写明编辑该种子组所需的信息，包括所有相关链接（IMDb、豆瓣等）。<br /><br />请求编辑不会生成报告，会在论坛的 “编辑请求” 版块生成一个帖子。<br /><br />该功能可用于：</p> <ul> <li>“原始发行” 信息，例如：发行年。</li> <li>种子组重命名／资料修正</li> <li>种子组合并</li> <li>其他……</li> </ul>绝对不要将此功能用于种子或艺人。对于单个种子，使用种子报告功能；对于艺人，前往其各自的页面使用请求编辑功能。
server.torrents.you_can_no_longer_delete_this_torrent_as_it_has_been_snatched_by_5_or_more_users: |-
  由于下载完成种子的用户已超过 5 位，因而不能被你删除。如果你认为它存在问题，请报告之。
server.torrents.you_can_no_longer_delete_this_torrent_as_it_has_been_uploaded_for_over_a_week: |-
  由于种子发布已超过一周，因而不能被你删除。如果你认为它存在问题，请报告之。
server.torrents.you_cant_like_yourself: |-
  无法赞自己
server.torrents.you_cant_reward_yourself: |-
  无法赠送给自己
server.torrents.you_have_recently_deleted_3_torrents: |-
  最近你已删除了 3 个种子。如果你还想删除更多，请联系管理组。
server.torrents.you_have_rewarded: |-
  已赠送
server.upload.album_note: |-
  <strong class='u-colorWarning'>注意：</strong>下面艺人和标题的命名，请仔细阅读规则 <a href='rules.php?p=upload#2.3' target='_blank'>2.3. 格式要求</a> 及 <a href='wiki.php?action=article&id=6' target='_blank'>发种命名规则</a>。
server.upload.arabic: |-
  阿拉伯语
server.upload.artist_note: |-
  <strong class='u-colorWarning'>请采用右侧的多艺人增删功能而非简单地将 “Various Artists” 作为一个艺人添加，</strong>参阅 <a href='wiki.php?action=article&amp;id=128' target='_blank'>本文</a> 获取更多信息。
server.upload.assurance: |-
  确保你的种子符合 <h7><a href='rules.php?p=upload' target='_blank'>发布规则</a></h7>。否则将会受到<strong class='u-colorWarning'>警告</strong>或<strong class='u-colorWarning'>处罚</strong>。
server.upload.assurance_note: |-
  <p>上传种子后，你将有一个小时的保护期，在此期间，除你之外没有人可以使用此种子应求，明智地利用这段时间，并搜索 “<a href='requests.php' target='_blank'>求种列表</a>”。</p>
server.upload.auto_detect: |-
  *自动检测
server.upload.bad_folders: |-
  问题文件（夹）名
server.upload.because: |-
  由于
server.upload.brazilian_port: |-
  巴西葡萄牙语
server.upload.bulgarian: |-
  保加利亚语
server.upload.chinese_dubbed_label: |-
  国语配音
server.upload.chinese_movie_synopsis: |-
  中文影片简介
server.upload.chinese_movie_synopsis_note: |-
  如果找不到中文简介，请填写 IMDb 的英文简介，不要重复已经有其他途径展示的信息（演员、语言等）。
server.upload.chinese_simplified: |-
  简体
server.upload.chinese_traditional: |-
  繁体
server.upload.cinematographer: |-
  摄影
server.upload.composer: |-
  作曲
server.upload.copied: |-
  已复制
server.upload.copy: |-
  复制
server.upload.croatian: |-
  克罗地亚语
server.upload.custom_trumpable: |-
  自定义可替代理由
server.upload.czech: |-
  捷克语
server.upload.danish: |-
  丹麦语
server.upload.dead_torrent: |-
  死种
server.upload.director: |-
  导演
server.upload.drop_area: |-
  拖动图片到这里
server.upload.dutch: |-
  荷兰语
server.upload.english: |-
  英语
server.upload.mandarin: |-
  普通话
server.upload.cantonese: |-
  粤语
server.upload.english_movie_synopsis: |-
  英文影片简介
server.upload.english_name: |-
  英文名
server.upload.enter_at_least_one_artist: |-
  请填写至少一位导演。
server.upload.estonian: |-
  爱沙尼亚语
server.upload.explain: |-
  注释
server.upload.finnish: |-
  芬兰语
server.upload.freeleech: |-
  免费下载
server.upload.french: |-
  法语
server.upload.german: |-
  德语
server.upload.greek: |-
  希腊语
server.upload.hardcode_sub: |-
  硬字幕
server.upload.header_warning: |-
  注意
server.upload.hebrew: |-
  希伯来语
server.upload.here: |-
  这里
server.upload.hindi: |-
  印地语
server.upload.hungarian: |-
  匈牙利语
server.upload.icelandic: |-
  冰岛语
server.upload.image_host: |-
  图床
server.upload.image_note: |-
  <h7>请遵守 <a href='wiki.php?action=article&id=27' target='_blank'>封面说明</a>，推荐使用右侧的上传按钮上传到官方图床。<span><strong class='u-colorWarning'>注：</strong>请尽量完善封面，若因偷懒大量发布缺少封面的种子，将会导致你受处罚。</span></h7>
server.upload.imdb_empty_warning: |-
  如 IMDb 链接不存在，请勾选选框，否则无法发布。
server.upload.indonesian: |-
  印度尼西亚语
server.upload.italian: |-
  意大利语
server.upload.japanese: |-
  日语
server.upload.jinzhuan: |-
  禁转
server.upload.korean: |-
  韩语
server.upload.last_update: |-
  最后更新
server.upload.latvian: |-
  拉脱维亚语
server.upload.lithuanian: |-
  立陶宛语
server.upload.marks: |-
  原创标记
server.upload.marks_how_to_blockquote: |-
  <ul> <li>标记解释： <ol class='postlist'> <li>自购：适用于亲自购买的原盘资源等。</li> <li>自制：适用于亲自利用原始素材加工成的 Encode、Remux、DIY 等资源。</li> <li>禁转：未经发布者允许，禁止转载到其他任何地方。</li> </ol> </li> <li>自购和自制只可选其一。</li></ul>
server.upload.marks_how_to_toggle: |-
  &nbsp;如何使用原创标记&nbsp;
server.upload.marks_warning: |-
  <strong class='u-colorWarning'>转载资源不得使用「自购」和「自制」标记，否则将导致你被警告。</strong>
server.upload.mediainfo_bdinfo_note: |-
  如果有多个视频文件或多张碟片，请使用右上角的 “+” 按钮分别添加各自所属的 MediaInfo/BDInfo。
server.upload.mediainfo_bdinfo_placeholder: |-
  请在此粘贴 MediaInfo/BDInfo 全文，每框限填一段。
server.upload.mixed_subtitles: |-
  内封字幕
server.upload.movie_aliases: |-
  中文标题
server.upload.movie_aliases_note: |-
  请填写电影的中国大陆官方译名，请勿填写港译、台译名。
server.upload.movie_codec: |-
  编码
server.upload.movie_container: |-
  容器
server.upload.movie_cover: |-
  电影封面
server.upload.movie_edition_information: |-
  版本信息
server.upload.movie_edition_information_examples: |-
  例：珍藏集的一部分、特殊版本、杜比视界/全景声等非同寻常的特点。<a href=\"wiki.php?action=article&name=版本信息填写指南\">点此</a> 阅读版本指南。<strong>当选择 “电影大师” “标准收藏” “华纳档案馆” “4K修复版” “4K重制版” “重制版” 或自定义版本信息时，强烈建议填写该版本所对应的年份。</strong>
server.upload.movie_edition_information_label: |-
  如果种子来自特定的版本，请勾选此项。
server.upload.movie_feature: |-
  特色槽选项
server.upload.movie_feature_note: |-
  <strong>注意：</strong>以上选项仅适用于外语电影（粤语等方言不被视为外语）。
server.upload.movie_fill: |-
  自动填充
server.upload.movie_imdb: |-
  IMDb
server.upload.movie_information: |-
  具体信息
server.upload.movie_processing: |-
  处理
server.upload.movie_producer: |-
  制片
server.upload.movie_resolution: |-
  分辨率
server.upload.movie_scene: |-
  Scene
server.upload.movie_scene_label: |-
  当且仅当它是 “scene release” 时勾选此项。如果它是你自购自制的，那么它就不是一个 scene release。
server.upload.movie_scene_note: |-
  你可以前往 <a href=\"https://pre.corrupt-net.org/\" target=\"_blank\">pre.corrupt-net.org</a> 或 <a href=\"https://www.srrdb.com/\" target=\"_blank\">srrDB</a> 搜索文件名再次确认。
server.upload.movie_source: |-
  片源
server.upload.movie_subtitles: |-
  字幕
server.upload.movie_subtitles_note: |-
  <strong>注意：</strong>强制字幕和硬编码字幕是两个不同的概念。
server.upload.movie_title: |-
  电影标题
server.upload.movie_torrent_description: |-
  种子描述
server.upload.movie_torrent_description_note: |-
  我们要求你至少提供三张 PNG 截图（<a href=\"wiki.php?action=article&name=原始分辨率截图指南\" target=\"_blank\">指南</a>）和一份完整的 MediaInfo（<a href=\"wiki.php?action=article&name=MediaInfo+使用指南\" target=\"_blank\">指南</a>）或 BDInfo（<a href=\"wiki.php?action=article&name=BDInfo+使用指南\" target=\"_blank\">指南</a>）日志。<br/>建议将文本说明放在前面，截图放在后面，特效字幕截图和画面截图分开，参考 <a href=\"torrents.php?torrentid=1\" target=\"_blank\">此种子</a>。<br/>有关必需信息的更多规定，请参阅我们的 <a href=\"rules.php?p=upload\" target=\"_blank\">规则页面</a>。
server.upload.movie_trumpable: |-
  可替代标记
server.upload.movie_type: |-
  片种
server.upload.movie_upload_note: |-
  <strong class='u-colorWarning'>注意：</strong>下面艺人和标题的命名，请仔细阅读规则 <a href='rules.php?p=upload#2.1' target='_blank'>2.1. 命名</a> 及 <a href='wiki.php?action=article&id=17' target='_blank'>发种命名规则</a>。
server.upload.name: |-
  名称
server.upload.name_too_long: |-
  种子包含了文件名超长的文件：<br />
server.upload.need_download_new_torrent1: |-
  你的种子已经上传成功；但你需要从&nbsp;
server.upload.need_download_new_torrent2: |-
  &nbsp;重新下载种子并开始做种。
server.upload.no_imdb_link: |-
  无 IMDb 链接
server.upload.no_imdb_note: |-
  请务必确认 IMDb 链接确实不存在，否则你可能会被警告。
server.upload.no_sub: |-
  缺少基本字幕
server.upload.no_subtitles: |-
  无字幕
server.upload.no_torrent_uploaded: |-
  种子未上传，或上传了一个空文件。
server.upload.norwegian: |-
  挪威语
server.upload.not_main_movie: |-
  非电影主体
server.upload.not_main_movie_label: |-
  当且仅当种子内不包含电影主体时勾选此项。
server.upload.not_main_movie_note: |-
  例：仅包含额外内容、Rifftrax、工作样片。
server.upload.not_supported_encrypted_file_list: |-
  该种子包含本站不支持的加密文件列表。
server.upload.not_torrent_file: |-
  你上传的文件似乎并不是种子。
server.upload.other: |-
  其他
server.upload.period: |-
  。
server.upload.persian: |-
  波斯语
server.upload.personal_announce: |-
  你的个人 announce 地址是（请保密，不要泄露）
server.upload.personal_announce_note: |-
  为安全起见，已隐藏你的个人 announce 地址，请右键复制使用
server.upload.polish: |-
  波兰语
server.upload.portuguese: |-
  葡萄牙语
server.upload.preview: |-
  预览
server.upload.romanian: |-
  罗马尼亚语
server.upload.russian: |-
  俄语
server.upload.same_torrent_exists: |-
  站点已存在完全相同的种子文件！
server.upload.select_a_type: |-
  请选择一个有效分类。
server.upload.select_file: |-
  选择图片
server.upload.select_valid_format: |-
  请选择有效的格式。
server.upload.self_purchase: |-
  自购
server.upload.self_rip: |-
  自制
server.upload.serbian: |-
  塞尔威亚语
server.upload.show_more: |-
  显示更多
server.upload.slovak: |-
  斯洛伐克语
server.upload.slovenian: |-
  斯洛文尼亚语
server.upload.spanish: |-
  西班牙语
server.upload.special_effects_subtitles_label: |-
  特效字幕
server.upload.staff_note: |-
  管理备注
server.upload.sub_name: |-
  中文名
server.upload.sub_title: |-
  中文标题
server.upload.swedish: |-
  瑞典语
server.upload.upload_torrents: |-
  发布种子
server.upload.tags: |-
  标签
server.upload.thai: |-
  泰语
server.upload.thank_you_fix_torrent: |-
  感谢你修复这个种子！
server.upload.title_how_to_blockquote: |-
  关于标题命名，请阅读规则 <a href='rules.php?p=upload#2.1' target='_blank'>2.1</a>。下面是补充说明。<br/><br/> <strong>电影标题：</strong>即电影的英文主名，需要注意的是，自动填充的「电影标题」很多时候都不是正规的英文标题，而是原始语言标题的英文音译，此时我们会建议你编辑为标准英文名。标准英文名可能会出现在： <ul> <li>电影海报；</li> <li>IMDb 的「Also known as」页面；</li> <li>如果是 Encode，文件名也往往会采用标准英文名。</li> </ul>当且仅当从上述渠道无法获取标准英文名时，才接受原始语言标题的英文音译。举个例子，《流浪地球》应使用《The Wandering Earth》，而非《Liu Lang Di Qiu》。 <br/><br/> <strong>中文标题：</strong>请填写电影的中国大陆官方译名，请勿填写港译、台译名。
server.upload.title_how_to_toggle: |-
  &nbsp;如何填写电影标题&nbsp;
server.upload.title_length_limit: |-
  标题长度必应在 2 到 200 个字符之间。
server.upload.torrent_diff: |-
  本站禁止发布列表
server.upload.torrent_file: |-
  种子文件
server.upload.torrent_info_how_to_blockquote: |-
  <strong>MediaInfo 与规格：</strong>在「MediaInfo/BDInfo」区域按规范粘贴上 MediaInfo（<a href=\"wiki.php?action=article&name=MediaInfo+使用指南\" target=\"_blank\">指南</a>）或 BDInfo（<a href=\"wiki.php?action=article&name=BDInfo+使用指南\" target=\"_blank\">指南</a>）日志，然后在文本框外单击，上方四个带「自动检测」字样的选项就会自动填好。<br/> <strong class=\"u-colorWarning\">请务必在自动填写完毕后再次确认信息是否正确。</strong><br/><br/> <strong>种子描述：</strong>我们要求你至少提供三张 PNG 截图（<a href=\"wiki.php?action=article&name=原始分辨率截图指南\" target=\"_blank\">指南</a>）。<br/>
  另外建议将文本说明放在前面，截图放在后面，特效字幕截图和画面截图分开，参考 <a href=\"torrents.php?torrentid=1\" target=\"_blank\">此种子</a>。<br/>有关必需信息的更多规定，请参阅我们的 <a href=\"rules.php?p=upload\" target=\"_blank\">规则页面</a>。<br/><br/> <strong>字幕：</strong>请注意区分强制字幕和硬编码字幕这两个不同的概念，具体阐释请参见 <a href=\"wiki.php?action=article&id=44\" target=\"_blank\">字幕格式</a> 的「强制字幕」一节。<br/><br/> <strong>特色槽选项：</strong>仅适用于<strong class=\"u-colorWarning\">外语电影</strong>（粤语等方言不被视为外语）。
server.upload.torrent_info_how_to_toggle: |-
  &nbsp;如何填写以下信息&nbsp;
server.upload.torrent_rule: |-
  <h7>除极个别情况，“VA、Various Artists、群星” 不可作为艺人名称，请使用 “+” 编辑具体艺人。更多信息请参阅 <a href='wiki.php?action=article&amp;id=17' target='_blank'>此说明</a>。</h7>
server.upload.trailer_link: |-
  预告片链接
server.upload.turkish: |-
  土耳其语
server.upload.type: |-
  分类
server.upload.ukrainian: |-
  乌克兰语
server.upload.upload: |-
  发布
server.upload.upload_handle_warning: |-
  注意
server.upload.upload_img: |-
  上传
server.upload.upload_note: |-
  请严格遵守站点 <a href='rules.php?p=upload' target='_blank'>发布规则</a>。禁止发布违规资源，欲了解更多信息请移步 <a href='wiki.php?action=article&name=手把手发种指南' target='_blank'>发种教程</a>。
server.upload.vietnamese: |-
  越南语
server.upload.writer: |-
  编剧
server.upload.year: |-
  年份
server.upload.year_remaster: |-
  首次公映年份
server.upload.year_remaster_title: |-
  你为原始发行版指定的年份早于该媒介面世的时间。你需要填写发行信息，尤其是发行版年份。若你无法提供发行信息，请勾选下方的 “未知发行” 选框。
server.user.1_week: |-
  1 周
server.user.2_week: |-
  2 周
server.user.2fa: |-
  两步验证
server.user.4_week: |-
  4 周
server.user.8_week: |-
  8 周
server.user.SettingAlternative: |-
  另一种样式
server.user.SettingShowReleaseGroup: |-
  显示制作组
server.user.SettingTorrentTitle: |-
  标题样式
server.user.setting_torrent_title_seq: |-
  标题顺序
server.user.SettingTorrentTitleTooltip: |-
  保存设置查看结果
server.user.above: |-
  大于
server.user.account: |-
  账号
server.user.account_disable: |-
  锁定账号
server.user.active_points: |-
  活跃点数
server.user.active_points_title: |-
  活跃点数决定了用户的捐助等级且会过期。
server.user.add_friend: |-
  加为好友
server.user.add_time: |-
  添加时间
server.user.added_points: |-
  新增点数
server.user.admin_account: |-
  管理锁定
server.user.advanced: |-
  高级
server.user.after: |-
  晚于
server.user.all_fields_below_here_are_optional: |-
  以下所有区域均选填
server.user.also_search_the_email_addresses_the_member_used_in_the_past: |-
  同时搜索用户在过去曾使用过的邮箱地址
server.user.amount_cny: |-
  总额（人民币）
server.user.and_the_total_ratio_is: |-
  ；总体分享率为&nbsp;
server.user.anonymous: |-
  匿名
server.user.anyone: |-
  任意
server.user.api_key: |-
  API 密钥
server.user.api_note: |-
  重置您的 API 密钥。您必须在使用旧 API 的所有应用程序中更新 API。
server.user.api_copy: |-
 复制到剪贴板
server.user.are_you_sure_delete_notification_filter: |-
  你确定要删除这个推送过滤器吗？
server.user.are_you_sure_you_want_to_delete_this_invite: |-
  你确定要删除这个邀请吗？
server.user.assigned_to: |-
  负责人
server.user.at_least_one_of_these_tags: |-
  推送标签
server.user.authentication_key: |-
  认证密钥
server.user.authentication_key_title: |-
  如果一切照计划顺利进行，密保 APP 会提供给你一个认证密钥，请在此输入。
server.user.authkey: |-
  两步验证
server.user.autocomp: |-
  自动补全
server.user.autocomp_0: |-
  任何位置
server.user.autocomp_1: |-
  禁用
server.user.autocomp_2: |-
  仅搜索栏
server.user.autocomp_title: |-
  自动补全会尝试预测你正在输入的字词。选择“任何位置”会在站点的艺人和标签区域启用自动补全。选择“仅搜索栏”会在搜索区启用自动补全。
server.user.autosave: |-
  文本框内容自动保存
server.user.autosave_title: |-
  你在写帖子或回复时，其中的文本内容会自动保存。如果你在稍后中断书写并返回帖子 (例如意外地点了一下链接然后点击浏览器的后退按钮)，文本内容将依然存在。该选项允许你禁用此功能。
server.user.autosubscribe: |-
  回帖自动通知
server.user.autosubscribe_title: |-
  启用该选项会自动订阅你参与回复的主题。
server.user.autosubscribe_your_request: |-
  自动订阅所发布求种
server.user.autosubscribe_your_request_title: |-
  启用该选项会自动订阅你发起的求种。
server.user.avatar: |-
  头像
server.user.avatar_url: |-
  头像链接
server.user.avatars: |-
  头像显示 (帖子)
server.user.avatars_0: |-
  显示头像
server.user.avatars_2: |-
  显示头像或：
server.user.avatars_3: |-
  替代所有头像以：
server.user.avatars_title: |-
  该选项允许你禁用或显示 (无头像者显示论坛默认头像) 所有的头像。或者，你也可以用一张自定义的图片替代无头像者乃至所有人的头像。
server.user.badge_center: |-
  印记中心
server.user.base: |-
  基本
server.user.base_stats: |-
  基本统计
server.user.base_stats_note: |-
  自动获取用户个人页面上的下载和同伴统计信息。
server.user.base_stats_title: |-
  仅限管理使用的功能，用以绕过用户个人页面上对于做种、下载、完成等数据的隐藏设置。
server.user.because_the_user_limit_has_been_reached_you_are_unable_to_send_invites_at_this_time: |-
  由于用户数量已达到上限，目前你不能发送私人邀请。
server.user.before: |-
  早于
server.user.below: |-
  小于
server.user.between: |-
  介于
server.user.between_the_sizes: |-
  推送种子大小
server.user.between_the_years: |-
  推送发行年份
server.user.blog_announcements: |-
  博客公告
server.user.bonus_points: |-
  积分
server.user.bonus_points_title: |-
  积分。
server.user.bounty: |-
  奖励
server.user.bprates: |-
  积分速率
server.user.browser: |-
  浏览器
server.user.btc: |-
  比特币
server.user.buffer: |-
  缓冲量
server.user.check_all_torrents: |-
  检查全站种子
server.user.check_his_her_torrents: |-
  检查自己的种子
server.user.check_self_torrents: |-
  检查自己的种子
server.user.clearcache: |-
  清空缓存
server.user.clearing_cookies_can_result_in_ghost_sessions: |-
  注意：清除 Cookies 会产生虚假的访问记录，它们会在 30 天后被自动清除。
server.user.close: |-
  点击关闭
server.user.closed: |-
  当前已关闭
server.user.cny: |-
  人民币
server.user.collage_covers_all: |-
  所有
server.user.collage_covers_none: |-
  不显示
server.user.collage_subscriptions: |-
  合集订阅
server.user.collage_subscriptions_title: |-
  启用该选项会使你在订阅的合集有更新时得到通知。
server.user.collected: |-
  已获取
server.user.colornamepreview: |-
  彩色用户名预览
server.user.colornamepreview_title: |-
  你设置的用户名样式可以在这里预览以节约调试的时间
server.user.comm_downloaded: |-
  已下载数
server.user.comm_invited: |-
  已邀请数
server.user.comm_leeching: |-
  当前下载
server.user.comm_originals: |-
  已发原创
server.user.comm_seeding: |-
  当前做种
server.user.comm_snatched: |-
  已完成数
server.user.comm_upload: |-
  已发布数
server.user.comma_seperated_artists_list: |-
  以英文逗号分隔艺人——例如：冯小刚, 成龙, Christopher Nolan, 新海诚
server.user.comma_seperated_countries_list: |-
  以英文逗号分隔国家和地区——例如：China, Japan, UK, Taiwan
server.user.comma_seperated_editions_list: |-
  以英文逗号分隔版本——例如：加长版, 导演剪辑版, 标准收藏
server.user.comma_seperated_languages_list: |-
  以英文逗号分隔语言——例如：Chinese, Japanese, English
server.user.comma_seperated_tags_list: |-
  以英文逗号分隔标签——例如：action, sci.fi, thriller
server.user.comma_seperated_usernames_list: |-
  以英文逗号分隔用户名
server.user.comma_space_and_space: |-
  ，而&nbsp;
server.user.community: |-
  社交
server.user.community_arts: |-
  艺人评论
server.user.community_collcontrib: |-
  合集贡献
server.user.community_colls: |-
  合集评论
server.user.community_collstart: |-
  合集发起
server.user.community_comms: |-
  种子评论
server.user.community_dl: |-
  下载
server.user.community_pots: |-
  论坛帖子
server.user.community_reqs: |-
  求种评论
server.user.community_show: |-
  显示状态
server.user.community_topic: |-
  论坛主题
server.user.compose: |-
  发送私信
server.user.copypaste: |-
  复制访问日志
server.user.country_code: |-
  国家代码
server.user.country_code_title: |-
  由 ISO 3166-1 alpha-2 定义的两位代码
server.user.cover_coll: |-
  海报 (合集)
server.user.cover_coll_number: |-
  海报／页
server.user.cover_coll_title: |-
  该选项允许你调整单个合集页面中显示的海报图数量。
server.user.create_a_new_notification_filter: |-
  新建
server.user.create_filter: |-
  创建
server.user.current_donor_rank: |-
  捐助等级
server.user.current_filter: |-
  当前推送
server.user.current_special_donor_rank: |-
  特殊等级
server.user.customtitle: |-
  自定义头衔
server.user.date: |-
  时间
server.user.default: |-
  默认
server.user.default_search: |-
  默认搜索方式
server.user.default_search_title: |-
  该选项允许你选择以基本 (少量选项) 或高级 (大量选项) 种子搜索箱来搜索种子。
server.user.delete_account: |-
  删除
server.user.delete_invite: |-
  删除邀请
server.user.device_id: |-
  设备 ID
server.user.disable_account: |-
  账号锁定
server.user.disable_push_notifications: |-
  禁用推送
server.user.disabled: |-
  禁用
server.user.disabled_accounts_linked_by_ip: |-
  通过 IP 地址关联的被禁用账号
server.user.disabled_accounts_linked_by_ip_must_also_be_checked: |-
  必须同时勾选 “通过 IP 地址关联的被禁用账号”
server.user.disabled_accounts_linked_by_ip_title: |-
  仅显示通过 IP 地址关联的被禁用账号的用户
server.user.disabled_invites: |-
  邀请权被禁
server.user.disabled_privilege: |-
  权限被禁
server.user.dltext: |-
  下载文本文档
server.user.dltext_title: |-
  一些 ISP 阻止从种子文件下载。如果你希望通过 .txt 文件下载种子，就启用该选项。
server.user.dltext_tr: |-
  启用将种子文件作为 TXT 文档下载的功能
server.user.do_not_care: |-
  不限
server.user.donation_history: |-
  捐助历史
server.user.donor: |-
  捐助者
server.user.donor_statistics: |-
  捐助统计
server.user.donor_system_add_points: |-
  捐助系统（添加点数）
server.user.donor_system_modify_values: |-
  捐助系统（修改数值）
server.user.donor_system_modify_values_title: |-
  此工具仅用于手动修正数值。如欲正常统计捐助，请使用 “捐助系统（添加点数）” 工具。
server.user.donorforum_1: |-
  前缀
server.user.donorforum_2: |-
  后缀
server.user.donorforum_3: |-
  隐藏逗号
server.user.donorforum_4: |-
  预览
server.user.download_list: |-
  下载列表
server.user.downloaded: |-
  下载量
server.user.downloaded_title: |-
  以字节为单位的下载量。也允许在末尾例如 +20GB 或 -35.6364MB。
server.user.downloads: |-
  下载数
server.user.drag_and_drop_change_order: |-
  拖放以改变次序。勾选项会被默认折叠。
server.user.email: |-
  邮箱
server.user.email_address: |-
  邮箱地址
server.user.email_history: |-
  邮箱历史
server.user.emails: |-
  邮箱
server.user.emot: |-
  表情符号
server.user.emot_disable: |-
  关闭表情符号
server.user.emot_title: |-
  表情符号是用来替代传统字符表情如 :) 或 :( 的小图片。
server.user.enable_opendyslexic: |-
  启用 OpenDyslexic 字体
server.user.enable_opendyslexic_title: |-
  OpenDyslexic 字体为阅读障碍人士提供便利
server.user.enabled: |-
  启用
server.user.equal: |-
  等于
server.user.equals: |-
  匹配
server.user.ex_style: |-
  外部样式链接
server.user.ex_style_title: |-
  填写外部 Stylesheet 样式链接可覆盖你所选择的预置样式。
server.user.expand: |-
  展开
server.user.expires_in: |-
  过期倒计时
server.user.filt_tr: |-
  种子搜索箱
server.user.filt_tr_show: |-
  显示种子搜索箱
server.user.filt_tr_show_tags: |-
  显示官方标签筛选区
server.user.filt_tr_title: |-
  勾选“显示种子搜索箱”会默认在种子搜索菜单下显示它。勾选“显示官方标签筛选区”会默认在搜索箱中罗列出可点击的官方标签项。
server.user.for: |-
  共
server.user.forum_warnings: |-
  版块警告
server.user.forums: |-
  论坛
server.user.free_time: |-
  减刑期
server.user.generate: |-
  生成
server.user.gradientscolor: |-
  自定义渐变用户名
server.user.gradientscolor_placeholder: |-
  例：#123456,#456789
server.user.gradientscolor_title: |-
  通过在此填写 2~3 个 RGB 色号（以半角逗号分隔），可使用户名以你指定的渐变色显示。
server.user.hacked: |-
  账号风险警示
server.user.hidden_text: |-
  隐藏内容
server.user.hide_gallery: |-
  收起样式预览
server.user.history: |-
  历史
server.user.inbox_messages: |-
  收件箱信息
server.user.inbsort: |-
  收件箱排序
server.user.inbsort_title: |-
  该选项会强制使未读私信排在前列。
server.user.inbsort_un: |-
  未读消息优先
server.user.info: |-
  用户信息
server.user.infotitle: |-
  个人介绍
server.user.invite: |-
  邀请
server.user.invite_link: |-
  邀请链接
server.user.invite_note: |-
  备注
server.user.invite_rules_1: |-
  <a href=\"/rules.php#1.1\">一人一号</a>。创建多个账号（即俗称的 “马甲”），一经查实即封禁所有相关账号。不要向任何曾经拥有过 ";
        // line 6379
        echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["CONFIG"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["SITE_NAME"] ?? null) : null), "html", null, true);
        echo " 账号的人发送邀请，即使是你的熟人也不可以。如果你邀请了曾被禁用的用户，你将可能被永久禁止。如果他们希望重启账号，请指引他通过账号找回功能、QQ 群、TG 群，或请朋友在申诉板块寻求帮助或发送 <a href=\"/staffpm.php\">Staff PM</a> 联系管理人员。
server.user.invite_rules_2: |-
  <a href=\"/rules.php#2.1\">不要邀请劣质用户</a>。你需要对你邀请的用户负责。你邀请的用户达不到合格分享率，不会导致你受罚。但若你邀请的用户操作违反了<a href=\"/rules.php\">黄金规则</a>，你的账号和／或权限可能会被禁用。
server.user.invite_rules_3: |-
  <a href=\"/rules.php#2.2\">禁止交易、出售、公开赠送或公开提供邀请</a>。只邀请你认识和信任的人，若非如此，请不要邀请他们。邀请主要是指你现实中认识的朋友，若邀请网友，你应该认识并相信他们。不要在未设置等级限制的 PT 论坛版块、贴吧、论坛、聊天软件群（QQ、TG、微信等，私聊除外）、社交媒体或其他任何公共场所提供或回应求邀。例外情况：管理团队指定的专员可以在被批准的场所提供邀请。注意发邀帖不要被搜索引擎抓到。
server.user.invite_rules_4: |-
  请远离邀请交易论坛。如果你邀请任何来自交易论坛的人，你可能会被永久封号，同时牵连到你的邀请树。
server.user.invite_rules_5: |-
  在发放邀请时，请尊重发放邀请处的规则。
server.user.invite_rules_6: |-
  如果你尚未阅读或不理解上述信息，请勿发送邀请。
server.user.invite_rules_7: |-
  请在发送邀请邮件前告知受邀人将 noreply@";
        // line 6391
        echo twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["CONFIG"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["MAIL_HOST"] ?? null) : null), "html", null, true);
        echo " 添加到邮件白名单。
server.user.invite_tree: |-
  邀请树
server.user.invitee_list: |-
  邀请列表
server.user.invitees: |-
  后宫数
server.user.invites: |-
  邀请
server.user.ip_address: |-
  IP 地址
server.user.ip_history: |-
  IP 历史
server.user.api: |-
  接口密钥
server.user.irc: |-
  IRC
server.user.irc_no: |-
  无
server.user.irc_yes: |-
  有
server.user.irckey: |-
  IRC 密钥
server.user.irckey_note_1: |-
  <p class='min_padding'>完成设置后，你在 <a href='wiki.php?action=article&amp;id=248'>本站 IRC</a> 通过
server.user.irckey_note_2: |-
  的认证时，将不使用站点密码，而是使用此 key。<span style='white-space: nowrap;'>请注意：</span></p>
  <ul class=\"List\">
  <li>此 key 明文显示且应不同于你的站点密码。</li>
  <li>IRC key 的长度必须在 6 到 32 字符之间。</li>
  </ul>
server.user.irckey_title: |-
  生成 IRC key
server.user.joined: |-
  加入时间
server.user.joineddate: |-
  加入时间
server.user.last_active: |-
  最近活动
server.user.last_activity: |-
  最近活动
server.user.last_donated: |-
  最近捐助时间
server.user.last_seen: |-
  最近登录
server.user.last_torrents: |-
  近期完成的种子
server.user.last_uploads: |-
  近期发布的种子
server.user.lastaccess: |-
  最近访问
server.user.leaderboard_position: |-
  排行榜排名
server.user.leaving_blank_means_you_allow_all_sizes: |-
  (只可订阅大于 1 GB 的种子)
server.user.leaving_blank_means_you_allow_all_years: |-
  (如果不设置，即视为订阅全部年份的种子)
server.user.leech: |-
  下载
server.user.legacy_view: |-
  查看旧系统
server.user.limitedcolor: |-
  纯色用户名
server.user.limitedcolor_blue: |-
  蓝
server.user.limitedcolor_green: |-
  绿
server.user.limitedcolor_orange: |-
  橙
server.user.limitedcolor_purple: |-
  紫
server.user.limitedcolor_red: |-
  红
server.user.limitedcolor_title: |-
  在下拉选框中任选一个颜色，可使用户名以你指定的纯色显示。
server.user.limitedcolor_yellow: |-
  黄
server.user.linked_account: |-
  相关账号
server.user.locked: |-
  已锁定
server.user.locked_account: |-
  账号锁定
server.user.logout: |-
  令其注销
server.user.manage_notifications: |-
  管理推送
server.user.mature: |-
  成人内容 (论坛, 评论, 简介)
server.user.mature_show: |-
  显示成人内容
server.user.mature_title: |-
  ";
        // line 6483
        echo twig_escape_filter($this->env, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["CONFIG"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["SITE_NAME"] ?? null) : null), "html", null, true);
        echo " 对于社交领域的成人内容政策较为灵活。勾选 “显示成人内容” 会允许你点击访问 <code>[mature]</code> 标签下的任何内容。如果你不勾选 “显示成人内容”，就不会看到任何用 <code>[mature]</code> 包裹起来的内容。
server.user.menu: |-
  目录
server.user.merge_from: |-
  合并到此
server.user.merge_from_title: |-
  输入一个用户名，将其数据合并给该用户。
server.user.min_1: |-
  最小值 1
server.user.min_1888: |-
  最小值 1888
server.user.minimum_imdb_rating: |-
  IMDb 评分下限
server.user.n_users_are_disabled: |-
  %s封禁 (
server.user.n_users_are_disabled_count_one: |-
  &nbsp;位用户已被
server.user.n_users_are_disabled_count_other: |-
  &nbsp;位用户已被
server.user.n_users_have_donated: |-
  %s参与过捐助 (
server.user.n_users_have_donated_count_one: |-
  &nbsp;位用户
server.user.n_users_have_donated_count_other: |-
  &nbsp;位用户
server.user.name: |-
  片名
server.user.new_password: |-
  新密码
server.user.news_announcements: |-
  新闻公告
server.user.next: |-
  下一步
server.user.next_userclass: |-
  下一用户等级
server.user.next_userclass_title1: |-
  下一等级
server.user.next_userclass_title3: |-
  分享率
server.user.next_userclass_title4: |-
  加入时间
server.user.next_userclass_title5: |-
  已发布数
server.user.next_userclass_title6: |-
  下载量
server.user.no: |-
  否
server.user.no_infotitle: |-
  这位用户好像没啥想说的。
server.user.none_of_these_tags: |-
  排除标签
server.user.none_of_these_users: |-
  排除发布者
server.user.not_equal: |-
  排除
server.user.not_factored_into_the_stats_for_the_total_tree: |-
  纳入整棵邀请树的数据统计。
server.user.notification_filter_name: |-
  推送过滤器名称
server.user.notification_filter_name_note: |-
  用以区分不同的过滤器
server.user.notify_me_of_all_new_torrents_with: |-
  新种推送
server.user.create_new_torrent_notify: |-
  新建推送
server.user.new_torrent_notify_list: |-
  推送列表
server.user.new_torrent_notify_name: |-
  推送名称
server.user.notify_my_android: |-
  推送到我的智能设备
server.user.notifyondeletedownloaded: |-
  已下载种子被删通知
server.user.notifyondeletedownloaded_checked: |-
  为已下载的种子被删除启用私信提醒
server.user.notifyondeletedownloaded_title: |-
  启用该选项会在你已下载的种子被删除时私信你。
server.user.notifyondeleteseeding: |-
  做种中种子被删通知
server.user.notifyondeleteseeding_checked: |-
  为做种中的种子被删除启用私信提醒
server.user.notifyondeleteseeding_title: |-
  启用该选项会在你做种中的种子被删除时私信你。
server.user.notifyondeletesnatched: |-
  已完成种子被删通知
server.user.notifyondeletesnatched_checked: |-
  为已完成的种子被删除启用私信提醒
server.user.notifyondeletesnatched_title: |-
  启用该选项会在你已完成的种子被删除时私信你。
server.user.number_of_emails: |-
  邮箱数
server.user.number_of_invitees: |-
  后宫数
server.user.number_of_invites: |-
  邀请数
server.user.off: |-
  关闭
server.user.on: |-
  于
server.user.one_of_these_artists: |-
  推送艺人
server.user.one_of_these_users: |-
  推送发布者
server.user.only_new_releases: |-
  仅订阅新电影
server.user.only_new_releases_label: |-
  仅订阅新电影而非新种子。
server.user.only_these_categories: |-
  推送分类
server.user.only_these_codecs: |-
  推送编码
server.user.only_these_containers: |-
  推送容器
server.user.only_these_countries: |-
  推送地区
server.user.only_these_discounts: |-
  推送促销种子
server.user.only_these_editions: |-
  推送版本
server.user.only_these_languages: |-
  推送语言
server.user.only_these_processings: |-
  推送处理
server.user.only_these_resolutions: |-
  推送分辨率
server.user.only_these_sources: |-
  推送片源
server.user.opendyslexic: |-
  OpenDyslexic
server.user.opendyslexic_title: |-
  <a href='http://opendyslexic.org'>点此</a> 了解 OpenDyslexic，一种 CC-BY 3.0 授权的字体，专为有阅读障碍的用户设计。
server.user.order: |-
  排序
server.user.p_class: |-
  用户等级
server.user.p_clients: |-
  客户端
server.user.p_email: |-
  邮箱地址
server.user.p_host: |-
  服务商
server.user.p_inviter: |-
  邀请人
server.user.p_invites: |-
  邀请数量
server.user.p_ip: |-
  IP
server.user.p_irc: |-
  IRC 密钥
server.user.p_paranoiaLevel: |-
  隐私等级
server.user.p_passkey: |-
  密钥
server.user.p_passwordage: |-
  密码年龄
server.user.p_personal: |-
  个人
server.user.para_artistsadded: |-
  添加的艺人数
server.user.para_artistsadded_title: |-
  该选项控制了你在本站添加到种子组中艺人的显示。其总数包含了通过上传页面，以及种子详情页面 “添加艺人” 功能添加的艺人数量。
server.user.para_badgedisplay: |-
  个人印记全部展示
server.user.para_badgedisplay_label: |-
  允许他人查看自己拥有的全部印记类型
server.user.para_bonus: |-
  积分
server.user.para_collcontr: |-
  合集 (参与的)
server.user.para_collstart: |-
  合集 (发起的)
server.user.para_comments: |-
  评论 (种子)
server.user.para_downloaded: |-
  下载量
server.user.para_emailshowtotc: |-
  邮箱
server.user.para_emailshowtotc_label: |-
  允许某些具有查看邮箱权限的特殊用户组（如 TC）查看你的邮箱
server.user.para_emailshowtotc_title: |-
  允许有查看邮箱权限的用户组查看你的邮箱，普通用户组即使打开此项仍无权限查看。
server.user.para_invited: |-
  邀请
server.user.para_original: |-
  已发布种子 (自购自制)
server.user.para_preview: |-
  预览隐私设置
server.user.para_ratio: |-
  分享率
server.user.para_reqfill: |-
  求种 (完成的)
server.user.para_reqvote: |-
  求种 (投票的)
server.user.para_reratio: |-
  合格分享率
server.user.para_stats: |-
  数据
server.user.para_stats_title: |-
  这些选项控制了你的上传数据总量、下载数据总量、分享率的显示。
server.user.para_torleech: |-
  种子数 (下载中)
server.user.para_torseed: |-
  种子数 (做种中)
server.user.para_torsnatch: |-
  种子数 (已完成)
server.user.para_torsubscr: |-
  种子数 (上传订阅)
server.user.para_torsubscr_note: |-
  允许其他用户订阅你的上传
server.user.para_uploaded: |-
  上传量
server.user.para_upltor: |-
  已发布种子
server.user.para_uplunique: |-
  已发布种子 (独特分组)
server.user.passkey: |-
  密钥
server.user.passkeys: |-
  密钥
server.user.passwords: |-
  密码
server.user.paste: |-
  粘贴
server.user.paste_user_stats: |-
  粘贴用户数据
server.user.pending_invites: |-
  待邀请
server.user.period_space: |-
  。
server.user.period_space_p: |-
  。</p>
server.user.permissions: |-
  权限
server.user.permitted_forums: |-
  特许论坛版块
server.user.permitted_forums_title: |-
  输入以逗号分隔的版块 ID。
server.user.platform: |-
  平台
server.user.please_enter_2fa_key: |-
  请输入 APP 提供给你的两步验证密钥。
server.user.please_enter_correct_numbers: |-
  请输入正确的数值！
server.user.pm: |-
  私信
server.user.pop_up: |-
  弹出式（右下角）
server.user.posting: |-
  发帖
server.user.ppp: |-
  每页显示帖子数 (论坛)
server.user.ppp_number: |-
  帖／页
server.user.ppp_title: |-
  该选项允许你调整论坛中每一页显示帖子的数量。
server.user.primary_class: |-
  主等级
server.user.promote_class: |-
  权限等级
server.user.prowl: |-
  Prowl (APP)
server.user.push: |-
  推送
server.user.push_notifications: |-
  通知推送
server.user.pushbullet: |-
  PushBullet (APP)
server.user.pushover: |-
  Pushover (APP)
server.user.quote_notifications: |-
  回复通知
server.user.quote_notifications_title: |-
  启用该选项会使你在论坛帖子被回复时得到通知。
server.user.rank_expires: |-
  等级失效时间
server.user.ratio: |-
  分享率
server.user.ratio_watch: |-
  分享率监控
server.user.ratio_watch_text: |-
  此用户当前正处于分享率监控重，在%s前必须上传%s，否则他的下载权限会被封禁， 列入分享率监控时之后新增的下载量为：%s
server.user.reason: |-
  原因
server.user.reason_title: |-
  在此填写的原因只会添加到管理组备注中。
server.user.redownloading_confirm: |-
  如果你已丢失内容，这样做会降低你的分享率；在重新下载之前务必检查所有种子的大小。
server.user.regex_contains_illegal_characters: |-
  正则表达式中含有非法字符。
server.user.replies: |-
  回复
server.user.report: |-
  报告该用户
server.user.reported: |-
  已发种子被报告通知
server.user.reported_checked: |-
  为已发布的种子被报告启用私信提醒
server.user.reported_title: |-
  启用该选项会在你已发布的种子被报告时私信你。
server.user.reporter: |-
  用户报告历史
server.user.requestscreated: |-
  求种发起
server.user.requestsfilled: |-
  应求成功
server.user.requestsvoted: |-
  求种投票
server.user.required_ratio: |-
  合格分享率
server.user.reset: |-
  重置
server.user.reset_session: |-
  重置访问终端
server.user.reset_to_default: |-
  重置
server.user.resetpk: |-
  重置 passkey
server.user.resetpk_note: |-
  重置 passkey 后你必须重新下载种子或者更改既有种子为新 announce 地址。
server.user.resetpk_title: |-
  passkey 是每位用户独有的个人标识，泄露可能会导致严重的后果。
server.user.resolved_by: |-
  处理人
server.user.restricted_forums: |-
  封锁论坛版块
server.user.restricted_forums_title: |-
  输入以逗号分隔的版块 ID。
server.user.rss_address: |-
  订阅地址
server.user.se_class: |-
  兼职等级
server.user.search_results: |-
  搜索用户
server.user.search_type: |-
  搜索模式
server.user.search_type_fuzzy: |-
  模糊
server.user.search_type_fuzzy_title: |-
  模糊搜索会自动在搜索字符串前后加上通配符，但 IP 地址搜索出外，除非搜索字符串以 &quot;&#124;&quot;（竖线）开头或结尾。它类似于 vanilla grep 搜索（除了竖线部分）
server.user.search_type_regex: |-
  正则
server.user.search_type_regex_title: |-
  正则搜索使用 MySQL 的正则表达式语法
server.user.search_type_strict: |-
  精确
server.user.search_type_strict_title: |-
  精确搜索不允许使用通配符，它类似于 &#96;grep -E &quot;&circ;SEARCHTERM&#36;&quot;&#96;
server.user.secondary_class: |-
  次等级
server.user.secret_text: |-
  密钥
server.user.secret_text_invalid: |-
  请确认你在密保 APP 中导入了正确的密钥，然后再试一次。
server.user.self_purchase_number: |-
  自购数
server.user.self_rip_number: |-
  自制数
server.user.send_fltoken: |-
  赠送令牌
server.user.send_hacked_account_email_to: |-
  发送账号风险邮件给
server.user.session: |-
  访问终端
server.user.sessions: |-
  访问终端列表
server.user.setting: |-
  设置
server.user.show_bounty: |-
  显示总额
server.user.show_count: |-
  显示数量
server.user.show_gallery: |-
  展开样式预览
server.user.show_list: |-
  显示列表
server.user.snatch_list: |-
  完成列表
server.user.somebody_else_has_moderated: |-
  在你查看该用户的同时，其账号状态已被其他管理修改，请返回原页面并刷新。
server.user.source: |-
  来源
server.user.space_and_space: |-
  &nbsp;和&nbsp;
server.user.space_are: |-
  &nbsp;的
server.user.space_bigger_than_sessions: |-
  &nbsp;> 访问记录
server.user.space_expired: |-
  &nbsp;到期)
server.user.space_is: |-
  &nbsp;的
server.user.space_results: |-
  &nbsp;条搜索结果
server.user.space_user_space_bracket: |-
  &nbsp;用户 (
server.user.space_users_space_bracket: |-
  &nbsp;用户 (
server.user.space_was: |-
  没有
server.user.space_were: |-
  没有
server.user.spent: |-
  已消费
server.user.st_2fa_after: |-
  两步验证
server.user.st_2fa_disable: |-
  禁用
server.user.st_2fa_disabled: |-
  禁用
server.user.st_2fa_enable: |-
  启用
server.user.st_2fa_enabled: |-
  启用
server.user.st_2fa_note1: |-
  当前你的账号已
server.user.st_2fa_note3: |-
  点击此处
server.user.st_2fa_period: |-
  两步验证。
server.user.st_access: |-
  访问设置
server.user.st_token_settings_description: |-
  与 API 令牌相关的设置，以便与 GPW API 进行交互
server.user.st_access_title: |-
  这些设置控制着你登录和访问 ";
        // line 6907
        echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["CONFIG"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["SITE_NAME"] ?? null) : null), "html", null, true);
        echo " 时的具体细节，包括 IRC 以及 tracker。
server.user.st_all: |-
  所有设置
server.user.st_all_title: |-
  查看所有用户设置。
server.user.st_avatar: |-
  头像链接
server.user.st_avatar_2: |-
  第二头像链接
server.user.st_avatar_2_title: |-
  恭喜！由于你已达到捐助等级 2，你已解锁了这项设置，感谢你的慷慨解囊。当其他用户将鼠标放置在你的头像上时，你的普通头像会切换到第二头像。请添加一个符合站点规则的图链。头像的宽度应为 150 像素且会在必要情况下被缩小。
server.user.st_avatar_title: |-
  请添加一个符合站点规则的图链。头像的宽度应为 150 像素且会在必要情况下被缩小。
server.user.st_avatarhover: |-
  头像鼠标悬停文本
server.user.st_avatarhover_title: |-
  恭喜！由于你已达到捐助等级 3，你已解锁了这项设置，感谢你的慷慨解囊。你在此区域输入的文本内容会在其他用户将鼠标放置在你的头像上时显示。文本内容应符合站点规则，至多 200 字符。
server.user.st_community: |-
  社交设置
server.user.st_community_title: |-
  这些设置决定用户互动的格式、分组和展示。
server.user.st_donations: |-
  捐助
server.user.st_donations_0: |-
  显示捐助数据
server.user.st_donations_1: |-
  显示捐助图标
server.user.st_donorforum: |-
  捐助者版块头衔
server.user.st_donorforum_title: |-
  恭喜！通过达到捐助等级 5，你已解锁此项设置，感谢你的慷慨。你可以挑选一个前缀和一个后缀，在你现在有权限访问的捐助者版块中使用。
server.user.st_donorhover: |-
  捐助图标鼠标悬停文本
server.user.st_donorhover_title: |-
  恭喜！通过达到捐助等级 2，你已解锁此项设置，感谢你的慷慨。你在这里输入的文字会在他人鼠标悬停于你捐助图标时显示。所有内容都应遵守站点规则，至多 200 字符。=
server.user.st_donoricon: |-
  自定义捐助图标 URL
server.user.st_donoricon_title: |-
  恭喜！通过达到捐助等级 5，你已解锁此项设置，感谢你的慷慨。如果你想要替换默认的捐助图标，请在此链接到你喜欢的图标。图标必须 15 像素宽 13 像素高。任何其他尺寸的图标都会被自动缩放。
server.user.st_donorlink: |-
  捐助图标外部链接
server.user.st_donorlink_title: |-
  恭喜！通过达到捐助等级 4，你已解锁此项设置，感谢你的慷慨。你在这里输入的链接会在你的捐助图标被点击时生效。所有链接都应遵守站点规则。
server.user.st_email: |-
  邮件地址
server.user.st_email_note: |-
  更改邮件地址时，你需要在 “当前密码” 中输入你的密码，以便验证。
server.user.st_email_title: |-
  这是你想要与站点账号关联的邮箱地址。在你忘记密码或站点需要通知你时会用到。
server.user.st_lastactivity: |-
  最近活动
server.user.st_lastseen: |-
  最近活动
server.user.st_lastseen_title: |-
  启用该选项将允许其他用户看到你最近一次登录站点的时间。
server.user.st_notification: |-
  通知设置
server.user.st_notification_title: |-
  这些设置决定了你收到通知的格式和种类。
server.user.st_paranoia: |-
  隐私设置
server.user.st_paranoia_note: |-
  <p><strong>勾选你愿意向其他用户显示的内容</strong></p> <p>举个例子，如果你为 “求种 (已完成)” 勾选了 “显示数量”，则你已应求的数量就会可见。如果你勾选了 “显示总额”，则你从求种中赚取的上传总量就会可见。如果你勾选了 “显示列表”，则你应求列表中的所有应求都会可见。</p> <p><span class='u-colorWarning'>注意：</span></p> <p><span class='u-colorWarning'>1. 隐私设置对你在本站的安全性毫无影响，以下选项仅能决定其他用户能否看到你在站点的活动。一些信息在站点日志中仍旧可见。</span></p> <p><span class='u-colorWarning'>2. 隐私设置中的某些设置可能会影响你在排行榜中的显示。</span></p>
server.user.st_paranoia_title: |-
  这些设置允许你展示或隐藏个人信息。
server.user.st_password: |-
  修改密码
server.user.st_password_new: |-
  新密码
server.user.st_password_note: |-
  密码强度要求： <ul class=\"List\"> <li>密码大于等于 8 字符，包含至少 1 个小写和大写字母，且包含至少 1 个数字或符号</li> <li>或大于等于 20 字符</li> </ul>
server.user.st_password_old: |-
  当前密码
server.user.st_password_re: |-
  确认新密码
server.user.st_personal: |-
  个人设置
server.user.st_personal_title: |-
  这些设置会变更你个人页面和帖子的外观。
server.user.st_presets: |-
  预设
server.user.st_presets_0: |-
  全部显示
server.user.st_presets_1: |-
  仅显示数量
server.user.st_presets_2: |-
  全部隐藏
server.user.st_profinfo1: |-
  个人介绍详情 1
server.user.st_profinfo1_title: |-
  你可以使用文字和 BBCode 定制你的个人介绍信息。在此输入文字即可为你的个人介绍栏添加正文，如欲解锁额外的个人介绍槽位，请捐助。
server.user.st_profinfo2: |-
  个人介绍详情 2
server.user.st_profinfo2_title: |-
  恭喜！通过达到捐助等级 2，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_profinfo3: |-
  个人介绍详情 3
server.user.st_profinfo3_title: |-
  恭喜！通过达到捐助等级 3，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_profinfo4: |-
  个人介绍详情 4
server.user.st_profinfo4_title: |-
  恭喜！通过达到捐助等级 4，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_profinfo5: |-
  个人介绍详情 5
server.user.st_profinfo5_title: |-
  恭喜！通过达到捐助等级 5，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_proftitle1: |-
  个人介绍标题 1
server.user.st_proftitle1_title: |-
  你可以使用文字和 BBCode 定制你的个人介绍信息。在此输入文字即可为你的个人介绍栏添加标题，如欲解锁额外的个人介绍槽位，请捐助。
server.user.st_proftitle2: |-
  个人介绍标题 2
server.user.st_proftitle2_title: |-
  恭喜！通过达到捐助等级 2，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_proftitle3: |-
  个人介绍标题 3
server.user.st_proftitle3_title: |-
  恭喜！通过达到捐助等级 3，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_proftitle4: |-
  个人介绍标题 4
server.user.st_proftitle4_title: |-
  恭喜！通过达到捐助等级 4，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_proftitle5: |-
  个人介绍标题 5
server.user.st_proftitle5_title: |-
  恭喜！通过达到捐助等级 5，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_save: |-
  保存设置
server.user.st_search: |-
  实时搜索
server.user.st_style: |-
  外观设置
server.user.st_style_title: |-
  这些设置会改变整个网站的视觉外观。
server.user.st_torrents: |-
  种子设置
server.user.st_torrents_title: |-
  这些设置决定种子如何被设置、分组、展示和下载。
server.user.staff_mark: |-
  工作人员备注
server.user.staff_mark_title: |-
  在此填写的信息会显示在 staff.php 表格最右列。
server.user.staff_messages: |-
  管理组信息
server.user.staff_messages_title: |-
  启用该选项会使你在收到来自管理组成员的私信时得到通知。
server.user.staff_note: |-
  管理组备注
server.user.staff_notes: |-
  管理组备注
server.user.staff_pm: |-
  管理组私信
server.user.staff_tools: |-
  管理工具
server.user.statistics: |-
  统计
server.user.stats: |-
  统计
server.user.style: |-
  预置样式
server.user.style_tool: |-
  风格工具提示
server.user.style_tool_title: |-
  当悬停带有额外信息的元素 (例如这个元素) 时，使用样式化的工具提示而不是浏览器的默认值
server.user.stylesheet: |-
  层叠样式表
server.user.stylesheet_title: |-
  选择一个样式会变更 ";
        // line 7075
        echo twig_escape_filter($this->env, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["CONFIG"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["SITE_NAME"] ?? null) : null), "html", null, true);
        echo " 的视觉外观。
server.user.subject: |-
  主题
server.user.submit: |-
  提交
server.user.super_toasty: |-
  Super Toasty (APP)
server.user.supports_partial_url_matching: |-
  支持部分网址匹配，如，输入 “&#124;https://whatimg.com” 会搜索存储在 https://whatimg.com 上的头像
server.user.tagging: |-
  标签编辑
server.user.tagging_title: |-
  这只会封禁用户删除标签的权限。
server.user.test_push: |-
  测试推送
server.user.tg_binding: |-
  Telegram 绑定（暂不需要）
server.user.tg_binding_binded: |-
  已绑定
server.user.tg_binding_key: |-
  绑定密钥:&nbsp;
server.user.tg_binding_right8: |-
  （Passkey 末八位）
server.user.tg_binding_span: |-
  请至 <a target=\"_blank\" href=\"";
        // line 7099
        echo twig_escape_filter($this->env, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["CONFIG"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["TG_GROUP"] ?? null) : null), "html", null, true);
        echo "\">官方 TG 群</a>，输入 <code>/gohome</code>，并根据提示进行绑定操作。
server.user.tg_binding_status: |-
  绑定状态:&nbsp;
server.user.tg_binding_unbind: |-
  未绑定
server.user.the_total_amount_downloaded_was: |-
  ；下载总量为&nbsp;
server.user.the_total_amount_uplaoded_by_direct_invitees_was_: |-
  直系后宫的上传总量为&nbsp;
server.user.the_total_amount_uploaded_by_the_entire_tree_was: |-
  整棵邀请树的上传总量为&nbsp;
server.user.theme: |-
  主题
server.user.theme_auto: |-
  自动
server.user.theme_dark: |-
  深色
server.user.theme_light: |-
  浅色
server.user.these_numbers_include_the_stats_of_paranoid_users_and: |-
  其中包含了高隐私等级用户的数据，且会纳入邀请发放脚本的计算。
server.user.this_costs: |-
  这会消耗 %d 积分，之后你还剩余 %d 积分
server.user.this_tree_has_n_entries_n_branches_and_a_depth_of_n: |-
  该邀请树共有 %s 位用户，%s个分支，传了 %s 代。其中包含
server.user.thread_subscriptions: |-
  论坛主题订阅
server.user.to_fuzzy_search_for_a_block_of_addresses_title: |-
  欲模糊搜索（默认）一个地址段（如 55.66.77.*），输入 “55.66.77.” 即可，不要带引号
server.user.token: |-
  令牌
server.user.token_history: |-
  免费令牌历史
server.user.token_number: |-
  令牌
server.user.too_paranoid_to_have_their_stats_shown_here_and: |-
  隐私等级过高，导致其数据不在此显示，且
server.user.torrent_notifications: |-
  种子通知
server.user.torrent_notifications_title: |-
  启用该选项会使你在既有种子订阅过滤器被触发时得到通知。
server.user.torrent_upload: |-
  发种
server.user.torrents_artists_display: |-
  类别展开 (艺人页面)
server.user.torrents_artists_display_title: |-
  在艺人页面，启用该选项会默认展开类别栏目，关闭该选项则会默认折叠类别栏目。
server.user.torrents_artists_display_type: |-
  类别显示详情 (艺人页面)
server.user.torrents_artists_display_type_title: |-
  被勾选的类别会在艺人页面默认被折叠起来。
server.user.torrents_cover: |-
  海报 (种子)
server.user.torrents_cover_title: |-
  启用种子的海报图会在种子信息旁展示其海报图。启用额外海报会同时显示所有额外的海报图。
server.user.torrents_group: |-
  种子分组
server.user.torrents_group_display: |-
  种子分组展开
server.user.torrents_group_display_title: |-
  在种子搜索结果和艺人页面，启用该选项会默认展开种子组，关闭该选项则会默认折叠种子组。
server.user.torrents_group_title: |-
  启用种子分组会让同一种子组的多种格式被置于一个共同的栏目下。
server.user.torrents_group_tool: |-
  启用种子分组功能
server.user.torrents_snatched: |-
  已完成种子标记
server.user.torrents_snatched_title: |-
  启用已完成种子标识会在你已完成的种子旁显示 “已完成！” 字样。
server.user.total_donor_points: |-
  总捐助点数
server.user.total_points: |-
  累计点数
server.user.total_points_title: |-
  累计点数是用户总体贡献的体现，它永远不会过期。它决定了用户的特殊等级及其在捐助者排行榜上的排名。
server.user.total_uploads_title: |-
  历史发种总数（含删种数）
server.user.tracker_ip: |-
  Tracker IP
server.user.traditional: |-
  传统式（顶部）
server.user.tree: |-
  邀请树
server.user.true_downloaded_title: |-
  真实下载量（非个人令牌免费下载数据从 2020 年 6 月 1 日开始统计）
server.user.true_uploaded_title: |-
  真实上传量（不包含积分兑换的上传量）
server.user.two_factor_authentication: |-
  两步验证
server.user.two_factor_authentication_note: |-
  请注意，如果你丢失了你的两步验证密钥以及所有的备用密钥，即使是 ";
        // line 7189
        echo twig_escape_filter($this->env, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["CONFIG"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["SITE_NAME"] ?? null) : null), "html", null, true);
        echo " 的管理员也救不回你的账号。请确保你将备用密钥安置在妥当之处。
server.user.two_factor_authentication_note_3: |-
  你我约定了一个保障安全的密钥。请通过扫描二维码或是复制粘贴的方式将之导入你的手机。我们推荐使用的密保 APP 可以从 <a href=\"https://itunes.apple.com/gb/app/authy/id494168017?mt=8\">App Store</a> 或是 <a href=\"https://play.google.com/store/apps/details?id=com.authy.authy&hl=en_GB\">Play Store</a> 获取。你也可以使用 <a href=\"https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en_GB\">Google Authenticator</a> APP。当你完成以后就可以点击下一步了。
server.user.u_artist: |-
  艺人添加总数
server.user.u_bounty: |-
  积分消费总额
server.user.u_downloaded: |-
  下载数据
server.user.u_filled: |-
  应求总数
server.user.u_percentile: |-
  百分等级
server.user.u_post: |-
  发帖总数
server.user.u_total: |-
  全站百分等级
server.user.u_uploaded: |-
  上传数据
server.user.u_uploads: |-
  发种总数
server.user.ulocked: |-
  未锁定
server.user.unconfirmed: |-
  未确认
server.user.units_are_in_gibibytes: |-
  单位是 GiB（与 GB 同级的二进制单位）
server.user.unlimitedcolor: |-
  自定义纯色用户名
server.user.unlimitedcolor_placeholder: |-
  例：#123456
server.user.unlimitedcolor_title: |-
  通过在此填写 RGB 色号，可使用户名以你指定的纯色显示。
server.user.unseeded: |-
  未做种种子被删通知
server.user.unseeded_checked: |-
  为你所发布但尚未做种的种子被删除启用私信提醒
server.user.unseeded_title: |-
  启用该选项会在你未做种的种子被删除时私信你。
server.user.update_filter: |-
  更新
server.user.upload: |-
  上传
server.user.uploaded: |-
  上传量
server.user.uploaded_title: |-
  以字节为单位的上传量。也允许在末尾例如 +20GB 或 -35.6364MB。
server.user.uploads: |-
  上传数
server.user.user_disable: |-
  封禁
server.user.user_po: |-
  用户权限
server.user.user_reason: |-
  理由
server.user.user_search: |-
  用户搜索
server.user.username: |-
  用户名
server.user.username_invites_tree: |-
  &nbsp;> 邀请 > 邀请树
server.user.value: |-
  数值
server.user.view: |-
  查看
server.user.view_list: |-
  查看做种列表
server.user.view_notifications: |-
  查看推送
server.user.view_users: |-
  查看用户
server.user.view_wiki_guide: |-
  阅读指南
server.user.vote: |-
  票数
server.user.voting: |-
  投票链接
server.user.voting_disable: |-
  禁用投票链接
server.user.voting_title: |-
  该选项允许你启用或禁用艺人、合集和下载清单页面的“up”和“down”投票链接。
server.user.warn: |-
  警告
server.user.warn_reason: |-
  警告原因
server.user.warn_reason_title: |-
  原因会附加在警告私信中被发送给用户！
server.user.warn_time: |-
  有效期
server.user.warned: |-
  警告
server.user.warning_expires_in: |-
  警告到期时间
server.user.week_one: |-
  周
server.user.week_other: |-
  周
server.user.wiki: |-
  Wiki
server.user.year: |-
  年
server.user.yes: |-
  是
server.user.you_may_not_send_invites_while_on_ratio_watch_or: |-
  在分享率监控或下载权限被禁期间，你不能发放邀请。请阅读 <a href=\"wiki.php?action=article&amp;id=101\">本文</a> 了解详情。
server.user.your_invites_have_been_disabled: |-
  你的邀请权限已被封禁。请阅读 <a href=\"wiki.php?action=article&amp;id=101\">本文</a> 了解详情。
server.userhistory.age_of_account: |-
  账号年龄
server.userhistory.artist: |-
  艺人
server.userhistory.catch_up: |-
  同步最新记录
server.userhistory.changed: |-
  变更于
server.userhistory.collage: |-
  合集
server.userhistory.current_email: |-
  当前邮箱
server.userhistory.current_ip: |-
  当前 IP
server.userhistory.downloaded: |-
  下载量
server.userhistory.elapsed: |-
  经过时长
server.userhistory.email: |-
  邮箱
server.userhistory.email_history_for: |-
  %s 的邮箱历史
server.userhistory.end: |-
  结束于
server.userhistory.ended: |-
  结束于
server.userhistory.expire_button: |-
  (作废)
server.userhistory.expired: |-
  已过期
server.userhistory.fl_token_history: |-
  令牌消费历史
server.userhistory.fl_token_history_for: |-
  %s 的令牌消费历史
server.userhistory.forum: |-
  版块
server.userhistory.forums: |-
  论坛
server.userhistory.go_to_post_history: |-
  查看发帖历史
server.userhistory.go_to_subscriptions: |-
  查看订阅
server.userhistory.grouped: |-
  分组显示
server.userhistory.header_quote_notifications: |-
  回复通知推送
server.userhistory.hide: |-
  隐藏
server.userhistory.in: |-
  发布在&nbsp;
server.userhistory.invite_email: |-
  邀请邮箱
server.userhistory.ip_address: |-
  IP 地址
server.userhistory.ip_address_history_for: |-
  %s 的 IP 地址历史
server.userhistory.ip_address_search: |-
  IP 地址搜索
server.userhistory.last_edited_by: |-
  最近编辑者是
server.userhistory.last_post_time: |-
  最近回帖时间
server.userhistory.left_bracket: |-
  &nbsp;(
server.userhistory.never: |-
  从未
server.userhistory.new: |-
  新
server.userhistory.new_right_bracket: |-
  &nbsp;新)
server.userhistory.new_torrent_one: |-
  %s 新种子
server.userhistory.new_torrent_other: |-
  %s 新种子
server.userhistory.no: |-
  否
server.userhistory.no_quotes: |-
  没有 %s 回复。
server.userhistory.no_subscribed_collages: |-
  没有已订阅的合集
server.userhistory.no_subscriptions: |-
  没有订阅
server.userhistory.no_topics: |-
  没有主题
server.userhistory.old: |-
  旧
server.userhistory.old_emails: |-
  旧邮箱
server.userhistory.only_display_collages_with_new_additions: |-
  只显示有更新的合集
server.userhistory.only_display_posts_with_unread_replies: |-
  只显示含未读帖子的主题
server.userhistory.only_display_posts_with_unread_replies_grouped: |-
  只分组显示含未读帖子的主题
server.userhistory.only_display_subscriptions_with_unread_replies: |-
  只显示含未读帖子的订阅
server.userhistory.passkey_history_for: |-
  %s 的密钥历史
server.userhistory.password_reset_history_for: |-
  %s 的密码重置历史
server.userhistory.post_bodies: |-
  帖子正文
server.userhistory.post_history_for: |-
  %s 的发帖历史
server.userhistory.quote_notifications: |-
  回复通知推送
server.userhistory.quoted_by: |-
  回复者是
server.userhistory.registration_ip_address: |-
  注册时的 IP 地址
server.userhistory.request: |-
  求种
server.userhistory.search: |-
  搜索
server.userhistory.search_wimia_com: |-
  通过 WIMIA.com 搜索
server.userhistory.set: |-
  设置于
server.userhistory.set_from_ip: |-
  设置时使用的 IP
server.userhistory.show: |-
  显示
server.userhistory.show_all_posts: |-
  显示所有帖子
server.userhistory.show_all_posts_grouped: |-
  分组显示所有帖子
server.userhistory.show_all_quotes: |-
  显示所有回复
server.userhistory.show_all_subscribed_collages: |-
  显示所有已订阅的合集
server.userhistory.show_all_subscriptions: |-
  显示所有订阅
server.userhistory.show_subscriptions: |-
  查看订阅
server.userhistory.show_unread_quotes: |-
  显示未读回复
server.userhistory.space_new: |-
  新的
server.userhistory.span_new: |-
  <span class=\"u-colorWarning\">(新!)</span>
server.userhistory.start: |-
  开始于
server.userhistory.started: |-
  开始于
server.userhistory.subscribed_collages: |-
  合集订阅
server.userhistory.subscriptions: |-
  订阅
server.userhistory.threads_started_by: |-
  由 %s 发起的主题
server.userhistory.time: |-
  时间
server.userhistory.tokens_used: |-
  消费次数
server.userhistory.topic: |-
  主题
server.userhistory.topic_creation_time: |-
  主题发布时间
server.userhistory.torrent: |-
  种子
server.userhistory.tracker_ip_address_history_for: |-
  %s 的 Tracker IP 地址历史
server.userhistory.unread: |-
  未读的&nbsp;
server.userhistory.unread_post_history_for: |-
  未读的 %s 的发帖历史
server.userhistory.view_all_ip_address: |-
  查看所有 IP 地址
server.userhistory.view_ip_addresses_with_users: |-
  查看有用户使用的 IP 地址
server.userhistory.wildcard_search_examples: |-
  通配符（*）搜索示例：127.0.* 或 1*2.0.*.1 或 *.*.*.*
server.userhistory.with_new_additions: |-
  有更新
server.userhistory.with_unread_posts: |-
  含未读帖子
server.userhistory.with_unread_posts_number: |-
  含未读帖子的 %s
server.userhistory.yes: |-
  是
server.wiki.add_alias: |-
  添加别名
server.wiki.aliases: |-
  别名
server.wiki.all_articles: |-
  浏览所有文章
server.wiki.article: |-
  文章
server.wiki.article_access: |-
  权限
server.wiki.article_access_detail: |-
  在某些情况下，文章的阅读和编辑权限应当被加以限制。
server.wiki.article_chinese: |-
  中文 Wiki 链接
server.wiki.article_create: |-
  新建文章
server.wiki.article_delete: |-
  删除文章
server.wiki.article_delete_confirm1: |-
  你确定要删除吗？
server.wiki.article_delete_confirm2: |-
  彻底删除，意味着删除之后无法撤销此操作。
server.wiki.article_delete_confirm3: |-
  在获知此信息后，你是否还要删除本文及其所有的编辑版本、别名，仿佛它从未存在过一样？
server.wiki.article_edit: |-
  编辑文章
server.wiki.article_history: |-
  编辑历史
server.wiki.article_language: |-
  语言
server.wiki.article_language_detail: |-
  请选择你的文章编写时所使用的语言。如果文章并非以中文写就，你必须在下方填写对应中文文章的链接。如果你在下拉菜单中没有见到所需语言，请在完成文章的创建之后私信管理组。
server.wiki.article_language_select: |-
  语言
server.wiki.article_note1: |-
  为教程和知识而搜索。
server.wiki.article_note2: |-
  另外，你也可以通过首字母快速筛选所需的文章。
server.wiki.article_restrict_edit: |-
  允许编辑
server.wiki.article_restrict_read: |-
  允许阅读
server.wiki.body: |-
  正文
server.wiki.browse_wiki_articles: |-
  浏览文章
server.wiki.chinese: |-
  中文
server.wiki.compare: |-
  对比
server.wiki.create: |-
  创建
server.wiki.create_an_article: |-
  新建文章
server.wiki.delete_aliases: |-
  删除别名
server.wiki.details: |-
  详情
server.wiki.english: |-
  English
server.wiki.for_an_similar_article: |-
  &nbsp;一篇类似文章。
server.wiki.history_age: |-
  时间
server.wiki.history_author: |-
  编辑者
server.wiki.history_new: |-
  新
server.wiki.history_old: |-
  旧
server.wiki.history_revision: |-
  修订序号
server.wiki.history_title: |-
  文章标题
server.wiki.last_edited: |-
  最近更新者
server.wiki.last_edited_by: |-
  最近编辑者
server.wiki.last_updated_on: |-
  最近更新于
server.wiki.last_upload: |-
  最近更新
server.wiki.no_article_found: |-
  没有找到文章
server.wiki.no_article_matching_the_name: |-
  没有与搜索关键字匹配的文章。
server.wiki.order_by: |-
  排序方式
server.wiki.other_languages: |-
  他语版本
server.wiki.permissions: |-
  权限
server.wiki.read: |-
  查看
server.wiki.replace_article: |-
  &nbsp;一篇文章取而代之
server.wiki.revision_history: |-
  %s 的历史版本
server.wiki.revisions: |-
  的新旧版本
server.wiki.search: |-
  搜索
server.wiki.search_articles: |-
  搜索文章
server.wiki.search_for: |-
  搜索关键字
server.wiki.search_in: |-
  搜索范围
server.wiki.title: |-
  标题
server.wiki.toc: |-
  目录
server.wiki.version: |-
  版本
server.wiki.view_user: |-
  查看用户
server.wiki.you_must_be_a_higher_user_class_to_view: |-
  你的用户等级不足以阅读本文
server.country.afghanistan: |-
  阿富汗
server.country.aland_islands: |-
  奥兰群岛
server.country.albania: |-
  阿尔巴尼亚
server.country.algeria: |-
  阿尔及利亚
server.country.american_samoa: |-
  美属萨摩亚
server.country.andorra: |-
  安道尔
server.country.angola: |-
  安哥拉
server.country.anguilla: |-
  安圭拉
server.country.antigua_and_barbuda: |-
  安提瓜和巴布达
server.country.argentina: |-
  阿根廷
server.country.armenia: |-
  亚美尼亚
server.country.aruba: |-
  阿鲁巴
server.country.australia: |-
  澳大利亚
server.country.austria: |-
  奥地利
server.country.azerbaijan: |-
  阿塞拜疆
server.country.bangladesh: |-
  孟加拉
server.country.bahrain: |-
  巴林
server.country.bahamas: |-
  巴哈马
server.country.barbados: |-
  巴巴多斯
server.country.belarus: |-
  白俄罗斯
server.country.belgium: |-
  比利时
server.country.belize: |-
  伯利兹
server.country.benin: |-
  贝宁
server.country.bermuda: |-
  百慕大
server.country.bhutan: |-
  不丹
server.country.bolivia: |-
  玻利维亚
server.country.bosnia_and_herzegovina: |-
  波斯尼亚和黑塞哥维那
server.country.botswana: |-
  博茨瓦纳
server.country.bouvet_island: |-
  布维岛
server.country.brazil: |-
  巴西
server.country.brunei: |-
  文莱
server.country.bulgaria: |-
  保加利亚
server.country.burkina_faso: |-
  布基纳法索
server.country.burundi: |-
  布隆迪
server.country.cambodia: |-
  柬埔寨
server.country.cameroon: |-
  喀麦隆
server.country.canada: |-
  加拿大
server.country.cape_verde: |-
  佛得角
server.country.central_african_republic: |-
  中非
server.country.chad: |-
  乍得
server.country.chile: |-
  智利
server.country.christmas_islands: |-
  圣诞岛
server.country.cocos_(keeling)_islands: |-
  科科斯（基林）群岛
server.country.colombia: |-
  哥伦比亚
server.country.comoros: |-
  科摩罗
server.country.congo_(congo-kinshasa): |-
  刚果（金）
server.country.congo: |-
  刚果
server.country.cook_islands: |-
  库克群岛
server.country.costa_rica: |-
  哥斯达黎加
server.country.cote_d'ivoire: |-
  科特迪瓦
server.country.china: |-
  中国
server.country.croatia: |-
  克罗地亚
server.country.cuba: |-
  古巴
server.country.czech: |-
  捷克
server.country.cyprus: |-
  塞浦路斯
server.country.denmark: |-
  丹麦
server.country.djibouti: |-
  吉布提
server.country.dominica: |-
  多米尼加
server.country.ecuador: |-
  厄瓜多尔
server.country.egypt: |-
  埃及
server.country.equatorial_guinea: |-
  赤道几内亚
server.country.eritrea: |-
  厄立特里亚
server.country.estonia: |-
  爱沙尼亚
server.country.ethiopia: |-
  埃塞俄比亚
server.country.faroe_islands: |-
  法罗群岛
server.country.fiji: |-
  斐济
server.country.finland: |-
  芬兰
server.country.france: |-
  法国
server.country.metropolitanfrance: |-
  法国大都会
server.country.french_guiana: |-
  法属圭亚那
server.country.french_polynesia: |-
  法属波利尼西亚
server.country.gabon: |-
  加蓬
server.country.gambia: |-
  冈比亚
server.country.georgia: |-
  格鲁吉亚
server.country.germany: |-
  德国
server.country.ghana: |-
  加纳
server.country.gibraltar: |-
  直布罗陀
server.country.greece: |-
  希腊
server.country.grenada: |-
  格林纳达
server.country.guadeloupe: |-
  瓜德罗普岛
server.country.guam: |-
  关岛
server.country.guatemala: |-
  危地马拉
server.country.guernsey: |-
  根西岛
server.country.guinea-bissau: |-
  几内亚比绍
server.country.guinea: |-
  几内亚
server.country.guyana: |-
  圭亚那
server.country.haiti: |-
  海地
server.country.honduras: |-
  洪都拉斯
server.country.hungary: |-
  匈牙利
server.country.iceland: |-
  冰岛
server.country.india: |-
  印度
server.country.indonesia: |-
  印度尼西亚
server.country.iran: |-
  伊朗
server.country.iraq: |-
  伊拉克
server.country.ireland: |-
  爱尔兰
server.country.isle_of_man: |-
  马恩岛
server.country.israel: |-
  以色列
server.country.italy: |-
  意大利
server.country.jamaica: |-
  牙买加
server.country.japan: |-
  日本
server.country.jersey: |-
  泽西岛
server.country.jordan: |-
  约旦
server.country.kazakhstan: |-
  哈萨克斯坦
server.country.kenya: |-
  肯尼亚
server.country.kiribati: |-
  基里巴斯
server.country.korea_(south): |-
  韩国
server.country.korea_(north): |-
  朝鲜
server.country.kuwait: |-
  科威特
server.country.kyrgyzstan: |-
  吉尔吉斯斯坦
server.country.laos: |-
  老挝
server.country.latvia: |-
  拉脱维亚
server.country.lebanon: |-
  黎巴嫩
server.country.lesotho: |-
  莱索托
server.country.liberia: |-
  利比里亚
server.country.libya: |-
  利比亚
server.country.liechtenstein: |-
  列支敦士登
server.country.lithuania: |-
  立陶宛
server.country.luxembourg: |-
  卢森堡
server.country.macedonia: |-
  马其顿
server.country.malawi: |-
  马拉维
server.country.malaysia: |-
  马来西亚
server.country.madagascar: |-
  马达加斯加
server.country.maldives: |-
  马尔代夫
server.country.mali: |-
  马里
server.country.malta: |-
  马耳他
server.country.marshall_islands: |-
  马绍尔群岛
server.country.martinique: |-
  马提尼克岛
server.country.mauritania: |-
  毛里塔尼亚
server.country.mauritius: |-
  毛里求斯
server.country.mayotte: |-
  马约特
server.country.mexico: |-
  墨西哥
server.country.micronesia: |-
  密克罗尼西亚
server.country.moldova: |-
  摩尔多瓦
server.country.monaco: |-
  摩纳哥
server.country.mongolia: |-
  蒙古
server.country.montenegro: |-
  黑山
server.country.montserrat: |-
  蒙特塞拉特
server.country.morocco: |-
  摩洛哥
server.country.mozambique: |-
  莫桑比克
server.country.myanmar: |-
  缅甸
server.country.namibia: |-
  纳米比亚
server.country.nauru: |-
  瑙鲁
server.country.nepal: |-
  尼泊尔
server.country.netherlands: |-
  荷兰
server.country.new_caledonia: |-
  新喀里多尼亚
server.country.new_zealand: |-
  新西兰
server.country.nicaragua: |-
  尼加拉瓜
server.country.niger: |-
  尼日尔
server.country.nigeria: |-
  尼日利亚
server.country.niue: |-
  纽埃
server.country.norfolk_island: |-
  诺福克岛
server.country.norway: |-
  挪威
server.country.oman: |-
  阿曼
server.country.pakistan: |-
  巴基斯坦
server.country.palau: |-
  帕劳
server.country.palestine: |-
  巴勒斯坦
server.country.panama: |-
  巴拿马
server.country.papua_new_guinea: |-
  巴布亚新几内亚
server.country.peru: |-
  秘鲁
server.country.philippines: |-
  菲律宾
server.country.pitcairn_islands: |-
  皮特凯恩群岛
server.country.poland: |-
  波兰
server.country.portugal: |-
  葡萄牙
server.country.puerto_rico: |-
  波多黎各
server.country.qatar: |-
  卡塔尔
server.country.reunion: |-
  留尼汪岛
server.country.romania: |-
  罗马尼亚
server.country.rwanda: |-
  卢旺达
server.country.russia: |-
  俄罗斯
server.country.saint_helena: |-
  圣赫勒拿
server.country.saint_kitts-nevis: |-
  圣基茨和尼维斯
server.country.saint_lucia: |-
  圣卢西亚
server.country.saint_vincent_and_the_grenadines: |-
  圣文森特和格林纳丁斯
server.country.el_salvador: |-
  萨尔瓦多
server.country.samoa: |-
  萨摩亚
server.country.san_marino: |-
  圣马力诺
server.country.sao_tome_and_principe: |-
  圣多美和普林西比
server.country.saudi_arabia: |-
  沙特阿拉伯
server.country.senegal: |-
  塞内加尔
server.country.seychelles: |-
  塞舌尔
server.country.sierra_leone: |-
  塞拉利昂
server.country.singapore: |-
  新加坡
server.country.serbia: |-
  塞尔维亚
server.country.slovakia: |-
  斯洛伐克
server.country.slovenia: |-
  斯洛文尼亚
server.country.solomon_islands: |-
  所罗门群岛
server.country.somalia: |-
  索马里
server.country.south_africa: |-
  南非
server.country.spain: |-
  西班牙
server.country.sri_lanka: |-
  斯里兰卡
server.country.sudan: |-
  苏丹
server.country.suriname: |-
  苏里南
server.country.swaziland: |-
  斯威士兰
server.country.sweden: |-
  瑞典
server.country.switzerland: |-
  瑞士
server.country.syria: |-
  叙利亚
server.country.tajikistan: |-
  塔吉克斯坦
server.country.tanzania: |-
  坦桑尼亚
server.country.thailand: |-
  泰国
server.country.trinidad_and_tobago: |-
  特立尼达和多巴哥
server.country.timor-leste: |-
  东帝汶
server.country.togo: |-
  多哥
server.country.tokelau: |-
  托克劳
server.country.tonga: |-
  汤加
server.country.tunisia: |-
  突尼斯
server.country.turkey: |-
  土耳其
server.country.turkmenistan: |-
  土库曼斯坦
server.country.tuvalu: |-
  图瓦卢
server.country.uganda: |-
  乌干达
server.country.ukraine: |-
  乌克兰
server.country.united_arab_emirates: |-
  阿拉伯联合酋长国
server.country.united_kingdom: |-
  英国
server.country.united_states: |-
  美国
server.country.uruguay: |-
  乌拉圭
server.country.uzbekistan: |-
  乌兹别克斯坦
server.country.vanuatu: |-
  瓦努阿图
server.country.vatican_city: |-
  梵蒂冈
server.country.venezuela: |-
  委内瑞拉
server.country.vietnam: |-
  越南
server.country.wallis_and_futuna: |-
  瓦利斯群岛和富图纳群岛
server.country.western_sahara: |-
  西撒哈拉
server.country.yemen: |-
  也门
server.country.yugoslavia: |-
  南斯拉夫
server.country.zambia: |-
  赞比亚
server.country.zimbabwe: |-
  津巴布韦
server.country.taiwan: |-
  中国台湾
server.country.hong_kong: |-
  中国香港
server.country.macao: |-
  中国澳门
server.common.minutes: |-
  分钟
server.collages.contributed_collages_browse: |-
  %s 建设的合集
server.collages.started_collages_browse: |-
  %s 发起的合集
server.common.save_all_change: |-
  保存
server.torrents.report_info: |-
  报告信息
server.collages.not_torrent_link: |-
  需填写站内种子地址
server.requests.delete_request: |-
  删除求种
server.requests.unfill_request: |-
  取消应求
server.requests.filled_user: |-
  应求人
server.common.open: |-
  开启
server.common.close: |-
  关闭
server.apply.resolve: |-
  解决
server.apply.reopen: |-
  重新打开
server.user.torrent_title_drag_note: |-
  左右拖拽下方项目以排序
server.bookmarks.delete_checked: |-
  删除选中
server.common.update: |-
  更新
";
    }

    public function getTemplateName()
    {
        return "zh-Hans/zh-Hans.yaml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  7313 => 7189,  7220 => 7099,  7193 => 7075,  7022 => 6907,  6595 => 6483,  6500 => 6391,  6485 => 6379,  2355 => 2252,  2344 => 2244,  2335 => 2238,  1980 => 1886,  1975 => 1884,  1970 => 1882,  1925 => 1842,  1920 => 1840,  1743 => 1666,  1735 => 1661,  1731 => 1660,  1724 => 1656,  1716 => 1651,  1708 => 1646,  287 => 228,  254 => 198,  125 => 72,  120 => 70,  101 => 54,  88 => 44,  77 => 36,  70 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("client.upload.copied: |-
  复制成功
client.common.save: |-
  保存
client.common.cancel: |-
  取消
client.upload.uploading: |-
  上传中：
client.upload.uploaded: |-
  上传完成
client.bbcode.edit: |-
  编辑
client.bbcode.loading: |-
  加载中……
client.bbcode.preview: |-
  预览
client.common.actor: |-
  演员
client.common.are_you_sure_cannot_undone: |-
  你确定要这样操作吗？该操作不可撤销！
client.common.are_you_sure_you_want_to_cancel: |-
  你确定要取消吗？
client.common.are_you_sure_you_wish_to_delete_this_post: |-
  你确定要删除这条回帖吗？
client.common.check_all: |-
  全选
client.common.cinematographer: |-
  摄影
client.common.clear: |-
  清除
client.common.collapse_this_group: |-
  折叠本影片。在左键单击的同时按住 [Command] <em>(Mac)</em> 或 [Ctrl] <em>(PC)</em> 键以折叠{{section}}所有的影片。
client.common.composer: |-
  作曲
client.common.confirm_purchase: |-
  你确定要购买 {{item}}吗？
client.common.confirm_username: |-
  请输入受赠者的用户名:
client.common.copied: |-
  已复制
client.common.director: |-
  导演
client.common.expand_this_group: |-
  展开本影片。在左键单击的同时按住 [Command] <em>(Mac)</em> 或 [Ctrl] <em>(PC)</em> 键以展开{{section}}所有的影片。
client.common.hide: |-
  隐藏
client.common.in_this_release_type: |-
  本发布类型
client.common.like: |-
  赞
client.common.on_this_page: |-
  本页面
client.common.pm_user_on_edit: |-
  <span id=\"pmbox{{postId}}\"><label>编辑后私信通知发帖人？<input type=\"checkbox\" name=\"pm\" value=\"1\" /></label></span>
client.common.producer: |-
  制片
client.common.request_has_been_unresolved: |-
  请求已被归入未处理类别。请刷新浏览器查看。
client.common.uncheck_all: |-
  取消全选
client.common.view: |-
  查看
client.common.writer: |-
  编剧
client.error.imdb_unknown_error: |-
  请检查 IMDb ID 是否填写有误，如果无误，请重试，重试无效，请联系管理员。
client.error.invalid_imdb_link_note: |-
  请填入格式合规的 IMDb 链接，形如 “tt1234567” 或 “https://www.imdb.com/title/tt1234567”。
client.error.request_torrent_group_exists_note: |-
  站点已有此电影，<a href='/torrents.php?id={{groupID}}'>点此</a> 查看并确保你想要的格式不存在，通过页面上方的 “请求格式” 发布求种。
client.error.torrent_group_exists_note: |-
  站点已有此电影，<a href='/torrents.php?id={{groupID}}'>点此</a> 查看并确保你想要发布的种子不与既有种子重复后，通过页面上方的 “添加格式” 发布。
client.other.client_whitelist: |-
  客户端白名单
client.screenshot_comparison.gpw_helper_not_installed: |-
  请先安装 <a href=\"https://greasyfork.org/scripts/445653-gpw-helper/code/GPW-Helper.user.js\" target=\"_blank\">GPW 助手</a>, 然后重新加载此页面
client.screenshot_comparison.help: |-
  按 ? 键查看帮助文档
client.screenshot_comparison.help_title: |-
  截图对比器帮助文档
client.screenshot_comparison.loading: |-
  加载中……
client.screenshot_comparison.pixel_compare: |-
  像素对比
client.screenshot_comparison.solar_curve: |-
  曲线滤镜
client.staffpm.assign_assigned: |-
  成功指定对话
client.staffpm.error: |-
  系统出错了
client.staffpm.response_created: |-
  成功创建回复
client.staffpm.response_deleted: |-
  成功删除回复
client.staffpm.response_edited: |-
  成功编辑回复
client.stats.torrentByDay: |-
  每日发种数
client.stats.torrentByMonth: |-
  每月发种数
client.stats.torrentByYear: |-
  每年发种数
client.torrent_table.collapse_edition: |-
  折叠本清晰度组。在左键单击的同时按住 [Command] <em>(Mac)</em> 或 [Ctrl] <em>(PC)</em> 键以折叠本影片中所有的清晰度组。
client.torrent_table.expand_edition: |-
  展开本清晰度组。在左键单击的同时按住 [Command] <em>(Mac)</em> 或 [Ctrl] <em>(PC)</em> 键以展开本影片中所有的清晰度组。
client.upload.codec_required: |-
  请选择一个编码。
client.upload.container_required: |-
  请选择一个容器。
client.upload.desc_img_3_png: |-
  请添加至少三张 PNG 格式的电影原始分辨率（非播放分辨率）截图，操作方法请见 <a href=\"wiki.php?action=article&id=51\" target=\"_blank\">本文</a>。
client.upload.desc_img_hosts: |-
  请使用发布规则 <a href=\"rules.php?p=upload#2.2.1\" target=\"_blank\">2.2.1</a> 所推荐的图床以保证截图的访问速度和有效时长。
client.upload.english_name: |-
  英文名
client.upload.imdb: |-
  IMDb
client.upload.imdb_link_required: |-
  请填写格式正确的 IMDb 链接或 ID！
client.upload.mediainfo_complete_name_required: |-
  必须要包含 Complete name 或 Disc Title 或 Disc Label。
client.upload.mediainfo_invalid_chars: |-
  你填入的 MediaInfo/BDInfo 存在错误，请自用 MdiaInfo 工具扫描获取，不要从他站直接粘贴。如果仍然失败，请在论坛反馈。
client.upload.mediainfo_required: |-
  必须填写 MediaInfo（或 BDInfo）。<br/>对于 DVD 原盘，请填写最大的 VOB 文件以及在它之前的（按文件名排序）、包含了片长信息的 IFO 文件的 MediaInfo 日志。
client.upload.mediainfo_table_space: |-
  BDInfo表格中的空格导致无法解析，请使用 Tab 空格（\\t）替代。
client.upload.movie_desc_required: |-
  请填写电影简介！
client.upload.movie_title_required: |-
  请填写电影名！
client.upload.poster_required: |-
  请填写电影海报图链！如果一张都找不到，请从电影整片里截一张并添上电影名。
client.upload.processing_required: |-
  请选择一个处理。
client.upload.releasetype_required: |-
  请根据 <a href=\"/rules.php?p=upload\">发布规则</a> 的定义指定片种！
client.upload.remaster_required: |-
  请写明种子包含的非主体内容具体是什么
client.upload.resolution_required: |-
  请选择一个分辨率。
client.upload.source_required: |-
  请选择片源。如果你不确定，请选 “Other”，然后输入 “Unknown”。
client.upload.sub_name: |-
  中文名
client.upload.subtitles_required: |-
  请指明文件所包含的字幕，如果没有就勾选 “无字幕”。
client.upload.subtitles_with_mediainfo: |-
  MediaInfo 未提供语言信息，请根据实际情况手动勾选。
client.upload.tag_required: |-
  请填写至少一个类型标签！
client.upload.torrent_file_required: |-
  请选中一个种子文件！
client.upload.year_required: |-
  请填写电影首次公映的年份！
client.validation.please_enter_a_valid_credit_card_number: |-
  请输入一个有效的信用卡号。
client.validation.please_enter_a_valid_date: |-
  请输入一个有效的日期。
client.validation.please_enter_a_valid_date_iso: |-
  请输入一个有效的日期（ISO）。
client.validation.please_enter_a_valid_date_number: |-
  请输入一个有效的数字。
client.validation.please_enter_a_valid_email_address: |-
  请输入一个有效的邮箱地址。
client.validation.please_enter_a_valid_url: |-
  请输入一个有效的网址。
client.validation.please_enter_a_value_between_x_and_y: |-
  请输入一个介于 {0} 到 {1} 之间的值。
client.validation.please_enter_a_value_between_x_and_y_characters_long: |-
  请输入一个介于 {0} 到 {1} 字符长度之间的值。
client.validation.please_enter_a_value_greater_than_or_equal_to_n: |-
  请输入一个大于等于 {0} 的值。
client.validation.please_enter_a_value_less_than_or_equal_to_n: |-
  请输入一个小于等于 {0} 的值。
client.validation.please_enter_at_least_n_characters: |-
  请输入至少 {0} 个字符。
client.validation.please_enter_no_more_than_n_characters: |-
  请输入不超过 {0} 个字符。
client.validation.please_enter_only_digits: |-
  请输入纯数字。
client.validation.please_enter_the_same_value_again: |-
  请重复输入一遍。
client.validation.please_fix_this_field: |-
  请修正此栏。
client.validation.this_field_is_required: |-
  此栏必填。
server.apply.applicant: |-
  申请人
server.apply.applicant_administration: |-
  申请管理
server.apply.application_received_from: |-
  来自 %s 的申请于 %s 被送达。
server.apply.apply: |-
  申请职位
server.apply.apply_for_a_role_at: |-
  在 {{CONFIG['SITE_NAME']}} 申请职位
server.apply.archived: |-
  封存
server.apply.at_least_80_characters: |-
  至少 80 字符，努力说服我们吧！
server.apply.blank_applications: |-
  申请
server.apply.choose_a_role_from_the_list: |-
  从下拉列表中选择一个职位
server.apply.comments: |-
  评论数
server.apply.current: |-
  当前
server.apply.current_applications: |-
  当前申请
server.apply.current_roles: |-
  当前职位
server.apply.date_created: |-
  创建时间
server.apply.description: |-
  描述
server.apply.edit_role: |-
  编辑
server.apply.last_comment_added: |-
  最近评论时间
server.apply.last_comment_from: |-
  最近评论来自
server.apply.manage_roles: |-
  管理职位
server.apply.manage_roles_at: |-
  管理 {{CONFIG['SITE_NAME']}} 的职位申请
server.apply.member_will_see_this_reply: |-
  回复用户可见
server.apply.new_applicant_one: |-
  1 新职位申请
server.apply.new_applicant_other: |-
  %s 新职位申请
server.apply.new_applicant_reply_one: |-
  1 新职位申请回复
server.apply.new_applicant_reply_other: |-
  %s 新职位申请回复
server.apply.new_role: |-
  新建
server.apply.no_current_roles: |-
  当前尚无职位。使用下方表单创建一个。
server.apply.only_staff_will_see_this_reply: |-
  回复仅管理可见
server.apply.open_roles: |-
  开放申请的职位
server.apply.public: |-
  公开
server.apply.published: |-
  开放
server.apply.referral_note: |-
  <b>内推制度：欢迎用户推荐自己的伙伴前来应聘（可推荐无号用户，应聘 TI 除外），内推成功可获得 <span class='u-colorWarning'>3 个邀请名额</span> 和 <span class='u-colorWarning'>250000 积分</span>的奖励！请推荐者使用 Staff PM（对象为 “工作组”）提交推荐信，信中需包含被推荐者的基本信息及意向沟通方式。</b>
server.apply.reply: |-
  回复
server.apply.resolved: |-
  已处理
server.apply.resolved_applications: |-
  已处理申请
server.apply.role: |-
  职位
server.apply.role_created_by: |-
  %s 创建
server.apply.role_created_by_4: |-
  ，最近修改于&nbsp;
server.apply.role_title: |-
  职位名
server.apply.saved: |-
  保存
server.apply.space_role: |-
  职位
server.apply.staff: |-
  仅管理
server.apply.thanks_for_your_interest_in_helping: |-
  感谢你对站点的支持！目前尚无职位开放申请。请对首页和论坛公告保持关注。
server.apply.the_cupboard_is_empty: |-
  目前没有申请可供展示，因此空空如也。
server.apply.the_role_was: |-
  职位 %s 已被 %s。
server.apply.updated: |-
  更新
server.apply.view_applications: |-
  查看申请
server.apply.view_your_application: |-
  查看你的申请
server.apply.visibility: |-
  可见性
server.apply.you_need_choose_role: |-
  你得选择一个自己感兴趣的职位。
server.apply.you_need_explain_more: |-
  你得多说两句。
server.apply.your_cover_letter: |-
  你的求职申请
server.artist.1021: |-
  执导
server.artist.1022: |-
  编剧
server.artist.1023: |-
  制片
server.artist.1024: |-
  作曲
server.artist.1025: |-
  摄影
server.artist.1026: |-
  参演
server.artist.add_alias: |-
  添加一个别名
server.artist.add_alias_note: |-
  此功能会对新增（比如发布种子或添加艺人时）艺人名进行重定向。在下方填入的艺人名添加后，一切在站点新增的该名称都会被目标艺人名取代（在站点实际显示目标艺人名而非新增时填写的艺人名）。适用于常见的拼写错误、他语艺人名等。
server.artist.add_similarartist: |-
  添加相似艺人
server.artist.added: |-
  发布时间
server.artist.aliases_list: |-
  艺人当前别名列表
server.artist.an_alias_already_exists: |-
  此别名已存在，请见 <a href=\"artist.php?id=%s\">此处</a>。你可以尝试将艺术家重命名为此名。
server.artist.artist_aliases: |-
  艺人别名组
server.artist.artist_deleted: |-
  艺人已删除
server.artist.artist_id: |-
  艺人编号
server.artist.artist_info: |-
  艺人信息
server.artist.chinese_biography: |-
  中文艺人简介
server.artist.english_biography: |-
  英文艺人简介
server.artist.artist_name: |-
  艺人名
server.artist.artist_x_deleted: |-
  艺人 “%s” 删除成功！
server.artist.artistcomments: |-
  评论
server.artist.as_an_artist: |-
  &nbsp;这位艺人。
server.artist.blank_artist_name: |-
  Blank artist name.
server.artist.bounty: |-
  报酬
server.artist.box_search: |-
  文件列表搜索
server.artist.cannot_redirect: |-
  Cannot redirect to a nonexistent artist alias.
server.artist.change_artist_id: |-
  修改艺人ID
server.artist.confirm_merge: |-
  合并确认
server.artist.confirm_merge_body: |-
  请确认你想将 %s 合并到 %s 的名下。
server.artist.delete_this_alias: |-
  删除此别名
server.artist.edit_artist: |-
  编辑艺人
server.artist.edit_details: |-
  编辑详情
server.artist.edit_summary: |-
  编辑摘要
server.artist.editrequest: |-
  请求编辑
server.artist.empty_introduction_note: |-
  （这位艺人还没有介绍，快去编辑页面补上吧！）
server.artist.image: |-
  头像链接
server.artist.imdb_artist_id: |-
  IMDb 艺人编号
server.artist.imdb_born_area: |-
  出生地点
server.artist.imdb_born_date: |-
  出生日期
server.artist.imdb_link: |-
  IMDb 链接
server.artist.info: |-
  信息
server.artist.loading: |-
  加载中……
server.artist.make_into: |-
  移入艺人别名组
server.artist.make_into_note: |-
  将此艺人移入下方指定的艺人别名组，以使其所属别名成为下填艺人的别名。
server.artist.merging_artists: |-
  合并艺人
server.artist.name: |-
  别名
server.artist.no_changes_were_made: |-
  由于目标别名没有任何重定向目标，因此改动并未执行。
server.artist.number_of_groups: |-
  影片数
server.artist.number_of_leechers: |-
  下载数
server.artist.number_of_seeders: |-
  做种数
server.artist.number_of_snatches: |-
  完成数
server.artist.number_of_torrents: |-
  种子数
server.artist.or: |-
  或
server.artist.please_remove_the_artist_from_these_requests: |-
  请在尝试删除前手动将艺人从这些求种中移除。
server.artist.please_remove_the_artist_from_these_torrents: |-
  请在尝试删除前手动将艺人从这些种子中删除。
server.artist.re_torrents: |-
  发布求种
server.artist.redirect_to: |-
  目标艺人名
server.artist.redirection_must_target: |-
  当前艺术家的重定向必须指向一个别名。
server.artist.remove_similar_artist_title: |-
  删除该相似艺人
server.artist.rename: |-
  重命名艺人
server.artist.request_an_edit: |-
  请求编辑
server.artist.request_name: |-
  求种名
server.artist.revert: |-
  还原该版
server.artist.revision_history: |-
  历史版本
server.artist.similar_artist_cloud: |-
  相似艺人浮云图
server.artist.similar_artist_map: |-
  相似艺人关系图
server.artist.similarartist: |-
  相似艺人
server.artist.similarartist_note: |-
  未发现
server.artist.statistics: |-
  统计
server.artist.sub_name: |-
  中文名
server.artist.switch_to_cloud: |-
  切换到浮云图
server.artist.switch_to_map: |-
  切换到关系图
server.artist.search_auto_fill: |-
  搜索以自动填充
server.artist.tag: |-
  标签
server.artist.there_are_still_requests_that_have: |-
  当前仍有一些求种包含&nbsp;
server.artist.there_are_still_torrents_that_have: |-
  当前仍有一些种子包含&nbsp;
server.artist.torrents_notify: |-
  订阅新种
server.artist.torrents_unnotify: |-
  退订新种
server.artist.user: |-
  用户
server.artist.view: |-
  查看
server.artist.view_artist: |-
  查看艺人
server.artist.view_torrent_group: |-
  查看种子组
server.artist.viewhistory: |-
  历史版本
server.artist.vote: |-
  投票
server.artist.vote_down_similar_artist_title: |-
  反对该相似艺人：在你认为两个艺人不怎么相似时可点此按钮
server.artist.vote_up_similar_artist_title: |-
  支持该相似艺人：在你认为两个艺人确实很相似时可点此按钮
server.artist.writes_redirect_to: |-
  重定向到
server.artist.you_are_req_for: |-
  你当前请求编辑的艺人是
server.artist.you_are_req_for_note: |-
  <p>请详细写明编辑该艺人所需的信息，包括所有相关链接（IMDb、豆瓣等）。<br /><br />请求编辑不会生成报告，但会在论坛的 “编辑请求” 版块生成一个帖子。<br /><br />该功能可用于：</p> <ul> <li>重命名艺人</li> <li>取消或设置别名的重定向</li> <li>增／删别名</li> <li>其他……</li> </ul> <p>绝对不要将此功能用于种子或种子组。对于单个的种子，使用种子报告功能；对于种子组，前往其各自的页面使用请求编辑功能。</p>
server.badges.badge_achievement_progress: |-
  成就进度
server.badges.badge_display: |-
  印记展示
server.badges.badge_exchange: |-
  兑换
server.badges.badge_introduction: |-
  印记介绍
server.badges.badge_log: |-
  获取历史
server.badges.badge_log_detail: |-
  历史记录
server.badges.badge_name: |-
  名称
server.badges.badge_obtained_time: |-
  时间
server.badges.badge_preview: |-
  印记预览
server.badges.badge_price: |-
  售价
server.badges.badge_store: |-
  印记商城
server.badges.badge_unshelve: |-
  下架时间
server.badges.badges_center: |-
  印记中心
server.badges.index_badge: |-
  印记
server.badges.sold_out: |-
  已售空
server.badges.you_do_not_display_any_badge: |-
  你已经拥有印记，但没有设置展示，所以这里空空如也哟~
server.badges.you_do_not_have_any_badge: |-
  你还没有任何印记，无法装扮自己的印记展示区哦~
server.blog.body: |-
  正文
server.blog.by: |-
  发布者是
server.blog.create_a_blog_post: |-
  发布博文
server.blog.create_staff_blog_post: |-
  新建管理组博文
server.blog.discuss_this_post_here: |-
  点此讨论
server.blog.do_you_want_to_delete_this: |-
  确定要删除这篇博文吗？
server.blog.edit_blog_post: |-
  编辑博文
server.blog.edit_staff_blog_post: |-
  编辑管理组博文
server.blog.important: |-
  重要
server.blog.please_enter_a_title: |-
  请输入标题。
server.blog.posted: |-
  发布于
server.blog.remove_link: |-
  取消关联
server.blog.staff_blog: |-
  管理组博客
server.blog.thread_id: |-
  主题 ID
server.blog.thread_id_note: |-
  （留空以自动生成主题，填 0 则不生成主题）
server.blog.title: |-
  标题
server.bonus.about_bonus_points: |-
  积分规则
server.bonus.bbcode_allowed: |-
  允许 BBCode
server.bonus.bonus_point_rates: |-
  积分计算
server.bonus.bonus_points_purchase_history: |-
  积分消费历史
server.bonus.bonus_points_shop: |-
  积分商城
server.bonus.bonus_points_spending_history: |-
  积分消费历史
server.bonus.bonus_points_spending_history_for: |-
  %s的积分消费历史
server.bonus.bonus_points_title: |-
  积分商城 - 头衔
server.bonus.bonus_points_to_purchase: |-
  积分用于购买
server.bonus.bp_day: |-
  日积分
server.bonus.bp_hour: |-
  时积分
server.bonus.bp_month: |-
  月积分
server.bonus.bp_week: |-
  周积分
server.bonus.bp_year: |-
  年积分
server.bonus.checkout: |-
  结算
server.bonus.custom_title: |-
  用户自定义头衔
server.bonus.description: |-
  商品名
server.bonus.eliminate_a_hnr: |-
  消除一个 H&R
server.bonus.history: |-
  消费历史
server.bonus.invite: |-
  1 枚邀请
server.bonus.item: |-
  件商品
server.bonus.items: |-
  件商品
server.bonus.need_higher_user_class: |-
  等级不够
server.bonus.no_bbcode_allowed: |-
  不允许 BBCode
server.bonus.no_purchase_history: |-
  无消费历史。
server.bonus.no_torrent_seeded_currently: |-
  当前没有正在做种的种子。
server.bonus.other-1: |-
  将 1 枚令牌送与他人
server.bonus.other-2: |-
  将 10 枚令牌送与他人
server.bonus.other-3: |-
  将 50 枚令牌送与他人
server.bonus.period: |-
  。
server.bonus.points: |-
  积分
server.bonus.points_price: |-
  售价
server.bonus.purchase: |-
  购买
server.bonus.purchased: |-
  购买成功！
server.bonus.s_bonus_point_rate: |-
  &nbsp;的积分获取速率
server.bonus.seeders: |-
  做种
server.bonus.seedtime: |-
  做种时长
server.bonus.size: |-
  大小
server.bonus.statistical_size: |-
  统计大小
server.bonus.th_for: |-
  受惠人
server.bonus.th_item: |-
  项目
server.bonus.th_price: |-
  价格
server.bonus.th_purchase_date: |-
  购买日期
server.bonus.title-bb-n: |-
  用户自定义头衔（不允许 BBCode）
server.bonus.title-bb-y: |-
  用户自定义头衔（允许 BBCode）
server.bonus.title-off: |-
  移除用户自定义头衔
server.bonus.token-1: |-
  1 枚令牌
server.bonus.token-2: |-
  10 枚令牌
server.bonus.token-3: |-
  50 枚令牌
server.bonus.token-4: |-
  100 枚令牌
server.bonus.too_expensive: |-
  积分不足
server.bonus.torrent: |-
  种子
server.bonus.total_points: |-
  总积分
server.bonus.total_torrents: |-
  种子总数
server.bonus.upload-1: |-
  5GB 上传量
server.bonus.upload-2: |-
  50GB 上传量
server.bonus.upload-3: |-
  250GB 上传量
server.bonus.upload-4: |-
  500GB 上传量
server.bonus.you_cannot_afford_this_item: |-
  你的余额不足以支付此商品的价格。
server.bonus.you_have_spent: |-
  你已花费
server.bonus.your_bonus_point_rate: |-
  你的积分获取速率
server.bookmarks.add_some_torrents_and_come_back_later: |-
  添加一些种子，回头再来。
server.bookmarks.bookmark: |-
  加入收藏
server.bookmarks.bookmarked: |-
  已收藏
server.bookmarks.collages: |-
  合集
server.bookmarks.current_order: |-
  当前顺序
server.bookmarks.dont_notify_new: |-
  关闭新种提醒
server.bookmarks.drag_drop_textnote_torrents: |-
  <ul> <li>单击列标题的按钮以自动排序。</li> <li>按住 [Shift] 键并单击其他列标题，同时对多个列排序。</li> <li>拖放任意行以改变其顺序。</li> <li>双击以快速勾选一行。</li> </ul>
server.bookmarks.manage_torrents: |-
  管理种子
server.bookmarks.no_bookmarked_artists: |-
  你尚未收藏任何艺人
server.bookmarks.no_bookmarked_torrents: |-
  你尚未收藏任何种子
server.bookmarks.no_torrents_found: |-
  空空如也。
server.bookmarks.notify_new: |-
  新种提醒
server.bookmarks.order: |-
  顺序
server.bookmarks.organize_bookmarks: |-
  管理收藏
server.bookmarks.organize_torrent_bookmarks: |-
  管理种子收藏
server.bookmarks.remove: |-
  移除
server.bookmarks.remove_snatched: |-
  移出已完成种子
server.bookmarks.remove_snatched_confirm: |-
  你确定要将所有已完成种子移出收藏吗？
server.bookmarks.s_bookmarked_artists: |-
  &nbsp;收藏的艺人
server.bookmarks.s_bookmarked_torrent_groups: |-
  &nbsp;收藏的种子组
server.bookmarks.sorting: |-
  排序
server.bookmarks.stats: |-
  统计
server.bookmarks.top_artists: |-
  艺人排行
server.bookmarks.top_tags: |-
  标签排行
server.bookmarks.torrent_groups: |-
  种子组
server.bookmarks.year: |-
  年
server.bookmarks.your_bookmarked_artists: |-
  你收藏的艺人
server.bookmarks.your_bookmarked_torrent_groups: |-
  你收藏的电影
server.collages.a_collage_with_that_name_already_exists_1: |-
  同名合集已存在，但需要恢复，请 <a href=\"staffpm.php\">联系</a> 管理组。
server.collages.add_comment: |-
  发表评论
server.collages.add_to_collage: |-
  加入合集
server.collages.add_torrent_group: |-
  添加种子组
server.collages.add_torrent_group_note1: |-
  输入站点种子组的网页链接。
server.collages.add_torrent_group_note2: |-
  输入站点种子组的网页链接，每行一个。
server.collages.adder: |-
  添加者
server.collages.all: |-
  全部
server.collages.any: |-
  任一
server.collages.author: |-
  创建者
server.collages.batch_add: |-
  批量添加
server.collages.bookmarks_collages: |-
  合集收藏
server.collages.browse_collages: |-
  合集
server.collages.built_by_n_users: |-
  贡献者共计%s%s
server.collages.category: |-
  类别
server.collages.collage: |-
  合集
server.collages.collage_add_error: |-
  加入失败
server.collages.collage_add_success: |-
  加入成功
server.collages.collage_id: |-
  合集 ID
server.collages.collage_is_completely_deleted: |-
  合集已被删除
server.collages.collage_recovery: |-
  合集恢复
server.collages.collage_search: |-
  搜索合集
server.collages.collagecats:
  '1': |-
    私人合集
  '2': |-
    主题合集
  '3': |-
    类型介绍
  '4': |-
    系列电影
  '5': |-
    制片公司
  '6': |-
    管理精选
  '7': |-
    影评榜单
  '8': |-
    获奖名录
server.collages.collages: |-
  合集
server.collages.collages_list: |-
  合集总览
server.collages.comments: |-
  评论
server.collages.contributed_collages: |-
  你参与的合集
server.collages.create_collages: |-
  创建合集
server.collages.delete_collage: |-
  删除合集
server.collages.delete_confirm: |-
  你确定要删除该合集吗？
server.collages.delete_warning: |-
  警告：这是一个私人合集。如果你删掉，它是<em>不能</em>恢复的！
server.collages.description: |-
  描述
server.collages.drag_drop_textnote: |-
  <ul> <li>单击列标题的按钮以自动排序。</li> <li>按住 [Shift] 键并单击其他列标题，同时对多个列排序。</li> <li>拖放任意行以改变其顺序。</li> <li>结束排序，请点击 “保存” 以保存结果。</li> <li>点击 “Edit” 或 “Remove” 来修改单个条目。</li> </ul>
server.collages.edit_collage: |-
  编辑合集
server.collages.edit_description: |-
  编辑描述
server.collages.edit_tags: |-
  标签
server.collages.featured: |-
  推荐
server.collages.featured_title: |-
  “推荐” 的私人合集及其内含种子的部分预览会在你的个人页面展示出来。
server.collages.ft_order: |-
  排序
server.collages.ftb_searchstr: |-
  搜索关键词
server.collages.individual_add: |-
  单个添加
server.collages.last_updated: |-
  最近更新
server.collages.locked: |-
  锁定
server.collages.manage_collage: |-
  管理合集
server.collages.manage_torrents: |-
  管理电影
server.collages.max_groups: |-
  影片数上限
server.collages.max_groups_per_user: |-
  单用户影片添加上限
server.collages.name: |-
  名称
server.collages.new_category: |-
  类别
server.collages.new_category_note: |-
  <li><strong>主题合集：</strong>与特定主题相关的电影（如「武侠电影」「抗战电影」等）；</li> <li><strong>类型介绍：</strong>由本站用户所编撰的对某一电影类型的主观性介绍；</li> <li><strong>制片公司：</strong>来自某一特定制片公司的所有电影；</li> <li><strong>管理精选：</strong>由管理员或特定级别的用户在特定场合下挑选的推荐电影清单；</li> <li><strong>获奖名录：</strong>包含了在某一奖项中获奖和提名的电影（如「中国电影金鸡奖」「大众电影百花奖」「中国电影华表奖」）；</li> <li><strong>系列电影：</strong>包含了同一主题且故事具有关联性的一系列电影（如《钢铁侠》三部，《复仇者联盟》四部）；</li> <li><strong>影评榜单：</strong>由较为权威的个人或组织按一定标准选出的一批电影（如「IMDb Top 1000」「豆瓣电影 Top 250」等）；</li>
server.collages.new_category_note2: |-
  <li><strong>私人合集：</strong>专属于你个人的合集，想放啥都可以。</li>
server.collages.new_create: |-
  创建合集
server.collages.new_description: |-
  描述
server.collages.new_name: |-
  名称
server.collages.new_note: |-
  <strong>请确保你创建的合集符合 <a href='rules.php?p=collages'>合集规则</a>。</strong>
server.collages.open_collage: |-
  查看合集
server.collages.order: |-
  顺序
server.collages.personal_collage: |-
  私人合集
server.collages.personal_collages: |-
  私人合集
server.collages.please_select_a_category: |-
  请选择一个类别
server.collages.random_collages: |-
  随机合集
server.collages.reason: |-
  原因
server.collages.recover_collages: |-
  恢复合集
server.collages.recover_deleted_collage: |-
  已删合集恢复
server.collages.report: |-
  报告
server.collages.report_collage: |-
  报告合集
server.collages.result_1: |-
  你并未收藏任何合集。
server.collages.result_2: |-
  搜索结果空空如也
server.collages.result_3: |-
  请确认名称拼写准确无误，或是降低搜索条件
server.collages.search: |-
  搜索
server.collages.search_ascending: |-
  升序
server.collages.search_descending: |-
  降序
server.collages.search_descriptions: |-
  描述
server.collages.search_for: |-
  搜索范围
server.collages.search_name: |-
  名称
server.collages.search_subscribers: |-
  订阅数
server.collages.search_time: |-
  创建时间
server.collages.search_torrents: |-
  种子数
server.collages.search_updated: |-
  最近更新
server.collages.selected_collage_author: |-
  创建者
server.collages.selected_collage_category: |-
  类别
server.collages.selected_collage_description: |-
  描述
server.collages.sorting: |-
  排序方法
server.collages.start_collages: |-
  你发起的合集
server.collages.statistics: |-
  统计
server.collages.subscribe: |-
  订阅新种
server.collages.subscribed_collages: |-
  合集订阅
server.collages.subscribers: |-
  订阅数
server.collages.tags: |-
  标签 (逗号分隔)
server.collages.that_collage_already_exists_1: |-
  同名合集已存在，但需要恢复，请 <a href=\"staffpm.php\">联系</a> 管理组。
server.collages.the_description_must_between: |-
  描述须介于 10~65535 字符之间
server.collages.the_name_must_between: |-
  名称须介于 3~100 字符之间
server.collages.top_artists: |-
  艺人排行
server.collages.top_contributors: |-
  贡献者排行
server.collages.top_tags: |-
  标签排行
server.collages.tweak: |-
  调整
server.collages.tweak_title: |-
  修改单个条目
server.collages.type: |-
  类别
server.collages.unsubscribe: |-
  退订新种
server.collages.updated: |-
  最近更新
server.collages.user_one: |-
  人
server.collages.user_other: |-
  人
server.collages.user_s_personal_collage: |-
  &nbsp;的私人合集
server.collages.you_may_not_create_a_personal_collage: |-
  你不能再创建私人合集了。
server.collages.your_bookmarked_collages: |-
  你收藏的合集
server.collages.your_personal_collage_must: |-
  你的私人合集名称内须含有你的用户名。
server.comments.artist_comments: |-
  艺人评论
server.comments.artist_comments_left_by_user: |-
  %s发布的艺人评论
server.comments.collage_comments: |-
  合集评论
server.comments.collage_comments_left_by_user: |-
  %s发布的合集评论
server.comments.collages_created_by: |-
  &nbsp;%s&nbsp;所创建合集
server.comments.comments_left_on_collages_user_created: |-
  &nbsp;%s&nbsp;所创建合集中的评论
server.comments.comments_left_on_collages_user_has_contributed_to: |-
  %s所参与合集中的评论
server.comments.comments_left_on_requests_user_created: |-
  %s所发布求种中的评论
server.comments.comments_left_on_requests_user_has_voted_on: |-
  %s所投票求种中的评论
server.comments.comments_left_on_torrents_user_has_uploaded: |-
  %s所发布种子中的评论
server.comments.display_comments_left_on_collages_user_has_contributed_to: |-
  显示%s所参与合集中的评论
server.comments.display_comments_left_on_collages_user_has_made: |-
  显示%s发布的合集评论
server.comments.display_comments_left_on_requests_user_created: |-
  显示%s所发布求种中的评论
server.comments.display_comments_left_on_requests_user_has_made: |-
  显示%s发布的求种评论
server.comments.display_comments_left_on_requests_user_has_voted_on: |-
  显示%s所投票求种中的评论
server.comments.display_comments_left_on_torrents_user_has_made: |-
  显示%s发布的种子评论
server.comments.display_comments_left_on_torrents_user_has_uploaded: |-
  显示%s所发布种子中的评论
server.comments.display_comments_left_on_users_collages: |-
  显示%s中的评论
server.comments.no_results: |-
  空空如也。
server.comments.request_comments: |-
  求种评论
server.comments.request_comments_left_by_user: |-
  %s发布的求种评论
server.comments.space_on_space: |-
  &nbsp;于&nbsp;
server.comments.torrent_comments: |-
  种子评论
server.comments.torrent_comments_left_by: |-
  %s发布的种子评论
server.comments.user_has: |-
  &nbsp;%s&nbsp;
server.comments.username_space: |-
  &nbsp;%s&nbsp;
server.comments.you: |-
  我
server.comments.you_ve: |-
  我
server.comments.your_collages: |-
  我所创建合集
server.common.actions: |-
  操作
server.common.add: |-
  添加
server.common.add_bookmark: |-
  加入收藏
server.common.artist: |-
  艺人
server.common.artists: |-
  艺人
server.common.bonus: |-
  积分
server.common.collages: |-
  合集
server.common.collapse_this_edition_title: |-
  折叠本次分组。在左键单击的同时按住 [Command] <em>(Mac)</em> 或 [Ctrl] <em>(PC)</em> 键以折叠本影片中所有的次分组。
server.common.collapse_this_group_title: |-
  折叠本影片。在左键单击的同时按住 [Command] <em>(Mac)</em> 或 [Ctrl] <em>(PC)</em> 键以折叠本页面所有的影片。
server.common.comma_separated: |-
  以英文逗号分隔
server.common.comma_separated_edition: |-
  以英文逗号分隔各版本信息
server.common.countries_and_regions: |-
  国家和地区
server.common.date: |-
  日期
server.common.delete: |-
  删除
server.common.modify: |-
  修改
server.common.director: |-
  导演
server.common.douban_rating: |-
  豆瓣评分
server.common.download: |-
  下载
server.common.downloaded: |-
  下载量
server.common.edit: |-
  编辑
server.common.edition_info: |-
  版本信息
server.common.enable_requests: |-
  &nbsp;账号恢复申请
server.common.error: |-
  错误
server.common.error_403_description: |-
  你刚刚试图查看你无权访问的页面。
server.common.error_403_title: |-
  错误 403
server.common.error_404_description: |-
  你刚刚试图查看不存在的页面。
server.common.error_404_title: |-
  错误 404
server.common.external_subtitles: |-
  外挂
server.common.feature_film: |-
  长片
server.common.fltoken: |-
  令牌
server.common.format: |-
  格式
server.common.forums: |-
  论坛
server.common.github: |-
  GitHub
server.common.gpw_rating: |-
  GPW 评分
server.common.hide: |-
  隐藏
server.common.image_host: |-
  图床
server.common.imdb_rating: |-
  IMDb 评分
server.common.in_torrent_hard_subtitles: |-
  硬字
server.common.in_torrent_subtitles: |-
  内封
server.common.inbox: |-
  我的信箱
server.common.include_all_aliases: |-
  同时搜索所有别名
server.common.index: |-
  首页
server.common.invalid_input_description: |-
  你发出的请求提供了无效输入，服务器拒绝完成该请求。
server.common.invalid_input_title: |-
  无效输入
server.common.invalid_request_description: |-
  你发出的请求存在错误，服务器拒绝完成该请求。
server.common.invalid_request_title: |-
  无效请求
server.common.invite: |-
  邀请
server.common.jump_to_last_read: |-
  跳转到最近的已读帖子
server.common.lang_chs: |-
  简体中文
server.common.lang_en: |-
  English
server.common.language: |-
  语言
server.common.language_region: |-
  语言和地区
server.common.leechers: |-
  下载
server.common.live_performance: |-
  现场演出
server.common.log: |-
  日志
server.common.logout: |-
  注销
server.common.menu_upload_title: |-
  上传／发布
server.common.miniseries: |-
  迷你剧
server.common.missing: |-
  空槽总览
server.common.movie_collection: |-
  电影集
server.common.movie_name: |-
  电影名
server.common.movie_name_title: |-
  电影名或 IMDb ID
server.common.my_badges: |-
  印记管理
server.common.my_bookmarks: |-
  我的收藏
server.common.my_comments: |-
  我的评论
server.common.my_friends: |-
  我的好友
server.common.my_notify: |-
  RSS 推送
server.common.my_subscriptions: |-
  订阅管理
server.common.my_uploaded: |-
  我的发布
server.common.n_fl_token_one: |-
  %s 枚免费令牌
server.common.n_fl_token_other: |-
  %s 枚免费令牌
server.common.no_torrent_tags: |-
  无标签
server.common.not_seeded_sure_use_fl: |-
  注意！该种子目前无人做种，你确定要为它使用 %s 吗？
server.common.others: |-
  其他
server.common.profile: |-
  账号
server.common.rating: |-
  评分
server.common.ratio: |-
  分享率
server.common.remove: |-
  删除
server.common.remove_bookmark: |-
  移出收藏
server.common.rename: |-
  重命名
server.common.report: |-
  报告
server.common.requests: |-
  求种
server.common.required_ratio: |-
  合格分享率
server.common.revision: |-
  版本号
server.common.rss: |-
  RSS
server.common.rt_rating: |-
  烂番茄评分
server.common.rules: |-
  规则
server.common.search: |-
  搜索
server.common.seeders: |-
  做种
server.common.setting: |-
  设置
server.common.short_film: |-
  短片
server.common.show: |-
  显示
server.common.size: |-
  大小
server.common.snatched: |-
  已完成
server.common.ssp: |-
  代理
server.common.staff: |-
  管理
server.common.staffpm: |-
  管理私信
server.common.stand_up_comedy: |-
  单口喜剧
server.common.submit: |-
  提交
server.common.subscribe: |-
  订阅
server.common.subtitle: |-
  字幕
server.common.subtitles: |-
  字幕
server.common.summary: |-
  摘要
server.common.sure_use_fl: |-
  你确定要为它使用 %s 吗？
server.common.tags: |-
  标签
server.common.telegram: |-
  Telegram
server.common.time: |-
  时间
server.common.toggle: |-
  显隐
server.common.top_10: |-
  排行
server.common.torrent: |-
  种子
server.common.torrents: |-
  种子
server.common.type: |-
  片种
server.common.unexpected_error_description: |-
  你遇到了预期之外的错误。
server.common.unexpected_error_title: |-
  预期之外的错误
server.common.unsubscribe: |-
  退订
server.common.uploaded: |-
  上传量
server.common.use_fl_tokens: |-
  使用令牌免费下载
server.common.user: |-
  用户
server.common.users: |-
  用户
server.common.view_torrent: |-
  查看种子
server.common.wiki: |-
  Wiki
server.common.year: |-
  年
server.donate.added_time: |-
  时间
server.donate.bronze_rank: |-
  青铜
server.donate.card_num: |-
  卡号
server.donate.card_num_length: |-
  17 位数字
server.donate.card_secret: |-
  卡秘
server.donate.card_secret_length: |-
  18 位数字
server.donate.copper_rank: |-
  黄心
server.donate.diamond_rank: |-
  钻石
server.donate.donate: |-
  捐助
server.donate.donate_error: |-
  系统错误
server.donate.donor_ranks: |-
  捐助等级
server.donate.duplicated_card: |-
  该充值卡已被使用！
server.donate.face_value: |-
  面值
server.donate.failed: |-
  失败
server.donate.gold_rank: |-
  黄金
server.donate.has_pending_donation: |-
  &nbsp;条未处理的捐助
server.donate.history: |-
  历史
server.donate.how_to_donate: |-
  如何捐助？
server.donate.incorrect_card_num: |-
  请填写正确的卡号信息！
server.donate.incorrect_card_secret: |-
  请填写正确的卡密信息！
server.donate.incorrect_face_value: |-
  请选择正确的面值！
server.donate.invites: |-
  邀请名额
server.donate.pending: |-
  处理中
server.donate.personal_collages: |-
  个人合集
server.donate.prepaid_card: |-
  充值卡捐助
server.donate.profile_info: |-
  个人介绍
server.donate.progress: |-
  捐助（已达到年目标的 %d%%）
server.donate.red_rank: |-
  爱心
server.donate.silver_rank: |-
  白银
server.donate.status: |-
  状态
server.donate.success: |-
  成功
server.donate.tutorials: |-
  教程
server.donate.unlockable_reward: |-
  可解锁奖励
server.donate.unlockable_reward_1: |-
  免疫 <a href=\"/wiki.php?action=article&id=73\">账号不活跃</a>
server.donate.unlockable_reward_2: |-
  捐助图标鼠标悬停文本
server.donate.unlockable_reward_3: |-
  头像鼠标悬停文本
server.donate.unlockable_reward_4: |-
  捐助图标外部链接
server.donate.unlockable_reward_5: |-
  自定义捐助图标、捐助者版块访问权
server.donate.view_donor_perks_img: |-
  查看捐助等级福利图解
server.donate.view_donor_system_faq: |-
  查看捐助系统常见问题解答
server.donate.want_donate: |-
  我想捐助
server.donate.what_will_receive: |-
  捐助之后你能获得
server.donate.what_wont_receive: |-
  捐助之后你不能获得
server.donate.why_donate: |-
  关于捐助<strong class=\"u-colorWarning\">（必读）</strong>
server.donate.yuan: |-
  元
server.editioninfo.10_bit: |-
  10-bit
server.editioninfo.2_disc_set: |-
  双碟套装
server.editioninfo.2_in_1: |-
  二合一
server.editioninfo.2d_3d_edition: |-
  2D/3D版
server.editioninfo.3d_anaglyph: |-
  红蓝3D
server.editioninfo.3d_full_sbs: |-
  全宽3D
server.editioninfo.3d_half_ou: |-
  半高3D
server.editioninfo.3d_half_sbs: |-
  半宽3D
server.editioninfo.4k_remaster: |-
  4K重制版
server.editioninfo.4k_restoration: |-
  4K修复版
server.editioninfo.collections: |-
  珍藏集
server.editioninfo.director_s_cut: |-
  导演剪辑版
server.editioninfo.dolby_atmos: |-
  杜比全景声
server.editioninfo.dolby_vision: |-
  杜比视界
server.editioninfo.dts_x: |-
  DTS:X
server.editioninfo.dual_audio: |-
  双音轨
server.editioninfo.editions: |-
  版本
server.editioninfo.english_dub: |-
  英语配音
server.editioninfo.extended_edition: |-
  加长版
server.editioninfo.extras: |-
  额外内容
server.editioninfo.features: |-
  特点
server.editioninfo.hdr10: |-
  HDR10
server.editioninfo.hdr10plus: |-
  HDR10+
server.editioninfo.masters_of_cinema: |-
  电影大师
server.editioninfo.remaster: |-
  重制版
server.editioninfo.remux: |-
  Remux
server.editioninfo.rifftrax: |-
  RiffTrax
server.editioninfo.the_criterion_collection: |-
  标准收藏
server.editioninfo.theatrical_cut: |-
  影院版
server.editioninfo.uncut: |-
  未删减版
server.editioninfo.unrated: |-
  未分级版
server.editioninfo.warner_archive_collection: |-
  华纳档案馆
server.editioninfo.with_commentary: |-
  评论音轨
server.forums.after: |-
  晚于
server.forums.answers: |-
  选项
server.forums.as_system: |-
  系统
server.forums.author: |-
  作者
server.forums.auto_locked: |-
  自动锁定
server.forums.before: |-
  早于
server.forums.blank: |-
  弃权 - 显示结果
server.forums.blank_show_results: |-
  留空&#8202;&mdash;&#8202;显示结果！
server.forums.body: |-
  正文
server.forums.bonus: |-
  积分
server.forums.bonus_giver: |-
  赠送人
server.forums.bonus_giving: |-
  赠送积分
server.forums.bonus_reward: |-
  积分奖励
server.forums.by: |-
  发帖人是
server.forums.by_user_just_now: |-
  &nbsp;刚刚发布
server.forums.cant_like_yourself: |-
  无法赞自己。
server.forums.catch_up: |-
  全部设置已读
server.forums.change_specific_rules: |-
  更改版规
server.forums.check_all: |-
  全选
server.forums.checkbox_merge: |-
  合并
server.forums.checkbox_subscribe: |-
  订阅
server.forums.closed: |-
  已结束
server.forums.comment_optional: |-
  评论（可选）
server.forums.comments: |-
  评论
server.forums.confirm: |-
  确定
server.forums.create_one: |-
  发布一个！
server.forums.customize: |-
  自定义
server.forums.delete_poll_option: |-
  删除投票选项
server.forums.delete_poll_option_title: |-
  你确定想要删除该投票选项？
server.forums.delete_thread: |-
  删除主题
server.forums.dont_auto_locked: |-
  不自动锁定
server.forums.edit_forum_specific_rules: |-
  编辑版规
server.forums.edit_thread: |-
  编辑主题
server.forums.either_the_thread_is_locked_or: |-
  帖子已锁定，或是你没有编辑此帖子的权限。
server.forums.featured: |-
  首页显示
server.forums.forum: |-
  版块
server.forums.forum_specific_rules: |-
  版规
server.forums.forums: |-
  论坛
server.forums.forums_greater_than_search: |-
  论坛 &gt; 搜索
server.forums.index_refresh: |-
  首页显示
server.forums.jump_to_last_read: |-
  跳转到最近的已读帖子
server.forums.last_edit_by: |-
  最近由 %s 编辑于
server.forums.last_edited_by: |-
  最近由 %s 编辑于
server.forums.last_post: |-
  最新回帖
server.forums.last_post_time: |-
  最近回帖时间
server.forums.latest: |-
  最新主题
server.forums.like: |-
  赞
server.forums.limited: |-
  限投%s项
server.forums.locked: |-
  锁定
server.forums.missing_votes: |-
  弃权票
server.forums.move_thread: |-
  移动主题到
server.forums.new_thread: |-
  发布主题
server.forums.new_topic: |-
  新主题
server.forums.no_threads_in_forum: |-
  本版空空如也。
server.forums.only_starter: |-
  回帖仅楼主可见
server.forums.only_tc: |-
  TC 专用
server.forums.personal_reward: |-
  个人奖励
server.forums.please_select_an_option: |-
  请选择一项。
server.forums.poll: |-
  投票
server.forums.poll_settings: |-
  投票设置
server.forums.post_bodies: |-
  帖子内容
server.forums.post_by: |-
  发帖人
server.forums.post_comment: |-
  评论
server.forums.post_created: |-
  帖子发布时间
server.forums.post_reply: |-
  发帖
server.forums.posted_by: |-
  发帖人
server.forums.posts: |-
  帖子
server.forums.question: |-
  问题
server.forums.quote: |-
  回复
server.forums.ranking: |-
  排序
server.forums.replies: |-
  回帖
server.forums.report: |-
  报告
server.forums.search: |-
  搜索
server.forums.search_for: |-
  搜索关键字
server.forums.search_forums: |-
  搜索版块
server.forums.search_in: |-
  搜索范围
server.forums.search_this_forum: |-
  搜索本版
server.forums.search_this_thread: |-
  搜索回帖
server.forums.service_stats: |-
  刷新
server.forums.sticky: |-
  置顶
server.forums.sticky_title: |-
  置顶本帖
server.forums.submit_poll_title: |-
  确定发布此投票？
server.forums.subscribe_to_topic: |-
  订阅该主题
server.forums.the_same_as_thread: |-
  与本版设置相同
server.forums.there_are_no_topics: |-
  版块内暂无主题。
server.forums.thread_id: |-
  主题 ID
server.forums.thread_notes: |-
  主题备注
server.forums.title: |-
  标题
server.forums.titles: |-
  标题
server.forums.topic: |-
  主题
server.forums.topic_created: |-
  主题发布时间
server.forums.topic_creation_time: |-
  主题发布时间
server.forums.topics: |-
  主题
server.forums.unknown_username: |-
  &nbsp;（未知用户名）
server.forums.unsticky_title: |-
  取消置顶
server.forums.username: |-
  用户名
server.forums.view: |-
  查看
server.forums.voters: |-
  参与人数
server.forums.votes: |-
  票数
server.forums.warn: |-
  警告
server.forums.you_can_t_award_yourself: |-
  ：你无法对自己评分
server.forums.your_posting_privileges_removed: |-
  你的帖子编辑权限已被封禁。
server.friends.down: |-
  下载量
server.friends.friends: |-
  好友
server.friends.friends_list: |-
  好友列表
server.friends.ratio: |-
  分享率
server.friends.up: |-
  上传量
server.friends.you_have_no_friends: |-
  你还没交到朋友 _(:з」∠)_
server.inbox.a_recipient_does_not_exist: |-
  收件人不存在。
server.inbox.back_to_inbox: |-
  返回收件箱
server.inbox.body: |-
  内容
server.inbox.cannot_send_msg_without_body: |-
  你不能发送没有内容的私信。
server.inbox.cannot_send_msg_without_subject: |-
  你不能发送没有主题的私信。
server.inbox.compose: |-
  撰写私信
server.inbox.date: |-
  日期
server.inbox.delete_conversation: |-
  删除对话
server.inbox.delete_messages: |-
  删除信件
server.inbox.expire_rank_pm: |-
  你的捐助等级还有两天就会到期，届时，你还会拥有额外两天宽限期，在宽限期过去后，你的捐助等级就会下降一级。
server.inbox.expire_rank_sbj: |-
  你的捐助等级即将下降
server.inbox.forward_conversation: |-
  转发对话
server.inbox.forward_to: |-
  转发给
server.inbox.forwarded_to: |-
  转发
server.inbox.get_special_rank_five_pm: |-
  恭喜你达到 [url=wiki.php?action=article&id=277]特殊等级 5[/url]！你现在是[b]钻石捐助者[/b]了！你已永久激活所有捐助等级所涉及的所有奖励，海豚感谢你的奉献！
  {{CONFIG['SITE_NAME']}} Staff
server.inbox.get_special_rank_five_sbj: |-
  你已达到特殊等级 5！你获得了：钻石捐助等级。详情请见正文。
server.inbox.get_special_rank_four_pm: |-
  恭喜你达到 [url=wiki.php?action=article&id=277]特殊等级 4[/url]！你获得了[b]第二头像[/b]！你可前往设置页面的个人设置部分设定你的第二头像，在鼠标移动到你的头像上时，它就能自动切换显示第二头像。
  {{CONFIG['SITE_NAME']}} Staff
server.inbox.get_special_rank_four_sbj: |-
  你已达到特殊等级 4！你获得了：第二头像。详情请见正文。
server.inbox.get_special_rank_one_pm: |-
  恭喜你达到 [url=wiki.php?action=article&id=277]特殊等级 1[/url]！你现在已经能够免疫 [url=wiki.php?action=article&id=73]账号不活跃[/url] 了。祝你玩得开心！
  {{CONFIG['SITE_NAME']}} Staff
server.inbox.get_special_rank_one_sbj: |-
  你已达到特殊等级 1！你获得了：免疫不活跃。详情请见正文。
server.inbox.get_special_rank_three_pm: |-
  恭喜你达到 [url=wiki.php?action=article&id=277]特殊等级 3[/url]！你赢得了[b]一次用户指定[/b]！你指定的电影会在 {{CONFIG['SITE_NAME']}} 首页亮相。在你提交选择后，我们无法保证你选择的电影的具体上线时间。用户指定电影将按照先到先得的顺序排列。指定时请遵循以下准则： [*]请指定尚未当选过推荐电影的电影。你可以在论坛里找到过往的推荐电影。 [*]仔细完整地填写所附表格。 [*]关于你所指定电影的具体安排、上线时间，请发送 [url=staffpm.php]Staff PM[/url] 询问。
  {{CONFIG['SITE_NAME']}} Staff
server.inbox.get_special_rank_three_sbj: |-
  你已达到特殊等级 3！你获得了：一次用户指定。详情请见正文。
server.inbox.get_special_rank_two_pm: |-
  恭喜你达到 [url=wiki.php?action=article&id=277]特殊等级 2[/url]！你获得了一枚 [url=badge.php]捐助纪念印记[/url]。祝你玩得开心！
  {{CONFIG['SITE_NAME']}} Staff
server.inbox.get_special_rank_two_sbj: |-
  你已达到特殊等级 2！你获得了：一枚捐助印记。详情请见正文。
server.inbox.inbox: |-
  收件箱
server.inbox.is_empty: |-
  是空的。
server.inbox.list_latest_first: |-
  最新优先
server.inbox.list_unread_first: |-
  未读优先
server.inbox.manage_conversation: |-
  管理对话
server.inbox.mark_as_read: |-
  标为已读
server.inbox.mark_as_unread: |-
  标为未读
server.inbox.message: |-
  内容
server.inbox.message_from: |-
  来自 %s 的消息
server.inbox.no_results: |-
  空空如也。
server.inbox.placeholder_search: |-
  搜索
server.inbox.quote: |-
  回复
server.inbox.quote_if_disagree_unfill_please_url: |-
  [/quote]
  如果你认为对应求的否决并不合理，请 [url=
server.inbox.receiver: |-
  收件人
server.inbox.reply: |-
  回复
server.inbox.report_request_and_explain: |-
  ]报告求种[/url] 并解释它不该被否决的具体原因。
server.inbox.request_filled_unfilled: |-
  你有一个应求被否决
server.inbox.send_a_message_to_user: |-
  向 %s 发送私信
server.inbox.send_message: |-
  发送
server.inbox.sender: |-
  发件人
server.inbox.sentbox: |-
  发件箱
server.inbox.sticky: |-
  置顶对话
server.inbox.subject: |-
  主题
server.inbox.the_request_url: |-
  求种 \"[url=
server.inbox.this_recipient_does_not_exist: |-
  收件人不存在。
server.inbox.url_for_the_reason_quote: |-
  [/url] 所否决，理由是：[quote]
server.inbox.url_was_unfilled_by_url: |-
  [/url]\" 的应求被 [url=
server.inbox.user: |-
  用户
server.inbox.view_conversation_space: |-
  对话主题&nbsp;
server.inbox.you_cannot_start_a_conversation_with_yourself: |-
  你不能向自己发起对话！
server.inbox.your: |-
  你的
server.index.add_more: |-
  加载更多
server.index.announcements: |-
  公告
server.index.blank: |-
  弃权 - 显示结果
server.index.blog_note: |-
  博客
server.index.cleader: |-
  竞赛排行榜
server.index.click_here: |-
  请点此
server.index.collage: |-
  合集
server.index.day_visit: |-
  今日访问
server.index.details: |-
  详情
server.index.discuss: |-
  讨论
server.index.enable_users: |-
  生效用户
server.index.featured_item: |-
  电影推荐
server.index.filled: |-
  已应求
server.index.fproduct: |-
  推荐商品
server.index.fproduct_title: |-
  推荐商品图
server.index.hide: |-
  隐藏
server.index.index: |-
  首页
server.index.latest_thread: |-
  最新回帖
server.index.links: |-
  相关链接
server.index.mon_visit: |-
  本月访问
server.index.moviegroups: |-
  电影
server.index.mystery: |-
  天机不可泄露！
server.index.peers: |-
  同伴数
server.index.period: |-
  。
server.index.poll: |-
  投票
server.index.popular_movies: |-
  热门电影
server.index.product_note: |-
  你可能想在这里放一张图。
server.index.product_page: |-
  商品页面
server.index.s_l_ratio: |-
  做种/下载比
server.index.show: |-
  显示
server.index.snatches: |-
  已完成
server.index.staff_note: |-
  管理组博客
server.index.stats: |-
  统计
server.index.topic: |-
  主题
server.index.user_limit: |-
  用户限值
server.index.visit: |-
  访问
server.index.vote: |-
  投票
server.index.wek_visit: |-
  本周访问
server.log.message: |-
  日志内容
server.log.nothing_found: |-
  空空如也！
server.log.period: |-
  。
server.log.search_for: |-
  搜索关键词
server.log.search_request_failed: |-
  搜索请求失败
server.log.site_log: |-
  站点日志
server.log.time: |-
  时间
server.login.2fa_key: |-
  验证码
server.login.approved: |-
  批准
server.login.attempts: |-
  你还剩余 %s &nbsp;次登录尝试机会。<br />
  警告：超过登录次数限制将被限制 6 小时。
server.login.back: |-
  返回
server.login.cookies_disabled: |-
  你似乎禁用了 Cookies。
server.login.denied: |-
  拒绝
server.login.disabled: |-
  已被禁用
server.login.disabled_note1: |-
  你的账号已被禁用。<br />这可能是由于不活跃或违规造成的。<br /><br /></p>
server.login.disabled_note2: |-
  如果你确信自己的账号信誉良好且是由于不活跃而被禁用的，你可以在下面方框内通过邮件恢复它。<br />请注意，你需要使用与 {{CONFIG['SITE_NAME']}} 账号相关联的电子邮件来进行此操作；<br />如果你不确定原因，请查看输入框下面的说明。<br /><br />
server.login.disabled_note3: |-
  如果你不确定何原因导致账号被禁用，或者你希望找管理组询问情况，可以进入我们的 <a href='{{CONFIG['TG_DISBALE_CHANNEL']}}'>Telegram 申诉频道</a>。<br /><br /><strong>在进入 IRC 或 Telegram 频道之前，请再次阅读 <a style='color: #ffbb33;' href='#' onclick=\"toggle_visibility('golden_rules')\">黄金规则</a>。</strong><br /><br />进入频道后，请阅读公告。<br /><br />请注意，<strong>不诚实</strong>会导致你永远无缘 {{CONFIG['SITE_NAME']}}。<br />
server.login.email: |-
  电子邮箱
server.login.email_address_placeholder: |-
  邮箱地址
server.login.email_send: |-
  邮件已发送，请根据其中的提示重设你的密码。
server.login.enable_request_id_by_user: |-
  &nbsp;- 恢复申请 %s，处理人是&nbsp;
server.login.enable_request_id_unresolved_by: |-
  &nbsp;- 恢复申请 %s 已被标为未处理，处理人是&nbsp;
server.login.enable_request_received_from_ip: |-
  &nbsp;- 恢复申请 %s 已被送达，它提交自&nbsp;
server.login.enable_request_rejected_from_ip: |-
  &nbsp;- 恢复申请已被拒绝，它提交自&nbsp;
server.login.enter_valid_email: |-
  请输入一个有效的邮箱。
server.login.err_1: |-
  你的账号还未激活，<br />请检查注册邮箱是否收到激活邮件。
server.login.err_2: |-
  账号或密码不正确
server.login.find_pw: |-
  点此找回密码
server.login.forget_pw: |-
  忘记密码?
server.login.invalid_token: |-
  无效的通行令。
server.login.login: |-
  登录
server.login.new_password: |-
  输入新密码
server.login.outcome_approved: |-
  批准
server.login.outcome_discarded: |-
  忽略
server.login.outcome_rejected: |-
  拒绝
server.login.password: |-
  密　码
server.login.password_send: |-
  你的密码已成功重置。<br /> 请<a href='login.php'>点此</a>登录 {{CONFIG['SITE_NAME']}}。
server.login.re_enable_request_received: |-
  你的账号恢复申请已被送达。你会在 72 小时内收到一封回信。<br />如果你在 72 小时后仍未收到邮件，请通过 IRC 或 <a href='{{CONFIG['TG_DISBALE_CHANNEL']}} '>Telegram</a> 同管理员取得联系。
server.login.re_enable_request_rejected: |-
  你的账号恢复申请已被拒收。<br />这可能是因为之前已经提交的申请尚未被处理，或最近的申请确实已被拒绝。<br /><br />请通过 IRC 或 <a href='{{CONFIG['TG_DISBALE_CHANNEL']}}'>Telegram</a> 同管理员取得联系。
server.login.re_new_password: |-
  确认新密码
server.login.reason: |-
  原因
server.login.recovery: |-
  重设密码
server.login.recovery_1: |-
  重设密码——第一步
server.login.recovery_2: |-
  重设密码——即将完成
server.login.recovery_2_note: |-
  一个比较安全的密码的长度应大于等于 8 字符，包括至少 1 个小写和 1 个大写字母，且包含至少 1 个数字或符号，或是大于等于 20 个字符。<br /><br />
server.login.recovery_note: |-
  如果你提供的电子邮箱在本站有记录，它将会收到一封邮件，<br/>其中带有如何重设密码的相关信息。<br /><br />
server.login.remember_me: |-
  保持登录
server.login.requires_js: |-
  &nbsp;需要 JavaScript 才能运行。请在浏览器启用 JavaScript。
server.login.token_has_expired_please_visit: |-
  通行令已过期。请访问 %s 频道，它位于 %s，进入频道后，联系管理请求协助。
server.login.tried_to_use_an_expired_token: |-
  &nbsp;- 尝试在 %s 使用账号恢复通行令
server.login.two_factor_auth_key: |-
  两步验证码
server.login.two_factor_authentication: |-
  两步验证
server.login.use_2fa_recovery_code: |-
  使用两步验证恢复码
server.login.use_recovery_key: |-
  使用恢复码？
server.login.username: |-
  用户名
server.login.warning: |-
  你输入了错误的两步验证码，请再试一次。
server.login.warning_disable: |-
  你将被限制登录 %s。
server.login.you_are_banned_from_logging: |-
  你将被限制登录 %s。
server.login.your_account_has_been_enabled: |-
  账号已恢复，你现在可以登录了。<br>请确保在今晚 24:00 之前完成登录，否则你的账号会被再次禁用。
server.login.your_enable_request_for: |-
  你向 %s 提交的恢复申请已被
server.permissions.admin_advanced_user_search: |-
  能够访问高级用户搜索
server.permissions.admin_bp_history: |-
  能够看到其他用户的积分消费情况
server.permissions.admin_clear_cache: |-
  能够为页面清除缓存
server.permissions.admin_create_users: |-
  能够在后台给用户开号
server.permissions.admin_dnu: |-
  能够管理禁止发布列表
server.permissions.admin_donor_log: |-
  能够访问捐助日志
server.permissions.admin_interviewer: |-
  能够管理用户的入站申请
server.permissions.admin_login_watch: |-
  能够管理登录监控
server.permissions.admin_manage_applicants: |-
  能够管理招聘职位和用户申请
server.permissions.admin_manage_badges: |-
  能够管理印记
server.permissions.admin_manage_blog: |-
  能够管理站点博客
server.permissions.admin_manage_fls: |-
  能够管理一线支持 (FLS) 团队
server.permissions.admin_manage_forums: |-
  能够管理论坛版块 (添加／编辑／删除)
server.permissions.admin_manage_ipbans: |-
  能够管理 IP 封禁
server.permissions.admin_manage_news: |-
  能够管理站点新闻
server.permissions.admin_manage_permissions: |-
  能够编辑权限等级／用户权限
server.permissions.admin_manage_polls: |-
  能够管理投票
server.permissions.admin_manage_stylesheets: |-
  能够管理站点样式
server.permissions.admin_manage_user_fls: |-
  能够管理用户的免费令牌
server.permissions.admin_manage_wiki: |-
  能够管理 Wiki 访问权限设置
server.permissions.admin_reports: |-
  能够访问报告系统
server.permissions.admin_schedule: |-
  能够运行网站时间表
server.permissions.admin_send_bonus: |-
  能够在论坛使用系统评分
server.permissions.admin_update_geoip: |-
  能够更新 geoIP 数据
server.permissions.admin_whitelist: |-
  能够管理客户端白名单
server.permissions.administrative: |-
  站管
server.permissions.edit_unknowns: |-
  能够编辑未知发行信息
server.permissions.events_reward_badges: |-
  能够访问整合奖励发放的印记模块
server.permissions.events_reward_bonus: |-
  能够访问整合奖励发放的积分模块
server.permissions.events_reward_history: |-
  能够访问整合奖励发放的发放历史
server.permissions.events_reward_invites: |-
  能够访问整合奖励发放的邀请模块
server.permissions.events_reward_tokens: |-
  能够访问整合奖励发放的令牌模块
server.permissions.forums_polls_create: |-
  能够在论坛发起投票
server.permissions.forums_polls_moderate: |-
  能够关闭投票或将其添加到首页
server.permissions.forums_see_hidden: |-
  能够看到隐藏的帖子
server.permissions.only_applicable_to_lower_class: |-
  *所有改动只能应用到等于或低于你的用户等级上
server.permissions.project_team: |-
  策划组成员
server.permissions.self_torrents_check: |-
  能够检查自己的种子
server.permissions.show_admin_team: |-
  显示管理员团队
server.permissions.show_staff_username: |-
  显示工作人员用户名
server.permissions.site: |-
  站点
server.permissions.site_admin_forums: |-
  能够支配论坛
server.permissions.site_advanced_search: |-
  能够使用高级搜索
server.permissions.site_advanced_top10: |-
  能够访问扩展排行榜
server.permissions.site_album_votes: |-
  能够为心仪的种子投票
server.permissions.site_can_invite: |-
  能够发邀
server.permissions.site_can_invite_always: |-
  能够在站点邀请系统关闭时发邀
server.permissions.site_collages_create: |-
  能够创建合集
server.permissions.site_collages_delete: |-
  能够删除合集
server.permissions.site_collages_manage: |-
  能够管理合集 (添加种子、排序)
server.permissions.site_collages_personal: |-
  能够拥有一个私人合集
server.permissions.site_collages_recover: |-
  能够恢复已被删除的合集
server.permissions.site_collages_renamepersonal: |-
  能够重命名自己的私人合集
server.permissions.site_collages_subscribe: |-
  能够访问合集订阅
server.permissions.site_debug: |-
  能够查看站点排错调试表
server.permissions.site_delete_artist: |-
  能够删除艺人 (必须同时能删除种子和求种)
server.permissions.site_delete_tag: |-
  能够删除标签
server.permissions.site_disable_ip_history: |-
  能够禁用 IP 历史
server.permissions.site_edit_wiki: |-
  能够编辑 Wiki 页面
server.permissions.site_leech: |-
  能够下载
server.permissions.site_make_bookmarks: |-
  能够添加收藏
server.permissions.site_manage_recommendations: |-
  能够编辑推荐列表
server.permissions.site_moderate_forums: |-
  能够管理论坛
server.permissions.site_moderate_requests: |-
  能够管理任一求种
server.permissions.site_proxy_images: |-
  通过站点服务器代理加载图片
server.permissions.site_recommend_own: |-
  能够将自己的种子添加到推荐列表
server.permissions.site_search_many: |-
  能够不受搜索结果数量限制
server.permissions.site_send_unlimited_invites: |-
  拥有无限邀请
server.permissions.site_submit_requests: |-
  能够提交求种
server.permissions.site_tag_aliases_read: |-
  能够访问标签别名列表
server.permissions.site_top10: |-
  能够访问排行榜
server.permissions.site_torrents_notify: |-
  能够访问种子推送系统
server.permissions.site_upload: |-
  能够上传
server.permissions.site_view_flow: |-
  能够访问站点统计和数据池
server.permissions.site_view_full_log: |-
  能够访问全部站点日志
server.permissions.site_view_torrent_snatchlist: |-
  能够查看种子完成列表
server.permissions.site_vote: |-
  能够为求种投票
server.permissions.staff_award: |-
  能够发放奖励
server.permissions.torrents: |-
  种子
server.permissions.torrents_add_artist: |-
  能够将艺人添加到任意种子组
server.permissions.torrents_check: |-
  能够检查全站的种子
server.permissions.torrents_check_log: |-
  能够查看种子检查日志
server.permissions.torrents_delete: |-
  能够删除种子
server.permissions.torrents_delete_fast: |-
  能够一次删除超过 3 个种子
server.permissions.torrents_edit: |-
  能够编辑任一种子
server.permissions.torrents_fix_ghosts: |-
  能够修复艺人页面的虚假种子组
server.permissions.torrents_freeleech: |-
  能够给种子设置免费
server.permissions.torrents_hide_dnu: |-
  默认隐藏禁止发布列表
server.permissions.torrents_search_fast: |-
  无搜索频率限制 (适用于脚本)
server.permissions.torrents_slot_edit: |-
  能够调整种子所处的槽位
server.permissions.torrents_trumpable: |-
  能够勾选种子的可替代标记
server.permissions.users: |-
  用户
server.permissions.users_delete_users: |-
  能够删除任何用户的账号
server.permissions.users_disable_any: |-
  能够封禁任何用户的权利
server.permissions.users_disable_posts: |-
  能够封禁用户的发帖权限
server.permissions.users_disable_users: |-
  能够封禁用户
server.permissions.users_edit_avatars: |-
  能够更换头像
server.permissions.users_edit_invites: |-
  能够修改邀请数量以及取消邀请的发送
server.permissions.users_edit_own_ratio: |-
  能够修改自己的上传／下载量
server.permissions.users_edit_password: |-
  能够修改密码
server.permissions.users_edit_profiles: |-
  能够编辑任何用户的设置
server.permissions.users_edit_ratio: |-
  能够修改任何用户的上传／下载量
server.permissions.users_edit_reset_keys: |-
  能够重设任何用户的密钥
server.permissions.users_edit_titles: |-
  能够修改头衔
server.permissions.users_edit_usernames: |-
  能够编辑用户名
server.permissions.users_edit_watch_hours: |-
  能够修改 contrib 监视时间
server.permissions.users_give_donor: |-
  能够提供捐助者访问权
server.permissions.users_invite_notes: |-
  能够在邀请用户时添加管理备注
server.permissions.users_logout: |-
  能够登出用户
server.permissions.users_make_invisible: |-
  能够使用户不可见
server.permissions.users_mod: |-
  能够访问基础的管理工具 (管理员评论)
server.permissions.users_override_paranoia: |-
  能够无视隐私设置
server.permissions.users_promote_below: |-
  能够将用户提升到当前等级以下
server.permissions.users_promote_to: |-
  能够将用户提升到当前等级
server.permissions.users_reset_own_keys: |-
  能够重设自己的密钥
server.permissions.users_view_disabled: |-
  能够查看已被封禁的权限
server.permissions.users_view_email: |-
  能够查看 Email 地址
server.permissions.users_view_friends: |-
  能够查看任何用户的好友
server.permissions.users_view_invites: |-
  能够查看用户邀请了谁
server.permissions.users_view_ips: |-
  能够查看 IP 地址
server.permissions.users_view_keys: |-
  能够查看密钥
server.permissions.users_view_seedleech: |-
  能够查看用户正在做种或下载什么
server.permissions.users_view_uploaded: |-
  能够无视用户隐私设置查看其发布的种子
server.permissions.users_warn: |-
  能够警告用户
server.permissions.zip_downloader: |-
  能够同时下载多个种子
server.pub.a: |-
  1
server.pub.login: |-
  登&nbsp;&nbsp;录
server.pub.new_quote_one: |-
  新回复
server.pub.new_quote_other: |-
  新回复
server.pub.new_subscription_one: |-
  新订阅
server.pub.new_subscription_other: |-
  新订阅
server.pub.not_allowed_email: |-
  本站禁止 ProtonMail！
server.pub.note: |-
  本站服务器并未存储所显示的一切文件，相关链接仅由本站用户提供。这些种子文件仅用于备份目的。下载种子文件即意味着你已拥有原始文件。若相关文件以任何形式被滥用，本站管理员不承担任何责任，也不对用户发布的内容或其任何操作负责。
server.pub.other_report: |-
  &nbsp;其他报告
server.pub.other_reports: |-
  &nbsp;其他报告
server.pub.public_index: |-
  首&nbsp;&nbsp;页
server.pub.ratio_watch_you_have: |-
  <a href=\"rules.php?p=ratio\" data-tooltip=\"你需要在 %s 内将你的分享率提高至合格分享率，否则你的下载权限会被封禁\">分享率监控</a>
server.pub.ratio_watch_your_dl_privileges: |-
  <span class=\"ratio_warning\"><a href=\"rules.php?p=ratio\" data-tooltip=\"在分享率合格之前，你的下载权限都无法恢复\">分享率监控</a></span>
server.pub.referral: |-
  推&nbsp;&nbsp;荐
server.pub.register: |-
  注&nbsp;&nbsp;册
server.pub.report: |-
  &nbsp;报告
server.pub.space_new_collage_update_one: |-
  &nbsp;条合集更新
server.pub.space_new_collage_update_other: |-
  &nbsp;条合集更新
server.pub.space_new_message_one: |-
  &nbsp;条新信息
server.pub.space_new_message_other: |-
  &nbsp;条新信息
server.pub.space_new_staff_pm_one: |-
  &nbsp;条新管理组私信
server.pub.space_new_staff_pm_other: |-
  &nbsp;条新管理组私信
server.pub.space_new_torrent_notification_one: |-
  &nbsp;条新种推送
server.pub.space_new_torrent_notification_other: |-
  &nbsp;条新种推送
server.pub.statistics: |-
  统计面板
server.pub.toolbox: |-
  管理面板
server.pub.user_manage: |-
  用户审核
server.pub.you_have_space: |-
  你有&nbsp;
server.referral.an_error: |-
  系统确认你在 %s 的身份时出错。请刷新页面重试。
server.referral.another_tracker_we_trust: |-
  在此页面，你可通过验证我们认可的他站用户身份以加入 {{CONFIG['SITE_NAME']}}。
server.referral.choose_a_tracker: |-
  选择一个站点：
server.referral.choose_a_tracker_you_are_member: |-
  在下方选择一个你拥有账号的站点。
server.referral.congratulations: |-
  恭喜，我们已经确认了你在 %s 的身份。我们已经向你填写的邮箱发送了邀请邮件。如果收件箱没有，记得看看垃圾箱！欢迎加入 {{CONFIG['SITE_NAME']}}！
server.referral.copy_and_paste_the_code: |-
  复制下方识别码，并将之粘贴到你 %s 账号的个人信息栏中。只要它完整无缺地存在其中，并显而易见即可。
server.referral.email_address: |-
  邮箱地址
server.referral.enter_username_at: |-
  请准确输入你在 %s 使用的用户名。这对于识别你的身份非常重要。
server.referral.enter_your_username: |-
  输入你的用户名，然后 {{CONFIG['SITE_NAME']}} 会确认你的身份并向你发送邀请。
server.referral.exclamation_mark: |-
  ！
server.referral.external_tracker_referrals: |-
  他站用户自荐
server.referral.join: |-
  加入
server.referral.paste_string: |-
  复制粘贴识别码到个人信息栏，保存即可。
server.referral.please_try_again: |-
  抱歉，我们目前不接受他站用户自荐。请以后再试。
server.referral.process_follows: |-
  流程如下：
server.referral.step_1: |-
  第一步：粘贴识别码
server.referral.step_2: |-
  第二步：加入&nbsp;
server.referral.username: |-
  用户名
server.referral.will_generate_string: |-
  &nbsp;会生成一段识别码，需要你在那个站点将之展示出来。
server.register.a_strong_password_is_8_characters_or_longer: |-
  密码的安全长度至少 8 个字符，包含至少 1 个小写和 1 个大写字母，并且包含至少 1 个数字或符号，或者超过 20 个字符
server.register.agereq: |-
  我已年满 13 周岁。
server.register.email: |-
  邮　箱
server.register.email_note: |-
  目前仅面向部分教育网邮箱开放注册。
server.register.invite_does_not_exist: |-
  邀请不存在
server.register.invite_email_mismatch: |-
  你输入的邮箱地址和邀请中所要求的不一致，请输入正确的邮箱地址。
server.register.password: |-
  密　码
server.register.password_note: |-
  至少 8 个字符，包含至少 1 小写和 1 大写字母，且包含至少 1 个数字或符号，或超过 20 字符。
server.register.promise: |-
  承　诺
server.register.re_password: |-
  确认密码
server.register.readrules: |-
  我会认真阅读本站规则。
server.register.readwiki: |-
  我会认真阅读本站 Wiki。
server.register.register: |-
  注册
server.register.register_closed: |-
  注册关闭
server.register.register_closed_note: |-
  抱歉，网站目前仅限邀请。
server.register.register_closed_note2: |-
  目前，允许自助注册的邮箱如下：
server.register.register_complete: |-
  激活成功
server.register.register_complete_note: |-
  <strong>恭喜！你的账号已激活成功！</strong><br /><br>现在你可以 <a href='login.php'>点此</a> 登录了。
server.register.register_fail: |-
  链接失效
server.register.register_fail_note: |-
  <strong>该用户已激活。</strong>
server.register.send_note: |-
  注册验证邮件已发送到你所提供的注册邮箱中，<br/>请按照邮件内容完成验证后登录。
server.register.someone_registered_with_that_email: |-
  此邮箱在本站已有账号，请尝试 <a href='/login.php?act=recover'>找回密码</a>
server.register.someone_registered_with_that_username: |-
  该用户名已被其他人占用
server.register.username: |-
  用户名
server.register.username_note: |-
  不支持中文，不允许使用冒犯性的用户名，一经确认，不可更改，请深思熟虑。
server.register.you_cannot_have_a_username_of_0_or_1: |-
  你不能将 \"0\" 或 \"1\" 作为用户名
server.register.you_did_not_enter_a_captcha_code: |-
  你没有输入验证码
server.register.you_did_not_enter_a_valid_email_address: |-
  你输入的邮箱地址无效
server.register.you_did_not_enter_a_valid_username: |-
  你输入的用户名无效
server.register.you_did_not_select_age: |-
  你没有勾选已年满 13 周岁的复选框
server.register.you_did_not_select_rules: |-
  你没有勾选会认真阅读本站规则的复选框
server.register.you_did_not_select_wiki: |-
  你没有勾选会认真阅读本站 Wiki 的复选框
server.register.your_passwords_do_not_match: |-
  两次输入的密码不一致
server.reports.active_reports: |-
  未处理的报告
server.reports.body: |-
  内容
server.reports.claim: |-
  认领
server.reports.claimed_by: |-
  由 %s 认领
server.reports.collage: |-
  合集
server.reports.comment: |-
  评论
server.reports.compose: |-
  撰写私信
server.reports.contact: |-
  联系
server.reports.description: |-
  描述
server.reports.filled: |-
  已应求
server.reports.h2_forum_post: |-
  论坛帖子
server.reports.h2_forum_thread: |-
  论坛主题
server.reports.h2_report: |-
  报告
server.reports.incorrect_type: |-
  类别错误
server.reports.new: |-
  未处理
server.reports.no: |-
  否
server.reports.no_collage_with_the_reported_id_found: |-
  未找到该报告 ID 所对应的合集
server.reports.no_comment_with_the_reported_id_found: |-
  未找到该报告 ID 所对应的评论
server.reports.no_forum_post_with_the_reported_id_found: |-
  未找到该报告 ID 所对应的论坛帖子
server.reports.no_forum_thread_with_the_reported_id_found: |-
  未找到该报告 ID 所对应的论坛主题
server.reports.no_request_with_the_reported_id_found: |-
  未找到该报告 ID 所对应的求种
server.reports.no_user_with_the_reported_id_found: |-
  未找到该报告 ID 所对应的用户
server.reports.old: |-
  已处理
server.reports.other_reports_stats: |-
  其他报告统计
server.reports.place: |-
  排名
server.reports.reason: |-
  原因
server.reports.release_type: |-
  发行类别
server.reports.report: |-
  报告
server.reports.report_a: |-
  报告一个
server.reports.report_collage_guide_1: |-
  该类目用于报告违反了 <a href=\"rules.php?p=collages\">合集规则</a> 的合集。
server.reports.report_collage_guide_2: |-
  合集规则属于解释性概念，管理组拥有最终解释权。如果你认为这个合集介于允许与不允许之间，请随时报告，我们会查看并确认。
server.reports.report_collage_guide_3: |-
  我们鼓励用户尽量使用此功能。它比私信管理组成员更加高效。
server.reports.report_collage_guide_4: |-
  在下面的报告描述中，请尽可能详尽地描述情况以帮助管理解决问题。
server.reports.report_forum_thread_guide_1: |-
  请在下述情况下使用 “报告论坛主题” 类目： <ul> <li>当 <a href=\"rules.php?p=chat\">社交规则</a> 被违反时，比如含有种族主义、攻击性、煽动性、色情和其他违反规则内容的帖子。我们鼓励所有用户在看到任何形式的违规时及时报告。</li> <li>申请解锁主题。</li> <li>报告出现在错误版块的主题。</li> <li>报告求助版块中已被解决但尚未添加标记的问题。</li> </ul>
server.reports.report_forum_thread_guide_2: |-
  它比私信管理组成员更加高效。
server.reports.report_forum_thread_guide_3: |-
  请注意，此功能仅用于报告违规行为，而且，是报告主题，而不是回帖。
server.reports.report_post_comment_guide_1: |-
  该类目用于报告 <a href=\"rules.php?p=chat\">社交规则</a> 被违反的情况，比如含有种族主义、攻击性、煽动性、色情和其他违反规则内容的帖子或评论。
server.reports.report_post_comment_guide_2: |-
  我们鼓励所有用户在看到任何形式的违规时及时报告。
server.reports.report_post_comment_guide_3: |-
  它比私信管理组成员更加高效。
server.reports.report_post_comment_guide_4: |-
  请注意，此功能仅用于报告违规行为，而且，是报告帖子或评论，而不是回复。
server.reports.report_request_guide_1: |-
  该类目用于报告违反了 <a href=\"rules.php?p=requests\">求种规则</a> 的求种，也用于申请对求种进行次要的、通常是修饰性的编辑（例如添加电影海报、修改求种的电影标题等）。
server.reports.report_request_guide_2: |-
  我们鼓励用户尽量使用此功能。它比私信管理组成员更加高效。
server.reports.report_request_guide_3: |-
  在下面的报告描述中，请尽可能详尽地描述情况以帮助管理解决问题。可信的外部信息源对于处理报告非常有益，有如制片公司官网、<a href=\"https://imdb.com/\">IMDb</a>、<a href=\"https://www.themoviedb.org/\">TMDB</a> 和 <a href=\"https://movie.douban.com/\">豆瓣</a>。
server.reports.report_request_guide_4: |-
  <strong>不要单纯因为求种无法完成而报告它。</strong>当下无人能应求的求种并无问题，因为也许在将来它会被完成。一个对此情形的假设是，一个求种对当下仅有 Amazon 发行的 WEB 要求一份物理媒介发行，因为物理媒介发行也许会在将来某一天发售。至于这样的物理媒介其发行的可能性大小并不在我们的考虑范围内。
server.reports.report_request_guide_5: |-
  <strong>如果你报告这个求种是为了将之转移到新求种系统，请返回并点击「Request update」。</strong>
server.reports.report_request_update_guide_1: |-
  该类目用于向 Mod+ 管理申请将你的求种转移到新系统中。
server.reports.report_request_update_guide_2: |-
  如果并没有其他人为你的求种投票，你可以自行编辑。
server.reports.report_user_guide_1: |-
  该类目用于报告违反了 <a href=\"rules.php\">黄金规则</a> 的用户，抑或是你没有其他途径提醒管理这个用户有特殊之处。
server.reports.report_user_guide_2: |-
  我们鼓励用户尽量使用此功能。它比私信管理组成员更加高效。
server.reports.report_user_guide_3: |-
  请勿在此报告违反了以下规则的用户： <ul> <li>种子发布</li> <li>论坛主题／帖子</li> <li>合集</li> <li>求种</li> </ul>
server.reports.report_user_guide_4: |-
  以上报告类目拥有各自的入口，请专项专用。
server.reports.report_user_guide_5: |-
  在下面的报告描述中，请尽可能详尽地描述情况以帮助管理解决问题。
server.reports.reporting_guidelines: |-
  报告指南
server.reports.reporting_guidelines_intro: |-
  以下是帮助管理员高效处理你报告的注意事项。
server.reports.reporting_guidelines_summary: |-
  简而言之，请尽可能多地在报告中包含具体细节，谢谢你。
server.reports.reporting_the: |-
  你正在报告
server.reports.reporting_the_collage: |-
  你正在报告的合集
server.reports.reporting_the_post: |-
  你正在报告的帖子
server.reports.reporting_the_request: |-
  你正在报告的求种
server.reports.reporting_the_thread: |-
  你正在报告的主题
server.reports.reporting_the_user: |-
  报告用户
server.reports.reports: |-
  报告数
server.reports.reports_resolved_in_the_last_24_hours: |-
  在过去 24 小时内处理的报告
server.reports.reports_resolved_in_the_last_month: |-
  在过去一月内处理的报告
server.reports.reports_resolved_in_the_last_week: |-
  在过去一周内处理的报告
server.reports.reports_resolved_since_other_reports: |-
  所有已处理的报告
server.reports.request: |-
  求种
server.reports.request_update: |-
  报告 (更新)
server.reports.resolved_by: |-
  由 %s 解决
server.reports.send_a_message_to: |-
  向 %s 发送私信
server.reports.stats: |-
  统计
server.reports.sth_was_reported_by_user_sometime: |-
  由 %s 报告于
server.reports.subject: |-
  主题
server.reports.threads_trashed_since_the_beginning_of_time: |-
  所有被删除的主题
server.reports.title: |-
  标题
server.reports.toggle_notes: |-
  显隐备注
server.reports.trashed: |-
  删除量
server.reports.unclaim: |-
  取消认领
server.reports.user: |-
  用户
server.reports.username: |-
  用户名
server.reports.way_to_increase_turnover_rate: |-
  如果你尽可能详细地填写以下信息，将大大提高更新的效率。
server.reports.year_required: |-
  年 (必填)
server.reports.yes: |-
  是
server.reports.you_cannot_start_a_conversation_with_yourself: |-
  你不能向自己发起对话！
server.reports.you_reported_sth_for_the_reason: |-
  你报告了 %s，理由是
server.reportsv2.a_torrent_with_that_id_does_not_exist: |-
  不存在该 ID 的种子。
server.reportsv2.all_new_reports_for_the_chosen_type: |-
  指定类目下的所有新报告
server.reportsv2.all_reports_for_the_torrent: |-
  种子 %s 的所有未处理报告
server.reportsv2.all_reports_for_torrents_uploaded_by: |-
  由 %s 所发布种子的所有报告
server.reportsv2.all_reports_for_torrents_uploaded_by_user: |-
  由用户 %s 所发布种子的所有报告
server.reportsv2.all_the_old_smelly_reports: |-
  陈芝麻烂谷子的报告
server.reportsv2.all_torrents_reported_by: |-
  所有被 %s 报告的种子
server.reportsv2.all_torrents_reported_by_user: |-
  所有被用户 %s 报告的种子
server.reportsv2.also_space: |-
  也
server.reportsv2.and_until: |-
  到
server.reportsv2.as_useful_as_blank_reports_are_could_you_be_a_tiny_bit_more_helpful_leave_a_comment: |-
  这条报告和空白的一样毫无价值，请认真填写报告说明！
server.reportsv2.by_group_id_of_torrent_reported: |-
  通过被报告种子的种子组 ID
server.reportsv2.by_id_of_torrent_reported: |-
  通过被报告种子的 ID
server.reportsv2.by_report_id: |-
  通过报告人 ID
server.reportsv2.by_resolver_id: |-
  通过处理人 ID
server.reportsv2.by_uploader_id: |-
  通过发布人 ID
server.reportsv2.claim: |-
  认领
server.reportsv2.claim_all: |-
  全部认领
server.reportsv2.claim_all_btn_title: |-
  你会认领本页所有报告
server.reportsv2.comments: |-
  说明
server.reportsv2.current_count: |-
  当前数量
server.reportsv2.currently_assigned_reports_by_staff_member: |-
  当前由管理组成员分配的报告
server.reportsv2.custom_trumpable: |-
  自定义可替代理由
server.reportsv2.date_reported: |-
  报告时间
server.reportsv2.delete_title: |-
  删种？
server.reportsv2.deleted: |-
  已删除
server.reportsv2.deleted_has_been_automatically_resolved: |-
  (已删除) 已被自动处理。
server.reportsv2.different_view_modes_by_person: |-
  按用户分类查看报告
server.reportsv2.different_view_modes_by_report_type: |-
  按报告类目分类查看报告
server.reportsv2.don_t_care: |-
  不限
server.reportsv2.dynamic: |-
  动态
server.reportsv2.dynamic_title: |-
  启停自动用未处理报告更替已处理报告的功能
server.reportsv2.edit_request_about_this_torrent: |-
  与该种子相关的编辑请求
server.reportsv2.extra: |-
  追加
server.reportsv2.first_torrent: |-
  用户首种
server.reportsv2.first_torrent_title: |-
  这是该用户发布的第一个种子
server.reportsv2.for_browsing_anything_more_complicated_than_these: |-
  欲通过任何更复杂的方式浏览信息，请使用搜索功能。
server.reportsv2.from: |-
  从
server.reportsv2.handled_by: |-
  处理人
server.reportsv2.image_s: |-
  图片链接
server.reportsv2.in_progress_by: |-
  认领人
server.reportsv2.invalidate_report: |-
  报告无效
server.reportsv2.link_s_to_external_source: |-
  外部资料源链接
server.reportsv2.link_s_to_proof_images: |-
  证据图片链接
server.reportsv2.log_message: |-
  日志信息
server.reportsv2.multi_resolve: |-
  批量处理
server.reportsv2.multi_resolve_btn_title: |-
  采用各自的解决方案处理所有已勾选报告
server.reportsv2.multi_resolve_title: |-
  通过批量处理按钮，所有已勾选报告都会被一次性处理掉
server.reportsv2.relevant_other_torrents: |-
  相关种子
server.reportsv2.new_auto_assigned: |-
  新 (自动分配)
server.reportsv2.new_reports_auto_assigned: |-
  自动分配新报告
server.reportsv2.new_reports_not_auto_assigned: |-
  未自动分配的新报告
server.reportsv2.new_un_auto: |-
  新 (未自动分配)
server.reportsv2.no_new_reports: |-
  没有新的报告啦，芜湖！
server.reportsv2.pl_to_other_relevant_torrent_s: |-
  <strong>另一相关</strong> 种子的永久链接 (PL)
server.reportsv2.pm_reason: |-
  原因
server.reportsv2.pm_uploader_reporter: |-
  私信
server.reportsv2.pm_uploader_reporter_title: |-
  发布人：如不使用 “Send now”，内容就会附加到常规信息中。报告人：必须使用 “Send now”。
server.reportsv2.reason: |-
  报告类目
server.reportsv2.relevant_images: |-
  相关图片
server.reportsv2.relevant_links: |-
  相关链接
server.reportsv2.relevant_tracks: |-
  相关音轨
server.reportsv2.remove_upload_privileges: |-
  封禁发布权限
server.reportsv2.remove_upload_privileges_title: |-
  封禁发布权限？
server.reportsv2.report: |-
  报告
server.reportsv2.report_a_torrent: |-
  报告该种子
server.reportsv2.report_comment: |-
  处理意见
server.reportsv2.report_created: |-
  提交时间
server.reportsv2.report_for_torrent: |-
  所对应的种子
server.reportsv2.report_information: |-
  报告内容
server.reportsv2.report_introduction: |-
  <strong>使用准确的报告项（<a href=\"wiki.php?action=article&name=种子报告系统指南\">指南</a>）并遵循以下报告要点将有助于管理员及时处理你的报告请求：</strong>
server.reportsv2.report_type: |-
  报告类目
server.reportsv2.report_was_handled_by_user: |-
  报告由 [user]%s[/user] 处理。
server.reportsv2.reported_by: |-
  报告人
server.reportsv2.reporter: |-
  报告人
server.reportsv2.reports: |-
  报告数
server.reportsv2.reports_v2: |-
  种子报告系统
server.reportsv2.reports_v2_information: |-
  种子报告系统信息
server.reportsv2.required: |-
  必填
server.reportsv2.resolve: |-
  处理
server.reportsv2.resolve_report: |-
  手动解决报告
server.reportsv2.resolve_time: |-
  处理时间
server.reportsv2.resolve_title: |-
  点此重设处理选项为默认值
server.reportsv2.resolver: |-
  处理人
server.reportsv2.s_in_progress_reports: |-
  &nbsp;处理中的报告
server.reportsv2.s_reports: |-
  &nbsp;的报告
server.reportsv2.s_resolved_reports: |-
  &nbsp;已处理的报告
server.reportsv2.search_reports: |-
  搜索报告
server.reportsv2.single_torrent: |-
  单个种子
server.reportsv2.space_log_message: |-
  站点日志信息
server.reportsv2.space_staff_notes: |-
  管理组备注
server.reportsv2.staff_member: |-
  管理组成员
server.reportsv2.the_extra_image_links_you_provided_were_not_links_to_images: |-
  你提供的额外图片链接并非图链。
server.reportsv2.the_extra_links_you_provided_were_not_links: |-
  你提供的额外链接并非网页链接。
server.reportsv2.the_extra_pl_you_gave_included_the_link_to_the_torrent_you_are_reporting: |-
  你提供的另一种子的永久链接指向的就是你正在报告的种子。
server.reportsv2.the_pl_was_incorrect_it_should_look_like_torrents_php_torrentid_12345: |-
  永久链接格式错误，它应当形如&nbsp;
server.reportsv2.there_are_n_other_reports_for_torrents_in_this_group: |-
  该种子组内的种子还%s
server.reportsv2.there_are_n_other_reports_for_torrents_in_this_group_report_one: |-
  有其他 1 个报告
server.reportsv2.there_are_n_other_reports_for_torrents_in_this_group_report_other: |-
  有其他 %s 个报告
server.reportsv2.there_are_n_other_reports_for_torrents_uploaded_by_this_user: |-
  该用户上传的种子还%s
server.reportsv2.there_are_n_other_reports_for_torrents_uploaded_by_this_user_count_one: |-
  有其他 1 个报告
server.reportsv2.there_are_n_other_reports_for_torrents_uploaded_by_this_user_count_other: |-
  有其他 %s 个报告
server.reportsv2.this_has_resulted_in_an_n_week_warning: |-
  这导致你被警告了 [url=%s&nbsp;周[/url] 作为惩罚。
server.reportsv2.this_has_resulted_in_the_loss_of_your_upload_privilege: |-
  你的上传权限%s因此被封禁。
server.reportsv2.this_request: |-
  该求种
server.reportsv2.time_a: |-
  所有已处理的报告
server.reportsv2.time_d: |-
  一天内处理的报告
server.reportsv2.time_m: |-
  一月内处理的报告
server.reportsv2.time_w: |-
  一周内处理的报告
server.reportsv2.torrent_group: |-
  种子组
server.reportsv2.track_number_s: |-
  音轨序号
server.reportsv2.tracks_should_be_given_in_a_space_separated_list_of_numbers_with_no_other_characters: |-
  音轨序号之间用空格空开，且不应含有数字以外的字符。
server.reportsv2.type: |-
  类目
server.reportsv2.types.master.banned.report_messages.1: |-
  请明确指出其违反了 “禁止发布” 列表中的哪一项。
server.reportsv2.types.master.banned.resolve_options.pm: |-
  [rule]h1.2[/rule]。你上传了本站目前禁止的资源。列于禁止发布列表（位于 [url=upload.php]发布页面[/url] 顶部）以及上传规则中 [url=rules.php?p=upload#1.2]特别禁止[/url] 部分的资源不能被上传到本站。除非你的种子符合禁止发布列表注释中指定的条件，否则请勿发布。
  你的种子已被报告，因为它包含了来自禁止发布列表或上传规则中特别禁止部分的资源。
server.reportsv2.types.master.banned.title: |-
  特别禁止内容
server.reportsv2.types.master.dupe.report_messages.1: |-
  请附上既有种子的链接
server.reportsv2.types.master.dupe.resolve_options.pm: |-
  [rule]h2.2[/rule]。你的种子已被报告，因为它与站点既有种子重复。
server.reportsv2.types.master.dupe.title: |-
  重复
server.reportsv2.types.master.other.report_messages.1: |-
  请在说明中尽可能详细地描述问题。
server.reportsv2.types.master.other.title: |-
  其他
server.reportsv2.types.master.trump.report_messages.1: |-
  请列出新种子能够替代原有种子的具体原因。
server.reportsv2.types.master.trump.report_messages.2: |-
  请确保你正在报告的，是<strong class=\"u-colorWarning\">将被替代</strong>且应被删除的种子，而不是你认为应保留的种子。
server.reportsv2.types.master.trump.resolve_options.pm: |-
  [rule]h2.2[/rule]。你的种子已被报告，因为它将被新的种子替代。
server.reportsv2.types.master.trump.title: |-
  替代
server.reportsv2.types.master.urgent.report_messages.1: |-
  该类目仅适用于紧急情况，一般是因为在种子中泄露了个人信息。
server.reportsv2.types.master.urgent.report_messages.2: |-
  滥用 “紧急” 类目会导致警告或更严重的惩罚。
server.reportsv2.types.master.urgent.report_messages.3: |-
  由于该类目不能方便地告知管理员问题所在，所以请在说明中详细描述种子的问题。
server.reportsv2.types.master.urgent.title: |-
  紧急
server.reportsv2.types.movie.audio_track_bad.report_messages.1: |-
  请指出音频轨存在的具体问题。
server.reportsv2.types.movie.audio_track_bad.resolve_options.pm: \"[rule]5.4.3[/rule]。种子内含的音频轨相对其分辨率而言过于庞大。\\n\\n[rule]5.4.4[/rule]。种子含有冗余的音频轨。\\n\\n[rule]5.4.16[/rule]。既没有原始语种音频也没有国语配音，只有非国语配音的种子会被标记为 “可替代”。\\n\\n[rule]5.4.17[/rule]。种子中包含的音轨有效，但不同步。\\n\\n你的种子被标记为 “问题音频轨” 且可被替代。\"
server.reportsv2.types.movie.audio_track_bad.title: |-
  问题音频轨
server.reportsv2.types.movie.format.report_messages.1: |-
  在规则容许规格范围外的种子都可以使用本项，如 SDR x265 1080p Encode、RMVB 720p Encode 等。
server.reportsv2.types.movie.format.report_messages.2: |-
  请指明是容器不被规则允许，还是分辨率存在问题。
server.reportsv2.types.movie.format.resolve_options.pm: \"[rule]5.4.8[/rule]。种子应符合我们 [rule]h3[/rule] 推荐格式的要求。\\n\\n[rule]5.4.9[/rule]。种子应符合我们 [rule]h3[/rule] 推荐分辨率的要求。\\n\\n你的种子已被报告，因为其格式或分辨率与规则不符。\"
server.reportsv2.types.movie.format.title: |-
  规格不当
server.reportsv2.types.movie.low.report_messages.1: |-
  请向我们提供 PNG 格式的影片原始分辨率截图。
server.reportsv2.types.movie.low.resolve_options.pm: |-
  [rule]5.4.10[/rule]、[rule]5.4.11[/rule]、[rule]5.4.21[/rule]、[rule]5.4.24[/rule]。编码自质量低下的、存在错误的、低清的源的作品会被标记为 “可替代”。
server.reportsv2.types.movie.low.title: |-
  劣质源
server.reportsv2.types.movie.names_bad.report_messages.1: |-
  请指出有问题的文件（夹）名。
server.reportsv2.types.movie.names_bad.report_messages.2: |-
  理想情况下，你可以发布修复了文件（夹）名问题之后的种子以替代该种子。
server.reportsv2.types.movie.names_bad.resolve_options.pm: \"[rule]2.1.1[/rule]。文件（夹）名必须使用电影原始语种名称或官方英文名（推荐）。（如海报所示等的官方英文名，其优先级高于 IMDb。）\\n\\n[rule]2.1.2[/rule]。压制组发行（来自 P2P 组或 Scene 组）不应重命名，除非它们不满足规则 [rule]2.1.1[/rule] 或我们的文件名要求。\\n\\n[rule]2.1.4[/rule]。DVD 和 BD 文件目录结构不允许改动，仅顶层文件夹允许重命名。\\n\\n你的种子被标记为问题文件（夹）名且可被替代。当然你也可自行修复这个种子，补充或修正文件（夹）名然后重新发布种子。然后以 “替代” 为由报告（RP）旧种，在报告说明中指出你已修复的命名问题，同时请确保提供用以替代的新种永久链接（PL）。\"
server.reportsv2.types.movie.names_bad.title: |-
  问题文件（夹）名
server.reportsv2.types.movie.subtitle_track_bad.report_messages.1: |-
  请指出字幕轨存在的具体问题。
server.reportsv2.types.movie.subtitle_track_bad.resolve_options.pm: \"[rule]5.4.7[/rule]。种子中包含的字幕有效，但不同步。\\n\\n[rule]5.4.14[/rule]。无中字槽位的种子如果是不包含英文字幕（通过字幕管理器内挂或外挂）的非英语电影，会被标为 “可替代”。\\n\\n[rule]5.4.15[/rule]。无中字槽位的种子，其重要非英语对白不包含单独的英文字幕。\\n\\n[rule]5.4.19[/rule]。包含字幕质量很差，且不是电影准确翻译的种子会被标为 “可替代”。\\n\\n[rule]5.4.20[/rule]。字幕被硬编码在视频轨中的种子会被标为 “可替代”。\\n\\n你的种子被标记为 “问题字幕轨” 且可被替代。\"
server.reportsv2.types.movie.subtitle_track_bad.title: |-
  问题字幕轨
server.reportsv2.types.movie.torrent_description_bad.report_messages.1: |-
  请指出种子描述存在的具体问题。
server.reportsv2.types.movie.torrent_description_bad.resolve_options.pm: |-
  [rule]2.2[/rule]。当前填写的种子描述未符合规则要求，可能是 MediaInfo 不完整、有错误；或截图不符合规则。
server.reportsv2.types.movie.torrent_description_bad.title: |-
  问题种子描述
server.reportsv2.types.movie.transcode.report_messages.1: |-
  请写明你检查的音视频轨以及用以确认它为劣质转码的方法。
server.reportsv2.types.movie.transcode.report_messages.2: |-
  如有可能，请附上至少一张用以佐证的分析图，分析图多多益善。
server.reportsv2.types.movie.transcode.resolve_options.pm: |-
  [rule]5.4.21[/rule]。我们不接受有损来源的转码或重编码。
  你的种子已被报告，因为它包含了劣质转码的音轨。
server.reportsv2.types.movie.transcode.title: |-
  劣质转码
server.reportsv2.types.movie.video_track_bad.report_messages.1: |-
  请指出视频轨存在的具体问题，并向我们提供 PNG 格式的影片原始分辨率截图。
server.reportsv2.types.movie.video_track_bad.resolve_options.pm: \"[rule]5.4.1[/rule]、[rule]5.4.2[/rule]。种子的纵横比因编码错误等原因与原始的、影院上映的电影不同。\\n\\n[rule]5.4.5[/rule]、[rule]5.4.6[/rule]。种子被错误地反交错，或以错误的帧率播放。\\n\\n[rule]5.4.18[/rule]。种子明显裁边过多或过少。\\n\\n[rule]5.4.22[/rule]。种子含有明显的水印。\\n\\n你的种子被标记为 “问题视频轨” 且可被替代。\"
server.reportsv2.types.movie.video_track_bad.title: |-
  问题视频轨
server.reportsv2.unclaim: |-
  取消认领
server.reportsv2.unclaim_all: |-
  全部取消认领
server.reportsv2.unclaim_all_btn_title: |-
  放弃认领当前显示的所有报告
server.reportsv2.unresolved_reports_for_the_group: |-
  种子组 %s 的未处理报告
server.reportsv2.update_now_title: |-
  暂存处理意见
server.reportsv2.upload_time: |-
  发布时间
server.reportsv2.uploaded_by: |-
  发布人
server.reportsv2.uploader: |-
  发布人
server.reportsv2.uploader_s_reply: |-
  发布者回复
server.reportsv2.used_this_torrent_to_fill: |-
  使用该种子完成了
server.reportsv2.user_comment: |-
  报告人说明
server.reportsv2.username: |-
  用户名
server.reportsv2.view_old_reports: |-
  查看已处理的报告
server.reportsv2.view_your_claimed_reports: |-
  查看你认领的报告
server.reportsv2.viewing_resolution_of_report: |-
  查看报告 %s 的处理结果
server.reportsv2.views: |-
  总览
server.reportsv2.warning: |-
  警告
server.reportsv2.warning_title: |-
  警告周数
server.reportsv2.you_are_missing_a_required_filed_for_a_report: |-
  你有一项 (%s) 未填写，它是 %s 类目的必填项。
server.reportsv2.your_above_torrent_was_reported_and_has_been_deleted: |-
  [url=%s]你发布的种子[/url] 已被报告并删除。
server.reportsv2.your_above_torrent_was_reported_but_not_been_deleted: |-
  [url=%s]你发布的种子[/url] 已被报告并处理，但未被删除。
server.reportsv2.your_torrent_is_now_displayed_on_better_php_and_trumpable: |-
  你的种子现因上述原因被列在 [url=%s/better.php]站点优化[/url] 的页面且可被替代。当然你也可自行修复这个种子，修复该问题后重新上传种子。然后报告（RP）旧种，选择 “替代” 类目，在报告说明中指出你已修复的具体问题，同时请确保你提供了用以替代的新种永久链接（PL）。
server.requests.acceptable_codecs: |-
  允许的编码
server.requests.acceptable_containers: |-
  允许的容器
server.requests.acceptable_resolutions: |-
  允许的分辨率
server.requests.acceptable_sources: |-
  允许的片源
server.requests.add_by: |-
  求种人
server.requests.all: |-
  全部
server.requests.already_filled: |-
  此求种已被应求。
server.requests.any: |-
  任一
server.requests.artist_note: |-
  请不要将 “群星” 作为单个艺人添加，而是使用多艺人功能；阅读 <a href=\"wiki.php?action=article&amp;id=27\" target=\"_blank\">本文</a> 了解详情。
server.requests.associated_with_the_above_torrent_group: |-
  和上方填写的种子组关联在一起。
server.requests.at_least_one_director: |-
  请填写至少一位导演。
server.requests.auto_fill_note: |-
  使用 IMDb 或者种子组链接自动填充
server.requests.basic_info: |-
  基本信息
server.requests.bookmarked_requests: |-
  求种收藏
server.requests.bookmarks: |-
  你收藏的求种
server.requests.bounty: |-
  报酬
server.requests.by_user: |-
  发起人
server.requests.codec_list: |-
  编码
server.requests.collages: |-
  合集
server.requests.container_list: |-
  容器
server.requests.costs: |-
  赞助
server.requests.cover: |-
  封面
server.requests.created: |-
  发布时间
server.requests.created_by: |-
  发起人
server.requests.custom_vote: |-
  自定义赞助
server.requests.custom_vote_title: |-
  这里的单位是二进制而非十进制的，比如，1024 MB 等于 1 GB。
server.requests.delete_request_warning: |-
  删除求种会导致你 <strong>永远失去</strong> 发起求种所消耗的上传量。
server.requests.description: |-
  求种描述
server.requests.description_note: |-
  <b>请尽量对你的请求做出说明。</b>例 1：求种顺序 Blu-ray > WEB-DL > HDTV；例 2：WEB-DL 需要来自 Netflix 或 Amazon。 <br>如无其他要求，请填写 “无额外说明”。
server.requests.entered_bounty_not_number: |-
  你填的报酬不是数字。
server.requests.entered_year_not_number: |-
  你填的年份不是数字。
server.requests.fill_a_request_how_to_blockquote: |-
  先搜索是否已有符合的资源，再根据下述不同情况，将应求种的<strong>永久链接（PL）</strong>填入下列框中以完成应求。 <ul> <li>若已有符合的种子，直接填入其 PL；</li> <li>若没有符合的种子，但存在该影片组，请使用影片详情页面的 “添加格式” 上传新种并填入其 PL；</li> <li>若没有符合的种子且不存在该影片组，请使用 “发布应求” 按钮来上传新种并填入其 PL。</li></ul>
server.requests.fill_a_request_how_to_toggle: |-
  &nbsp;应求方法&nbsp;
server.requests.fill_request: |-
  应求
server.requests.fill_request_explanation: |-
  点击此按钮以引用此求种所提供的信息快速发布应求。
server.requests.filled: |-
  完成
server.requests.filled_by: |-
  完成人
server.requests.find_in_stores: |-
  在网络商店搜索
server.requests.for_user: |-
  代人应求
server.requests.forgot_enter_artists: |-
  你忘填艺人了。
server.requests.forgot_enter_bounty: |-
  你忘填报酬了。
server.requests.forgot_enter_description: |-
  你忘填求种描述了。
server.requests.forgot_enter_tags: |-
  你忘填标签了。
server.requests.forgot_enter_title: |-
  你忘填标题了。
server.requests.forgot_enter_year: |-
  你忘填发行年份了。
server.requests.forgot_link_fill_torrent: |-
  你忘了提供应求用的种子链接。
server.requests.forgot_pick_release_type: |-
  请选择一个分类。
server.requests.if_this_is_incorrect_please: |-
  如果存在错误，请&nbsp;
server.requests.if_you_add_the_entered: |-
  如果你赞助
server.requests.image: |-
  封面链接 (选填)
server.requests.image_link_invalid: |-
  &nbsp;是无效图链。
server.requests.include_filled: |-
  包含已应求
server.requests.is: |-
  已
server.requests.last_voted: |-
  最近的赞助人
server.requests.lastvote: |-
  最后投票
server.requests.link: |-
  链接
server.requests.link_empty_warning: |-
  如 IMDb 链接和种子组链接都不存在，请勾选选框。
server.requests.link_not_valid: |-
  你提供的种子链接无效。
server.requests.min_bounty: |-
  报酬至少 1 GiB。
server.requests.my_requests: |-
  我的求种
server.requests.name: |-
  名称
server.requests.new_create: |-
  发布求种
server.requests.new_edit: |-
  编辑求种
server.requests.new_request: |-
  发布求种
server.requests.new_rules: |-
  请确保你发布的求种符合 <a href='rules.php?p=requests'>求种规则</a>！
server.requests.no_link: |-
  无链接
server.requests.no_such_user_to_fill: |-
  求种用户不存在！
server.requests.of_bounty_your_new_stats: |-
  作为酬金，你的统计数据将会变为
server.requests.one_hour_grace_period: |-
  发种者可以在发种后的一小时内独占应求的机会。
server.requests.pst: |-
  发布后状态
server.requests.pst_body: |-
  如果你确认发布 %s 的报酬，你新的账号状态将变为
server.requests.purchasable_at: |-
  可购买于
server.requests.purchasable_at_placeholder: |-
  选填，用以指向当前可购买片源的网店链接（不允许填预售链接）
server.requests.quick_vote: |-
  快速赞助
server.requests.ratio: |-
  分享率
server.requests.reason: |-
  原因
server.requests.release_list: |-
  发行类别
server.requests.report_request: |-
  报告求种
server.requests.report_this_request: |-
  报告该求种
server.requests.request_update: |-
  求种更新
server.requests.requests: |-
  求种
server.requests.requests_created_by: |-
  %s 发布的求种
server.requests.requests_filled_by: |-
  %s 完成的求种
server.requests.requests_i_have_filled: |-
  我完成的求种
server.requests.requests_i_have_voted_on: |-
  我参与的求种
server.requests.requests_voted_for_by: |-
  %s 参与的求种
server.requests.require_one_codec: |-
  你至少要勾选一个编码。
server.requests.require_one_container: |-
  你至少要勾选一个容器。
server.requests.require_one_resolution: |-
  你至少要勾选一个分辨率。
server.requests.require_one_source: |-
  你至少要勾选一个片源。
server.requests.resolution_list: |-
  分辨率
server.requests.search_terms: |-
  搜索条件
server.requests.should_be_pl_to_the_torrent: |-
  你应填写种子的永久链接 (PL) (比如
server.requests.so_that_staff_can_fix_it: |-
  ，如此管理员就能修正它。
server.requests.source_list: |-
  片源
server.requests.source_torrent: |-
  片源种子
server.requests.source_torrent_placeholder: |-
  选填，请填写可作为该求种压制源的种子永久链接
server.requests.system_taxed: |-
  被系统作为消费税扣除了。</strong>
server.requests.t_group: |-
  种子组
server.requests.t_group_note: |-
  如果求种与<strong>站点已有</strong>的种子组相匹配，请在此填写其链接。
server.requests.tags: |-
  标签
server.requests.tags_comma: |-
  标签 (逗号分隔)
server.requests.tags_note: |-
  标签应以英文逗号（“,”）分隔，你应使用英文点号（“.”）来分隔标签内的单词——例如 “<strong class='u-colorSuccess'>imdb.top.500</strong>”。<br />请使用左侧文本框的官方标签，而不是 “非官方” 标签（例如使用官方的 “<strong class='u-colorSuccess'>剧情</strong>” 标签, 而不是非官方的 “<strong class='u-colorWarning'>holy.crap</strong>” 标签）。
server.requests.this_request: |-
  该求种
server.requests.top_contributors: |-
  赞助人排行榜
server.requests.torrent_category_different_from_torrent: |-
  种子的分类与求种不一致。如果求种提供的分类有误，请联系管理。
server.requests.torrent_group: |-
  种子组
server.requests.torrent_group_must_correspond_site: |-
  如果输入了种子组 ID，那它必须与站点现存的种子组相符。
server.requests.unfill: |-
  否决
server.requests.unfilling_a_request_without_reason: |-
  没有有效且合理的理由去否决会导致你被警告。
server.requests.upload_request: |-
  发布应求
server.requests.uploaded: |-
  上传量
server.requests.view_request: |-
  查看求种
server.requests.vote_requests: |-
  我参与的求种
server.requests.will_be: |-
  将会
server.requests.year: |-
  年
server.requests.yes: |-
  是
server.requests.you_do_not_have_enough_uploaded: |-
  你的上传量未达到发起求种的最低要求。
server.requests.you_have_not_bookmarked_any_request: |-
  你尚未收藏任何一个求种。
server.rules.chat_forum: |-
  论坛规则不允许的行为在交流群也不允许，反之亦然。分开来写仅仅是为了方便。
server.rules.chat_title: |-
  社交
server.rules.chat_title_de: |-
  该部分规则请你在前往论坛发帖或交流群发言之前阅读。
server.rules.clients_title: |-
  客户端
server.rules.clients_title_de: |-
  该部分规则决定哪些客户端可以连接到我们的服务器，以及为它们设定的相关条例。
server.rules.collages_title: |-
  合集
server.rules.collages_title_de: |-
  该部分规则决定合集的组织和管理形式。
server.rules.end: |-
  分享率规则\"
server.rules.golden_rules: |-
  黄金规则
server.rules.golden_rules_de: |-
  该部分规则至关重要，违反它们会导致极为严重的后果。
server.rules.info: |-
  注释
server.rules.ratio: |-
  分享率
server.rules.ratio_dl_title: |-
  这些单位是二进制而非十进制的，举个例子，1 GB 中有 1024 MB。
server.rules.ratio_title: |-
  分享率
server.rules.ratio_title_de: |-
  该部分规则决定用户在本站做种／下载活动应如何进行。
server.rules.requests_title: |-
  求种
server.rules.requests_title_de: |-
  该部分规则决定求种的组织和管理形式。
server.rules.rules: |-
  规则
server.rules.tags_title: |-
  标签
server.rules.tags_title_de: |-
  该部分规则决定哪些标签可以添加而哪些不能。
server.rules.type: |-
  分类
server.rules.upload_h13k: |-
  Scene 发布
server.rules.upload_h13k_a: |-
  <a href='wiki.php?action=article&amp;id=140'>Scene</a> 发布
server.rules.upload_h22k_t: |-
  种子描述
server.rules.upload_h23k_t: |-
  电影海报
server.rules.upload_h24k_t: |-
  其他发行信息
server.rules.upload_h54k_t: |-
  可替代标记
server.rules.upload_r220: |-
  总览
server.rules.upload_r220_note: |-
  这张图表是重复和替代规则的总览。
server.rules.upload_rules: |-
  发布规则
server.rules.upload_title: |-
  发布
server.rules.upload_title_de: |-
  该部分规则决定哪些内容可以被发布到本站。
server.sitehistory.body: |-
  正文
server.sitehistory.calendar: |-
  日历
server.sitehistory.category: |-
  类别
server.sitehistory.choose_a_category: |-
  选择一个类别
server.sitehistory.choose_a_subcategory: |-
  选择一个子类别
server.sitehistory.choose_tags: |-
  选择标签
server.sitehistory.comma_separated_tags: |-
  半角逗号分隔标签
server.sitehistory.create: |-
  新建
server.sitehistory.create_new_event: |-
  新建事件
server.sitehistory.date: |-
  日期
server.sitehistory.edit: |-
  编辑
server.sitehistory.edit_event: |-
  编辑事件
server.sitehistory.latest_site_history: |-
  最近的站点历史
server.sitehistory.link: |-
  链接
server.sitehistory.search: |-
  搜索
server.sitehistory.site_history: |-
  站点历史
server.sitehistory.subcategory: |-
  子类别
server.sitehistory.tags: |-
  标签
server.sitehistory.tags_placeholder: |-
  使用半角逗号分隔标签；使用半角句点充当空格
server.sitehistory.title: |-
  标题
server.staff.community_help: |-
  社群互助
server.staff.contact_staff: |-
  联系管理团队
server.staff.contact_staff_note: |-
  <p>如果你遇到的只是一般问题，我们建议你通过下面的管理组信箱提交你的问题，我们会尽快答复给你。</p> <p>你可以在此 <a href=\"javascript:void(0)\" onclick=\"\$('#compose').gtoggle(); return false;\">私信管理组</a>。</p>
server.staff.donation: |-
  捐助
server.staff.first_line_support: |-
  一线支持
server.staff.fl_support_note: |-
  <p><strong>这些用户并不一定是管理组成员。</strong>他们是志愿抽出时间帮助他人的用户。请在交流时对他们保持尊重，并在联系他们之前阅读 <a href='wiki.php?action=article&id=94'>本文</a>。</p>
server.staff.hidden_by_staff_member: |-
  管理员隐藏
server.staff.index: |-
  管理团队
server.staff.lastseen: |-
  最近上线
server.staff.message: |-
  内容
server.staff.remark: |-
  职权范围
server.staff.role_applications: |-
  职位申请
server.staff.role_applications_note: |-
  <p>成长路上，希望有你。如果你对我们的工作有兴趣，欢迎尝试 <a href='apply.php'>申请</a> 加入我们！
server.staff.role_applications_sub: |-
  （具体招聘岗位请点击下方申请）
server.staff.send_to: |-
  发送给
server.staff.staff: |-
  工作组
server.staff.subject: |-
  主题
server.staff.support: |-
  支持项目
server.staff.torrent_inspector: |-
  种子检查员 (TI)
server.staff.username: |-
  用户名
server.staffpm.amount: |-
  总量
server.staffpm.assigned_to: |-
  发件对象
server.staffpm.compose_new: |-
  撰写私信
server.staffpm.date: |-
  时间
server.staffpm.eur: |-
  欧元
server.staffpm.first_line_support: |-
  一线支持
server.staffpm.flattr: |-
  Flattr
server.staffpm.no_messages: |-
  无信息
server.staffpm.open_messages: |-
  未解决的私信
server.staffpm.personal_staff_inbox: |-
  私人管理组信箱
server.staffpm.preview: |-
  预览
server.staffpm.quote: |-
  回复
server.staffpm.reason: |-
  原因
server.staffpm.replies: |-
  回复数
server.staffpm.reply: |-
  回复
server.staffpm.resolved: |-
  已解决
server.staffpm.resolved_by: |-
  处理人
server.staffpm.resolved_messages: |-
  已解决的私信
server.staffpm.select_a_message: |-
  选择一条消息
server.staffpm.select_an_answer_from_the_drop_down_to_view_it: |-
  从下拉菜单选择一个回答以查看。
server.staffpm.sender: |-
  发件人
server.staffpm.space_staff_pms: |-
  的管理组私信
server.staffpm.staff_inbox: |-
  管理组信箱
server.staffpm.staff_pm: |-
  管理组私信
server.staffpm.staff_pms: |-
  管理组私信
server.staffpm.subject: |-
  主题
server.staffpm.unanswered: |-
  未回复
server.staffpm.unresolved: |-
  未解决
server.staffpm.view_all_unanswered: |-
  查看所有未回复
server.staffpm.view_resolved: |-
  查看已解决
server.staffpm.view_scoreboard: |-
  查看计分板
server.staffpm.scoreboard: |-
  计分板
server.staffpm.view_unresolved: |-
  查看未解决
server.staffpm.view_your_unanswered: |-
  查看你的未回复
server.staffpm.your_unanswered: |-
  你未解决
server.stats.detailed_torrent_statistics: |-
  种子统计详情
server.stats.detailed_user_statistics: |-
  用户统计详情
server.stats.geographical_distribution_map: |-
  地理分布图
server.stats.geographical_distribution_map_africa: |-
  地理分布图 - 非洲
server.stats.geographical_distribution_map_asia: |-
  地理分布图 - 亚洲
server.stats.geographical_distribution_map_europe: |-
  地理分布图 - 欧洲
server.stats.geographical_distribution_map_middle_east: |-
  地理分布图 - 中东
server.stats.geographical_distribution_map_south_america: |-
  地理分布图 - 南美
server.stats.number_of_users_by_country: |-
  各国用户数量
server.stats.stats: |-
  统计
server.stats.torrent_flow_chart: |-
  种子流动表
server.stats.torrent_stats: |-
  种子统计
server.stats.torrents_by_category: |-
  种子分类占比
server.stats.uploads_by_month: |-
  每月发布
server.stats.user_browsers: |-
  用户浏览器
server.stats.user_browsers_market_share: |-
  用户浏览器市场份额表
server.stats.user_class_distribution: |-
  用户等级分布表
server.stats.user_classes: |-
  用户等级
server.stats.user_flow: |-
  用户流动
server.stats.user_platform_distribution: |-
  用户操作系统分布表
server.stats.user_platforms: |-
  用户操作系统
server.stats.user_stats: |-
  用户统计
server.subtitles.a_subtitle_group: |-
  某字幕组
server.subtitles.anonymous_upload: |-
  匿名上传
server.subtitles.bookmarked_subtitles: |-
  字幕收藏
server.subtitles.button_upload: |-
  上传
server.subtitles.delete_subtitle: |-
  删除字幕
server.subtitles.delete_subtitle_warning: |-
  确认要删除该字幕吗？
server.subtitles.do_not_show_my_username: |-
  不要显示我的用户名
server.subtitles.h2_subtitles: |-
  字幕
server.subtitles.lack_of_torrent_permalink: |-
  未填写对应种子的永久链接
server.subtitles.movie_title: |-
  电影标题
server.subtitles.my_subtitles: |-
  我的字幕
server.subtitles.new: |-
  新
server.subtitles.new_subtitle: |-
  上传字幕
server.subtitles.please_choose_a_subtitle_file: |-
  未选中字幕文件
server.subtitles.please_select_language: |-
  请勾选至少一种语言
server.subtitles.please_upload_supported_subtitle_formats: |-
  请上传站点允许格式的字幕
server.subtitles.reason: |-
  原因
server.subtitles.request_a_subtitle: |-
  求字幕
server.subtitles.search: |-
  搜索
server.subtitles.source: |-
  来源
server.subtitles.subtitle_file: |-
  字幕文件
server.subtitles.subtitle_names: |-
  字幕名
server.subtitles.subtitle_rules: |-
  <ul> <li id='r3.6.1'><a href='rules.php?p=upload#3.6.1'>1.</a> <strong>用户上传的字幕应与对应种子的视频文件同步，否则会被直接删除。</strong> </li> <li id='r3.6.2'><a href='rules.php?p=upload#3.6.2'>2.</a> <strong>站点允许的字幕格式有 .sub、.idx、.sup、.srt、.vtt、.ass、.smi、.ssa。</strong>此外，也允许压缩打包上传，支持 .rar、.zip、.7z、.tar、.tgz、.tar.gz。 </li> <li id='r3.6.3'><a href='rules.php?p=upload#3.6.3'>3.</a> <strong>字幕文件建议采用与对应视频文件相一致的文件命名以方便使用。</strong>在尾部增加用以标明语言的字段是允许的，如 “Monsters.Inc.2001.1080p.BluRay.DTS.x264.D-Z0N3.chs.srt”。 </li> <li
  id='r3.6.4'><a href='rules.php?p=upload#3.6.4'>4.</a> <strong>字幕文件应以 Unicode 编码为佳。</strong> </li> <li id='r3.6.5'><a href='rules.php?p=upload#3.6.5'>5.</a> <strong>对于单文件电影，请直接上传单个的字幕文件，不要将同一部电影的多类字幕文件一同打包上传。</strong>如，在一个压缩包内同时囊括简中 SRT、繁中 SRT、中英 ASS，这是不允许的，你应将它们分别上传。<strong>对于迷你剧，则可以将每一集对应的字幕合并打包上传。</strong>但应保证每一集所对应的字幕文件命名与视频文件相同。 </li> </ul>
server.subtitles.subtitle_upload_warning: |-
  请确保字幕与对应的视频文件同步，否则你上传的字幕会被直接删除，你可能会被警告
server.subtitles.subtitle_uploader: |-
  上传者
server.subtitles.times_of_download: |-
  下载次数：
server.subtitles.title_or_imdb_link: |-
  片名或 IMDb 链接
server.subtitles.top_warning: |-
  此页面仅供浏览，欲上传字幕，请前往种子详情页面
server.subtitles.torrent_pl: |-
  对应种子 PL
server.subtitles.upload_a_subtitle: |-
  上传字幕
server.subtitles.year_optional: |-
  年 (选填)&nbsp;
server.time.ago: |-
  前
server.time.d: |-
  天
server.time.ds: |-
  天
server.time.h: |-
  时
server.time.hs: |-
  时
server.time.just_now: |-
  刚才
server.time.m: |-
  月
server.time.mn: |-
  分
server.time.mns: |-
  分
server.time.ms: |-
  月
server.time.space_and_space: |-
  %s
server.time.w: |-
  周
server.time.ws: |-
  周
server.time.y: |-
  年
server.time.ys: |-
  年
server.tools.Bonus: |-
  积分
server.tools.about_rendering: |-
  关于渲染
server.tools.about_rendering_note: |-
  <p>你正在渲染层叠样式表图库。</p> <p>在右侧可以看到使用到的参数，参数下面是返回的状态。</p>
server.tools.above: |-
  大于
server.tools.access: |-
  操作
server.tools.activity: |-
  活动
server.tools.add: |-
  补充
server.tools.add_all: |-
  所有用户
server.tools.add_an_entry_to_the_dnu_list: |-
  添加新的禁止发布项
server.tools.add_bonus_points_to_all_users: |-
  向全站用户发放积分
server.tools.add_bonus_sitewide: |-
  积分发放
server.tools.add_client: |-
  添加客户端
server.tools.add_fl_tokens_to_all_enabled_users: |-
  向所有未封号用户发放免费令牌
server.tools.add_invites: |-
  邀请发放
server.tools.add_invites_to_users: |-
  向用户发放邀请
server.tools.add_part: |-
  部分用户
server.tools.add_recommendation: |-
  添加推荐
server.tools.add_rule: |-
  添加
server.tools.add_to: |-
  发放给
server.tools.add_to_blacklist: |-
  将电子邮箱或域名添加到黑名单
server.tools.add_to_disabled_users: |-
  同时发放给被封禁的用户
server.tools.add_to_placeholder: |-
  请在此填写用户名，以英文逗号分隔。
server.tools.add_tokens_sitewide: |-
  向全站用户发放令牌
server.tools.added: |-
  待复审
server.tools.added_on: |-
  添加时间
server.tools.additional_forums: |-
  特许论坛版块（版块 ID）
server.tools.administration: |-
  用户管理
server.tools.affected_entries: |-
  影响项
server.tools.affected_requests: |-
  受影响的求种
server.tools.affected_torrent_groups: |-
  受影响的影片
server.tools.age: |-
  提交时间
server.tools.album_id: |-
  影片 ID
server.tools.featured_movie: |-
  电影推荐
server.tools.all: |-
  全部
server.tools.all_current_torrents: |-
  当前所有种子
server.tools.all_enabled_users: |-
  全体未封禁用户
server.tools.all_new_torrents: |-
  所有新种
server.tools.all_torrents_include_new: |-
  所有种子（含将来的新种）
server.tools.all_users: |-
  全体用户
server.tools.also_add_tokens_to_leech_disabled_users: |-
  为下载权限被封禁的用户也添加令牌 (如有需要)
server.tools.amount: |-
  总量
server.tools.announcements: |-
  通告
server.tools.application_email: |-
  申请邮箱
server.tools.application_ip: |-
  申请 IP
server.tools.application_management: |-
  入站申请管理
server.tools.application_manager: |-
  用户审核
server.tools.are_you_sure_remove_class: |-
  你确定要删除该用户组吗？
server.tools.ascending: |-
  升序
server.tools.author: |-
  作者
server.tools.auto_enable_requests: |-
  自动恢复申请
server.tools.auto_enable_requests_checked: |-
  已核实
server.tools.auto_enable_requests_invalid_email: |-
  无效邮箱
server.tools.auto_enable_requests_invalid_email_title: |-
  无匹配的邮箱地址
server.tools.auto_enable_requests_ip_overlap: |-
  IP 重叠
server.tools.auto_enable_requests_ip_overlap_title: |-
  提交申请的 IP 与其他账号重叠
server.tools.auto_enable_requests_main: |-
  主页
server.tools.auto_enable_requests_main_title: |-
  默认页面
server.tools.auto_enable_requests_manual_disable: |-
  手动禁用
server.tools.auto_enable_requests_manual_disable_title: |-
  提交申请的账号不是因为不活跃被禁用的
server.tools.auto_enable_requests_perfect: |-
  完美
server.tools.auto_enable_requests_perfect_minus_ip: |-
  除了 IP 完美
server.tools.auto_enable_requests_perfect_minus_ip_title: |-
  用户名有效、邮箱匹配且由于不活跃被禁用
server.tools.auto_enable_requests_perfect_title: |-
  用户名有效、邮箱匹配、当前 IP 没有重叠且由于不活跃被禁用
server.tools.auto_enable_requests_scores: |-
  计分板
server.tools.auto_enable_requests_scores_title: |-
  显示／隐藏计分板
server.tools.auto_enable_requests_search: |-
  搜索
server.tools.auto_enable_requests_search_title: |-
  显示／隐藏搜索
server.tools.auto_lock: |-
  自动锁定
server.tools.auto_lock_weeks: |-
  自动锁定周数
server.tools.available_request_bounty: |-
  可获取的求种报酬
server.tools.avatar_text: |-
  头像文本
server.tools.back_to_permission_list: |-
  返回用户组列表
server.tools.back_to_tools: |-
  返回管理面板
server.tools.badge: |-
  印记
server.tools.badge_auto: |-
  自动
server.tools.badge_class: |-
  大类
server.tools.badge_icon: |-
  图标
server.tools.badge_image: |-
  图片
server.tools.badge_level: |-
  等级
server.tools.badge_level_number: |-
  数值
server.tools.badge_management: |-
  印记管理
server.tools.badge_note: |-
  备注
server.tools.badge_operations: |-
  操作
server.tools.badge_progress: |-
  进度
server.tools.badge_query: |-
  查询
server.tools.badge_send: |-
  印记发放
server.tools.badge_sort: |-
  排序
server.tools.badge_tag: |-
  标签
server.tools.badge_to: |-
  发给
server.tools.badge_type: |-
  类型
server.tools.badge_withdraw: |-
  收回
server.tools.badges_giving: |-
  印记发放
server.tools.ban_reason: |-
  封禁原因
server.tools.tag_type: |-
  标签类型
server.tools.bans: |-
  禁用
server.tools.base_salary: |-
  基础底薪
server.tools.batch_tag_editor: |-
  标签批量编辑
server.tools.bbcode_sandbox: |-
  BBCode 样式预览
server.tools.below: |-
  小于
server.tools.bitcoin_address: |-
  比特币地址
server.tools.bitcoin_donation_balance: |-
  比特币捐助结算
server.tools.body: |-
  正文
server.tools.pick_reason: |-
  推荐理由
server.tools.bonus_number: |-
  积分数量
server.tools.bonus_points_giving: |-
  积分发放
server.tools.both: |-
  两者皆可
server.tools.breakdown: |-
  饼图
server.tools.browser: |-
  浏览器
server.tools.browser_usage: |-
  浏览器使用统计
server.tools.btc_donations_balance: |-
  比特币捐助 (结算)
server.tools.btc_donations_unprocessed: |-
  比特币捐助 (未处理)
server.tools.build_preview: |-
  构建预览
server.tools.byuserid: |-
  发奖人
server.tools.cache: |-
  缓存
server.tools.cache_decrement: |-
  缓存减量
server.tools.cache_evicted: |-
  缓存释放
server.tools.cache_flushes: |-
  缓存刷新
server.tools.cache_flushes_title: |-
  定期刷新缓存会无法利用其优势，请尽可能研究使用缓存处理或删除来代替全局刷新。
server.tools.cache_increment: |-
  缓存增量
server.tools.calendar: |-
  日历
server.tools.cannot_merge_tag_with_itself: |-
  无法将标签 %s 与自身合并！
server.tools.cas_update_success: |-
  自动控制/更新 (成功)
server.tools.cas_update_success_title_1: |-
  在已发布的自动控制指令中，有超过 30%% 是不必要的时间和资源浪费。
server.tools.cas_update_success_title_2: |-
  使用 -C 参数禁用自动控制，因为用不着，所以可以节省资源。
server.tools.cas_updates: |-
  自动控制/更新
server.tools.cashe_current_index: |-
  缓存当前索引
server.tools.cashe_storage: |-
  缓存空间占用
server.tools.cashe_storage_title: |-
  当空间占用超过 85%% 时开始释放
server.tools.cashe_total_index: |-
  缓存全部索引
server.tools.category: |-
  分区
server.tools.category_manager: |-
  论坛分区管理
server.tools.certain_size_torrents: |-
  指定大小的种子
server.tools.certain_torrent_groups: |-
  指定种子组
server.tools.certain_torrents: |-
  指定种子
server.tools.change_log: |-
  更新日志
server.tools.checked_mark: |-
  已核实
server.tools.checks: |-
  检查
server.tools.chinese_dubbed: |-
  国语配音
server.tools.class_level: |-
  用户组等级
server.tools.clear: |-
  清除
server.tools.clear_a_cache_key: |-
  清除缓存数据
server.tools.clear_common_cashes: |-
  清除公用缓存
server.tools.clear_view_a_cache_key: |-
  清除／查看缓存数据
server.tools.clears_out: |-
  清除
server.tools.click_to_see: |-
  点此查看
server.tools.client: |-
  客户端
server.tools.client_screenshots: |-
  客户端截图
server.tools.client_whitelist: |-
  客户端白名单
server.tools.client_whitelist_manager: |-
  客户端白名单管理
server.tools.collage_recovery: |-
  已删合集恢复
server.tools.comment: |-
  评论
server.tools.comment_checked_by: |-
  /核实人
server.tools.commit_message: |-
  具体信息
server.tools.community: |-
  社群
server.tools.compose_mass_pm: |-
  撰写群发私信
server.tools.concurrency: |-
  并发
server.tools.connections: |-
  连接
server.tools.controls: |-
  操作
server.tools.converting_image: |-
  转换图像
server.tools.count: |-
  计数
server.tools.country: |-
  国家
server.tools.create_a_new_permission_set: |-
  新建用户组
server.tools.create_a_user: |-
  创建用户
server.tools.create_category: |-
  创建分区
server.tools.create_forum: |-
  创建版块
server.tools.create_group: |-
  创建分组
server.tools.create_user: |-
  创建用户
server.tools.current_sales_promotion_rules: |-
  当前促销规则
server.tools.current_users_in_this_class: |-
  本组当前用户
server.tools.data: |-
  流量
server.tools.data_read: |-
  数据读取
server.tools.data_size: |-
  数据大小
server.tools.data_write: |-
  数据写入
server.tools.database: |-
  数据库
server.tools.database_slow: |-
  数据库降速
server.tools.database_slow_title: |-
  允许降速至 1/7500 查询指令以减少对性能的影响。
server.tools.database_specifics: |-
  数据库详情
server.tools.date: |-
  日期
server.tools.date_added: |-
  添加日期
server.tools.default: |-
  默认
server.tools.deficit: |-
  欠额
server.tools.deficit_title: |-
  用户想要达到合格分享率所需的上传量
server.tools.delete_failed: |-
  删除失败
server.tools.delete_success: |-
  删除 (成功)
server.tools.delete_success_title: |-
  在已发出的删除命令中，有 30%% 以上是不必要的，浪费了时间和资源。
server.tools.deleted_on: |-
  删除时间
server.tools.deletes: |-
  删除
server.tools.descending: |-
  降序
server.tools.description: |-
  描述
server.tools.developer_sandboxes: |-
  开发人员沙盒
server.tools.development: |-
  开发
server.tools.disable_entire_tree: |-
  砍掉整棵树
server.tools.disable_invites_privileges: |-
  封禁整棵树的邀请权限
server.tools.dnu_added: |-
  添加详情
server.tools.dnu_comment: |-
  注释
server.tools.dnu_list: |-
  禁止发布列表
server.tools.do_not_process_these_donations_manually: |-
  <strong>不要手动处理这些捐助！</strong>比特币处理器迟早<em>会will</em>搞定它们的（如果系统有问题就戳开发）。
server.tools.do_nothing: |-
  什么也不做
server.tools.donor_rank: |-
  捐助等级
server.tools.donor_rewards: |-
  捐助奖励
server.tools.downloaded: |-
  下载量
server.tools.drag_and_drop_table_rows_to_reorder: |-
  拖放以改变禁止发布项的排序
server.tools.drive: |-
  光驱
server.tools.dupe_ips: |-
  重叠的 IP
server.tools.dupes: |-
  重叠人数
server.tools.duplicate_ip_addresses: |-
  重叠的 IP 地址
server.tools.economic_stats: |-
  站点总体统计
server.tools.economy: |-
  站点总体统计
server.tools.edit_an_announcement: |-
  编辑公告:</br>(不会触发公告广播)
server.tools.edit_requests_handled: |-
  处理申请编辑
server.tools.email: |-
  邮箱
server.tools.email_address: |-
  邮箱
server.tools.email_blacklist: |-
  电子邮箱黑名单
server.tools.email_blacklist_comment: |-
  备注
server.tools.enable_requests: |-
  账号启用申请
server.tools.engine: |-
  引擎
server.tools.enter_a_single_replacement_tag: |-
  输入单个标签用于替换。
server.tools.enter_a_single_tag_to_search_for: |-
  输入单个标签用于搜索。
server.tools.enter_cache_keys_delimited_by_any_amount_of_whitespace: |-
  输入缓存键值，以任意数量的空格隔开。
server.tools.equal: |-
  等于
server.tools.error: |-
  错误
server.tools.events_reward: |-
  整合奖励发放
server.tools.events_reward_history: |-
  奖励发放历史
server.tools.events_reward_pm: |-
  奖励原因
server.tools.examined: |-
  审核
server.tools.expires: |-
  过期时间
server.tools.explanation_thread: |-
  数据统计及工资计算说明具体请参见 <a href=\"forums.php?action=viewthread&threadid=123\">该帖</a>
server.tools.failed_to_get_stats_for_user: |-
  获取用户 %s 的数据失败
server.tools.failed_to_get_tracker_info: |-
  获取 tracker 信息失败
server.tools.feature_torrent: |-
  特色种子
server.tools.files_per_day_this_month: |-
  本月日均文件数
server.tools.files_per_day_this_week: |-
  本周日均文件数
server.tools.files_this_month: |-
  本月文件数
server.tools.files_this_week: |-
  本周文件数
server.tools.files_today: |-
  今日文件数
server.tools.finances: |-
  捐助
server.tools.fl: |-
  免费种子
server.tools.fl_tokens_giving: |-
  免费令牌发放
server.tools.floating_wage: |-
  佣金
server.tools.for_reason: |-
  理由是
server.tools.forum_category_control_panel: |-
  论坛分区管理
server.tools.forum_category_control_panel_forums: |-
  版块数
server.tools.forum_category_management: |-
  论坛分区管理
server.tools.forum_control_panel: |-
  论坛版块管理
server.tools.forum_management: |-
  论坛管理
server.tools.forum_manager: |-
  论坛版块管理
server.tools.gamble: |-
  赌博
server.tools.gamble_title: |-
  用户在分享率监控期间的下载量
server.tools.get_select: |-
  获取/选取
server.tools.get_select_success: |-
  获取/选取（成功）
server.tools.get_stats_for_user: |-
  获取指定用户的数据
server.tools.global_cache: |-
  全局缓存
server.tools.global_notification: |-
  全站通告
server.tools.global_torrents_sales_promotion_management: |-
  全局种子促销管理
server.tools.grade_1: |-
  一档
server.tools.grade_2: |-
  二档
server.tools.grade_3: |-
  三档
server.tools.grade_4: |-
  四档
server.tools.grade_5: |-
  五档
server.tools.grant_tokens_to_leech_disabled_users: |-
  为下载权限被封禁的用户也发放令牌
server.tools.group: |-
  组
server.tools.group_number: |-
  组别
server.tools.gz_change_log: |-
  Gazelle 更新日志
server.tools.h2_global_torrents_sales_promotion_management: |-
  全局种子促销管理
server.tools.h2_ip_address_bans: |-
  IP 地址封禁
server.tools.h2_manipulate_invite_tree: |-
  邀请树管理
server.tools.h2_official_tags_manager: |-
  官方标签管理
server.tools.official_tag: |-
  官方
server.tools.other_tag: |-
  其他
server.tools.h2_os_and_browser_usage: |-
  操作系统和浏览器使用统计
server.tools.h2_site_options: |-
  站点选项
server.tools.h2_upscale_pool: |-
  分享率监控名单
server.tools.h2_user_flow: |-
  用户流动情况
server.tools.had_trackers: |-
  拥有站点
server.tools.handled_after: |-
  晚于
server.tools.handled_before: |-
  早于
server.tools.handled_between: |-
  介于
server.tools.handled_by_username: |-
  处理人
server.tools.handled_on: |-
  于
server.tools.handled_outcome: |-
  处理结果
server.tools.handled_timestamp: |-
  处理时间
server.tools.handled_timestamp_title: |-
  它会检索输入的日期及其之后的 24 小时
server.tools.hidden: |-
  隐藏
server.tools.history: |-
  历史
server.tools.host: |-
  服务商
server.tools.hour_s: |-
  小时
server.tools.hours: |-
  小时
server.tools.icon: |-
  捐助图标
server.tools.icon_link: |-
  捐助图标链接
server.tools.icon_text: |-
  捐助图标文本
server.tools.id: |-
  ID
server.tools.importance: |-
  优先级
server.tools.inactivity: |-
  不活跃
server.tools.include_checked: |-
  包括已核实
server.tools.incomplete: |-
  待补充
server.tools.increment_decrement: |-
  增量/减量
server.tools.increment_decrement_success: |-
  增量/减量 (成功)
server.tools.index_size: |-
  索引大小
server.tools.internal_torrent: |-
  Int 组种子
server.tools.introduction: |-
  个人介绍
server.tools.invalid_freeleech_type_or_freeleech_reason: |-
  无效的免费类型或理由
server.tools.invalid_group_ids: |-
  无效的种子组 ID
server.tools.invalid_size_or_units: |-
  无效的数值或单位
server.tools.invite_code: |-
  邀请码
server.tools.invite_pool: |-
  邀请池
server.tools.inviter: |-
  邀请者
server.tools.invites: |-
  邀请数
server.tools.invites_giving: |-
  邀请发放
server.tools.invites_number: |-
  邀请数量
server.tools.invites_type: |-
  邀请类型
server.tools.invitestime: |-
  邀请过期时间
server.tools.ip_address: |-
  IP 地址
server.tools.ip_address_bans: |-
  IP 地址封禁
server.tools.ip_lock_management: |-
  登录 IP 限制
server.tools.irc_manager: |-
  IRC 管理
server.tools.joined: |-
  加入
server.tools.joined_after: |-
  加入时间晚于
server.tools.joined_before: |-
  加入时间早于
server.tools.key: |-
  键值
server.tools.last_donated: |-
  最近捐助
server.tools.leave_blank_to_auto_generate: |-
  留空以自动生成
server.tools.leechdisabled: |-
  发放给下载权限被封禁的用户
server.tools.leeching: |-
  下载数
server.tools.length_in_min: |-
  时长 (以分钟计)
server.tools.level: |-
  等级
server.tools.life_span: |-
  有效期
server.tools.link_to_a_torrent_group: |-
  添加站内一个种子组的链接。例如，
server.tools.list_affected_rows: |-
  列出受影响的项目
server.tools.login_watch: |-
  登录监控
server.tools.main_stats: |-
  主要数据
server.tools.manage: |-
  管理
server.tools.manage_badges: |-
  印记管理
server.tools.manage_email_blacklist: |-
  管理邮箱黑名单
server.tools.manage_permissions: |-
  权限管理
server.tools.manage_stylesheets: |-
  层叠样式表管理
server.tools.manage_the_dnu_list: |-
  禁止发布列表管理
server.tools.managers: |-
  站点管理
server.tools.mandatory_comment: |-
  强制备注
server.tools.manipulate_invite_tree: |-
  邀请树管理
server.tools.manual: |-
  手动
server.tools.manually_submit_a_log: |-
  手工提交更新日志
server.tools.mark_torrents_as: |-
  将种子设置为
server.tools.mass_pm: |-
  私信群发
server.tools.mass_pm_class: |-
  用户群
server.tools.max_collages: |-
  私人合集数量上限
server.tools.mean_buffer: |-
  平均缓冲量
server.tools.mean_download: |-
  平均下载量
server.tools.mean_files_per_torrent: |-
  种子平均文件数
server.tools.mean_filesize: |-
  文件平均大小
server.tools.mean_leechers_per_torrent: |-
  单种平均下载数
server.tools.mean_leeching_per_user: |-
  单人平均下载数
server.tools.mean_leeching_per_user_in_at_least_1_swarm: |-
  参与至少一个集群用户的平均下载数
server.tools.mean_ratio: |-
  平均分享率
server.tools.mean_seeders_per_torrent: |-
  单种平均做种数
server.tools.mean_seeding_per_user: |-
  单人平均做种数
server.tools.mean_seeding_per_user_in_at_least_1_swarm: |-
  参与至少一个集群用户的平均做种数
server.tools.mean_snatches_per_torrent: |-
  单种平均完成数
server.tools.mean_snatches_per_user: |-
  单人平均完成数
server.tools.mean_snatches_per_user_in_at_least_1_swarm: |-
  参与至少一个集群用户的平均完成数
server.tools.mean_torrent_size: |-
  种子平均大小
server.tools.mean_torrents_per_user: |-
  人均种子数
server.tools.mean_upload: |-
  平均上传量
server.tools.merge_rename_tags: |-
  合并／重命名标签
server.tools.message: |-
  消息
server.tools.min_class_create: |-
  创建等级限制
server.tools.min_class_read: |-
  阅读等级限制
server.tools.min_class_write: |-
  编辑等级限制
server.tools.misc: |-
  杂项
server.tools.month: |-
  &nbsp;%s&nbsp;月
server.tools.multi_key: |-
  多个键值
server.tools.multiple_freeleech: |-
  批量免费设置
server.tools.name: |-
  名称
server.tools.navigation_manager: |-
  导航管理
server.tools.net_growth: |-
  净增长
server.tools.new_donations_from: |-
  来自 %s 的新捐助
server.tools.new_official_tag: |-
  新增官方标签
server.tools.news_post: |-
  公告发布
server.tools.nl: |-
  中性种子
server.tools.nl_torrents_over: |-
  在种子的体积大于&nbsp;
server.tools.nl_torrents_over_after: |-
  &nbsp;时将之设为中性种子
server.tools.no: |-
  否
server.tools.no_new_pending_auto_enable_requests: |-
  没有新的待处理自动恢复申请
server.tools.no_special_users: |-
  尚无特殊用户。
server.tools.no_such_tag_found: |-
  未找到该标签
server.tools.no_unprocessed_bitcoin_donations: |-
  没有未处理的比特币捐助
server.tools.nodejs: |-
  NodeJS
server.tools.normal: |-
  普通种子
server.tools.notes: |-
  备注
server.tools.numbers_and_such: |-
  数值以及其他信息
server.tools.tags_manager: |-
  标签管理
server.tools.offset: |-
  偏移值
server.tools.offsets_inserted: |-
  条偏移值记录已插入。
server.tools.only_affect_users_with_at_least_this_many_tokens: |-
  只影响令牌数超过该数值的用户
server.tools.operation: |-
  操作
server.tools.operations: |-
  操作
server.tools.operator: |-
  操作人
server.tools.opinion: |-
  审核意见
server.tools.order_by: |-
  排序
server.tools.original_options: |-
  原创选项
server.tools.os: |-
  操作系统
server.tools.os_and_browser_usage: |-
  操作系统和浏览器使用统计
server.tools.os_usage: |-
  操作系统使用统计
server.tools.other: |-
  其他
server.tools.others: |-
  其他
server.tools.outcome: |-
  处理结果
server.tools.outcome_approved: |-
  已批准
server.tools.outcome_denied: |-
  已否决
server.tools.outcome_discarded: |-
  已遗弃
server.tools.overall_stats: |-
  总体统计
server.tools.pass: |-
  通过
server.tools.passed: |-
  已通过
server.tools.password: |-
  密码
server.tools.paste_a_list_of_collage_or_torrent_group_urls: |-
  粘贴多个合集或影片网址
server.tools.path: |-
  路径
server.tools.peer_id: |-
  同伴 ID
server.tools.pend: |-
  待定
server.tools.pending: |-
  待定中
server.tools.period_of_validity: |-
  有效期
server.tools.permanent: |-
  永久
server.tools.permission_name: |-
  用户组名称
server.tools.permissions_manager: |-
  用户组管理
server.tools.php_processes: |-
  PHP 进程
server.tools.please_enter_a_comment_to_add_to_the_users_affected: |-
  请为受影响的用户输入一段备注。
server.tools.please_enter_properly_formatted_urls: |-
  请输入格式正确的网址
server.tools.plz_supply_a_valid_album_id: |-
  请提交一个有效的影片 ID
server.tools.points_to_add: |-
  欲发放的积分数额
server.tools.posts: |-
  站内发帖数
server.tools.prepaid_card_donor: |-
  移动充值卡捐助
server.tools.processing: |-
  处理
server.tools.proper_tag: |-
  正确标签
server.tools.publish_a_new_announcement: |-
  发布新公告:</br>(会触发公告广播)
server.tools.puppeteer: |-
  操作人
server.tools.qq_group: |-
  QQ 群
server.tools.quarter_1: |-
  第一季度
server.tools.quarter_2: |-
  第二季度
server.tools.quarter_3: |-
  第三季度
server.tools.quarter_4: |-
  第四季度
server.tools.queue: |-
  队列
server.tools.queuing: |-
  排队中
server.tools.range: |-
  范围
server.tools.rank: |-
  捐助等级
server.tools.ratio: |-
  分享率
server.tools.ratio_watch_ended_ends: |-
  分享率监控结束时间
server.tools.ratio_watch_ended_ends_title: |-
  如果此处显示的时间以 “前” 结尾，则代表用户被监控分享率的时长和／或低于其合格分享率的时长。如果此处显示的时间不以 “前” 结尾，则它是两周分享率监控期结束的时间。
server.tools.reason: |-
  理由
server.tools.reason_placeholder: |-
  在此填写的内容会记录在活动奖励发放历史中。
server.tools.receiving_bitcoin_address: |-
  比特币接收地址
server.tools.recommendations: |-
  推荐
server.tools.registered: |-
  注册时间
server.tools.registration_date: |-
  注册时间
server.tools.registration_log: |-
  注册日志
server.tools.reject: |-
  拒绝
server.tools.rejected: |-
  已拒绝
server.tools.remaining: |-
  剩余
server.tools.remark: |-
  原因
server.tools.remove: |-
  删除
server.tools.rename_to_merge_with_tag: |-
  重命名／合并到标签
server.tools.renamed_from: |-
  重命名自
server.tools.rendering_parameters: |-
  渲染参数
server.tools.rendering_status: |-
  渲染状态
server.tools.reports_handled: |-
  处理报告
server.tools.reports_submitted: |-
  提交报告
server.tools.required_ratio: |-
  合格分享率
server.tools.rerender_stylesheet_gallery_images: |-
  重新渲染层叠样式表图库
server.tools.resolution: |-
  分辨率
server.tools.rewarded_times: |-
  打赏次数
server.tools.rewards: |-
  奖励
server.tools.row_size: |-
  行大小
server.tools.rows: |-
  行数
server.tools.sales_promotion_period: |-
  促销期限
server.tools.sales_promotion_plan: |-
  促销方案
server.tools.sales_promotion_range: |-
  促销范围
server.tools.sales_promotion_rules_history: |-
  促销规则历史记录
server.tools.schedule: |-
  计划任务
server.tools.schema: |-
  模式
server.tools.search_ip: |-
  搜索
server.tools.second_avatar: |-
  第二头像
server.tools.secondary_class: |-
  次用户组
server.tools.seeder_leecher_ratio: |-
  做种数／下载数
server.tools.seeder_snatch_ratio: |-
  做种数／完成数
server.tools.seeding: |-
  做种数
server.tools.send_a_mass_pm: |-
  群发私信
server.tools.send_as_system: |-
  以系统名义发送
server.tools.send_rewards: |-
  发放奖励
server.tools.server_root: |-
  服务器根目录
server.tools.service: |-
  服务器
server.tools.service_stats: |-
  服务器数据
server.tools.set_global_notification: |-
  设置全站通告
server.tools.set_insert: |-
  存入/插入
server.tools.set_insert_success: |-
  存入/插入 (成功)
server.tools.should_edit: |-
  此 ID 已有 IP 限制条目，请编辑而不是重复添加！
server.tools.show_abusers: |-
  显示滥用者
server.tools.show_all: |-
  显示全部
server.tools.show_donor_list: |-
  显示捐助列表
server.tools.show_on_staff_page: |-
  显示在管理页面
server.tools.site_activities: |-
  活跃站点
server.tools.site_info: |-
  站点信息
server.tools.site_information: |-
  站点信息
server.tools.site_options: |-
  站点选项
server.tools.size_limitation: |-
  大小限制
server.tools.size_limitation_note: |-
  “等于” 与 “大于” “小于” 互斥，如果同时都填写了，只有 “等于” 会生效。如果希望对所有大小的种子生效，三处留空即可。
server.tools.size_per_day_this_month: |-
  本月日均大小
server.tools.size_per_day_this_week: |-
  本周日均大小
server.tools.size_this_month: |-
  本月大小
server.tools.size_this_week: |-
  本周大小
server.tools.size_today: |-
  今日大小
server.tools.snatches: |-
  完成
server.tools.someone_bonus: |-
  奖励积分
server.tools.someone_invites: |-
  奖励邀请
server.tools.someone_tokens: |-
  发放令牌
server.tools.sort: |-
  排序
server.tools.sort_by_bad_labels: |-
  错误厂牌正序排列
server.tools.sort_by_bad_tags: |-
  错误标签正序排列
server.tools.sort_by_good_labels: |-
  正确厂牌正序排列
server.tools.sort_by_good_tags: |-
  正确标签正序排列
server.tools.source: |-
  片源
server.tools.space_bonus: |-
  &nbsp;积分
server.tools.space_in_this_view: |-
  出现在这里
server.tools.space_invite_one: |-
  1 枚邀请
server.tools.space_invite_other: |-
  %s 枚邀请
server.tools.space_token_one: |-
  1 枚令牌
server.tools.space_token_other: |-
  %s 枚令牌
server.tools.special: |-
  特殊
server.tools.special_effects_subtitles: |-
  特效字幕
server.tools.special_rank: |-
  特殊等级
server.tools.special_users: |-
  特殊用户
server.tools.specifications: |-
  规格
server.tools.staff: |-
  管理组
server.tools.staff_group_management: |-
  管理组分组管理
server.tools.staff_page_group: |-
  管理页面分组
server.tools.staff_page_group_manager: |-
  管理组分组管理
server.tools.staff_tools: |-
  管理工具面板
server.tools.standard_definition: |-
  标清
server.tools.static_server: |-
  静态服务器
server.tools.statistical_settlement_time_dividing_query_panel: |-
  统计结算分时查询面板
server.tools.status: |-
  状态
server.tools.stylesheets: |-
  层叠样式表
server.tools.subject: |-
  主题
server.tools.submit: |-
  提交
server.tools.submit_checked_date: |-
  /核实日期
server.tools.submitted_after: |-
  晚于
server.tools.submitted_at: |-
  提交于
server.tools.submitted_before: |-
  早于
server.tools.submitted_between: |-
  介于
server.tools.submitted_on: |-
  于
server.tools.submitted_timestamp: |-
  提交时间
server.tools.submitted_timestamp_title: |-
  它会检索输入的日期及其之后的 24 小时
server.tools.success_exclamation_mark: |-
  成功！
server.tools.supplementary_information: |-
  补充资料
server.tools.sure_delete_staff_group_title: |-
  你确定要这么做吗？开弓没有回头箭！
server.tools.swarms_and_snatches: |-
  集群与竞争
server.tools.tag: |-
  标签
server.tools.sub_tag: |-
  标签中文名
server.tools.tag_aliases: |-
  标签别名
server.tools.td_ip_address: |-
  IP 地址
server.tools.temporary: |-
  临时
server.tools.tg_group: |-
  TG 群
server.tools.there_are_currently_enabled_users_on_ratio_watch: |-
  当前共 %s 位未封禁用户名列其中，且有 %s 位已被封禁下载权限。
server.tools.there_are_currently_no_users_on_ratio_watch: |-
  当前没有用户在分享率监控名单上。
server.tools.there_are_no_permission_classes: |-
  尚无用户组。
server.tools.there_are_no_stylesheets: |-
  目前还没有层叠样式表。
server.tools.there_are_no_users_with_more_than_n_ip_overlaps: |-
  当前没有 IP 重叠数超过 %s 的用户。
server.tools.there_have_been_no_new_registrations_in_the_past_72_hours: |-
  在过去的 72 小时内没有新注册的用户。
server.tools.threads_active: |-
  线程 (活动)
server.tools.time: |-
  时间
server.tools.timer: |-
  定时
server.tools.tips: |-
  补充提示
server.tools.token_number: |-
  令牌数量
server.tools.token_type: |-
  令牌类型
server.tools.tokens: |-
  令牌
server.tools.tokens_to_add: |-
  欲发放的数量
server.tools.tokens_to_set: |-
  欲设定的数量
server.tools.tokenstime: |-
  令牌过期时间
server.tools.tools: |-
  工具
server.tools.torrent_checked: |-
  已检查的种子
server.tools.torrent_groups: |-
  影片
server.tools.torrent_management: |-
  种子管理
server.tools.torrent_stats: |-
  种子总体统计
server.tools.torrents: |-
  种子
server.tools.torrents_per_day_this_month: |-
  本月日均种子数
server.tools.torrents_per_day_this_week: |-
  本周日均种子数
server.tools.torrents_this_month: |-
  本月种子数
server.tools.torrents_this_week: |-
  本周种子数
server.tools.torrents_today: |-
  今日种子数
server.tools.total: |-
  总数
server.tools.total_amount: |-
  总金额
server.tools.total_buffer: |-
  总缓冲量
server.tools.total_download: |-
  总下载量
server.tools.total_files: |-
  文件总数
server.tools.total_leechers: |-
  总下载数
server.tools.total_points: |-
  总点数
server.tools.total_reads: |-
  总读取
server.tools.total_request_bounty: |-
  求种报酬总量
server.tools.total_seeders: |-
  总做种数
server.tools.total_size: |-
  总大小
server.tools.total_snatches: |-
  总完成数
server.tools.total_torrents: |-
  种子总数
server.tools.total_upload: |-
  总上传量
server.tools.total_users_in_at_least_1_swarm: |-
  参与至少一个集群的用户总数
server.tools.total_wages: |-
  总工资
server.tools.total_writes: |-
  总写入
server.tools.tracker_info: |-
  Tracker 信息
server.tools.tracker_screenshots: |-
  站点截图
server.tools.unprocessed_amount_total: |-
  未处理总量 (共计
server.tools.unprocessed_bitcoin_donations: |-
  未处理的比特币捐助
server.tools.unresolve: |-
  未解决
server.tools.unused_invites_have_been_sent: |-
  枚已发送但未被使用的邀请。
server.tools.update_geoip: |-
  更新 GeoIP
server.tools.update_offsets: |-
  更新偏移值
server.tools.upload_frequency: |-
  发布频率
server.tools.uploaded: |-
  上传量
server.tools.uploads: |-
  发布
server.tools.upscale_pool: |-
  分享率监控名单
server.tools.url: |-
  网址
server.tools.user: |-
  用户
server.tools.user_agent: |-
  用户代理
server.tools.user_count: |-
  用户数
server.tools.user_does_not_exist: |-
  用户 %s 不存在
server.tools.user_flow: |-
  用户流动情况
server.tools.user_flow_vs_time: |-
  用户流动情况随时间变化表
server.tools.user_id: |-
  用户 ID
server.tools.user_stats: |-
  用户数据
server.tools.userid: |-
  用户 ID
server.tools.userids: |-
  获奖 ID
server.tools.username: |-
  用户名
server.tools.username_search: |-
  用户名搜索
server.tools.users: |-
  用户
server.tools.users_caches_cleared: |-
  位用户的缓存数据已被清除！
server.tools.uses: |-
  用量
server.tools.utilities: |-
  工具
server.tools.value: |-
  值
server.tools.view: |-
  查看
server.tools.wage_statistics: |-
  工资统计
server.tools.whoami: |-
  显示本用户信息
server.tools.wi: |-
  使用 whatismyipaddress.com 查询
server.tools.words_must_be_separated_by_underscores: |-
  须使用下划线分隔单词
server.tools.work_statistical_graph: |-
  工作统计分时表
server.tools.year: |-
  %s 年
server.tools.yes: |-
  是
server.top10.all: |-
  全部
server.top10.any: |-
  任一
server.top10.current_donor_rank: |-
  当前捐助等级
server.top10.date: |-
  日期
server.top10.day: |-
  天
server.top10.dl_speed: |-
  下载速度
server.top10.donors: |-
  捐助者
server.top10.down_speed_is_base_2: |-
  下载速度是基于二进制的 byte/s，而非 bit/s 报告的。
server.top10.downloaded: |-
  下载量
server.top10.downloaders: |-
  下载者
server.top10.fastest_downloaders: |-
  高速下载者
server.top10.fastest_uploaders: |-
  高速上传者
server.top10.favorites: |-
  好评
server.top10.found_no_tags_matching_the_criteria: |-
  没有满足条件的标签
server.top10.found_no_torrents_matching_the_criteria: |-
  没有满足条件的种子
server.top10.found_no_users_matching_the_criteria: |-
  没有满足条件的用户
server.top10.free: |-
  免费
server.top10.ft_torrents: |-
  搜索
server.top10.hide: |-
  隐藏
server.top10.in_the_past_day: |-
  最近一天内上传最活跃的资源
server.top10.in_the_past_month: |-
  最近一月内上传最活跃的资源
server.top10.in_the_past_week: |-
  最近一周内上传最活跃的资源
server.top10.in_the_past_year: |-
  最近一年内上传最活跃的资源
server.top10.joined: |-
  加入时间
server.top10.last_donated: |-
  最近捐助
server.top10.most_data: |-
  产生流量最多的资源
server.top10.most_highly_voted_tags: |-
  高支持率标签
server.top10.most_seed: |-
  上传最快的资源
server.top10.most_snatched: |-
  已完成用户最多的资源
server.top10.most_torrents: |-
  上传最活跃的资源
server.top10.most_used_request_tags: |-
  高使用率求种标签
server.top10.most_used_torrent_tags: |-
  高使用率种子标签
server.top10.movies: |-
  电影
server.top10.name: |-
  种子名称
server.top10.neg_votes: |-
  反对
server.top10.original: |-
  原创
server.top10.original_uploaders: |-
  原创发布者
server.top10.original_uploads: |-
  原创发布数
server.top10.pos_votes: |-
  支持
server.top10.position: |-
  排名
server.top10.rank: |-
  排名
server.top10.ratio: |-
  分享率
server.top10.search_for_a_date_after: |-
  搜索日期 (2010-09-05 之后)
server.top10.self_purchased_uploaders: |-
  自购发布者
server.top10.self_purchased_uploads: |-
  自购发布数
server.top10.self_rip_uploaders: |-
  自制发布者
server.top10.self_rip_uploads: |-
  自制发布数
server.top10.show: |-
  展示
server.top10.sth_is_wrong_with_the_date_you_provided: |-
  你提供的日期不太对
server.top10.tag: |-
  标签
server.top10.tags: |-
  标签
server.top10.tags_comma: |-
  标签 (逗号分隔)
server.top10.the_first_week_after: |-
  %s 之后一周内
server.top10.top: |-
  前
server.top10.top_10_donors: |-
  前 10 捐助者
server.top10.top_10_for: |-
  %s 的前 10 种子
server.top10.top_10_original_uploaders: |-
  前 10 原创发布者
server.top10.top_10_tags: |-
  前 10 标签
server.top10.top_10_torrents: |-
  前 10 种子
server.top10.top_10_torrents_history: |-
  前 10 种子历史记录
server.top10.top_10_users: |-
  前 10 用户
server.top10.top_donors: |-
  捐助者排行
server.top10.top_movies: |-
  电影
server.top10.top_n_donors: |-
  捐助者
server.top10.top_torrents: |-
  种子
server.top10.torrents: |-
  种子
server.top10.torrents_uploaded: |-
  发布者
server.top10.total_donor_points: |-
  总捐助点数
server.top10.type: |-
  类型
server.top10.ul_speed: |-
  上传速度
server.top10.up_speed_is_base_2: |-
  上传速度是基于二进制的 byte/s，而非 bit/s 报告的。
server.top10.uploaded: |-
  上传量
server.top10.uploaders: |-
  上传者
server.top10.uploads: |-
  发布数
server.top10.user: |-
  用户
server.top10.users: |-
  用户
server.top10.uses: |-
  使用次数
server.top10.week: |-
  周
server.top10.you_do_not_have_access_to_view_this_feature: |-
  你没有访问此功能的权限。
server.torrents.1080p_empty_slots: |-
  1080p 空槽：
server.torrents.3d: |-
  3D
server.torrents.720p_empty_slots: |-
  720p 空槽：
server.torrents.action_downloaded: |-
  已下载
server.torrents.action_leeching: |-
  下载中
server.torrents.action_seeding: |-
  做种中
server.torrents.action_snatched: |-
  已完成
server.torrents.action_torrents: |-
  的种子
server.torrents.action_uploaded: |-
  已发布
server.torrents.active: |-
  最新活动
server.torrents.actual_hnrs: |-
  实际统计的 H&R
server.torrents.add_artist: |-
  添加艺人
server.torrents.add_format: |-
  添加格式
server.torrents.add_subtitles: |-
  添加字幕
server.torrents.add_tag: |-
  添加标签
server.torrents.add_time: |-
  添加时间
server.torrents.additional_slots: |-
  额外的特许槽位
server.torrents.advanced: |-
  高级
server.torrents.album_votes: |-
  影片投票
server.torrents.all: |-
  全部
server.torrents.all_quality_slot: |-
  所有质量槽
server.torrents.allow: |-
  未允禁转
server.torrents.already_a_re_seed_request: |-
  最近 10 天内已有针对该种子的一个续种请求了。
server.torrents.any: |-
  任一
server.torrents.appended_to_the_regular_message_unless_using_send_now: |-
  除非使用 “Send now”，否则会追加到常规信息中。
server.torrents.artist_alias_id: |-
  艺人 ID
server.torrents.asc: |-
  升序
#at <time>
server.torrents.at: |-
  于 %s
server.torrents.bad_filename: |-
  问题文件夹名
server.torrents.bad_files: |-
  问题文件名
server.torrents.base: |-
  简单
server.torrents.basic: |-
  基本
server.torrents.because: |-
  由于
server.torrents.bounty: |-
  报酬
server.torrents.browser_edit_torrent: |-
  编辑种子
server.torrents.buy: |-
  自购
server.torrents.catch_up: |-
  刷新列表
server.torrents.change_category: |-
  变更分类
server.torrents.change_group: |-
  变更种子组
server.torrents.checked_by: |-
  由 %s 检查
server.torrents.checked_explanation: |-
  检查（此图标仅指种子是否已被检查而非质量好坏，具体请查看 Wiki）
server.torrents.chi: |-
  中字
server.torrents.cinematographer: |-
  摄影
server.torrents.clear_all_old: |-
  清空所有
server.torrents.clear_all_old_in_filter: |-
  清空此过滤器中的所有项
server.torrents.clear_selected: |-
  清除已选
server.torrents.clear_selected_in_filter: |-
  清除此过滤器中的已选项
server.torrents.clear_slot: |-
  清除选择
server.torrents.cleardefault: |-
  清除默认
server.torrents.client: |-
  客户端
server.torrents.cn_dub: |-
  国配
server.torrents.cn_quality_slot: |-
  中字质量槽
server.torrents.cn_quality_slot_requirements: |-
  必须内封中字。不得含有简繁英以外的字幕。压制质量越高越好。
server.torrents.cn_quality_slot_x265: |-
  中字质量槽 (x265)
server.torrents.codec: |-
  编码
server.torrents.composer: |-
  作曲
server.torrents.connectable: |-
  连接性
server.torrents.container: |-
  容器
server.torrents.database_ids: |-
  数据库编号
server.torrents.date: |-
  时间
server.torrents.dead: |-
  死种
server.torrents.delete_title: |-
  删种？
server.torrents.delete_torrent: |-
  删除种子
server.torrents.delete_torrent_note: |-
  如果你是因为种子被报告而想要删种，请不要这样做，因为它很可能错不至此。随意删种可能会导致你受处罚。
server.torrents.deleted: |-
  已删除
server.torrents.desc: |-
  降序
server.torrents.director: |-
  导演
server.torrents.diy: |-
  自制
server.torrents.diy_slot: |-
  DIY 槽
server.torrents.diy_slot_requirements: |-
  仅供外语电影。必须拥有国配或特效字幕。
server.torrents.douban_id: |-
  豆瓣编号
server.torrents.dupe: |-
  重复
server.torrents.edit_details: |-
  编辑详情
server.torrents.edit_filters: |-
  编辑过滤器
server.torrents.edit_notification_filters: |-
  编辑推送
server.torrents.edit_summary: |-
  编辑摘要
server.torrents.edit_torrent_group: |-
  编辑种子组
server.torrents.editgroup: |-
  编辑描述
server.torrents.edition_expand: |-
  点此切换搜索特定发行的信息
server.torrents.editrequest: |-
  请求编辑
server.torrents.eliminate_a_hnr: |-
  消除一个 H&R
server.torrents.eliminated_hnrs: |-
  H&R 消除数
server.torrents.empty_slot: |-
  该种子尚未被指定槽位
server.torrents.empty_slots: |-
  空槽：
server.torrents.en_quality_slot: |-
  英字质量槽
server.torrents.en_quality_slot_requirements: |-
  建议内封英字。无英字的非英语电影会被标为「可替代」。压制质量越高越好。
server.torrents.en_quality_slot_x265: |-
  英字质量槽 (x265)
server.torrents.error_downloaded_to_many_times: |-
  你已下载该种子四次了。如果你还需要下载，请在浏览器中再次操作。
server.torrents.error_leech_disabled: |-
  你不能在下载权限被禁用的时候使用免费令牌。
server.torrents.error_leech_disabled_may: |-
  你不能在下载权限被禁用的时候使用免费令牌。
server.torrents.error_occurred_to_token: |-
  不好意思！在尝试消耗你的令牌时发生了一点错误。这很可能是因为 tracker 无响应或负载过重。请稍后再试。
server.torrents.error_tokens_not_enough: |-
  免费令牌余额不足。请使用常规的 DL 按钮。
server.torrents.extra: |-
  追加
server.torrents.extra_definition: |-
  其他
server.torrents.extra_info: |-
  额外信息
server.torrents.extra_info_placeholder: |-
  请尽可能详细地阐述你删除种子的理由。
server.torrents.feature: |-
  特色
server.torrents.feature_slot: |-
  特色槽
server.torrents.feature_slot_requirements: |-
  仅供外语电影。必须内封中字。必须拥有国配或特效字幕。
server.torrents.file_names: |-
  文件列表
server.torrents.first_torrent: |-
  用户首种
server.torrents.first_torrent_title: |-
  这是该用户发布的第一个种子
server.torrents.fld: |-
  FREE
server.torrents.fold_tooltip: |-
  单击可折叠和展开简介
server.torrents.for_the_reason: |-
  ，报告类型 \"
server.torrents.free_left: |-
  限时 %s
server.torrents.freeleech: |-
  免费种子
server.torrents.ft_filelist: |-
  文件列表
server.torrents.ft_order: |-
  排序
server.torrents.ft_releasetype: |-
  发行类别
server.torrents.ft_ripspecifics: |-
  具体条件
server.torrents.ft_year: |-
  发行年份
server.torrents.ftb_searchstr: |-
  搜索关键词
server.torrents.gift_points_pre_tax: |-
  打赏积分（税前）
server.torrents.giver_list: |-
  打赏列表
server.torrents.global_freeleech_text: |-
  全局免费生效中，种子的优惠设置暂时无效
server.torrents.group_high_resolution: |-
  HD
server.torrents.group_id: |-
  种子组 ID
server.torrents.group_results: |-
  依据发行版本分组
server.torrents.group_standard_resolution: |-
  SD
server.torrents.group_title: |-
  电影标题
server.torrents.group_ultra_high_resolution: |-
  UHD
server.torrents.guide_of_advanced_search: |-
  使用说明
server.torrents.has_been_checked: |-
  已
server.torrents.has_not_been_checked: |-
  未
server.torrents.hd_encode: |-
  HD 压制类
server.torrents.hd_encode_title: |-
  质量槽／存档槽／特色槽
server.torrents.hd_untouched: |-
  HD 原盘类
server.torrents.hd_untouched_title: |-
  Remux 槽／原盘槽／DIY 槽
server.torrents.header: |-
  电影
server.torrents.hide: |-
  隐藏
server.torrents.hide_tags: |-
  隐藏标签
server.torrents.history_for_after: |-
  编辑记录
server.torrents.history_for_group_after: |-
  编辑记录
server.torrents.hit_and_run: |-
  H&R
server.torrents.hnr_is_not_opened_now: |-
  站点目前未开启 H&R
server.torrents.hnrs: |-
  H&R
server.torrents.if_you_download_this: |-
  下载该种子后，你的分享率将降至%s。
server.torrents.image: |-
  海报链接
server.torrents.imdb_id: |-
  IMDb 编号
server.torrents.imdb_language: |-
  语言
server.torrents.imdb_plot: |-
  梗概
server.torrents.imdb_region: |-
  地区
server.torrents.imdb_runtime: |-
  片长
server.torrents.info: |-
  信息
server.torrents.into_the_group: |-
  合并到另一组
server.torrents.jinzhuan: |-
  禁转
server.torrents.lack_of_info_now: |-
  暂无此片信息
server.torrents.last_active: |-
  最新活动
server.torrents.latest_notifications: |-
  最近的新种推送
server.torrents.leechers: |-
  下载数
server.torrents.like: |-
  赞
server.torrents.list_of_downloaders: |-
  下载列表
server.torrents.list_of_giver: |-
  打赏列表
server.torrents.list_of_giver_title: |-
  打赏用户名单
server.torrents.list_of_snatchers: |-
  完成列表
server.torrents.location: |-
  位置
server.torrents.mark_all_in_filter_as_read: |-
  将此过滤器中的所有项设为已阅
server.torrents.mass_pm: |-
  群发给已完成的用户
server.torrents.masspm: |-
  群发给已完成用户
server.torrents.matches_for: |-
  满足 %s 条件的新种
server.torrents.matches_for_unknown_filter: |-
  满足未知过滤器 %s 的新种
server.torrents.media_info: |-
  媒体信息
server.torrents.merge_confirm: |-
  合并确认
server.torrents.merge_target: |-
  目标种子组 ID
server.torrents.merge_with: |-
  并入另一种子组
server.torrents.misc: |-
  杂项
server.torrents.missing: |-
  空槽总览
server.torrents.movie_producer: |-
  制片
server.torrents.movie_votes: |-
  票
server.torrents.my_notifications: |-
  我的新种推送
server.torrents.n_user_one: |-
  1 位用户。
server.torrents.n_user_other: |-
  %s 位用户。
server.torrents.name: |-
  名称
server.torrents.neutral_leech: |-
  中性种子
server.torrents.never: |-
  无
server.torrents.no: |-
  否
server.torrents.no_new_notifications_found: |-
  新种订阅空空如也
server.torrents.non_wiki_torrent_group_editing: |-
  种子组编辑
server.torrents.nothing_found: |-
  无匹配结果！
server.torrents.off25: |-
  -25%%
server.torrents.off50: |-
  -50%%
server.torrents.off75: |-
  -75%%
server.torrents.only_hnr: |-
  只显示H&R
server.torrents.only_shows_free_torrents: |-
  只显示免费种子
server.torrents.other: |-
  其他
server.torrents.peer: |-
  同伴
server.torrents.peer_list: |-
  做种列表
server.torrents.people_who_like_this_album_also_liked: |-
  喜欢这部影片的用户也喜欢……
server.torrents.period: |-
  。
server.torrents.permalink: |-
  永久链接
server.torrents.pfl: |-
  个人免费
server.torrents.pm_uploader: |-
  私信发布者
server.torrents.processing: |-
  处理
server.torrents.quality_slot: |-
  质量槽
server.torrents.quality_slot_requirements: |-
  建议内封中字。同时缺少中英字幕的种子会被标为「可替代」。压制质量越高越好。
server.torrents.quality_type_slot: |-
  质量槽类 (含英字和无要求)
server.torrents.random: |-
  随机
server.torrents.reason: |-
  原因
server.torrents.regenerate: |-
  重新生成
server.torrents.release_type: |-
  发行类别
server.torrents.release_types:
  '1': |-
    长片
  '2': |-
    短片
  '3': |-
    迷你剧
  '4': |-
    单口喜剧
  '5': |-
    现场演出
  '6': |-
    电影集
server.torrents.remove: |-
  删除
server.torrents.remove_artist: |-
  删除艺人
server.torrents.remove_conductor: |-
  删除指挥
server.torrents.remove_tag: |-
  删除标签
server.torrents.remove_upload_privileges: |-
  封禁发布权限
server.torrents.remove_upload_privileges_title: |-
  封禁发布权限？
server.torrents.remux_slot: |-
  Remux 槽
server.torrents.remux_slot_requirements: |-
  建议内封中字。同时缺少中英字幕的种子会被标为「可替代」。
server.torrents.rename: |-
  重命名 (不会合并)
server.torrents.reply: |-
  回复
server.torrents.reply_at: |-
  回复报告于
server.torrents.reply_it_patiently: |-
  请在此填写你针对已有报告想作出的解释和说明，你只能提交一次，请保持礼貌、客观。该说明有助于管理更好地处理该报告。
server.torrents.report: |-
  报告
server.torrents.reported: |-
  已报告
server.torrents.reported_it: |-
  报告此种
server.torrents.req_format: |-
  请求格式
server.torrents.request_an_edit: |-
  请求编辑
server.torrents.request_number: |-
  求种数
server.torrents.request_re_seed: |-
  请求续种
server.torrents.request_re_seed_confirm: |-
  你确定要为这个种子请求续种么？
server.torrents.reset: |-
  重置
server.torrents.resolution: |-
  分辨率
server.torrents.resolve: |-
  处理
server.torrents.retention_slot: |-
  存档槽
server.torrents.retention_slot_requirements: |-
  应小于质量类槽位体积的 80%。压制质量达到一般要求即可。
server.torrents.retention_type_slot: |-
  存档槽类（含存档和特色）
server.torrents.revert: |-
  还原该版
server.torrents.revert_confirm: |-
  还原确认！
server.torrents.revert_confirm_body: |-
  你正在试图还原到版本%s。
server.torrents.revision_history_after: |-
  历史版本
server.torrents.reward_100_bonus_to_uploader: |-
  赠送 100 积分给发布者
server.torrents.reward_300_bonus_to_uploader: |-
  赠送 300 积分给发布者
server.torrents.reward_30_bonus_to_uploader: |-
  赠送 30 积分给发布者
server.torrents.reward_5_bonus_to_uploader: |-
  赠送 5 积分给发布者
server.torrents.rt_title: |-
  烂番茄标题
server.torrents.rules_broken: |-
  违规
server.torrents.s_notifications: |-
  &nbsp;的新种推送
server.torrents.scene: |-
  Scene
server.torrents.sd_encode: |-
  SD 压制类
server.torrents.sd_encode_title: |-
  质量槽
server.torrents.sd_untouched: |-
  SD 原盘类
server.torrents.sd_untouched_title: |-
  原盘槽
server.torrents.se_sub: |-
  特效
server.torrents.search: |-
  搜索
server.torrents.search_empty_1: |-
  你的搜索与任何内容都不匹配。
server.torrents.search_empty_2: |-
  确保所有名称拼写正确，或尝试模糊搜索。
server.torrents.search_for: |-
  搜索关键词
server.torrents.search_requests: |-
  搜索
server.torrents.search_torrents: |-
  搜索
server.torrents.seeders: |-
  做种数
server.torrents.seeding_status: |-
  做种状态
server.torrents.seeding_time: |-
  已做种
server.torrents.setdefault: |-
  设为默认
server.torrents.show: |-
  显示
server.torrents.show_comparison: |-
  显示对比图
server.torrents.show_downloads_title: |-
  查看点击了下载按钮的用户列表
server.torrents.show_snatches_title: |-
  查看向 Tracker 汇报了已完成信息的用户列表
server.torrents.showing_first_n_matches: |-
  显示前 %s 条匹配
server.torrents.size: |-
  大小
server.torrents.slot_action: |-
  所属槽位
server.torrents.slot_filter: |-
  槽位筛选器
server.torrents.slot_status: |-
  槽位状态
server.torrents.slot_status_empty: |-
  空置
server.torrents.slot_status_full: |-
  已满
server.torrents.slot_status_occupied: |-
  已占
server.torrents.slot_status_trumpable: |-
  可替
server.torrents.slot_table: |-
  槽位
server.torrents.slot_wiki: |-
  查看介绍
server.torrents.slots_we_need: |-
  剩余槽位：
server.torrents.snatched: |-
  已完成
server.torrents.someone_reported_it: |-
  某位用户报告此种
server.torrents.source: |-
  片源
server.torrents.space_log_message: |-
  站点日志信息
server.torrents.space_results: |-
  个结果
server.torrents.space_staff_notes: |-
  管理组备注
server.torrents.space_to_space: |-
  &nbsp;将续种请求发送给了&nbsp;
server.torrents.split_off_into_new_group: |-
  拆分到新的种子组
server.torrents.sub_title: |-
  中文标题
server.torrents.subscribe: |-
  订阅评论
server.torrents.successfully_sent_re_seed_request: |-
  续种请求发送成功
server.torrents.successfully_sent_re_seed_request_for_torrent: |-
  已成功将种子&nbsp;
server.torrents.tag: |-
  标签
server.torrents.tag_rules: |-
  标签规则
server.torrents.tags: |-
  标签（逗号分隔）
server.torrents.the_destination_torrent_group_does_not_exist: |-
  目标种子组不存在！
server.torrents.there_are_no_tags_to_display: |-
  没有标签可供显示
server.torrents.this_album_is_in_collages: |-
  该影片被收录在 %s
server.torrents.this_album_is_in_collages_count_one: |-
  %s 个合集中
server.torrents.this_album_is_in_collages_count_other: |-
  %s 个合集中
server.torrents.this_album_is_in_personal_collages: |-
  该影片被收录在 %s
server.torrents.this_album_is_in_personal_collages_count_one: |-
  %s 个私人合集中
server.torrents.this_album_is_in_personal_collages_count_other: |-
  %s 个私人合集中
server.torrents.this_request: |-
  该求种
server.torrents.this_torrent_has_active_reports: |-
  该种子带有 %s 个未处理的 %s
server.torrents.this_torrent_has_active_reports_count_one: |-
  报告
server.torrents.this_torrent_has_active_reports_count_other: |-
  报告
server.torrents.time: |-
  时间
server.torrents.title: |-
  电影标题
server.torrents.torrent: |-
  种子
server.torrents.torrent_already_deleted: |-
  种子已被删除。
server.torrents.torrent_cannot_be_deleted_because_the_upload_process_is_not_completed_yet: |-
  由于发布进程尚未完成，种子无法被删除，请稍后再试。
server.torrents.torrent_deleted: |-
  种子已删除
server.torrents.torrent_deleted_notice: |-
  注意
server.torrents.torrent_deleted_successfully: |-
  种子已被成功删除
server.torrents.torrent_group: |-
  种子组：
server.torrents.torrent_group_id_change_confirmation: |-
  种子组 ID 变更确认
server.torrents.torrent_group_leech_status: |-
  种子组优惠设置
server.torrents.torrent_group_meta_editing: |-
  影片信息编辑
server.torrents.torrents_count: |-
  种子数量
server.torrents.total_reward_bonus_points_pre_tax: |-
  总打赏积分（税前）
server.torrents.trump: |-
  可替代
server.torrents.trumpable_reason: |-
  可替代原因
server.torrents.trumped: |-
  被替代
server.torrents.turn_me_green: |-
  大爷，求变绿~
server.torrents.uhd_encode: |-
  UHD 压制类
server.torrents.uhd_encode_title: |-
  质量槽／存档槽／特色槽
server.torrents.uhd_untouched: |-
  UHD 原盘类
server.torrents.uhd_untouched_title: |-
  Remux 槽／原盘槽／DIY 槽
server.torrents.unchecked_torrents: |-
  未检查
server.torrents.unchecked_torrents_results_note: |-
  （共%s个未检查）
server.torrents.checking_status: |-
  检查状态
server.torrents.checked_torrents: |-
  已检查
server.torrents.undo_delete: |-
  撤销删除
server.torrents.unsubscribe: |-
  退订评论
server.torrents.untouched_slot: |-
  原盘槽
server.torrents.untouched_slot_ntsc: |-
  原盘槽 (NTSC)
server.torrents.untouched_slot_pal: |-
  原盘槽 (PAL)
server.torrents.untouched_slot_requirements: |-
  必须是与零售光盘完全一致的副本，仅版权警告部分可以删去。
server.torrents.untouched_type_slot: |-
  原盘槽类 (含 Remux、原盘和 DIY)
server.torrents.up_this_session: |-
  上传量 (本阶段)
server.torrents.upload_by: |-
  由 %s 发布于
server.torrents.upload_torrent: |-
  上传种子
server.torrents.uploader_replied_it: |-
  发布者回复于
server.torrents.used_this_torrent_to_fill: |-
  使用该种子完成了
server.torrents.user: |-
  用户
server.torrents.user_s: |-
  &nbsp;
server.torrents.view_all: |-
  查看所有
server.torrents.view_download_list: |-
  下载列表
server.torrents.view_file_list: |-
  文件列表
server.torrents.view_peer_list: |-
  做种列表
server.torrents.view_report_information: |-
  查看报告信息
server.torrents.view_snatch_list: |-
  完成列表
server.torrents.view_tags: |-
  查看标签
server.torrents.view_the_profile_of_the_user_that_added_this_tag: |-
  查看该标签添加者的个人页面
server.torrents.viewhistory: |-
  历史版本
server.torrents.viewlog: |-
  编辑记录
server.torrents.vote_this_tag_down: |-
  反对该标签
server.torrents.vote_this_tag_up: |-
  支持该标签
server.torrents.votes: |-
  投票
server.torrents.votes_changed: |-
  后悔了？
server.torrents.votes_clear: |-
  清除你的投票
server.torrents.votes_downvote: |-
  踩
server.torrents.votes_downvoted: |-
  你已踩过。
server.torrents.votes_downvotes: |-
  踩
server.torrents.votes_positive: |-
  支持率
server.torrents.votes_score: |-
  分数
server.torrents.votes_score_note: |-
  这是乘以 100 之后的二项式比率信赖区间下界值，具体解释见 &lt;a href=&quot;wiki.php?action=article&amp;id=240&quot;&gt;本文&lt;/a&gt;。
server.torrents.votes_total: |-
  总计
server.torrents.votes_upvote: |-
  赞
server.torrents.votes_upvoted: |-
  你已赞过。
server.torrents.votes_upvotes: |-
  赞
server.torrents.warning: |-
  警告
server.torrents.warning_title: |-
  警告周数
server.torrents.writer: |-
  编剧
server.torrents.year: |-
  年
server.torrents.yes: |-
  是
server.torrents.you_are_attempt_to_move_from: |-
  你正在试图将种子组 ID %s 下的种子
server.torrents.you_are_attempting_to_merge: |-
  你正要将种子组
server.torrents.you_are_req: |-
  你当前请求编辑的种子组是
server.torrents.you_are_req_note: |-
  <p>请详细写明编辑该种子组所需的信息，包括所有相关链接（IMDb、豆瓣等）。<br /><br />请求编辑不会生成报告，会在论坛的 “编辑请求” 版块生成一个帖子。<br /><br />该功能可用于：</p> <ul> <li>“原始发行” 信息，例如：发行年。</li> <li>种子组重命名／资料修正</li> <li>种子组合并</li> <li>其他……</li> </ul>绝对不要将此功能用于种子或艺人。对于单个种子，使用种子报告功能；对于艺人，前往其各自的页面使用请求编辑功能。
server.torrents.you_can_no_longer_delete_this_torrent_as_it_has_been_snatched_by_5_or_more_users: |-
  由于下载完成种子的用户已超过 5 位，因而不能被你删除。如果你认为它存在问题，请报告之。
server.torrents.you_can_no_longer_delete_this_torrent_as_it_has_been_uploaded_for_over_a_week: |-
  由于种子发布已超过一周，因而不能被你删除。如果你认为它存在问题，请报告之。
server.torrents.you_cant_like_yourself: |-
  无法赞自己
server.torrents.you_cant_reward_yourself: |-
  无法赠送给自己
server.torrents.you_have_recently_deleted_3_torrents: |-
  最近你已删除了 3 个种子。如果你还想删除更多，请联系管理组。
server.torrents.you_have_rewarded: |-
  已赠送
server.upload.album_note: |-
  <strong class='u-colorWarning'>注意：</strong>下面艺人和标题的命名，请仔细阅读规则 <a href='rules.php?p=upload#2.3' target='_blank'>2.3. 格式要求</a> 及 <a href='wiki.php?action=article&id=6' target='_blank'>发种命名规则</a>。
server.upload.arabic: |-
  阿拉伯语
server.upload.artist_note: |-
  <strong class='u-colorWarning'>请采用右侧的多艺人增删功能而非简单地将 “Various Artists” 作为一个艺人添加，</strong>参阅 <a href='wiki.php?action=article&amp;id=128' target='_blank'>本文</a> 获取更多信息。
server.upload.assurance: |-
  确保你的种子符合 <h7><a href='rules.php?p=upload' target='_blank'>发布规则</a></h7>。否则将会受到<strong class='u-colorWarning'>警告</strong>或<strong class='u-colorWarning'>处罚</strong>。
server.upload.assurance_note: |-
  <p>上传种子后，你将有一个小时的保护期，在此期间，除你之外没有人可以使用此种子应求，明智地利用这段时间，并搜索 “<a href='requests.php' target='_blank'>求种列表</a>”。</p>
server.upload.auto_detect: |-
  *自动检测
server.upload.bad_folders: |-
  问题文件（夹）名
server.upload.because: |-
  由于
server.upload.brazilian_port: |-
  巴西葡萄牙语
server.upload.bulgarian: |-
  保加利亚语
server.upload.chinese_dubbed_label: |-
  国语配音
server.upload.chinese_movie_synopsis: |-
  中文影片简介
server.upload.chinese_movie_synopsis_note: |-
  如果找不到中文简介，请填写 IMDb 的英文简介，不要重复已经有其他途径展示的信息（演员、语言等）。
server.upload.chinese_simplified: |-
  简体
server.upload.chinese_traditional: |-
  繁体
server.upload.cinematographer: |-
  摄影
server.upload.composer: |-
  作曲
server.upload.copied: |-
  已复制
server.upload.copy: |-
  复制
server.upload.croatian: |-
  克罗地亚语
server.upload.custom_trumpable: |-
  自定义可替代理由
server.upload.czech: |-
  捷克语
server.upload.danish: |-
  丹麦语
server.upload.dead_torrent: |-
  死种
server.upload.director: |-
  导演
server.upload.drop_area: |-
  拖动图片到这里
server.upload.dutch: |-
  荷兰语
server.upload.english: |-
  英语
server.upload.mandarin: |-
  普通话
server.upload.cantonese: |-
  粤语
server.upload.english_movie_synopsis: |-
  英文影片简介
server.upload.english_name: |-
  英文名
server.upload.enter_at_least_one_artist: |-
  请填写至少一位导演。
server.upload.estonian: |-
  爱沙尼亚语
server.upload.explain: |-
  注释
server.upload.finnish: |-
  芬兰语
server.upload.freeleech: |-
  免费下载
server.upload.french: |-
  法语
server.upload.german: |-
  德语
server.upload.greek: |-
  希腊语
server.upload.hardcode_sub: |-
  硬字幕
server.upload.header_warning: |-
  注意
server.upload.hebrew: |-
  希伯来语
server.upload.here: |-
  这里
server.upload.hindi: |-
  印地语
server.upload.hungarian: |-
  匈牙利语
server.upload.icelandic: |-
  冰岛语
server.upload.image_host: |-
  图床
server.upload.image_note: |-
  <h7>请遵守 <a href='wiki.php?action=article&id=27' target='_blank'>封面说明</a>，推荐使用右侧的上传按钮上传到官方图床。<span><strong class='u-colorWarning'>注：</strong>请尽量完善封面，若因偷懒大量发布缺少封面的种子，将会导致你受处罚。</span></h7>
server.upload.imdb_empty_warning: |-
  如 IMDb 链接不存在，请勾选选框，否则无法发布。
server.upload.indonesian: |-
  印度尼西亚语
server.upload.italian: |-
  意大利语
server.upload.japanese: |-
  日语
server.upload.jinzhuan: |-
  禁转
server.upload.korean: |-
  韩语
server.upload.last_update: |-
  最后更新
server.upload.latvian: |-
  拉脱维亚语
server.upload.lithuanian: |-
  立陶宛语
server.upload.marks: |-
  原创标记
server.upload.marks_how_to_blockquote: |-
  <ul> <li>标记解释： <ol class='postlist'> <li>自购：适用于亲自购买的原盘资源等。</li> <li>自制：适用于亲自利用原始素材加工成的 Encode、Remux、DIY 等资源。</li> <li>禁转：未经发布者允许，禁止转载到其他任何地方。</li> </ol> </li> <li>自购和自制只可选其一。</li></ul>
server.upload.marks_how_to_toggle: |-
  &nbsp;如何使用原创标记&nbsp;
server.upload.marks_warning: |-
  <strong class='u-colorWarning'>转载资源不得使用「自购」和「自制」标记，否则将导致你被警告。</strong>
server.upload.mediainfo_bdinfo_note: |-
  如果有多个视频文件或多张碟片，请使用右上角的 “+” 按钮分别添加各自所属的 MediaInfo/BDInfo。
server.upload.mediainfo_bdinfo_placeholder: |-
  请在此粘贴 MediaInfo/BDInfo 全文，每框限填一段。
server.upload.mixed_subtitles: |-
  内封字幕
server.upload.movie_aliases: |-
  中文标题
server.upload.movie_aliases_note: |-
  请填写电影的中国大陆官方译名，请勿填写港译、台译名。
server.upload.movie_codec: |-
  编码
server.upload.movie_container: |-
  容器
server.upload.movie_cover: |-
  电影封面
server.upload.movie_edition_information: |-
  版本信息
server.upload.movie_edition_information_examples: |-
  例：珍藏集的一部分、特殊版本、杜比视界/全景声等非同寻常的特点。<a href=\"wiki.php?action=article&name=版本信息填写指南\">点此</a> 阅读版本指南。<strong>当选择 “电影大师” “标准收藏” “华纳档案馆” “4K修复版” “4K重制版” “重制版” 或自定义版本信息时，强烈建议填写该版本所对应的年份。</strong>
server.upload.movie_edition_information_label: |-
  如果种子来自特定的版本，请勾选此项。
server.upload.movie_feature: |-
  特色槽选项
server.upload.movie_feature_note: |-
  <strong>注意：</strong>以上选项仅适用于外语电影（粤语等方言不被视为外语）。
server.upload.movie_fill: |-
  自动填充
server.upload.movie_imdb: |-
  IMDb
server.upload.movie_information: |-
  具体信息
server.upload.movie_processing: |-
  处理
server.upload.movie_producer: |-
  制片
server.upload.movie_resolution: |-
  分辨率
server.upload.movie_scene: |-
  Scene
server.upload.movie_scene_label: |-
  当且仅当它是 “scene release” 时勾选此项。如果它是你自购自制的，那么它就不是一个 scene release。
server.upload.movie_scene_note: |-
  你可以前往 <a href=\"https://pre.corrupt-net.org/\" target=\"_blank\">pre.corrupt-net.org</a> 或 <a href=\"https://www.srrdb.com/\" target=\"_blank\">srrDB</a> 搜索文件名再次确认。
server.upload.movie_source: |-
  片源
server.upload.movie_subtitles: |-
  字幕
server.upload.movie_subtitles_note: |-
  <strong>注意：</strong>强制字幕和硬编码字幕是两个不同的概念。
server.upload.movie_title: |-
  电影标题
server.upload.movie_torrent_description: |-
  种子描述
server.upload.movie_torrent_description_note: |-
  我们要求你至少提供三张 PNG 截图（<a href=\"wiki.php?action=article&name=原始分辨率截图指南\" target=\"_blank\">指南</a>）和一份完整的 MediaInfo（<a href=\"wiki.php?action=article&name=MediaInfo+使用指南\" target=\"_blank\">指南</a>）或 BDInfo（<a href=\"wiki.php?action=article&name=BDInfo+使用指南\" target=\"_blank\">指南</a>）日志。<br/>建议将文本说明放在前面，截图放在后面，特效字幕截图和画面截图分开，参考 <a href=\"torrents.php?torrentid=1\" target=\"_blank\">此种子</a>。<br/>有关必需信息的更多规定，请参阅我们的 <a href=\"rules.php?p=upload\" target=\"_blank\">规则页面</a>。
server.upload.movie_trumpable: |-
  可替代标记
server.upload.movie_type: |-
  片种
server.upload.movie_upload_note: |-
  <strong class='u-colorWarning'>注意：</strong>下面艺人和标题的命名，请仔细阅读规则 <a href='rules.php?p=upload#2.1' target='_blank'>2.1. 命名</a> 及 <a href='wiki.php?action=article&id=17' target='_blank'>发种命名规则</a>。
server.upload.name: |-
  名称
server.upload.name_too_long: |-
  种子包含了文件名超长的文件：<br />
server.upload.need_download_new_torrent1: |-
  你的种子已经上传成功；但你需要从&nbsp;
server.upload.need_download_new_torrent2: |-
  &nbsp;重新下载种子并开始做种。
server.upload.no_imdb_link: |-
  无 IMDb 链接
server.upload.no_imdb_note: |-
  请务必确认 IMDb 链接确实不存在，否则你可能会被警告。
server.upload.no_sub: |-
  缺少基本字幕
server.upload.no_subtitles: |-
  无字幕
server.upload.no_torrent_uploaded: |-
  种子未上传，或上传了一个空文件。
server.upload.norwegian: |-
  挪威语
server.upload.not_main_movie: |-
  非电影主体
server.upload.not_main_movie_label: |-
  当且仅当种子内不包含电影主体时勾选此项。
server.upload.not_main_movie_note: |-
  例：仅包含额外内容、Rifftrax、工作样片。
server.upload.not_supported_encrypted_file_list: |-
  该种子包含本站不支持的加密文件列表。
server.upload.not_torrent_file: |-
  你上传的文件似乎并不是种子。
server.upload.other: |-
  其他
server.upload.period: |-
  。
server.upload.persian: |-
  波斯语
server.upload.personal_announce: |-
  你的个人 announce 地址是（请保密，不要泄露）
server.upload.personal_announce_note: |-
  为安全起见，已隐藏你的个人 announce 地址，请右键复制使用
server.upload.polish: |-
  波兰语
server.upload.portuguese: |-
  葡萄牙语
server.upload.preview: |-
  预览
server.upload.romanian: |-
  罗马尼亚语
server.upload.russian: |-
  俄语
server.upload.same_torrent_exists: |-
  站点已存在完全相同的种子文件！
server.upload.select_a_type: |-
  请选择一个有效分类。
server.upload.select_file: |-
  选择图片
server.upload.select_valid_format: |-
  请选择有效的格式。
server.upload.self_purchase: |-
  自购
server.upload.self_rip: |-
  自制
server.upload.serbian: |-
  塞尔威亚语
server.upload.show_more: |-
  显示更多
server.upload.slovak: |-
  斯洛伐克语
server.upload.slovenian: |-
  斯洛文尼亚语
server.upload.spanish: |-
  西班牙语
server.upload.special_effects_subtitles_label: |-
  特效字幕
server.upload.staff_note: |-
  管理备注
server.upload.sub_name: |-
  中文名
server.upload.sub_title: |-
  中文标题
server.upload.swedish: |-
  瑞典语
server.upload.upload_torrents: |-
  发布种子
server.upload.tags: |-
  标签
server.upload.thai: |-
  泰语
server.upload.thank_you_fix_torrent: |-
  感谢你修复这个种子！
server.upload.title_how_to_blockquote: |-
  关于标题命名，请阅读规则 <a href='rules.php?p=upload#2.1' target='_blank'>2.1</a>。下面是补充说明。<br/><br/> <strong>电影标题：</strong>即电影的英文主名，需要注意的是，自动填充的「电影标题」很多时候都不是正规的英文标题，而是原始语言标题的英文音译，此时我们会建议你编辑为标准英文名。标准英文名可能会出现在： <ul> <li>电影海报；</li> <li>IMDb 的「Also known as」页面；</li> <li>如果是 Encode，文件名也往往会采用标准英文名。</li> </ul>当且仅当从上述渠道无法获取标准英文名时，才接受原始语言标题的英文音译。举个例子，《流浪地球》应使用《The Wandering Earth》，而非《Liu Lang Di Qiu》。 <br/><br/> <strong>中文标题：</strong>请填写电影的中国大陆官方译名，请勿填写港译、台译名。
server.upload.title_how_to_toggle: |-
  &nbsp;如何填写电影标题&nbsp;
server.upload.title_length_limit: |-
  标题长度必应在 2 到 200 个字符之间。
server.upload.torrent_diff: |-
  本站禁止发布列表
server.upload.torrent_file: |-
  种子文件
server.upload.torrent_info_how_to_blockquote: |-
  <strong>MediaInfo 与规格：</strong>在「MediaInfo/BDInfo」区域按规范粘贴上 MediaInfo（<a href=\"wiki.php?action=article&name=MediaInfo+使用指南\" target=\"_blank\">指南</a>）或 BDInfo（<a href=\"wiki.php?action=article&name=BDInfo+使用指南\" target=\"_blank\">指南</a>）日志，然后在文本框外单击，上方四个带「自动检测」字样的选项就会自动填好。<br/> <strong class=\"u-colorWarning\">请务必在自动填写完毕后再次确认信息是否正确。</strong><br/><br/> <strong>种子描述：</strong>我们要求你至少提供三张 PNG 截图（<a href=\"wiki.php?action=article&name=原始分辨率截图指南\" target=\"_blank\">指南</a>）。<br/>
  另外建议将文本说明放在前面，截图放在后面，特效字幕截图和画面截图分开，参考 <a href=\"torrents.php?torrentid=1\" target=\"_blank\">此种子</a>。<br/>有关必需信息的更多规定，请参阅我们的 <a href=\"rules.php?p=upload\" target=\"_blank\">规则页面</a>。<br/><br/> <strong>字幕：</strong>请注意区分强制字幕和硬编码字幕这两个不同的概念，具体阐释请参见 <a href=\"wiki.php?action=article&id=44\" target=\"_blank\">字幕格式</a> 的「强制字幕」一节。<br/><br/> <strong>特色槽选项：</strong>仅适用于<strong class=\"u-colorWarning\">外语电影</strong>（粤语等方言不被视为外语）。
server.upload.torrent_info_how_to_toggle: |-
  &nbsp;如何填写以下信息&nbsp;
server.upload.torrent_rule: |-
  <h7>除极个别情况，“VA、Various Artists、群星” 不可作为艺人名称，请使用 “+” 编辑具体艺人。更多信息请参阅 <a href='wiki.php?action=article&amp;id=17' target='_blank'>此说明</a>。</h7>
server.upload.trailer_link: |-
  预告片链接
server.upload.turkish: |-
  土耳其语
server.upload.type: |-
  分类
server.upload.ukrainian: |-
  乌克兰语
server.upload.upload: |-
  发布
server.upload.upload_handle_warning: |-
  注意
server.upload.upload_img: |-
  上传
server.upload.upload_note: |-
  请严格遵守站点 <a href='rules.php?p=upload' target='_blank'>发布规则</a>。禁止发布违规资源，欲了解更多信息请移步 <a href='wiki.php?action=article&name=手把手发种指南' target='_blank'>发种教程</a>。
server.upload.vietnamese: |-
  越南语
server.upload.writer: |-
  编剧
server.upload.year: |-
  年份
server.upload.year_remaster: |-
  首次公映年份
server.upload.year_remaster_title: |-
  你为原始发行版指定的年份早于该媒介面世的时间。你需要填写发行信息，尤其是发行版年份。若你无法提供发行信息，请勾选下方的 “未知发行” 选框。
server.user.1_week: |-
  1 周
server.user.2_week: |-
  2 周
server.user.2fa: |-
  两步验证
server.user.4_week: |-
  4 周
server.user.8_week: |-
  8 周
server.user.SettingAlternative: |-
  另一种样式
server.user.SettingShowReleaseGroup: |-
  显示制作组
server.user.SettingTorrentTitle: |-
  标题样式
server.user.setting_torrent_title_seq: |-
  标题顺序
server.user.SettingTorrentTitleTooltip: |-
  保存设置查看结果
server.user.above: |-
  大于
server.user.account: |-
  账号
server.user.account_disable: |-
  锁定账号
server.user.active_points: |-
  活跃点数
server.user.active_points_title: |-
  活跃点数决定了用户的捐助等级且会过期。
server.user.add_friend: |-
  加为好友
server.user.add_time: |-
  添加时间
server.user.added_points: |-
  新增点数
server.user.admin_account: |-
  管理锁定
server.user.advanced: |-
  高级
server.user.after: |-
  晚于
server.user.all_fields_below_here_are_optional: |-
  以下所有区域均选填
server.user.also_search_the_email_addresses_the_member_used_in_the_past: |-
  同时搜索用户在过去曾使用过的邮箱地址
server.user.amount_cny: |-
  总额（人民币）
server.user.and_the_total_ratio_is: |-
  ；总体分享率为&nbsp;
server.user.anonymous: |-
  匿名
server.user.anyone: |-
  任意
server.user.api_key: |-
  API 密钥
server.user.api_note: |-
  重置您的 API 密钥。您必须在使用旧 API 的所有应用程序中更新 API。
server.user.api_copy: |-
 复制到剪贴板
server.user.are_you_sure_delete_notification_filter: |-
  你确定要删除这个推送过滤器吗？
server.user.are_you_sure_you_want_to_delete_this_invite: |-
  你确定要删除这个邀请吗？
server.user.assigned_to: |-
  负责人
server.user.at_least_one_of_these_tags: |-
  推送标签
server.user.authentication_key: |-
  认证密钥
server.user.authentication_key_title: |-
  如果一切照计划顺利进行，密保 APP 会提供给你一个认证密钥，请在此输入。
server.user.authkey: |-
  两步验证
server.user.autocomp: |-
  自动补全
server.user.autocomp_0: |-
  任何位置
server.user.autocomp_1: |-
  禁用
server.user.autocomp_2: |-
  仅搜索栏
server.user.autocomp_title: |-
  自动补全会尝试预测你正在输入的字词。选择“任何位置”会在站点的艺人和标签区域启用自动补全。选择“仅搜索栏”会在搜索区启用自动补全。
server.user.autosave: |-
  文本框内容自动保存
server.user.autosave_title: |-
  你在写帖子或回复时，其中的文本内容会自动保存。如果你在稍后中断书写并返回帖子 (例如意外地点了一下链接然后点击浏览器的后退按钮)，文本内容将依然存在。该选项允许你禁用此功能。
server.user.autosubscribe: |-
  回帖自动通知
server.user.autosubscribe_title: |-
  启用该选项会自动订阅你参与回复的主题。
server.user.autosubscribe_your_request: |-
  自动订阅所发布求种
server.user.autosubscribe_your_request_title: |-
  启用该选项会自动订阅你发起的求种。
server.user.avatar: |-
  头像
server.user.avatar_url: |-
  头像链接
server.user.avatars: |-
  头像显示 (帖子)
server.user.avatars_0: |-
  显示头像
server.user.avatars_2: |-
  显示头像或：
server.user.avatars_3: |-
  替代所有头像以：
server.user.avatars_title: |-
  该选项允许你禁用或显示 (无头像者显示论坛默认头像) 所有的头像。或者，你也可以用一张自定义的图片替代无头像者乃至所有人的头像。
server.user.badge_center: |-
  印记中心
server.user.base: |-
  基本
server.user.base_stats: |-
  基本统计
server.user.base_stats_note: |-
  自动获取用户个人页面上的下载和同伴统计信息。
server.user.base_stats_title: |-
  仅限管理使用的功能，用以绕过用户个人页面上对于做种、下载、完成等数据的隐藏设置。
server.user.because_the_user_limit_has_been_reached_you_are_unable_to_send_invites_at_this_time: |-
  由于用户数量已达到上限，目前你不能发送私人邀请。
server.user.before: |-
  早于
server.user.below: |-
  小于
server.user.between: |-
  介于
server.user.between_the_sizes: |-
  推送种子大小
server.user.between_the_years: |-
  推送发行年份
server.user.blog_announcements: |-
  博客公告
server.user.bonus_points: |-
  积分
server.user.bonus_points_title: |-
  积分。
server.user.bounty: |-
  奖励
server.user.bprates: |-
  积分速率
server.user.browser: |-
  浏览器
server.user.btc: |-
  比特币
server.user.buffer: |-
  缓冲量
server.user.check_all_torrents: |-
  检查全站种子
server.user.check_his_her_torrents: |-
  检查自己的种子
server.user.check_self_torrents: |-
  检查自己的种子
server.user.clearcache: |-
  清空缓存
server.user.clearing_cookies_can_result_in_ghost_sessions: |-
  注意：清除 Cookies 会产生虚假的访问记录，它们会在 30 天后被自动清除。
server.user.close: |-
  点击关闭
server.user.closed: |-
  当前已关闭
server.user.cny: |-
  人民币
server.user.collage_covers_all: |-
  所有
server.user.collage_covers_none: |-
  不显示
server.user.collage_subscriptions: |-
  合集订阅
server.user.collage_subscriptions_title: |-
  启用该选项会使你在订阅的合集有更新时得到通知。
server.user.collected: |-
  已获取
server.user.colornamepreview: |-
  彩色用户名预览
server.user.colornamepreview_title: |-
  你设置的用户名样式可以在这里预览以节约调试的时间
server.user.comm_downloaded: |-
  已下载数
server.user.comm_invited: |-
  已邀请数
server.user.comm_leeching: |-
  当前下载
server.user.comm_originals: |-
  已发原创
server.user.comm_seeding: |-
  当前做种
server.user.comm_snatched: |-
  已完成数
server.user.comm_upload: |-
  已发布数
server.user.comma_seperated_artists_list: |-
  以英文逗号分隔艺人——例如：冯小刚, 成龙, Christopher Nolan, 新海诚
server.user.comma_seperated_countries_list: |-
  以英文逗号分隔国家和地区——例如：China, Japan, UK, Taiwan
server.user.comma_seperated_editions_list: |-
  以英文逗号分隔版本——例如：加长版, 导演剪辑版, 标准收藏
server.user.comma_seperated_languages_list: |-
  以英文逗号分隔语言——例如：Chinese, Japanese, English
server.user.comma_seperated_tags_list: |-
  以英文逗号分隔标签——例如：action, sci.fi, thriller
server.user.comma_seperated_usernames_list: |-
  以英文逗号分隔用户名
server.user.comma_space_and_space: |-
  ，而&nbsp;
server.user.community: |-
  社交
server.user.community_arts: |-
  艺人评论
server.user.community_collcontrib: |-
  合集贡献
server.user.community_colls: |-
  合集评论
server.user.community_collstart: |-
  合集发起
server.user.community_comms: |-
  种子评论
server.user.community_dl: |-
  下载
server.user.community_pots: |-
  论坛帖子
server.user.community_reqs: |-
  求种评论
server.user.community_show: |-
  显示状态
server.user.community_topic: |-
  论坛主题
server.user.compose: |-
  发送私信
server.user.copypaste: |-
  复制访问日志
server.user.country_code: |-
  国家代码
server.user.country_code_title: |-
  由 ISO 3166-1 alpha-2 定义的两位代码
server.user.cover_coll: |-
  海报 (合集)
server.user.cover_coll_number: |-
  海报／页
server.user.cover_coll_title: |-
  该选项允许你调整单个合集页面中显示的海报图数量。
server.user.create_a_new_notification_filter: |-
  新建
server.user.create_filter: |-
  创建
server.user.current_donor_rank: |-
  捐助等级
server.user.current_filter: |-
  当前推送
server.user.current_special_donor_rank: |-
  特殊等级
server.user.customtitle: |-
  自定义头衔
server.user.date: |-
  时间
server.user.default: |-
  默认
server.user.default_search: |-
  默认搜索方式
server.user.default_search_title: |-
  该选项允许你选择以基本 (少量选项) 或高级 (大量选项) 种子搜索箱来搜索种子。
server.user.delete_account: |-
  删除
server.user.delete_invite: |-
  删除邀请
server.user.device_id: |-
  设备 ID
server.user.disable_account: |-
  账号锁定
server.user.disable_push_notifications: |-
  禁用推送
server.user.disabled: |-
  禁用
server.user.disabled_accounts_linked_by_ip: |-
  通过 IP 地址关联的被禁用账号
server.user.disabled_accounts_linked_by_ip_must_also_be_checked: |-
  必须同时勾选 “通过 IP 地址关联的被禁用账号”
server.user.disabled_accounts_linked_by_ip_title: |-
  仅显示通过 IP 地址关联的被禁用账号的用户
server.user.disabled_invites: |-
  邀请权被禁
server.user.disabled_privilege: |-
  权限被禁
server.user.dltext: |-
  下载文本文档
server.user.dltext_title: |-
  一些 ISP 阻止从种子文件下载。如果你希望通过 .txt 文件下载种子，就启用该选项。
server.user.dltext_tr: |-
  启用将种子文件作为 TXT 文档下载的功能
server.user.do_not_care: |-
  不限
server.user.donation_history: |-
  捐助历史
server.user.donor: |-
  捐助者
server.user.donor_statistics: |-
  捐助统计
server.user.donor_system_add_points: |-
  捐助系统（添加点数）
server.user.donor_system_modify_values: |-
  捐助系统（修改数值）
server.user.donor_system_modify_values_title: |-
  此工具仅用于手动修正数值。如欲正常统计捐助，请使用 “捐助系统（添加点数）” 工具。
server.user.donorforum_1: |-
  前缀
server.user.donorforum_2: |-
  后缀
server.user.donorforum_3: |-
  隐藏逗号
server.user.donorforum_4: |-
  预览
server.user.download_list: |-
  下载列表
server.user.downloaded: |-
  下载量
server.user.downloaded_title: |-
  以字节为单位的下载量。也允许在末尾例如 +20GB 或 -35.6364MB。
server.user.downloads: |-
  下载数
server.user.drag_and_drop_change_order: |-
  拖放以改变次序。勾选项会被默认折叠。
server.user.email: |-
  邮箱
server.user.email_address: |-
  邮箱地址
server.user.email_history: |-
  邮箱历史
server.user.emails: |-
  邮箱
server.user.emot: |-
  表情符号
server.user.emot_disable: |-
  关闭表情符号
server.user.emot_title: |-
  表情符号是用来替代传统字符表情如 :) 或 :( 的小图片。
server.user.enable_opendyslexic: |-
  启用 OpenDyslexic 字体
server.user.enable_opendyslexic_title: |-
  OpenDyslexic 字体为阅读障碍人士提供便利
server.user.enabled: |-
  启用
server.user.equal: |-
  等于
server.user.equals: |-
  匹配
server.user.ex_style: |-
  外部样式链接
server.user.ex_style_title: |-
  填写外部 Stylesheet 样式链接可覆盖你所选择的预置样式。
server.user.expand: |-
  展开
server.user.expires_in: |-
  过期倒计时
server.user.filt_tr: |-
  种子搜索箱
server.user.filt_tr_show: |-
  显示种子搜索箱
server.user.filt_tr_show_tags: |-
  显示官方标签筛选区
server.user.filt_tr_title: |-
  勾选“显示种子搜索箱”会默认在种子搜索菜单下显示它。勾选“显示官方标签筛选区”会默认在搜索箱中罗列出可点击的官方标签项。
server.user.for: |-
  共
server.user.forum_warnings: |-
  版块警告
server.user.forums: |-
  论坛
server.user.free_time: |-
  减刑期
server.user.generate: |-
  生成
server.user.gradientscolor: |-
  自定义渐变用户名
server.user.gradientscolor_placeholder: |-
  例：#123456,#456789
server.user.gradientscolor_title: |-
  通过在此填写 2~3 个 RGB 色号（以半角逗号分隔），可使用户名以你指定的渐变色显示。
server.user.hacked: |-
  账号风险警示
server.user.hidden_text: |-
  隐藏内容
server.user.hide_gallery: |-
  收起样式预览
server.user.history: |-
  历史
server.user.inbox_messages: |-
  收件箱信息
server.user.inbsort: |-
  收件箱排序
server.user.inbsort_title: |-
  该选项会强制使未读私信排在前列。
server.user.inbsort_un: |-
  未读消息优先
server.user.info: |-
  用户信息
server.user.infotitle: |-
  个人介绍
server.user.invite: |-
  邀请
server.user.invite_link: |-
  邀请链接
server.user.invite_note: |-
  备注
server.user.invite_rules_1: |-
  <a href=\"/rules.php#1.1\">一人一号</a>。创建多个账号（即俗称的 “马甲”），一经查实即封禁所有相关账号。不要向任何曾经拥有过 {{CONFIG['SITE_NAME']}} 账号的人发送邀请，即使是你的熟人也不可以。如果你邀请了曾被禁用的用户，你将可能被永久禁止。如果他们希望重启账号，请指引他通过账号找回功能、QQ 群、TG 群，或请朋友在申诉板块寻求帮助或发送 <a href=\"/staffpm.php\">Staff PM</a> 联系管理人员。
server.user.invite_rules_2: |-
  <a href=\"/rules.php#2.1\">不要邀请劣质用户</a>。你需要对你邀请的用户负责。你邀请的用户达不到合格分享率，不会导致你受罚。但若你邀请的用户操作违反了<a href=\"/rules.php\">黄金规则</a>，你的账号和／或权限可能会被禁用。
server.user.invite_rules_3: |-
  <a href=\"/rules.php#2.2\">禁止交易、出售、公开赠送或公开提供邀请</a>。只邀请你认识和信任的人，若非如此，请不要邀请他们。邀请主要是指你现实中认识的朋友，若邀请网友，你应该认识并相信他们。不要在未设置等级限制的 PT 论坛版块、贴吧、论坛、聊天软件群（QQ、TG、微信等，私聊除外）、社交媒体或其他任何公共场所提供或回应求邀。例外情况：管理团队指定的专员可以在被批准的场所提供邀请。注意发邀帖不要被搜索引擎抓到。
server.user.invite_rules_4: |-
  请远离邀请交易论坛。如果你邀请任何来自交易论坛的人，你可能会被永久封号，同时牵连到你的邀请树。
server.user.invite_rules_5: |-
  在发放邀请时，请尊重发放邀请处的规则。
server.user.invite_rules_6: |-
  如果你尚未阅读或不理解上述信息，请勿发送邀请。
server.user.invite_rules_7: |-
  请在发送邀请邮件前告知受邀人将 noreply@{{CONFIG['MAIL_HOST']}} 添加到邮件白名单。
server.user.invite_tree: |-
  邀请树
server.user.invitee_list: |-
  邀请列表
server.user.invitees: |-
  后宫数
server.user.invites: |-
  邀请
server.user.ip_address: |-
  IP 地址
server.user.ip_history: |-
  IP 历史
server.user.api: |-
  接口密钥
server.user.irc: |-
  IRC
server.user.irc_no: |-
  无
server.user.irc_yes: |-
  有
server.user.irckey: |-
  IRC 密钥
server.user.irckey_note_1: |-
  <p class='min_padding'>完成设置后，你在 <a href='wiki.php?action=article&amp;id=248'>本站 IRC</a> 通过
server.user.irckey_note_2: |-
  的认证时，将不使用站点密码，而是使用此 key。<span style='white-space: nowrap;'>请注意：</span></p>
  <ul class=\"List\">
  <li>此 key 明文显示且应不同于你的站点密码。</li>
  <li>IRC key 的长度必须在 6 到 32 字符之间。</li>
  </ul>
server.user.irckey_title: |-
  生成 IRC key
server.user.joined: |-
  加入时间
server.user.joineddate: |-
  加入时间
server.user.last_active: |-
  最近活动
server.user.last_activity: |-
  最近活动
server.user.last_donated: |-
  最近捐助时间
server.user.last_seen: |-
  最近登录
server.user.last_torrents: |-
  近期完成的种子
server.user.last_uploads: |-
  近期发布的种子
server.user.lastaccess: |-
  最近访问
server.user.leaderboard_position: |-
  排行榜排名
server.user.leaving_blank_means_you_allow_all_sizes: |-
  (只可订阅大于 1 GB 的种子)
server.user.leaving_blank_means_you_allow_all_years: |-
  (如果不设置，即视为订阅全部年份的种子)
server.user.leech: |-
  下载
server.user.legacy_view: |-
  查看旧系统
server.user.limitedcolor: |-
  纯色用户名
server.user.limitedcolor_blue: |-
  蓝
server.user.limitedcolor_green: |-
  绿
server.user.limitedcolor_orange: |-
  橙
server.user.limitedcolor_purple: |-
  紫
server.user.limitedcolor_red: |-
  红
server.user.limitedcolor_title: |-
  在下拉选框中任选一个颜色，可使用户名以你指定的纯色显示。
server.user.limitedcolor_yellow: |-
  黄
server.user.linked_account: |-
  相关账号
server.user.locked: |-
  已锁定
server.user.locked_account: |-
  账号锁定
server.user.logout: |-
  令其注销
server.user.manage_notifications: |-
  管理推送
server.user.mature: |-
  成人内容 (论坛, 评论, 简介)
server.user.mature_show: |-
  显示成人内容
server.user.mature_title: |-
  {{CONFIG['SITE_NAME']}} 对于社交领域的成人内容政策较为灵活。勾选 “显示成人内容” 会允许你点击访问 <code>[mature]</code> 标签下的任何内容。如果你不勾选 “显示成人内容”，就不会看到任何用 <code>[mature]</code> 包裹起来的内容。
server.user.menu: |-
  目录
server.user.merge_from: |-
  合并到此
server.user.merge_from_title: |-
  输入一个用户名，将其数据合并给该用户。
server.user.min_1: |-
  最小值 1
server.user.min_1888: |-
  最小值 1888
server.user.minimum_imdb_rating: |-
  IMDb 评分下限
server.user.n_users_are_disabled: |-
  %s封禁 (
server.user.n_users_are_disabled_count_one: |-
  &nbsp;位用户已被
server.user.n_users_are_disabled_count_other: |-
  &nbsp;位用户已被
server.user.n_users_have_donated: |-
  %s参与过捐助 (
server.user.n_users_have_donated_count_one: |-
  &nbsp;位用户
server.user.n_users_have_donated_count_other: |-
  &nbsp;位用户
server.user.name: |-
  片名
server.user.new_password: |-
  新密码
server.user.news_announcements: |-
  新闻公告
server.user.next: |-
  下一步
server.user.next_userclass: |-
  下一用户等级
server.user.next_userclass_title1: |-
  下一等级
server.user.next_userclass_title3: |-
  分享率
server.user.next_userclass_title4: |-
  加入时间
server.user.next_userclass_title5: |-
  已发布数
server.user.next_userclass_title6: |-
  下载量
server.user.no: |-
  否
server.user.no_infotitle: |-
  这位用户好像没啥想说的。
server.user.none_of_these_tags: |-
  排除标签
server.user.none_of_these_users: |-
  排除发布者
server.user.not_equal: |-
  排除
server.user.not_factored_into_the_stats_for_the_total_tree: |-
  纳入整棵邀请树的数据统计。
server.user.notification_filter_name: |-
  推送过滤器名称
server.user.notification_filter_name_note: |-
  用以区分不同的过滤器
server.user.notify_me_of_all_new_torrents_with: |-
  新种推送
server.user.create_new_torrent_notify: |-
  新建推送
server.user.new_torrent_notify_list: |-
  推送列表
server.user.new_torrent_notify_name: |-
  推送名称
server.user.notify_my_android: |-
  推送到我的智能设备
server.user.notifyondeletedownloaded: |-
  已下载种子被删通知
server.user.notifyondeletedownloaded_checked: |-
  为已下载的种子被删除启用私信提醒
server.user.notifyondeletedownloaded_title: |-
  启用该选项会在你已下载的种子被删除时私信你。
server.user.notifyondeleteseeding: |-
  做种中种子被删通知
server.user.notifyondeleteseeding_checked: |-
  为做种中的种子被删除启用私信提醒
server.user.notifyondeleteseeding_title: |-
  启用该选项会在你做种中的种子被删除时私信你。
server.user.notifyondeletesnatched: |-
  已完成种子被删通知
server.user.notifyondeletesnatched_checked: |-
  为已完成的种子被删除启用私信提醒
server.user.notifyondeletesnatched_title: |-
  启用该选项会在你已完成的种子被删除时私信你。
server.user.number_of_emails: |-
  邮箱数
server.user.number_of_invitees: |-
  后宫数
server.user.number_of_invites: |-
  邀请数
server.user.off: |-
  关闭
server.user.on: |-
  于
server.user.one_of_these_artists: |-
  推送艺人
server.user.one_of_these_users: |-
  推送发布者
server.user.only_new_releases: |-
  仅订阅新电影
server.user.only_new_releases_label: |-
  仅订阅新电影而非新种子。
server.user.only_these_categories: |-
  推送分类
server.user.only_these_codecs: |-
  推送编码
server.user.only_these_containers: |-
  推送容器
server.user.only_these_countries: |-
  推送地区
server.user.only_these_discounts: |-
  推送促销种子
server.user.only_these_editions: |-
  推送版本
server.user.only_these_languages: |-
  推送语言
server.user.only_these_processings: |-
  推送处理
server.user.only_these_resolutions: |-
  推送分辨率
server.user.only_these_sources: |-
  推送片源
server.user.opendyslexic: |-
  OpenDyslexic
server.user.opendyslexic_title: |-
  <a href='http://opendyslexic.org'>点此</a> 了解 OpenDyslexic，一种 CC-BY 3.0 授权的字体，专为有阅读障碍的用户设计。
server.user.order: |-
  排序
server.user.p_class: |-
  用户等级
server.user.p_clients: |-
  客户端
server.user.p_email: |-
  邮箱地址
server.user.p_host: |-
  服务商
server.user.p_inviter: |-
  邀请人
server.user.p_invites: |-
  邀请数量
server.user.p_ip: |-
  IP
server.user.p_irc: |-
  IRC 密钥
server.user.p_paranoiaLevel: |-
  隐私等级
server.user.p_passkey: |-
  密钥
server.user.p_passwordage: |-
  密码年龄
server.user.p_personal: |-
  个人
server.user.para_artistsadded: |-
  添加的艺人数
server.user.para_artistsadded_title: |-
  该选项控制了你在本站添加到种子组中艺人的显示。其总数包含了通过上传页面，以及种子详情页面 “添加艺人” 功能添加的艺人数量。
server.user.para_badgedisplay: |-
  个人印记全部展示
server.user.para_badgedisplay_label: |-
  允许他人查看自己拥有的全部印记类型
server.user.para_bonus: |-
  积分
server.user.para_collcontr: |-
  合集 (参与的)
server.user.para_collstart: |-
  合集 (发起的)
server.user.para_comments: |-
  评论 (种子)
server.user.para_downloaded: |-
  下载量
server.user.para_emailshowtotc: |-
  邮箱
server.user.para_emailshowtotc_label: |-
  允许某些具有查看邮箱权限的特殊用户组（如 TC）查看你的邮箱
server.user.para_emailshowtotc_title: |-
  允许有查看邮箱权限的用户组查看你的邮箱，普通用户组即使打开此项仍无权限查看。
server.user.para_invited: |-
  邀请
server.user.para_original: |-
  已发布种子 (自购自制)
server.user.para_preview: |-
  预览隐私设置
server.user.para_ratio: |-
  分享率
server.user.para_reqfill: |-
  求种 (完成的)
server.user.para_reqvote: |-
  求种 (投票的)
server.user.para_reratio: |-
  合格分享率
server.user.para_stats: |-
  数据
server.user.para_stats_title: |-
  这些选项控制了你的上传数据总量、下载数据总量、分享率的显示。
server.user.para_torleech: |-
  种子数 (下载中)
server.user.para_torseed: |-
  种子数 (做种中)
server.user.para_torsnatch: |-
  种子数 (已完成)
server.user.para_torsubscr: |-
  种子数 (上传订阅)
server.user.para_torsubscr_note: |-
  允许其他用户订阅你的上传
server.user.para_uploaded: |-
  上传量
server.user.para_upltor: |-
  已发布种子
server.user.para_uplunique: |-
  已发布种子 (独特分组)
server.user.passkey: |-
  密钥
server.user.passkeys: |-
  密钥
server.user.passwords: |-
  密码
server.user.paste: |-
  粘贴
server.user.paste_user_stats: |-
  粘贴用户数据
server.user.pending_invites: |-
  待邀请
server.user.period_space: |-
  。
server.user.period_space_p: |-
  。</p>
server.user.permissions: |-
  权限
server.user.permitted_forums: |-
  特许论坛版块
server.user.permitted_forums_title: |-
  输入以逗号分隔的版块 ID。
server.user.platform: |-
  平台
server.user.please_enter_2fa_key: |-
  请输入 APP 提供给你的两步验证密钥。
server.user.please_enter_correct_numbers: |-
  请输入正确的数值！
server.user.pm: |-
  私信
server.user.pop_up: |-
  弹出式（右下角）
server.user.posting: |-
  发帖
server.user.ppp: |-
  每页显示帖子数 (论坛)
server.user.ppp_number: |-
  帖／页
server.user.ppp_title: |-
  该选项允许你调整论坛中每一页显示帖子的数量。
server.user.primary_class: |-
  主等级
server.user.promote_class: |-
  权限等级
server.user.prowl: |-
  Prowl (APP)
server.user.push: |-
  推送
server.user.push_notifications: |-
  通知推送
server.user.pushbullet: |-
  PushBullet (APP)
server.user.pushover: |-
  Pushover (APP)
server.user.quote_notifications: |-
  回复通知
server.user.quote_notifications_title: |-
  启用该选项会使你在论坛帖子被回复时得到通知。
server.user.rank_expires: |-
  等级失效时间
server.user.ratio: |-
  分享率
server.user.ratio_watch: |-
  分享率监控
server.user.ratio_watch_text: |-
  此用户当前正处于分享率监控重，在%s前必须上传%s，否则他的下载权限会被封禁， 列入分享率监控时之后新增的下载量为：%s
server.user.reason: |-
  原因
server.user.reason_title: |-
  在此填写的原因只会添加到管理组备注中。
server.user.redownloading_confirm: |-
  如果你已丢失内容，这样做会降低你的分享率；在重新下载之前务必检查所有种子的大小。
server.user.regex_contains_illegal_characters: |-
  正则表达式中含有非法字符。
server.user.replies: |-
  回复
server.user.report: |-
  报告该用户
server.user.reported: |-
  已发种子被报告通知
server.user.reported_checked: |-
  为已发布的种子被报告启用私信提醒
server.user.reported_title: |-
  启用该选项会在你已发布的种子被报告时私信你。
server.user.reporter: |-
  用户报告历史
server.user.requestscreated: |-
  求种发起
server.user.requestsfilled: |-
  应求成功
server.user.requestsvoted: |-
  求种投票
server.user.required_ratio: |-
  合格分享率
server.user.reset: |-
  重置
server.user.reset_session: |-
  重置访问终端
server.user.reset_to_default: |-
  重置
server.user.resetpk: |-
  重置 passkey
server.user.resetpk_note: |-
  重置 passkey 后你必须重新下载种子或者更改既有种子为新 announce 地址。
server.user.resetpk_title: |-
  passkey 是每位用户独有的个人标识，泄露可能会导致严重的后果。
server.user.resolved_by: |-
  处理人
server.user.restricted_forums: |-
  封锁论坛版块
server.user.restricted_forums_title: |-
  输入以逗号分隔的版块 ID。
server.user.rss_address: |-
  订阅地址
server.user.se_class: |-
  兼职等级
server.user.search_results: |-
  搜索用户
server.user.search_type: |-
  搜索模式
server.user.search_type_fuzzy: |-
  模糊
server.user.search_type_fuzzy_title: |-
  模糊搜索会自动在搜索字符串前后加上通配符，但 IP 地址搜索出外，除非搜索字符串以 &quot;&#124;&quot;（竖线）开头或结尾。它类似于 vanilla grep 搜索（除了竖线部分）
server.user.search_type_regex: |-
  正则
server.user.search_type_regex_title: |-
  正则搜索使用 MySQL 的正则表达式语法
server.user.search_type_strict: |-
  精确
server.user.search_type_strict_title: |-
  精确搜索不允许使用通配符，它类似于 &#96;grep -E &quot;&circ;SEARCHTERM&#36;&quot;&#96;
server.user.secondary_class: |-
  次等级
server.user.secret_text: |-
  密钥
server.user.secret_text_invalid: |-
  请确认你在密保 APP 中导入了正确的密钥，然后再试一次。
server.user.self_purchase_number: |-
  自购数
server.user.self_rip_number: |-
  自制数
server.user.send_fltoken: |-
  赠送令牌
server.user.send_hacked_account_email_to: |-
  发送账号风险邮件给
server.user.session: |-
  访问终端
server.user.sessions: |-
  访问终端列表
server.user.setting: |-
  设置
server.user.show_bounty: |-
  显示总额
server.user.show_count: |-
  显示数量
server.user.show_gallery: |-
  展开样式预览
server.user.show_list: |-
  显示列表
server.user.snatch_list: |-
  完成列表
server.user.somebody_else_has_moderated: |-
  在你查看该用户的同时，其账号状态已被其他管理修改，请返回原页面并刷新。
server.user.source: |-
  来源
server.user.space_and_space: |-
  &nbsp;和&nbsp;
server.user.space_are: |-
  &nbsp;的
server.user.space_bigger_than_sessions: |-
  &nbsp;> 访问记录
server.user.space_expired: |-
  &nbsp;到期)
server.user.space_is: |-
  &nbsp;的
server.user.space_results: |-
  &nbsp;条搜索结果
server.user.space_user_space_bracket: |-
  &nbsp;用户 (
server.user.space_users_space_bracket: |-
  &nbsp;用户 (
server.user.space_was: |-
  没有
server.user.space_were: |-
  没有
server.user.spent: |-
  已消费
server.user.st_2fa_after: |-
  两步验证
server.user.st_2fa_disable: |-
  禁用
server.user.st_2fa_disabled: |-
  禁用
server.user.st_2fa_enable: |-
  启用
server.user.st_2fa_enabled: |-
  启用
server.user.st_2fa_note1: |-
  当前你的账号已
server.user.st_2fa_note3: |-
  点击此处
server.user.st_2fa_period: |-
  两步验证。
server.user.st_access: |-
  访问设置
server.user.st_token_settings_description: |-
  与 API 令牌相关的设置，以便与 GPW API 进行交互
server.user.st_access_title: |-
  这些设置控制着你登录和访问 {{CONFIG['SITE_NAME']}} 时的具体细节，包括 IRC 以及 tracker。
server.user.st_all: |-
  所有设置
server.user.st_all_title: |-
  查看所有用户设置。
server.user.st_avatar: |-
  头像链接
server.user.st_avatar_2: |-
  第二头像链接
server.user.st_avatar_2_title: |-
  恭喜！由于你已达到捐助等级 2，你已解锁了这项设置，感谢你的慷慨解囊。当其他用户将鼠标放置在你的头像上时，你的普通头像会切换到第二头像。请添加一个符合站点规则的图链。头像的宽度应为 150 像素且会在必要情况下被缩小。
server.user.st_avatar_title: |-
  请添加一个符合站点规则的图链。头像的宽度应为 150 像素且会在必要情况下被缩小。
server.user.st_avatarhover: |-
  头像鼠标悬停文本
server.user.st_avatarhover_title: |-
  恭喜！由于你已达到捐助等级 3，你已解锁了这项设置，感谢你的慷慨解囊。你在此区域输入的文本内容会在其他用户将鼠标放置在你的头像上时显示。文本内容应符合站点规则，至多 200 字符。
server.user.st_community: |-
  社交设置
server.user.st_community_title: |-
  这些设置决定用户互动的格式、分组和展示。
server.user.st_donations: |-
  捐助
server.user.st_donations_0: |-
  显示捐助数据
server.user.st_donations_1: |-
  显示捐助图标
server.user.st_donorforum: |-
  捐助者版块头衔
server.user.st_donorforum_title: |-
  恭喜！通过达到捐助等级 5，你已解锁此项设置，感谢你的慷慨。你可以挑选一个前缀和一个后缀，在你现在有权限访问的捐助者版块中使用。
server.user.st_donorhover: |-
  捐助图标鼠标悬停文本
server.user.st_donorhover_title: |-
  恭喜！通过达到捐助等级 2，你已解锁此项设置，感谢你的慷慨。你在这里输入的文字会在他人鼠标悬停于你捐助图标时显示。所有内容都应遵守站点规则，至多 200 字符。=
server.user.st_donoricon: |-
  自定义捐助图标 URL
server.user.st_donoricon_title: |-
  恭喜！通过达到捐助等级 5，你已解锁此项设置，感谢你的慷慨。如果你想要替换默认的捐助图标，请在此链接到你喜欢的图标。图标必须 15 像素宽 13 像素高。任何其他尺寸的图标都会被自动缩放。
server.user.st_donorlink: |-
  捐助图标外部链接
server.user.st_donorlink_title: |-
  恭喜！通过达到捐助等级 4，你已解锁此项设置，感谢你的慷慨。你在这里输入的链接会在你的捐助图标被点击时生效。所有链接都应遵守站点规则。
server.user.st_email: |-
  邮件地址
server.user.st_email_note: |-
  更改邮件地址时，你需要在 “当前密码” 中输入你的密码，以便验证。
server.user.st_email_title: |-
  这是你想要与站点账号关联的邮箱地址。在你忘记密码或站点需要通知你时会用到。
server.user.st_lastactivity: |-
  最近活动
server.user.st_lastseen: |-
  最近活动
server.user.st_lastseen_title: |-
  启用该选项将允许其他用户看到你最近一次登录站点的时间。
server.user.st_notification: |-
  通知设置
server.user.st_notification_title: |-
  这些设置决定了你收到通知的格式和种类。
server.user.st_paranoia: |-
  隐私设置
server.user.st_paranoia_note: |-
  <p><strong>勾选你愿意向其他用户显示的内容</strong></p> <p>举个例子，如果你为 “求种 (已完成)” 勾选了 “显示数量”，则你已应求的数量就会可见。如果你勾选了 “显示总额”，则你从求种中赚取的上传总量就会可见。如果你勾选了 “显示列表”，则你应求列表中的所有应求都会可见。</p> <p><span class='u-colorWarning'>注意：</span></p> <p><span class='u-colorWarning'>1. 隐私设置对你在本站的安全性毫无影响，以下选项仅能决定其他用户能否看到你在站点的活动。一些信息在站点日志中仍旧可见。</span></p> <p><span class='u-colorWarning'>2. 隐私设置中的某些设置可能会影响你在排行榜中的显示。</span></p>
server.user.st_paranoia_title: |-
  这些设置允许你展示或隐藏个人信息。
server.user.st_password: |-
  修改密码
server.user.st_password_new: |-
  新密码
server.user.st_password_note: |-
  密码强度要求： <ul class=\"List\"> <li>密码大于等于 8 字符，包含至少 1 个小写和大写字母，且包含至少 1 个数字或符号</li> <li>或大于等于 20 字符</li> </ul>
server.user.st_password_old: |-
  当前密码
server.user.st_password_re: |-
  确认新密码
server.user.st_personal: |-
  个人设置
server.user.st_personal_title: |-
  这些设置会变更你个人页面和帖子的外观。
server.user.st_presets: |-
  预设
server.user.st_presets_0: |-
  全部显示
server.user.st_presets_1: |-
  仅显示数量
server.user.st_presets_2: |-
  全部隐藏
server.user.st_profinfo1: |-
  个人介绍详情 1
server.user.st_profinfo1_title: |-
  你可以使用文字和 BBCode 定制你的个人介绍信息。在此输入文字即可为你的个人介绍栏添加正文，如欲解锁额外的个人介绍槽位，请捐助。
server.user.st_profinfo2: |-
  个人介绍详情 2
server.user.st_profinfo2_title: |-
  恭喜！通过达到捐助等级 2，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_profinfo3: |-
  个人介绍详情 3
server.user.st_profinfo3_title: |-
  恭喜！通过达到捐助等级 3，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_profinfo4: |-
  个人介绍详情 4
server.user.st_profinfo4_title: |-
  恭喜！通过达到捐助等级 4，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_profinfo5: |-
  个人介绍详情 5
server.user.st_profinfo5_title: |-
  恭喜！通过达到捐助等级 5，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_proftitle1: |-
  个人介绍标题 1
server.user.st_proftitle1_title: |-
  你可以使用文字和 BBCode 定制你的个人介绍信息。在此输入文字即可为你的个人介绍栏添加标题，如欲解锁额外的个人介绍槽位，请捐助。
server.user.st_proftitle2: |-
  个人介绍标题 2
server.user.st_proftitle2_title: |-
  恭喜！通过达到捐助等级 2，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_proftitle3: |-
  个人介绍标题 3
server.user.st_proftitle3_title: |-
  恭喜！通过达到捐助等级 3，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_proftitle4: |-
  个人介绍标题 4
server.user.st_proftitle4_title: |-
  恭喜！通过达到捐助等级 4，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_proftitle5: |-
  个人介绍标题 5
server.user.st_proftitle5_title: |-
  恭喜！通过达到捐助等级 5，你已解锁此项设置。你可以使用文字和 BBCode 定制你的个人介绍信息。输入标题可以为该节个人信息添加题目。
server.user.st_save: |-
  保存设置
server.user.st_search: |-
  实时搜索
server.user.st_style: |-
  外观设置
server.user.st_style_title: |-
  这些设置会改变整个网站的视觉外观。
server.user.st_torrents: |-
  种子设置
server.user.st_torrents_title: |-
  这些设置决定种子如何被设置、分组、展示和下载。
server.user.staff_mark: |-
  工作人员备注
server.user.staff_mark_title: |-
  在此填写的信息会显示在 staff.php 表格最右列。
server.user.staff_messages: |-
  管理组信息
server.user.staff_messages_title: |-
  启用该选项会使你在收到来自管理组成员的私信时得到通知。
server.user.staff_note: |-
  管理组备注
server.user.staff_notes: |-
  管理组备注
server.user.staff_pm: |-
  管理组私信
server.user.staff_tools: |-
  管理工具
server.user.statistics: |-
  统计
server.user.stats: |-
  统计
server.user.style: |-
  预置样式
server.user.style_tool: |-
  风格工具提示
server.user.style_tool_title: |-
  当悬停带有额外信息的元素 (例如这个元素) 时，使用样式化的工具提示而不是浏览器的默认值
server.user.stylesheet: |-
  层叠样式表
server.user.stylesheet_title: |-
  选择一个样式会变更 {{CONFIG['SITE_NAME']}} 的视觉外观。
server.user.subject: |-
  主题
server.user.submit: |-
  提交
server.user.super_toasty: |-
  Super Toasty (APP)
server.user.supports_partial_url_matching: |-
  支持部分网址匹配，如，输入 “&#124;https://whatimg.com” 会搜索存储在 https://whatimg.com 上的头像
server.user.tagging: |-
  标签编辑
server.user.tagging_title: |-
  这只会封禁用户删除标签的权限。
server.user.test_push: |-
  测试推送
server.user.tg_binding: |-
  Telegram 绑定（暂不需要）
server.user.tg_binding_binded: |-
  已绑定
server.user.tg_binding_key: |-
  绑定密钥:&nbsp;
server.user.tg_binding_right8: |-
  （Passkey 末八位）
server.user.tg_binding_span: |-
  请至 <a target=\"_blank\" href=\"{{CONFIG['TG_GROUP']}}\">官方 TG 群</a>，输入 <code>/gohome</code>，并根据提示进行绑定操作。
server.user.tg_binding_status: |-
  绑定状态:&nbsp;
server.user.tg_binding_unbind: |-
  未绑定
server.user.the_total_amount_downloaded_was: |-
  ；下载总量为&nbsp;
server.user.the_total_amount_uplaoded_by_direct_invitees_was_: |-
  直系后宫的上传总量为&nbsp;
server.user.the_total_amount_uploaded_by_the_entire_tree_was: |-
  整棵邀请树的上传总量为&nbsp;
server.user.theme: |-
  主题
server.user.theme_auto: |-
  自动
server.user.theme_dark: |-
  深色
server.user.theme_light: |-
  浅色
server.user.these_numbers_include_the_stats_of_paranoid_users_and: |-
  其中包含了高隐私等级用户的数据，且会纳入邀请发放脚本的计算。
server.user.this_costs: |-
  这会消耗 %d 积分，之后你还剩余 %d 积分
server.user.this_tree_has_n_entries_n_branches_and_a_depth_of_n: |-
  该邀请树共有 %s 位用户，%s个分支，传了 %s 代。其中包含
server.user.thread_subscriptions: |-
  论坛主题订阅
server.user.to_fuzzy_search_for_a_block_of_addresses_title: |-
  欲模糊搜索（默认）一个地址段（如 55.66.77.*），输入 “55.66.77.” 即可，不要带引号
server.user.token: |-
  令牌
server.user.token_history: |-
  免费令牌历史
server.user.token_number: |-
  令牌
server.user.too_paranoid_to_have_their_stats_shown_here_and: |-
  隐私等级过高，导致其数据不在此显示，且
server.user.torrent_notifications: |-
  种子通知
server.user.torrent_notifications_title: |-
  启用该选项会使你在既有种子订阅过滤器被触发时得到通知。
server.user.torrent_upload: |-
  发种
server.user.torrents_artists_display: |-
  类别展开 (艺人页面)
server.user.torrents_artists_display_title: |-
  在艺人页面，启用该选项会默认展开类别栏目，关闭该选项则会默认折叠类别栏目。
server.user.torrents_artists_display_type: |-
  类别显示详情 (艺人页面)
server.user.torrents_artists_display_type_title: |-
  被勾选的类别会在艺人页面默认被折叠起来。
server.user.torrents_cover: |-
  海报 (种子)
server.user.torrents_cover_title: |-
  启用种子的海报图会在种子信息旁展示其海报图。启用额外海报会同时显示所有额外的海报图。
server.user.torrents_group: |-
  种子分组
server.user.torrents_group_display: |-
  种子分组展开
server.user.torrents_group_display_title: |-
  在种子搜索结果和艺人页面，启用该选项会默认展开种子组，关闭该选项则会默认折叠种子组。
server.user.torrents_group_title: |-
  启用种子分组会让同一种子组的多种格式被置于一个共同的栏目下。
server.user.torrents_group_tool: |-
  启用种子分组功能
server.user.torrents_snatched: |-
  已完成种子标记
server.user.torrents_snatched_title: |-
  启用已完成种子标识会在你已完成的种子旁显示 “已完成！” 字样。
server.user.total_donor_points: |-
  总捐助点数
server.user.total_points: |-
  累计点数
server.user.total_points_title: |-
  累计点数是用户总体贡献的体现，它永远不会过期。它决定了用户的特殊等级及其在捐助者排行榜上的排名。
server.user.total_uploads_title: |-
  历史发种总数（含删种数）
server.user.tracker_ip: |-
  Tracker IP
server.user.traditional: |-
  传统式（顶部）
server.user.tree: |-
  邀请树
server.user.true_downloaded_title: |-
  真实下载量（非个人令牌免费下载数据从 2020 年 6 月 1 日开始统计）
server.user.true_uploaded_title: |-
  真实上传量（不包含积分兑换的上传量）
server.user.two_factor_authentication: |-
  两步验证
server.user.two_factor_authentication_note: |-
  请注意，如果你丢失了你的两步验证密钥以及所有的备用密钥，即使是 {{CONFIG['SITE_NAME']}} 的管理员也救不回你的账号。请确保你将备用密钥安置在妥当之处。
server.user.two_factor_authentication_note_3: |-
  你我约定了一个保障安全的密钥。请通过扫描二维码或是复制粘贴的方式将之导入你的手机。我们推荐使用的密保 APP 可以从 <a href=\"https://itunes.apple.com/gb/app/authy/id494168017?mt=8\">App Store</a> 或是 <a href=\"https://play.google.com/store/apps/details?id=com.authy.authy&hl=en_GB\">Play Store</a> 获取。你也可以使用 <a href=\"https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en_GB\">Google Authenticator</a> APP。当你完成以后就可以点击下一步了。
server.user.u_artist: |-
  艺人添加总数
server.user.u_bounty: |-
  积分消费总额
server.user.u_downloaded: |-
  下载数据
server.user.u_filled: |-
  应求总数
server.user.u_percentile: |-
  百分等级
server.user.u_post: |-
  发帖总数
server.user.u_total: |-
  全站百分等级
server.user.u_uploaded: |-
  上传数据
server.user.u_uploads: |-
  发种总数
server.user.ulocked: |-
  未锁定
server.user.unconfirmed: |-
  未确认
server.user.units_are_in_gibibytes: |-
  单位是 GiB（与 GB 同级的二进制单位）
server.user.unlimitedcolor: |-
  自定义纯色用户名
server.user.unlimitedcolor_placeholder: |-
  例：#123456
server.user.unlimitedcolor_title: |-
  通过在此填写 RGB 色号，可使用户名以你指定的纯色显示。
server.user.unseeded: |-
  未做种种子被删通知
server.user.unseeded_checked: |-
  为你所发布但尚未做种的种子被删除启用私信提醒
server.user.unseeded_title: |-
  启用该选项会在你未做种的种子被删除时私信你。
server.user.update_filter: |-
  更新
server.user.upload: |-
  上传
server.user.uploaded: |-
  上传量
server.user.uploaded_title: |-
  以字节为单位的上传量。也允许在末尾例如 +20GB 或 -35.6364MB。
server.user.uploads: |-
  上传数
server.user.user_disable: |-
  封禁
server.user.user_po: |-
  用户权限
server.user.user_reason: |-
  理由
server.user.user_search: |-
  用户搜索
server.user.username: |-
  用户名
server.user.username_invites_tree: |-
  &nbsp;> 邀请 > 邀请树
server.user.value: |-
  数值
server.user.view: |-
  查看
server.user.view_list: |-
  查看做种列表
server.user.view_notifications: |-
  查看推送
server.user.view_users: |-
  查看用户
server.user.view_wiki_guide: |-
  阅读指南
server.user.vote: |-
  票数
server.user.voting: |-
  投票链接
server.user.voting_disable: |-
  禁用投票链接
server.user.voting_title: |-
  该选项允许你启用或禁用艺人、合集和下载清单页面的“up”和“down”投票链接。
server.user.warn: |-
  警告
server.user.warn_reason: |-
  警告原因
server.user.warn_reason_title: |-
  原因会附加在警告私信中被发送给用户！
server.user.warn_time: |-
  有效期
server.user.warned: |-
  警告
server.user.warning_expires_in: |-
  警告到期时间
server.user.week_one: |-
  周
server.user.week_other: |-
  周
server.user.wiki: |-
  Wiki
server.user.year: |-
  年
server.user.yes: |-
  是
server.user.you_may_not_send_invites_while_on_ratio_watch_or: |-
  在分享率监控或下载权限被禁期间，你不能发放邀请。请阅读 <a href=\"wiki.php?action=article&amp;id=101\">本文</a> 了解详情。
server.user.your_invites_have_been_disabled: |-
  你的邀请权限已被封禁。请阅读 <a href=\"wiki.php?action=article&amp;id=101\">本文</a> 了解详情。
server.userhistory.age_of_account: |-
  账号年龄
server.userhistory.artist: |-
  艺人
server.userhistory.catch_up: |-
  同步最新记录
server.userhistory.changed: |-
  变更于
server.userhistory.collage: |-
  合集
server.userhistory.current_email: |-
  当前邮箱
server.userhistory.current_ip: |-
  当前 IP
server.userhistory.downloaded: |-
  下载量
server.userhistory.elapsed: |-
  经过时长
server.userhistory.email: |-
  邮箱
server.userhistory.email_history_for: |-
  %s 的邮箱历史
server.userhistory.end: |-
  结束于
server.userhistory.ended: |-
  结束于
server.userhistory.expire_button: |-
  (作废)
server.userhistory.expired: |-
  已过期
server.userhistory.fl_token_history: |-
  令牌消费历史
server.userhistory.fl_token_history_for: |-
  %s 的令牌消费历史
server.userhistory.forum: |-
  版块
server.userhistory.forums: |-
  论坛
server.userhistory.go_to_post_history: |-
  查看发帖历史
server.userhistory.go_to_subscriptions: |-
  查看订阅
server.userhistory.grouped: |-
  分组显示
server.userhistory.header_quote_notifications: |-
  回复通知推送
server.userhistory.hide: |-
  隐藏
server.userhistory.in: |-
  发布在&nbsp;
server.userhistory.invite_email: |-
  邀请邮箱
server.userhistory.ip_address: |-
  IP 地址
server.userhistory.ip_address_history_for: |-
  %s 的 IP 地址历史
server.userhistory.ip_address_search: |-
  IP 地址搜索
server.userhistory.last_edited_by: |-
  最近编辑者是
server.userhistory.last_post_time: |-
  最近回帖时间
server.userhistory.left_bracket: |-
  &nbsp;(
server.userhistory.never: |-
  从未
server.userhistory.new: |-
  新
server.userhistory.new_right_bracket: |-
  &nbsp;新)
server.userhistory.new_torrent_one: |-
  %s 新种子
server.userhistory.new_torrent_other: |-
  %s 新种子
server.userhistory.no: |-
  否
server.userhistory.no_quotes: |-
  没有 %s 回复。
server.userhistory.no_subscribed_collages: |-
  没有已订阅的合集
server.userhistory.no_subscriptions: |-
  没有订阅
server.userhistory.no_topics: |-
  没有主题
server.userhistory.old: |-
  旧
server.userhistory.old_emails: |-
  旧邮箱
server.userhistory.only_display_collages_with_new_additions: |-
  只显示有更新的合集
server.userhistory.only_display_posts_with_unread_replies: |-
  只显示含未读帖子的主题
server.userhistory.only_display_posts_with_unread_replies_grouped: |-
  只分组显示含未读帖子的主题
server.userhistory.only_display_subscriptions_with_unread_replies: |-
  只显示含未读帖子的订阅
server.userhistory.passkey_history_for: |-
  %s 的密钥历史
server.userhistory.password_reset_history_for: |-
  %s 的密码重置历史
server.userhistory.post_bodies: |-
  帖子正文
server.userhistory.post_history_for: |-
  %s 的发帖历史
server.userhistory.quote_notifications: |-
  回复通知推送
server.userhistory.quoted_by: |-
  回复者是
server.userhistory.registration_ip_address: |-
  注册时的 IP 地址
server.userhistory.request: |-
  求种
server.userhistory.search: |-
  搜索
server.userhistory.search_wimia_com: |-
  通过 WIMIA.com 搜索
server.userhistory.set: |-
  设置于
server.userhistory.set_from_ip: |-
  设置时使用的 IP
server.userhistory.show: |-
  显示
server.userhistory.show_all_posts: |-
  显示所有帖子
server.userhistory.show_all_posts_grouped: |-
  分组显示所有帖子
server.userhistory.show_all_quotes: |-
  显示所有回复
server.userhistory.show_all_subscribed_collages: |-
  显示所有已订阅的合集
server.userhistory.show_all_subscriptions: |-
  显示所有订阅
server.userhistory.show_subscriptions: |-
  查看订阅
server.userhistory.show_unread_quotes: |-
  显示未读回复
server.userhistory.space_new: |-
  新的
server.userhistory.span_new: |-
  <span class=\"u-colorWarning\">(新!)</span>
server.userhistory.start: |-
  开始于
server.userhistory.started: |-
  开始于
server.userhistory.subscribed_collages: |-
  合集订阅
server.userhistory.subscriptions: |-
  订阅
server.userhistory.threads_started_by: |-
  由 %s 发起的主题
server.userhistory.time: |-
  时间
server.userhistory.tokens_used: |-
  消费次数
server.userhistory.topic: |-
  主题
server.userhistory.topic_creation_time: |-
  主题发布时间
server.userhistory.torrent: |-
  种子
server.userhistory.tracker_ip_address_history_for: |-
  %s 的 Tracker IP 地址历史
server.userhistory.unread: |-
  未读的&nbsp;
server.userhistory.unread_post_history_for: |-
  未读的 %s 的发帖历史
server.userhistory.view_all_ip_address: |-
  查看所有 IP 地址
server.userhistory.view_ip_addresses_with_users: |-
  查看有用户使用的 IP 地址
server.userhistory.wildcard_search_examples: |-
  通配符（*）搜索示例：127.0.* 或 1*2.0.*.1 或 *.*.*.*
server.userhistory.with_new_additions: |-
  有更新
server.userhistory.with_unread_posts: |-
  含未读帖子
server.userhistory.with_unread_posts_number: |-
  含未读帖子的 %s
server.userhistory.yes: |-
  是
server.wiki.add_alias: |-
  添加别名
server.wiki.aliases: |-
  别名
server.wiki.all_articles: |-
  浏览所有文章
server.wiki.article: |-
  文章
server.wiki.article_access: |-
  权限
server.wiki.article_access_detail: |-
  在某些情况下，文章的阅读和编辑权限应当被加以限制。
server.wiki.article_chinese: |-
  中文 Wiki 链接
server.wiki.article_create: |-
  新建文章
server.wiki.article_delete: |-
  删除文章
server.wiki.article_delete_confirm1: |-
  你确定要删除吗？
server.wiki.article_delete_confirm2: |-
  彻底删除，意味着删除之后无法撤销此操作。
server.wiki.article_delete_confirm3: |-
  在获知此信息后，你是否还要删除本文及其所有的编辑版本、别名，仿佛它从未存在过一样？
server.wiki.article_edit: |-
  编辑文章
server.wiki.article_history: |-
  编辑历史
server.wiki.article_language: |-
  语言
server.wiki.article_language_detail: |-
  请选择你的文章编写时所使用的语言。如果文章并非以中文写就，你必须在下方填写对应中文文章的链接。如果你在下拉菜单中没有见到所需语言，请在完成文章的创建之后私信管理组。
server.wiki.article_language_select: |-
  语言
server.wiki.article_note1: |-
  为教程和知识而搜索。
server.wiki.article_note2: |-
  另外，你也可以通过首字母快速筛选所需的文章。
server.wiki.article_restrict_edit: |-
  允许编辑
server.wiki.article_restrict_read: |-
  允许阅读
server.wiki.body: |-
  正文
server.wiki.browse_wiki_articles: |-
  浏览文章
server.wiki.chinese: |-
  中文
server.wiki.compare: |-
  对比
server.wiki.create: |-
  创建
server.wiki.create_an_article: |-
  新建文章
server.wiki.delete_aliases: |-
  删除别名
server.wiki.details: |-
  详情
server.wiki.english: |-
  English
server.wiki.for_an_similar_article: |-
  &nbsp;一篇类似文章。
server.wiki.history_age: |-
  时间
server.wiki.history_author: |-
  编辑者
server.wiki.history_new: |-
  新
server.wiki.history_old: |-
  旧
server.wiki.history_revision: |-
  修订序号
server.wiki.history_title: |-
  文章标题
server.wiki.last_edited: |-
  最近更新者
server.wiki.last_edited_by: |-
  最近编辑者
server.wiki.last_updated_on: |-
  最近更新于
server.wiki.last_upload: |-
  最近更新
server.wiki.no_article_found: |-
  没有找到文章
server.wiki.no_article_matching_the_name: |-
  没有与搜索关键字匹配的文章。
server.wiki.order_by: |-
  排序方式
server.wiki.other_languages: |-
  他语版本
server.wiki.permissions: |-
  权限
server.wiki.read: |-
  查看
server.wiki.replace_article: |-
  &nbsp;一篇文章取而代之
server.wiki.revision_history: |-
  %s 的历史版本
server.wiki.revisions: |-
  的新旧版本
server.wiki.search: |-
  搜索
server.wiki.search_articles: |-
  搜索文章
server.wiki.search_for: |-
  搜索关键字
server.wiki.search_in: |-
  搜索范围
server.wiki.title: |-
  标题
server.wiki.toc: |-
  目录
server.wiki.version: |-
  版本
server.wiki.view_user: |-
  查看用户
server.wiki.you_must_be_a_higher_user_class_to_view: |-
  你的用户等级不足以阅读本文
server.country.afghanistan: |-
  阿富汗
server.country.aland_islands: |-
  奥兰群岛
server.country.albania: |-
  阿尔巴尼亚
server.country.algeria: |-
  阿尔及利亚
server.country.american_samoa: |-
  美属萨摩亚
server.country.andorra: |-
  安道尔
server.country.angola: |-
  安哥拉
server.country.anguilla: |-
  安圭拉
server.country.antigua_and_barbuda: |-
  安提瓜和巴布达
server.country.argentina: |-
  阿根廷
server.country.armenia: |-
  亚美尼亚
server.country.aruba: |-
  阿鲁巴
server.country.australia: |-
  澳大利亚
server.country.austria: |-
  奥地利
server.country.azerbaijan: |-
  阿塞拜疆
server.country.bangladesh: |-
  孟加拉
server.country.bahrain: |-
  巴林
server.country.bahamas: |-
  巴哈马
server.country.barbados: |-
  巴巴多斯
server.country.belarus: |-
  白俄罗斯
server.country.belgium: |-
  比利时
server.country.belize: |-
  伯利兹
server.country.benin: |-
  贝宁
server.country.bermuda: |-
  百慕大
server.country.bhutan: |-
  不丹
server.country.bolivia: |-
  玻利维亚
server.country.bosnia_and_herzegovina: |-
  波斯尼亚和黑塞哥维那
server.country.botswana: |-
  博茨瓦纳
server.country.bouvet_island: |-
  布维岛
server.country.brazil: |-
  巴西
server.country.brunei: |-
  文莱
server.country.bulgaria: |-
  保加利亚
server.country.burkina_faso: |-
  布基纳法索
server.country.burundi: |-
  布隆迪
server.country.cambodia: |-
  柬埔寨
server.country.cameroon: |-
  喀麦隆
server.country.canada: |-
  加拿大
server.country.cape_verde: |-
  佛得角
server.country.central_african_republic: |-
  中非
server.country.chad: |-
  乍得
server.country.chile: |-
  智利
server.country.christmas_islands: |-
  圣诞岛
server.country.cocos_(keeling)_islands: |-
  科科斯（基林）群岛
server.country.colombia: |-
  哥伦比亚
server.country.comoros: |-
  科摩罗
server.country.congo_(congo-kinshasa): |-
  刚果（金）
server.country.congo: |-
  刚果
server.country.cook_islands: |-
  库克群岛
server.country.costa_rica: |-
  哥斯达黎加
server.country.cote_d'ivoire: |-
  科特迪瓦
server.country.china: |-
  中国
server.country.croatia: |-
  克罗地亚
server.country.cuba: |-
  古巴
server.country.czech: |-
  捷克
server.country.cyprus: |-
  塞浦路斯
server.country.denmark: |-
  丹麦
server.country.djibouti: |-
  吉布提
server.country.dominica: |-
  多米尼加
server.country.ecuador: |-
  厄瓜多尔
server.country.egypt: |-
  埃及
server.country.equatorial_guinea: |-
  赤道几内亚
server.country.eritrea: |-
  厄立特里亚
server.country.estonia: |-
  爱沙尼亚
server.country.ethiopia: |-
  埃塞俄比亚
server.country.faroe_islands: |-
  法罗群岛
server.country.fiji: |-
  斐济
server.country.finland: |-
  芬兰
server.country.france: |-
  法国
server.country.metropolitanfrance: |-
  法国大都会
server.country.french_guiana: |-
  法属圭亚那
server.country.french_polynesia: |-
  法属波利尼西亚
server.country.gabon: |-
  加蓬
server.country.gambia: |-
  冈比亚
server.country.georgia: |-
  格鲁吉亚
server.country.germany: |-
  德国
server.country.ghana: |-
  加纳
server.country.gibraltar: |-
  直布罗陀
server.country.greece: |-
  希腊
server.country.grenada: |-
  格林纳达
server.country.guadeloupe: |-
  瓜德罗普岛
server.country.guam: |-
  关岛
server.country.guatemala: |-
  危地马拉
server.country.guernsey: |-
  根西岛
server.country.guinea-bissau: |-
  几内亚比绍
server.country.guinea: |-
  几内亚
server.country.guyana: |-
  圭亚那
server.country.haiti: |-
  海地
server.country.honduras: |-
  洪都拉斯
server.country.hungary: |-
  匈牙利
server.country.iceland: |-
  冰岛
server.country.india: |-
  印度
server.country.indonesia: |-
  印度尼西亚
server.country.iran: |-
  伊朗
server.country.iraq: |-
  伊拉克
server.country.ireland: |-
  爱尔兰
server.country.isle_of_man: |-
  马恩岛
server.country.israel: |-
  以色列
server.country.italy: |-
  意大利
server.country.jamaica: |-
  牙买加
server.country.japan: |-
  日本
server.country.jersey: |-
  泽西岛
server.country.jordan: |-
  约旦
server.country.kazakhstan: |-
  哈萨克斯坦
server.country.kenya: |-
  肯尼亚
server.country.kiribati: |-
  基里巴斯
server.country.korea_(south): |-
  韩国
server.country.korea_(north): |-
  朝鲜
server.country.kuwait: |-
  科威特
server.country.kyrgyzstan: |-
  吉尔吉斯斯坦
server.country.laos: |-
  老挝
server.country.latvia: |-
  拉脱维亚
server.country.lebanon: |-
  黎巴嫩
server.country.lesotho: |-
  莱索托
server.country.liberia: |-
  利比里亚
server.country.libya: |-
  利比亚
server.country.liechtenstein: |-
  列支敦士登
server.country.lithuania: |-
  立陶宛
server.country.luxembourg: |-
  卢森堡
server.country.macedonia: |-
  马其顿
server.country.malawi: |-
  马拉维
server.country.malaysia: |-
  马来西亚
server.country.madagascar: |-
  马达加斯加
server.country.maldives: |-
  马尔代夫
server.country.mali: |-
  马里
server.country.malta: |-
  马耳他
server.country.marshall_islands: |-
  马绍尔群岛
server.country.martinique: |-
  马提尼克岛
server.country.mauritania: |-
  毛里塔尼亚
server.country.mauritius: |-
  毛里求斯
server.country.mayotte: |-
  马约特
server.country.mexico: |-
  墨西哥
server.country.micronesia: |-
  密克罗尼西亚
server.country.moldova: |-
  摩尔多瓦
server.country.monaco: |-
  摩纳哥
server.country.mongolia: |-
  蒙古
server.country.montenegro: |-
  黑山
server.country.montserrat: |-
  蒙特塞拉特
server.country.morocco: |-
  摩洛哥
server.country.mozambique: |-
  莫桑比克
server.country.myanmar: |-
  缅甸
server.country.namibia: |-
  纳米比亚
server.country.nauru: |-
  瑙鲁
server.country.nepal: |-
  尼泊尔
server.country.netherlands: |-
  荷兰
server.country.new_caledonia: |-
  新喀里多尼亚
server.country.new_zealand: |-
  新西兰
server.country.nicaragua: |-
  尼加拉瓜
server.country.niger: |-
  尼日尔
server.country.nigeria: |-
  尼日利亚
server.country.niue: |-
  纽埃
server.country.norfolk_island: |-
  诺福克岛
server.country.norway: |-
  挪威
server.country.oman: |-
  阿曼
server.country.pakistan: |-
  巴基斯坦
server.country.palau: |-
  帕劳
server.country.palestine: |-
  巴勒斯坦
server.country.panama: |-
  巴拿马
server.country.papua_new_guinea: |-
  巴布亚新几内亚
server.country.peru: |-
  秘鲁
server.country.philippines: |-
  菲律宾
server.country.pitcairn_islands: |-
  皮特凯恩群岛
server.country.poland: |-
  波兰
server.country.portugal: |-
  葡萄牙
server.country.puerto_rico: |-
  波多黎各
server.country.qatar: |-
  卡塔尔
server.country.reunion: |-
  留尼汪岛
server.country.romania: |-
  罗马尼亚
server.country.rwanda: |-
  卢旺达
server.country.russia: |-
  俄罗斯
server.country.saint_helena: |-
  圣赫勒拿
server.country.saint_kitts-nevis: |-
  圣基茨和尼维斯
server.country.saint_lucia: |-
  圣卢西亚
server.country.saint_vincent_and_the_grenadines: |-
  圣文森特和格林纳丁斯
server.country.el_salvador: |-
  萨尔瓦多
server.country.samoa: |-
  萨摩亚
server.country.san_marino: |-
  圣马力诺
server.country.sao_tome_and_principe: |-
  圣多美和普林西比
server.country.saudi_arabia: |-
  沙特阿拉伯
server.country.senegal: |-
  塞内加尔
server.country.seychelles: |-
  塞舌尔
server.country.sierra_leone: |-
  塞拉利昂
server.country.singapore: |-
  新加坡
server.country.serbia: |-
  塞尔维亚
server.country.slovakia: |-
  斯洛伐克
server.country.slovenia: |-
  斯洛文尼亚
server.country.solomon_islands: |-
  所罗门群岛
server.country.somalia: |-
  索马里
server.country.south_africa: |-
  南非
server.country.spain: |-
  西班牙
server.country.sri_lanka: |-
  斯里兰卡
server.country.sudan: |-
  苏丹
server.country.suriname: |-
  苏里南
server.country.swaziland: |-
  斯威士兰
server.country.sweden: |-
  瑞典
server.country.switzerland: |-
  瑞士
server.country.syria: |-
  叙利亚
server.country.tajikistan: |-
  塔吉克斯坦
server.country.tanzania: |-
  坦桑尼亚
server.country.thailand: |-
  泰国
server.country.trinidad_and_tobago: |-
  特立尼达和多巴哥
server.country.timor-leste: |-
  东帝汶
server.country.togo: |-
  多哥
server.country.tokelau: |-
  托克劳
server.country.tonga: |-
  汤加
server.country.tunisia: |-
  突尼斯
server.country.turkey: |-
  土耳其
server.country.turkmenistan: |-
  土库曼斯坦
server.country.tuvalu: |-
  图瓦卢
server.country.uganda: |-
  乌干达
server.country.ukraine: |-
  乌克兰
server.country.united_arab_emirates: |-
  阿拉伯联合酋长国
server.country.united_kingdom: |-
  英国
server.country.united_states: |-
  美国
server.country.uruguay: |-
  乌拉圭
server.country.uzbekistan: |-
  乌兹别克斯坦
server.country.vanuatu: |-
  瓦努阿图
server.country.vatican_city: |-
  梵蒂冈
server.country.venezuela: |-
  委内瑞拉
server.country.vietnam: |-
  越南
server.country.wallis_and_futuna: |-
  瓦利斯群岛和富图纳群岛
server.country.western_sahara: |-
  西撒哈拉
server.country.yemen: |-
  也门
server.country.yugoslavia: |-
  南斯拉夫
server.country.zambia: |-
  赞比亚
server.country.zimbabwe: |-
  津巴布韦
server.country.taiwan: |-
  中国台湾
server.country.hong_kong: |-
  中国香港
server.country.macao: |-
  中国澳门
server.common.minutes: |-
  分钟
server.collages.contributed_collages_browse: |-
  %s 建设的合集
server.collages.started_collages_browse: |-
  %s 发起的合集
server.common.save_all_change: |-
  保存
server.torrents.report_info: |-
  报告信息
server.collages.not_torrent_link: |-
  需填写站内种子地址
server.requests.delete_request: |-
  删除求种
server.requests.unfill_request: |-
  取消应求
server.requests.filled_user: |-
  应求人
server.common.open: |-
  开启
server.common.close: |-
  关闭
server.apply.resolve: |-
  解决
server.apply.reopen: |-
  重新打开
server.user.torrent_title_drag_note: |-
  左右拖拽下方项目以排序
server.bookmarks.delete_checked: |-
  删除选中
server.common.update: |-
  更新
", "zh-Hans/zh-Hans.yaml", "/var/www/src/locales/zh-Hans/zh-Hans.yaml");
    }
}
