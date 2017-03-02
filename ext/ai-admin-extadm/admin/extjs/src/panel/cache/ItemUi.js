/*!
 * Copyright (c) Metaways Infosystems GmbH, 2014
 * LGPLv3, http://opensource.org/licenses/LGPL-3.0
 */


Ext.ns('MShop.panel.cache');

MShop.panel.cache.ItemUi = Ext.extend(MShop.panel.AbstractItemUi, {

    initComponent : function() {

        this.title = MShop.I18n.dt('admin', 'Cache item details');

        this.items = [{
            xtype : 'tabpanel',
            activeTab : 0,
            border : false,
            itemId : 'MShop.panel.cache.ItemUi',
            plugins : ['ux.itemregistry'],
            items : [{
                xtype : 'panel',
                title : MShop.I18n.dt('admin', 'Basic'),
                border : false,
                layout : 'hbox',
                layoutConfig : {
                    align : 'stretch'
                },
                itemId : 'MShop.panel.cache.ItemUi.BasicPanel',
                plugins : ['ux.itemregistry'],
                defaults : {
                    bodyCssClass : this.readOnlyClass
                },
                items : [{
                    xtype : 'form',
                    title : MShop.I18n.dt('admin', 'Details'),
                    flex : 1,
                    ref : '../../mainForm',
                    autoScroll : true,
                    items : [{
                        xtype : 'fieldset',
                        style : 'padding-right: 25px;',
                        border : false,
                        labelAlign : 'top',
                        defaults : {
                            readOnly : this.fieldsReadOnly,
                            anchor : '100%'
                        },
                        items : [{
                            xtype : 'displayfield',
                            fieldLabel : MShop.I18n.dt('admin', 'ID'),
                            name : 'cache.id'
                        }, {
                            xtype : 'textarea',
                            fieldLabel : MShop.I18n.dt('admin', 'Value'),
                            name : 'cache.value',
                            allowBlank : false
                        }, {
                            xtype : 'datefield',
                            fieldLabel : MShop.I18n.dt('admin', 'Expires'),
                            name : 'cache.expire',
                            format : 'Y-m-d H:i:s',
                            emptyText : MShop.I18n.dt('admin', 'YYYY-MM-DD hh:mm:ss (optional)')
                        }]
                    }]
                }]
            }]
        }];

        MShop.panel.cache.ItemUi.superclass.initComponent.call(this);
    }
});

Ext.reg('MShop.panel.cache.itemui', MShop.panel.cache.ItemUi);
