<?php
return array(

	/**
	 * Menu items and titles
	 */
	'groups' => "小组",
	'groups:owned' => "我创建的小组",
	'groups:owned:user' => '%s创建的小组',
	'groups:yours' => "我加入的小组",
	'groups:user' => "%s'加入的小组",
	'groups:all' => "全部小组",
	'groups:add' => "创建新的小组",
	'groups:edit' => "编辑小组",
	'groups:delete' => '删除小组',
	'groups:membershiprequests' => '管理加入申请',
	'groups:membershiprequests:pending' => '管理加入申请(%s)',
	'groups:invitations' => '小组邀请',
	'groups:invitations:pending' => '小组邀请(%s)',

	'groups:icon' => '小组图标 (留空不改变)',
	'groups:name' => '小组名称',
	'groups:username' => '小组短名(显示于URLs, 只能是字母数字)',
	'groups:description' => '描述',
	'groups:briefdescription' => '简要描述',
	'groups:interests' => '标签',
	'groups:website' => '网页',
	'groups:members' => '小组成员',
	'groups:my_status' => '我的状态',
	'groups:my_status:group_owner' => '你拥有这个小组',
	'groups:my_status:group_member' => '你在此小组中',
	'groups:subscribed' => '小组通知开启',
	'groups:unsubscribed' => '小组通知关闭',

	'groups:members:title' => '%s的成员',
	'groups:members:more' => "查看全部成员",
	'groups:membership' => "小组成员权限",
	'groups:content_access_mode' => "小组内容的访问许可",
	'groups:content_access_mode:warning' => "警告: 改变此设置将不会改变此小组已经存在内容的访问权限",
	'groups:content_access_mode:unrestricted' => "非限制 - 访问取决于内容层级的设置",
	'groups:content_access_mode:membersonly' => "仅限成员 - 非成员不能访问此小组的内容",
	'groups:access' => "访问许可",
	'groups:owner' => "组长",
	'groups:owner:warning' => "警告: 如果你改变这个值，你将不再是此小组的组长",
	'groups:widget:num_display' => '显示小组数量',
	'groups:widget:membership' => '小组成员',
	'groups:widgets:description' => '显示你所在的小组',

	'groups:widget:group_activity:title' => '小组活动',
	'groups:widget:group_activity:description' => '查看你的小组的活动',
	'groups:widget:group_activity:edit:select' => '选定一个小组',
	'groups:widget:group_activity:content:noactivity' => '此小组尚无活动',
	'groups:widget:group_activity:content:noselect' => '编辑此小工具以便选择小组',

	'groups:noaccess' => '不能访问此小组',
	'groups:permissions:error' => '你无权限',
	'groups:ingroup' => '在小组',
	'groups:cantcreate' => '仅仅管理员可以创建小组',
	'groups:cantedit' => '你不能编辑此小组',
	'groups:saved' => '保存的小组',
	'groups:save_error' => '小组不能保存',
	'groups:featured' => '特色小组',
	'groups:makeunfeatured' => '非特色',
	'groups:makefeatured' => '标记为特色',
	'groups:featuredon' => '%s 现在是一个特色小组',
	'groups:unfeatured' => '%s 已从特色小组去除',
	'groups:featured_error' => '无效小组',
	'groups:nofeatured' => '尚无特色小组',
	'groups:joinrequest' => '申请加入',
	'groups:join' => '加入小组',
	'groups:leave' => '离开小组',
	'groups:invite' => '邀请朋友',
	'groups:invite:title' => '邀请朋友到此小组',
	'groups:inviteto' => "邀请朋友到 '%s'",
	'groups:nofriends' => "你无好友可以被邀请加入此小组",
	'groups:nofriendsatall' => '你无好友可以邀请!',
	'groups:viagroups' => "经由小组",
	'groups:group' => "小组",
	'groups:search:tags' => "标签",
	'groups:search:title' => "用 '%s' 搜索小组",
	'groups:search:none' => "没有找到匹配的小组",
	'groups:search_in_group' => "在此小组内搜索",
	'groups:acl' => "小组: %s",

	'discussion:topic:notify:summary' => '新的讨论主题叫作：%s',
	'discussion:topic:notify:subject' => '新的讨论主题: %s',
	'discussion:topic:notify:body' =>
'%s 加入一个新的讨论主题到小组 %s:

标题: %s

%s

查看回复此讨论主题:
%s
',

	'discussion:reply:notify:summary' => '%s主题的新回复',
	'discussion:reply:notify:subject' => '%s主题的新回复',
	'discussion:reply:notify:body' =>
'%s 回复了讨论主题 %s 在小组 %s:

%s

View and reply to the discussion:
%s
',

	'groups:activity' => "小组活动",
	'groups:enableactivity' => '开启小组活动',
	'groups:activity:none' => "尚无小组活动",

	'groups:notfound' => "未发现小组",
	'groups:notfound:details' => "申请的小组不存在或者你没有访问权限",

	'groups:requests:none' => '暂无成员加入申请',

	'groups:invitations:none' => '暂无邀请',

	'item:object:groupforumtopic' => "讨论主题",
	'item:object:discussion_reply' => "讨论回复",

	'groupforumtopic:new' => "添加讨论帖",

	'groups:count' => "创建的小组",
	'groups:open' => "开放的小组",
	'groups:closed' => "封闭的小组",
	'groups:member' => "成员",
	'groups:searchtag' => "通过标签搜索小组",

	'groups:more' => '更多小组',
	'groups:none' => '没有小组',

	/**
	 * Access
	 */
	'groups:access:private' => '封闭 - 只接受受邀用户',
	'groups:access:public' => '开放 - 任何用户可以加入',
	'groups:access:group' => '仅限小组成员',
	'groups:closedgroup' => "此小组成员资格已经封闭",
	'groups:closedgroup:request' => '寻求加入, 点击"申请加入"菜单连接',
	'groups:closedgroup:membersonly' => "此小组成员资格已经封闭，内容只有小组成员可以访问",
	'groups:opengroup:membersonly' => "此小组的内容仅限成员访问",
	'groups:opengroup:membersonly:join' => '点击 "加入小组" 菜单连接，加入小组',
	'groups:visibility' => '谁能查看此小组?',

	/**
	 * Group tools
	 */
	'groups:enableforum' => '开启小组讨论',
	'groups:lastupdated' => ' 最后更新 %s 来自 %s',
	'groups:lastcomment' => '最后评论 %s 来自 %s',

	/**
	 * Group discussion
	 */
	'discussion' => '讨论',
	'discussion:add' => '添加讨论主题',
	'discussion:latest' => '最新讨论',
	'discussion:group' => '小组讨论',
	'discussion:none' => '没有讨论',
	'discussion:reply:title' => '由 %s回复',

	'discussion:topic:created' => '讨论主题已经建立',
	'discussion:topic:updated' => '讨论主题已经更新',
	'discussion:topic:deleted' => '讨论主题已经删除',

	'discussion:topic:notfound' => '讨论主题未发现',
	'discussion:error:notsaved' => '无法保存此主题',
	'discussion:error:missing' => '标题和信息都是必填项',
	'discussion:error:permissions' => '你无权限完成这个操作',
	'discussion:error:notdeleted' => '不能删除此讨论主题',

	'discussion:reply:edit' => '编辑回复',
	'discussion:reply:deleted' => '讨论回复已被删除',
	'discussion:reply:error:notfound' => '讨论回复未发现',
	'discussion:reply:error:notfound_fallback' => "我们无法发现指定的回复，已返回到原始的讨论主题",
	'discussion:reply:error:notdeleted' => '不能删除此讨论回复',

	'discussion:search:title' => '%s主题的回复',
	
	'admin:groups' => '小组',

	'reply:this' => '回复',

	'group:replies' => '回复',
	'groups:forum:created' => '创建的 %s 有 %d 评论',
	'groups:forum:created:single' => '创建的 %s 有 %d 回复',
	'groups:forum' => '讨论',
	'groups:addtopic' => '添加一个主题',
	'groups:forumlatest' => '最新讨论',
	'groups:latestdiscussion' => '最新讨论',
	'groupspost:success' => '你的回复已经成功发布',
	'groupspost:failure' => '发布你的回复时遇到问题',
	'groups:alldiscussion' => '最新讨论',
	'groups:edittopic' => '编辑主题',
	'groups:topicmessage' => '主题信息',
	'groups:topicstatus' => '主题状态',
	'groups:reply' => '发布一条评论',
	'groups:topic' => '主题',
	'groups:posts' => '帖子',
	'groups:lastperson' => '最后人员',
	'groups:when' => '时间',
	'grouptopic:notcreated' => '无主题被创建',
	'groups:topicclosed' => '关闭',
	'grouptopic:created' => '你的主题已被关闭',
	'groups:topicsticky' => '置顶',
	'groups:topicisclosed' => '此讨论已关闭',
	'groups:topiccloseddesc' => '此讨论已关闭，不接受新的评论',
	'grouptopic:error' => '你的小组主题不能被创建，请重试，或者联系系统管理员',
	'groups:forumpost:edited' => "Y你已成功编辑了论坛帖子",
	'groups:forumpost:error' => "编辑论坛帖子时出现故障",

	'groups:privategroup' => '此小组为封闭小组',
	'groups:notitle' => '小组必须有一个标题',
	'groups:cantjoin' => '不能加入小组',
	'groups:cantleave' => '不能离开小组',
	'groups:removeuser' => '删除用户',
	'groups:cantremove' => '不能从小组删除用户',
	'groups:removed' => '成功将 %s 从小组删除',
	'groups:addedtogroup' => '成功添加用户到小组',
	'groups:joinrequestnotmade' => '不能申请加入小组',
	'groups:joinrequestmade' => '申请加入小组',
	'groups:joined' => '成功加入小组!',
	'groups:left' => '成功离开小组',
	'groups:notowner' => '你不是此小组组长',
	'groups:notmember' => '你不是此小组成员',
	'groups:alreadymember' => '你已经是此小组成员!',
	'groups:userinvited' => '用户已被邀请',
	'groups:usernotinvited' => '用户不能被邀请',
	'groups:useralreadyinvited' => '用户已被邀请',
	'groups:invite:subject' => "%s，你已被邀请加入 %s!",
	'groups:updated' => "%s最后回复于%s",
	'groups:started' => "%s开贴于",
	'groups:joinrequest:remove:check' => '你确定要删除此加入申请?',
	'groups:invite:remove:check' => '你确定要删除此邀请?',
	'groups:invite:body' => "%s，利好,

%s 邀请你加入'%s' 小组， 点击下面查看你的邀请:

%s",

	'groups:welcome:subject' => "欢迎来到 %s 小组!",
	'groups:welcome:body' => "你好， %s!

你已经是'%s'小组的成员。点击下面开始发帖!

%s",

	'groups:request:subject' => "%s已被申请加入 %s",
	'groups:request:body' => "你好， %s,

%s 已经申请加入 '%s'小组，点击下面查看他们的简介:

%s

或者点击下面查看小组的邀请申请:

%s",

	/**
	 * Forum river items
	 */

	'river:create:group:default' => '%s创建了小组%s',
	'river:join:group:default' => '%s 加入了小组 %s',
	'river:create:object:groupforumtopic' => '%s 添加了新的讨论主题 %s',
	'river:reply:object:groupforumtopic' => '%s 回复了讨论主题 %s',
	'river:reply:view' => '查看回复',

	'groups:nowidgets' => '此小组尚无定义的小工具',


	'groups:widgets:members:title' => '小组成员',
	'groups:widgets:members:description' => '列出小组成员',
	'groups:widgets:members:label:displaynum' => '列出小组成员',
	'groups:widgets:members:label:pleaseedit' => '请配置此小工具',

	'groups:widgets:entities:title' => "小组的物件",
	'groups:widgets:entities:description' => "列出保存于小组的物件",
	'groups:widgets:entities:label:displaynum' => '列出小组的物件',
	'groups:widgets:entities:label:pleaseedit' => '请配置此小工具',

	'groups:forumtopic:edited' => '论坛主题被成功编辑',

	'groups:allowhiddengroups' => '你想允许私有（不可见）小组?',
	'groups:whocancreate' => '谁能创建新的小组?',

	/**
	 * Action messages
	 */
	'group:deleted' => '小组和小组的内容已被删除',
	'group:notdeleted' => '小组不能被删除',

	'group:notfound' => '不能发现小组',
	'grouppost:deleted' => '小组帖子已被成功删除',
	'grouppost:notdeleted' => '小组帖子不能被删除',
	'groupstopic:deleted' => '主题已被删除',
	'groupstopic:notdeleted' => '主题不能被删除',
	'grouptopic:blank' => '尚无主题',
	'grouptopic:notfound' => '不能发现主题',
	'grouppost:nopost' => '空帖',
	'groups:deletewarning' => "你确信要删除此小组？这不能被恢复!",

	'groups:invitekilled' => '邀请已被删除',
	'groups:joinrequestkilled' => '加入申请已被删除',
	'groups:error:addedtogroup' => "不能加 %s到小组",
	'groups:add:alreadymember' => "%s 已经是小组成员",

	/**
	 * ecml
	 */
	'groups:ecml:discussion' => '小组讨论',
	'groups:ecml:groupprofile' => '小组简介',
);
