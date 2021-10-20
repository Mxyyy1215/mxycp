<script language="javascript">
function spyz(fom){
if(fom.EAname.value==''){
alert("Please enter the name of the product information");
fom.EAname.select();
return false;
}

if(fom.jianjie.value==''){
alert("Please enter the brand");
fom.jianjie.select();
return false;
}
if(fom.place.value==''){
alert("Please enter the origin");
fom.place.select();
return false;
}
if(fom.brand.value==''){
alert("Please enter the author of the product");
fom.brand.select();
return false;
} 

if(fom.photo.value==''){
alert("Please enter the picture");
fom.photo.select();
return false;
}
if(fom.introduction.value==''){
alert("Please enter the brief introduction");
fom.introduction.select();
return false;
}
}

</script>