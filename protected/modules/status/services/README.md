模块间通讯采用的方式
==========
建立门面对象 服务集

可以通过工具来生成
------------
根据表名来生成对应的CRUD 方法 :D (test1/insertMethod4table/tableName/{yourTableHere})

服务对象的方法全部是粗粒度的 服务对象本身一般也是粗粒度对象较之AR而言，参数一般是元类型（基本类型）不能有特殊的自定义
对象出现。方法参数，返回类型也是泛类型 这样能够保证接口的稳定性（多用数组作为参数）。