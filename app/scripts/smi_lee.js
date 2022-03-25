var h_smi_lee = [];
var do_history = 0;
var one_start_history = 0;
var current_url;
var dear_app = "dear_app";
var dear_nav = "dear_nav";
var app_msg = "app_msg";
var app_id = "app";
var mod_el = 0;
var allow = 1;
var result = 2;
var index = 0;
var alert_color ="#ead3d3";
var uploader_path = '/upload/image/index.php';
var timetodo = 0;
var dear_element_error = ". یک کلاس مشخص کنید با نام dear_element -> در این آی دی : ";
var header_save_url = "";
var rnd_nm_pho = Math.floor(Math.random() * 100000);
var whatdef_at_end = "do_after_done";
var index_api_url = "plt.php"; // It can be index.php or empty
var my_modal_id = "myModal"; // there is only one modal popup in our application

var first_module_run_on_app_start = index_api_url + "?q=fill_it&o=2&module_name=fill_products_list&sql=1&w=null&locateat=null&nav=1&oneach=10&method=products_list";

var store = {}; // save things in array

setVar('devicePlatform', '/app/views/html'); // Example of saving in array

on_app_RUN(store.devicePlatform + "/mohammad_norouzi_app.php"); // Put the first view of HTML that we want to play with



function setOption(key, value) {
    return localStorage.setItem(key, value);
}

function getOption(key, defaultValue) {
    return localStorage.getItem(key) !== null ?
        localStorage.getItem(key) : defaultValue;
}


function setVar(varName, varValue) {
    store[varName] = varValue
}

function on_app_RUN(url) {

    fetch(url).then(function (response) {
        // The API call was successful!
        return response.text();
    }).then(function (html) {
        // This is the HTML from our response as a text string

        clear_loading();
        document.getElementById(app_id).innerHTML = html;
        // do_after_done(html);
        check_https(index_api_url + "?q=mas");


    }).catch(function (err) {
        // There was an error
        console.warn('Something went wrong.', err);
    });

}




function clear_me(param) {
    var elem = document.getElementById(param);
    if (elem != null) {

        elem.innerHTML = "";
        /*elem.classList.add("fade-out");	

        setTimeout(function(){ elem.innerHTML = "";  }, 500);
            */
    }
}

function fail_req(status, err, signal, myTimeout, whatfor, stop, whatafterrun, whatafterrun_2) {

    clear_loading();
    clearInterval(myTimeout);


    if (signal.aborted == true) {
        timetodo = timetodo + 1;
        refresh_elements();

        get_https(whatfor, stop, whatafterrun, whatafterrun_2, timetodo);
    }

}

function close_mymodal(param) {
    var modal = document.getElementById(my_modal_id);

    if (modal != null && modal.style.display == 'block') {
        modal.style.display = 'none';
        history_back(1);
    }


}
function make_array_from_input_m_forms(data, element, input_name) {
    let names;
    let that_set;
    that_set = new Set();

    for (var i = 0; i < element.length; i++) {

        if (element[i].name == input_name) {

            that_set.add(element[i].value);
        }


    }
    let that_array = Array.from(that_set);
    // let that_array = [...that_set];


    names = data + " " + "\"" + input_name + "\"" + " : " + " " + "\"" + that_array.toString() + "\"" + ",";

    return names;
}


function abort_controller(signal, controller, whatfor, stop, whatafterrun, whatafterrun_2) {
    timetodo = timetodo + 1;
    refresh_elements();
    get_https(whatfor, stop, whatafterrun, whatafterrun_2, timetodo);

}

function abort_controller_2(controller_2, whatfor, datastring, whatafterrun, whatafterrun_2) {
    controller_2.abort();
    refresh_elements();
    get_https_2(whatfor, datastring, whatafterrun, whatafterrun_2);
}

function alert_2time(param, param2) {
    /*alert(param);
    alert(param2);*/
}

function appendd(whatfor, stop, current_url_dt) {
    /*
     current_url = current_url_dt;
 
     
     do_history=1;
 
     var how_many_allowed = 10;
     if(stop ==3){
     h_smi_lee.pop();
 
     }
     if(stop!=2 && stop!=3){
 
     if(h_smi_lee[h_smi_lee.length - 1] != whatfor){
 
      h_smi_lee[h_smi_lee.length] = whatfor;
 
     if(h_smi_lee.length > how_many_allowed){
     h_smi_lee.shift();
     }
 
 
 
     }
 
 
 
 
     }
     */
}

function run_s_pop(param) {
    offcanvas_right();
    document.getElementById('s_popModal').style.display = "block";


}


function closeAll_details(openDetails) {
    var details = document.getElementsByTagName("details");
    var len = details.length;
    for (var i = 0; i < len; i++) {
        if (details[i] != openDetails) {
            details[i].removeAttribute("open");
        }
    }
}

function not_login_custom(formname, who, fname) {

    var uuu = document.getElementById('username').value;
    var ppp = document.getElementById('password').value;
    var whatfor = index_api_url + "?q=&nav=1";
    get_https(whatfor, 0, whatdef_at_end, null, timetodo, uuu, ppp);



}

function runmini(param1) {
    get_https(index_api_url + "?q=" + param1 + "&nav=1", 1, whatdef_at_end);

}

function open_modal(at_end) {

    var modal = document.getElementById(my_modal_id);
    modal.style.display = "block";
    /*modal.style.zIndex = 4;*/

    pushState_me(modal.id, htcss(window.location.href));

}

function pushState_me(modal_id, parameter_2) {
    var state = {
        'page_id': modal_id
    };

    history.pushState(state, "", "/" + parameter_2);
    header_save_url = parameter_2;
}

function offcanvas_right() {
    var state = {
        'page_id': 'my_modal'
    };
    history.pushState(state, "", "/" + htcss(window.location.href));
}

function replaceState_me(parameter_1, parameter_2, parameter_3) {

    window.history.replaceState(parameter_1, parameter_2, parameter_3);
    header_save_url = parameter_3;
}


function at_end_login(at_end) {

    var usern = document.getElementById('username');
    var passw = document.getElementById('password');
    var hash = document.getElementById('hash');
    if (usern !== null && hash !== null) {
        var whatfor = index_api_url + "?q=profile&nav=1";
        get_https(whatfor, 0, whatdef_at_end, null, timetodo, usern.value, passw.value);
        setOption("hash", hash.value);

        replaceState_me("1", "/profile", "/profile");
    }

}



function log_out_custom(formname, who, fname) {


    var whatfor = index_api_url + "?q=logout&nav=1";

    get_https(whatfor, 0, "after_logout", null, timetodo, null, null);


}

function after_logout(formname, who, fname) {


    var whatfor = index_api_url + "?q=fill_it&o=2&module_name=fill_products_list&nav=1";

    get_https(whatfor, 0, whatdef_at_end, null, timetodo, null, null);
    replaceState_me("1", "/", "/");


}


function onload_app_inside() {

    /*					   
listener_key("keydown");

*/



    var elements = document.getElementsByClassName("btn_id");

    var names;
    var param;
    var who;
    var fn;
    var fname;
    var locateat;
    for (var i = 0; i < elements.length; i++) {

        if (elements[i].id.includes(")") === false) {

            elements[i].id = elements[i].id + "(" + i + ")";

        }
        names = elements[i].id;

        param = elements[i].getAttribute('data-query');
        who = elements[i].getAttribute('who-id');
        fn = elements[i].getAttribute('custom-fn');
        fname = elements[i].getAttribute('fn-name');
        locateat = elements[i].getAttribute('locate-at');
        at_end_run = elements[i].getAttribute('at-end');
        at_click_run = elements[i].getAttribute('at-start');


        if (!elements[i].classList.contains('keydown-handler')) {
            onload_Listener(names, param, who, fn, fname, locateat, 'click', at_end_run, elements[i], at_click_run);

            elements[i].classList.add("keydown-handler");
        }




    }

}




function onload_Listener(parameterName, param, who, fn, fname, locateat, kind, at_end_run, that_element, at_click_run) {

    if (that_element) {



        that_element.addEventListener(kind, function (event) {

            setVar('locate_at', locateat);

            event.preventDefault(); /* for disable click href */

            var href_name;
            var taeya = that_element.href;
            if (typeof taeya !== 'undefined' && taeya != "") {

                href_name = htcss(taeya);

                pushState_me(parameterName, href_name);

                var state = {
                    'page_id': parameterName
                };

                replaceState_me(state,
                    parameterName, "/" + href_name);


            }




            setVar('at_end', at_end_run);

            if (at_click_run != null) {
                whatdef_at_end = at_click_run;
            }

            ////////////////////////////////									 
            if (parameterName.includes("_submit")) {

                gather_form(param, parameterName, who, locateat, that_element, whatdef_at_end, at_end_run);




            } else {


                ////////////////								 
                if (fn == 1) {
                    parameterName = parameterName.replace(/ *\([^)]*\) */g, "");
                    window[parameterName](param, who, fname);
                } else {
                    setVar('run_executer', '1');
                    get_https(index_api_url + "?q=" + param + "&w=" + who + "&locateat=" + locateat, 0, whatdef_at_end, at_end_run);
                }
                ////////////////									 

            }
            ////////////////////////////////								 

        });




    }


    ///here///

}




function hide_alert() {
    document.getElementById("app_msg").innerHTML = "";
}

function scroll_top(param) {
    window.scrollTo({
        top: 0,
        left: 100,
        behavior: 'smooth'
    });
}

function fil_ter_nosymbol(str) {
    // str = str.replace(/[&\/\\#,+()$~%.'":*?<>{}]/g, '');
    return str;
}


function gather_form(formname, element, who, locateat, that_element, at_end_run, at_end_run_2) {

    scroll_top();

    setVar('count', -1);
    setTimeout(hide_alert, 20000);
    document.getElementById("app_msg").innerHTML = "";
    var form_box_element = that_element;
    var msg_er = "";


    element = element.replace("_submit", "");
    element = element.replace("_custom", "");
    who = who.replace("_custom", "");
    var elements;

    //var regExp = /\(([^)]+)\)/;
    //var matches = regExp.exec(formname);

    //elements = document.getElementById(matches[1]).getElementsByClassName("input_m_form");
    elements = document.getElementById(who).getElementsByClassName("input_m_form");


    var arr = Array.from(elements);
    var myJsonString = JSON.stringify(arr);


    var names = '';
    var noop;
    var values;
    var req;
    var upld;
    var f_length;
    var msgg;
    var stopsecmsg;
    var array_type;
    for (var i = 0; i < elements.length; i++) {

        req = elements[i].getAttribute('data-req');
        upld = elements[i].getAttribute('data-upload');
        array_type = elements[i].getAttribute('array-type');
        f_length = elements[i].getAttribute('force-length');
        msgg = elements[i].getAttribute('data-msg');
        if (msgg == null) {
            msgg = "";
        }

        if (f_length !== null) {
            stopsecmsg = 1;
            if (elements[i].value.length != f_length && elements[i].value !== "") {
                noop = elements[i].name;


                msg_er += "<br>" + msgg;
                elements[i].style.backgroundColor = alert_color;


            }
        }



        if (upld == 1) {
            req = 1;
        }

        if (array_type != null) {
            array_type = "array_type";
        } else {
            array_type = false;
        }



        if (req == 1) {




            if (elements[i].value == "") {

                if (stopsecmsg !== 1) {
                    msg_er += "<br>" + msgg;
                }

                noop = elements[i].name;
                elements[i].style.backgroundColor = alert_color;
            } else {
                elements[i].style.backgroundColor = "unset";
            }



        }



        var allowformat = elements[i].getAttribute('allow-format');
        var allowsize = elements[i].getAttribute('allow-size');

        /*elements[i].getAttribute('data-upload')*/

        if (upld == 1) {

            var photo = elements[i].files[0];
            if (photo != null && photo.size < allowsize) {
                var formData = new FormData();
                formData.append("photo", photo);
                fetch(uploader_path+'?format=' + allowformat + '&filename=' + rnd_nm_pho + photo.name, {
                    credentials: "include",
                    method: "POST",
                    body: formData
                });

            } else {

                var errora = 1;

            }

            if (photo != null) {
                names = names + " " + "\"" + elements[i].name + "\"" + " : " + " " + "\"" + rnd_nm_pho + photo.name + "\"" + ",";

            }



        } else {

            var valueofmi;
            var valueofvalue;
            var typev = array_type ? array_type : elements[i].type;

            switch (typev) {
                case "checkbox":

                    if (elements[i].checked) {

                        names = names + " " + "\"" + elements[i].name + "\"" + " : " + " " + "\"" + fil_ter_nosymbol(elements[i].value) + "\"" + ",";
                    } else {
                        names = names + " " + "\"" + elements[i].name + "\"" + " : " + " " + "\"" + "0" + "\"" + ",";
                    }

                    break;
                case "text":


                    names = names + " " + "\"" + elements[i].name + "\"" + " : " + " " + "\"" + fil_ter_nosymbol(elements[i].value) + "\"" + ",";

                    break;
                case "array_type":

                    names = make_array_from_input_m_forms(names, elements, elements[i].name);


                    break;
                case "radio":
                    if (elements[i].checked) {
                        names = names + " " + "\"" + elements[i].name + "\"" + " : " + " " + "\"" + fil_ter_nosymbol(elements[i].value) + "\"" + ",";
                    }

                    break;
                case "hidden":
                    names = names + " " + "\"" + calc_what_name_db(elements[i].name) + "\"" + " : " + " " + "\"" + fil_ter_nosymbol(elements[i].value) + "\"" + ",";

                    break;
                case "textarea":
                    var text_arrea = fil_ter_nosymbol(elements[i].value);
                    text_arrea = text_arrea.replace(/\r?\n/g, '<br />');
                    names = names + " " + "\"" + calc_what_name_db(elements[i].name) + "\"" + " : " + " " + "\"" + text_arrea + "\"" + ",";

                    break;
                default:
                    names = names + " " + "\"" + elements[i].name + "\"" + " : " + " " + "\"" + fil_ter_nosymbol(elements[i].value) + "\"" + ",";


            }



        }



    }

    names = names.slice(0, -1);
    names = "" + names + "";

    if (typeof noop == 'undefined') {

        get_https_2(index_api_url + "?q=" + formname + "&locateat=" + locateat, names, at_end_run, at_end_run_2);


    } else {


        document.getElementById("app_msg").innerHTML = msg_er;

    }
}

function refresh_elements(obj_id) {
    var dearelements;
    /*
    if(typeof obj_id== 'undefined' ){
    }else{
    document.getElementById("view1").innerHTML = document.getElementById("view1").innerHTML;
    }
        */
    /*
        dearelements =  document.querySelectorAll(".dear_element");	
        for(var i=0; i < dearelements.length; i++) {
    dearelements[i].innerHTML = dearelements[i].innerHTML; 	
            }
        */




}

function mk_url(baseurl, path) {

    window.location.href = baseurl + path;

}


function htcss(url) {
    var str = url;
    str = str.replace("#", "");


    var parser = document.createElement('a');
    parser.href = str;

    var result = parser.pathname;
    if (result == "/") {
        result = "#";
    }
    /*
    var n = str.lastIndexOf('/');	
    var result = str.substring(n + 1);
    */
    result = result.substring(1);

    return result;
}

function do_onstart(result) {



    var obj_s = JSON.parse(JSON.stringify(result));

    setOption("o_db", obj_s.run);

    document.getElementById("preload_html").innerHTML = decodeURIComponent(obj_s.preload_html);


    do_runData('url');




}



function do_runData(param) {
    var param_q;
    var whatfor;


    if (param == "url") {
        param_q = htcss(window.location.href);


    } else {
        param_q = param;
    }
    if (param_q) {
        whatfor = index_api_url + "?q=" + param_q + "&nav=1";
        get_https(whatfor, 0, whatdef_at_end);

        one_start_history = 2;

    } else {
        whatfor = first_module_run_on_app_start;
        get_https(whatfor, 0, whatdef_at_end, "", timetodo);



    }
}




function fill_after_done(Access, app_data, method_fill) {

    app_data = decodeURIComponent(app_data);

    other_method(Access, app_data, method_fill);

}


function do_Async(Access, app_data, method_fill) {
    return new Promise((resolve, reject) => {

        other_method(Access, app_data, method_fill);

    });
}




function nav_builder(dear_nav, app_nav) {

    if (app_nav != "") {
        /*document.getElementById(dear_nav).innerHTML = decodeURIComponent(app_nav);*/
        document.getElementById(dear_nav).innerHTML = app_nav;

        refresh_elements();
        onload_app_inside();
    }

}

function clear_loading() {
    if (document.getElementById('loading_box_animated') !== null) {
        document.getElementById('loading_box_animated').style.display = "none";
    }
}


function get_error(url, err) {
    clear_loading();

    fetch(url).then(function (response) {
        // The API call was successful!
        return response.text();
    }).then(function (html) {
        // This is the HTML from our response as a text string

        document.getElementById(dear_app).innerHTML = html;

    }).catch(function (err) {
        // There was an error
        console.warn('Something went wrong.', err);
    });

}

function do_after_done(result, whatafterrun) {
    clear_loading();



    const text = result;
    const obj = JSON.parse(JSON.stringify(text));




    nav_builder(dear_nav, obj.app_nav);

    ////////////////////////////////
    if (obj.Access == 1) {

        var calc_data = calc_data_db(obj.app_data);

        /*document.getElementById(app_msg).innerHTML = decodeURIComponent(obj.app_msg); */
        document.getElementById(app_msg).innerHTML = obj.app_msg;


        if (obj.elementbox !== "") {

            if (document.getElementById(obj.elementbox).className.includes('dear_element')) {

                just_put_it_located(decodeURIComponent(calc_data), obj.elementbox);

            } else {
                alert(dear_element_error + obj.elementbox);
            }

        } else {

            if (obj.case != "open_json") {

                just_put_it(calc_data, dear_app);
            } else {
                document.getElementById(dear_app).innerHTML = '';

            }



        }


        /*here*/

        refresh_elements();


        onload_app_inside();




    } else {


        fill_after_done(obj.Access, obj.app_data, obj.method_fill);

    }




    custom_onload_Listeners();

    if (whatafterrun != null) {
        if (whatafterrun.includes(";")) {

            let full_array = whatafterrun.split(';');

            window[full_array[0]](full_array);
        } else {
            var data = 1;
            window[whatafterrun](obj.app_data);
        }
    }


}

function value_to_innertext(valuet, innert) {
    document.getElementById(innert).innerText = document.getElementById(valuet).value;

}

function get_innerText(idofthat) {
    var taet;
    taet = document.getElementById(idofthat).innerText;
    return taet;
}


function loading() {
    if (document.getElementById('loading_box_animated') !== null) {
        document.getElementById('loading_box_animated').style.display = "block";
    }
}

function clear_loading() {
    if (document.getElementById('loading_box_animated') !== null) {
        document.getElementById('loading_box_animated').style.display = "none";
    }



}

function calc_data_db(data) {
    data = decodeURIComponent(data);
    var fvariable = "<db>";
    var svariable = "</db>";
    var regExString = new RegExp("(?:" + fvariable + ")((.[\\s\\S]*))(?:" + svariable + ")", "ig");

    var testRE = regExString.exec(data);

    if (testRE && testRE.length > 1) {

        data = data.replace(fvariable + testRE[1] + svariable, "");
        setOption("html_final", data);
        var edited = html_final_edit(data, testRE[1]);

        return edited;
    } else {
        return data;
    }

}




function createElementFromHTML(htmlString, i) {

    var data = htmlString.trim();

    var div = document.createElement('div');
    var loopcnt = "{loop_cnt}";

    data = data.replace(/{loop_cnt}/g, i);


    div.innerHTML = data;

    div.firstChild.id = div.firstChild.id + i;

    return div.firstChild;


}


function placing(data, json, myObj, access, elementiwant_be, method_fill, myObjlength) {



    var el_name;

    el_name = method_fill;



    var elementiwant = document.getElementById(el_name);
    if (elementiwant == null) {
        alert("المنت مورد نیاز در ماژول وجود ندارد : " + el_name + " الگو های تکرار شونده ماژول در این قرار میگیرد");

    } else {

        for (var i = 0; i < myObjlength; i++) {


            document.getElementById(el_name).appendChild(createElementFromHTML(decodeURIComponent(elementiwant_be.innerHTML), i));


        }


        var sdata = document.getElementById(el_name).innerHTML;
        var text = "";
        for (let x in myObj) {

            for (let y in myObj[x]) {
                var re;

                if (y == "product_real_price" || y == "product_off_price") {

                    re = new RegExp("{{" + x + y + "}}", 'g');
                    sdata = sdata.replace(re, new Intl.NumberFormat("fa").format(myObj[x][y]));
                } else {
                    re = new RegExp("{{" + x + y + "}}", 'g');
                    sdata = sdata.replace(re, myObj[x][y]);
                }




            }
        }

        sdata = sdata.replace(/img_lee/g, "img");

        document.getElementById(el_name).innerHTML = sdata;
        refresh_elements();
        onload_app_inside();



    }


}




function json_more_t_one(data, json, access, method_fill) {


    var el_name_v = "org_" + access + "_pattern";
    var elementiwant = document.getElementById(el_name_v);

    if (elementiwant == null) {
        elementiwant = document.getElementById("org_" + access);
    }




    document.getElementById("dear_app").innerHTML = data;
    refresh_elements();
    onload_app_inside();

    var json_arrayy = json.split('>/<');
    var myObj_json, myObj;
    var arrayy = method_fill.split(';');

    if (method_fill.includes(';')) {


        for (let i = 0; i < arrayy.length; i++) {
            method_fill = arrayy[i];



            myObj = json_arrayy[i];
            myObj_json = JSON.parse(myObj);

            placing(data, json, myObj_json, access, elementiwant, method_fill, myObj_json.length);
        }

    } else {
        placing(data, json, myObj, access, elementiwant, method_fill, myObjlength);

    }



}

function json_only_one(data, json, myObj, access) {

    let text = "";
    for (const x in myObj) {
        for (const y in myObj[x]) {
            var re = new RegExp("{{" + x + y + "}}", 'g');
            data = data.replace(re, myObj[x][y]);
        }
    }

    document.getElementById("dear_app").innerHTML = data;
    refresh_elements();
    onload_app_inside();



}

function listToAray(fullString, separator) {
    var fullArray = [];

    if (fullString !== undefined) {
        if (fullString.indexOf(separator) == -1) {
            fullArray.push(fullString);
        } else {
            fullArray = fullString.split(separator);
        }
    }

    return fullArray;
}

function html_final_edit(data, json, access, method_fill, index) {



    data = decodeURIComponent(data);


    json_more_t_one(data, json, access, method_fill);




}

function other_method(access, app_data, method_fill, index) {



    if (method_fill == "") {
        method_fill = dear_app;
    }
    var el_mnt;

    el_mnt = document.getElementById("org_" + access).innerHTML;


    html_final_edit(el_mnt, app_data, access, method_fill, index);




}

function just_put_it_located(calc_data, elementid) {

    document.getElementById(elementid).innerHTML = calc_data;

}

function just_put_it_located_2(calc_data, elementid) {
    if (document.getElementById(elementid).innerHTML == "") {
        document.getElementById(elementid).innerHTML = calc_data;
    } else {
        document.getElementById(elementid).innerHTML = "";
    }

}



function just_put_it(calc_data, dear_app) {

    var rrs = decodeURIComponent(calc_data);
    if (rrs.includes("<msg>") == true) {
        /*document.getElementById("app_msg").innerHTML = decodeURIComponent(calc_data);*/
        document.getElementById("app_msg").innerHTML = calc_data;
    } else {
        /*document.getElementById(dear_app).innerHTML = decodeURIComponent(calc_data); */
        document.getElementById(dear_app).innerHTML = decodeURIComponent(calc_data);

    }


}

function history_back(becareful) {
    if (becareful == 1) {
        history.back();
    }
}

function upTo(el, tagName) {
    tagName = tagName.toLowerCase();

    while (el && el.parentNode) {
        el = el.parentNode;
        if (el.tagName && el.tagName.toLowerCase() == tagName) {
            return el;
        }
    }

    // Many DOM methods return null if they don't 
    // find the element they are searching for
    // It would be OK to omit the following and just
    // return undefined
    return null;
}



function custom_onload_Listeners() {




    /*document.addEventListener("backbutton", backbutton_function(event), false);*/

    document.addEventListener('backbutton', function () {

        /*navigator.app.exitApp();*/
        alert('wow');
    });




    var modal = document.getElementById(my_modal_id);
    var span = document.getElementById("close_span");
    span.onclick = function () {
        modal.style.display = "none";
        history_back(1);

    };
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
            history_back(1);
        }


    };




    window.onpopstate = function (event) {

        // "event" object seems to contain value only when the back button is clicked
        // and if the pop state event fires due to clicks on a button
        // or a link it comes up as "undefined" 

        if (event) {

            var modal = document.getElementById(my_modal_id);
            var my_modal = document.getElementById("my_modal");
            var s_popModal = document.getElementById("s_popModal");
            /*alert(JSON.stringify(history.state));*/
            /*
            const modals = document.getElementsByClassName("modal");
            	

            	
            for(var i=0; i < modals.length; i++) {

            alert(modals[i].style.zIndex);
                                              
            }*/

            if (modal != null && modal.style.display == 'block') {


                modal.style.display = 'none';



            } else if (my_modal != null && my_modal.style.visibility == 'visible') {


                //pushState_me(my_modal.id,htcss(header_save_url));
                document.getElementById("offca_close").click();

            } else if (s_popModal != null && s_popModal.style.display == 'block') {

                if_show_hide('s_popModal');


            } else {
                do_runData('url');
            }



        } else {
            // Continue user action through link or button
        }
    };




    document.addEventListener('keydown', listen_the_keys);


    var input = document.getElementById("activecode");
    if (input !== null) {
        input.addEventListener("change", check_2, false);
    }

    on_change_input();




}



function check_2(event) {
    var input = Number(event.target.value);
    console.log(input);
    if (input < 0 || input > 10) {
        value = 0;
    }
}


function edit_box_category(param1, param2) {

    value_to_innertext('inbox' + param1, 'editd' + param2);
    value_to_innertext('inbox_2' + param1, 'editd_2' + param2);
}




function listener_key(idof, kind) {

    var keydown = false;


    document.addEventListener(kind, function (event) {



        if (event.defaultPrevented) {
            return; // Should do nothing if the default action has been cancelled
        }
        var finaly_is;
        var idofthatsub = upTo(document.activeElement, 'form').id;

        var handled = false;
        if (event.key !== undefined) {
            ///////////////	
            alert(event.key);
            if (event.key == 'Enter' || event.key == 'enter') {


                if (upTo(document.activeElement, 'form') == null) { } else {

                    var els = document.getElementById(idofthatsub).getElementsByClassName("input_m_form");
                    var howmany = els.length;

                    var current_name = document.activeElement.name;
                    alert(current_name);
                    var howmany_1 = howmany;
                    var count = 1;
                    Array.prototype.forEach.call(els, function (el) {


                        if (count == 1) {
                            howmany_1 = howmany_1 - 1;
                        }
                        if (current_name === el.name) {

                            alert(howmany_1 + "is" + current_name);
                            count = 0;
                        }

                    });

                    els[howmany_1 - 1].focus();

                    /*
if((document.activeElement.tagName).toLowerCase() =="input" ){

}
*/
                    finaly_is = 1;

                    if (finaly_is == 1) {
                        var e_lements = document.getElementById(idofthatsub).getElementsByClassName("btn_id");
                        for (var i = 0; i < e_lements.length; i++) {
                            e_lements[i].click();
                        }
                    }


                }

            }

            ///////////////////////
        } else if (event.keyCode !== undefined) {
            // Handle the event with KeyboardEvent.keyCode and set handled true.


        }


        if (handled) {
            // Suppress "double action" if event handled
            event.preventDefault();
        }
    }, true);
}


function backbutton_function(event) {



}



function listen_the_keys(e) {
    var modal = document.getElementById(my_modal_id);


    if (e.code == 'backbutton' || e.key == 'backbutton' || e.key == 'backbutton') {
        if (modal.style.display == "block") {
            modal.style.display = "none";
        }
    }
    if (e.code == 'Escape' || e.key == 'Escape' || e.key == 'Escape') {
        if (modal.style.display == "block") {
            modal.style.display = "none";
        }
    }
    /*								  
    alert(e.key);
    alert(e.code);
    alert(e.keycode);
    */
    //arrowdown
    //arrowup
    var do_this = 1;
    if (document.activeElement.type == "textarea") {
        do_this = 0;
    }
    if (document.activeElement.type == "file") {
        do_this = 0;
    }
    if (document.activeElement.type == "submit") {
        do_this = 0;
    }

    if (do_this == 1) {
        if (e.code == 'Enter' || e.code == 'enter' || e.key == 'enter' || e.key == 'Enter') {
            //alert(`${e.code}`);	
            var finaly_is;
            var idofthatsub = upTo(document.activeElement, 'form').id;
            /////////////////////////////////////////////////////////								  
            if (upTo(document.activeElement, 'form') == null) { } else {

                var els = document.getElementById(idofthatsub).getElementsByClassName("jm");
                var howmany = els.length;

                var current_name = document.activeElement.name;

                var howmany_1 = howmany;
                var count = 1;
                Array.prototype.forEach.call(els, function (el) {


                    if (count == 1) {
                        howmany_1 = howmany_1 - 1;
                    }
                    if (current_name === el.name) {


                        count = 0;
                    }

                });
                if (howmany_1 == 0) {
                    finaly_is = 1;
                } else {
                    els[howmany - (howmany_1)].focus();
                }
                /*
if((document.activeElement.tagName).toLowerCase() =="input" ){

}
*/


                if (finaly_is == 1) {
                    var e_lements = document.getElementById(idofthatsub).getElementsByClassName("btn_id");
                    for (var i = 0; i < e_lements.length; i++) {

                        if (e_lements[i].id.includes("_submit")) {
                            e_lements[i].click();
                        }
                    }
                }


            }


            /////////////////////////////////////////////////////								  
        }
    }
}



function drop_that_list(whatiselement) {
    var cvo = document.getElementById(whatiselement + 'list');
    cvo.style.display = "block";
    /*	
    var cover = document.getElementById('cover');
    cover.style.display = "block";
    */
    window.onclick = function (event) {

        if (event.target.id != whatiselement) {
            cvo.style.display = "none";
            filterFunction(document.getElementById(whatiselement).value, whatiselement + "list", 1);

        }


    };
    /*	
    cover.addEventListener("click", function(){
      if_show_hide('cover');
      if_show_hide(whatiselement+'list');
    filterFunction(document.getElementById(whatiselement).value,whatiselement+"list",1);
    });
                                      
        */
}

function feed_parents(valuea, parent) {
    if_show_hide('cover');

    if (valuea != 'none') {
        document.getElementById(parent).value = valuea;


    }
    var parent_list = document.getElementById(parent + "list");

    if (parent_list != null) {
        document.getElementById(parent + "list").style.display = "none";
    }

}

function filterFunction(whatisinput, whatiselement, shouldforcefill) {
    var input, filter, ul, li, a, fakevalue;
    let i;
    input = document.getElementById(whatisinput, whatiselement);
    if (input == null) {
        fakevalue = "";
        filter = fakevalue.toUpperCase();
    } else {
        filter = input.value.toUpperCase();
    }
    div = document.getElementById(whatiselement);
    a = div.getElementsByTagName("a");
    var shomaresh = 0;
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1) {

            a[i].style.display = "";

        } else {
            a[i].style.display = "none";
            shomaresh = shomaresh + 1;
        }

    }

    var ree = a.length - shomaresh;

    if (ree == 0) {
        setVar('thiselementfury', whatiselement);
        setVar('thiselementstatus', shouldforcefill);
    }



}


function is_nes_fill_input(idofelement) {


    if (store.thiselementstatus == '1') {
        document.getElementById(idofelement).value = '';
        setVar('thiselementfury', '');
        setVar('thiselementstatus', '');
    }

}


function closeModal() {

    const elements = document.getElementsByClassName('offcanvas-backdrop');
    if (elements !== null) {
        while (elements.length > 0) {
            elements[0].parentNode.removeChild(elements[0]);
        }
    }
}

function click_it(id_click, multi) {
    if (multi == 0) {

        document.getElementById(id_click).click();
    } else {

        var elements = document.getElementsByClassName("input_m_form");
        for (var i = 0; i < elements.length; i++) {

            if (elements[i].type === "file" && elements[i].files.length == 0)

                elements[i].click();

        }

    }
}

function set_it(id_click, valuev) {
    document.getElementById(id_click).value = valuev;


}

function insertAfter(el0, el1) {
    el0.parentNode.insertBefore(el1, el0.nextSibling);
}

function on_change_input() {
    const input = document.querySelector('.on_change');

    //input.addEventListener('change', updateValue);
    if (input != null) {
        input.addEventListener('change', handleFiles);
    }



}




function calculate_upload_element(target, value) {

    document.getElementById(target).classList.remove('d-none');


    var element = document.createElement("INPUT");
    element.setAttribute("type", "file");
    element.classList.add('input_m_form');
    element.setAttribute("id", target);
    //element.classList.add('d-none');
    element.setAttribute("accept", "image/*");
    document.getElementById(target + "_parent").appendChild(element);

    element.addEventListener('change', updateValue);

}

function updateValue(e) {
    calculate_upload_element(e.target.id, e.target.value);
}




function handleFiles() {
    var rbrshy = document.getElementById("show_btn_form");
    if (rbrshy) {
        rbrshy.style.display = "block";
    }


    var limit = 10;
    if (!this.files.length) { } else {




        /*fileList.innerHTML = "";*/
        const list = document.createElement("span");
        fileList.appendChild(list);
        var howmny = this.files.length;
        var start_f = 0;
        var hast, this_item_number, counted;

        for (let i = 0; i < limit; i++) {
            var status = document.getElementById("element_" + i);
            if (status == null) {
                start_f = i;

            }

        }
        if (howmny < limit) {
            limit = howmny;
        }
        this_item_number = 0;

        var rnd;
        for (let i = start_f; i < limit + start_f; i++) {
            rnd = Math.floor(Math.random() * 1000000);
            counted = document.getElementsByClassName("count_m_form");
            if (counted.length > 9) {
                var elmm = document.getElementById("app_msg");
                elmm.classList.add('text-danger');
                elmm.innerHTML = "فقط 10 عکس میتوانید آپلود کنید بر روی آپلود و ادامه کلیک کنید";
                break;
            } else {
                document.getElementById("app_msg").innerHTML = "";
            }


            var status_2 = document.getElementById("element_" + rnd);
            if (status_2 == null) {

                const li = document.createElement("figure");
                li.classList.add('figure');
                list.appendChild(li);
                li.classList.add('p-1');
                li.classList.add('alert-danger');

                li.id = "element_" + rnd;

                const img = document.createElement("img");

                img.src = URL.createObjectURL(this.files[this_item_number]);

                img.height = 95;


                img.onload = function () {
                    URL.revokeObjectURL(this.src);


                }




                li.appendChild(img);

                const buttonv = document.createElement("button");
                buttonv.classList.add('btn-close');


                buttonv.setAttribute("onclick", "upTo(this,'figure').remove()");

                li.appendChild(buttonv);
                const figcaption = document.createElement("figcaption");


                img.classList.add('figure-caption');
                img.classList.add('text-end');
                var figcaption_id = "figcaption_" + rnd;
                figcaption.setAttribute("id", figcaption_id);
                li.appendChild(figcaption);
                const node = document.createTextNode("در حال آپلود");
                figcaption.appendChild(node);

                const input_mf = document.createElement("input");
                input_mf.classList.add('input_m_form');
                input_mf.classList.add('count_m_form');
                input_mf.classList.add('jm');
                input_mf.setAttribute("type", "hidden");
                input_mf.setAttribute("name", "combine_img(" + rnd + ")");
                input_mf.setAttribute("data-req", "1");
                input_mf.setAttribute("data-msg", " عکس " + this.files[this_item_number].name + " هنوز آپلود نشده است ");
                input_mf.setAttribute("ready-upload", i);
                var innput_id = "input_id_" + rnd;
                input_mf.setAttribute("id", innput_id);
                li.appendChild(input_mf);



                const info = document.createElement("span");
                //info.innerHTML = this.files[this_item_number].name + ": " + this.files[this_item_number].size + " bytes";



                uploadFile(this.files[this_item_number], rnd_nm_pho + this.files[this_item_number].name, li.id, figcaption_id, innput_id, this.files[this_item_number].size);


                li.appendChild(info);
                this_item_number++;
            }


        }
    }
}


function uploadFile(file, fille_name, id_of, figcaption_id, innput_id, size) {
    var allowformat;
    if (size > 6000000) {
        document.getElementById(figcaption_id).innerHTML = "حجم عکس زیاد است حداکثر 5 مگابایت";
    } else {

        /**/
        /**/ /**/

        let formData = new FormData();
        formData.append("photo", file);
        fetch('/upload/image/uplder.php?format=' + allowformat + '&filename=' + fille_name, {
            credentials: "include",
            method: "POST",
            body: formData
        }).then(
            response => response.json() // if the response is a JSON object
        ).then(
            success => success_upld(success, id_of, figcaption_id, innput_id, fille_name, size) // Handle the success response object
        ).catch(
            error => fail_upld(error, id_of, figcaption_id, innput_id, fille_name, size) // Handle the error response object
        );

        /**/
        /**/ /**/

    }

}

function success_upld(success, id_of, figcaption_id, innput_id, fille_name) {
    var element = document.getElementById(id_of);

    if (success.status == '1') {
        document.getElementById(figcaption_id).innerHTML = "";
        document.getElementById(innput_id).value = fille_name;
        element.classList.remove('alert-danger');
        element.classList.add('alert-success');
    } else {
        document.getElementById(figcaption_id).innerHTML = success.status;
        setTimeout(function () {
            document.getElementById(id_of).remove();
        }, 9000);

    }

}

function fail_upld(error, id_of, figcaption_id, innput_id, fille_name) {
    var element = document.getElementById(id_of);
    document.getElementById(figcaption_id).innerHTML = "آپلود نشد - این فیلد بعد از 9 ثانیه حذف میشود";

    setTimeout(function () {
        document.getElementById(id_of).remove();
    }, 9000);

}




function calc_what_name_db(input) {
    if (typeof store.count == 'undefined') {
        setVar('count', -1);
    }

    var export_a, export_b;
    if (input.includes("combine_img")) {
        setVar('count', store.count + 1);
        export_a = "img_" + store.count;
    } else {
        export_a = input;
    }

    return export_a;
}



function percent_c_js(param, param2, placeit, makee) {
    var param_value, param2_value;
    if (makee == 1) {
        param_value = document.getElementById(param).value;
        document.getElementById(param2).value = param_value;
    }
    param_value = document.getElementById(param).value;
    if (param_value == "") {
        document.getElementById(param).value = 0;
        param_value = 0;
    }
    if (param2_value == "") {
        document.getElementById(param2).value = 0;
        param2_value = 0;
    }
    param2_value = document.getElementById(param2).value;

    var param3 = ((param_value - param2_value) / param_value) * 100;
    do_msg(param3);

    document.getElementById(placeit).value = Math.round(param3);
}


function percent_d_js(param, param2, placeit) {
    var placeit_value = document.getElementById(placeit).value;
    var param_value = document.getElementById(param).value;


    param2_value = param_value - ((placeit_value / 100) * param_value);


    document.getElementById(param2).value = Math.round(param2_value);
    do_msg(placeit_value);

}


function do_msg(param3) {
    var do_msg = document.getElementById("do_msg");
    var s_i_c_i_m = document.getElementById("submit_id_control_in_msg");
    var stop_it;

    if (param3 > 75) {

        if (do_msg != null) {
            do_msg.innerHTML = "مجاز به انتخاب بیشتر از 75 درصد تخفیف نیستید";
            stop_it = 1;
        }

    } else {
        if (do_msg != null) {
            do_msg.innerHTML = " شما <span class='h2'> " + Math.round(param3) + "٪ </span>تخفیف مشخص کردید . ";
            stop_it = 0;
        }
    }
    if (param3 < 0) {
        do_msg.innerHTML = "نباید قیمت (بعد از تخفیف) بزرگ تر از (قیمت اصلی) باشد - چون درصد منفی میشود";
        stop_it = 1;
    }

    if (s_i_c_i_m != null) {
        if (stop_it == 1) {
            s_i_c_i_m.style.display = 'none';

        } else {
            s_i_c_i_m.style.display = 'block';

        }
    }

}

function getvaluefrominput(idname) {
    var msgbox;

    var textcontent;
    var e = document.getElementById(idname);

    textcontent = e.value;
    msgbox = e.placeholder;

    if (!textcontent) {

        document.getElementById("dear_app").innerHTML = "  &#1066;&#1031;&#1064;&#1030;&#1067;&#1034;&#1065;†&#1065;‡  " + msgbox + "  &#1064;±&#1064;§ &#1065;&#1026;&#1064;§&#1064;±&#1064;&#1031; &#1066;©&#1065;†&#1067;&#1034;&#1064;&#1031; ";

        setVar('run_executer', '0');
    } else {

        setVar('run_executer', '1');
    }

    return textcontent;

}


function showthisfromid(idname) {

    document.getElementById(idname).style.display = "block";

}



function if_hide_show(elementid) {

    var x = document.getElementById(elementid);
    if (window.getComputedStyle(x).display === "none") {
        x.style.display = "block";
    }

}
function if_show_hide(elementid) {

    var x = document.getElementById(elementid);

    if (x.style.display === "block") {
        x.style.display = "none";

    }

}





function findGetParameter(parameterName) {
    var result = null,
        tmp = [];
    var items = location.search.substr(1).split("&");
    for (var index = 0; index < items.length; index++) {
        tmp = items[index].split("=");
        if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
    }
    return result;
}





function dashboard_home(param) {
    // number 1
    setVar('run_executer', '1');
    get_https(index_api_url + "?q=" + param);


}












function data_items(param) {


    alert(param);

}







function readFile(input) {
    let file = input.files[0];
    var vagr;
    if (/\.(jpe?g|png|gif)$/i.test(file.name) && file.size < 5000001) {
        let reader = new FileReader();

        reader.readAsText(file);

        reader.onload = function () {
            vagr = encodeURIComponent(reader.result);

            console.log(vagr);

        };

        reader.onerror = function () {
            vagr = reader.error;

        };
    } else {

        vagr = "file or format problem";
        console.log(vagr);
    }

    return vagr;
}

function getSecondPart(str) {
    return str.split('-')[1];
}

function form_submit(formname) {

    gather_form(formname, arguments.callee.name);
}

function funca() {
    jalaliDatepicker.startWatch({
        separatorChar: "/",
        minDate: "attr",
        maxDate: "attr",
        changeMonthRotateYear: true,
        showTodayBtn: true,
        showEmptyBtn: true
    });
}

/*

var timeout;
var dearappelement = document.getElementById('dear_app').innertext;
if (dearappelement == "") {
    timeout = 10000;
} else {
    timeout = 6000;
}
*/

function get_https_2(whatfor, datastring, whatafterrun, whatafterrun_2, uuu, ppp) {


    fetch(store.devicePlatform + '/' + whatfor, {
        method: 'POST',

        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            'username': uuu,
            'password': ppp,
            'hash': getOption("hash"),
            'datacontent': datastring,
            'o_db': getOption('o_db')
        }),
    })
        .then((res) => res.json())
        .then((data) => {

            window[whatafterrun](data, whatafterrun_2);

            closeModal();



        })
        .catch((err) => get_error(store.devicePlatform + '/' + whatfor, err));
}


function get_https(whatfor, stop, whatafterrun, whatafterrun_2, timetodo, uuu, ppp) {


    if (typeof timetodo == 'undefined') {
        timetodo = 1;
    }

    timetodo = timetodo + 1;


    const controller = new AbortController();
    const signal = controller.signal;
    var timeout;
    var dearappelement = document.getElementById('dear_app').innertext;


    if (typeof dearappelement == "undefined") {
        timeout = 10000;
    } else {
        timeout = 6000;
    }


    const myTimeout = setTimeout(() => controller.abort(), timeout);






    appendd(whatfor, stop, htcss(window.location.href));
    loading();
    fetch(store.devicePlatform + '/' + whatfor + "&timetodo=" + timetodo, {
        method: 'POST',
        signal: signal,
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            'username': uuu,
            'password': ppp,
            'hash': getOption("hash"),
            'o_db': getOption('o_db')
        }),
    })
        .then((res) => res.json())
        .then((data) => {

            if (stop != 1) {

                window[whatafterrun](data, whatafterrun_2);

                closeModal();
                clearTimeout(myTimeout);


            } else {
                clear_loading();
            }
        })
        .catch((status, err) => fail_req(status, err, signal, myTimeout, whatfor, stop, whatafterrun, whatafterrun_2, timetodo));


}

function check_https(whatfor, uuu, ppp) {


    fetch(store.devicePlatform + '/' + whatfor, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            'username': uuu,
            'hash': getOption("hash"),
            'password': ppp
        }),
    })
        .then((res) => res.json()
        )
        .then((data) => {

            do_onstart(data);

        })
        .catch((res) => get_error(store.devicePlatform + '/' + whatfor));





}

