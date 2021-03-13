//Menu Objects
let eccent_menu_opt = document.getElementById("eccent_menu_opt");
let eccent_nav_fixed = document.getElementById("eccent_nav_fixed");
let eccent_content_container = document.getElementById("eccent_content_container");
let haschildren = document.getElementsByClassName("menu-item-has-children");
let eccent_funnel_form = document.getElementById("eccent_funnel_form");
let eccent_deposit_opt = document.getElementById("eccent_deposit_opt");
let eccent_funnel_wpforms = document.getElementById("eccent_funnel_wpforms");

//Classic Funnel UI DO NOT USE
let eccent_howtobuy_1 = document.getElementById("form-field-eccent_howtobuy_field-0");
let eccent_howtobuy_2 = document.getElementById("form-field-eccent_howtobuy_field-1");
let eccent_howtobuy_3 = document.getElementById("form-field-eccent_howtobuy_field-2");
let eccent_funnel_desiredprice = document.getElementById("form-field-eccent_desiredprice_field");
let eccent_payfrequency_1 = document.getElementById("form-field-eccent_payfrequency_field-0");
let eccent_payfrequency_2 = document.getElementById("form-field-eccent_payfrequency_field-1");
let eccent_payfrequency_3 = document.getElementById("form-field-eccent_payfrequency_field-2");
let eccent_yesno_1 = document.getElementById("form-field-eccent_tradein_yesno-0");
let eccent_yesno_2 = document.getElementById("form-field-eccent_tradein_yesno-1");
let eccent_funnel_vin = document.getElementById("form-field-eccent_tradein_vin");
let eccent_funnel_make = document.getElementById("form-field-eccent_whichcar_make");
let eccent_funnel_cartype = document.getElementById("form-field-eccent_whichcar_type");
let eccent_funnel_carmodel = document.getElementById("form-field-eccent_whichcar_model");

//Final Values For WC
let eccent_wc_howtobuy = "";
let eccent_wc_payfrequency = "";
let eccent_wc_hastradein = "";

let eccent_checkout_container = document.getElementById("eccent_checkout_container");



//New Funnel


//WP Forms Buttons
let wheelwish_buttons = document.getElementsByClassName("wpforms-page-button");
let wheelwish_submit = document.getElementsByClassName("wpforms-submit");
let eccent_secondtolast_next = document.getElementsByClassName("wpforms-page-next");

//WP Forms Fields
let wheelwish_year = document.getElementById("wpforms-1816-field_57");
let wheelwish_make = document.getElementById("wpforms-1816-field_9");
let wheelwish_model = document.getElementById("wpforms-1816-field_10");
let wheelwish_trim = document.getElementById("wpforms-1816-field_11");
let wheelwish_color = document.getElementById("wpforms-1816-field_12");
let wheelwish_transmission = document.getElementById("wpforms-1816-field_14");
let wheelwish_drivetrain = document.getElementById("wpforms-1816-field_16");
let wheelwish_fuel = document.getElementById("wpforms-1816-field_17");
let wheelwish_packages = document.getElementById("wpforms-1816-field_18");
let wheelwish_accessories = document.getElementById("wpforms-1816-field_19");
let wheelwish_protection = document.getElementById("wpforms-1816-field_20");
let wheelwish_anythingelse = document.getElementById("wpforms-1816-field_25");

let wheelwish_paymethod = document.getElementById("wpforms-1816-field_24");
let wheelwish_paymethod_choice = "";

 //Cash
 let wheelwish_cash_amt = document.getElementById("wpforms-1816-field_30");

 //Finance & Lease
 let wheelwish_term = document.getElementById("wpforms-1816-field_27");
 let wheelwish_payfrequency = document.getElementById("wpforms-1816-field_28");
 let wheelwish_downpayment = document.getElementById("wpforms-1816-field_32");
 let wheelwish_negotiate_alt = document.getElementById("wpforms-1816-field_31");
 let wheelwish_negotiatingprice = document.getElementById("wpforms-1816-field_33");

 //Trade In
 let wheelwish_tradein = document.getElementById("wpforms-1816-field_49");
 let wheelwish_vin = document.getElementById("wpforms-1816-field_41");
 let wheelwish_tradein_year = document.getElementById("wpforms-1816-field_58");
 let wheelwish_tradein_make = document.getElementById("wpforms-1816-field_69");
 let wheelwish_tradein_model = document.getElementById("wpforms-1816-field_36");
 let wheelwish_tradein_trim = document.getElementById("wpforms-1816-field_38");
 let wheelwish_tradein_color = document.getElementById("wpforms-1816-field_39");
 let wheelwish_tradein_transmission = document.getElementById("wpforms-1816-field_40");
 let wheelwish_tradein_drivetrain = document.getElementById("wpforms-1816-field_42");
 let wheelwish_tradein_fuel = document.getElementById("wpforms-1816-field_43");
 let wheelwish_tradein_mileage = document.getElementById("wpforms-1816-field_53");
 let wheelwish_tradein_damage = document.getElementById("wpforms-1816-field_60");
 let wheelwish_tradein_other = document.getElementById("wpforms-1816-field_70");
 let wheelwish_tradein_dollarExpectation = document.getElementById("wpforms-1816-field_71");
 let wheelwish_tradein_dollarValue = document.getElementById("wpforms-1816-field_72");

 //Woo Commerce
 let place_order = document.getElementById("place_order");

 //Memberpress Country and State/Province Field Controls
 let mepr_country = document.getElementById("mepr_country");
 let mepr_country1 = document.getElementById("mepr_country1");
 let mepr_state_province = document.getElementById("mepr_state_province");
 let mepr_state_province1 = document.getElementById("mepr_state_province1");

 let mepr_savedall = false;
 let mepr_saved_stateValues = [];
 let mepr_saved_stateNames = [];

eccent_menu_opt.addEventListener("click", function() {
    eccent_nav_fixed.classList.toggle("show_nav_fixed");
    eccent_content_container.classList.toggle("show_content_container");
});

eccent_content_container.addEventListener("click", function(e) {
    if(eccent_nav_fixed.classList.contains("show_nav_fixed") && eccent_content_container.classList.contains("show_content_container") && e.target.classList[0] != "eccent_menu_opt" && e.target.classList[0] != "eccent_menu_opt_icon" && e.target.classList[0] != "eccent_nav_fixed" && e.target.classList[0] != "eccemt_nav_follow" && e.target.classList[0] != "eccent_social_icon" && e.target.tagName != "A") {
        console.log("Test:" + e.target.classList[0]);
        eccent_nav_fixed.classList.remove("show_nav_fixed");
        eccent_content_container.classList.remove("show_content_container");
    }  
    
});

function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function inject_woocommere() {
    if(eccent_checkout_container != null) {
      console.log("Injecting woocommerce values...");
      //Print Desired Vehicle Details
      console.log("DESIRED VEHICLE");
      console.log(sessionStorage.getItem("eccentvar_year"));
      console.log(sessionStorage.getItem("eccentvar_make"));
      console.log(sessionStorage.getItem("eccentvar_model"));
      console.log(sessionStorage.getItem("eccentvar_trim"));
      console.log(sessionStorage.getItem("eccentvar_color"));
      console.log(sessionStorage.getItem("eccentvar_transmission"));
      console.log(sessionStorage.getItem("eccentvar_drivetrain"));
      console.log(sessionStorage.getItem("eccentvar_fuel"));
      console.log(sessionStorage.getItem("eccentvar_packages"));
      console.log(sessionStorage.getItem("eccentvar_accessories"));
      console.log(sessionStorage.getItem("eccentvar_protection"));
      console.log(sessionStorage.getItem("eccentvar_anythingelse"));

      //Print Desired Payment Details
      console.log("PAYMENT");
      console.log(sessionStorage.getItem("eccentvar_paymethod_choice"));
      console.log(sessionStorage.getItem("eccentvar_cash_amt"));
      console.log(sessionStorage.getItem("eccentvar_term"));
      console.log(sessionStorage.getItem("eccentvar_payfrequency"));
      console.log(sessionStorage.getItem("eccentvar_downpayment"));
      console.log(sessionStorage.getItem("eccentvar_negotiate_alt"));
      console.log(sessionStorage.getItem("eccentvar_negotiatingprice"));

      //Print Trade In Details
      console.log("TRADE IN");
      console.log(sessionStorage.getItem("eccentvar_tradein"));
      console.log(sessionStorage.getItem("eccentvar_vin"));
      console.log(sessionStorage.getItem("eccentvar_tradein_mileage"));
      console.log(sessionStorage.getItem("eccentvar_tradein_year"));
      console.log(sessionStorage.getItem("eccentvar_tradein_make"));
      console.log(sessionStorage.getItem("eccentvar_tradein_model"));
      console.log(sessionStorage.getItem("eccentvar_tradein_trim"));
      console.log(sessionStorage.getItem("eccentvar_tradein_color"));
      console.log(sessionStorage.getItem("eccentvar_tradein_transmission"));
      console.log(sessionStorage.getItem("eccentvar_tradein_drivetrain"));
      console.log(sessionStorage.getItem("eccentvar_tradein_fuel"));
      console.log(sessionStorage.getItem("eccentvar_tradein_damage"));
      console.log(sessionStorage.getItem("eccentvar_tradein_other"));
      console.log(sessionStorage.getItem("eccentvar_tradein_dollarExpectation"));
      console.log(sessionStorage.getItem("eccentvar_tradein_dollarValue"));

      //Instantiate WC Fields
      let wc_year = document.getElementById("wc_year");
      let wc_make = document.getElementById("wc_make");
      let wc_model = document.getElementById("wc_model");
      let wc_trim = document.getElementById("wc_trim");
      let wc_colorpref = document.getElementById("wc_colorpref");
      let wc_transmission = document.getElementById("wc_transmission");
      let wc_drivetrain = document.getElementById("wc_drivetrain");
      let wc_fuel = document.getElementById("wc_fuel");
      let wc_packages = document.getElementById("wc_packages");
      let wc_accessories = document.getElementById("wc_accessories");
      let wc_protection = document.getElementById("wc_protection");
      let wc_anythingelse = document.getElementById("wc_anythingelse");

      let wc_paymethod = document.getElementById("wc_paymethod");
      let wc_cashprice = document.getElementById("wc_cashprice");
      let wc_term = document.getElementById("wc_term");
      let wc_payfrequency = document.getElementById("wc_payfrequency");
      let wc_downpayment = document.getElementById("wc_downpayment");
      let wc_negotiatealt = document.getElementById("wc_negotiatealt");
      let wc_negotiateprice = document.getElementById("wc_negotiateprice");

      let wc_tradein = document.getElementById("wc_tradein");
      let wc_vin = document.getElementById("wc_vin");
      let wc_tmileage = document.getElementById("wc_tmileage");
      let wc_tyear = document.getElementById("wc_tyear");
      let wc_tmake = document.getElementById("wc_tmake");
      let wc_tmodel = document.getElementById("wc_tmodel");
      let wc_ttrim = document.getElementById("wc_ttrim");
      let wc_tcolor = document.getElementById("wc_tcolor");
      let wc_ttransmission = document.getElementById("wc_ttransmission");
      let wc_tdrivetrain = document.getElementById("wc_tdrivetrain");
      let wc_tfuel = document.getElementById("wc_tfuel");
      let wc_tdamage = document.getElementById("wc_tdamage");
      let wc_tother = document.getElementById("wc_tother");
      let wc_tdollarexpectation = document.getElementById("wc_tdollarexpectation");
      let wc_tdollarvalue = document.getElementById("wc_tdollarvalue");

       //Set Values
       if(wc_make != null) {
            wc_year.value = sessionStorage.getItem("eccentvar_year");
            wc_make.value = sessionStorage.getItem("eccentvar_make");
            wc_model.value = sessionStorage.getItem("eccentvar_model");
            wc_trim.value = sessionStorage.getItem("eccentvar_trim");
            wc_colorpref.value = sessionStorage.getItem("eccentvar_color");
            wc_transmission.value = sessionStorage.getItem("eccentvar_transmission");
            wc_drivetrain.value = sessionStorage.getItem("eccentvar_drivetrain");
            wc_fuel.value = sessionStorage.getItem("eccentvar_fuel");
            wc_packages.value = sessionStorage.getItem("eccentvar_packages");
            wc_accessories.value = sessionStorage.getItem("eccentvar_accessories");
            wc_protection.value = sessionStorage.getItem("eccentvar_protection");
            wc_anythingelse.value = sessionStorage.getItem("eccentvar_anythingelse");
    
            wc_paymethod.value = sessionStorage.getItem("eccentvar_paymethod_choice");
            wc_cashprice.value = sessionStorage.getItem("eccentvar_cash_amt");
            wc_term.value = sessionStorage.getItem("eccentvar_term");
            wc_payfrequency.value = sessionStorage.getItem("eccentvar_payfrequency");
            wc_downpayment.value = sessionStorage.getItem("eccentvar_downpayment");
            wc_negotiatealt.value = sessionStorage.getItem("eccentvar_negotiate_alt");
            wc_negotiateprice.value = sessionStorage.getItem("eccentvar_negotiatingprice");
    
            wc_tradein.value = sessionStorage.getItem("eccentvar_tradein");
            wc_vin.value = sessionStorage.getItem("eccentvar_vin");
            wc_tmileage.value = sessionStorage.getItem("eccentvar_tradein_mileage");
            wc_tyear.value = sessionStorage.getItem("eccentvar_tradein_year");
            wc_tmake.value = sessionStorage.getItem("eccentvar_tradein_make");
            wc_tmodel.value = sessionStorage.getItem("eccentvar_tradein_model");
            wc_ttrim.value = sessionStorage.getItem("eccentvar_tradein_trim");
            wc_tcolor.value = sessionStorage.getItem("eccentvar_tradein_color");
            wc_ttransmission.value = sessionStorage.getItem("eccentvar_tradein_transmission");
            wc_tdrivetrain.value = sessionStorage.getItem("eccentvar_tradein_drivetrain");
            wc_tfuel.value = sessionStorage.getItem("eccentvar_tradein_fuel");
            wc_tdamage.value = sessionStorage.getItem("eccentvar_tradein_damage");
            wc_tother.value = sessionStorage.getItem("eccentvar_tradein_other");
            wc_tdollarexpectation.value = sessionStorage.getItem("eccentvar_tradein_dollarExpectation");
            wc_tdollarvalue.value = sessionStorage.getItem("eccentvar_tradein_dollarValue");
    
    
            //Disable Fields After Setting
            wc_year.classList.add("eccent_hide_field");
            wc_make.classList.add("eccent_hide_field");
            wc_model.classList.add("eccent_hide_field");
            wc_trim.classList.add("eccent_hide_field");
            wc_colorpref.classList.add("eccent_hide_field");
            wc_transmission.classList.add("eccent_hide_field");
            wc_drivetrain.classList.add("eccent_hide_field");
            wc_fuel.classList.add("eccent_hide_field");
            wc_packages.classList.add("eccent_hide_field");
            wc_accessories.classList.add("eccent_hide_field");
            wc_protection.classList.add("eccent_hide_field");
            wc_anythingelse.classList.add("eccent_hide_field");
    
            wc_paymethod.classList.add("eccent_hide_field");
            wc_cashprice.classList.add("eccent_hide_field");
            wc_term.classList.add("eccent_hide_field");
            wc_payfrequency.classList.add("eccent_hide_field");
            wc_downpayment.classList.add("eccent_hide_field");
            wc_negotiatealt.classList.add("eccent_hide_field");
            wc_negotiateprice.classList.add("eccent_hide_field");
    
            wc_tradein.classList.add("eccent_hide_field");
            wc_vin.classList.add("eccent_hide_field");
            wc_tmileage.classList.add("eccent_hide_field");
            wc_tyear.classList.add("eccent_hide_field");
            wc_tmake.classList.add("eccent_hide_field");
            wc_tmodel.classList.add("eccent_hide_field");
            wc_ttrim.classList.add("eccent_hide_field");
            wc_tcolor.classList.add("eccent_hide_field");
            wc_ttransmission.classList.add("eccent_hide_field");
            wc_tdrivetrain.classList.add("eccent_hide_field");
            wc_tfuel.classList.add("eccent_hide_field");
            wc_tdamage.classList.add("eccent_hide_field");
            wc_tother.classList.add("eccent_hide_field");
            wc_tdollarexpectation.classList.add("eccent_hide_field");
            wc_tdollarvalue.classList.add("eccent_hide_field");
       }
      


    }
}

inject_woocommere();

// if(eccent_deposit_opt != null) {
//     //Classic Mode
//     eccent_deposit_opt.addEventListener("click", eccent_wc_save_classic);

// }

// function eccent_wc_save_classic() {

//     if(eccent_howtobuy_1.checked == true) {
//         eccent_wc_howtobuy = "Lease";
//     } else if(eccent_howtobuy_2.checked == true) {
//         eccent_wc_howtobuy = "Buy";
//     } else if(eccent_howtobuy_3.checked == true) {
//         eccent_wc_howtobuy = "Finance";
//     }

//     if(eccent_payfrequency_1.checked == true) {
//         eccent_wc_payfrequency = "Monthly";
//     } else if(eccent_payfrequency_2.checked == true) {
//         eccent_wc_payfrequency = "Biweekly";
//     } else if(eccent_payfrequency_3.checked == true) {
//         eccent_wc_payfrequency = "None.  Buying The Vehicle.";
//     }

//     if(eccent_yesno_1.checked == true) {
//         eccent_wc_hastradein = "Yes";
//     } else if(eccent_yesno_2.checked == true) {
//         eccent_wc_hastradein = "No";
//     }

//     console.log(eccent_wc_howtobuy);
//     console.log(eccent_funnel_desiredprice.value);
//     console.log(eccent_wc_payfrequency);
//     console.log(eccent_wc_hastradein);
//     console.log(eccent_funnel_vin.value);
//     console.log(eccent_funnel_make.value);
//     console.log(eccent_funnel_cartype.value);
//     console.log(eccent_funnel_carmodel.value);

//     sessionStorage.setItem("eccentstorage_howtobuy", eccent_wc_howtobuy);
//     sessionStorage.setItem("eccentstorage_desiredprice", eccent_funnel_desiredprice.value);
//     sessionStorage.setItem("eccentstorage_payfrequency", eccent_wc_payfrequency);
//     sessionStorage.setItem("eccentstorage_hastradein", eccent_wc_hastradein);
//     sessionStorage.setItem("eccentstorage_vin", eccent_funnel_vin.value);
//     sessionStorage.setItem("eccentstorage_make", eccent_funnel_make.value);
//     sessionStorage.setItem("eccentstorage_cartype", eccent_funnel_cartype.value);
//     sessionStorage.setItem("eccentstorage_carmodel", eccent_funnel_carmodel.value);
//     window.location = 'https://brianr35.sg-host.com/cart/?add-to-cart=1057';
// }

function inject_menus() {
    for(i = 0; i < haschildren.length; i++) {
        let hassubmenu = haschildren[i].getElementsByClassName("sub-menu");
        if(hassubmenu.length == 1) {
          let hassubli = hassubmenu[0].getElementsByTagName("li");
          let subliheight = hassubli.length * 35;
          haschildren[i].addEventListener("click", function(){
              if(hassubmenu[0].classList.contains("show_sub") == false) {
                  hassubmenu[0].classList.add("show_sub");
                  hassubmenu[0].style.height = subliheight + "px";
              } else {
                  hassubmenu[0].classList.remove("show_sub");
                  hassubmenu[0].style.height = "0px";
              }
              
          });
        }
        
    }
  }

inject_menus();

//Funnel Form

function inject_funnel_classic() {


  if(eccent_funnel_form != null) {
    console.log("Started injecting Classic Version Of Funnel Form...");
    let radiofields = eccent_funnel_form.getElementsByClassName("elementor-field-type-radio");
  
    for(i = 0; i < radiofields.length; i++) {
          let eccent_radio_opt = radiofields[i].getElementsByClassName("elementor-field-option");
  
          for(z = 0; z < eccent_radio_opt.length; z++) {
              eccent_radio_opt[z].addEventListener("click", function(){
                  let myparent = this.parentElement;
                  let myparent_elements = myparent.getElementsByClassName("elementor-field-option");
  
                  for(y = 0; y < myparent_elements.length; y++) {
                      if(myparent_elements[y] !== this && myparent_elements[y].classList.contains("eccent_radio_highlight")) {
                          myparent_elements[y].classList.remove("eccent_radio_highlight");
                      }
                  }
  
                  console.log(myparent_elements);
                  this.classList.add("eccent_radio_highlight");
              });
  
              console.log("");
          }
    }
  }

}

if(eccent_funnel_form != null) {
    inject_funnel_classic();
}

//Inject necessary even listeners to make the whole ecommerce process work
function inject_funnel_new() {
  console.log("Injecting Wheel Wish Form 1.5");
  let wheelwish_paymethod_li = wheelwish_paymethod.getElementsByTagName("li");
  check_funnel_status();

  //   console.log(wheelwish_paymethod_li);

  for(i = 0; i < wheelwish_paymethod_li.length; i++) {
      wheelwish_paymethod_li[i].addEventListener("click", function(){
      let wheelwish_radio_temp = this.getElementsByTagName("label");

      if(wheelwish_radio_temp.length == 1) {
        wheelwish_paymethod_choice = wheelwish_radio_temp[0].innerHTML;
      }

       console.log("Funnel Choice Test: " + wheelwish_paymethod_choice);

          
      });
  }


  if(wheelwish_buttons.length > 0 || wheelwish_submit.length > 0) {

    for(i = 0; i < wheelwish_buttons.length; i++) {

        wheelwish_buttons[i].addEventListener("click", function(){
            console.log("Funnel: Regular Button");
            save_funnel_new();
        });
    }

    // for(i = 0; i < wheelwish_submit.length; i++) {
    //     wheelwish_submit[i].addEventListener("click", function(){
    //         console.log("Funnel: Submit Button");
    //         save_funnel_new();
    //     });
    // }
    
  }

  if(wheelwish_payfrequency != null) {

    wheelwish_payfrequency.addEventListener("change", function(){
      if(wheelwish_payfrequency.value == "Bi-Weekly") {
        console.log("Bi");
        var templength = wheelwish_negotiate_alt.options.length;
        for (i = templength-1; i >= 1; i--) {
          wheelwish_negotiate_alt.options[i] = null;
        }

        var option = document.createElement("option");
        option.text = "Bi-Weekly Payments";
        var option2 = document.createElement("option");
        option2.text = "Total Cost Of Vehicle";

        wheelwish_negotiate_alt.add(option);
        wheelwish_negotiate_alt.add(option2);
        wheelwish_negotiate_alt.selectedIndex = 0;
      } else if(wheelwish_payfrequency.value == "Monthly") {
        console.log("Month");
        var templength = wheelwish_negotiate_alt.options.length;
        for (i = templength-1; i >= 1; i--) {
          wheelwish_negotiate_alt.options[i] = null;
        }

        var option = document.createElement("option");
        option.text = "Monthly Payments";
        var option2 = document.createElement("option");
        option2.text = "Total Cost Of Vehicle";

        wheelwish_negotiate_alt.add(option);
        wheelwish_negotiate_alt.add(option2);
        wheelwish_negotiate_alt.selectedIndex = 0;
      }
    });

  }

  if(eccent_secondtolast_next.length > 0) {
    eccent_secondtolast_next[eccent_secondtolast_next.length - 1].addEventListener("click", function(){
      console.log("Second To Last Button");
      let eccent_revieworder_year = document.getElementById("eccent_revieworder_year");
      let eccent_revieworder_make = document.getElementById("eccent_revieworder_make");
      let eccent_revieworder_model = document.getElementById("eccent_revieworder_model");
      let eccent_revieworder_trim = document.getElementById("eccent_revieworder_trim");
      let eccent_revieworder_colorpref = document.getElementById("eccent_revieworder_colorpref");
      let eccent_revieworder_transmission = document.getElementById("eccent_revieworder_transmission");
      let eccent_revieworder_drivetrain = document.getElementById("eccent_revieworder_drivetrain");
      let eccent_revieworder_fuel = document.getElementById("eccent_revieworder_fuel");
      let eccent_revieworder_packages = document.getElementById("eccent_revieworder_packages");
      let eccent_revieworder_accessories = document.getElementById("eccent_revieworder_accessories");
      let eccent_revieworder_protection = document.getElementById("eccent_revieworder_protection");
      let eccent_revieworder_anythingelse = document.getElementById("eccent_revieworder_anythingelse");

      let eccent_revieworder_paymethod = document.getElementById("eccent_revieworder_paymethod");
      let eccent_revieworder_cashprice = document.getElementById("eccent_revieworder_cashprice");
      let eccent_revieworder_term = document.getElementById("eccent_revieworder_term");
      let eccent_revieworder_payfrequency = document.getElementById("eccent_revieworder_payfrequency");
      let eccent_revieworder_downpayment = document.getElementById("eccent_revieworder_downpayment");
      let eccent_revieworder_negotiatealt = document.getElementById("eccent_revieworder_negotiatealt");
      let eccent_revieworder_negotiateprice = document.getElementById("eccent_revieworder_negotiateprice");

      let eccent_revieworder_tradein = document.getElementById("eccent_revieworder_tradein");
      let eccent_revieworder_vin = document.getElementById("eccent_revieworder_vin");
      let eccent_revieworder_tyear = document.getElementById("eccent_revieworder_tyear");
      let eccent_revieworder_tmake = document.getElementById("eccent_revieworder_tmake");
      let eccent_revieworder_tmodel = document.getElementById("eccent_revieworder_tmodel");
      let eccent_revieworder_ttrim = document.getElementById("eccent_revieworder_ttrim");
      let eccent_revieworder_tcolor = document.getElementById("eccent_revieworder_tcolor");
      let eccent_revieworder_ttransmission = document.getElementById("eccent_revieworder_ttransmission");
      let eccent_revieworder_tdrivetrain = document.getElementById("eccent_revieworder_tdrivetrain");
      let eccent_revieworder_tfuel = document.getElementById("eccent_revieworder_tfuel");
      let eccent_revieworder_tmileage = document.getElementById("eccent_revieworder_tmileage");
      let eccent_revieworder_tdamage = document.getElementById("eccent_revieworder_tdamage");
      let eccent_revieworder_tother = document.getElementById("eccent_revieworder_tother");
      let eccent_revieworder_tdollarExpectation = document.getElementById("eccent_revieworder_tdollarExpectation");
      let eccent_revieworder_tdollarValue = document.getElementById("eccent_revieworder_tdollarValue");

      eccent_revieworder_year.innerHTML = sessionStorage.getItem("eccentvar_year");
      eccent_revieworder_make.innerHTML = sessionStorage.getItem("eccentvar_make");
      eccent_revieworder_model.innerHTML = sessionStorage.getItem("eccentvar_model");
      eccent_revieworder_trim.innerHTML = sessionStorage.getItem("eccentvar_trim");
      eccent_revieworder_colorpref.innerHTML = sessionStorage.getItem("eccentvar_color");
      eccent_revieworder_transmission.innerHTML = sessionStorage.getItem("eccentvar_transmission");
      eccent_revieworder_drivetrain.innerHTML = sessionStorage.getItem("eccentvar_drivetrain");
      eccent_revieworder_fuel.innerHTML = sessionStorage.getItem("eccentvar_fuel");
      eccent_revieworder_packages.innerHTML = sessionStorage.getItem("eccentvar_packages");
      eccent_revieworder_accessories.innerHTML = sessionStorage.getItem("eccentvar_accessories");
      eccent_revieworder_protection.innerHTML = sessionStorage.getItem("eccentvar_protection");
      eccent_revieworder_anythingelse.innerHTML = sessionStorage.getItem("eccentvar_anythingelse");

      eccent_revieworder_paymethod.innerHTML = sessionStorage.getItem("eccentvar_paymethod_choice");
      eccent_revieworder_cashprice.innerHTML = sessionStorage.getItem("eccentvar_cash_amt");
      eccent_revieworder_term.innerHTML = sessionStorage.getItem("eccentvar_term");
      eccent_revieworder_payfrequency.innerHTML = sessionStorage.getItem("eccentvar_payfrequency");
      eccent_revieworder_downpayment.innerHTML = sessionStorage.getItem("eccentvar_downpayment");
      eccent_revieworder_negotiatealt.innerHTML = sessionStorage.getItem("eccentvar_negotiate_alt");
      eccent_revieworder_negotiateprice.innerHTML = sessionStorage.getItem("eccentvar_negotiatingprice");

      eccent_revieworder_tradein.innerHTML = sessionStorage.getItem("eccentvar_tradein");
      eccent_revieworder_vin.innerHTML = sessionStorage.getItem("eccentvar_vin");
      eccent_revieworder_tmileage.innerHTML = sessionStorage.getItem("eccentvar_tradein_mileage");
      eccent_revieworder_tyear.innerHTML = sessionStorage.getItem("eccentvar_tradein_year");
      eccent_revieworder_tmake.innerHTML = sessionStorage.getItem("eccentvar_tradein_make");
      eccent_revieworder_tmodel.innerHTML = sessionStorage.getItem("eccentvar_tradein_model");
      eccent_revieworder_ttrim.innerHTML = sessionStorage.getItem("eccentvar_tradein_trim");
      eccent_revieworder_tcolor.innerHTML = sessionStorage.getItem("eccentvar_tradein_color");
      eccent_revieworder_ttransmission.innerHTML = sessionStorage.getItem("eccentvar_tradein_transmission");
      eccent_revieworder_tdrivetrain.innerHTML = sessionStorage.getItem("eccentvar_tradein_drivetrain");
      eccent_revieworder_tfuel.innerHTML = sessionStorage.getItem("eccentvar_tradein_fuel");
      eccent_revieworder_tdamage.innerHTML = sessionStorage.getItem("eccentvar_tradein_damage");
      eccent_revieworder_tother.innerHTML = sessionStorage.getItem("eccentvar_tradein_other");
      eccent_revieworder_tdollarExpectation.innerHTML = sessionStorage.getItem("eccentvar_tradein_dollarExpectation");
      eccent_revieworder_tdollarValue.innerHTML = sessionStorage.getItem("eccentvar_tradein_dollarValue");

    });

    let lastpagebreak = document.getElementById("wpforms-1816-field_5-container");
    if(lastpagebreak != null) {
      let lastprev = lastpagebreak.getElementsByClassName("wpforms-page-prev"); 
      let submitcontainer = document.getElementsByClassName("wpforms-submit-container");
      let finalsubmit = document.getElementById("wpforms-submit-1816");
      console.log(lastprev);
      console.log(submitcontainer);
      if(submitcontainer.length == 1 && lastprev.length == 1) {
        submitcontainer[0].appendChild(lastprev[0]);
        submitcontainer[0].appendChild(finalsubmit);
      }
    }


  }

}

if(eccent_funnel_wpforms != null) {
    inject_funnel_new();
}

//Check if session variables are present if so fill values of appropriate fields
function check_funnel_status() {

    //Buy Car

    if(wheelwish_year != null && sessionStorage.getItem("eccentvar_year") != null && sessionStorage.getItem("eccentvar_year") != "---") {
      wheelwish_year.value = sessionStorage.getItem("eccentvar_year");
    }

    if(wheelwish_make != null && sessionStorage.getItem("eccentvar_make") != null && sessionStorage.getItem("eccentvar_make") != "---") {
      wheelwish_make.value = sessionStorage.getItem("eccentvar_make");
    }

    if(wheelwish_model != null && sessionStorage.getItem("eccentvar_model") != null && sessionStorage.getItem("eccentvar_model") != "---") {
      wheelwish_model.value = sessionStorage.getItem("eccentvar_model");
    }

    if(wheelwish_trim != null && sessionStorage.getItem("eccentvar_trim") != null && sessionStorage.getItem("eccentvar_trim") != "---") {
      wheelwish_trim.value = sessionStorage.getItem("eccentvar_trim");
    }

    if(wheelwish_color != null && sessionStorage.getItem("eccentvar_color") != null && sessionStorage.getItem("eccentvar_color") != "---")  {
      wheelwish_color.value = sessionStorage.getItem("eccentvar_color");
    }

    if(wheelwish_transmission != null && sessionStorage.getItem("eccentvar_transmission") != null && sessionStorage.getItem("eccentvar_transmission") != "---") {
      wheelwish_transmission.value = sessionStorage.getItem("eccentvar_transmission");
    }

    if(wheelwish_drivetrain != null && sessionStorage.getItem("eccentvar_drivetrain") != null && sessionStorage.getItem("eccentvar_drivetrain") != "---") {
      wheelwish_drivetrain.value = sessionStorage.getItem("eccentvar_drivetrain");
    }

    if(wheelwish_fuel != null && sessionStorage.getItem("eccentvar_fuel") != null && sessionStorage.getItem("eccentvar_fuel") != "---") {
      wheelwish_fuel.value = sessionStorage.getItem("eccentvar_fuel");
    }

    if(wheelwish_packages != null && sessionStorage.getItem("eccentvar_packages") != null && sessionStorage.getItem("eccentvar_packages") != "---") {
      wheelwish_packages.value = sessionStorage.getItem("eccentvar_packages");
    }

    if(wheelwish_accessories != null && sessionStorage.getItem("eccentvar_accessories") != null && sessionStorage.getItem("eccentvar_accessories") != "---") {
      wheelwish_accessories.value = sessionStorage.getItem("eccentvar_accessories");
    }

    if(wheelwish_protection != null && sessionStorage.getItem("eccentvar_protection") != null && sessionStorage.getItem("eccentvar_protection") != "---") {
      wheelwish_protection.value = sessionStorage.getItem("eccentvar_protection");
    }

    if(wheelwish_anythingelse != null && sessionStorage.getItem("eccentvar_anythingelse") != null && sessionStorage.getItem("eccentvar_anythingelse") != "---") {
      wheelwish_anythingelse.value = sessionStorage.getItem("eccentvar_anythingelse");
    }

    if (wheelwish_paymethod != null && sessionStorage.getItem("eccentvar_paymethod_choice") != null && sessionStorage.getItem("eccentvar_paymethod_choice") != "---") {
      //Set Pay Method Variable and Attempt To Set Control
      let first_paymethod_radio = document.getElementById("wpforms-1816-field_24_1");
      let second_paymethod_radio = document.getElementById("wpforms-1816-field_24_2");
      let third_paymethod_radio = document.getElementById("wpforms-1816-field_24_3");
      wheelwish_paymethod_choice = sessionStorage.getItem("eccentvar_paymethod_choice");

      if(wheelwish_paymethod_choice == "Cash") {
        first_paymethod_radio.checked = true;
        first_paymethod_radio.parentElement.classList.add("wpforms-selected");
      } else if(wheelwish_paymethod_choice == "Finance") {
        second_paymethod_radio.checked = true;
        second_paymethod_radio.parentElement.classList.add("wpforms-selected");
      } else if(wheelwish_paymethod_choice == "Lease") {
        third_paymethod_radio.checked = true;
        third_paymethod_radio.parentElement.classList.add("wpforms-selected");
      }
    }

    if(wheelwish_paymethod_choice == "Finance" || wheelwish_paymethod_choice == "Lease") {
        //Finance & Lease
        if(wheelwish_term != null && sessionStorage.getItem("eccentvar_term") != null && sessionStorage.getItem("eccentvar_term") != "---") {
          wheelwish_term.value = sessionStorage.getItem("eccentvar_term");
        }

        if(wheelwish_payfrequency != null && sessionStorage.getItem("eccentvar_payfrequency") != null && sessionStorage.getItem("eccentvar_payfrequency") != "---") {
          wheelwish_payfrequency.value = sessionStorage.getItem("eccentvar_payfrequency");
        }

        if(wheelwish_downpayment != null && sessionStorage.getItem("eccentvar_downpayment") != null && sessionStorage.getItem("eccentvar_downpayment") != "---") {
          wheelwish_downpayment.value = sessionStorage.getItem("eccentvar_downpayment").replace(",", "");
        }

        if(wheelwish_payfrequency != null & wheelwish_negotiate_alt != null) {
          if(sessionStorage.getItem("eccentvar_payfrequency") == "Bi-Weekly") {
            console.log("Bi");
            var templength = wheelwish_negotiate_alt.options.length;
            for (i = templength-1; i >= 1; i--) {
              wheelwish_negotiate_alt.options[i] = null;
            }
    
            var option = document.createElement("option");
            option.text = "Bi-Weekly Payments";
            var option2 = document.createElement("option");
            option2.text = "Total Cost Of Vehicle";
    
            wheelwish_negotiate_alt.add(option);
            wheelwish_negotiate_alt.add(option2);
          } else if(sessionStorage.getItem("eccentvar_payfrequency") == "Monthly") {
            console.log("Month");
            var templength = wheelwish_negotiate_alt.options.length;
            for (i = templength-1; i >= 1; i--) {
              wheelwish_negotiate_alt.options[i] = null;
            }
    
            var option = document.createElement("option");
            option.text = "Monthly Payments";
            var option2 = document.createElement("option");
            option2.text = "Total Cost Of Vehicle";
    
            wheelwish_negotiate_alt.add(option);
            wheelwish_negotiate_alt.add(option2);
          }
        }

        if(wheelwish_negotiate_alt != null && sessionStorage.getItem("eccentvar_negotiate_alt") != null && sessionStorage.getItem("eccentvar_negotiate_alt") != "---") {
          wheelwish_negotiate_alt.value = sessionStorage.getItem("eccentvar_negotiate_alt");
        }

        if(wheelwish_negotiatingprice != null && sessionStorage.getItem("eccentvar_negotiatingprice") != null && sessionStorage.getItem("eccentvar_negotiatingprice") != "---") {
          wheelwish_negotiatingprice.value = sessionStorage.getItem("eccentvar_negotiatingprice").replace(",", "");
        }
    } else if(wheelwish_paymethod_choice == "Cash") {
      //Cash
      if(wheelwish_cash_amt != null && sessionStorage.getItem("eccentvar_cash_amt") != null && sessionStorage.getItem("eccentvar_cash_amt") != "---") {
        wheelwish_cash_amt.value = sessionStorage.getItem("eccentvar_cash_amt").replace(",", "");
      }
    }
    
    //Trade In
    if(wheelwish_tradein != null && sessionStorage.getItem("eccentvar_tradein") != null && sessionStorage.getItem("eccentvar_tradein") != "---") {
      wheelwish_tradein.value = sessionStorage.getItem("eccentvar_tradein");

      if(sessionStorage.getItem("eccentvar_tradein") == "Yes") {
        if(wheelwish_vin != null && sessionStorage.getItem("eccentvar_vin") != null && sessionStorage.getItem("eccentvar_vin") != "---") {
          wheelwish_vin.value = sessionStorage.getItem("eccentvar_vin");
        }
    
        if(wheelwish_tradein_mileage != null && sessionStorage.getItem("eccentvar_tradein_mileage") != null && sessionStorage.getItem("eccentvar_tradein_mileage") != "---") {
          wheelwish_tradein_mileage.value = sessionStorage.getItem("eccentvar_tradein_mileage");
        }
    
        if(wheelwish_tradein_year != null && sessionStorage.getItem("eccentvar_tradein_year") != null && sessionStorage.getItem("eccentvar_tradein_year") != "---") {
          wheelwish_tradein_year.value = sessionStorage.getItem("eccentvar_tradein_year");
        }
    
        if(wheelwish_tradein_make != null && sessionStorage.getItem("eccentvar_tradein_make") != null && sessionStorage.getItem("eccentvar_tradein_make") != "---") {
          wheelwish_tradein_make.value = sessionStorage.getItem("eccentvar_tradein_make");
        }
    
        if(wheelwish_tradein_model != null && sessionStorage.getItem("eccentvar_tradein_model") != null && sessionStorage.getItem("eccentvar_tradein_model") != "---") {
          wheelwish_tradein_model.value = sessionStorage.getItem("eccentvar_tradein_model");
        }
    
        if(wheelwish_tradein_trim != null && sessionStorage.getItem("eccentvar_tradein_trim") != null && sessionStorage.getItem("eccentvar_tradein_trim") != "---") {
          wheelwish_tradein_trim.value = sessionStorage.getItem("eccentvar_tradein_trim");
        }
    
        if(wheelwish_tradein_color != null && sessionStorage.getItem("eccentvar_tradein_color") != null && sessionStorage.getItem("eccentvar_tradein_color") != "---") {
          wheelwish_tradein_color.value = sessionStorage.getItem("eccentvar_tradein_color");
        }
    
        if(wheelwish_tradein_transmission != null && sessionStorage.getItem("eccentvar_tradein_transmission") != null && sessionStorage.getItem("eccentvar_tradein_transmission") != "---") {
          wheelwish_tradein_transmission.value = sessionStorage.getItem("eccentvar_tradein_transmission");
        }
    
        if(wheelwish_tradein_drivetrain != null && sessionStorage.getItem("eccentvar_tradein_drivetrain") != null && sessionStorage.getItem("eccentvar_tradein_drivetrain") != "---") {
          wheelwish_tradein_drivetrain.value = sessionStorage.getItem("eccentvar_tradein_drivetrain");
        }
    
        if(wheelwish_tradein_fuel != null && sessionStorage.getItem("eccentvar_tradein_fuel") != null && sessionStorage.getItem("eccentvar_tradein_fuel") != "---") {
          wheelwish_tradein_fuel.value = sessionStorage.getItem("eccentvar_tradein_fuel");
        }
    
        if(wheelwish_tradein_damage != null && sessionStorage.getItem("eccentvar_tradein_damage") != null && sessionStorage.getItem("eccentvar_tradein_damage") != "---") {
          wheelwish_tradein_damage.value = sessionStorage.getItem("eccentvar_tradein_damage");
        }
    
        if(wheelwish_tradein_other != null && sessionStorage.getItem("eccentvar_tradein_other") != null && sessionStorage.getItem("eccentvar_tradein_other") != "---") {
          wheelwish_tradein_other.value = sessionStorage.getItem("eccentvar_tradein_other");
        }

        if(wheelwish_tradein_dollarExpectation != null && sessionStorage.getItem("eccentvar_tradein_dollarExpectation") != null && sessionStorage.getItem("eccentvar_tradein_dollarExpectation") != "---") {
          wheelwish_tradein_dollarExpectation.value = sessionStorage.getItem("eccentvar_tradein_dollarExpectation");
        }

        if(sessionStorage.getItem("eccentvar_tradein_dollarExpectation") == "Dollar Value") {
          if(wheelwish_tradein_dollarValue != null && sessionStorage.getItem("eccentvar_tradein_dollarValue") != null && sessionStorage.getItem("eccentvar_tradein_dollarValue") != "---") {
            wheelwish_tradein_dollarValue.value = sessionStorage.getItem("eccentvar_tradein_dollarValue");
          }
        }
      }
    }

}

//Save order session variables
function save_funnel_new() {
  console.log("");
  console.log("-----------------------------------------------------------------");
  console.log("Funnel: Sync Fire");

  sessionStorage.setItem("eccentvar_year", wheelwish_year.value);
  sessionStorage.setItem("eccentvar_make", wheelwish_make.value);
  sessionStorage.setItem("eccentvar_model", wheelwish_model.value);
  sessionStorage.setItem("eccentvar_trim", wheelwish_trim.value);
  sessionStorage.setItem("eccentvar_color", wheelwish_color.value);
  sessionStorage.setItem("eccentvar_transmission", wheelwish_transmission.value);
  sessionStorage.setItem("eccentvar_drivetrain", wheelwish_drivetrain.value);
  sessionStorage.setItem("eccentvar_fuel", wheelwish_fuel.value);

  if(wheelwish_packages.value == "") {
    sessionStorage.setItem("eccentvar_packages", "---");
  } else {
    sessionStorage.setItem("eccentvar_packages", wheelwish_packages.value);
  }

  if(wheelwish_accessories.value == "") {
    sessionStorage.setItem("eccentvar_accessories", "---");
  } else {
    sessionStorage.setItem("eccentvar_accessories", wheelwish_accessories.value);
  }

  if(wheelwish_protection.value == "") {
    sessionStorage.setItem("eccentvar_protection", "---");
  } else {
    sessionStorage.setItem("eccentvar_protection", wheelwish_protection.value);
  }

  if(wheelwish_anythingelse.value == "") {
    sessionStorage.setItem("eccentvar_anythingelse", "---");
  } else {
    sessionStorage.setItem("eccentvar_anythingelse", wheelwish_anythingelse.value);
  }

  sessionStorage.setItem("eccentvar_paymethod_choice", wheelwish_paymethod_choice);

  if(wheelwish_paymethod_choice == "Cash") {
    sessionStorage.setItem("eccentvar_cash_amt", numberWithCommas(wheelwish_cash_amt.value));
    sessionStorage.setItem("eccentvar_term", "---");
    sessionStorage.setItem("eccentvar_payfrequency", "---");
    sessionStorage.setItem("eccentvar_downpayment", "---");
    sessionStorage.setItem("eccentvar_negotiate_alt", "---");
    sessionStorage.setItem("eccentvar_negotiatingprice", "---");
  } else if(wheelwish_paymethod_choice == "Finance" || wheelwish_paymethod_choice == "Lease") {
    sessionStorage.setItem("eccentvar_cash_amt", "---");
    sessionStorage.setItem("eccentvar_term", wheelwish_term.value);
    sessionStorage.setItem("eccentvar_payfrequency", wheelwish_payfrequency.value);
    sessionStorage.setItem("eccentvar_downpayment", numberWithCommas(wheelwish_downpayment.value));
    sessionStorage.setItem("eccentvar_negotiate_alt", wheelwish_negotiate_alt.value);
    sessionStorage.setItem("eccentvar_negotiatingprice", numberWithCommas(wheelwish_negotiatingprice.value));
  } else {
    sessionStorage.setItem("eccentvar_cash_amt", "---");
    sessionStorage.setItem("eccentvar_term", "---");
    sessionStorage.setItem("eccentvar_payfrequency", "---");
    sessionStorage.setItem("eccentvar_downpayment", "---");
    sessionStorage.setItem("eccentvar_negotiate_alt", "---");
    sessionStorage.setItem("eccentvar_negotiatingprice", "---");
    sessionStorage.setItem("eccentvar_paymethod_choice", "---");
  }

  sessionStorage.setItem("eccentvar_tradein", wheelwish_tradein.value);

  if(wheelwish_tradein.value == "Yes") {
    sessionStorage.setItem("eccentvar_vin", wheelwish_vin.value);
    sessionStorage.setItem("eccentvar_tradein_year", wheelwish_tradein_year.value);
    sessionStorage.setItem("eccentvar_tradein_make", wheelwish_tradein_make.value);
    sessionStorage.setItem("eccentvar_tradein_model", wheelwish_tradein_model.value);
    sessionStorage.setItem("eccentvar_tradein_trim", wheelwish_tradein_trim.value);
    sessionStorage.setItem("eccentvar_tradein_color", wheelwish_tradein_color.value);
    sessionStorage.setItem("eccentvar_tradein_transmission", wheelwish_tradein_transmission.value);
    sessionStorage.setItem("eccentvar_tradein_drivetrain", wheelwish_tradein_drivetrain.value);
    sessionStorage.setItem("eccentvar_tradein_fuel", wheelwish_tradein_fuel.value);
    sessionStorage.setItem("eccentvar_tradein_mileage", wheelwish_tradein_mileage.value);
    sessionStorage.setItem("eccentvar_tradein_damage", wheelwish_tradein_damage.value);

    if(wheelwish_tradein_other.value == "") {
      sessionStorage.setItem("eccentvar_tradein_other", "---");
    } else {
      sessionStorage.setItem("eccentvar_tradein_other", wheelwish_tradein_other.value);
    }

    sessionStorage.setItem("eccentvar_tradein_dollarExpectation", wheelwish_tradein_dollarExpectation.value);

    if(wheelwish_tradein_dollarExpectation.value == "Dollar Value") {
      if (wheelwish_tradein_dollarValue.value == "") {
        sessionStorage.setItem("eccentvar_tradein_dollarValue", "---");
      } else {
        sessionStorage.setItem("eccentvar_tradein_dollarValue", wheelwish_tradein_dollarValue.value);
      }
    } else {
      sessionStorage.setItem("eccentvar_tradein_dollarValue", "---");
    }

  } else if(wheelwish_tradein.value == "No") {
    sessionStorage.setItem("eccentvar_vin", "---");
    sessionStorage.setItem("eccentvar_tradein_year", "---");
    sessionStorage.setItem("eccentvar_tradein_make", "---");
    sessionStorage.setItem("eccentvar_tradein_model", "---");
    sessionStorage.setItem("eccentvar_tradein_trim", "---");
    sessionStorage.setItem("eccentvar_tradein_color", "---");
    sessionStorage.setItem("eccentvar_tradein_transmission", "---");
    sessionStorage.setItem("eccentvar_tradein_drivetrain", "---");
    sessionStorage.setItem("eccentvar_tradein_fuel", "---");
    sessionStorage.setItem("eccentvar_tradein_mileage", "---");
    sessionStorage.setItem("eccentvar_tradein_damage", "---");
    sessionStorage.setItem("eccentvar_tradein_other", "---");
    sessionStorage.setItem("eccentvar_tradein_dollarExpectation", "---");
    sessionStorage.setItem("eccentvar_tradein_dollarValue", "---");
  } else {
    sessionStorage.setItem("eccentvar_tradein", "---");
    sessionStorage.setItem("eccentvar_vin", "---");
    sessionStorage.setItem("eccentvar_tradein_year", "---");
    sessionStorage.setItem("eccentvar_tradein_make", "---");
    sessionStorage.setItem("eccentvar_tradein_model", "---");
    sessionStorage.setItem("eccentvar_tradein_trim", "---");
    sessionStorage.setItem("eccentvar_tradein_color", "---");
    sessionStorage.setItem("eccentvar_tradein_transmission", "---");
    sessionStorage.setItem("eccentvar_tradein_drivetrain", "---");
    sessionStorage.setItem("eccentvar_tradein_fuel", "---");
    sessionStorage.setItem("eccentvar_tradein_mileage", "---");
    sessionStorage.setItem("eccentvar_tradein_damage", "---");
    sessionStorage.setItem("eccentvar_tradein_other", "---");
    sessionStorage.setItem("eccentvar_tradein_dollarExpectation", "---");
    sessionStorage.setItem("eccentvar_tradein_dollarValue", "---");
  }

  //Print Desired Vehicle Details
  console.log("DESIRED VEHICLE");
  console.log(sessionStorage.getItem("eccentvar_year"));
  console.log(sessionStorage.getItem("eccentvar_make"));
  console.log(sessionStorage.getItem("eccentvar_model"));
  console.log(sessionStorage.getItem("eccentvar_trim"));
  console.log(sessionStorage.getItem("eccentvar_color"));
  console.log(sessionStorage.getItem("eccentvar_transmission"));
  console.log(sessionStorage.getItem("eccentvar_drivetrain"));
  console.log(sessionStorage.getItem("eccentvar_fuel"));
  console.log(sessionStorage.getItem("eccentvar_packages"));
  console.log(sessionStorage.getItem("eccentvar_accessories"));
  console.log(sessionStorage.getItem("eccentvar_protection"));
  console.log(sessionStorage.getItem("eccentvar_anythingelse"));

  //Print Desired Payment Details
  console.log("PAYMENT");
  console.log(sessionStorage.getItem("eccentvar_paymethod_choice"));
  console.log(sessionStorage.getItem("eccentvar_cash_amt"));
  console.log(sessionStorage.getItem("eccentvar_term"));
  console.log(sessionStorage.getItem("eccentvar_payfrequency"));
  console.log(sessionStorage.getItem("eccentvar_downpayment"));
  console.log(sessionStorage.getItem("eccentvar_negotiate_alt"));
  console.log(sessionStorage.getItem("eccentvar_negotiatingprice"));

  //Print Trade In Details
  console.log("TRADE IN");
  console.log(sessionStorage.getItem("eccentvar_tradein"));
  console.log(sessionStorage.getItem("eccentvar_vin"));
  console.log(sessionStorage.getItem("eccentvar_tradein_year"));
  console.log(sessionStorage.getItem("eccentvar_tradein_make"));
  console.log(sessionStorage.getItem("eccentvar_tradein_model"));
  console.log(sessionStorage.getItem("eccentvar_tradein_trim"));
  console.log(sessionStorage.getItem("eccentvar_tradein_color"));
  console.log(sessionStorage.getItem("eccentvar_tradein_transmission"));
  console.log(sessionStorage.getItem("eccentvar_tradein_drivetrain"));
  console.log(sessionStorage.getItem("eccentvar_tradein_fuel"));
  console.log(sessionStorage.getItem("eccentvar_tradein_mileage"));
  console.log(sessionStorage.getItem("eccentvar_tradein_damage"));
  console.log(sessionStorage.getItem("eccentvar_tradein_other"));
  console.log(sessionStorage.getItem("eccentvar_tradein_dollarExpectation"));
  console.log(sessionStorage.getItem("eccentvar_tradein_dollarValue"));

}

setTimeout(function() {
    let wpadminbar = document.getElementById("wpadminbar");
    if (wpadminbar != null) {
        eccent_content_container.classList.add("move_content_container");
        eccent_nav_fixed.classList.add("move_content_container");
    }
}, 500);

//Loan Calculator

function myFunction() {
    var notfilled = false;
    var loan = jQuery('#amount').val(),
        month = jQuery('#months').val(),
        int = jQuery('#interest').val(),
        years = jQuery('#years').val(),
        down = jQuery('#down').val(),
        amount = parseInt(loan),
        months = parseInt(month),
        down = parseInt(down),
        annInterest = parseFloat(int),
        monInt = annInterest / 1200,
        calculation = ((monInt + (monInt / (Math.pow((1 + monInt), months) -1))) * (amount - (down || 0))).toFixed(2);
        if(isNaN(calculation)) {
            calculation = 0;
            notfilled = true;
        }
    document.getElementById("output").innerHTML =   "<span>$ " + calculation + "</span>";
    
    if(notfilled == true) {
        alert("Please fill out all fields for proper calculation.");
    }
}

function inject_mepr_countries(whereami, reset) {
  console.log("Found country and state / province elements");

  if(whereami == 0) {
    //account page
    console.log("Account Page");

    let mepr_state_options = mepr_state_province.getElementsByTagName("option");

    if(mepr_savedall == false) {
      for(i =  0; i < mepr_state_options.length; i++) {
        mepr_saved_stateValues[i] = mepr_state_options[i].value;
        mepr_saved_stateNames[i] = mepr_state_options[i].innerHTML;
      }
    
      console.log(mepr_saved_stateValues);
      console.log(mepr_saved_stateNames);
      mepr_savedall = true;
    }

    if(reset == true) {
      for (i = mepr_state_province.options.length - 1; i >= 0; i--) {
        mepr_state_province.options[i] = null;
      }

      console.log("Cleared");

      for(i = 0; i < mepr_saved_stateNames.length; i++) {
        let option = document.createElement("option");
        option.text = mepr_saved_stateNames[i];
        option.value = mepr_saved_stateValues[i];
        mepr_state_province.add(option);
      }
    }

    if(mepr_country.value == "united_states") {
      console.log("United States");
      for(i = mepr_state_options.length - 1; i >= 0; i--) {
        if(mepr_state_options[i].value.includes("canada")) {
          mepr_state_province.remove(i);
        }
      }
    } else if(mepr_country.value == "canada") {
      console.log("Canada");
      for(i = mepr_state_options.length - 1; i >= 0; i--) {
        if(mepr_state_options[i].value.includes("us")) {
          mepr_state_province.remove(i);
        }
      }
    }

  } else if(whereami == 1) {
    //register page
    console.log("Register Page");

    let mepr_state_options = mepr_state_province1.getElementsByTagName("option");

    if(mepr_savedall == false) {
      for(i =  0; i < mepr_state_options.length; i++) {
        mepr_saved_stateValues[i] = mepr_state_options[i].value;
        mepr_saved_stateNames[i] = mepr_state_options[i].innerHTML;
      }
    
      console.log(mepr_saved_stateValues);
      console.log(mepr_saved_stateNames);
      mepr_savedall = true;
    }

    if(reset == true) {
      for (i = mepr_state_province1.options.length - 1; i >= 0; i--) {
        mepr_state_province1.options[i] = null;
      }

      console.log("Cleared");

      for(i = 0; i < mepr_saved_stateNames.length; i++) {
        let option = document.createElement("option");
        option.text = mepr_saved_stateNames[i];
        option.value = mepr_saved_stateValues[i];
        mepr_state_province1.add(option);
      }
    }

    if(mepr_country1.value == "united_states") {
      console.log("United States");
      for(i = mepr_state_options.length - 1; i >= 0; i--) {
        if(mepr_state_options[i].value.includes("canada")) {
          mepr_state_province1.remove(i);
        }
      }
    } else if(mepr_country1.value == "canada") {
      console.log("Canada");
      for(i = mepr_state_options.length - 1; i >= 0; i--) {
        if(mepr_state_options[i].value.includes("us")) {
          mepr_state_province1.remove(i);
        }
      }
    }

  }
}

if(mepr_country != null && mepr_state_province != null && mepr_country1 == null && mepr_state_province1 == null) {
  inject_mepr_countries(0, false);

  mepr_country.addEventListener("change", function(){
    inject_mepr_countries(0, true);
  });


} else if(mepr_country1 != null && mepr_state_province1 != null && mepr_country == null && mepr_state_province == null) {
  inject_mepr_countries(1, false);

  mepr_country1.addEventListener("change", function(){
    inject_mepr_countries(1, true);
  });
}


jQuery(function(){
	var month = jQuery(this).val(),
      doneTypingInterval = 500,
      months = parseInt(month),
      typingTimer;

  jQuery('#months').keyup(function(){
      month = jQuery(this).val();
      months = parseInt(month);
  
      clearTimeout(typingTimer);
      if (month) {
          typingTimer = setTimeout(doneTyping, doneTypingInterval);
      }
  });

  function doneTyping () {
    jQuery('#years').val(months/12);  
  }
})

jQuery(function(){
	var month = jQuery(this).val(),
      doneTypingInterval = 500,
      months = parseInt(month),
      typingTimer;

  jQuery('#months').keyup(function(){
      month = jQuery(this).val();
      months = parseInt(month);
  
      clearTimeout(typingTimer);
      if (month) {
          typingTimer = setTimeout(doneTyping, doneTypingInterval);
      }
  });

  function doneTyping () {
    jQuery('#years').val(months/12);  
  }
})

jQuery(function(){
	var year = jQuery(this).val(),
      doneTypingInterval = 500,
      years = parseInt(year),
      typingTimer;

  jQuery('#years').keyup(function(){
      year = jQuery(this).val();
      myears = parseInt(year);
  
      clearTimeout(typingTimer);
      if (year) {
          typingTimer = setTimeout(doneTyping, doneTypingInterval);
      }
  });

  function doneTyping () {
    jQuery('#months').val(year * 12);  
  }
})