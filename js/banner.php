<?php

header('Content-type: application/json');
//获取回调函数名

$jsoncallback = htmlspecialchars($_REQUEST ['callback']);
//json数据
$json_data = '[
{
	"list":[
	{"id":0,"src":"img/20161127joqizz.jpg","content":"酷玩音乐台灯","idOnly":"list_0","pic":"78.0","imgs":["img/1_0/3749_P_1473059870633.jpg!cat180.jpg","img/1_0/3749_P_1468893134951.jpg!cat.jpg","img/1_0/3749_P_1468463724240.jpg!cat.jpg"],"imgL":["img/1_0/云端的爱恋-_01.jpg!610.jpg","img/1_0/云端的爱恋-_03.jpg!610.jpg","img/1_0/云端的爱恋_15.jpg!610.jpg"],"number":1},
	{"id":1,"src":"img/20161123mvjuoo.jpg","content":"酷玩音乐台灯","idOnly":"list_1","pic":"78.0","imgs":["img/1_0/3749_P_1473059870633.jpg!cat180.jpg","img/1_0/3749_P_1468893134951.jpg!cat.jpg","img/1_0/3749_P_1468463724240.jpg!cat.jpg"],"imgL":["img/1_0/云端的爱恋-_01.jpg!610.jpg","img/1_0/云端的爱恋-_03.jpg!610.jpg","img/1_0/云端的爱恋_15.jpg!610.jpg"],"number":1},
	{"id":2,"src":"img/20161123qlsgvw.jpg","content":"酷玩音乐台灯","idOnly":"list_2","pic":"78.0","imgs":["img/1_0/3749_P_1473059870633.jpg!cat180.jpg","img/1_0/3749_P_1468893134951.jpg!cat.jpg","img/1_0/3749_P_1468463724240.jpg!cat.jpg"],"imgL":["img/1_0/云端的爱恋-_01.jpg!610.jpg","img/1_0/云端的爱恋-_03.jpg!610.jpg","img/1_0/云端的爱恋_15.jpg!610.jpg"],"number":1},
	{"id":3,"src":"img/20161125rdyfel.jpg","content":"酷玩音乐台灯","idOnly":"list_3","pic":"78.0","imgs":["img/1_0/3749_P_1473059870633.jpg!cat180.jpg","img/1_0/3749_P_1468893134951.jpg!cat.jpg","img/1_0/3749_P_1468463724240.jpg!cat.jpg"],"imgL":["img/1_0/云端的爱恋-_01.jpg!610.jpg","img/1_0/云端的爱恋-_03.jpg!610.jpg","img/1_0/云端的爱恋_15.jpg!610.jpg"],"number":1}
	],
	"one":[
	{"id":0,"src":"img/m-index_renqixinpin_02.jpg","content":"酷玩音乐台灯","pic":"79.0","idOnly":"one_0","imgs":["img/1_0/3749_P_1473059870633.jpg!cat180.jpg","img/1_0/3749_P_1468893134951.jpg!cat.jpg","img/1_0/3749_P_1468463724240.jpg!cat.jpg"],"imgL":["img/1_0/云端的爱恋-_01.jpg!610.jpg","img/1_0/云端的爱恋-_03.jpg!610.jpg","img/1_0/云端的爱恋_15.jpg!610.jpg"],"number":1},
	{"id":1,"src":"img/m-index_renqixinpin_04.jpg","content":"酷玩音乐台灯","pic":"79.0","idOnly":"one_1","imgs":["img/1_1/3751_P_1467100639090.jpg!cat.jpg","img/1_1/3751_P_1467100635301.jpg!cat.jpg","img/1_1/3751_P_1467100579695.jpg!cat.jpg","img/1_1/3751_P_1467100584864.jpg!cat.jpg"],"imgL":["img/1_1/LWY003751音乐果冻_03.jpg!610.jpg","img/1_1/LWY003751音乐果冻_05.jpg!610.jpg","img/1_1/LWY003751音乐果冻_07.jpg!610.jpg","img/1_1/内页官网_03.jpg","img/1_1/内页官网_04.jpg"],"number":1},
	{"id":2,"src":"img/m_index_rqxp_mcnsb.jpg","content":"酷玩音乐台灯","pic":"79.0","idOnly":"one_2","imgs":["img/1_2/3789_P_1480063612060.jpg!cat.jpg","img/1_2/3789_P_1480063613591.jpg!cat.jpg","img/1_2/3789_P_1480063614550.jpg!cat.jpg"],"imgL":["img/1_2/1_01(7971).jpg!610.jpg","img/1_2/1_03(3899).jpg!610.jpg","img/1_2/2_03(4722).jpg!610.jpg","img/1_2/内页官网_03.jpg"],"number":1},
	{"id":3,"src":"img/m-index_renqixinpin_09.jpg","content":"酷玩音乐台灯","pic":"79.0","idOnly":"one_3","imgs":["img/1_3/3746_P_1468390264911.jpg!cat.jpg","img/1_3/3746_P_1472607374100.jpg!cat.jpg","img/1_3/3746_P_1474516852086.jpg!cat.jpg"],"imgL":["img/1_3/化妆镜台灯pc_01.jpg!610.jpg","img/1_3/化妆镜台灯pc_01.jpg!610.jpg","img/1_3/化妆镜台灯pc_04.jpg!610.jpg","img/1_3/img1(3052).png"],"number":1},
	{"id":4,"src":"img/m-index_renqixinpin_11.jpg","content":"酷玩音乐台灯","pic":"79.0","idOnly":"one_4","imgs":["img/1_4/3754_P_1472718601576.jpg!cat.jpg","img/1_4/3754_P_1472718601576.jpg!cat.jpg","img/1_4/3754_P_1472718601576.jpg!cat.jpg"],"imgL":["img/1_4/蝶恋花_04.jpg!610.jpg","img/1_4/蝶恋花_07.jpg!610.jpg","img/1_4/蝶恋花_18.jpg!610.jpg","img/1_4/内页官网_01.jpg"],"number":1},
	{"id":5,"src":"img/m-index_renqixinpin_13.jpg","content":"酷玩音乐台灯","pic":"79.0","idOnly":"one_5","imgs":["img/0_5/3781_P_1479465105855.jpg!cat.jpg","img/0_5/3781_P_1479465107217.jpg!cat.jpg","img/0_5/3781_P_1479722109533.jpg!cat.jpg"],"imgL":["img/0_5/750-化妆镜-1-整理(添加光线说明)_01.jpg!610.jpg","img/0_5/750-化妆镜-1-整理(添加光线说明)_03.jpg!610.jpg","img/0_5/img1(3052).png"],"number":1}
	],
	"two":[
	{"id":0,"src":"img/1(4992).jpg","content":"酷玩音乐台灯","pic":"79.0","idOnly":"two_0"},
	{"id":1,"src":"img/2(7896).jpg","content":"爱的旋律","pic":"79.0","idOnly":"two_1"},
	{"id":2,"src":"img/3(3899).jpg","content":"花儿朵朵开","pic":"79.0","idOnly":"two_2"},
	{"id":3,"src":"img/4.JPG","content":"温暖你星窝","pic":"79.0","idOnly":"two_3"},
	{"id":4,"src":"img/5(9161).jpg","content":"男神风范","pic":"79.0","idOnly":"two_4"},
	{"id":5,"src":"img/6(5586).jpg","content":"神烦狗","pic":"79.0","idOnly":"two_5"}
	],
	"three":[
	{"id":0,"src":"img/1(6594).jpg","content":"酷玩音乐台灯","pic":"79.0","idOnly":"three_0"},
	{"id":1,"src":"img/3(3342).jpg","content":"爱的旋律","pic":"79.0","idOnly":"three_1"},
	{"id":2,"src":"img/2(6380).jpg","content":"花儿朵朵开","pic":"79.0","idOnly":"three_1"},
	{"id":3,"src":"img/4(2951).jpg","content":"温暖你星窝","pic":"79.0","idOnly":"three_1"},
	{"id":4,"src":"img/5(2085).jpg","content":"男神风范","pic":"79.0","idOnly":"three_1"},
	{"id":5,"src":"img/6(2058).jpg","content":"神烦狗","pic":"79.0","idOnly":"three_1"}
	],
	"four":[
	{"id":0,"src":"img/1(6084).jpg","content":"外观漂亮，晚上打开以后充满神秘感，灯光可以随节奏变换，开关也很方便，非常推荐购买。","name":"来自于 monuks 的评价","pic":"魔幻神灯/￥299.0"},
	{"id":1,"src":"img/2(1014).jpg","content":"很可爱的小猴，本命年收到的最贴心的礼物，好开心，老公还在挂角上定制了我的名字。","name":"来自于 9421***m 的评价","pic":"猴年吉祥/￥228.0"},
	{"id":2,"src":"img/3(1537).jpg","content":"喜欢这个白头偕老的变色杯，觉得寓意很好，送给老公加上几句话语，把他感动得不行不行的哈哈","name":"来自于 9421***m 的评价","pic":"白头偕老/￥59.0"}
	]
}
]'

?>