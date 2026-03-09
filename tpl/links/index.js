let citys = document.getElementById("province_selection")
let town = document.getElementById("defult_district")


let province_DBMS = {
    کابل: ["کابل", "بگرامی", "ده سبز", "پغمان", "قرباغ" , "چاه ارچی" , "موسهی" , "سروبی" , "کلکان" , "خاک جبار" , "میربچه کوت","استالف" , "شکر دره" ],
    پروان: ["چاریکار", "بگرام", "سیاه گرد", "شنواری" , "سالنگ" , "سیدخیل" , "شیخ علی" , "سرخ پارسا" , "جبل سراج" , "گلبهار" , "کوهستان اول" , "کوهستان دوم"],
    یغلان: ["پلخمری", "ده یک" , "دشت الامر" , "کجران" , "نهرین" , "اندارب" , "بنو" , "خواجه الوان" , "چشم شیر"],
    تخار: ["تالقان", "بهارک", "بنگی" , "چاه اب" , "در قد" , "ینگی قلعه" , "خواجه بهاوالدین" , "خواجه غار" , "دشت قلعه" , "هزار سموچ" , "ورسج" , "فرخار" , "رستاق" ,"کلفگان" , "نمک اب" , "اشکمش"],
    بدخشان: ["فیض آباد", "shar", "zone"],
    کندز: ["کندز", "امام صاحب", "چهار دره ", "خان اباد" , "دشت ارچی" , "قلقه ذال" , "شیرخان بندر" ]
}


citys.addEventListener("change", function () {
    if (province_DBMS.value == "ولایت خود را انتخاب نمایید") {
        town.innerHTML = "",
            town.innerHTML = "<option> select ... </option>;";
    }
    else {
        let minecity = citys.value;
        let minetown = province_DBMS[minecity]
        town.innerHTML = "";

        minetown.forEach(function (citye) {
            town.innerHTML += `<option value="${citye}">  ${citye}  </option>`
        })
    }

})

// console.log(province_DBMS['بدخشان']);












// // the province sections
let filterBtn = document.querySelector("#filter_btn");
let filterBtnText = document.querySelector("#filterBtn");
let filter_mobile_btn = document.querySelector(".filter_mobile_btn");


filterBtn.addEventListener("click" , function(){
    if( filterBtnText.style.display === "block" ){
        filterBtnText.style.display = "none" 
    }else{
        filterBtnText.style.display = "block" 
    }
})

filter_mobile_btn.addEventListener("click" , function(){
    if( filterBtnText.style.display === "block" ){
        filterBtnText.style.display = "none" 
    }else{
        filterBtnText.style.display = "block" 
    }
})





