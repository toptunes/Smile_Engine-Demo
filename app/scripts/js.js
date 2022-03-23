										 

Vue.config.silent = true;
Vue.config.devtools = false;
Vue.config.performance = false;

window.appFrames = {};

window.appViews = {};

window.appViews.view1 = Vue.component("view1", function (resolve, reject) {
  jQuery.get("/app/views/html/mohammad_norouzi_app.php", function (response) {
    resolve({
      props: ["app"],
      template: response,
      data: function () {
        return {
          name: "view1",
          classes: "",
          transitionName: "",
          transitionMode: "",
          inAnimation: "",
          outAnimation: "",
          event: null,
          loginbtn: {
            name: "loginbtn",
            classes: "",
            size: "sm",
            title: "",
            tabIndex: 0,
            text: "button1",
            kind: "primary",
            outline: false,
            active: false,
            leftIcon: "",
            rightIcon: "",
            leftBadge: "",
            leftBadgeKind: "light",
            leftBadgePilled: false,
            rightBadge: "",
            rightBadgeKind: "light",
            rightBadgePilled: false,
            hidden: false,
            disabled: false,
            event: null,
            blurHandler: function () {},
            focusHandler: function () {},
            clickHandler: function () {},
            dblclickHandler: function () {},
            mouseupHandler: function () {},
            mousedownHandler: function () {},
            mousemoveHandler: function () {},
            mouseenterHandler: function () {},
            mouseleaveHandler: function () {},
            contextmenuHandler: function () {}
          },

          username: {
            name: "username",
            type: "text",
            value: "input1",
            size: "sm",
            classes: "",
            title: "",
            placeholder: "",
            tabIndex: 0,
            readonly: false,
            hidden: false,
            disabled: false,
            event: null,
            changeHandler: function () {},
            cutHandler: function () {},
            copyHandler: function () {},
            pasteHandler: function () {},
            blurHandler: function () {},
            focusHandler: function () {},
            clickHandler: function () {},
            dblclickHandler: function () {},
            keyupHandler: function () {},
            keydownHandler: function () {},
            mouseupHandler: function () {},
            mousedownHandler: function () {},
            mousemoveHandler: function () {},
            mouseenterHandler: function () {},
            mouseleaveHandler: function () {},
            contextmenuHandler: function () {}
          },

          password: {
            name: "password",
            type: "text",
            value: "input2",
            size: "sm",
            classes: "",
            title: "",
            placeholder: "",
            tabIndex: 0,
            readonly: false,
            hidden: false,
            disabled: false,
            event: null,
            changeHandler: function () {},
            cutHandler: function () {},
            copyHandler: function () {},
            pasteHandler: function () {},
            blurHandler: function () {},
            focusHandler: function () {},
            clickHandler: function () {},
            dblclickHandler: function () {},
            keyupHandler: function () {},
            keydownHandler: function () {},
            mouseupHandler: function () {},
            mousedownHandler: function () {},
            mousemoveHandler: function () {},
            mouseenterHandler: function () {},
            mouseleaveHandler: function () {},
            contextmenuHandler: function () {}
          },

          executer: {
            name: "executer",
            data: {},
            headers: {},
            method: "POST",
            timeout: 0,
            userName: "",
            password: "",
            cache: false,
            contentType: "application/json",
            responseType: "",
            url: "",
            event: null,
            response: null,
            statusCode: null,
            textStatus: null,
            request: null,
            errorThrown: null,
            execute: function () {
              $.ajax({
                url: this.url,
                processData: false,
                cache: this.cache,
                method: this.method,
                headers: this.headers,
                timeout: this.timeout,
                username: this.userName,
                password: this.password,
                contentType: this.contentType,
                xhrFields: {
                  responseType: this.responseType
                },
                data: app._transformHttpRequest(this)
              })
              .fail(this.fail_handler)
              .done(this.done_handler);
            },
            setHeader: function (name, value) {
              this.headers[name] = value;
            },
            done_handler: function (response, textStatus, request) {
              var
                view = app._getCurrentView(),
                views = app._getLoadedViews(),
                frames = app._getLoadedFrames(),
                dialogs = app._getLoadedDialogs(),
                self = view.executer;
              self.response = response;
              self.textStatus = textStatus;
              self.statusCode = request.status;
              self.request = request;

do_after_done(views.view1.executer.response);

            },
            fail_handler: function (request, textStatus, errorThrown) {
              var
                view = app._getCurrentView(),
                views = app._getLoadedViews(),
                frames = app._getLoadedFrames(),
                dialogs = app._getLoadedDialogs(),
                self = view.executer;
              self.request = request;
              self.textStatus = textStatus;
              self.errorThrown = errorThrown;
              self.statusCode = request.status;



            }
          },

        };
      },
      activated: function () {
        var
          view = this,
          self = this,
          views = app._getLoadedViews(),
          frames = app._getLoadedFrames(),
          dialogs = app._getLoadedDialogs();
        view.event = null;
        app._setViewEvents(this);



app.check_https("plt.php"+"?q=mas");






      },
      deactivated: function () {
        var
          view = this,
          self = this,
          views = app._getLoadedViews(),
          frames = app._getLoadedFrames(),
          dialogs = app._getLoadedDialogs();
        view.event = null;

      },
      methods: {
        clickHandler: function (event) {
          var
            view = this,
            self = this,
            views = app._getLoadedViews(),
            frames = app._getLoadedFrames(),
            dialogs = app._getLoadedDialogs();
          view.event = event;

        },
        dblclickHandler: function (event) {
          var
            view = this,
            self = this,
            views = app._getLoadedViews(),
            frames = app._getLoadedFrames(),
            dialogs = app._getLoadedDialogs();
          view.event = event;

        },
        mouseupHandler: function (event) {
          var
            view = this,
            self = this,
            views = app._getLoadedViews(),
            frames = app._getLoadedFrames(),
            dialogs = app._getLoadedDialogs();
          view.event = event;

        },
        mousedownHandler: function (event) {
          var
            view = this,
            self = this,
            views = app._getLoadedViews(),
            frames = app._getLoadedFrames(),
            dialogs = app._getLoadedDialogs();
          view.event = event;

        },
        mousemoveHandler: function (event) {
          var
            view = this,
            self = this,
            views = app._getLoadedViews(),
            frames = app._getLoadedFrames(),
            dialogs = app._getLoadedDialogs();
          view.event = event;

        },
        mouseenterHandler: function (event) {
          var
            view = this,
            self = this,
            views = app._getLoadedViews(),
            frames = app._getLoadedFrames(),
            dialogs = app._getLoadedDialogs();
          view.event = event;

        },
        mouseleaveHandler: function (event) {
          var
            view = this,
            self = this,
            views = app._getLoadedViews(),
            frames = app._getLoadedFrames(),
            dialogs = app._getLoadedDialogs();
          view.event = event;

        },
        contextmenuHandler: function (event) {
          var
            view = this,
            self = this,
            views = app._getLoadedViews(),
            frames = app._getLoadedFrames(),
            dialogs = app._getLoadedDialogs();
          view.event = event;

        },
        swipeRightHandler: function (event) {
          var
            view = this,
            self = this,
            views = app._getLoadedViews(),
            frames = app._getLoadedFrames(),
            dialogs = app._getLoadedDialogs();
          view.event = event;

        },
        swipeLeftHandler: function (event) {
          var
            view = this,
            self = this,
            views = app._getLoadedViews(),
            frames = app._getLoadedFrames(),
            dialogs = app._getLoadedDialogs();
          view.event = event;

        }
      }
    });
  });
});

Vue.filter('uppercase', function (value) {
  if (value) {
    value = value.toString();
    return value.toUpperCase();
  }
});

Vue.filter('lowercase', function (value) {
  if (value) {
    value = value.toString();
    return value.toLowerCase();
  }
});

window.appStore = new Vuex.Store({
  state: {}
});

window.app = new Vue({

  router: new VueRouter({routes: [
    
    { path: '/view1', alias: '*', name: 'view1', component: window.appViews.view1, props: function (route) { app.query = $.isEmptyObject(route.query) ? false : route.query; } }
  ],
 mode: 'history'
}),

  created: function () {
    this._setupAppHtml();
    this._setupAppEvents();
    this._setupAppDialogs();
    this._setupAppVariables();
    this._setupAppPlugins();
    this._setupCordovaPlugins();
  },

  mounted: function () {
    var
      app = this;

    app.setVar('devicePlatform', '/app/views/html');


  },





  data: function () {

    return {
      event: null,
      error: null,

      
      id: "com.toptunes.abyekiha",
      version: "1.0.0",
      name: "abyekiha system",
      shortName: "Zomar",
      description: "Zomar system",
      authorName: "Mohammad norouzi",
      authorEmail: "Mohammad norouzi",
      authorUrl: "https://toptunes.ir/",
      language: "fa",
      languageName: "Persian",
      textDirection: "rtl",
      style: "fixed",
      buildNumber: 42,
      theme: "default",
      themes: ["default"],
      sidebar: {
        item: {
          index: -1,
          subindex: -1
        },
        header: "",
        direction: "left",
        headerKind: "none",
        headerAlign: "left",
        imageUrl: "",
        items: [],
        itemClickHandler: this._appEventOnSidebarItemClick,
        headerClickHandler: this._appEventOnSidebarHeaderClick
      },
      alert: {
        body: "",
        kind: "",
        title: "",
        buttons: [],
        closeCallback: function () {}
      },
      internal: {
        dialogs: [],
        lastSound: null,
        activeDialog: null,
        dabdialogs: [],
        defaultLanguage: "fa",
      },
    };
  },

  computed: {
    
    store: function () {
      return window.appStore.state;
    },
    
    viewTransitionName: function () {
      return app._getCurrentView().transitionName !== '' ? 'name' : null;
    },
    
    viewTransitionMode: function () {
      return app._getCurrentView().transitionMode !== '' ? 'mode' : null;
    },
    
    viewInAnimation: function () {
      return app._getCurrentView().inAnimation !== '' ? 'enter-active-class' : null;
    },
    
    viewOutAnimation: function () {
      return app._getCurrentView().outAnimation !== '' ? 'leave-active-class' : null;
    }    
  },

  methods: {

    // Public app variables related methods

    setVar: function (varName, varValue) {
      this.$set(this.store, varName, varValue);
    },

    // Public app views related methods

    showView: function (viewName) {
      this.$router.push(viewName);



    },

    replaceView: function (viewName) {
      this.$router.replace(viewName);
    },

    // Public app dialogs related methods

    showDialog: function (dialogName) {
      $('#' + dialogName).modal({backdrop:
       'static', keyboard: false});
    },

    hideDialog: function (dialogName) {
      $('#' + dialogName).modal('hide');
    },

    hideDialogs: function () {
      $('.app-dialog.modal').modal('hide');
    },
	
	// Public app alert related methods
	
	showAlert: function (body, title, kind, buttons, closeCallback) {
		
      app.alert.kind = kind || '';
      app.alert.title = title || '';
      app.alert.body = body || '';
      app.alert.buttons = buttons || false;
      app.alert.closeCallback = closeCallback || function () {};		
	  
	  $('#dab-alert-modal').on('hidePrevented.bs.modal', function (e) {
        
		// TODO: https://github.com/twbs/bootstrap/issues/31615
		Object.assign(e, { defaultPrevented: true });
        e.preventDefault()		  
		
		if (!app.alert.buttons || app.alert.buttons.length === 0) {
	      $('#dab-alert-modal').modal('hide');	  			
		}  
	  });
	  
      window.setTimeout(function () {
	    $('#dab-alert-modal').modal('show');		  
	  }, 10); 	
	},	
	
	hideAlert: function () {
	  $('#dab-alert-modal').modal('hide');	
	},
	
	// Public app sidebar related methods
	
	showSidebar: function () {
      $('#dab-sidebar').addClass('active');
      $('#dab-sidebar-overlay').addClass('active');		
	},
	
	hideSidebar: function () {
      $('#dab-sidebar').removeClass('active');
      $('#dab-sidebar-overlay').removeClass('active');		
	},	
	
 	sidebarIsVisible: function () {
      return $('#dab-sidebar').hasClass('active');		
	},
	
 	sidebarSetDirection: function (direction) {
	  if (app.sidebar.direction === direction) {
	    return app.sidebar.direction;	  
	  }		  
      app.sidebar.direction = direction;
      if (direction === 'right') {
        var 
          css = '#dab-sidebar { left: initial; right: -280px; }\
		         #dab-sidebar.active { left: initial; right: 0; }',
          style = document.createElement('style');
        document.head.appendChild(style);
        style.type = 'text/css';
	    style.id = 'sidebar-stylesheet';
        style.appendChild(document.createTextNode(css));		
	  } else {
	    if ($('#sidebar-stylesheet').length > 0) {
          $('#sidebar-stylesheet').remove();
		}	  
	  }
	  return app.sidebar.direction; 
	},	

    // Public app toasts related methods

    showToast: function (text, hideMsecs, kind, title,
     subtitle, clickCallback, dismissCallback, payload) {
      var
        toastId = this.randomStr(),
        toasts = this._getToastsComponent();
      toasts.toasts.push({
        "text": text,
        "id": toastId,
        "title": title || '',
        "kind": kind || 'light',
        "payload": payload || null,
        "subtitle": subtitle || '',
        "clickCallback": clickCallback || function () {},
        "dismissCallback": dismissCallback || function () {}
      });
      if (hideMsecs) {
        window.setTimeout(function () {
          for (var i in toasts.toasts) {
            if (toasts.toasts[i].id === toastId) {
              toasts.toasts.splice(i, 1);
            }
          }
        }, hideMsecs);
      }
      return toastId;
    },

    hideToast: function (toastId) {
      var
        toasts = this._getToastsComponent();
      for (var i in toasts.toasts) {
        if (toasts.toasts[i].id === toastId) {
          toasts.toasts.splice(i, 1);
        }
      }
    },

    hideToasts: function () {
      var
        toasts = this._getToastsComponent();
      toasts.toasts = [];
    },


















    getToast: function (toastId) {
      var
        toasts = this._getToastsComponent();
      for (var i in toasts.toasts) {
        if (toasts.toasts[i].id === toastId) {
          return toasts.toasts[i];
        }
      }
      return null;
    },

    getToasts: function () {
      var
        toasts = this._getToastsComponent();
      return toasts.toasts;
    },
	
	// Public app local storage related methods
	
	setOption: function (key, value) {
      return localStorage.setItem(key, value);		
	},
	
	getOption: function (key, defaultValue) {
      return localStorage.getItem(key) !== null ? 
	   localStorage.getItem(key) : defaultValue;		
	},

	removeOption: function (key) {
      return localStorage.removeItem(key);
	},	
	
	clearOptions: function () {
      return localStorage.clear();
	},		

    // Public app controls related methods

    focusControl: function (controlName) {
      $('#' + controlName).focus();
    },

    // Public app themes related methods

    setAppTheme: function (themeName) {
      var
	    lowerThemeName = themeName.toLowerCase();
	  
      if (this.themes.indexOf(lowerThemeName) === -1) {
	    return false;		  
	  }	  

      this.theme = lowerThemeName;      
      $('#app-theme').attr('href', 'app/styles/' + lowerThemeName + '.css');
	  return lowerThemeName;
    },

    setAppFixedStyle: function () {
      this.style = 'fixed';
      $('#app-style').attr('href', 'app/styles/fixed.css');
    },

    setAppScaledStyle: function () {
      this.style = 'scaled';
      $('#app-style').attr('href', 'app/styles/scaled.css');
    },

    setAppTextDirection: function (textDirection) {
      var
        html = document.getElementsByTagName('html')[0];
      this.textDirection = textDirection;
      html.setAttribute('dir', textDirection);
    },

    // Public app device related methods

    setViewReadyForDeviceKeyboard: function () {
	  var
	    self = this;
      document.addEventListener('deviceready', function () {
        $('#' + self._getCurrentView().name).css({
          "margin-top": '0px',
          "height": window.innerHeight + 'px'
        });		  
	  });	
    },
	
    setDialogReadyForDeviceKeyboard: function () {
	  var
	    self = this;
      document.addEventListener('deviceready', function () {
        $('#' + self._getCurrentView().name + ' .modal-content').css({
          "margin-top": '0px',
          "height": window.innerHeight + 'px'
        });		  
	  });	
    },	

    // Public app Web Extensions related methods

    webExtensionSendMessageToActiveTab: function (message, callback) {
      if (window.chrome) {
        chrome.tabs.query({active: true, currentWindow: true}, function (tabs) {
          chrome.tabs.sendMessage(tabs[0].id, message, callback);
        });
      }
    },
	
    webExtensionSendMessageToAllTabs: function (message, callback) {
      if (window.chrome) {
        chrome.tabs.query({}, function(tabs) {
          for (var i=0; i<tabs.length; ++i) {
            chrome.tabs.sendMessage(tabs[i].id, message, callback);
          }
        });
      }
    },	

    // Public app strings related methods

    strLen: function (text) {
      return text.length;
    },

    trimStr: function (text) {
      return text.trim();
    },

    lowerCase: function (text) {
      return text.toLowerCase();
    },

    upperCase: function (text) {
      return text.toUpperCase();
    },

    strSearch: function (text, query) {
      return text.search(query);
    },

    subStr: function (text, start, count) {
      return text.substr(start, count);
    },

    strReplace: function (text, from, to) {
      return text.replace(from, to);
    },

    strReplaceAll: function (text, from, to) {
      return text.split(from).join(to);
    },

    splitStr: function (text, separator, limit) {
      return text.split(separator, limit);
    },

    strToBase64: function (text) {
      return window.Base64.encode(text);
    },

    base64ToStr: function (text) {
      return window.Base64.decode(text);
    },

    serialize: function (value) {
      return JSON.stringify(value);
    },

    unserialize: function (text) {
      return JSON.parse(text);
    },

    randomStr: function (length) {
      var
        result = '',
        length = length || 10,
        charsMap = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',
        mapLength = charsMap.length;
      for (var i = 0; i < length; i++) {
        result += charsMap.charAt(Math.floor(Math.random() * mapLength));
      }
      return result;
    },
	
	// Public app numbers related methods
	
	randomNum: function (maxNum) {
	  maxNum = maxNum || 100;
	  return Math.floor(Math.random() * maxNum);	
	},

    // Public app sound related methods

    beep: function () {
      this.playSound(
        'app/audios/beep/beep.mp3',
        'app/audios/beep/beep.ogg'
      );
    },

    playSound: function (mp3Url, oggUrl) {
      if (this.internal.lastSound === null) {
        this.internal.lastSound = new Audio();
      }
      if (this.internal.lastSound.canPlayType('audio/ogg') !== '') {
        this.internal.lastSound.src = oggUrl;
        this.internal.lastSound.type = 'audio/ogg';
      } else {
        this.internal.lastSound.src = mp3Url;
        this.internal.lastSound.type = 'audio/mpeg';		  
      }
      this.internal.lastSound.play();
	  return this.internal.lastSound;
    },

    stopSound: function () {
      this.internal.lastSound.pause();
      this.internal.lastSound.currentTime = 0;
    },
	
	// Public app resources related methods
	
	resource: function (name) {
      if (!window.appLangs[this.language]) {
        return window.appLangs[this.internal.defaultLanguage].resources[name];
      } else {
        return window.appLangs[this.language]['resources'][name] !== undefined ?
          window.appLangs[this.language]['resources'][name] :
		  window.appLangs[this.internal.defaultLanguage].resources[name];
      }
	},

    // Public app languages related methods

    translateView: function () {
      return this._translateView();
	},
	
	getLanguages: function () {
	  var
	    result = [];
	  for (var i in window.appLangs) {
	    result.push({code: i, name: window.appLangs[i].language.name});	  
	  }  	
	  return result;
	},
	
	getLanguagesNames: function () {
	  var
        result = [];	  
      for (var i in window.appLangs) {
	    result.push(window.appLangs[i].language.name);	  
	  }
	  return result;
	},	
	
	getLanguagesCodes: function () {
	  var
        result = [];	  
      for (var i in window.appLangs) {
	    result.push(i);	  
	  }
	  return result;
	},		
	
	getLanguageCodeFromName: function (name) {
	  var
        result = '';	  
      for (var i in window.appLangs) {
	    if (window.appLangs[i].language.name === name) {
		  result = i;
          break;		  
		}	  
	  }
	  return result;
	},	
	
	getLanguageNameFromCode: function (code) {
	  var
        result = '';	  
      for (var i in window.appLangs) {
	    if (i === code) {
		  result = window.appLangs[i].language.name;
          break;		  
		}	  
	  }
	  return result;
	},

    
    nothing: function () {
      var
        view = this._getCurrentView(),
        views = this._getLoadedViews(),
        frames = this._getLoadedFrames(),
        dialogs = this._getLoadedDialogs();

    },

get_https: function (whatfor,stop,whatafterrun,whatafterrun_2,timetodo,uuu,ppp) {
      var
        view = this._getCurrentView(),
        views = this._getLoadedViews(),
        frames = this._getLoadedFrames(),
        dialogs = this._getLoadedDialogs();

if(typeof timetodo == 'undefined'){
timetodo = 1;
}

timetodo = timetodo+1;

//views.view1.executer.data.pqery = app.store.numberofpage;
//views.view1.executer.data.serial = app.store.serial;
//views.view1.executer.data.isVirtual = app.store.isVirtual;
//views.view1.executer.data.manfufacturer = app.store.manfufacturer;
//views.view1.executer.data.version = app.store.version;
//views.view1.executer.data.uuid = app.store.uuid;
//views.view1.executer.data.model = app.store.model;

/*
views.view1.executer.data.username = uuu;
views.view1.executer.data.password = ppp;

views.view1.executer.url=app.store.devicePlatform+'/'+whatfor;
views.view1.executer.execute();
*/


const controller = new AbortController();
const signal = controller.signal;
var timeout;
var dearappelement = document.getElementById('dear_app').innertext;


if(typeof dearappelement == "undefined"){
timeout = 10000;
}else{
timeout = 6000;
}


const myTimeout = setTimeout(() => controller.abort(), timeout);






appendd(whatfor,stop,htcss(window.location.href));
loading();
fetch(app.store.devicePlatform+'/'+whatfor+"&timetodo="+timetodo, {
  method: 'POST',
  signal: signal,
  headers: { 'Content-Type': 'application/json' },
  body: JSON.stringify({
  'username': uuu,
  'password': ppp,
  'hash': app.getOption("hash"),
  'o_db': app.getOption('o_db')
  }),
})
  .then((res) => res.json())
  .then((data) => {

if(stop!=1){

window[whatafterrun](data,whatafterrun_2);

closeModal();
clearTimeout(myTimeout);


}else{
clear_loading();
}
  })
  .catch((status,err) => fail_req(status,err,signal,myTimeout,whatfor,stop,whatafterrun,whatafterrun_2,timetodo));










    },
    check_https: function (whatfor,uuu,ppp) {
      var
        view = this._getCurrentView(),
        views = this._getLoadedViews(),
        frames = this._getLoadedFrames(),
        dialogs = this._getLoadedDialogs();
//views.view1.executer.data.pqery = app.store.numberofpage;
//views.view1.executer.data.serial = app.store.serial;
//views.view1.executer.data.isVirtual = app.store.isVirtual;
//views.view1.executer.data.manfufacturer = app.store.manfufacturer;
//views.view1.executer.data.version = app.store.version;
//views.view1.executer.data.uuid = app.store.uuid;
//views.view1.executer.data.model = app.store.model;
/*
views.view1.executer.data.username = uuu;
views.view1.executer.data.password = ppp;

views.view1.executer.url=app.store.devicePlatform+'/'+whatfor;
views.view1.executer.execute();
*/

fetch(app.store.devicePlatform+'/'+whatfor, {
  method: 'POST',
  headers: { 'Content-Type': 'application/json' },
  body: JSON.stringify({
  	'username': uuu,
	'hash': app.getOption("hash"),
	'password': ppp
  }),
})
  .then((res) => res.json()
)
  .then((data) => {

do_onstart(data);

  })
  .catch((err) => get_error(app.store.devicePlatform+'/'+whatfor));





    },

    get_https_2: function (whatfor, datastring,whatafterrun,whatafterrun_2,uuu,ppp) {
      var
        view = this._getCurrentView(),
        views = this._getLoadedViews(),
        frames = this._getLoadedFrames(),
        dialogs = this._getLoadedDialogs();

/*
views.view1.executer.data.datacontent = datastring;
views.view1.executer.data.username = uuu;
views.view1.executer.data.password = ppp;

views.view1.executer.url=app.store.devicePlatform+'/'+whatfor;
views.view1.executer.execute();
*/


var timeout;
var dearappelement = document.getElementById('dear_app').innertext;
if(dearappelement == ""){
timeout = 10000;
}else{
timeout = 6000;
}




fetch(app.store.devicePlatform+'/'+whatfor, {
  method: 'POST',
 
  headers: { 'Content-Type': 'application/json' },
  body: JSON.stringify({
'username': uuu,
'password': ppp,
'hash': app.getOption("hash"),
'datacontent': datastring,
'o_db': app.getOption('o_db')
  }),
})
  .then((res) => res.json())
  .then((data) => {

 window[whatafterrun](data,whatafterrun_2);

 closeModal();



  })
  .catch((err) => console.log(err));



    },
	
    // Internal / Private app methods

    _appEventOnResize: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },
	
    _appEventOnMessage: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },		
	
    _appEventOnContextMenu: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },			

    _appEventOnOnline: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventOnOffline: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventOnDomReady: function () {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = null;
      
    },

    _appEventOnBatteryStatus: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = null;
      self.cordova.battery.level = event.level;
      self.cordova.battery.isPlugged = event.isPlugged;
      
    },

    _appEventOnBatteryLow: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = null;
      self.cordova.battery.level = event.level;
      self.cordova.battery.isPlugged = event.isPlugged;
      
    },

    _appEventOnBatteryCritical: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = null;
      self.cordova.battery.level = event.level;
      self.cordova.battery.isPlugged = event.isPlugged;
      
    },

    _appEventOnDeviceReady: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;

      window.addEventListener('online', self._appEventOnOnline);
      window.addEventListener('offline', self._appEventOnOffline);
      window.addEventListener('batterylow', self._appEventOnBatteryLow);
      window.addEventListener('batterystatus', self._appEventOnBatteryStatus);
      window.addEventListener('batterycritical', self._appEventOnBatteryCritical);
      window.addEventListener('orientationchange', self._appEventOnOrientationChange);
      document.addEventListener('pause', self._appEventOnPause);
      document.addEventListener('resume', self._appEventOnResume);
       
       
       
      
    },

    _appEventOnPause: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventOnResume: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventOnBackButton: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventOnOrientationChange: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventOnVolumeUpButton: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventOnVolumeDownButton: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventOnClick: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventOnDblClick: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventSwipeRight: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventSwipeLeft: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventOnKeyUp: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventOnKeyDown: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventOnMouseUp: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventOnMouseDown: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventOnMouseMove: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = event;
      
    },

    _appEventOnChromeRuntimeMessage: function (message) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = null;
      
    },

    _appEventOnVueJsError: function (error, vm, info) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = null;
      self.error = {"message": error, "vm": vm, "info": info};

      
      self.error = null;
    },

    _appEventOnJavascriptError: function (errorMsg, url, lineNumber) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = null;
      self.error = {"message": errorMsg, "url": url, "lineNumber": lineNumber};

      
      self.error = null;
    },

    _appEventViewChange: function (to, from) {
	  if (to.name === from.name) {
	    return;	  
	  }	
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
      self.event = {
        "nextViewName": to.name,
        "prevViewName": from.name
      };
      
    },

    _appEventOnSidebarItemClick: function (event, item, index, subindex) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
	  self.event = event;
      self.sidebar.item = item;
	  self.sidebar.item.index = index;
	  self.sidebar.item.subindex = subindex;
      
    },		
	
    _appEventOnSidebarHeaderClick: function (event) {
      var
        self = this,
        view = app._getCurrentView(),
        views = app._getLoadedViews(),
        frames = app._getLoadedFrames(),
        dialogs = app._getLoadedDialogs();
	  self.event = event;	
      
    },	

    _setupAppEvents: function () {
      this._setupAppErrorsEvents();
      this._setupAppWindowEvents();
      this._setupAppDocumentEvents();
      this._setupAppHammerEvents();
      this._setupAppDeviceEvents();
      this._setupAppRouterEvents();
      this._setupAppChromeEvents();
    },

    _setupAppErrorsEvents: function () {
      Vue.config.errorHandler = this._appEventOnVueJsError;
      window.addEventListener('error', this._appEventOnJavascriptError);
    },

    _setupAppWindowEvents: function () {
      window.addEventListener('resize', this._appEventOnResize);
      window.addEventListener('message', this._appEventOnMessage);
      window.addEventListener('contextmenu', this._appEventOnContextMenu);	  
    },

    _setupAppDocumentEvents: function () {
      var self = this;
      $(self._appEventOnDomReady);
      document.addEventListener('click', this._appEventOnClick);
      document.addEventListener('dblclick', this._appEventOnDblClick);
      document.addEventListener('keyup', this._appEventOnKeyUp);
      document.addEventListener('keydown', this._appEventOnKeyDown);
      document.addEventListener('mouseup', this._appEventOnMouseUp);
      document.addEventListener('mousedown', this._appEventOnMouseDown);
      document.addEventListener('mousemove', this._appEventOnMouseMove);
    },

    _setupAppHammerEvents: function () {
      var
        ha = new Hammer(document.body);
	  ha.get('swipe').set({direction: Hammer.DIRECTION_HORIZONTAL});	
      ha.on('swiperight', this._appEventSwipeRight);
      ha.on('swipeleft', this._appEventSwipeLeft);
    },

    _setupAppDeviceEvents: function () {
      document.addEventListener('deviceready', this._appEventOnDeviceReady);
    },

    _setupAppRouterEvents: function () {
      var
              self = this;
      this.$router.beforeEach(function (to, from, next) {
        next(self._appEventViewChange(to, from));
      });
    },

    _setupAppChromeEvents: function () {
      if (window.chrome && chrome.runtime && chrome.runtime.onMessage) {
        chrome.runtime.onMessage.addListener(
         this._appEventOnChromeRuntimeMessage);
      }
    },

    _getControlByName: function (parent, name) {
      for (var i in parent.$children) {
        if (parent.$children[i].name === '') {
          continue;
        }
        if (name === parent.$children[i].name) {
          return parent.$children[i];
        }
        if (parent.$children[i].$children.length > 0) {
          var
            result = this._getControlByName(parent.$children[i], name);
          if (result && result.name && result.name === name) {
            return result;
          }
        }
      }
    },

    _getCurrentViewControlByName: function (name) {
      return this._getControlByName(this._getCurrentView(), name);
    },

    _getCurrentView: function () {
      if (this.internal.activeDialog !== null) {
        return this.internal.activeDialog;
      }

      for (var i in this.$children) {
        if (this.$route.name === this.$children[i].name) {
          return this.$children[i];
        }
      }
      return null;
    },

    _getLoadedFrames: function () {
      return window.appFrames;
    },

    _getLoadedViews: function () {
      var
        result = [];
      for (var i in this.$children) {
        result[this.$children[i].name] = this.$children[i];
      }
      return result;
    },

    _getLoadedDialogs: function () {
      var
        result = [];
      for (var i in this.internal.dialogs.$children) {
        if (this.internal.dabdialogs.indexOf(this.internal.dialogs.$children[i].$el.id) !== -1) {
          continue;
        }
        result[this.internal.dialogs.$children[i].name] = this.internal.dialogs.$children[i];
      }
      return result;
    },

    _getActiveDialog: function () {
      this.internal.activeDialog = null;
      var
        activeModals = $($('.modal.show').get().reverse());
      if (activeModals.length > 0) {
        for (var i = 0; i < this.internal.dialogs.$children.length; i++) {
          if (this.internal.dabdialogs.indexOf(this.internal.dialogs.$children[i].$el.id) !== -1) {
            continue;
          }
          if (this.internal.dialogs.$children[i].$el.id === $($('.modal.show').get().reverse())[0].id) {
            this.internal.activeDialog = this.internal.dialogs.$children[i];
            break;
          }
        }
      }
      return this.internal.activeDialog;
    },

    _getToastsComponent: function () {
      for (var i in app.internal.dialogs.$children) {
        if (app.internal.dialogs.$children[i].$el.id === 'dab-toasts-wrapper') {
          return app.internal.dialogs.$children[i];
        }
      }
      return null;
    },

    _transformHttpRequest: function (http) {
      if (http.contentType === 'application/json') {
        return JSON.stringify(http.data);
      } else if (http.contentType === 'application/x-www-form-urlencoded') {
        var
          result = [];
        for (var key in http.data) {
          result.push(encodeURIComponent(key) + '=' + encodeURIComponent(http.data[key]));
        }
        return result.join('&');
      } else if (http.contentType === false ||
       http.contentType === 'multipart/form-data') {
        var
          result = new FormData();
        for (var key in http.data) {
          result.append(key, http.data[key]);
        }
        return result;
      } else {
        return http.data;
      }
    },

    _translateFrames: function () {
      for (var frame in window.appFrames) {
        for (var control in window.appFrames[frame]) {
          for (var property in window.appFrames[frame][control]) {
            var
              origProp = property + '_default';
            if (this.language === this.internal.defaultLanguage) {
              if (window.appFrames[frame][control][origProp] !== undefined) {
                window.appFrames[frame][control][property] =
                 window.appFrames[frame][control][origProp];
              }
              continue;
            }
            if (window.appLangs[this.language] && window.appLangs[this.language]['frames'] &&
             window.appLangs[this.language]['frames'][frame] && window.appLangs[this.language]['frames'][frame][control] &&
              window.appLangs[this.language]['frames'][frame][control][property]) {
			   if (window.appFrames[frame][control][origProp] === undefined) { 	  
                 window.appFrames[frame][control][origProp] =
                  window.appFrames[frame][control][property];
			   }
               window.appFrames[frame][control][property] =
                window.appLangs[this.language]['frames'][frame][control][property];
            }
          }
        }
      }
    },
	
	_translateSidebar: function () {
      if (window.appLangs[this.language] && window.appLangs[this.language].sidebar) {
		if (window.appLangs[this.language].sidebar['header'] !== undefined) {
          this.sidebar.header = window.appLangs[this.language].sidebar.header;
		}		
		if (window.appLangs[this.language].sidebar['imageUrl'] !== undefined) {
          this.sidebar.imageUrl = window.appLangs[this.language].sidebar.imageUrl;
		}		
		if (window.appLangs[this.language].sidebar['items'] !== undefined) {
          this.sidebar.items = window.appLangs[this.language].sidebar.items;
		}		
      }	  	  		
	},

    _translateView: function () {
	  var
	    view = this._getCurrentView();
      this._translateFrames();
      this._translateSidebar(); 
      for (var control in view) {
        for (var property in view[control]) {
          var
            origProp = property + '_default';
          if (this.language === this.internal.defaultLanguage) {
            if (view[control][origProp] !== undefined) {
              view[control][property] = view[control][origProp];
            }
            continue;
          }
          if (window.appLangs[this.language] && window.appLangs[this.language]['views'] &&
           window.appLangs[this.language]['views'][view.name] && window.appLangs[this.language]['views'][view.name][control] &&
            window.appLangs[this.language]['views'][view.name][control][property]) {
             if (view[control][origProp] === undefined) {
			   view[control][origProp] = view[control][property];
			 }
             view[control][property] = window.appLangs[this.language]['views'][view.name][control][property];
          }
        }
      }
    },

    _setViewEvents: function (view) {
      if (view._with_event_listeners) {
        return true;
      }
      var
        el = document.getElementById(view.name),
        ha = new Hammer(el);
      el.addEventListener('click', view.clickHandler);
      el.addEventListener('dblclick', view.dblclickHandler);
      el.addEventListener('mouseup', view.mouseupHandler);
      el.addEventListener('mousedown', view.mousedownHandler);
      el.addEventListener('mousemove', view.mousemoveHandler);
      el.addEventListener('mouseenter', view.mouseenterHandler);
      el.addEventListener('mouseleave', view.mouseleaveHandler);
      el.addEventListener('contextmenu', view.contextmenuHandler);
	  ha.get('swipe').set({direction: Hammer.DIRECTION_HORIZONTAL});
      ha.on('swiperight', view.swipeRightHandler);
      ha.on('swipeleft', view.swipeLeftHandler);
      view._with_event_listeners = true;
    },

    _setupAppHtml: function () {
      var
        html = document.getElementsByTagName('html')[0],
        title = document.getElementsByTagName('title')[0];
      title.innerText = this.name;
      html.setAttribute('dir', this.textDirection);
      html.setAttribute('lang', this.language);
    },

    _setupAppDialogs: function () {
      var
        app = this;
      $(function () {
        app.internal.dialogs = new Vue().$mount('#dialogs');
      });
    },

    _setupAppVariables: function () {
	  this.query = false;
      this.navbarStyle = {dark: 'dark', light: 'light'};
      this.size = {sm: 'sm', md: 'md', lg: 'lg', xl: 'xl'};
      this.tableStyle = {none: '', dark: 'dark', light: 'light'};
	  this.align = {left: "left", center: "center", right: "right"};
      this.dropdownItem = {item: 'item', header: 'header', divider: 'divider'};
      this.dropdownDir = {up: 'dropup', down: 'dropdown', left: 'dropleft', right: 'dropright'};
      this.httpMethod = {get: 'GET', post: 'POST', put: 'PUT', head: 'HEAD', "delete": 'DELETE'};
      this.navbarPos = {fixedTop: 'fixed-top', fixedBottom: 'fixed-bottom', stickyTop: 'sticky-top'};
      this.imageFit = {fill: 'fill', none: 'none', cover: 'cover', revert: 'revert', contain: 'contain', scaleDown: 'scale-down'};
      this.kind = {link: 'link', dark: 'dark', info: 'info', light: 'light', danger: 'danger', primary: 'primary', warning: 'warning', success: 'success', secondary: 'secondary'};
      this.inAnimation = {bounceIn: 'bounceIn', bounceInDown: 'bounceInDown', bounceInLeft: 'bounceInLeft', bounceInRight: 'bounceInRight', bounceInUp: 'bounceInUp', fadeIn: 'fadeIn', fadeInDown: 'fadeInDown', fadeInDownBig: 'fadeInDownBig', fadeInLeft: 'fadeInLeft', fadeInLeftBig: 'fadeInLeftBig', fadeInRight: 'fadeInRight', fadeInRightBig: 'fadeInRightBig', fadeInUp: 'fadeInUp', fadeInUpBig: 'fadeInUpBig', fadeInTopLeft: 'fadeInTopLeft', fadeInTopRight: 'fadeInTopRight', fadeInBottomLeft: 'fadeInBottomLeft', fadeInBottomRight: 'fadeInBottomRight', flipInX: 'flipInX', flipInY: 'flipInY', lightSpeedIn: 'lightSpeedIn', lightSpeedInRight: 'lightSpeedInRight', lightSpeedInLeft: 'lightSpeedInLeft', rollIn: 'rollIn', rotateIn: 'rotateIn', rotateInDownLeft: 'rotateInDownLeft', rotateInDownRight: 'rotateInDownRight', rotateInUpLeft: 'rotateInUpLeft', rotateInUpRight: 'rotateInUpRight', zoomIn: 'zoomIn', zoomInDown: 'zoomInDown', zoomInLeft: 'zoomInLeft', zoomInRight: 'zoomInRight', zoomInUp: 'zoomInUp', bounce: 'bounce', flash: 'flash', pulse: 'pulse', rubberBand: 'rubberBand', shake: 'shake', swing: 'swing', tada: 'tada', wobble: 'wobble', jello: 'jello'};
      this.outAnimation = {bounceOut: 'bounceOut', bounceOutDown: 'bounceOutDown', bounceOutLeft: 'bounceOutLeft', bounceOutRight: 'bounceOutRight', bounceOutUp: 'bounceOutUp', fadeOut: 'fadeOut', fadeOutDown: 'fadeOutDown', fadeOutDownBig: 'fadeOutDownBig', fadeOutLeft: 'fadeOutLeft', fadeOutLeftBig: 'fadeOutLeftBig', fadeOutRight: 'fadeOutRight', fadeOutRightBig: 'fadeOutRightBig', fadeOutUp: 'fadeOutUp', fadeOutUpBig: 'fadeOutUpBig', fadeOutTopLeft: 'fadeOutTopLeft', fadeOutTopRight: 'fadeOutTopRight', fadeOutBottomRight: 'fadeOutBottomRight', fadeOutBottomLeft: 'fadeOutBottomLeft', flipOutX: 'flipOutX', flipOutY: 'flipOutY', lightSpeedOut: 'lightSpeedOut', lightSpeedOutRight: 'lightSpeedOutRight', lightSpeedOutLeft: 'lightSpeedOutLeft', rollOut: 'rollOut', rotateOut: 'rotateOut', rotateOutDownLeft: 'rotateOutDownLeft', rotateOutDownRight: 'rotateOutDownRight', rotateOutUpLeft: 'rotateOutUpLeft', rotateOutUpRight: 'rotateOutUpRight', slideOutUp: 'slideOutUp', slideOutDown: 'slideOutDown', slideOutLeft: 'slideOutLeft', slideOutRight: 'slideOutRight', zoomOut: 'zoomOut', zoomOutDown: 'zoomOutDown', zoomOutLeft: 'zoomOutLeft', zoomOutRight: 'zoomOutRight', zoomOutUp: 'zoomOutUp', backOutDown: 'backOutDown', backOutLeft: 'backOutLeft', backOutRight: 'backOutRight', backOutUp: 'backOutUp', bounce: 'bounce', flash: 'flash', pulse: 'pulse', rubberBand: 'rubberBand', shake: 'shake', swing: 'swing', tada: 'tada', wobble: 'wobble', jello: 'jello', hinge: 'hinge'};
    },
	
	_setupAppPlugins: function () {
      var
        app = this;		
      this.plugins = {};       		
	  
	},

    _setupCordovaPlugins: function () {
      var
        app = this;
      this.cordova = {};
      
    }
  }
})





  






.$mount('#app');
