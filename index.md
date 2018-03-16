[toc]


# 广告主平台

##0 注意事项
陈亮ip http://192.168.2.111:8890/

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|200正常，202失败，205登录失效|



## 1 首页折线图
请求URL:/Main/action/Report/Report/homeChart
 
 请求方式：POST
 
 请求参数：
 
|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|date|string|YES|1 今天，2 昨天，3 7天，4 30天，时间段 2018/1/1~ 2018/2/2|
|token|string|YES|登录状态|



返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|xAxis|array|YES|时间段|
|series|array|YES|数据|

series数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|name|string|YES|曝光数，点击数，点击率，点击均价|
|data|array|YES|数据数组|

## 2. 首页顶部
 请求URL:  /Main/action/Report/Report/topTop
 
 请求方式：POST
 
 请求参数：
 
|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|token|string|YES|登录状态|



返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|balance|string|YES|余额|
|virtual_balance|string|YES|虚拟余额|
|cos|string|YES|总花费用|
|num|string|YES|当前投放广告数|

## 3. 保存计划（新增+修改）
 请求URL:/Main/action/Campaign/Campaign/saveCampaign
 
 请求方式：POST
 
 请求参数：
 
|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|NO|修改时传入|
|name|string|YES|计划名称|
|budget|float|YES|预算|
|consumption_rate|INT|YES|投放速度 1标准2加速|
|token|string|YES|登录状态|



返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|YES|计划ID|

## 4.选择已有计划 列表
请求URL:  /Main/action/Campaign/Campaign/getCampaignNameList
 
 请求方式：POST
 
 请求参数：
 
|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|token|string|YES|登录状态|



返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|YES|计划ID|
|name|INT|YES|名称|
|budget|string|YES|预算|
|consumption_rate|INT|YES|消耗速度1标准2加速|

## 5.新增+修改小程序id
请求URL:  /Main/action/App/App/saveApp
 
 请求方式：POST
 
 请求参数：
 
|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|NO|id,修改的时候传入|
|app_id|string|YES|小程序id|
|bind_app_id|string|YES|获取的系统小程序id|
|name|string|YES|名称|
|token|string|YES|登录状态|



返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES||

## 6.获取单个小程序id信息
请求URL:  Main/action/App/App/getAppInfo
 
 请求方式：POST
 
 请求参数：
 
|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|YES|修改的时候传入|
|token|string|YES|登录状态|



返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|YES|id|
|name|string|YES|名称|
|app_id|string|YES|小程序id|

## 7.删除小程序id
请求URL:  /Main/action/App/App/delAppId
 
 请求方式：POST
 
 请求参数：
 
|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|YES|id|
|token|string|YES|登录状态|



返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES||



## 8.获取小程序id列表_小程序管理模块
请求URL:  /Main/action/App/App/getAppList
 
 请求方式：POST
 
 请求参数：
 
|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|page|INT|YES|页数，默认1|
|size|INT|YES|每页数量，默认20|
|token|string|YES|登录状态|



返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|row|array|YES|列表|
|count|INT|YES|数量|

row数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|YES|id|
|name|INT|YES|名称|
|app_id|INT|YES|小程序id|
|bind_app_id|INT|YES|绑定小程序ID|
|status|INT|YES|状态:审核中已审核审核失败|



## 9.验证小程序_获取系统小程序id
请求URL:  /Main/action/App/App/getSystemAppId
 
 请求方式：POST
 
 请求参数：
 
|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|token|string|YES|登录状态|



返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|app_id|INT|YES|小程序id|

## 10.广告内获取小程序id列表
请求URL:  /Main/action/App/App/getAdgroupAppList
 
 请求方式：POST
 
 请求参数：
 
|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|token|string|YES|登录状态|



返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|YES|id|
|name|INT|YES|名称|
|app_id|INT|YES|小程序id|




## 11.城市列表_地区

请求URL:  /Main/action/District/District/getCity
 
 请求方式：GET
 
 请求参数：
 

 
返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

省数组 包含城市数组

## 12.微信版本号列表

请求URL:  /Main/action/District/District/getVersion

 
 请求方式：GET
 

 
返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|YES|id|
|version|string|YES|微信版本号|



## 13.新增+修改 广告

请求URL:  /Main/action/Adgroup/Adgroup/saveAdgroup
 
  请求方式：POST
 
 请求参数：
 
|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|NO|广告id,修改时传入|
|name|string|YES|广告名称|
|campaign_id|INT|YES|所属计划组ID|
|app_id|string|YES|小程序id，例如wxsdda5678|
|directional_type|INT|YES|定向类型:0不限1定向地域|
|phone_type|INT|YES|手机类型:0不限1安卓,2 IOS|
|**network_type**|**array**|YES|网络类型:0 不限,1 WIFI,2 4G,|
|gender|string|INT|性别类型:0 不限,1.男性,2女性|
|**wx_version**|**array**|YES|微信版本号:0 不限,其他6.61,6.62等|
|cpc|string|YES|点击均价|
|start_time|string|YES|投放开始时间|
|end_time|string|YES|投放结束时间,无则不上传|
|creative_id|INT|NO|素材id，修改时传入|
|type|INT|YES|图片类型:1横幅2插屏|
|imgs|string|YES|图片URL|
|desc|string|YES|广告文案,无则为空|
|page_url|string|YES|跳转页面，无则为空|
|**city**|**array**|YES|定向城市|
|token|string|YES|登录状态|

返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|YES|id|

## 14.根据广告ID获取计划信息

请求URL:  /Main/action/Adgroup/Adgroup/getAdgroupInfo

 
 请求方式：POST
 
请求参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|YES|广告id|
|token|string|YES|登录状态|
 
返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|NO|广告id,修改时传入|
|name|string|YES|广告名称|
|campaign_id|INT|YES|所属计划组ID|
|app_id|string|YES|小程序id，例如wxsdda5678|
|directional_type|INT|YES|定向类型:0不限1定向地域|
|phone_type|INT|YES|手机类型:0不限1安卓,2 IOS|
|**network_type**|**array**|YES|网络类型:0 不限,1 WIFI,2 4G,；为0 则为字符串0|
|gender|string|INT|性别类型:0 不限,1.男性,2女性|
|**wx_version**|**array**|YES|微信版本号:0 不限,其他6.61,6.62等；为0 则为字符串0|
|cpc|string|YES|点击均价|
|start_time|string|YES|投放开始时间|
|end_time|string|YES|投放结束时间,无则不上传|
|creative_id|INT|NO|素材id，修改时传入|
|type|INT|YES|图片类型:1横幅2插屏|
|imgs|string|YES|图片URL|
|desc|string|YES|广告文案,无则为空|
|page_url|string|YES|跳转页面，无则为空|
|**city**|**array**|YES|定向城市，如无 则为空数组|
|long_time|string|YES|投放日期0非长期投放 1长期投放|

## 15.广告报表列表

请求URL:  /Main/action/Report/Report/adgroupReport

 
 请求方式：POST
 
请求参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|page|INT|YES|页数，默认1|
|size|INT|YES|每页数量，默认20|
|date|string|YES|1 今天，2 昨天，3 7天，4 30天，时间段 2018/1/1~ 2018/2/2|
|key_name|string|YES|搜索广告名称|
|prop|string|YES|要排序的列 默认曝光量 :impcount 曝光数,clickcount 点击数,ctr 点击率,cos 总花费用,click_avg_cos 点击均价|
|order|string|YES|排序：descending｜ascending  默认倒序|
|token|string|YES|登录状态|
|campaign_id|INT|NO|推广计划|
 
返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|NO|广告id|
|name|INT|NO|名称|
|cpc|INT|NO|单次点击|
|status|INT|YES|状态,1投放，2暂停，3不显示|
|status_name|string|YES|状态名称|
|impcount|string|YES|曝光数|
|clickcount|string|YES|点击数|
|click_avg_cos|string|YES|点击均价|
|cos|string|YES|总花费用|
|ctr|string|YES|点击率|

## 16.推广报表列表

请求URL:  /Main/action/Report/Report/campaignReport

 
 请求方式：POST
 
请求参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|page|INT|YES|页数，默认1|
|size|INT|YES|每页数量，默认20|
|date|string|YES|1 今天，2 昨天，3 7天，4 30天，时间段 2018/1/1~ 2018/2/2|
|key_name|string|YES|搜索广告名称|
|prop|string|YES|要排序的列 默认曝光量 :impcount 曝光数,clickcount 点击数,ctr 点击率,cos 总花费用,click_avg_cos 点击均价|
|order|string|YES|排序：descending｜ascending  默认倒序|
|token|string|YES|登录状态|
 
返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|NO|广告id|
|name|INT|NO|名称|
|budget|INT|NO预算|
|status|INT|NO|状态|
|impcount|string|YES|曝光数|
|clickcount|string|YES|点击数|
|click_avg_cos|string|YES|点击均价|
|cos|string|YES|总花费用|
|ctr|string|YES|点击率|



## 17 报表中心折线图
请求URL:/Main/action/Report/Report/reportChart
 
 请求方式：POST
 
 请求参数：
 
|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|date|string|YES|1 今天，2 昨天，3 7天，4 30天，时间段 2018/1/1~ 2018/2/2|
|token|string|YES|登录状态|
|adgroup_id|INT|NO|广告id|


返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|xAxis|array|YES|时间段|
|series|array|YES|数据|

series数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|name|string|YES|曝光数，点击数，点击率，点击均价|
|data|array|YES|数据数组|

![](series.jpg)

## 18.报表中心列表

请求URL:  /Main/action/Report/Report/reportList

 
 请求方式：POST
 
请求参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|date|string|YES|1 今天，2 昨天，3 7天，4 30天，时间段 2018/1/1~ 2018/2/2|
|token|string|YES|登录状态|
|adgroup_id|INT|NO|广告id|
 
返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|datePart|string|YES|日期|
|impcount|string|YES|曝光数|
|clickcount|string|YES|点击数|
|click_avg_cos|string|YES|点击均价|
|cos|string|YES|总花费用|
|ctr|string|YES|点击率|

![](reportList_day.jpg)

## 19.选择已有计划 列表
请求URL:  /Main/action/Adgroup/Adgroup/getAdgroupNameList
 
 请求方式：POST
 
 请求参数：
 
|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|token|string|YES|登录状态|
|campaign_id|INT|YES|计划ID|

返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|YES|广告ID|
|name|INT|YES|名称|

## 20.选择已有计划 列表
请求URL:  /Main/action/Adgroup/Adgroup/getaAllAdgroup
 
 请求方式：POST
 
 请求参数：
 
|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|token|string|YES|登录状态|


返回参数：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|code|INT|YES|返回状态 200正确 202 参数等错误|
|msg|string|YES|说明|
|data|array|YES|array见下|

data数组：

|名称|类型|是否必填|说明|
|:---|:---|:---|:---|
|id|INT|YES|广告ID|
|name|INT|YES|名称|



