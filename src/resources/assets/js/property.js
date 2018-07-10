let property = {
    dom:{
        create:{
            address:{
                province:$('.provinces select'),
                district:$('.district select'),
                ward:$('.ward select'),
                street:$('.street input'),
                number:$('.number input'),
                unitNumber:$('.unitNumber input')
            }
        }
    },
    controller:{
        create:{
            address:{
                changeProvince:function(){
                    var selectedProvince = $(this).val();
                    property.view.create.address.updateDistrictList(selectedProvince);
                },
                changeDistrict:function(){
                    var selectedDistrict = $(this).val();
                    property.view.create.address.updateWardList(selectedDistrict);
                }
            }
        }
    },
    model:{},
    view:{
        create:{
            address:{
                updateDistrictList:function(province){
                    property.dom.create.address.district.find('option').hide();
                    property.dom.create.address.district.find('.province-'+province).show();
                },
                updateWardList:function(district){
                    property.dom.create.address.ward.find('option').hide();
                    property.dom.create.address.ward.find('.district-'+district).show();
                }
            }
        }
    },
    init:function(){
        property.dom.create.address.province.on('change',property.controller.create.address.changeProvince);
        property.dom.create.address.district.on('change',property.controller.create.address.changeDistrict);
    }
};
property.init();