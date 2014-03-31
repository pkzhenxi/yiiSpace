            系统相
   =========================

dolphin
-----------
其系统相册是全局共用一个模型（表）的，用type字段来区分是给谁用 就是经典的表继承
另有一个索引表来存相册 跟目标图片的关联关系 当然目标表中也要存相册id 另在关联索引表中有个order用来标识相片在相册中的
显示顺序
有了相册索引表 这样在显示相册时  先关联下索引表 查出ids 这样通过ids再到目标图片表中查数据 避免了表连接问题。
这样假设目标模块式用其他存储系统做的 比如其他数据库（nosql！ 或者异构数据库--跟系统表不在一个库并且可以是其他不同类型
的DBMS！！）这个看似没必要的表这时变成扩展系统的“桥”了


关于单独相册的展示
--------------------
单独一个相册在展示时 一般除了展示自己 还有提取几个旗下的照片拿来充门面 不然太孤单，有的相册设计中还有相册的seo数据：
meta_keywords meta_description  如咋jaws（开源cms）中就有这两个字段。

推而广之 就是在 view 某个实体时 如果该实体可以单独展示那么他就可能涉及seo的几个字段 是否设计这些字段可以酌情（非必须）


继续扩展功能
------------------
## 添加相册组功能  或者相册tag功能
不要改动原来的相册表设计 额外扩充album_group  album2group(桥表 表名可以用前面的 但第一个分隔表名可用来做模块标识
-album_ )
 用多对多关系来实现额外的相册组功能
 相册组下面展示了相册列表 那么相册组本身也可以由seo元数据字段 参考上面的。
 传统桥表的设计常常只有两个字段 但适当的添加其他字段也是合情合理的  有些属性确实是在两个实体有关系时才可能出现。
 这种情况用图数据库来实现感觉最贴切， 比如朋友关系 朋友属性（构建日期，请求日期 ，同意日期）而这些属性在单独的
 user身是是无意义的  关系表用图数据库的edge来存放并且可以存一些额外的属性！

 至于相册tags 功能 类似相册组功能的设计！

