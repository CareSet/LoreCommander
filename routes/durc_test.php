<?php
/*
	This test route is automatically added.
	IF you would like to quickly see and test all of the index routes that are generated by DURC
	to use: http://[baseUrl]/durctest
	
	To remove routes from production, remove the require for this file from the register() method
	of the DURCServiceProvider.

*/

//This closure lists all of the index routes that DURC knows about...
Route::get('durctest', function () {
    $route_list = [ 




 			'/DURC/author', //from: DURC_aaa.author 
 			'/DURC/author/create', //from: DURC_aaa.author 
 			'/DURC/author/1', //from: DURC_aaa.author 
 			'/DURC/author/1/edit', //from: DURC_aaa.author 
 			'/DURC/author_book', //from: DURC_aaa.author_book 
 			'/DURC/author_book/create', //from: DURC_aaa.author_book 
 			'/DURC/author_book/1', //from: DURC_aaa.author_book 
 			'/DURC/author_book/1/edit', //from: DURC_aaa.author_book 
 			'/DURC/authortype', //from: DURC_aaa.authortype 
 			'/DURC/authortype/create', //from: DURC_aaa.authortype 
 			'/DURC/authortype/1', //from: DURC_aaa.authortype 
 			'/DURC/authortype/1/edit', //from: DURC_aaa.authortype 
 			'/DURC/book', //from: DURC_aaa.book 
 			'/DURC/book/create', //from: DURC_aaa.book 
 			'/DURC/book/1', //from: DURC_aaa.book 
 			'/DURC/book/1/edit', //from: DURC_aaa.book 
 			'/DURC/charactertest', //from: DURC_aaa.characterTest 
 			'/DURC/charactertest/create', //from: DURC_aaa.characterTest 
 			'/DURC/charactertest/1', //from: DURC_aaa.characterTest 
 			'/DURC/charactertest/1/edit', //from: DURC_aaa.characterTest 
 			'/DURC/comment', //from: DURC_aaa.comment 
 			'/DURC/comment/create', //from: DURC_aaa.comment 
 			'/DURC/comment/1', //from: DURC_aaa.comment 
 			'/DURC/comment/1/edit', //from: DURC_aaa.comment 
 			'/DURC/donation', //from: DURC_aaa.donation 
 			'/DURC/donation/create', //from: DURC_aaa.donation 
 			'/DURC/donation/1', //from: DURC_aaa.donation 
 			'/DURC/donation/1/edit', //from: DURC_aaa.donation 
 			'/DURC/filtertest', //from: DURC_aaa.filterTest 
 			'/DURC/filtertest/create', //from: DURC_aaa.filterTest 
 			'/DURC/filtertest/1', //from: DURC_aaa.filterTest 
 			'/DURC/filtertest/1/edit', //from: DURC_aaa.filterTest 
 			'/DURC/foreignkeytestgizmo', //from: DURC_aaa.foreignkeytestgizmo 
 			'/DURC/foreignkeytestgizmo/create', //from: DURC_aaa.foreignkeytestgizmo 
 			'/DURC/foreignkeytestgizmo/1', //from: DURC_aaa.foreignkeytestgizmo 
 			'/DURC/foreignkeytestgizmo/1/edit', //from: DURC_aaa.foreignkeytestgizmo 
 			'/DURC/foreignkeytestthingy', //from: DURC_aaa.foreignkeytestthingy 
 			'/DURC/foreignkeytestthingy/create', //from: DURC_aaa.foreignkeytestthingy 
 			'/DURC/foreignkeytestthingy/1', //from: DURC_aaa.foreignkeytestthingy 
 			'/DURC/foreignkeytestthingy/1/edit', //from: DURC_aaa.foreignkeytestthingy 
 			'/DURC/funnything', //from: DURC_aaa.funnything 
 			'/DURC/funnything/create', //from: DURC_aaa.funnything 
 			'/DURC/funnything/1', //from: DURC_aaa.funnything 
 			'/DURC/funnything/1/edit', //from: DURC_aaa.funnything 
 			'/DURC/magicfield', //from: DURC_aaa.magicField 
 			'/DURC/magicfield/create', //from: DURC_aaa.magicField 
 			'/DURC/magicfield/1', //from: DURC_aaa.magicField 
 			'/DURC/magicfield/1/edit', //from: DURC_aaa.magicField 
 			'/DURC/post', //from: DURC_aaa.post 
 			'/DURC/post/create', //from: DURC_aaa.post 
 			'/DURC/post/1', //from: DURC_aaa.post 
 			'/DURC/post/1/edit', //from: DURC_aaa.post 
 			'/DURC/sibling', //from: DURC_aaa.sibling 
 			'/DURC/sibling/create', //from: DURC_aaa.sibling 
 			'/DURC/sibling/1', //from: DURC_aaa.sibling 
 			'/DURC/sibling/1/edit', //from: DURC_aaa.sibling 
 			'/DURC/tags_report', //from: DURC_aaa.tags_report 
 			'/DURC/tags_report/create', //from: DURC_aaa.tags_report 
 			'/DURC/tags_report/1', //from: DURC_aaa.tags_report 
 			'/DURC/tags_report/1/edit', //from: DURC_aaa.tags_report 
 			'/DURC/test_boolean', //from: DURC_aaa.test_boolean 
 			'/DURC/test_boolean/create', //from: DURC_aaa.test_boolean 
 			'/DURC/test_boolean/1', //from: DURC_aaa.test_boolean 
 			'/DURC/test_boolean/1/edit', //from: DURC_aaa.test_boolean 
 			'/DURC/test_created_only', //from: DURC_aaa.test_created_only 
 			'/DURC/test_created_only/create', //from: DURC_aaa.test_created_only 
 			'/DURC/test_created_only/1', //from: DURC_aaa.test_created_only 
 			'/DURC/test_created_only/1/edit', //from: DURC_aaa.test_created_only 
 			'/DURC/test_default_date', //from: DURC_aaa.test_default_date 
 			'/DURC/test_default_date/create', //from: DURC_aaa.test_default_date 
 			'/DURC/test_default_date/1', //from: DURC_aaa.test_default_date 
 			'/DURC/test_default_date/1/edit', //from: DURC_aaa.test_default_date 
 			'/DURC/test_null_default', //from: DURC_aaa.test_null_default 
 			'/DURC/test_null_default/create', //from: DURC_aaa.test_null_default 
 			'/DURC/test_null_default/1', //from: DURC_aaa.test_null_default 
 			'/DURC/test_null_default/1/edit', //from: DURC_aaa.test_null_default 
 			'/DURC/vote', //from: DURC_aaa.vote 
 			'/DURC/vote/create', //from: DURC_aaa.vote 
 			'/DURC/vote/1', //from: DURC_aaa.vote 
 			'/DURC/vote/1/edit', //from: DURC_aaa.vote 
 			'/DURC/nonprofitcorp', //from: DURC_irs.nonprofitcorp 
 			'/DURC/nonprofitcorp/create', //from: DURC_irs.nonprofitcorp 
 			'/DURC/nonprofitcorp/1', //from: DURC_irs.nonprofitcorp 
 			'/DURC/nonprofitcorp/1/edit', //from: DURC_irs.nonprofitcorp 
 			'/DURC/inventorytransaction', //from: DURC_northwind_data.inventoryTransaction 
 			'/DURC/inventorytransaction/create', //from: DURC_northwind_data.inventoryTransaction 
 			'/DURC/inventorytransaction/1', //from: DURC_northwind_data.inventoryTransaction 
 			'/DURC/inventorytransaction/1/edit', //from: DURC_northwind_data.inventoryTransaction 
 			'/DURC/invoice', //from: DURC_northwind_data.invoice 
 			'/DURC/invoice/create', //from: DURC_northwind_data.invoice 
 			'/DURC/invoice/1', //from: DURC_northwind_data.invoice 
 			'/DURC/invoice/1/edit', //from: DURC_northwind_data.invoice 
 			'/DURC/order', //from: DURC_northwind_data.order 
 			'/DURC/order/create', //from: DURC_northwind_data.order 
 			'/DURC/order/1', //from: DURC_northwind_data.order 
 			'/DURC/order/1/edit', //from: DURC_northwind_data.order 
 			'/DURC/orderdetail', //from: DURC_northwind_data.orderDetail 
 			'/DURC/orderdetail/create', //from: DURC_northwind_data.orderDetail 
 			'/DURC/orderdetail/1', //from: DURC_northwind_data.orderDetail 
 			'/DURC/orderdetail/1/edit', //from: DURC_northwind_data.orderDetail 
 			'/DURC/order_2017', //from: DURC_northwind_data.order_2017 
 			'/DURC/order_2017/create', //from: DURC_northwind_data.order_2017 
 			'/DURC/order_2017/1', //from: DURC_northwind_data.order_2017 
 			'/DURC/order_2017/1/edit', //from: DURC_northwind_data.order_2017 
 			'/DURC/order_2018', //from: DURC_northwind_data.order_2018 
 			'/DURC/order_2018/create', //from: DURC_northwind_data.order_2018 
 			'/DURC/order_2018/1', //from: DURC_northwind_data.order_2018 
 			'/DURC/order_2018/1/edit', //from: DURC_northwind_data.order_2018 
 			'/DURC/order_2019', //from: DURC_northwind_data.order_2019 
 			'/DURC/order_2019/create', //from: DURC_northwind_data.order_2019 
 			'/DURC/order_2019/1', //from: DURC_northwind_data.order_2019 
 			'/DURC/order_2019/1/edit', //from: DURC_northwind_data.order_2019 
 			'/DURC/purchaseorder', //from: DURC_northwind_data.purchaseOrder 
 			'/DURC/purchaseorder/create', //from: DURC_northwind_data.purchaseOrder 
 			'/DURC/purchaseorder/1', //from: DURC_northwind_data.purchaseOrder 
 			'/DURC/purchaseorder/1/edit', //from: DURC_northwind_data.purchaseOrder 
 			'/DURC/purchaseorderdetail', //from: DURC_northwind_data.purchaseOrderDetail 
 			'/DURC/purchaseorderdetail/create', //from: DURC_northwind_data.purchaseOrderDetail 
 			'/DURC/purchaseorderdetail/1', //from: DURC_northwind_data.purchaseOrderDetail 
 			'/DURC/purchaseorderdetail/1/edit', //from: DURC_northwind_data.purchaseOrderDetail 
 			'/DURC/appstring', //from: DURC_northwind_model.appstring 
 			'/DURC/appstring/create', //from: DURC_northwind_model.appstring 
 			'/DURC/appstring/1', //from: DURC_northwind_model.appstring 
 			'/DURC/appstring/1/edit', //from: DURC_northwind_model.appstring 
 			'/DURC/customer', //from: DURC_northwind_model.customer 
 			'/DURC/customer/create', //from: DURC_northwind_model.customer 
 			'/DURC/customer/1', //from: DURC_northwind_model.customer 
 			'/DURC/customer/1/edit', //from: DURC_northwind_model.customer 
 			'/DURC/employee', //from: DURC_northwind_model.employee 
 			'/DURC/employee/create', //from: DURC_northwind_model.employee 
 			'/DURC/employee/1', //from: DURC_northwind_model.employee 
 			'/DURC/employee/1/edit', //from: DURC_northwind_model.employee 
 			'/DURC/employeeprivilege', //from: DURC_northwind_model.employeePrivilege 
 			'/DURC/employeeprivilege/create', //from: DURC_northwind_model.employeePrivilege 
 			'/DURC/employeeprivilege/1', //from: DURC_northwind_model.employeePrivilege 
 			'/DURC/employeeprivilege/1/edit', //from: DURC_northwind_model.employeePrivilege 
 			'/DURC/inventorytransactiontype', //from: DURC_northwind_model.inventoryTransactionType 
 			'/DURC/inventorytransactiontype/create', //from: DURC_northwind_model.inventoryTransactionType 
 			'/DURC/inventorytransactiontype/1', //from: DURC_northwind_model.inventoryTransactionType 
 			'/DURC/inventorytransactiontype/1/edit', //from: DURC_northwind_model.inventoryTransactionType 
 			'/DURC/orderdetailstat', //from: DURC_northwind_model.orderDetailStat 
 			'/DURC/orderdetailstat/create', //from: DURC_northwind_model.orderDetailStat 
 			'/DURC/orderdetailstat/1', //from: DURC_northwind_model.orderDetailStat 
 			'/DURC/orderdetailstat/1/edit', //from: DURC_northwind_model.orderDetailStat 
 			'/DURC/orderstat', //from: DURC_northwind_model.orderStat 
 			'/DURC/orderstat/create', //from: DURC_northwind_model.orderStat 
 			'/DURC/orderstat/1', //from: DURC_northwind_model.orderStat 
 			'/DURC/orderstat/1/edit', //from: DURC_northwind_model.orderStat 
 			'/DURC/ordertaxstat', //from: DURC_northwind_model.orderTaxStat 
 			'/DURC/ordertaxstat/create', //from: DURC_northwind_model.orderTaxStat 
 			'/DURC/ordertaxstat/1', //from: DURC_northwind_model.orderTaxStat 
 			'/DURC/ordertaxstat/1/edit', //from: DURC_northwind_model.orderTaxStat 
 			'/DURC/privilege', //from: DURC_northwind_model.privilege 
 			'/DURC/privilege/create', //from: DURC_northwind_model.privilege 
 			'/DURC/privilege/1', //from: DURC_northwind_model.privilege 
 			'/DURC/privilege/1/edit', //from: DURC_northwind_model.privilege 
 			'/DURC/product', //from: DURC_northwind_model.product 
 			'/DURC/product/create', //from: DURC_northwind_model.product 
 			'/DURC/product/1', //from: DURC_northwind_model.product 
 			'/DURC/product/1/edit', //from: DURC_northwind_model.product 
 			'/DURC/purchaseorderstat', //from: DURC_northwind_model.purchaseOrderStat 
 			'/DURC/purchaseorderstat/create', //from: DURC_northwind_model.purchaseOrderStat 
 			'/DURC/purchaseorderstat/1', //from: DURC_northwind_model.purchaseOrderStat 
 			'/DURC/purchaseorderstat/1/edit', //from: DURC_northwind_model.purchaseOrderStat 
 			'/DURC/salesreport', //from: DURC_northwind_model.salesReport 
 			'/DURC/salesreport/create', //from: DURC_northwind_model.salesReport 
 			'/DURC/salesreport/1', //from: DURC_northwind_model.salesReport 
 			'/DURC/salesreport/1/edit', //from: DURC_northwind_model.salesReport 
 			'/DURC/shipper', //from: DURC_northwind_model.shipper 
 			'/DURC/shipper/create', //from: DURC_northwind_model.shipper 
 			'/DURC/shipper/1', //from: DURC_northwind_model.shipper 
 			'/DURC/shipper/1/edit', //from: DURC_northwind_model.shipper 
 			'/DURC/supplier', //from: DURC_northwind_model.supplier 
 			'/DURC/supplier/create', //from: DURC_northwind_model.supplier 
 			'/DURC/supplier/1', //from: DURC_northwind_model.supplier 
 			'/DURC/supplier/1/edit', //from: DURC_northwind_model.supplier 
 			'/DURC/artist', //from: lore.artist 
 			'/DURC/artist/create', //from: lore.artist 
 			'/DURC/artist/1', //from: lore.artist 
 			'/DURC/artist/1/edit', //from: lore.artist 
 			'/DURC/artistcredit', //from: lore.artistcredit 
 			'/DURC/artistcredit/create', //from: lore.artistcredit 
 			'/DURC/artistcredit/1', //from: lore.artistcredit 
 			'/DURC/artistcredit/1/edit', //from: lore.artistcredit 
 			'/DURC/atag', //from: lore.atag 
 			'/DURC/atag/create', //from: lore.atag 
 			'/DURC/atag/1', //from: lore.atag 
 			'/DURC/atag/1/edit', //from: lore.atag 
 			'/DURC/card', //from: lore.card 
 			'/DURC/card/create', //from: lore.card 
 			'/DURC/card/1', //from: lore.card 
 			'/DURC/card/1/edit', //from: lore.card 
 			'/DURC/cardface', //from: lore.cardface 
 			'/DURC/cardface/create', //from: lore.cardface 
 			'/DURC/cardface/1', //from: lore.cardface 
 			'/DURC/cardface/1/edit', //from: lore.cardface 
 			'/DURC/cardface_classofc_atag', //from: lore.cardface_classofc_atag 
 			'/DURC/cardface_classofc_atag/create', //from: lore.cardface_classofc_atag 
 			'/DURC/cardface_classofc_atag/1', //from: lore.cardface_classofc_atag 
 			'/DURC/cardface_classofc_atag/1/edit', //from: lore.cardface_classofc_atag 
 			'/DURC/cardface_person_atag', //from: lore.cardface_person_atag 
 			'/DURC/cardface_person_atag/create', //from: lore.cardface_person_atag 
 			'/DURC/cardface_person_atag/1', //from: lore.cardface_person_atag 
 			'/DURC/cardface_person_atag/1/edit', //from: lore.cardface_person_atag 
 			'/DURC/cardprice', //from: lore.cardprice 
 			'/DURC/cardprice/create', //from: lore.cardprice 
 			'/DURC/cardprice/1', //from: lore.cardprice 
 			'/DURC/cardprice/1/edit', //from: lore.cardprice 
 			'/DURC/classofc', //from: lore.classofc 
 			'/DURC/classofc/create', //from: lore.classofc 
 			'/DURC/classofc/1', //from: lore.classofc 
 			'/DURC/classofc/1/edit', //from: lore.classofc 
 			'/DURC/classofc_cardface', //from: lore.classofc_cardface 
 			'/DURC/classofc_cardface/create', //from: lore.classofc_cardface 
 			'/DURC/classofc_cardface/1', //from: lore.classofc_cardface 
 			'/DURC/classofc_cardface/1/edit', //from: lore.classofc_cardface 
 			'/DURC/classofc_classofc_vspack', //from: lore.classofc_classofc_vspack 
 			'/DURC/classofc_classofc_vspack/create', //from: lore.classofc_classofc_vspack 
 			'/DURC/classofc_classofc_vspack/1', //from: lore.classofc_classofc_vspack 
 			'/DURC/classofc_classofc_vspack/1/edit', //from: lore.classofc_classofc_vspack 
 			'/DURC/classofc_creature', //from: lore.classofc_creature 
 			'/DURC/classofc_creature/create', //from: lore.classofc_creature 
 			'/DURC/classofc_creature/1', //from: lore.classofc_creature 
 			'/DURC/classofc_creature/1/edit', //from: lore.classofc_creature 
 			'/DURC/creature', //from: lore.creature 
 			'/DURC/creature/create', //from: lore.creature 
 			'/DURC/creature/1', //from: lore.creature 
 			'/DURC/creature/1/edit', //from: lore.creature 
 			'/DURC/creature_cardface', //from: lore.creature_cardface 
 			'/DURC/creature_cardface/create', //from: lore.creature_cardface 
 			'/DURC/creature_cardface/1', //from: lore.creature_cardface 
 			'/DURC/creature_cardface/1/edit', //from: lore.creature_cardface 
 			'/DURC/mtgset', //from: lore.mtgset 
 			'/DURC/mtgset/create', //from: lore.mtgset 
 			'/DURC/mtgset/1', //from: lore.mtgset 
 			'/DURC/mtgset/1/edit', //from: lore.mtgset 
 			'/DURC/mverse', //from: lore.mverse 
 			'/DURC/mverse/create', //from: lore.mverse 
 			'/DURC/mverse/1', //from: lore.mverse 
 			'/DURC/mverse/1/edit', //from: lore.mverse 
 			'/DURC/pack', //from: lore.pack 
 			'/DURC/pack/create', //from: lore.pack 
 			'/DURC/pack/1', //from: lore.pack 
 			'/DURC/pack/1/edit', //from: lore.pack 
 			'/DURC/person', //from: lore.person 
 			'/DURC/person/create', //from: lore.person 
 			'/DURC/person/1', //from: lore.person 
 			'/DURC/person/1/edit', //from: lore.person 
 			'/DURC/person_classofc_cardface', //from: lore.person_classofc_cardface 
 			'/DURC/person_classofc_cardface/create', //from: lore.person_classofc_cardface 
 			'/DURC/person_classofc_cardface/1', //from: lore.person_classofc_cardface 
 			'/DURC/person_classofc_cardface/1/edit', //from: lore.person_classofc_cardface 
 			'/DURC/person_classofc_tag', //from: lore.person_classofc_tag 
 			'/DURC/person_classofc_tag/create', //from: lore.person_classofc_tag 
 			'/DURC/person_classofc_tag/1', //from: lore.person_classofc_tag 
 			'/DURC/person_classofc_tag/1/edit', //from: lore.person_classofc_tag 
 			'/DURC/person_creature_tag', //from: lore.person_creature_tag 
 			'/DURC/person_creature_tag/create', //from: lore.person_creature_tag 
 			'/DURC/person_creature_tag/1', //from: lore.person_creature_tag 
 			'/DURC/person_creature_tag/1/edit', //from: lore.person_creature_tag 
 			'/DURC/person_strategy_strategytag', //from: lore.person_strategy_strategytag 
 			'/DURC/person_strategy_strategytag/create', //from: lore.person_strategy_strategytag 
 			'/DURC/person_strategy_strategytag/1', //from: lore.person_strategy_strategytag 
 			'/DURC/person_strategy_strategytag/1/edit', //from: lore.person_strategy_strategytag 
 			'/DURC/person_strategy_tag', //from: lore.person_strategy_tag 
 			'/DURC/person_strategy_tag/create', //from: lore.person_strategy_tag 
 			'/DURC/person_strategy_tag/1', //from: lore.person_strategy_tag 
 			'/DURC/person_strategy_tag/1/edit', //from: lore.person_strategy_tag 
 			'/DURC/pricetype', //from: lore.pricetype 
 			'/DURC/pricetype/create', //from: lore.pricetype 
 			'/DURC/pricetype/1', //from: lore.pricetype 
 			'/DURC/pricetype/1/edit', //from: lore.pricetype 
 			'/DURC/scanhistory', //from: lore.scanhistory 
 			'/DURC/scanhistory/create', //from: lore.scanhistory 
 			'/DURC/scanhistory/1', //from: lore.scanhistory 
 			'/DURC/scanhistory/1/edit', //from: lore.scanhistory 
 			'/DURC/strategy', //from: lore.strategy 
 			'/DURC/strategy/create', //from: lore.strategy 
 			'/DURC/strategy/1', //from: lore.strategy 
 			'/DURC/strategy/1/edit', //from: lore.strategy 
 			'/DURC/strategytag', //from: lore.strategytag 
 			'/DURC/strategytag/create', //from: lore.strategytag 
 			'/DURC/strategytag/1', //from: lore.strategytag 
 			'/DURC/strategytag/1/edit', //from: lore.strategytag 
 			'/DURC/tag', //from: lore.tag 
 			'/DURC/tag/create', //from: lore.tag 
 			'/DURC/tag/1', //from: lore.tag 
 			'/DURC/tag/1/edit', //from: lore.tag 
 			'/DURC/theme', //from: lore.theme 
 			'/DURC/theme/create', //from: lore.theme 
 			'/DURC/theme/1', //from: lore.theme 
 			'/DURC/theme/1/edit', //from: lore.theme 
 			'/DURC/vspack', //from: lore.vspack 
 			'/DURC/vspack/create', //from: lore.vspack 
 			'/DURC/vspack/1', //from: lore.vspack 
 			'/DURC/vspack/1/edit', //from: lore.vspack 
 			'/DURC/wallpaper', //from: lore.wallpaper 
 			'/DURC/wallpaper/create', //from: lore.wallpaper 
 			'/DURC/wallpaper/1', //from: lore.wallpaper 
 			'/DURC/wallpaper/1/edit', //from: lore.wallpaper 
 			'/DURC/wallpaper_illustration', //from: lore.wallpaper_illustration 
 			'/DURC/wallpaper_illustration/create', //from: lore.wallpaper_illustration 
 			'/DURC/wallpaper_illustration/1', //from: lore.wallpaper_illustration 
 			'/DURC/wallpaper_illustration/1/edit', //from: lore.wallpaper_illustration 
 			'/DURC/wallpaper_url', //from: lore.wallpaper_url 
 			'/DURC/wallpaper_url/create', //from: lore.wallpaper_url 
 			'/DURC/wallpaper_url/1', //from: lore.wallpaper_url 
 			'/DURC/wallpaper_url/1/edit', //from: lore.wallpaper_url 


	]; //end route_list

	$html = '<html><head><title>DURC Test Page</title><body><h1>DURC Test Page</h1><h3>DO NOT USE IN PRODUCTION!!!</h3>';

	$html .= '<ul>';

	foreach($route_list as $this_relative_link){
		$html  .= "<li><a href='$this_relative_link'>$this_relative_link </a> </li> ";
	}

	$html .= '</ul></body></html>';
	return $html;
}); //end DURC test route closure

Route::get('/',function () {
	$test_data = ['content' => '<h1>This is test content</h1>'];
	return view('DURC.durc_html',$test_data);
});
