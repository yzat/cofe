function get_category_id(category_id){
    // alert(category_id);
}
// for choose in sidebar category
$(document).ready(function(){
   $('.catalog-list li:first').addClass('active');
    $('.catalog-list li a').on ('click',function(){
       $(this).parent().addClass('active').siblings().removeClass('active');
    });
});
